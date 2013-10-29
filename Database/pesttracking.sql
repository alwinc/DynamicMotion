-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2013 at 06:21 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pesttracking`
--
CREATE DATABASE IF NOT EXISTS `pesttracking` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pesttracking`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employeeId` int(11) NOT NULL AUTO_INCREMENT,
  `parkId` int(11) NOT NULL,
  PRIMARY KEY (`employeeId`),
  KEY `parkId` (`parkId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeId`, `parkId`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `park`
--

CREATE TABLE IF NOT EXISTS `park` (
  `parkId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `area` int(200) NOT NULL,
  PRIMARY KEY (`parkId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `park`
--

INSERT INTO `park` (`parkId`, `name`, `area`) VALUES
(1, 'Park A', 200),
(2, 'Park B', 200),
(3, 'Park C', 200),
(4, 'Park D', 200),
(5, 'Park E', 200);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personId`, `name`, `email`, `dateRegistered`, `type`, `DOB`, `password`) VALUES
(1, 'A a', 'a@a.com', '2013-10-01', 'Ranger', '2013-10-17', 'aaaaaaaa'),
(2, 'B b', 'b@b.com', '2013-10-09', 'Clerical', '2013-10-11', 'bbbbbbbb'),
(3, 'C c', 'c@c.com', '2013-10-05', 'Ranger', '2013-10-21', 'cccccccc'),
(4, 'D d', 'c@c.com', '2013-10-15', 'Clerical', '2013-10-18', 'dddddddd'),
(5, 'E e', 'e@e.com', '2013-10-15', 'Ranger', '2013-10-16', 'eeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `pest`
--

CREATE TABLE IF NOT EXISTS `pest` (
  `pestId` int(11) NOT NULL AUTO_INCREMENT,
  `soureOfId` varchar(20) NOT NULL,
  `pestType` varchar(20) NOT NULL,
  `pestMarking` int(11) NOT NULL,
  PRIMARY KEY (`pestId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pest`
--

INSERT INTO `pest` (`pestId`, `soureOfId`, `pestType`, `pestMarking`) VALUES
(1, 'Collar', 'Feral Cat', 1),
(2, 'Microchip', 'Feral Dog', 2),
(3, 'Collar', 'Feral Rat', 3),
(4, 'Microchip', 'European Rabbit', 4),
(5, 'Collar', 'Red Fox', 5);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`personId`, `countryCode`, `areaCode`, `number`, `type`, `comment`) VALUES
(1, 1, 1, 416111111, 'Ranger', 'dummy'),
(2, 2, 2, 416222222, 'Clerical', 'dummy'),
(3, 3, 3, 416333333, 'Ranger', 'dummy'),
(4, 4, 4, 416444444, 'Clerical', 'dummy'),
(5, 5, 5, 416555555, 'Ranger', 'dummy');

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
  `latitude` decimal(10,0) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `pestDetails` varchar(300) NOT NULL,
  PRIMARY KEY (`sightingId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sighting`
--

INSERT INTO `sighting` (`sightingId`, `pestId`, `parkId`, `personId`, `numberOfPestsSighted`, `time`, `latitude`, `longitude`, `pestDetails`) VALUES
(1, 1, 1, 1, 1, '2013-10-16 10:38:19', '1', '1', 'dummy'),
(2, 2, 2, 2, 2, '2013-10-17 06:33:24', '2', '2', 'dummy'),
(3, 3, 3, 3, 3, '2013-10-03 16:15:19', '3', '3', 'dummy'),
(4, 4, 4, 4, 4, '2013-10-13 20:22:26', '4', '4', 'dummy'),
(5, 5, 5, 5, 5, '2013-10-30 08:27:29', '5', '5', 'dummy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
