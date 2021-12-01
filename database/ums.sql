-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 07:25 AM
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
-- Table structure for table `abatwite`
--

CREATE TABLE `abatwite` (
  `id` int(11) NOT NULL,
  `member_id` int(20) NOT NULL,
  `italiki` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
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
-- Table structure for table `amaduka`
--

CREATE TABLE `amaduka` (
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
-- Table structure for table `amashuri`
--

CREATE TABLE `amashuri` (
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
-- Table structure for table `amasoko`
--

CREATE TABLE `amasoko` (
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
-- Table structure for table `amavuriro`
--

CREATE TABLE `amavuriro` (
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
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
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
-- Table structure for table `bar_restaurent`
--

CREATE TABLE `bar_restaurent` (
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cotegory_code` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cell`
--

CREATE TABLE `cell` (
  `cell_code` int(11) NOT NULL,
  `sector_code` int(11) NOT NULL,
  `cell_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
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
-- Table structure for table `chat_group`
--

CREATE TABLE `chat_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `leader_participant` int(11) NOT NULL,
  `admin_participant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `church`
--

CREATE TABLE `church` (
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
-- Table structure for table `coin`
--

CREATE TABLE `coin` (
  `id` int(11) NOT NULL,
  `coin_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_month` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coin_member`
--

CREATE TABLE `coin_member` (
  `coin_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  `uploaded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cooperative`
--

CREATE TABLE `cooperative` (
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
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_code` int(11) NOT NULL,
  `province_code` int(11) NOT NULL,
  `district_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ejoheza`
--

CREATE TABLE `ejoheza` (
  `ejoheza_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
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
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_number` varchar(30) NOT NULL,
  `isibo_code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ibarura`
--

CREATE TABLE `ibarura` (
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
-- Table structure for table `ibyemezo`
--

CREATE TABLE `ibyemezo` (
  `ibyemezo_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `idea_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `idea_date` date NOT NULL,
  `uploaded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `igiceri`
--

CREATE TABLE `igiceri` (
  `igiceri_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `imihigo`
--

CREATE TABLE `imihigo` (
  `imihigo_code` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `imihigo` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inganda`
--

CREATE TABLE `inganda` (
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
-- Table structure for table `isibo`
--

CREATE TABLE `isibo` (
  `isibo_code` int(11) NOT NULL,
  `village_code` int(11) NOT NULL,
  `isibo_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `isuku`
--

CREATE TABLE `isuku` (
  `isuku_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
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

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
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

-- --------------------------------------------------------

--
-- Table structure for table `parent_evening`
--

CREATE TABLE `parent_evening` (
  `id` int(11) NOT NULL,
  `participant` longtext NOT NULL,
  `italiki` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrption` varchar(250) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
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
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_code` int(11) NOT NULL,
  `province_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roles_id` int(11) NOT NULL,
  `roles_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saloon`
--

CREATE TABLE `saloon` (
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
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sector_code` int(11) NOT NULL,
  `district_code` int(11) NOT NULL,
  `sector_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supermarket`
--

CREATE TABLE `supermarket` (
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
-- Table structure for table `umugereka`
--

CREATE TABLE `umugereka` (
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
-- Table structure for table `umutekano`
--

CREATE TABLE `umutekano` (
  `umutekano_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `village_code` int(11) NOT NULL,
  `cell_code` int(11) NOT NULL,
  `village_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abatwite`
--
ALTER TABLE `abatwite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `location_id` (`village_code`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `village_code` (`village_code`);

--
-- Indexes for table `amaduka`
--
ALTER TABLE `amaduka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `amashuri`
--
ALTER TABLE `amashuri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `amasoko`
--
ALTER TABLE `amasoko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `amavuriro`
--
ALTER TABLE `amavuriro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `bar_restaurent`
--
ALTER TABLE `bar_restaurent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cotegory_code`),
  ADD KEY `category_name` (`category_name`);

--
-- Indexes for table `cell`
--
ALTER TABLE `cell`
  ADD PRIMARY KEY (`cell_code`),
  ADD KEY `sector_code` (`sector_code`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD KEY `admin_sender` (`admin_sender`),
  ADD KEY `admin_reciever` (`admin_reciever`),
  ADD KEY `leader_sender` (`leader_sender`),
  ADD KEY `leader_reciever` (`leader_reciever`);

--
-- Indexes for table `chat_group`
--
ALTER TABLE `chat_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_participant` (`admin_participant`),
  ADD KEY `leader_participant` (`leader_participant`);

--
-- Indexes for table `church`
--
ALTER TABLE `church`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coin_id` (`coin_id`);

--
-- Indexes for table `coin_member`
--
ALTER TABLE `coin_member`
  ADD PRIMARY KEY (`coin_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `idea_id` (`idea_id`);

--
-- Indexes for table `cooperative`
--
ALTER TABLE `cooperative`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_code`),
  ADD KEY `province_code` (`province_code`);

--
-- Indexes for table `ejoheza`
--
ALTER TABLE `ejoheza`
  ADD PRIMARY KEY (`ejoheza_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_number`),
  ADD KEY `isibo_code` (`isibo_code`);

--
-- Indexes for table `ibarura`
--
ALTER TABLE `ibarura`
  ADD PRIMARY KEY (`ibarura_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `ibyemezo`
--
ALTER TABLE `ibyemezo`
  ADD PRIMARY KEY (`ibyemezo_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`idea_id`);

--
-- Indexes for table `igiceri`
--
ALTER TABLE `igiceri`
  ADD PRIMARY KEY (`igiceri_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `imihigo`
--
ALTER TABLE `imihigo`
  ADD PRIMARY KEY (`imihigo_code`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `inganda`
--
ALTER TABLE `inganda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `isibo`
--
ALTER TABLE `isibo`
  ADD PRIMARY KEY (`isibo_code`),
  ADD KEY `village_code` (`village_code`);

--
-- Indexes for table `isuku`
--
ALTER TABLE `isuku`
  ADD PRIMARY KEY (`isuku_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`leader_id`),
  ADD KEY `village_id` (`village_code`),
  ADD KEY `used_id` (`used_id`),
  ADD KEY `village_code` (`village_code`),
  ADD KEY `category_code` (`category_code`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `parent_evening`
--
ALTER TABLE `parent_evening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roles_id`);

--
-- Indexes for table `saloon`
--
ALTER TABLE `saloon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sector_code`),
  ADD KEY `district_code` (`district_code`);

--
-- Indexes for table `supermarket`
--
ALTER TABLE `supermarket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `umugereka`
--
ALTER TABLE `umugereka`
  ADD PRIMARY KEY (`umugereka_id`),
  ADD KEY `village_id` (`village_code`),
  ADD KEY `used_id` (`used_id`),
  ADD KEY `village_code` (`village_code`),
  ADD KEY `category_code` (`category_code`);

--
-- Indexes for table `umutekano`
--
ALTER TABLE `umutekano`
  ADD PRIMARY KEY (`umutekano_id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `roles_id` (`roles_id`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`village_code`),
  ADD KEY `cell_code` (`cell_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abatwite`
--
ALTER TABLE `abatwite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amaduka`
--
ALTER TABLE `amaduka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amashuri`
--
ALTER TABLE `amashuri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amasoko`
--
ALTER TABLE `amasoko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amavuriro`
--
ALTER TABLE `amavuriro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bar_restaurent`
--
ALTER TABLE `bar_restaurent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_group`
--
ALTER TABLE `chat_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `church`
--
ALTER TABLE `church`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coin`
--
ALTER TABLE `coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cooperative`
--
ALTER TABLE `cooperative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ejoheza`
--
ALTER TABLE `ejoheza`
  MODIFY `ejoheza_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ibarura`
--
ALTER TABLE `ibarura`
  MODIFY `ibarura_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ibyemezo`
--
ALTER TABLE `ibyemezo`
  MODIFY `ibyemezo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `idea_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `igiceri`
--
ALTER TABLE `igiceri`
  MODIFY `igiceri_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imihigo`
--
ALTER TABLE `imihigo`
  MODIFY `imihigo_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inganda`
--
ALTER TABLE `inganda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `isuku`
--
ALTER TABLE `isuku`
  MODIFY `isuku_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `leader_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_evening`
--
ALTER TABLE `parent_evening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saloon`
--
ALTER TABLE `saloon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supermarket`
--
ALTER TABLE `supermarket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umugereka`
--
ALTER TABLE `umugereka`
  MODIFY `umugereka_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umutekano`
--
ALTER TABLE `umutekano`
  MODIFY `umutekano_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abatwite`
--
ALTER TABLE `abatwite`
  ADD CONSTRAINT `abatwite_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `amaduka`
--
ALTER TABLE `amaduka`
  ADD CONSTRAINT `amaduka_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `amashuri`
--
ALTER TABLE `amashuri`
  ADD CONSTRAINT `amashuri_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `amasoko`
--
ALTER TABLE `amasoko`
  ADD CONSTRAINT `amasoko_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `amavuriro`
--
ALTER TABLE `amavuriro`
  ADD CONSTRAINT `amavuriro_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `banks`
--
ALTER TABLE `banks`
  ADD CONSTRAINT `banks_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bar_restaurent`
--
ALTER TABLE `bar_restaurent`
  ADD CONSTRAINT `bar_restaurent_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cell`
--
ALTER TABLE `cell`
  ADD CONSTRAINT `cell_ibfk_1` FOREIGN KEY (`sector_code`) REFERENCES `sector` (`sector_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`leader_sender`) REFERENCES `leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`leader_reciever`) REFERENCES `leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_3` FOREIGN KEY (`admin_sender`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_4` FOREIGN KEY (`admin_reciever`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chat_group`
--
ALTER TABLE `chat_group`
  ADD CONSTRAINT `chat_group_ibfk_1` FOREIGN KEY (`leader_participant`) REFERENCES `leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `church`
--
ALTER TABLE `church`
  ADD CONSTRAINT `church_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coin`
--
ALTER TABLE `coin`
  ADD CONSTRAINT `coin_ibfk_1` FOREIGN KEY (`coin_id`) REFERENCES `coin_member` (`coin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coin_member`
--
ALTER TABLE `coin_member`
  ADD CONSTRAINT `coin_member_ibfk_1` FOREIGN KEY (`coin_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idea_id`) REFERENCES `idea` (`idea_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cooperative`
--
ALTER TABLE `cooperative`
  ADD CONSTRAINT `cooperative_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`province_code`) REFERENCES `province` (`province_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`isibo_code`) REFERENCES `isibo` (`isibo_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ibarura`
--
ALTER TABLE `ibarura`
  ADD CONSTRAINT `ibarura_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ibyemezo`
--
ALTER TABLE `ibyemezo`
  ADD CONSTRAINT `ibyemezo_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imihigo`
--
ALTER TABLE `imihigo`
  ADD CONSTRAINT `imihigo_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inganda`
--
ALTER TABLE `inganda`
  ADD CONSTRAINT `inganda_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `isibo`
--
ALTER TABLE `isibo`
  ADD CONSTRAINT `isibo_ibfk_1` FOREIGN KEY (`village_code`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `isuku`
--
ALTER TABLE `isuku`
  ADD CONSTRAINT `isuku_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaders`
--
ALTER TABLE `leaders`
  ADD CONSTRAINT `leaders_ibfk_1` FOREIGN KEY (`used_id`) REFERENCES `roles` (`roles_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leaders_ibfk_2` FOREIGN KEY (`village_code`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leaders_ibfk_3` FOREIGN KEY (`category_code`) REFERENCES `category` (`cotegory_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `market`
--
ALTER TABLE `market`
  ADD CONSTRAINT `market_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD CONSTRAINT `pharmacy_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saloon`
--
ALTER TABLE `saloon`
  ADD CONSTRAINT `saloon_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `sector_ibfk_1` FOREIGN KEY (`district_code`) REFERENCES `district` (`district_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supermarket`
--
ALTER TABLE `supermarket`
  ADD CONSTRAINT `supermarket_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `umugereka`
--
ALTER TABLE `umugereka`
  ADD CONSTRAINT `umugereka_ibfk_1` FOREIGN KEY (`village_code`) REFERENCES `village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `umugereka_ibfk_2` FOREIGN KEY (`used_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `umugereka_ibfk_3` FOREIGN KEY (`category_code`) REFERENCES `category` (`cotegory_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `umutekano`
--
ALTER TABLE `umutekano`
  ADD CONSTRAINT `umutekano_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `leaders` (`leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`roles_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `village`
--
ALTER TABLE `village`
  ADD CONSTRAINT `village_ibfk_1` FOREIGN KEY (`cell_code`) REFERENCES `cell` (`cell_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
