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
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `total_count` int(11) NOT NULL,
  `today_count` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `sub_admin_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `total_count`, `today_count`, `site_id`, `sub_admin_id`, `date`, `time_created`) VALUES
(1, 10, 10, 3, 7, '2020-07-14', '2020-07-14 14:46:50'),
(2, 120, 110, 1, 10, '2020-07-14', '2020-07-14 14:48:40'),
(6, 150, 140, 1, 10, '2020-07-16', '2020-07-15 20:52:06'),
(7, 150, 140, 1, 10, '2020-07-19', '2020-07-18 20:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow`
--

CREATE TABLE `cash_flow` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `billing_amount` int(11) NOT NULL,
  `dsc` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_flow`
--

INSERT INTO `cash_flow` (`id`, `item_name`, `billing_amount`, `dsc`, `created_by`, `site_id`, `date`, `time_created`, `time_modified`) VALUES
(1, 'Amit kumar', 123, 'Inserted from fon', 10, 1, '0000-00-00', '2020-07-15 21:29:08', '2020-07-15 21:29:08'),
(2, 'Testing 2', 54, 'Test from fon', 10, 1, '0000-00-00', '2020-07-15 21:34:46', '2020-07-15 21:34:46'),
(3, 'Amit', 54, 'Aga', 10, 1, '0000-00-00', '2020-07-15 21:36:27', '2020-07-15 21:36:27'),
(4, 'Amit', 5222, 'Tested from taking image from camera', 10, 1, '0000-00-00', '2020-07-15 21:45:04', '2020-07-15 21:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow_image`
--

CREATE TABLE `cash_flow_image` (
  `id` int(11) NOT NULL,
  `cash_flow_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_flow_image`
--

INSERT INTO `cash_flow_image` (`id`, `cash_flow_id`, `image`) VALUES
(1, 1, '3852715948484458607257270358430723706.jpg'),
(2, 2, '21525IMG_20200715_143415_967.jpg'),
(3, 3, '53850IMG_20200715_143415_967.jpg'),
(4, 3, '88229IMG_20200715_143001_495.jpg'),
(5, 4, '1380315948493933787222046395099176674.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `create_bill`
--

CREATE TABLE `create_bill` (
  `id` int(11) NOT NULL,
  `pc_gstin` text NOT NULL,
  `pc_name` text NOT NULL,
  `pc_address` text NOT NULL,
  `invoice_no` text NOT NULL,
  `invoice_date` text NOT NULL,
  `b_name` text NOT NULL,
  `b_address` text NOT NULL,
  `b_state` text NOT NULL,
  `b_state_code` text NOT NULL,
  `b_gstin` text NOT NULL,
  `s_name` text NOT NULL,
  `s_address` text NOT NULL,
  `s_state` text NOT NULL,
  `s_state_code` text NOT NULL,
  `s_gstin` text NOT NULL,
  `name_of_work` text NOT NULL,
  `job_no` text NOT NULL,
  `freight` text NOT NULL,
  `insurance` text NOT NULL,
  `packing_forwarding_charges` text NOT NULL,
  `total_amount` text NOT NULL,
  `bank_name` text NOT NULL,
  `ac_no` text NOT NULL,
  `ifsc` text NOT NULL,
  `branch` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_bill`
--

INSERT INTO `create_bill` (`id`, `pc_gstin`, `pc_name`, `pc_address`, `invoice_no`, `invoice_date`, `b_name`, `b_address`, `b_state`, `b_state_code`, `b_gstin`, `s_name`, `s_address`, `s_state`, `s_state_code`, `s_gstin`, `name_of_work`, `job_no`, `freight`, `insurance`, `packing_forwarding_charges`, `total_amount`, `bank_name`, `ac_no`, `ifsc`, `branch`, `created_by`, `site_id`, `date`, `time_created`) VALUES
(1, 'PC/Site x/BS-/2019-20', 'Pashupati Construction', '705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066', 'PC/Site x/BS-/2019-20', '24.03.2020', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', '', '', '', '612000', 'w', 'w', 'w', 'w', 19, 1, '0000-00-00', '2020-07-19 06:54:41'),
(2, 'PC/Site x/BS-/2019-20', 'Pashupati Construction', '705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066', 'PC/Site x/BS-/2019-20', '24.03.2020', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', '', '', '', '612000', 'w', 'w', 'w', 'w', 19, 1, '0000-00-00', '2020-07-19 06:57:48'),
(3, 'PC/Site x/BS-/2019-20', 'Pashupati Construction', '705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066', 'PC/Site x/BS-/2019-20', '24.03.2020', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', '', '', '', '612000', 'w', 'w', 'w', 'w', 19, 1, '0000-00-00', '2020-07-19 07:57:49'),
(4, 'PC/Site x/BS-/2019-20', 'Pashupati Construction', '705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066', 'PC/Site x/BS-/2019-20', '19/07/2020', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', '', '', '', '612000', 'w', 'w', 'w', 'w', 19, 1, '0000-00-00', '2020-07-19 08:07:02'),
(5, 'PC/Site x/BS-/2019-20', 'Pashupati Construction', '705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066', 'PC/Site /BS-/2019-20', '19/07/2020', 'e', 'ee', 'e', 'e', 'e', 'e', 'e', 'e', 'ee', 'e', 'e', 'e', '', '', '', '612000', 'e', 'e', 'e', 'e', 19, 1, '0000-00-00', '2020-07-19 08:08:04'),
(6, 'PC/Site x/BS-/2019-20', 'Pashupati Construction', '705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066', 'PC/Site /BS-/2019-20', '19/07/2020', 'test', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', '', '', '', '612000', 'q', 'q', 'q', 'q', 19, 1, '0000-00-00', '2020-07-19 08:19:05'),
(7, 'PC/Site x/BS-/2019-20', 'Pashupati Construction', '705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066', 'PC/Site /BS-/2019-20', '19/07/2020', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '', '', '', '612000', 'b', 'b', 'b', 'b', 19, 1, '0000-00-00', '2020-07-19 08:23:33'),
(8, '07AALFP6024C1ZG', 'Pashupati Construction', '705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066', 'PC/Site 1/BS-/2019-2020/8', '19/07/2020', 'testing', 'ABCABCABCAKSAKSAKSAKSAKSSAK', 'Delhi', '07', '123456789', 'Testing', 'ahasdhsad', 'Delhi', '07', '789456123', 'Testing job to check', '123456789', '', '', '', '1257192', 'SBI', '789456123789', 'SBIIFSC123', 'Shadhara', 19, 1, '0000-00-00', '2020-07-19 10:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `create_bill_item`
--

CREATE TABLE `create_bill_item` (
  `id` int(11) NOT NULL,
  `create_bill_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `hsn` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` text NOT NULL,
  `rate` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `taxable_value` int(11) NOT NULL,
  `cgst_rate` int(11) NOT NULL,
  `cgst_amt` int(11) NOT NULL,
  `sgst_rate` int(11) NOT NULL,
  `sgst_amount` int(11) NOT NULL,
  `igst_rate` int(11) NOT NULL,
  `igst_amount` int(11) NOT NULL,
  `time_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_bill_item`
--

INSERT INTO `create_bill_item` (`id`, `create_bill_id`, `name`, `hsn`, `qty`, `unit`, `rate`, `total`, `discount`, `taxable_value`, `cgst_rate`, `cgst_amt`, `sgst_rate`, `sgst_amount`, `igst_rate`, `igst_amount`, `time_created`) VALUES
(1, 2, '0', 123, 12, '1', 12, 144, 0, 144, 0, 0, 0, 0, 12, 17, 0),
(2, 2, 'abc', 1234, 15, ' Nos', 120, 1800, 0, 1800, 0, 0, 0, 0, 2, 36, 0),
(3, 2, 'asdasd', 12, 2, '2', 2, 4, 0, 4, 0, 0, 0, 0, 2, 0, 0),
(4, 0, 'abc', 12, 12, '12', 12121, 145452, 0, 145452, 0, 0, 0, 0, 1, 1455, 0),
(5, 0, '1', 1, 1, '1', 11, 11, 0, 11, 0, 0, 0, 0, 1, 0, 0),
(6, 0, '1', 1, 1, '1', 1, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0),
(7, 7, '1', 1, 1, '1', 1, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0),
(8, 7, '1', 1, 1, '1', 1, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0),
(9, 7, '1', 1, 1, '1', 1, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0),
(10, 8, 'First', 123, 12, 'No', 50000, 600000, 0, 600000, 0, 0, 0, 0, 2, 12000, 0),
(11, 8, 'New', 12, 522, 'Kg', 600, 313200, 0, 313200, 0, 0, 0, 0, 3, 9396, 0),
(12, 8, 'New12', 12, 522, 'Kg', 600, 313200, 0, 313200, 0, 0, 0, 0, 3, 9396, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `material_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `quantity`, `material_id`, `created_by`, `site_id`, `date`, `time_created`, `time_updated`) VALUES
(1, '120', 1, 10, 1, '2020-07-19', '2020-07-14 14:49:50', '2020-07-19 13:51:09'),
(2, '150', 1, 10, 1, '0000-00-00', '2020-07-14 15:22:27', '2020-07-14 15:22:27'),
(3, '20015', 1, 10, 1, '0000-00-00', '2020-07-14 15:24:24', '2020-07-14 15:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `local_bill`
--

CREATE TABLE `local_bill` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `billing_amount` varchar(20) NOT NULL,
  `dsc` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_bill`
--

INSERT INTO `local_bill` (`id`, `item_name`, `billing_amount`, `dsc`, `created_by`, `site_id`, `time_created`) VALUES
(1, 'test', '123', 'asd', 10, 1, '2020-07-14 19:21:19'),
(2, '', '1', '', 5, 0, '2020-07-15 21:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `local_bill_file`
--

CREATE TABLE `local_bill_file` (
  `id` int(11) NOT NULL,
  `local_bill_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_bill_file`
--

INSERT INTO `local_bill_file` (`id`, `local_bill_id`, `image`) VALUES
(1, 1, '80532room_heater.png');

-- --------------------------------------------------------

--
-- Table structure for table `material_category_list`
--

CREATE TABLE `material_category_list` (
  `id` int(11) NOT NULL,
  `material_category` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_category_list`
--

INSERT INTO `material_category_list` (`id`, `material_category`, `created_by`, `time_created`, `time_modified`) VALUES
(1, 'Bricks', 5, '2020-07-15 17:52:55', '2020-07-19 10:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `money_transfer_txn`
--

CREATE TABLE `money_transfer_txn` (
  `id` int(11) NOT NULL,
  `from_admin_id` int(11) NOT NULL,
  `to_admin_id` int(11) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `reason` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_transfer_txn`
--

INSERT INTO `money_transfer_txn` (`id`, `from_admin_id`, `to_admin_id`, `amount`, `reason`, `time_created`, `time_modified`) VALUES
(1, 16, 16, '10000', '6', '2020-07-14 11:13:01', '2020-07-14 11:13:01'),
(2, 6, 14, '120', '120', '2020-07-14 14:54:06', '2020-07-14 14:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `money_transfer_txn_image`
--

CREATE TABLE `money_transfer_txn_image` (
  `id` int(11) NOT NULL,
  `money_transfer_txn_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `points_txn`
--

CREATE TABLE `points_txn` (
  `id` int(11) NOT NULL,
  `points_added` varchar(20) NOT NULL,
  `points_updated` varchar(20) NOT NULL,
  `reason` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points_txn`
--

INSERT INTO `points_txn` (`id`, `points_added`, `points_updated`, `reason`, `admin_id`, `type`, `time_created`, `time_modified`) VALUES
(23, '1500', '156600', 'abc', 6, 'Added', '2020-07-15 18:17:59', '0000-00-00 00:00:00'),
(24, '1500', '155100', 'Abc', 6, 'Remove', '2020-07-15 18:24:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `cost` text NOT NULL,
  `location` text NOT NULL,
  `assign` text NOT NULL,
  `site_plan` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `project_name`, `cost`, `location`, `assign`, `site_plan`, `created_by`, `time_created`, `time_modified`) VALUES
(1, 'gzb', '17', 'india', '012', 'ersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb nersdtcgfb n', 5, '2020-07-14 11:07:33', '2020-07-15 17:40:29'),
(2, '121', '1231212', '121', '012', 'asdasd', 6, '2020-07-15 17:28:58', '2020-07-15 17:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `upload_bill`
--

CREATE TABLE `upload_bill` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `billing_amount` text NOT NULL,
  `dsc` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_bill`
--

INSERT INTO `upload_bill` (`id`, `item_name`, `billing_amount`, `dsc`, `created_by`, `site_id`, `date`, `time_created`, `time_modified`) VALUES
(1, 'New', '150000', '', 10, 1, '2020-07-19', '2020-07-14 17:10:31', '2020-07-19 13:51:54'),
(2, 'Testing', '150', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 10, 1, '0000-00-00', '2020-07-15 19:56:33', '2020-07-19 10:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `upload_bill_file`
--

CREATE TABLE `upload_bill_file` (
  `id` int(11) NOT NULL,
  `upload_bill_id` int(11) NOT NULL,
  `file` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_bill_file`
--

INSERT INTO `upload_bill_file` (`id`, `upload_bill_id`, `file`, `type`) VALUES
(1, 1, '46291tool-2766835_960_720.webp', 'image'),
(2, 1, '12653python-basics-sample-chapters.pdf', 'pdf'),
(3, 2, '53207room_heater.png', 'image'),
(4, 2, '28222python-basics-sample-chapters.pdf', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `points` varchar(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `type` text NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0',
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `password`, `site_id`, `points`, `created_by`, `type`, `is_block`, `time_created`, `time_modified`) VALUES
(5, 'super_admin', 'ed49c3fed75a513a79cb8bd1d4715d57', NULL, '1150', 0, 'super_admin', 0, '2020-07-10 08:53:19', '2020-07-14 08:49:05'),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, '155100', 0, 'admin', 0, '2020-07-10 08:53:19', '2020-07-15 18:24:41'),
(7, 'sub_admin12', '6359833af33c232eb18288b39ad931b7', 3, '', 0, 'sub_admin', 0, '2020-07-10 08:53:19', '2020-07-14 09:45:47'),
(10, 'abcdefghi123', 'f03362103ad53ea1947059eda98926f5', 1, '', 0, 'sub_admin', 0, '2020-07-10 19:59:36', '2020-07-15 19:47:44'),
(14, 'admin12', '21232f297a57a5a743894a0e4a801fc3', NULL, '255', 5, 'admin', 0, '2020-07-14 10:00:19', '2020-07-15 16:53:20'),
(16, '012', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2001516', 5, 'admin', 0, '2020-07-14 11:04:31', '2020-07-15 16:50:16'),
(17, 'abc12', '900150983cd24fb0d6963f7d28e17f72', NULL, '-100000', 5, 'admin', 0, '2020-07-14 17:14:45', '2020-07-15 19:12:22'),
(19, 'sub', '8a68dc3e925eacf92633be230722a140', 1, '', 5, 'sub_admin', 0, '2020-07-15 21:40:59', '2020-07-15 21:40:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_flow_image`
--
ALTER TABLE `cash_flow_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_bill`
--
ALTER TABLE `create_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_bill_item`
--
ALTER TABLE `create_bill_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_bill`
--
ALTER TABLE `local_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_bill_file`
--
ALTER TABLE `local_bill_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_category_list`
--
ALTER TABLE `material_category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_transfer_txn`
--
ALTER TABLE `money_transfer_txn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_transfer_txn_image`
--
ALTER TABLE `money_transfer_txn_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points_txn`
--
ALTER TABLE `points_txn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_bill`
--
ALTER TABLE `upload_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_bill_file`
--
ALTER TABLE `upload_bill_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cash_flow`
--
ALTER TABLE `cash_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cash_flow_image`
--
ALTER TABLE `cash_flow_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `create_bill`
--
ALTER TABLE `create_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `create_bill_item`
--
ALTER TABLE `create_bill_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `local_bill`
--
ALTER TABLE `local_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `local_bill_file`
--
ALTER TABLE `local_bill_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `material_category_list`
--
ALTER TABLE `material_category_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `money_transfer_txn`
--
ALTER TABLE `money_transfer_txn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `money_transfer_txn_image`
--
ALTER TABLE `money_transfer_txn_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `points_txn`
--
ALTER TABLE `points_txn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_bill`
--
ALTER TABLE `upload_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_bill_file`
--
ALTER TABLE `upload_bill_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
