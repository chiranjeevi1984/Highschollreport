-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 02:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `created_at`, `updated_at`) VALUES
(1, 'SSC', '0000-00-00 00:00:00', '2016-10-17 12:17:05'),
(2, '9 th', '0000-00-00 00:00:00', '2016-10-19 05:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` varchar(250) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `mark` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_id`, `subject_id`, `class_id`, `teacher_name`, `mark`, `created_at`, `updated_at`) VALUES
(21, 1, '1', '1', 'Chiranjeevi', '55', '0000-00-00 00:00:00', '2016-10-19 05:43:34'),
(22, 3, '2', '1', 'Chiranjeevi', '60', '0000-00-00 00:00:00', '2016-10-19 05:43:26'),
(25, 8, '1', '1', 'Chiranjeevi', '75', '0000-00-00 00:00:00', '2016-10-19 05:43:23'),
(26, 1, '2', '1', 'Chiranjeevi', '60', '0000-00-00 00:00:00', '2016-10-19 05:43:20'),
(27, 3, '1', '1', 'Chiranjeevi', '55', '0000-00-00 00:00:00', '2016-10-19 05:43:17'),
(28, 7, '1', '1', 'Chiranjeevi', '67', '0000-00-00 00:00:00', '2016-10-19 05:43:14'),
(29, 9, '1', '2', 'Chiranjeevi', '80', '0000-00-00 00:00:00', '2016-10-19 09:57:13'),
(30, 10, '3', '2', 'Chiranjeevi', '67', '0000-00-00 00:00:00', '2016-10-19 09:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1472554842),
('m130524_201442_init', 1472554849);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_regnum` varchar(250) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `mobile_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `student_regnum`, `father_name`, `address`, `city`, `state`, `country`, `pin_code`, `mobile_num`, `email`, `created_at`) VALUES
(1, 'Balaji', 'SSC01', 'balakumar', 'Chennai', 'Chennai', 'TN', 'India', '600002', '9632587452', 'balaji@gmail.com', '2016-08-30 06:28:23'),
(3, 'Hari', 'SSC03', 'Hari kumar', '', '', '', '', '', '987562143', 'hari@gmail.com', '2016-08-30 06:51:11'),
(7, 'Raju', 'SSC04', 'Raju Kumar', '', '', '', '', '', '9632587455', 'raju@gmail.com', '2016-09-03 08:53:31'),
(8, 'Gopi', 'SSC02', 'Gopi Kumar', '', '', '', '', '', '9875563658', 'gopi@gmail.com', '2016-09-03 12:23:35'),
(9, 'Ravi', 'IX01', 'Ravikumar', 'Chennai', 'Chennai', 'TN', 'India', '600002', '9658745255', 'ravikumar@gmail.com', '2016-10-19 09:43:19'),
(10, 'John', 'IX02', 'John wirte', 'Chennai', 'Chennai', 'TN', 'India', '600053', '9865478546', 'John@gmail.com', '2016-10-19 09:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, 'English', '0000-00-00 00:00:00', '2016-08-31 01:55:33'),
(2, 'Maths', '0000-00-00 00:00:00', '2016-08-31 03:15:59'),
(3, 'Physics', '0000-00-00 00:00:00', '2016-10-19 05:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'teacher', 'BZuGgeTkteylHI2QNayMsro1YWkFivD1', '$2y$13$falFCROw5oJywtZ/Dn4DyO/AzZHby/EmqAg9INq/WGcFXAHd4Legi', NULL, 'test@gmail.com', 10, 1472554901, 1472554901);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marks_ibfk_1` (`student_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
