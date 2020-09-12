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
-- Database: `suryadeeptraders`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_group`
--

CREATE TABLE `account_group` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `group_title` varchar(100) NOT NULL,
  `category` varchar(15) NOT NULL,
  `opening_balance` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account_payments`
--

CREATE TABLE `account_payments` (
  `payment_voucher_no` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `payment_voucher_date` varchar(12) NOT NULL,
  `payment_ledger` varchar(15) NOT NULL,
  `purchase_id` int(11) DEFAULT '0',
  `invoice_no` int(11) NOT NULL,
  `sales_return_id` int(11) DEFAULT '0',
  `payment_amount` decimal(10,3) NOT NULL,
  `description` varchar(200) NOT NULL,
  `mode_of_payment` varchar(20) NOT NULL,
  `status` char(1) DEFAULT 'A',
  `bank_name` varchar(50) DEFAULT NULL,
  `cheque_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account_receipts`
--

CREATE TABLE `account_receipts` (
  `receipt_voucher_no` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `receipt_voucher_date` varchar(12) DEFAULT NULL,
  `reciept_ledger` varchar(15) DEFAULT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `purchase_id` int(11) DEFAULT '0',
  `payment_id` int(11) DEFAULT '0',
  `receipt_amount` decimal(10,3) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `mode_of_receipt` varchar(20) DEFAULT NULL,
  `paid_amount` decimal(11,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `id` int(11) NOT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `account_type` varchar(100) DEFAULT NULL,
  `account_no` varchar(15) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `opening_balance` int(11) DEFAULT NULL,
  `bank_address` varchar(200) DEFAULT NULL,
  `default_account` varchar(10) DEFAULT NULL,
  `delete_status` tinyint(4) DEFAULT '0',
  `ledger_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_account_deposit`
--

CREATE TABLE `bank_account_deposit` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `amount` double(10,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `bank_name` varchar(150) DEFAULT NULL,
  `cheque_no` varchar(50) DEFAULT NULL,
  `reference_no` varchar(15) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `delete_status` tinyint(4) DEFAULT '0',
  `delete_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_account_transfer`
--

CREATE TABLE `bank_account_transfer` (
  `id` int(11) NOT NULL,
  `from_account_id` int(11) NOT NULL,
  `to_account_id` int(11) NOT NULL,
  `date` varchar(15) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `amount` double NOT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `bank_name` varchar(150) DEFAULT NULL,
  `cheque_no` varchar(100) DEFAULT NULL,
  `reference_no` varchar(15) DEFAULT NULL,
  `delete_status` tinyint(4) DEFAULT '0',
  `delete_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biller`
--

CREATE TABLE `biller` (
  `biller_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `branch_id` mediumint(11) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `user_id` int(111) NOT NULL,
  `biller_name` varchar(255) DEFAULT NULL,
  `state_code` varchar(5) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL COMMENT 'Foreign Key',
  `state_id` int(11) DEFAULT NULL COMMENT 'Foreign Key',
  `country_id` int(11) DEFAULT NULL COMMENT 'Foreign Key',
  `zipcode` varchar(10) DEFAULT NULL,
  `gstid` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `delete_status` tinyint(2) DEFAULT '0',
  `ledger_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `branch_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `delete_status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `category_code` varchar(55) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `delete_status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_settings`
--

CREATE TABLE `company_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `site_short_name` varchar(50) DEFAULT NULL,
  `gstin` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `tan_no` varchar(20) DEFAULT NULL,
  `cst_reg_no` varchar(20) DEFAULT NULL,
  `excise_reg_no` varchar(20) DEFAULT NULL,
  `lbt_reg_no` varchar(20) DEFAULT NULL,
  `servicetax_reg_no` varchar(20) DEFAULT NULL,
  `cin` varchar(20) DEFAULT NULL,
  `gst_registration_type` varchar(30) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `state_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `state_code` varchar(2) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `country_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `default_language` varchar(20) DEFAULT NULL,
  `default_currency` varchar(10) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `favico` varchar(100) DEFAULT NULL,
  `terms_condition` varchar(1000) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `account_no` varchar(50) DEFAULT NULL,
  `branch_ifsccode` varchar(50) DEFAULT NULL,
  `theme` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `credit_debit_note`
--

CREATE TABLE `credit_debit_note` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `note_or_refund_voucher_no` varchar(20) DEFAULT NULL,
  `note_or_refund_voucher_date` date DEFAULT NULL,
  `note_or_refund_voucher_value` float(11,2) DEFAULT NULL,
  `document_type` varchar(1) DEFAULT NULL,
  `reason_for_issue_document` int(1) DEFAULT '1',
  `pre_gst` varchar(1) DEFAULT NULL,
  `delete_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` char(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `gstid` varchar(20) DEFAULT NULL,
  `vat_no` varchar(30) DEFAULT NULL,
  `pan_no` varchar(30) DEFAULT NULL,
  `tan_no` varchar(20) DEFAULT NULL,
  `cst_reg_no` varchar(20) DEFAULT NULL,
  `excise_reg_no` varchar(20) DEFAULT NULL,
  `lbt_reg_no` varchar(20) DEFAULT NULL,
  `servicetax_reg_no` varchar(100) DEFAULT NULL,
  `gst_registration_type` varchar(30) DEFAULT NULL,
  `customer_name` varchar(55) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `state_code` varchar(5) DEFAULT NULL,
  `postal_code` varchar(8) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `ledger_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `discount_name` varchar(50) NOT NULL,
  `discount_value` decimal(11,2) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'foreign key ',
  `delete_status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_setup`
--

CREATE TABLE `email_setup` (
  `id` int(11) NOT NULL,
  `email_protocol` varchar(50) DEFAULT 'SMTP',
  `email_encription` varchar(50) DEFAULT NULL,
  `smtp_host` varchar(50) DEFAULT NULL,
  `smtp_port` int(11) DEFAULT NULL,
  `smtp_email` varchar(100) DEFAULT NULL,
  `from_address` varchar(100) DEFAULT NULL,
  `from_name` varchar(100) DEFAULT NULL,
  `smtp_username` varchar(100) DEFAULT NULL,
  `smtp_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `account_id` int(11) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `reference_no` varchar(15) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `delete_status` tinyint(4) DEFAULT '0',
  `delete_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `ledger_id` int(11) DEFAULT NULL,
  `delete_status` tinyint(4) DEFAULT '0' COMMENT '0 = not_deleted 1= deleted',
  `delete_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hsn`
--

CREATE TABLE `hsn` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `chapter` int(11) NOT NULL,
  `itc_hs_codes` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `delete_status` int(2) NOT NULL DEFAULT '0',
  `delete_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hsn_chapter`
--

CREATE TABLE `hsn_chapter` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `chapter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income_expence_category`
--

CREATE TABLE `income_expence_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `delete_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `quotation_id` int(11) DEFAULT NULL,
  `sales_amount` float(10,2) DEFAULT NULL,
  `paid_amount` float(10,2) DEFAULT '0.00',
  `invoice_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `accountgroup_id` int(11) DEFAULT NULL,
  `opening_balance` varchar(20) DEFAULT '0',
  `closing_balance` varchar(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT '0',
  `table_id` int(11) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `multiple_invoice`
--

CREATE TABLE `multiple_invoice` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(50) DEFAULT NULL,
  `active` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `paying_by` varchar(20) DEFAULT NULL,
  `cheque_no` varchar(30) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `reference_no` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `from_ac_id` int(11) DEFAULT NULL,
  `to_ac_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `default` varchar(50) NOT NULL,
  `delete_status` int(1) NOT NULL DEFAULT '0',
  `delete_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_term`
--

CREATE TABLE `payment_term` (
  `id` int(11) NOT NULL,
  `term` varchar(50) NOT NULL,
  `due_days` int(11) NOT NULL,
  `default` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `code` varchar(50) DEFAULT NULL,
  `hsn_sac_code` varchar(15) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `size` varchar(55) DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT NULL,
  `price` decimal(25,2) DEFAULT NULL,
  `alert_quantity` int(11) DEFAULT '20',
  `image` varchar(255) DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  `category_id` mediumint(8) DEFAULT NULL COMMENT 'foreign key',
  `subcategory_id` int(11) DEFAULT '0' COMMENT 'foreign key',
  `brand_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT '0',
  `opening_stock` int(11) NOT NULL DEFAULT '0',
  `igst` decimal(25,2) DEFAULT '0.00',
  `cgst` decimal(25,2) DEFAULT '0.00',
  `sgst` decimal(25,2) DEFAULT '0.00',
  `track_quantity` tinyint(4) DEFAULT '1',
  `details` varchar(1000) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `delete_status` int(20) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL COMMENT 'Primary Key',
  `rack_no` varchar(20) DEFAULT NULL,
  `reference_no` varchar(55) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `biller_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `total` decimal(25,2) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `tax_value` decimal(25,2) DEFAULT '0.00',
  `inv_total` decimal(25,2) DEFAULT NULL,
  `flat_discount` varchar(11) DEFAULT NULL,
  `discount_value` decimal(25,2) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `supplier_ref` varchar(20) DEFAULT NULL,
  `buyer_order` varchar(20) DEFAULT NULL,
  `dispatch_document_no` varchar(20) DEFAULT NULL,
  `delivery_note_date` varchar(10) DEFAULT NULL,
  `dispatch_through` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `purchase_item_id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `product_id` mediumint(8) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cost` decimal(11,2) DEFAULT NULL,
  `gross_total` decimal(25,2) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `igst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `igst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `discount_id` int(11) DEFAULT NULL,
  `discount_value` decimal(11,2) DEFAULT NULL,
  `discount` decimal(25,2) DEFAULT NULL,
  `price` decimal(25,2) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `tax_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `id` int(11) NOT NULL,
  `reference_no` varchar(55) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `supplier_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `date` date DEFAULT NULL,
  `note` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `total` decimal(25,2) DEFAULT NULL,
  `user` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tax_value` decimal(25,2) DEFAULT '0.00',
  `inv_total` decimal(25,2) DEFAULT NULL,
  `flat_discount` varchar(11) DEFAULT NULL,
  `discount_value` decimal(25,2) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `biller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_items`
--

CREATE TABLE `purchase_return_items` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `purchase_return_id` int(11) DEFAULT NULL,
  `product_id` mediumint(8) DEFAULT NULL,
  `product_code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `product_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT NULL,
  `gross_total` decimal(25,2) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `tax_value` decimal(25,2) DEFAULT NULL,
  `tax` decimal(25,2) DEFAULT NULL,
  `tax_type` varchar(10) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `discount_value` decimal(25,2) DEFAULT NULL,
  `discount` decimal(25,2) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `igst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `igst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quotation_id` int(11) NOT NULL COMMENT 'primary key',
  `reference_no` varchar(55) DEFAULT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `biller_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `customer_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `date` date DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `internal_note` varchar(1000) DEFAULT NULL,
  `inv_total` decimal(25,2) DEFAULT NULL,
  `total_id` decimal(25,2) DEFAULT NULL,
  `total` decimal(25,2) DEFAULT NULL,
  `tax_value` decimal(11,2) NOT NULL,
  `invoice_type` int(11) DEFAULT NULL,
  `in_type` varchar(55) DEFAULT NULL,
  `discount_value` decimal(25,2) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `user` varchar(55) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `paid_by` varchar(55) DEFAULT 'cash',
  `payment_id` int(11) DEFAULT NULL COMMENT 'Foreign key',
  `count` int(11) DEFAULT NULL,
  `pos` tinyint(4) DEFAULT '0',
  `paid` decimal(25,2) DEFAULT NULL,
  `cc_no` varchar(20) DEFAULT NULL,
  `cc_holder` varchar(100) DEFAULT NULL,
  `cheque_no` varchar(20) DEFAULT NULL,
  `shipping_city_id` int(11) DEFAULT NULL,
  `shipping_state_id` int(11) DEFAULT NULL,
  `shipping_country_id` int(11) DEFAULT NULL,
  `shipping_address` varchar(1000) DEFAULT NULL,
  `shipping_charge` decimal(11,2) DEFAULT NULL,
  `mode_of_transport` varchar(50) DEFAULT NULL,
  `transporter_name` varchar(50) DEFAULT NULL,
  `transporter_code` varchar(50) DEFAULT NULL,
  `vehicle_regn_no` varchar(50) DEFAULT NULL,
  `gst_payable` varchar(1) DEFAULT 'N',
  `broker` varchar(50) DEFAULT NULL,
  `sales_invoice` int(2) DEFAULT '1',
  `sales_type` int(2) DEFAULT '0',
  `delete_status` int(2) DEFAULT '0',
  `port_code` varchar(20) DEFAULT NULL,
  `shipping_bill_no` varchar(20) DEFAULT NULL,
  `shipping_bill_date` date DEFAULT NULL,
  `delivert_note` varchar(50) DEFAULT NULL,
  `supplier_ref` varchar(50) DEFAULT NULL,
  `buyer_order` varchar(50) DEFAULT NULL,
  `dispatch_document_no` varchar(50) DEFAULT NULL,
  `delivery_note_date` varchar(50) DEFAULT NULL,
  `dispatch_through` varchar(50) DEFAULT NULL,
  `flat_discount` decimal(11,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_items`
--

CREATE TABLE `quotation_items` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `quotation_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `product_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `discount_id` int(11) DEFAULT NULL,
  `discount_value` decimal(11,2) DEFAULT NULL,
  `discount` decimal(25,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(25,2) DEFAULT NULL,
  `gross_total` decimal(25,2) DEFAULT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `igst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `igst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tax_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sac`
--

CREATE TABLE `sac` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `accounting_code` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `delete_status` int(2) NOT NULL DEFAULT '0',
  `delete_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL COMMENT 'primary key',
  `flat_discount` decimal(11,2) NOT NULL DEFAULT '0.00',
  `reference_no` varchar(55) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `biller_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `customer_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `date` date DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `internal_note` varchar(1000) DEFAULT NULL,
  `total` decimal(25,2) DEFAULT NULL,
  `invoice_type` int(11) DEFAULT NULL,
  `in_type` varchar(55) DEFAULT NULL,
  `tax_value` decimal(25,2) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `discount_value` decimal(25,2) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `user` varchar(55) DEFAULT NULL,
  `paid_by` varchar(55) DEFAULT 'cash',
  `payment_id` int(11) DEFAULT NULL COMMENT 'Foreign key',
  `paid` decimal(25,2) DEFAULT NULL,
  `shipping_city_id` int(11) DEFAULT NULL,
  `shipping_state_id` int(11) DEFAULT NULL,
  `shipping_country_id` int(11) DEFAULT NULL,
  `shipping_address` varchar(1000) DEFAULT NULL,
  `trans_mode` varchar(20) DEFAULT NULL,
  `trans_distance` varchar(20) DEFAULT NULL,
  `transporter_name` varchar(20) DEFAULT NULL,
  `transporter_id` varchar(20) DEFAULT NULL,
  `trans_doc_no` varchar(20) DEFAULT NULL,
  `trans_doc_date` date DEFAULT NULL,
  `vehicle_no` varchar(20) DEFAULT NULL,
  `vehicle_type` varchar(20) DEFAULT NULL,
  `supply_type` varchar(20) DEFAULT NULL,
  `sub_supply_type` varchar(20) DEFAULT NULL,
  `shipping_postal_code` varchar(20) DEFAULT NULL,
  `shipping_charge` decimal(11,2) DEFAULT NULL,
  `gst_payable` varchar(1) DEFAULT NULL,
  `sales_invoice` int(2) DEFAULT '1',
  `sales_type` int(2) DEFAULT '0',
  `delete_status` int(2) DEFAULT '0',
  `delete_date` varchar(11) DEFAULT NULL,
  `port_code` varchar(20) DEFAULT NULL,
  `shipping_bill_no` varchar(20) DEFAULT NULL,
  `shipping_bill_date` date DEFAULT NULL,
  `delivert_note` varchar(50) DEFAULT NULL,
  `supplier_ref` varchar(50) DEFAULT NULL,
  `buyer_order` varchar(50) DEFAULT NULL,
  `dispatch_document_no` varchar(50) DEFAULT NULL,
  `delivery_note_date` varchar(50) DEFAULT NULL,
  `dispatch_through` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_items`
--

CREATE TABLE `sales_items` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `sales_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `product_id` mediumint(8) DEFAULT NULL COMMENT 'foreign key',
  `discount_id` int(11) DEFAULT NULL,
  `discount_value` decimal(11,2) DEFAULT NULL,
  `discount` decimal(25,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(25,2) DEFAULT NULL,
  `gross_total` decimal(25,2) DEFAULT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `igst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `igst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tax_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE `sales_return` (
  `id` int(11) NOT NULL,
  `reference_no` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `biller_id` int(11) DEFAULT NULL,
  `biller_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `date` date DEFAULT NULL,
  `note` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `internal_note` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `tax_value` decimal(25,2) DEFAULT NULL,
  `total` decimal(25,2) DEFAULT NULL,
  `discount_value` decimal(11,2) NOT NULL DEFAULT '0.00',
  `invoice_type` int(11) DEFAULT NULL,
  `user` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `paid_by` varchar(55) CHARACTER SET utf8 DEFAULT 'cash',
  `delete_status` int(2) DEFAULT '0',
  `flat_discount` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale_return_items`
--

CREATE TABLE `sale_return_items` (
  `id` int(11) NOT NULL,
  `sale_return_id` int(11) DEFAULT NULL,
  `product_id` mediumint(8) DEFAULT NULL,
  `product_code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_unit` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` decimal(25,2) DEFAULT NULL,
  `gross_total` decimal(25,2) DEFAULT NULL,
  `serial_no` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `discount_value` decimal(25,2) DEFAULT NULL,
  `discount` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `igst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `igst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `cgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `sgst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tax_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `logo` varchar(255) NOT NULL,
  `logo2` varchar(255) NOT NULL,
  `site_name` varchar(55) NOT NULL,
  `language` varchar(20) NOT NULL,
  `default_warehouse` int(2) NOT NULL,
  `currency_prefix` varchar(3) NOT NULL,
  `default_invoice_type` int(2) NOT NULL,
  `default_tax_rate` int(2) NOT NULL,
  `rows_per_page` int(2) NOT NULL,
  `no_of_rows` int(2) NOT NULL,
  `total_rows` int(2) NOT NULL,
  `version` varchar(5) NOT NULL DEFAULT '1',
  `default_tax_rate2` int(11) NOT NULL DEFAULT '0',
  `dateformat` int(11) NOT NULL,
  `sales_prefix` varchar(20) NOT NULL,
  `quote_prefix` varchar(55) NOT NULL,
  `purchase_prefix` varchar(55) NOT NULL,
  `purchase_return_prefix` varchar(10) NOT NULL,
  `sales_return_prefix` varchar(10) NOT NULL,
  `transfer_prefix` varchar(55) NOT NULL,
  `barcode_symbology` varchar(20) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `product_serial` tinyint(4) NOT NULL,
  `default_discount` int(11) NOT NULL,
  `discount_option` tinyint(4) NOT NULL,
  `discount_method` tinyint(4) NOT NULL,
  `tax1` tinyint(4) NOT NULL,
  `tax2` tinyint(4) NOT NULL,
  `restrict_sale` tinyint(4) NOT NULL DEFAULT '0',
  `restrict_user` tinyint(4) NOT NULL DEFAULT '0',
  `restrict_calendar` tinyint(4) NOT NULL DEFAULT '0',
  `biller` int(11) NOT NULL,
  `default_customer` int(11) NOT NULL,
  `bstatesave` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms_history`
--

CREATE TABLE `sms_history` (
  `id` int(11) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  `response` varchar(100) DEFAULT NULL,
  `sent_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms_setting`
--

CREATE TABLE `sms_setting` (
  `api_url` varchar(100) DEFAULT NULL,
  `route` int(11) NOT NULL DEFAULT '4',
  `auth_key` varchar(100) DEFAULT NULL,
  `unicode` int(11) NOT NULL DEFAULT '1',
  `country` int(11) NOT NULL DEFAULT '91',
  `bhash_api_url` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `sender_b` varchar(20) DEFAULT NULL,
  `sender` varchar(6) DEFAULT NULL,
  `default_gateway` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state_code`
--

CREATE TABLE `state_code` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `state_code` varchar(10) NOT NULL,
  `tin_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `category_id` mediumint(8) NOT NULL COMMENT 'foreign key',
  `sub_category_code` varchar(55) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `delete_status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `gstid` varchar(20) DEFAULT NULL,
  `vat_no` varchar(30) DEFAULT NULL,
  `pan_no` varchar(30) DEFAULT NULL,
  `tan_no` varchar(20) DEFAULT NULL,
  `cst_reg_no` varchar(20) DEFAULT NULL,
  `excise_reg_no` varchar(20) DEFAULT NULL,
  `lbt_reg_no` varchar(20) DEFAULT NULL,
  `servicetax_reg_no` varchar(20) DEFAULT NULL,
  `gst_registration_type` varchar(30) DEFAULT NULL,
  `supplier_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL COMMENT 'Foreign Key',
  `state_id` int(11) DEFAULT NULL COMMENT 'Foreign Key',
  `state_code` varchar(5) DEFAULT NULL,
  `postal_code` varchar(8) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL COMMENT 'Foreign Key',
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0',
  `ledger_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(11) NOT NULL,
  `tax_name` text NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `voucher_type` varchar(10) DEFAULT NULL,
  `voucher_no` int(11) DEFAULT NULL,
  `ledger_no` int(11) DEFAULT NULL,
  `dr_amount` decimal(10,3) DEFAULT '0.000',
  `cr_amount` decimal(10,3) DEFAULT '0.000',
  `voucher_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_header`
--

CREATE TABLE `transaction_header` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT '0',
  `receipt_id` int(11) DEFAULT NULL,
  `credit_debit_note_id` int(11) DEFAULT NULL,
  `invoice_reg_no` varchar(30) DEFAULT NULL,
  `transaction_date` date DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `amount` decimal(10,3) DEFAULT NULL,
  `voucher_no` varchar(10) DEFAULT NULL,
  `voucher_date` varchar(50) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `cheque_no` varchar(15) DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `from_account` varchar(50) DEFAULT NULL,
  `to_account` varchar(50) DEFAULT NULL,
  `narration` varchar(200) DEFAULT NULL,
  `transaction_ref` varchar(50) DEFAULT NULL,
  `voucher_status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL COMMENT 'Primary key',
  `date` date DEFAULT NULL,
  `to_warehouse` int(11) DEFAULT NULL,
  `from_warehouse` int(11) DEFAULT NULL,
  `tax_value` decimal(11,2) NOT NULL DEFAULT '0.00',
  `total` float(25,2) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_items`
--

CREATE TABLE `transfer_items` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `transfer_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `product_id` mediumint(11) DEFAULT NULL COMMENT 'foreign key',
  `quantity` int(11) DEFAULT NULL,
  `igst` decimal(11,2) NOT NULL DEFAULT '0.00',
  `igst_tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tax_type` varchar(10) DEFAULT NULL,
  `gross_total` decimal(25,2) DEFAULT NULL,
  `delete_status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uqc`
--

CREATE TABLE `uqc` (
  `id` int(11) NOT NULL,
  `uom` varchar(10) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `delete_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `api_key` varchar(50) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED DEFAULT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `theme` varchar(20) DEFAULT NULL,
  `ledger_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `api_key`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `theme`, `ledger_id`) VALUES
(3, '127.0.0.1', 'administrator', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, 'admin@admin.com', NULL, 'rZSru.qrHfjqZ4.nftowKO2a65728f9f5f977c2c', 1493196005, '/5FAU1Uznh63O8RuCUXwi.', 1268889823, 1585589632, 1, 'SURYADEEP', 'TRADERS', 'SURYADEEP TRADERS', '9643203845', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'primary key',
  `user_id` int(11) UNSIGNED DEFAULT NULL COMMENT 'foreign key',
  `group_id` mediumint(8) UNSIGNED DEFAULT NULL COMMENT 'foreign key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouse_id` mediumint(8) NOT NULL COMMENT 'Primary key',
  `warehouse_name` varchar(255) NOT NULL,
  `branch_id` mediumint(8) NOT NULL COMMENT 'foreign key',
  `primary_warehouse` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` mediumint(8) NOT NULL COMMENT 'foreign key',
  `delete_status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses_products`
--

CREATE TABLE `warehouses_products` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `product_id` mediumint(11) NOT NULL COMMENT 'foreign key',
  `warehouse_id` mediumint(11) NOT NULL COMMENT 'foreign key',
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_management`
--

CREATE TABLE `warehouse_management` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `warehouse_id` int(11) DEFAULT NULL COMMENT 'foreign key',
  `user_id` int(11) DEFAULT NULL COMMENT 'foreign key'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_group`
--
ALTER TABLE `account_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_payments`
--
ALTER TABLE `account_payments`
  ADD PRIMARY KEY (`payment_voucher_no`);

--
-- Indexes for table `account_receipts`
--
ALTER TABLE `account_receipts`
  ADD PRIMARY KEY (`receipt_voucher_no`);

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_account_deposit`
--
ALTER TABLE `bank_account_deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_account_transfer`
--
ALTER TABLE `bank_account_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biller`
--
ALTER TABLE `biller`
  ADD PRIMARY KEY (`biller_id`),
  ADD KEY `fk_biller` (`branch_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_settings`
--
ALTER TABLE `company_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_debit_note`
--
ALTER TABLE `credit_debit_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `email_setup`
--
ALTER TABLE `email_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsn`
--
ALTER TABLE `hsn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsn_chapter`
--
ALTER TABLE `hsn_chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_expence_category`
--
ALTER TABLE `income_expence_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_invoice`
--
ALTER TABLE `multiple_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_term`
--
ALTER TABLE `payment_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `fk_product` (`category_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`purchase_item_id`),
  ADD KEY `purchase_id` (`purchase_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return_items`
--
ALTER TABLE `purchase_return_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_purchase_return_items` (`product_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quotation_id`);

--
-- Indexes for table `quotation_items`
--
ALTER TABLE `quotation_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quotation_id` (`quotation_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sac`
--
ALTER TABLE `sac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_items`
--
ALTER TABLE `sales_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_id` (`sales_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sales_return`
--
ALTER TABLE `sales_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_return_items`
--
ALTER TABLE `sale_return_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sale_return_items` (`product_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `sms_history`
--
ALTER TABLE `sms_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_code`
--
ALTER TABLE `state_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `fk_subcategory` (`category_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_header`
--
ALTER TABLE `transaction_header`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_items`
--
ALTER TABLE `transfer_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transfer_items` (`product_id`);

--
-- Indexes for table `uqc`
--
ALTER TABLE `uqc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`warehouse_id`),
  ADD KEY `fk_warehouse` (`branch_id`);

--
-- Indexes for table `warehouses_products`
--
ALTER TABLE `warehouses_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_warehouses_products1` (`product_id`),
  ADD KEY `fk_warehouses_products2` (`warehouse_id`);

--
-- Indexes for table `warehouse_management`
--
ALTER TABLE `warehouse_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_group`
--
ALTER TABLE `account_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_payments`
--
ALTER TABLE `account_payments`
  MODIFY `payment_voucher_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_receipts`
--
ALTER TABLE `account_receipts`
  MODIFY `receipt_voucher_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_account_deposit`
--
ALTER TABLE `bank_account_deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_account_transfer`
--
ALTER TABLE `bank_account_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biller`
--
ALTER TABLE `biller`
  MODIFY `biller_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_settings`
--
ALTER TABLE `company_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credit_debit_note`
--
ALTER TABLE `credit_debit_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `email_setup`
--
ALTER TABLE `email_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hsn`
--
ALTER TABLE `hsn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `hsn_chapter`
--
ALTER TABLE `hsn_chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `income_expence_category`
--
ALTER TABLE `income_expence_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `multiple_invoice`
--
ALTER TABLE `multiple_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_term`
--
ALTER TABLE `payment_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `purchase_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_return_items`
--
ALTER TABLE `purchase_return_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `quotation_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `quotation_items`
--
ALTER TABLE `quotation_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT for table `sac`
--
ALTER TABLE `sac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `sales_items`
--
ALTER TABLE `sales_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT for table `sales_return`
--
ALTER TABLE `sales_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_return_items`
--
ALTER TABLE `sale_return_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `sms_history`
--
ALTER TABLE `sms_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state_code`
--
ALTER TABLE `state_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_header`
--
ALTER TABLE `transaction_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `transfer_items`
--
ALTER TABLE `transfer_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `uqc`
--
ALTER TABLE `uqc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `warehouse_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `warehouses_products`
--
ALTER TABLE `warehouses_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT for table `warehouse_management`
--
ALTER TABLE `warehouse_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
