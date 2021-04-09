-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2021 at 09:00 PM
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
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `id` int(11) NOT NULL,
  `questioner_id` int(11) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `submitted_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `responder_id` int(11) DEFAULT NULL,
  `responded_date` datetime DEFAULT NULL,
  `reply_message` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`id`, `questioner_id`, `message`, `submitted_date`, `status`, `responder_id`, `responded_date`, `reply_message`) VALUES
(1, 3, 'test', '2021-04-08 11:34:12', 'Responded', 4, '2021-04-09 02:47:02', 'This is test for sending email with php'),
(2, 3, 'test2', '2021-04-08 12:51:27', 'Responded', 4, '2021-04-09 00:46:15', 'reply2'),
(3, 4, 'test3', '2021-04-08 12:54:48', 'Responded', 4, '2021-04-09 02:19:58', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_quetioner_id` (`questioner_id`),
  ADD KEY `fk_responder_id` (`responder_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD CONSTRAINT `fk_quetioner_id` FOREIGN KEY (`questioner_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_responder_id` FOREIGN KEY (`responder_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
