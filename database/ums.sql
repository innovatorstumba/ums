-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 08:26 AM
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
  `abtw_id` int(11) NOT NULL,
  `abtw_member_id` int(20) NOT NULL,
  `abtw_italiki` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_admin`
--

CREATE TABLE `ums_admin` (
  `adm_id` int(11) NOT NULL,
  `adm_firstname` varchar(100) NOT NULL,
  `adm_lastname` varchar(100) NOT NULL,
  `adm_nid` int(16) NOT NULL,
  `adm_phone` varchar(100) NOT NULL,
  `adm_village_code` int(12) NOT NULL,
  `adm_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_admin`
--

INSERT INTO `ums_admin` (`adm_id`, `adm_firstname`, `adm_lastname`, `adm_nid`, `adm_phone`, `adm_village_code`, `adm_user_id`) VALUES
(1, 'huska', 'kamana', 1234567890, '0780000000', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `ums_amaduka`
--

CREATE TABLE `ums_amaduka` (
  `duka_id` int(11) NOT NULL,
  `duka_name` varchar(100) NOT NULL,
  `duka_village_id` int(15) NOT NULL,
  `duka_contact` varchar(100) NOT NULL,
  `duka_file` varchar(100) NOT NULL,
  `duka_description` varchar(255) NOT NULL,
  `duka_category` varchar(100) NOT NULL,
  `duka_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_amashuri`
--

CREATE TABLE `ums_amashuri` (
  `scl_id` int(11) NOT NULL,
  `scl_name` varchar(100) NOT NULL,
  `scl_village_id` int(15) NOT NULL,
  `scl_contact` varchar(100) NOT NULL,
  `scl_file` varchar(100) NOT NULL,
  `scl_description` varchar(255) NOT NULL,
  `scl_category` varchar(100) NOT NULL,
  `scl_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_amasoko`
--

CREATE TABLE `ums_amasoko` (
  `soko_id` int(11) NOT NULL,
  `soko_name` varchar(100) NOT NULL,
  `soko_village_id` int(15) NOT NULL,
  `soko_contact` varchar(100) NOT NULL,
  `soko_file` varchar(100) NOT NULL,
  `soko_description` varchar(255) NOT NULL,
  `soko_category` varchar(100) NOT NULL,
  `soko_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_amatangazo`
--

CREATE TABLE `ums_amatangazo` (
  `ama_id` int(11) NOT NULL,
  `ama_title` varchar(30) NOT NULL,
  `ama_desc` text NOT NULL,
  `ama_file` text DEFAULT NULL,
  `ama_category` varchar(20) NOT NULL,
  `ama_isibo` int(11) NOT NULL,
  `ama_created_by` int(11) NOT NULL,
  `ama_created_on` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_amatangazo`
--

INSERT INTO `ums_amatangazo` (`ama_id`, `ama_title`, `ama_desc`, `ama_file`, `ama_category`, `ama_isibo`, `ama_created_by`, `ama_created_on`) VALUES
(1, 'inama3', 'buri wakabiri dufite inama', 'assets/uploads/amatangazo/Capture1.PNG', 'ayaleta', 1, 12, ''),
(2, 'hjad', 'jlhasdlja', 'assets/uploads/amatangazo/sangano13.jpg', 'ayaleta', 1, 12, '2021-12-12 14:48:38'),
(3, 'shlahd', 'iuhwefljhs', '', 'ayaleta', 1, 12, '2021-12-12 15:00:13'),
(4, 'sajhgf', 'kiuytredcvbnm', '', 'ayaleta', 1, 12, 'Sunday 12December2021 01:'),
(5, 'indangamuntu', 'kujyhtgfdfvjhk,', 'assets/uploads/amatangazo/sangano14.jpg', 'ayaleta', 1, 12, 'Sunday 12December2021 01:12:45 PM'),
(6, 'From Blaise', 'jhbjhb hjfdvbh fhdv bvjhdb vhfdjb dfhjvb jdfhvb jdfhv jdfhv dufhjv djfhv djhfv djhfv jdfhv djhfv ', 'assets/uploads/amatangazo/image_2.jpg', 'ayaleta', 1, 12, 'Tuesday 14December2021 06:55:33 PM');

-- --------------------------------------------------------

--
-- Table structure for table `ums_amavuriro`
--

CREATE TABLE `ums_amavuriro` (
  `vuriro_id` int(11) NOT NULL,
  `vuriro_name` varchar(100) NOT NULL,
  `vuriro_village_id` int(15) NOT NULL,
  `vuriro_contact` varchar(100) NOT NULL,
  `vuriro_file` varchar(100) NOT NULL,
  `vuriro_description` varchar(255) NOT NULL,
  `vuriro_category` varchar(100) NOT NULL,
  `vuriro_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `ums_banks`
--

CREATE TABLE `ums_banks` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_village_id` int(15) NOT NULL,
  `bank_contact` varchar(100) NOT NULL,
  `bank_file` varchar(100) NOT NULL,
  `bank_description` varchar(255) NOT NULL,
  `bank_category` varchar(100) NOT NULL,
  `bank_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_bar_restaurent`
--

CREATE TABLE `ums_bar_restaurent` (
  `bar_id` int(11) NOT NULL,
  `bar_name` varchar(100) NOT NULL,
  `bar_village_id` int(15) NOT NULL,
  `bar_contact` varchar(100) NOT NULL,
  `bar_file` varchar(100) NOT NULL,
  `bar_description` varchar(255) NOT NULL,
  `bar_category` varchar(100) NOT NULL,
  `bar_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_category`
--

CREATE TABLE `ums_category` (
  `cat_cotegory_code` int(11) NOT NULL,
  `cat_category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_category`
--

INSERT INTO `ums_category` (`cat_cotegory_code`, `cat_category_name`) VALUES
(1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `ums_cell`
--

CREATE TABLE `ums_cell` (
  `c_cell_code` int(11) NOT NULL,
  `c_sector_code` int(11) NOT NULL,
  `c_cell_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_cell`
--

INSERT INTO `ums_cell` (`c_cell_code`, `c_sector_code`, `c_cell_name`) VALUES
(1, 1, 'Kabuye'),
(2, 1, 'Nyacyonga');

-- --------------------------------------------------------

--
-- Table structure for table `ums_chat`
--

CREATE TABLE `ums_chat` (
  `cht_id` int(11) NOT NULL,
  `cht_admin_sender` int(11) NOT NULL,
  `cht_admin_reciever` int(11) NOT NULL,
  `cht_chat_group` int(11) NOT NULL,
  `cht_body` longtext NOT NULL,
  `cht_file` varchar(100) NOT NULL,
  `cht_chat_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cht_leader_sender` int(11) NOT NULL,
  `cht_leader_reciever` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_chat_group`
--

CREATE TABLE `ums_chat_group` (
  `grp_id` int(11) NOT NULL,
  `grp_name` varchar(100) NOT NULL,
  `grp_leader_participant` int(11) NOT NULL,
  `grp_admin_participant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_church`
--

CREATE TABLE `ums_church` (
  `ch_id` int(11) NOT NULL,
  `ch_name` varchar(100) NOT NULL,
  `ch_village_id` int(15) NOT NULL,
  `ch_contact` varchar(100) NOT NULL,
  `ch_file` varchar(100) NOT NULL,
  `ch_description` varchar(255) NOT NULL,
  `ch_category` varchar(100) NOT NULL,
  `ch_owner` varchar(255) NOT NULL
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
  `cm_coin_id` int(11) NOT NULL,
  `cm_member_id` int(11) NOT NULL,
  `cm_join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_comment`
--

CREATE TABLE `ums_comment` (
  `co_id` int(11) NOT NULL,
  `co_idea_id` int(11) NOT NULL,
  `co_comment` varchar(255) NOT NULL,
  `co_comment_date` date NOT NULL,
  `co_uploaded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_cooperative`
--

CREATE TABLE `ums_cooperative` (
  `co_id` int(11) NOT NULL,
  `co_name` varchar(100) NOT NULL,
  `co_village_id` int(15) NOT NULL,
  `co_contact` varchar(100) NOT NULL,
  `co_file` varchar(100) NOT NULL,
  `co_description` varchar(255) NOT NULL,
  `co_category` varchar(100) NOT NULL,
  `co_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_district`
--

CREATE TABLE `ums_district` (
  `d_code` int(11) NOT NULL,
  `d_province_code` int(11) NOT NULL,
  `d_district_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_district`
--

INSERT INTO `ums_district` (`d_code`, `d_province_code`, `d_district_name`) VALUES
(1, 1, 'Gasabo'),
(2, 1, 'Nyarugenge'),
(3, 2, 'Rulindo'),
(4, 2, 'Musanze');

-- --------------------------------------------------------

--
-- Table structure for table `ums_ejoheza`
--

CREATE TABLE `ums_ejoheza` (
  `ejo_id` int(11) NOT NULL,
  `ejo_leader_id` int(11) NOT NULL,
  `ejo_transaction_id` varchar(25) NOT NULL,
  `ejo_year` int(11) NOT NULL,
  `ejo_pay_month` int(11) NOT NULL,
  `ejo_months` text NOT NULL,
  `ejo_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `ums_hotel`
--

CREATE TABLE `ums_hotel` (
  `ho_id` int(11) NOT NULL,
  `ho_name` varchar(100) NOT NULL,
  `ho_village_id` int(15) NOT NULL,
  `ho_contact` varchar(100) NOT NULL,
  `ho_file` varchar(100) NOT NULL,
  `ho_description` varchar(255) NOT NULL,
  `ho_category` varchar(100) NOT NULL,
  `ho_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_house`
--

CREATE TABLE `ums_house` (
  `h_number` varchar(30) NOT NULL,
  `h_isibo_code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_ibarura`
--

CREATE TABLE `ums_ibarura` (
  `iba_id` int(11) NOT NULL,
  `iba_leader_id` int(11) NOT NULL,
  `iba_girinka` varchar(100) NOT NULL,
  `iba_agatanda` varchar(100) NOT NULL,
  `iba_akarima` varchar(100) NOT NULL,
  `iba_abanyeshuri` varchar(100) NOT NULL,
  `iba_abatiga` varchar(100) NOT NULL,
  `iba_abana_batwite` varchar(100) NOT NULL,
  `iba_abashomeri` varchar(100) NOT NULL,
  `iba_abakozi` varchar(100) NOT NULL,
  `ibicanwa` varchar(100) NOT NULL,
  `iba_abana_babyaye` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_ibyemezo`
--

CREATE TABLE `ums_ibyemezo` (
  `ib_id` int(11) NOT NULL,
  `ib_title` varchar(50) NOT NULL,
  `ib_description` varchar(255) NOT NULL,
  `ib_file` varchar(50) NOT NULL,
  `ib_date` date NOT NULL,
  `ib_member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_idea`
--

CREATE TABLE `ums_idea` (
  `idea_id` int(11) NOT NULL,
  `idea_description` varchar(100) NOT NULL,
  `dea_file` varchar(100) NOT NULL,
  `idea_date` date NOT NULL,
  `dea_uploaded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_igiceri`
--

CREATE TABLE `ums_igiceri` (
  `igiceri_id` int(11) NOT NULL,
  `igiceri_leader_id` int(11) NOT NULL,
  `igiceri_transaction_id` varchar(20) NOT NULL,
  `igiceri_year` int(11) NOT NULL,
  `igiceri_pay_month` int(11) NOT NULL,
  `igiceri_months` text NOT NULL,
  `igiceri_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_igiceri`
--

INSERT INTO `ums_igiceri` (`igiceri_id`, `igiceri_leader_id`, `igiceri_transaction_id`, `igiceri_year`, `igiceri_pay_month`, `igiceri_months`, `igiceri_date`) VALUES
(1, 5, 'TRX1641241575', 2022, 6, 'January,February,March,April,May,June', '1641241615');

-- --------------------------------------------------------

--
-- Table structure for table `ums_imihigo`
--

CREATE TABLE `ums_imihigo` (
  `imihigo_code` int(11) NOT NULL,
  `imihigo_leader_id` int(11) NOT NULL,
  `imihigo` varchar(255) NOT NULL,
  `imihigo_start_date` date NOT NULL,
  `imihigo_end_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_inganda`
--

CREATE TABLE `ums_inganda` (
  `in_id` int(11) NOT NULL,
  `in_name` varchar(100) NOT NULL,
  `in_village_id` int(15) NOT NULL,
  `in_contact` varchar(100) NOT NULL,
  `in_file` varchar(100) NOT NULL,
  `in_description` varchar(255) NOT NULL,
  `in_category` varchar(100) NOT NULL,
  `in_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_isibo`
--

CREATE TABLE `ums_isibo` (
  `isibo_code` int(11) NOT NULL,
  `isibo_village_code` int(11) NOT NULL,
  `isibo_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_isibo`
--

INSERT INTO `ums_isibo` (`isibo_code`, `isibo_village_code`, `isibo_name`) VALUES
(1, 1, 'Ubumwe'),
(2, 1, 'Itetero');

-- --------------------------------------------------------

--
-- Table structure for table `ums_isuku`
--

CREATE TABLE `ums_isuku` (
  `isuku_id` int(11) NOT NULL,
  `isuku_leader_id` int(11) NOT NULL,
  `isuku_transaction_id` varchar(22) NOT NULL,
  `isuku_year` int(11) NOT NULL,
  `isuku_pay_month` int(11) NOT NULL,
  `isuku_months` text NOT NULL,
  `isuku_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_isuku`
--

INSERT INTO `ums_isuku` (`isuku_id`, `isuku_leader_id`, `isuku_transaction_id`, `isuku_year`, `isuku_pay_month`, `isuku_months`, `isuku_date`) VALUES
(1, 5, 'TRX1641240354', 2022, 3, 'January,February,March', '1641240413');

-- --------------------------------------------------------

--
-- Table structure for table `ums_leaders`
--

CREATE TABLE `ums_leaders` (
  `ldr_leader_id` int(11) NOT NULL,
  `ldr_firstname` varchar(20) NOT NULL,
  `ldr_lastname` varchar(20) NOT NULL,
  `ldr_phone` varchar(20) NOT NULL,
  `ldr_email` varchar(50) NOT NULL,
  `ldr_gender` varchar(10) NOT NULL,
  `ldr_dob` date NOT NULL,
  `ldr_house` varchar(20) NOT NULL,
  `ldr_nid` varchar(16) NOT NULL,
  `ldr_profile` varchar(100) DEFAULT NULL,
  `ldr_village_code` int(11) NOT NULL,
  `ldr_isibo_code` int(11) NOT NULL,
  `ldr_used_id` int(11) NOT NULL,
  `ldr_category_code` int(11) NOT NULL,
  `ldr_insurance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_leaders`
--

INSERT INTO `ums_leaders` (`ldr_leader_id`, `ldr_firstname`, `ldr_lastname`, `ldr_phone`, `ldr_email`, `ldr_gender`, `ldr_dob`, `ldr_house`, `ldr_nid`, `ldr_profile`, `ldr_village_code`, `ldr_isibo_code`, `ldr_used_id`, `ldr_category_code`, `ldr_insurance`) VALUES
(3, 'Kamana', 'Emmanuel', '0785656565', 'kamana@gmail.com', 'male', '1996-01-01', '127', '115452565', '', 1, 1, 1, 1, 1),
(5, 'audace', 'sangano', '0783503691', 'audasang2018@gmail.com', 'male', '2021-12-01', '124', '119985658', NULL, 1, 1, 8, 1, 2),
(7, 'audace', 'sangano', '0783503691', 'audasang2018@gmail.com', 'male', '1982-06-30', '261', '2345678', NULL, 1, 1, 10, 1, 2),
(9, 'iradukunda', 'emmanuel', '0783503691', 'igihozo1@gmail.com', 'female', '2021-10-04', '', '2345678', NULL, 1, 1, 13, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ums_market`
--

CREATE TABLE `ums_market` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_village_id` int(15) NOT NULL,
  `m_contact` varchar(100) NOT NULL,
  `m_file` varchar(100) NOT NULL,
  `m_description` varchar(255) NOT NULL,
  `m_category` varchar(100) NOT NULL,
  `m_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `mbr_leader_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_members`
--

INSERT INTO `ums_members` (`mbr_member_id`, `mbr_firstname`, `mbr_lastname`, `mbr_phone`, `mbr_nid`, `mbr_email`, `mbr_dob`, `mbr_relationship`, `mbr_gender`, `mbr_leader_id`) VALUES
(1, 'Rukundo', 'Love', '0785654852', 1515151515, 'rukundo@gmail.com', '2011-12-01', 'UMWANA', 'male', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ums_parent_evening`
--

CREATE TABLE `ums_parent_evening` (
  `pare_id` int(11) NOT NULL,
  `pare_participant` longtext NOT NULL,
  `pare_italiki` date NOT NULL,
  `pare_title` varchar(100) NOT NULL,
  `pare_descrption` varchar(250) NOT NULL,
  `pare_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_pharmacy`
--

CREATE TABLE `ums_pharmacy` (
  `ph_id` int(11) NOT NULL,
  `ph_name` varchar(100) NOT NULL,
  `ph_village_id` int(15) NOT NULL,
  `ph_contact` varchar(100) NOT NULL,
  `ph_file` varchar(100) NOT NULL,
  `ph_description` varchar(255) NOT NULL,
  `ph_category` varchar(100) NOT NULL,
  `ph_owner` varchar(255) NOT NULL
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
(2, 'Family'),
(3, 'Isibo');

-- --------------------------------------------------------

--
-- Table structure for table `ums_saloon`
--

CREATE TABLE `ums_saloon` (
  `salo_id` int(11) NOT NULL,
  `salo_name` varchar(100) NOT NULL,
  `salo_village_id` int(15) NOT NULL,
  `salo_contact` varchar(100) NOT NULL,
  `salo_file` varchar(100) NOT NULL,
  `salo_description` varchar(255) NOT NULL,
  `salo_category` varchar(100) NOT NULL,
  `salo_owner` varchar(255) NOT NULL
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
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(100) NOT NULL,
  `sup_village_id` int(15) NOT NULL,
  `sup_contact` varchar(100) NOT NULL,
  `sup_file` varchar(100) NOT NULL,
  `sup_description` varchar(255) NOT NULL,
  `sup_category` varchar(100) NOT NULL,
  `sup_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_transactions`
--

CREATE TABLE `ums_transactions` (
  `trs_id` varchar(25) NOT NULL,
  `trs_leader_id` int(11) NOT NULL,
  `trs_title` varchar(20) NOT NULL,
  `trs_months_count` int(11) NOT NULL,
  `trs_amount` double NOT NULL,
  `trs_date` varchar(25) NOT NULL,
  `trs_status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_transactions`
--

INSERT INTO `ums_transactions` (`trs_id`, `trs_leader_id`, `trs_title`, `trs_months_count`, `trs_amount`, `trs_date`, `trs_status`) VALUES
('TRX1641221771', 5, 'Umutekano', 2, 4000, '1641221771', 'Pending'),
('TRX1641222799', 5, 'Isuku', 2, 6000, '1641222799', 'Pending'),
('TRX1641223192', 5, 'Umutekano', 1, 2000, '1641223192', 'Pending'),
('TRX1641223289', 5, 'Ejo Heza', 2, 2000, '1641223289', 'Pending'),
('TRX1641223430', 5, 'Igiceri', 3, 1500, '1641223430', 'Pending'),
('TRX1641236759', 5, 'Umutekano', 2, 40000, '1641236759', 'failed'),
('TRX1641237535', 5, 'Umutekano', 3, 60000, '1641237535', 'failed'),
('TRX1641238641', 5, 'Umutekano', 3, 60000, '1641238641', 'failed'),
('TRX1641239016', 5, 'Umutekano', 2, 40000, '1641239016', 'failed'),
('TRX1641240354', 5, 'Isuku', 3, 90000, '1641240354', 'failed'),
('TRX1641241483', 5, 'Ejo Heza', 4, 40000, '1641241483', 'failed'),
('TRX1641241575', 5, 'Igiceri', 6, 30000, '1641241575', 'failed');

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

-- --------------------------------------------------------

--
-- Table structure for table `ums_umuganda`
--

CREATE TABLE `ums_umuganda` (
  `umg_id` int(11) NOT NULL,
  `umg_title` varchar(100) NOT NULL,
  `umg_description` varchar(255) NOT NULL,
  `umg_date` varchar(20) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `ums_umugereka`
--

CREATE TABLE `ums_umugereka` (
  `um_id` int(11) NOT NULL,
  `um_firstname` varchar(20) NOT NULL,
  `um_lastname` varchar(20) NOT NULL,
  `um_phone` varchar(20) NOT NULL,
  `um_email` varchar(50) NOT NULL,
  `um_gender` varchar(10) NOT NULL,
  `um_dob` date NOT NULL,
  `um_nid` int(16) NOT NULL,
  `um_profile` varchar(100) NOT NULL,
  `um_village_code` int(11) NOT NULL,
  `um_used_id` int(11) NOT NULL,
  `um_category_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ums_umutekano`
--

CREATE TABLE `ums_umutekano` (
  `umt_id` int(11) NOT NULL,
  `umt_leader_id` int(11) NOT NULL,
  `umt_transaction_id` varchar(25) NOT NULL,
  `umt_year` int(11) NOT NULL,
  `umt_pay_month` int(11) NOT NULL,
  `umt_months` text NOT NULL,
  `umt_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_umutekano`
--

INSERT INTO `ums_umutekano` (`umt_id`, `umt_leader_id`, `umt_transaction_id`, `umt_year`, `umt_pay_month`, `umt_months`, `umt_date`) VALUES
(3, 5, 'TRX1641238641', 2022, 3, 'January,February,March', '1641238726'),
(4, 5, 'TRX1641239016', 2022, 5, 'April,May', '1641239061');

-- --------------------------------------------------------

--
-- Table structure for table `ums_users`
--

CREATE TABLE `ums_users` (
  `usr_id` int(11) NOT NULL,
  `usr_username` varchar(100) NOT NULL,
  `usr_password` varchar(100) NOT NULL,
  `usr_roles_id` int(11) NOT NULL,
  `usr_isibo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ums_users`
--

INSERT INTO `ums_users` (`usr_id`, `usr_username`, `usr_password`, `usr_roles_id`, `usr_isibo`) VALUES
(1, 'user1', '123', 1, 1),
(8, 'sano', '123', 2, 1),
(9, 'user3', 'qwerty', 2, 1),
(10, 'sano', '123', 2, 1),
(11, 'huska', 'huska', 2, 1),
(12, 'huska', '123', 3, 1),
(13, 'user7', '123', 2, 1);

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
  ADD PRIMARY KEY (`abtw_id`),
  ADD KEY `member_id` (`abtw_member_id`);

--
-- Indexes for table `ums_admin`
--
ALTER TABLE `ums_admin`
  ADD PRIMARY KEY (`adm_id`),
  ADD KEY `location_id` (`adm_village_code`),
  ADD KEY `user_id` (`adm_user_id`),
  ADD KEY `village_code` (`adm_village_code`);

--
-- Indexes for table `ums_amaduka`
--
ALTER TABLE `ums_amaduka`
  ADD PRIMARY KEY (`duka_id`),
  ADD KEY `village_id` (`duka_village_id`);

--
-- Indexes for table `ums_amashuri`
--
ALTER TABLE `ums_amashuri`
  ADD PRIMARY KEY (`scl_id`),
  ADD KEY `village_id` (`scl_village_id`);

--
-- Indexes for table `ums_amasoko`
--
ALTER TABLE `ums_amasoko`
  ADD PRIMARY KEY (`soko_id`),
  ADD KEY `village_id` (`soko_village_id`);

--
-- Indexes for table `ums_amatangazo`
--
ALTER TABLE `ums_amatangazo`
  ADD PRIMARY KEY (`ama_id`),
  ADD KEY `ama_isibo` (`ama_isibo`),
  ADD KEY `ama_created_by` (`ama_created_by`);

--
-- Indexes for table `ums_amavuriro`
--
ALTER TABLE `ums_amavuriro`
  ADD PRIMARY KEY (`vuriro_id`),
  ADD KEY `village_id` (`vuriro_village_id`);

--
-- Indexes for table `ums_announcement`
--
ALTER TABLE `ums_announcement`
  ADD PRIMARY KEY (`ann_id`),
  ADD KEY `ann_leader_id` (`ann_leader_id`);

--
-- Indexes for table `ums_banks`
--
ALTER TABLE `ums_banks`
  ADD PRIMARY KEY (`bank_id`),
  ADD KEY `village_id` (`bank_village_id`);

--
-- Indexes for table `ums_bar_restaurent`
--
ALTER TABLE `ums_bar_restaurent`
  ADD PRIMARY KEY (`bar_id`),
  ADD KEY `village_id` (`bar_village_id`);

--
-- Indexes for table `ums_category`
--
ALTER TABLE `ums_category`
  ADD PRIMARY KEY (`cat_cotegory_code`),
  ADD KEY `category_name` (`cat_category_name`);

--
-- Indexes for table `ums_cell`
--
ALTER TABLE `ums_cell`
  ADD PRIMARY KEY (`c_cell_code`),
  ADD KEY `sector_code` (`c_sector_code`);

--
-- Indexes for table `ums_chat`
--
ALTER TABLE `ums_chat`
  ADD KEY `admin_sender` (`cht_admin_sender`),
  ADD KEY `admin_reciever` (`cht_admin_reciever`),
  ADD KEY `leader_sender` (`cht_leader_sender`),
  ADD KEY `leader_reciever` (`cht_leader_reciever`);

--
-- Indexes for table `ums_chat_group`
--
ALTER TABLE `ums_chat_group`
  ADD PRIMARY KEY (`grp_id`),
  ADD KEY `admin_participant` (`grp_admin_participant`),
  ADD KEY `leader_participant` (`grp_leader_participant`);

--
-- Indexes for table `ums_church`
--
ALTER TABLE `ums_church`
  ADD PRIMARY KEY (`ch_id`),
  ADD KEY `village_id` (`ch_village_id`);

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
  ADD PRIMARY KEY (`cm_coin_id`),
  ADD KEY `member_id` (`cm_member_id`);

--
-- Indexes for table `ums_comment`
--
ALTER TABLE `ums_comment`
  ADD PRIMARY KEY (`co_id`),
  ADD KEY `idea_id` (`co_idea_id`);

--
-- Indexes for table `ums_cooperative`
--
ALTER TABLE `ums_cooperative`
  ADD PRIMARY KEY (`co_id`),
  ADD KEY `village_id` (`co_village_id`);

--
-- Indexes for table `ums_district`
--
ALTER TABLE `ums_district`
  ADD PRIMARY KEY (`d_code`),
  ADD KEY `province_code` (`d_province_code`);

--
-- Indexes for table `ums_ejoheza`
--
ALTER TABLE `ums_ejoheza`
  ADD PRIMARY KEY (`ejo_id`),
  ADD KEY `leader_id` (`ejo_leader_id`),
  ADD KEY `ejo_transaction_id` (`ejo_transaction_id`);

--
-- Indexes for table `ums_guests`
--
ALTER TABLE `ums_guests`
  ADD PRIMARY KEY (`gue_id`),
  ADD KEY `gue_ldr_id` (`gue_ldr_id`);

--
-- Indexes for table `ums_hotel`
--
ALTER TABLE `ums_hotel`
  ADD PRIMARY KEY (`ho_id`),
  ADD KEY `village_id` (`ho_village_id`);

--
-- Indexes for table `ums_house`
--
ALTER TABLE `ums_house`
  ADD PRIMARY KEY (`h_number`),
  ADD KEY `isibo_code` (`h_isibo_code`);

--
-- Indexes for table `ums_ibarura`
--
ALTER TABLE `ums_ibarura`
  ADD PRIMARY KEY (`iba_id`),
  ADD KEY `leader_id` (`iba_leader_id`);

--
-- Indexes for table `ums_ibyemezo`
--
ALTER TABLE `ums_ibyemezo`
  ADD PRIMARY KEY (`ib_id`),
  ADD KEY `member_id` (`ib_member_id`);

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
  ADD KEY `leader_id` (`igiceri_leader_id`),
  ADD KEY `igiceri_transaction_id` (`igiceri_transaction_id`);

--
-- Indexes for table `ums_imihigo`
--
ALTER TABLE `ums_imihigo`
  ADD PRIMARY KEY (`imihigo_code`),
  ADD KEY `leader_id` (`imihigo_leader_id`);

--
-- Indexes for table `ums_inganda`
--
ALTER TABLE `ums_inganda`
  ADD PRIMARY KEY (`in_id`),
  ADD KEY `village_id` (`in_village_id`);

--
-- Indexes for table `ums_isibo`
--
ALTER TABLE `ums_isibo`
  ADD PRIMARY KEY (`isibo_code`),
  ADD KEY `village_code` (`isibo_village_code`);

--
-- Indexes for table `ums_isuku`
--
ALTER TABLE `ums_isuku`
  ADD PRIMARY KEY (`isuku_id`),
  ADD KEY `leader_id` (`isuku_leader_id`),
  ADD KEY `isuku_transaction_id` (`isuku_transaction_id`);

--
-- Indexes for table `ums_leaders`
--
ALTER TABLE `ums_leaders`
  ADD PRIMARY KEY (`ldr_leader_id`),
  ADD KEY `village_id` (`ldr_village_code`),
  ADD KEY `used_id` (`ldr_used_id`),
  ADD KEY `village_code` (`ldr_village_code`),
  ADD KEY `category_code` (`ldr_category_code`),
  ADD KEY `ldr_insurance` (`ldr_insurance`),
  ADD KEY `ldr_isibo_code` (`ldr_isibo_code`);

--
-- Indexes for table `ums_market`
--
ALTER TABLE `ums_market`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `village_id` (`m_village_id`);

--
-- Indexes for table `ums_members`
--
ALTER TABLE `ums_members`
  ADD PRIMARY KEY (`mbr_member_id`),
  ADD KEY `leader_id` (`mbr_leader_id`);

--
-- Indexes for table `ums_parent_evening`
--
ALTER TABLE `ums_parent_evening`
  ADD PRIMARY KEY (`pare_id`);

--
-- Indexes for table `ums_pharmacy`
--
ALTER TABLE `ums_pharmacy`
  ADD PRIMARY KEY (`ph_id`),
  ADD KEY `village_id` (`ph_village_id`);

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
  ADD PRIMARY KEY (`salo_id`),
  ADD KEY `village_id` (`salo_village_id`);

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
  ADD PRIMARY KEY (`sup_id`),
  ADD KEY `village_id` (`sup_village_id`);

--
-- Indexes for table `ums_transactions`
--
ALTER TABLE `ums_transactions`
  ADD PRIMARY KEY (`trs_id`),
  ADD KEY `leader_id` (`trs_leader_id`);

--
-- Indexes for table `ums_ubwishingizi`
--
ALTER TABLE `ums_ubwishingizi`
  ADD PRIMARY KEY (`ubw_id`);

--
-- Indexes for table `ums_umuganda`
--
ALTER TABLE `ums_umuganda`
  ADD PRIMARY KEY (`umg_id`),
  ADD KEY `umg_village` (`umg_village`);

--
-- Indexes for table `ums_umugereka`
--
ALTER TABLE `ums_umugereka`
  ADD PRIMARY KEY (`um_id`),
  ADD KEY `village_id` (`um_village_code`),
  ADD KEY `used_id` (`um_used_id`),
  ADD KEY `village_code` (`um_village_code`),
  ADD KEY `category_code` (`um_category_code`);

--
-- Indexes for table `ums_umutekano`
--
ALTER TABLE `ums_umutekano`
  ADD PRIMARY KEY (`umt_id`),
  ADD KEY `leader_id` (`umt_leader_id`),
  ADD KEY `umt_transaction_id` (`umt_transaction_id`);

--
-- Indexes for table `ums_users`
--
ALTER TABLE `ums_users`
  ADD PRIMARY KEY (`usr_id`),
  ADD KEY `roles_id` (`usr_roles_id`),
  ADD KEY `usr_isibo` (`usr_isibo`);

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
  MODIFY `abtw_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_admin`
--
ALTER TABLE `ums_admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ums_amaduka`
--
ALTER TABLE `ums_amaduka`
  MODIFY `duka_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_amashuri`
--
ALTER TABLE `ums_amashuri`
  MODIFY `scl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_amasoko`
--
ALTER TABLE `ums_amasoko`
  MODIFY `soko_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_amatangazo`
--
ALTER TABLE `ums_amatangazo`
  MODIFY `ama_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ums_amavuriro`
--
ALTER TABLE `ums_amavuriro`
  MODIFY `vuriro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_announcement`
--
ALTER TABLE `ums_announcement`
  MODIFY `ann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ums_banks`
--
ALTER TABLE `ums_banks`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_bar_restaurent`
--
ALTER TABLE `ums_bar_restaurent`
  MODIFY `bar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_chat_group`
--
ALTER TABLE `ums_chat_group`
  MODIFY `grp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_church`
--
ALTER TABLE `ums_church`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_coin`
--
ALTER TABLE `ums_coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_comment`
--
ALTER TABLE `ums_comment`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_cooperative`
--
ALTER TABLE `ums_cooperative`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_ejoheza`
--
ALTER TABLE `ums_ejoheza`
  MODIFY `ejo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ums_guests`
--
ALTER TABLE `ums_guests`
  MODIFY `gue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ums_hotel`
--
ALTER TABLE `ums_hotel`
  MODIFY `ho_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_ibarura`
--
ALTER TABLE `ums_ibarura`
  MODIFY `iba_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_ibyemezo`
--
ALTER TABLE `ums_ibyemezo`
  MODIFY `ib_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_idea`
--
ALTER TABLE `ums_idea`
  MODIFY `idea_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_igiceri`
--
ALTER TABLE `ums_igiceri`
  MODIFY `igiceri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ums_imihigo`
--
ALTER TABLE `ums_imihigo`
  MODIFY `imihigo_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_inganda`
--
ALTER TABLE `ums_inganda`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_isuku`
--
ALTER TABLE `ums_isuku`
  MODIFY `isuku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ums_leaders`
--
ALTER TABLE `ums_leaders`
  MODIFY `ldr_leader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ums_market`
--
ALTER TABLE `ums_market`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_members`
--
ALTER TABLE `ums_members`
  MODIFY `mbr_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ums_parent_evening`
--
ALTER TABLE `ums_parent_evening`
  MODIFY `pare_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_pharmacy`
--
ALTER TABLE `ums_pharmacy`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_roles`
--
ALTER TABLE `ums_roles`
  MODIFY `roles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ums_saloon`
--
ALTER TABLE `ums_saloon`
  MODIFY `salo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_supermarket`
--
ALTER TABLE `ums_supermarket`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_ubwishingizi`
--
ALTER TABLE `ums_ubwishingizi`
  MODIFY `ubw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ums_umuganda`
--
ALTER TABLE `ums_umuganda`
  MODIFY `umg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ums_umugereka`
--
ALTER TABLE `ums_umugereka`
  MODIFY `um_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ums_umutekano`
--
ALTER TABLE `ums_umutekano`
  MODIFY `umt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ums_users`
--
ALTER TABLE `ums_users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ums_abatwite`
--
ALTER TABLE `ums_abatwite`
  ADD CONSTRAINT `ums_abatwite_ibfk_1` FOREIGN KEY (`abtw_member_id`) REFERENCES `ums_members` (`mbr_member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_admin`
--
ALTER TABLE `ums_admin`
  ADD CONSTRAINT `ums_admin_ibfk_1` FOREIGN KEY (`adm_user_id`) REFERENCES `ums_users` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_admin_ibfk_2` FOREIGN KEY (`adm_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_amaduka`
--
ALTER TABLE `ums_amaduka`
  ADD CONSTRAINT `ums_amaduka_ibfk_1` FOREIGN KEY (`duka_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_amashuri`
--
ALTER TABLE `ums_amashuri`
  ADD CONSTRAINT `ums_amashuri_ibfk_1` FOREIGN KEY (`scl_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_amasoko`
--
ALTER TABLE `ums_amasoko`
  ADD CONSTRAINT `ums_amasoko_ibfk_1` FOREIGN KEY (`soko_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_amatangazo`
--
ALTER TABLE `ums_amatangazo`
  ADD CONSTRAINT `ums_amatangazo_ibfk_1` FOREIGN KEY (`ama_isibo`) REFERENCES `ums_isibo` (`isibo_code`),
  ADD CONSTRAINT `ums_amatangazo_ibfk_2` FOREIGN KEY (`ama_created_by`) REFERENCES `ums_users` (`usr_id`);

--
-- Constraints for table `ums_amavuriro`
--
ALTER TABLE `ums_amavuriro`
  ADD CONSTRAINT `ums_amavuriro_ibfk_1` FOREIGN KEY (`vuriro_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_announcement`
--
ALTER TABLE `ums_announcement`
  ADD CONSTRAINT `ums_announcement_ibfk_1` FOREIGN KEY (`ann_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_banks`
--
ALTER TABLE `ums_banks`
  ADD CONSTRAINT `ums_banks_ibfk_1` FOREIGN KEY (`bank_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_bar_restaurent`
--
ALTER TABLE `ums_bar_restaurent`
  ADD CONSTRAINT `ums_bar_restaurent_ibfk_1` FOREIGN KEY (`bar_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_cell`
--
ALTER TABLE `ums_cell`
  ADD CONSTRAINT `ums_cell_ibfk_1` FOREIGN KEY (`c_sector_code`) REFERENCES `ums_sector` (`sector_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_chat`
--
ALTER TABLE `ums_chat`
  ADD CONSTRAINT `ums_chat_ibfk_1` FOREIGN KEY (`cht_leader_sender`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_chat_ibfk_2` FOREIGN KEY (`cht_leader_reciever`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_chat_ibfk_3` FOREIGN KEY (`cht_admin_sender`) REFERENCES `ums_admin` (`adm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_chat_ibfk_4` FOREIGN KEY (`cht_admin_reciever`) REFERENCES `ums_admin` (`adm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_chat_group`
--
ALTER TABLE `ums_chat_group`
  ADD CONSTRAINT `ums_chat_group_ibfk_1` FOREIGN KEY (`grp_leader_participant`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_church`
--
ALTER TABLE `ums_church`
  ADD CONSTRAINT `ums_church_ibfk_1` FOREIGN KEY (`ch_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_coin`
--
ALTER TABLE `ums_coin`
  ADD CONSTRAINT `ums_coin_ibfk_1` FOREIGN KEY (`coin_id`) REFERENCES `ums_coin_member` (`cm_coin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_coin_member`
--
ALTER TABLE `ums_coin_member`
  ADD CONSTRAINT `ums_coin_member_ibfk_1` FOREIGN KEY (`cm_coin_id`) REFERENCES `ums_members` (`mbr_member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_comment`
--
ALTER TABLE `ums_comment`
  ADD CONSTRAINT `ums_comment_ibfk_1` FOREIGN KEY (`co_idea_id`) REFERENCES `ums_idea` (`idea_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_cooperative`
--
ALTER TABLE `ums_cooperative`
  ADD CONSTRAINT `ums_cooperative_ibfk_1` FOREIGN KEY (`co_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_district`
--
ALTER TABLE `ums_district`
  ADD CONSTRAINT `ums_district_ibfk_1` FOREIGN KEY (`d_province_code`) REFERENCES `ums_province` (`province_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_ejoheza`
--
ALTER TABLE `ums_ejoheza`
  ADD CONSTRAINT `ums_ejoheza_ibfk_1` FOREIGN KEY (`ejo_transaction_id`) REFERENCES `ums_transactions` (`trs_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_ejoheza_ibfk_2` FOREIGN KEY (`ejo_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ums_hotel`
--
ALTER TABLE `ums_hotel`
  ADD CONSTRAINT `ums_hotel_ibfk_1` FOREIGN KEY (`ho_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_house`
--
ALTER TABLE `ums_house`
  ADD CONSTRAINT `ums_house_ibfk_1` FOREIGN KEY (`h_isibo_code`) REFERENCES `ums_isibo` (`isibo_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_ibarura`
--
ALTER TABLE `ums_ibarura`
  ADD CONSTRAINT `ums_ibarura_ibfk_1` FOREIGN KEY (`iba_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_ibyemezo`
--
ALTER TABLE `ums_ibyemezo`
  ADD CONSTRAINT `ums_ibyemezo_ibfk_1` FOREIGN KEY (`ib_member_id`) REFERENCES `ums_members` (`mbr_member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_igiceri`
--
ALTER TABLE `ums_igiceri`
  ADD CONSTRAINT `ums_igiceri_ibfk_1` FOREIGN KEY (`igiceri_transaction_id`) REFERENCES `ums_transactions` (`trs_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_igiceri_ibfk_2` FOREIGN KEY (`igiceri_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ums_imihigo`
--
ALTER TABLE `ums_imihigo`
  ADD CONSTRAINT `ums_imihigo_ibfk_1` FOREIGN KEY (`imihigo_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_inganda`
--
ALTER TABLE `ums_inganda`
  ADD CONSTRAINT `ums_inganda_ibfk_1` FOREIGN KEY (`in_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_isibo`
--
ALTER TABLE `ums_isibo`
  ADD CONSTRAINT `ums_isibo_ibfk_1` FOREIGN KEY (`isibo_village_code`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_isuku`
--
ALTER TABLE `ums_isuku`
  ADD CONSTRAINT `ums_isuku_ibfk_1` FOREIGN KEY (`isuku_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_isuku_ibfk_2` FOREIGN KEY (`isuku_transaction_id`) REFERENCES `ums_transactions` (`trs_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ums_leaders`
--
ALTER TABLE `ums_leaders`
  ADD CONSTRAINT `ums_leaders_ibfk_2` FOREIGN KEY (`ldr_village_code`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_leaders_ibfk_3` FOREIGN KEY (`ldr_category_code`) REFERENCES `ums_category` (`cat_cotegory_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_leaders_ibfk_4` FOREIGN KEY (`ldr_used_id`) REFERENCES `ums_users` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_leaders_ibfk_5` FOREIGN KEY (`ldr_insurance`) REFERENCES `ums_ubwishingizi` (`ubw_id`),
  ADD CONSTRAINT `ums_leaders_ibfk_6` FOREIGN KEY (`ldr_isibo_code`) REFERENCES `ums_isibo` (`isibo_code`) ON UPDATE CASCADE;

--
-- Constraints for table `ums_market`
--
ALTER TABLE `ums_market`
  ADD CONSTRAINT `ums_market_ibfk_1` FOREIGN KEY (`m_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_members`
--
ALTER TABLE `ums_members`
  ADD CONSTRAINT `ums_members_ibfk_1` FOREIGN KEY (`mbr_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_pharmacy`
--
ALTER TABLE `ums_pharmacy`
  ADD CONSTRAINT `ums_pharmacy_ibfk_1` FOREIGN KEY (`ph_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_saloon`
--
ALTER TABLE `ums_saloon`
  ADD CONSTRAINT `ums_saloon_ibfk_1` FOREIGN KEY (`salo_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_sector`
--
ALTER TABLE `ums_sector`
  ADD CONSTRAINT `ums_sector_ibfk_1` FOREIGN KEY (`district_code`) REFERENCES `ums_district` (`d_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_supermarket`
--
ALTER TABLE `ums_supermarket`
  ADD CONSTRAINT `ums_supermarket_ibfk_1` FOREIGN KEY (`sup_village_id`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_transactions`
--
ALTER TABLE `ums_transactions`
  ADD CONSTRAINT `ums_transactions_ibfk_1` FOREIGN KEY (`trs_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ums_umuganda`
--
ALTER TABLE `ums_umuganda`
  ADD CONSTRAINT `ums_umuganda_ibfk_1` FOREIGN KEY (`umg_village`) REFERENCES `ums_village` (`village_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ums_umugereka`
--
ALTER TABLE `ums_umugereka`
  ADD CONSTRAINT `ums_umugereka_ibfk_1` FOREIGN KEY (`um_village_code`) REFERENCES `ums_village` (`village_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_umugereka_ibfk_2` FOREIGN KEY (`um_used_id`) REFERENCES `ums_users` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_umugereka_ibfk_3` FOREIGN KEY (`um_category_code`) REFERENCES `ums_category` (`cat_cotegory_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ums_umutekano`
--
ALTER TABLE `ums_umutekano`
  ADD CONSTRAINT `ums_umutekano_ibfk_1` FOREIGN KEY (`umt_leader_id`) REFERENCES `ums_leaders` (`ldr_leader_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_umutekano_ibfk_2` FOREIGN KEY (`umt_transaction_id`) REFERENCES `ums_transactions` (`trs_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ums_users`
--
ALTER TABLE `ums_users`
  ADD CONSTRAINT `ums_users_ibfk_1` FOREIGN KEY (`usr_roles_id`) REFERENCES `ums_roles` (`roles_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ums_users_ibfk_2` FOREIGN KEY (`usr_isibo`) REFERENCES `ums_isibo` (`isibo_code`);

--
-- Constraints for table `ums_village`
--
ALTER TABLE `ums_village`
  ADD CONSTRAINT `ums_village_ibfk_1` FOREIGN KEY (`cell_code`) REFERENCES `ums_cell` (`c_cell_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
