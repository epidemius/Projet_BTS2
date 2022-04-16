-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 12 fév. 2022 à 11:36
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `identifiant` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`identifiant`, `mdp`) VALUES
('admin', 'mdp'),
('', ''),
('admin', 'mdp'),
('', '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Fidele` tinyint(1) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `notif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `Nom`, `Prenom`, `Mail`, `Fidele`, `mdp`, `notif`) VALUES
(1, 'MESSAGER', 'Jeremy', 'jeremy.messager@gmaul.fr', 1, '1234', 0);

-- --------------------------------------------------------

--
-- Structure de la table `historique_ticket`
--

DROP TABLE IF EXISTS `historique_ticket`;
CREATE TABLE IF NOT EXISTS `historique_ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `id_produit` varchar(100) NOT NULL,
  `Prix_Tot` int(100) NOT NULL,
  `Send` tinyint(1) NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_ticket`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_Produit` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Produit` varchar(50) NOT NULL,
  `Prix` double NOT NULL,
  `Nutriscore` varchar(2) NOT NULL,
  PRIMARY KEY (`id_Produit`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_Produit`, `Nom_Produit`, `Prix`, `Nutriscore`) VALUES
(1, 'Nutella', 2.5, 'E'),
(2, 'Coca-cola', 1.35, 'E'),
(3, 'Volvic', 1.99, 'A'),
(4, 'NESQUIK', 2.89, 'B'),
(5, 'Moutarde', 0.89, 'C'),
(6, 'Ketchup', 2.39, 'D'),
(7, 'Perrier', 0.89, 'A'),
(8, 'Weetabix', 3.89, 'A'),
(9, 'Wasa', 1.04, 'A'),
(10, 'Figolu', 1.54, 'D');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
