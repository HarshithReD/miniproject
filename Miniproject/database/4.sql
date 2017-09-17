-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 10:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discussion`
--

-- --------------------------------------------------------

--
-- Table structure for table `4`
--

CREATE TABLE `4` (
  `sender` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `data` varchar(1000) NOT NULL,
  `comments` varchar(10000) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `section` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4`
--

INSERT INTO `4` (`sender`, `date`, `data`, `comments`, `branch`, `section`) VALUES
('d4', '2017-07-03', 'wergtgw', '', 'EEE', 'B'),
('d4', '2017-07-03', 'wergtgw', '', 'EEE', 'B'),
('d4', '2017-07-12', '', '', 'EEE', 'B'),
('d4', '2017-07-12', 'kjfnvjd', '', 'EEE', 'B');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
