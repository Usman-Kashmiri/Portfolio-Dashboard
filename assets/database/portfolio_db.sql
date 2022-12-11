-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 06:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `about_sec_tbl`
--

CREATE TABLE `about_sec_tbl` (
  `about_upper_text` text NOT NULL,
  `about_description` text NOT NULL,
  `cv_path` text NOT NULL,
  `about_lightMode_img_path` text NOT NULL,
  `about_darkMode_img_path` text NOT NULL,
  `about_lightMode_img_name` text NOT NULL,
  `about_darkMode_img_name` text NOT NULL,
  `cv_file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_sec_tbl`
--

INSERT INTO `about_sec_tbl` (`about_upper_text`, `about_description`, `cv_path`, `about_lightMode_img_path`, `about_darkMode_img_path`, `about_lightMode_img_name`, `about_darkMode_img_name`, `cv_file_name`) VALUES
('I am Usman and I\'m a', 'I am a passionate Web developer, looking for an opportunity in the field of web development. Below in work section you\'ll find some examples of my work. I am really dedicated to my work. I know editing stuff & Ms-Office automation as well.', 'assets/cv/My CV.docx', 'assets/imgs/LightModeimg.png', 'assets/imgs/DarkModeimg.png', 'LightModeimg.png', 'DarkModeimg.png', 'My CV.docx');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_dp_name` text NOT NULL,
  `user_dp_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`user_id`, `user_name`, `user_email`, `user_password`, `user_dp_name`, `user_dp_path`) VALUES
('6369e91c45cf5', 'Usman Kashmiri', 'usmankashmiri@kashmiri.dev', 'a8b24d37358e27f52c47f61f8d55458aa348364f', 'DarkModeimg.png', 'assets/imgs/DarkModeimg.png');

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
-- Table structure for table `contact_detail_tbl`
--

CREATE TABLE `contact_detail_tbl` (
  `detail_id` int(11) NOT NULL,
  `detail_icon` text NOT NULL,
  `detail_title` text NOT NULL,
  `detail_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_detail_tbl`
--

INSERT INTO `contact_detail_tbl` (`detail_id`, `detail_icon`, `detail_title`, `detail_info`) VALUES
(1, 'fas fa-user', 'Name', 'M. Usman Amjad'),
(2, 'fas fa-map-marker-alt', 'Address', 'Karachi, Pakistan'),
(3, 'fas fa-envelope', 'Email', 'usmankashmiri378@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_sec_tbl`
--

CREATE TABLE `contact_sec_tbl` (
  `details_heading` text NOT NULL,
  `details_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_sec_tbl`
--

INSERT INTO `contact_sec_tbl` (`details_heading`, `details_desc`) VALUES
('My Details:', 'I am a freshie, I don\'t have a working experience. I am a student; I\'ve passed my matriculation with A grade in 2017 from Sindh Text Board. I\'ve studied Intermediate from Islamia Sci. College, Karachi. And currently doing software engineering diploma from Aptech Computer Learning Institute.');

-- --------------------------------------------------------

--
-- Table structure for table `footer_tbl`
--

CREATE TABLE `footer_tbl` (
  `footer_text` text NOT NULL,
  `span_text` text NOT NULL,
  `rights_starting_year` text NOT NULL,
  `rights_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_tbl`
--

INSERT INTO `footer_tbl` (`footer_text`, `span_text`, `rights_starting_year`, `rights_text`) VALUES
('Designed & Developed By', 'Usman Kashmiri', '2021', 'All rights reserved.');

-- --------------------------------------------------------

--
-- Table structure for table `mail_tbl`
--

CREATE TABLE `mail_tbl` (
  `mail_id` int(11) NOT NULL,
  `email_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail_tbl`
--

INSERT INTO `mail_tbl` (`mail_id`, `email_address`) VALUES
(378, 'usmankashmiri378@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nav_tbl`
--

CREATE TABLE `nav_tbl` (
  `nav_id` int(11) NOT NULL,
  `links_text` varchar(255) NOT NULL,
  `nav_links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav_tbl`
--

INSERT INTO `nav_tbl` (`nav_id`, `links_text`, `nav_links`) VALUES
(1, 'home', '#home'),
(2, 'about', '#about'),
(3, 'services', '#services'),
(4, 'skills', '#skills'),
(5, 'my projects', '#projects'),
(6, 'contact', '#contact');

-- --------------------------------------------------------

--
-- Table structure for table `section_headings_tbl`
--

CREATE TABLE `section_headings_tbl` (
  `section_id` int(11) NOT NULL,
  `section_heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_headings_tbl`
--

INSERT INTO `section_headings_tbl` (`section_id`, `section_heading`) VALUES
(1, 'My Introduction'),
(2, 'About Myself'),
(3, 'My Services'),
(4, 'My Creative Skills'),
(5, 'Best of My Work'),
(6, 'My Contact');

-- --------------------------------------------------------

--
-- Table structure for table `seo_tbl`
--

CREATE TABLE `seo_tbl` (
  `site_author` text NOT NULL,
  `site_title` text NOT NULL,
  `site_desc` text NOT NULL,
  `seo_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_tbl`
--

INSERT INTO `seo_tbl` (`site_author`, `site_title`, `site_desc`, `seo_keywords`) VALUES
('Usman Kashmiri', 'Kashmiri.Dev', 'I\'m a Web Developer, offering various software development and maintenance services.', 'HTML, CSS, Angular Developer, Website Developer, Web Developer, Frontend Web Developer, Php Developer, Full Stack Developer, Wordpress Developer, Dot Net Developer');

-- --------------------------------------------------------

--
-- Table structure for table `services_sec_tbl`
--

CREATE TABLE `services_sec_tbl` (
  `service_id` int(11) NOT NULL,
  `service_icon` text NOT NULL,
  `service_heading` text NOT NULL,
  `service_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_sec_tbl`
--

INSERT INTO `services_sec_tbl` (`service_id`, `service_icon`, `service_heading`, `service_desc`) VALUES
(1, 'fas fa-paint-brush', 'Web Design', 'I can build UI/UX of Web sites.'),
(2, 'fas fa-photo-video', 'Photo/Video Editing', 'I can edit photos & videos.'),
(3, 'fas fa-file', 'MS-Office', 'I know Ms-Office automation');

-- --------------------------------------------------------

--
-- Table structure for table `site_logo`
--

CREATE TABLE `site_logo` (
  `favicon_name` text NOT NULL,
  `favicon_path` text NOT NULL,
  `site_logo_name` text NOT NULL,
  `site_logo_src` text NOT NULL,
  `site_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_logo`
--

INSERT INTO `site_logo` (`favicon_name`, `favicon_path`, `site_logo_name`, `site_logo_src`, `site_url`) VALUES
('DarkModeimg.png', 'assets/imgs/DarkModeimg.png', 'Kashmiri.Dev', 'Kashmiri.Dev', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `skills_sec_tbl`
--

CREATE TABLE `skills_sec_tbl` (
  `skills_heading` text NOT NULL,
  `skills_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills_sec_tbl`
--

INSERT INTO `skills_sec_tbl` (`skills_heading`, `skills_desc`) VALUES
('My creative skills:', 'I\'ve learnt Web designing from Aptech Gulshan Center. And I\'m currently working on MS SQL Server, ASP.Net MVC, MySQL, PHP, Wordpress & Search Engine Optimizations (SEO). I\'ve knowledge of HTML/CSS/JavaScript and version controlling using Git. JavaScript libraries, Jquery and Angular 13. Jquery Plugins & JS plugins (such as: GSAP, AOS, WOWJS). I\'ve command over Bootstrap & I can work with latest web frameworks as well (such as: Materialized CSS & Tailwind CSS). I can design responsive websites with custom CSS. I can work with CMS as well (such as: WIX & WordPress). I\'ve written some blogs on WordPress as well. I know MS-Office automation. And I can edit photos & Videos using Adobe Photoshop, Adobe Premiere Pro & I also have basic knowledge of Adobe After Effects.');

-- --------------------------------------------------------

--
-- Table structure for table `skills_tbl`
--

CREATE TABLE `skills_tbl` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(250) NOT NULL,
  `skill_level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills_tbl`
--

INSERT INTO `skills_tbl` (`skill_id`, `skill_name`, `skill_level`) VALUES
(1, 'HTML 5', '95'),
(2, 'CSS 3', '90'),
(3, 'Bootstrap', '90'),
(4, 'JavaScript ES6', '80'),
(5, 'jQuery', '90'),
(6, 'ReactJs 18', '75'),
(7, 'Php 8', '70'),
(8, 'Angular 13', '70');

-- --------------------------------------------------------

--
-- Table structure for table `work_sec_tbl`
--

CREATE TABLE `work_sec_tbl` (
  `img_id` int(11) NOT NULL,
  `img_name` text NOT NULL,
  `img_path` text NOT NULL,
  `site_url` text NOT NULL,
  `img_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_sec_tbl`
--

INSERT INTO `work_sec_tbl` (`img_id`, `img_name`, `img_path`, `site_url`, `img_title`) VALUES
(1, 'img01.jpg', 'assets/imgs/carousel/img01.jpg', 'https://usman-kashmiri.github.io/Blueberry-Accessories/index.html', 'Blueberry Accessories - Home'),
(2, 'img02.jpg', 'assets/imgs/carousel/img02.jpg', 'https://usman-kashmiri.github.io/Blueberry-Accessories/index.html', 'Blueberry Accessories - Products'),
(3, 'img03.jpg', 'assets/imgs/carousel/img03.jpg', 'https://usman-kashmiri.github.io/Blueberry-Accessories/product.html', 'Blueberry Accessories - Product Details'),
(4, 'img 04.JPG', 'assets/imgs/carousel/img 04.JPG', 'https://www.bilawalcoachingcenter.com/', 'bilawal coaching center - Home'),
(5, 'img 05.JPG', 'assets/imgs/carousel/img 05.JPG', 'https://www.bilawalcoachingcenter.com/login.php', 'bilawal coaching center - Login'),
(6, 'img 06.JPG', 'assets/imgs/carousel/img 06.JPG', 'https://www.bilawalcoachingcenter.com/demo.php?demo=13', 'bilawal coaching center - Demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_detail_tbl`
--
ALTER TABLE `contact_detail_tbl`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `mail_tbl`
--
ALTER TABLE `mail_tbl`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `nav_tbl`
--
ALTER TABLE `nav_tbl`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `section_headings_tbl`
--
ALTER TABLE `section_headings_tbl`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `services_sec_tbl`
--
ALTER TABLE `services_sec_tbl`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `skills_tbl`
--
ALTER TABLE `skills_tbl`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `work_sec_tbl`
--
ALTER TABLE `work_sec_tbl`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_detail_tbl`
--
ALTER TABLE `contact_detail_tbl`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nav_tbl`
--
ALTER TABLE `nav_tbl`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section_headings_tbl`
--
ALTER TABLE `section_headings_tbl`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services_sec_tbl`
--
ALTER TABLE `services_sec_tbl`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills_tbl`
--
ALTER TABLE `skills_tbl`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `work_sec_tbl`
--
ALTER TABLE `work_sec_tbl`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
