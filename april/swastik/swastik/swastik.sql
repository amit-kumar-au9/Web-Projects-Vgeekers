-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 07:22 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swastik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, '', ''),
(2, 'school@123', 'df072341211a8481393bf8f016c410a4');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` text NOT NULL,
  `student_phone` varchar(10) NOT NULL,
  `student_dob` date NOT NULL,
  `student_gender` enum('male','female') NOT NULL,
  `student_class` tinyint(4) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `test_type` text NOT NULL,
  `school_name` text NOT NULL,
  `school_address` text NOT NULL,
  `father_phone_no` varchar(10) NOT NULL,
  `mother_phone_no` varchar(10) NOT NULL,
  `father_email` text NOT NULL,
  `where_did_you` text NOT NULL,
  `is_payment` enum('initiated','processing','success','failed') NOT NULL,
  `phase_flag` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `student_name`, `student_email`, `student_phone`, `student_dob`, `student_gender`, `student_class`, `address1`, `address2`, `country`, `state`, `district`, `city`, `pincode`, `test_date`, `test_type`, `school_name`, `school_address`, `father_phone_no`, `mother_phone_no`, `father_email`, `where_did_you`, `is_payment`, `phase_flag`) VALUES
(1, 'Amit Kumar', 'as@sf', '8218512255', '2020-02-01', 'male', 9, 's', 'b', 'j', 'j', 'j', 'j', 555555, '0000-00-00', 'Online', 'Amit Kumar', 'sfd', '8888888888', 'Amit Kumar', 'fdd@dd', 'df', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
