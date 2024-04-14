-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2024 at 03:01 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_diagnostic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_contact` varchar(100) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_contact`) VALUES
(2, 'Bharath S', 'bharaths9061@gmail.com', 'Aa123456', '9061253966'),
(4, 'Adwin George Sajan', 'adwinsajan0123@gmail.com', 'Aa123456', '6238934237');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignstaff`
--

CREATE TABLE `tbl_assignstaff` (
  `assignstaff_id` int(11) NOT NULL auto_increment,
  `booking_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY  (`assignstaff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tbl_assignstaff`
--

INSERT INTO `tbl_assignstaff` (`assignstaff_id`, `booking_id`, `staff_id`) VALUES
(41, 12, 1),
(42, 13, 1),
(43, 31, 1),
(44, 34, 1),
(45, 35, 1),
(46, 36, 1),
(47, 37, 1),
(48, 38, 1),
(49, 39, 1),
(50, 39, 1),
(51, 40, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL auto_increment,
  `booking_time` varchar(50) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `test_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_status` varchar(50) NOT NULL default '0',
  `booked_datetime` varchar(100) NOT NULL,
  PRIMARY KEY  (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_time`, `booking_date`, `test_id`, `place_id`, `user_id`, `booking_status`, `booked_datetime`) VALUES
(13, '15:02', '2023-10-02', 1, 1, 1, '5', '2023-10-02 12:02:15'),
(14, '18:03', '2023-10-02', 1, 1, 1, '3', '2023-10-02 15:04:09'),
(16, '13:20', '2023-10-18', 4, 1, 1, '4', '2023-10-18 10:20:29'),
(17, '10:53', '2023-10-19', 4, 1, 1, '5', '2023-10-18 15:54:13'),
(18, '17:00', '2023-11-01', 4, 1, 1, '5', '2023-11-01 13:16:29'),
(19, '17:00', '2023-11-01', 4, 1, 1, '5', '2023-11-01 13:18:36'),
(20, '16:18', '2023-11-01', 4, 1, 1, '5', '2023-11-01 13:18:51'),
(21, '16:18', '2023-11-01', 4, 1, 1, '5', '2023-11-01 13:19:54'),
(22, '16:18', '2023-11-01', 4, 1, 1, '5', '2023-11-01 13:20:25'),
(23, '16:18', '2023-11-01', 4, 1, 1, '5', '2023-11-01 13:21:14'),
(24, '16:21', '2023-11-01', 4, 1, 1, '5', '2023-11-01 13:21:37'),
(25, '16:28', '2023-11-01', 0, 0, 1, '0', '2023-11-01 13:28:52'),
(26, '16:28', '2023-11-01', 0, 0, 1, '0', '2023-11-01 13:30:55'),
(27, '16:31', '2023-11-01', 0, 1, 1, '0', '2023-11-01 13:31:13'),
(28, '19:00', '2023-11-01', 4, 1, 1, '5', '2023-11-01 15:57:24'),
(29, '19:29', '2023-11-01', 4, 1, 1, '5', '2023-11-01 16:30:02'),
(30, '19:29', '2023-11-01', 4, 1, 1, '5', '2023-11-01 16:31:46'),
(31, '20:30', '2023-11-01', 2, 1, 1, '3', '2023-11-01 16:44:11'),
(32, '04:59', '2023-09-25', 4, 1, 1, '5', '2023-11-01 16:59:23'),
(33, '17:09', '2023-11-09', 0, 2, 1, '0', '2023-11-01 17:09:08'),
(34, '00:00', '2023-11-02', 4, 1, 1, '4', '2023-11-01 21:00:39'),
(35, '16:21', '2023-11-02', 4, 1, 1, '3', '2023-11-02 13:21:55'),
(36, '18:20', '2023-11-02', 4, 1, 1, '4', '2023-11-02 15:20:16'),
(37, '18:24', '2023-11-02', 4, 1, 1, '4', '2023-11-02 15:24:25'),
(38, '18:37', '2023-11-02', 4, 1, 1, '4', '2023-11-02 15:37:16'),
(39, '00:27', '2023-12-10', 4, 1, 1, '2', '2023-12-10 21:27:17'),
(40, '22:48', '2023-12-11', 4, 1, 4, '2', '2023-12-11 19:48:53'),
(41, '03:11', '2023-12-12', 4, 1, 1, '1', '2023-12-12 00:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL auto_increment,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Microbiology'),
(2, 'Basic Panel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL auto_increment,
  `complaint_title` varchar(50) NOT NULL,
  `complaint_content` varchar(200) NOT NULL,
  `complaint_date` varchar(50) NOT NULL,
  `complaint_reply` varchar(200) NOT NULL default 'Not Replied',
  `complaint_status` varchar(50) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `staff_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`complaint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_title`, `complaint_content`, `complaint_date`, `complaint_reply`, `complaint_status`, `user_id`, `staff_id`) VALUES
(25, '2345tyw', 'asdfghjqwer', '2023-09-19', 'wertytrerg', '1', 2, 0),
(27, 'wertyu', 'werty', '2023-09-19', '2w3e4rty', '1', 3, 0),
(28, 'wertyu', 'wertyu', '2023-09-19', 'Not Replied', '0', 0, 2),
(35, 'ergh', 'qwertg', '2023-11-01', 'Not Replied', '0', 1, 0),
(36, 'rtyu', '45r', '2023-11-01', 'Not Replied', '0', 0, 1),
(37, 'late', 'late arrival', '2023-12-11', 'Not Replied', '0', 4, 0),
(38, 'delay', 'delay at work', '2023-12-11', 'Not Replied', '0', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL auto_increment,
  `feedback_content` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY  (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`, `user_id`) VALUES
(8, 'dfghjhgfd', 2),
(9, 'ertytre', 2),
(10, 'good', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL auto_increment,
  `place_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`) VALUES
(1, 'muvattupuzha'),
(2, 'thodupuzha'),
(7, 'vazhakulam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `result_id` int(11) NOT NULL auto_increment,
  `result_content` varchar(100) NOT NULL,
  `booking_id` int(11) NOT NULL,
  PRIMARY KEY  (`result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`result_id`, `result_content`, `booking_id`) VALUES
(1, '7.pdf', 4),
(2, '7.pdf', 4),
(3, 'Screenshot 2023-07-13 052805.png', 6),
(4, '@WallpapersGram4k - Panda.jpg', 10),
(5, '@WallpapersGram4k - hitman-2-3840x2160-2018-4k-14651.jpg', 1),
(6, '101.jpg', 34),
(7, 'result.pdf', 36),
(8, 'result (1).pdf', 37),
(9, 'health lab.pdf', 38);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL auto_increment,
  `staff_name` varchar(50) NOT NULL,
  `staff_address` varchar(100) NOT NULL,
  `staff_contact` varchar(50) NOT NULL,
  `staff_gender` varchar(50) NOT NULL,
  `staff_age` varchar(50) NOT NULL,
  `staff_proof` varchar(100) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  `staff_password` varchar(50) NOT NULL,
  `staff_photo` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL,
  PRIMARY KEY  (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_name`, `staff_address`, `staff_contact`, `staff_gender`, `staff_age`, `staff_proof`, `staff_email`, `staff_password`, `staff_photo`, `place_id`) VALUES
(1, 'xyz', 'house 69', '8583926574', '', '', 'Screenshot 2023-07-13 055537.png', 'staff@gmail.com', '1234', 'Screenshot 2023-07-13 055333.png', 1),
(2, 'mno', 'address1', '9683945309', '', '', 'Screenshot 2023-07-13 053937.png', 'staff1@gmail.com', '1234', 'Screenshot 2023-07-13 054217.png', 2),
(3, 'staff2', 'address2', '8675547365', '', '', 'Screenshot 2023-07-13 052805.png', 'staff2@gmail.com', '1234', 'Screenshot 2023-07-13 053258.png', 3),
(4, 'staff3', 'address3', '8674644352', '', '', 'Screenshot 2023-07-13 054653.png', 'staff3@gmail.com', '1234', 'Screenshot 2023-07-13 054815.png', 2),
(7, 'Amar Jiji', 'address', '9999999999', 'Male', '20', '', 'amar@gmail.com', 'Aa123456', 'user-1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL auto_increment,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY  (`subcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(2, 'Antibody', 1),
(3, 'Liver Panel', 2),
(4, 'Electrolytes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `test_id` int(11) NOT NULL auto_increment,
  `test_name` varchar(100) NOT NULL,
  `test_price` varchar(50) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  PRIMARY KEY  (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`test_id`, `test_name`, `test_price`, `subcategory_id`) VALUES
(1, 'Sodium', '450', 4),
(4, 'rbc', '1000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_proof` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_age` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_address`, `user_contact`, `user_proof`, `user_email`, `user_password`, `user_photo`, `place_id`, `user_age`, `user_gender`) VALUES
(1, 'tinu Jose', 'house 10', '9875482647', 'Screenshot 2023-07-13 055537.png', 'user@gmail.com', '1234', 'Screenshot 2023-07-13 054815.png', 2, '', ''),
(4, 'Gison K Gemini', 'address', '9876543210', '', 'gkg@gmail.com', 'Aa123456', 'Screenshot (17).png', 1, '20', 'Male');
