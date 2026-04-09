<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260408160000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Insert default publication categories';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO `publication_category` (`name`, `color`, `icon`) VALUES
            ('OFFRES', '#3b82f6', '🎁'),
            ('OCCASIONS', '#10b981', '⭐'),
            ('OPPORTUNITES', '#f59e0b', '🚀'),
            ('CREDITS', '#8b5cf6', '💳'),
            ('INVESTISSEMENTS', '#dc2626', '📈'),
            ('ASSURANCES', '#06b6d4', '🛡️'),
            ('NOUVEAUTES', '#ec4899', '✨'),
            ('AUTRES', '#6b7280', '📌')
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM `publication_category` WHERE `name` IN ('OFFRES', 'OCCASIONS', 'OPPORTUNITES', 'CREDITS', 'INVESTISSEMENTS', 'ASSURANCES', 'NOUVEAUTES', 'AUTRES')");
    }
}
