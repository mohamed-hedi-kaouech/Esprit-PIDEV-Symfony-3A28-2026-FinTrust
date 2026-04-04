-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 04, 2026 at 10:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pidev1`
--
CREATE DATABASE IF NOT EXISTS `pidev1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pidev1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_rewards`
--

CREATE TABLE `admin_rewards` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `total_stars` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `streak_days` int(11) NOT NULL,
  `last_completion_date` date DEFAULT NULL,
  `task_finisher_badge` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tasks`
--

CREATE TABLE `admin_tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(180) NOT NULL,
  `description` longtext DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `tags` varchar(180) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `stars_earned` int(11) NOT NULL,
  `completed_at` datetime DEFAULT NULL,
  `position_idx` int(11) NOT NULL,
  `auto_generated` tinyint(1) NOT NULL,
  `template_code` varchar(60) DEFAULT NULL,
  `external_ref` varchar(120) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_task_history`
--

CREATE TABLE `admin_task_history` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `actor_admin_id` int(11) NOT NULL,
  `action` varchar(40) NOT NULL,
  `from_status` varchar(20) DEFAULT NULL,
  `to_status` varchar(20) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `stars_earned` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ah`
--

CREATE TABLE `ah` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alerte`
--

CREATE TABLE `alerte` (
  `idAlerte` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `message` varchar(512) NOT NULL,
  `seuil` double NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nbr_books` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `publication_date` date NOT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `nomCategorie` varchar(255) NOT NULL,
  `budgetPrevu` double NOT NULL,
  `seuilAlerte` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `sender` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE `cheque` (
  `id_cheque` int(11) NOT NULL,
  `numero_cheque` varchar(20) NOT NULL,
  `montant` double NOT NULL,
  `date_emission` datetime NOT NULL,
  `date_presentation` datetime DEFAULT NULL,
  `statut` varchar(20) NOT NULL,
  `id_wallet` int(11) NOT NULL,
  `beneficiaire` varchar(100) DEFAULT NULL,
  `motif_rejet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `solde` decimal(12,2) DEFAULT NULL,
  `nb_cheques_refuses` int(11) DEFAULT NULL,
  `nb_jours_negatifs` int(11) DEFAULT NULL,
  `retraits_eleves` int(11) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  `dernier_score` int(11) DEFAULT NULL,
  `niveau_risque` varchar(255) DEFAULT NULL,
  `privilege` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `keywords` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_publication` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `commentaire` longtext DEFAULT NULL,
  `type_reaction` varchar(20) DEFAULT NULL,
  `date_feedback` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game_sessions`
--

CREATE TABLE `game_sessions` (
  `id` varchar(255) NOT NULL,
  `context` varchar(255) NOT NULL,
  `game_type` varchar(20) NOT NULL,
  `started_at` datetime NOT NULL,
  `ended_at` datetime DEFAULT NULL,
  `duration_ms` bigint(20) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `moves` int(11) DEFAULT NULL,
  `is_valid` tinyint(1) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gamification_events`
--

CREATE TABLE `gamification_events` (
  `id` int(11) NOT NULL,
  `event_code` varchar(80) NOT NULL,
  `event_label` varchar(160) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `historique_scores`
--

CREATE TABLE `historique_scores` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `date_calcul` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `idItem` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `montant` double NOT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyc`
--

CREATE TABLE `kyc` (
  `id` int(11) NOT NULL,
  `cin` varchar(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `signature_path` varchar(255) DEFAULT NULL,
  `signature_uploaded_at` datetime DEFAULT NULL,
  `statut` varchar(255) NOT NULL,
  `commentaire_admin` longtext DEFAULT NULL,
  `date_submission` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyc_files`
--

CREATE TABLE `kyc_files` (
  `id` int(11) NOT NULL,
  `kyc_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `file_type` varchar(20) NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `file_data` longblob NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loanId` int(11) NOT NULL,
  `loanType` varchar(50) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `interest_rate` decimal(5,2) NOT NULL,
  `remaining_principal` decimal(12,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `createdAt` datetime NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `is_read` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp_audit`
--

CREATE TABLE `otp_audit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(190) DEFAULT NULL,
  `channel` varchar(20) NOT NULL,
  `event_type` varchar(20) NOT NULL,
  `request_id` varchar(64) DEFAULT NULL,
  `success` tinyint(1) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `validation_seconds` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code_hash` varchar(255) NOT NULL,
  `expires_at` datetime NOT NULL,
  `used_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `attempts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(500) NOT NULL,
  `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productsubscription`
--

CREATE TABLE `productsubscription` (
  `subscriptionId` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `subscriptionDate` date NOT NULL,
  `expirationDate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `id_publication` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `est_visible` tinyint(1) DEFAULT NULL,
  `date_publication` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `repayment`
--

CREATE TABLE `repayment` (
  `repayId` int(11) NOT NULL,
  `loanId` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `startingBalance` decimal(10,2) NOT NULL,
  `monthlyPayment` decimal(10,2) NOT NULL,
  `capitalPart` decimal(10,2) NOT NULL,
  `interestPart` decimal(10,2) NOT NULL,
  `remainingBalance` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `security_events`
--

CREATE TABLE `security_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(80) DEFAULT NULL,
  `type` varchar(40) NOT NULL,
  `metadata` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `montant` double NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` longtext DEFAULT NULL,
  `date_transaction` datetime NOT NULL,
  `id_wallet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `currentKycId` int(11) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numTel` varchar(20) DEFAULT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kycStatus` varchar(20) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_badges`
--

CREATE TABLE `user_badges` (
  `id` int(11) NOT NULL,
  `badge_code` varchar(80) NOT NULL,
  `badge_label` varchar(160) NOT NULL,
  `awarded_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_gamification`
--

CREATE TABLE `user_gamification` (
  `id` int(11) NOT NULL,
  `points_total` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `badges` varchar(255) DEFAULT NULL,
  `last_daily_game_at` date DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_login_audit`
--

CREATE TABLE `user_login_audit` (
  `id` int(11) NOT NULL,
  `email` varchar(190) DEFAULT NULL,
  `success` tinyint(1) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_qr_tokens`
--

CREATE TABLE `user_qr_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(120) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_security_challenges`
--

CREATE TABLE `user_security_challenges` (
  `id` int(11) NOT NULL,
  `challenge_code` varchar(80) NOT NULL,
  `challenge_title` varchar(160) NOT NULL,
  `status` varchar(20) NOT NULL,
  `progress` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id_wallet` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nom_proprietaire` varchar(100) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `code_acces` varchar(10) DEFAULT NULL,
  `est_actif` tinyint(1) DEFAULT NULL,
  `solde` decimal(15,2) NOT NULL,
  `plafond_decouvert` decimal(15,2) DEFAULT NULL,
  `devise` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL,
  `tentatives_echouees` int(11) DEFAULT NULL,
  `date_derniere_tentative` datetime DEFAULT NULL,
  `est_bloque` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_rewards`
--
ALTER TABLE `admin_rewards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2D1E9CBE642B8210` (`admin_id`);

--
-- Indexes for table `admin_tasks`
--
ALTER TABLE `admin_tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F0729E6DB445906B` (`external_ref`),
  ADD KEY `IDX_F0729E6DDE12AB56` (`created_by`),
  ADD KEY `IDX_F0729E6D89EEAF91` (`assigned_to`);

--
-- Indexes for table `admin_task_history`
--
ALTER TABLE `admin_task_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_411AF84C8DB60186` (`task_id`),
  ADD KEY `IDX_411AF84CC96EFF06` (`actor_admin_id`);

--
-- Indexes for table `alerte`
--
ALTER TABLE `alerte`
  ADD PRIMARY KEY (`idAlerte`),
  ADD KEY `IDX_3AE753AB597FD62` (`idCategorie`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CBE5A331F675F31B` (`author_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EF20C9A6A76ED395` (`user_id`);

--
-- Indexes for table `cheque`
--
ALTER TABLE `cheque`
  ADD PRIMARY KEY (`id_cheque`),
  ADD KEY `IDX_A0BBFDE95A5F27F2` (`id_wallet`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `IDX_D2294458B72EAA8E` (`id_publication`),
  ADD KEY `IDX_D22944586B3CA4B` (`id_user`);

--
-- Indexes for table `game_sessions`
--
ALTER TABLE `game_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_31246235A76ED395` (`user_id`);

--
-- Indexes for table `gamification_events`
--
ALTER TABLE `gamification_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_26A93BE3A76ED395` (`user_id`);

--
-- Indexes for table `historique_scores`
--
ALTER TABLE `historique_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `IDX_1F1B251EB597FD62` (`idCategorie`);

--
-- Indexes for table `kyc`
--
ALTER TABLE `kyc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_91850F8EABE530DA` (`cin`),
  ADD KEY `IDX_91850F8EA76ED395` (`user_id`);

--
-- Indexes for table `kyc_files`
--
ALTER TABLE `kyc_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CB1DA7297A0984B` (`kyc_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loanId`),
  ADD KEY `IDX_C5D30D036B3CA4B` (`id_user`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750` (`queue_name`,`available_at`,`delivered_at`,`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_audit`
--
ALTER TABLE `otp_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_843A7DCA76ED395` (`user_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B1017252A76ED395` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `productsubscription`
--
ALTER TABLE `productsubscription`
  ADD PRIMARY KEY (`subscriptionId`),
  ADD KEY `IDX_51544832C7440455` (`client`),
  ADD KEY `IDX_51544832D34A04AD` (`product`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publication`);

--
-- Indexes for table `repayment`
--
ALTER TABLE `repayment`
  ADD PRIMARY KEY (`repayId`),
  ADD KEY `IDX_50130A517F21A95F` (`loanId`);

--
-- Indexes for table `security_events`
--
ALTER TABLE `security_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `IDX_723705D15A5F27F2` (`id_wallet`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_badges`
--
ALTER TABLE `user_badges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1DA448A7A76ED395` (`user_id`);

--
-- Indexes for table `user_gamification`
--
ALTER TABLE `user_gamification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2BFCB17DA76ED395` (`user_id`);

--
-- Indexes for table `user_login_audit`
--
ALTER TABLE `user_login_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3D73F178A76ED395` (`user_id`);

--
-- Indexes for table `user_qr_tokens`
--
ALTER TABLE `user_qr_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2141F1425F37A13B` (`token`),
  ADD KEY `IDX_2141F142A76ED395` (`user_id`);

--
-- Indexes for table `user_security_challenges`
--
ALTER TABLE `user_security_challenges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EDA41AE7A76ED395` (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id_wallet`),
  ADD KEY `IDX_7C68921F6B3CA4B` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_rewards`
--
ALTER TABLE `admin_rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_tasks`
--
ALTER TABLE `admin_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_task_history`
--
ALTER TABLE `admin_task_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alerte`
--
ALTER TABLE `alerte`
  MODIFY `idAlerte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cheque`
--
ALTER TABLE `cheque`
  MODIFY `id_cheque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamification_events`
--
ALTER TABLE `gamification_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historique_scores`
--
ALTER TABLE `historique_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kyc`
--
ALTER TABLE `kyc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kyc_files`
--
ALTER TABLE `kyc_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loanId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_audit`
--
ALTER TABLE `otp_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productsubscription`
--
ALTER TABLE `productsubscription`
  MODIFY `subscriptionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repayment`
--
ALTER TABLE `repayment`
  MODIFY `repayId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `security_events`
--
ALTER TABLE `security_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_badges`
--
ALTER TABLE `user_badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_gamification`
--
ALTER TABLE `user_gamification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login_audit`
--
ALTER TABLE `user_login_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_qr_tokens`
--
ALTER TABLE `user_qr_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_security_challenges`
--
ALTER TABLE `user_security_challenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id_wallet` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_rewards`
--
ALTER TABLE `admin_rewards`
  ADD CONSTRAINT `FK_2D1E9CBE642B8210` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `admin_tasks`
--
ALTER TABLE `admin_tasks`
  ADD CONSTRAINT `FK_F0729E6D89EEAF91` FOREIGN KEY (`assigned_to`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_F0729E6DDE12AB56` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `admin_task_history`
--
ALTER TABLE `admin_task_history`
  ADD CONSTRAINT `FK_411AF84C8DB60186` FOREIGN KEY (`task_id`) REFERENCES `admin_tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_411AF84CC96EFF06` FOREIGN KEY (`actor_admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `alerte`
--
ALTER TABLE `alerte`
  ADD CONSTRAINT `FK_3AE753AB597FD62` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`) ON DELETE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `FK_CBE5A331F675F31B` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

--
-- Constraints for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD CONSTRAINT `FK_EF20C9A6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cheque`
--
ALTER TABLE `cheque`
  ADD CONSTRAINT `FK_A0BBFDE95A5F27F2` FOREIGN KEY (`id_wallet`) REFERENCES `wallet` (`id_wallet`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FK_D22944586B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D2294458B72EAA8E` FOREIGN KEY (`id_publication`) REFERENCES `publication` (`id_publication`) ON DELETE CASCADE;

--
-- Constraints for table `game_sessions`
--
ALTER TABLE `game_sessions`
  ADD CONSTRAINT `FK_31246235A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `gamification_events`
--
ALTER TABLE `gamification_events`
  ADD CONSTRAINT `FK_26A93BE3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `FK_1F1B251EB597FD62` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);

--
-- Constraints for table `kyc`
--
ALTER TABLE `kyc`
  ADD CONSTRAINT `FK_91850F8EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kyc_files`
--
ALTER TABLE `kyc_files`
  ADD CONSTRAINT `FK_CB1DA7297A0984B` FOREIGN KEY (`kyc_id`) REFERENCES `kyc` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `FK_C5D30D036B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `otp_audit`
--
ALTER TABLE `otp_audit`
  ADD CONSTRAINT `FK_843A7DCA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD CONSTRAINT `FK_B1017252A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `productsubscription`
--
ALTER TABLE `productsubscription`
  ADD CONSTRAINT `FK_51544832C7440455` FOREIGN KEY (`client`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_51544832D34A04AD` FOREIGN KEY (`product`) REFERENCES `product` (`productId`);

--
-- Constraints for table `repayment`
--
ALTER TABLE `repayment`
  ADD CONSTRAINT `FK_50130A517F21A95F` FOREIGN KEY (`loanId`) REFERENCES `loan` (`loanId`) ON DELETE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `FK_723705D15A5F27F2` FOREIGN KEY (`id_wallet`) REFERENCES `wallet` (`id_wallet`);

--
-- Constraints for table `user_badges`
--
ALTER TABLE `user_badges`
  ADD CONSTRAINT `FK_1DA448A7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_gamification`
--
ALTER TABLE `user_gamification`
  ADD CONSTRAINT `FK_2BFCB17DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_login_audit`
--
ALTER TABLE `user_login_audit`
  ADD CONSTRAINT `FK_3D73F178A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_qr_tokens`
--
ALTER TABLE `user_qr_tokens`
  ADD CONSTRAINT `FK_2141F142A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_security_challenges`
--
ALTER TABLE `user_security_challenges`
  ADD CONSTRAINT `FK_EDA41AE7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `FK_7C68921F6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
