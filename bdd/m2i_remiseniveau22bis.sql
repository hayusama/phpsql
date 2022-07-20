-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 juil. 2022 à 06:42
-- Version du serveur : 5.7.21
-- Version de PHP : 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `m2i_remiseniveau22bis`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse_livraison`
--

DROP TABLE IF EXISTS `adresse_livraison`;
CREATE TABLE IF NOT EXISTS `adresse_livraison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_utilisateur_adresse_livraison` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse_livraison`
--

INSERT INTO `adresse_livraison` (`id`, `id_user`, `nom`, `adresse`, `cp`, `ville`, `pays`) VALUES
(1, 1, 'domicile', '12 rue du test', '59000', 'lille', 'France'),
(2, 1, 'travail', '52 rue du marché', '69000', 'Lyon', 'France'),
(3, 1, 'Vacances', '12 rue du soleil', '13000', 'Marseille', 'France'),
(4, 1, 'Domicile 2', '522 rue du chemin', '59000', 'Lille', 'France'),
(5, 3, 'domicile', '12 rue du test', '59000', 'Lille', 'France'),
(6, 3, 'domicile', '12 rue du test', '59000', 'Lille', 'France'),
(7, 4, 'domicile', '12 rue du test', '59000', 'Lille', 'France'),
(8, 5, 'Domicile', '12, rue du test', '59000', 'Lille', 'France'),
(9, 5, 'Domicile', '12, rue du test', '59000', 'Lille', 'France'),
(10, 5, 'Domicile', '12, rue du test', '59000', 'Lille', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `badge`
--

DROP TABLE IF EXISTS `badge`;
CREATE TABLE IF NOT EXISTS `badge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `badge`
--

INSERT INTO `badge` (`id`, `nom`, `description`) VALUES
(1, 'ancien', 'Vous êtes là depuis longtemps'),
(2, 'Intello', 'Vous avez aider de nombreuses personnes'),
(3, 'Récurrent', 'Vous êtes connecté souvent');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(120) DEFAULT NULL,
  `prenom` varchar(120) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `adresse_rue` varchar(255) DEFAULT NULL,
  `pays` varchar(150) DEFAULT NULL,
  `ville` varchar(150) DEFAULT NULL,
  `code_postal` varchar(15) DEFAULT NULL,
  `nombre_achat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `date_naissance`, `adresse_rue`, `pays`, `ville`, `code_postal`, `nombre_achat`) VALUES
(1, 'Paris', 'anthony', 'test@test.fr', '2021-02-02', '1, rue du test', 'France', 'Cambrai', '59400', 51),
(3, 'Hello', 'Florian', 'jack.doe@hotmail.fr', '2020-01-21', '7, rue du panier', 'Norvège', 'Bergen', '59000', 51),
(4, 'Zidane', 'Zinedine', 'zizou@fff.fr', '1970-05-01', '3, rue du test', 'France', 'Lille', '59000', 81),
(5, 'Simpson', 'Bart', 'bart@fff.fr', '1960-05-01', '14, rue de peau', 'France', 'Lille', '59000', 61),
(6, 'Paris', 'Julien', 'juju@fff.fr', '1990-05-01', '14, rue de la chason', 'France', 'Bordeaux', '59000', 34),
(7, 'Lefebvre', 'Maggy', 'maggy@hotmail.fr', '1992-11-10', '3 rue des chardonniers', 'France', 'Cambrai', '59400', 33),
(8, 'Ponney', 'Petit', 'petitponney@test.fr', '2008-02-01', 'Rue des chevaux', 'France', 'Lille', '59000', 10);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_badge`
--

DROP TABLE IF EXISTS `utilisateur_badge`;
CREATE TABLE IF NOT EXISTS `utilisateur_badge` (
  `id_user` int(11) NOT NULL,
  `id_badge` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_badge`),
  KEY `fk_badge_utilisateur_badge` (`id_badge`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur_badge`
--

INSERT INTO `utilisateur_badge` (`id_user`, `id_badge`) VALUES
(1, 1),
(3, 1),
(7, 1),
(1, 2),
(3, 2),
(4, 2),
(6, 2),
(8, 2),
(4, 3),
(5, 3),
(7, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse_livraison`
--
ALTER TABLE `adresse_livraison`
  ADD CONSTRAINT `fk_utilisateur_adresse_livraison` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `utilisateur_badge`
--
ALTER TABLE `utilisateur_badge`
  ADD CONSTRAINT `fk_badge_utilisateur_badge` FOREIGN KEY (`id_badge`) REFERENCES `badge` (`id`),
  ADD CONSTRAINT `fk_utilisateur_utilisateur_badge` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
