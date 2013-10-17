-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2013 at 09:32 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `pesttracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employeeId` int(11) NOT NULL auto_increment,
  `parkId` int(11) NOT NULL,
  PRIMARY KEY (`employeeId`),
  KEY `parkId` (`parkId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--


-- --------------------------------------------------------

--
-- Table structure for table `park`
--

CREATE TABLE IF NOT EXISTS `park` (
  `parkId` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `area` int(200) NOT NULL,
  PRIMARY KEY (`parkId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `park`
--


-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `personId` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `dateRegistered` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`personId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--


-- --------------------------------------------------------

--
-- Table structure for table `pest`
--

CREATE TABLE IF NOT EXISTS `pest` (
  `pestId` int(11) NOT NULL auto_increment,
  `soureOfId` varchar(20) NOT NULL,
  `pestType` varchar(20) NOT NULL,
  `pestMarking` int(11) NOT NULL,
  PRIMARY KEY (`pestId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pest`
--


-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `personId` int(11) NOT NULL auto_increment,
  `countryCode` int(11) NOT NULL,
  `areaCode` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`personId`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--


-- --------------------------------------------------------

--
-- Table structure for table `sighting`
--

CREATE TABLE IF NOT EXISTS `sighting` (
  `sightingId` int(11) NOT NULL auto_increment PRIMARY KEY,
  `pestId` int(11) NOT NULL,
  `parkId` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `numberOfPestsSighted` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `pestDetails` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sighting`
--
