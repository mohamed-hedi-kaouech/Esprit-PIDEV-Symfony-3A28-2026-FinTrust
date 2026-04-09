<?php

namespace App\Service;

use App\Entity\Publication\Publication;
use App\Entity\User\User;
use App\Repository\PublicationRepository;
use Doctrine\ORM\EntityManagerInterface;

class PublicationService
{
    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly PublicationRepository $publicationRepo,
    ) {}

    public function createPublication(Publication $publication): void
    {
        if ($publication->getStatut() === 'PUBLIÉ') {
            $publication->setDatePublication(new \DateTime());
        }

        $this->em->persist($publication);
        $this->em->flush();
    }

    public function updatePublication(Publication $publication): void
    {
        if ($publication->getStatut() === 'PUBLIÉ' && !$publication->getDatePublication()) {
            $publication->setDatePublication(new \DateTime());
        }

        $this->em->flush();
    }

    public function deletePublication(Publication $publication): void
    {
        $this->em->remove($publication);
        $this->em->flush();
    }

    public function getStatistics(): array
    {
        $totalPublications = $this->publicationRepo->count([]);
        $publishedPublications = $this->publicationRepo->countPublished();
        $totalFeedbacks = (int) $this->em->getRepository(\App\Entity\User\Feedback::class)
            ->createQueryBuilder('f')
            ->select('COUNT(f.idFeedback)')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total_publications' => $totalPublications,
            'published_publications' => $publishedPublications,
            'total_feedbacks' => $totalFeedbacks,
            'total_comments' => $totalFeedbacks,
        ];
    }

    public function getFeedbackStatistics(): array
    {
        $repo = $this->em->getRepository(\App\Entity\User\Feedback::class);

        $totalComments = (int) $repo->createQueryBuilder('f')
            ->select('COUNT(f.idFeedback)')
            ->where('f.commentaire IS NOT NULL')
            ->andWhere("f.commentaire <> ''")
            ->getQuery()
            ->getSingleScalarResult();

        $totalLikes = (int) $repo->createQueryBuilder('f')
            ->select('COUNT(f.idFeedback)')
            ->where('UPPER(f.typeReaction) = :like')
            ->setParameter('like', 'LIKE')
            ->getQuery()
            ->getSingleScalarResult();

        $totalDislikes = (int) $repo->createQueryBuilder('f')
            ->select('COUNT(f.idFeedback)')
            ->where('UPPER(f.typeReaction) = :dislike')
            ->setParameter('dislike', 'DISLIKE')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'comments' => $totalComments,
            'likes' => $totalLikes,
            'dislikes' => $totalDislikes,
        ];
    }

    public function getPublicationTrend(int $months = 6): array
    {
        $startDate = (new \DateTimeImmutable())->modify('-' . $months . ' months')->modify('first day of this month')->setTime(0, 0, 0);

        $sql = 'SELECT YEAR(date_publication) AS year, MONTH(date_publication) AS month, COUNT(id_publication) AS publication_count FROM publication WHERE date_publication IS NOT NULL AND date_publication >= ? GROUP BY year, month ORDER BY year ASC, month ASC';
        $stmt = $this->em->getConnection()->executeQuery($sql, [$startDate->format('Y-m-d H:i:s')]);
        $rows = $stmt->fetchAllAssociative();

        $trend = [];
        for ($i = $months - 1; $i >= 0; $i--) {
            $date = (new \DateTimeImmutable())->modify('-' . $i . ' months');
            $label = $date->format('M Y');
            $trend[$label] = 0;
        }

        foreach ($rows as $row) {
            $month = (int) $row['month'];
            $year = (int) $row['year'];
            $date = new \DateTimeImmutable("$year-$month-01");
            $label = $date->format('M Y');
            $trend[$label] = (int) $row['publication_count'];
        }

        return array_map(fn($count, $label) => ['label' => $label, 'count' => $count], $trend, array_keys($trend));
    }
}
