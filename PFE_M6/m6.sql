-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2023 at 09:58 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m6`
--

-- --------------------------------------------------------

--
-- Table structure for table `academie`
--

DROP TABLE IF EXISTS `academie`;
CREATE TABLE IF NOT EXISTS `academie` (
  `idAcademie` int NOT NULL,
  `nomAcademie` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idAcademie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int NOT NULL,
  `nomUtilisateur` varchar(50) DEFAULT NULL,
  `motDePasse` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `idCandidat` int DEFAULT NULL,
  `idFilliere` int DEFAULT NULL,
  KEY `idCandidat` (`idCandidat`),
  KEY `idFilliere` (`idFilliere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admissionfinale`
--

DROP TABLE IF EXISTS `admissionfinale`;
CREATE TABLE IF NOT EXISTS `admissionfinale` (
  `idCandidat` int DEFAULT NULL,
  `idFilliere` int DEFAULT NULL,
  KEY `idCandidat` (`idCandidat`),
  KEY `idFilliere` (`idFilliere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `idAnnonce` int NOT NULL,
  `idAdmin` int DEFAULT NULL,
  `idCandidat` int DEFAULT NULL,
  `contenuAnnonce` text,
  PRIMARY KEY (`idAnnonce`),
  KEY `idAdmin` (`idAdmin`),
  KEY `idCandidat` (`idCandidat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------
DROP TABLE IF EXISTS `annonce1`;
CREATE TABLE IF NOT EXISTS `annonce1` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `h2premiere` text NOT NULL,
  `paragraphe` text NOT NULL,
  `h2deuxieme` text NOT NULL,
  `h2troisieme` text NOT NULL,
  `h4premiere` text NOT NULL,
  `paragrapheF` text NOT NULL,
  `paragrapheS` text NOT NULL
)
--
-- Table structure for table `asso4`
--

DROP TABLE IF EXISTS `asso4`;
CREATE TABLE IF NOT EXISTS `asso4` (
  `idCandidat` int DEFAULT NULL,
  `idBac` int DEFAULT NULL,
  KEY `idCandidat` (`idCandidat`),
  KEY `idBac` (`idBac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asso5`
--

DROP TABLE IF EXISTS `asso5`;
CREATE TABLE IF NOT EXISTS `asso5` (
  `idCandidat` int DEFAULT NULL,
  `idAcademie` int DEFAULT NULL,
  KEY `idCandidat` (`idCandidat`),
  KEY `idAcademie` (`idAcademie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bac`
--

DROP TABLE IF EXISTS `bac`;
CREATE TABLE IF NOT EXISTS `bac` (
  `idBac` int NOT NULL,
  `Branche` varchar(100) DEFAULT NULL,
  `Type_Bac` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idBac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `idCandidat` int NOT NULL,
  `CNE` varchar(10) DEFAULT NULL,
  `ListeAttente` tinyint(1) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCandidat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `critere`
--

DROP TABLE IF EXISTS `critere`;
CREATE TABLE IF NOT EXISTS `critere` (
  `idBac` int DEFAULT NULL,
  `idFilliere` int DEFAULT NULL,
  KEY `idBac` (`idBac`),
  KEY `idFilliere` (`idFilliere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filliere`
--

DROP TABLE IF EXISTS `filliere`;
CREATE TABLE IF NOT EXISTS `filliere` (
  `idFilliere` int NOT NULL,
  `NomFilliere` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idFilliere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
