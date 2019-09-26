-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2016 at 06:53 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `googlemap`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(100) DEFAULT NULL,
  `lat` double(16,7) NOT NULL,
  `long` double(16,7) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Returned Address` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `long`, `name`, `Returned Address`, `type`) VALUES
(1, 6.9215427, 79.7862612, 'colombo', 'colombo srilanka', 'new_fish'),
(2, 6.5874475, 79.9417264, 'kalutara', 'kalutara western', 'old_one'),
(3, 8.5832077, 81.1781970, 'Trinco', 'Trincomalee, Srilanka', 'new_fish'),
(4, 6.9043203, 79.9479226, 'Malabe', 'Malabe srilanka', 'old_one'),
(5, 6.5837960, 79.8258214, 'sea1', 'sea1', 'sea');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
