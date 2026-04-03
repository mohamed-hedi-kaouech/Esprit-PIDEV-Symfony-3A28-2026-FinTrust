<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260403221117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin_rewards (id INT AUTO_INCREMENT NOT NULL, admin_id INT NOT NULL, total_stars INT NOT NULL, total_points INT NOT NULL, streak_days INT NOT NULL, last_completion_date DATE DEFAULT NULL, task_finisher_badge TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_2D1E9CBE642B8210 (admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE admin_task_history (id INT AUTO_INCREMENT NOT NULL, task_id INT NOT NULL, actor_admin_id INT NOT NULL, action VARCHAR(40) NOT NULL, from_status VARCHAR(20) DEFAULT NULL, to_status VARCHAR(20) DEFAULT NULL, note VARCHAR(255) DEFAULT NULL, stars_earned INT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_411AF84C8DB60186 (task_id), INDEX IDX_411AF84CC96EFF06 (actor_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE admin_tasks (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(180) NOT NULL, description LONGTEXT DEFAULT NULL, status VARCHAR(255) NOT NULL, priority VARCHAR(255) NOT NULL, tags VARCHAR(180) DEFAULT NULL, due_date DATE DEFAULT NULL, stars_earned INT NOT NULL, completed_at DATETIME DEFAULT NULL, position_idx INT NOT NULL, auto_generated TINYINT(1) NOT NULL, template_code VARCHAR(60) DEFAULT NULL, external_ref VARCHAR(120) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by INT DEFAULT NULL, assigned_to INT DEFAULT NULL, UNIQUE INDEX UNIQ_F0729E6DB445906B (external_ref), INDEX IDX_F0729E6DDE12AB56 (created_by), INDEX IDX_F0729E6D89EEAF91 (assigned_to), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE alerte (idAlerte INT AUTO_INCREMENT NOT NULL, idCategorie INT NOT NULL, message VARCHAR(512) NOT NULL, seuil DOUBLE PRECISION NOT NULL, active TINYINT(1) DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_3AE753AB597FD62 (idCategorie), PRIMARY KEY(idAlerte)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE author (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, nbr_books INT NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, published TINYINT(1) NOT NULL, publication_date DATE NOT NULL, author_id INT DEFAULT NULL, INDEX IDX_CBE5A331F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE categorie (idCategorie INT AUTO_INCREMENT NOT NULL, nomCategorie VARCHAR(255) NOT NULL, budgetPrevu DOUBLE PRECISION NOT NULL, seuilAlerte DOUBLE PRECISION NOT NULL, PRIMARY KEY(idCategorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE chat_messages (id INT AUTO_INCREMENT NOT NULL, message LONGTEXT NOT NULL, sender VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_EF20C9A6A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE cheque (id_cheque INT AUTO_INCREMENT NOT NULL, numero_cheque VARCHAR(20) NOT NULL, montant DOUBLE PRECISION NOT NULL, date_emission DATETIME NOT NULL, date_presentation DATETIME DEFAULT NULL, statut VARCHAR(20) NOT NULL, id_wallet INT NOT NULL, beneficiaire VARCHAR(100) DEFAULT NULL, motif_rejet VARCHAR(255) DEFAULT NULL, INDEX IDX_A0BBFDE95A5F27F2 (id_wallet), PRIMARY KEY(id_cheque)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) DEFAULT NULL, prenom VARCHAR(50) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, solde NUMERIC(12, 2) DEFAULT NULL, nb_cheques_refuses INT DEFAULT NULL, nb_jours_negatifs INT DEFAULT NULL, retraits_eleves INT DEFAULT NULL, date_inscription DATE DEFAULT NULL, dernier_score INT DEFAULT NULL, niveau_risque VARCHAR(255) DEFAULT NULL, privilege VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE faq (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(255) NOT NULL, answer LONGTEXT NOT NULL, keywords VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE feedback (id_feedback INT AUTO_INCREMENT NOT NULL, id_publication INT NOT NULL, id_user INT NOT NULL, commentaire LONGTEXT DEFAULT NULL, type_reaction VARCHAR(20) DEFAULT NULL, date_feedback DATETIME DEFAULT NULL, INDEX IDX_D2294458B72EAA8E (id_publication), INDEX IDX_D22944586B3CA4B (id_user), PRIMARY KEY(id_feedback)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE game_sessions (id VARCHAR(255) NOT NULL, context VARCHAR(255) NOT NULL, game_type VARCHAR(20) NOT NULL, started_at DATETIME NOT NULL, ended_at DATETIME DEFAULT NULL, duration_ms BIGINT DEFAULT NULL, score INT DEFAULT NULL, moves INT DEFAULT NULL, is_valid TINYINT(1) NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_31246235A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE gamification_events (id INT AUTO_INCREMENT NOT NULL, event_code VARCHAR(80) NOT NULL, event_label VARCHAR(160) NOT NULL, points INT NOT NULL, created_at DATETIME NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_26A93BE3A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE historique_scores (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, score INT DEFAULT NULL, date_calcul DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE item (idItem INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, categorie VARCHAR(255) DEFAULT NULL, idCategorie INT NOT NULL, INDEX IDX_1F1B251EB597FD62 (idCategorie), PRIMARY KEY(idItem)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE kyc (id INT AUTO_INCREMENT NOT NULL, cin VARCHAR(20) NOT NULL, adresse VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, signature_path VARCHAR(255) DEFAULT NULL, signature_uploaded_at DATETIME DEFAULT NULL, statut VARCHAR(255) NOT NULL, commentaire_admin LONGTEXT DEFAULT NULL, date_submission DATETIME NOT NULL, user_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_91850F8EABE530DA (cin), INDEX IDX_91850F8EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE kyc_files (id INT AUTO_INCREMENT NOT NULL, kyc_id INT NOT NULL, file_name VARCHAR(255) NOT NULL, file_path VARCHAR(255) DEFAULT NULL, file_type VARCHAR(20) NOT NULL, file_size BIGINT NOT NULL, file_data LONGBLOB NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_CB1DA7297A0984B (kyc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE loan (loanId INT AUTO_INCREMENT NOT NULL, loanType VARCHAR(50) NOT NULL, amount NUMERIC(12, 2) NOT NULL, duration INT NOT NULL, interest_rate NUMERIC(5, 2) NOT NULL, remaining_principal NUMERIC(12, 2) NOT NULL, status VARCHAR(20) NOT NULL, createdAt DATETIME NOT NULL, id_user INT DEFAULT NULL, INDEX IDX_C5D30D036B3CA4B (id_user), PRIMARY KEY(loanId)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE notifications (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type VARCHAR(30) NOT NULL, message LONGTEXT NOT NULL, is_read TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE otp_audit (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, email VARCHAR(190) DEFAULT NULL, channel VARCHAR(20) NOT NULL, event_type VARCHAR(20) NOT NULL, request_id VARCHAR(64) DEFAULT NULL, success TINYINT(1) NOT NULL, reason VARCHAR(255) DEFAULT NULL, validation_seconds INT DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_843A7DCA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE password_reset (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, code_hash VARCHAR(255) NOT NULL, expires_at DATETIME NOT NULL, used_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, attempts INT NOT NULL, INDEX IDX_B1017252A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE product (productId INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, description VARCHAR(500) NOT NULL, createdAt DATE NOT NULL, PRIMARY KEY(productId)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE productsubscription (subscriptionId INT AUTO_INCREMENT NOT NULL, client INT NOT NULL, product INT NOT NULL, type VARCHAR(255) NOT NULL, subscriptionDate DATE NOT NULL, expirationDate DATE NOT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_51544832C7440455 (client), INDEX IDX_51544832D34A04AD (product), PRIMARY KEY(subscriptionId)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE publication (id_publication INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, categorie VARCHAR(100) DEFAULT NULL, statut VARCHAR(50) DEFAULT NULL, est_visible TINYINT(1) DEFAULT NULL, date_publication DATETIME DEFAULT NULL, PRIMARY KEY(id_publication)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE repayment (repayId INT AUTO_INCREMENT NOT NULL, loanId INT NOT NULL, month INT NOT NULL, startingBalance NUMERIC(10, 2) NOT NULL, monthlyPayment NUMERIC(10, 2) NOT NULL, capitalPart NUMERIC(10, 2) NOT NULL, interestPart NUMERIC(10, 2) NOT NULL, remainingBalance NUMERIC(10, 2) NOT NULL, status VARCHAR(20) NOT NULL, INDEX IDX_50130A517F21A95F (loanId), PRIMARY KEY(repayId)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE security_events (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, ip VARCHAR(80) DEFAULT NULL, type VARCHAR(40) NOT NULL, metadata VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE transaction (id_transaction INT AUTO_INCREMENT NOT NULL, montant DOUBLE PRECISION NOT NULL, type VARCHAR(20) NOT NULL, description LONGTEXT DEFAULT NULL, date_transaction DATETIME NOT NULL, id_wallet INT NOT NULL, INDEX IDX_723705D15A5F27F2 (id_wallet), PRIMARY KEY(id_transaction)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE user_badges (id INT AUTO_INCREMENT NOT NULL, badge_code VARCHAR(80) NOT NULL, badge_label VARCHAR(160) NOT NULL, awarded_at DATETIME NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_1DA448A7A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE user_gamification (id INT AUTO_INCREMENT NOT NULL, points_total INT NOT NULL, level VARCHAR(20) NOT NULL, badges VARCHAR(255) DEFAULT NULL, last_daily_game_at DATE DEFAULT NULL, updated_at DATETIME NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_2BFCB17DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE user_login_audit (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(190) DEFAULT NULL, success TINYINT(1) NOT NULL, reason VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_3D73F178A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE user_qr_tokens (id INT AUTO_INCREMENT NOT NULL, token VARCHAR(120) NOT NULL, active TINYINT(1) NOT NULL, expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, user_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_2141F1425F37A13B (token), INDEX IDX_2141F142A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE user_security_challenges (id INT AUTO_INCREMENT NOT NULL, challenge_code VARCHAR(80) NOT NULL, challenge_title VARCHAR(160) NOT NULL, status VARCHAR(20) NOT NULL, progress INT NOT NULL, target INT NOT NULL, updated_at DATETIME NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_EDA41AE7A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, currentKycId INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, numTel VARCHAR(20) DEFAULT NULL, role VARCHAR(10) NOT NULL, password VARCHAR(255) NOT NULL, kycStatus VARCHAR(20) DEFAULT NULL, createdAt DATETIME NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE wallet (id_wallet INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, nom_proprietaire VARCHAR(100) NOT NULL, telephone VARCHAR(20) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, code_acces VARCHAR(10) DEFAULT NULL, est_actif TINYINT(1) DEFAULT NULL, solde NUMERIC(15, 2) NOT NULL, plafond_decouvert NUMERIC(15, 2) DEFAULT NULL, devise VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, date_creation DATETIME NOT NULL, tentatives_echouees INT DEFAULT NULL, date_derniere_tentative DATETIME DEFAULT NULL, est_bloque TINYINT(1) DEFAULT NULL, INDEX IDX_7C68921F6B3CA4B (id_user), PRIMARY KEY(id_wallet)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE admin_rewards ADD CONSTRAINT FK_2D1E9CBE642B8210 FOREIGN KEY (admin_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE admin_task_history ADD CONSTRAINT FK_411AF84C8DB60186 FOREIGN KEY (task_id) REFERENCES admin_tasks (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE admin_task_history ADD CONSTRAINT FK_411AF84CC96EFF06 FOREIGN KEY (actor_admin_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE admin_tasks ADD CONSTRAINT FK_F0729E6DDE12AB56 FOREIGN KEY (created_by) REFERENCES users (id)');
        $this->addSql('ALTER TABLE admin_tasks ADD CONSTRAINT FK_F0729E6D89EEAF91 FOREIGN KEY (assigned_to) REFERENCES users (id)');
        $this->addSql('ALTER TABLE alerte ADD CONSTRAINT FK_3AE753AB597FD62 FOREIGN KEY (idCategorie) REFERENCES categorie (idCategorie) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A331F675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
        $this->addSql('ALTER TABLE chat_messages ADD CONSTRAINT FK_EF20C9A6A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE95A5F27F2 FOREIGN KEY (id_wallet) REFERENCES wallet (id_wallet)');
        $this->addSql('ALTER TABLE feedback ADD CONSTRAINT FK_D2294458B72EAA8E FOREIGN KEY (id_publication) REFERENCES publication (id_publication) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE feedback ADD CONSTRAINT FK_D22944586B3CA4B FOREIGN KEY (id_user) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_sessions ADD CONSTRAINT FK_31246235A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE gamification_events ADD CONSTRAINT FK_26A93BE3A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251EB597FD62 FOREIGN KEY (idCategorie) REFERENCES categorie (idCategorie)');
        $this->addSql('ALTER TABLE kyc ADD CONSTRAINT FK_91850F8EA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE kyc_files ADD CONSTRAINT FK_CB1DA7297A0984B FOREIGN KEY (kyc_id) REFERENCES kyc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE loan ADD CONSTRAINT FK_C5D30D036B3CA4B FOREIGN KEY (id_user) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE otp_audit ADD CONSTRAINT FK_843A7DCA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE password_reset ADD CONSTRAINT FK_B1017252A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE productsubscription ADD CONSTRAINT FK_51544832C7440455 FOREIGN KEY (client) REFERENCES users (id)');
        $this->addSql('ALTER TABLE productsubscription ADD CONSTRAINT FK_51544832D34A04AD FOREIGN KEY (product) REFERENCES product (productId)');
        $this->addSql('ALTER TABLE repayment ADD CONSTRAINT FK_50130A517F21A95F FOREIGN KEY (loanId) REFERENCES loan (loanId) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D15A5F27F2 FOREIGN KEY (id_wallet) REFERENCES wallet (id_wallet)');
        $this->addSql('ALTER TABLE user_badges ADD CONSTRAINT FK_1DA448A7A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_gamification ADD CONSTRAINT FK_2BFCB17DA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_login_audit ADD CONSTRAINT FK_3D73F178A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_qr_tokens ADD CONSTRAINT FK_2141F142A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_security_challenges ADD CONSTRAINT FK_EDA41AE7A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE wallet ADD CONSTRAINT FK_7C68921F6B3CA4B FOREIGN KEY (id_user) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_rewards DROP FOREIGN KEY FK_2D1E9CBE642B8210');
        $this->addSql('ALTER TABLE admin_task_history DROP FOREIGN KEY FK_411AF84C8DB60186');
        $this->addSql('ALTER TABLE admin_task_history DROP FOREIGN KEY FK_411AF84CC96EFF06');
        $this->addSql('ALTER TABLE admin_tasks DROP FOREIGN KEY FK_F0729E6DDE12AB56');
        $this->addSql('ALTER TABLE admin_tasks DROP FOREIGN KEY FK_F0729E6D89EEAF91');
        $this->addSql('ALTER TABLE alerte DROP FOREIGN KEY FK_3AE753AB597FD62');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A331F675F31B');
        $this->addSql('ALTER TABLE chat_messages DROP FOREIGN KEY FK_EF20C9A6A76ED395');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE95A5F27F2');
        $this->addSql('ALTER TABLE feedback DROP FOREIGN KEY FK_D2294458B72EAA8E');
        $this->addSql('ALTER TABLE feedback DROP FOREIGN KEY FK_D22944586B3CA4B');
        $this->addSql('ALTER TABLE game_sessions DROP FOREIGN KEY FK_31246235A76ED395');
        $this->addSql('ALTER TABLE gamification_events DROP FOREIGN KEY FK_26A93BE3A76ED395');
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251EB597FD62');
        $this->addSql('ALTER TABLE kyc DROP FOREIGN KEY FK_91850F8EA76ED395');
        $this->addSql('ALTER TABLE kyc_files DROP FOREIGN KEY FK_CB1DA7297A0984B');
        $this->addSql('ALTER TABLE loan DROP FOREIGN KEY FK_C5D30D036B3CA4B');
        $this->addSql('ALTER TABLE otp_audit DROP FOREIGN KEY FK_843A7DCA76ED395');
        $this->addSql('ALTER TABLE password_reset DROP FOREIGN KEY FK_B1017252A76ED395');
        $this->addSql('ALTER TABLE productsubscription DROP FOREIGN KEY FK_51544832C7440455');
        $this->addSql('ALTER TABLE productsubscription DROP FOREIGN KEY FK_51544832D34A04AD');
        $this->addSql('ALTER TABLE repayment DROP FOREIGN KEY FK_50130A517F21A95F');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D15A5F27F2');
        $this->addSql('ALTER TABLE user_badges DROP FOREIGN KEY FK_1DA448A7A76ED395');
        $this->addSql('ALTER TABLE user_gamification DROP FOREIGN KEY FK_2BFCB17DA76ED395');
        $this->addSql('ALTER TABLE user_login_audit DROP FOREIGN KEY FK_3D73F178A76ED395');
        $this->addSql('ALTER TABLE user_qr_tokens DROP FOREIGN KEY FK_2141F142A76ED395');
        $this->addSql('ALTER TABLE user_security_challenges DROP FOREIGN KEY FK_EDA41AE7A76ED395');
        $this->addSql('ALTER TABLE wallet DROP FOREIGN KEY FK_7C68921F6B3CA4B');
        $this->addSql('DROP TABLE admin_rewards');
        $this->addSql('DROP TABLE admin_task_history');
        $this->addSql('DROP TABLE admin_tasks');
        $this->addSql('DROP TABLE alerte');
        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE chat_messages');
        $this->addSql('DROP TABLE cheque');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE faq');
        $this->addSql('DROP TABLE feedback');
        $this->addSql('DROP TABLE game_sessions');
        $this->addSql('DROP TABLE gamification_events');
        $this->addSql('DROP TABLE historique_scores');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE kyc');
        $this->addSql('DROP TABLE kyc_files');
        $this->addSql('DROP TABLE loan');
        $this->addSql('DROP TABLE notifications');
        $this->addSql('DROP TABLE otp_audit');
        $this->addSql('DROP TABLE password_reset');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE productsubscription');
        $this->addSql('DROP TABLE publication');
        $this->addSql('DROP TABLE repayment');
        $this->addSql('DROP TABLE security_events');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE user_badges');
        $this->addSql('DROP TABLE user_gamification');
        $this->addSql('DROP TABLE user_login_audit');
        $this->addSql('DROP TABLE user_qr_tokens');
        $this->addSql('DROP TABLE user_security_challenges');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE wallet');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
