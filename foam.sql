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
-- Database: `foam`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `aboutUs` text NOT NULL,
  `heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutUs`, `heading`) VALUES
(1, '<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit, Nulla viverra pharetra se eget magna vulputate malesuada.</p>\r\n<p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra se eget pulvinar neque pharetra ac.Lorem Ipsum convallis diam consequat magna vulputate malesuada, Crasa ornareelit. Lorem Ipsum convallis diam Nulla viverra pharetra sem.</p>', 'History of Our company');

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
(1, 'admin@admin', 'e6e061838856bf47e1de730719fb2609');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `bannerContent` text NOT NULL,
  `banner` text NOT NULL,
  `bannerHeading` text NOT NULL,
  `bannerInfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `bannerContent`, `banner`, `bannerHeading`, `bannerInfo`) VALUES
(1, 'We provide High quality materials in all solutions', 'images/banner/1.jpg', 'High Quality Materials', 'Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollis lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.'),
(2, 'We provide High quality materials in all solutions', 'images/banner/2.jpg', 'High Quality Materials', 'Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollis lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.'),
(3, 'We provide High quality materials in all solutions', 'images/banner/3.jpg', 'High Quality Materials', 'Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollis lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.'),
(4, 'We provide High quality materials in all solutions', 'images/banner/4.jpg', 'High Quality Materials', 'Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollis lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.'),
(5, 'We provide High quality materials in all solutions', 'images/banner/5.jpg', 'High Quality Materials', 'Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollis lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.');

-- --------------------------------------------------------

--
-- Table structure for table `clientreview`
--

CREATE TABLE `clientreview` (
  `id` int(11) NOT NULL,
  `imageLink` text NOT NULL,
  `name` text NOT NULL,
  `heading` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientreview`
--

INSERT INTO `clientreview` (`id`, `imageLink`, `name`, `heading`, `data`) VALUES
(1, 'images/review/s1.jpg', 'Michael', 'Great Industrial work', 'Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sedminc sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur adipisthn'),
(2, 'images/review/s2.jpg', 'Libero', 'High quality materials', 'Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sedminc sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur adipisthn'),
(3, 'images/review/s3.jpg', 'Alex', 'Innovative Industrial Solutions', 'Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sedminc sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur adipisthn');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '08218512255', 'dfdsf', 'sdfsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `imageLink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `imageLink`) VALUES
(1, 'Foam', 'images/gallery/1.jpg'),
(2, 'Foam', 'images/gallery/2.jpg'),
(3, 'Foam', 'images/gallery/3.jpg'),
(4, 'Foam', 'images/gallery/4.jpg'),
(5, 'Foam', 'images/gallery/5.jpg'),
(6, 'Foam', 'images/gallery/6.jpg'),
(7, 'Foam', 'images/gallery/7.jpg'),
(8, 'Foam', 'images/gallery/8.jpg'),
(9, 'Foam', 'images/gallery/9.jpg'),
(10, 'Foam', 'images/gallery/10.jpg'),
(11, 'Foam', 'images/gallery/11.jpg'),
(12, 'Foam', 'images/gallery/12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'amitkumar.developer1@gmail.com'),
(2, 'amitkumar.developer1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `newslettersent`
--

CREATE TABLE `newslettersent` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newslettersent`
--

INSERT INTO `newslettersent` (`id`, `subject`, `content`) VALUES
(1, 'Question', '<p>sdfsdf</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientreview`
--
ALTER TABLE `clientreview`
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
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslettersent`
--
ALTER TABLE `newslettersent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clientreview`
--
ALTER TABLE `clientreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newslettersent`
--
ALTER TABLE `newslettersent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
