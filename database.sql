-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2013 at 09:41 PM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dennisgo_p4_dennisgokman_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `adj1` text NOT NULL,
  `adj2` text NOT NULL,
  `name1` text NOT NULL,
  `adverb1` text NOT NULL,
  `plnoun1` text NOT NULL,
  `number1` text NOT NULL,
  `adj3` text NOT NULL,
  `adverb2` text NOT NULL,
  `name2` text NOT NULL,
  `adj4` text NOT NULL,
  `noun1` text NOT NULL,
  `name3` text NOT NULL,
  `noun2` text NOT NULL,
  `brand` text NOT NULL,
  `liquid` text NOT NULL,
  `adj5` text NOT NULL,
  `adj6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
