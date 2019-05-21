-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 mai 2019 à 06:44
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinemet`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
CREATE TABLE IF NOT EXISTS `acteurs` (
  `id_act` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(150) NOT NULL,
  PRIMARY KEY (`id_act`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id_act`, `designation`) VALUES
(3, 'Scarlett Johanson'),
(4, 'Robert Downey Jr.'),
(5, 'Chris Hemsworth'),
(6, 'Chris Evans'),
(7, 'Mark Ruffalo'),
(8, 'Jeremy Renner'),
(9, 'Samuel L. Jackson'),
(10, 'Gwyneth Paltrow'),
(11, 'Alexandra Lamy'),
(12, 'Josiane Balasko'),
(13, 'Frank Dubosc'),
(14, 'Lionel Abelanski'),
(15, 'Jude Law'),
(16, 'Brie Larson'),
(17, 'Ben Mendelson'),
(18, 'ANGIE');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(250) NOT NULL,
  KEY `id_categorie` (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `description`) VALUES
(1, 'Drame'),
(2, 'Polar'),
(3, 'Thriller'),
(4, 'Parodie'),
(5, 'Western'),
(6, 'Conte'),
(7, 'Slasher');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(35) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `duree` time NOT NULL,
  `infos` text NOT NULL,
  `avis` int(11) NOT NULL,
  `liphoto` varchar(150) NOT NULL,
  `cat_csa` varchar(10) NOT NULL,
  `datyfin` date NOT NULL,
  `acteur` varchar(150) NOT NULL,
  `realisateur` varchar(150) NOT NULL,
  `bandeannonce` text NOT NULL,
  `sid_genre` int(11) NOT NULL,
  `sid_acteur` int(11) NOT NULL,
  `sid_realisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id_film`, `titre`, `categorie`, `duree`, `infos`, `avis`, `liphoto`, `cat_csa`, `datyfin`, `acteur`, `realisateur`, `bandeannonce`, `sid_genre`, `sid_acteur`, `sid_realisateur`) VALUES
(5, 'Avant lui, elle contrÃ´lait tout', 'Action', '01:25:00', 'Test pour ce film', 5, 'films_img/kfilm6.png', '-12', '2019-05-20', 'Chris Evans', 'Joss Whedon', 'https://www.youtube.com/embed/GFu-pR_LTp4', 1, 6, 2),
(2, 'Captain MARVEL', 'Action', '01:45:00', 'Capitan Marvel', 9, 'films_img/kfilm01.png', '-12', '2019-05-20', 'Chris Evans', 'Joss Whedon', 'https://www.youtube.com/embed/WIbe-PmR5vk', 1, 6, 2),
(3, 'Mais vous Ãªtes fous', 'Drame', '01:25:00', 'Mais vous Ãªtes fou', 7, 'films_img/kfilm1.png', '-12', '2019-05-20', 'Alexandra Lamy', 'Vincent Kesteloot', 'https://www.youtube.com/embed/Iqe3xUssSUg', 2, 11, 7),
(4, 'Chamboultout', 'ComÃ©die', '01:23:00', 'Chamboule tout', 9, 'films_img/kfilm05.png', '-12', '2019-05-20', 'Alexandra Lamy', 'Vincent Kesteloot', 'https://www.youtube.com/embed/OESiNiharaI', 3, 11, 7);

-- --------------------------------------------------------

--
-- Structure de la table `films_20mai`
--

DROP TABLE IF EXISTS `films_20mai`;
CREATE TABLE IF NOT EXISTS `films_20mai` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `duree` time NOT NULL,
  `infos` longtext NOT NULL,
  `avis` int(11) NOT NULL,
  `liphoto` varchar(250) NOT NULL,
  `cat_csa` varchar(25) NOT NULL,
  `datyfin` datetime NOT NULL,
  `acteur` varchar(60) NOT NULL,
  `realisateur` varchar(60) NOT NULL,
  `bandeannonce` text NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films_20mai`
--

INSERT INTO `films_20mai` (`id_film`, `titre`, `categorie`, `duree`, `infos`, `avis`, `liphoto`, `cat_csa`, `datyfin`, `acteur`, `realisateur`, `bandeannonce`) VALUES
(3, 'Film hafa', 'Drame', '00:00:00', '', 0, 'films_img/afilm01.jpg', '', '2019-05-03 04:08:55', '', '', ''),
(4, 'Tabata', 'Film fantastique', '00:00:00', '', 0, 'films_img/afilm04.jpg', '', '2019-05-03 04:11:11', '', '', ''),
(5, 'Rotaka', 'Drame', '01:25:00', 'Evenement Ã  Tananarive en 1972', 2, 'films_img/afilm05.jpg', '-12', '2019-05-03 04:13:59', '', '', ''),
(6, 'KALIGOULA', 'Film de science fiction', '00:00:02', 'Test via le site par PETER', 3, 'films_img/team1.jpg', '-18', '2019-05-03 09:38:20', '', '', ''),
(7, '12121212', 'Film fantastique', '00:00:04', 'Test via le site par ANGIE', 10, 'films_img/team4.jpg', '-10', '2019-05-03 09:56:25', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `films_copy1`
--

DROP TABLE IF EXISTS `films_copy1`;
CREATE TABLE IF NOT EXISTS `films_copy1` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `duree` time NOT NULL,
  `infos` longtext NOT NULL,
  `avis` int(11) NOT NULL,
  `liphoto` varchar(250) NOT NULL,
  `photo` blob,
  `cat_csa` varchar(25) NOT NULL,
  `datyfin` datetime NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_act` int(11) NOT NULL,
  `acteur` varchar(60) NOT NULL,
  `id_real` int(11) NOT NULL,
  `realisateur` varchar(60) NOT NULL,
  `bandeannonce` text NOT NULL,
  KEY `id_film` (`id_film`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films_copy1`
--

INSERT INTO `films_copy1` (`id_film`, `titre`, `categorie`, `duree`, `infos`, `avis`, `liphoto`, `photo`, `cat_csa`, `datyfin`, `id_genre`, `id_act`, `acteur`, `id_real`, `realisateur`, `bandeannonce`) VALUES
(1, 'klhkljhlkh', 'Drame', '01:21:00', 'iuh uyoiuyiouoiyoyuyoi', 6, '', '', '', '2019-05-17 00:00:00', 1, 2, '', 2, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(250) NOT NULL,
  KEY `id_genre` (`id_genre`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `description`) VALUES
(1, 'Action'),
(2, 'Drame'),
(3, 'ComÃ©die'),
(4, 'Fantastique'),
(5, 'Horreur'),
(6, 'Science fiction'),
(8, 'Animation'),
(10, 'Conte'),
(11, 'Western'),
(12, 'Parodie'),
(13, 'Documentaire'),
(14, 'Blockbuster'),
(16, 'Filma');

-- --------------------------------------------------------

--
-- Structure de la table `liste_csa`
--

DROP TABLE IF EXISTS `liste_csa`;
CREATE TABLE IF NOT EXISTS `liste_csa` (
  `id_csa` int(11) NOT NULL AUTO_INCREMENT,
  `picto` blob NOT NULL,
  `signification` mediumtext NOT NULL,
  `horaires` mediumtext NOT NULL,
  PRIMARY KEY (`id_csa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `adr_mail` varchar(100) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `realisateurs`
--

DROP TABLE IF EXISTS `realisateurs`;
CREATE TABLE IF NOT EXISTS `realisateurs` (
  `id_real` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id_real`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `realisateurs`
--

INSERT INTO `realisateurs` (`id_real`, `nom`) VALUES
(1, 'Steven Spielberg'),
(2, 'Joss Whedon'),
(3, 'Ã‰ric Lavaine'),
(4, 'Anna Boden'),
(5, 'Ryan Fleck'),
(6, 'Ben Stassen'),
(7, 'Vincent Kesteloot');

-- --------------------------------------------------------

--
-- Structure de la table `tfavori`
--

DROP TABLE IF EXISTS `tfavori`;
CREATE TABLE IF NOT EXISTS `tfavori` (
  `id_favoris` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(150) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_favoris`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `ulogin` varchar(20) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  `motdepassec` text NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `nom`, `prenom`, `mail`, `ulogin`, `motdepasse`, `motdepassec`) VALUES
(2, 'RODRIGUEZ', 'Alain', 'araharijaona@orange.fr', 'araharijaona', 'axp25uez', ''),
(3, 'RAHARIJAONA', 'Alain', 'araharijaona@gmail.com', 'roguez', 'axp2018UEZ', ''),
(4, 'visiteur', 'visiteur', 'az.raharijaona@gmail.com', 'visiteur', 'visiteur', '$2y$10$Wex9UzwN8mfFSBTUr8Uuye/EZC9fbwUxN0jjjE1eqCJ0To2Xd2mqu'),
(6, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', '$2y$10$mWYT24nfdQRuHzC66CunMuJMpRd4cBScQgOBVGdK3dw9ayI1Bmfvq');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` bigint(20) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `infos` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `nom`, `genre`, `infos`) VALUES
(1, 'ybouane', 'Yassine', 'homme', 'j\'aime le php et le mysql'),
(2, 'utilisateur01', 'Mon nom', 'homme', 'je fait du php mysql css javascript'),
(3, 'utilisateur02', 'Utilisateur', 'femme', 'je suis un exemple'),
(4, 'utilisateur03', 'L\'utilisateur 3', 'femme', 'Je sais programmer en php.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
