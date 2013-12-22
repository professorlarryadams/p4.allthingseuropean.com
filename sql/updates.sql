-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2013 at 10:14 PM
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
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `suffix` varchar(25) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `del_address` varchar(40) NOT NULL,
  `del_city` varchar(40) NOT NULL,
  `del_state` varchar(2) NOT NULL,
  `del_zip` varchar(5) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `eyes` varchar(30) NOT NULL,
  `hair` varchar(30) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_secondary` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ref_num` int(11) NOT NULL,
  `arn` int(11) NOT NULL,
  `relationship` varchar(40) NOT NULL,
  `emerg_contact` varchar(50) NOT NULL,
  `emerg_street` varchar(255) NOT NULL,
  `emerg_city` varchar(255) NOT NULL,
  `emerg_state` varchar(2) NOT NULL,
  `emerg_zip` varchar(255) NOT NULL,
  `emerg_phone` varchar(40) NOT NULL,
  `cell_phone` varchar(40) NOT NULL,
  `emerg_email` varchar(40) NOT NULL,
  `comments` longtext NOT NULL,
  PRIMARY KEY (`updates_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Modification to 719B' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`updates_id`, `user_id`, `created`, `fname`, `mname`, `lname`, `suffix`, `alias`, `address`, `city`, `state`, `zip_code`, `del_address`, `del_city`, `del_state`, `del_zip`, `nationality`, `eyes`, `hair`, `phone`, `phone_secondary`, `email`, `ref_num`, `arn`, `relationship`, `emerg_contact`, `emerg_street`, `emerg_city`, `emerg_state`, `emerg_zip`, `emerg_phone`, `cell_phone`, `emerg_email`, `comments`) VALUES
(6, 3, 1387601222, 'Larry', 'Lee', 'Adams', 'II', '', '118 Oliver Ct', 'Purcellville Ct', 'VA', 20132, 'P. O. Box 192', 'Winchester', 'VA', '22601', 'United States', 'blue', 'bald', '(526) 262-7282', '(929) 292-9029', 'ladams@gmail.com', 0, 0, 'wife', 'Barbara Adams', '110 East St', 'Winchester', 'VA', '72727', '(782) 727-2727', '(727) 272-7272', 'badams@aol.com', 'I would like to update my contact information to include my emergency contact.');

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
