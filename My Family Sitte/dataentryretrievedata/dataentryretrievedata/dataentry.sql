-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2013 at 03:17 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `getdata`
--
CREATE DATABASE `getdata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `getdata`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `mi` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`pid`, `fname`, `lname`, `mi`, `age`, `gender`, `address`) VALUES
(10, 'Jose', 'rizal', 'Alonso', 40, 'Male', 'Luneta'),
(11, 'Jose', 'rizal', 'Alonso', 40, 'Male', 'Luneta'),
(12, 'dfdf', 'dfdf', 'dfd', 23, 'Male', 'sdsd'),
(13, 'dfdf', 'dfdf', 'dfd', 23, 'Male', 'sdsd'),
(14, 'dfdf', 'dfdf', 'dfd', 23, 'Male', 'sdsd'),
(15, 'dsds', 'ds', 'sds', 34, 'Male', 'San Fernando Cebu'),
(16, 'dsds', 'ds', 'sds', 34, 'Male', 'San Fernando Cebu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
