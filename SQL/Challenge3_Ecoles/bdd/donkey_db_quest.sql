-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 27 oct. 2024 à 21:18
-- Version du serveur : 5.7.31
-- Version de PHP : 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `donkey_db_quest`
--

-- --------------------------------------------------------

--
-- Structure de la table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `school`
--

INSERT INTO `school` (`id`, `name`, `capacity`, `country`) VALUES
(2, 'Castelobruxo', 380, 'Brazil'),
(3, 'Durmstrang Institute', 570, 'Sweden'),
(4, 'Hogwarts School of Witchcraft and Wizardry', 450, 'United Kingdom'),
(5, 'Ilvermorny School of Witchcraft and Wizardry', 300, 'USA'),
(6, 'Koldovstoretz', 125, 'Russia');

-- --------------------------------------------------------

--
-- Structure de la table `wizard`
--

DROP TABLE IF EXISTS `wizard`;
CREATE TABLE IF NOT EXISTS `wizard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `biography` text,
  `is_muggle` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `wizard`
--

INSERT INTO `wizard` (`id`, `firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES
(1, 'harry', 'potter', '1980-07-31', 'london', '', 0),
(2, 'hermione', 'granger', '1979-09-19', '', 'Friend of Harry Potter', 0),
(3, 'lily', 'potter', '1960-01-30', '', 'mother of Harry Potter', 0),
(4, 'ron', 'weasley', '1980-03-01', '', 'Best friend of Harry', 0),
(5, 'ginny', 'weasley', '1981-08-11', '', 'Sister of Ron and girlfriend of Harry', 0),
(6, 'fred', 'weasley', '1978-04-01', '', '', 0),
(7, 'george', 'weasley', '1978-04-01', '', '', 0),
(8, 'arthur', 'weasley', '1950-02-06', '', '', 0),
(9, 'molly', 'weasley', '1949-01-01', '', '', 0),
(10, 'drago', 'malefoy', '1980-06-05', '', '', 0),
(11, 'albus', 'dumbledore', '1881-07-01', '', '', 0),
(12, 'severus', 'rogue', '1960-01-09', '', '', 0),
(13, 'tom', 'jÃ©dusor', '1926-12-31', '', 'Celui-Dont-On-Ne-Doit-Pas-Prononcer-Le-Nom alias Voldermort', 0),
(14, 'dudley', 'dursley', '1980-06-23', '', 'Cousin d\'Harry', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
