-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 18 fév. 2018 à 22:19
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
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `promotion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id`, `email`, `pass`, `fname`, `name`, `promotion`) VALUES
(5, 'Bonsoir@bonjour.fr', '$2y$10$1hwby5tx01fPWcdVbg/8yO5/raRL71GBKzqardpfmyUVUFLbs.2Vq', 'KAND', 'Adn', 'L2'),
(6, 'test@test.fr', '$2y$10$Rppg/k0YhR62KR8zWzHRyeEXTpClEA.qSnkJzaCjsXlRv3RK9iLwi', 'afds', 'azfa', 'L2'),
(7, 'test1@test.com', '$2y$10$WCOslG3LcVDWoQamj46EQ.jGo6/BHsf8IxaYYMXTgn7on3MM3wvPS', 'ELKANDOUSSI', 'Adnan', 'L2'),
(8, 'zeatazef', '$2y$10$3gKzcMHoOdzl..nGpFA12OKU4eUD0lVz5TiRW/Jw0XEUEzaqqf.fy', 'qsdfqsdf', 'qsfqsf', 'qsfqsf'),
(9, 'test1@laposte.net', '$2y$10$bxS7XQVdQej3jh8VsntQcODfplnQ2EB.qqtB4FEkRyKibaOUtLC6e', 'sdsqf', 'dfg', 'qsdq'),
(10, 'bonjoir@laposte.net', '$2y$10$gtNi2jj/ssCx.n21S/jztebvWxsL/9vJ.gMx2u9TYcS53MfsgxI9a', 'Hello', 'Anikoune', 'L2'),
(11, 'test@test.fr', '$2y$10$/fVNRKIAkjOTPuXXimonI.Xkq4OI.MKqsGG5oyZG2hIg8c8PokEES', 'sqdfsdq', 'qsqsdf', 'L2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
