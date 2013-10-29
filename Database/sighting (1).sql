-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 10:20 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sighting`
--

INSERT INTO `sighting` (`sightingId`, `pestId`, `parkId`, `personId`, `numberOfPestsSighted`, `time`, `reportDate`, `latlng`, `pestDetails`) VALUES
(6, 3, 1, 1, 34, '0000-00-00 00:00:00', '2013-10-27', '(-33.7483333, 148.4391667)', 'Blue haired'),
(5, 3, 0, 1, 0, '0000-00-00 00:00:00', '2013-10-18', '$_POST[latlng]', '$_POST[pestDetails]'),
(7, 3, 2, 1, 34, '0000-00-00 00:00:00', '2013-10-29', '(-30.3401987, 152.712352)', ''),
(8, 234, 234, 234, 12, '0000-00-00 00:00:00', '2013-10-23', 'eerfa', 'fe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
