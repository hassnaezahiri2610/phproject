-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 23 avr. 2020 à 03:05
-- Version du serveur :  10.3.18-MariaDB
-- Version de PHP : 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id12857167_restaurant`
--
CREATE DATABASE IF NOT EXISTS `id12857167_restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id12857167_restaurant`;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `name`, `file_url`) VALUES
(3, 'Atelier sur Servlet.pdf', 'files/Atelier sur Servlet.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(20) NOT NULL,
  `prix_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_client`, `id_produit`, `quantite`, `prix_total`) VALUES
(1, 1, 7, 2, 24),
(2, 2, 3, 1, 74);

-- --------------------------------------------------------

--
-- Structure de la table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Soupe', 'sp', 'img/food/soupe.jpg', 15.00),
(2, 'Spagui', 'spa', 'img/food/spagui.jpg', 34.00),
(3, 'Meat', 'mea', 'img/food/meat.jpg', 74.00),
(4, 'Passtilla', 'pas', 'img/food/passtilla.jpg', 45.00),
(5, 'Poisson', 'poi', 'img/food/poisson.jpg', 55.00),
(6, 'Salade', 'sal', 'img/food/salade.jpg', 12.00),
(7, 'Lasagne', 'lasa', 'img/food/lasagne.jpg', 30.00),
(8, 'Grattain', 'gra', 'img/food/grattain.jpg', 40.00);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `city`, `zip`) VALUES
(1, 'Ouiam El', 'ouiam@email.com', 'ouiam123', '230 Bat.3', 'Agadir', 1000),
(2, 'Hassnae', 'Hassnae@email.com', 'hassnae123', 'RABAT35', 'Rabat', 10200),
(3, 'wiam', 'wiam@gmail.com', 'hehoo', 'hay adrar', 'agadir', 1234),
(4, 'wiam', 'wiam@gmail.com', 'wiam', 'hay adrar', 'agadir', 1234),
(5, 'hassnae zahiri', 'hassnaezahiri2610@gmail.com', 'glinthassnae', 'agadir65', 'agadir', 1004),
(6, 'wiam', 'wiam@gmail.com', 'wiam', 'hay adrar', 'agadir', 1234),
(7, 'wiam', 'wiam@gmail.com', 'wiam', 'hay adrar', 'agadir', 1234),
(8, 'wiam', 'wiam@gmail.com', 'wiam', 'hay adrar', 'agadir', 1234),
(9, 'zineb', 'zinebb.hadafi@gmail.com', 'zineb1998', 'Tildi bloc 4 N 40 quartier industriel', 'Agadir', 80000),
(10, 'samir', 'samir@gmail.com', '', '', 'agadir', 19999),
(11, 'wiam', 'wiam@gmail.com', 'wiam', 'hay adrar', 'agadir', 1234),
(12, 'wiam', 'wiam@gmail.com', 'wiam', 'hay adrar', 'agadir', 1234),
(13, 'wiam', 'wiam@gmail.com', 'hhh', 'hay adrar', 'agadir', 1234),
(14, 'wiam', 'wiam@gmail.com', 'hhhh', 'hay adrar', 'agadir', 1234),
(15, 'samir', 'samir@gmail.com', 'samir', 'adrar', 'agadir', 19999),
(16, 'samir', 'samir@gmail.com', 'hassan', 'adrar', 'agadir', 19999),
(17, 'fatiha', 'fatiha@gmail.com', 'fatiha', 'adrar', 'agadir', 1000),
(18, 'adam_elouaham', 'adamelouaham@gmail.com', 'adam', 'hay adrar', 'agadir', 1234);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panier_user_FK` (`id_client`),
  ADD KEY `panier_Produit_FK` (`id_produit`);

--
-- Index pour la table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_Produit_FK` FOREIGN KEY (`id_produit`) REFERENCES `tblproduct` (`id`),
  ADD CONSTRAINT `panier_user_FK` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
