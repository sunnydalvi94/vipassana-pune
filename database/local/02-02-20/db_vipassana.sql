-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 02:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('6pl4omr1sf2v7cq0jrqel09l6g9fh138', '::1', 1576666198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363636353931353b736573735f6578706972655f6f6e5f636c6f73657c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` text NOT NULL,
  `icon` text,
  `link` text NOT NULL,
  `has_submenu` enum('Y','N') NOT NULL DEFAULT 'Y',
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_name`, `icon`, `link`, `has_submenu`, `display`) VALUES
(1, 'Role Configuration', 'icon-users ', '', 'Y', 'Y'),
(2, 'Master', 'icon-layers ', '', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_priviledges`
--

CREATE TABLE IF NOT EXISTS `tbl_priviledges` (
  `priviledges_id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`priviledges_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_priviledges`
--

INSERT INTO `tbl_priviledges` (`priviledges_id`, `submenu_id`, `role_id`, `display`) VALUES
(1, 1, 1, 'Y'),
(3, 2, 1, 'Y'),
(4, 3, 1, 'Y'),
(5, 4, 1, 'Y'),
(6, 5, 1, 'Y'),
(7, 6, 1, 'Y'),
(8, 7, 1, 'Y'),
(9, 8, 1, 'Y'),
(10, 9, 1, 'Y'),
(11, 10, 1, 'Y'),
(12, 11, 1, 'Y'),
(13, 12, 1, 'Y'),
(14, 13, 1, 'Y'),
(15, 14, 1, 'Y'),
(16, 15, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(70) DEFAULT NULL,
  `role_desc` varchar(200) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `display` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`, `role_desc`, `created_by`, `created_on`, `modified_by`, `modified_on`, `display`) VALUES
(1, 'Superadmin', 'Superadmin', NULL, '2018-10-20 11:17:55', NULL, '2018-10-20 00:17:54', 'Y'),
(2, 'Institute', 'institute', NULL, '2018-10-20 11:17:55', 1, '2018-11-12 01:31:49', 'Y'),
(3, 'vendor', '123456', 1, '2019-06-20 19:08:11', NULL, '2019-06-20 13:38:22', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submenu`
--

CREATE TABLE IF NOT EXISTS `tbl_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `submenu_name` text NOT NULL,
  `action` text NOT NULL,
  `icon` varchar(500) DEFAULT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`submenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_submenu`
--

INSERT INTO `tbl_submenu` (`submenu_id`, `menu_id`, `submenu_name`, `action`, `icon`, `display`) VALUES
(1, 1, 'Role Master', 'role_list', 'fa fa-user', 'Y'),
(2, 1, 'User Master', 'user_list', 'fa fa-users', 'Y'),
(3, 1, 'Role Management', 'role_management', 'fa fa-ban', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `fullname` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `username` text,
  `password` varchar(32) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `user_image` text,
  `created_by` text,
  `created_on` datetime DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `role_id`, `fullname`, `email`, `mobile`, `username`, `password`, `city`, `pincode`, `address`, `user_image`, `created_by`, `created_on`, `modified_by`, `modified_on`, `display`) VALUES
(1, 1, 'Roshan deshmukh', 'rsdroshan@gmail.com', '8983045984', 'admin', '123456', NULL, NULL, 'Hatekar wadi', NULL, '1', '2019-06-20 19:41:25', NULL, '2019-12-18 06:03:15', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
