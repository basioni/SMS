-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2016 at 08:01 PM
-- Server version: 5.5.42-37.1
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking_sms_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `sub_id` int(10) NOT NULL,
  `sub_first_name` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_last_name` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_email` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_mobile` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_address` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_birthday` date DEFAULT NULL,
  `sub_last_visit_date` date DEFAULT NULL,
  `sub_status` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_group` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`sub_id`, `sub_first_name`, `sub_last_name`, `sub_email`, `sub_mobile`, `sub_address`, `sub_birthday`, `sub_last_visit_date`, `sub_status`, `sub_group`) VALUES
(1, 'Ahmed', 'Fathy', 'ahmed@own-source.com', '+201022009313', '6 Mahmoud Aref, ', '1990-01-28', '0000-00-00', '', '2'),
(16, 'MORAD', 'MOHSEN', 'Ahmed@email.com', '+01022009313', '', '2001-01-01', '2016-03-19', '', '2'),
(15, 'Ahmed', 'Mora', 'Ahmed@email.com', '+201557248648', '7 address location, Egypt.', '2011-01-01', '2016-03-19', '', '2'),
(14, 'Tamer', 'Mata', 'email@email.com', '+201022009292', '', '2016-01-01', '2016-03-19', '', '2'),
(13, 'Ahmed', 'Tanna', 'email@email.com', '+0102200000', '', '1999-10-01', '2016-03-19', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `contact_groups`
--

CREATE TABLE IF NOT EXISTS `contact_groups` (
  `group_id` int(225) NOT NULL,
  `group_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_groups`
--

INSERT INTO `contact_groups` (`group_id`, `group_name`) VALUES
(2, 'Subscribers List A'),
(3, 'Subscribers List 1');

-- --------------------------------------------------------

--
-- Table structure for table `SMS_apis`
--

CREATE TABLE IF NOT EXISTS `SMS_apis` (
  `api_id` int(225) NOT NULL,
  `api_reference_id` text COLLATE utf8_unicode_ci NOT NULL,
  `api_gateway` text COLLATE utf8_unicode_ci NOT NULL,
  `api_account_sid` text COLLATE utf8_unicode_ci NOT NULL,
  `api_auth_token` text COLLATE utf8_unicode_ci NOT NULL,
  `api_sender_id` text COLLATE utf8_unicode_ci NOT NULL,
  `api_status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `SMS_apis`
--

INSERT INTO `SMS_apis` (`api_id`, `api_reference_id`, `api_gateway`, `api_account_sid`, `api_auth_token`, `api_sender_id`, `api_status`) VALUES
(5, '8', 'twilio', 'AC3da16061cb4b764cef7bd55347478c30', 'aa0ef663072abdceee291ae6e135d9e6', '+201285272081', 'Active'),
(2, '4', 'twilio', 'AC3be07e245bed6b8234cd8426332aefa2', '59ac3dc2ca030c5d4d5eeec9d0cdd41b', '+1 2672969611', 'Active'),
(4, '7', 'twilio', 'ACff5618bff8542a37b19f5ccd986162b2', '9b517fe73215cd56968b921245424bd1', '525541613938', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `sms_reminders`
--

CREATE TABLE IF NOT EXISTS `sms_reminders` (
  `rmnd_id` int(225) NOT NULL,
  `rmnd_to` text COLLATE utf8_unicode_ci NOT NULL,
  `rmnd_date` date NOT NULL,
  `rmnd_API` text COLLATE utf8_unicode_ci,
  `rmnd_message` text COLLATE utf8_unicode_ci,
  `rmnd_type` text COLLATE utf8_unicode_ci NOT NULL,
  `rmnd_status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms_reminders`
--

INSERT INTO `sms_reminders` (`rmnd_id`, `rmnd_to`, `rmnd_date`, `rmnd_API`, `rmnd_message`, `rmnd_type`, `rmnd_status`) VALUES
(6, '', '2017-03-19', NULL, NULL, 'BirthdayWish', 'Planned'),
(5, '', '2016-03-19', '5', 'Hi ! This is Meeting Reminder Template 1 Message body', 'BirthdayWish', 'Sent'),
(4, '+01022009313', '2016-03-19', '5', 'Hi ! This is Meeting Reminder Template 1 Message body', 'BirthdayWish', 'Sent'),
(7, '', '2017-03-19', NULL, NULL, 'BirthdayWish', 'Planned'),
(8, '', '2017-03-19', NULL, NULL, 'BirthdayWish', 'Planned'),
(9, '+201022009292', '2016-03-19', '5', 'Hi ! This is Meeting Reminder Template 1 Message body', 'BirthdayWish', 'Sent'),
(10, '', '2016-03-19', '5', 'Hi ! This is Meeting Reminder Template 1 Message body', 'BirthdayWish', 'Sent'),
(11, '14', '2017-03-19', NULL, NULL, 'BirthdayWish', 'Planned'),
(12, '+201022009292', '2017-03-19', NULL, NULL, 'BirthdayWish', 'Planned'),
(13, '+201557248648', '2016-03-19', '5', 'Hi ! This is Meeting Reminder Template 1 Message body', 'BirthdayWish', 'Sent'),
(14, '15', '2017-03-19', NULL, NULL, 'BirthdayWish', 'Planned'),
(15, '16', '2017-01-01', NULL, NULL, 'BirthdayWish', 'Planned'),
(16, '+01022009313', '2016-03-19', '5', 'Hi ! This is Meeting Reminder Template 1 Message body', 'Appointment', 'Sent'),
(17, '16', '2017-03-19', NULL, NULL, 'Appointment', 'Planned');

-- --------------------------------------------------------

--
-- Table structure for table `sms_sends`
--

CREATE TABLE IF NOT EXISTS `sms_sends` (
  `snds_id` int(225) NOT NULL,
  `snds_to` text COLLATE utf8_unicode_ci NOT NULL,
  `snds_date` date NOT NULL,
  `snds_API` int(225) NOT NULL,
  `snds_message` text COLLATE utf8_unicode_ci NOT NULL,
  `snds_type` text COLLATE utf8_unicode_ci NOT NULL,
  `snds_status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms_sends`
--

INSERT INTO `sms_sends` (`snds_id`, `snds_to`, `snds_date`, `snds_API`, `snds_message`, `snds_type`, `snds_status`) VALUES
(1, '+201285272081', '2016-03-16', 5, ' aaaaaaaaa', 'Custom', 'Sent'),
(2, '+201022009313', '2016-03-16', 5, ' aaaaaaaaa', 'Custom', 'Sent'),
(3, '+201212009311', '2016-03-16', 5, ' aaaaaaaaa', 'Custom', 'Sent'),
(16, '+201212009311', '2016-03-16', 5, ' ssss', 'Custom', 'Sent'),
(15, '+201022009313', '2016-03-16', 5, ' ssss', 'Custom', 'Sent'),
(14, '+201212009311', '2016-03-16', 5, ' dddd', 'Custom', 'Sent'),
(13, '+201022009313', '2016-03-16', 5, ' dddd', 'Custom', 'Sent'),
(11, '+201022009313', '2016-03-16', 5, ' ssssss', 'Custom', 'Sent'),
(12, '+201212009311', '2016-03-16', 5, ' ssssss', 'Custom', 'Sent'),
(25, '+201022009313', '2016-01-01', 5, '', 'Scheduled', 'Planned'),
(24, '+201212009311', '2016-01-01', 5, ' Hi all! This is Automated message', 'Scheduled', 'Planned'),
(23, '+201022009313', '2016-01-01', 5, ' Hi all! This is Automated message', 'Scheduled', 'Planned'),
(26, '+201212009311', '2016-01-01', 5, '', 'Scheduled', 'Planned');

-- --------------------------------------------------------

--
-- Table structure for table `sms_templates`
--

CREATE TABLE IF NOT EXISTS `sms_templates` (
  `template_id` int(11) NOT NULL,
  `template_name` text COLLATE utf8_unicode_ci NOT NULL,
  `template_message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms_templates`
--

INSERT INTO `sms_templates` (`template_id`, `template_name`, `template_message`) VALUES
(4, 'Meeting Reminder Template 1', 'Hi ! This is Meeting Reminder Template 1 Message body'),
(3, 'Temp Name 22', 'This Template Message #3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `contact_groups`
--
ALTER TABLE `contact_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `SMS_apis`
--
ALTER TABLE `SMS_apis`
  ADD PRIMARY KEY (`api_id`);

--
-- Indexes for table `sms_reminders`
--
ALTER TABLE `sms_reminders`
  ADD PRIMARY KEY (`rmnd_id`);

--
-- Indexes for table `sms_sends`
--
ALTER TABLE `sms_sends`
  ADD PRIMARY KEY (`snds_id`);

--
-- Indexes for table `sms_templates`
--
ALTER TABLE `sms_templates`
  ADD PRIMARY KEY (`template_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `contact_groups`
--
ALTER TABLE `contact_groups`
  MODIFY `group_id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `SMS_apis`
--
ALTER TABLE `SMS_apis`
  MODIFY `api_id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sms_reminders`
--
ALTER TABLE `sms_reminders`
  MODIFY `rmnd_id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sms_sends`
--
ALTER TABLE `sms_sends`
  MODIFY `snds_id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `sms_templates`
--
ALTER TABLE `sms_templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
