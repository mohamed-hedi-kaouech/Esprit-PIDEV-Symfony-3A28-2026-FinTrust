<?php

namespace App\Service;

use App\Entity\User\User;
use App\Entity\Wallet\Wallet;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Twig\Environment;

class WalletTransferMailer
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly Environment $twig,
        private readonly LoggerInterface $logger,
        private readonly string $brevoApiKey,
        private readonly string $mailerFromAddress,
        private readonly string $mailerFromName,
    ) {
    }

    public function sendTransferEmails(
        int $transferId,
        User $senderUser,
        Wallet $senderWallet,
        ?User $recipientUser,
        Wallet $recipientWallet,
        float $amount,
        \DateTimeInterface $transferredAt,
        ?string $label = null,
    ): void {
        $senderEmail = $this->resolveEmail($senderUser, $senderWallet);
        $recipientEmail = $recipientUser ? $this->resolveEmail($recipientUser, $recipientWallet) : $this->resolveWalletEmail($recipientWallet);

        $senderName = $this->resolveDisplayName($senderUser, $senderWallet);
        $recipientName = $recipientUser ? $this->resolveDisplayName($recipientUser, $recipientWallet) : $this->resolveWalletLabel($recipientWallet);

        if ($senderEmail !== null) {
            $this->sendSafely(
                $transferId,
                $senderEmail,
                'Confirmation de votre transfert FinTrust',
                [
                    'title' => 'Transfert effectue',
                    'intro' => 'Votre transfert a bien ete effectue avec succes.',
                    'amount' => $amount,
                    'devise' => $senderWallet->getDevise(),
                    'counterparty_label' => 'Beneficiaire',
                    'counterparty_value' => $recipientName,
                    'datetime' => $transferredAt,
                    'label' => $label,
                ],
                'sender_transfer_confirmation'
            );
        }

        if ($recipientEmail !== null) {
            $this->sendSafely(
                $transferId,
                $recipientEmail,
                'Vous avez recu un transfert FinTrust',
                [
                    'title' => 'Transfert recu',
                    'intro' => 'Vous avez recu un transfert sur votre wallet FinTrust.',
                    'amount' => $amount,
                    'devise' => $recipientWallet->getDevise(),
                    'counterparty_label' => 'Emetteur',
                    'counterparty_value' => $senderName,
                    'datetime' => $transferredAt,
                    'label' => $label,
                ],
                'recipient_transfer_notification'
            );
        }
    }

    private function sendSafely(int $transferId, string $to, string $subject, array $context, string $scenario): void
    {
        try {
            if (trim($this->brevoApiKey) === '') {
                throw new \RuntimeException('La cle API Brevo est absente.');
            }

            $htmlContent = $this->twig->render('emails/wallet_transfer_mail.html.twig', $context);
            $response = $this->httpClient->request('POST', 'https://api.brevo.com/v3/smtp/email', [
                'headers' => [
                    'accept' => 'application/json',
                    'api-key' => $this->brevoApiKey,
                    'content-type' => 'application/json',
                ],
                'json' => [
                    'sender' => [
                        'name' => $this->mailerFromName,
                        'email' => $this->mailerFromAddress,
                    ],
                    'to' => [
                        [
                            'email' => $to,
                        ],
                    ],
                    'subject' => $subject,
                    'htmlContent' => $htmlContent,
                ],
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode >= 400) {
                throw new \RuntimeException(sprintf(
                    'Brevo API a retourne le statut HTTP %d. Reponse: %s',
                    $statusCode,
                    $response->getContent(false)
                ));
            }
        } catch (\Throwable $exception) {
            $message = $exception->getMessage();
            $isAuthenticationFailure = str_contains($message, 'unauthorized')
                || str_contains($message, 'invalid api key')
                || str_contains($message, 'api-key')
                || str_contains($message, 'cle API');

            $this->logger->warning('Echec envoi email de transfert wallet.', [
                'transfer_id' => $transferId,
                'scenario' => $scenario,
                'recipient_email' => $to,
                'from_email' => $this->mailerFromAddress,
                'smtp_authentication_failure' => $isAuthenticationFailure,
                'smtp_diagnostic' => $isAuthenticationFailure
                    ? 'Authentification Brevo refusee. Verifier la cle API et l expediteur valide dans Brevo.'
                    : 'Erreur non bloquante pendant l envoi du mail de transfert via Brevo.',
                'message' => $message,
                'exception' => $exception,
            ]);
        }
    }

    private function resolveEmail(User $user, Wallet $wallet): ?string
    {
        $email = trim($user->getEmail());
        if ($email !== '') {
            return $email;
        }

        return $this->resolveWalletEmail($wallet);
    }

    private function resolveWalletEmail(Wallet $wallet): ?string
    {
        $email = trim((string) $wallet->getEmail());

        return $email !== '' ? $email : null;
    }

    private function resolveDisplayName(User $user, Wallet $wallet): string
    {
        $fullName = trim($user->getFullName());
        if ($fullName !== '') {
            return $fullName;
        }

        $owner = trim((string) $wallet->getNomProprietaire());
        if ($owner !== '') {
            return $owner;
        }

        $email = $this->resolveWalletEmail($wallet);
        if ($email !== null) {
            return $email;
        }

        return $this->resolveWalletLabel($wallet);
    }

    private function resolveWalletLabel(Wallet $wallet): string
    {
        return 'wallet #' . $wallet->getIdWallet();
    }
}
