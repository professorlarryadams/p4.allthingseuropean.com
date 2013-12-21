-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2013 at 05:17 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `allthin1_p4_allthingseuropean_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Modification to 719B' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`updates_id`, `user_id`, `created`, `fname`, `mname`, `lname`, `suffix`, `alias`, `address`, `city`, `state`, `zip_code`, `del_address`, `del_city`, `del_state`, `del_zip`, `nationality`, `eyes`, `hair`, `phone`, `phone_secondary`, `email`, `ref_num`, `arn`, `relationship`, `emerg_contact`, `emerg_street`, `emerg_city`, `emerg_state`, `emerg_zip`, `emerg_phone`, `cell_phone`, `emerg_email`, `comments`) VALUES
(5, 10, 1387429017, 'Larry', 'Lee', 'Adams', 'II', '', '235 Nightingale Ave', 'Stephens City', 'VA', 22655, '', '', '', '', 'United States', 'blue', 'bald', '(723) 727-2727', '(712) 717-1711', 'ladams@aol.com', 717177, 0, 'wife', 'Barbara Adams', '118 Oliver Ct', 'Purcellville', 'VA', '27272', '(727) 272-7272', '(727) 272-7272', 'badams@aol.com', 'I am updating my contact information');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `updates`
--
ALTER TABLE `updates`
  ADD CONSTRAINT `updates_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
