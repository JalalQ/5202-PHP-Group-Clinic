-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 17, 2021 at 04:58 PM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(20) UNSIGNED NOT NULL,
  `doctor_id` int(20) UNSIGNED NOT NULL,
  `patient_id` int(20) NOT NULL,
  `day_id` int(20) NOT NULL,
  `time_slot_id` int(20) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `confirm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `patient_id`, `day_id`, `time_slot_id`, `subject`, `message`, `confirm`) VALUES
(1, 1, 1, 1, 1, 'test', 'TEST', 0),
(2, 1, 38, 9, 2, 'ultrasound', 'ultrasound exam', 0),
(3, 1, 38, 10, 3, 'mri', 'mri exam', 0);

-- --------------------------------------------------------

--
-- Table structure for table `availabilities`
--

CREATE TABLE `availabilities` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `day` char(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availabilities`
--

INSERT INTO `availabilities` (`id`, `doctor_id`, `day`, `start_time`, `end_time`) VALUES
(1, 1, 'Monday', '10:00:00', '16:00:00'),
(2, 1, 'Tuesday', '10:00:00', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `covid_questionnaire_results`
--

CREATE TABLE `covid_questionnaire_results` (
  `id` int(11) NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `covid_result_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

INSERT INTO `doctor` (`id`, `first_name`, `last_name`, `cpso_reg`, `email`, `education`, `expertise`, `biography`, `personal`) VALUES
(1, 'Johnathan ', 'Deo', 38499, 'johnathandeon@moltran.com', 'BSc (McMaster), MSc (Toronto)', 'Injuries', 'Dr. Deo is the medical office specializing in delivering high-quality urgent care medicine. He’s a board-certified medical doctor, specializing in family practise. Dr. Deo was born in Nova Scotia and raised in British Columbia, CA. He graduated from McMaster University, and attended medical school at the University of California, Irvine.', 'Dr Deo is married with 2 kids, and live in Hamilton. Dr Deo enjoys gardening and hiking.'),
(3, 'Jason', 'Kim', 38938, 'jason@geraldton.com', 'BSc (Waterloo)', 'Sport Injuries, Chiropractor', 'Dr Jason is an integrative health care practitioner who values patient centered, evidence based care that emphasizes whole body health. She strongly believes in working together with her patients to optimize their overall health and well-being, all of which is achieved through healthy communication.', 'In her spare time, Dr. Jason can be found enjoying time with her dog Ellie, camping, playing sports, or going on hikes.'),
(4, 'Margaret ', 'Wilding', 78765, 'margaret@gmail.com', ' Bachelor of Science in Physical Therapy', 'Physiotherapist', 'Margaret is a Physiotherapist registered with The College of Physiotherapists of Ontario and a member of the Canadian Physiotherapy Association in good standing.', 'When not living through pandemics, she plays bass in a band and visits group homes with teenagers. She has recently discovered and recommends camping.');

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
(1, 36, 'test', '2021-04-08 11:34:12', 'Responded', 37, '2021-04-09 02:47:02', 'This is test for sending email with php'),
(2, 36, 'test2', '2021-04-08 12:51:27', 'Responded', 37, '2021-04-09 00:46:15', 'reply2'),
(3, 37, 'test3', '2021-04-08 12:54:48', 'Responded', 37, '2021-04-09 02:19:58', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(20) UNSIGNED NOT NULL,
  `contributor_id` int(20) DEFAULT NULL,
  `title` varchar(255) COLLATE latin1_bin NOT NULL,
  `created_on` date NOT NULL,
  `content` longtext COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `contributor_id`, `title`, `created_on`, `content`) VALUES
(0, NULL, 'services', '2021-04-05', '\r\n\r\n<main role=\"main\">\r\n\r\n      <section class=\"jumbotron text-center\">\r\n        <div class=\"container\">\r\n          <h1 class=\"jumbotron-heading\">Services offered</h1>\r\n          <p class=\"lead text-muted\">\r\n              The following are the list services offered at our medical centre.\r\n          </p>\r\n        </div>\r\n      </section>\r\n\r\n      <div class=\"album py-5 bg-light\">\r\n        <div class=\"container\">\r\n\r\n          <div class=\"row\">\r\n\r\n            <div class=\"col-md-4\">\r\n              <div class=\"card mb-4 box-shadow\">\r\n                <img class=\"card-img-top\" src=\"img/services/chiro.jpg\" alt=\"Chiropractic\" >\r\n                <div class=\"card-body\">\r\n                    <div class=\"d-flex justify-content-between align-items-center\">\r\n                        <p class=\"btn btn-primary my-2\" style=\"cursor:default;\">Chiropractic</p>\r\n                    </div>\r\n                    <p class=\"card-text\">\r\n                        Chiropractic care is a patient-centred, hands-on discipline that focuses on the spine,\r\n                        muscles, joints and nervous system. Chiropractors are regulated health professionals and are\r\n                        designated as primary-contact practitioners which means you do not require a referral to visit.\r\n                    </p>\r\n\r\n                </div>\r\n              </div>\r\n            </div>\r\n\r\n              <div class=\"col-md-4\">\r\n                  <div class=\"card mb-4 box-shadow\">\r\n                      <img class=\"card-img-top\" src=\"img/services/spiritual.jpg\" alt=\"Physiotherapy\" >\r\n                      <div class=\"card-body\">\r\n                          <div class=\"d-flex justify-content-between align-items-center\">\r\n                              <p class=\"btn btn-primary my-2\" style=\"cursor:default;\">Physiotherapy</p>\r\n                          </div>\r\n                          <p class=\"card-text\">\r\n                              Physiotherapists help people affected by injury, illness or disability through\r\n                              prescription of movement and exercise, manual therapy, education and modaties when indicated.\r\n                              The goal for physiotherapy is to help patients manage their pain as well as prevent disease.\r\n                          </p>\r\n\r\n                      </div>\r\n                  </div>\r\n              </div>\r\n\r\n              <div class=\"col-md-4\">\r\n                  <div class=\"card mb-4 box-shadow\">\r\n                      <img class=\"card-img-top\" src=\"img/services/acu.jpg\" alt=\"Acupuncture\" >\r\n                      <div class=\"card-body\">\r\n                          <div class=\"d-flex justify-content-between align-items-center\">\r\n                              <p class=\"btn btn-primary my-2\" style=\"cursor:default;\">Acupuncture</p>\r\n                          </div>\r\n                          <p class=\"card-text\">\r\n                              Acupuncture is a nerve stimulation technique that uses fine needles and\r\n                              sometimes mild electrical stimulation for a therapeutic purpose. Acupuncture can be\r\n                              offered from a Traditional Chinese Medicine (TCM) approach or from a Contemporary\r\n                              Medical approach.\r\n                          </p>\r\n\r\n                      </div>\r\n                  </div>\r\n              </div>\r\n\r\n          </div>\r\n\r\n\r\n            <div class=\"row\">\r\n\r\n                <div class=\"col-md-4\">\r\n                    <div class=\"card mb-4 box-shadow\">\r\n                        <img class=\"card-img-top\" src=\"img/services/occupation.jpg\" alt=\"Occupational Therapy\" >\r\n                        <div class=\"card-body\">\r\n                            <div class=\"d-flex justify-content-between align-items-center\">\r\n                                <p class=\"btn btn-primary my-2\" style=\"cursor:default;\">\r\n                                    Occupational Therapy\r\n                                </p>\r\n                            </div>\r\n                            <p class=\"card-text\">\r\n                                Occupational therapy is a client-centred health profession concerned with promoting\r\n                                health and well being through occupation. The primary goal of occupational therapy is\r\n                                to enable people to participate in the activities of everyday life.\r\n                            </p>\r\n\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n\r\n\r\n                <div class=\"col-md-4\">\r\n                    <div class=\"card mb-4 box-shadow\">\r\n                        <img class=\"card-img-top\" src=\"img/services/massage.jpg\" alt=\"Massage Therapy\" >\r\n                        <div class=\"card-body\">\r\n                            <div class=\"d-flex justify-content-between align-items-center\">\r\n                                <p class=\"btn btn-primary my-2\" style=\"cursor:default;\">\r\n                                    Massage Therapy\r\n                                </p>\r\n                            </div>\r\n                            <p class=\"card-text\">\r\n                                Massage Therapy is the manipulation of the body\'s soft tissues. Massage\r\n                                techniques are commonly applied with hands, fingers, elbows, knees, forearms,\r\n                                feet, or a device. The purpose of massage is generally for the treatment of body\r\n                                stress or pain.\r\n                            </p>\r\n\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n\r\n            </div>\r\n\r\n\r\n\r\n\r\n\r\n        </div>\r\n      </div>\r\n</main>\r\n'),
(2, NULL, 'covid_severe_symptoms', '2021-03-30', ' <main class=\"content-wrapper container\">\r\n\r\n        	<h1>COVID-19 questionnaire</h1>\r\n            \r\n        	<p class=\"question\"><strong>Are you currently experiencing any of these issues?</strong></p>\r\n\r\n        	<div class=\"answers-wrapper\">\r\n        		<ul>\r\n        			<li>Severe difficulty breathing (struggling for each breath, can only speak in single words)</li>\r\n        			<li> Severe chest pain (constant tightness or crushing sensation)</li>\r\n        			<li>Feeling confused or unsure of where you are</li>\r\n        			<li>Losing consciousness</li>\r\n        		</ul>        		\r\n        	</div>\r\n\r\n        	<div class=\"choices-wrapper\">\r\n\r\n        		<a href=\"index.php?page=covid_questionnaire_fail_result\" class=\"btn btn-secondary btn-lg\">yes</a> \r\n        		<a href=\"index.php?page=covid_questionnaire_symptoms\" class=\"btn btn-secondary btn-lg\">no</a>\r\n        		\r\n        	</div>\r\n\r\n	    </main>'),
(3, NULL, 'covid_symptoms', '2021-03-30', '        <main class=\"content-wrapper container\">\r\n\r\n        	<h1>COVID-19 questionnaire</h1>\r\n            \r\n        	<p class=\"question\"><strong>Are you currently experiencing any of these symptoms?</strong></p>\r\n\r\n        	<div class=\"answers-wrapper\">\r\n\r\n        		<form  action=\"#\" method=\"post\" id=\"form-symptoms\">\r\n        			<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input \" name=\"symptoms[]\" value=\"fever and/or chills\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Fever and/or chills</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"cough or barking cough\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Cough or barking cough (croup)</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"shortness of breath\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Shortness of breath</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"sore throat\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Sore throat</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"difficulty swallowing\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Difficulty swallowing</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"runny or stuffy/congested nose\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Runny or stuffy/congested nose</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"decrease or loss of taste or smell\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Decrease or loss of taste or smell</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"pink eye\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Pink eye</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"headache\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Headache</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"digestive issues like nausea/vomiting, diarrhea, stomach pain\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Digestive issues like nausea/vomiting, diarrhea, stomach pain</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"muscle aches\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Muscle aches</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"extreme tiredness\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Extreme tiredness</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"falling down often\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">Falling down often</label>\r\n					</div>\r\n					<div class=\"form-group form-check\">\r\n					    <input type=\"checkbox\" class=\"form-check-input\" name=\"symptoms[]\" value=\"none of the above\" id=\"no-symptom\">\r\n					    <label class=\"form-check-label\" for=\"symptoms[]\">None of the above</label>\r\n					</div>\r\n					<div class=\"choices-wrapper\">\r\n\r\n        		        <input type=\"submit\" value=\"continue\" name=\"continue\" class=\"btn btn-secondary btn-lg\">\r\n        		\r\n        	       </div>\r\n        		</form>      		\r\n        	</div>\r\n\r\n        	\r\n\r\n	    </main>'),
(4, NULL, 'covid_risk_factors', '2021-03-30', '<main class=\"content-wrapper container\">\r\n\r\n        	<h1>COVID-19 questionnaire</h1>\r\n            \r\n        	<p class=\"question\"><strong>Are you in any of these at-risk groups?</strong></p>\r\n\r\n        	<div class=\"answers-wrapper\">\r\n\r\n        		<ul>\r\n        			<li>Getting treatment that compromises (weakens) your immune system</li>\r\n        			<li>Having a condition that compromises (weakens) your immune system</li>\r\n        			<li>Having a chronic (long-lasting) health condition</li>\r\n        			<li>Regularly going to a hospital or health care setting for a treatment</li>\r\n        		</ul>\r\n\r\n        	</div>\r\n\r\n        	<div class=\"choices-wrapper\">\r\n\r\n        		<a href=\"index.php?page=covid_questionnaire_fail_result\" class=\"btn btn-secondary btn-lg\">yes</a> \r\n        		<a href=\"index.php?page=covid_questionnaire_exposure\" class=\"btn btn-secondary btn-lg\">no</a>\r\n        		\r\n        	</div>        	\r\n\r\n	    </main>'),
(5, NULL, 'covid_exposure', '2021-03-30', '<main class=\"content-wrapper container\">\r\n\r\n        	<h1>COVID-19 questionnaire</h1>\r\n            \r\n        	<p class=\"question\"><strong>In the last 14 days, have you been identified as a “close contact” of someone who currently has COVID-19?</strong></p>\r\n\r\n        	<div class=\"choices-wrapper\">\r\n\r\n        		<a href=\"index.php?page=covid_questionnaire_fail_result\" class=\"btn btn-secondary btn-lg\">yes</a> \r\n        		<a href=\"index.php?page=covid_questionnaire_alert\" class=\"btn btn-secondary btn-lg\">no</a>\r\n        		\r\n        	</div>        	\r\n\r\n	    </main>'),
(6, NULL, 'covid_alert', '2021-03-30', '<main class=\"content-wrapper container\">\r\n\r\n        	<h1>COVID-19 questionnaire</h1>\r\n            \r\n        	<p class=\"question\"><strong>In the last 14 days, have you received a COVID Alert exposure notification on your cell phone?</strong></p>\r\n            <p><em>If you already went for a test and got a negative result, select \"No\".</em></p>\r\n        	<div class=\"choices-wrapper\">\r\n\r\n        		<a href=\"index.php?page=covid_questionnaire_fail_result\" class=\"btn btn-secondary btn-lg\">yes</a> \r\n        		<a href=\"index.php?page=covid_questionnaire_travel\" class=\"btn btn-secondary btn-lg\">no</a>\r\n        		\r\n        	</div>        	\r\n\r\n	    </main>'),
(7, NULL, 'covid_travel', '2021-03-30', '<main class=\"content-wrapper container\">\r\n\r\n        	<h1>COVID-19 questionnaire</h1>\r\n            \r\n        	<p class=\"question\"><strong>In the last 14 days, have you travelled outside of Canada?</strong></p>\r\n            <p><em>If you are an essential worker who crosses the Canada-US border regularly for work, select \"No\".</em></p>\r\n        	<div class=\"choices-wrapper\">\r\n\r\n        		<a href=\"index.php?page=covid_questionnaire_fail_result\" class=\"btn btn-secondary btn-lg\">yes</a> \r\n        		<a href=\"index.php?page=covid_questionnaire_success_result\" class=\"btn btn-secondary btn-lg\">no</a>\r\n        		\r\n        	</div>        	\r\n\r\n	    </main>'),
(9, NULL, 'About Us', '2021-03-30', '<main>\r\n		    <section class=\"py-5 text-center container\">\r\n		        <img src=\"img/ABOUT-US/team.jpg\" class=\"img-fluid\" alt=\"Responsive image\" width=\"1000\" >\r\n		        <div class=\"row py-lg-5\">\r\n\r\n		            <div class=\"col-lg-6 col-md-8 mx-auto\">\r\n		                <h1 class=\"fw-light\">About Us</h1>\r\n		                <p class=\"lead text-muted\">QC Health Clinic has kept clients moving since 1996. We take pride in offering the best quality of service to all our clients.</p>\r\n		                <p>\r\n		                    <a href=\"#\" class=\"btn btn-primary my-2\">Our Services</a>\r\n		                    <a href=\"#\" class=\"btn btn-secondary my-2\">Contact Us</a>\r\n		                </p>\r\n		            </div>\r\n		        </div>\r\n		    </section>\r\n		    <!-- Marketing messaging and featurettes\r\n		    ================================================== -->\r\n		    <!-- Wrap the rest of the page in another container to center all the content. -->\r\n		    <div class=\"container marketing\">\r\n\r\n		        <!-- Three columns of text below the carousel -->\r\n		        <div class=\"row\">\r\n		            <div class=\"col-lg-4\">\r\n		                <img src=\"img/ABOUT-US/vision.jpg\" class=\"img-fluid\" alt=\"image of shadow of women running\" width=\"1000\" >\r\n\r\n		                <h2>Our Mission</h2>\r\n		                <p>Our mission is to provide our clients with the best and most comprehensive care possible. Our clinic ensures that each patient receives individual and personalized attention.</p>\r\n		            </div><!-- /.col-lg-4 -->\r\n		            <div class=\"col-lg-4\">\r\n\r\n\r\n		                <img src=\"img/ABOUT-US/values.jpg\" class=\"img-fluid\" alt=\"image of four people with hands on shoulders\" width=\"1000\" >\r\n\r\n		                <h2>Our Values</h2>\r\n		                <p>Our healthcare professionals must respect our clients and each other. Our team of healthcare professionals strive to treat our patients and each other as we would want to be treated.</p>\r\n		                <p> </p>\r\n\r\n		            </div><!-- /.col-lg-4 -->\r\n		            <div class=\"col-lg-4\">\r\n		                <img src=\"img/ABOUT-US/commitment.jpg\" class=\"img-fluid\" alt=\"image of a handshake\" width=\"1000\" >\r\n\r\n		                <h2>Our Commitment </h2>\r\n		                <p>We are committed to client satisfaction. If we are unable to serve your needs, we are more than happy to refer you to other resources.</p>\r\n		            </div><!-- /.col-lg-4 -->\r\n		        </div><!-- /.row -->\r\n\r\n\r\n		        <!-- START THE FEATURETTES -->\r\n\r\n		        <hr class=\"featurette-divider\">\r\n\r\n		        <div class=\"row featurette\">\r\n		            <div class=\"col-md-7\">\r\n		                <h2 class=\"featurette-heading\">Don\'t let your injury prevent you from living your best life</h2>\r\n		                <p class=\"lead\">Find out how our healthcare professionals can help!</p>\r\n		            </div>\r\n		            <div class=\"col-md-5\">\r\n		                <img src=\"img/ABOUT-US/injury.jpg\" class=\"img-fluid\" alt=\"image of woman helping sports athlete\" width=\"1000\" >\r\n		            </div>\r\n		        </div>\r\n		        <hr class=\"featurette-divider\">\r\n\r\n		        <!-- /END THE FEATURETTES -->\r\n\r\n		    </div><!-- /.container -->\r\n\r\n\r\n\r\n		</main>\r\n'),
(10, 5, 'Home Page', '2021-03-30', '<!-- Top Bar -->\r\n<div class=\"top-bar\">\r\n    <div class=\"container\">\r\n        <div class=\"col-12 text-right\">\r\n            <p>\r\n                <a href=\"tel:705-123-4567\">Call us today at 705-123-4567</a>\r\n            </p>\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n<!-- End Top Bar -->\r\n\r\n\r\n\r\n\r\n<!-- Image Carousel -->\r\n<div id=\"carousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"8000\">\r\n\r\n\r\n    <!-- Carousel Content -->\r\n    <div class=\"carousel-inner\">\r\n        <div class=\"carousel-item active\">\r\n            <img src=\"img/HOME-PAGE/carousel/1.jpg\" alt=\"picture1\" class=\"w-100\">\r\n            <div class=\"carousel-caption\">\r\n                <div class=\"container\">\r\n                    <div class=\"row justify-content-center\">\r\n                        <div class=\"col-8 bg-custom d-none d-lg-block py-3 px-0\">\r\n                            <h1>QC Health Clinic</h1>\r\n                            <div class=\"border-top border-primary w-50 mx-auto my-3\"></div>\r\n                            <h3 class=\"pb-3\"></h3>\r\n                            <a href=index.php?page=about_us class=\"btn btn-danger bn-lg mr-2\">Learn More</a>\r\n                            <a href=\"index.php?page=patient_register\" class=\"btn btn-danger bn-lg mr-2\">Book Now</a>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"carousel-item\">\r\n            <img src=\"img/HOME-PAGE/carousel/2.jpg\" alt=\"\" class=\"w-100\">\r\n            <div class=\"carousel-caption\">\r\n                <div class=\"container\">\r\n                    <div class=\"row justify-content-end text-right\">\r\n                        <div class=\"col-5 bg-custom d-none d-lg-block py-3 px-0 pr-3 pb-3\">\r\n                            <p class=\"lead\">Keeping You Moving</p>\r\n                            <a href=\"index.php?page=about_us\" class=\"btn btn-danger bn-lg mr-2\">What we do</a>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"carousel-item\">\r\n            <img src=\"img/HOME-PAGE/carousel/3.jpg\" alt=\"image3\" class=\"w-100\">\r\n            <div class=\"carousel-caption\">\r\n                <div class=\"container\">\r\n                    <div class=\"row justify-content-start text-left\">\r\n                        <div class=\"col-5 bg-custom d-none d-lg-block py-3 px-0 pl-3 pb-3\">\r\n                            <p class=\"lead\">With You From Beginning to End</p>\r\n                            <a href=index.php?page=indexServices class=\"btn btn-danger bn-lg\">See How We Can Help</a>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n\r\n        </div>\r\n    </div>\r\n    <!-- End Carousel Content -->\r\n\r\n\r\n    <!-- Previous & Next Buttons -->\r\n    <a href=\"#carousel\" class=\"carousel-control-prev\" role=\"button\" data-slide=\"prev\">\r\n        <span class=\"fas fa-chevron-left fa-3x\"></span>\r\n    </a>\r\n\r\n    <a href=\"#carousel\" class=\"carousel-control-next\" role=\"button\" data-slide=\"next\">\r\n        <span class=\"fas fa-chevron-right fa-3x\"></span>\r\n    </a>\r\n\r\n    <!-- End Previous & Next Buttons -->\r\n\r\n</div>\r\n<!-- End Image Carousel -->\r\n\r\n\r\n<!-- Main Page Heading -->\r\n<div class=\"col-12 text-center mt-5\">\r\n    <h1 class=\" pt-4\">The Road to Recovery Starts Somewhere...</h1>\r\n    <div class=\"border-top border-primary w-25 mx-auto my-3\"></div>\r\n    <p class=\"lead\">Make it here with us</p>\r\n</div>\r\n<!-- Start video-sec Area -->\r\n<section class=\"pb-100 pt-2\" id=\"about\">\r\n    <div class=\"container\">\r\n        <div class=\"row justify-content-start align-items-center\">\r\n            <div class=\"col-lg-6 justify-content-center align-items-center d-flex\">\r\n                <div class=\"overlay overlay-bg\"></div>\r\n                <img src=\"img/HOME-PAGE/active2.jpg\" alt=\"\">\r\n            </div>\r\n            <div class=\"col-lg-6\">\r\n                <h6>Building stronger, happier & healthy lifestyles </h6>\r\n                <h1>We Specialize in Recovery</h1>\r\n                <p><span>PHYSIOTHERAPY, OCCUPATIONAL THERAPY, MASSAGE THERAPY and more!</span></p>\r\n                <p>\r\n                    Not only do we offer physiotherapy services, but also occupational therapy and massage therapy. We offer everything to get you back on your feet and moving!\r\n                </p>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n\r\n\r\n<!-- Start menu Area -->\r\n<section class=\"menu-area section-gap\" id=\"coffee\">\r\n    <div class=\"container\">\r\n        <div class=\"row d-flex justify-content-center\">\r\n            <div class=\"menu-content pb-60 col-lg-10\">\r\n                <div class=\"title text-center\">\r\n                    <h1 class=\"mb-10\">Our Services</h1>\r\n                    <p>Take a look at how we can help you today</p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-lg-4\">\r\n                <div class=\"single-menu\">\r\n                    <div class=\"title-div justify-content-between d-flex\">\r\n                        <h4>Physiotherapy</h4>\r\n\r\n                    </div>\r\n                    <p>\r\n                        Physiotherapy can be defined as a treatment method that focuses on the science of movement and helps people to restore, maintain and maximize their physical strength, function, motion and overall well-being by addressing the underlying physical issues.\r\n                    </p>\r\n                    <div class=\"single-menu__btn\">\r\n                        <a href=index.php?page=patient_register class=\"btn btn-outline-dark btn-lg\">Book Here</a>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"col-lg-4\">\r\n                <div class=\"single-menu\">\r\n                    <div class=\"title-div justify-content-between d-flex\">\r\n                        <h4>Occupational Therapy</h4>\r\n\r\n                    </div>\r\n                    <p>\r\n                        Occupational therapy is a client-centred health profession concerned with promoting health and well being through occupation. The primary goal of occupational therapy is to enable people to participate in the activities of everyday life.\r\n                    </p>\r\n                    <div class=\"single-menu__btn\">\r\n                        <a href=index.php?page=patient_register class=\"btn btn-outline-dark btn-lg\">Book Here</a>\r\n                    </div>\r\n\r\n                </div>\r\n            </div>\r\n            <div class=\"col-lg-4\">\r\n                <div class=\"single-menu\">\r\n                    <div class=\"title-div justify-content-between d-flex\">\r\n                        <h4>Massage Therapy</h4>\r\n\r\n                    </div>\r\n                    <p>\r\n                        Massage Therapy is the manipulation of the body\'s soft tissues. Massage techniques are commonly applied with hands, fingers, elbows, knees, forearms, feet, or a device. The purpose of massage is generally for the treatment of body stress or pain.\r\n                    </p>\r\n                    <div class=\"single-menu__btn\">\r\n                        <a href=index.php?page=patient_register class=\"btn btn-outline-dark btn-lg\">Book Here</a>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n\r\n\r\n\r\n        </div>\r\n    </div>\r\n</section>\r\n<!-- End menu Area -->\r\n\r\n\r\n\r\n\r\n<!-- Start Fixed Background IMG -->\r\n<div class=\"fixed-background\">\r\n    <div class=\"row text-light py-5\">\r\n        <div class=\"col-12 text-center\">\r\n            <h2>Organize & Schedule with Ease</h2>\r\n            <h3 class=\"py-4\">Click to see how we make scheduling appointments easier than ever</h3>\r\n            <a href=index.php?page=patient_register class=\"btn btn-primary btn-lg mr-2\">Create An Account To Use Our Booking App</a>\r\n\r\n        </div>\r\n    </div>\r\n\r\n\r\n    <div class=\"fixed-wrap\">\r\n        <div class=\"fixed\">\r\n\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n<!-- End Fixed Background IMG -->\r\n<!-- Three Column Section -->\r\n<div class=\"container\">\r\n    <div class=\"row my-5\">\r\n\r\n        <div class=\"col-md-4 my-4\">\r\n            <i class=\"fas fa-dumbbell w-100\"></i>\r\n            <h4 class=\"my-4\">\"Amazing. Incredible\"</h4>\r\n            <p>-Local Customer John.</p>\r\n            <a href=index.php?page=indexReview class=\"btn btn-outline-dark btn-md\">Reviews</a>\r\n        </div>\r\n        <div class=\"col-md-4 my-4\">\r\n            <i class=\"fas fa-biking w-100\"></i>\r\n            <h4 class=\"my-4\">Any Questions?</h4>\r\n            <p>We have tons of answers for your questions here.</p>\r\n            <a href=index.php?page=faq class=\"btn btn-outline-dark btn-md\">FAQ</a>\r\n        </div>\r\n\r\n        <div class=\"col-md-4 my-4\">\r\n            <i class=\"fas fa-user-md w-100\"></i>\r\n            <h4 class=\"my-4\">Locations</h4>\r\n            <p>First time visitor ? Find out where to find us here.</p>\r\n            <a href=index.php?page=contact class=\"btn btn-outline-dark btn-md\">Location</a>\r\n        </div>\r\n\r\n    </div>\r\n</div>\r\n\r\n<!-- End Three Column Section -->\r\n\r\n\r\n\r\n\r\n<!-- Start Two Column Section -->\r\n<div class=\"container my-5\">\r\n    <div class=\"row py-4\">\r\n        <div class=\"col-lg-6 mb-6 my-lg-auto\">\r\n            <h4 class=\"my-4\">\"10/10 Would Use QC Health Clinic Again\"</h4>\r\n            <p>-Our Users</p>\r\n            <a href=\"#\" class=\"btn btn-outline-dark btn-lg\">Return to Top</a>\r\n        </div>\r\n        <div class=\"col lg-8\">\r\n            <img src=\"img/HOME-PAGE/active1.jpg\" alt=\"\" class=\"w-75\"></div>\r\n\r\n    </div>\r\n</div>\r\n\r\n<!-- End Two Column Section -->\r\n\r\n\r\n<!-- Start Jumbotron -->\r\n<div class=\"jumbotron py-5 mb-0\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-7 col-lg-8 col-xl-9 my-auto\">\r\n                We are here to help\r\n            </div>\r\n            <div class=\"col-md-5 col-lg-4 col-xl-3\">\r\n                <a href=index.php?page=contact class=\"btn btn-primary btn-lg\">Contact Today</a>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n<!-- End Jumbotron -->');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(20) NOT NULL,
  `firstname` varchar(255) COLLATE latin1_bin NOT NULL,
  `lastname` varchar(255) COLLATE latin1_bin NOT NULL,
  `address` varchar(255) COLLATE latin1_bin NOT NULL,
  `phone` varchar(255) COLLATE latin1_bin NOT NULL,
  `email` varchar(255) COLLATE latin1_bin NOT NULL,
  `medical_history` text COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `medical_history`) VALUES
(1, 'BRAYDON', 'VIRAGH', '221 MUNRO', '123456', 'email@example.ca', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL COMMENT 'Review ID',
  `doctorID` int(11) NOT NULL COMMENT 'Foreign Key',
  `know` int(11) NOT NULL COMMENT 'Knowledge Rating',
  `prof` int(11) NOT NULL COMMENT 'Professional Rating',
  `friendly` int(11) NOT NULL COMMENT 'friendliness Rating'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `doctorID`, `know`, `prof`, `friendly`) VALUES
(1, 1, 3, 4, 3),
(2, 1, 5, 4, 2),
(3, 3, 3, 2, 1),
(4, 3, 2, 4, 4),
(5, 4, 5, 5, 4),
(6, 4, 4, 2, 4),
(7, 1, 3, 3, 3),
(8, 4, 2, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `id` int(20) NOT NULL,
  `time_slot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `time_slot`) VALUES
(1, 'Morning'),
(2, 'Afternoon'),
(3, 'Evening');

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
(33, 'Sasha', 'Srinivas', 'samsss', '$2y$10$ILFkQjqzfKYwBvEXtX5.3uRWfXlaVKMI5tTuUC7QoHhESe5B7WeBK', 'sashasrinivas@hotmail.com', 1),
(34, 'Johnathan', 'Deo', 'johnathan', 'aaa', 'johnathandeon@moltran.com', 4),
(35, 'Jason', 'Kim', 'Jason', 'bbb', 'jason@geraldton.com', 4),
(36, 'ikumi', 'Mine', 'patient', 'ccc', 'n01442368@humbermail.ca', 1),
(37, 'John', 'Doe', 'John', '123', 'john@test.com', 1),
(38, 'franck', 'yves', 'mopao', '$2y$10$c8xMh1MZlE2C2iY6lq2m5O7XnWeD3Hdo0744PokgkcRTY1lIScK7.', 'franck@yahoo.fr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `type`) VALUES
(1, 'patient'),
(3, 'admin'),
(4, 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `day_id` (`day_id`),
  ADD KEY `time_slot_id` (`time_slot_id`);

--
-- Indexes for table `availabilities`
--
ALTER TABLE `availabilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `covid_questionnaire_results`
--
ALTER TABLE `covid_questionnaire_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `covid_result_id` (`covid_result_id`);

--
-- Indexes for table `covid_results`
--
ALTER TABLE `covid_results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `result` (`details`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_quetioner_id` (`questioner_id`),
  ADD KEY `fk_responder_id` (`responder_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctorID` (`doctorID`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `covid_questionnaire_results`
--
ALTER TABLE `covid_questionnaire_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `covid_results`
--
ALTER TABLE `covid_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Review ID', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `covid_questionnaire_results`
--
ALTER TABLE `covid_questionnaire_results`
  ADD CONSTRAINT `covid_questionnaire_results_ibfk_1` FOREIGN KEY (`covid_result_id`) REFERENCES `covid_results` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
