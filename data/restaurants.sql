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
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `rNo` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `rName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rAddr` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'F',
  `rType` enum('葷','素') COLLATE utf8_unicode_ci DEFAULT NULL,
  `rPrice` enum('低','中','高') COLLATE utf8_unicode_ci DEFAULT NULL,
  `rFeature` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rRating` enum('1','2','3','4','5') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`rNo`, `rName`, `rAddr`, `rType`, `rPrice`, `rFeature`, `rRating`) VALUES
(01, '元福烧肉饭/香菇肉羹', '804高雄市鼓山區濱海一路88號', '葷', '中', '燒肉好吃', '5'),
(02, '阿珠的店', '804高雄市鼓山區濱海一路64號', '葷', '中', '量大', '4'),
(03, '相撲咖哩', '804高雄市鼓山區鼓波街25號', '葷', '高', '加飯不用錢', '3'),
(04, '顺和排骨大王', '804高雄市鼓山區鼓波街19之3號', '葷', '中', '排骨飯好吃', '3'),
(05, '鸭妈厨房', '804高雄市鼓山區濱海二路23-3號', '葷', '中', '各式炒飯', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`rNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `rNo` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
