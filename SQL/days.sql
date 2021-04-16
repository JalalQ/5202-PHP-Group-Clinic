-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 02:38 AM
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
-- Database: `qc_health_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `date`) VALUES
(1, '2021-05-01'),
(2, '2021-05-02'),
(3, '2021-05-03'),
(4, '2021-05-04'),
(5, '2021-05-05'),
(6, '2021-05-06'),
(7, '2021-05-07'),
(8, '2021-05-08'),
(9, '2021-05-10'),
(10, '2021-05-11'),
(11, '2021-05-12'),
(12, '2021-05-13'),
(13, '2021-05-14'),
(14, '2021-05-15'),
(15, '2021-05-16'),
(16, '2021-05-17'),
(17, '2021-05-18'),
(18, '2021-05-18'),
(19, '2021-05-19'),
(20, '2021-05-20'),
(21, '2021-05-21'),
(22, '2021-05-22'),
(23, '2021-05-23'),
(24, '2021-05-24'),
(25, '2021-05-25'),
(26, '2021-05-26'),
(27, '2021-05-27'),
(28, '2021-05-29'),
(29, '2021-05-29'),
(30, '2021-05-30'),
(31, '2021-05-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
