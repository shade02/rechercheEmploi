-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 02:23 AM
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
  `Description` text,
  `Niveau` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Experience` varchar(200) NOT NULL,
  `Salaire` float DEFAULT NULL,
  `Statut` varchar(100) DEFAULT NULL,
  `Duree` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Contact` varchar(200) DEFAULT NULL,
  `Telephone` bigint(15) DEFAULT NULL,
  `Courriel` varchar(30) DEFAULT NULL,
  `NoEntreprise` int(30) DEFAULT NULL,
  `UserName` varchar(20) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `affiche`
--

INSERT INTO `affiche` (`NoAffiche`, `DatePublication`, `TitrePoste`, `Description`, `Niveau`, `Experience`, `Salaire`, `Statut`, `Duree`, `Contact`, `Telephone`, `Courriel`, `NoEntreprise`, `UserName`) VALUES
(75, '2016-05-18', 'Conseiller en dotation', 'Le conseiller en dotation aura pour charge, sous la supervision du directeur de service, de s''occuper du recrutement externe des nouveaux employÃ©s', 'Universitaire', 'Moins de 1 an', 28, 'Temps plein', '2 ans', 'Ginette Laprise', 5149876325, 'LapriseG@recrutement.qc.ca', NULL, 'user'),
(74, '2016-05-18', 'SecrÃ©taire de direction', 'Sous l''autoritÃ© du directeur des services de l''approvisionnement, le ou la titulaire du poste apportera un supoort administratif au directeur du dÃ©partement. Le ou la titulaire devra: \r\n-Organiser les rÃ©unions\r\n-Effectuer les procÃ¨s verbaux\r\n-GÃ©rer l''agenda du directeur\r\n-S''occuper du matÃ©riel audivisuel lors des rÃ©unions\r\n-Transferer les appels\r\n-Effectuer le classement\r\n-Effectuer la commande de matÃ©riel de bureau nÃ©cessaire au fonctionnement du dÃ©partement\r\n-RÃ©diger les notes de service', 'Secondaire', 'Moins de 1 an', 24, 'Temps plein', 'IndÃ©termin', 'Laury Aladin', 5143897272, 'laury.aladin@recrutement.qc.ca', NULL, 'mjemp'),
(76, '2016-05-18', 'SecrÃ©taire de direction', 'Sous l''autoritÃ© du directeur des services de l''approvisionnement, le ou la titulaire du poste apportera un supoort administratif au directeur du dÃ©partement. Le ou la titulaire devra: \r\n-Organiser les rÃ©unions\r\n-Effectuer les procÃ¨s verbaux\r\n-GÃ©rer l''agenda du directeur\r\n-S''occuper du matÃ©riel audivisuel lors des rÃ©unions\r\n-Transferer les appels\r\n-Effectuer le classement\r\n-Effectuer la commande de matÃ©riel de bureau nÃ©cessaire au fonctionnement du dÃ©partement\r\n-RÃ©diger les notes de service', 'Secondaire', 'Moins de 1 an', 24, 'Temps plein', 'IndÃ©termin', 'Laury Aladin', 5143897272, 'laury.aladin@recrutement.qc.ca', NULL, 'mjemp'),
(73, '2016-05-18', 'Technicien en informatique', 'Sous l''autoritÃ© du directeur des services techniques, le ou la titulaire du poste doit effectuer des travaux techniques en ce qui concerne les Ã©quipements informatiques, effectuer la configuration des Ã©quipements, rÃ©pondre aux requÃªtes des clients', 'CollÃ©gial', '1 Ã  2 ans', 27, 'Temps plein', 'IndÃ©termin', 'Jean Lesage', 5147277239, 'jean.lesage@recrutement.qc.ca', NULL, 'user'),
(72, '2016-05-18', 'SecrÃ©taire de direction', 'Sous l''autoritÃ© du directeur des services de l''approvisionnement, le ou la titulaire du poste apportera un supoort administratif au directeur du dÃ©partement. Le ou la titulaire devra: \r\n-Organiser les rÃ©unions\r\n-Effectuer les procÃ¨s verbaux\r\n-GÃ©rer l''agenda du directeur\r\n-S''occuper du matÃ©riel audivisuel lors des rÃ©unions\r\n-Transferer les appels\r\n-Effectuer le classement\r\n-Effectuer la commande de matÃ©riel de bureau nÃ©cessaire au fonctionnement du dÃ©partement\r\n-RÃ©diger les notes de service', 'Secondaire', 'Moins de 1 an', 24, 'Temps plein', 'IndÃ©termin', 'Laury Aladin', 5143897272, 'laury.aladin@recrutement.qc.ca', NULL, 'mjemp');

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
--

CREATE TABLE IF NOT EXISTS `candidat` (
  `UserName` varchar(20) NOT NULL,
  `MotDePasse` varchar(20) NOT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Prenom` varchar(30) DEFAULT NULL,
  `Courriel` varchar(30) NOT NULL,
  `CV` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidat`
--

INSERT INTO `candidat` (`UserName`, `MotDePasse`, `Nom`, `Prenom`, `Courriel`, `CV`) VALUES
('medard', 'medard', 'medard', 'medard', 'medard@gmail.com', 'cv/license.txt'),
('lolop', 'lolopo', 'Hardy', 'Tom', 'lolo@gmail.com', 'cv/MVC JAVA.docx'),
('chercheur', 'chercheur', 'Joe', 'Connaissant', 'cherch@gmail.com', 'cv/MVC JAVA.docx');

-- --------------------------------------------------------

--
-- Table structure for table `employeur`
--

CREATE TABLE IF NOT EXISTS `employeur` (
  `UserName` varchar(20) NOT NULL,
  `MotDePasse` varchar(20) NOT NULL,
  `NomEntr` varchar(30) DEFAULT NULL,
`NoEntreprise` int(30) NOT NULL,
  `Courriel` varchar(30) NOT NULL,
  `Telephone` bigint(10) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employeur`
--

INSERT INTO `employeur` (`UserName`, `MotDePasse`, `NomEntr`, `NoEntreprise`, `Courriel`, `Telephone`) VALUES
('mjemp', 'medard', 'EntreprisesMJ', 1, 'mjemp@gmail.com', 5149876543),
('user', 'user', 'Entreprise User', 0, 'user@gmail', 1244567890),
('tom inc', '12345678', '', 4, '', 0),
('Employeur', '12345678', '', 5, '', 0),
('bazolo', 'lolopo', NULL, 6, 'asccs@cdscd.vv', NULL);

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
MODIFY `NoAffiche` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `employeur`
--
ALTER TABLE `employeur`
MODIFY `NoEntreprise` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
