<?php

namespace App\Repository;

use App\Entity\Loan\Loan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Loan>
 */
class LoanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Loan::class);
    }

    public function findAll(): array
    {
        return $this->findBy([], ['loanId' => 'DESC']);
    }

    public function findByUserId(int $user): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.user = :user')
            ->setParameter('userId', $user)
            ->orderBy('l.loanId', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.status = :status')
            ->setParameter('status', $status)
            ->orderBy('l.loanId', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countByStatus(string $status): int
    {
        return $this->createQueryBuilder('l')
            ->select('COUNT(l)')
            ->andWhere('l.status = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getSingleScalarResult();
    }


        public function findPendingLoans(): array
    {
        return $this->findByStatus('PENDING');
    }

    public function findActiveLoans(): array
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.user', 'u')
            ->addSelect('u')
            ->where('l.status IN (:statuses)')
            ->setParameter('statuses', ['APPROVED', 'ACTIVE'])
            ->orderBy('l.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findLoanWithUser(int $loanId): ?Loan
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.user', 'u')
            ->addSelect('u')
            ->where('l.loanId = :id')
            ->setParameter('id', $loanId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findLoanWithRepayments(int $loanId): ?Loan
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.repayments', 'r')
            ->addSelect('r')
            ->leftJoin('l.user', 'u')
            ->addSelect('u')
            ->where('l.loanId = :id')
            ->setParameter('id', $loanId)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
