-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 09, 2021 at 11:38 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE latin1_bin NOT NULL,
  `lastname` varchar(255) COLLATE latin1_bin NOT NULL,
  `username` varchar(255) COLLATE latin1_bin NOT NULL,
  `password` varchar(255) COLLATE latin1_bin NOT NULL,
  `email` varchar(255) COLLATE latin1_bin NOT NULL,
  `user_role_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `user_role_id`) VALUES
(26, 'Sasha', 'Srinivas', 'HarryPotter', '$2y$10$WFb9U9EfwvWZVQfZ5uRtuOnRPWmMjdivyOmS4CPz0e.bvRN8maRQy', 'sashasrinivas@hotmail.com', 1),
(29, 'Sasha', 'Srinivas', 'dsfsd', '$2y$10$coJE4cp7fVkEOC.pXR6EYuSCF5KBFvjPmX/VFAgRXwh3SdNMvIk1e', 'sashasrinivas@hotmail.com', 1),
(31, 'Sasha', 'Srinivas', '2014', '$2y$10$tL/7Vm6dUXL57Rq4vdNrKu3A8g90H13SrbefDzqJ1wySMkqafa3WS', 'sashasrinivas@hotmail.com', 1),
(32, 'Sasha', 'Srinivas', 'hellos', '$2y$10$gMYuLXel0Cdd4eJBM81Y6uIPp1xFQCLgxT8Vu32a83922LHN2KwGi', 'sashasrinivas@hotmail.com', 1),
(33, 'Sasha', 'Srinivas', 'samsss', '$2y$10$ILFkQjqzfKYwBvEXtX5.3uRWfXlaVKMI5tTuUC7QoHhESe5B7WeBK', 'sashasrinivas@hotmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
