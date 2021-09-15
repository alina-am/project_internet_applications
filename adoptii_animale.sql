-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 08:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adoptii_animale`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptii`
--

CREATE TABLE IF NOT EXISTS `adoptii` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nume` varchar(25) NOT NULL,
  `prenume` varchar(25) NOT NULL,
  `animal` varchar(7) NOT NULL,
  `rasa` varchar(20) NOT NULL,
  `nume_animal` varchar(20) NOT NULL,
  `comentarii` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `adoptii`
--

INSERT INTO `adoptii` (`id`, `nume`, `prenume`, `animal`, `rasa`, `nume_animal`, `comentarii`) VALUES
(1, 'Popescu', 'Alex', 'pisica', 'british-shorthair', 'lulu', 'vreau un prieten'),
(9, 'Anda', 'Popa', 'caine', 'beagle', 'Pisu', 'vreau un prieten'),
(10, 'Maria', 'Toma', 'pisica', 'siameza', 'Motanel', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nume` varchar(25) NOT NULL,
  `prenume` varchar(25) NOT NULL,
  `comentarii` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nume`, `prenume`, `comentarii`) VALUES
(1, 'Petraru', 'Sanda', 'Imi place ce faceti! :D'),
(27, 'Mara', 'Ana', 'Foarte frumos'),
(29, 'A', 'Alina', 'Feedback');

-- --------------------------------------------------------

--
-- Table structure for table `pierderi`
--

CREATE TABLE IF NOT EXISTS `pierderi` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nume` varchar(25) NOT NULL,
  `prenume` varchar(25) NOT NULL,
  `animal` varchar(10) NOT NULL,
  `rasa` varchar(20) NOT NULL,
  `nume_animal` varchar(20) NOT NULL,
  `comentarii` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
