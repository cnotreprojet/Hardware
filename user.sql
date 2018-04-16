-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 16 avr. 2018 à 17:43
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hardware`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `mail` char(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `ville` varchar(250) NOT NULL,
  `rue` varchar(250) NOT NULL,
  `nb_rue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`, `mail`, `nom`, `prenom`, `ville`, `rue`, `nb_rue`) VALUES
(1, 'zozor', 'lol', 'zozor@gmail.com', 'leon', 'paul', 'Le havre', 'camélia', 12),
(2, 'matthieu', 'lolollol', 'toto@gmail.com', 'dhuerbt', 'mztttio', 'bihorel', '3', 15),
(3, 'zorro', 'perlinpoin', 'zorro@gmail.com', 'george', 'Washiton', 'New york', 'City', 50),
(4, 'superman', 'krypton', 'batmansuck@gmail.com', 'bruce', 'Waynes', 'new york', 'lol', 53),
(8, 'zorro', 'azedsq', 'zorro@gmail.com', 'george', 'Washiton', 'New york', 'City', 50),
(9, 'LOUIS', 'dzefzef', 'louis@univ-rouen.fr', 'louis', 'larchevequie', 'ville', 'banane', 90),
(10, 'dhubematzz', 'root', 'zef@zef.fr', 'zef', 'zef', 'cv', 'erg', 11),
(11, 'zozor', 'qsdfg', 'abc@def.hij', 'azert', 'qsdf', 'toulon', 'toulon', 5),
(12, 'zozor', 'sfdv', 'abc@def.hij', 'azert', 'qsdf', 'toulon', 'toulon', 5),
(13, 'zozor', 'sfdv', 'abc@def.hij', 'azert', 'qsdf', 'toulon', 'toulon', 5),
(14, 'zozor', 'sfdv', 'abc@def.hij', 'azert', 'qsdf', 'toulon', 'toulon', 5),
(15, 'zozor', 'sfdv', 'abc@def.hij', 'azert', 'qsdf', 'toulon', 'toulon', 5),
(16, 'zozor', 'sfdv', 'abc@def.hij', 'azert', 'qsdf', 'toulon', 'toulon', 5),
(17, 'paul', 'pot', 'azer@gmail.com', 'dfed', 'zfzz', 'zeefzef', 'zef', 4),
(18, 'paul', 'pot', 'azer@gmail.com', 'dfed', 'zfzz', 'zeefzef', 'zef', 4),
(19, 'paul', 'pot', 'azer@gmail.com', 'dfed', 'zfzz', 'zeefzef', 'zef', 4),
(20, 'zorro', 'zrefg', 'aze@gmail.xwsz', 'azer', 'poi', 'ert', 'fzef', 456),
(21, 'zorro', 'zrefg', 'aze@gmail.xwsz', 'azer', 'poi', 'ert', 'fzef', 456),
(22, 'zorro', 'zrefg', 'aze@gmail.xwsz', 'azer', 'poi', 'ert', 'fzef', 456),
(23, 'zorro', 'azeer', 'aze@gmail.xwsz', 'azer', 'poi', 'ert', 'fzef', 456),
(24, 'zorro', 'fzef', 'aze@gmail.xwsz', 'azer', 'poi', 'ert', 'fzef', 456),
(25, 'zorro', 'fzef', 'aze@gmail.xwsz', 'azer', 'poi', 'ert', 'fzef', 456),
(26, 'matthieu', 'azre', 'aze@gmail.xwsz', 'sefzef', 'zef', 'zef', 'reg', 1234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
