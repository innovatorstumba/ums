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
-- Table structure for table `ums_members`
--

CREATE TABLE `ums_members` (
  `mbr_member_id` int(11) NOT NULL,
  `mbr_firstname` varchar(30) NOT NULL,
  `mbr_lastname` varchar(50) NOT NULL,
  `mbr_phone` varchar(20) NOT NULL,
  `mbr_nid` int(20) NOT NULL,
  `mbr_email` varchar(50) NOT NULL,
  `mbr_dob` date NOT NULL,
  `mbr_relationship` varchar(20) NOT NULL,
  `mbr_gender` varchar(10) NOT NULL,
  `mbr_leader_id` int(15) NOT NULL,
  `mbr_insurance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_members`
--

INSERT INTO `ums_members` (`mbr_member_id`, `mbr_firstname`, `mbr_lastname`, `mbr_phone`, `mbr_nid`, `mbr_email`, `mbr_dob`, `mbr_relationship`, `mbr_gender`, `mbr_leader_id`, `mbr_insurance`) VALUES
(10, 'gihozo', 'esrdtyhj', '0783503691', 2147483647, 'igihozo1@gmail.com', '2021-12-10', 'umushyitsi', 'female', 3, 2),
(11, 'audace', 'sangano', '0783503691', 2147483647, 'audasang2018@gmail.com', '2021-12-08', 'umushyitsi', 'male', 3, 2),
(12, 'gihozo', 'sangano', '0783503691', 2147483647, 'igihozo1@gmail.com', '2021-12-13', 'umushyitsi', 'male', 3, 4),
(13, 'audace', 'sangano', '0783503691', 2147483647, 'sanoauddy@gmail.com', '1940-06-20', 'umwana', 'male', 3, 4),
(14, 'gihozo', 'Niyikora', '0783503691', 2147483647, 'igihozo1@gmail.com', '1990-07-17', 'umushyitsi', 'male', 3, 5),
(16, 'audace', 'sangano', '0783503691', 2345678, 'igihozo1@gmail.com', '2021-12-15', 'head', 'male', 12, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ums_members`
--
ALTER TABLE `ums_members`
  ADD PRIMARY KEY (`mbr_member_id`),
  ADD KEY `leader_id` (`mbr_leader_id`),
  ADD KEY `mbr_insurance` (`mbr_insurance`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ums_members`
--
ALTER TABLE `ums_members`
  MODIFY `mbr_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ums_members`
--
ALTER TABLE `ums_members`
  ADD CONSTRAINT `ums_members_ibfk_1` FOREIGN KEY (`mbr_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_members_ibfk_2` FOREIGN KEY (`mbr_insurance`) REFERENCES `ums_ubwishingizi` (`ubw_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
