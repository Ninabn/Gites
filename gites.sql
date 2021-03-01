-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 01 mars 2021 à 10:48
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gites`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins_users`
--

DROP TABLE IF EXISTS `admins_users`;
CREATE TABLE IF NOT EXISTS `admins_users` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(250) NOT NULL,
  `password_admin` varchar(250) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categories_gites`
--

DROP TABLE IF EXISTS `categories_gites`;
CREATE TABLE IF NOT EXISTS `categories_gites` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gites`
--

DROP TABLE IF EXISTS `gites`;
CREATE TABLE IF NOT EXISTS `gites` (
  `id_gite` int(11) NOT NULL AUTO_INCREMENT,
  `name_gite` varchar(250) NOT NULL,
  `description_gite` varchar(250) NOT NULL,
  `price_gite` float NOT NULL,
  `img_gite` varchar(250) NOT NULL,
  `nbr_chambre` int(11) NOT NULL,
  `nbr_sdb` int(11) NOT NULL,
  `dispo_gite` tinyint(1) NOT NULL,
  `zone_geo` varchar(250) NOT NULL,
  `date_arrivee` datetime NOT NULL,
  `date_depart` datetime NOT NULL,
  `categories_gite` varchar(250) NOT NULL,
  PRIMARY KEY (`id_gite`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(250) NOT NULL,
  `password_user` varchar(250) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
