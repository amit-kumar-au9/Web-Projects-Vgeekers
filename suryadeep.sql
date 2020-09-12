-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 05:12 PM
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
-- Database: `suryadeep`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_detail`
--

CREATE TABLE `company_detail` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `zip_code` text NOT NULL,
  `cpan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_detail`
--

INSERT INTO `company_detail` (`id`, `name`, `street`, `city`, `state`, `country`, `zip_code`, `cpan`) VALUES
(1, 'SURYADEEP TRADERS', 'ASTHA APARTMENT, SECTOR - 5, RAJENDRA NAGAR', 'Ghaziabad', 'Uttar Pradesh', 'India', '201005', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` text NOT NULL,
  `selling_price` int(11) NOT NULL,
  `hsn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `qty`, `cost`, `selling_price`, `hsn`) VALUES
(1, 'Arhar dal', 100, '95', 115, '1101'),
(2, 'masoor dal', 250, '125', 150, '1101');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `gst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `name`, `address`, `city`, `state`, `phone`, `email`, `gst`) VALUES
(1, 'GARG STORE', 'NO ADDRESS', 'Ghaziabad', 'Uttar Pardesh', '987456123', '123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_detail`
--

CREATE TABLE `warehouse_detail` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `gst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse_detail`
--

INSERT INTO `warehouse_detail` (`id`, `name`, `address`, `city`, `state`, `phone`, `email`, `gst`) VALUES
(1, 'SURYADEEP TRADERS', 'AASTHA APARTMENT, SECTOR-5, RAJENDRA NAGAR,SAHIBABAD', 'Ghaziabad', 'Uttar Pardesh', '9958981767', 'traderssuryadeep@gmail.com', '09AEBFS4715F1Z3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_detail`
--
ALTER TABLE `company_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse_detail`
--
ALTER TABLE `warehouse_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_detail`
--
ALTER TABLE `company_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warehouse_detail`
--
ALTER TABLE `warehouse_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
