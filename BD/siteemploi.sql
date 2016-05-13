-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2016 at 11:07 PM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siteemploi`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiche`
--

CREATE TABLE IF NOT EXISTS `affiche` (
`NoAffiche` int(200) NOT NULL,
  `DatePublication` date NOT NULL,
  `TitrePoste` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `Niveau` varchar(200) NOT NULL,
  `Experience` varchar(200) NOT NULL,
  `Salaire` int(11) NOT NULL,
  `Statut` varchar(100) NOT NULL,
  `Duree` int(11) NOT NULL,
  `Contact` varchar(200) NOT NULL,
  `Telephone` bigint(10) NOT NULL,
  `Courriel` varchar(30) NOT NULL,
  `NoEntreprise` int(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `affiche`
--

INSERT INTO `affiche` (`NoAffiche`, `DatePublication`, `TitrePoste`, `Description`, `Niveau`, `Experience`, `Salaire`, `Statut`, `Duree`, `Contact`, `Telephone`, `Courriel`, `NoEntreprise`) VALUES
(1, '2016-04-21', 'Analyste informtique', 'Le poste d''analyste consiste a faire une analayse complete des codes et des programmes . D''autres taches connexes peuvent être demandé.', 'Collégial', '2 ans', 40, 'Temps plein', 1, 'Rejean Tremblay', 5145678965, 'mjemp@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
--

CREATE TABLE IF NOT EXISTS `candidat` (
  `UserName` varchar(20) NOT NULL,
  `MotDePasse` varchar(20) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Courriel` varchar(30) NOT NULL,
  `CV` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidat`
--

INSERT INTO `candidat` (`UserName`, `MotDePasse`, `Nom`, `Prenom`, `Courriel`, `CV`) VALUES
('mj', 'mj', 'medard', 'medard', 'medard@gmail.com', 'cv/Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employeur`
--

CREATE TABLE IF NOT EXISTS `employeur` (
  `UserName` varchar(20) NOT NULL,
  `MotDePasse` varchar(20) NOT NULL,
  `NomEntr` varchar(30) NOT NULL,
`NoEntreprise` int(30) NOT NULL,
  `Courriel` varchar(30) NOT NULL,
  `Telephone` bigint(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employeur`
--

INSERT INTO `employeur` (`UserName`, `MotDePasse`, `NomEntr`, `NoEntreprise`, `Courriel`, `Telephone`) VALUES
('MJEmp', 'medard', 'EntreprisesMJ', 1, 'mjemp@gmail.com', 5149876543),
('user', 'user', 'Entreprise User', 2, 'usergmail.com', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiche`
--
ALTER TABLE `affiche`
 ADD PRIMARY KEY (`NoAffiche`);

--
-- Indexes for table `candidat`
--
ALTER TABLE `candidat`
 ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `employeur`
--
ALTER TABLE `employeur`
 ADD PRIMARY KEY (`UserName`), ADD KEY `NoEntreprise` (`NoEntreprise`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiche`
--
ALTER TABLE `affiche`
MODIFY `NoAffiche` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employeur`
--
ALTER TABLE `employeur`
MODIFY `NoEntreprise` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
