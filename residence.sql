-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2011 at 09:50 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `residence`
--

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `name`) VALUES
(1, 'Canada'),
(2, 'États-Unis');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `pays_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `pays_id`) VALUES
(1, 'Alabama', 2),
(2, 'Alaska', 2),
(3, 'Arizona', 2),
(4, 'Arkansas', 2),
(5, 'California', 2),
(6, 'Colorado', 2),
(7, 'Connecticut', 2),
(8, 'Delaware', 2),
(9, 'District of Columbia', 2),
(10, 'Florida', 2),
(11, 'Georgia', 2),
(12, 'Hawaii', 2),
(13, 'Idaho', 2),
(14, 'Illinois', 2),
(15, 'Indiana', 2),
(16, 'Iowa', 2),
(17, 'Kansas', 2),
(18, 'Kentucky', 2),
(19, 'Louisiana', 2),
(20, 'Maine', 2),
(21, 'Montana', 2),
(22, 'Nebraska', 2),
(23, 'Nevada', 2),
(24, 'New Hampshire', 2),
(25, 'New Jersey', 2),
(26, 'New Mexico', 2),
(27, 'New York', 2),
(28, 'North Carolina', 2),
(29, 'North Dakota', 2),
(30, 'Ohio', 2),
(31, 'Oklahoma', 2),
(32, 'Oregon', 2),
(33, 'Maryland', 2),
(34, 'Massachusetts', 2),
(35, 'Michigan', 2),
(36, 'Minnesota', 2),
(37, 'Mississippi', 2),
(38, 'Missouri', 2),
(39, 'Pennsylvania', 2),
(40, 'Rhode Island', 2),
(41, 'South Carolina', 2),
(42, 'South Dakota', 2),
(43, 'Tennessee', 2),
(44, 'Texas', 2),
(45, 'Utah', 2),
(46, 'Vermont', 2),
(47, 'Virginia', 2),
(48, 'Washington', 2),
(49, 'West Virginia', 2),
(50, 'Wisconsin', 2),
(51, 'Wyoming', 2),
(52, 'Alberta', 1),
(53, 'British Columbia', 1),
(54, 'Manitoba', 1),
(55, 'New Brunswick', 1),
(56, 'Newfoundland and Labrador', 1),
(57, 'Northwest Territories', 1),
(58, 'Nova Scotia', 1),
(59, 'Nunavut', 1),
(60, 'Ontario', 1),
(61, 'Prince Edward Island', 1),
(62, 'Quebec', 1),
(63, 'Saskatchewan', 1),
(64, 'Yukon', 1);
