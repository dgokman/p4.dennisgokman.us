-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2013 at 05:30 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dennisgo_p4_dennisgokman_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
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

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`adj1`, `adj2`, `name1`, `adverb1`, `plnoun1`, `number1`, `adj3`, `adverb2`, `name2`, `adj4`, `noun1`, `name3`, `noun2`, `brand`, `liquid`, `adj5`, `adj6`) VALUES
('funny', 'crazy', 'Gerald', 'happily', 'warts', '88', 'bookish', 'magically', 'Frank', 'teary', 'store', 'Oliver', 'sneakers', 'stunningly', 'Tequila', 'sad', 'amazing'),
('', '', '', '', '', '', '', '', '', '', '', '', '', 'sadasdsa', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`) VALUES
(5, 1382221434, 1382221434, 'e6755a659bb0eb45c6fc2093e0e2811bece5b1d4', 'b865845ab54c6c1308a7cb6fe0d507d5c454fccc', 0, '', 'Mike', 'Jordan', 'abc@mj.com'),
(6, 1382222796, 1382222796, '1a231f291e394dd85f40698cd2c9fb3f137e19a8', 'd6423819d82d3c299d96c2636abbc42aad2c7f34', 0, '', 'Dennis', 'Gokman', 'dennis.gokman@gmail.com'),
(7, 1382756778, 1382756778, 'a2a15c89751ea370ab6b59c26216bba31cc1a9a2', '3e9a627d1bf1d66736236a589f82922ac7cf1170', 0, '', 'Bob', 'Johnson', 'abcd@def.com'),
(8, 1382756889, 1382756889, '66660ce41af26c536013a581273004ddd18a8a27', '8b5e4a6da9bc9e4957b38c995cef34925ae60a06', 0, '', 'Mike', 'Jordan', 'mj@great.com'),
(9, 1382756947, 1382756947, 'a95ad32fad004b567f79e79c522c64f4ac77b518', '6809755e0f4403cb2f085be01dc561e5667bd285', 0, '', 'bob', 'grant', 'you@buffoon.com'),
(92, 1383622558, 1383622558, '7bd16c5a3499c94feed7139baef2bd42567066b2', '28c430ee3ce934f942e0c8ef6c706658e634ea0d', 0, '', 'Queen', 'Elizabeth', 'queen@elizabeth.com'),
(93, 1383622640, 1383622640, '25310c663ab8566f5c4427e61701921f2b5758df', '84802489959df1bc7124a1a492192d518c1c49db', 0, '', 'a', '', ''),
(94, 1386915522, 1386915522, '5b87f2a62a71b6a07c44bb3c6a4826e1d26d7c90', '4654001fb159b2839326c18a12848284f2dbf6df', 0, '', 'Dennis', 'Gokman', 'a@b.com'),
(95, 1386999590, 1386999590, 'e0c88eea01599b7dd60ebe8cdd0974e31d67db78', '6045a314e25cff112ad3aa1a10265bf6f0e19799', 0, '', 'bob', 'bob', 'bob'),
(96, 1387506015, 1387506015, '10be8c2c2ec80c6db1d23b89a50675d317e13922', '7f1d5def034fe50b670ff7f73f1ff2b5a21ef880', 0, '', 'todd', 'todd', 'todd');
