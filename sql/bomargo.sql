-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 29 Avril 2015 à 14:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bomargo`
--

-- --------------------------------------------------------

--
-- Structure de la table `mots`
--

CREATE TABLE IF NOT EXISTS `mots` (
  `idMot` int(11) NOT NULL AUTO_INCREMENT,
  `contenuMot` varchar(50) NOT NULL,
  `nbPointsMot` int(11) NOT NULL,
  `idThemeMot` int(11) NOT NULL,
  `dureeMot` float DEFAULT NULL,
  PRIMARY KEY (`idMot`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `mots`
--

INSERT INTO `mots` (`idMot`, `contenuMot`, `nbPointsMot`, `idThemeMot`, `dureeMot`) VALUES
(1, '1', 1, 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `idTheme` int(11) NOT NULL AUTO_INCREMENT,
  `nomTheme` varchar(50) NOT NULL,
  `dureeTheme` float DEFAULT NULL,
  PRIMARY KEY (`idTheme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `themes`
--

INSERT INTO `themes` (`idTheme`, `nomTheme`, `dureeTheme`) VALUES
(1, 'test', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
