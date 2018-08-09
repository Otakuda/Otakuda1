-- phpMyAdmin SQL Dump
-- version 2.11.9.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2009 at 01:47 PM
-- Server version: 5.0.81
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

REATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) collate latin1_general_ci NOT NULL,
  `description` varchar(255) collate latin1_general_ci NOT NULL,
  
  `picture` varchar(80) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`shopid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `products` (`shopid`, `name`, `description`, `picture`) VALUES
(1, 'ikea', 'nice item',  'images/ikea.jpg'),
(2, 'aeon', 'japen item', 'images/aeon.jpg'),

