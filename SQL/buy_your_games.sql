-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 fév. 2021 à 10:27
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `buy_your_games`
--
CREATE DATABASE IF NOT EXISTS `buy_your_games` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `buy_your_games`;

-- --------------------------------------------------------

--
-- Structure de la table `byg_categorie`
--

DROP TABLE IF EXISTS `byg_categorie`;
CREATE TABLE IF NOT EXISTS `byg_categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Catégorie = Plateforme sur laquel est le jeu',
  `libelleCategorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='les différentes catégories existantes pour les jeux';

--
-- Déchargement des données de la table `byg_categorie`
--

INSERT INTO `byg_categorie` (`idCategorie`, `libelleCategorie`) VALUES
(1, 'TOUS'),
(2, 'PC'),
(3, 'SonyPS4'),
(4, 'Microsoft WIN10/XBOX'),
(5, 'Nintendo');

-- --------------------------------------------------------

--
-- Structure de la table `byg_membre`
--

DROP TABLE IF EXISTS `byg_membre`;
CREATE TABLE IF NOT EXISTS `byg_membre` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `numTelephone` int(10) NOT NULL,
  `confirmKey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmer` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Liste de tous les membres inscrits';

--
-- Déchargement des données de la table `byg_membre`
--

INSERT INTO `byg_membre` (`id`, `username`, `password`, `email`, `numTelephone`, `confirmKey`, `confirmer`) VALUES
(23, 'admin', 'toor', 'admin@gmail.com', 540546504, '56862890111', 1),
(24, 'user', 'user', 'user@gmail.com', 645106655, '9088368355', 1);

-- --------------------------------------------------------

--
-- Structure de la table `byg_produit`
--

DROP TABLE IF EXISTS `byg_produit`;
CREATE TABLE IF NOT EXISTS `byg_produit` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jaquette` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `idCategorie` int(255) DEFAULT NULL,
  `idSousCategorie` int(255) DEFAULT NULL,
  PRIMARY KEY (`idProduit`),
  KEY `FK_produitCat` (`idCategorie`),
  KEY `FK_ssCategorie` (`idSousCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Liste tous les produits dématérialisé disponible sur le site';

--
-- Déchargement des données de la table `byg_produit`
--

INSERT INTO `byg_produit` (`idProduit`, `nomProduit`, `description`, `jaquette`, `prix`, `idCategorie`, `idSousCategorie`) VALUES
(1, 'Temtem', 'Mieux que Pokémon !!!', 'Temtem.png', 29.99, 1, 3),
(2, 'CyberPunk 2077', 'Le jeu avec keanu reeves la', 'Cyberpunk_2077.jpg', 49.99, 1, 7),
(3, 'Call Of Duty: Modern Warfare', 'Et ça fait BIM-BAM-BOOM', 'ModerWarfare.png', 39.99, 1, 2),
(4, 'Celeste', 'Ceci est une description', 'Celeste.png', 17.49, 1, 3),
(5, 'Rocket-league', 'Roquette quequette !!', 'Rocket-league.jpg', 20, 1, 8),
(6, 'Forza Horizon 4', 'Vroom!', 'ForzaHorizon4.jpg', 31.02, 4, 4),
(7, 'Forza Motorsport 7', '130 sur le periph!', 'ForzaMotorsport7.jpg', 24.8, 4, 4),
(8, 'Death Stranding', 'Chevilles en carton', 'DeathStranding.jpg', 10.1, 3, 7),
(9, 'Minecraft', 'Creeper! Aww Man!!', 'Minecraft.jpg', 20.1, 1, 5),
(10, 'The Elder Scrolls V: Skyrim', 'Fus Roh Dah', 'Skyrim.jpg', 9.9, 1, 7),
(11, 'Rocksmith Edition 2014', 'The Dooo', 'Rocksmith.jpg', 9, 1, 6),
(12, 'Pokémon Épée', 'Pikachoom!', 'PokemonEpee.jpg', 43.7, 5, 3),
(13, 'The Last of Us', 'Il boit son verre comme les autres', 'TheLastOfUs.jpg', 15.8, 3, 7),
(14, 'Grand Theft Auto V', 'Jetpack?', 'GTA5.jpg', 10.99, 1, 7),
(15, 'The Witcher 3: Wild Hunt', 'Fus, Roh... Ah non c\'est pas ce jeu la', 'TheWitcher3.jpg', 13.4, 1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `byg_sscategorie`
--

DROP TABLE IF EXISTS `byg_sscategorie`;
CREATE TABLE IF NOT EXISTS `byg_sscategorie` (
  `idSousCategorie` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Sous Catégorie = Le type de jeux',
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idSousCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Les différentes sous catégories de produit';

--
-- Déchargement des données de la table `byg_sscategorie`
--

INSERT INTO `byg_sscategorie` (`idSousCategorie`, `libelle`) VALUES
(2, 'FPS'),
(3, 'Aventure'),
(4, 'Courses'),
(5, 'Sandbox'),
(6, 'Musique'),
(7, 'Action/Aventure'),
(8, 'Multijoueur/Voitures/Football');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `byg_produit`
--
ALTER TABLE `byg_produit`
  ADD CONSTRAINT `FK_produitCat` FOREIGN KEY (`idCategorie`) REFERENCES `byg_categorie` (`idCategorie`),
  ADD CONSTRAINT `FK_ssCategorie` FOREIGN KEY (`idSousCategorie`) REFERENCES `byg_sscategorie` (`idSousCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
