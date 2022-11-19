-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 07:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_tbl`
--

CREATE TABLE `banner_tbl` (
  `upper_text` text NOT NULL,
  `name_text` text NOT NULL,
  `lower_text` text NOT NULL,
  `designation` text NOT NULL,
  `btn_text` varchar(255) NOT NULL,
  `light_mode_bg` text NOT NULL,
  `dark_mode_bg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_tbl`
--

INSERT INTO `banner_tbl` (`upper_text`, `name_text`, `lower_text`, `designation`, `btn_text`, `light_mode_bg`, `dark_mode_bg`) VALUES
('Hey, my name is', 'M. Usman Amjad', 'And I am a', 'full stack developer, graphics designer', 'hire me', 'assets/imgs/LightModeBanner.jpg\r\n', 'assets/imgs/DarkModeBanner.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `nav_tbl`
--

CREATE TABLE `nav_tbl` (
  `links_text` varchar(255) NOT NULL,
  `nav_links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav_tbl`
--

INSERT INTO `nav_tbl` (`links_text`, `nav_links`) VALUES
('home', '#home'),
('about', '#about'),
('services', '#services'),
('skills', '#skills'),
('my projects', '#projects'),
('contact', '#contact');

-- --------------------------------------------------------

--
-- Table structure for table `site_logo`
--

CREATE TABLE `site_logo` (
  `logo_src` text NOT NULL,
  `site_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_logo`
--

INSERT INTO `site_logo` (`logo_src`, `site_url`) VALUES
('Kashmiri.Dev', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
('6369e91c45cf5', 'Usman Kashmiri', 'usmankashmiri@kashmiri.dev', 'a8b24d37358e27f52c47f61f8d55458aa348364f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
