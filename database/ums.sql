-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:29 PM
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
-- Table structure for table `ums_abatwite`
--

CREATE TABLE `ums_abatwite` (
  `id` int(11) NOT NULL,
  `member_id` int(20) NOT NULL,
  `italiki` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_admin`
--

CREATE TABLE `ums_admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `nid` int(16) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `village_code` int(12) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_amaduka`
--

CREATE TABLE `ums_amaduka` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_amashuri`
--

CREATE TABLE `ums_amashuri` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_amasoko`
--

CREATE TABLE `ums_amasoko` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_amavuriro`
--

CREATE TABLE `ums_amavuriro` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_banks`
--

CREATE TABLE `ums_banks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_bar_restaurent`
--

CREATE TABLE `ums_bar_restaurent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_category`
--

CREATE TABLE `ums_category` (
  `cotegory_code` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_category`
--

INSERT INTO `ums_category` (`cotegory_code`, `category_name`) VALUES
(1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `ums_cell`
--

CREATE TABLE `ums_cell` (
  `cell_code` int(11) NOT NULL,
  `sector_code` int(11) NOT NULL,
  `cell_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_cell`
--

INSERT INTO `ums_cell` (`cell_code`, `sector_code`, `cell_name`) VALUES
(1, 1, 'Kabuye'),
(2, 1, 'Nyacyonga');

-- --------------------------------------------------------

--
-- Table structure for table `ums_chat`
--

CREATE TABLE `ums_chat` (
  `chat_id` int(11) NOT NULL,
  `admin_sender` int(11) NOT NULL,
  `admin_reciever` int(11) NOT NULL,
  `chat_group` int(11) NOT NULL,
  `body` longtext NOT NULL,
  `file` varchar(100) NOT NULL,
  `chat_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `leader_sender` int(11) NOT NULL,
  `leader_reciever` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_chat_group`
--

CREATE TABLE `ums_chat_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `leader_participant` int(11) NOT NULL,
  `admin_participant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_church`
--

CREATE TABLE `ums_church` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_coin`
--

CREATE TABLE `ums_coin` (
  `id` int(11) NOT NULL,
  `coin_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_month` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_coin_member`
--

CREATE TABLE `ums_coin_member` (
  `coin_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_comment`
--

CREATE TABLE `ums_comment` (
  `comment_id` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  `uploaded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_cooperative`
--

CREATE TABLE `ums_cooperative` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_district`
--

CREATE TABLE `ums_district` (
  `district_code` int(11) NOT NULL,
  `province_code` int(11) NOT NULL,
  `district_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_district`
--

INSERT INTO `ums_district` (`district_code`, `province_code`, `district_name`) VALUES
(1, 1, 'Gasabo'),
(2, 1, 'Nyarugenge'),
(3, 2, 'Rulindo'),
(4, 2, 'Musanze');

-- --------------------------------------------------------

--
-- Table structure for table `ums_ejoheza`
--

CREATE TABLE `ums_ejoheza` (
  `ejoheza_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_hotel`
--

CREATE TABLE `ums_hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_house`
--

CREATE TABLE `ums_house` (
  `house_number` varchar(30) NOT NULL,
  `isibo_code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_ibarura`
--

CREATE TABLE `ums_ibarura` (
  `ibarura_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `girinka` varchar(100) NOT NULL,
  `agatanda` varchar(100) NOT NULL,
  `akarima` varchar(100) NOT NULL,
  `abanyeshuri` varchar(100) NOT NULL,
  `abatiga` varchar(100) NOT NULL,
  `abana_batwite` varchar(100) NOT NULL,
  `abashomeri` varchar(100) NOT NULL,
  `abakozi` varchar(100) NOT NULL,
  `ibicanwa` varchar(100) NOT NULL,
  `abana_babyaye` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_ibyemezo`
--

CREATE TABLE `ums_ibyemezo` (
  `ibyemezo_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_idea`
--

CREATE TABLE `ums_idea` (
  `idea_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `idea_date` date NOT NULL,
  `uploaded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_igiceri`
--

CREATE TABLE `ums_igiceri` (
  `igiceri_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_imihigo`
--

CREATE TABLE `ums_imihigo` (
  `imihigo_code` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `imihigo` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_inganda`
--

CREATE TABLE `ums_inganda` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_isibo`
--

CREATE TABLE `ums_isibo` (
  `isibo_code` int(11) NOT NULL,
  `village_code` int(11) NOT NULL,
  `isibo_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_isibo`
--

INSERT INTO `ums_isibo` (`isibo_code`, `village_code`, `isibo_name`) VALUES
(1, 1, 'Ubumwe'),
(2, 1, 'Itetero');

-- --------------------------------------------------------

--
-- Table structure for table `ums_isuku`
--

CREATE TABLE `ums_isuku` (
  `isuku_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_leaders`
--

CREATE TABLE `ums_leaders` (
  `leader_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `nid` int(16) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `village_code` int(11) NOT NULL,
  `used_id` int(11) NOT NULL,
  `category_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_leaders`
--

INSERT INTO `ums_leaders` (`leader_id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `dob`, `nid`, `profile`, `village_code`, `used_id`, `category_code`) VALUES
(3, 'Kamana', 'Emmanuel', '0785656565', 'kamana@gmail.com', 'male', '1996-01-01', 115452565, '', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ums_market`
--

CREATE TABLE `ums_market` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_members`
--

CREATE TABLE `ums_members` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `nid` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `leader_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_members`
--

INSERT INTO `ums_members` (`member_id`, `firstname`, `lastname`, `phone`, `nid`, `email`, `dob`, `gender`, `leader_id`) VALUES
(1, 'Rukundo', 'Love', '0785654852', 1515151515, 'rukundo@gmail.com', '2011-12-01', 'male', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ums_parent_evening`
--

CREATE TABLE `ums_parent_evening` (
  `id` int(11) NOT NULL,
  `participant` longtext NOT NULL,
  `italiki` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrption` varchar(250) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_pharmacy`
--

CREATE TABLE `ums_pharmacy` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_province`
--

CREATE TABLE `ums_province` (
  `province_code` int(11) NOT NULL,
  `province_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_province`
--

INSERT INTO `ums_province` (`province_code`, `province_name`) VALUES
(1, 'Kigali'),
(2, 'Northern');

-- --------------------------------------------------------

--
-- Table structure for table `ums_roles`
--

CREATE TABLE `ums_roles` (
  `roles_id` int(11) NOT NULL,
  `roles_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_roles`
--

INSERT INTO `ums_roles` (`roles_id`, `roles_name`) VALUES
(1, 'Admin'),
(2, 'Family');

-- --------------------------------------------------------

--
-- Table structure for table `ums_saloon`
--

CREATE TABLE `ums_saloon` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_sector`
--

CREATE TABLE `ums_sector` (
  `sector_code` int(11) NOT NULL,
  `district_code` int(11) NOT NULL,
  `sector_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_sector`
--

INSERT INTO `ums_sector` (`sector_code`, `district_code`, `sector_name`) VALUES
(1, 1, 'Jabana'),
(2, 1, 'Kinyinya');

-- --------------------------------------------------------

--
-- Table structure for table `ums_supermarket`
--

CREATE TABLE `ums_supermarket` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `village_id` int(15) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_umugereka`
--

CREATE TABLE `ums_umugereka` (
  `umugereka_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `nid` int(16) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `village_code` int(11) NOT NULL,
  `used_id` int(11) NOT NULL,
  `category_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_umutekano`
--

CREATE TABLE `ums_umutekano` (
  `umutekano_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_users`
--

CREATE TABLE `ums_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_users`
--

INSERT INTO `ums_users` (`user_id`, `username`, `password`, `roles_id`) VALUES
(1, 'user1', '123', 1),
(2, 'user2', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ums_village`
--

CREATE TABLE `ums_village` (
  `village_code` int(11) NOT NULL,
  `cell_code` int(11) NOT NULL,
  `village_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_village`
--

INSERT INTO `ums_village` (`village_code`, `cell_code`, `village_name`) VALUES
(1, 1, 'Amasangano'),
(2, 1, 'Karuruma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ums_abatwite`
--
ALTER TABLE `ums_abatwite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `ums_admin`
--
ALTER TABLE `ums_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `location_id` (`village_code`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `village_code` (`village_code`);

--
-- Indexes for table `ums_amaduka`
--
ALTER TABLE `ums_amaduka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_amashuri`
--
ALTER TABLE `ums_amashuri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_amasoko`
--
ALTER TABLE `ums_amasoko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_amavuriro`
--
ALTER TABLE `ums_amavuriro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_banks`
--
ALTER TABLE `ums_banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_bar_restaurent`
--
ALTER TABLE `ums_bar_restaurent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_category`
--
ALTER TABLE `ums_category`
  ADD PRIMARY KEY (`cotegory_code`),
  ADD KEY `category_name` (`category_name`);

--
-- Indexes for table `ums_cell`
--
ALTER TABLE `ums_cell`
  ADD PRIMARY KEY (`cell_code`),
  ADD KEY `sector_code` (`sector_code`);

--
-- Indexes for table `ums_chat`
--
ALTER TABLE `ums_chat`
  ADD KEY `admin_sender` (`admin_sender`),
  ADD KEY `admin_reciever` (`admin_reciever`),
  ADD KEY `leader_sender` (`leader_sender`),
  ADD KEY `leader_reciever` (`leader_reciever`);

--
-- Indexes for table `ums_chat_group`
--
ALTER TABLE `ums_chat_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_participant` (`admin_participant`),
  ADD KEY `leader_participant` (`leader_participant`);

--
-- Indexes for table `ums_church`
--
ALTER TABLE `ums_church`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_coin`
--
ALTER TABLE `ums_coin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coin_id` (`coin_id`);

--
-- Indexes for table `ums_coin_member`
--
ALTER TABLE `ums_coin_member`
  ADD PRIMARY KEY (`coin_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `ums_comment`
--
ALTER TABLE `ums_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `idea_id` (`idea_id`);

--
-- Indexes for table `ums_cooperative`
--
ALTER TABLE `ums_cooperative`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_district`
--
ALTER TABLE `ums_district`
  ADD PRIMARY KEY (`district_code`),
  ADD KEY `province_code` (`province_code`);

--
-- Indexes for table `ums_ejoheza`
--
ALTER TABLE `ums_ejoheza`
  ADD PRIMARY KEY (`ejoheza_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `ums_hotel`
--
ALTER TABLE `ums_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_house`
--
ALTER TABLE `ums_house`
  ADD PRIMARY KEY (`house_number`),
  ADD KEY `isibo_code` (`isibo_code`);

--
-- Indexes for table `ums_ibarura`
--
ALTER TABLE `ums_ibarura`
  ADD PRIMARY KEY (`ibarura_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `ums_ibyemezo`
--
ALTER TABLE `ums_ibyemezo`
  ADD PRIMARY KEY (`ibyemezo_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `ums_idea`
--
ALTER TABLE `ums_idea`
  ADD PRIMARY KEY (`idea_id`);

--
-- Indexes for table `ums_igiceri`
--
ALTER TABLE `ums_igiceri`
  ADD PRIMARY KEY (`igiceri_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `ums_imihigo`
--
ALTER TABLE `ums_imihigo`
  ADD PRIMARY KEY (`imihigo_code`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `ums_inganda`
--
ALTER TABLE `ums_inganda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_isibo`
--
ALTER TABLE `ums_isibo`
  ADD PRIMARY KEY (`isibo_code`),
  ADD KEY `village_code` (`village_code`);

--
-- Indexes for table `ums_isuku`
--
ALTER TABLE `ums_isuku`
  ADD PRIMARY KEY (`isuku_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `ums_leaders`
--
ALTER TABLE `ums_leaders`
  ADD PRIMARY KEY (`leader_id`),
  ADD KEY `village_id` (`village_code`),
  ADD KEY `used_id` (`used_id`),
  ADD KEY `village_code` (`village_code`),
  ADD KEY `category_code` (`category_code`);

--
-- Indexes for table `ums_market`
--
ALTER TABLE `ums_market`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_members`
--
ALTER TABLE `ums_members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `ums_parent_evening`
--
ALTER TABLE `ums_parent_evening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ums_pharmacy`
--
ALTER TABLE `ums_pharmacy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_province`
--
ALTER TABLE `ums_province`
  ADD PRIMARY KEY (`province_code`);

--
-- Indexes for table `ums_roles`
--
ALTER TABLE `ums_roles`
  ADD PRIMARY KEY (`roles_id`);

--
-- Indexes for table `ums_saloon`
--
ALTER TABLE `ums_saloon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_sector`
--
ALTER TABLE `ums_sector`
  ADD PRIMARY KEY (`sector_code`),
  ADD KEY `district_code` (`district_code`);

--
-- Indexes for table `ums_supermarket`
--
ALTER TABLE `ums_supermarket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `ums_umugereka`
--
ALTER TABLE `ums_umugereka`
  ADD PRIMARY KEY (`umugereka_id`),
  ADD KEY `village_id` (`village_code`),
  ADD KEY `used_id` (`used_id`),
  ADD KEY `village_code` (`village_code`),
  ADD KEY `category_code` (`category_code`);

--
-- Indexes for table `ums_umutekano`
--
ALTER TABLE `ums_umutekano`
  ADD PRIMARY KEY (`umutekano_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `ums_users`
--
ALTER TABLE `ums_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `roles_id` (`roles_id`);

--
-- Indexes for table `ums_village`
--
ALTER TABLE `ums_village`
  ADD PRIMARY KEY (`village_code`),
  ADD KEY `cell_code` (`cell_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ums_abatwite`
--
ALTER TABLE `ums_abatwite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_admin`
--
ALTER TABLE `ums_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_amaduka`
--
ALTER TABLE `ums_amaduka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_amashuri`
--
ALTER TABLE `ums_amashuri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_amasoko`
--
ALTER TABLE `ums_amasoko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_amavuriro`
--
ALTER TABLE `ums_amavuriro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_banks`
--
ALTER TABLE `ums_banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_bar_restaurent`
--
ALTER TABLE `ums_bar_restaurent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_chat_group`
--
ALTER TABLE `ums_chat_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_church`
--
ALTER TABLE `ums_church`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_coin`
--
ALTER TABLE `ums_coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_comment`
--
ALTER TABLE `ums_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_cooperative`
--
ALTER TABLE `ums_cooperative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_ejoheza`
--
ALTER TABLE `ums_ejoheza`
  MODIFY `ejoheza_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_hotel`
--
ALTER TABLE `ums_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_ibarura`
--
ALTER TABLE `ums_ibarura`
  MODIFY `ibarura_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_ibyemezo`
--
ALTER TABLE `ums_ibyemezo`
  MODIFY `ibyemezo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_idea`
--
ALTER TABLE `ums_idea`
  MODIFY `idea_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_igiceri`
--
ALTER TABLE `ums_igiceri`
  MODIFY `igiceri_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_imihigo`
--
ALTER TABLE `ums_imihigo`
  MODIFY `imihigo_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_inganda`
--
ALTER TABLE `ums_inganda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_isuku`
--
ALTER TABLE `ums_isuku`
  MODIFY `isuku_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_leaders`
--
ALTER TABLE `ums_leaders`
  MODIFY `leader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ums_market`
--
ALTER TABLE `ums_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_members`
--
ALTER TABLE `ums_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ums_parent_evening`
--
ALTER TABLE `ums_parent_evening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_pharmacy`
--
ALTER TABLE `ums_pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_roles`
--
ALTER TABLE `ums_roles`
  MODIFY `roles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ums_saloon`
--
ALTER TABLE `ums_saloon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_supermarket`
--
ALTER TABLE `ums_supermarket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_umugereka`
--
ALTER TABLE `ums_umugereka`
  MODIFY `umugereka_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_umutekano`
--
ALTER TABLE `ums_umutekano`
  MODIFY `umutekano_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_users`
--
ALTER TABLE `ums_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ums_abatwite`
--
ALTER TABLE `ums_abatwite`
  ADD CONSTRAINT `ums_abatwite_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `ums_members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_admin`
--
ALTER TABLE `ums_admin`
  ADD CONSTRAINT `ums_admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ums_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_admin_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_amaduka`
--
ALTER TABLE `ums_amaduka`
  ADD CONSTRAINT `ums_amaduka_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_amashuri`
--
ALTER TABLE `ums_amashuri`
  ADD CONSTRAINT `ums_amashuri_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_amasoko`
--
ALTER TABLE `ums_amasoko`
  ADD CONSTRAINT `ums_amasoko_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_amavuriro`
--
ALTER TABLE `ums_amavuriro`
  ADD CONSTRAINT `ums_amavuriro_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_banks`
--
ALTER TABLE `ums_banks`
  ADD CONSTRAINT `ums_banks_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_bar_restaurent`
--
ALTER TABLE `ums_bar_restaurent`
  ADD CONSTRAINT `ums_bar_restaurent_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_cell`
--
ALTER TABLE `ums_cell`
  ADD CONSTRAINT `ums_cell_ibfk_1` FOREIGN KEY (`sector_code`) REFERENCES `ums_sector` (`sector_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_chat`
--
ALTER TABLE `ums_chat`
  ADD CONSTRAINT `ums_chat_ibfk_1` FOREIGN KEY (`leader_sender`) REFERENCES `ums_leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_chat_ibfk_2` FOREIGN KEY (`leader_reciever`) REFERENCES `ums_leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_chat_ibfk_3` FOREIGN KEY (`admin_sender`) REFERENCES `ums_admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_chat_ibfk_4` FOREIGN KEY (`admin_reciever`) REFERENCES `ums_admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_chat_group`
--
ALTER TABLE `ums_chat_group`
  ADD CONSTRAINT `ums_chat_group_ibfk_1` FOREIGN KEY (`leader_participant`) REFERENCES `ums_leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_church`
--
ALTER TABLE `ums_church`
  ADD CONSTRAINT `ums_church_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_coin`
--
ALTER TABLE `ums_coin`
  ADD CONSTRAINT `ums_coin_ibfk_1` FOREIGN KEY (`coin_id`) REFERENCES `ums_coin_member` (`coin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_coin_member`
--
ALTER TABLE `ums_coin_member`
  ADD CONSTRAINT `ums_coin_member_ibfk_1` FOREIGN KEY (`coin_id`) REFERENCES `ums_members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_comment`
--
ALTER TABLE `ums_comment`
  ADD CONSTRAINT `ums_comment_ibfk_1` FOREIGN KEY (`idea_id`) REFERENCES `ums_idea` (`idea_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_cooperative`
--
ALTER TABLE `ums_cooperative`
  ADD CONSTRAINT `ums_cooperative_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_district`
--
ALTER TABLE `ums_district`
  ADD CONSTRAINT `ums_district_ibfk_1` FOREIGN KEY (`province_code`) REFERENCES `ums_province` (`province_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_hotel`
--
ALTER TABLE `ums_hotel`
  ADD CONSTRAINT `ums_hotel_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_house`
--
ALTER TABLE `ums_house`
  ADD CONSTRAINT `ums_house_ibfk_1` FOREIGN KEY (`isibo_code`) REFERENCES `ums_isibo` (`isibo_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_ibarura`
--
ALTER TABLE `ums_ibarura`
  ADD CONSTRAINT `ums_ibarura_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `ums_leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_ibyemezo`
--
ALTER TABLE `ums_ibyemezo`
  ADD CONSTRAINT `ums_ibyemezo_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `ums_members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_imihigo`
--
ALTER TABLE `ums_imihigo`
  ADD CONSTRAINT `ums_imihigo_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `ums_leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_inganda`
--
ALTER TABLE `ums_inganda`
  ADD CONSTRAINT `ums_inganda_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_isibo`
--
ALTER TABLE `ums_isibo`
  ADD CONSTRAINT `ums_isibo_ibfk_1` FOREIGN KEY (`village_code`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_isuku`
--
ALTER TABLE `ums_isuku`
  ADD CONSTRAINT `ums_isuku_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `ums_leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_leaders`
--
ALTER TABLE `ums_leaders`
  ADD CONSTRAINT `ums_leaders_ibfk_2` FOREIGN KEY (`village_code`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_leaders_ibfk_3` FOREIGN KEY (`category_code`) REFERENCES `ums_category` (`cotegory_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_leaders_ibfk_4` FOREIGN KEY (`used_id`) REFERENCES `ums_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_market`
--
ALTER TABLE `ums_market`
  ADD CONSTRAINT `ums_market_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_members`
--
ALTER TABLE `ums_members`
  ADD CONSTRAINT `ums_members_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `ums_leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_pharmacy`
--
ALTER TABLE `ums_pharmacy`
  ADD CONSTRAINT `ums_pharmacy_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_saloon`
--
ALTER TABLE `ums_saloon`
  ADD CONSTRAINT `ums_saloon_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_sector`
--
ALTER TABLE `ums_sector`
  ADD CONSTRAINT `ums_sector_ibfk_1` FOREIGN KEY (`district_code`) REFERENCES `ums_district` (`district_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_supermarket`
--
ALTER TABLE `ums_supermarket`
  ADD CONSTRAINT `ums_supermarket_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_umugereka`
--
ALTER TABLE `ums_umugereka`
  ADD CONSTRAINT `ums_umugereka_ibfk_1` FOREIGN KEY (`village_code`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_umugereka_ibfk_2` FOREIGN KEY (`used_id`) REFERENCES `ums_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_umugereka_ibfk_3` FOREIGN KEY (`category_code`) REFERENCES `ums_category` (`cotegory_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_umutekano`
--
ALTER TABLE `ums_umutekano`
  ADD CONSTRAINT `ums_umutekano_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `ums_leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_users`
--
ALTER TABLE `ums_users`
  ADD CONSTRAINT `ums_users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `ums_roles` (`roles_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_village`
--
ALTER TABLE `ums_village`
  ADD CONSTRAINT `ums_village_ibfk_1` FOREIGN KEY (`cell_code`) REFERENCES `ums_cell` (`cell_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
