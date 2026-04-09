<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260408150000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute le systeme de reinitialisation de mot de passe multi-canal et les champs utilisateur de securite.';
    }

    public function up(Schema $schema): void
    {
        if (!$this->columnExists('users', 'password_changed_at')) {
            $this->addSql('ALTER TABLE users ADD password_changed_at DATETIME DEFAULT NULL');
        }

        if (!$this->columnExists('users', 'auth_session_version')) {
            $this->addSql('ALTER TABLE users ADD auth_session_version INT NOT NULL DEFAULT 1');
        }

        if (!$this->tableExists('password_reset_request')) {
            $this->addSql('CREATE TABLE password_reset_request (
                id INT AUTO_INCREMENT NOT NULL,
                user_id INT DEFAULT NULL,
                public_id VARCHAR(64) NOT NULL,
                recovery_hash VARCHAR(64) NOT NULL,
                channel VARCHAR(20) NOT NULL,
                secret_hash VARCHAR(255) DEFAULT NULL,
                expires_at DATETIME DEFAULT NULL,
                verified_at DATETIME DEFAULT NULL,
                used_at DATETIME DEFAULT NULL,
                attempts_count INT NOT NULL DEFAULT 0,
                resend_count INT NOT NULL DEFAULT 0,
                last_sent_at DATETIME DEFAULT NULL,
                status VARCHAR(20) NOT NULL,
                request_ip VARCHAR(45) DEFAULT NULL,
                user_agent LONGTEXT DEFAULT NULL,
                created_at DATETIME NOT NULL,
                updated_at DATETIME NOT NULL,
                UNIQUE INDEX UNIQ_PASSWORD_RESET_PUBLIC_ID (public_id),
                INDEX IDX_PASSWORD_RESET_USER (user_id),
                INDEX idx_password_reset_channel_status (channel, status),
                INDEX idx_password_reset_recovery_hash (recovery_hash),
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

            $this->addSql('ALTER TABLE password_reset_request ADD CONSTRAINT FK_PASSWORD_RESET_USER FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE SET NULL');
        }

        if (!$this->tableExists('password_reset_audit_log')) {
            $this->addSql('CREATE TABLE password_reset_audit_log (
                id INT AUTO_INCREMENT NOT NULL,
                password_reset_request_id INT DEFAULT NULL,
                event_type VARCHAR(50) NOT NULL,
                channel VARCHAR(20) DEFAULT NULL,
                recovery_hash VARCHAR(64) DEFAULT NULL,
                request_ip VARCHAR(45) DEFAULT NULL,
                user_agent LONGTEXT DEFAULT NULL,
                context LONGTEXT DEFAULT NULL,
                created_at DATETIME NOT NULL,
                INDEX IDX_PASSWORD_RESET_AUDIT_REQUEST (password_reset_request_id),
                INDEX idx_password_reset_audit_event (event_type, created_at),
                INDEX idx_password_reset_audit_recovery (recovery_hash, created_at),
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

            $this->addSql('ALTER TABLE password_reset_audit_log ADD CONSTRAINT FK_PASSWORD_RESET_AUDIT_REQUEST FOREIGN KEY (password_reset_request_id) REFERENCES password_reset_request (id) ON DELETE SET NULL');
        }
    }

    public function down(Schema $schema): void
    {
        if ($this->tableExists('password_reset_audit_log')) {
            $this->addSql('DROP TABLE password_reset_audit_log');
        }

        if ($this->tableExists('password_reset_request')) {
            $this->addSql('DROP TABLE password_reset_request');
        }

        if ($this->columnExists('users', 'auth_session_version')) {
            $this->addSql('ALTER TABLE users DROP COLUMN auth_session_version');
        }

        if ($this->columnExists('users', 'password_changed_at')) {
            $this->addSql('ALTER TABLE users DROP COLUMN password_changed_at');
        }
    }

    private function tableExists(string $tableName): bool
    {
        return $this->connection->createSchemaManager()->tablesExist([$tableName]);
    }

    private function columnExists(string $tableName, string $columnName): bool
    {
        if (!$this->tableExists($tableName)) {
            return false;
        }

        $columns = $this->connection->createSchemaManager()->listTableColumns($tableName);

        return array_key_exists($columnName, $columns);
    }
}
