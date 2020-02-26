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
-- Table structure for table `restaurants_v`
--

CREATE TABLE `restaurants_v` (
  `rNo` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `rName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rAddr` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'F',
  `rType` enum('葷','素') COLLATE utf8_unicode_ci DEFAULT NULL,
  `rPrice` enum('低','中','高') COLLATE utf8_unicode_ci DEFAULT NULL,
  `rFeature` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rRating` enum('1','2','3','4','5') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restaurants_v`
--

INSERT INTO `restaurants_v` (`rNo`, `rName`, `rAddr`, `rType`, `rPrice`, `rFeature`, `rRating`) VALUES
(01, '73階蔬食咖啡', '804高雄市鼓山區蓮海路70號中山大學學生活動中心', '素', '高', '格式素食', '3'),
(02, '千叶养生素食', '803高雄市鹽埕區大義街131號', '素', '中', '素食種類多', '4'),
(03, '宽心园精致蔬食料理', '803高雄市鹽埕區河西路3號', '素', '高', '看起來有點貴', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants_v`
--
ALTER TABLE `restaurants_v`
  ADD PRIMARY KEY (`rNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants_v`
--
ALTER TABLE `restaurants_v`
  MODIFY `rNo` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
