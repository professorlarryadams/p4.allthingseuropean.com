-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2013 at 05:15 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `allthin1_p4_allthingseuropean_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `719b`
--

CREATE TABLE `719B` (
  `719b_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `alias` varchar(40) NOT NULL,
  `ssn` varchar(25) NOT NULL,
  `ref_num` int(11) NOT NULL,
  `arn` int(11) NOT NULL,
  `birthDate` varchar(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `birthCity` varchar(30) NOT NULL,
  `birthState` varchar(30) NOT NULL,
  `birthCountry` varchar(30) NOT NULL,
  `eyes` varchar(15) NOT NULL,
  `hair` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip` int(11) NOT NULL,
  `del_street` varchar(40) NOT NULL,
  `del_city` varchar(40) NOT NULL,
  `del_state` varchar(40) NOT NULL,
  `del_zip` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `phone_secondary` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `POC` varchar(60) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city_emerg` varchar(40) NOT NULL,
  `state_emerg` varchar(40) NOT NULL,
  `zip_emerg` varchar(15) NOT NULL,
  `relationship` varchar(15) NOT NULL,
  `emerg_phone` varchar(15) NOT NULL,
  `cell_phone` varchar(15) NOT NULL,
  `emerg_email` varchar(40) NOT NULL,
  `original_officer` varchar(3) NOT NULL,
  `renewal_officer` varchar(3) NOT NULL,
  `duplicate_officer` varchar(3) NOT NULL,
  `raise_officer` varchar(3) NOT NULL,
  `increase_officer` varchar(3) NOT NULL,
  `continuity_officer` varchar(3) NOT NULL,
  `original_qr` varchar(3) NOT NULL,
  `renewal_qr` varchar(3) NOT NULL,
  `duplicate_qr` varchar(3) NOT NULL,
  `raise_qr` varchar(3) NOT NULL,
  `increase_qr` varchar(3) NOT NULL,
  `continuity_qr` varchar(3) NOT NULL,
  `original_entry` varchar(3) NOT NULL,
  `renewal_entry` varchar(3) NOT NULL,
  `duplicate_entry` varchar(3) NOT NULL,
  `original_stcw` varchar(3) NOT NULL,
  `renewal_stcw` varchar(3) NOT NULL,
  `duplicate_stcw` varchar(3) NOT NULL,
  `raise_stcw` varchar(3) NOT NULL,
  `increase_stcw` varchar(3) NOT NULL,
  `description` text NOT NULL,
  `renewal_transaction` varchar(3) NOT NULL,
  `twic_receipt` varchar(3) NOT NULL,
  `twic_exempt` varchar(3) NOT NULL,
  `mos_yes` varchar(3) NOT NULL,
  `mos_no` varchar(3) NOT NULL,
  `drugs` varchar(3) NOT NULL,
  `convictions_statement` varchar(3) NOT NULL,
  `ndr_authorize` varchar(3) NOT NULL,
  `continuity` varchar(3) NOT NULL,
  `parental_consent` varchar(3) NOT NULL,
  `sse_authorize` varchar(3) NOT NULL,
  `3rdPartyName` varchar(40) NOT NULL,
  `medical_authorize` varchar(3) NOT NULL,
  `3rdPartyPOC` varchar(40) NOT NULL,
  `pq_authorize` varchar(3) NOT NULL,
  `3rdPartyStreet` varchar(40) NOT NULL,
  `3rdPartyCity` varchar(40) NOT NULL,
  `3rdPartyState` varchar(40) NOT NULL,
  `3rdPartyZip` varchar(15) NOT NULL,
  `processing_authorize` varchar(3) NOT NULL,
  `3rdPartyPhone` varchar(15) NOT NULL,
  `delivery_authorize` varchar(3) NOT NULL,
  `oath` varchar(3) NOT NULL,
  `e_signature` blob NOT NULL,
  PRIMARY KEY (`719b_id`),
  KEY `users_id` (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='719b' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `719b`
--

INSERT INTO `719b` (`719b_id`, `user_id`, `created`, `fname`, `mname`, `lname`, `suffix`, `alias`, `ssn`, `ref_num`, `arn`, `birthDate`, `nationality`, `birthCity`, `birthState`, `birthCountry`, `eyes`, `hair`, `address`, `city`, `state`, `zip`, `del_street`, `del_city`, `del_state`, `del_zip`, `phone`, `phone_secondary`, `email`, `POC`, `street`, `city_emerg`, `state_emerg`, `zip_emerg`, `relationship`, `emerg_phone`, `cell_phone`, `emerg_email`, `original_officer`, `renewal_officer`, `duplicate_officer`, `raise_officer`, `increase_officer`, `continuity_officer`, `original_qr`, `renewal_qr`, `duplicate_qr`, `raise_qr`, `increase_qr`, `continuity_qr`, `original_entry`, `renewal_entry`, `duplicate_entry`, `original_stcw`, `renewal_stcw`, `duplicate_stcw`, `raise_stcw`, `increase_stcw`, `description`, `renewal_transaction`, `twic_receipt`, `twic_exempt`, `mos_yes`, `mos_no`, `drugs`, `convictions_statement`, `ndr_authorize`, `continuity`, `parental_consent`, `sse_authorize`, `3rdPartyName`, `medical_authorize`, `3rdPartyPOC`, `pq_authorize`, `3rdPartyStreet`, `3rdPartyCity`, `3rdPartyState`, `3rdPartyZip`, `processing_authorize`, `3rdPartyPhone`, `delivery_authorize`, `oath`, `e_signature`) VALUES
(7, 10, 1387429180, 'Larry', 'Lee', 'Adams', 'II', '', '128-18-2828', 82828, 0, '02/09/1964', 'United States', 'Winchester', 'VA', 'United States', 'blue', 'bald', '235 Nightingale Ave', 'Stephens City', 'VA', 22727, '', '', '', '', '(828) 282-8288', '(828) 282-8282', 'ladams@aol.com', 'Barbara Adams', '118 Oliver Ct', 'Purcellville', 'VA', '72727', 'wife', '(727) 272-7277', '(727) 272-7277', 'badams@aol.com', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', '', '', '', '', 'I would like to apply for Master of Towing desil 1600 tons', '', 'yes', '', 'yes', '', 'no', '', 'yes', '', '', '', 'NMC', 'yes', 'Jeff', 'yes', '100 Forbes Dr', 'Martinsburg', 'WV', '72727', 'yes', '(727) 272-7272', 'yes', 'yes', 0x706879697363616c2077656c6c6e6573732e706466);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `719b`
--
ALTER TABLE `719b`
  ADD CONSTRAINT `719b_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
