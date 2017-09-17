-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 10:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `flogin`
--

CREATE TABLE `flogin` (
  `id` varchar(20) NOT NULL,
  `name` char(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `classes` varchar(300) NOT NULL,
  `branch` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flogin`
--

INSERT INTO `flogin` (`id`, `name`, `password`, `classes`, `branch`) VALUES
('cse01', 'abc', 'cse', '', 'CSE'),
('ece19', 'xyz', 'login', '', ''),
('mech03', 'XXX', 'mech', '', ''),
('mech04', 'abcd', 'mech', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flogin`
--
ALTER TABLE `flogin`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
