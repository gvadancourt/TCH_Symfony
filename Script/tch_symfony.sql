-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Novembre 2017 à 14:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tch_symfony`
--
CREATE DATABASE IF NOT EXISTS `tch_symfony` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `tch_symfony`;

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

CREATE TABLE IF NOT EXISTS `article_categorie` (
  `article_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`categorie_id`),
  KEY `IDX_934886107294869C` (`article_id`),
  KEY `IDX_93488610BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `article_categorie`
--

INSERT INTO `article_categorie` (`article_id`, `categorie_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(6, 1),
(6, 2),
(6, 3),
(6, 4);

-- --------------------------------------------------------

--
-- Structure de la table `tch_abonne`
--

CREATE TABLE IF NOT EXISTS `tch_abonne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5BD31EE57E9E4C8C` (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tch_abonne`
--

INSERT INTO `tch_abonne` (`id`, `nom`, `prenom`, `email`, `photo_id`) VALUES
(1, 'Dupont', 'Pierre', 'pierredupont@gmail.fr', 1),
(2, 'Guitre', 'Jean', 'guitre@gmail.fr', 2),
(3, 'ALVERTIN', 'Isabelle', 'ialbertin@gmail.fr', 3);

-- --------------------------------------------------------

--
-- Structure de la table `tch_article`
--

CREATE TABLE IF NOT EXISTS `tch_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `publication` tinyint(1) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `dateModification` datetime DEFAULT NULL,
  `nbCommentaires` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6FCA0B183DA5256D` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Contenu de la table `tch_article`
--

INSERT INTO `tch_article` (`id`, `date`, `titre`, `auteur`, `contenu`, `publication`, `image_id`, `dateModification`, `nbCommentaires`) VALUES
(1, '2017-10-20 09:22:44', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, 1, '0000-00-00 00:00:00', 0),
(2, '2017-10-20 09:27:56', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, NULL, '0000-00-00 00:00:00', 0),
(3, '2017-10-20 09:28:35', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, NULL, '0000-00-00 00:00:00', 0),
(4, '2017-10-20 09:37:10', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, NULL, '0000-00-00 00:00:00', 0),
(5, '2017-10-20 09:37:49', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, NULL, '0000-00-00 00:00:00', 0),
(6, '2017-10-24 09:38:56', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, NULL, '2017-11-10 09:05:37', 0),
(7, '2017-10-24 09:39:10', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, NULL, '0000-00-00 00:00:00', 0),
(9, '2017-10-24 10:50:39', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, 2, '0000-00-00 00:00:00', 0),
(10, '2017-10-24 10:56:34', 'Symfony - Installation', 'Chevalier', 'Procédure d''installation de Symfony', 1, 3, '0000-00-00 00:00:00', 0),
(11, '2017-10-30 17:24:30', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(12, '2017-10-30 17:26:52', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(13, '2017-10-30 17:28:22', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(14, '2017-10-30 17:30:48', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(15, '2017-11-04 19:36:48', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(16, '2017-11-04 19:37:14', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(17, '2017-11-04 19:37:31', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(18, '2017-11-04 19:39:23', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(27, '2017-11-04 19:51:51', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(28, '2017-11-04 19:52:10', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(29, '2017-11-05 18:28:40', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, NULL, '0000-00-00 00:00:00', 0),
(31, '2017-11-05 19:25:14', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, 4, '0000-00-00 00:00:00', 0),
(32, '2017-11-05 19:50:36', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, 5, '0000-00-00 00:00:00', 0),
(33, '2017-11-08 14:51:16', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, 6, '0000-00-00 00:00:00', 0),
(34, '2017-11-10 09:05:09', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, 7, '2017-11-10 09:05:09', 0),
(35, '2017-11-10 09:13:10', 'Symfony - Entité', 'BTS-SIO', 'Apprendre à gérer des Entités', 1, 8, '2017-11-10 09:13:10', 2),
(36, '2017-11-10 00:00:00', 'dedef', 'fezf', 'fezfe', 0, NULL, NULL, 0),
(37, '2017-11-10 00:00:00', 'dv', 'vds', 'vds', 0, NULL, NULL, 0),
(38, '2017-11-10 00:00:00', 'test', 'fezfef', 'fezefe', 1, NULL, NULL, 0),
(48, '2017-11-13 00:00:00', 'testfezfzefz', 'fezfe', 'fezfefze', 1, 17, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `tch_articlecompetence`
--

CREATE TABLE IF NOT EXISTS `tch_articlecompetence` (
  `article_id` int(11) NOT NULL,
  `competence_id` int(11) NOT NULL,
  `niveau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`article_id`,`competence_id`),
  KEY `IDX_FB3D539D7294869C` (`article_id`),
  KEY `IDX_FB3D539D15761DAB` (`competence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tch_articlecompetence`
--

INSERT INTO `tch_articlecompetence` (`article_id`, `competence_id`, `niveau`) VALUES
(32, 1, 'Expert'),
(32, 2, 'Expert'),
(32, 3, 'Expert'),
(33, 1, 'Expert'),
(33, 2, 'Expert'),
(33, 3, 'Expert'),
(34, 1, 'Expert'),
(34, 2, 'Expert'),
(34, 3, 'Expert'),
(35, 1, 'Expert'),
(35, 2, 'Expert'),
(35, 3, 'Expert');

-- --------------------------------------------------------

--
-- Structure de la table `tch_categorie`
--

CREATE TABLE IF NOT EXISTS `tch_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tch_categorie`
--

INSERT INTO `tch_categorie` (`id`, `nom`) VALUES
(1, 'Symfony'),
(2, 'Doctrine'),
(3, 'Tutoriel'),
(4, 'Evènement');

-- --------------------------------------------------------

--
-- Structure de la table `tch_commentaire`
--

CREATE TABLE IF NOT EXISTS `tch_commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CD6481A07294869C` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `tch_commentaire`
--

INSERT INTO `tch_commentaire` (`id`, `article_id`, `auteur`, `contenu`, `date`) VALUES
(1, 9, 'Auteur1', 'Quelques difficultés de compréhension', '2017-10-20 10:50:39'),
(2, 9, 'Auteur2', 'TP réalisé facilement. Signé : Victor', '2017-10-20 10:50:39'),
(3, 10, 'Auteur1', 'Quelques difficultés de compréhension', '2017-10-20 10:56:34'),
(4, 10, 'Auteur2', 'TP réalisé facilement. Signé : Victor', '2017-10-20 10:56:34'),
(5, 31, 'Auteur1', 'Quelques difficultés de compréhension', '2017-11-05 19:25:15'),
(6, 31, 'Auteur2', 'TP réalisé facilement. Signé : Victor', '2017-11-05 19:25:15'),
(7, 32, 'Auteur1', 'Quelques difficultés de compréhension', '2017-11-05 19:50:36'),
(8, 32, 'Auteur2', 'TP réalisé facilement. Signé : Victor', '2017-11-05 19:50:36'),
(9, 33, 'Auteur1', 'Quelques difficultés de compréhension', '2017-11-08 14:51:16'),
(10, 33, 'Auteur2', 'TP réalisé facilement. Signé : Victor', '2017-11-08 14:51:16'),
(11, 34, 'Auteur1', 'Quelques difficultés de compréhension', '2017-11-10 09:05:09'),
(12, 34, 'Auteur2', 'TP réalisé facilement. Signé : Victor', '2017-11-10 09:05:09'),
(13, 35, 'Auteur1', 'Quelques difficultés de compréhension', '2017-11-10 09:13:10'),
(14, 35, 'Auteur2', 'TP réalisé facilement. Signé : Victor', '2017-11-10 09:13:10');

-- --------------------------------------------------------

--
-- Structure de la table `tch_competence`
--

CREATE TABLE IF NOT EXISTS `tch_competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tch_competence`
--

INSERT INTO `tch_competence` (`id`, `nom`) VALUES
(1, 'Doctrine'),
(2, 'Formulaire'),
(3, 'Twig');

-- --------------------------------------------------------

--
-- Structure de la table `tch_image`
--

CREATE TABLE IF NOT EXISTS `tch_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Contenu de la table `tch_image`
--

INSERT INTO `tch_image` (`id`, `url`, `alt`) VALUES
(1, '../../../../web/img/symfony_logo.png', 'Symfony'),
(2, '../../../../web/img/symfony_logo.png', 'Symfony'),
(3, '../../../../web/img/symfony_logo.png', 'Symfony'),
(4, '../../../../web/img/symfony_logo.png', 'Symfony'),
(5, '../../../../web/img/symfony_logo.png', 'Symfony'),
(6, '../../../../web/img/symfony_logo.png', 'Symfony'),
(7, '../../../../web/img/symfony_logo.png', 'Symfony'),
(8, '../../../../web/img/symfony_logo.png', 'Symfony'),
(17, 'png', 'symfony_logo.png');

-- --------------------------------------------------------

--
-- Structure de la table `tch_photo`
--

CREATE TABLE IF NOT EXISTS `tch_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tch_photo`
--

INSERT INTO `tch_photo` (`id`, `URL`) VALUES
(1, '../../../../web/img/mechant.jpg'),
(2, '../../../../web/img/louis.jpg'),
(3, '../../../../web/img/walter.jpg');

-- --------------------------------------------------------
    
--
-- Structure de la table `tch_user`
--

CREATE TABLE IF NOT EXISTS `tch_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_94003BC1F85E0677` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tch_user`
--

INSERT INTO `tch_user` (`id`, `username`, `password`, `salt`, `roles`) VALUES
(1, 'Thomas', '123', '', 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:10:"ROLE_ADMIN";}'),
(2, 'Jeannot', 'SalutCestMoi', '', 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:17:"ROLE_GESTIONNAIRE";}');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  ADD CONSTRAINT `FK_934886107294869C` FOREIGN KEY (`article_id`) REFERENCES `tch_article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_93488610BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `tch_categorie` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tch_abonne`
--
ALTER TABLE `tch_abonne`
  ADD CONSTRAINT `FK_5BD31EE57E9E4C8C` FOREIGN KEY (`photo_id`) REFERENCES `tch_photo` (`id`);

--
-- Contraintes pour la table `tch_article`
--
ALTER TABLE `tch_article`
  ADD CONSTRAINT `FK_6FCA0B183DA5256D` FOREIGN KEY (`image_id`) REFERENCES `tch_image` (`id`);

--
-- Contraintes pour la table `tch_articlecompetence`
--
ALTER TABLE `tch_articlecompetence`
  ADD CONSTRAINT `FK_FB3D539D15761DAB` FOREIGN KEY (`competence_id`) REFERENCES `tch_competence` (`id`),
  ADD CONSTRAINT `FK_FB3D539D7294869C` FOREIGN KEY (`article_id`) REFERENCES `tch_article` (`id`);

--
-- Contraintes pour la table `tch_commentaire`
--
ALTER TABLE `tch_commentaire`
  ADD CONSTRAINT `FK_CD6481A07294869C` FOREIGN KEY (`article_id`) REFERENCES `tch_article` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
