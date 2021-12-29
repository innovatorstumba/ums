-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 11:43 AM
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
-- Table structure for table `ums_announcement`
--

CREATE TABLE `ums_announcement` (
  `ann_id` int(11) NOT NULL,
  `ann_leader_id` int(11) NOT NULL,
  `ann_title` varchar(100) NOT NULL,
  `ann_body` text NOT NULL,
  `ann_pic` varchar(100) NOT NULL,
  `ann_created_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_announcement`
--

INSERT INTO `ums_announcement` (`ann_id`, `ann_leader_id`, `ann_title`, `ann_body`, `ann_pic`, `ann_created_date`) VALUES
(19, 5, 'Blaise', 'ckcnfec fece', './assets/uploads/announcements/anno_1640714144.jpg', '1640714144'),
(20, 5, 'kjbkjb', 'hjbhbjhjhbhj bbjhbj', './assets/uploads/announcements/anno_1640714302.jpg', '1640714302'),
(21, 5, 'jhjhb hbjhb', 'hbjbh hjbj', './assets/uploads/announcements/anno_1640714358.jpg', '1640714358'),
(22, 5, 'bkkjbkjbkjb', 'bjhbjhb jhbkjh f cgjhg gjhgvh', './assets/uploads/announcements/anno_1640714502.jpg', '1640714502');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ums_announcement`
--
ALTER TABLE `ums_announcement`
  ADD PRIMARY KEY (`ann_id`),
  ADD KEY `ann_leader_id` (`ann_leader_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ums_announcement`
--
ALTER TABLE `ums_announcement`
  MODIFY `ann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ums_announcement`
--
ALTER TABLE `ums_announcement`
  ADD CONSTRAINT `ums_announcement_ibfk_1` FOREIGN KEY (`ann_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
