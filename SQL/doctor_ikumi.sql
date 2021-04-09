-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2021 at 09:01 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `cpso_reg` int(5) NOT NULL COMMENT 'CPSO is a 5-digit number.',
  `email` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `expertise` varchar(256) NOT NULL,
  `biography` varchar(1024) NOT NULL,
  `personal` varchar(1024) NOT NULL,
  `fk_doctor_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `first_name`, `last_name`, `cpso_reg`, `email`, `education`, `expertise`, `biography`, `personal`, `fk_doctor_user_id`) VALUES
(1, 'Johnathan', 'Deo', 38499, 'johnathandeon@moltran.com', 'BSc (McMaster)', 'Injuries', 'Dr. Deo is the medical office specializing in delivering high-quality urgent care medicine. He’s a board-certified medical doctor, specializing in family practise. Dr. Deo was born in Nova Scotia and raised in British Columbia, CA. He graduated from McMaster University, and attended medical school at the University of California, Irvine.', 'Dr Deo is married with 2 kids, and live in Hamilton. Dr Deo enjoys gardening and hiking.', 1),
(3, 'Jason', 'Kim', 38938, 'jason@geraldton.com', 'BSc (Waterloo)', 'Sport Injuries', 'Jason was born in Waterloo', 'He is married.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doctor_user_id` (`fk_doctor_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `fk_doctor_user_id` FOREIGN KEY (`fk_doctor_user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
