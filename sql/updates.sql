-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2013 at 02:36 PM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allthin1_p4_allthingseuropean_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `updates_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `suffix` varchar(25) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `delivery_address` varchar(40) NOT NULL,
  `delivery_city` varchar(40) NOT NULL,
  `delivery_state` varchar(2) NOT NULL,
  `delivery_zip` varchar(5) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `eye_color` varchar(30) NOT NULL,
  `hair_color` varchar(30) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_secondary` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ref_num` int(11) NOT NULL,
  `arn` int(11) NOT NULL,
  `relationship` varchar(40) NOT NULL,
  `emergency_contact` varchar(255) NOT NULL,
  `emergency_street` varchar(255) NOT NULL,
  `emergency_city` varchar(255) NOT NULL,
  `emergency_state` varchar(2) NOT NULL,
  `emergency_zip` varchar(255) NOT NULL,
  `emergency_contact_phone` varchar(40) NOT NULL,
  `emergency_contact_cell` varchar(40) NOT NULL,
  `emergency_contact_email` varchar(40) NOT NULL,
  `comments` longtext NOT NULL,
  PRIMARY KEY (`updates_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Modification to 719B' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`updates_id`, `user_id`, `created`, `first_name`, `middle_name`, `last_name`, `suffix`, `alias`, `address`, `city`, `state`, `zip_code`, `delivery_address`, `delivery_city`, `delivery_state`, `delivery_zip`, `nationality`, `eye_color`, `hair_color`, `phone`, `phone_secondary`, `email`, `ref_num`, `arn`, `relationship`, `emergency_contact`, `emergency_street`, `emergency_city`, `emergency_state`, `emergency_zip`, `emergency_contact_phone`, `emergency_contact_cell`, `emergency_contact_email`, `comments`) VALUES
(2, 2, 1387141096, 'Barbara', '', 'Adams', '', '', '235 Nightingale Ave', 'Stephens City', 'VA', 22655, '', '', '', '', 'United States', 'blue', 'bald', '(626) 262-6262', '(625) 252-5252', 'badams@aol.com', 0, 0, 'husband', 'Larry Adams', '235 Nighingale Ave', 'Stephens City', 'VA', '22655', '(540) 533-7766', '', 'ladams@aol.com', 'I would like to update my name as I was married in May.  I also updated my contact information');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `updates`
--
ALTER TABLE `updates`
  ADD CONSTRAINT `updates_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
