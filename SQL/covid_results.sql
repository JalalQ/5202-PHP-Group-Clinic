-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 05, 2021 at 05:52 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `covid_results`
--

CREATE TABLE `covid_results` (
  `id` int(11) NOT NULL,
  `details` varchar(700) NOT NULL,
  `result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `covid_results`
--

INSERT INTO `covid_results` (`id`, `details`, `result`) VALUES
(1, '<p>\r\n        			<strong>\r\n        			Based on your answers, we recommend that you get tested before coming to our hospital, because you have symptoms or are a \"close contact\" of someone who currently has COVID-19.\r\n        			</strong>\r\n        		</p>\r\n        		Since you have symptoms or have been exposed to COVID-19, you can only be tested at an assessment centre or community lab. Pharmacy tests are only available for those without symptoms or exposure. For more informations the testing locations nearby your neighborhood go on <a href=\"https://covid-19.ontario.ca/assessment-centre-locations?pcd=m9v&s=true\">Ontario testing locations.</a>\r\n        		</p>', 'fail'),
(2, '<p>\r\n        			<strong>\r\n        			Based on your answers, you do not appear to have any symptoms or to be part of an at-risk group.\r\n        			</strong>\r\n        		</p>\r\n        		So, you can come to our hospital for your appointment. To protect your community and the health care system do not forget to wear a face covering or mask and  keep a physical distance from others.\r\n        		</p>', 'success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid_results`
--
ALTER TABLE `covid_results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `result` (`details`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid_results`
--
ALTER TABLE `covid_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
