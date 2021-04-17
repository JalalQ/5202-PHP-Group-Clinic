-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 01:49 AM
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
  `personal` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `first_name`, `last_name`, `cpso_reg`, `email`, `education`, `expertise`, `biography`, `personal`) VALUES
(1, 'Johnathan ', 'Deo', 38499, 'johnathandeon@moltran.com', 'BSc (McMaster), MSc (Toronto)', 'Injuries', 'Dr. Deo is the medical office specializing in delivering high-quality urgent care medicine. He’s a board-certified medical doctor, specializing in family practise. Dr. Deo was born in Nova Scotia and raised in British Columbia, CA. He graduated from McMaster University, and attended medical school at the University of California, Irvine.', 'Dr Deo is married with 2 kids, and live in Hamilton. Dr Deo enjoys gardening and hiking.'),
(3, 'Jason', 'Kim', 38938, 'jason@geraldton.com', 'BSc (Waterloo)', 'Sport Injuries, Chiropractor', 'Dr Jason is an integrative health care practitioner who values patient centered, evidence based care that emphasizes whole body health. She strongly believes in working together with her patients to optimize their overall health and well-being, all of which is achieved through healthy communication.', 'In her spare time, Dr. Jason can be found enjoying time with her dog Ellie, camping, playing sports, or going on hikes.'),
(4, 'Margaret ', 'Wilding', 78765, 'margaret@gmail.com', ' Bachelor of Science in Physical Therapy', 'Physiotherapist', 'Margaret is a Physiotherapist registered with The College of Physiotherapists of Ontario and a member of the Canadian Physiotherapy Association in good standing.', 'When not living through pandemics, she plays bass in a band and visits group homes with teenagers. She has recently discovered and recommends camping.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
