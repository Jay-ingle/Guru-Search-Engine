-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 07:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guru_searchdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_website`
--

CREATE TABLE `add_website` (
  `website_title` varchar(300) NOT NULL,
  `website_links` varchar(300) NOT NULL,
  `website_keywords` varchar(300) NOT NULL,
  `website_description` varchar(300) NOT NULL,
  `website_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_website`
--

INSERT INTO `add_website` (`website_title`, `website_links`, `website_keywords`, `website_description`, `website_image`) VALUES
('the best deals on all brands', 'amazon.in', ' shopping website', 'best shopping website', 'website_images/noodles2.jpg'),
('google', 'google.com', 'google , bad search engin', 'search enin', 'website_images/dosa3.jpg'),
('yahoo', 'yahoo.com', 'yahoo', 'search engin of microsoft', 'website_images/gurulogo.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
