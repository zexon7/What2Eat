-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2018 at 06:51 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `what2eat`
--

-- --------------------------------------------------------

--
-- Table structure for table `vratings`
--

CREATE TABLE `vratings` (
  `vCustomers` tinyint(2) NOT NULL,
  `vNo` int(11) NOT NULL,
  `vRating` enum('1','2','3','4','5') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vratings`
--

INSERT INTO `vratings` (`vCustomers`, `vNo`, `vRating`) VALUES
(1, 1, '3'),
(2, 2, '4'),
(3, 3, '3'),
(4, 1, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vratings`
--
ALTER TABLE `vratings`
  ADD PRIMARY KEY (`vCustomers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vratings`
--
ALTER TABLE `vratings`
  MODIFY `vCustomers` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
