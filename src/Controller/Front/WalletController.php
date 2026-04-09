<?php

namespace App\Controller\Front;

use App\Entity\User\User;
use App\Entity\Wallet\Cheque;
use App\Entity\Wallet\Transaction;
use App\Entity\Wallet\Wallet;
use App\Form\Front\ChequeRequestType;
use App\Form\Front\WalletTransactionType;
use App\Security\KycAccessChecker;
use App\Security\RiskAccessChecker;
use App\Service\KycService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\Form\FormError;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_CLIENT')]
#[Route('/espace-client/wallet', name: 'front_wallet_')]
class WalletController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly KycAccessChecker $kycAccessChecker,
        private readonly RiskAccessChecker $riskAccessChecker,
        private readonly KycService $kycService,
    ) {}

    #[Route('', name: 'dashboard', methods: ['GET'])]
    public function dashboard(): Response
    {
        $user = $this->getAuthenticatedUser();

        if ($redirect = $this->guardWalletAccess($user)) {
            return $redirect;
        }

        $wallet = $this->findWalletForUser($user);

        if (!$wallet instanceof Wallet) {
            return $this->render('front/client/wallet/dashboard.html.twig', [
                'wallet' => null,
                'transactionCount' => 0,
                'chequeCount' => 0,
                'latestTransactions' => [],
                'latestCheques' => [],
            ]);
        }

        return $this->render('front/client/wallet/dashboard.html.twig', [
            'wallet' => $wallet,
            'transactionCount' => $this->countTransactionsForWallet($wallet),
            'chequeCount' => $this->countChequesForWallet($wallet),
            'latestTransactions' => $this->getLatestTransactions($wallet, 5),
            'latestCheques' => $this->getLatestCheques($wallet, 5),
        ]);
    }

    #[Route('/details', name: 'show', methods: ['GET'])]
    public function show(): Response
    {
        $user = $this->getAuthenticatedUser();

        if ($redirect = $this->guardWalletAccess($user)) {
            return $redirect;
        }

        $wallet = $this->requireWalletForUser($user);
        if ($wallet instanceof Response) {
            return $wallet;
        }

        return $this->render('front/client/wallet/show.html.twig', [
            'wallet' => $wallet,
            'transactions' => $this->getLatestTransactions($wallet, 20),
            'cheques' => $this->getLatestCheques($wallet, 20),
            'transactionCount' => $this->countTransactionsForWallet($wallet),
            'chequeCount' => $this->countChequesForWallet($wallet),
        ]);
    }

    #[Route('/transactions', name: 'transactions', methods: ['GET'])]
    public function transactions(Request $request): Response
    {
        $user = $this->getAuthenticatedUser();

        if ($redirect = $this->guardWalletAccess($user)) {
            return $redirect;
        }

        $wallet = $this->requireWalletForUser($user);
        if ($wallet instanceof Response) {
            return $wallet;
        }

        $filters = [
            'type' => trim((string) $request->query->get('type', '')),
            'date_from' => trim((string) $request->query->get('date_from', '')),
            'date_to' => trim((string) $request->query->get('date_to', '')),
        ];

        $page = max(1, (int) $request->query->get('page', 1));
        $perPage = 12;

        $qb = $this->createTransactionQueryBuilder($wallet, $filters)
            ->orderBy('t.dateTransaction', 'DESC');

        $countQb = clone $qb;
        $total = (int) $countQb
            ->select('COUNT(t.idTransaction)')
            ->resetDQLPart('orderBy')
            ->getQuery()
            ->getSingleScalarResult();

        $pages = max(1, (int) ceil($total / $perPage));
        $page = min($page, $pages);

        /** @var Transaction[] $transactions */
        $transactions = $qb
            ->setFirstResult(($page - 1) * $perPage)
            ->setMaxResults($perPage)
            ->getQuery()
            ->getResult();

        return $this->render('front/client/wallet/transactions.html.twig', [
            'wallet' => $wallet,
            'transactions' => $transactions,
            'filters' => $filters,
            'pagination' => [
                'page' => $page,
                'pages' => $pages,
                'total' => $total,
                'perPage' => $perPage,
            ],
        ]);
    }

    #[Route('/transactions/nouvelle', name: 'transaction_new', methods: ['GET', 'POST'])]
    public function newTransaction(Request $request): Response
    {
        $user = $this->getAuthenticatedUser();

        if ($redirect = $this->guardWalletAccess($user)) {
            return $redirect;
        }

        $wallet = $this->requireWalletForUser($user);
        if ($wallet instanceof Response) {
            return $wallet;
        }

        if ($wallet->getEstBloque()) {
            $this->addFlash('error', 'Votre wallet est bloque. Impossible d effectuer une transaction pour le moment.');

            return $this->redirectToRoute('front_wallet_transactions');
        }

        $transaction = new Transaction();
        $form = $this->createForm(WalletTransactionType::class, $transaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $type = mb_strtolower(trim($transaction->getType()));
            $montant = round($transaction->getMontant(), 2);
            $soldeActuel = round((float) $wallet->getSolde(), 2);

            if (!in_array($type, ['depot', 'retrait', 'transfert'], true)) {
                $form->get('type')->addError(new FormError('Le type de transaction selectionne est invalide.'));
            }

            if ($type !== 'depot' && $montant > $soldeActuel) {
                $form->get('montant')->addError(new FormError('Solde insuffisant pour effectuer cette operation.'));
            }

            if ($form->isValid()) {
                $nouveauSolde = $type === 'depot'
                    ? $soldeActuel + $montant
                    : $soldeActuel - $montant;

                $description = trim((string) $transaction->getDescription());

                $transaction
                    ->setType($type)
                    ->setMontant($montant)
                    ->setDescription($description !== '' ? $description : null)
                    ->setWallet($wallet)
                    ->setIdWallet($wallet->getIdWallet())
                    ->setDateTransaction(new \DateTime());

                $wallet->setSolde(number_format($nouveauSolde, 2, '.', ''));

                $this->entityManager->persist($transaction);
                $this->entityManager->flush();

                $this->addFlash('success', 'La transaction a ete enregistree avec succes.');

                return $this->redirectToRoute('front_wallet_transactions');
            }
        }

        return $this->render('front/client/wallet/transaction_new.html.twig', [
            'wallet' => $wallet,
            'form' => $form,
        ]);
    }

    #[Route('/cheques/demande', name: 'cheque_request', methods: ['GET', 'POST'])]
    public function requestCheque(Request $request): Response
    {
        $user = $this->getAuthenticatedUser();

        if ($redirect = $this->guardWalletAccess($user)) {
            return $redirect;
        }

        $wallet = $this->requireWalletForUser($user);
        if ($wallet instanceof Response) {
            return $wallet;
        }

        if ($wallet->getEstBloque()) {
            $this->addFlash('error', 'Votre wallet est bloque. Impossible de demander un chequier pour le moment.');

            return $this->redirectToRoute('front_wallet_dashboard');
        }

        $cheque = new Cheque();
        $form = $this->createForm(ChequeRequestType::class, $cheque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->hasDuplicatePendingCheque($wallet, $cheque)) {
                $this->addFlash('warning', 'Une demande similaire est deja en attente pour ce wallet.');

                return $this->redirectToRoute('front_wallet_cheques');
            }

            $cheque
                ->setWallet($wallet)
                ->setIdWallet($wallet->getIdWallet())
                ->setNumeroCheque($this->generateChequeNumber($wallet))
                ->setDateEmission(new \DateTime())
                ->setStatut('en_attente')
                ->setMotifRejet(null)
                ->setDatePresentation(null);

            $this->entityManager->persist($cheque);
            $this->entityManager->flush();

            $this->addFlash('success', 'Votre demande de chequier a ete enregistree avec succes.');

            return $this->redirectToRoute('front_wallet_cheques');
        }

        return $this->render('front/client/wallet/cheque_request.html.twig', [
            'wallet' => $wallet,
            'form' => $form,
        ]);
    }

    #[Route('/cheques', name: 'cheques', methods: ['GET'])]
    public function cheques(): Response
    {
        $user = $this->getAuthenticatedUser();

        if ($redirect = $this->guardWalletAccess($user)) {
            return $redirect;
        }

        $wallet = $this->requireWalletForUser($user);
        if ($wallet instanceof Response) {
            return $wallet;
        }

        $cheques = $this->getLatestCheques($wallet, 50);
        $pendingCount = 0;
        $acceptedCount = 0;

        foreach ($cheques as $cheque) {
            $status = mb_strtolower($cheque->getStatut());
            if ($status === 'en_attente') {
                $pendingCount++;
            } elseif ($status === 'accepte') {
                $acceptedCount++;
            }
        }

        return $this->render('front/client/wallet/cheques.html.twig', [
            'wallet' => $wallet,
            'cheques' => $cheques,
            'pendingCount' => $pendingCount,
            'acceptedCount' => $acceptedCount,
        ]);
    }

    private function getAuthenticatedUser(): User
    {
        /** @var User $user */
        $user = $this->getUser();

        return $user;
    }

    private function guardWalletAccess(User $user): ?Response
    {
        if ($redirect = $this->kycAccessChecker->check($user)) {
            $this->addFlash('warning', 'Votre KYC doit etre approuve pour acceder a votre espace wallet.');

            return $redirect;
        }

        if ($redirect = $this->riskAccessChecker->checkSensitiveModule($user)) {
            $this->addFlash('warning', 'Votre niveau de risque est critique. Les actions wallet sont temporairement restreintes.');

            return $redirect;
        }

        return null;
    }

    private function findWalletForUser(User $user): ?Wallet
    {
        /** @var Wallet|null $wallet */
        $wallet = $this->entityManager->getRepository(Wallet::class)
            ->createQueryBuilder('w')
            ->andWhere('w.user = :user OR w.idUser = :userId')
            ->setParameter('user', $user)
            ->setParameter('userId', $user->getId())
            ->orderBy('w.dateCreation', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$wallet instanceof Wallet && $user->getKycStatus() === User::KYC_APPROUVE) {
            $this->kycService->synchronizeApprovedUserWallet($user);

            /** @var Wallet|null $wallet */
            $wallet = $this->entityManager->getRepository(Wallet::class)
                ->createQueryBuilder('w')
                ->andWhere('w.user = :user OR w.idUser = :userId')
                ->setParameter('user', $user)
                ->setParameter('userId', $user->getId())
                ->orderBy('w.dateCreation', 'DESC')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
        }

        return $wallet;
    }

    private function requireWalletForUser(User $user): Wallet|Response
    {
        $wallet = $this->findWalletForUser($user);

        if ($wallet instanceof Wallet) {
            return $wallet;
        }

        $this->addFlash('info', 'Aucun wallet n est encore disponible sur votre compte.');

        return $this->redirectToRoute('front_wallet_dashboard');
    }

    /**
     * @return Transaction[]
     */
    private function getLatestTransactions(Wallet $wallet, int $limit): array
    {
        /** @var Transaction[] $transactions */
        $transactions = $this->entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->andWhere('t.idWallet = :walletId')
            ->setParameter('walletId', $wallet->getIdWallet())
            ->orderBy('t.dateTransaction', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return $transactions;
    }

    /**
     * @return Cheque[]
     */
    private function getLatestCheques(Wallet $wallet, int $limit): array
    {
        /** @var Cheque[] $cheques */
        $cheques = $this->entityManager->getRepository(Cheque::class)
            ->createQueryBuilder('c')
            ->andWhere('c.idWallet = :walletId')
            ->setParameter('walletId', $wallet->getIdWallet())
            ->orderBy('c.dateEmission', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return $cheques;
    }

    private function countTransactionsForWallet(Wallet $wallet): int
    {
        return (int) $this->entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->select('COUNT(t.idTransaction)')
            ->andWhere('t.idWallet = :walletId')
            ->setParameter('walletId', $wallet->getIdWallet())
            ->getQuery()
            ->getSingleScalarResult();
    }

    private function countChequesForWallet(Wallet $wallet): int
    {
        return (int) $this->entityManager->getRepository(Cheque::class)
            ->createQueryBuilder('c')
            ->select('COUNT(c.idCheque)')
            ->andWhere('c.idWallet = :walletId')
            ->setParameter('walletId', $wallet->getIdWallet())
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @param array{type:string,date_from:string,date_to:string} $filters
     */
    private function createTransactionQueryBuilder(Wallet $wallet, array $filters): QueryBuilder
    {
        $qb = $this->entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->andWhere('t.idWallet = :walletId')
            ->setParameter('walletId', $wallet->getIdWallet());

        if ($filters['type'] !== '') {
            $qb
                ->andWhere('LOWER(t.type) = :type')
                ->setParameter('type', mb_strtolower($filters['type']));
        }

        if ($filters['date_from'] !== '') {
            try {
                $dateFrom = new \DateTimeImmutable($filters['date_from'] . ' 00:00:00');
                $qb
                    ->andWhere('t.dateTransaction >= :dateFrom')
                    ->setParameter('dateFrom', $dateFrom);
            } catch (\Exception) {
            }
        }

        if ($filters['date_to'] !== '') {
            try {
                $dateTo = (new \DateTimeImmutable($filters['date_to'] . ' 00:00:00'))->modify('+1 day');
                $qb
                    ->andWhere('t.dateTransaction < :dateTo')
                    ->setParameter('dateTo', $dateTo);
            } catch (\Exception) {
            }
        }

        return $qb;
    }

    private function hasDuplicatePendingCheque(Wallet $wallet, Cheque $cheque): bool
    {
        $existing = $this->entityManager->getRepository(Cheque::class)
            ->createQueryBuilder('c')
            ->select('COUNT(c.idCheque)')
            ->andWhere('c.idWallet = :walletId')
            ->andWhere('LOWER(c.statut) = :statut')
            ->andWhere('LOWER(COALESCE(c.beneficiaire, :emptyValue)) = :beneficiaire')
            ->andWhere('c.montant = :montant')
            ->setParameter('walletId', $wallet->getIdWallet())
            ->setParameter('statut', 'en_attente')
            ->setParameter('emptyValue', '')
            ->setParameter('beneficiaire', mb_strtolower(trim((string) $cheque->getBeneficiaire())))
            ->setParameter('montant', $cheque->getMontant())
            ->getQuery()
            ->getSingleScalarResult();

        return (int) $existing > 0;
    }

    private function generateChequeNumber(Wallet $wallet): string
    {
        return sprintf(
            'CHQ%s%02d',
            (new \DateTimeImmutable())->format('ymdHis'),
            random_int(10, 99)
        );
    }
}
