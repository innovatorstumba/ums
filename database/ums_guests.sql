-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 02:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

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
-- Table structure for table `ums_guests`
--

CREATE TABLE `ums_guests` (
  `gue_id` int(11) NOT NULL,
  `gue_ldr_id` int(11) NOT NULL,
  `gue_firstname` varchar(50) NOT NULL,
  `gue_lastname` varchar(50) NOT NULL,
  `gue_phone` varchar(13) NOT NULL,
  `gue_nid` varchar(16) NOT NULL,
  `gue_address` text NOT NULL,
  `gue_registered_date` varchar(20) NOT NULL,
  `gue_status` varchar(15) NOT NULL DEFAULT 'Active',
  `gue_dismissed_date` varchar(20) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_guests`
--

INSERT INTO `ums_guests` (`gue_id`, `gue_ldr_id`, `gue_firstname`, `gue_lastname`, `gue_phone`, `gue_nid`, `gue_address`, `gue_registered_date`, `gue_status`, `gue_dismissed_date`) VALUES
(1, 5, 'Kalisa', 'Eugene', '+250785858565', '1188658565856545', 'Rwamagana, Muyumbu', '1640261969', 'Dismissed', '1640274623'),
(2, 5, 'Kalisa', 'Eugene', '+250785858565', '1188658565856545', 'Rwamagana, Muyumbu', '1640262130', 'Dismissed', '1640274550'),
(3, 5, 'Kalisa', 'Eugene', '+250785858565', '1188658565856545', 'Rwamagana, Muyumbu', '1640262237', 'Dismissed', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ums_guests`
--
ALTER TABLE `ums_guests`
  ADD PRIMARY KEY (`gue_id`),
  ADD KEY `gue_ldr_id` (`gue_ldr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ums_guests`
--
ALTER TABLE `ums_guests`
  MODIFY `gue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
