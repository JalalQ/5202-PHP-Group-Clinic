-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2021 at 08:27 PM
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `questioner_id` int(20) UNSIGNED DEFAULT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `questioner_id`, `question`, `answer`) VALUES
(1, NULL, 'What kind of service do you provide?', 'We offer treatments that help physical rehabilitation, injury prevention, health and fitness. Our services include physiotherapy, occupational therapy, and massage therapy.'),
(2, NULL, 'How do I make an appointment?', 'You can make an appointment by calling us at 705-123-4567 or through our online booking system.'),
(3, NULL, 'Do I need a referral from my doctor?', 'No referral is necessary to receive physiotherapy treatment. However, if you have extended health insurance plans which cover physiotherapy services, the insurance company may require a doctor’s referral to reimburse.'),
(4, NULL, 'What happens if I miss an appointment?', 'No-shows will be charged $40 of a cancellation fee. To avoid this, please let us know 24 hours before your appointment if you need to cancel it.'),
(5, NULL, 'What happens if I cannot keep an appointment?', 'You can cancel without being charged if you contact us 24 hours before your appointment. Otherwise, $40 will be charged. If you wish to change the appointment schedule, you can contact us at 705-123-4567. '),
(6, NULL, 'Will OHIP cover it?', 'Unfortunately, QC/HC does not provide physiotherapy treatment covered by OHIP. However, some clinics in Ontario provide OHIP physiotherapy to patients who are under 18 or over 65 years old, and/or have had stayed overnight in a hospital. For more information, please refer to a clinic that offers OHIP physiotherapy.'),
(7, NULL, 'What is the cost of treatment?', 'The cost of treatment is various depends on the type and duration of treatment. Please feel free to contact us at 705-123-4567 or through a contact form. Our associates are happy to help.'),
(8, NULL, 'What do I need to bring with me?', 'Please bring your extended health insurance card so we may be able to bill directly to your insurer. Also, bring documentation related to your condition to your appointment such as a medical report. If your condition is caused by a work injury, we require information on the case manager’s name, contact details, claim number, and extended health benefits.'),
(9, NULL, 'How should I dress?', 'Loose and comfortable garments such as shorts, yoga pants, tank tops and t-shirts are recommended to make the affected body parts more accessible for treatment. If your hair is long, it may be a good idea to tie it back.'),
(10, NULL, 'How do I change my booking information on my online booking account?', 'You can call us at 705-123-4567. One of our associates will be available to help you.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questioner_id` (`questioner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_ibfk_1` FOREIGN KEY (`questioner_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
