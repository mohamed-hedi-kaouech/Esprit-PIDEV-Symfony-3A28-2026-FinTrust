<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260408113000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Adds email verification fields for signup confirmation by 6-digit code.';
    }

    public function up(Schema $schema): void
    {
        $platformClass = $this->connection->getDatabasePlatform()::class;
        $this->skipIf(
            !str_contains($platformClass, 'MySQL') && !str_contains($platformClass, 'MariaDB'),
            'Migration only safe on MySQL/MariaDB.'
        );

        $this->addSql('ALTER TABLE users ADD is_verified TINYINT(1) NOT NULL DEFAULT 1, ADD email_verification_code VARCHAR(6) DEFAULT NULL, ADD email_verification_expires_at DATETIME DEFAULT NULL, ADD email_verified_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $platformClass = $this->connection->getDatabasePlatform()::class;
        $this->skipIf(
            !str_contains($platformClass, 'MySQL') && !str_contains($platformClass, 'MariaDB'),
            'Migration only safe on MySQL/MariaDB.'
        );

        $this->addSql('ALTER TABLE users DROP is_verified, DROP email_verification_code, DROP email_verification_expires_at, DROP email_verified_at');
    }
}
