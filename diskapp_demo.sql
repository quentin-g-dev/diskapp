-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 07 avr. 2021 à 18:17
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `diskapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

CREATE TABLE `artist` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curator_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `artist`
--

INSERT INTO `artist` (`id`, `name`, `curator_id`) VALUES
(47, 'Vitalic', 6566),
(48, 'Bob Marley', 6566),
(49, 'Sharif', 6566),
(50, 'Mala Rodriguez', 6566),
(51, 'Arthur Schoonderwoerd', 6566);

-- --------------------------------------------------------

--
-- Structure de la table `disk`
--

CREATE TABLE `disk` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `production` int DEFAULT NULL,
  `published` date NOT NULL,
  `style` int DEFAULT NULL,
  `stock` int NOT NULL,
  `registered` date NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` int DEFAULT NULL,
  `curator_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `disk`
--

INSERT INTO `disk` (`id`, `name`, `production`, `published`, `style`, `stock`, `registered`, `img`, `barcode`, `artist`, `curator_id`) VALUES
(62, 'O.K. Cowboy', 16, '2005-04-04', 22, 0, '2021-04-07', '/assets/img/upload/O.K. Cowboy__Vitalic./', 'B0007Q6PVU', 47, 6566),
(63, 'Legend', 17, '2009-03-10', 23, 0, '2021-04-07', '/assets/img/upload/Legend__Bob Marley./', 'B000V7J82S', 48, 6566),
(64, 'Bajo El Rayo Que No Cesa', 18, '2015-02-05', 24, 0, '2021-04-07', '/assets/img/upload/Bajo El Rayo Que No Cesa__Sharif./', 'B017KA20A0', 49, 6566),
(65, 'Bruja', 19, '2014-04-11', 24, 0, '2021-04-07', '/assets/img/upload/Bruja__Mala Rodriguez./', '602537405282', 50, 6566),
(66, 'Chopin: Ballades & Nocturnes', 18, '2014-05-09', 25, 0, '2021-04-07', '/assets/img/upload/Chopin: Ballades & Nocturnes__Arthur Schoonderwoerd./', 'B012XQJYIC', 51, 6566);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210320162011', '2021-03-20 17:22:16', 166),
('DoctrineMigrations\\Version20210321102018', '2021-03-21 11:21:03', 47),
('DoctrineMigrations\\Version20210321173132', '2021-03-21 18:31:43', 157),
('DoctrineMigrations\\Version20210322144400', '2021-03-22 15:44:18', 188),
('DoctrineMigrations\\Version20210322152359', '2021-03-22 16:25:56', 91),
('DoctrineMigrations\\Version20210405145316', '2021-04-05 18:23:01', 1176),
('DoctrineMigrations\\Version20210407074959', '2021-04-07 09:51:14', 1620);

-- --------------------------------------------------------

--
-- Structure de la table `production`
--

CREATE TABLE `production` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curator_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `production`
--

INSERT INTO `production` (`id`, `name`, `curator_id`) VALUES
(16, 'Different Recor', 6566),
(17, 'Universal Music', 6566),
(18, 'Boa Hip Hop', 6566),
(19, 'Mis', 6566);

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `style`
--

CREATE TABLE `style` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curator_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `style`
--

INSERT INTO `style` (`id`, `name`, `curator_id`) VALUES
(22, 'Techno', 6566),
(23, 'Reggae', 6566),
(24, 'Rap', 6566),
(25, 'Classique', 6566);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `last_connected` date DEFAULT NULL,
  `actions_counter` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`, `email`, `is_verified`, `last_connected`, `actions_counter`) VALUES
(6566, 'quentin-g.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$0r7PySIJvNzMWsBR/rWNLQ$xj8EA9DRGpRnPZ3+429CkyOcgXAY49QqXJqs9xjdOPM', 'quentin@quentin-g.com', 0, '2021-04-07', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1599687733D5B5D` (`curator_id`);

--
-- Index pour la table `disk`
--
ALTER TABLE `disk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C74DD021599687` (`artist`),
  ADD KEY `IDX_C74DD02D3EDB1E0` (`production`),
  ADD KEY `IDX_C74DD0233BDB86A` (`style`),
  ADD KEY `IDX_C74DD02733D5B5D` (`curator_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D3EDB1E0733D5B5D` (`curator_id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_33BDB86A733D5B5D` (`curator_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `disk`
--
ALTER TABLE `disk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `production`
--
ALTER TABLE `production`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `style`
--
ALTER TABLE `style`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6567;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `FK_1599687733D5B5D` FOREIGN KEY (`curator_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `disk`
--
ALTER TABLE `disk`
  ADD CONSTRAINT `FK_C74DD021599687` FOREIGN KEY (`artist`) REFERENCES `artist` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C74DD0233BDB86A` FOREIGN KEY (`style`) REFERENCES `style` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C74DD02733D5B5D` FOREIGN KEY (`curator_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_C74DD02D3EDB1E0` FOREIGN KEY (`production`) REFERENCES `production` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `production`
--
ALTER TABLE `production`
  ADD CONSTRAINT `FK_D3EDB1E0733D5B5D` FOREIGN KEY (`curator_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `style`
--
ALTER TABLE `style`
  ADD CONSTRAINT `FK_33BDB86A733D5B5D` FOREIGN KEY (`curator_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
