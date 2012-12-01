-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2012 at 12:05 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_type`
--

CREATE TABLE IF NOT EXISTS `donation_type` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Description` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `donation_type`
--


-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE IF NOT EXISTS `event_master` (
  `Event_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Event_description` varchar(999) NOT NULL,
  PRIMARY KEY (`Event_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `event_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `event_raise`
--

CREATE TABLE IF NOT EXISTS `event_raise` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `location` varchar(999) NOT NULL,
  `description` varchar(999) NOT NULL,
  `amount` int(10) NOT NULL,
  `event_master_id` int(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `event_raise`
--


-- --------------------------------------------------------

--
-- Table structure for table `event_transaction`
--

CREATE TABLE IF NOT EXISTS `event_transaction` (
  `ID` int(20) NOT NULL,
  `event_id` varchar(99) NOT NULL,
  `donet_type` int(20) NOT NULL,
  `description` varchar(999) NOT NULL,
  `date` date NOT NULL,
  `person_id` int(20) NOT NULL,
  `donet_amount` int(20) NOT NULL,
  `event_raise_id` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_transaction`
--


-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(99) NOT NULL,
  `Photo` varchar(300) NOT NULL,
  `Work_info` varchar(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Facebook_ID` varchar(99) NOT NULL,
  `Others_ID` varchar(99) NOT NULL,
  `Persent_address` varchar(399) NOT NULL,
  `Phone_Number` int(20) NOT NULL,
  `Permanent_address` varchar(399) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `personal_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Description` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `status`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
