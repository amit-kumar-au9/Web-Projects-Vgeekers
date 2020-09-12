-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 05:11 PM
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
-- Database: `gurukul`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `aboutUs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutUs`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat.');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `studentid` text NOT NULL,
  `date` text NOT NULL,
  `attendance` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `studentid`, `date`, `attendance`) VALUES
(1, '1', '13/03/2020', '0'),
(2, '1', '14/03/2020', '1'),
(3, '1', '15/03/2020', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `lname`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'Amit', 'Kumar', '08218512255', 'amitkumar.developer1@gmail.com', 'Subject ', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `imagelink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `homeworkid` int(11) NOT NULL,
  `date` text NOT NULL,
  `class` text NOT NULL,
  `batch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`homeworkid`, `date`, `class`, `batch`) VALUES
(1, '01/01/2020', '12', 'Morning'),
(2, '14/02/2020', '9', 'Afternoon');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notification` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification`, `date`) VALUES
(1, 'notification 1', '2020-03-12 22:38:26'),
(2, 'notification 2', '2020-03-12 22:38:26'),
(3, 'dfdsf', '2020-03-13 23:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `phone`, `query`) VALUES
(1, 'amit', 'amitkumar.developer1@gmail.com', '8218512255', 'Query'),
(2, 'amit', 'amitkumar.developer1@gmail.com', '8218512255', 'dfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `homeworkid` text NOT NULL,
  `question` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `homeworkid`, `question`, `link`) VALUES
(1, '1', 'question 1', ''),
(2, '1', 'question 2', ''),
(3, '1', '', 'homework/4.jpg'),
(4, '1', 'question 4', ''),
(5, '1', '', 'homework/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `studentid` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `class` text NOT NULL,
  `batch` enum('Morning','Afternoon','Evening') NOT NULL,
  `password` text NOT NULL,
  `validate` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`studentid`, `name`, `email`, `phone`, `class`, `batch`, `password`, `validate`) VALUES
(1, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(2, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(3, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(4, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(5, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(6, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(7, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(8, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(9, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(10, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(11, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1'),
(12, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', '12', 'Morning', 'amit@123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `teacherid` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`teacherid`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '8218512255', 'Hno. 48 Lane no. 2 Shantipuram , Milap Nagar, Dhandera Phatak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`homeworkid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  ADD PRIMARY KEY (`teacherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `homeworkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_detail`
--
ALTER TABLE `student_detail`
  MODIFY `studentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  MODIFY `teacherid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
