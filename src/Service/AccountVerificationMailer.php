<?php

namespace App\Service;

use App\Entity\User\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class AccountVerificationMailer
{
    public function __construct(
        private readonly MailerInterface $mailer,
        private readonly string $fintrustMailerFrom,
        private readonly string $fintrustLoginUrl,
    ) {}

    public function sendVerificationCode(User $user): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address($this->fintrustMailerFrom, 'FinTrust'))
            ->to(new Address($user->getEmail(), $user->getFullName()))
            ->subject('FinTrust - Confirmez votre inscription')
            ->htmlTemplate('emails/account_verification.html.twig')
            ->context([
                'user' => $user,
                'code' => $user->getEmailVerificationCode(),
                'expiresAt' => $user->getEmailVerificationExpiresAt(),
                'loginUrl' => $this->fintrustLoginUrl,
            ]);

        $this->mailer->send($email);
    }
}
