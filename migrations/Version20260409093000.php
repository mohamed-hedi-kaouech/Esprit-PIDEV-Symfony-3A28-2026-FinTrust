<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260409093000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute le support des transferts wallet a wallet sans modifier les entites Doctrine';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE transaction ADD statut VARCHAR(20) DEFAULT 'SUCCESS' NOT NULL, ADD id_wallet_source INT DEFAULT NULL, ADD id_wallet_destination INT DEFAULT NULL");
        $this->addSql("UPDATE transaction SET statut = 'SUCCESS'");
        $this->addSql("UPDATE transaction SET id_wallet_source = id_wallet WHERE LOWER(type) IN ('transfert', 'transfer')");
        $this->addSql('CREATE INDEX IDX_723705D1BA8D4E69 ON transaction (id_wallet_source)');
        $this->addSql('CREATE INDEX IDX_723705D135E9A8DB ON transaction (id_wallet_destination)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1BA8D4E69 FOREIGN KEY (id_wallet_source) REFERENCES wallet (id_wallet) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D135E9A8DB FOREIGN KEY (id_wallet_destination) REFERENCES wallet (id_wallet) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1BA8D4E69');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D135E9A8DB');
        $this->addSql('DROP INDEX IDX_723705D1BA8D4E69 ON transaction');
        $this->addSql('DROP INDEX IDX_723705D135E9A8DB ON transaction');
        $this->addSql('ALTER TABLE transaction DROP statut, DROP id_wallet_source, DROP id_wallet_destination');
    }
}
