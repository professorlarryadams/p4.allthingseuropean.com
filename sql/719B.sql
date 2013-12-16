-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2013 at 02:35 PM
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
-- Table structure for table `719B`
--

CREATE TABLE IF NOT EXISTS `719B` (
  `719b_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `alias` varchar(40) NOT NULL,
  `ssn` varchar(25) NOT NULL,
  `ref_num` int(11) NOT NULL,
  `arn` int(11) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `birthplace` varchar(30) NOT NULL,
  `birth_state` varchar(30) NOT NULL,
  `birth_country` varchar(30) NOT NULL,
  `eye_color` varchar(15) NOT NULL,
  `hair_color` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `delivery_address` varchar(40) NOT NULL,
  `delivery_city` varchar(40) NOT NULL,
  `delivery_state` varchar(40) NOT NULL,
  `delivery_zip` varchar(5) NOT NULL,
  `phone` int(11) NOT NULL,
  `phone_secondary` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `emergency_contact` varchar(60) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city_emergency_contact` varchar(40) NOT NULL,
  `state_emergency_contact` varchar(40) NOT NULL,
  `zip_emergency_contact` varchar(15) NOT NULL,
  `relationship` varchar(15) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_cell` varchar(15) NOT NULL,
  `contact_email` varchar(40) NOT NULL,
  `original_officer` varchar(20) NOT NULL,
  `renewal_officer` varchar(20) NOT NULL,
  `duplicate_officer` varchar(20) NOT NULL,
  `raise_officer` varchar(20) NOT NULL,
  `increase_officer` varchar(20) NOT NULL,
  `continuity_officer` varchar(20) NOT NULL,
  `original_qr` varchar(20) NOT NULL,
  `renewal_qr` varchar(20) NOT NULL,
  `duplicate_qr` varchar(20) NOT NULL,
  `raise_qr` varchar(20) NOT NULL,
  `increase_qr` varchar(20) NOT NULL,
  `continuity_qr` varchar(20) NOT NULL,
  `original_entry` varchar(20) NOT NULL,
  `renewal_entry` varchar(20) NOT NULL,
  `duplicate_entry` varchar(20) NOT NULL,
  `original_stcw` varchar(20) NOT NULL,
  `renewal_stcw` varchar(20) NOT NULL,
  `duplicate_stcw` varchar(20) NOT NULL,
  `raise_stcw` varchar(20) NOT NULL,
  `increase_stcw` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `renewal_transaction` varchar(20) NOT NULL,
  `twic_receipt` varchar(20) NOT NULL,
  `twic_exempt` varchar(20) NOT NULL,
  `mos_yes` varchar(20) NOT NULL,
  `mos_no` varchar(20) NOT NULL,
  `drugs` varchar(3) NOT NULL,
  `convictions_statement` varchar(20) NOT NULL,
  `ndr_authorize` varchar(20) NOT NULL,
  `continuity` varchar(20) NOT NULL,
  `parental_consent` varchar(20) NOT NULL,
  `sse_authorize` varchar(20) NOT NULL,
  `3rdPartyName` varchar(70) NOT NULL,
  `medical_authorize` varchar(20) NOT NULL,
  `3rdPartyPOC` varchar(70) NOT NULL,
  `pq_authorize` varchar(20) NOT NULL,
  `3rdPartyStreet` varchar(40) NOT NULL,
  `3rdPartyCity` varchar(40) NOT NULL,
  `3rdPartyState` varchar(40) NOT NULL,
  `3rdPartyZip` varchar(15) NOT NULL,
  `processing_authorize` varchar(20) NOT NULL,
  `3rdPartyPhone` varchar(15) NOT NULL,
  `delivery_authorize` varchar(20) NOT NULL,
  `oath` varchar(20) NOT NULL,
  `e_signature` blob NOT NULL,
  PRIMARY KEY (`719b_id`),
  KEY `users_id` (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='719B' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `719B`
--

INSERT INTO `719B` (`719b_id`, `user_id`, `created`, `first_name`, `middle_name`, `last_name`, `suffix`, `alias`, `ssn`, `ref_num`, `arn`, `birthdate`, `nationality`, `birthplace`, `birth_state`, `birth_country`, `eye_color`, `hair_color`, `address`, `city`, `state`, `zip_code`, `delivery_address`, `delivery_city`, `delivery_state`, `delivery_zip`, `phone`, `phone_secondary`, `email`, `emergency_contact`, `street`, `city_emergency_contact`, `state_emergency_contact`, `zip_emergency_contact`, `relationship`, `contact_phone`, `contact_cell`, `contact_email`, `original_officer`, `renewal_officer`, `duplicate_officer`, `raise_officer`, `increase_officer`, `continuity_officer`, `original_qr`, `renewal_qr`, `duplicate_qr`, `raise_qr`, `increase_qr`, `continuity_qr`, `original_entry`, `renewal_entry`, `duplicate_entry`, `original_stcw`, `renewal_stcw`, `duplicate_stcw`, `raise_stcw`, `increase_stcw`, `description`, `renewal_transaction`, `twic_receipt`, `twic_exempt`, `mos_yes`, `mos_no`, `drugs`, `convictions_statement`, `ndr_authorize`, `continuity`, `parental_consent`, `sse_authorize`, `3rdPartyName`, `medical_authorize`, `3rdPartyPOC`, `pq_authorize`, `3rdPartyStreet`, `3rdPartyCity`, `3rdPartyState`, `3rdPartyZip`, `processing_authorize`, `3rdPartyPhone`, `delivery_authorize`, `oath`, `e_signature`) VALUES
(1, 1, 1387139056, 'Larry', 'Lee', 'Adams', 'II', '', '717-17-7777', 71717, 717717, '02/01/1964', 'United States', 'Winchester', 'VA', 'United States', 'blue', 'bald', '235 Nightingale Ave', 'Stephens City', 'VA', 22272, 'P.O. Box 8877', 'Winchester', 'VA', '22601', 0, 0, 'ladams@aol.com', 'Barb Adams', '118 Oliver Ct', 'Purcellville', 'VA', '22601', 'wife', '(828) 282-8282', '(828) 282-9298', 'badams@aol.com', '', 'renewal_officer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'renewal_stcw', '', '', '', 'I would like to apply for a Master at 1600', 'on', 'twic_receipt', '', 'yes_mos', '', 'no', '', 'yes', '', '', 'yes', 'NMC', 'yes', 'LA', 'yes', '110 Tset', 'Martinsburg', 'WV', '28181', 'yes', '(626) 252-5252', 'yes', 'yes', 0x706879697363616c2077656c6c6e6573732e706466);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `719B`
--
ALTER TABLE `719B`
  ADD CONSTRAINT `719B_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
