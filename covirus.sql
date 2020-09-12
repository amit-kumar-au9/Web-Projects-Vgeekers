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
-- Database: `covirus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin_admin@gmail.com', 'a3175a452c7a8fea80c62a198a40f6c9');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `userId` int(200) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`userId`, `name`, `mobile`, `email`, `query`) VALUES
(2, 'Amit123', '1234568890', 'amit123@gmail.com', 'gdfgdfg'),
(6, 'mehul', '8934023658', 'gargmehulmvg@gmail.com', 'query ');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `stateName` text NOT NULL,
  `currentSick` text NOT NULL,
  `infected` text NOT NULL,
  `recovered` text NOT NULL,
  `dead` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `stateName`, `currentSick`, `infected`, `recovered`, `dead`) VALUES
(1, 'Delhi', '100', '19', '18', '2'),
(2, 'Uttar Pardesh', '453', '32', '43', '21'),
(3, 'Haryana', '7575', '636', '63', '32'),
(4, 'Goa', '33', '143', '32', '8'),
(8, 'Madhya Pradesh', '150', '15', '3', '1'),
(5, 'Uttarakhand', '100', '3', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `userId` int(11) NOT NULL,
  `name` text NOT NULL,
  `isPersonal` enum('true','false') NOT NULL,
  `isMedical` enum('true','false') NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `age` text NOT NULL,
  `city` text NOT NULL,
  `nationality` text NOT NULL,
  `infectionStatus` enum('green','yellow','red') NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`userId`, `name`, `isPersonal`, `isMedical`, `mobile`, `email`, `gender`, `age`, `city`, `nationality`, `infectionStatus`, `description`) VALUES
(6, 'mehul', 'true', 'false', '8218512256', 'amit123@gmail.com', 'MALE', '25', 'delhi', 'indian', 'red', 'green'),
(28, 'Amit Kumar', 'true', 'false', '8218512255', 'amitkumar.developer1@gmail.com', 'MALE', '22', 'Delhi', 'indian', 'green', 'kchni'),
(29, 'Shubham', 'true', 'false', '9876954808', 'xyz@b.com', 'MALE', '24', 'gzb', 'indian', 'red', 'not infect '),
(30, 'bablo', 'true', 'false', '9876543215', 'gg@gg.con', 'MALE', '23', 'vv', 'hh', 'red', ''),
(31, 'Tariq', 'true', 'false', '9560000060', 'tariq@housetrue.com', 'MALE', '40', 'New Delhi ', 'Indian ', 'green', ''),
(32, 'no one', 'true', 'false', '8851938859', 'bb@bb.com', 'MALE', '25', 'noida', 'india', 'green', ''),
(33, 'pankaj', 'false', 'true', '9210205617', 'aryapankaj246@gmail.com', 'MALE', '26', 'delhi', 'indian', 'green', 'good alp');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `effect` text NOT NULL,
  `precaution` text NOT NULL,
  `aboutUs` text NOT NULL,
  `privacyPolicy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `about`, `effect`, `precaution`, `aboutUs`, `privacyPolicy`) VALUES
(1, 'hi update by amit About Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat', 'Effect Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat', 'Precaution Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaeratLorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat', 'About Us Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaeratLorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat', 'Updated by amit Privacy Policy Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaeratLorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(255) NOT NULL,
  `userid` text NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `userid`, `lat`, `lng`) VALUES
(1, '4', '1234', '123456'),
(2, '6', '28.6618087', '77.3875106'),
(3, '4', '1234', '123456'),
(4, '4', '1234', '123456'),
(5, '6', '28.661781', '77.3875632'),
(6, '4', '1234', '123456'),
(7, '6', '28.6617105', '77.3874724'),
(8, '4', '1234', '123456'),
(9, '6', '28.6616276', '77.3874089'),
(10, '4', '1234', '123456'),
(11, '6', '28.6616845', '77.3873907'),
(12, '6', '28.6616769', '77.3874127'),
(13, '6', '28.6617333', '77.387415'),
(14, '6', '28.6617541', '77.3872799'),
(15, '6', '28.6619128', '77.3871813'),
(16, '6', '28.6619303', '77.3873127'),
(17, '6', '28.6620056', '77.3873442'),
(18, '6', '28.6620532', '77.3873122'),
(19, '6', '28.6620532', '77.3873122'),
(20, '6', '28.6620532', '77.3873122'),
(21, '6', '28.6620532', '77.3873122'),
(22, '6', '28.6617998', '77.3872684'),
(23, '6', '28.6617998', '77.3872684'),
(24, '6', '28.6617998', '77.3872684'),
(25, '6', '28.6617998', '77.3872684'),
(26, '6', '28.661774', '77.3872669'),
(27, '6', '28.661774', '77.3872669'),
(28, '6', '28.6617828', '77.3872691'),
(29, '6', '28.6617828', '77.3872691'),
(30, '6', '28.6617828', '77.3872691'),
(31, '6', '28.6617828', '77.3872691'),
(32, '6', '28.6617828', '77.3872691'),
(33, '6', '28.6617828', '77.3872691'),
(34, '4', '1234', '123456'),
(35, '6', '28.6617859', '77.3872696'),
(36, '6', '28.6617859', '77.3872696'),
(37, '6', '28.6617861', '77.3872696'),
(38, '6', '28.6617861', '77.3872696'),
(39, '6', '28.6617861', '77.3872696'),
(40, '6', '28.6617861', '77.3872696'),
(41, '6', '28.6617861', '77.3872696'),
(42, '6', '28.6617861', '77.3872696'),
(43, '6', '28.6617859', '77.3872696'),
(44, '6', '28.6617859', '77.3872696'),
(45, '6', '28.6617859', '77.3872696'),
(46, '6', '28.6617859', '77.3872696'),
(47, '6', '28.6617859', '77.3872696'),
(48, '6', '28.6617859', '77.3872696'),
(49, '6', '28.6617887', '77.3872577'),
(50, '6', '28.6617887', '77.3872577'),
(51, '6', '28.6617859', '77.3872696'),
(52, '6', '28.6617859', '77.3872696'),
(53, '6', '28.6617859', '77.3872696'),
(54, '6', '28.6617859', '77.3872696'),
(55, '6', '28.6615573', '77.3874874'),
(56, '6', '28.6615157', '77.3874842'),
(57, '6', '28.6615801', '77.3874666'),
(58, '6', '28.6616626', '77.3874233'),
(59, '6', '28.6617147', '77.387404'),
(60, '6', '28.6616546', '77.3874062'),
(61, '6', '28.6616171', '77.3873924'),
(62, '6', '28.6616154', '77.38736'),
(63, '6', '28.6616235', '77.387363'),
(64, '6', '28.6616288', '77.387367'),
(65, '6', '28.6616386', '77.3873604'),
(66, '6', '28.6617528', '77.3873333'),
(67, '6', '28.662331', '77.3865823'),
(68, '6', '28.662331', '77.3865823'),
(69, '6', '28.6619161', '77.3875409'),
(70, '6', '28.6619161', '77.3875409'),
(71, '6', '28.6616447', '77.3874256'),
(72, '6', '28.6616447', '77.3874256'),
(73, '6', '28.6616447', '77.3874256'),
(74, '6', '28.6616447', '77.3874256'),
(75, '6', '28.6616447', '77.3874256'),
(76, '6', '28.6615616', '77.3871408'),
(77, '6', '28.6615616', '77.3871408'),
(78, '6', '28.6615616', '77.3871408'),
(79, '6', '28.661715', '77.3870923'),
(80, '6', '28.661715', '77.3870923'),
(81, '6', '28.6616539', '77.3872662'),
(82, '6', '28.6611541', '77.3871144'),
(83, '6', '28.6611541', '77.3871144'),
(84, '6', '28.6619998', '77.3869234'),
(85, '6', '28.6619998', '77.3869234'),
(86, '6', '28.6619987', '77.3872341'),
(87, '6', '28.6619987', '77.3872341'),
(88, '6', '28.6613655', '77.3872353'),
(89, '6', '28.6619051', '77.3871501'),
(90, '6', '28.6619051', '77.3871501'),
(91, '6', '28.6622742', '77.3867167'),
(92, '12', '1234', '123456'),
(93, '6', '28.6622742', '77.3867167'),
(94, '6', '28.6622742', '77.3867167'),
(95, '6', '28.6622742', '77.3867167'),
(96, '19', '1234', '123456'),
(97, '6', '28.6618107', '77.3872948'),
(98, '6', '28.6618107', '77.3872948'),
(99, '29', '28.6618107', '77.3872948'),
(100, '29', '28.6618107', '77.3872948'),
(101, '29', '28.6628939', '77.3869769'),
(102, '29', '28.6628939', '77.3869769'),
(103, '29', '28.6628939', '77.3869769'),
(104, '29', '28.6617997', '77.3872428'),
(105, '29', '28.6617997', '77.3872428'),
(106, '29', '28.6621333', '77.3872644'),
(107, '29', '28.6621333', '77.3872644'),
(108, '29', '28.6616361', '77.3873725'),
(109, '6', '28.6616361', '77.3873725'),
(110, '6', '28.6609414', '77.3874008'),
(111, '6', '28.6609414', '77.3874008'),
(112, '6', '28.6620558', '77.3874537'),
(113, '6', '28.6620558', '77.3874537'),
(114, '6', '28.6616671', '77.3874516'),
(115, '6', '28.6616671', '77.3874516'),
(116, '6', '28.6610746', '77.3874172'),
(117, '6', '28.6610746', '77.3874172'),
(118, '30', '28.7038656', '77.4233217'),
(119, '30', '28.7038458', '77.4233477'),
(120, '6', '28.6610746', '77.3874172'),
(121, '6', '28.6618107', '77.3872948'),
(122, '6', '28.6618107', '77.3872948'),
(123, '6', '28.6618736', '77.3871095'),
(124, '6', '28.6619159', '77.3872085'),
(125, '30', '28.7038458', '77.4233477'),
(126, '30', '28.7038458', '77.4233477'),
(127, '30', '28.7038458', '77.4233477'),
(128, '30', '28.7038458', '77.4233477'),
(129, '30', '28.7038458', '77.4233477'),
(130, '30', '28.7038458', '77.4233477'),
(131, '30', '28.7038458', '77.4233477'),
(132, '30', '28.7038458', '77.4233477'),
(133, '30', '28.7038458', '77.4233477'),
(134, '30', '28.7038458', '77.4233477'),
(135, '30', '28.7038458', '77.4233477'),
(136, '30', '28.7038458', '77.4233477'),
(137, '30', '28.7038458', '77.4233477'),
(138, '30', '28.7038458', '77.4233477'),
(139, '30', '28.7038458', '77.4233477'),
(140, '30', '28.7038458', '77.4233477'),
(141, '30', '28.7038458', '77.4233477'),
(142, '30', '28.7038458', '77.4233477'),
(143, '30', '28.7038458', '77.4233477'),
(144, '30', '28.7038458', '77.4233477'),
(145, '30', '28.7038458', '77.4233477'),
(146, '30', '28.7038458', '77.4233477'),
(147, '30', '28.7038458', '77.4233477'),
(148, '30', '28.7038458', '77.4233477'),
(149, '6', '28.6618107', '77.3872948'),
(150, '6', '28.6618107', '77.3872948'),
(151, '6', '28.6618107', '77.3872948'),
(152, '30', '28.7038458', '77.4233477'),
(153, '30', '28.7038458', '77.4233477'),
(154, '6', '28.6618107', '77.3872948'),
(155, '30', '28.7038458', '77.4233477'),
(156, '30', '28.7038458', '77.4233477'),
(157, '6', '28.6618107', '77.3872948'),
(158, '30', '28.7038458', '77.4233477'),
(159, '30', '28.7038458', '77.4233477'),
(160, '30', '28.7038458', '77.4233477'),
(161, '30', '28.7038458', '77.4233477'),
(162, '30', '28.7038656', '77.4233217'),
(163, '30', '28.7038656', '77.4233217'),
(164, '30', '28.7038656', '77.4233217'),
(165, '30', '28.7038656', '77.4233217'),
(166, '30', '28.7038656', '77.4233217'),
(167, '30', '28.7038656', '77.4233217'),
(168, '30', '28.7038656', '77.4233217'),
(169, '30', '28.7038656', '77.4233217'),
(170, '30', '28.7038656', '77.4233217'),
(171, '6', '28.6618107', '77.3872948'),
(172, '30', '28.7038656', '77.4233217'),
(173, '30', '28.7038656', '77.4233217'),
(174, '30', '28.7038656', '77.4233217'),
(175, '6', '28.6618107', '77.3872948'),
(176, '6', '28.6618107', '77.3872948'),
(177, '6', '28.6618107', '77.3872948');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `userId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctordetails`
--
ALTER TABLE `doctordetails`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
