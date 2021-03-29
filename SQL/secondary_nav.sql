-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 06:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `secondary_nav`
--

CREATE TABLE `secondary_nav` (
  `secondary_nav_id` int(20) UNSIGNED NOT NULL,
  `nav_word` varchar(255) COLLATE latin1_bin NOT NULL,
  `secondary_page_id` int(20) UNSIGNED NOT NULL,
  `primary_page_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `secondary_nav`
--
ALTER TABLE `secondary_nav`
  ADD PRIMARY KEY (`secondary_nav_id`),
  ADD KEY `secondary_page_id` (`secondary_page_id`),
  ADD KEY `primary_page_id` (`primary_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `secondary_nav`
--
ALTER TABLE `secondary_nav`
  MODIFY `secondary_nav_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
