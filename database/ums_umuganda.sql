-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2021 at 07:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `ums_umuganda`
--

CREATE TABLE `ums_umuganda` (
  `umg_id` int(11) NOT NULL,
  `umg_title` varchar(100) NOT NULL,
  `umg_description` varchar(255) NOT NULL,
  `umg_date` varchar(10) NOT NULL,
  `umg_participant` varchar(10) NOT NULL,
  `umg_agaciro` varchar(10) NOT NULL,
  `umg_abagore` varchar(100) NOT NULL,
  `umg_abagabo` varchar(100) NOT NULL,
  `umg_urubyiruko` varchar(100) NOT NULL,
  `umg_village` int(11) NOT NULL,
  `umg_amafoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_umuganda`
--

INSERT INTO `ums_umuganda` (`umg_id`, `umg_title`, `umg_description`, `umg_date`, `umg_participant`, `umg_agaciro`, `umg_abagore`, `umg_abagabo`, `umg_urubyiruko`, `umg_village`, `umg_amafoto`) VALUES
(1, 'hello', 'kigali', '2021-12-12', '23', '3456543', '21', '23', '1', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ums_umuganda`
--
ALTER TABLE `ums_umuganda`
  ADD PRIMARY KEY (`umg_id`),
  ADD KEY `umg_village` (`umg_village`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ums_umuganda`
--
ALTER TABLE `ums_umuganda`
  MODIFY `umg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ums_umuganda`
--
ALTER TABLE `ums_umuganda`
  ADD CONSTRAINT `ums_umuganda_ibfk_1` FOREIGN KEY (`umg_village`) REFERENCES `ums_village` (`village_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
