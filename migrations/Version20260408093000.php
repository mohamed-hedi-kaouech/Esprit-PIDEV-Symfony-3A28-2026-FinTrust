<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260408093000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Moves KYC file blobs to filesystem paths and removes the BLOB column.';
    }

    public function up(Schema $schema): void
    {
        $this->skipIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration only safe on MySQL.');

        $projectDir = dirname(__DIR__);
        $targetDir = $projectDir . '/public/uploads/kyc-files';

        if (!is_dir($targetDir) && !mkdir($targetDir, 0777, true) && !is_dir($targetDir)) {
            throw new \RuntimeException(sprintf('Unable to create directory "%s".', $targetDir));
        }

        $rows = $this->connection->fetchAllAssociative('SELECT id, file_name, file_type, file_data, file_path FROM kyc_files');

        foreach ($rows as $row) {
            $currentPath = $row['file_path'] ?? null;
            if (is_string($currentPath) && $currentPath !== '') {
                continue;
            }

            $blob = $row['file_data'] ?? null;
            if ($blob === null) {
                continue;
            }

            if (is_resource($blob)) {
                $blob = stream_get_contents($blob);
            }

            if (!is_string($blob) || $blob === '') {
                continue;
            }

            $originalName = (string) ($row['file_name'] ?? ('kyc_' . $row['id']));
            $baseName = pathinfo($originalName, PATHINFO_FILENAME);
            $baseName = preg_replace('/[^A-Za-z0-9_-]+/', '_', $baseName) ?: ('kyc_' . $row['id']);
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);

            if ($extension === '') {
                $extension = match ((string) ($row['file_type'] ?? '')) {
                    'image/jpeg' => 'jpg',
                    'image/png' => 'png',
                    'application/pdf' => 'pdf',
                    default => 'bin',
                };
            }

            $filename = sprintf('%s_migrated_%s.%s', $baseName, $row['id'], $extension);
            $absolutePath = $targetDir . '/' . $filename;
            $relativePath = 'uploads/kyc-files/' . $filename;

            file_put_contents($absolutePath, $blob);
            $this->addSql('UPDATE kyc_files SET file_path = ? WHERE id = ?', [$relativePath, $row['id']]);
        }

        $this->addSql('ALTER TABLE kyc_files MODIFY file_path VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE kyc_files DROP COLUMN file_data');
    }

    public function down(Schema $schema): void
    {
        $this->throwIrreversibleMigrationException('This migration moves BLOB data to the filesystem and cannot be safely reversed.');
    }
}
