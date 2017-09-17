-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 10:13 AM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `roll no` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `section` varchar(1) NOT NULL,
  `year` int(1) NOT NULL,
  `club` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`roll no`, `name`, `password`, `branch`, `section`, `year`, `club`) VALUES
('14P61A0222', 'abc', 'd56b699830e77ba53855679cb1d252da', 'eee', 'A', 4, ''),
('14P61A0342', 'mounika', 'd56b699830e77ba53855679cb1d252da', 'MECH', 'A', 4, ''),
('14P61A0510', 'Akruthi', 'd56b699830e77ba53855679cb1d252da', 'CSE', 'A', 1, ''),
('14P61A0536', 'Deepthika', 'd56b699830e77ba53855679cb1d252da', 'CSE', 'B', 2, ''),
('14P61A0547', 'Harshith ', 'd56b699830e77ba53855679cb1d252da', 'CSE', 'C', 3, ''),
('14P61A1209', 'AAA', 'd56b699830e77ba53855679cb1d252da', 'IT', 'A', 4, ''),
('14P61A1922', 'rani', 'd56b699830e77ba53855679cb1d252da', 'ece', 'A', 4, ''),
('15P61A0224', 'geetha', 'd56b699830e77ba53855679cb1d252da', 'eee', 'A', 3, ''),
('16P61A0222', 'xyz', 'd56b699830e77ba53855679cb1d252da', 'ece', 'D', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`roll no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
