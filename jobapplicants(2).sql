-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 03:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobapplicants`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `dateofbirth` date NOT NULL,
  `coverletter` longtext NOT NULL,
  `cat_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `yearsofexperience` int(11) NOT NULL,
  `notes` longtext NOT NULL,
  `skills` int(11) NOT NULL,
  `education` int(11) NOT NULL,
  `ratingtotal` int(11) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`ID`, `name`, `email`, `phonenumber`, `gender`, `dateofbirth`, `coverletter`, `cat_id`, `branch_id`, `yearsofexperience`, `notes`, `skills`, `education`, `ratingtotal`, `cv`, `size`, `downloads`) VALUES
(15, 'Mutebi David Trevor', 'jeje@gmail.com', '0755978800', 'male', '1998-07-28', 'sample', 13, 1, 1, 'love God', 1, 1, 3, 'cvs/Mutebi David CV.docx', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `branch_address` varchar(100) NOT NULL,
  `branch_contact` varchar(50) NOT NULL,
  `skin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_address`, `branch_contact`, `skin`) VALUES
(1, 'Administration Area', 'Kampala,Uganda', '0788042999', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `itemdesc` longtext NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `itemdesc`, `status`) VALUES
(13, 'Software Engineering', 'Needs a Software Engineer good with Docker', 'open'),
(14, 'Graphics Design', 'Good with Adobe Premier', 'closed'),
(15, 'Landscape Engineer', 'With Good Background of Math and Physics', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(10, 7, 'has logged in the system at ', '2020-04-30 12:58:11'),
(11, 7, 'has logged in the system at ', '2020-04-30 13:45:08'),
(12, 7, 'added 11000 of B001/2020/001', '2020-04-30 13:57:14'),
(13, 12, 'has logged in the system at ', '2020-05-01 06:52:24'),
(14, 12, 'has logged out the system at ', '2020-05-01 06:52:33'),
(15, 21, 'has logged in the system at ', '2020-05-01 07:05:24'),
(16, 21, 'added 10 of Bitcoin', '2020-05-01 07:11:29'),
(17, 21, 'added 33,000,000 of Bitcoin', '2020-05-01 07:55:56'),
(18, 21, 'added 33000000 of Bitcoin', '2020-05-01 07:56:16'),
(19, 21, 'has logged out the system at ', '2020-05-01 11:46:04'),
(20, 12, 'has logged in the system at ', '2020-05-01 11:50:26'),
(21, 12, 'has logged in the system at ', '2020-05-01 11:53:10'),
(22, 22, 'has logged in the system at ', '2020-05-01 13:06:24'),
(23, 12, 'has logged in the system at ', '2020-05-01 13:58:25'),
(24, 12, 'has logged in the system at ', '2020-05-01 14:11:15'),
(25, 12, 'has logged out the system at ', '2020-05-01 14:11:19'),
(26, 12, 'has logged in the system at ', '2020-05-01 14:16:21'),
(27, 12, 'has logged out the system at ', '2020-05-01 14:16:24'),
(28, 12, 'has logged in the system at ', '2020-05-01 14:18:29'),
(29, 12, 'has logged out the system at ', '2020-05-01 14:18:48'),
(30, 12, 'has logged in the system at ', '2020-05-01 14:23:50'),
(31, 12, 'has logged in the system at ', '2020-05-04 05:32:05'),
(32, 12, 'has logged out the system at ', '2020-05-04 08:32:50'),
(33, 26, 'has logged in the system at ', '2020-05-04 08:43:54'),
(34, 26, 'has logged out the system at ', '2020-05-04 08:48:51'),
(35, 12, 'has logged in the system at ', '2020-07-14 19:20:53'),
(36, 12, 'has logged in the system at ', '2020-07-14 19:47:07'),
(37, 12, 'has logged in the system at ', '2020-07-14 20:05:29'),
(38, 1, 'has logged out the system at ', '2020-07-14 22:05:57'),
(39, 12, 'has logged in the system at ', '2020-07-14 22:08:18'),
(40, 12, 'has logged out the system at ', '2020-07-14 23:07:35'),
(41, 12, 'has logged in the system at ', '2020-07-15 01:33:20'),
(42, 12, 'has logged out the system at ', '2020-07-15 01:47:20'),
(43, 12, 'has logged in the system at ', '2020-07-15 01:55:26'),
(44, 12, 'has logged out the system at ', '2020-07-15 02:01:42'),
(45, 12, 'has logged in the system at ', '2020-07-15 03:49:40'),
(46, 12, 'has logged out the system at ', '2020-07-15 04:35:58'),
(47, 12, 'has logged in the system at ', '2020-07-15 04:55:08'),
(48, 12, 'has logged out the system at ', '2020-07-15 05:50:38'),
(49, 12, 'has logged in the system at ', '2020-07-21 20:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `payable_for` varchar(10) NOT NULL,
  `term` varchar(11) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `payment_start` date NOT NULL,
  `down` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `interest` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `phonenumber`, `birthday`, `gender`, `city`, `password`, `name`, `status`, `branch_id`) VALUES
(1, 'admin', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'John Smith', 'active', 1),
(4, 'user', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Mona Lisa', 'active', 2),
(6, 'administrator', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Giu Matthew', 'active', 0),
(7, 'William', 'wmutaabazi@gmail.com', '0775210211', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Mr.Mutaabazi William', 'active', 5),
(8, '', 'mdavid.trevor@gmail.com', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', '', 'active', 0),
(9, '', 'bayigalynn@gmail.com', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', '', 'active', 0),
(10, '', 'mdavid.trevor@gmail.com', '0775210211', '0000-00-00', 'male', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', '', 'active', 0),
(11, 'Obotebtc', 'mdavid.trevor@gmail.com', '0788042999', '0000-00-00', 'male', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Dr.Obote', 'active', 0),
(12, 'miltonbtc', 'rolex@rolex.com', '0775210211', '0000-00-00', 'male', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Dr.Milton', 'active', 1),
(13, 'Museveni', 'mdavid.trevor@gmail.com', '0775210211', '0000-00-00', 'male', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Yoweri', 'active', 1),
(14, '', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e', '', 'active', 1),
(15, '', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e', '', 'active', 1),
(16, '', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e', '', 'active', 1),
(17, '', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e', '', 'active', 1),
(18, '', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e', '', 'active', 1),
(19, '', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e', '', 'active', 1),
(20, '', '', '', '0000-00-00', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e', '', 'active', 1),
(21, 'Kenyatta', 'mdavid.trevor@gmail.com', '0775210211', '0000-00-00', 'male', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Kenyatta Uhuru', 'active', 1),
(22, 'rbtc', 'herbertrobert@gmail.com', '0788123456', '0000-00-00', 'male', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Herbert Robert', 'active', 1),
(23, 'Trevorbtc', 'herbertrobert@gmail.com', '0788042999', '1998-07-28', 'male', '', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Mutebi David Trevor', 'active', 1),
(24, 'miltonbtc', 'mwilliam@gmail.com', '0775210211', '1998-07-28', 'male', 'Areas of the World', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Mutebi David Trevor', 'active', 1),
(25, 'richbtc', 'wmutaabazi@gmail.com', '0775210211', '1998-07-28', 'male', 'Areas of the World', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Mulindwa Joseph', 'active', 1),
(26, 'btc1', 'mdavid.trevor@gmail.com', '0775210211', '1980-02-01', 'male', 'Areas of the World', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Mutebi David Trevor', 'active', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
