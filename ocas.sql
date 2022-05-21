-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 05:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocas`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `pcode` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `date_appointment` date NOT NULL,
  `status` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pcode`, `fullname`, `email`, `phone`, `date_appointment`, `status`, `date_created`) VALUES
(1, 'PATIENT-9377', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-17', 'DONE', '2022-05-17'),
(2, 'PATIENT-7584', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-17', 'ACTIVE', '2022-05-17'),
(3, 'PATIENT-8993', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-17', 'NO SHOW', '2022-05-17'),
(4, 'PATIENT-7077', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-18', 'ACTIVE', '2022-05-17'),
(5, 'PATIENT-8241', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-19', 'ACTIVE', '2022-05-17'),
(6, 'PATIENT-9105', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-20', 'ACTIVE', '2022-05-17'),
(7, 'PATIENT-9922', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-18', 'ACTIVE', '2022-05-17'),
(8, 'PATIENT-6900', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-17', 'NO SHOW', '2022-05-17'),
(9, 'PATIENT-9095', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-18', 'RE-SCHEDULED', '2022-05-17'),
(10, 'PATIENT-9404', 'cHECK', 'tricore012@gmail.com', '09166513189', '2022-05-18', 'ACTIVE', '2022-05-17'),
(11, 'PATIENT-9399', 'Gerald Mico Salvador Facistol', 'tricore012@gmail.com', '09166513189', '2022-05-21', 'RE-SCHEDULED', '2022-05-17'),
(12, 'PATIENT-9764', 'Jerryll Silverio', 'jeryllsilverio3@gmail.com', '09166513189', '2022-05-20', 'RE-SCHEDULED', '2022-05-19'),
(13, 'PATIENT-9302', 'Robelyn Time', 'lyzatime@gmail.com', '09166513189', '2022-05-20', 'RE-SCHEDULED', '2022-05-19'),
(14, 'PATIENT-8333', 'Roco Nacino', 'tricore012@gmail.com', '09166513189', '2022-05-22', 'RE-SCHEDULED', '2022-05-19'),
(15, 'PATIENT-8280', 'Gerald Mico Salvador Facistol', 'wedotaph@gmail.com', '09166513189', '2022-05-19', 'NO SHOW', '2022-05-19'),
(16, 'PATIENT-8278', 'Robelyn Time', 'wedotaph@gmail.com', '09166513189', '2022-05-19', 'DONE', '2022-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `notepad`
--

CREATE TABLE `notepad` (
  `id` int(11) NOT NULL,
  `pid` int(250) NOT NULL,
  `pcode` varchar(250) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notepad`
--

INSERT INTO `notepad` (`id`, `pid`, `pcode`, `note`) VALUES
(1, 1, 'PATIENT-9377', 'resita is bioflu \r\ncoz of disease is the inflamation of lungs '),
(2, 2, 'PATIENT-7584', 'bIOGESIC');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(1, 'PATIENT-9377', '2022-05-17 00:00:00', '2022-05-17 00:00:00'),
(2, 'PATIENT-7584', '2022-05-17 00:00:00', '2022-05-17 00:00:00'),
(3, 'PATIENT-8993', '2022-05-17 00:00:00', '2022-05-17 00:00:00'),
(4, 'PATIENT-7077', '2022-05-18 00:00:00', '2022-05-18 00:00:00'),
(5, 'PATIENT-8241', '2022-05-19 00:00:00', '2022-05-19 00:00:00'),
(6, 'PATIENT-9105', '2022-05-20 00:00:00', '2022-05-20 00:00:00'),
(7, 'PATIENT-9922', '2022-05-18 00:00:00', '2022-05-18 00:00:00'),
(8, 'PATIENT-6900', '2022-05-17 00:00:00', '2022-05-17 00:00:00'),
(9, 'PATIENT-9095', '2022-05-18 00:00:00', '2022-05-18 00:00:00'),
(10, 'PATIENT-9404', '2022-05-18 00:00:00', '2022-05-18 00:00:00'),
(11, 'PATIENT-9399', '2022-05-21 00:00:00', '2022-05-21 00:00:00'),
(12, 'PATIENT-9764', '2022-05-20 00:00:00', '2022-05-20 00:00:00'),
(13, 'PATIENT-9302', '2022-05-20 00:00:00', '2022-05-20 00:00:00'),
(14, 'PATIENT-8333', '2022-05-22 00:00:00', '2022-05-22 00:00:00'),
(15, 'PATIENT-8280', '2022-05-19 00:00:00', '2022-05-19 00:00:00'),
(16, 'PATIENT-8278', '2022-05-19 00:00:00', '2022-05-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `designation`) VALUES
(2, 'admin', 'admin', 'drugmin', 'DOCTOR'),
(3, 'user', 'user', 'user', 'STAFF'),
(4, 'Robelyn', 'admin', 'Robelyn Time', 'DOCTOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notepad`
--
ALTER TABLE `notepad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notepad`
--
ALTER TABLE `notepad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
