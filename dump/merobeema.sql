-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2018 at 05:41 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merobeema`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `logo` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `phone`, `fax`, `email`, `password`, `url`, `logo`) VALUES
(1, 'Premier Insurance', 'Kamaladi', '243242434', '23423442', 'info@premier.com.np', '098f6bcd4621d373cade4e832627b4f6', 'http://premier-insurance.com.np', 'premier32343949334.png'),
(2, 'NLG Insurance', 'Maharajgunj, Kathmandu', '234234234', '234233', 'info@nlg.com.np', '098f6bcd4621d373cade4e832627b4f6', 'http://www.nlg.com.np/', 'nlg40f6cf808.png'),
(3, 'Siddhartha Insurance Pvt. Ltd.', 'Hattisar, Kathmandu, Nepal', '01-4482358', '01-4482357', 'info@siddhartha.com.np', '098f6bcd4621d373cade4e832627b4f6', 'http://siddhartha.com.np', 'siddhartha1450700469.png'),
(5, 'Sagarmatha Insurance', 'Naxal, Kathmandu, Nepal', '01-4482358', '', 'sagarmatha@company.com', '098f6bcd4621d373cade4e832627b4f6', 'https://sagarmathainsurance.com.np/', 'ab224a349334d823ab40f6cf8083e16b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_id` int(11) NOT NULL,
  `order_by` int(11) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(20) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `policy_id` (`policy_id`),
  KEY `order_by` (`order_by`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `policy_id`, `order_by`, `date`, `status`, `remarks`) VALUES
(8, 1, 2, '2018-04-20 18:15:00', '', ''),
(9, 5, 2, '2018-04-20 18:15:00', '', ''),
(10, 2, 2, '2018-04-23 18:15:00', '', ''),
(11, 1, 1, '2018-04-24 18:15:00', '', ''),
(12, 8, 2, '2018-04-25 18:15:00', '', ''),
(13, 1, 2, '2018-04-26 18:15:00', '', ''),
(14, 1, 1, '2018-04-26 18:15:00', '', ''),
(15, 1, 10, '2018-04-26 18:15:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

DROP TABLE IF EXISTS `policies`;
CREATE TABLE IF NOT EXISTS `policies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `policy_type_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `inv_per_year` double NOT NULL,
  `term` int(11) NOT NULL,
  `expected_return` double NOT NULL,
  `min_age` int(11) NOT NULL,
  `max_age` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`) USING BTREE,
  KEY `policy_type_id` (`policy_type_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `name`, `policy_type_id`, `company_id`, `inv_per_year`, `term`, `expected_return`, `min_age`, `max_age`, `description`) VALUES
(1, 'Pension Plan life', 3, 1, 15000, 20, 500000, 18, 45, ''),
(2, 'Pension Plan', 3, 1, 10000, 6, 200000, 16, 40, ''),
(4, 'Lagani Yojana', 1, 2, 10000, 5, 50000, 3, 5, 'asdf'),
(5, 'Jeevan Surakcha', 2, 1, 12000, 20, 500000, 1, 99, ''),
(6, 'SURAKSHIT JEEVAN BEEMA YOJANA', 3, 2, 20000, 20, 700000, 15, 70, 'test description'),
(7, ' Family Health Insurance', 2, 2, 25000, 30, 8500000, 11, 60, ''),
(8, 'TRIPLE BENEFIT SCHEME WITH BONUS', 1, 2, 20000, 20, 1200000, 1, 50, ''),
(9, 'Double Benefit Scheme', 1, 3, 12000, 15, 360000, 20, 50, ''),
(13, 'Surakshit Lagani Yojana', 1, 1, 25000, 20, 900000, 14, 50, '');

-- --------------------------------------------------------

--
-- Table structure for table `policy_type`
--

DROP TABLE IF EXISTS `policy_type`;
CREATE TABLE IF NOT EXISTS `policy_type` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy_type`
--

INSERT INTO `policy_type` (`id`, `name`) VALUES
(1, 'Investment Insurance'),
(2, 'Health Insurance'),
(3, 'Life Insurance');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_verified` int(11) NOT NULL,
  `type` enum('visitor','admin') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `is_verified`, `type`) VALUES
(1, 'admin@admin.com', '098f6bcd4621d373cade4e832627b4f6', 0, 'admin'),
(2, 'user@user.com', '098f6bcd4621d373cade4e832627b4f6', 0, 'visitor'),
(7, 'user@test.com', '098f6bcd4621d373cade4e832627b4f6', 0, 'visitor'),
(9, 'new@user.com', '098f6bcd4621d373cade4e832627b4f6', 0, 'visitor'),
(10, 'newuser@user.com', '098f6bcd4621d373cade4e832627b4f6', 0, 'visitor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
