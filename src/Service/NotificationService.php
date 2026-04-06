<?php

namespace App\Service;

use App\Entity\User\Client\Notification;
use App\Entity\User\User;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Service — Notifications internes.
 *
 * Crée des notifications stockées en base de données.
 * Extensible pour intégrer Symfony Mailer (email) ou Notifier (SMS/push).
 */
class NotificationService
{
    public function __construct(private readonly EntityManagerInterface $em) {}

    /**
     * Crée une notification interne pour un utilisateur.
     *
     * @param string $type INFO | SUCCESS | WARNING | ERROR
     */
    public function notify(User $user, string $message, string $type = 'INFO'): void
    {
        $notif = new Notification();
        $notif->setUser($user);
        $notif->setMessage($message);
        $notif->setType($type);
        $notif->setCreatedAt(new \DateTime());
        $notif->setIsRead(false);

        $this->em->persist($notif);
        $this->em->flush();
    }

    /** Notification de KYC approuvé. */
    public function notifyKycApproved(User $user): void
    {
        $this->notify(
            $user,
            'Votre dossier KYC a été approuvé. Votre compte FinTrust est maintenant pleinement actif.',
            'SUCCESS'
        );
    }

    /** Notification de KYC refusé avec motif. */
    public function notifyKycRefused(User $user, string $reason): void
    {
        $this->notify(
            $user,
            "Votre dossier KYC a été refusé. Motif : {$reason}",
            'ERROR'
        );
    }

    /** Notification de KYC soumis (confirmation de réception). */
    public function notifyKycSubmitted(User $user): void
    {
        $this->notify(
            $user,
            'Votre dossier KYC a bien été reçu. Il sera examiné dans les plus brefs délais.',
            'INFO'
        );
    }

    public function notifyRiskEscalation(User $user, string $riskLevel): void
    {
        $this->notify(
            $user,
            "Votre profil de risque a été réévalué au niveau {$riskLevel}. Certaines actions sensibles peuvent être temporairement limitées.",
            $riskLevel === User::RISK_CRITICAL ? 'ERROR' : 'WARNING'
        );
    }
}
