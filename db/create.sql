-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Décembre 2015 à 01:23
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `nuitinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `nomCat` varchar(15) NOT NULL,
  PRIMARY KEY (`nomCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `crise`
--

CREATE TABLE IF NOT EXISTS `crise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taux` int(11) NOT NULL,
  `desc` text NOT NULL,
  `gps` varchar(15) NOT NULL,
  `statut` varchar(15) NOT NULL,
  `cat` varchar(15) NOT NULL,
  `date_cre` date NOT NULL,
  `date_val` date NOT NULL,
  `date_gere` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat` (`cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `auteur` int(11) NOT NULL,
  `dateheure` date NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`auteur`,`dateheure`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ong`
--

CREATE TABLE IF NOT EXISTS `ong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `salt` int(11) NOT NULL,
  `recover` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `tel` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ongavectypecrise`
--

CREATE TABLE IF NOT EXISTS `ongavectypecrise` (
  `nomCat` varchar(15) NOT NULL,
  `idOng` int(11) NOT NULL,
  PRIMARY KEY (`nomCat`,`idOng`),
  KEY `idOng` (`idOng`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `crise`
--
ALTER TABLE `crise`
  ADD CONSTRAINT `duTypeCrise` FOREIGN KEY (`cat`) REFERENCES `categorie` (`nomCat`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`auteur`) REFERENCES `ong` (`id`);

--
-- Contraintes pour la table `ongavectypecrise`
--
ALTER TABLE `ongavectypecrise`
  ADD CONSTRAINT `ongavectypecrise_ibfk_2` FOREIGN KEY (`idOng`) REFERENCES `ong` (`id`),
  ADD CONSTRAINT `ongavectypecrise_ibfk_1` FOREIGN KEY (`nomCat`) REFERENCES `categorie` (`nomCat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

