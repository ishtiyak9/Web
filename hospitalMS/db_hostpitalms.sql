-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2018 at 12:44 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hostpitalms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_id` varchar(20) DEFAULT NULL,
  `patient_id` varchar(20) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `problem` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `create_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `appointment_id`, `patient_id`, `department_id`, `doctor_id`, `schedule_id`, `serial_no`, `date`, `problem`, `created_by`, `create_date`, `status`) VALUES
(42, 'ASOQ60KT', 'PEJNSXWO', 2, 1, 4, 2, '2016-07-03', 'Test', 2, '2016-05-13', 1),
(43, 'AAKE0PBS', 'PEJNSXWO', 2, 1, 4, 1, '2016-09-22', 'Test', 4, '2015-05-13', 1),
(44, 'AAVGOT04', 'PEJNSXWO', 2, 1, 5, 1, '2016-08-17', 'PEJNSXWO', 4, '2016-10-13', 1),
(45, 'AES1FCCN', 'P7OGZGC3', 2, 5, 2, 1, '2016-06-15', '', 2, '2016-07-15', 1),
(70, 'AC6C9BZ3', 'PEJNSXWC', 2, 1, 6, 1, '2016-11-22', 'TEST', 0, '2016-11-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `name`, `description`, `status`) VALUES
(1, 'Cardiology', 'This is a cardiology department.', 1),
(3, 'Neurology', 'This is neurology department.									', 2),
(9, 'Gynecology', '										This is gynecology department.																							', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(20) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `affliate` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_id`, `firstname`, `lastname`, `phone`, `mobile`, `address`, `sex`, `blood_group`, `date_of_birth`, `affliate`, `picture`, `created_by`, `create_date`, `status`) VALUES
(10, 'PDX3KY02', 'Raihan', 'Rahman', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'B-', '2016-09-29', NULL, 'assets/images/patient/2016-11-20/p12.png', 2, '2011-10-19', 1),
(11, 'PEJNSXWO', 'Kamal', 'Uddin', '', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'O-', '1988-10-02', NULL, 'assets/images/patient/2016-11-20/p11.png', 2, '2016-08-10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `available_days` varchar(50) DEFAULT NULL,
  `per_patient_time` time DEFAULT NULL,
  `serial_visibility_type` tinyint(4) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `doctor_id`, `start_time`, `end_time`, `available_days`, `per_patient_time`, `serial_visibility_type`, `status`) VALUES
(5, 10, '10:00:00', '14:00:00', 'Monday', '00:30:00', 2, 2),
(9, 11, '10:00:00', '20:00:00', 'Sunday', '00:30:00', 2, 1),
(11, 1, '11:00:00', '13:00:00', 'Sunday', '13:35:00', 1, 2),
(12, 12, '16:00:00', '22:00:00', 'Friday', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `user_role` tinyint(1) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `short_biography` text,
  `picture` varchar(50) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `email`, `password`, `user_role`, `designation`, `department_id`, `address`, `phone`, `mobile`, `short_biography`, `picture`, `specialist`, `date_of_birth`, `sex`, `blood_group`, `degree`, `created_by`, `create_date`, `update_date`, `status`) VALUES
(1, 'Samim', 'Khan', 'doctor@demo.com', '123', 2, '', 1, 'It is a long established fact that a reader will be distracted by the readable content ', '0123456798', '0123456798', '<p>It is a long established fact that a reader will be distracted by the readable content</p>', 'assets/images/doctor/2016-11-20/a1.png', '', '2016-10-12', 'Male', 'A+', '<p>It is a long established fact that a reader will be distracted by the readable content</p>', 2, '2016-11-20', NULL, 1),
(2, 'Hospital', 'Management System', 'admin@demo.com', '123', 1, '', 0, 'Dhaka', '01821742285', '01821742285', '', 'assets/images/doctor/2016-11-20/p.png', '', '1994-02-10', 'Male', 'B+', '', 2, '2017-01-14', NULL, 1),
(4, 'Md. Jabed', 'Mahmud', 'doctor@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Frontent Developer', 0, '98 Green Road, Farmgate, Dhaka-1215', '0123456798', '1234567890', '<p>TEST</p>', 'assets/images/representative/2016-11-20/p1.png', 'MBBS', '2016-10-11', 'Male', 'B-', '<p>TEST</p>', 2, '2016-10-15', NULL, 1),
(7, 'Jahed', 'Abdullah', 'tuhin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 'Seniro Doctor', 3, 'It is a long established fact that a reader will be distracted by the readable content ', '01234567980', '01234567980', '<p>It is a long established fact that a reader will be distracted by the readable content </p>', 'assets/images/doctor/2016-11-20/a.png', 'MBBS', '2016-10-11', 'Male', 'A+', '<p>It is a long established fact that a reader will be distracted by the readable content </p>', 2, '2016-11-20', NULL, 1),
(8, 'Naeem', 'Khan', 'naeem@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Frontent Developer', 0, 'Dhaka', '1234567890', '1234567890', '<p>sdfaasdfasdfs</p>', 'assets/images/doctor/2016-11-20/d1.png', '', '2016-10-10', 'Male', 'B+', '<p>It is a long established fact that a reader will be distracted by the readable content </p>', 2, '2016-11-20', NULL, 1),
(10, 'Jane ', 'Doe', 'jane@example.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'Doctor', 1, 'Dhaka, Bangladesh', '1234567890', '1234567890', '<p>Test</p>', 'assets/images/doctor/2016-11-20/d.png', 'surgeon', '1994-11-01', 'Male', 'B+', '', 2, '2016-11-20', NULL, 1),
(11, 'Zahirul', 'Islam', 'zahir@gmail.com', NULL, 2, 'Doctor', 9, 'rajshahi-6204', NULL, '017xxxxxxxx', NULL, NULL, 'sergeon', '1960-01-12', 'Male', 'AB+', NULL, NULL, NULL, NULL, 2),
(12, 'John ', 'Doe', 'john@gmail.com', NULL, 2, 'Doctor', 3, 'new-jersy, America', NULL, '098xxxxxxxx', NULL, NULL, 'Nerologist', '1970-12-23', 'Male', 'O+', NULL, NULL, NULL, NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
