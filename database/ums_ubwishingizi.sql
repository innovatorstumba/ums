-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 11:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `ums_ubwishingizi`
--

CREATE TABLE `ums_ubwishingizi` (
  `ubw_id` int(11) NOT NULL,
  `ubw_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_ubwishingizi`
--

INSERT INTO `ums_ubwishingizi` (`ubw_id`, `ubw_name`) VALUES
(1, 'MMI'),
(2, 'RAMA'),
(3, 'MITUWELE'),
(4, 'UAP'),
(5, 'SORAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ums_ubwishingizi`
--
ALTER TABLE `ums_ubwishingizi`
  ADD PRIMARY KEY (`ubw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ums_ubwishingizi`
--
ALTER TABLE `ums_ubwishingizi`
  MODIFY `ubw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
