-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2018 at 12:46 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emergency`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Small First Aid Kit', 150),
(2, 'Medium First Aid Kit', 275),
(3, 'Large First Aid Kit', 500);

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE IF NOT EXISTS `medical` (
  `disease` varchar(20) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `medname` varchar(100) NOT NULL,
  `procedure` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`disease`, `symptoms`, `medname`, `procedure`) VALUES
('Fever', 'Headache', 'Biopyrin-650', '->One pill, if high temperature for adult. ->Half pill for kid(8-13yrs). -> Don''t take medicine empt'),
('Fever', '', 'Dolo-650mg', '->One pill, if high temperature for adult. ->Half pill for kid(8-13yrs). -> Don''t take medicine empt'),
('heart_attack', '', 'Sorbitrate', '->One pill under the tounge'),
('dog_bite', '', 'Amoxicillin-Clavulanate', '->Prescribed for three to five days');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(6, 'abc', 'tanmaypach@gmail.com', '25f9e794323b453885f5181f1b624d0b', '9035859092', 'Bangalore Urban District', 'bangalore'),
(5, 'abc', 'email@email.com', '25f9e794323b453885f5181f1b624d0b', '9035859092', 'Bangalore Urban District', 'MG colony'),
(4, 'Tanmay', 'tanmaypach15@gmail.com', '25f9e794323b453885f5181f1b624d0b', '9035859092', 'Bangalore Urban District', 'MG colony');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(30, 5, 1, 'Added to cart'),
(31, 5, 2, 'Added to cart'),
(32, 6, 2, 'Confirmed'),
(29, 5, 3, 'Added to cart'),
(19, 4, 2, 'Confirmed'),
(17, 1, 1, 'Added to cart');
