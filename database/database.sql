-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 08:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `id` int(3) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `contractor_user_name` varchar(20) NOT NULL,
  `contractor_password` varchar(20) NOT NULL,
  `contractor_email` varchar(50) NOT NULL,
  `contractor_gender` enum('male','female','other') NOT NULL DEFAULT 'other',
  `contractor_experience` varchar(30) NOT NULL DEFAULT '1 year',
  `contractor_phone` bigint(20) NOT NULL,
  `contractor_state` varchar(50) NOT NULL,
  `contractor_city` varchar(50) NOT NULL,
  `contractor_address` text NOT NULL,
  `contractor_registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(3) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_description` text NOT NULL,
  `p_state` varchar(20) NOT NULL,
  `p_city` varchar(20) NOT NULL,
  `p_address` text NOT NULL,
  `p_latitude` float NOT NULL,
  `p_longitude` float NOT NULL,
  `project_creating_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `contractor_id` int(3) NOT NULL,
  `project_id` int(3) NOT NULL,
  `project_status` enum('incomplete','complete') NOT NULL DEFAULT 'incomplete',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(3) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `phone` bigint(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_gender` enum('male','female','other') NOT NULL DEFAULT 'other',
  `project_status` enum('pending','allocated') NOT NULL DEFAULT 'pending',
  `user_phone` bigint(15) NOT NULL,
  `user_state` varchar(20) NOT NULL,
  `user_city` varchar(20) NOT NULL,
  `user_address` text NOT NULL,
  `Registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `u_c_p_image`
--

CREATE TABLE `u_c_p_image` (
  `id` int(3) NOT NULL,
  `contractor_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `project_id` int(3) NOT NULL,
  `image` varchar(50) NOT NULL,
  `project_step` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `image_verification` enum('pending','verified') NOT NULL DEFAULT 'pending',
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verify_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `u_c_p_status`
--

CREATE TABLE `u_c_p_status` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `contractor_id` int(3) NOT NULL,
  `project_id` int(3) NOT NULL,
  `project_status` enum('pending','allocated') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `contractor_id` (`contractor_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_c_p_image`
--
ALTER TABLE `u_c_p_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_id` (`contractor_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `u_c_p_status`
--
ALTER TABLE `u_c_p_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `contractor_id` (`contractor_id`),
  ADD KEY `project_id` (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `u_c_p_image`
--
ALTER TABLE `u_c_p_image`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `u_c_p_status`
--
ALTER TABLE `u_c_p_status`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_status`
--
ALTER TABLE `project_status`
  ADD CONSTRAINT `project_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `project_status_ibfk_2` FOREIGN KEY (`contractor_id`) REFERENCES `contractor` (`id`),
  ADD CONSTRAINT `project_status_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `u_c_p_image`
--
ALTER TABLE `u_c_p_image`
  ADD CONSTRAINT `u_c_p_image_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractor` (`id`),
  ADD CONSTRAINT `u_c_p_image_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `u_c_p_image_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `u_c_p_status`
--
ALTER TABLE `u_c_p_status`
  ADD CONSTRAINT `u_c_p_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `u_c_p_status_ibfk_2` FOREIGN KEY (`contractor_id`) REFERENCES `contractor` (`id`),
  ADD CONSTRAINT `u_c_p_status_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
