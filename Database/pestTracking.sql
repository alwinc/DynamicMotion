-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 02:46 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pestTracking`
--
CREATE DATABASE IF NOT EXISTS `pestTracking` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pestTracking`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employeeId` int(11) NOT NULL AUTO_INCREMENT,
  `parkId` int(11) NOT NULL,
  PRIMARY KEY (`employeeId`),
  KEY `parkId` (`parkId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `park`
--

CREATE TABLE IF NOT EXISTS `park` (
  `parkId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `area` int(200) NOT NULL,
  PRIMARY KEY (`parkId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `park`
--

INSERT INTO `park` (`parkId`, `name`, `area`) VALUES
(1, 'Conimbla', 0),
(2, 'Dorrigo', 0),
(3, 'Abercrombie River', 0),
(4, 'Belford', 0),
(5, 'Cataract', 0),
(6, 'Cocoparra', 0),
(7, 'Coolah Tops', 0),
(8, 'Garrawilla', 0),
(9, 'Goobang', 0),
(10, 'Goulburn River', 0),
(11, 'Kalyarr', 0),
(12, 'Mount Kaputar', 0),
(13, 'Nangar', 0),
(14, 'Oolambeyan', 0),
(15, 'Weddin Mountains', 0);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `personId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `dateRegistered` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`personId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personId`, `name`, `email`, `dateRegistered`, `type`, `DOB`, `password`) VALUES
(1, 'admin', 'admin', '2013-10-27', 'Admin', '2013-10-27', 'admin'),
(2, 'Albert Samuel', 'as@gmail.com', '2013-10-29', 'Ranger', '1994-11-27', 'as'),
(3, 'Alwin Chin', 'alwin@dynamicmotion.com', '2013-10-29', 'Ranger', '1990-12-12', 'alwin'),
(4, 'Andrew Indayang', 'andrew@dynamicmotion.com', '2013-10-29', 'Ranger', '1990-12-12', 'andrew'),
(5, 'Victor ', 'victor@dynamicmotion.com', '2013-10-29', 'Clerical', '1990-12-12', 'victor'),
(6, 'Winston Yang', 'winston@dynamicmotion.com', '2013-10-29', 'Clerical', '1990-12-12', 'winston'),
(7, 'Khoi Nguyen', 'nguyen@dynamicmotion.com', '2013-10-29', 'Clerical', '1990-12-12', 'nguyen');

-- --------------------------------------------------------

--
-- Table structure for table `pest`
--

CREATE TABLE IF NOT EXISTS `pest` (
  `pestId` int(11) NOT NULL AUTO_INCREMENT,
  `soureOfId` varchar(20) NOT NULL,
  `pestType` varchar(20) NOT NULL,
  `pestMarking` varchar(11) NOT NULL,
  PRIMARY KEY (`pestId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pest`
--

INSERT INTO `pest` (`pestId`, `soureOfId`, `pestType`, `pestMarking`) VALUES
(1, 'Collar', 'Red_Fox', 'Blue Eyes, '),
(2, 'Collar', 'Feral_Dog', 'Black haire'),
(3, 'Collar', 'FeralCat', 'Black and B'),
(4, 'Collar', 'Feral_Rat', 'Black Haire'),
(5, 'Microchip', 'European_Rabbit', 'White feath');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `personId` int(11) NOT NULL AUTO_INCREMENT,
  `countryCode` int(11) NOT NULL,
  `areaCode` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`personId`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sighting`
--

CREATE TABLE IF NOT EXISTS `sighting` (
  `sightingId` int(11) NOT NULL AUTO_INCREMENT,
  `pestId` int(11) NOT NULL,
  `parkId` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `numberOfPestsSighted` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `reportDate` date NOT NULL,
  `latlng` varchar(100) NOT NULL,
  `pestDetails` varchar(300) NOT NULL,
  PRIMARY KEY (`sightingId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sighting`
--

INSERT INTO `sighting` (`sightingId`, `pestId`, `parkId`, `personId`, `numberOfPestsSighted`, `time`, `reportDate`, `latlng`, `pestDetails`) VALUES
(6, 3, 1, 1, 34, '0000-00-00 00:00:00', '2013-10-27', '(-33.7483333, 148.4391667)', 'Blue haired'),
(7, 3, 2, 1, 34, '0000-00-00 00:00:00', '2013-10-29', '(-30.3401987, 152.712352)', ''),
(12, 2, 15, 1, 3, '2013-10-29 14:43:35', '2013-10-30', '(-33.959094637319986, 148.01171779632568)', ''),
(9, 5, 3, 1, 12, '0000-00-00 00:00:00', '2013-10-30', '(-33.91084898900759, 149.34385299682617)', ''),
(10, 4, 7, 1, 9, '2013-10-29 14:37:32', '2013-10-30', '(-31.752948526872686, 150.07590293884277)', ''),
(11, 1, 9, 1, 2, '2013-10-10 01:02:00', '2013-10-30', '(-32.69396307825349, 148.34967613220215)', ''),
(13, 5, 11, 1, 4, '2013-10-29 14:43:50', '2013-10-30', '(-34.30827822549173, 144.3343448638916)', ''),
(14, 3, 7, 1, 4, '2013-10-29 14:44:31', '2013-10-30', '(-31.05293398570514, 143.96484375)', ''),
(15, 4, 8, 1, 5, '2013-10-04 14:02:00', '2013-10-30', '(-31.27884428039972, 149.56980228424072)', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
