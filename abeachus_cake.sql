-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2012 at 08:38 AM
-- Server version: 5.1.63
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abeachus_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

DROP TABLE IF EXISTS `account_types`;
CREATE TABLE IF NOT EXISTS `account_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `notes` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `type`, `notes`) VALUES
(2, 'Debit', 'Expenses'),
(1, 'Credit', 'Income');

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

DROP TABLE IF EXISTS `apartments`;
CREATE TABLE IF NOT EXISTS `apartments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `building_id` int(11) NOT NULL,
  `apt_num` varchar(40) NOT NULL,
  `bedreems` int(10) unsigned DEFAULT NULL,
  `bathrooms` float(3,1) NOT NULL,
  `ishouse` tinyint(1) NOT NULL,
  `sqft` int(10) unsigned NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `notes_about` text,
  `office_notes` text,
  `closed_unit` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `garage` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`id`, `building_id`, `apt_num`, `bedreems`, `bathrooms`, `ishouse`, `sqft`, `location`, `notes_about`, `office_notes`, `closed_unit`, `parking`, `garage`) VALUES
(1, 1, 'A', 2, 1.0, 0, 200, NULL, NULL, NULL, 0, 1, 1),
(2, 1, 'B', 1, 1.0, 0, 100, NULL, NULL, NULL, 1, 1, 1),
(3, 1, 'ALL', 1, 1.0, 0, 100, NULL, NULL, NULL, 1, 1, 1),
(4, 1, 'C', 1, 1.0, 0, 100, NULL, NULL, NULL, 1, 1, 1),
(5, 2, 'ALL', 1, 1.0, 0, 200, NULL, 'A very nice apartment', NULL, 0, 1, 0),
(6, 2, '101', 1, 1.0, 0, 200, NULL, '', NULL, 0, 1, 0),
(7, 2, '102', 1, 1.0, 0, 200, NULL, '', NULL, 0, 1, 0),
(8, 2, '103', 1, 1.0, 0, 200, NULL, '', NULL, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `address`, `city`, `state`, `zipcode`) VALUES
(1, 'Central Bank', '112 Fourth Street', 'Champain', 'il', '61820'),
(2, 'Busey Bank', '614 S 6th St ', 'Champaign', 'IL', '61801'),
(3, '10/6th Bank', '1044 Beech St', 'Champaign', 'Il', '61820'),
(4, 'Harris Bank', '76 E. Busey', 'Champaign', 'IL', '61820');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
CREATE TABLE IF NOT EXISTS `buildings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_num` int(11) NOT NULL,
  `checking_account_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `on_campus` tinyint(1) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `group_num`, `checking_account_id`, `address`, `on_campus`, `city`, `zip`) VALUES
(1, 0, 1, '133 Beach Drive', 0, 'Urbana ', 61801),
(2, 0, 3, '7777 Main Street', 0, 'Urbana', 61801);

-- --------------------------------------------------------

--
-- Table structure for table `checking_accounts`
--

DROP TABLE IF EXISTS `checking_accounts`;
CREATE TABLE IF NOT EXISTS `checking_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_code` varchar(255) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `account_num` int(10) unsigned DEFAULT NULL,
  `public` tinyint(1) NOT NULL,
  `is_clearing_acc` tinyint(1) NOT NULL,
  `inactive` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `checking_accounts`
--

INSERT INTO `checking_accounts` (`id`, `name_code`, `bank_id`, `vendor_id`, `name`, `account_num`, `public`, `is_clearing_acc`, `inactive`) VALUES
(1, 'AE', 0, 0, 'Advertisement Expenses ', 11111111, 1, 0, 0),
(2, 'BLD', 0, 1, '133 Beach Account', 123244, 1, 0, 1),
(3, 'HAB', 4, 3, 'Harris Bank', 4294967295, 1, 1, 0),
(4, 'ALL', 2, 3, 'All', 5465454, 1, 1, 0),
(5, 'MAA', 2, 1, '7777 Main Account', 1235474, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_created` date DEFAULT NULL,
  `login_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_name` (`login_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `nick_name`, `email`, `is_active`, `date_created`, `login_name`, `password`) VALUES
(1, 'Joe', 'Smith', 'jsmith0', 'jsmith@abeachus.com', 1, '2012-03-28', 'jsmith0', 'password'),
(2, 'Bob', 'Smith', 'bsmith', 'bsmith@abeach.us', 1, '2012-01-04', 'bsmith2', '123password');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_items` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total_items`, `user_id`) VALUES
(1, 10996, 19),
(2, 55, 20),
(3, 555, 21);

-- --------------------------------------------------------

--
-- Table structure for table `payables`
--

DROP TABLE IF EXISTS `payables`;
CREATE TABLE IF NOT EXISTS `payables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apt_num` varchar(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `pay_batch_id` int(11) NOT NULL,
  `apartment_id` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` float(12,2) NOT NULL,
  `notes` text,
  `tax_number_id` int(11) NOT NULL,
  `miles_driven` float(12,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `payables`
--

INSERT INTO `payables` (`id`, `apt_num`, `building_id`, `pay_batch_id`, `apartment_id`, `account`, `date`, `amount`, `notes`, `tax_number_id`, `miles_driven`) VALUES
(24, 'A', 1, 26, 1, 'My account', '2012-03-28', 16.20, '', 0, 36.000),
(25, 'ALL', 2, 26, 5, '', '2012-03-28', 9.90, '', 0, 22.000),
(21, 'A', 1, 24, 1, '', '2012-03-28', 135.00, '', 0, 300.000),
(26, 'A', 1, 26, 1, '', '2012-03-28', 13.59, '', 0, 30.200),
(27, '101', 2, 27, 6, '', '2012-02-29', 123.00, '', 0, 0.000),
(32, 'ALL', 2, 30, 5, '', '2012-03-14', 22.00, '', 0, 0.000),
(33, '103', 2, 30, 8, '123456545', '2012-03-13', 12.00, '', 0, 0.000),
(34, 'A', 1, 31, 1, '', '2012-03-28', 16.65, '', 0, 37.000),
(35, 'A', 1, 32, 1, '', '2012-03-29', 0.00, '', 0, 0.000),
(36, '103', 2, 33, 8, '', '2012-03-29', 20.00, '', 0, 0.000),
(37, 'All', 1, 34, 3, '', '2012-03-29', 19.00, '', 0, 0.000),
(38, 'C', 1, 35, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(39, 'C', 1, 36, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(40, 'C', 1, 37, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(41, 'C', 1, 38, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(42, 'C', 1, 39, 4, '', '2012-03-21', 2.20, '', 0, 0.000),
(43, 'C', 1, 40, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(44, '102', 2, 41, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(45, 'C', 1, 41, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(46, '102', 2, 42, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(47, 'C', 1, 42, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(48, '102', 2, 43, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(49, 'C', 1, 43, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(50, '102', 2, 44, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(51, 'C', 1, 44, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(52, '102', 2, 45, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(53, 'C', 1, 45, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(54, '102', 2, 46, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(55, 'C', 1, 46, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(56, '102', 2, 47, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(57, 'C', 1, 47, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(58, '102', 2, 48, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(59, 'C', 1, 48, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(60, '102', 2, 49, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(61, 'C', 1, 49, 4, '', '2012-03-21', 0.00, '', 0, 0.000),
(62, '102', 2, 50, 7, '', '2012-03-28', 19.00, '', 0, 0.000),
(63, 'C', 1, 50, 4, '', '2012-03-21', 0.00, '', 0, 0.000);

-- --------------------------------------------------------

--
-- Table structure for table `payable_types`
--

DROP TABLE IF EXISTS `payable_types`;
CREATE TABLE IF NOT EXISTS `payable_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `account_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payable_types`
--

INSERT INTO `payable_types` (`id`, `type`, `code`, `account_type_id`) VALUES
(2, 'Cleaning', 'CLN', 0),
(1, 'Real Estate Taxes', 'RET', 2),
(3, 'Maintenance ', 'MAT', 2),
(4, 'Utilities ', 'UTL', 2),
(5, 'Internet ', 'INT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pay_batches`
--

DROP TABLE IF EXISTS `pay_batches`;
CREATE TABLE IF NOT EXISTS `pay_batches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `vendor_id` int(10) unsigned NOT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `amount` float(12,4) NOT NULL DEFAULT '0.0000',
  `checking_account_id` int(11) NOT NULL DEFAULT '0',
  `check_num` int(10) unsigned NOT NULL,
  `printed` tinyint(1) unsigned NOT NULL,
  `employee_id` int(10) unsigned NOT NULL,
  `notes` text,
  `outstanding` tinyint(1) unsigned NOT NULL,
  `due_date` date NOT NULL,
  `reserved` tinyint(1) unsigned NOT NULL,
  `retax_period_id` int(11) NOT NULL,
  `vendor_text` text,
  `transfered` tinyint(1) NOT NULL,
  `void_check` tinyint(1) NOT NULL,
  `miles_check` tinyint(1) NOT NULL,
  `payable_type_id` int(11) NOT NULL,
  `check_balanced` tinyint(4) NOT NULL,
  `text_only` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `pay_batches`
--

INSERT INTO `pay_batches` (`id`, `date`, `vendor_id`, `invoice`, `amount`, `checking_account_id`, `check_num`, `printed`, `employee_id`, `notes`, `outstanding`, `due_date`, `reserved`, `retax_period_id`, `vendor_text`, `transfered`, `void_check`, `miles_check`, `payable_type_id`, `check_balanced`, `text_only`) VALUES
(27, '2012-03-29', 5, NULL, 123.0000, 4, 1234, 0, 2, '', 0, '2012-03-28', 0, 0, '', 0, 0, 0, 3, 1, 0),
(30, '2012-03-07', 4, '', 34.0000, 4, 1597, 0, 1, '', 0, '2012-03-13', 0, 0, '', 0, 0, 0, 1, 1, 0),
(31, '2012-03-28', 5, '', 16.6500, 5, 2121, 0, 1, 'This is a memo', 1, '2012-03-27', 0, 0, 'sdfsdf', 0, 0, 1, 3, 1, 0),
(26, '2012-03-20', 5, '', 39.6900, 2, 1234, 0, 2, '', 0, '2012-03-26', 0, 0, '', 0, 0, 1, 5, 1, 0),
(24, '2012-03-13', 3, '', 50.0000, 5, 12345, 0, 1, '', 1, '2012-03-27', 0, 0, '', 0, 0, 1, 3, 1, 0),
(32, '2012-03-26', 5, '', 1.0000, 2, 12321, 0, 1, 'A MEMO', 0, '2012-03-11', 0, 0, 'sdfsdf', 0, 0, 0, 5, 1, 0),
(33, '2012-03-28', 2, '', 20.0000, 5, 1234, 0, 1, '', 0, '2012-03-18', 0, 0, '', 0, 0, 0, 3, 1, 0),
(34, '2012-03-29', 1, NULL, 19.0000, 4, 1234, 0, 2, '', 0, '2012-03-29', 0, 0, '', 0, 0, 0, 2, 1, 0),
(35, '2012-03-29', 2, NULL, 0.0000, 3, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 3, 1, 0),
(36, '2012-03-29', 2, NULL, 0.0000, 3, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 3, 1, 0),
(37, '2012-03-29', 2, NULL, 0.0000, 3, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 3, 1, 0),
(38, '2012-03-29', 2, NULL, 0.0000, 3, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 3, 1, 0),
(39, '2012-03-29', 2, NULL, 22.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 3, 1, 0),
(40, '2012-03-29', 2, NULL, 0.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(41, '2012-02-27', 2, '', 19.5000, 5, 54654, 0, 2, '', 1, '2012-07-11', 0, 0, '', 0, 0, 0, 5, 1, 0),
(42, '2012-02-28', 2, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(43, '2012-02-28', 2, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(44, '2012-02-28', 2, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(45, '2012-02-28', 2, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(46, '2012-02-28', 6, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(47, '2012-02-28', 2, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(48, '2012-02-28', 2, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(49, '2012-02-28', 2, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(50, '2012-02-28', 2, NULL, 19.0000, 5, 54654, 0, 2, '', 0, '2012-07-12', 0, 0, '', 0, 0, 0, 5, 1, 0),
(51, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0),
(52, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0),
(53, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0),
(54, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0),
(55, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0),
(56, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0),
(57, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0),
(58, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0),
(59, '0000-00-00', 0, NULL, 0.0000, 0, 0, 0, 0, NULL, 0, '0000-00-00', 0, 0, NULL, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `retax_periods`
--

DROP TABLE IF EXISTS `retax_periods`;
CREATE TABLE IF NOT EXISTS `retax_periods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `period_re_tax` varchar(255) NOT NULL,
  `current` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tax_numbers`
--

DROP TABLE IF EXISTS `tax_numbers`;
CREATE TABLE IF NOT EXISTS `tax_numbers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_number` varchar(40) NOT NULL,
  `notes` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `group_id`) VALUES
(2, 'alex', 'password', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `is_bank` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `address`, `city`, `state`, `zipcode`, `is_bank`) VALUES
(1, 'Carpet Cleaning inc', '444 Main Street', 'Urbana', 'IL', '61801', 0),
(2, 'Mike''s Hardware Store', '967 Cobblestone Drive', 'Urbana', 'IL', '61801', 0),
(3, 'Harris Bank', '76 E. Busey', 'Champaign', 'IL', '61820', 1),
(4, 'Painters LLC', '578 Green Leaf Way', 'Urbana', 'IL', '61801', 0),
(5, 'IL Water Co', '96 University Road', 'Champaign', 'IL', '61801', 0),
(6, 'Comcast', '54 Comcast Lane', 'Urbana', 'IL', '61801', 0),
(7, 'Tom''s Pest Control', '2145 Washington Street', 'Champaign', 'IL', '61801', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
