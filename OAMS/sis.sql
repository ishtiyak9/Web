-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 07:16 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', '147'),
('admin', '789'),
('tuhin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `attd_tbl`
--

CREATE TABLE `attd_tbl` (
  `std_id` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `attendance` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attd_tbl`
--

INSERT INTO `attd_tbl` (`std_id`, `semester`, `subject`, `date`, `attendance`, `id`) VALUES
(342, 'FIRST', 's', '2015-11-11', 'P', 1),
(342, 'FIRST', 'd', '2015-11-16', 'A', 2),
(456, 'FIRST', 'd', '2015-12-12', 'A', 4),
(487, 'FIRST', 'a', '2015-11-11', 'A', 5),
(678, 'SECOND', 'w', '2015-11-11', 'A', 6),
(342, 'FIRST', 'a', '2017-03-02', 'P', 7),
(456, 'FIRST', 'a', '2017-03-02', 'A', 8),
(487, 'FIRST', 'a', '2017-03-02', 'A', 9),
(342, 'FIRST', 'd', '2017-03-06', 'P', 10),
(456, 'FIRST', 'd', '2017-03-06', 'A', 11),
(487, 'FIRST', 'd', '2017-03-06', 'A', 12),
(342, 'FIRST', 'a', '2017-04-15', 'A', 25),
(456, 'FIRST', 'a', '2017-04-15', 'P', 26),
(487, 'FIRST', 'a', '2017-04-15', 'P', 27);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `std_id` varchar(50) NOT NULL,
  `subj_id` varchar(50) NOT NULL,
  `attendance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`std_id`, `subj_id`, `attendance`) VALUES
('a', 'b', 'P'),
('a', 'b', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `bhup`
--

CREATE TABLE `bhup` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `rn` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `pass_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bhup`
--

INSERT INTO `bhup` (`fname`, `lname`, `session`, `rn`, `branch`, `year`, `semester`, `dob`, `address`, `id`, `pass_code`) VALUES
('H', 'H', 'Spring 2013', '342', 'CSE', 'FIRST', 'FIRST', '11022001', 'SWE', 1, 0),
('R', 'G', 'Spring 2012', '365', 'CSE', 'FIRST', 'ELEVENTH', '19122006', 'ER', 2, 0),
('Y', 'Y', '2013', '367', 'ET&T', 'THIRD', 'FIFTH', '11062000', 'WE', 3, 0),
('W', 'R', '2008', '456', 'CSE', 'FIRST', 'FIRST', '25032003', 'FGH', 4, 0),
('P', 'O', 'Spring 2015', '487', 'CSE', 'FIRST', 'FIRST', '23112004', 'XC', 5, 0),
('A', 'A', 'Spring 2015', '643', 'MECHNICAL', 'SECOND', 'FIFTH', '12112005', 'QW', 6, 0),
('D', 'F', 'Spring 2011', '678', 'CSE', 'SECOND', 'SECOND', '15072008', 'RTY', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `content`, `post_id`) VALUES
(12, 'heloo', 12),
(11, 'astig', 13),
(10, 'hi', 13),
(9, 'jkevlorayna@gmail.com', 10),
(13, 'sdf', 16);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `content` varchar(300) NOT NULL,
  `comsubid` int(11) NOT NULL,
  `images` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `name`, `content`, `comsubid`, `images`) VALUES
(34, 'w', 't', 27, ''),
(35, 'a', 's', 0, ''),
(36, 'a', 'f', 35, ''),
(37, 'a', 'f', 35, '');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `dept`) VALUES
(1, 'CSE'),
(2, 'EEE'),
(3, 'BBA'),
(4, 'LAW');

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE `first` (
  `ID` int(11) NOT NULL,
  `a` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `s` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `total_credit` int(11) NOT NULL,
  `fifty_percent_cdt` float NOT NULL,
  `earned_credit` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `exam_session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images_tbl`
--

CREATE TABLE `images_tbl` (
  `images_id` int(11) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `submission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark_tbl`
--

CREATE TABLE `mark_tbl` (
  `std_id` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sub_credit` int(11) NOT NULL,
  `earned_credit` int(11) NOT NULL,
  `mid` int(50) NOT NULL,
  `final` int(50) NOT NULL,
  `other` int(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `gradepoint` float NOT NULL,
  `exam_session` varchar(50) NOT NULL,
  `active_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark_tbl`
--

INSERT INTO `mark_tbl` (`std_id`, `semester`, `subject`, `sub_credit`, `earned_credit`, `mid`, `final`, `other`, `total`, `grade`, `gradepoint`, `exam_session`, `active_code`) VALUES
(342, 'FIRST', 'a', 3, 3, 25, 25, 25, '75', 'A', 3.75, 'Summer 2014', 0),
(342, 'FIRST', 'd', 3, 3, 25, 35, 20, '80', 'A+', 4, 'Summer 2014', 0),
(342, 'FIRST', 's', 3, 3, 30, 40, 20, '90', 'A+', 4, 'Summer 2014', 0),
(456, 'FIRST', 'a', 3, 3, 21, 26, 23, '70', 'A-', 3.5, 'Summer 2014', 0),
(456, 'FIRST', 'd', 3, 3, 20, 20, 20, '60', 'B', 3, 'Summer 2014', 0),
(456, 'FIRST', 's', 3, 3, 30, 10, 25, '65', 'B+', 3.25, 'Summer 2014', 0),
(342, 'FIRST', 'a', 3, 3, 10, 20, 30, '60', 'B', 3, 'Fall 2016', 0),
(456, 'FIRST', 'a', 3, 3, 20, 30, 40, '90', 'A+', 4, 'Fall 2016', 0),
(487, 'FIRST', 'a', 3, 0, 10, 0, 10, '20', 'F', 0, 'Fall 2016', 0),
(678, 'SECOND', 'w', 3, 3, 10, 0, 30, '40', 'D', 2, 'Summer 2014', 0),
(678, 'SECOND', 'x', 3, 3, 30, 0, 30, '60', 'B', 3, 'Summer 2014', 0),
(678, 'SECOND', 'z', 3, 3, 30, 0, 30, '60', 'B', 3, 'Summer 2014', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `comment`, `status`, `subject`) VALUES
(1, 'tuhin', 1, ''),
(2, 'shohidul', 1, ''),
(3, 'shahidul', 1, ''),
(4, 'salman', 1, ''),
(5, 'jhvjh', 1, ''),
(6, 'jkkj', 1, ''),
(7, 'a', 1, ''),
(8, 'd', 1, ''),
(9, 't', 1, ''),
(10, 'y', 1, ''),
(11, 'v', 1, ''),
(12, 's', 1, ''),
(13, 'q', 1, ''),
(14, 'y', 1, ''),
(15, 'd', 1, ''),
(16, 'a', 1, ''),
(17, 'w', 1, ''),
(23, 'sifat', 1, ''),
(24, 'ret', 1, ''),
(25, 'sisir', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `content`) VALUES
(1, 'hello world'),
(10, 'hi im john kevin lorayna'),
(12, 'stephanie villanueva hi'),
(13, 'sourcecodester.com'),
(14, 'iron man 3'),
(15, 'i am tuhin'),
(16, 'i am tuhin');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `qno` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `A` varchar(10) NOT NULL,
  `B` varchar(10) NOT NULL,
  `C` varchar(10) NOT NULL,
  `D` varchar(10) NOT NULL,
  `ans` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qno`, `subject`, `question`, `A`, `B`, `C`, `D`, `ans`) VALUES
(1, 'cse', 'apple is', 'red', 'green', 'blue', 'yellow', 'A'),
(2, 'cse', 'orange is', 'red', 'green', 'orange', 'blue', 'C'),
(3, 'cse', 'sky is', 'blue', 'white', 'grey', 'vilet', 'A'),
(4, 's', 'apple is', 'blue', 'green', 'red', 'white', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_blank`
--

CREATE TABLE `quiz_blank` (
  `qno` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_blank`
--

INSERT INTO `quiz_blank` (`qno`, `subject`, `question`, `ans`) VALUES
(31, 'cse', 'what is your name?', 'tuhin'),
(32, 'cse', 'what is a cow?', 'animal'),
(33, 'cse', 'what is it?', 'book');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_tf`
--

CREATE TABLE `quiz_tf` (
  `qno` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `question` varchar(250) NOT NULL,
  `A` varchar(10) NOT NULL,
  `B` varchar(10) NOT NULL,
  `ans` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_tf`
--

INSERT INTO `quiz_tf` (`qno`, `subject`, `question`, `A`, `B`, `ans`) VALUES
(5, 'cse', 'i am', 'True', 'False', 'A'),
(6, 'cse', 'ink is black', 'True', 'False', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `mark` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `mark`) VALUES
(342, 2),
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `second`
--

CREATE TABLE `second` (
  `ID` int(11) NOT NULL,
  `w` varchar(20) NOT NULL,
  `x` varchar(20) NOT NULL,
  `z` varchar(20) NOT NULL,
  `cgpa` varchar(20) NOT NULL,
  `total_credit` int(11) NOT NULL,
  `fifty_percent_cdt` float NOT NULL,
  `earned_credit` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `exam_session` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 'FIRST'),
(2, 'SECOND'),
(3, 'THIRD');

-- --------------------------------------------------------

--
-- Table structure for table `signup_tbl`
--

CREATE TABLE `signup_tbl` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_tbl`
--

INSERT INTO `signup_tbl` (`username`, `email`, `password`, `code`) VALUES
('342', 'tuhin.edru@gmail.com', '123', 1),
('456', 'tuhin.edru4@gmail.com', '456', 2),
('567', 'tuhin.edru9@gmail.com', '125', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub_code` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_credit` float NOT NULL,
  `dept` varchar(50) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_code`, `sub_name`, `sub_credit`, `dept`, `semester`) VALUES
(1, 'cse-111', 'Basic Computer', 3, 'CSE', 'FIRST'),
(2, 'cse-112', 'Basic Computer Lab', 1, 'CSE', 'SECOND'),
(3, 'math-111', 'Math', 3, 'EEE', 'FIRST');

-- --------------------------------------------------------

--
-- Table structure for table `sub_tbl`
--

CREATE TABLE `sub_tbl` (
  `subject_code` varchar(110) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `sub_credit` int(11) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_tbl`
--

INSERT INTO `sub_tbl` (`subject_code`, `subject_name`, `sub_credit`, `teacher_name`, `teacher_id`, `dept_name`, `semester`) VALUES
('1', 's', 3, 'tuhin', '04', 'CSE', 'FIRST'),
('2', 'w', 3, 'tuhin', '04', 'CSE', 'SECOND'),
('4', 'a', 3, 't', '05', 'CSE', 'FIRST'),
('5', 'x', 3, 't', '05', 'CSE', 'SECOND'),
('6', 'z', 3, 't', '05', 'CSE', 'SECOND'),
('cse-123', 'e', 2, 't', '05', 'CSE', 'FIRST'),
('cse-234', 'x', 1, 't', '05', 'CSE', 'FIRST'),
('cse-345', 'y', 2, 't', '05', 'CSE', 'FIRST'),
('cse-112', 'Basic Computer Lab', 1, 't', '05', 'CSE', 'SECOND');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` float NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`, `date`) VALUES
(2, '75670-img7.jpg', 'image/jpeg', 1188.36, '0000-00-00 00:00:00'),
(3, '28155-img8.jpg', 'image/jpeg', 696.158, '0000-00-00 00:00:00'),
(4, '66724-26.01.2017-routine-spring-17-(v-4.0).pdf', 'applicatio', 444.443, '0000-00-00 00:00:00'),
(5, '9251-3.pptx', 'applicatio', 741.47, '0000-00-00 00:00:00'),
(6, '66767-new-text-document.txt', 'text/plain', 1.07812, '0000-00-00 00:00:00'),
(7, '72703-os-f-1.docx', 'applicatio', 1081.78, '0000-00-00 00:00:00'),
(9, '25629-error.txt', 'text/plain', 2.10645, '17-03-15 1489561204');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `teacher_name`, `teacher_id`, `dept_name`, `dob`, `address`, `phone_no`) VALUES
(4, 't', '05', 'CSE', '2012-12-12', 'asd', '123'),
(5, 'tuhin', '04', 'CSE', '2012-12-12', 'no', '123'),
(6, 'Krishna Ray', '06', 'EEE', '2012-02-02', 'vu', '123'),
(12, 'Meraj Ali', '01', 'CSE', '1988-01-01', 'vu', '123'),
(13, 'Faisal Imran', '02', 'CSE', '1988-01-01', 'vu', '123'),
(14, 'Ashraful Islam', '03', 'EEE', '1988-01-01', 'vu', '123'),
(15, 'Sazzad Hossain', '07', 'EEE', '1988-01-01', 'vu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_signup_tbl`
--

CREATE TABLE `teacher_signup_tbl` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_signup_tbl`
--

INSERT INTO `teacher_signup_tbl` (`username`, `email`, `password`) VALUES
('789', 's@gmail.com', '456'),
('04', 'tuhin.edru@yahoo.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `threaded_comments`
--

CREATE TABLE `threaded_comments` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `threaded_comments`
--

INSERT INTO `threaded_comments` (`id`, `author`, `comment`, `created_at`, `parent_id`) VALUES
(7, 'a', 'hi', '2017-03-06 12:06:47', 0),
(8, 'b', 'hello', '2017-03-06 12:07:16', 7),
(9, 'c', 'hii', '2017-03-06 12:08:07', 7),
(10, 'qer', 'df', '2017-03-06 16:21:18', 7),
(11, 'w', 'w', '2017-03-06 16:21:41', 8),
(12, 'r', 'fg', '2017-03-06 16:36:16', 10),
(13, 'q', 'we', '2017-03-06 16:48:52', 12),
(14, 't', 'hkjhlj', '2017-03-07 09:23:38', 7),
(15, 'u', 'jkhfeksd', '2017-03-07 09:23:58', 14);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `name` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`name`, `photo`) VALUES
('hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `com_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `com_code`) VALUES
(6, 'tuhin', 't@gmail.com', '789', 'dcfc251d3a34f1a0d3e98be0c02912eb');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activationcode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `name`, `email`, `password`, `activationcode`, `status`, `postingdate`) VALUES
(3, 'Anuj', 'anuj.lpu1@gmail.com', 'Test@123', 'e9f2906ad1fda04297593d2095eaf4f7', 1, '2016-08-20 04:13:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attd_tbl`
--
ALTER TABLE `attd_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhup`
--
ALTER TABLE `bhup`
  ADD PRIMARY KEY (`rn`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `images_tbl`
--
ALTER TABLE `images_tbl`
  ADD PRIMARY KEY (`images_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `quiz_blank`
--
ALTER TABLE `quiz_blank`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `quiz_tf`
--
ALTER TABLE `quiz_tf`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `signup_tbl`
--
ALTER TABLE `signup_tbl`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `threaded_comments`
--
ALTER TABLE `threaded_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attd_tbl`
--
ALTER TABLE `attd_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `images_tbl`
--
ALTER TABLE `images_tbl`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `quiz_blank`
--
ALTER TABLE `quiz_blank`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `quiz_tf`
--
ALTER TABLE `quiz_tf`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `signup_tbl`
--
ALTER TABLE `signup_tbl`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `threaded_comments`
--
ALTER TABLE `threaded_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
