-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 mars 2019 à 12:01
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_pressbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `date_recup` int(11) DEFAULT NULL,
  `titre_a` varchar(255) DEFAULT NULL,
  `url_a` varchar(255) DEFAULT NULL,
  `date_publi` int(11) DEFAULT NULL,
  `img_desc` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `tables` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_a`, `date_recup`, `titre_a`, `url_a`, `date_publi`, `img_desc`, `description`, `auteur`, `tables`) VALUES
(1, NULL, 'test', NULL, NULL, NULL, NULL, NULL, 'Table 1');

-- --------------------------------------------------------

--
-- Structure de la table `rss_info`
--

DROP TABLE IF EXISTS `rss_info`;
CREATE TABLE IF NOT EXISTS `rss_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `description` text,
  `categorie` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rss_info`
--

INSERT INTO `rss_info` (`id`, `title`, `link`, `description`, `categorie`, `date`) VALUES
(1, 'Eurosport', 'http://www.eurosport.fr', 'Ceci est un article de sport', 'sport', '2019-03-05'),
(2, 'L\'Equipe', 'http://www.lequipe.fr', 'Ceci est le 2e article de sport', 'sport', '2019-03-06'),
(3, '1er article culture', 'http://www.google.com', 'Ceci est le 1er article de culture', 'culture', '2019-03-21'),
(4, '1er article lifestyle', 'http://www.google.com', 'Ceci est le 1er article de lifestyle', 'lifestyle', '2019-03-28');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) NOT NULL,
  `mdp` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `lvl` tinyint(1) NOT NULL DEFAULT '0',
  `date_inscription` date DEFAULT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `mdp`, `email`, `nom`, `lvl`, `date_inscription`) VALUES
(1, 'paku', 'ffbdcb6949ae829a4cf2aa836b6187a198ee9988', 'paku@gmail.com', 'paku', 1, NULL),
(2, 'user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'user1@gmail.com', 'user1', 0, NULL),
(4, 'test22222', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f', 'test2@gmail.com', 'test2', 0, '2018-12-17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
