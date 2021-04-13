-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 08:48 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sexologist_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `appointment_id` varchar(20) DEFAULT NULL,
  `patient_id` varchar(20) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `problem` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `create_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `appointment_id`, `patient_id`, `department_id`, `doctor_id`, `schedule_id`, `serial_no`, `date`, `problem`, `created_by`, `create_date`, `status`) VALUES
(42, 'ASOQ60KT', 'PEJNSXWO', 2, 1, 4, 2, '2016-07-03', 'Test', 2, '2016-05-13', 1),
(43, 'AAKE0PBS', 'PEJNSXWO', 2, 1, 4, 1, '2016-09-22', 'Test', 4, '2015-05-13', 1),
(44, 'AAVGOT04', 'PEJNSXWO', 2, 1, 5, 1, '2016-08-17', 'PEJNSXWO', 4, '2016-10-13', 1),
(45, 'AES1FCCN', 'P7OGZGC3', 2, 5, 2, 1, '2016-06-15', '', 2, '2016-07-15', 1),
(46, 'AKYLZQ5G', 'P7OGZGC3', 2, 10, 8, 1, '2016-05-21', 'Test', 2, '2016-06-15', 1),
(47, 'A8FEEE5V', 'PDX3KY02', 1, 8, 5, 1, '2016-04-24', 'Test', 2, '2016-04-22', 1),
(48, 'ABH6BY50', 'PDX3KY02', 3, 7, 10, 1, '2016-03-27', 'Test', 1, '2016-03-05', 1),
(49, 'A9XKRCFB', 'P7OGZGC3', 2, 1, 6, 1, '2016-02-25', '10-25-2016', 1, '2016-02-04', 1),
(50, 'A1W3R6RJ', 'P7OGZGC3', 3, 7, 9, 1, '2016-10-23', 'P7OGZGC3 to Jahed Abdullah', 9, '2016-07-05', 1),
(51, 'AM4VOTQR', 'PDX3KY02', 2, 1, 6, 1, '2016-10-25', 'Test', 1, '2016-10-25', 1),
(53, 'AQEHTZNB', 'PEJNSXWO', 1, 8, 5, 1, '2016-10-31', 'Test', 2, '2016-10-25', 1),
(54, 'ALAUGR46', 'PEJNSXWO', 2, 1, 6, 2, '2016-10-25', 'Test', 2, '2016-10-25', 1),
(55, 'AD8TIJ3T', 'P7OGZGC3', 1, 8, 5, 2, '2016-10-31', 'T2', 9, '2016-10-25', 1),
(56, 'A8JRGYH7', 'P7OGZGC3', 2, 1, 6, 3, '2016-10-25', 'T3', 9, '2016-10-25', 1),
(57, 'AFLN6EJN', 'PEJNSXWO', 2, 1, 6, 1, '2016-11-01', 'Hello World', 2, '2016-10-26', 1),
(58, 'AB5VRYAU', 'P7OGZGC3', 2, 1, 6, 2, '2016-11-01', 'Test 2', 2, '2016-10-26', 1),
(59, 'A3TX7HK4', 'PF3A7NPY', 1, 8, 5, 3, '2016-10-31', 'Test', 9, '2016-10-27', 1),
(60, 'A92JT9L6', 'PB92AZ7I', 3, 7, 10, 1, '2016-10-27', 'Hasan', 1, '2016-10-27', 1),
(61, 'ATCZXWLO', 'PEJNSXWO', 1, 8, 5, 1, '2016-11-14', 'Test', 2, '2016-11-09', 1),
(63, 'AUGOT04K', 'PB92AZ7I', 2, 1, 6, 1, '2016-11-15', 'Test', 2, '2016-11-09', 1),
(64, 'AQ9NFJJU', 'PF3A7NPY', 2, 1, 6, 2, '2016-11-15', 'Test', 2, '2016-11-09', 1),
(65, 'AMRJYLZQ', 'PB92AZ7I', 1, 8, 5, 2, '2016-11-14', 'Test3', 2, '2016-11-09', 1),
(66, 'AQS0YEOF', 'PEJNSXWO', 3, 7, 10, 1, '2016-11-10', 'Test', 2, '2016-11-09', 1),
(67, 'AXP1MQK0', 'PEJNSXWO', 2, 1, 6, 3, '2016-11-15', 'TEST', 2, '2016-11-09', 1),
(68, 'AKNYTQRP', 'P7OGZGC3', 1, 8, 5, 3, '2016-11-14', 'TST', 0, '2016-11-10', 1),
(69, 'AP1MQK0P', 'P7OGZGC3', 1, 8, 5, 1, '2016-11-21', 'P7OGZGC3', 0, '2016-11-10', 1),
(70, 'AC6C9BZ3', 'PEJNSXWC', 2, 1, 6, 1, '2016-11-22', 'TEST', 0, '2016-11-17', 1),
(71, 'AOAJMOYY', 'P4FXWA25', 1, 8, 5, 2, '2016-11-21', '', 0, '2016-11-19', 1),
(72, 'ATSIC92A', 'P4FXWA25', 2, 1, 6, 2, '2016-11-22', 'TEST', 0, '2016-11-19', 1),
(73, 'AV3470JX', 'PPBSFHZP', 2, 1, 6, 3, '2016-11-22', 'TEST ', 0, '2016-11-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clinic_appointment`
--

DROP TABLE IF EXISTS `clinic_appointment`;
CREATE TABLE `clinic_appointment` (
  `id` int(11) NOT NULL,
  `onlineoffline` varchar(15) DEFAULT NULL,
  `app_type` varchar(15) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `consulttype` varchar(155) DEFAULT NULL,
  `consultid` varchar(155) DEFAULT NULL,
  `confirm` int(1) NOT NULL DEFAULT 1,
  `followup` int(11) NOT NULL DEFAULT 0,
  `delete_flag` int(11) NOT NULL DEFAULT 0,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_appointment`
--

INSERT INTO `clinic_appointment` (`id`, `onlineoffline`, `app_type`, `user_id`, `patient_id`, `date`, `start_time`, `end_time`, `consulttype`, `consultid`, `confirm`, `followup`, `delete_flag`, `added_time`) VALUES
(1, 'online', NULL, 1, 1, '2018-10-25', '09:00:00', '09:30:00', 'Whatsapp Chat', '8286825322', 1, 0, 0, '2018-08-23 12:28:09'),
(2, 'online', NULL, 1, 2, '2019-04-07', '09:00:00', '09:30:00', 'Whatsapp Chat', '8286825922', 1, 0, 0, '2019-03-31 03:49:40'),
(3, 'online', NULL, 1, 3, '2019-04-08', '09:30:00', '10:00:00', 'Whatsapp Chat', '', 1, 0, 0, '2019-03-31 03:59:49'),
(4, 'online', NULL, 3, 4, '2019-04-08', '11:00:00', '11:30:00', 'Whatsapp Chat', '9820686479', 4, 0, 0, '2019-04-06 07:19:45'),
(5, 'online', 'Single', 1, 5, '2019-04-08', '09:00:00', '09:30:00', 'Whatsapp Chat', '8286825322', 1, 0, 0, '2019-04-07 13:11:47'),
(6, 'personally', NULL, 3, 10, '2020-01-14', '17:00:00', '17:30:00', '', NULL, 1, 0, 0, '2020-01-14 10:49:22'),
(7, 'online', NULL, 3, 12, '2020-01-16', '10:00:00', '10:30:00', 'Whatsapp Chat', '231312312321', 1, 0, 0, '2020-01-14 10:52:46'),
(8, 'personally', 'Single', 1, 1, '2020-01-15', '15:30:00', '16:00:00', '', NULL, 1, 0, 0, '2020-01-14 11:18:59'),
(9, 'personally', 'Single', 3, 2, '2020-01-15', '10:00:00', '10:30:00', '', NULL, 1, 0, 0, '2020-01-14 11:19:13'),
(10, 'personally', 'Single', 1, 3, '2020-01-21', '10:30:00', '11:00:00', '', NULL, 1, 0, 0, '2020-01-14 11:21:57'),
(11, 'personally', 'Single', 3, NULL, '2020-01-15', '10:30:00', '11:00:00', '', NULL, 1, 0, 0, '2020-01-14 11:24:49'),
(12, 'personally', 'Couple', 3, 2, '2020-01-16', '10:30:00', '11:00:00', '', NULL, 1, 0, 0, '2020-01-14 11:30:13'),
(13, 'personally', 'Couple', 1, 3, '2020-01-14', '17:30:00', '18:00:00', '', NULL, 1, 0, 0, '2020-01-14 11:49:47'),
(14, 'personally', 'Single', 3, 2, '2020-01-17', '10:00:00', '10:30:00', '', NULL, 1, 0, 0, '2020-01-14 11:51:09'),
(15, 'personally', 'Single', 1, 3, '2020-01-15', '11:30:00', '12:00:00', '', NULL, 1, 0, 0, '2020-01-14 11:52:36'),
(16, 'personally', 'Single', 3, 2, '2020-01-16', '11:00:00', '11:30:00', '', NULL, 1, 0, 0, '2020-01-14 11:52:56'),
(17, 'personally', 'Couple', 1, 3, '2020-01-15', '12:00:00', '12:30:00', '', NULL, 1, 0, 0, '2020-01-14 11:59:56'),
(18, 'personally', 'Single', 3, 2, '2020-01-16', '11:30:00', '12:00:00', '', NULL, 1, 0, 0, '2020-01-14 12:04:34'),
(19, 'personally', 'Couple', 1, 3, '2020-01-21', '11:00:00', '11:30:00', '', NULL, 1, 0, 0, '2020-01-14 12:05:18'),
(20, 'personally', 'Single', 3, 2, '2020-01-17', '11:00:00', '11:30:00', '', NULL, 1, 0, 0, '2020-01-14 12:06:55'),
(21, 'personally', 'Couple', 3, 2, '2020-01-17', '11:30:00', '12:00:00', '', NULL, 1, 0, 0, '2020-01-14 12:13:03'),
(22, 'online', 'Single', 3, 2, '2020-09-16', '10:00:00', '10:30:00', 'Whatsapp Chat', '9820686479', 1, 0, 0, '2020-09-15 09:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_holiday`
--

DROP TABLE IF EXISTS `clinic_holiday`;
CREATE TABLE `clinic_holiday` (
  `id` int(11) NOT NULL,
  `h_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `delete_flag` int(11) NOT NULL DEFAULT 0,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_holiday`
--

INSERT INTO `clinic_holiday` (`id`, `h_date`, `start_time`, `end_time`, `delete_flag`, `added_time`) VALUES
(1, '2018-04-25', '11:00:00', '12:00:00', 0, '2018-04-25 03:05:59'),
(2, '2018-04-25', '14:30:00', '16:00:00', 0, '2018-04-25 03:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_payment`
--

DROP TABLE IF EXISTS `clinic_payment`;
CREATE TABLE `clinic_payment` (
  `id` int(11) NOT NULL,
  `appointment_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `invoice_id` varchar(50) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `transaction_no` varchar(200) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_payment`
--

INSERT INTO `clinic_payment` (`id`, `appointment_id`, `user_id`, `patient_id`, `invoice_id`, `amount`, `transaction_no`, `transaction_id`, `added_time`) VALUES
(1, 1, 1, 1, '20', 150, '1535027177', '20L79882Y9951083P', '2018-08-23 12:28:09'),
(2, 2, 1, 2, '1', 150, '1554003804', '1L810250GN534700P', '2019-03-31 03:49:40'),
(3, 3, 1, 3, '6', 150, '1554004685', '6LV98281X59254500', '2019-03-31 03:59:49'),
(4, 4, 3, 4, '2', 150, '1554535138', '2P195501TA606552W', '2019-04-06 07:19:45'),
(5, 5, 1, 5, '5ca9f6caebc01', 5000, '1554642634', '2PR56286J03203144', '2019-04-07 13:11:47'),
(6, 6, 3, 10, 'T2WF468126', 4000, '1578998038', '309005743593', '2020-01-14 10:49:22'),
(7, 7, 3, 12, 'M6GJ199240', 5000, '1578999140', '309005743699', '2020-01-14 10:52:46'),
(8, 8, 1, 1, 'F1JY532398', 2000, '1579000694', '309005743870', '2020-01-14 11:18:59'),
(9, 9, 3, 2, 'W9DI285084', 2000, '1579000732', '309005743873', '2020-01-14 11:19:13'),
(10, 10, 1, 3, 'K8YV187468', 2000, '1579000882', '309005743889', '2020-01-14 11:21:57'),
(11, 11, 3, NULL, 'Q3JC654860', 2000, '1579001022', '309005743913', '2020-01-14 11:24:49'),
(12, 12, 3, 2, 'A8WU475124', 4000, '1579001389', '309005743961', '2020-01-14 11:30:13'),
(13, 13, 1, 3, 'X5GV766422', 4000, '1579002485', '309005744045', '2020-01-14 11:49:47'),
(14, 14, 3, 2, 'C9GA431264', 2000, '1579002614', '309005744056', '2020-01-14 11:51:09'),
(15, 15, 1, 3, 'W2GL152933', 2000, '1579002743', '309005744068', '2020-01-14 11:52:36'),
(16, 16, 3, 2, 'N9AS708918', 2000, '1579002752', '309005744070', '2020-01-14 11:52:56'),
(17, 17, 1, 3, 'A1PR919200', 4000, '1579003183', '309005744097', '2020-01-14 11:59:56'),
(18, 18, 3, 2, 'Z7CH492923', 2000, '1579003332', '309005744111', '2020-01-14 12:04:34'),
(19, 19, 1, 3, 'A4VU347082', 4000, '1579003505', '309005744127', '2020-01-14 12:05:18'),
(20, 20, 3, 2, 'R0HQ384020', 2000, '1579003599', '309005744141', '2020-01-14 12:06:55'),
(21, 21, 3, 2, 'Y0HQ638653', 4000, '1579003970', '309005744164', '2020-01-14 12:13:03'),
(22, 22, 3, 2, 'Y6RX636586', 5000, '1600162301', '309006397374', '2020-09-15 09:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_timing`
--

DROP TABLE IF EXISTS `clinic_timing`;
CREATE TABLE `clinic_timing` (
  `id` int(11) NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `lunch_start` time DEFAULT NULL,
  `lunch_end` time DEFAULT NULL,
  `closed` int(11) NOT NULL DEFAULT 0,
  `time_slot` int(11) NOT NULL DEFAULT 30
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_timing`
--

INSERT INTO `clinic_timing` (`id`, `day`, `start_time`, `end_time`, `lunch_start`, `lunch_end`, `closed`, `time_slot`) VALUES
(1, 'MON', '09:00:00', '21:00:00', '13:00:00', '14:00:00', 0, 30),
(2, 'TUE', '09:00:00', '21:00:00', '13:00:00', '14:00:00', 0, 30),
(3, 'WED', '09:00:00', '21:00:00', '13:00:00', '14:00:00', 0, 30),
(4, 'THU', '09:00:00', '21:00:00', '13:00:00', '14:00:00', 0, 30),
(5, 'FRI', '09:00:00', '21:00:00', '13:00:00', '14:00:00', 0, 30),
(6, 'SAT', '09:00:00', '21:00:00', '13:00:00', '14:00:00', 0, 30),
(7, 'SUN', '09:00:00', '17:00:00', '13:00:00', '14:00:00', 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

DROP TABLE IF EXISTS `contact_details`;
CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `address_type` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `parking_status` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `timings` varchar(200) NOT NULL,
  `can_schedule` int(11) NOT NULL DEFAULT 0,
  `other_text` varchar(500) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `added_in` timestamp NULL DEFAULT current_timestamp(),
  `delete_flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `address_type`, `address`, `parking_status`, `contact_no`, `timings`, `can_schedule`, `other_text`, `longitude`, `latitude`, `added_in`, `delete_flag`) VALUES
(1, 'Main Centre: Kandivali', '301, Sanjar Enclave, Opp. Milap PVR Cinema, S. V. Road, Kandivali West,\r\nMumbai 400067. Maharashtra. India', 'Parking inside the lane.', 'Landline: 912228053555', 'Monday to Saturday 9 am to 9 pm with prior appointment only.', 1, 'https://www.google.co.in/maps/place/Purnam+Health+Center/@19.1786071,72.8325643,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7b6f6adaf6849:0x698e5e887652232b!8m2!3d19.178602!4d72.834753', '19.178310', '72.834874', '2017-11-01 13:50:00', 0),
(2, 'Branch: Chowpatty', '29-A, 1st Floor, Dr. Atmaram Rangnekar Marg, Above Brij Mandal Hall, Opp Anokhi, off Hughes road, \r\nIn the lane of.metro motors, Opp. Starbucks coffee ,\r\n\r\nGirgaum Chowpatty, Mumbai - 400007 ', 'Parking in nearby lanes.', '9819035111', 'Every Thursday 2 pm to 9 pm', 0, 'https://www.google.co.in/maps/place/Infinite+Studio./@18.9566525,72.8119143,20.04z/data=!4m12!1m6!3m5!1s0x3be7ce0e934a9a15:0x7c81ad97354ef111!2sAnokhi!8m2!3d18.9567599!4d72.8122452!3m4!1s0x3be7ce0e560bbec9:0x372114f92864bed9!8m2!3d18.9566052!4d72.8124335', '18.956631', '72.812377', '2017-11-01 13:54:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coupon_code`
--

DROP TABLE IF EXISTS `coupon_code`;
CREATE TABLE `coupon_code` (
  `id` int(11) NOT NULL,
  `type_of` int(11) NOT NULL COMMENT '0 for SIngle / 1 for Multi',
  `image_url` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `coupon_code` varchar(15) NOT NULL COMMENT 'generated coupon code',
  `amount` int(11) NOT NULL DEFAULT 0 COMMENT 'coupon amount',
  `percentage` int(11) NOT NULL DEFAULT 0 COMMENT 'coupon percentage ',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Date of creation',
  `start_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL COMMENT 'Date of Expiry',
  `already_used` int(11) NOT NULL DEFAULT 0 COMMENT '1 if Already used',
  `min_amount` int(11) NOT NULL DEFAULT 0,
  `min_pairs` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_code`
--

INSERT INTO `coupon_code` (`id`, `type_of`, `image_url`, `title`, `short_desc`, `coupon_code`, `amount`, `percentage`, `create_date`, `start_date`, `expiry_date`, `already_used`, `min_amount`, `min_pairs`) VALUES
(1, 1, 'http://sexologist.purnamhealth.com/assets/img/coupon/consulting.jpg', '10% on Consulting fees', '10% discount on <b>Consulting fees</b>, eligible for 3 months.', 'CONFEES10', 0, 10, '2017-11-08 02:11:55', '2017-11-03', '2018-01-03', 0, 0, 0),
(2, 1, 'http://sexologist.purnamhealth.com/assets/img/coupon/pre_marriage.jpg', '10% on Pre-Marriage Counselling Seminars', 'Lifetime 10% discount on <b>Pre-Marriage Counselling Seminars</b>, for 3 months', 'LIFEPM10', 0, 10, '2017-11-08 02:12:13', '2017-11-04', NULL, 0, 0, 0),
(3, 1, 'http://sexologist.purnamhealth.com/assets/img/coupon/healthy_life.jpg', '10% on Healthy Lifestyle and Stress Management Classes', 'Lifetime 10% discount on <b>Healthy Lifestyle and Stress Management Classes</b>', 'LIFEHLSM10', 0, 10, '2017-11-08 02:14:33', '2017-11-03', '2017-11-02', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `dprt_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dprt_id`, `name`, `description`, `status`) VALUES
(1, 'Apple', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on', 1),
(2, 'Orange', 'The orange is the fruit of the citrus species Citrus Ã— sinensis in the family Rutaceae. The fruit of the Citrus Ã— sinensis is considered a sweet orange, whereas the fruit of the Citrus Ã— aurantium is considered a bitter orange.', 1),
(3, 'Mango', 'The mango is a juicy stone fruit belonging to the genus Mangifera, consisting of numerous tropical fruiting trees, cultivated mostly for edible fruit. The majority of these species are found in nature as wild mangoes.', 1),
(4, 'Bannana', 'The banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called plantains', 1),
(5, 'Lemon', 'The lemon is a species of small evergreen tree native to Asia. The tree\'s ellipsoidal yellow fruit is used for culinary and non-culinary purposes throughout the world, primarily for its juice, which has both culinary and cleaning uses', 1),
(6, 'Jackfruit', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on', 1),
(7, 'Test', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on', 1),
(8, 'Watermelon', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on', 1),
(9, 'Pineapple', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on', 1),
(10, 'Grape', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on', 1),
(11, 'Olive', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on', 1),
(12, 'Hasan', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `enquiry` text DEFAULT NULL,
  `checked` tinyint(1) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `checked_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `email`, `phone`, `name`, `enquiry`, `checked`, `ip_address`, `user_agent`, `checked_by`, `created_date`, `status`) VALUES
(1, 'enquiry@example.com', '0123456789', 'Jane Doe', 'HTML5 doctype\n\nBootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.\n\n<!DOCTYPE html>\n<html lang=\"en\">\n  ...\n</html>\n\nMobile first\n\nWith Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3, we\'ve rewritten the project to be mobile friendly from the start. Instead of adding on optional mobile styles, they\'re baked right into the core. In fact, Bootstrap is mobile first. Mobile first styles can be found throughout the entire library instead of in separate files.\n\nTo ensure proper rendering and touch zooming, add the viewport meta tag to your <head>.\n\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n\nYou can disable zooming capabilities on mobile devices by adding user-scalable=no to the viewport meta tag. This disables zooming, meaning users are only able to scroll, and results in your site feeling a bit more like a native application. Overall, we don\'t recommend this on every site, so use caution!', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(4, 'enquiry@example.com', '0123456789', 'Jhon Doe 2', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(10, 'enquiry@example.com', '0123456789', 'Jhon Doe 3 ', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(11, 'enquiry@example.com', '0123456789', 'Jhon Doe 4 ', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(19, 'enquiry@example.com', '0123456789', 'Jhon Doe 5 ', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(20, 'enquiry@example.com', '0123456789', 'Jhon Doe 6 ', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(22, 'enquiry@example.com', '0123456789', 'Jhon Doe 7 ', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(23, 'enquiry@example.com', '0123456789', 'Jhon Doe', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(24, 'enquiry@example.com', '0123456789', 'Jhon Doe', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 0, '2016-10-12 11:25:00', 1),
(25, 'enquiry@example.com', '0123456789', 'Jhon Doe', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\n\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 0, '2016-10-12 11:25:00', 1),
(26, 'enquiry@example.com', '0123456789', 'Jhon Doe', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(27, 'enquiry@example.com', '0123456789', 'Jhon Doe', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 0, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 0, '2016-10-12 11:25:00', 1),
(28, 'enquiry@example.com', '0123456789', 'Jhon Doe', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(30, 'enquiry@example.com', '0123456789', 'Jhon Doe', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(35, 'enquiry@example.com', '0123456789', 'Jhon Doe -1', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(36, 'enquiry@example.com', '0123456789', 'Jhon Doe 0 ', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(37, 'enquiry@example.com', '0123456789', 'Jhon Doe 1', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(38, 'enquiry@example.com', '0123456789', 'Jhon Doe 2', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(39, 'enquiry@example.com', '0123456789', 'Jhon Doe 3', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(40, 'enquiry@example.com', '0123456789', 'Jhon Doe 4', 'Grid system\r\n\r\nBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.\r\nIntroduction\r\n\r\nGrid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:\r\n\r\n    Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.\r\n    Use rows to create horizontal groups of columns.\r\n    Content should be placed within columns, and only columns may be immediate children of rows.\r\n    Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.\r\n    Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.\r\n    The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.\r\n    Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.\r\n    If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.\r\n    Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.\r\n\r\nLook to the examples for applying these principles to your code.', 1, '198.168.0.25', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-12 11:25:00', 1),
(42, 'tuhin@sorkar.com', '12398479238479', 'Test', '\r\nWhy do I have to complete a CAPTCHA?\r\n\r\nCompleting the CAPTCHA proves you are a human and gives you temporary access to the web property.\r\nWhat can I do to prevent this in the future?\r\n\r\nIf you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.\r\n\r\nIf you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.\r\n\r\nWhy do I have to complete a CAPTCHA?\r\n\r\nCompleting the CAPTCHA proves you are a human and gives you temporary access to the web property.\r\nWhat can I do to prevent this in the future?\r\n\r\nIf you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.\r\n\r\nIf you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.\r\n\r\nWhy do I have to complete a CAPTCHA?\r\n\r\nCompleting the CAPTCHA proves you are a human and gives you temporary access to the web property.\r\nWhat can I do to prevent this in the future?\r\n\r\nIf you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.\r\n\r\nIf you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.\r\n\r\nWhy do I have to complete a CAPTCHA?\r\n\r\nCompleting the CAPTCHA proves you are a human and gives you temporary access to the web property.\r\nWhat can I do to prevent this in the future?\r\n\r\nIf you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.\r\n\r\nIf you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.\r\n\r\nWhy do I have to complete a CAPTCHA?\r\n\r\nCompleting the CAPTCHA proves you are a human and gives you temporary access to the web property.\r\nWhat can I do to prevent this in the future?\r\n\r\nIf you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.\r\n\r\nIf you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.\r\n\r\nWhy do I have to complete a CAPTCHA?\r\n\r\nCompleting the CAPTCHA proves you are a human and gives you temporary access to the web property.\r\nWhat can I do to prevent this in the future?\r\n\r\nIf you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.\r\n\r\nIf you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.\r\n\r\nWhy do I have to complete a CAPTCHA?\r\n\r\nCompleting the CAPTCHA proves you are a human and gives you temporary access to the web property.\r\nWhat can I do to prevent this in the future?\r\n\r\nIf you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.\r\n\r\nIf you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.\r\n', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-10-17 11:31:11', 1),
(43, 'hello@example.com', '1234567980', 'Hello World', 'Test Enquiry', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-11-14 10:37:14', 1),
(44, 'hello@example.com', '1234567980', 'Hello World', 'Test Enquiry', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-11-14 10:38:11', 1),
(45, 'hello@example.com', '1234567980', 'Hello World', 'est', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-11-14 10:39:42', 1),
(46, 'admin@example.com', '1234567980', 'Samim Hasan', 'TESER', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-11-14 10:40:00', 1),
(54, 'samim_hasan@gmail.com', '23580009866', 'Samim Hasan', 'Samim Hasan', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', 2, '2016-11-14 11:09:31', 1),
(55, 'haas@gmail.com', '0123456789', 'Harald Haas', 'Hello World!', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', NULL, '2016-11-19 06:54:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

DROP TABLE IF EXISTS `event_details`;
CREATE TABLE `event_details` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(250) NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `event_time` varchar(50) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `long_desc` text NOT NULL,
  `event_image_url` varchar(250) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `enroll_now` int(11) NOT NULL DEFAULT 0,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `delete_flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_title`, `event_date`, `event_time`, `short_desc`, `long_desc`, `event_image_url`, `contact_number`, `enroll_now`, `added_on`, `delete_flag`) VALUES
(1, 'Pre Marriage Counselling', 'Coming Soon', '', '<p class=\"lineheight28\"> <b>We take for granted, the Relationship, Love and Sex life;</b> in fact, entire institution of Marriage?!</p>\r\n                <p> Result: Often unwarranted compromised marriages, marital discord, depression, sexual dissatisfaction, extra marital affairs, divorces and so forth. <b>All preventable, though!</b></p>', '<link href=\"http://sexologist.purnamhealth.com/assets/css/bootstrap.min.css?time=1510107716\" rel=\"stylesheet\">\r\n <link rel=\"stylesheet\" href=\"http://sexologist.purnamhealth.com/assets/css/style.css?time=1510107716\" type=\"text/css\" />\r\n<p> <b>Vivaha, the Pre Marriage Counselling Program </b>  is a a blue print for a meaningful and happy marriage life,  an outcome of 26 years of experience of counselling and treating thousands of individuals  and couples with their relationship and sexuality issues. No wonder, it will help young couples not only to avoid ‘accidents’ in their marriage but lay a strong foundation of courtship and early marriage, for a loving and exciting lifelong journey from day one (or night one!) of marriage! A great start initiates a great journey! </p>\r\n                <p>Vivaha initiates couple into, ...</p>\r\n                <ul class=\"arrows_list1\">\r\n                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Concept and purpose of Marriage</a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Concept of Marital Relationship</a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Heart to heart Communication</a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Male — female sexuality</a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> First Night — Honeymoon — first lovemaking</a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Foreplay — Interplay — After play.  Sexual Intimacy.</a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Conception—Contraception</a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Pre marriage fitness</a></li>\r\n                </ul>', 'http://sexologist.purnamhealth.com/assets/img/premarriage.jpg', '9869035111', 0, '2017-11-01 14:27:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_admin`
--

DROP TABLE IF EXISTS `master_admin`;
CREATE TABLE `master_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `last_login` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_admin`
--

INSERT INTO `master_admin` (`id`, `name`, `username`, `password`, `email`, `activated`, `last_login`) VALUES
(1, 'Administrator', 'admin', '923f4b8d288710524b6e9706a8b82b7b3abcbc25fbb9208f8d2509b38e05f07386c306d9f62d6be95b706bf0d41b31ed625a4a2b73d8af699c077c0c7b831aa2UOgMHlCictGKIMn/zljWHkGd/8sN1M5e7Qe0JpZnLwc=', NULL, 1, '2015-12-05 10:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `master_allergy`
--

DROP TABLE IF EXISTS `master_allergy`;
CREATE TABLE `master_allergy` (
  `id` int(11) NOT NULL,
  `allergy` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_allergy`
--

INSERT INTO `master_allergy` (`id`, `allergy`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(2, 'Dust', '1', 1, 0, '60.243.29.48', 1503552344),
(3, 'Smoke', '1', 1, 0, '60.243.29.48', 1503553528),
(4, 'flower', '1', 1, 0, '60.243.29.48', 1503552352),
(5, 'perfume', '1', 1, 0, '60.243.29.48', 1503552355),
(6, 'Medicines', '1', 1, 0, '60.243.29.48', 1503552404),
(7, 'Food Item', '1', 1, 0, '116.72.127.218', 1536393174),
(8, 'Mosquito coil', '1', 1, 0, '116.72.127.218', 1536393186),
(9, 'Cold items', '1', 1, 0, '116.72.127.218', 1536393194),
(10, 'Packaged food', '1', 1, 0, '116.72.127.218', 1536393204),
(11, 'Soft drinks', '1', 1, 0, '116.72.127.218', 1536393227),
(12, 'Sulpha drugs', '1', 1, 0, '115.97.65.55', 1548574426),
(13, 'Penicilline', '1', 1, 0, '115.97.65.55', 1548574433),
(14, 'Room freshner', '1', 1, 0, '115.97.65.55', 1548574454),
(15, 'Deo Deorderent', '1', 1, 0, '115.97.65.55', 1548574470),
(16, 'Other', '1', 1, 0, '27.4.215.17', 1599714636);

-- --------------------------------------------------------

--
-- Table structure for table `master_appointmentstatus`
--

DROP TABLE IF EXISTS `master_appointmentstatus`;
CREATE TABLE `master_appointmentstatus` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_appointmentstatus`
--

INSERT INTO `master_appointmentstatus` (`id`, `status`, `ip`, `added_date`) VALUES
(1, 'Pending', NULL, NULL),
(2, 'Confirm', NULL, NULL),
(3, 'Cancel', NULL, NULL),
(4, 'Postpond', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_banner`
--

DROP TABLE IF EXISTS `master_banner`;
CREATE TABLE `master_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `delete_flag` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_banner`
--

INSERT INTO `master_banner` (`banner_id`, `banner_image`, `banner_name`, `description`, `url`, `added_on`, `delete_flag`) VALUES
(1, 'http://sexologist.purnamhealth.com/assets/img/banner1.jpg', 'Homeopathy', 'Homeopathy', '', '2017-11-03 14:01:28', 0),
(2, 'http://sexologist.purnamhealth.com/assets/img/banner2.jpg', 'Life Style Disorders', 'Life Style Disorders', '', '2017-11-03 14:01:28', 0),
(3, 'http://sexologist.purnamhealth.com/assets/img/banner3.jpg', 'Corporate Stress Management', 'Corporate Stress Management', '', '2017-11-03 14:01:28', 0),
(4, 'http://sexologist.purnamhealth.com/assets/img/banner4.jpg', 'Pre Marriage Councelling', 'Pre Marriage Councelling', '', '2017-11-03 14:01:28', 0),
(5, 'http://sexologist.purnamhealth.com/assets/img/banner5.jpg', 'Sexual Dysfunctions', 'Sexual Dysfunctions', '', '2017-11-03 14:01:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_casestudy`
--

DROP TABLE IF EXISTS `master_casestudy`;
CREATE TABLE `master_casestudy` (
  `id` int(11) NOT NULL,
  `comment_date` date DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_casestudy`
--

INSERT INTO `master_casestudy` (`id`, `comment_date`, `comment`, `image`, `active`) VALUES
(8, '2020-09-10', 'vdsd<br />assadas<br />dasdas', '20191225032629.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_category`
--

DROP TABLE IF EXISTS `master_category`;
CREATE TABLE `master_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_category`
--

INSERT INTO `master_category` (`id`, `category`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'SYMPTOM', '1', 1, 0, '::1', 1536417124),
(2, 'DISEASE', '1', 1, 0, '::1', 1536417128),
(3, 'Sexual Dysfunction Men', '1', 1, 0, '::1', 1536417132),
(4, 'Sexual Dysfunction Women', '1', 1, 0, '::1', 1536417139),
(5, 'Physiological', '1', 1, 0, '::1', 1536417215),
(6, 'Exercise & Hobby', '1', 1, 0, '::1', 1536417218),
(7, 'Mind', '1', 1, 0, '::1', 1536417222),
(8, 'Tests', '1', 1, 0, '::1', 1536417226),
(9, 'HOMEOPATHY', '1', 1, 0, '::1', 1536417229);

-- --------------------------------------------------------

--
-- Table structure for table `master_contact`
--

DROP TABLE IF EXISTS `master_contact`;
CREATE TABLE `master_contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `addeddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `contact_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_contact`
--

INSERT INTO `master_contact` (`id`, `full_name`, `email`, `subject`, `message`, `addeddate`, `contact_type`) VALUES
(1, 'gdfg', 'dfdsf@gmail.com', 'gfdgdfg', 'dfgdfg\r\ngdfg\r\ndf\r\ngdf\r\ng', '2017-07-13 10:54:02', 'consult-online');

-- --------------------------------------------------------

--
-- Table structure for table `master_content`
--

DROP TABLE IF EXISTS `master_content`;
CREATE TABLE `master_content` (
  `id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `second_title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `short_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_content`
--

INSERT INTO `master_content` (`id`, `category`, `title`, `second_title`, `description`, `short_title`) VALUES
(14, 'Men', 'Low Sexual Desire', 'Men, and low sexual desire!? Sounds unbelievable, but its true.', '&lt;p&gt;Men, and low sexual desire!? Sounds unbelievable, but its true.&lt;/p&gt;\r\n\r\n&lt;p&gt;Apart from genetic, hereditary, biological, medical and hormonal factors, in this modern and digital area with varieties of rising levels of stress, relationship issues, stress disorders, medications, addictions and lifestyle issues the incidences of low sexual desire is on phenomenal rise, in todays men.&lt;/p&gt;\r\n\r\n&lt;p&gt;And that&amp;rsquo;s all the more reason that these complex factors requires highly comprehensive (evaluation and) approach and not just shots of external testosterone (or any so called &amp;lsquo;aphrodisiacs&amp;rsquo; or sex tonics or stimulants) which is always tagged with side effects and has the potential to reduce body&amp;rsquo;s own capacity to produce natural testosterone.&lt;/p&gt;\r\n\r\n&lt;p&gt;We specialize in going to the root cause of your problem and help you recover with long term and natural, medicinal and non medicinal solutions!&lt;/p&gt;\r\n', 'Low_Sexual_Desire'),
(15, 'Men', 'Erectile Dysfunction', 'Only potent thing against love is Impotency!', '&lt;p&gt;Common Reasons:&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Medical or Organic: Hypertension. Diabetes. High cholesterol and triglycerides. Neurological disorders. Low testosterone. High Prolactin. Hypothyroid with high TSH. Allopathic medicines (antihypertensive, sleep and depression pills, antibiotics, painkillers, anti allergic, antacids, anti lipids etc.), low hemoglobin, Alcohol and Nicotine and other substance abuse.&lt;/p&gt;\r\n\r\n&lt;p&gt;2. Psychological and situational: Emotional trauma. Mental stress including work and finance related. Performance pressure and anxiety.&lt;/p&gt;\r\n\r\n&lt;p&gt;There are often combination of all these and other factors in most cases. This requires highly comprehensive evaluation and approach, and not just shots of sildenafil citrate or tadalafil (or any so called &amp;lsquo;aphrodisiacs&amp;rsquo; or sex tonics or stimulants) which is always tagged with side effects and dependence and has the potential to reduce body&amp;rsquo;s own capacity to produce natural erection.&lt;/p&gt;\r\n\r\n&lt;p&gt;We specialize in going to the root cause of your problem and help you recover with long term and natural, medicinal and non medicinal solutions! Without any side effects or dependence.&lt;/p&gt;\r\n', 'Erectile_Dysfunction'),
(16, 'Men', 'Premature Ejaculation', 'Everything in life is good to achieve quickly and before time, except orgasm!', '&lt;p&gt;Premature Ejaculation is essentially an early orgasmic response, due to fast pace of excitement, resulting in quick achieving of orgasm and hence ejaculation. It reflects lack of control on force / pace or sexual excitement rather than lack of strength.&lt;/p&gt;\r\n\r\n&lt;p&gt;Reasons:&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Local hypersensitivity of glans.&lt;/p&gt;\r\n\r\n&lt;p&gt;2. Constitutionally many individuals are known to react fast, sexually.&lt;/p&gt;\r\n\r\n&lt;p&gt;3. Previous history of masturbation where one is habituated to masturbate to quickly to orgasm; and, then it becomes a self repetitive response pattern in any sexual encounter, too.&lt;/p&gt;\r\n\r\n&lt;p&gt;4. Lack of stamina and fitness. Including due to overweight, hypertension and cardiac disorders.&lt;/p&gt;\r\n\r\n&lt;p&gt;5. Stress and hurried nature.&lt;/p&gt;\r\n\r\n&lt;p&gt;Solution: With our innovative and scientific approach we have made a classic breakthrough, which help you permanently improve and change your fast pace of excitement to a moderate one, which naturally prolongs your timings in each sexual encounter.&lt;/p&gt;\r\n', 'Premature_Ejaculation'),
(17, 'Men', 'Performance Anxiety', '\'Performance\' and \'Performing\' matters a lot to men\'s sexual self esteem and effects the very core of his manhood!', '&lt;p&gt;Any problem in erection or condition of premature ejaculation, or even an occasional failure to do proper love making, is perceived a s a blot to manhood!&lt;/p&gt;\r\n\r\n&lt;p&gt;This triggers severe performance pressure and performance anxiety in many men. During their foreplay, instead of being spontaneous and sensuous, they tend to become conscious and nervous. This further takes away their arousal and creates more problem with erection. This escalates anxiety.&lt;/p&gt;\r\n\r\n&lt;p&gt;Thus a vicious circle develops.&lt;/p&gt;\r\n\r\n&lt;p&gt;And, ultimately men start avoiding &amp;ndash; thus enters &amp;lsquo;avoidance phase or avoidance behavior&amp;rsquo;! On other hand the partner also undergoes her misery.&lt;/p&gt;\r\n\r\n&lt;p&gt;Initially she is supportive and keeps patience. But when repeatedly finding herself left high and dry and finding the male partner getting disappointed and embarrassed, ultimately she also suppresses her desire or looses interest.&lt;/p&gt;\r\n\r\n&lt;p&gt;And, as a couple the romance takes back foot and the chemistry goes downhill spiral. Ultimately they loose hope and become frustrated and depressed.&lt;/p&gt;\r\n\r\n&lt;p&gt;There is a classical way to come out of this state and rekindle love, romance and passion. Couple can very soon experience spontaneity and sensuality. And, experience fulfilling sex life.&lt;/p&gt;\r\n\r\n&lt;p&gt;We have specialized and innovated couple therapy solutions and Homeopathic remedies to overcome anxiety and build sexual confidence.&lt;/p&gt;\r\n', 'Performance_Anxiety'),
(18, 'Men', 'Phimosis - Para Phimosis', 'The physical block, most often solvable without surgery!', '&lt;p&gt;Phimosis is tight foreskin which can not be retracted back on the glans (head or the front part of the penis) penis.&lt;/p&gt;\r\n\r\n&lt;p&gt;This creates difficulty during intercourse leading to pain, distraction and loss of erection and most of th time making vaginal penetration (insertion) of penis, impossible. A forceful intercourse can even result in bleeding from frenulum.&lt;/p&gt;\r\n\r\n&lt;p&gt;Generally these cases are advised circumcision. But, we treat phimosis without surgery in 99 % cases unless it a a very very tight foreskin with pin hole opening.&lt;/p&gt;\r\n\r\n&lt;p&gt;Why its important to preserve foreskin and avoid circumcision:&lt;/p&gt;\r\n\r\n&lt;p&gt;The rubbing of an elastic and normal foreskin gives a very fine quality of pleasure during intercourse (in and out movement of penis leads the rubbing of foreskin on the glans penis).&lt;/p&gt;\r\n\r\n&lt;p&gt;Paraphimosis is a condition where, when the foreskin is retracted back but can not be put back to original place. This leads to severe swelling and other severe complications. Generally this is a surgical emergency but most of such cases we treat without surgery through our innovative approach and help person to preserve foreskin which is an excellent source of fine pleasure.&lt;/p&gt;\r\n', 'Phimosis_-_Para_Phimosis'),
(19, 'Men', 'Unconsummated Marriage', 'Married yet virgin, for a reason!', '&lt;p&gt;Its not surprising that hundreds of couples have received successful guidance from us for their difficulty of consummation i.e. inability to do peno vaginal penetrative intercourse. We get couple straight from honeymoon on one hand where as many come after one, three, five, ten or even more years of marriage, unconsummated.&lt;/p&gt;\r\n\r\n&lt;p&gt;The reasons for non consummation can be Male factors, female factors, Position &amp;ndash; posture &amp;ndash; movement factors. Often its a combination of all three categories of factors. We have pioneered the ways to evaluate such a situation and guide the often discouraged, demoralized couple to a smooth and pleasurable start of their sex life.&lt;/p&gt;\r\n', 'Unconsummated_Marriage'),
(20, 'Men', 'Stress and Sex', 'Less stress more sex. More sex less stress! More stress less sex. Less sex more stress!', '&lt;p&gt;If you have experienced this nothing more remains to be explained. So simply put, our approach help to distress you where passion and performance can really blossom in you and your relationship.&lt;/p&gt;\r\n', 'Stress_and_Sex'),
(21, 'Men', 'Sleep and Sex', 'Good sleep - great sex. Good sex - great sleep!', '&lt;p&gt;Sleep is an amazing psycho-physiological function which rejuvenates us. This essential part of daily life is most often ignored or taken for granted. Inadequate sleep and sleep disorders are becoming norms!&lt;/p&gt;\r\n\r\n&lt;p&gt;This affects our emotional well being, mood, physical health as well as our libido and sexual performance. In fact we have produced an awareness film on importance of sleep in our day to day life.&amp;nbsp;&lt;a href=&quot;https://www.youtube.com/watch?v=g00Ua2QzNUc&quot;&gt;Watch here&lt;/a&gt;. Sleep, stress and sex are intricately inter influential.&lt;/p&gt;\r\n', 'Sleep_and_Sex'),
(22, 'Men', 'Realtionship Issues and Sex', '\"Love is the answer, but while you are waiting for the answer, sex raises some pretty good questions.\" â€• Woody Allen', '&lt;p&gt;Harmony, peace, love, respect, care and affection are essential in a relationship to ignite passion and keep afloat the higher levels of sexual intimacy and joy. Often the relationships are evolving and negative emotions like hurt feelings and ego, anger, sadness, mistrust, insecurity etc takes its toll on sexual desire and performance. Our comprehensive approach primarily evaluates the quality of couples relationship and its impact on their sex life and also helps them enrich their emotional bond!&lt;/p&gt;\r\n', 'Realtionship_Issues_and_Sex'),
(23, 'Women', 'Low Sexual Desire', '\'My wife is a sex object. Every time I ask for sex, she objects!\'. - Les Dawson', '&lt;p&gt;Women are very prone and vulnerable to inhibitions, controls, suppressions or retracting into their shell. Also often they need to be loved before submitting oneself to sexual exploration with the partner. No wonder many women remain with &amp;lsquo;low sexual desire&amp;rsquo;!&lt;/p&gt;\r\n\r\n&lt;p&gt;Also, apart from genetic, hereditary, biological, medical and hormonal factors, in this modern and digital area with varieties of rising levels of stress, relationship issues, stress disorders, medications, addictions and lifestyle issues the incidences of low sexual desire is on phenomenal rise, in todays men.&lt;/p&gt;\r\n\r\n&lt;p&gt;And that&amp;rsquo;s all the more reason that these complex factors requires highly comprehensive ( evaluation and )approach and not just shots of external testosterone (or any so called &amp;lsquo;aphrodisiacs&amp;rsquo; or sex tonics or stimulants) which is always tagged with side effects and has the potential to reduce body&amp;rsquo;s own capacity to produce natural testosterone.&lt;/p&gt;\r\n\r\n&lt;p&gt;We specialize in going to the root cause of your problem and help you recover with long term and natural, medicinal and non medicinal solutions! Confidential and effective sex solutions for women by renowned sexologist in Mumbai. No side effects. No dependence.&lt;/p&gt;\r\n', 'low_sexual_desire'),
(24, 'Women', 'Lubrication Disorder', 'Lubrication is the spring where pleasure blossoms!', '&lt;p&gt;Lubrication is physiological counterpart of psychosexual arousal in woman akin to erection in men. Its due to the psychosexual excitement resulting in increased local bood flow in pelvic region and vaginal walls. This shows prepared ness of the woman for sexual act and also gives pleasure. If it is dry, it gives pain.&lt;/p&gt;\r\n', 'lubrication_disorder'),
(25, 'Women', 'Penetration Phobia', 'Fear and pleasure, can not exist together!', '&lt;p&gt;Lot of young women seek help because of this annoying and frustrating involuntary fear.&amp;nbsp;&lt;br /&gt;\r\nCommon causes:&amp;nbsp;&lt;br /&gt;\r\nFear of bleeding&amp;nbsp;&lt;br /&gt;\r\nFear of pain&amp;nbsp;&lt;br /&gt;\r\nHypersensitive nature to pain. Low pain threshold.&amp;nbsp;&lt;br /&gt;\r\nImpact of vicarious experiences; shared by someone or seen in movies.&amp;nbsp;&lt;br /&gt;\r\nChildhood or teenage sex abuse trauma.&lt;/p&gt;\r\n\r\n&lt;p&gt;Because of this the person can not allow partner to insert / penetrate. Couple come to us in miserable state for guidance.&lt;/p&gt;\r\n\r\n&lt;p&gt;The problem can be effectively treated with right guidance and therapy.&lt;/p&gt;\r\n', 'penetration_phobia'),
(26, 'Women', 'Vaginismus', 'Closing the gates and opposing the entry is indicative of sub conscious blocks!', '&lt;p&gt;This is involuntary spasm / contraction of vagina (wall muscles), whenever an attempt at intercourse or examination is made. This is an intense subconscious fear, mostly of injury and pain / bleeding. The woman tends to contract her legs as well and pushes partner awaywhilethe attempt for penetration is made.&lt;/p&gt;\r\n', 'vaginismus'),
(27, 'Women', 'Narrow Vaginal Opening', 'A physical obstruction which is solvable without surgery!', '&lt;p&gt;A lot many couple face difficulty because the woman has a very narrow opening and partner can not insert the erect penis while attempting for insertion. Most of these cases need dilatation and we help with our innovative approach without surgery.&lt;/p&gt;\r\n', 'narrow_vaginal_opening'),
(28, 'Women', 'Lack of Orgasm', 'You can not let your self go, if you are too much with yourself!', '&lt;p&gt;Many women just cant experience climax.&amp;nbsp;&lt;br /&gt;\r\nCommon reasons are:&lt;/p&gt;\r\n\r\n&lt;p&gt;Very high arousal threshold&amp;nbsp;&lt;br /&gt;\r\nInadequate foreplay.&amp;nbsp;&lt;br /&gt;\r\nLack of knowledge about erotic zones.&lt;/p&gt;\r\n', 'lack_of_orgasm'),
(29, 'Women', 'Unconsummated Marriage', 'Married yet virgin, for a reason!', '&lt;p&gt;Its not surprising that hundreds of couples have received successful guidance from us for their difficulty of consummation i.e. inability to do peno vaginal penetrative intercourse. We get couple straight from honeymoon on one hand where as many come after one, three, five, ten or even more years of marriage, unconsummated.&lt;/p&gt;\r\n\r\n&lt;p&gt;The reasons for non consummation can be Male factors, female factors, Position &amp;ndash; posture &amp;ndash; movement factors. Often its a combination of all three categories of factors. We have pioneered the ways to evaluate such a situation and guide the often discouraged, demoralized couple to a smooth and pleasurable start of their sex life.&lt;/p&gt;\r\n', 'unconsummated_marriage'),
(30, 'Women', 'Stress and Sex', 'Less stress more sex. More sex less stress! More stress less sex. Less sex more stress! - Dr. Hitesh Shah', '&lt;p&gt;If you have experienced this nothing more remains to be explained. So simply put, our approach help to destress you where passion and performance can really blossom in you and your relationship.&lt;/p&gt;\r\n', 'stress_and_sex'),
(31, 'Women', 'Realtionship Issues and Sex', '\"Love is the answer, but while you are waiting for the answer, sex raises some pretty good questions.\" - Woody Allen', '&lt;p&gt;Harmony, peace, love, respect, care and affection are essential in a relationship to ignite passion and keep afloat the higher levels of sexual intimacy and joy. Often the relationships are evolving and negative emotions like hurt feelings and ego, anger, sadness, mistrust, insecurity etc takes its toll on sexual desire and performance. Our comprehensive approach primarily evaluates the quality of couples relationship and its impact on their sex life and also helps them enrich their emotional bond!&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;em&gt;&amp;quot;We waste time looking for the perfect lover, instead of creating the perfect love.&amp;quot;&lt;/em&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;â€• Tom Robbins&lt;/p&gt;\r\n', 'realtionship_issues_and_sex'),
(32, 'Women', 'Sleep and Sex', 'Less stress more sex. More sex less stress! More stress less sex. Less sex more stress! - Dr. Hitesh Shah', '&lt;p&gt;Sleep is an amazing psycho-physiological function which rejuvenates us. This essential part of daily life is most often ignored or taken for granted. Inadequate sleep and sleep disorders are becoming norms!&lt;/p&gt;\r\n\r\n&lt;p&gt;This affects our emotional well being, mood, physical health as well as our libido and sexual performance. In fact we have produced an awareness film on importance of sleep in our day to day life.&amp;nbsp;&lt;a href=&quot;https://www.youtube.com/watch?v=g00Ua2QzNUc&quot;&gt;Watch here&lt;/a&gt;. Sleep, stress and sex are intricately inter influential.&lt;/p&gt;\r\n', 'sleep_and_sex'),
(33, 'Couple', 'Sexual incompatibility', 'Sync. Harmonize. Merge.', '&lt;p&gt;Emotional bonding, intellectual levelheadedness and sexual compatibility are essential for a great companionship and profound intimacy in a couple.&lt;/p&gt;\r\n\r\n&lt;p&gt;The sexual compatibility is determined by various factors like desire discrepancy, likes and dislikes (e.g. for oral sex), timing (e.g. night person v/s, morning person), knowledge of erotic zones, openness to experimentation, impact of past psycho sexual trauma or experiences, size mismatch, communication on sexual matters, differential attitudes on matters like porn watching etc. Feel unconnected and incompatible with your partner? Contact us&lt;/p&gt;\r\n', 'sexual_incompatibility'),
(34, 'Couple', 'Emotional Incompatibility', 'Sensitivity. Forgiveness. Affection. Respect. Care. Love.', '&lt;p&gt;There are certain strong starting points of a happy emotional bonding like attraction or admiration or feelings for eachother. But, often human relationship passes throuh evolution and experiences roller coaster ride of emotional happiness and sadness, satisfaction and dissatisfaction, fulfillment and frustration.&lt;/p&gt;\r\n\r\n&lt;p&gt;There can be underlying emotional bonding and commitment but at times the emotion tension between two personalities at peak and often it becomes a new disruptive pattern of emotional and communicatioonal disconnect.&lt;/p&gt;\r\n\r\n&lt;p&gt;Such a situation demands lot of patience, self learning, forgiveness, overcoming hurt feelings &amp;ndash; hurt ego &amp;ndash; blaming states &amp;ndash; guilt &amp;ndash; prejudices.&lt;/p&gt;\r\n\r\n&lt;p&gt;Its a beautiful journey to undergo counselling and experience freedom from once own negative state and be much more caring, compassionate friendly and loving with the partner. Discovering the higher purpose and trye meaning of relationship itself becomes insightful spiritual journey as well.&lt;/p&gt;\r\n', 'emotional_incompatibility'),
(35, 'Couple', 'Communication Problems', 'Need to Empathize!', '&lt;p&gt;Communication is what connects the Life, meaning fully, Empathy, heart to heart connect, compassion, sensitivity, listening, unselfishness (non self contentedness), non judgmental state, unconditional love and playfulness all makes communication truly harmonious and life fulfilling. This especially applies to a couple relationship and their intimacy.&lt;/p&gt;\r\n\r\n&lt;p&gt;Plagued with disruptive patterns of communication? Feel strong need to truly connect with partner heart to heart? Ready learn? Eager to experience harmony and happiness in relationship?&lt;/p&gt;\r\n\r\n&lt;p&gt;I invite you to this beautiful journey of &amp;#39;love &amp;ndash; connect&amp;#39;.&lt;/p&gt;\r\n', 'communication_problems'),
(36, 'Couple', 'Extra Marital Affair', 'Destiny or Chemistry or Chance or Choice or Reason?!', '&lt;p&gt;Marriage is a beautiful and sacred system of love, intimacy, commitment and companionship. Nevertheless being a (hu)man made system, it is often transgressed under the forces of polygamous attraction duet to biological and/ or emotional and / or relationship factors. Every couple relationship or every individual is relatively vulnerable.&lt;/p&gt;\r\n', 'extra_marital_affair'),
(37, 'Couple', 'Position Posture Movement Guidence', 'Mechanics are essential to chemistry!', '&lt;p&gt;Surprisingly lot of &amp;#39;armatures&amp;#39; including newly married couples, find it really difficult to adopt right posture to penetrate and / or do the right kind of pelvis thrusting moments resulting into inability to do proper penetrative intercourse. Couple only land up with confusion and nervousness after initial experimentation. This often affect their arousal ( erection in men and lubrication in women) and their overall flow of love making.&lt;/p&gt;\r\n\r\n&lt;p&gt;Come and experience the learning of precise mechanics of how to adopt the right posture, how to enter and how to do pelvic -thrusting movements (in a symbolic ways) and achieve completeness in your sex life.&lt;/p&gt;\r\n', 'position_posture_movement_guidence'),
(38, 'Couple', 'Intimacy Issues', 'Relationship evolves only if introspection and self learning takes place!', '&lt;p&gt;Its human need to be loved and trusted. Its a beautiful feeling to have sense of belonging, with the life partner. Ego melts when you are in love and total &amp;lsquo;surrender&amp;rsquo; happen, while preserving your individuality and space.But, its also in human nature to feel unloved or mistrust!&lt;/p&gt;\r\n\r\n&lt;p&gt;Come and solve all issues pertaining to love, trust, communication, non caring, in-sensitiveness, self contentedness, feeling of rejection. lack of romance and chemistry.&lt;/p&gt;\r\n', 'intimacy_issues'),
(39, 'Couple', 'Stress and Sex', 'Less stress more sex. More sex less stress! More stress less sex. Less sex more stress!', '&lt;p&gt;Sex is biggest stress buster.&lt;/p&gt;\r\n\r\n&lt;p&gt;So also, stress can overwhelm an individual and directly or indirectly (through stress disorders like hypertension, diabetes, insomnia, obesity, hyperlipidemia, nicotine and alcohol consumption) affect once libido (desire / passion) and peformance.&lt;/p&gt;\r\n\r\n&lt;p&gt;Todays high paced life rapidly results into stress &amp;ndash; burn out state.&lt;/p&gt;\r\n\r\n&lt;p&gt;Many couples, especially if both are working, find it really difficult to cope up with stresses of day to day life issues ( struggle, work pressure ), circumstantial issues (financial, sickness of self or family members) relaionship issues (temperamental, communicational, and communicational), emotional issues etc.&lt;/p&gt;\r\n\r\n&lt;p&gt;To add to it, after initial sexual problems, sexual performance pressure , feeling of inadequacy, frustration piles up affecting sexual functions more badly.&lt;/p&gt;\r\n\r\n&lt;p&gt;There is a way out to experience stress free sex, while building one&amp;#39;s coping ability and adaptation!&lt;/p&gt;\r\n', 'stress_and_sex'),
(40, 'Couple', 'Unconsummated Marriage', 'Married yet virgin, for a reason!', '&lt;p&gt;Its not surprising that hundreds of couples have received successful guidance from us for their difficulty of consummation i.e. inability to do peno vaginal penetrative intercourse. We get couple straight from honeymoon on one hand where as many come after one, three, five, ten or even more years of marriage, unconsummated.&lt;/p&gt;\r\n\r\n&lt;p&gt;The reasons for non consummation can be Male factors, female factors, Position &amp;ndash; posture &amp;ndash; movement factors. Often its a combination of all three categories of factors. We have pioneered the ways to evaluate such a situation and guide the often discouraged, demoralized couple to a smooth and pleasurable start of their sex life.&lt;/p&gt;\r\n', 'unconsummated_marriage'),
(41, 'Couple', 'Sleep and Sex', 'Good sleep - great sex. Good sex - great sleep!', '&lt;p&gt;Sleep is an amazing psycho-physiological function which rejuvenates us. This essential part of daily life is most often ignored or taken for granted. Inadequate sleep and sleep disorders are becoming norms!&lt;/p&gt;\r\n\r\n&lt;p&gt;This affects our emotional well being, mood, physical health as well as our libido and sexual performance. In fact we have produced an awareness film on importance of sleep in our day to day life.&amp;nbsp;&lt;a href=&quot;https://www.youtube.com/watch?v=g00Ua2QzNUc&quot;&gt;Watch here&lt;/a&gt;. Sleep, stress and sex are intricately inter influential.&lt;/p&gt;\r\n', 'sleep_and_sex'),
(42, 'Couple', 'Realtionship Issues and Sex', '\"Love is the answer, but while you are waiting for the answer, sex raises some pretty good questions.\" â€• Woody Allen', '&lt;p&gt;Harmony, peace, love, respect, care and affection are essential in a relationship to ignite passion and keep afloat the higher levels of sexual intimacy and joy. Often the relationships are evolving and negative emotions like hurt feelings and ego, anger, sadness, mistrust, insecurity etc takes its toll on sexual desire and performance. Our comprehensive approach primarily evaluates the quality of couples relationship and its impact on their sex life and also helps them enrich their emotional bond!&lt;/p&gt;\r\n', 'realtionship_issues_and_sex');

-- --------------------------------------------------------

--
-- Table structure for table `master_diagnosis`
--

DROP TABLE IF EXISTS `master_diagnosis`;
CREATE TABLE `master_diagnosis` (
  `id` int(11) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_diagnosis`
--

INSERT INTO `master_diagnosis` (`id`, `diagnosis`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'ERCTILE DYSFUNCTION', '', 1, 0, NULL, NULL),
(2, 'PREMATURE EJACULATION', '', 1, 0, NULL, NULL),
(3, 'EOR I', '', 1, 0, NULL, NULL),
(4, 'EOR II', '', 1, 0, NULL, NULL),
(5, 'EOR III', '', 1, 0, NULL, NULL),
(6, 'VAIGINISMUS', '', 1, 0, NULL, NULL),
(7, 'NARROW VAGINAL OPENING', '', 1, 0, NULL, NULL),
(8, 'LOW SEXUAL DESIRE', '', 1, 0, NULL, NULL),
(9, 'Excessive Sexual Desire', '', 1, 0, NULL, NULL),
(10, 'Sexual Addiction', '', 1, 0, NULL, NULL),
(11, 'Phimosis', '', 1, 0, NULL, NULL),
(12, 'Para phimosis', '', 1, 0, NULL, NULL),
(13, 'Penetration Phobia', '', 1, 0, NULL, NULL),
(14, 'Performance Pressure Anxiety ', '', 1, 0, NULL, NULL),
(15, 'Avoidance Behaviour', '', 1, 0, NULL, NULL),
(16, 'Alternative Orientation', '', 1, 0, NULL, NULL),
(17, 'Vaginal dryness Lubrication Disorder', '', 1, 0, NULL, NULL),
(18, 'A O R', '', 1, 0, NULL, NULL),
(19, 'D O R', '', 1, 0, NULL, NULL),
(20, 'I O R', '', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_disease`
--

DROP TABLE IF EXISTS `master_disease`;
CREATE TABLE `master_disease` (
  `id` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_disease`
--

INSERT INTO `master_disease` (`id`, `disease`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'Fever recurrent', '1', 1, 0, '115.97.65.55', 1548573831),
(2, 'Acidity', '1', 1, 0, '60.243.29.48', 1503546242),
(3, 'Overweight', '1', 1, 0, '60.243.29.48', 1503546249),
(4, 'Body Pain', '1', 1, 0, '60.243.29.48', 1503546257),
(5, 'Diabetes', '1', 1, 0, '60.243.29.48', 1503546472),
(6, 'High Blood Pressure or High B.P. OR Hypertension', '1', 1, 0, '60.243.29.48', 1503546512),
(7, 'Cholesterol high', '1', 1, 0, '60.243.29.48', 1503546529),
(8, 'Triglyceride high', '1', 1, 0, '60.243.29.48', 1503546538),
(9, 'Angina', '1', 1, 0, '60.243.29.48', 1503546578),
(10, 'Constipation', '1', 1, 0, '60.243.29.48', 1503546585),
(11, 'Irritable Bowel Syndrome', '1', 1, 0, '60.243.29.48', 1503546607),
(12, 'Allergy', '1', 1, 0, '60.243.29.48', 1503546612),
(13, 'Sinusitis', '1', 1, 0, '60.243.29.48', 1503546618),
(14, 'Asthama', '1', 1, 0, '60.243.29.48', 1503546624),
(15, 'Sleep problem', '1', 1, 0, '60.243.29.48', 1503546628),
(16, 'Snoring', '1', 1, 0, '60.243.29.48', 1503546635),
(17, 'Sleep Apnea', '1', 1, 0, '60.243.29.48', 1503546639),
(18, 'Back pain', '1', 1, 0, '60.243.29.48', 1503546691),
(19, 'Neck pain', '1', 1, 0, '60.243.29.48', 1503546712),
(20, 'Gout', '1', 1, 0, '60.243.29.48', 1503546719),
(21, 'Anxiety', '1', 1, 0, '60.243.29.48', 1503546755),
(22, 'Depression', '1', 1, 0, '60.243.29.48', 1503546765),
(23, 'Low sperm count', '1', 1, 0, '60.243.29.48', 1503546777),
(24, 'Low testosterone', '1', 1, 0, '60.243.29.48', 1503546802),
(25, 'Menstrual irregularity', '1', 1, 0, '60.243.29.48', 1503546821),
(26, 'knee pain', '1', 1, 0, '60.243.29.48', 1503547240),
(27, 'Osteoarthritis', '1', 1, 0, '60.243.29.48', 1503547249),
(28, 'Arthritis', '1', 1, 0, '60.243.29.48', 1503547254),
(29, 'Rheumatoid Arthritis', '1', 1, 0, '60.243.29.48', 1503547263),
(30, 'Schizophrenia', '1', 1, 0, '60.243.29.48', 1503547310),
(31, 'Phobia', '1', 1, 0, '60.243.29.48', 1503547316),
(32, 'PCOD', '1', 1, 0, '60.243.29.48', 1503547324),
(33, 'Pre menstrual tension', '1', 1, 0, '60.243.29.48', 1503547335),
(34, 'Thyroid disorder', '1', 1, 0, '60.243.29.48', 1503547352),
(35, 'Psoriasis', '1', 1, 0, '60.243.29.48', 1503547359),
(36, 'Eczema', '1', 1, 0, '60.243.29.48', 1503547362),
(37, 'Lichen planus', '1', 1, 0, '60.243.29.48', 1503547367),
(38, 'Erectile dysfunction', '1', 1, 0, '60.243.29.48', 1503547378),
(39, 'Premature ejaculation', '1', 1, 0, '60.243.29.48', 1503547384),
(40, 'Vaginal dryness', '1', 1, 0, '60.243.29.48', 1503547389),
(41, 'Low sexual desire', '1', 1, 0, '60.243.29.48', 1503547394),
(42, 'Lack of orgasm', '1', 1, 0, '60.243.29.48', 1503547406),
(43, 'Lubrication disorder', '1', 1, 0, '60.243.29.48', 1503547459),
(44, 'Vaginal laxity', '1', 1, 0, '60.243.29.48', 1503547468),
(45, 'Small breast size', '1', 1, 0, '60.243.29.48', 1503547483),
(46, 'small penis size', '1', 1, 0, '60.243.29.48', 1503547488),
(47, 'Lack of sexual pleasure', '1', 1, 0, '60.243.29.48', 1503547536),
(48, 'sexual incompatibility', '1', 1, 0, '60.243.29.48', 1503547543),
(49, 'Emotional incompatibility', '1', 1, 0, '60.243.29.48', 1503547552),
(50, 'Cancer', '1', 1, 0, '60.243.29.48', 1503547605),
(51, 'Osteoporosis', '1', 1, 0, '60.243.29.48', 1503547613),
(52, 'Chronic fatigue syndrome', '1', 1, 0, '60.243.29.48', 1503547621),
(53, 'Insomnia - Sleep Disorders', '1', 1, 0, '115.97.65.55', 1548574023),
(54, 'Paralysis', '1', 1, 0, '115.97.65.55', 1548574037),
(55, 'Heart attack', '1', 1, 0, '115.97.65.55', 1548574048),
(56, 'Heart attack MI - Angioplasty', '1', 1, 0, '115.97.65.55', 1548574065),
(57, 'Heart Attack M. I. - Bypass CABG', '1', 1, 0, '27.4.215.17', 1599714378),
(58, 'Vertigo', '1', 1, 0, '115.97.65.55', 1548574091),
(59, 'Parkinsonism', '1', 1, 0, '115.97.65.55', 1548574099),
(60, 'O C N Obsessive Compulsive Neurosis', '1', 1, 0, '115.97.65.55', 1548574139),
(61, 'Major Depression', '1', 1, 0, '115.97.65.55', 1548574150),
(62, 'Personality Disorder', '1', 1, 0, '115.97.65.55', 1548574162),
(63, 'Neurosis', '1', 1, 0, '115.97.65.55', 1548574167),
(64, 'Psychosis', '1', 1, 0, '115.97.65.55', 1548574172),
(65, 'Anorgasmia', '1', 1, 0, '115.97.65.55', 1548574187),
(66, 'Phimosis', '1', 1, 0, '115.97.65.55', 1548574210),
(67, 'Para phimosis', '1', 1, 0, '115.97.65.55', 1548574218),
(68, 'Panic disorder', '1', 1, 0, '27.4.215.17', 1599714434),
(69, 'Orientation Ambivalence', '1', 1, 0, '115.97.65.55', 1548574265),
(70, 'Penetration Phobia', '1', 1, 0, '115.97.65.55', 1548574288),
(71, 'Genaralized Anxiety Disorder', '1', 1, 0, '115.97.65.55', 1548574304),
(72, 'Claustrophobia', '1', 1, 0, '115.97.65.55', 1548574315),
(73, 'Other', '1', 1, 0, '27.4.215.17', 1599714657),
(74, 'Nil', '1', 1, 0, '27.4.215.17', 1599714663);

-- --------------------------------------------------------

--
-- Table structure for table `master_dosage`
--

DROP TABLE IF EXISTS `master_dosage`;
CREATE TABLE `master_dosage` (
  `id` int(11) NOT NULL,
  `dosage` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_dosage`
--

INSERT INTO `master_dosage` (`id`, `dosage`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(2, '1 PILL 3 TIMES A DAY', '1', 1, 0, '116.72.121.176', 1577004815),
(3, '1 PILL 4 TIMES A DAY', '1', 1, 0, '116.72.121.176', 1577004325),
(4, '1 PILL 4 HOURLY', '1', 1, 0, '116.72.121.176', 1577004339),
(6, ' 1 PILL BEDTIME', '1', 1, 0, '116.72.121.176', 1577004359),
(7, '1 PILL MORNING', '1', 1, 0, '116.72.121.176', 1577004368),
(8, '1 POWDER BEDTIME, MINIMUM HALF AN HOUR AFTER DINNER', '1', 1, 0, '116.72.121.176', 1577004655),
(9, '1 STAR PUDI BEDTIME FIRST NIGHT, MINIMUM HALF AN HOUR AFTER DINNER', '1', 1, 0, '116.72.121.176', 1577004642),
(10, '1 STAR PUDI, FIRST 3 NIGHTS BEDTIME, MINIMUM HALF AN HOUR AFTER DINNER', '1', 1, 0, '116.72.121.176', 1577004712),
(11, '1 PILL AFTER BREAKFAST, CHEW AND DRINK WATER', '1', 1, 0, '116.72.121.176', 1577004857),
(12, '2 PILL AFTER BREAKFAST, CHEW AND DRINK WATER', '1', 1, 0, '116.72.121.176', 1577004880),
(13, 'STOCK MEDICINES ONLY ON ADVISE', '1', 1, 0, '116.72.121.176', 1577005371),
(14, 'ON STAR PUDI DAY, NO ONION , GARLIC, COFFEE, SMOKING, TOBACCO, NON VEG, ALCOHOL', '1', 1, 0, '116.72.121.176', 1577005644),
(15, '1 PILL TWICE A DAY', '1', 1, 0, '27.4.215.17', 1599714838),
(16, '1 STAR PUDI, FIRST TWO DAYS BEDTIME, MINIMUM HALF AN HOUR AFTER DINNER', '1', 1, 0, '27.4.215.17', 1599714963),
(17, '1 PILL AFTER BREAKFAST, CHEW TOGETHER AND DRINK WATER', '1', 1, 0, '27.4.215.17', 1599714997),
(18, 'SOS Only when instructed by doctor', '1', 1, 0, '27.4.215.17', 1599715414);

-- --------------------------------------------------------

--
-- Table structure for table `master_enroll`
--

DROP TABLE IF EXISTS `master_enroll`;
CREATE TABLE `master_enroll` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `device_type` varchar(15) NOT NULL,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_enroll`
--

INSERT INTO `master_enroll` (`id`, `event_id`, `user_id`, `device_type`, `ip`, `added_date`) VALUES
(1, 1, '1', 'app', '182.54.148.103', NULL),
(2, 3, '1', 'app', '127.0.0.1', NULL),
(3, 4, '1', 'app', '202.74.213.159', NULL),
(4, 1, 'user_id', 'app', '177.109.42.146', NULL),
(5, 1, '3', 'app', '127.0.0.1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_exercise`
--

DROP TABLE IF EXISTS `master_exercise`;
CREATE TABLE `master_exercise` (
  `id` int(11) NOT NULL,
  `exercise` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_exercise`
--

INSERT INTO `master_exercise` (`id`, `exercise`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(2, 'Walking in open', '1', 1, 0, '60.243.29.48', 1503553696),
(3, 'Mountaneering', '1', 1, 0, '60.243.29.48', 1503554124),
(4, 'Treadmill', '1', 1, 0, '60.243.29.48', 1503553683),
(5, 'Jogging or Running in open', '1', 1, 0, '60.243.29.48', 1503554320),
(6, 'Gym exercises', '1', 1, 0, '60.243.29.48', 1503554354),
(7, 'Skipping', '1', 1, 0, '60.243.29.48', 1503554401),
(8, 'Cycling', '1', 1, 0, '60.243.29.48', 1503554413),
(9, 'Upper body workout', '1', 1, 0, '60.243.29.48', 1503554427),
(10, 'Lower body workout', '1', 1, 0, '60.243.29.48', 1503554443),
(11, 'Core body workout', '1', 1, 0, '60.243.29.48', 1503554477),
(12, 'Swimming', '1', 1, 0, '60.243.29.48', 1503554494),
(13, 'Yoga', '1', 1, 0, '60.243.29.48', 1503554499),
(14, 'Meditation', '1', 1, 0, '60.243.29.48', 1503554523),
(15, 'Yog nidra', '1', 1, 0, '60.243.29.48', 1503554535),
(16, 'Aerobics', '1', 1, 0, '60.243.29.48', 1503554553),
(17, 'Zumba', '1', 1, 0, '60.243.29.48', 1503554560),
(18, 'Tai Chi', '1', 1, 0, '60.243.29.48', 1503554567),
(19, 'Prayer', '1', 1, 0, '60.243.29.48', 1503554599),
(20, 'Trekking', '1', 1, 0, '60.243.29.48', 1503554617),
(21, 'Sunlight exposure', '1', 1, 0, '60.243.29.48', 1503554941),
(22, 'Other', '1', 1, 0, '27.4.215.17', 1599714701),
(23, 'MIX', '1', 1, 0, '27.4.215.17', 1599714759),
(24, 'Marathon runner Half', '1', 1, 0, '27.4.215.17', 1599714771),
(25, 'Marathon runner Full', '1', 1, 0, '27.4.215.17', 1599714782);

-- --------------------------------------------------------

--
-- Table structure for table `master_fees`
--

DROP TABLE IF EXISTS `master_fees`;
CREATE TABLE `master_fees` (
  `id` int(11) NOT NULL,
  `consult_for` varchar(25) DEFAULT NULL,
  `single_week` bigint(20) DEFAULT NULL,
  `single_sun` bigint(20) DEFAULT NULL,
  `couple_week` bigint(20) DEFAULT NULL,
  `couple_sun` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_fees`
--

INSERT INTO `master_fees` (`id`, `consult_for`, `single_week`, `single_sun`, `couple_week`, `couple_sun`) VALUES
(1, 'online', 3000, 7000, 5000, 15000),
(2, 'personally', 1500, 3000, 2500, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `master_followup`
--

DROP TABLE IF EXISTS `master_followup`;
CREATE TABLE `master_followup` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `feedback` longtext NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_followup`
--

INSERT INTO `master_followup` (`id`, `patient_id`, `tag_id`, `flag`, `feedback`, `added_date`) VALUES
(1, 1, 1, 0, '', '2018-08-23 12:39:29'),
(2, 1, 2, 0, '', '2018-08-23 12:39:29'),
(3, 1, 2, 0, '', '2018-09-05 00:56:23'),
(4, 1, 1, 0, '', '2018-09-08 07:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `master_habits`
--

DROP TABLE IF EXISTS `master_habits`;
CREATE TABLE `master_habits` (
  `id` int(11) NOT NULL,
  `habits` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_habits`
--

INSERT INTO `master_habits` (`id`, `habits`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(2, 'Smoking', '1', 1, 0, '60.243.29.48', 1503549615),
(3, 'Alcohol', '1', 1, 0, '60.243.29.48', 1503549618),
(4, 'Gutakha', '1', 1, 0, '60.243.29.48', 1503549633),
(5, 'Tobacco chewing', '1', 1, 0, '60.243.29.48', 1503549638),
(6, 'Cigar', '1', 1, 0, '60.243.29.48', 1503549641),
(7, 'Mawa', '1', 1, 0, '60.243.29.48', 1503549646),
(8, ' Kimam', '1', 1, 0, '60.243.29.48', 1503549650),
(9, 'Drugs', '1', 1, 0, '60.243.29.48', 1503549659),
(10, 'Tea', '1', 1, 0, '60.243.29.48', 1503549663),
(11, ' Coffee', '1', 1, 0, '60.243.29.48', 1503549666),
(12, 'Green Tea', '1', 1, 0, '60.243.29.48', 1503549671),
(13, 'Hookah', '1', 1, 0, '60.243.29.48', 1503549737),
(14, 'Shisha', '1', 1, 0, '60.243.29.48', 1503549740),
(15, 'Cough syrup', '1', 1, 0, '60.243.29.48', 1503549755),
(16, 'Prohibited or prescriptive medicines', '1', 1, 0, '60.243.29.48', 1503549777),
(17, 'Weed - Marijuhana', '1', 1, 0, '115.97.65.55', 1548573730),
(18, 'Cocaine', '1', 1, 0, '115.97.65.55', 1548573738),
(19, 'L.S.D.', '1', 1, 0, '115.97.65.55', 1548573746),
(20, 'Party Drugs', '1', 1, 0, '115.97.65.55', 1548573754),
(21, 'Other', '1', 1, 0, '27.4.215.17', 1599714647);

-- --------------------------------------------------------

--
-- Table structure for table `master_icon`
--

DROP TABLE IF EXISTS `master_icon`;
CREATE TABLE `master_icon` (
  `id` int(11) NOT NULL,
  `iconname` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_icon`
--

INSERT INTO `master_icon` (`id`, `iconname`, `icon`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'icon', 'iconcode', '1', 1, 0, '::1', 1536416516);

-- --------------------------------------------------------

--
-- Table structure for table `master_industry`
--

DROP TABLE IF EXISTS `master_industry`;
CREATE TABLE `master_industry` (
  `id` int(11) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_industry`
--

INSERT INTO `master_industry` (`id`, `industry`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'Information Technology', '1', 0, 1, '192.168.1.16', 1540909067),
(2, 'Banking', '1', 1, 0, '192.168.1.16', 1540909088),
(3, 'Accountants', '1', 1, 0, '192.168.1.16', 1540909132),
(4, 'Agriculture', '1', 1, 0, '192.168.1.16', 1540909139),
(5, 'Airlines', '1', 1, 0, '192.168.1.16', 1540909146),
(6, 'Automotive', '1', 1, 0, '192.168.1.16', 1540909154),
(7, 'Chemical & Related Manufacturing', '1', 1, 0, '192.168.1.16', 1540909171),
(8, 'Clothing Manufacturing', '1', 1, 0, '192.168.1.16', 1540909179),
(9, 'Dairy', '1', 1, 0, '192.168.1.16', 1540909187),
(10, 'Defense', '1', 1, 0, '192.168.1.16', 1540909192),
(11, 'Education ', '1', 1, 0, '192.168.1.16', 1540909200),
(12, 'Health', '1', 1, 0, '192.168.1.16', 1540909213),
(13, 'Insurance', '1', 1, 0, '192.168.1.16', 1540909219),
(14, 'Plywood', '1', 1, 0, '115.97.65.55', 1548574588),
(15, 'Laminate and Venner', '1', 1, 0, '115.97.65.55', 1548574600),
(16, 'Paint and Polish', '1', 1, 0, '115.97.65.55', 1548574607),
(17, 'Iron and Steel', '1', 1, 0, '115.97.65.55', 1548574613),
(18, 'Ceramics', '1', 1, 0, '115.97.65.55', 1548574620),
(19, 'L E D ', '1', 1, 0, '115.97.65.55', 1548574627),
(20, 'Electronics', '1', 1, 0, '115.97.65.55', 1548574634),
(21, 'Coaching and training', '1', 1, 0, '115.97.65.55', 1548574646),
(22, 'H R Human resource', '1', 1, 0, '115.97.65.55', 1548574654),
(23, 'Logistics', '1', 1, 0, '115.97.65.55', 1548574676),
(24, 'Textile', '1', 1, 0, '115.97.65.55', 1548574680),
(25, 'Import and Export', '1', 1, 0, '115.97.65.55', 1548574687),
(26, 'AI and ML', '1', 1, 0, '115.97.65.55', 1548574696),
(27, 'Software and Programming', '1', 1, 0, '115.97.65.55', 1548574706),
(28, 'hardware and Networking', '1', 1, 0, '115.97.65.55', 1548574713),
(29, 'Automobile', '1', 1, 0, '115.97.65.55', 1548574727),
(30, 'Manufacturing', '1', 1, 0, '115.97.65.55', 1548574737),
(31, 'Fabrication', '1', 1, 0, '115.97.65.55', 1548574742),
(32, 'lastics', '1', 1, 0, '115.97.65.55', 1548574745),
(33, 'Rubber', '1', 1, 0, '115.97.65.55', 1548574748),
(34, 'Glass', '1', 1, 0, '115.97.65.55', 1548574754),
(35, 'Financial consultatnt', '1', 1, 0, '115.97.65.55', 1548574769),
(36, 'stsment', '1', 1, 0, '115.97.65.55', 1548574772),
(37, 'Investment', '1', 1, 0, '115.97.65.55', 1548574780),
(38, 'Cement', '1', 1, 0, '115.97.65.55', 1548574820),
(39, 'Consumer Durables', '1', 1, 0, '115.97.65.55', 1548574832),
(40, 'Retail Shop', '1', 1, 0, '115.97.65.55', 1548574841),
(41, 'Wholesale grain', '1', 1, 0, '115.97.65.55', 1548574850),
(42, 'Wholesale Vegetables', '1', 1, 0, '115.97.65.55', 1548574863),
(43, 'Hotel', '1', 1, 0, '115.97.65.55', 1548574868),
(44, 'Catering', '1', 1, 0, '115.97.65.55', 1548574873),
(45, 'Decoration', '1', 1, 0, '115.97.65.55', 1548574876),
(46, 'FMCG', '1', 1, 0, '115.97.65.55', 1548574887),
(47, 'Gems and Jewellery', '1', 1, 0, '115.97.65.55', 1548574911),
(48, 'Healthcare', '1', 1, 0, '115.97.65.55', 1548574919),
(49, 'Infrastructure', '1', 1, 0, '115.97.65.55', 1548574927),
(50, 'Organic food', '1', 1, 0, '115.97.65.55', 1548574934),
(51, 'Organic farming', '1', 1, 0, '115.97.65.55', 1548574941),
(52, 'rming', '1', 1, 0, '115.97.65.55', 1548574947),
(53, ' sector', '1', 1, 0, '115.97.65.55', 1548574950),
(54, 'IT and ITes', '1', 1, 0, '115.97.65.55', 1548574960),
(55, 'Media and Entertainment', '1', 1, 0, '115.97.65.55', 1548574973),
(56, 'Metals and Mining', '1', 1, 0, '115.97.65.55', 1548574982),
(57, 'Commission Agent', '1', 1, 0, '115.97.65.55', 1548574989),
(58, 'Pharmaceuticles', '1', 1, 0, '115.97.65.55', 1548574997),
(59, 'Oil and Gas', '1', 1, 0, '115.97.65.55', 1548575003),
(60, 'Porst', '1', 1, 0, '115.97.65.55', 1548575007),
(61, 'Railways', '1', 1, 0, '115.97.65.55', 1548575016),
(62, 'Real estate Builder', '1', 1, 0, '115.97.65.55', 1548575027),
(63, 'Real estate contractor', '1', 1, 0, '115.97.65.55', 1548575070),
(64, 'Real Estate Agent', '1', 1, 0, '115.97.65.55', 1548575080),
(65, 'Scientist', '1', 1, 0, '115.97.65.55', 1548575090),
(66, 'Public service', '1', 1, 0, '115.97.65.55', 1548575096),
(67, 'Telecommunicatio', '1', 1, 0, '115.97.65.55', 1548575104),
(68, 'Tourism and Hospitality', '1', 1, 0, '115.97.65.55', 1548575118);

-- --------------------------------------------------------

--
-- Table structure for table `master_investigation`
--

DROP TABLE IF EXISTS `master_investigation`;
CREATE TABLE `master_investigation` (
  `id` int(11) NOT NULL,
  `investigation` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_investigation`
--

INSERT INTO `master_investigation` (`id`, `investigation`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'CBC', '1', 1, 0, '182.70.118.74', 1536420562),
(2, 'ESR', '1', 1, 0, '116.72.121.176', 1577005945),
(3, 'BLOOD SUGAR FASTING', '1', 1, 0, '116.72.121.176', 1577005959),
(4, 'BLOOD SUGAR POST LUNCH 2 HOURS', '1', 1, 0, '116.72.121.176', 1577005973),
(5, 'LIVER FUNCTION TEST', '1', 1, 0, '116.72.121.176', 1577005988),
(6, 'RENAL FUNCTION TEST', '1', 1, 0, '116.72.121.176', 1577005996),
(7, 'LIPID PROFILE', '1', 1, 0, '116.72.121.176', 1577006010),
(8, 'TOTAL CHOLESTEROL', '1', 1, 0, '116.72.121.176', 1577006018),
(9, 'LDL', '1', 1, 0, '116.72.121.176', 1577006022),
(10, 'HDL', '1', 1, 0, '116.72.121.176', 1577006024),
(11, 'VLDL', '1', 1, 0, '116.72.121.176', 1577006027),
(12, 'TRIGLYCERIDE', '1', 1, 0, '116.72.121.176', 1577006035),
(13, 'SGPT', '1', 1, 0, '116.72.121.176', 1577006046),
(14, 'SGOT', '1', 1, 0, '116.72.121.176', 1577006063),
(15, 'ALKALINE PHOSPHATE', '1', 1, 0, '116.72.121.176', 1577006078),
(16, 'PAS', '1', 1, 0, '116.72.121.176', 1577006081),
(17, 'TOTAL TESTOSTERONE', '1', 1, 0, '116.72.121.176', 1577006121),
(18, 'REE TESTOSTERONE', '1', 1, 0, '116.72.121.176', 1577006127),
(19, 'T3', '1', 1, 0, '116.72.121.176', 1577006130),
(20, 'T4', '1', 1, 0, '116.72.121.176', 1577006132),
(21, 'TSH', '1', 1, 0, '116.72.121.176', 1577006134),
(22, 'FREE T3', '1', 1, 0, '116.72.121.176', 1577006137),
(23, 'REE BT4', '1', 1, 0, '116.72.121.176', 1577006140),
(24, 'REE T4', '1', 1, 0, '116.72.121.176', 1577006144),
(25, 'FSH', '1', 1, 0, '116.72.121.176', 1577006202),
(26, 'H', '1', 1, 0, '116.72.121.176', 1577006204),
(27, 'PROLACTIN', '1', 1, 0, '116.72.121.176', 1577006211),
(28, 'ORTISOL', '1', 1, 0, '116.72.121.176', 1577006214),
(29, 'HEA', '1', 1, 0, '116.72.121.176', 1577006216),
(30, 'DHEA', '1', 1, 0, '116.72.121.176', 1577006222),
(31, 'R A TEST', '1', 1, 0, '116.72.121.176', 1577006307),
(32, 'IRON', '1', 1, 0, '116.72.121.176', 1577006375),
(33, 'FERRITIN', '1', 1, 0, '116.72.121.176', 1577006388),
(34, 'FERRITIN SATURATION', '1', 1, 0, '116.72.121.176', 1577006403),
(35, 'VITAMIN B12', '1', 1, 0, '116.72.121.176', 1577008230),
(36, 'VITAMIN D3', '1', 1, 0, '116.72.121.176', 1577008238),
(37, 'AROGYAM C', '1', 1, 0, '27.4.215.17', 1599715560),
(38, 'AROGYAM B', '1', 1, 0, '27.4.215.17', 1599715568),
(39, 'AROGYAM A', '1', 1, 0, '27.4.215.17', 1599715578),
(40, 'AROGYAM X', '1', 1, 0, '27.4.215.17', 1599715587),
(41, 'AROGYAM 1.3', '1', 1, 0, '27.4.215.17', 1599715597),
(42, 'AROGYAM 1.2', '1', 1, 0, '27.4.215.17', 1599715611),
(43, 'AROHYAM 1.1', '1', 1, 0, '27.4.215.17', 1599715620),
(44, 'AROGYAM 1.4', '1', 1, 0, '27.4.215.17', 1599715640),
(45, 'AROGYAM 1.7', '1', 1, 0, '27.4.215.17', 1599715649);

-- --------------------------------------------------------

--
-- Table structure for table `master_lifestyle`
--

DROP TABLE IF EXISTS `master_lifestyle`;
CREATE TABLE `master_lifestyle` (
  `id` int(11) NOT NULL,
  `lifestyle` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_lifestyle`
--

INSERT INTO `master_lifestyle` (`id`, `lifestyle`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(2, 'Lifestyle updated', '', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_log`
--

DROP TABLE IF EXISTS `master_log`;
CREATE TABLE `master_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `ip` varchar(35) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_log`
--

INSERT INTO `master_log` (`id`, `user_id`, `user_type`, `ip`, `datetime`) VALUES
(1, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 08:06:27'),
(2, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 08:06:36'),
(3, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 08:30:59'),
(4, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 08:32:17'),
(5, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:28:14'),
(6, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:28:24'),
(7, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:28:35'),
(8, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:28:45'),
(9, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:31:10'),
(10, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:32:38'),
(11, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:32:54'),
(12, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:33:23'),
(13, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:33:48'),
(14, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-18 12:35:23'),
(15, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-19 04:57:37'),
(16, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-19 05:27:51'),
(17, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-19 07:28:58'),
(18, 1, 'admin', 'fe80::4147:a5fe:f5fe:5cf4', '2017-07-19 09:14:10'),
(19, 1, 'admin', '::1', '2017-07-20 07:11:24'),
(20, 1, 'admin', '183.87.55.198', '2017-07-20 09:14:22'),
(21, 1, 'admin', '182.70.118.74', '2017-07-20 09:25:11'),
(22, 1, 'admin', '183.87.55.198', '2017-07-21 16:37:09'),
(23, 1, 'normal', '183.87.55.198', '2017-07-21 16:42:33'),
(24, 1, 'admin', '182.54.148.126', '2017-07-25 09:01:08'),
(25, 1, 'admin', '182.54.148.126', '2017-07-25 09:15:55'),
(26, 1, 'admin', '182.54.148.100', '2017-08-02 17:08:37'),
(27, 1, 'admin', '182.54.148.100', '2017-08-02 17:09:17'),
(28, 1, 'admin', '182.54.148.100', '2017-08-02 17:10:49'),
(29, 1, 'admin', '183.87.55.173', '2017-08-02 17:28:48'),
(30, 1, 'admin', '182.70.118.74', '2017-08-03 05:32:53'),
(31, 1, 'admin', '182.70.118.74', '2017-08-03 09:30:12'),
(32, 1, 'admin', '182.70.118.74', '2017-08-03 09:30:13'),
(33, 1, 'admin', '182.70.118.74', '2017-08-03 09:31:09'),
(34, 1, 'admin', '27.5.118.8', '2017-08-08 10:40:56'),
(35, 1, 'admin', '183.87.55.221', '2017-08-13 04:41:24'),
(36, 1, 'admin', '183.87.55.182', '2017-08-15 17:43:08'),
(37, 1, 'admin', '183.87.55.182', '2017-08-15 19:30:49'),
(38, 1, 'admin', '49.44.51.120', '2017-08-16 02:59:36'),
(39, 1, 'admin', '49.44.51.120', '2017-08-16 03:19:36'),
(40, 1, 'admin', '60.243.30.166', '2017-08-16 05:17:38'),
(41, 1, 'admin', '60.243.30.166', '2017-08-16 05:42:53'),
(42, 1, 'admin', '183.87.55.215', '2017-08-16 17:38:13'),
(43, 1, 'admin', '59.182.56.14', '2017-08-19 17:53:05'),
(44, 1, 'admin', '60.243.29.48', '2017-08-24 03:43:34'),
(45, 1, 'admin', '60.243.29.48', '2017-08-24 03:46:47'),
(46, 1, 'admin', '27.124.62.166', '2017-10-29 05:49:19'),
(47, 1, 'admin', '27.124.62.166', '2017-10-29 06:01:27'),
(48, 1, 'admin', '27.124.62.166', '2017-10-29 06:10:22'),
(49, 1, 'admin', '27.124.62.166', '2017-10-29 06:21:51'),
(50, 1, 'admin', '49.33.10.69', '2017-10-29 07:03:11'),
(51, 3, 'normal', '182.70.118.74', '2017-10-30 09:36:33'),
(52, 3, 'normal', '182.70.118.74', '2017-10-30 12:08:02'),
(53, 3, 'normal', '103.238.104.104', '2017-10-31 18:24:11'),
(54, 4, 'normal', '182.70.118.74', '2017-11-01 14:08:52'),
(55, 4, 'normal', '182.70.118.74', '2017-11-01 14:09:43'),
(56, 1, 'admin', '182.70.118.74', '2017-11-01 14:54:43'),
(57, 5, 'normal', '182.70.118.74', '2017-11-01 15:51:06'),
(58, 6, 'normal', '182.70.118.74', '2017-11-01 15:51:52'),
(59, 7, 'normal', '182.70.118.74', '2017-11-01 15:53:03'),
(60, 1, 'normal', '182.70.118.74', '2017-11-02 14:53:40'),
(61, 1, 'normal', '182.70.118.74', '2017-11-02 15:18:37'),
(62, 3, 'normal', '45.249.226.116', '2017-11-02 17:38:45'),
(63, 3, 'normal', '182.54.148.103', '2017-11-03 04:35:49'),
(64, 3, 'normal', '43.241.144.136', '2017-11-03 05:29:46'),
(65, 3, 'normal', '43.241.144.136', '2017-11-03 06:07:14'),
(66, 3, 'normal', '182.70.118.74', '2017-11-03 07:01:46'),
(67, 1, 'normal', '182.70.118.74', '2017-11-03 07:31:47'),
(68, 3, 'normal', '182.70.118.74', '2017-11-03 07:44:32'),
(69, 3, 'normal', '182.70.118.74', '2017-11-03 07:45:06'),
(70, 3, 'normal', '182.70.118.74', '2017-11-03 07:46:20'),
(71, 3, 'normal', '182.70.118.74', '2017-11-03 08:24:42'),
(72, 3, 'normal', '182.70.118.74', '2017-11-03 08:25:12'),
(73, 3, 'normal', '182.70.118.74', '2017-11-03 08:26:00'),
(74, 3, 'normal', '182.70.118.74', '2017-11-03 11:30:38'),
(75, 3, 'normal', '103.238.104.220', '2017-11-03 14:23:32'),
(76, 3, 'normal', '182.54.148.103', '2017-11-03 14:53:02'),
(77, 3, 'normal', '103.238.106.131', '2017-11-04 03:15:52'),
(78, 3, 'normal', '103.238.106.131', '2017-11-04 07:31:36'),
(79, 3, 'normal', '103.238.106.131', '2017-11-04 08:17:32'),
(80, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:11'),
(81, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:19'),
(82, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:20'),
(83, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:20'),
(84, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:21'),
(85, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:21'),
(86, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:22'),
(87, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:22'),
(88, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:22'),
(89, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:22'),
(90, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:23'),
(91, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:23'),
(92, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:23'),
(93, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:23'),
(94, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:23'),
(95, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:24'),
(96, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:24'),
(97, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:48'),
(98, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:56'),
(99, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:57'),
(100, 3, 'normal', '103.238.106.131', '2017-11-04 08:20:59'),
(101, 3, 'normal', '103.238.106.131', '2017-11-04 08:21:00'),
(102, 3, 'normal', '103.238.106.131', '2017-11-04 08:21:21'),
(103, 3, 'normal', '103.238.106.131', '2017-11-04 08:21:22'),
(104, 3, 'normal', '103.238.106.131', '2017-11-04 08:21:22'),
(105, 3, 'normal', '103.238.106.131', '2017-11-04 08:21:22'),
(106, 3, 'normal', '103.238.106.131', '2017-11-04 08:21:22'),
(107, 3, 'normal', '182.54.148.103', '2017-11-04 08:24:55'),
(108, 3, 'normal', '103.238.106.131', '2017-11-04 08:25:33'),
(109, 3, 'normal', '103.238.106.131', '2017-11-04 08:28:13'),
(110, 3, 'normal', '103.238.106.131', '2017-11-04 08:30:50'),
(111, 3, 'normal', '103.238.106.131', '2017-11-04 08:52:32'),
(112, 3, 'normal', '103.238.106.131', '2017-11-04 08:55:41'),
(113, 3, 'normal', '103.238.106.131', '2017-11-04 08:59:44'),
(114, 3, 'normal', '103.238.106.131', '2017-11-04 09:07:34'),
(115, 3, 'normal', '103.238.106.131', '2017-11-04 09:08:54'),
(116, 3, 'normal', '103.238.106.131', '2017-11-04 09:11:32'),
(117, 3, 'normal', '103.238.106.131', '2017-11-04 09:14:29'),
(118, 3, 'normal', '103.238.106.131', '2017-11-04 09:29:28'),
(119, 3, 'normal', '103.238.106.131', '2017-11-04 09:30:23'),
(120, 3, 'normal', '103.238.106.131', '2017-11-04 09:32:42'),
(121, 3, 'normal', '103.238.106.131', '2017-11-04 09:36:47'),
(122, 3, 'normal', '103.238.106.131', '2017-11-04 09:37:29'),
(123, 3, 'normal', '103.238.106.131', '2017-11-04 09:38:04'),
(124, 3, 'normal', '103.238.106.131', '2017-11-04 09:39:40'),
(125, 3, 'normal', '103.238.106.131', '2017-11-04 09:39:41'),
(126, 3, 'normal', '103.238.106.131', '2017-11-04 09:44:04'),
(127, 3, 'normal', '103.238.106.131', '2017-11-04 10:23:49'),
(128, 3, 'normal', '103.238.106.131', '2017-11-04 10:31:33'),
(129, 3, 'normal', '103.238.106.131', '2017-11-04 10:33:07'),
(130, 3, 'normal', '103.238.106.131', '2017-11-04 10:33:48'),
(131, 3, 'normal', '103.238.106.131', '2017-11-04 10:38:25'),
(132, 3, 'normal', '103.238.106.131', '2017-11-04 10:43:47'),
(133, 3, 'normal', '103.238.106.131', '2017-11-04 12:02:53'),
(134, 3, 'normal', '103.238.106.131', '2017-11-04 12:08:43'),
(135, 3, 'normal', '103.238.106.131', '2017-11-04 12:10:29'),
(136, 3, 'normal', '103.238.106.131', '2017-11-04 12:11:31'),
(137, 3, 'normal', '103.238.106.131', '2017-11-04 12:13:37'),
(138, 3, 'normal', '103.238.106.131', '2017-11-04 12:15:14'),
(139, 3, 'normal', '103.238.106.131', '2017-11-04 12:18:35'),
(140, 3, 'normal', '103.238.106.131', '2017-11-04 14:01:42'),
(141, 3, 'normal', '103.238.106.131', '2017-11-04 14:09:41'),
(142, 3, 'normal', '103.238.106.131', '2017-11-04 14:11:29'),
(143, 3, 'normal', '103.238.104.202', '2017-11-05 07:09:24'),
(144, 3, 'normal', '49.34.4.236', '2017-11-05 07:30:51'),
(145, 3, 'normal', '49.34.4.236', '2017-11-05 07:33:29'),
(146, 3, 'normal', '49.34.4.236', '2017-11-05 07:35:00'),
(147, 3, 'normal', '103.39.128.44', '2017-11-05 07:54:52'),
(148, 3, 'normal', '103.39.128.44', '2017-11-05 08:01:45'),
(149, 3, 'normal', '103.39.128.44', '2017-11-05 08:10:27'),
(150, 3, 'normal', '103.39.128.44', '2017-11-05 08:14:02'),
(151, 3, 'normal', '103.39.128.44', '2017-11-05 08:17:20'),
(152, 3, 'normal', '103.39.128.44', '2017-11-05 08:32:23'),
(153, 3, 'normal', '103.39.128.44', '2017-11-05 08:36:59'),
(154, 3, 'normal', '103.39.128.44', '2017-11-05 09:00:07'),
(155, 3, 'normal', '103.39.128.44', '2017-11-05 09:01:38'),
(156, 3, 'normal', '103.39.128.44', '2017-11-05 09:12:15'),
(157, 3, 'normal', '103.39.128.44', '2017-11-05 09:13:34'),
(158, 3, 'normal', '103.39.128.44', '2017-11-05 09:16:53'),
(159, 3, 'normal', '103.39.128.44', '2017-11-05 09:20:33'),
(160, 3, 'normal', '103.39.128.44', '2017-11-05 09:22:56'),
(161, 3, 'normal', '103.39.128.44', '2017-11-05 10:49:40'),
(162, 3, 'normal', '103.39.128.44', '2017-11-05 10:55:14'),
(163, 3, 'normal', '103.39.128.44', '2017-11-05 10:56:44'),
(164, 3, 'normal', '103.39.128.44', '2017-11-05 11:54:34'),
(165, 3, 'normal', '103.39.128.44', '2017-11-05 12:06:14'),
(166, 3, 'normal', '103.39.128.44', '2017-11-05 12:12:28'),
(167, 3, 'normal', '103.39.128.44', '2017-11-05 12:14:16'),
(168, 3, 'normal', '103.39.128.44', '2017-11-05 12:16:40'),
(169, 3, 'normal', '103.39.128.44', '2017-11-05 12:31:19'),
(170, 3, 'normal', '103.39.128.44', '2017-11-05 12:33:22'),
(171, 3, 'normal', '103.238.104.215', '2017-11-06 04:59:59'),
(172, 3, 'normal', '103.238.104.215', '2017-11-06 05:11:40'),
(173, 3, 'normal', '103.238.104.215', '2017-11-06 05:14:42'),
(174, 3, 'normal', '103.238.104.215', '2017-11-06 05:23:02'),
(175, 3, 'normal', '103.238.104.215', '2017-11-06 05:23:27'),
(176, 3, 'normal', '103.238.104.215', '2017-11-06 05:28:42'),
(177, 3, 'normal', '103.238.104.215', '2017-11-06 06:07:13'),
(178, 3, 'normal', '103.238.104.215', '2017-11-06 06:09:08'),
(179, 3, 'normal', '103.238.104.215', '2017-11-06 06:12:19'),
(180, 3, 'normal', '103.238.104.215', '2017-11-06 06:14:36'),
(181, 3, 'normal', '103.238.104.215', '2017-11-06 06:17:27'),
(182, 3, 'normal', '103.238.104.215', '2017-11-06 06:24:38'),
(183, 3, 'normal', '103.238.104.215', '2017-11-06 06:26:23'),
(184, 3, 'normal', '103.238.104.215', '2017-11-06 06:29:12'),
(185, 3, 'normal', '103.238.104.215', '2017-11-06 06:30:59'),
(186, 3, 'normal', '103.238.104.215', '2017-11-06 06:32:28'),
(187, 3, 'normal', '103.238.104.215', '2017-11-06 06:36:01'),
(188, 3, 'normal', '103.238.104.215', '2017-11-06 06:38:41'),
(189, 3, 'normal', '103.238.104.215', '2017-11-06 06:40:22'),
(190, 3, 'normal', '103.238.104.215', '2017-11-06 07:03:27'),
(191, 3, 'normal', '103.238.104.215', '2017-11-06 07:04:22'),
(192, 3, 'normal', '103.238.104.215', '2017-11-06 07:05:18'),
(193, 3, 'normal', '103.238.104.215', '2017-11-06 07:07:17'),
(194, 3, 'normal', '103.238.104.215', '2017-11-06 07:08:14'),
(195, 3, 'normal', '103.238.104.215', '2017-11-06 07:18:43'),
(196, 3, 'normal', '103.238.104.215', '2017-11-06 07:19:46'),
(197, 3, 'normal', '103.238.104.215', '2017-11-06 07:20:53'),
(198, 3, 'normal', '103.238.104.215', '2017-11-06 07:24:51'),
(199, 3, 'normal', '182.70.118.74', '2017-11-06 08:18:43'),
(200, 3, 'normal', '103.238.104.215', '2017-11-06 08:30:39'),
(201, 3, 'normal', '103.238.104.215', '2017-11-06 09:03:52'),
(202, 3, 'normal', '103.238.104.215', '2017-11-06 10:12:18'),
(203, 3, 'normal', '103.238.104.215', '2017-11-06 10:14:56'),
(204, 3, 'normal', '103.238.104.215', '2017-11-06 10:15:17'),
(205, 3, 'normal', '103.238.104.215', '2017-11-06 10:15:34'),
(206, 3, 'normal', '103.238.104.215', '2017-11-06 10:23:21'),
(207, 3, 'normal', '103.238.104.215', '2017-11-06 10:23:39'),
(208, 3, 'normal', '103.238.104.215', '2017-11-06 10:24:00'),
(209, 3, 'normal', '103.238.104.215', '2017-11-06 10:25:52'),
(210, 3, 'normal', '103.238.104.215', '2017-11-06 10:48:56'),
(211, 3, 'normal', '103.238.104.215', '2017-11-06 10:49:47'),
(212, 3, 'normal', '103.238.104.215', '2017-11-06 10:53:23'),
(213, 3, 'normal', '103.238.104.215', '2017-11-06 11:04:21'),
(214, 3, 'normal', '103.238.104.215', '2017-11-06 11:14:53'),
(215, 3, 'normal', '103.238.104.215', '2017-11-06 11:25:38'),
(216, 3, 'normal', '103.238.104.215', '2017-11-06 12:03:11'),
(217, 3, 'normal', '103.238.104.215', '2017-11-06 12:43:53'),
(218, 3, 'normal', '103.238.104.215', '2017-11-06 12:45:01'),
(219, 3, 'normal', '49.34.103.190', '2017-11-06 13:16:22'),
(220, 3, 'normal', '182.54.148.103', '2017-11-06 14:37:25'),
(221, 3, 'normal', '182.54.148.103', '2017-11-06 14:41:20'),
(222, 3, 'normal', '182.54.148.103', '2017-11-06 14:41:33'),
(223, 3, 'normal', '182.54.148.103', '2017-11-06 14:41:46'),
(224, 3, 'normal', '103.238.106.170', '2017-11-07 05:06:29'),
(225, 3, 'normal', '103.238.106.170', '2017-11-07 05:12:23'),
(226, 3, 'normal', '49.34.110.11', '2017-11-07 10:03:03'),
(227, 3, 'normal', '49.34.76.98', '2017-11-08 13:13:32'),
(228, 14, 'normal', '49.34.126.243', '2017-11-08 18:17:36'),
(229, 3, 'normal', '182.54.148.103', '2017-11-08 18:22:16'),
(230, 3, 'normal', '182.54.148.103', '2017-11-09 04:32:01'),
(231, 18, 'normal', '103.238.104.170', '2017-11-09 05:38:42'),
(232, 14, 'normal', '49.34.99.116', '2017-11-09 05:58:09'),
(233, 22, 'normal', '49.34.106.18', '2017-11-10 05:03:12'),
(234, 23, 'normal', '5.31.244.80', '2017-11-10 12:56:28'),
(235, 24, 'normal', '49.33.17.31', '2017-11-11 10:57:51'),
(236, 24, 'normal', '49.33.17.31', '2017-11-11 10:58:38'),
(237, 22, 'normal', '49.34.168.254', '2017-11-11 12:58:54'),
(238, 22, 'normal', '49.34.168.254', '2017-11-11 13:03:46'),
(239, 22, 'normal', '49.34.168.254', '2017-11-11 13:10:53'),
(240, 22, 'normal', '49.34.168.254', '2017-11-11 13:11:25'),
(241, 25, 'normal', '5.31.199.22', '2017-11-11 15:31:33'),
(242, 25, 'normal', '5.38.28.212', '2017-11-11 15:32:09'),
(243, 22, 'normal', '117.204.149.104', '2017-11-11 15:37:45'),
(244, 3, 'normal', '182.54.148.103', '2017-11-11 17:46:42'),
(245, 26, 'normal', '182.54.148.103', '2017-11-11 17:50:45'),
(246, 22, 'normal', '49.34.105.46', '2017-11-11 17:52:49'),
(247, 22, 'normal', '49.34.105.46', '2017-11-11 17:55:13'),
(248, 22, 'normal', '49.34.105.46', '2017-11-11 18:43:18'),
(249, 22, 'normal', '49.34.122.91', '2017-11-11 19:06:41'),
(250, 14, 'normal', '103.238.106.64', '2017-11-12 03:13:33'),
(251, 22, 'normal', '122.102.121.44', '2017-11-12 13:32:36'),
(252, 22, 'normal', '106.66.36.249', '2017-11-12 14:11:21'),
(253, 14, 'normal', '42.106.11.153', '2017-11-12 17:38:50'),
(254, 14, 'normal', '49.34.116.165', '2017-11-12 17:45:53'),
(255, 22, 'normal', '106.66.38.8', '2017-11-13 04:26:19'),
(256, 14, 'normal', '43.241.144.233', '2017-11-13 07:16:05'),
(257, 14, 'normal', '43.242.116.160', '2017-11-13 16:30:44'),
(258, 14, 'normal', '43.242.116.160', '2017-11-13 16:37:19'),
(259, 22, 'normal', '49.34.182.95', '2017-11-13 18:34:27'),
(260, 14, 'normal', '43.242.116.160', '2017-11-13 18:45:40'),
(261, 22, 'normal', '49.34.182.95', '2017-11-13 18:50:03'),
(262, 22, 'normal', '49.34.182.95', '2017-11-13 19:18:00'),
(263, 14, 'normal', '122.169.2.48', '2017-11-14 07:05:43'),
(264, 14, 'normal', '103.238.106.6', '2017-11-14 08:22:56'),
(265, 14, 'normal', '42.106.2.153', '2017-11-14 10:00:55'),
(266, 14, 'normal', '49.34.95.16', '2017-11-14 10:23:04'),
(267, 14, 'normal', '42.106.2.153', '2017-11-14 11:37:29'),
(268, 3, 'normal', '103.238.106.6', '2017-11-14 12:41:48'),
(269, 14, 'normal', '42.106.15.249', '2017-11-14 17:49:23'),
(270, 22, 'normal', '117.204.148.40', '2017-11-14 18:38:37'),
(271, 3, 'normal', '49.34.162.152', '2017-11-15 12:36:32'),
(272, 14, 'normal', '49.34.155.93', '2017-11-15 14:05:55'),
(273, 24, 'normal', '49.32.178.234', '2017-11-15 14:30:37'),
(274, 14, 'normal', '103.238.104.61', '2017-11-15 17:55:42'),
(275, 14, 'normal', '103.238.104.61', '2017-11-15 17:57:08'),
(276, 22, 'normal', '49.34.110.7', '2017-11-15 18:04:59'),
(277, 22, 'normal', '49.34.110.7', '2017-11-15 18:38:39'),
(278, 31, 'normal', '43.241.144.227', '2017-11-16 04:50:22'),
(279, 31, 'normal', '43.241.144.227', '2017-11-16 05:37:54'),
(280, 14, 'normal', '43.241.144.227', '2017-11-16 06:43:20'),
(281, 14, 'normal', '43.241.144.227', '2017-11-16 06:45:04'),
(282, 22, 'normal', '49.34.134.237', '2017-11-16 17:20:29'),
(283, 14, 'normal', '43.241.144.226', '2017-11-19 07:02:56'),
(284, 14, 'normal', '43.241.144.226', '2017-11-19 16:55:17'),
(285, 3, 'normal', '49.34.6.177', '2017-11-21 10:15:26'),
(286, 14, 'normal', '43.242.116.30', '2017-11-22 19:07:57'),
(287, 35, 'normal', '43.242.116.30', '2017-11-23 01:17:43'),
(288, 35, 'normal', '43.242.116.30', '2017-11-23 01:18:21'),
(289, 35, 'normal', '43.242.116.30', '2017-11-23 01:27:10'),
(290, 35, 'normal', '106.201.68.102', '2017-11-23 08:39:21'),
(291, 14, 'normal', '42.106.3.80', '2017-11-23 09:00:09'),
(292, 3, 'normal', '49.32.71.9', '2017-11-24 04:53:31'),
(293, 14, 'normal', '42.106.6.176', '2017-11-24 10:56:35'),
(294, 37, 'normal', '103.40.196.255', '2017-11-29 16:11:59'),
(295, 14, 'normal', '49.34.155.150', '2018-01-02 05:12:38'),
(296, 41, 'normal', '42.106.89.61', '2018-01-05 06:05:11'),
(297, 3, 'normal', '49.34.165.236', '2018-01-08 13:36:27'),
(298, 3, 'normal', '49.34.165.236', '2018-01-08 13:38:04'),
(299, 3, 'normal', '49.34.165.236', '2018-01-08 13:44:33'),
(300, 41, 'normal', '42.106.48.161', '2018-01-08 15:48:32'),
(301, 3, 'normal', '49.34.150.154', '2018-01-09 10:38:50'),
(302, 41, 'normal', '42.106.38.90', '2018-01-10 07:29:27'),
(303, 41, 'normal', '42.106.42.114', '2018-01-11 05:11:15'),
(304, 3, 'normal', '49.34.174.23', '2018-01-11 11:27:42'),
(305, 41, 'normal', '42.106.42.114', '2018-01-12 05:22:55'),
(306, 41, 'normal', '103.81.92.244', '2018-01-12 05:56:10'),
(307, 41, 'normal', '42.106.42.114', '2018-01-12 05:57:13'),
(308, 41, 'normal', '49.34.166.11', '2018-01-12 08:46:56'),
(309, 41, 'normal', '49.34.166.11', '2018-01-12 08:58:30'),
(310, 41, 'normal', '49.34.166.11', '2018-01-12 09:01:35'),
(311, 41, 'normal', '49.34.166.11', '2018-01-12 09:02:59'),
(312, 41, 'normal', '49.34.166.11', '2018-01-12 09:55:14'),
(313, 41, 'normal', '49.34.166.11', '2018-01-12 09:57:55'),
(314, 41, 'normal', '49.34.166.11', '2018-01-12 10:35:46'),
(315, 41, 'normal', '49.34.166.11', '2018-01-12 10:39:21'),
(316, 41, 'normal', '49.34.166.11', '2018-01-12 10:42:53'),
(317, 41, 'normal', '49.34.166.11', '2018-01-12 11:00:33'),
(318, 41, 'normal', '49.34.166.11', '2018-01-12 11:06:26'),
(319, 41, 'normal', '103.81.94.11', '2018-01-16 05:23:24'),
(320, 41, 'normal', '103.81.94.11', '2018-01-16 05:25:10'),
(321, 41, 'normal', '103.81.94.11', '2018-01-16 05:37:13'),
(322, 41, 'normal', '103.81.94.11', '2018-01-16 05:49:41'),
(323, 41, 'normal', '103.81.94.11', '2018-01-16 05:51:20'),
(324, 41, 'normal', '103.238.105.28', '2018-01-16 06:06:58'),
(325, 41, 'normal', '103.238.105.28', '2018-01-16 06:08:08'),
(326, 41, 'normal', '103.238.105.28', '2018-01-16 06:25:46'),
(327, 41, 'normal', '103.238.105.28', '2018-01-16 06:28:26'),
(328, 41, 'normal', '103.238.105.28', '2018-01-16 06:35:13'),
(329, 41, 'normal', '103.238.105.28', '2018-01-16 06:37:22'),
(330, 41, 'normal', '49.34.151.19', '2018-01-16 06:47:37'),
(331, 41, 'normal', '49.34.151.19', '2018-01-16 08:35:35'),
(332, 41, 'normal', '49.34.151.19', '2018-01-16 09:59:25'),
(333, 41, 'normal', '49.34.151.19', '2018-01-16 10:09:24'),
(334, 41, 'normal', '49.34.151.19', '2018-01-16 10:12:24'),
(335, 41, 'normal', '49.34.151.19', '2018-01-16 10:16:15'),
(336, 41, 'normal', '49.34.151.19', '2018-01-16 10:26:16'),
(337, 41, 'normal', '49.34.151.19', '2018-01-16 10:29:33'),
(338, 41, 'normal', '49.34.151.19', '2018-01-16 10:48:07'),
(339, 41, 'normal', '103.238.107.153', '2018-01-16 11:03:05'),
(340, 3, 'normal', '103.238.107.153', '2018-01-16 11:18:19'),
(341, 41, 'normal', '103.238.107.153', '2018-01-16 11:24:24'),
(342, 41, 'normal', '103.238.107.153', '2018-01-16 11:26:21'),
(343, 41, 'normal', '103.238.107.153', '2018-01-16 11:27:26'),
(344, 41, 'normal', '103.238.107.153', '2018-01-16 11:30:39'),
(345, 41, 'normal', '103.238.107.153', '2018-01-16 11:32:14'),
(346, 41, 'normal', '103.238.107.153', '2018-01-16 12:18:57'),
(347, 41, 'normal', '103.238.107.153', '2018-01-16 12:22:20'),
(348, 41, 'normal', '103.238.107.153', '2018-01-16 12:23:03'),
(349, 41, 'normal', '103.238.107.153', '2018-01-16 12:39:13'),
(350, 41, 'normal', '103.238.107.153', '2018-01-16 12:40:10'),
(351, 41, 'normal', '103.238.107.153', '2018-01-16 12:41:58'),
(352, 41, 'normal', '103.238.107.153', '2018-01-16 12:42:49'),
(353, 41, 'normal', '103.238.107.153', '2018-01-16 12:43:25'),
(354, 41, 'normal', '103.238.107.153', '2018-01-16 13:05:11'),
(355, 41, 'normal', '103.238.107.153', '2018-01-16 13:06:03'),
(356, 41, 'normal', '103.238.107.153', '2018-01-16 13:09:22'),
(357, 41, 'normal', '103.238.107.153', '2018-01-16 13:10:08'),
(358, 41, 'normal', '103.238.107.153', '2018-01-16 13:10:55'),
(359, 41, 'normal', '103.238.107.153', '2018-01-16 13:11:40'),
(360, 41, 'normal', '103.238.107.153', '2018-01-16 13:13:35'),
(361, 41, 'normal', '103.238.107.153', '2018-01-16 13:16:12'),
(362, 41, 'normal', '103.238.107.153', '2018-01-16 13:17:13'),
(363, 41, 'normal', '103.238.107.153', '2018-01-16 13:18:47'),
(364, 41, 'normal', '103.238.107.153', '2018-01-16 13:23:05'),
(365, 41, 'normal', '103.238.107.153', '2018-01-16 13:26:23'),
(366, 41, 'normal', '103.238.107.153', '2018-01-16 13:28:10'),
(367, 41, 'normal', '103.238.107.153', '2018-01-16 13:29:00'),
(368, 41, 'normal', '103.238.107.153', '2018-01-16 13:30:42'),
(369, 41, 'normal', '103.238.107.153', '2018-01-16 13:32:12'),
(370, 41, 'normal', '103.238.107.153', '2018-01-16 13:34:35'),
(371, 41, 'normal', '103.85.9.144', '2018-01-17 05:17:09'),
(372, 41, 'normal', '103.85.9.144', '2018-01-17 05:22:21'),
(373, 41, 'normal', '103.85.9.144', '2018-01-17 05:22:29'),
(374, 41, 'normal', '103.85.9.144', '2018-01-17 05:44:33'),
(375, 41, 'normal', '103.85.9.144', '2018-01-17 05:58:52'),
(376, 41, 'normal', '103.85.9.144', '2018-01-17 05:59:56'),
(377, 41, 'normal', '103.85.9.144', '2018-01-17 06:32:18'),
(378, 41, 'normal', '103.85.9.144', '2018-01-17 06:50:05'),
(379, 41, 'normal', '103.85.9.144', '2018-01-17 06:57:46'),
(380, 41, 'normal', '103.85.9.144', '2018-01-17 07:00:13'),
(381, 41, 'normal', '103.85.9.144', '2018-01-17 07:12:51'),
(382, 41, 'normal', '103.85.9.144', '2018-01-17 07:14:48'),
(383, 41, 'normal', '103.85.9.144', '2018-01-17 07:15:57'),
(384, 41, 'normal', '103.85.9.144', '2018-01-17 07:20:36'),
(385, 41, 'normal', '103.85.9.144', '2018-01-17 07:24:18'),
(386, 41, 'normal', '103.85.9.144', '2018-01-17 07:26:24'),
(387, 41, 'normal', '103.85.9.144', '2018-01-17 07:28:44'),
(388, 41, 'normal', '103.85.9.144', '2018-01-17 08:39:50'),
(389, 41, 'normal', '103.85.9.144', '2018-01-17 08:42:43'),
(390, 41, 'normal', '103.85.9.144', '2018-01-17 08:48:05'),
(391, 41, 'normal', '103.85.9.144', '2018-01-17 08:50:47'),
(392, 41, 'normal', '103.85.9.144', '2018-01-17 09:03:33'),
(393, 41, 'normal', '103.85.9.144', '2018-01-17 09:05:16'),
(394, 41, 'normal', '49.34.128.244', '2018-01-17 09:21:58'),
(395, 41, 'normal', '103.85.9.144', '2018-01-17 09:23:29'),
(396, 41, 'normal', '103.85.9.144', '2018-01-17 09:35:21'),
(397, 41, 'normal', '103.85.9.144', '2018-01-17 10:01:10'),
(398, 41, 'normal', '103.85.9.144', '2018-01-17 10:02:17'),
(399, 41, 'normal', '103.85.9.144', '2018-01-17 10:06:15'),
(400, 41, 'normal', '103.85.9.144', '2018-01-17 12:40:31'),
(401, 41, 'normal', '103.85.9.144', '2018-01-17 13:41:35'),
(402, 41, 'normal', '103.85.9.144', '2018-01-17 13:46:26'),
(403, 41, 'normal', '103.85.9.144', '2018-01-17 13:54:16'),
(404, 41, 'normal', '49.34.173.49', '2018-01-18 05:20:49'),
(405, 41, 'normal', '103.81.93.13', '2018-01-18 06:41:47'),
(406, 41, 'normal', '103.81.93.13', '2018-01-18 06:45:50'),
(407, 41, 'normal', '103.81.93.13', '2018-01-18 06:51:27'),
(408, 41, 'normal', '103.81.93.13', '2018-01-18 06:54:15'),
(409, 41, 'normal', '103.81.93.13', '2018-01-18 06:55:40'),
(410, 41, 'normal', '103.81.93.13', '2018-01-18 06:58:31'),
(411, 41, 'normal', '103.81.93.13', '2018-01-18 07:00:51'),
(412, 41, 'normal', '103.81.93.13', '2018-01-18 07:05:33'),
(413, 41, 'normal', '103.81.93.13', '2018-01-18 07:08:23'),
(414, 41, 'normal', '103.81.93.13', '2018-01-18 07:15:51'),
(415, 41, 'normal', '103.81.93.13', '2018-01-18 07:17:00'),
(416, 41, 'normal', '103.81.93.13', '2018-01-18 07:18:43'),
(417, 41, 'normal', '103.81.93.13', '2018-01-18 07:19:46'),
(418, 41, 'normal', '103.81.93.13', '2018-01-18 07:20:40'),
(419, 41, 'normal', '103.81.93.13', '2018-01-18 07:22:19'),
(420, 41, 'normal', '103.81.93.13', '2018-01-18 07:27:16'),
(421, 41, 'normal', '103.81.93.13', '2018-01-18 07:28:12'),
(422, 41, 'normal', '103.81.93.13', '2018-01-18 07:29:35'),
(423, 41, 'normal', '103.81.93.13', '2018-01-18 07:31:11'),
(424, 41, 'normal', '103.81.93.13', '2018-01-18 07:32:20'),
(425, 41, 'normal', '103.81.93.13', '2018-01-18 07:33:04'),
(426, 41, 'normal', '103.81.93.13', '2018-01-18 08:39:17'),
(427, 41, 'normal', '103.81.93.13', '2018-01-18 08:41:08'),
(428, 41, 'normal', '103.81.93.13', '2018-01-18 08:41:42'),
(429, 41, 'normal', '103.81.93.13', '2018-01-18 08:42:18'),
(430, 41, 'normal', '103.81.93.13', '2018-01-18 08:44:01'),
(431, 41, 'normal', '103.81.93.13', '2018-01-18 08:44:45'),
(432, 41, 'normal', '103.81.93.13', '2018-01-18 08:45:53'),
(433, 41, 'normal', '157.32.49.138', '2018-01-18 08:54:31'),
(434, 41, 'normal', '157.32.49.138', '2018-01-18 08:55:25'),
(435, 41, 'normal', '157.32.49.138', '2018-01-18 08:55:46'),
(436, 41, 'normal', '157.32.49.138', '2018-01-18 08:56:22'),
(437, 41, 'normal', '157.32.49.138', '2018-01-18 08:57:05'),
(438, 41, 'normal', '157.32.49.138', '2018-01-18 08:57:48'),
(439, 41, 'normal', '157.32.49.138', '2018-01-18 08:58:27'),
(440, 41, 'normal', '157.32.49.138', '2018-01-18 08:59:07'),
(441, 41, 'normal', '157.32.49.138', '2018-01-18 09:00:22'),
(442, 41, 'normal', '157.32.49.138', '2018-01-18 09:01:45'),
(443, 41, 'normal', '157.32.49.138', '2018-01-18 09:05:16'),
(444, 41, 'normal', '157.32.49.138', '2018-01-18 09:06:29'),
(445, 41, 'normal', '157.32.49.138', '2018-01-18 09:07:44'),
(446, 41, 'normal', '157.32.49.138', '2018-01-18 09:08:49'),
(447, 41, 'normal', '157.32.49.138', '2018-01-18 09:10:40'),
(448, 41, 'normal', '157.32.49.138', '2018-01-18 09:11:45'),
(449, 41, 'normal', '157.32.49.138', '2018-01-18 09:13:06'),
(450, 41, 'normal', '157.32.49.138', '2018-01-18 09:13:59'),
(451, 41, 'normal', '157.32.49.138', '2018-01-18 09:41:46'),
(452, 41, 'normal', '157.32.49.138', '2018-01-18 09:42:18'),
(453, 41, 'normal', '157.32.49.138', '2018-01-18 09:53:59'),
(454, 41, 'normal', '157.32.49.138', '2018-01-18 10:13:09'),
(455, 41, 'normal', '157.32.49.138', '2018-01-18 10:16:11'),
(456, 41, 'normal', '157.32.49.138', '2018-01-18 10:40:03'),
(457, 41, 'normal', '42.106.71.238', '2018-01-18 10:44:17'),
(458, 41, 'normal', '157.32.49.138', '2018-01-18 10:51:34'),
(459, 41, 'normal', '157.32.49.138', '2018-01-18 10:53:19'),
(460, 41, 'normal', '103.81.94.7', '2018-01-18 10:57:30'),
(461, 41, 'normal', '103.81.94.7', '2018-01-18 10:59:25'),
(462, 41, 'normal', '103.81.94.7', '2018-01-18 11:00:16'),
(463, 41, 'normal', '103.81.94.7', '2018-01-18 11:01:58'),
(464, 41, 'normal', '103.81.94.7', '2018-01-18 11:02:37'),
(465, 41, 'normal', '103.81.94.7', '2018-01-18 11:03:39'),
(466, 41, 'normal', '103.81.94.7', '2018-01-18 11:04:42'),
(467, 41, 'normal', '103.81.94.7', '2018-01-18 11:05:24'),
(468, 41, 'normal', '103.81.94.7', '2018-01-18 11:06:22'),
(469, 41, 'normal', '103.81.94.7', '2018-01-18 11:10:05'),
(470, 41, 'normal', '103.81.94.7', '2018-01-18 11:11:48'),
(471, 41, 'normal', '103.81.94.7', '2018-01-18 11:15:18'),
(472, 41, 'normal', '103.81.94.7', '2018-01-18 11:17:23'),
(473, 41, 'normal', '103.81.94.7', '2018-01-18 11:21:08'),
(474, 41, 'normal', '103.81.94.7', '2018-01-18 11:22:03'),
(475, 41, 'normal', '103.81.94.7', '2018-01-18 11:25:59'),
(476, 41, 'normal', '103.81.94.7', '2018-01-18 11:27:05'),
(477, 41, 'normal', '103.81.94.7', '2018-01-18 11:28:35'),
(478, 41, 'normal', '103.81.94.7', '2018-01-18 11:29:23'),
(479, 41, 'normal', '103.81.94.7', '2018-01-18 11:31:17'),
(480, 41, 'normal', '103.81.94.7', '2018-01-18 11:31:55'),
(481, 41, 'normal', '103.81.94.7', '2018-01-18 11:32:38'),
(482, 41, 'normal', '157.32.62.165', '2018-01-18 12:29:44'),
(483, 41, 'normal', '157.32.62.165', '2018-01-18 12:33:22'),
(484, 41, 'normal', '157.32.62.165', '2018-01-18 12:36:09'),
(485, 41, 'normal', '103.81.94.7', '2018-01-18 13:32:06'),
(486, 41, 'normal', '103.85.9.206', '2018-01-19 05:14:45'),
(487, 41, 'normal', '103.85.9.206', '2018-01-19 05:17:32'),
(488, 41, 'normal', '103.85.9.206', '2018-01-19 05:17:38'),
(489, 41, 'normal', '103.85.9.206', '2018-01-19 05:20:27'),
(490, 41, 'normal', '103.85.9.206', '2018-01-19 05:23:00'),
(491, 41, 'normal', '103.85.9.206', '2018-01-19 05:24:19'),
(492, 41, 'normal', '103.85.9.206', '2018-01-19 05:24:25'),
(493, 41, 'normal', '103.85.9.206', '2018-01-19 05:31:38'),
(494, 41, 'normal', '103.85.9.206', '2018-01-19 05:32:14'),
(495, 41, 'normal', '103.85.9.206', '2018-01-19 05:33:04'),
(496, 41, 'normal', '103.85.9.206', '2018-01-19 05:33:15'),
(497, 41, 'normal', '103.85.9.206', '2018-01-19 05:33:49'),
(498, 41, 'normal', '103.85.9.206', '2018-01-19 05:43:01'),
(499, 41, 'normal', '103.85.9.206', '2018-01-19 06:12:43'),
(500, 41, 'normal', '103.85.9.206', '2018-01-19 06:14:13'),
(501, 41, 'normal', '103.85.9.206', '2018-01-19 06:21:02'),
(502, 41, 'normal', '103.85.9.206', '2018-01-19 06:23:00'),
(503, 41, 'normal', '103.85.9.206', '2018-01-19 06:26:42'),
(504, 41, 'normal', '103.85.9.206', '2018-01-19 06:29:54'),
(505, 41, 'normal', '103.85.9.206', '2018-01-19 06:39:21'),
(506, 41, 'normal', '103.85.9.206', '2018-01-19 06:41:25'),
(507, 41, 'normal', '103.85.9.206', '2018-01-19 06:48:23'),
(508, 41, 'normal', '103.85.9.206', '2018-01-19 07:30:20'),
(509, 41, 'normal', '103.85.9.206', '2018-01-19 08:36:29'),
(510, 41, 'normal', '103.85.9.206', '2018-01-19 08:40:22'),
(511, 41, 'normal', '103.85.9.206', '2018-01-19 08:53:20'),
(512, 14, 'normal', '42.106.10.241', '2018-01-19 08:54:16'),
(513, 41, 'normal', '103.85.9.206', '2018-01-19 09:21:27'),
(514, 41, 'normal', '103.85.9.206', '2018-01-19 09:28:45'),
(515, 41, 'normal', '103.85.9.206', '2018-01-19 09:31:20'),
(516, 41, 'normal', '103.85.9.206', '2018-01-19 09:32:45'),
(517, 41, 'normal', '103.85.9.206', '2018-01-19 09:47:11'),
(518, 41, 'normal', '103.85.9.206', '2018-01-19 09:50:54'),
(519, 41, 'normal', '103.85.9.206', '2018-01-19 09:54:45'),
(520, 41, 'normal', '103.85.9.206', '2018-01-19 09:56:19'),
(521, 41, 'normal', '103.85.9.206', '2018-01-19 09:58:10'),
(522, 41, 'normal', '103.85.9.206', '2018-01-19 10:00:57'),
(523, 41, 'normal', '103.85.9.206', '2018-01-19 10:02:43'),
(524, 41, 'normal', '103.85.9.206', '2018-01-19 10:04:00'),
(525, 41, 'normal', '103.85.9.206', '2018-01-19 10:06:17'),
(526, 41, 'normal', '103.85.9.206', '2018-01-19 10:07:25'),
(527, 41, 'normal', '103.85.9.206', '2018-01-19 10:10:43'),
(528, 41, 'normal', '103.85.9.206', '2018-01-19 10:11:25'),
(529, 41, 'normal', '103.85.9.206', '2018-01-19 10:12:50'),
(530, 41, 'normal', '103.85.9.206', '2018-01-19 10:13:49'),
(531, 41, 'normal', '103.85.9.206', '2018-01-19 10:14:24'),
(532, 41, 'normal', '103.85.9.206', '2018-01-19 10:20:36'),
(533, 41, 'normal', '103.85.9.206', '2018-01-19 10:22:05'),
(534, 41, 'normal', '103.85.9.206', '2018-01-19 10:23:06'),
(535, 41, 'normal', '103.85.9.206', '2018-01-19 10:36:05'),
(536, 41, 'normal', '103.85.9.206', '2018-01-19 10:37:07'),
(537, 41, 'normal', '103.85.9.206', '2018-01-19 12:50:42'),
(538, 41, 'normal', '103.85.9.206', '2018-01-19 12:52:03'),
(539, 41, 'normal', '103.85.9.206', '2018-01-19 12:53:04'),
(540, 41, 'normal', '103.85.9.206', '2018-01-19 12:55:15'),
(541, 41, 'normal', '103.85.9.206', '2018-01-19 12:55:48'),
(542, 41, 'normal', '103.85.9.206', '2018-01-19 12:56:35'),
(543, 41, 'normal', '103.85.9.206', '2018-01-19 12:57:15'),
(544, 41, 'normal', '103.85.9.206', '2018-01-19 12:57:47'),
(545, 41, 'normal', '103.85.9.206', '2018-01-19 12:58:32'),
(546, 41, 'normal', '1.39.97.238', '2018-01-19 12:59:19'),
(547, 41, 'normal', '103.85.9.206', '2018-01-19 12:59:59'),
(548, 41, 'normal', '103.85.9.206', '2018-01-19 13:00:46'),
(549, 41, 'normal', '103.85.9.206', '2018-01-19 13:01:24'),
(550, 41, 'normal', '103.85.9.206', '2018-01-19 13:02:25'),
(551, 41, 'normal', '103.85.9.206', '2018-01-19 13:04:53'),
(552, 41, 'normal', '103.85.9.206', '2018-01-19 13:06:07'),
(553, 41, 'normal', '103.85.9.206', '2018-01-19 13:06:42'),
(554, 41, 'normal', '103.85.9.206', '2018-01-19 13:07:36'),
(555, 41, 'normal', '103.85.9.206', '2018-01-19 13:08:08'),
(556, 41, 'normal', '103.85.9.206', '2018-01-19 13:08:39'),
(557, 41, 'normal', '103.85.9.206', '2018-01-19 13:09:03'),
(558, 41, 'normal', '103.85.9.206', '2018-01-19 13:10:16'),
(559, 41, 'normal', '103.85.9.206', '2018-01-19 13:11:01'),
(560, 41, 'normal', '103.85.9.206', '2018-01-19 13:11:38'),
(561, 41, 'normal', '103.85.9.206', '2018-01-19 13:12:21'),
(562, 41, 'normal', '103.85.9.206', '2018-01-19 13:13:02'),
(563, 41, 'normal', '103.85.9.206', '2018-01-19 13:17:34'),
(564, 41, 'normal', '103.85.9.206', '2018-01-19 13:18:54'),
(565, 41, 'normal', '103.85.9.206', '2018-01-19 13:20:13'),
(566, 41, 'normal', '103.85.9.206', '2018-01-19 13:20:54'),
(567, 41, 'normal', '103.85.9.206', '2018-01-19 13:21:50'),
(568, 41, 'normal', '103.85.9.206', '2018-01-19 13:22:14'),
(569, 41, 'normal', '103.85.9.206', '2018-01-19 13:25:34'),
(570, 41, 'normal', '103.85.9.206', '2018-01-19 13:26:13'),
(571, 41, 'normal', '103.85.9.206', '2018-01-19 13:31:19'),
(572, 41, 'normal', '103.85.9.206', '2018-01-19 13:32:42'),
(573, 41, 'normal', '103.85.9.206', '2018-01-19 13:33:37'),
(574, 41, 'normal', '103.85.9.206', '2018-01-19 13:36:19'),
(575, 41, 'normal', '103.85.9.206', '2018-01-19 13:38:06'),
(576, 41, 'normal', '103.85.9.206', '2018-01-19 13:39:29'),
(577, 41, 'normal', '103.85.9.206', '2018-01-19 13:42:33'),
(578, 41, 'normal', '103.85.9.206', '2018-01-19 13:43:16'),
(579, 41, 'normal', '103.85.9.206', '2018-01-19 13:43:52'),
(580, 41, 'normal', '103.85.9.206', '2018-01-19 13:46:59'),
(581, 41, 'normal', '103.85.9.206', '2018-01-19 13:48:00'),
(582, 41, 'normal', '103.85.9.206', '2018-01-19 13:53:32'),
(583, 41, 'normal', '103.85.9.206', '2018-01-19 13:54:57'),
(584, 41, 'normal', '103.81.92.74', '2018-01-20 06:52:48'),
(585, 41, 'normal', '103.238.106.150', '2018-01-22 05:05:30'),
(586, 41, 'normal', '103.238.106.150', '2018-01-22 05:10:53'),
(587, 41, 'normal', '103.238.106.150', '2018-01-22 05:25:00'),
(588, 41, 'normal', '42.106.57.37', '2018-01-22 05:28:46'),
(589, 41, 'normal', '103.238.106.150', '2018-01-22 05:36:23'),
(590, 41, 'normal', '103.238.106.150', '2018-01-22 05:37:16'),
(591, 41, 'normal', '103.238.106.150', '2018-01-22 05:39:51'),
(592, 41, 'normal', '103.238.106.150', '2018-01-22 05:41:52'),
(593, 41, 'normal', '103.238.106.150', '2018-01-22 05:45:17'),
(594, 41, 'normal', '103.238.106.150', '2018-01-22 05:46:23'),
(595, 41, 'normal', '103.238.106.150', '2018-01-22 05:48:00'),
(596, 41, 'normal', '103.238.106.150', '2018-01-22 05:48:46'),
(597, 41, 'normal', '103.238.106.150', '2018-01-22 05:49:37'),
(598, 41, 'normal', '103.238.106.150', '2018-01-22 06:57:11'),
(599, 41, 'normal', '103.238.106.150', '2018-01-22 07:02:22'),
(600, 41, 'normal', '103.238.106.150', '2018-01-22 08:59:49'),
(601, 41, 'normal', '103.238.106.150', '2018-01-22 09:00:37'),
(602, 41, 'normal', '103.238.106.150', '2018-01-22 09:01:16'),
(603, 41, 'normal', '103.238.106.150', '2018-01-22 09:01:55'),
(604, 41, 'normal', '103.238.106.150', '2018-01-22 09:09:16'),
(605, 41, 'normal', '103.238.106.150', '2018-01-22 09:10:09'),
(606, 41, 'normal', '103.238.106.150', '2018-01-22 10:38:09'),
(607, 41, 'normal', '103.238.106.150', '2018-01-22 10:38:49'),
(608, 41, 'normal', '103.238.106.150', '2018-01-22 10:43:05'),
(609, 41, 'normal', '103.238.106.150', '2018-01-22 10:47:34'),
(610, 41, 'normal', '157.32.73.108', '2018-01-22 10:55:42'),
(611, 41, 'normal', '157.32.73.108', '2018-01-22 10:57:19'),
(612, 41, 'normal', '157.32.73.108', '2018-01-22 11:15:33'),
(613, 41, 'normal', '157.32.73.108', '2018-01-22 11:25:08'),
(614, 41, 'normal', '157.32.73.108', '2018-01-22 11:30:22'),
(615, 41, 'normal', '157.32.73.108', '2018-01-22 12:25:00'),
(616, 41, 'normal', '157.32.73.108', '2018-01-22 12:33:15'),
(617, 41, 'normal', '157.32.73.108', '2018-01-22 12:47:53'),
(618, 41, 'normal', '157.32.73.108', '2018-01-22 12:48:58'),
(619, 41, 'normal', '157.32.73.108', '2018-01-22 12:55:27'),
(620, 41, 'normal', '157.32.73.108', '2018-01-22 12:56:58'),
(621, 41, 'normal', '157.32.73.108', '2018-01-22 12:57:57'),
(622, 41, 'normal', '157.32.73.108', '2018-01-22 13:03:18'),
(623, 41, 'normal', '157.32.73.108', '2018-01-22 13:06:19'),
(624, 41, 'normal', '157.32.73.108', '2018-01-22 13:07:19'),
(625, 41, 'normal', '157.32.73.108', '2018-01-22 13:10:13'),
(626, 41, 'normal', '157.32.73.108', '2018-01-22 13:16:49'),
(627, 41, 'normal', '157.32.73.108', '2018-01-22 13:17:49'),
(628, 41, 'normal', '157.32.90.79', '2018-01-23 06:00:17'),
(629, 41, 'normal', '157.32.90.79', '2018-01-23 06:02:48'),
(630, 41, 'normal', '157.32.90.79', '2018-01-23 06:06:03'),
(631, 41, 'normal', '157.32.90.79', '2018-01-23 06:07:28'),
(632, 41, 'normal', '157.32.90.79', '2018-01-23 06:08:12'),
(633, 41, 'normal', '157.32.90.79', '2018-01-23 06:09:11'),
(634, 41, 'normal', '157.32.90.79', '2018-01-23 06:09:50'),
(635, 41, 'normal', '157.32.90.79', '2018-01-23 06:10:24'),
(636, 41, 'normal', '157.32.90.79', '2018-01-23 06:10:56'),
(637, 41, 'normal', '157.32.90.79', '2018-01-23 06:11:33'),
(638, 41, 'normal', '157.32.90.79', '2018-01-23 06:12:37'),
(639, 41, 'normal', '157.32.90.79', '2018-01-23 06:13:41'),
(640, 41, 'normal', '157.32.90.79', '2018-01-23 06:15:19'),
(641, 41, 'normal', '157.32.90.79', '2018-01-23 06:16:34'),
(642, 41, 'normal', '157.32.90.79', '2018-01-23 06:20:30'),
(643, 41, 'normal', '157.32.90.79', '2018-01-23 06:21:14'),
(644, 41, 'normal', '157.32.90.79', '2018-01-23 06:21:58'),
(645, 41, 'normal', '157.32.90.79', '2018-01-23 06:22:48'),
(646, 41, 'normal', '157.32.90.79', '2018-01-23 06:33:12'),
(647, 41, 'normal', '157.32.90.79', '2018-01-23 06:34:14'),
(648, 41, 'normal', '157.32.90.79', '2018-01-23 06:35:20'),
(649, 41, 'normal', '157.32.90.79', '2018-01-23 08:44:35'),
(650, 41, 'normal', '157.32.90.79', '2018-01-23 08:45:34'),
(651, 41, 'normal', '157.32.90.79', '2018-01-23 08:46:48'),
(652, 41, 'normal', '157.32.90.79', '2018-01-23 08:47:46'),
(653, 41, 'normal', '157.32.90.79', '2018-01-23 08:51:15'),
(654, 41, 'normal', '157.32.90.79', '2018-01-23 08:53:16'),
(655, 41, 'normal', '157.32.90.79', '2018-01-23 08:53:46'),
(656, 41, 'normal', '157.32.90.79', '2018-01-23 08:54:42'),
(657, 41, 'normal', '157.32.90.79', '2018-01-23 08:56:01'),
(658, 41, 'normal', '157.32.90.79', '2018-01-23 08:56:31'),
(659, 41, 'normal', '157.32.90.79', '2018-01-23 09:01:21'),
(660, 41, 'normal', '157.32.90.79', '2018-01-23 09:04:15'),
(661, 41, 'normal', '157.32.90.79', '2018-01-23 09:05:34'),
(662, 41, 'normal', '157.32.90.79', '2018-01-23 09:07:57'),
(663, 41, 'normal', '157.32.90.79', '2018-01-23 09:09:38'),
(664, 41, 'normal', '157.32.90.79', '2018-01-23 09:13:04'),
(665, 41, 'normal', '157.32.90.79', '2018-01-23 09:15:16'),
(666, 41, 'normal', '157.32.90.79', '2018-01-23 09:25:15'),
(667, 41, 'normal', '157.32.90.79', '2018-01-23 09:26:56'),
(668, 41, 'normal', '157.32.90.79', '2018-01-23 09:32:42'),
(669, 41, 'normal', '157.32.90.79', '2018-01-23 09:42:34'),
(670, 41, 'normal', '157.32.90.79', '2018-01-23 09:47:57'),
(671, 41, 'normal', '157.32.90.79', '2018-01-23 09:48:40'),
(672, 41, 'normal', '157.32.90.79', '2018-01-23 10:02:01'),
(673, 41, 'normal', '157.32.90.79', '2018-01-23 10:51:06'),
(674, 41, 'normal', '157.32.90.79', '2018-01-23 10:53:15'),
(675, 41, 'normal', '157.32.90.79', '2018-01-23 10:56:00'),
(676, 41, 'normal', '157.32.90.79', '2018-01-23 10:58:39'),
(677, 41, 'normal', '157.32.90.79', '2018-01-23 11:00:53'),
(678, 41, 'normal', '157.32.90.79', '2018-01-23 11:05:21'),
(679, 41, 'normal', '157.32.90.79', '2018-01-23 11:06:56'),
(680, 41, 'normal', '157.32.90.79', '2018-01-23 11:09:42'),
(681, 41, 'normal', '157.32.90.79', '2018-01-23 11:19:10'),
(682, 41, 'normal', '157.32.90.79', '2018-01-23 11:21:23'),
(683, 41, 'normal', '157.32.90.79', '2018-01-23 11:23:58'),
(684, 41, 'normal', '157.32.90.79', '2018-01-23 11:33:34'),
(685, 41, 'normal', '157.32.90.79', '2018-01-23 11:36:56'),
(686, 41, 'normal', '157.32.90.79', '2018-01-23 11:39:30'),
(687, 41, 'normal', '103.85.10.212', '2018-01-23 12:20:57'),
(688, 41, 'normal', '103.85.10.212', '2018-01-23 12:22:37'),
(689, 41, 'normal', '103.85.10.212', '2018-01-23 12:23:38'),
(690, 41, 'normal', '103.85.10.212', '2018-01-23 12:26:49'),
(691, 41, 'normal', '103.85.10.212', '2018-01-23 12:28:56'),
(692, 41, 'normal', '103.85.10.212', '2018-01-23 12:33:00'),
(693, 41, 'normal', '103.85.10.212', '2018-01-23 12:35:17'),
(694, 41, 'normal', '103.85.10.212', '2018-01-23 12:37:13'),
(695, 41, 'normal', '103.85.10.212', '2018-01-23 12:41:21'),
(696, 41, 'normal', '103.85.10.212', '2018-01-23 12:45:14'),
(697, 41, 'normal', '103.85.10.212', '2018-01-23 12:46:38'),
(698, 41, 'normal', '103.85.10.212', '2018-01-23 12:49:01'),
(699, 41, 'normal', '103.85.10.212', '2018-01-23 12:54:28'),
(700, 41, 'normal', '103.85.10.212', '2018-01-23 12:57:14'),
(701, 41, 'normal', '103.85.10.212', '2018-01-23 12:59:26'),
(702, 41, 'normal', '157.32.90.79', '2018-01-23 13:08:02'),
(703, 41, 'normal', '157.32.90.79', '2018-01-23 13:11:30'),
(704, 41, 'normal', '157.32.90.79', '2018-01-23 13:12:35'),
(705, 41, 'normal', '157.32.90.79', '2018-01-23 13:15:36'),
(706, 41, 'normal', '157.32.90.79', '2018-01-23 13:17:22'),
(707, 41, 'normal', '157.32.90.79', '2018-01-23 13:19:16'),
(708, 41, 'normal', '157.32.90.79', '2018-01-23 13:22:16'),
(709, 41, 'normal', '157.32.90.79', '2018-01-23 13:23:31'),
(710, 41, 'normal', '157.32.90.79', '2018-01-23 13:35:46'),
(711, 41, 'normal', '157.32.90.79', '2018-01-23 13:38:54'),
(712, 41, 'normal', '157.32.90.79', '2018-01-23 13:42:02'),
(713, 41, 'normal', '157.32.90.79', '2018-01-23 13:43:44'),
(714, 41, 'normal', '157.32.90.79', '2018-01-23 13:44:52'),
(715, 41, 'normal', '157.32.90.79', '2018-01-23 13:46:07'),
(716, 41, 'normal', '157.32.90.79', '2018-01-23 13:47:15'),
(717, 41, 'normal', '103.85.10.212', '2018-01-24 05:17:48'),
(718, 41, 'normal', '103.85.10.212', '2018-01-24 05:21:10'),
(719, 41, 'normal', '103.85.10.212', '2018-01-24 05:23:22'),
(720, 41, 'normal', '103.85.10.212', '2018-01-24 05:24:07'),
(721, 41, 'normal', '103.85.10.212', '2018-01-24 05:27:01'),
(722, 41, 'normal', '103.85.10.212', '2018-01-24 05:28:16'),
(723, 41, 'normal', '103.85.10.212', '2018-01-24 05:32:10'),
(724, 41, 'normal', '157.32.58.226', '2018-01-24 05:53:21'),
(725, 41, 'normal', '157.32.121.150', '2018-01-24 05:55:12'),
(726, 41, 'normal', '157.32.121.150', '2018-01-24 05:56:39'),
(727, 41, 'normal', '157.32.121.150', '2018-01-24 05:57:10'),
(728, 41, 'normal', '157.32.121.150', '2018-01-24 06:00:36'),
(729, 41, 'normal', '157.32.58.226', '2018-01-24 06:08:26'),
(730, 41, 'normal', '157.32.121.150', '2018-01-24 06:11:04'),
(731, 41, 'normal', '157.32.58.226', '2018-01-24 06:13:21'),
(732, 41, 'normal', '157.32.58.226', '2018-01-24 06:18:57'),
(733, 41, 'normal', '157.32.121.150', '2018-01-24 06:20:47'),
(734, 41, 'normal', '157.32.58.226', '2018-01-24 06:29:37'),
(735, 41, 'normal', '157.32.58.226', '2018-01-24 06:33:18'),
(736, 41, 'normal', '157.32.58.226', '2018-01-24 06:34:28'),
(737, 41, 'normal', '157.32.121.150', '2018-01-24 06:39:13'),
(738, 41, 'normal', '103.85.10.212', '2018-01-24 06:52:15'),
(739, 41, 'normal', '103.85.10.212', '2018-01-24 07:02:09'),
(740, 41, 'normal', '103.85.10.212', '2018-01-24 07:05:52'),
(741, 41, 'normal', '103.85.10.212', '2018-01-24 07:11:20'),
(742, 41, 'normal', '103.85.10.212', '2018-01-24 07:12:33'),
(743, 41, 'normal', '103.85.10.212', '2018-01-24 07:29:26'),
(744, 41, 'normal', '103.85.10.212', '2018-01-24 07:30:29'),
(745, 41, 'normal', '103.85.10.212', '2018-01-24 07:31:31'),
(746, 41, 'normal', '103.85.10.212', '2018-01-24 07:33:03'),
(747, 41, 'normal', '103.85.10.212', '2018-01-24 08:20:27'),
(748, 41, 'normal', '103.85.10.212', '2018-01-24 08:22:16'),
(749, 41, 'normal', '103.85.10.212', '2018-01-24 08:24:06'),
(750, 41, 'normal', '103.85.10.212', '2018-01-24 08:28:29'),
(751, 41, 'normal', '103.85.10.212', '2018-01-24 08:29:43'),
(752, 41, 'normal', '103.85.10.212', '2018-01-24 08:34:02'),
(753, 41, 'normal', '103.85.10.212', '2018-01-24 08:35:21'),
(754, 41, 'normal', '103.85.10.212', '2018-01-24 08:38:25'),
(755, 41, 'normal', '103.85.10.212', '2018-01-24 08:40:07'),
(756, 41, 'normal', '103.85.10.212', '2018-01-24 08:41:18'),
(757, 41, 'normal', '103.85.10.212', '2018-01-24 08:42:33'),
(758, 41, 'normal', '103.85.10.212', '2018-01-24 08:43:42'),
(759, 41, 'normal', '103.85.10.212', '2018-01-24 08:56:02'),
(760, 41, 'normal', '103.85.10.212', '2018-01-24 09:00:54'),
(761, 41, 'normal', '103.85.10.212', '2018-01-24 09:03:13'),
(762, 41, 'normal', '103.85.10.212', '2018-01-24 09:04:34'),
(763, 41, 'normal', '103.85.10.212', '2018-01-24 09:06:13'),
(764, 41, 'normal', '103.85.10.212', '2018-01-24 09:10:52'),
(765, 41, 'normal', '103.85.10.212', '2018-01-24 09:14:07'),
(766, 41, 'normal', '157.32.81.30', '2018-01-24 09:16:28'),
(767, 41, 'normal', '157.32.81.30', '2018-01-24 09:16:57'),
(768, 41, 'normal', '157.32.51.27', '2018-01-24 09:20:53'),
(769, 41, 'normal', '157.32.81.30', '2018-01-24 09:29:42'),
(770, 41, 'normal', '157.32.81.30', '2018-01-24 09:31:26'),
(771, 41, 'normal', '157.32.81.30', '2018-01-24 09:32:45'),
(772, 41, 'normal', '157.32.51.27', '2018-01-24 10:31:56'),
(773, 41, 'normal', '157.32.51.27', '2018-01-24 10:33:30'),
(774, 41, 'normal', '157.32.81.30', '2018-01-24 10:34:56'),
(775, 41, 'normal', '157.32.81.30', '2018-01-24 10:35:55'),
(776, 41, 'normal', '157.32.51.27', '2018-01-24 10:37:16'),
(777, 41, 'normal', '157.32.51.27', '2018-01-24 10:43:36'),
(778, 41, 'normal', '157.32.51.27', '2018-01-24 10:49:03'),
(779, 41, 'normal', '157.32.51.27', '2018-01-24 10:51:01'),
(780, 41, 'normal', '157.32.51.27', '2018-01-24 10:53:34'),
(781, 41, 'normal', '157.32.81.30', '2018-01-24 10:55:18'),
(782, 41, 'normal', '157.32.51.27', '2018-01-24 11:00:13'),
(783, 41, 'normal', '157.32.51.27', '2018-01-24 11:01:34'),
(784, 41, 'normal', '157.32.51.27', '2018-01-24 11:02:19'),
(785, 41, 'normal', '157.32.81.30', '2018-01-24 11:03:02'),
(786, 41, 'normal', '157.32.81.30', '2018-01-24 11:03:54'),
(787, 41, 'normal', '157.32.81.30', '2018-01-24 11:04:42'),
(788, 41, 'normal', '157.32.81.30', '2018-01-24 11:05:44'),
(789, 41, 'normal', '157.32.81.30', '2018-01-24 11:06:37'),
(790, 41, 'normal', '157.32.51.27', '2018-01-24 11:07:26'),
(791, 41, 'normal', '157.32.81.30', '2018-01-24 11:08:58'),
(792, 41, 'normal', '157.32.81.30', '2018-01-24 11:25:51'),
(793, 41, 'normal', '157.32.51.27', '2018-01-24 11:35:00'),
(794, 41, 'normal', '157.32.81.30', '2018-01-24 11:36:43'),
(795, 41, 'normal', '157.32.81.30', '2018-01-24 12:10:30'),
(796, 41, 'normal', '157.32.81.30', '2018-01-24 12:14:58'),
(797, 41, 'normal', '157.32.51.27', '2018-01-24 12:20:49'),
(798, 41, 'normal', '157.32.51.27', '2018-01-24 12:46:31'),
(799, 41, 'normal', '157.32.81.30', '2018-01-24 12:48:11'),
(800, 41, 'normal', '157.32.83.17', '2018-01-25 10:01:24'),
(801, 41, 'normal', '157.32.62.172', '2018-01-25 10:11:12'),
(802, 41, 'normal', '103.238.104.131', '2018-01-25 10:39:44'),
(803, 41, 'normal', '103.238.104.131', '2018-01-25 10:40:50'),
(804, 41, 'normal', '103.238.104.131', '2018-01-25 10:45:04'),
(805, 41, 'normal', '103.238.104.131', '2018-01-25 10:46:45'),
(806, 41, 'normal', '103.238.104.131', '2018-01-25 10:54:25'),
(807, 41, 'normal', '103.238.104.131', '2018-01-25 10:57:34'),
(808, 41, 'normal', '103.238.104.131', '2018-01-25 10:59:28'),
(809, 41, 'normal', '103.238.104.131', '2018-01-25 11:00:04'),
(810, 41, 'normal', '103.238.104.131', '2018-01-25 11:03:02'),
(811, 41, 'normal', '103.238.104.131', '2018-01-25 11:06:12'),
(812, 41, 'normal', '103.238.104.131', '2018-01-25 11:09:01'),
(813, 41, 'normal', '103.238.104.131', '2018-01-25 11:20:45'),
(814, 41, 'normal', '103.238.104.131', '2018-01-25 11:28:07'),
(815, 41, 'normal', '103.238.104.131', '2018-01-25 11:29:36'),
(816, 41, 'normal', '103.238.104.131', '2018-01-25 12:15:49'),
(817, 41, 'normal', '103.238.104.131', '2018-01-25 12:23:44'),
(818, 41, 'normal', '103.238.104.131', '2018-01-25 12:24:27'),
(819, 41, 'normal', '103.238.104.131', '2018-01-25 12:26:14'),
(820, 41, 'normal', '103.238.104.131', '2018-01-25 12:26:39'),
(821, 41, 'normal', '103.238.104.131', '2018-01-25 12:28:24'),
(822, 41, 'normal', '103.238.104.131', '2018-01-25 12:31:18'),
(823, 41, 'normal', '103.238.104.131', '2018-01-25 12:33:34'),
(824, 41, 'normal', '103.238.104.131', '2018-01-25 12:36:22'),
(825, 41, 'normal', '103.238.104.131', '2018-01-25 12:39:29'),
(826, 41, 'normal', '103.238.104.131', '2018-01-25 12:40:30'),
(827, 41, 'normal', '103.238.104.131', '2018-01-25 12:43:23'),
(828, 41, 'normal', '103.238.104.131', '2018-01-25 12:45:35'),
(829, 41, 'normal', '103.85.10.113', '2018-01-29 05:18:50'),
(830, 41, 'normal', '157.32.66.183', '2018-01-29 08:59:59'),
(831, 41, 'normal', '157.32.66.183', '2018-01-29 11:25:19'),
(832, 41, 'normal', '157.32.66.183', '2018-01-29 11:36:18'),
(833, 41, 'normal', '157.32.56.199', '2018-01-29 11:39:22'),
(834, 41, 'normal', '157.32.66.183', '2018-01-29 11:40:40'),
(835, 41, 'normal', '103.81.93.3', '2018-01-30 04:40:41'),
(836, 41, 'normal', '157.32.122.101', '2018-01-30 05:38:38'),
(837, 41, 'normal', '157.32.26.149', '2018-01-30 06:17:29'),
(838, 41, 'normal', '157.32.26.149', '2018-01-30 07:02:42'),
(839, 41, 'normal', '103.85.11.18', '2018-01-30 09:40:19'),
(840, 41, 'normal', '103.85.11.18', '2018-01-30 09:41:55'),
(841, 41, 'normal', '103.85.11.18', '2018-01-30 10:00:55'),
(842, 41, 'normal', '103.85.11.18', '2018-01-30 10:22:32'),
(843, 41, 'normal', '103.85.11.18', '2018-01-30 10:23:50'),
(844, 41, 'normal', '157.32.64.2', '2018-01-31 06:28:43'),
(845, 41, 'normal', '157.32.64.2', '2018-01-31 08:50:07'),
(846, 41, 'normal', '157.32.51.166', '2018-01-31 09:36:43'),
(847, 41, 'normal', '42.106.13.92', '2018-02-02 05:35:52'),
(848, 41, 'normal', '157.32.66.185', '2018-02-03 05:41:38');
INSERT INTO `master_log` (`id`, `user_id`, `user_type`, `ip`, `datetime`) VALUES
(849, 41, 'normal', '157.32.66.185', '2018-02-03 05:43:25'),
(850, 41, 'normal', '157.32.66.185', '2018-02-03 05:44:21'),
(851, 41, 'normal', '157.32.39.44', '2018-02-03 05:44:48'),
(852, 41, 'normal', '157.32.66.185', '2018-02-03 06:11:21'),
(853, 41, 'normal', '157.32.66.185', '2018-02-03 06:32:38'),
(854, 41, 'normal', '157.32.66.185', '2018-02-03 06:39:05'),
(855, 41, 'normal', '157.32.66.185', '2018-02-03 06:43:43'),
(856, 41, 'normal', '157.32.39.44', '2018-02-03 06:56:58'),
(857, 41, 'normal', '157.32.66.185', '2018-02-03 07:13:47'),
(858, 41, 'normal', '157.32.39.44', '2018-02-03 07:22:43'),
(859, 41, 'normal', '157.32.39.44', '2018-02-03 07:24:07'),
(860, 41, 'normal', '157.32.66.185', '2018-02-03 07:24:51'),
(861, 41, 'normal', '157.32.39.44', '2018-02-03 07:26:07'),
(862, 41, 'normal', '157.32.3.215', '2018-02-03 13:47:39'),
(863, 41, 'normal', '103.238.106.76', '2018-02-10 05:41:23'),
(864, 41, 'normal', '103.238.106.76', '2018-02-10 05:41:54'),
(865, 3, 'normal', '103.238.105.182', '2018-02-13 08:47:39'),
(866, 3, 'normal', '27.5.119.180', '2018-02-15 05:26:44'),
(867, 3, 'normal', '27.5.119.180', '2018-02-15 05:27:09'),
(868, 54, 'normal', '49.32.177.166', '2018-02-17 06:32:05'),
(869, 41, 'normal', '103.81.92.66', '2018-02-17 10:50:00'),
(870, 56, 'normal', '171.77.132.122', '2018-02-27 15:01:42'),
(871, 41, 'normal', '157.32.123.144', '2018-03-11 06:40:53'),
(872, 57, 'normal', '47.11.157.216', '2018-05-05 10:45:35'),
(873, 57, 'normal', '47.11.157.216', '2018-05-05 10:46:39'),
(874, 3, 'normal', '182.70.118.74', '2018-05-09 10:23:27'),
(875, 3, 'normal', '182.70.118.74', '2018-05-09 10:28:59'),
(876, 3, 'normal', '182.70.118.74', '2018-05-09 10:29:02'),
(877, 3, 'normal', '182.70.118.74', '2018-05-10 04:42:40'),
(878, 3, 'normal', '182.70.118.74', '2018-05-11 07:38:00'),
(879, 3, 'normal', '103.216.215.224', '2018-05-19 22:51:12'),
(880, 59, 'normal', '106.209.217.250', '2018-06-16 13:21:13'),
(881, 59, 'normal', '106.209.217.250', '2018-06-16 13:21:43'),
(882, 3, 'normal', '60.243.22.146', '2018-06-24 02:35:10'),
(883, 3, 'normal', '60.243.22.146', '2018-06-24 02:36:17'),
(884, 3, 'normal', '60.243.22.146', '2018-06-24 02:40:46'),
(885, 3, 'normal', '60.243.22.146', '2018-06-24 03:39:30'),
(886, 3, 'normal', '60.243.22.146', '2018-06-24 05:51:15'),
(887, 3, 'normal', '60.243.22.146', '2018-06-24 07:59:08'),
(888, 3, 'normal', '60.243.22.146', '2018-06-24 08:01:36'),
(889, 3, 'normal', '60.243.22.146', '2018-06-24 08:43:15'),
(890, 1, 'admin', '60.243.22.146', '2018-06-24 08:47:25'),
(891, 1, 'admin', '60.243.22.146', '2018-06-24 08:49:38'),
(892, 3, 'normal', '60.243.22.146', '2018-06-24 10:45:56'),
(893, 3, 'normal', '106.209.230.174', '2018-06-24 10:46:44'),
(894, 1, 'admin', '182.70.118.74', '2018-07-19 09:53:39'),
(895, 1, 'admin', '182.70.118.74', '2018-07-19 09:59:23'),
(896, 1, 'admin', '182.70.118.74', '2018-07-23 05:33:48'),
(897, 1, 'admin', '115.97.68.43', '2018-07-26 03:52:04'),
(898, 1, 'admin', '115.97.68.43', '2018-07-26 04:14:47'),
(899, 3, 'normal', '115.97.68.43', '2018-07-26 05:16:53'),
(900, 3, 'normal', '115.97.68.43', '2018-07-26 05:17:16'),
(901, 1, 'admin', '182.70.118.74', '2018-07-27 05:03:33'),
(902, 62, 'normal', '106.209.140.157', '2018-08-10 15:08:12'),
(903, 1, 'admin', '182.70.118.74', '2018-08-16 11:04:05'),
(904, 1, 'admin', '182.70.118.74', '2018-08-16 11:10:04'),
(905, 1, 'admin', '103.59.200.26', '2018-08-16 17:56:28'),
(906, 1, 'admin', '182.70.118.74', '2018-08-23 07:57:07'),
(907, 1, 'admin', '182.70.118.74', '2018-08-23 11:59:50'),
(908, 1, 'normal', '182.70.118.74', '2018-08-23 12:25:53'),
(909, 1, 'admin', '103.66.233.93', '2018-09-05 00:55:51'),
(910, 1, 'admin', '103.66.233.93', '2018-09-05 00:59:25'),
(911, 1, 'admin', '103.216.213.140', '2018-09-05 03:03:04'),
(912, 1, 'admin', '103.216.213.140', '2018-09-05 03:04:58'),
(913, 1, 'admin', '103.216.213.140', '2018-09-05 04:15:37'),
(914, 1, 'admin', '116.72.127.218', '2018-09-08 05:08:18'),
(915, 1, 'admin', '116.72.127.218', '2018-09-08 07:39:39'),
(916, 1, 'admin', '182.70.118.74', '2018-09-08 15:25:31'),
(917, 1, 'admin', '116.72.125.216', '2018-09-11 14:08:29'),
(918, 1, 'admin', '182.70.118.74', '2018-10-23 10:29:27'),
(919, 1, 'admin', '182.70.118.74', '2018-10-23 11:10:44'),
(920, 1, 'admin', '182.70.118.74', '2018-10-30 14:29:07'),
(921, 1, 'admin', '182.70.118.74', '2018-10-31 06:04:51'),
(922, 66, 'normal', '106.193.230.161', '2018-11-11 17:53:34'),
(923, 66, 'normal', '106.193.230.161', '2018-11-11 17:56:18'),
(924, 67, 'normal', '61.16.187.57', '2018-11-15 07:50:02'),
(925, 1, 'admin', '42.106.206.138', '2018-11-23 01:40:52'),
(926, 1, 'admin', '103.66.233.25', '2018-12-02 14:40:59'),
(927, 1, 'admin', '116.72.127.233', '2019-01-22 07:33:22'),
(928, 87, 'normal', '115.97.65.55', '2019-01-27 05:22:31'),
(929, 1, 'admin', '115.97.65.55', '2019-01-27 07:04:35'),
(930, 1, 'admin', '171.51.220.239', '2019-02-09 16:32:18'),
(931, 1, 'normal', '116.72.120.156', '2019-03-31 03:33:10'),
(932, 1, 'admin', '116.72.120.156', '2019-03-31 04:09:16'),
(933, 1, 'admin', '116.72.120.156', '2019-03-31 04:10:12'),
(934, 1, 'admin', '116.72.120.156', '2019-03-31 05:43:33'),
(935, 1, 'admin', '116.72.120.156', '2019-03-31 10:48:05'),
(936, 1, 'admin', '116.72.120.156', '2019-03-31 11:20:53'),
(937, 1, 'normal', '116.72.120.156', '2019-03-31 12:54:07'),
(938, 1, 'admin', '116.72.120.156', '2019-03-31 15:01:01'),
(939, 1, 'admin', '182.70.118.74', '2019-04-04 12:34:04'),
(940, 1, 'admin', '182.70.118.74', '2019-04-04 15:13:10'),
(941, 1, 'admin', '103.66.233.117', '2019-04-05 07:44:56'),
(942, 3, 'normal', '103.66.233.117', '2019-04-05 20:43:13'),
(943, 3, 'normal', '103.66.233.117', '2019-04-05 20:46:42'),
(944, 3, 'normal', '103.66.233.117', '2019-04-05 20:48:13'),
(945, 3, 'normal', '103.66.233.117', '2019-04-05 20:49:37'),
(946, 1, 'admin', '182.70.118.74', '2019-04-06 07:13:33'),
(947, 3, 'normal', '182.70.118.74', '2019-04-06 07:16:28'),
(948, 1, 'admin', '182.70.118.74', '2019-04-06 07:21:30'),
(949, 1, 'normal', '116.72.122.176', '2019-04-07 13:09:54'),
(950, 1, 'admin', '116.72.122.176', '2019-04-07 14:22:12'),
(951, 1, 'admin', '116.72.122.176', '2019-04-07 14:27:48'),
(952, 3, 'normal', '103.66.233.125', '2019-05-11 10:10:05'),
(953, 1, 'normal', '182.70.118.74', '2019-06-14 09:41:25'),
(954, 95, 'normal', '183.87.149.105', '2019-10-02 06:25:45'),
(955, 1, 'admin', '116.72.121.176', '2019-12-22 04:32:52'),
(956, 3, 'normal', '116.72.121.176', '2019-12-22 05:27:57'),
(957, 1, 'admin', '116.72.121.176', '2019-12-22 05:55:18'),
(958, 1, 'admin', '122.170.168.223', '2019-12-22 05:59:27'),
(959, 1, 'admin', '116.72.121.176', '2019-12-22 08:36:15'),
(960, 1, 'admin', '116.72.121.176', '2019-12-22 12:11:30'),
(961, 1, 'admin', '116.72.121.176', '2019-12-22 12:11:32'),
(962, 1, 'admin', '116.72.118.59', '2019-12-25 07:07:09'),
(963, 1, 'admin', '116.72.118.59', '2019-12-25 07:07:10'),
(964, 1, 'admin', '116.72.118.59', '2019-12-25 09:11:49'),
(965, 1, 'admin', '116.72.118.59', '2019-12-25 09:20:47'),
(966, 1, 'admin', '122.170.168.223', '2019-12-25 10:14:05'),
(967, 1, 'admin', '116.72.118.59', '2019-12-25 10:45:34'),
(968, 1, 'admin', '49.32.17.236', '2019-12-25 12:43:30'),
(969, 1, 'admin', '122.170.103.107', '2019-12-26 09:52:44'),
(970, 3, 'normal', '103.212.142.30', '2019-12-27 12:25:04'),
(971, 3, 'normal', '103.212.142.30', '2019-12-27 12:25:07'),
(972, 3, 'normal', '116.72.121.104', '2020-01-14 04:44:00'),
(973, 1, 'admin', '116.72.121.104', '2020-01-14 05:08:34'),
(974, 1, 'normal', '171.51.222.99', '2020-01-14 06:35:01'),
(975, 3, 'normal', '49.32.53.22', '2020-01-14 06:36:45'),
(976, 1, 'normal', '116.72.121.104', '2020-01-14 07:35:52'),
(977, 1, 'normal', '116.72.121.104', '2020-01-14 07:36:50'),
(978, 1, 'normal', '116.72.121.104', '2020-01-14 07:43:23'),
(979, 1, 'normal', '116.72.121.104', '2020-01-14 11:59:07'),
(980, 3, 'normal', '116.72.121.104', '2020-01-14 12:01:50'),
(981, 109, 'normal', '42.106.203.234', '2020-02-19 23:20:24'),
(982, 116, 'normal', '14.142.39.102', '2020-04-27 06:58:54'),
(983, 1, 'admin', '27.106.7.120', '2020-04-27 13:19:37'),
(984, 117, 'normal', '27.106.7.120', '2020-04-27 13:37:10'),
(985, 3, 'normal', '182.54.149.110', '2020-05-04 14:01:01'),
(986, 120, 'normal', '42.106.213.166', '2020-06-18 10:05:22'),
(987, 130, 'normal', '103.49.243.253', '2020-08-03 22:45:37'),
(988, 134, 'normal', '188.71.247.36', '2020-08-24 18:29:47'),
(989, 1, 'admin', '45.250.46.102', '2020-09-07 14:30:51'),
(990, 1, 'admin', '1.38.140.129', '2020-09-10 02:03:56'),
(991, 1, 'admin', '27.4.215.17', '2020-09-10 03:27:01'),
(992, 1, 'admin', '27.4.215.17', '2020-09-10 03:27:01'),
(993, 1, 'admin', '27.4.215.17', '2020-09-10 03:27:01'),
(994, 1, 'admin', '27.4.215.17', '2020-09-10 03:27:01'),
(995, 1, 'admin', '27.4.215.17', '2020-09-10 03:27:01'),
(996, 1, 'admin', '27.4.215.17', '2020-09-10 03:27:01'),
(997, 1, 'admin', '45.250.46.102', '2020-09-10 05:43:19'),
(998, 1, 'admin', '27.4.215.17', '2020-09-10 13:04:17'),
(999, 1, 'admin', '45.250.46.31', '2020-09-10 13:10:48'),
(1000, 1, 'admin', '27.4.215.17', '2020-09-10 15:35:59'),
(1001, 136, 'normal', '116.72.126.51', '2020-09-12 06:35:02'),
(1002, 1, 'admin', '122.170.103.107', '2020-09-15 07:49:50'),
(1003, 1, 'admin', '122.170.103.107', '2020-09-15 07:52:25'),
(1004, 1, 'admin', '27.4.214.111', '2020-09-15 09:25:36'),
(1005, 3, 'normal', '122.170.103.107', '2020-09-15 09:31:10'),
(1006, 3, 'normal', '::1', '2020-09-19 04:10:43'),
(1007, 3, 'normal', '::1', '2020-09-19 04:11:05'),
(1008, 3, 'normal', '::1', '2020-09-19 04:20:22'),
(1009, 3, 'normal', '::1', '2020-09-19 04:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `master_maritalstatus`
--

DROP TABLE IF EXISTS `master_maritalstatus`;
CREATE TABLE `master_maritalstatus` (
  `id` int(11) NOT NULL,
  `maritalstatus` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_maritalstatus`
--

INSERT INTO `master_maritalstatus` (`id`, `maritalstatus`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'Bachelor ', '1', 1, 0, '60.243.30.166', 1502869205),
(2, 'Married - Love', '1', 1, 0, '116.72.127.218', 1536383366),
(3, 'Divorcee', '1', 1, 0, '60.243.30.166', 1502869220),
(4, 'Widow', '1', 1, 0, '60.243.30.166', 1502869226),
(5, 'Widower', '1', 1, 0, '60.243.30.166', 1502869233),
(6, 'Live in relationship', '1', 1, 0, '60.243.30.166', 1502869245),
(7, 'Engaged', '1', 1, 0, '60.243.30.166', 1502869252),
(8, 'Second Marriage', '1', 1, 0, '60.243.30.166', 1502869263),
(9, 'Third Marriage', '1', 1, 0, '60.243.30.166', 1502869272),
(10, 'To Marry on', '1', 1, 1, '116.72.127.218', 1536388993),
(11, 'Love Marriage', '1', 1, 1, '116.72.127.218', 1536383384),
(12, 'Married - Arranged', '1', 1, 0, '116.72.127.218', 1536383350),
(13, 'Does not want to marry', '1', 1, 0, '60.243.30.166', 1502869327),
(14, 'Long distance marriage', '1', 1, 0, '27.4.215.17', 1599712705),
(15, 'Open marriage', '1', 1, 0, '27.4.215.17', 1599712716),
(16, 'Maitri karar', '1', 1, 0, '27.4.215.17', 1599712727);

-- --------------------------------------------------------

--
-- Table structure for table `master_medicine`
--

DROP TABLE IF EXISTS `master_medicine`;
CREATE TABLE `master_medicine` (
  `id` int(11) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_medicine`
--

INSERT INTO `master_medicine` (`id`, `medicine`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'Vitamins', '1', 1, 0, '::1', 1536412124),
(2, 'Instructions', '1', 1, 0, '::1', 1536412130);

-- --------------------------------------------------------

--
-- Table structure for table `master_occupation`
--

DROP TABLE IF EXISTS `master_occupation`;
CREATE TABLE `master_occupation` (
  `id` int(11) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_occupation`
--

INSERT INTO `master_occupation` (`id`, `occupation`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'Self Employee', '1', 1, 0, '183.87.55.182', 1502826842),
(2, 'Teacher', '1', 1, 0, '60.243.30.166', 1502869142),
(3, 'Chartered Accountant', '1', 1, 0, '60.243.30.166', 1502866750),
(4, 'Medical Doctor Physician', '1', 1, 0, '60.243.30.166', 1502866777),
(5, 'Medical Doctor Surgeon', '1', 1, 0, '60.243.30.166', 1502866791),
(6, 'Medical Doctor Homeopath', '1', 1, 0, '60.243.30.166', 1502866807),
(7, 'Yoga Trainer', '1', 1, 0, '60.243.30.166', 1502866815),
(8, 'Fitness Trainer', '1', 1, 0, '60.243.30.166', 1502866823),
(9, 'Jewellers', '1', 1, 0, '60.243.30.166', 1502866833),
(10, 'Employee', '1', 1, 0, '60.243.30.166', 1502866858),
(11, 'Retired', '1', 1, 0, '60.243.30.166', 1502866865),
(12, 'Stock Broker', '1', 1, 0, '60.243.30.166', 1502866874),
(13, 'Consultatnt', '1', 1, 0, '60.243.30.166', 1502869163),
(14, 'Other', '1', 1, 0, '60.243.30.166', 1502869171),
(15, 'Medical Doctor Ayurveda', '1', 1, 0, '60.243.29.48', 1503555158),
(30, 'Student', '1', 1, 0, '116.72.127.218', 1536389040),
(31, 'Home Maker', '1', 1, 0, '116.72.127.218', 1536389047),
(32, 'Plumber', '1', 1, 0, '27.4.215.17', 1599712020),
(33, 'Electrician', '1', 1, 0, '27.4.215.17', 1599712030),
(34, 'Painter', '1', 1, 0, '27.4.215.17', 1599712036),
(35, 'Artist', '1', 1, 0, '27.4.215.17', 1599712044),
(36, 'Producer', '1', 1, 0, '27.4.215.17', 1599712051),
(37, 'Director', '1', 1, 0, '27.4.215.17', 1599712059),
(38, 'Actor / Actress', '1', 1, 0, '27.4.215.17', 1599712069),
(39, 'Modelling', '1', 1, 0, '27.4.215.17', 1599712076),
(40, 'Choreographer', '1', 1, 0, '27.4.215.17', 1599712084),
(41, 'Business / self employeed', '1', 1, 0, '27.4.215.17', 1599712100),
(42, 'Self employeed / business', '1', 1, 0, '27.4.215.17', 1599712113),
(43, 'Scientist', '1', 1, 0, '27.4.215.17', 1599712120),
(44, 'Hairstylist', '1', 1, 0, '27.4.215.17', 1599712126);

-- --------------------------------------------------------

--
-- Table structure for table `master_payment`
--

DROP TABLE IF EXISTS `master_payment`;
CREATE TABLE `master_payment` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `tracking_id` varchar(15) DEFAULT NULL,
  `bank_ref_no` varchar(250) DEFAULT NULL,
  `order_status` char(15) DEFAULT NULL,
  `failure_message` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(55) DEFAULT NULL,
  `card_name` varchar(55) DEFAULT NULL,
  `status_code` int(3) DEFAULT NULL,
  `status_message` varchar(150) DEFAULT NULL,
  `currency` char(3) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `billing_name` varchar(60) DEFAULT NULL,
  `billing_address` varchar(150) DEFAULT NULL,
  `billing_city` varchar(30) DEFAULT NULL,
  `billing_state` varchar(30) DEFAULT NULL,
  `billing_zip` varchar(15) DEFAULT NULL,
  `billing_country` varchar(50) DEFAULT NULL,
  `billing_tel` varchar(20) DEFAULT NULL,
  `billing_email` varchar(70) DEFAULT NULL,
  `billing_notes` varchar(255) NOT NULL,
  `payment_type` varchar(15) NOT NULL,
  `merchant_param1` varchar(100) DEFAULT NULL,
  `merchant_param2` varchar(100) DEFAULT NULL,
  `merchant_param3` varchar(100) DEFAULT NULL,
  `merchant_param4` varchar(100) DEFAULT NULL,
  `merchant_param5` varchar(100) DEFAULT NULL,
  `trans_fee` float DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payer_id` varchar(55) DEFAULT NULL,
  `payer_email` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `pdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_payment`
--

INSERT INTO `master_payment` (`id`, `order_id`, `tracking_id`, `bank_ref_no`, `order_status`, `failure_message`, `payment_mode`, `card_name`, `status_code`, `status_message`, `currency`, `amount`, `billing_name`, `billing_address`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `billing_tel`, `billing_email`, `billing_notes`, `payment_type`, `merchant_param1`, `merchant_param2`, `merchant_param3`, `merchant_param4`, `merchant_param5`, `trans_fee`, `user_id`, `payer_id`, `payer_email`, `quantity`, `pdate`) VALUES
(16, '1525858939', '44Y06953FB29947', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Mohammed Sheikh', NULL, 'Mumbai', 'Maharashtra', '401107', 'India', '', 'smarty.arshad303@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'EL26WS26D338U', 'smarty.arshad303@gmail.com', 1, '2018-05-09 09:42:46'),
(17, '1525862000', '2UL53468WB57396', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Mohammed Sheikh', NULL, 'Mumbai', 'Maharashtra', '401107', 'India', '', 'smarty.arshad303@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'EL26WS26D338U', 'smarty.arshad303@gmail.com', 1, '2018-05-09 10:33:56'),
(18, '1525862006', '4U659154JJ06380', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2018-05-09 10:34:13'),
(19, '1525927377', '2CM22685JF52319', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2018-05-10 04:44:17'),
(20, '1526024662', '5US831175U54172', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2018-05-11 07:46:54'),
(21, '1526024843', '5CP34352U682210', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2018-05-11 07:48:08'),
(22, '1529808077', '6FY511211R26326', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2018-06-24 02:46:54'),
(23, '1529823264', '61942703P830620', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2018-06-24 06:57:27'),
(24, '1529837246', '30018606T716300', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2018-06-24 10:47:53'),
(25, '1535027177', '20L79882Y995108', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2018-08-23 12:28:09'),
(26, '1554003804', '1L810250GN53470', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'Buyer Account', NULL, 'Mumbai', 'Maharashtra', '400097', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2019-03-31 03:49:40'),
(27, '1554004685', '6LV98281X592545', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'kh kh', NULL, 'Mumbai', 'MAHARASHTRA', '400067', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2019-03-31 03:59:49'),
(28, '1554535138', '2P195501TA60655', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, '150', 150, 'kh kh', NULL, 'Mumbai', 'MAHARASHTRA', '400067', 'India', '', 'drhitesh-buy@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'R7TR3XYH9H9D8', 'drhitesh-buy@gmail.com', 1, '2019-04-06 07:19:45'),
(29, '1554642634', '2PR56286J032031', NULL, NULL, NULL, 'paypal', NULL, NULL, NULL, 'USD', 5000, 'buyer Account', NULL, 'San Jose', 'CA', '95131', 'US', '4083088868', 'purnamhealthbuyerusa@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'T7BZGYZUJAHQW', 'purnamhealthbuyerusa@gmail.com', 1, '2019-04-07 13:11:47'),
(30, '1578998038', '309005743593', '1578998114017', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 4000, 'Mufaddal Haji', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 10:49:22'),
(31, '1578999140', '309005743699', '1578999162430', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 5000, 'Mufaddal Haji', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 10:52:46'),
(32, '1579000694', '309005743870', '1579000735837', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'Sheikh Arshad', 'dsad', 'Mumbai', 'Maharshtra', '401104', 'India', '9004865982', 'smarshad86@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 1, '1', 'smarshad86@gmail.com', 12, '2020-01-14 11:18:59'),
(33, '1579000732', '309005743873', '1579000747921', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'Mufaddal Haji', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 11:19:13'),
(34, '1579000882', '309005743889', '1579000913527', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'S M Arshad', 'dsad', 'Mumbai', 'Maharshtra', '401104', 'India', '9004865982', 'smarshad86@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 1, '1', 'smarshad86@gmail.com', 12, '2020-01-14 11:21:57'),
(35, '1579001022', '309005743913', '1579001041003', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'm Haji', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 11:24:49'),
(36, '1579001389', '309005743961', '1579001403609', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 4000, ' M HAJI', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 11:30:13'),
(37, NULL, '309005744045', '1579002494259', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 4000, 'dsadasd', 'dsad', 'Mumbai', 'Maharshtra', '401104', 'India', '9004865982', 'smarshad86@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, NULL, '1', 'smarshad86@gmail.com', 12, '2020-01-14 11:49:47'),
(38, '1579002614', '309005744056', '1579002662930', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'M H', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 11:51:09'),
(39, '1579002743', '309005744068', '1579002753232', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'dasdasd', 'dsad', 'Mumbai', 'Maharshtra', '401104', 'India', '9004865982', 'smarshad86@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 1, '1', 'smarshad86@gmail.com', 12, '2020-01-14 11:52:36'),
(40, '1579002752', '309005744070', '1579002768454', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'M J', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 11:52:56'),
(41, '1579003183', '309005744097', '1579003192820', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 4000, 'Arshad Shaikh', 'dsad', 'Mumbai', 'Maharshtra', '401104', 'India', '9004865982', 'smarshad86@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 1, '1', 'smarshad86@gmail.com', 12, '2020-01-14 11:59:56'),
(42, '1579003332', '309005744111', '1579003435571', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'Mufaddal Haji', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 12:04:34'),
(43, '1579003505', '309005744127', '1579003514913', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 4000, 'Arshad Shaikh', 'dsad', 'Mumbai', 'Maharshtra', '401104', 'India', '9004865982', 'smarshad86@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 1, '1', 'smarshad86@gmail.com', 12, '2020-01-14 12:05:18'),
(44, '1579003599', '309005744141', '1579003609758', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 2000, 'Mufaddal Haji', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 12:06:55'),
(45, '1579003970', '309005744164', '1579003978750', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 4000, 'Mufaddal Haji', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-01-14 12:13:03'),
(46, '1600162301', '309006397374', '1600162334637', 'Success', '', 'Net Banking', 'AvenuesTest', 0, 'Y', 'INR', 5000, 'Mufaddal Haji', 'Goregaon', 'Mumbai', 'Maharashtra', '400104', 'India', '9820686479', 'muffadal.haji@gmail.com', '', 'CCAvenue', '', '', '', '', '', NULL, 3, '3', 'muffadal.haji@gmail.com', 12, '2020-09-15 09:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `master_physical_examination`
--

DROP TABLE IF EXISTS `master_physical_examination`;
CREATE TABLE `master_physical_examination` (
  `id` int(11) NOT NULL,
  `examination` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_physical_examination`
--

INSERT INTO `master_physical_examination` (`id`, `examination`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'PHIMOSIS', '', 1, 0, NULL, NULL),
(2, 'HYPERSENSITIVE GLANS', '', 1, 0, NULL, NULL),
(3, 'FUNGAL INFECTION', '', 1, 0, NULL, NULL),
(4, 'SMALL OPENING 1 FINGER', '', 1, 0, NULL, NULL),
(5, 'OPENING 2 FINGER', '', 1, 0, NULL, NULL),
(6, 'Opening No finger', '', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_potency`
--

DROP TABLE IF EXISTS `master_potency`;
CREATE TABLE `master_potency` (
  `id` int(11) NOT NULL,
  `potency` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_potency`
--

INSERT INTO `master_potency` (`id`, `potency`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'Potency', '1', 1, 0, '182.70.118.74', 1536420549),
(2, 'Mother Tincture', '1', 1, 0, '115.97.65.55', 1548575164),
(3, '3 C ', '1', 1, 0, '115.97.65.55', 1548575187),
(4, '6 C', '1', 1, 0, '115.97.65.55', 1548575195),
(5, '12 C', '1', 1, 0, '115.97.65.55', 1548575201),
(6, '30 C', '1', 1, 0, '115.97.65.55', 1548575207),
(7, '200 C', '1', 1, 0, '115.97.65.55', 1548575212),
(8, '1 M 1000 C', '1', 1, 0, '115.97.65.55', 1548575234),
(9, '10 M 10000 C', '1', 1, 0, '115.97.65.55', 1548575244),
(10, '50 M 50000 C', '1', 1, 0, '115.97.65.55', 1548575253),
(11, 'CM 100000 C', '1', 1, 0, '115.97.65.55', 1548575274),
(12, 'O/1', '1', 1, 0, '115.97.65.55', 1548575281),
(13, '0/2', '1', 1, 0, '115.97.65.55', 1548575289),
(14, '0/3', '1', 1, 0, '115.97.65.55', 1548575294),
(15, '0/4', '1', 1, 0, '115.97.65.55', 1548575299),
(16, '0/5', '1', 1, 0, '115.97.65.55', 1548575305),
(17, '0/6', '1', 1, 0, '115.97.65.55', 1548575312),
(18, '0/7', '1', 1, 0, '115.97.65.55', 1548575317),
(19, '3 X Biochemic', '1', 1, 0, '115.97.65.55', 1548575333),
(20, '6 x Biochemic', '1', 1, 0, '115.97.65.55', 1548575340),
(21, '12 x Biochemic', '1', 1, 0, '115.97.65.55', 1548575351),
(22, '24 X Biochemic', '1', 1, 0, '115.97.65.55', 1548575375),
(23, '0/1', '1', 1, 0, '116.72.121.176', 1577005719);

-- --------------------------------------------------------

--
-- Table structure for table `master_qualification`
--

DROP TABLE IF EXISTS `master_qualification`;
CREATE TABLE `master_qualification` (
  `id` int(11) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_qualification`
--

INSERT INTO `master_qualification` (`id`, `qualification`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'High School', '1', 1, 0, '60.243.30.166', 1502866050),
(2, 'Primary grade', '1', 1, 0, '60.243.30.166', 1502866020),
(3, 'B. A. Bachelor of Arts', '1', 1, 0, '60.243.30.166', 1502866106),
(4, 'C. A. Chartered Accounatant', '1', 1, 0, '115.97.65.55', 1548573105),
(5, 'Secondary School', '1', 1, 0, '60.243.30.166', 1502866037),
(6, 'M.B.B.S.', '1', 1, 0, '60.243.30.166', 1502862222),
(7, 'B. Sc. Bachelor of Science', '1', 1, 0, '115.97.65.55', 1548573012),
(8, 'B. Com. Bachelor of Commerce ', '1', 1, 0, '115.97.65.55', 1548572987),
(9, 'Higher Secondary', '1', 1, 0, '60.243.30.166', 1502866203),
(10, 'Ph. D.', '1', 1, 0, '60.243.30.166', 1502866213),
(11, 'M.S.', '1', 1, 0, '60.243.30.166', 1502866222),
(12, 'M. COM.', '1', 1, 0, '60.243.30.166', 1502866259),
(13, 'M. Sc.', '1', 1, 0, '60.243.30.166', 1502866267),
(14, 'M. A.', '1', 1, 0, '60.243.30.166', 1502866275),
(15, 'B.E. Bachelor of Bngineering', '1', 1, 0, '60.243.30.166', 1502866357),
(16, 'M. E. Masters of Engineering', '1', 1, 0, '60.243.30.166', 1502866375),
(17, 'C.S. Company Secretary', '1', 1, 0, '60.243.30.166', 1502866399),
(18, 'I.C.W.A. Cost Accountant', '1', 1, 0, '115.97.65.55', 1548573183),
(19, 'Diploma', '1', 1, 0, '60.243.30.166', 1502866444),
(20, 'B.M.S.', '1', 1, 0, '60.243.29.48', 1503555429),
(21, 'M.M.S.', '1', 1, 0, '60.243.29.48', 1503555439),
(22, 'B.F.A.', '1', 1, 0, '60.243.29.48', 1503555447),
(23, 'I.I.T.', '1', 1, 0, '60.243.29.48', 1503555465),
(24, 'I.I.M.', '1', 1, 0, '60.243.29.48', 1503555475),
(25, 'I.S.B.', '1', 1, 0, '60.243.29.48', 1503555480),
(26, 'C.F.A.', '1', 1, 0, '115.97.65.55', 1548573078),
(27, 'Bachelor of Architecture', '1', 1, 0, '115.97.65.55', 1548573227),
(28, 'I.T.I.', '1', 1, 0, '115.97.65.55', 1548573248),
(29, 'Carpenter', '1', 1, 0, '115.97.65.55', 1548573260),
(30, 'Masson', '1', 1, 0, '115.97.65.55', 1548573272),
(31, 'M.Ch.', '1', 1, 0, '115.97.65.55', 1548573292),
(32, 'M B A ', '1', 1, 0, '116.72.121.176', 1577008996),
(33, 'B E ', '1', 1, 0, '116.72.121.176', 1577009005),
(35, 'M E', '1', 1, 0, '116.72.121.176', 1577009020),
(36, 'M D', '1', 1, 0, '116.72.121.176', 1577009028),
(38, 'M S', '1', 1, 0, '116.72.121.176', 1577009036),
(39, 'TENTH Xth SSC', '1', 1, 0, '116.72.121.176', 1577009126),
(40, 'TWELTH XII 12th', '1', 1, 0, '116.72.121.176', 1577009141),
(41, 'GRADUATE', '1', 1, 0, '27.4.215.17', 1599709146),
(42, 'POST GRADUATE', '1', 1, 0, '27.4.215.17', 1599709162),
(43, 'UNDERGRADUATE', '1', 1, 0, '27.4.215.17', 1599709171),
(44, 'D.N.B.', '1', 1, 0, '27.4.215.17', 1599709208),
(45, 'M. PHIL.', '1', 1, 0, '27.4.215.17', 1599709218),
(48, 'MBA XLRI', '1', 1, 0, '27.4.215.17', 1599709303),
(49, 'MBA AHMEDABAD', '1', 1, 0, '27.4.215.17', 1599709321),
(50, 'MBA IIM', '1', 1, 0, '27.4.215.17', 1599709330),
(51, 'M.S. ABROAD', '1', 1, 0, '27.4.215.17', 1599709342),
(52, 'MBA ABROAD', '1', 1, 0, '27.4.215.17', 1599709351),
(53, 'CERTIFICATE COURSE ', '1', 1, 0, '27.4.215.17', 1599709797),
(54, 'PRIMARY SCHOOL', '1', 1, 0, '27.4.215.17', 1599709832),
(55, 'Other', '1', 1, 0, '27.4.215.17', 1599714688);

-- --------------------------------------------------------

--
-- Table structure for table `master_question`
--

DROP TABLE IF EXISTS `master_question`;
CREATE TABLE `master_question` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `ispublic` varchar(15) NOT NULL,
  `answer` longtext DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_question`
--

INSERT INTO `master_question` (`id`, `user_id`, `question`, `ispublic`, `answer`, `approved`, `added_date`) VALUES
(1, 1, 'Question', 'Public', '<p>Are there two kinds of wing chun wooden dummy for right-handed and left-handed people? Or there is just one type suitable for all? I&#39;m wondering and haven&#39;t found anything. I&#39;d really be grateful if you help me.</p>\r\n', 1, '2017-07-21 16:36:44'),
(2, 1, 'question 2', 'Public', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>\r\n', 1, '2017-07-21 17:15:09'),
(3, 1, 'Testing Question', 'Private', '<p>This is the Answer for your question.</p>\r\n\r\n<p> </p>\r\n', 1, '2017-07-25 09:15:46'),
(4, 2, 'KHYKHKJLKL', 'Public', NULL, 0, '2017-08-08 10:37:50'),
(5, 3, 'This is my first question\r\nHow to cure Acidity Problem', 'Public', '<p>Drink atleast 12 glass of water<br>\r\navoid Spicy and oily food</p>\r\n', 1, '2017-10-30 09:36:08'),
(6, 4, 'dads', 'Public', NULL, 0, '2017-11-01 14:08:30'),
(7, 5, 'dasdasdasd', 'Public', NULL, 0, '2017-11-01 15:51:19'),
(8, 6, 'dasdasd asd', 'Public', NULL, 0, '2017-11-01 15:51:52'),
(9, 7, '8286828285', 'Public', NULL, 0, '2017-11-01 15:53:03'),
(10, 1, 'My Question?', 'Private', NULL, 0, '2017-11-04 14:02:15'),
(11, 1, 'My Question?', 'Private', NULL, 0, '2017-11-04 14:06:10'),
(12, 1, 'My Question?', 'Public', NULL, 0, '2017-11-04 14:07:52'),
(13, 1, 'My Question?', 'Public', NULL, 0, '2017-11-04 14:12:01'),
(14, 1, 'My Question?', 'Public', NULL, 0, '2017-11-05 10:50:24'),
(15, 1, 'my question?', 'Public', NULL, 0, '2017-11-05 10:55:42'),
(16, 1, 'my question?', 'Public', NULL, 0, '2017-11-05 10:57:14'),
(17, 1, 'vjbbvuvbbbib', 'Private', NULL, 0, '2017-11-06 05:49:31'),
(18, 1, 'test question', 'Public', NULL, 0, '2017-11-06 08:37:51'),
(19, 1, 'Testing Questions 2', 'Public', NULL, 0, '2017-11-06 10:37:15'),
(20, 1, 'this is my second question', 'Private', NULL, 0, '2017-11-06 14:45:52'),
(21, 1, 'test question', 'Public', NULL, 0, '2017-11-07 12:29:40'),
(22, 1, 'i have too much pain in shin bone in both the legs so what needs tobe done', 'Public', NULL, 0, '2017-11-10 13:04:39'),
(23, 1, 'testing', 'Public', NULL, 0, '2017-11-21 10:42:21'),
(24, 1, 'sex problem', 'Private', NULL, 0, '2017-11-29 16:14:04'),
(25, 3, 'dffsghsfhzdh', 'Private', NULL, 0, '2018-06-24 05:03:58'),
(26, 3, 'What is my name?', 'Private', '<p>Your name is mufaddal</p>\r\n', 1, '2018-06-24 08:43:37'),
(27, 3, 'What is the name?', 'Public', NULL, 0, '2018-06-24 08:44:08'),
(28, 87, 'Asdf ghjkl', 'Private', NULL, 0, '2019-01-27 05:22:31'),
(29, 3, 'dfbsddfg', 'Private', NULL, 0, '2019-12-22 05:28:35'),
(30, 109, 'Mera land chhota ho gaya vada karna hai\n', 'Public', NULL, 0, '2020-02-19 23:20:24'),
(31, 116, 'Hi,\nI had come to your clinic in October - November 2016 and I could only continue the medication for 3 months because I had to move out of the country. The medicines had just started to show effect when I stopped taking them. Just wanted to know if you still have my case history document and if I can continue the medication. Also wanted to know if the clinic is open during the lock down.', 'Private', NULL, 0, '2020-04-27 06:58:54'),
(32, 117, 'What is the cause for allergy.\n', 'Public', NULL, 0, '2020-04-27 13:40:04'),
(33, 117, 'What is the cause for allergy.\n', 'Public', NULL, 0, '2020-04-27 13:40:05'),
(34, 134, 'How do you treat premature ejaculation?', 'Public', NULL, 0, '2020-08-24 18:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `master_referby`
--

DROP TABLE IF EXISTS `master_referby`;
CREATE TABLE `master_referby` (
  `id` int(11) NOT NULL,
  `referby` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_referby`
--

INSERT INTO `master_referby` (`id`, `referby`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, 'self', '1', 1, 0, '183.87.55.182', 1502829470),
(2, 'Just dial', '1', 1, 0, '60.243.29.48', 1503554959),
(3, 'Practo', '1', 1, 0, '60.243.29.48', 1503554966),
(4, 'Google search', '1', 1, 0, '60.243.29.48', 1503554974),
(5, 'Doctor', '1', 1, 0, '60.243.29.48', 1503554980),
(6, 'Friend or relative', '1', 1, 0, '60.243.29.48', 1503554989),
(7, 'Office colleague', '1', 1, 0, '60.243.29.48', 1503554997),
(8, 'Social media', '1', 1, 0, '60.243.29.48', 1503555007),
(9, 'Facebook advetize', '1', 1, 0, '60.243.29.48', 1503555020),
(10, 'Google advertize Adwords', '1', 1, 0, '27.4.215.17', 1599715799),
(11, 'Lybrate', '1', 1, 0, '60.243.29.48', 1503555046),
(12, 'Newspaper Magazine', '1', 1, 0, '60.243.29.48', 1503555059),
(14, 'Sexologist App', '1', 1, 0, '60.243.29.48', 1503555096),
(15, 'Sexologist.info website', '1', 1, 0, '60.243.29.48', 1503555115),
(16, 'INSTAGRAM', '1', 1, 0, '116.72.121.176', 1577008435);

-- --------------------------------------------------------

--
-- Table structure for table `master_subcategory`
--

DROP TABLE IF EXISTS `master_subcategory`;
CREATE TABLE `master_subcategory` (
  `id` int(11) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `subcategory` varchar(155) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_subcategory`
--

INSERT INTO `master_subcategory` (`id`, `cid`, `subcategory`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(1, '1', 'Acidity', '', 1, 0, NULL, NULL),
(2, '1', 'Headache', '', 1, 0, NULL, NULL),
(3, '1', 'Backache', '', 1, 0, NULL, NULL),
(4, '1', 'Knee pain', '', 1, 0, NULL, NULL),
(5, '1', 'Cough', '', 1, 0, NULL, NULL),
(6, '1', 'Cold', '', 1, 0, NULL, NULL),
(7, '1', 'Breadthlessness', '', 1, 0, NULL, NULL),
(8, '1', 'Chest pain', '', 1, 0, NULL, NULL),
(9, '1', 'Leg pain', '', 1, 0, NULL, NULL),
(10, '1', 'Bodyache', '', 1, 0, NULL, NULL),
(11, '1', 'Weakness', '', 1, 0, NULL, NULL),
(12, '1', 'PMT', '', 1, 0, NULL, NULL),
(13, '1', 'Constipation', '', 1, 0, NULL, NULL),
(14, '1', 'Loose motion', '', 1, 0, NULL, NULL),
(15, '1', 'Bowel', '', 1, 0, NULL, NULL),
(16, '1', 'Bladder', '', 1, 0, NULL, NULL),
(17, '1', 'Headache', '', 1, 0, NULL, NULL),
(18, '1', 'Backache', '', 1, 0, NULL, NULL),
(19, '1', 'Knee pain', '', 1, 0, NULL, NULL),
(20, '1', 'Cough', '', 1, 0, NULL, NULL),
(21, '1', 'Cold', '', 1, 0, NULL, NULL),
(22, '1', 'Breadthlessness', '', 1, 0, NULL, NULL),
(23, '1', 'Chest pain', '', 1, 0, NULL, NULL),
(24, '1', 'Leg pain', '', 1, 0, NULL, NULL),
(25, '1', 'Bodyache', '', 1, 0, NULL, NULL),
(26, '1', 'Weakness', '', 1, 0, NULL, NULL),
(27, '1', 'Dandruff', '', 1, 0, NULL, NULL),
(28, '1', 'Hairfall', '', 1, 0, NULL, NULL),
(29, '1', 'Gases', '', 1, 0, NULL, NULL),
(30, '1', 'Neck pain', '', 1, 0, NULL, NULL),
(31, '1', 'Back pain', '', 1, 0, NULL, NULL),
(32, '1', 'Bleeding PR', '', 1, 0, NULL, NULL),
(33, '1', 'Bleeding PV', '', 1, 0, NULL, NULL),
(34, '1', 'Dysmenorrhoea', '', 1, 0, NULL, NULL),
(35, '1', 'Menorrhagia', '', 1, 0, NULL, NULL),
(36, '1', 'Oligomenorrhoea', '', 1, 0, NULL, NULL),
(37, '1', 'Sputum', '', 1, 0, NULL, NULL),
(38, '1', 'Phlegm', '', 1, 0, NULL, NULL),
(39, '1', 'Hemoptysis', '', 1, 0, NULL, NULL),
(40, '1', 'Hemetemesis', '', 1, 0, NULL, NULL),
(41, '1', 'Body pain', '', 1, 0, NULL, NULL),
(42, '1', 'Fatigue', '', 1, 0, NULL, NULL),
(43, '1', 'Weakness', '', 1, 0, NULL, NULL),
(44, '1', 'Sleepiness', '', 1, 0, NULL, NULL),
(45, '1', 'Sleeplessness', '', 1, 0, NULL, NULL),
(46, '1', 'Sciatica Left', '', 1, 0, NULL, NULL),
(47, '1', 'Sciatica Right', '', 1, 0, NULL, NULL),
(48, '1', 'Sciatica Bilateral', '', 1, 0, NULL, NULL),
(49, '1', 'Snoring', '', 1, 0, NULL, NULL),
(50, '1', 'Neuralgia', '', 1, 0, NULL, NULL),
(51, '1', 'Burning', '', 1, 0, NULL, NULL),
(52, '1', 'Hot flushes', '', 1, 0, NULL, NULL),
(53, '1', 'Coldness', '', 1, 0, NULL, NULL),
(54, '1', 'Tingling', '', 1, 0, NULL, NULL),
(55, '1', 'Numbness', '', 1, 0, NULL, NULL),
(56, '1', 'Swelling', '', 1, 0, NULL, NULL),
(57, '1', 'redness', '', 1, 0, NULL, NULL),
(58, '1', 'eruption', '', 1, 0, NULL, NULL),
(59, '1', 'Depigmentation', '', 1, 0, NULL, NULL),
(60, '1', 'Low sperm count', '', 1, 0, NULL, NULL),
(61, '1', 'Irregular menses', '', 1, 0, NULL, NULL),
(62, '1', 'Palpitation', '', 1, 0, NULL, NULL),
(63, '1', 'Loss of weight', '', 1, 0, NULL, NULL),
(64, '1', 'Weight gain', '', 1, 0, NULL, NULL),
(65, '1', 'Edema feet', '', 1, 0, NULL, NULL),
(66, '1', 'Edema face', '', 1, 0, NULL, NULL),
(67, '2', 'Allergy', '1', 1, 0, '::1', 1536419751),
(68, '2', 'Allergy skin', '', 1, 0, NULL, NULL),
(69, '2', 'Allergy Respiratory', '', 1, 0, NULL, NULL),
(70, '2', 'Acidity', '', 1, 0, NULL, NULL),
(71, '2', 'IBS', '', 1, 0, NULL, NULL),
(72, '2', 'Migraine', '', 1, 0, NULL, NULL),
(73, '2', 'Hypertension', '', 1, 0, NULL, NULL),
(74, '2', 'Diabetes Type II', '', 1, 0, NULL, NULL),
(75, '2', 'Smoking', '', 1, 0, NULL, NULL),
(76, '2', 'Alcohol', '', 1, 0, NULL, NULL),
(77, '2', 'Drugs', '', 1, 0, NULL, NULL),
(78, '2', 'R A ', '', 1, 0, NULL, NULL),
(79, '2', 'O A', '', 1, 0, NULL, NULL),
(80, '2', 'Dyslipidemia', '', 1, 0, NULL, NULL),
(81, '2', 'Constipation', '', 1, 0, NULL, NULL),
(82, '2', 'Collitis', '', 1, 0, NULL, NULL),
(83, '2', 'Spondylosis', '', 1, 0, NULL, NULL),
(84, '2', 'Spondylolysthesis', '', 1, 0, NULL, NULL),
(85, '2', 'Dysmenorrhoea', '', 1, 0, NULL, NULL),
(86, '2', 'Menorrhagia', '', 1, 0, NULL, NULL),
(87, '2', 'Oligomenorrhoea', '', 1, 0, NULL, NULL),
(88, '2', 'Oligospermia', '', 1, 0, NULL, NULL),
(89, '2', 'Azoospermia', '', 1, 0, NULL, NULL),
(90, '2', 'Oligoasthenospermis', '', 1, 0, NULL, NULL),
(91, '2', 'Asthenospermia', '', 1, 0, NULL, NULL),
(92, '2', 'Varicocoele', '', 1, 0, NULL, NULL),
(93, '2', 'CVA', '', 1, 0, NULL, NULL),
(94, '2', 'CABG', '', 1, 0, NULL, NULL),
(95, '2', 'Angioplasty', '', 1, 0, NULL, NULL),
(96, '2', 'Knee transplant', '', 1, 0, NULL, NULL),
(97, '2', 'Hysterectomy', '', 1, 0, NULL, NULL),
(98, '2', 'Oopharectomy', '', 1, 0, NULL, NULL),
(99, '2', 'Sinusitis', '', 1, 0, NULL, NULL),
(100, '2', 'Bronchitis', '', 1, 0, NULL, NULL),
(101, '2', 'Asthama', '', 1, 0, NULL, NULL),
(102, '2', 'Parkinson', '', 1, 0, NULL, NULL),
(103, '2', 'PSP', '', 1, 0, NULL, NULL),
(104, '2', 'Gout', '', 1, 0, NULL, NULL),
(105, '2', 'Insomnia', '', 1, 0, NULL, NULL),
(106, '2', 'Sciatica', '', 1, 0, NULL, NULL),
(107, '2', 'Diabetes Type I', '', 1, 0, NULL, NULL),
(108, '2', 'Snoring', '', 1, 0, NULL, NULL),
(109, '2', 'Sleep Apnea', '', 1, 0, NULL, NULL),
(110, '2', 'CAD ANGINA', '', 1, 0, NULL, NULL),
(111, '2', 'PCOD', '', 1, 0, NULL, NULL),
(112, '2', 'Hypothyroid', '', 1, 0, NULL, NULL),
(113, '2', 'Hyperthyroid', '', 1, 0, NULL, NULL),
(114, '2', 'Cancer', '', 1, 0, NULL, NULL),
(115, '3', 'ED', '', 1, 0, NULL, NULL),
(116, '3', 'ED Psych', '', 1, 0, NULL, NULL),
(117, '3', 'ED Organic', '', 1, 0, NULL, NULL),
(118, '3', 'HSDD', '', 1, 0, NULL, NULL),
(119, '3', 'SAD', '', 1, 0, NULL, NULL),
(120, '3', 'Hypogonadism', '', 1, 0, NULL, NULL),
(121, '3', 'Testicle small', '', 1, 0, NULL, NULL),
(122, '3', 'Testicle one', '', 1, 0, NULL, NULL),
(123, '3', 'Varicocoele', '', 1, 0, NULL, NULL),
(124, '3', 'Hygeine', '', 1, 0, NULL, NULL),
(125, '3', 'Phimosuis', '', 1, 0, NULL, NULL),
(126, '3', 'Paraphimosis', '', 1, 0, NULL, NULL),
(127, '3', 'Orgasm Fantasy', '', 1, 0, NULL, NULL),
(128, '3', 'Masturbation', '', 1, 0, NULL, NULL),
(129, '3', 'Masturbation Prone', '', 1, 0, NULL, NULL),
(130, '3', 'Masturbaation legs', '', 1, 0, NULL, NULL),
(131, '3', 'Desire Discrepancy', '', 1, 0, NULL, NULL),
(132, '3', 'Fatish', '', 1, 0, NULL, NULL),
(133, '3', 'Same Sex', '', 1, 0, NULL, NULL),
(134, '3', 'Opposite sex', '', 1, 0, NULL, NULL),
(135, '3', 'AOR', '', 1, 0, NULL, NULL),
(136, '3', 'EOR', '', 1, 0, NULL, NULL),
(137, '3', 'IOR', '', 1, 0, NULL, NULL),
(138, '3', 'DOR', '', 1, 0, NULL, NULL),
(139, '3', 'Hypersensitive ', '', 1, 0, NULL, NULL),
(140, '3', 'Suppresed desire', '', 1, 0, NULL, NULL),
(141, '3', 'EMA', '', 1, 0, NULL, NULL),
(142, '3', 'PMA', '', 1, 0, NULL, NULL),
(143, '3', 'EMS', '', 1, 0, NULL, NULL),
(144, '3', 'PMS', '', 1, 0, NULL, NULL),
(145, '3', 'Perversion', '', 1, 0, NULL, NULL),
(146, '3', 'Pedophilia', '', 1, 0, NULL, NULL),
(147, '3', '$$$', '', 1, 0, NULL, NULL),
(148, '3', 'GF', '', 1, 0, NULL, NULL),
(149, '3', 'Sadism', '', 1, 0, NULL, NULL),
(150, '3', 'Masochism', '', 1, 0, NULL, NULL),
(151, '3', 'BF', '', 1, 0, NULL, NULL),
(152, '3', 'Intercourse', '', 1, 0, NULL, NULL),
(153, '3', 'Penetration ', '', 1, 0, NULL, NULL),
(154, '3', 'Position', '', 1, 0, NULL, NULL),
(155, '3', 'Posture', '', 1, 0, NULL, NULL),
(156, '3', 'Movement', '', 1, 0, NULL, NULL),
(157, '3', 'EOR Grade I', '', 1, 0, NULL, NULL),
(158, '3', 'EOR Grade II', '', 1, 0, NULL, NULL),
(159, '3', 'EOR Grade III', '', 1, 0, NULL, NULL),
(160, '3', 'PP PA SS', '', 1, 0, NULL, NULL),
(161, '3', 'Avoidance Behaviour', '', 1, 0, NULL, NULL),
(162, '3', 'Erection HSR', '', 1, 0, NULL, NULL),
(163, '3', 'Erection MB', '', 1, 0, NULL, NULL),
(164, '3', 'Erection ME', '', 1, 0, NULL, NULL),
(165, '3', 'Erection Sleep', '', 1, 0, NULL, NULL),
(166, '3', 'Erection NE', '', 1, 0, NULL, NULL),
(167, '3', 'Porn', '', 1, 0, NULL, NULL),
(168, '3', 'Foreplay', '', 1, 0, NULL, NULL),
(169, '3', 'Sparsh', '', 1, 0, NULL, NULL),
(170, '3', 'Viagra', '', 1, 0, NULL, NULL),
(171, '3', 'Partners satisfaction', '', 1, 0, NULL, NULL),
(172, '3', 'Dapoxitine', '', 1, 0, NULL, NULL),
(173, '3', 'Paroxitine', '', 1, 0, NULL, NULL),
(174, '3', 'Clonil', '', 1, 0, NULL, NULL),
(175, '3', 'Length', '', 1, 0, NULL, NULL),
(176, '3', 'Consummation', '', 1, 0, NULL, NULL),
(177, '3', 'NCM', '', 1, 0, NULL, NULL),
(178, '3', 'Intercourse', '', 1, 0, NULL, NULL),
(179, '3', 'Refractory Period', '', 1, 0, NULL, NULL),
(180, '3', 'Desire Discrepancy', '', 1, 0, NULL, NULL),
(181, '3', 'Arousal', '', 1, 0, NULL, NULL),
(182, '3', 'Orientation', '', 1, 0, NULL, NULL),
(183, '3', 'Desire ', '', 1, 0, NULL, NULL),
(184, '3', 'Sustain', '', 1, 0, NULL, NULL),
(185, '3', 'Not sustaining', '', 1, 0, NULL, NULL),
(186, '3', 'Precum', '', 1, 0, NULL, NULL),
(187, '3', 'C G Fluid', '', 1, 0, NULL, NULL),
(188, '3', 'Dhat ', '', 1, 0, NULL, NULL),
(263, '4', 'Vaginal dryness', '', 1, 0, NULL, NULL),
(264, '4', 'penetration phobia', '', 1, 0, NULL, NULL),
(265, '4', 'Vaginismus', '', 1, 0, NULL, NULL),
(266, '4', 'Small introitus', '', 1, 0, NULL, NULL),
(267, '4', 'HSDD', '', 1, 0, NULL, NULL),
(268, '4', 'SAD', '', 1, 0, NULL, NULL),
(269, '4', 'Desire Discrepancy', '', 1, 0, NULL, NULL),
(270, '4', 'Fatish', '', 1, 0, NULL, NULL),
(271, '4', 'Same Sex', '', 1, 0, NULL, NULL),
(272, '4', 'Opposite sex', '', 1, 0, NULL, NULL),
(273, '4', 'AOR', '', 1, 0, NULL, NULL),
(274, '4', 'EOR', '', 1, 0, NULL, NULL),
(275, '4', 'IOR', '', 1, 0, NULL, NULL),
(276, '4', 'DOR', '', 1, 0, NULL, NULL),
(277, '4', 'Hypersensitive ', '', 1, 0, NULL, NULL),
(278, '4', 'Vaginal laxity', '', 1, 0, NULL, NULL),
(279, '4', 'Suppresed desire', '', 1, 0, NULL, NULL),
(280, '4', 'EMA', '', 1, 0, NULL, NULL),
(281, '4', 'PMA', '', 1, 0, NULL, NULL),
(282, '4', 'EMS', '', 1, 0, NULL, NULL),
(283, '4', 'PMS', '', 1, 0, NULL, NULL),
(284, '4', 'Perversion', '', 1, 0, NULL, NULL),
(285, '4', 'Pedophilia', '', 1, 0, NULL, NULL),
(286, '4', '$$$', '', 1, 0, NULL, NULL),
(287, '4', 'GF', '', 1, 0, NULL, NULL),
(288, '4', 'Sadism', '', 1, 0, NULL, NULL),
(289, '4', 'Masochism', '', 1, 0, NULL, NULL),
(290, '4', 'Orgasm Vaginal', '', 1, 0, NULL, NULL),
(291, '4', 'Orgasm Clitoral', '', 1, 0, NULL, NULL),
(292, '4', 'Orgasm Nipple', '', 1, 0, NULL, NULL),
(293, '4', 'Orgasm Fantasy', '', 1, 0, NULL, NULL),
(294, '4', 'BF', '', 1, 0, NULL, NULL),
(295, '4', 'Intercourse', '', 1, 0, NULL, NULL),
(296, '4', 'Penetration ', '', 1, 0, NULL, NULL),
(297, '4', 'Position', '', 1, 0, NULL, NULL),
(298, '4', 'Posture', '', 1, 0, NULL, NULL),
(299, '4', 'Movement', '', 1, 0, NULL, NULL),
(300, '4', 'PP PA SS', '', 1, 0, NULL, NULL),
(301, '4', 'Avoidance Behaviour', '', 1, 0, NULL, NULL),
(302, '4', 'Sensouness', '', 1, 0, NULL, NULL),
(303, '4', 'Spontaneity', '', 1, 0, NULL, NULL),
(304, '4', 'Lubrication', '', 1, 0, NULL, NULL),
(305, '4', 'Itching', '', 1, 0, NULL, NULL),
(306, '4', 'Candidiasis', '', 1, 0, NULL, NULL),
(307, '4', 'Consummation', '', 1, 0, NULL, NULL),
(308, '4', 'NCM', '', 1, 0, NULL, NULL),
(309, '4', 'Dysparunea', '', 1, 0, NULL, NULL),
(310, '4', 'Intercourse', '', 1, 0, NULL, NULL),
(311, '4', 'Refractory Period', '', 1, 0, NULL, NULL),
(312, '4', 'Gym supplemets', '', 1, 0, NULL, NULL),
(313, '4', 'Steroids', '', 1, 0, NULL, NULL),
(314, '4', 'Creatinine', '', 1, 0, NULL, NULL),
(315, '4', 'Muscle mass gainer', '', 1, 0, NULL, NULL),
(316, '5', 'Sleep', '', 1, 0, NULL, NULL),
(317, '5', 'Dream', '', 1, 0, NULL, NULL),
(318, '5', 'Appetite', '', 1, 0, NULL, NULL),
(319, '5', 'Hunger', '', 1, 0, NULL, NULL),
(320, '5', 'Sweet ', '', 1, 0, NULL, NULL),
(321, '5', 'Spicy', '', 1, 0, NULL, NULL),
(322, '5', 'Sour', '', 1, 0, NULL, NULL),
(323, '5', 'Bitter', '', 1, 0, NULL, NULL),
(324, '5', 'Chocolate', '', 1, 0, NULL, NULL),
(325, '5', 'Cold drink', '', 1, 0, NULL, NULL),
(326, '5', 'Ic cream', '', 1, 0, NULL, NULL),
(327, '5', 'Sugar', '', 1, 0, NULL, NULL),
(328, '5', 'Fruit', '', 1, 0, NULL, NULL),
(329, '5', 'Ice', '', 1, 0, NULL, NULL),
(330, '5', 'Tomato', '', 1, 0, NULL, NULL),
(331, '5', 'Coccumber', '', 1, 0, NULL, NULL),
(332, '5', 'Salad', '', 1, 0, NULL, NULL),
(333, '5', 'Nuts', '', 1, 0, NULL, NULL),
(334, '5', 'Pica', '', 1, 0, NULL, NULL),
(335, '5', 'Nutrition', '', 1, 0, NULL, NULL),
(336, '5', 'Weight', '', 1, 0, NULL, NULL),
(337, '5', 'Thirst', '', 1, 0, NULL, NULL),
(338, '5', 'Pulse', '', 1, 0, NULL, NULL),
(339, '5', 'BP', '', 1, 0, NULL, NULL),
(340, '5', 'Temperature', '', 1, 0, NULL, NULL),
(341, '5', 'Perspiration Genaral', '', 1, 0, NULL, NULL),
(342, '5', 'Perspiration scalp', '', 1, 0, NULL, NULL),
(343, '5', 'Perspiration Neck', '', 1, 0, NULL, NULL),
(344, '5', 'Perspration Chest', '', 1, 0, NULL, NULL),
(345, '5', 'Perspiration Back', '', 1, 0, NULL, NULL),
(346, '5', 'Perspiration Thighs', '', 1, 0, NULL, NULL),
(347, '5', 'Perspiration stomavh', '', 1, 0, NULL, NULL),
(348, '5', 'Perspiration Nose', '', 1, 0, NULL, NULL),
(349, '5', 'Perspiraton Palms', '', 1, 0, NULL, NULL),
(350, '5', 'Perspiration Soles', '', 1, 0, NULL, NULL),
(351, '5', 'Perspiration Cold', '', 1, 0, NULL, NULL),
(352, '5', 'Perspiration Hot', '', 1, 0, NULL, NULL),
(353, '5', 'Perspiration Offensive', '', 1, 0, NULL, NULL),
(354, '5', 'Perspiration Sour', '', 1, 0, NULL, NULL),
(355, '5', 'Perspiration Fishy', '', 1, 0, NULL, NULL),
(356, '5', 'Perspiration White', '', 1, 0, NULL, NULL),
(357, '5', 'Perspiration yellow', '', 1, 0, NULL, NULL),
(358, '6', 'Exercise', '', 1, 0, NULL, NULL),
(359, '6', 'Walking', '', 1, 0, NULL, NULL),
(360, '6', 'Stretching', '', 1, 0, NULL, NULL),
(361, '6', 'Jumping jack', '', 1, 0, NULL, NULL),
(362, '6', 'Deep breadthing', '', 1, 0, NULL, NULL),
(363, '6', 'Pranayama', '', 1, 0, NULL, NULL),
(364, '6', 'Running', '', 1, 0, NULL, NULL),
(365, '6', 'Jogging', '', 1, 0, NULL, NULL),
(366, '6', 'Push ups', '', 1, 0, NULL, NULL),
(367, '6', 'Sit ups', '', 1, 0, NULL, NULL),
(368, '6', 'Surya namaskar', '', 1, 0, NULL, NULL),
(369, '6', 'Yogasana', '', 1, 0, NULL, NULL),
(370, '6', 'Meditation', '', 1, 0, NULL, NULL),
(371, '6', 'Martial Art', '', 1, 0, NULL, NULL),
(372, '6', 'Music', '', 1, 0, NULL, NULL),
(373, '6', 'Vocal', '', 1, 0, NULL, NULL),
(374, '6', 'Lounges', '', 1, 0, NULL, NULL),
(375, '6', 'Crunches', '', 1, 0, NULL, NULL),
(376, '6', 'Marathon', '', 1, 0, NULL, NULL),
(377, '7', 'Mind', '', 1, 0, NULL, NULL),
(378, '7', 'Anxiety', '', 1, 0, NULL, NULL),
(379, '7', 'Fear', '', 1, 0, NULL, NULL),
(380, '7', 'Sadness', '', 1, 0, NULL, NULL),
(381, '7', 'Nightmares', '', 1, 0, NULL, NULL),
(382, '7', 'Depression', '', 1, 0, NULL, NULL),
(383, '7', 'Grief', '', 1, 0, NULL, NULL),
(384, '7', 'Anger', '', 1, 0, NULL, NULL),
(385, '7', 'Indignation', '', 1, 0, NULL, NULL),
(386, '7', 'Mortification', '', 1, 0, NULL, NULL),
(387, '7', 'Nervousness', '', 1, 0, NULL, NULL),
(388, '7', 'Anticipation', '', 1, 0, NULL, NULL),
(389, '7', 'Weepy', '', 1, 0, NULL, NULL),
(390, '7', 'Timidity', '', 1, 0, NULL, NULL),
(391, '7', 'Confidence', '', 1, 0, NULL, NULL),
(392, '7', 'Memory', '', 1, 0, NULL, NULL),
(393, '7', 'IPR', '', 1, 0, NULL, NULL),
(394, '7', 'Irritability', '', 1, 0, NULL, NULL),
(395, '7', 'Worry', '', 1, 0, NULL, NULL),
(396, '7', 'Mood swing', '', 1, 0, NULL, NULL),
(397, '7', 'Stress', '', 1, 0, NULL, NULL),
(398, '7', 'Dreams', '', 1, 0, NULL, NULL),
(399, '8', 'BSF', '', 1, 0, NULL, NULL),
(400, '8', 'BSPP', '', 1, 0, NULL, NULL),
(401, '8', 'Testosterone Total', '', 1, 0, NULL, NULL),
(402, '8', 'Testosterone Free', '', 1, 0, NULL, NULL),
(403, '8', 'FSH', '', 1, 0, NULL, NULL),
(404, '8', 'LH', '', 1, 0, NULL, NULL),
(405, '8', 'PROLACTIN', '', 1, 0, NULL, NULL),
(406, '8', 'CORTISOL', '', 1, 0, NULL, NULL),
(407, '8', 'Hb', '', 1, 0, NULL, NULL),
(408, '8', 'Creatinine', '', 1, 0, NULL, NULL),
(409, '8', 'BUN', '', 1, 0, NULL, NULL),
(410, '8', 'TC Total cholesterol', '', 1, 0, NULL, NULL),
(411, '8', 'LDL', '', 1, 0, NULL, NULL),
(412, '8', 'HDL', '', 1, 0, NULL, NULL),
(413, '8', 'VLDL', '', 1, 0, NULL, NULL),
(414, '8', 'Triglycerides', '', 1, 0, NULL, NULL),
(415, '8', 'T3', '', 1, 0, NULL, NULL),
(416, '8', 'T4', '', 1, 0, NULL, NULL),
(417, '8', 'TSH', '', 1, 0, NULL, NULL),
(418, '8', 'Vitamin B12', '', 1, 0, NULL, NULL),
(419, '8', 'Vitamin D3', '', 1, 0, NULL, NULL),
(420, '8', 'Angiography', '', 1, 0, NULL, NULL),
(421, '8', 'E.C.G.', '', 1, 0, NULL, NULL),
(422, '8', '2 D Echo', '', 1, 0, NULL, NULL),
(423, '8', 'X RAY', '', 1, 0, NULL, NULL),
(424, '8', 'KUB Prostate', '', 1, 0, NULL, NULL),
(425, '8', 'CT ', '', 1, 0, NULL, NULL),
(426, '8', 'MRI', '', 1, 0, NULL, NULL),
(427, '8', 'PET', '', 1, 0, NULL, NULL),
(428, '8', 'Mammography', '', 1, 0, NULL, NULL),
(429, '8', 'Follicular Study', '', 1, 0, NULL, NULL),
(430, '8', 'Uric Acid', '', 1, 0, NULL, NULL),
(431, '8', 'Pro Arogyam 1.3', '', 1, 0, NULL, NULL),
(432, '8', 'Arogyam X', '', 1, 0, NULL, NULL),
(433, '8', 'FSH. LH. S. Prolactin', '', 1, 0, NULL, NULL),
(434, '8', 'S. Cortisol', '', 1, 0, NULL, NULL),
(435, '9', 'Craving', '', 1, 0, NULL, NULL),
(436, '9', 'Aversion', '', 1, 0, NULL, NULL),
(437, '9', 'Perspiration', '', 1, 0, NULL, NULL),
(438, '9', 'Fan', '', 1, 0, NULL, NULL),
(439, '9', 'Air condition', '', 1, 0, NULL, NULL),
(440, '9', 'Sun', '', 1, 0, NULL, NULL),
(441, '9', 'Sweet', '', 1, 0, NULL, NULL),
(442, '9', 'Salty', '', 1, 0, NULL, NULL),
(443, '9', 'Salty', '', 1, 0, NULL, NULL),
(444, '9', 'Spicy', '', 1, 0, NULL, NULL),
(445, '9', 'Non veg', '', 1, 0, NULL, NULL),
(446, '9', 'Egg', '', 1, 0, NULL, NULL),
(447, '9', 'Meat', '', 1, 0, NULL, NULL),
(448, '9', 'Fish', '', 1, 0, NULL, NULL),
(449, '9', 'Chicken', '', 1, 0, NULL, NULL),
(450, '9', 'Sugar', '', 1, 0, NULL, NULL),
(451, '9', 'Bitter', '', 1, 0, NULL, NULL),
(452, '9', 'Vegetable', '', 1, 0, NULL, NULL),
(453, '9', 'Green leafy', '', 1, 0, NULL, NULL),
(454, '9', 'Perspitation salty deposit', '', 1, 0, NULL, NULL),
(455, '9', 'Perspiration sour', '', 1, 0, NULL, NULL),
(456, '9', 'Perspiration offensive', '', 1, 0, NULL, NULL),
(457, '9', 'Perspiration yellow', '', 1, 0, NULL, NULL),
(458, '9', 'C2H2', '', 1, 0, NULL, NULL),
(459, '9', 'C2H3', '', 1, 0, NULL, NULL),
(460, '9', 'C3H2', '', 1, 0, NULL, NULL),
(461, '9', 'CH4', '', 1, 0, NULL, NULL),
(462, '9', 'C4H', '', 1, 0, NULL, NULL),
(463, '9', 'Open air', '', 1, 0, NULL, NULL),
(464, '9', 'Draft', '', 1, 0, NULL, NULL),
(465, '9', 'Sun', '', 1, 0, NULL, NULL),
(466, '9', 'Feet uncover', '', 1, 0, NULL, NULL),
(467, '9', 'Feet cover', '', 1, 0, NULL, NULL),
(468, '9', 'Ear cover', '', 1, 0, NULL, NULL),
(469, '9', 'Bath cold', '', 1, 0, NULL, NULL),
(470, '9', 'Bath warm', '', 1, 0, NULL, NULL),
(471, '9', 'Bath seasonal', '', 1, 0, NULL, NULL),
(472, '9', 'Bath hot', '', 1, 0, NULL, NULL),
(473, '9', 'Menses stain', '', 1, 0, NULL, NULL),
(474, '9', 'Menorrhagia', '', 1, 0, NULL, NULL),
(475, '9', 'Oligomenorrhoea', '', 1, 0, NULL, NULL),
(476, '9', 'PMT Breast', '', 1, 0, NULL, NULL),
(477, '9', 'PMT Mood', '', 1, 0, NULL, NULL),
(478, '9', 'PMT Abdomen', '', 1, 0, NULL, NULL),
(479, '9', 'PMT Back', '', 1, 0, NULL, NULL),
(480, '9', 'Leucorrhoea', '', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_symptoms`
--

DROP TABLE IF EXISTS `master_symptoms`;
CREATE TABLE `master_symptoms` (
  `id` int(11) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(35) DEFAULT NULL,
  `added_date` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_symptoms`
--

INSERT INTO `master_symptoms` (`id`, `symptoms`, `added_by`, `status`, `deleted`, `ip`, `added_date`) VALUES
(2, 'Erection morning', '', 1, 0, NULL, NULL),
(3, 'Erection nocturnal', '', 1, 0, NULL, NULL),
(4, 'Erection H S R', '', 1, 0, NULL, NULL),
(5, 'Erection Foreplay', '', 1, 0, NULL, NULL),
(6, 'Erection Penetration', '', 1, 0, NULL, NULL),
(7, 'Erection Condom', '', 1, 0, NULL, NULL),
(8, 'Erection Intercourse', '', 1, 0, NULL, NULL),
(9, 'Erection after ejaculation', '', 1, 0, NULL, NULL),
(10, 'Erection Arousal second time', '', 1, 0, NULL, NULL),
(11, 'Exercise', '', 1, 0, NULL, NULL),
(12, 'Nutrition', '', 1, 0, NULL, NULL),
(13, 'Stress management', '', 1, 0, NULL, NULL),
(14, 'Sleep', '', 1, 0, NULL, NULL),
(15, 'Tobacco', '', 1, 0, NULL, NULL),
(16, 'Smoking', '', 1, 0, NULL, NULL),
(17, 'Alcohol', '', 1, 0, NULL, NULL),
(18, 'Tea', '', 1, 0, NULL, NULL),
(19, 'Coffee', '', 1, 0, NULL, NULL),
(20, 'EOR Premature Ejaculation', '', 1, 0, NULL, NULL),
(21, 'Pain during penetration', '', 1, 0, NULL, NULL),
(22, 'Pain during intercourse', '', 1, 0, NULL, NULL),
(23, 'Phimosis during flaccid', '', 1, 0, NULL, NULL),
(24, 'Phimosis during erection', '', 1, 0, NULL, NULL),
(25, 'Sexual desire', '', 1, 0, NULL, NULL),
(26, 'Arousal', '', 1, 0, NULL, NULL),
(27, 'Weight', '', 1, 0, NULL, NULL),
(28, 'Blood pressure', '', 1, 0, NULL, NULL),
(29, 'HBA1C', '', 1, 0, NULL, NULL),
(30, 'Testosterone', '', 1, 0, NULL, NULL),
(31, 'Pleasure', '', 1, 0, NULL, NULL),
(32, 'Orgasm Climax', '', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_tag`
--

DROP TABLE IF EXISTS `master_tag`;
CREATE TABLE `master_tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_tag`
--

INSERT INTO `master_tag` (`id`, `tag`) VALUES
(1, 'Exercise'),
(2, 'Sleep');

-- --------------------------------------------------------

--
-- Table structure for table `master_testimonials`
--

DROP TABLE IF EXISTS `master_testimonials`;
CREATE TABLE `master_testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `testimonial` text DEFAULT NULL,
  `testimonial_date` date DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_testimonials`
--

INSERT INTO `master_testimonials` (`id`, `name`, `category`, `testimonial`, `testimonial_date`, `active`) VALUES
(1, 'Bhoomi', 'Female Sexual Problems : Vaginismus, Penetration Phobia, Non consummation of marriage', 'I had severe fear and vaginal spasms which didn\'t allow my husband to penetrate even after two and a half year of marriage. For conceiving even I could not allow gynecologist to examine me forget allowing the procedure of artificial insemination. Finally our gynecologist referred us to the sexologist Dr. Hitesh Shah. Sir very patiently understood our problem and equally patiently and gently handled it. With DR. Shah s treatment and guidance gradually I overcame my fear and condition of vaginismus. And within a period of around two months I could allow my husband to penetrate and I was reasonably comfortable. Now I am even able to experience sexual excitement and pleasure. My sincere recommendation to every women and couple to take help from Dr Hitesh Shah to overcome their sexual problem . And let me also add that before we came for treatment, we were so much in despair and lost all hope and felt that it was impossible to overcome this problem. But after seeking help from Dr Shah our ', '2017-08-23', 1),
(2, 'Leena Arora', 'Female Sexual Problems : Penetration Phobia, Vaginismus', 'I was suffering with severe penetration phobia and what my gynec diagnosed as was vaginismus. Inspite of her treatment when things did not improve, my gynec finally referred me to the sexologist Dr Hitesh Shah. Doctor made me very comfortable during interview and could find out the main reason in the background which had resulted in my fear and vaginisms. And subsequent treatment has helped me to overcome my problems and finally we had successful consummation of our marriage. We are deeply indebted to Dr Hitesh Shah.', '2017-09-08', 1),
(3, 'G M', 'Male Sexual Problems: Diabetic erectile dysfunction, Erectile dysfunction, Low sexual desire', 'I was suffering with very low sexual desire and diabetic erectile dysfunction. My wife was passing through terrible frustration. I stopped responding to even 200 mgm of sildenafil and intra penile injections. The best of the andrologists advised me to go for surgery of intra penile implant. But there was risk because of diabetes. Nevertheless we thought of giving a shot to Dr Shah s treatment after getting recommendation from my friend abroad. After five months of regular treatment I have recovered almost 70% of my passion and potency. We have reasonable level and quality of sex life. I am fully confident of further improvement.\r\nWhat I really appreciate is the moral support and encouragement from Dr Shah and his focus on overall health, fitness and also quality of our marital relationship. Must say, a bit pricy but value for money treatment. Also Dr Shah devours ample of time to every patient. Thanks sir forever.\r\n', NULL, 1),
(4, 'Devashish Jakhad', 'Non consummation of Marriage', 'We are married for four years. Due to various tensions and sexual issues me and my wife were not able to do penetrative sex. I was recommended by one of my friend who was also helped by DR Shah for similar problem. Dr Shah nicely explained me and my wife the origin of our difficulties and also how subsequent nervousness complicated our problem. He patiently guided us through out emotional disturbances and all the sexual problems of mine and my wife. In a course of five weeks we were smoothly able to do our first intercourse. We are indebted and grateful to Dr Hitesh Shah for having saved our happiness in marriage.', NULL, 1),
(5, 'Madhur Chauhan', 'Male Sexual Problems: Low sperm count and motility, Insomnia', 'I was suffering with <b>low sperm count and low motility</b>. It did not improve inspire of treatment from my wife\'s gynecologist, urologist and ayurvedic treatment. After doing a course of six months of treatment with Dr Hitesh Shah my sperm count rose significantly from 9 mil to 45 mil and motility to 70 %. Now my wife is pregnant. We are indebted to Dr. Hitesh Shah for giving us such a wonderful treatment. Also we had received guidance for tension free love making during ovulation days which otherwise had become highly mechanical for us.', NULL, 1),
(6, 'SHRUSHTI SHAH', 'Female Sexual Problems : Low sexual desire, Lubrication disorder / Vaginal dryness', 'My problem of <b>low sexual desire</b> and <b>vaginal and dryness</b> was creating lot of problem in our marriage and sex life. My husband was telling me to meet doctor since long time. I was feeling very shy and awkward. Once my husband threatened me (I can not mention here) and somehow I prepared myself for treatment. His friend and his wife were benefited by Dr hitesh shah s treatment. So my husband and myself consulted Dr shah. We sincerely followed his therapy and medicines. Now I feel very good sexual desire and lubrication. I find sex pleasurable and look forward to it. Most of all my husband is also very happy with me.', NULL, 1),
(7, 'Amit Sawant', 'Male Sexual Problems : Paraphimosis', 'During my first attempt at inter course on our first night my forskin got stuck behind and I was in a very painful state. I was confused and embarrassed and kept it like that for another 2 days . Due to that I developed severe swelling and was in a miserable state. Finally I approached Dr Hitesh Shah through this portal. Dr Shah diagnosed it as severe paraphimosis which he said was generally a surgical emergency. But he helped me to cure it without surgery and in another one week my foreskin was made totally elastic. Thanks you very much Dr. Hitesh Shah, now I can have smooth and painfree intercourse.', NULL, 1),
(8, 'Akshay Tunkal', 'Male Sexual Problems : Sexual incompatibility', 'Its been a wonderful experience for us while consulting Dr Shah. Essentially we consulted him for lack of interest and inadequate performance in both of us. It was rightly pointed out by Dr Hitesh Shah that our chemistry has not been really built up and he effectively unearthed the reasons for the same in our sexuality and personality. And subsequently Dr Shah led us on the path of emotional and sensual connect which has resulted in excellent sexual intimacy for both of us. Automatically our interest and performance has improved many fold. Our sex life has got magically transformed.', NULL, 1),
(9, 'Vaibhav Arora', 'Male Sexual Problems : Obsessive Compulsive Neurosis (OCN)', 'I was suffering with obsessive compulsive neurosis and depression. Was on psychiatrists medicines for last 3 years. Was facing lot of side effects and was able to focus on work or enjoy my life. After 4 months of treatment not only I am off all psychiatric medicines and feel fresh and energetic. I am enjoying my work and relations. No more any compulsions or obsessions. Really feel my original self. Dr. Hitesh shahs treatment has helped me tremendously. I am grateful to Dr Shah for putting me back in flow of life.', NULL, 1),
(10, 'Dr.Dimple.P. shah', 'Female Sexual Problems : Penetration Phobia', 'We had difficult and unhappy honeymoon because of my penetration phobia and I used to really resist my husband\'s att3mpt at penetration. Fortunately he was very patient and understanding. On advise of my husband family physician, we consulted DRHitesh Shah soon after coming back from honeymoon. Within ten days time I could overcome my fear and we could have comfortable intercourse. Thanks Dr. Hitesh shah for the excellent treatment and guidance and thanks to my husbands family physician for guiding us to right place.', NULL, 1),
(11, 'John D\'costa', 'Male Sexual Problems : Premature Ejaculation', 'I was suffering with severe premature ejaculation since before my marriage. I could never satisfy my partner. I used to feel inadequate and guilty. After 9 years I decided to go for treatment. Fortunately my friend suggested name of Dr Hitesh Shah. Although he is far from our place we decided to consult him. After four months of his treatment my timings have significantly improved and I can see my wife sexually satisfied and happy. I wish I had come early, to solve my problem, to consult Dr Shah.', NULL, 1),
(12, 'Reema Mehta', 'Female Sexual Problems : Low sexual desire. Lubrication disorder / vaginal dryness', 'I have had very low sexual desire and vaginal dryness. Never responded to husbands need. Used to shiver and get panicky on hearing word sex. Impact of earlier sex abuse experience in teenage had affected my mind a Lt. Because of me my husband life was becoming hell. Finally we came to Dr Hitesh Shah for help. His Homeopathic medicines brought about healing to my sex abuse trauma. And I started slowly becoming comfortable to husbands touch. Progressively my desire started increasing. So also I started experiencing wetness. After 4 months of medicines and counselling and behaviour therapy now we have regular and satisfactory sex life.', NULL, 1),
(13, 'Raj Malhotra', 'Male Sexual Problems: Premature ejaculation', 'Since beginning of my marriage I have been having severe premature ejaculation and could never satisfy my wife. I used to feel very miserable and low in self esteem. And used to feel guilty for not been able to sexually satisfy my wife. Various over the counter medicines and sprays and herbal medicines helped me only temporarily. Dr. Hitesh Shah s treatment has helped me enhance my timings manyfold. My wife is also fully satisfied. We sincerely thank Dr Hitesh Shah. Since fifteen days I am off medicines but improvement is well maintained. And I had no side effects whatsoever.', NULL, 1),
(14, 'Heena Chopra', 'Female Sexual Problems : Narrow vaginal opening. Tough Hymen. Penetration phobia. Non consummation of marriage.', 'I and my husband could not do intercourse because of my problem of narrow vaginal opening and tough hymen. The resulting pain had also caused severe phobia in me. It was already 2 years of marriage and we could not consummate and both us feeling very frustrated. Although we love each other we started picking arguments and fights lately. But after receiving step wise guidance and therapy from Dr Hitesh Shah I started improving on all fronts and finally we could comfortably consummate our marriage, without pain. Thanks Dr Hitesh Shah for your expert guidance and also saving me from gynec surgery.', NULL, 1),
(15, 'Bhavin Patel', 'Male Sexual Problems : Erectile Dysfunction', 'It has been a pleasant surprise after visiting India for my treatment of sexual dysfunction. Andrologist in US has been treating my erectile dysfunction with Viagra and intra penile injections but effect would last only temporarily. And over a period of time my erectile dysfunction had only worsened. After getting recommendation from my friend in UK who had taken online treatment from Dr Hitesh Shah and had successfully overcome his sexual problem I decided to give it a try on my next visit to India. After meeting Dr Shah I could actually understand the basis of my problem. And he treated the root causes and within couple of months I have regained my normal erection. And now without any medicines I have normal and fulfilling sex life.', NULL, 1),
(16, 'Darshit', 'Male Sexual Problems : Non consummation of marriage\r\nFemale Sexual Problem: Penetration phobia. Non consummation of marriage.\r\n', 'We are recently married and faced lot of difficulty in starting our sex life. Our honeymoon was totally spoiled. I used to feel very nervous and loose erection. Also we did not know the right position to insert. On top of it my wife had severe penetration phobia which would make me more nervous. Both of us were in highly frustrated state. We immediately consulted Dr Hitesh Shah after returning back to India from our honeymoon. Doctor very systematically evaluated our problem and gave us the right guidance and therapy and within a span of ten days we could smoothy do our first intercourse. And we have absolutely perfect sex life. Hope we had met the doctor before going to honeymoon. I strongly recommend to all young couples to meet Dr Hitesh Shah to sort out their sex issue or meet Dr for prevention and education.', NULL, 1),
(17, 'Kaushik mehta', 'Male Sexual Problems : Non consummation of marriage. Phimosis. Erectile dysfunction.\r\nFemale Sexual Problem: Penetration phobia. Non consummation of marriage. Narrow vaginal opening.\r\n', 'Our marriage was unconsumated after 3 years. I had multiple problems like phimosis and erectile dysfunction due to nervousness. I was very ignorant about position as well. On top of it my wife had severe penetration phobia and narrow vaginal opening. We were totally frustrated and depressed. On top of it there was family pressure to conceive. It was when Dr Hitesh Shah turned out to be our saviour. Just within 1 1\\2 month of right guidance therapy and medication by friendly and caring counsellor Dr Hitesh Shah, we could consummate our marriage and now we have regular sex life without any fear and feel happily enjoy our intimacy.', NULL, 1),
(18, 'Bhakti Mehta', 'Female Sexual Problems : Vaginal Laxity', 'I have been experiencing vaginal laxity after my forcep delivery and lack of adequate suturing by my gyneac. This was not allowing adequate friction and pleasure whenever we made love. After Dr Hitesh Shah s treatment and guidance it has really improved tone of my vaginal walls and my husband and I find our intimate moments much more pleasurable.', NULL, 1),
(19, 'Bharat patil', 'Male Sexual Problems : Erectile Dysfunction.', 'I was suffering with severe erectile dysfunction. My wife had threatened to quit. I was feeling very hopeless and helpless. Add to it I got addicted to alcohol due to my depression. Dr Shah has been saviour. He brought me out of my depression and alcohol and my erection problem is almost 90 % solved. I am able to face my wife. Quite often we have started enjoying our sex life. Thank you Dr Hitesh shah from bottom of my heart!', NULL, 1),
(20, 'Dinesh Jain', 'Male Sexual Problems : Premature Ejaculation', 'I was badly suffering with severe premature ejaculation. I used to ejaculate even during foreplay. My wife was very unhappy and I was burdened by feeling of inadequacy and guilt. Natural homeopathic remedies by Dr shah and certain novel technique has really help me develop control over my fast sexual excitement and I can prolong my timings. Sometimes my wife reaches even more than one orgasm. Thanks a million to DR Hitesh Shah', NULL, 1),
(21, 'S. S', 'Female Sexual Problems : Low sexual desire. Vaginal dryness.', 'My problem of low sexual desire and vaginal and dryness was creating lot of problem in our marriage and sex life. My husband was telling me to meet doctor since long time. I was feeling very shy and awkward. Once my husband threatened me ( I can not mention here) and somehow I prepared myself for treatment. His friend and his wife were benefited by Dr hitesh shah s treatment. So my husband and myself consulted Dr shah. We sincerely followed his therapy and medicines. Now I feel very good sexual desire and lubrication. I find sex pleasurable and look forward to it. Most of all my husband is also very happy with me.', NULL, 1),
(22, 'radheshyam gupta', 'Male Sexual Problems :  Low sexual desire. Depression. Insomnia', 'I was suffering with depression sleep problem and very low sexual desire. With lot of anticipation I came to consult Dr Hitesh Shah. To my pleasant surprise he is very down to earth friendly and supportive doctor. Not only that after meeting him I started feeling optimistic and enthusiastic. 6 months of counselling and homeopathy treatment has helped me over come my problems of depression sleep problem and low sexual desire. Thanks a lot to Dr Hitesh Shah.', NULL, 1),
(23, 'Pawan Sampat', 'Male Sexual Problems : Performance anxiety. Erectile dysfunction', 'I was suffering with severe performance anxiety and hence could not do intercourse even after two years of marriage. Also I would easily loose my erection due to anxiety and completely loose my confidence. After Dr Hitesh Shahs treatment I could successfully sustain my erection and do penetration. Now I am able to enjoy normal sexlife without any treatment whatsoever.', NULL, 1),
(24, 'Vijay Naik', 'Male Sexual Problems : Pornography addiction. Sexual addiction. Compulsive masturbation.', 'I am 49 year old and was habituated to pornography on internet and masturbation for last 3 years after my wife lost her interest in sex due to menopause. Dr Hitesh Shah has helped me to come out not only from my addiction of porn but his treatment has helped my wife to come out of her depression as well and she also feels normal desire like earlier.', NULL, 1),
(25, 'Simran Choksi', 'Female Sexual Problems : High arousal threshold. Vibrator  addiction', 'Because of late marriage I was addicted to using vibrator and destress myself from sexual tension. But then I discovered that I was not at all enjoying any pleasure during intercourse. Finally my husband and I consulted Dr Hitesh Shah. With his treatment I have started experiencing normal erotic sensations and pleasure during love making. All my vaginal laxity has improved markedly.', NULL, 1),
(26, 'Amit Tiwari', 'Male Sexual Problems : Premature ejaculation', 'I have been suffering from premature ejaculation since my age of 24 years and even at age of 34 I was not feeling confident to marry. Medicines like dapoxetine, paroxetine and clonil helped me only temporarily . Also they often gave me side effects. But with Dr Hitesh Shah s treatment of homeopathic medicines and some unique technique now my time has increased immensely and I feel confident to marry. I really appreciate sir your expertise and moral support.', NULL, 1),
(27, 'Kokilaben p gopani', 'Female Sexual Problems  :Low sexual desire. Vaginal dryness.', 'After removal of uterus my sex desire had vanished and also had severe vaginal dryness but after medication by Dr Hitesh Shah again I have started feeling the sexual desire and excitement. My vaginal lubrication also has considerably improved. Now I feel pleasure and not pain during intercourse. I strongly suggest DR Hitesh Shahs treatment for all middle age women like me.', NULL, 1),
(28, 'Ulhas K Sawant', 'Male Sexual Problems', 'My problem of erectile dysfunction and premature ejaculation which I was suffering since last more than 3 years and was only better temporarily with allopathic medicines has completely improved with Dr Hitesh Shah s homeopathy treatment and feel new jest in my sex and marriage life.', NULL, 1),
(29, 'Vipul Patel', 'Male Sexual Problems : Premature Ejaculation.', 'Very nice experience. My problem of premature ejaculation has beautifully improved and I have a rocking sex life now. My wife is exceedingly happy with this transformation in my sexual ability in just lat 3 months. Thanks a million to Dr. Hitesh Shah and his side effects free natural therapy.', NULL, 1),
(30, 'D M S', 'Male Sexual Problems, Erectile dysfunction', 'My erectile dysfunction due to hypertension and its medicine has been successfully treated by Dr HiteshShahs treatment and guidance. We strongly recommend his treatment.', NULL, 1),
(31, 'N. L. Singh', 'Male Sexual Problems : Pornography addiction. Compulsive Masturbation.', 'Due to my addiction to porn and masturbation I was not getting normal exciement and erection. Dr Shana s treatment has brought back my sexual responsivenes and I feel confident for marriage. Thanks Dr Hitesh Shah.', NULL, 1),
(32, 'Rekha Kapoor', 'Female Sexual problem: Penetration phobia. Vaginismus.', 'My problem of penetration phobia and vaginismus which was preventing my intercourse has been effectively treated by Dr Hitesh Shah in a very short period. I and my husband can now enjoy our complete intimacy after many years of marriage. We are immensely grateful to Dr Hitesh Shah.', NULL, 1),
(33, 'Sonal pramod shah', 'Hypothyroid', 'I have been having wonderful experience while I am recovering from my hypothyroidism and overweight in a very smooth and pleasant manner. The experience at Purnam Health Centre is great and so also with so friendly and caring Dr. Hitesh Shah who is source of inspiration and hope. My depression went away within first week of treatment. I strongly recommend this natural treatments with Dr HItesh Shah.', NULL, 1),
(34, 'Asish Karya', 'Male sexual problem: Depression. Low sexual desire. Erectile dysfunction.', 'In today\'s time.very difficult to find doctor like you.who is very very good human being.everyone is just running after money and have no time or feelings for others.all I can say is god bless him and give him more and more opportunity to serve the needy people.thank you very much.', NULL, 1),
(35, 'Amit Sawant', 'Male Sexual Problems : Paraphimosis', 'During my first attempt at inter course on our first night my forsaking got stuck behind and I was in a very painful state. I was confused and embarrassed and kept it like that for another 2 days . Due to that I developed severe swelling and was in a miserable state. Finally I approached Dr Hitesh Shah through this portal. Dr Shah diagnosed it as severe paraphimosis which he said was generally a surgical emergency. But he helped me to cure it without surgery and in another one week my foreskin was made totally elastic. Thanks you very much Dr. Hitesh Shah, now I can have smooth and painfree intercourse.', NULL, 1),
(36, 'Akshay Tunkal', 'Male Sexual Problems', 'Its been a wonderful experience for us while consulting Dr Shah. Essentially we consulted him for lack of interest and inadequate performance in both of us. It was rightly pointed out by Dr Hitesh Shah that our chemistry has not been really built up and he effectively unearthed the reasons for the same in our sexuality and personality. And subsequently Dr Shah led us on the path of emotional and sensual connect which has resulted in excellent sexual intimacy for both of us. Automatically our interest and performance has improved many fold. Our sex life has got magically transformed.', NULL, 1),
(37, 'Tarun Savla', 'Erectile dysfunction', 'My erection problem due to diabetes for last one and a half year has been completely cured by Dr Hitesh Shah s homeo treatment and I don\'t have to use siledenafil anymore. Also my general energy level and libido has improved', NULL, 1),
(38, 'Parmar Ronak', 'Male Sexual Problems : Performance anxiety. Erectile dysfunction.', 'Relieved! Free of my sexual problem and performance anxiety. Dr. Hitesh Shah \'s treatment has solved my long standing erectile dysfunction and accompanying performance anxiety. Thank you so much Doctor Shah!', NULL, 1),
(39, 'Ashmi pradeep bhansali', 'Female Sexual Problems, Sexual addiction. Compulsive masturbation.\r\n', 'My problem of compulsive masturbation and obsessive compulsive neurosis has been completely cured with Dr Hitesh Shah s Homeopathy treatment. My sadness and depression also has completely disappeared. Thanks a not to Dr Hitesh Shah', NULL, 1),
(40, 'Padmaja Kant Naik', 'Female Sexual Problems: Lubrication disorder. Vaginal dryness.', 'My problem of vaginal dryness and pain during intercourse have got completely cured by Dr Hitesh Shah s homeopathy treatment. Mentally also I feel at peace and getting good sleep now.', NULL, 1),
(41, 'Touhidansar shaikh', 'Erectile dysfunction', 'Dr Hitesh Shah treatment has helped me to overcome my erectilr dysfunction without any side effects whatsoever. He is a very friendly doctor and have been very supportive for all my concerns and anxiety. Thank you doctor.', NULL, 1),
(42, 'Verified Patient', 'Erection Problems', 'I was about to get married after two months but was suffering with low desire and erectile dysfunction. I was on treatment for hair fall and nasal allergy. Dr Shah stopped all my ongoing treatments. He gave me Homeopathic medicines which helped to recover not only the sexual desire and erection but also I completely overcame my allergy and hair all. I could comfortably sail through the first night and honeymoon. Thanks Dr Hitesh Shah. I strongly recommend for any ones pre marital sexual concern.', NULL, 1),
(43, 'User', 'Erection Problems', 'Doctor is very nice. He listens very carefully. Overall I am satisfied during the first visit. Hoping for the best results.', NULL, 1),
(44, 'Pawan Singhal', 'Stress', 'Excellent Dr did understand our concern I am happy . Recommend to all. Good understanding. Is very understanding and experienced expert!', NULL, 1),
(45, 'Jinesh Bhutta', 'Stress', 'Had an overall pleasant experience. The discussion was very frank and open. The doctor was very patient in my assessment and was patient and receptive.', NULL, 1),
(46, 'Uday shirodkar', 'Marriage Counselling', 'I was satisfied with his attentiveness and response to my queries. Thank you sir.am looking forward to a better life in future now on....', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_testimonials_handwritten`
--

DROP TABLE IF EXISTS `master_testimonials_handwritten`;
CREATE TABLE `master_testimonials_handwritten` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `testimonial_date` date DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_token`
--

DROP TABLE IF EXISTS `master_token`;
CREATE TABLE `master_token` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(35) NOT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_token`
--

INSERT INTO `master_token` (`id`, `token`, `user_id`, `ip`, `created`) VALUES
(2, '0de1b8f6842fac8cbfffc7b5445e43', 1, '', '2017-11-02'),
(3, '9ff5a436365208816658b1c18fe9d5', 1, '', '2017-11-02'),
(4, '1c12fc09d7b1014cd0a6ed969cbeb2', 1, '', '2017-11-02'),
(5, 'c220fbc36916de807f40b6394a0cdc', 1, '', '2017-11-02'),
(6, 'bfc93bdd860fc932851ede1653764b', 3, '', '2017-11-02'),
(7, '67714083e52a27e178996ef1ad7894', 3, '', '2017-11-02'),
(8, 'a62427f44608041b55a3d29109dfa9', 3, '', '2017-11-02'),
(9, 'ec7be8bc26c22bd25db79fcddf2304', 3, '', '2017-11-02'),
(10, '696d3c5cc86861f8a38f32c7f3acf2', 3, '', '2017-11-02'),
(11, 'a5a7eb448c6850a65638a5a7bf8aa6', 3, '', '2017-11-02'),
(12, '33bfa6ddea6875da6731d6b9c2a1b1', 3, '', '2017-11-02'),
(13, '41efa5b8629b58dd120f562f430039', 3, '', '2017-11-03'),
(14, '2791008f6ce29e70c7a969af27c54f', 3, '', '2017-11-03'),
(15, '61bf0970e52a26759bf0868b8c8e16', 3, '', '2017-11-03'),
(16, '971e772f8d928019effc78a0a05a53', 3, '', '2017-11-03'),
(17, '6b0e7a17ae344b2710ae8c6bf6fca4', 3, '', '2017-11-03'),
(18, 'fb735979adbd5e2297fbde3dff3b74', 3, '', '2017-11-03'),
(19, '64c23a9b3bb0d7422267cb7929825f', 3, '', '2017-11-03'),
(20, '94884a1ae8c116a5759b08290f78e2', 3, '', '2017-11-03'),
(21, 'e36f1d96dc3fc27e3f20293163ebdc', 3, '', '2017-11-03'),
(22, '7aebfcb6251f696e035b5289dfd7fc', 1, '', '2017-11-03'),
(23, '0305b131497736b4e37778c41236ab', 1, '', '2017-11-03'),
(24, 'ea1a295429c317d2d8da56c2e87825', 1, '', '2017-11-03'),
(25, 'daa8874d5363cf102c391fbb476f39', 1, '', '2017-11-03'),
(26, 'c730485f01f0c265d52a3999a3eb09', 1, '', '2017-11-03'),
(27, 'be1a078412f54fa4741248c4094d8f', 3, '', '2017-11-03'),
(28, '68298ae6c1d0fc3ff5d78610c06122', 3, '', '2017-11-05'),
(29, '7e858f202253954a4f16ba68d3c640', 3, '', '2017-11-05'),
(30, '1fc1aee99b69b91e2b006814c16dc7', 3, '', '2017-11-05'),
(31, '690d77b4eada5cd0998f17f3ee5d21', 3, '', '2017-11-05'),
(32, '654a98fda7445d7d9d607bf1494bd3', 3, '', '2017-11-06'),
(33, '42492120efe334f0099690041665ee', 3, '', '2017-11-06'),
(34, '420dad4fc66dbda353e69b7eae8e83', 3, '', '2017-11-08'),
(35, 'b3137aeff3cfa822f0c29dde62f16f', 24, '', '2017-11-11'),
(36, 'b28acec5fee70e800466f84bb0c28b', 25, '', '2017-11-11'),
(37, '7707a6793469d645de3fbd48413a18', 22, '', '2017-11-13'),
(38, '2ebec61a3e188d312949bd6085b29c', 27, '', '2017-11-13'),
(39, 'a36abe4cddd09a8c2cbffad49c6d7b', 22, '', '2017-11-13'),
(40, 'dd0a4107be58c1a0cc3a2d7e7bff8f', 33, '', '2017-11-20'),
(41, '3dcdd2d4a8f9afe66f6a693eff289a', 39, '', '2017-12-09'),
(42, '8abb061185fab8812b21450f5be7a7', 39, '', '2017-12-09'),
(43, '8ee3ad2df61824ae0ae308ad67f509', 3, '', '2018-01-11'),
(44, '9ba032bb041e8fe3ec228d4184143f', 3, '', '2018-01-11'),
(45, '93f40a13e777d7291a6d5cc6963abb', 41, '', '2018-01-11'),
(46, 'e656080bf56733d5cd9da99dfbac2f', 41, '', '2018-01-12'),
(47, '10ee0e4ab37c94ff16d101be2ef2b2', 41, '', '2018-01-12'),
(48, '1e53c516232d140a60a08ddd5866ce', 41, '', '2018-01-12'),
(49, 'be6f78ebbe7a9eb98cb2cef60c6701', 41, '', '2018-01-12'),
(50, '0ff156fc6634d99c581667e8b30079', 41, '', '2018-01-12'),
(51, '8dcf757d7235afcdc36ba7642d38e1', 41, '', '2018-01-12'),
(52, 'be3545d1cb27e1e51496caf3fd1803', 41, '', '2018-01-12'),
(53, '9465e68e09d38d71b6e307089ad02d', 41, '', '2018-01-12'),
(54, '2c7afede8ca521b1b8981fbc90e9ee', 41, '', '2018-01-16'),
(55, '2089454d5a378f46a31d385ca70de0', 41, '', '2018-01-16'),
(56, '580a33ce6c1ddf6ce783adaccc1a41', 41, '', '2018-01-18'),
(57, '5570e946dabb515c23dccb5010a638', 3, '', '2018-01-23'),
(58, '34649e4fe182d425c161f981aae1e2', 3, '', '2018-02-14'),
(59, 'b0951e849108462e42c4ff29e76b7a', 54, '', '2018-02-17'),
(60, 'ae814b2e5da011ec3ca9363aa23c99', 56, '', '2018-02-27'),
(61, 'b90f956744762a9efaca981549859d', 57, '', '2018-05-05'),
(62, '2f231760a3e843cd5d19457604bc3c', 59, '', '2018-06-16'),
(63, '1f8c7e80d0aaffdcdf33d2b5de823b', 62, '', '2018-08-10'),
(64, '7a8d1f24b9344f8ffcb4b267088a05', 66, '', '2018-11-11'),
(65, '3d19e142d14ef45ca82bdf01985aad', 67, '', '2018-11-15'),
(66, 'ad16ba4a72a760fe6e62c8f25e9a50', 72, '', '2019-01-23'),
(67, '509964290e1bc6658d355f82deaf50', 70, '', '2019-02-23'),
(68, 'b37946f3ea0c663ae584368164e4d8', 91, '', '2019-07-11'),
(69, 'b536dee344a5b07c6b94a74bb479f9', 95, '', '2019-10-02'),
(70, '2606119dd7030a9b7309289a48fad9', 99, '', '2019-11-29'),
(71, 'a226fcbbd50f3279d063faee22a4c7', 112, '', '2020-03-01'),
(72, '4422d5fc3d1618059819b64da1cbe1', 120, '', '2020-06-17'),
(73, '33c7516ebc36b218f3cc2814867f40', 120, '', '2020-06-18'),
(74, '11b67a6b29d9639d86a4f2b03f179d', 130, '', '2020-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

DROP TABLE IF EXISTS `master_user`;
CREATE TABLE `master_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` char(10) NOT NULL,
  `age` varchar(15) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `country` varchar(55) DEFAULT NULL,
  `state` varchar(55) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip` varchar(30) NOT NULL,
  `device-id` varchar(55) DEFAULT NULL,
  `fcm-id` varchar(55) DEFAULT NULL,
  `client` varchar(10) DEFAULT 'web',
  `device_type` varchar(55) NOT NULL,
  `os-name` varchar(55) DEFAULT NULL,
  `os-version` varchar(55) DEFAULT NULL,
  `password` varchar(355) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`id`, `first_name`, `middle_name`, `last_name`, `name`, `email`, `contact`, `gender`, `age`, `marital_status`, `country`, `state`, `city`, `pincode`, `address`, `reg_date`, `ip`, `device-id`, `fcm-id`, `client`, `device_type`, `os-name`, `os-version`, `password`, `activated`) VALUES
(1, 'Arshad', '', 'Shaikh', 'S M Arshad', 'smarshad86@gmail.com', '9004865982', 'male', '15', 'Never Married', 'India', 'Maharshtra', 'Mumbai', 401104, 'dsad', '2017-07-21 16:36:44', '183.87.55.198', NULL, NULL, 'web', '', NULL, NULL, 'bac4b174cf87774965b815f6226b5e2bc5002fc509e1310a1f7294765988bab9f38940f309e369770b6614a2cd6137b2cdff255f18603c915f1693cf0fa96c8ahv2aIm66MY8V0lEnW1GuSnz283TeP4ZArUd55nwxySM=', 1),
(2, '', '', '', 'UKU', 'ABC@GMAIL.COM', '9869035111', 'male', '15', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-08-08 10:37:50', '27.5.118.8', NULL, NULL, 'web', '', NULL, NULL, '0057c150b2ea871422f1016624135a198c20ef70658e81216a9ac5564a76ce96f27b06f5ae009196151333e8613facd92c47bfc38f3514df5fb0b4b616f42cb3B/Ct8V1P930DC4okuUwfK6/E/7Pb+vuAFnQgghu0WQs=', 1),
(3, 'Mufaddal', 'B', 'Haji', 'mufaddal haji', 'muffadal.haji@gmail.com', '9820686479', 'Male', '42', 'Married', 'India', 'Maharashtra', 'Mumbai', 400104, 'Goregaon', '2017-10-30 09:36:08', '182.70.118.74', NULL, NULL, 'web', '', NULL, NULL, 'bac4b174cf87774965b815f6226b5e2bc5002fc509e1310a1f7294765988bab9f38940f309e369770b6614a2cd6137b2cdff255f18603c915f1693cf0fa96c8ahv2aIm66MY8V0lEnW1GuSnz283TeP4ZArUd55nwxySM=', 1),
(4, '', '', '', 'arshad', 'sms@gmail.com', '7894561230', 'Male', '15', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2017-11-01 14:08:30', '182.70.118.74', NULL, NULL, 'web', '', NULL, NULL, 'e015b34de48540a248fb95cedc7ac59d735c7aa428c9e461e5bce9dff9a150c46f4fab50aacc460ed25f16ee51a0e93a2849c514a0652eeb49b521dbe97f9658VhYCflEbgUVymv9TjXeUa9sqy+gp9wpMtDTjuUQvPPU=', 1),
(5, '', '', '', 'ars', 'das@gmail.com', '8282828282', 'Male', '15', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2017-11-01 15:50:50', '182.70.118.74', NULL, NULL, 'web', '', NULL, NULL, '7da0236c7acd1ca7ced5f090716e2b8a06cbfb716bed7215fc4687c348ec9d62f436f330e59eed5d95a4557338b3e8643ad0cb524def6d641b1981d3543ff1c1YSH27/E5ihW1gCXqAJtN1Zjlhw6/E0mecPkm9bDwH1w=', 1),
(6, '', '', '', 'dasdasd', 'dasd@gmail.com', '9769026201', 'Female', '55', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2017-11-01 15:51:52', '182.70.118.74', NULL, NULL, 'web', '', NULL, NULL, 'ac9a11f984bec8fecb2c88a8b9c2b36db38e1f0cada80084324428143fdea14b73a3310faa7573ef897dbfed35689da2b31b6c876d6b6c6ca29e04c87770035cwQQmo8Khlbn7Lwg3pqo4AIuStfNk/bcHOz8NIUYkuuo=', 1),
(7, '', '', '', 'dasd', 'ss@gmail.co.in', '8286828285', 'Male', '55', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2017-11-01 15:53:03', '182.70.118.74', NULL, NULL, 'web', '', NULL, NULL, '705f02435edaaf93e89187b271e2e2fd95b801076dbe6255d99cf50f416500ff3b04564e5e28f70ee3c96ad26cb8ccb6980ab74443a4a4f091da2bca3a584c2cwHq25pjj4K2rZ251d9KKHxXgx1NERvoqx9SW0Mkvnzk=', 1),
(8, '', '', '', 'a', 'a@gmail.com', '1111111111', 'mAle', '15', 'un', NULL, NULL, NULL, NULL, NULL, '2017-11-02 17:52:14', '103.238.104.104', NULL, NULL, 'web', '', NULL, NULL, '1c27e3ce2b6ee18e37946818edcccefb45c842864551ecc5bc7c03302467ebc975e98a1115648b642a2e7832753863aefcb280c5808324fa0eb9871db90c5233yfmKRS3wnegYsRgC12RNpVQVAl5WQlksGVLRK9/ej7M=', 1),
(9, '', '', '', 'Megha', 'megha.thinktanker@gmail.com', '9537871212', 'Female', '24', 'Unmarried', NULL, NULL, NULL, NULL, NULL, '2017-11-06 05:19:43', '103.238.104.215', NULL, NULL, 'web', '', NULL, NULL, '20f0be262780c31cd20171469e5c60d8ea4810e56acb43a2f6784d1affa7e55c72f40df3910d8000e7a872b90718fa1a21d460dde36e6c3984b97eb006e26712Olo3tTNyCXdSvsSK0M0wjngqZCH4BC2e/1/hlFWLBS8=', 1),
(11, '', '', '', 'Mufaddal  Haji', 'haji@badricomputers.co.in', '9920686479', 'Male', '45', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-06 08:36:18', '182.70.118.74', NULL, NULL, 'web', '', NULL, NULL, 'df0703ec74b5938f7b1bdba1269bc23dfcfc0bad6e13a31f7fedd9c55ece7d471fef4ca336bfdb43ac6106ddbdd10281762e446eba774ae9e9a1ef0a573883a5A2oqO0Tm+WiypmyurYYmG+liMBYteExRMlJ/vnVQRSM=', 1),
(12, '', '', '', 'Aar', 'smss@yoo.com', '7777744777', 'Male', '111', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2017-11-07 12:29:59', '182.70.118.74', NULL, NULL, 'web', '', NULL, NULL, 'b5802bf7250bbcbef7b231d62f4f3e82b3ce6e378ff1bae416eedf7f3a67af9393bd6a29e8e95a64699f528ab7608a70ab8880d3facc3141b694abed3597fdf0NAErgzHHP2xsfRPHIvaWyJ669nu7x5lq878PKSYdmFA=', 1),
(13, '', '', '', 'Mufaddal  Haji', 'haji@badromputers.co.in', '9820699479', 'Male', '45', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-07 12:49:22', '182.70.118.74', NULL, NULL, 'web', '', NULL, NULL, 'ace8cc718181cda5b14b1f1b441f835102c543a4f50190d13b694c7ca0431c78ab0c31e9b5a057a8bb073540c5e4b7e2c200361cf06368515f2b41dc4dac800fDrVWeSe7asvN1dEVx6e5wEx5atYNccIKmkjI1f/5jB8=', 1),
(14, '', '', '', 'Mufaddal  Haji', 'svpatel.vsn@gmail.com', '9033591989', 'Male', '45', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-08 05:28:05', '103.238.104.124', NULL, NULL, 'web', '', NULL, NULL, '44e64e0b7c4e88b97454b7073d6b39fade659674cb2dd7183a94dad77d1d9f790c4e8f1cadd443797d4f4676ec106570fca5ff7af38dc825b62ed10e13d08cc0gL0nxTmIufD5Bb4jhITtHAky0VP+4m1yYIhZTRfjcgM=', 1),
(15, '', '', '', 'megha', 'megha1.thinktanker@gmail.com', '9537871313', 'Female', '24', 'Engaged', NULL, NULL, NULL, NULL, NULL, '2017-11-08 06:53:49', '103.238.104.124', NULL, NULL, 'web', '', NULL, NULL, 'da25c470cf5c6f20b3d417c6463c0e5e9df18ca02419ae4ba07d01ab51684258810bc69820ad7bf697ab6d941dcd4586f392bca6bc8e5234c4e0e9a03822fc61S1OVblmIl9QBA8iHXtiCNoNlZilIPuTgCXd1R7trel0=', 1),
(16, '', '', '', 'sanket patel', 'svpatel1.vsn@gmail.com', '9033591988', 'Male', '27', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-08 17:52:25', '49.34.66.242', NULL, NULL, 'web', '', NULL, NULL, 'e69d487a3138b7bc89de0ae9c1fda180538bf59a39807820a2313cc2b99cc2f8d9e14fd2871f4332ebf1f1e80322a2ead6cc130d3c08419d83de2bd0413b70dckZ+pKhfjM3c3ZDJgpsXh2Uqc6lZ6TYU/UBjiEbklhag=', 1),
(17, '', '', '', 'adad', 'dasdas@mdmd.co', '6666666666', 'Male', '23', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2017-11-08 18:10:15', '49.34.144.80', NULL, NULL, 'web', '', NULL, NULL, '23bfb81b89155b74611aeb22ee2c394026ec4035d9de2c681d30bf200d35261cf8ff12b5a1583b15d7183c2c9d4a808de540025e1046ab67db23a9d38713a418ca3JssS7RSJ0tS9qBXqaW7s/77tPR69d/T3LdgqBeRM=', 1),
(18, '', '', '', 'Rajan Rawal', 'rajan.y.rawal@gmail.com', '9033155300', 'Male', '32', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-09 03:15:04', '49.34.86.96', NULL, NULL, 'web', '', NULL, NULL, 'e7a0bf766d4a3fb328351d88f4eee6b9fdd527be439d4045b224bba4429a5f201a4be9d51c0debd57eda5d15c2c1b9bb8059db4caed96461bd9c18cec1d0e2c4X96e8nS+YgFrn4aeXAwGfkNBGEnzBqXeX0wQHbKnlSg=', 1),
(19, '', '', '', 'vzjsks', 'hsbs@nsnsn.hsj', '6454876835', 'Male', '25', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2017-11-09 05:57:48', '49.34.99.116', NULL, NULL, 'web', '', NULL, NULL, 'e4df1e6745af094d730a1cf3cc87963c504818292869c2586618918b75688cdd670cc50c79f95c88b4a9dd1d9575f3d568e733aebd3f86c440036a108efb9ba3byPgoFONH+/ongtdmvD/NDA+EamwYSg+QYX3R3ZY4iQ=', 1),
(20, '', '', '', 'Vatsal Raval', 'vatsal246@yahoo.co.in', '7802911853', 'Male', '25', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2017-11-09 19:00:26', '117.204.157.228', NULL, NULL, 'web', '', NULL, NULL, 'aec334d95fda576cc1e318c706ee424860f310117e5444959448dcc61b69f5e14f620363178f1593dd983d3cdb5cb93cb21c7b35cd7b6ab761fe609d199860972w5QpqYpCOO0qYkzfXrgYOFo9VqqLnlM5V2Cym79ZHc=', 1),
(21, '', '', '', 'vatsal', 'vatsraval286@gmail.com', '8849255251', 'Male', '25', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2017-11-09 19:04:31', '117.204.157.228', NULL, NULL, 'web', '', NULL, NULL, '979acbd2801c94c50f863e470ff82da4babef676818d716bae4a28ce45e6d12214c81ecfd4832c845d52f980b6cfd076cf6590a2e666c6e0eb7b406bf327d160gbqYLJj0DqmlGrOieDZ5Auo7bDVUCsAolElEhnm14ls=', 1),
(22, '', '', '', 'Gaurav Gilani', 'gaurav.gilani147@gmail.com', '9998543595', 'Male', '27', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2017-11-10 04:38:33', '49.34.106.18', NULL, NULL, 'web', '', NULL, NULL, '05434a366387c2b0445e2c455ede811c0ea8d67baa64f2f0eee705f32ab013e9a72bcf7d30765b05862487ef3000b20dba4f4c933c64cf3365b07a36dc2adab2etec5LgpUlK7CosYYf4QbVWpoyDNbszqoYAuzAvltYY=', 1),
(23, '', '', '', 'Ashish Shah', 'ashishshah1975@yahoo.co.in', '0507987298', 'Male', '42', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-10 12:54:02', '5.31.244.80', NULL, NULL, 'web', '', NULL, NULL, '48b24ff443ba192536a2a4bc435099015cf4ec43e1d585cd3b7755637894aeec24970a3519ae03410f728a101220d03e899876ae2b560199a137a18973688999XG9oK/t6D920oPb7xH2dRh4mQaz7b9T18kkKxgyGJlM=', 1),
(24, '', '', '', 'bharat patil', 'bharatpatil851@gmail.com', '9822392149', 'Male', '42', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-11 10:55:31', '49.33.17.31', NULL, NULL, 'web', '', NULL, NULL, '3f14a971f5c901344aca4da13850e8fa12da6388deec62195041d527fef2359577a2101a886c48e5f22f16ed418ef90d73bbcb625a5b9277aabfa71380462308on9SclDNxggSYzWrPzRODIz24pQCeC0wuERgz9ggn8k=', 1),
(25, '', '', '', 'sreeraj eyyani', 'sreeraje738@gmail.com', '0097155656', 'Male', '26', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2017-11-11 15:28:29', '5.38.28.212', NULL, NULL, 'web', '', NULL, NULL, 'c1896c97442bb8580df04ddddd68339613340abde648c1251f9e39202fa0bd4bb4cb7f3f1fe22de6df641814e36ff62855c819933713e96a282612be9413a2ca889egW4D2hPfBnNAx+E1QsonLZQbYcfPcQDlecVV8UU=', 1),
(26, '', '', '', 'Mariya Haji', 'mariyahaji05@gmail.com', '9029420193', 'Female', '12', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2017-11-11 17:50:10', '182.54.148.103', NULL, NULL, 'web', '', NULL, NULL, 'def7038dddc2ddc9ef8e6a9eaec5d62e8652eb5d555a0141a898d77c0abbf65d1f0eab2acf1ccb6cb36682e2e096bdc1785df82ed862bce9bf5cee3eae9e1885OwHDOLz3hqOxPbGPXcLqs183GwQ31KflQw8tBiTCH/4=', 1),
(27, '', '', '', 'test', 'test@gmail.com', '9898989898', 'Male', '25', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-13 17:40:18', '122.102.123.187', NULL, NULL, 'web', '', NULL, NULL, 'fef6f7270b89f6677b5b1216263f4ccc9580942fde98fb9de2d2f3ec41ac1d653ccba4d6a5a9532db62a259a2884f7b60c59e9925c740050400bb6ce1920edacBxPhazaTbtfRXFngcA4/3NCohZaGhljxvHuRIa2BWvU=', 1),
(28, '', '', '', 'Saumya Shah', 'saumya29june@gmail.com', '9833733469', 'Female', '20', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2017-11-15 02:16:22', '45.250.47.114', NULL, NULL, 'web', '', NULL, NULL, '2f7e9caf7d99ad5cb210227e9eabe9db6317adff82efa5e0fd62150dfeb4131b187f41f152f4f6078dc36c149f9056e73344072630ccc31eee76528351f4ada5F4F/1a22GPUVA3Y55u8tDj3VvZIG5tsZIhWe97AhbtE=', 1),
(29, '', '', '', 'Dr Sunil Mehra', 'dr.sunilmehra04@gmail.com', '9773071380', 'Male', '50', 'Divorcee', NULL, NULL, NULL, NULL, NULL, '2017-11-15 12:14:24', '27.60.189.31', NULL, NULL, 'web', '', NULL, NULL, '2d360d3c5ae15f1c7c584b242bf8a4e6086fd0f18f0f7c9116744482fe0c4620b0184068bd42292b12a203486612fb6f25ff980a38b796c23f0210356042f48dUr9OdP+bHxa4r73zxF6/7sGroE7O7lm5z1uj5C7xwCo=', 1),
(30, '', '', '', 'Entrepreneur', 'entrepreneurhub4u@gmail.com', '7977069739', 'Male', '31', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-15 12:19:48', '182.58.231.14', NULL, NULL, 'web', '', NULL, NULL, '2d7588880cd9a0758ed2971b4c8616e47e2e9467284d399c93338184af76444da2f34b80b48d05328b915ec0406d5b8e0fdf85e438bccb355da054e1b69778a1MbOERdx22JxXG9K9pEdLjkbTue03fJx6n73fe/QTsAg=', 1),
(31, '', '', '', 'Hitesh Shah', 'drhiteshshah@gmail.com', '1234567890', 'Male', '30', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-16 04:49:46', '43.241.144.227', NULL, NULL, 'web', '', NULL, NULL, '2c13bc95a6bbd758cebfb15679468411827e18d268f41e8d777e1cd366acee89e3b388c88b3101a1d530d8ad8c62e30d2e55a2c915119400c578cbdac460caf75v5Ok6WhAU5MUayJzjkXRf0P31n+10YcafrUQC8OJ4I=', 1),
(32, '', '', '', 'Rakesh', 'theraaka@gmail.com', '9769000678', 'Male', '35', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-18 08:08:40', '1.38.13.1', NULL, NULL, 'web', '', NULL, NULL, 'fab4bed6d24fc02a2ba8e08d087cbe419c3d8cc7b12cc456eb8d97a16152186ac629943c98daa7d40a3b0823fa02f2a15ddf6c20276cb038c32eba7e1687f83cwk09BQO2ZqnxzRohpWZfaoeTFcTZJkgtgL5TjsybTfM=', 1),
(33, '', '', '', 'Sanjay', 'smakwana2607@gmail.com', '8169881876', 'Male', '29', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-20 11:17:42', '49.32.147.197', NULL, NULL, 'web', '', NULL, NULL, 'b2b12e45ed88219ddf52e9f83f0341726c32e1b8bbf956faf01c280f293061cda3e220918aaae6053035aeaaefdc50ef1808e4b8dab7fc6d9f8b714d7e86a40f7bUrr9iVCi99ojS5JkOgab//vSGae070w3Vu/0lrpqU=', 1),
(34, '', '', '', 'test', 'test1@gmail.com', '3214234333', 'Male', '25', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2017-11-23 00:55:12', '43.242.116.30', NULL, NULL, 'web', '', NULL, NULL, 'c4ddf65abeb2878c63514ea4beb2c79f7737db664dbb11c452ef8330449b14e61222ef2fbb0133231d9f605e0434a1b4b19bf3fa6dec374c8d93c87390fd143c/u8GNvw+wVw03ibdTkCpDzCVnRJGUtjUN/vb+3lk0Pk=', 1),
(35, '', '', '', 'James', 'james@gmail.com', '5555555555', 'Male', '25', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2017-11-23 01:02:27', '43.242.116.30', NULL, NULL, 'web', '', NULL, NULL, 'f6f7aa244093073cda91a29a098255f350b824324d89fba4e268d039bb42bfb4d79d0a717f033d3c6a6b2c920f73f826cd4df4ca5cf10ebcce9041bed63f229d3QPiHEO5LAQ0IZE0ZTk1WspDaPWbTOhVjk33b8RoCy8=', 1),
(36, '', '', '', 'james123', 'james123@gmail.com', '9999999999', 'Male', '25', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2017-11-23 01:20:30', '43.242.116.30', NULL, NULL, 'web', '', NULL, NULL, '883de2599b3cedffd3379006c70713204b98839d3765cbe505ae3ded07b2a3a0c25e31ad3951f29a9de9cc69ce964c5d8faf968c9910f4a6b0d764cbb33157adtsyEFN+SueCb57iZ1s0XrGXRtzaTzuEGAkEc3DVXgkQ=', 1),
(37, '', '', '', 'upinder', 'palupinder@gmail.com', '9988144011', 'Male', '32', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-11-29 16:11:30', '103.40.196.255', NULL, NULL, 'web', '', NULL, NULL, '7741d3fa9067022a32da4cafd3ddfe61ac471f6702438faacec021b8a3abd84c57d111964b8216d739afaaa265acb497d99d33893668dde66721946785c2b866Sqx6GiQzXoIXyqjw2jERtcE/ciPZwPo5KGonF+zMgsw=', 1),
(38, '', '', '', 'vijay', 'vijaypawar_17@yahoo.com', '9819415485', 'Male', '32', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-12-04 06:20:38', '49.32.139.31', NULL, NULL, 'web', '', NULL, NULL, '833ac0609fb6695fc154ff9e15717367d420dadd278048edccbe41f50070f97d041f7ec8eaa19757f1bac5d0a79581598a4c97188f81dee781d14eefb59d75236SiyEhgufgM8L2p7Cfay4DT3iZjMakqJ6DhY39lRV3U=', 1),
(39, '', '', '', 'hitesh bhuta', 'hiteshbhuta7@gmail.com', '9969426751', 'Male', '28', 'Second Marriage', NULL, NULL, NULL, NULL, NULL, '2017-12-09 13:56:16', '49.32.114.230', NULL, NULL, 'web', '', NULL, NULL, 'ecc3eecc3bcd5d3e0cacd61f13da98f654db8e763a343db9bc57aca63ab02a7f1272be5dbaf0cf62988a624ac9b1a5da248720efc9bc93cc343f4f653d383157/wDOpIpUWlF1AnsF/RHsLi5XG004YBxrj4TNYnjB1dg=', 1),
(40, '', '', '', 'Rajkumar Pal', 'rsk.rajkumar@gmail.com', '0983354484', 'Male', '30', 'Married', NULL, NULL, NULL, NULL, NULL, '2017-12-10 19:26:17', '103.38.37.12', NULL, NULL, 'web', '', NULL, NULL, '94f60203b7b326ced063c564e591f8c8add8776f8239d31660d6d6c9e3d3a1bc4f207a949f269c741a2e30c0fa77d5b273f64bd8d27780fbc0630a546401c04eD/FLByY5OElKR9eTi8ITzGZdlWMIgZf5nofuSb9TBJA=', 1),
(41, '', '', '', 'Soniya', 'soniya9963@gmail.com', '9998293997', 'Female', '28', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-01-05 06:04:40', '42.106.89.61', NULL, NULL, 'web', '', NULL, NULL, '0a2be0bbaea520f42dcb581bb20f352101213ae13280012238180cc7b098d8ea5e3f858a10d634813e947e50ffa823f5c537053a92871acf4ac8f12e02097b8foLVroUOq0pQ4fYQNTVS9IN0EPudYzD6rEd2tmAq4HZ4=', 1),
(42, '', '', '', 'atul', 'atulsinha2004@gmail.com', '9820275561', 'Male', '37', 'Love Marriage', NULL, NULL, NULL, NULL, NULL, '2018-01-06 12:03:08', '49.32.108.34', NULL, NULL, 'web', '', NULL, NULL, '691ffcbf22fb2bd9051ade0bb6a356e76c35d4a04b49ec8ddde9f12798415ea8c93b43e34b4d71d16722cf13be2e4ac58c026eb5ceb6e930a9cd2e4a86161e684Rb/0im8p/1iKj5hfiVFX3Lnl9zIFikkdTVW0kzkLPM=', 1),
(43, '', '', '', 'soon', 'soni@gmail.com', '9898300487', 'Female', '21', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2018-01-12 08:24:12', '49.34.166.11', NULL, NULL, 'web', '', NULL, NULL, 'f1182ecff811303a860ae6104dfe5fab563ec99151dd0a12a81a1c81da84e4b72a8981ac29dadb6638832a8c7a9ef1be78e603d1e940bb93f86bd12636c98793rpIn4i8j7rI6rW21X+W6NjcykcDu/xRsvgYVZXgJQdE=', 1),
(44, '', '', '', 'Haresh', 'h@gmail.com', '111111111', 'Female', '24', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2018-01-12 08:28:17', '49.34.166.11', NULL, NULL, 'web', '', NULL, NULL, '00c685c5819f8895b4f65ae2bcce21224f0f145eea6f07ad6106430b5ce74eda9758aaf7427769fe8dafcd6043f95208d7f6c0b1a251dfe1b49f0ad0e24c88a28yTXmp60XYLREvQbPS9vX5Ch6ZobVFJGgdh2WgNPeBc=', 1),
(45, '', '', '', 'John', 'j@gmail.com', '111111', 'Male', '24', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2018-01-12 11:17:49', '49.34.166.11', NULL, NULL, 'web', '', NULL, NULL, '87998c28b053586c8d9562410676256a2f87a9f5964b03339fd07d3efb8ccbb6590702adb19f0caded2e82c4d37ae5dc674149c468b4eefee12998dd94d49b43P64ebe4zhREOig8U+ner7lt0nhGPFEG97KA7WyR6H38=', 1),
(46, '', '', '', 'dummy', 'd@gmail.com', '111222', 'Female', '24', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-01-12 11:25:04', '49.34.166.11', NULL, NULL, 'web', '', NULL, NULL, '914c632607ec8e3e7ce56551ac150dbc865aabd10c0f37f1f66cbd044e7eef0c3db10c7d03d794f3920c365f887e4cb24d93d550a269c443471cd72bd445c413kH9vxNipQ8Iu48vnc3GsxIA/0NLAlEwJI7q5ttTNel0=', 1),
(47, '', '', '', 'Joy', 'joy@gmail.com', '999666333', 'Female', '24', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2018-01-19 10:52:22', '103.85.9.206', NULL, NULL, 'web', '', NULL, NULL, 'c752251720efba8e5a524b1548cdc372ea4cc9018e60bd7fd633b21c666b511b69cee1cc0d660835cb163d056dc81a5047893fff53df8886488c564e44233d89ECLlIyP1HJraLpEC/qTh7IUVVmRLAnleKvNN/mRleM0=', 1),
(48, '', '', '', 'John', 'john@gmail.com', '9898211552', 'Male', '21', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2018-01-19 10:57:11', '103.85.9.206', NULL, NULL, 'web', '', NULL, NULL, '1d31bbabbf5f82ebd2b65cee8a558224b08bdd5cf9e49b0d6e9dae501bbc2bb048067332b7288176589274a934f6af4ceaad4c483ddb5de2f7949a05ca73e690//CenTAAWm340DGFbLM4bPIuYeQHtJg3dgmL/EODWr8=', 1),
(49, '', '', '', 'Rajkumar Singh Deora', 'rideora@gmail.com', '9167655504', 'Male', '32', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-01-20 15:14:00', '49.32.154.102', NULL, NULL, 'web', '', NULL, NULL, '655919db779c64fb75a16b7908afb9e7f68d78566157c1db0fece4d4943cffe7e891f6d96e7dad268dcc37ea5a538e9e8b2f90706c55fd1db2633243ce7f22a8n/+TIIs9kfgTSY7rL40SggUJpjhP8Tmc/838d7HacP0=', 1),
(50, '', '', '', 'Arc', 'aa@gmail.com', '9898121212', 'Male', '21', 'Bachelor ', NULL, NULL, NULL, NULL, NULL, '2018-01-22 08:59:46', '103.238.106.150', NULL, NULL, 'web', '', NULL, NULL, '51e8ee7a462bd687eb3a776777f1ff5e6c9d9a609af69c17ff8bfff4ae808726ed3d936a8bbbbf0977358cc54f9e55c3cc7cd326391c4fe932993ccae820cd47NBDBj6u/K0FIewonZUOgVh5W6MCMHr9qinFY5DASl8k=', 1),
(51, '', '', '', 'John', 'john23@gmail.com', '456456456', 'Male', '23', 'Single', NULL, NULL, NULL, NULL, NULL, '2018-02-08 05:34:23', '103.238.106.212', NULL, NULL, 'web', '', NULL, NULL, 'e7f0beb5add21030a30639a66ec57eb6cb06b71591e221ebc2f48c56795d281d1bdef21b5acfb063bfd18d292651e53570f5710ed6134e95263e1745ca300218VGt4EOQqAtYcTKz4BZfXrw+s1SLP7IQJzHsOL1GRF1g=', 1),
(52, '', '', '', 'Joy', 'joy123@gmail.com', '9898100200', 'Male', '24', 'Single', NULL, NULL, NULL, NULL, NULL, '2018-02-08 05:55:39', '103.238.106.212', NULL, NULL, 'web', '', NULL, NULL, 'ba1cb2c01de878abfe756f22a943cf317fcd196dacd228f84a92a24792ef63ca9462d3430befe536aa8d987e110d0a6e25810d85aada6d0e4f369f80b17a4225HERJ+0ZSntmr8wgXIBaIH1xkNs+HppywnFEikXECb9I=', 1),
(53, '', '', '', 'Surbhi', 'surbhi@gmail.com', '9898454512', 'Male', '26', 'Single', NULL, NULL, NULL, NULL, NULL, '2018-02-08 06:09:09', '103.238.106.212', NULL, NULL, 'web', '', NULL, NULL, '8995007ddf1438c72bc6ada655c54c6ac3c0a8236ec384487a44da296a4aaf2cf38ad3b45bc6a8e7a649804dd2a2289a01969364aeca33fd15a2fa0b859439f8IJ4e/w5e8JFwXemtVBCUrlOGlgUHI76iaF0JnMDXxlQ=', 1),
(54, '', '', '', 'mohit', 'mantil55@gmail.com', '9404949205', 'Male', '26', 'Live in relationship', NULL, NULL, NULL, NULL, NULL, '2018-02-17 06:20:51', '49.32.177.166', NULL, NULL, 'web', '', NULL, NULL, 'e82e6b618188193d5f12744cd5d1a4d31ed98ebca65a48a14e91c49c473ddc3142f2803d62cccf4613ef5f82b739ada1574a7f91d3c59ddb7085cd22e3d94eb9DDVEOwu3bboFU39W0UUxVt7XvKZXbcIUrf7Rxpwi+2Y=', 1),
(55, '', '', '', 'mahesh', 'maheshdisha66@gmail.com', '7020161785', 'Male', '33', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-02-26 15:03:10', '49.35.121.67', NULL, NULL, 'web', '', NULL, NULL, '979a4bc9758a79c88b3e68547d0963c7b9ceac8add9bc2ce20bd9e5eb55c78723266ec3cf5e4382f24936cf8ebdf230f79bf590fe8b52c869c6e488ac055192bm+Cz/80aktzHVUsxoQCBwt280eJ8H7hP4lSR2RPyYNQ=', 1),
(56, '', '', '', 'Sushant', 'sushant.gole@gmail.com', '9869257542', 'Male', '35', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-02-27 12:58:06', '27.60.182.173', NULL, NULL, 'web', '', NULL, NULL, '8c938e8983dca1d7cd87bc1c8c71ed811eaae7ae301be710020333acd14d7a9f30e375d1a682dd0b08a6b008837cf88b69fdb5cc2a2f3d897f5dc8b82c72053ch04FMGSvx4hVz7c8FxLMsWiG51/nIlP/qQkDE5wam8E=', 1),
(57, '', '', '', 'surojit bachhar', 'surojit.bachhar21@gmail.com', '8918676699', 'Male', '25', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2018-05-05 10:41:10', '47.11.157.216', NULL, NULL, 'web', '', NULL, NULL, '0a610be76e865a5c7a411a78895ac7ce2a055f1626619045119d11beb78c42f3b39ae0f828db155489a133f6d2dc6fd1b760646cc41f2d7cd8a0dfb934e6f472lokFwADDIf1uRYnYZyv28oUk0nkOeubvUU3nDdgyCgU=', 1),
(58, '', '', '', 'rameshwar', 'loverushabh1430@gmail.com', '9082987238', 'Male', '29', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-06-10 16:02:51', '120.60.137.10', NULL, NULL, 'web', '', NULL, NULL, 'fc4266042dba630d18e09ecccca61f07541783f3ed31030e75b3a3ab047f336bdd0f4e68047d60df58f504a9c5fb5a47715baec62dce3a8949601b1f10f055cbNsQ956SqWzN0rbm8Hfv/RLxsi65MeDAQV7Qf5GgLvso=', 1),
(59, '', '', '', 'Ashish', 'shetty.ashish87@gmail.com', '8080835582', 'Male', '31', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-06-16 13:18:03', '106.209.217.250', NULL, NULL, 'web', '', NULL, NULL, '6847852e49caf6ff07cefc760309e2df870d3a8d2d417f686a3759c29829806ee7005c44bc8e7ce0e67622ab3746ce5d909491d4e7124a89810271d14c6d4afdzyDJFM/WVU2PjXj8IbubMgEbe1Ml6wPERibxqKzZDKk=', 1),
(60, '', '', '', 'Aalap Shah', 'lap_shah@ymail.com', '8238964869', 'Male', '24', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2018-07-26 08:36:53', '106.193.132.57', NULL, NULL, 'web', '', NULL, NULL, 'f7cd4a8f56c5583675f221a47dd647476697844240819737eef564686683af7275eabf8acbf364c5aaf07155985514a53916d51880a028ac112184e68b06a96284o0CDJ7VcGJvnlpzhxphffOIdNZZzvTqKFdW68uI/g=', 1),
(61, '', '', '', 'shambhu jha', 'shambhuj071@gmail.com', '8452843380', 'Male', '43', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-08-02 10:26:00', '49.32.111.58', NULL, NULL, 'web', '', NULL, NULL, '23b82a9748cb1aeea32a8c9be854d3d502940da04ef39221b7ed6fb55fb9b29a02e6043f6ff8db438c811ad8dce528642a8f2739f5934603687e6e48074d559beT3PCww+zuiEOMKYlPOoooSz7A1+I9Un0xM5WJptOYI=', 1),
(62, '', '', '', 'rajat agarwal', 'rajatadroit158@gmail.com', '9899416088', 'Male', '27', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-08-04 13:10:57', '106.209.241.177', NULL, NULL, 'web', '', NULL, NULL, 'aa0fc7f0669364ee316f4f5656d27ed5fea61a00c8fbf0d402baed112ff6847d8441e1c713507e0a316a15dacd3ba3d945aa1abbf9054c0900dcd8c1bf8279d7Uksaqtua1gqem3HMcVeFhxOnxmBbtWrmCpgsAJ2sCh0=', 1),
(63, '', '', '', 'Digen Parikh', 'dprockzzzz@gmail.com', '8469838006', 'Male', '26', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-09-07 17:02:37', '49.32.143.239', NULL, NULL, 'web', '', NULL, NULL, '1a6f7ed01a3389d0eb1ddceb0113f97977d08dfc682158476c9418cfd087bc2148098881c74141ff00a65f09c7971ce907b20b5137fc03fab11c957b668f5149kuRFxAXUB885TMAy1fD1BMkJsSHtWOml+e6n85fc9no=', 1),
(64, '', '', '', 'Naresh', 'bvl_naresh@yahoo.com', '7977490657', 'Male', '31', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-09-22 11:39:09', '49.33.131.119', NULL, NULL, 'web', '', NULL, NULL, '0dfd702bdcf4706b30ce9a1e802103cb0441f71f6ab7568d0ef9efa932364bfe1188c1edb63d164b3990ea46f6446ff33d13b52993c47d40f8eee6ae11339716bTPDcUfZ4ucn1LDOLhhHUvBe/an1BlKXUskDPVop1cQ=', 1),
(65, '', '', '', 'Rahul', 'rc4399032@gmail.com', '7990780062', 'Male', '22', 'Engaged', NULL, NULL, NULL, NULL, NULL, '2018-10-20 09:58:12', '49.32.157.192', NULL, NULL, 'web', '', NULL, NULL, 'de20105bbbebe1da927ff1a40ec022c34fb30482d84b60bde168b29d4f439c3ff63691869a6655e371621ab15f10a95db3f7f74bf9140a773f83d148be94b16eAaP7qCFaa+UtZScHFOH1lIqXo7dvWzivph7DRKPMUp0=', 1),
(66, '', '', '', 'DEVEN PATEL', 'devenpatel1986@gmail.com', '+919665199', 'Male', '31', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2018-11-08 06:56:19', '106.193.151.210', NULL, NULL, 'web', '', NULL, NULL, '8014945b54f24f11620c7157c4984a0e94c51ae9a0e76c680a7316b69c64e5f31cf1159ce55d557bcd908045c517f63e98ee1568045e3fb98bac2d30fe8f5dd9DxBo3vkQpbc39UOeEGJGxHhzDyc+cv4eEkra+IVJZIA=', 1),
(67, '', '', '', 'Sujeet Amin', 'sujeet.amin@gmail.com', '9819163913', 'Male', '37', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-11-15 07:40:21', '61.16.187.57', NULL, NULL, 'web', '', NULL, NULL, '07edfdd96f384b1efc0a695dadc922108700ed80f0fb59cf2411f7d6f3f793236c63b7ada8d27ed4c0e1426df19b32c3a5acf412b1f6f6977324fb1b97e6cdd1lfCMyTro3pdyiVfDAoQybgXM8aTlUlEXNmCW5UvgipA=', 1),
(68, '', '', '', 'mario correa', 'mailmariocorrea@gmail.com', '9769142055', 'Male', '31', 'Married', NULL, NULL, NULL, NULL, NULL, '2018-11-21 13:47:04', '223.189.17.236', NULL, NULL, 'web', '', NULL, NULL, '87de21395f0697d55041ae52aafaa8af47141fcb8105aee2403080d30d450a3db0359dbacff4040a042a7a0a4e75ec72b4febca018ebebdbfa30bdf96be13b1eQpAdFgMi1R7ec+R2lemi8Pzus6LCWwDsz9V9quH005U=', 1),
(69, '', '', '', 'Rohan', 'kalerohan04@gmail.com', '7208947150', 'Male', '24', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2018-12-13 07:36:57', '49.32.141.82', NULL, NULL, 'web', '', NULL, NULL, '47c096814e035c3fb3c5eab0bc1ef79014e90c3a95999a380d6a55910fea67550f713f5b89dea8385b8b9d61eace7e51e210402ed725be8396be59434c7205aefVeAlJr/MY2QlyzzPQWIj2oRESI7Fv0kda8jlmw8DBY=', 1),
(70, '', '', '', 'debu das', 'ddas3633@gmail.com', '9011357718', 'Male', '31', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-01-11 17:48:33', '49.32.7.126', NULL, NULL, 'web', '', NULL, NULL, 'd085896e5fdb58b1dabeea78af5280806bba05c4224c5d15001534996353dfd3b462d5a6121736979211114a567c3cf5058bd2d8ddfca5ea7a79096eb58e3d30gORb84llEPNmB5/snx6YuN3RBUEiJ5oQtkpIlXyQXhw=', 1),
(71, '', '', '', 'Nilesh Kumar Prasad', 'n.prasadbokaro@gmail.com', '9987529071', 'Male', '39', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-01-13 18:06:14', '106.193.238.92', NULL, NULL, 'web', '', NULL, NULL, '98d1047e86b77c2ba942aa1c5163738362449119ab162d6dc0207b55bc7ed6543759d7da5b56a336b21c0ccfa943ab8652513497caa91eda9a3a347037ecb70bpfHmxIVd0aZ2kfpJD5WsQWSeBYGW/3+pEGSl3gfptkc=', 1),
(72, '', '', '', 'Leonard', 'leonardmaundu@gmail.com', '0718569850', 'Male', '29', 'Engaged', NULL, NULL, NULL, NULL, NULL, '2019-01-23 18:15:07', '105.52.255.214', NULL, NULL, 'web', '', NULL, NULL, '3c82d5b0d1ebdf71ff0743fd3fbd52f6cc786d6ad462bfe8e342b1c499cc25d080795ccac54dcd2cf423be73cb0ca47f5d504acff107812e4e33a701ca39360dEyYe3CpkczYf8n1XrX03bqaKxEKQj6C2zHinHMWSlMc=', 1),
(87, '', '', '', 'HITESHSHAH', 'drhitesh@purnamhealth.com', '9819035111', 'Male', '52', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-01-27 05:22:31', '115.97.65.55', NULL, NULL, 'web', '', NULL, NULL, 'a69c0d6356172eb9e512edbc6fc7b9a874f092b89fdcbf61c3d80b16a895005b55e3171c01012b5e996320375e3cbeab4856741372828f236dded58de8a7c37f3LfQPPitVrKp0qaJ0NaylcstZQHoCGRg70yuWJUZHiQ=', 1),
(88, '', '', '', 'DR HITESH SHAH', 'drhiteshshah@livel.com', '', 'Male', '19', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-03-31 03:29:17', '116.72.120.156', NULL, NULL, 'web', '', NULL, NULL, '676c12464ff64537dd319a4aa415652ebd8af032eb218fed8d98ad1a60e0a3213eae523756d6f5314ad21fad1c36ce908efe6c9eeecf13c76349ac18fab696capnn7pyBiO/ZB4OLi0M2MbpWJlnbLUkKxzBc8gLLjp20=', 1),
(89, '', '', '', 'divya', 'dsshah2281986@gmail.com', '9821512419', 'Male', '32', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-04-16 08:33:29', '49.35.15.68', NULL, NULL, 'web', '', NULL, NULL, '0dc8c5332e0dac17d055149ba53e31c957f6337c7d0665c3d8d89566efcb798975bb155a1bafaaca4b94a5af3e10c88186da9e2c2a5fb0fcd13f2a9275ed79a3ApnIfMyHegj9AnDy/9dAdCvS0xRj5xfBf5BcGQFc5Vk=', 1),
(90, '', '', '', 'Nilesh kharol', 'nileshkharolchittorghar@gmail.com', '8411056539', 'Male', '31', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-07-04 14:08:57', '49.32.5.50', NULL, NULL, 'web', '', NULL, NULL, '3a4edb95e0dbe526c3f242a4b95a53f13d6529d5931c9dcbaa38a9ead22a8d3c6ac5e19292ae94a41921842ba048340829f2cb734a70fdb4d7ed889bb6698588Zi9ps1emsbKtvFyEGn6CGXZROjKXbauz/SajUR6CCGs=', 1),
(91, '', '', '', 'varun vishwakarma', 'varunvishwakarma34@gmail.com', '8286612008', 'Male', '22', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2019-07-11 18:25:48', '111.119.208.119', NULL, NULL, 'web', '', NULL, NULL, '00c0b7fd59df1aac87950ff6bfabb71b6038fddb98f1312d62840cfbda5276eb31a786ecd7b2b2eecf35fef09549f96b36337eb9f56ab27974db1726cbecdbf55fC0hlOrNHgnO0WEdPgFK2tR7FkTitcOWP92WrE2WK4=', 1),
(92, '', '', '', 'suraj chauhan', 'sc65869@gmail.com', '9969055569', 'Male', '23', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2019-07-16 08:11:59', '49.33.156.79', NULL, NULL, 'web', '', NULL, NULL, 'ae61df44070ff1d8c778ea9c74aa218f604dbf7b25c84eedfec83d6242af7ce37211330e461353509355e2ec36f7c9a3fef8501b07280f568280dc9f6ffab61ejlZdkERRnuCNpgt8Hutc2cIt8RzHNbqcNc1+TOZOmUo=', 1),
(93, '', '', '', 'Ravi Shankar', 'shankar3945@gmail.com', '9704093760', 'Male', '28', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2019-08-24 11:25:37', '171.51.238.49', NULL, NULL, 'web', '', NULL, NULL, '9da6cfdb878dbd62f5fb4ec15cb976ca172e275b9ade99b2526bed4c2c3debe8b00318556f7ce3b92544e7932acfea214db507a25e43e6d678ac7caba9025071VEv5PT03jNd0PORiX86RChF60fOHuIMXjRDe1w4KLtw=', 1),
(94, '', '', '', 'prabhakar pandey', 'pkpandey033@gmail.com', '+919768342', 'Male', '28', 'Bachelor', NULL, NULL, NULL, NULL, NULL, '2019-08-27 05:52:49', '49.32.55.179', NULL, NULL, 'web', '', NULL, NULL, '303365de5a7acbaf0ee6eeddc416212dfb755b1c201b5ea4c77efdc6cce41c031d608d1611db9c206168f0d037d90f1507d5973403987f8b75ecb69572a53cc6DSEoAc2+940bsi5VRRIdQwj8fNjj6Fwp2mJbkrvuomI=', 1),
(95, '', '', '', 'Ram', 'ram.navale@gmail.com', '9970155524', 'Male', '30', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-10-02 06:21:29', '183.87.149.105', NULL, NULL, 'web', '', NULL, NULL, '000909d15ae8bb0d4f38036311d7a28ad43bf4c9f40586616deae36064e685505f270f6805f784b897c2be10d62531194bf7df918f6d7e649127276365c6e4admPkfEr3PTNQWxCGgSFNMh5MQDB4redxCs3KGm73BSno=', 1),
(96, '', '', '', '9867064654', 'maansing.h6600@gmail.com', '9867064654', 'Male', '45', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-10-14 11:50:25', '171.51.239.60', NULL, NULL, 'web', '', NULL, NULL, '67146cff80b9e562853bb463036c2ed1209e5d97cf6c2b88968a54bfa554ba0106eadbb4b525448ff9bd5af9b348f0fda8d00d72783509a303aed3bac4e7c03104a4vw837rwOznjdjne1FAVyAQAO/sQBUEcAOaichoI=', 1),
(97, '', '', '', 'Tushar Tawade', 'tushar.tawade@gmail.com', '9820282512', 'Male', '38', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-11-11 05:58:40', '1.38.136.26', NULL, NULL, 'web', '', NULL, NULL, '5737624becc789322be6ba38da0888246db6e15b410fdf120db400bb093ddced06de40792a6044621817622819fe141e193c9b9bbf04123235b243d0c34704d0l/OKaRwCHwUhg5/8fy5r3VT0JqYalsF30T4RGI3bcQ8=', 1),
(98, '', '', '', 'Rashesh Gandhi', 'rashesh191@gmail.com', '9930999774', 'Male', '35', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-11-14 13:19:49', '49.33.191.3', NULL, NULL, 'web', '', NULL, NULL, '69bf29b376974c426e0079e02fc31733fef014e8e3e058f7d9856218146644ad385e1c6ff541ea76ab72a656e6ee12d10fd81988153657e5fb4c60a473269402QS2q2QerP+/LKd/ESBRzC7JYM0BIxqIGqZac5rxbmZo=', 1),
(99, '', '', '', 'sahil mansha', 'sahilmansha@gmail.com', '8827257775', 'Male', '25', 'Engaged', NULL, NULL, NULL, NULL, NULL, '2019-11-29 11:54:14', '106.209.209.82', NULL, NULL, 'web', '', NULL, NULL, '0f26890752d82d8c84c4033109dda0f89d2a700a1ed75c16dbece2386eac8d4042a4f4983e098937f1b98cb539e78ef6b136b0f2878da346bca987ea94d319f8Bx7XW10m+TQ53ZmnR+e9yEBxmoL54u6nppCIuwuGnO0=', 1),
(100, '', '', '', 'samiullah ansari', 'samiullaehansari870@gmail.com', '9284474229', 'Male', '23', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-12-02 14:22:40', '106.193.184.193', NULL, NULL, 'web', '', NULL, NULL, '274e708d9d1d33ca9ebb1ad126a391167b778cbae2f934a2161c1e553bb1b16c411c962b8642c217d8c4eb010855a446125b039421ccbd2f349e2992dee2bfe2asUM7DsAUM+HvGTJOI7kXMXPdW5Fhr4pI/0HoiuiAEk=', 1),
(101, '', '', '', 'Anushri', 'anushri.rahul@gmail.com', '9920913499', 'Female', '33', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-12-19 09:49:47', '1.38.140.52', NULL, NULL, 'web', '', NULL, NULL, '7606cef8503f009191ef66a7502812cfeabe211c2ed43b70af856076da074ffe3cb98f1c7d79db7af69390a224400c94621cf03fc5eead8f52a1f17569ffeb67prOGp1N8z2hTJJaNbfQjZ+gBNXg4TPGHkWV5FDg7tRY=', 1),
(107, '', '', '', 'faa', 'abc@nc.com', '123456789023415', 'Male', '18', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-12-22 05:25:39', '116.72.121.176', NULL, NULL, 'web', '', NULL, NULL, '51a0d1c1d1e869580675c7a3e0bda3cc5dc0258e9fa907afe206e415aee5040d593d560d0448147d46cd11e8c87f97cdb5227f09f7f4342e16454f602f841d4dkmcddJbPGBq1r0Zodc81kDb8ulVCBPvLNkoOtGC/66HN6UTpnCurpaJxWv1JS3je', 1),
(108, '', '', '', 'yyyry', 'abz@xyz.com', '0987654321', 'Male', '18', 'Married', NULL, NULL, NULL, NULL, NULL, '2019-12-22 05:26:49', '116.72.121.176', NULL, NULL, 'web', '', NULL, NULL, 'af2e85aa6d94903f3bf0e9de129234cc87afc87aa4ba81d496bacad8b6f310d49214ee90c4af4c2af109ad4fe9d03fd01371b3ead489cbe54dea77bff337b461HyWq2fumnplhAbhq06eSoouhYQzWYP3g1NPZNaeejgU=', 1),
(109, '', '', '', 'Ajeet singh', 'Ajeetsingh@gmail.com', '9167369436', 'Male', '21', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-02-19 23:20:24', '42.106.203.234', NULL, NULL, 'web', '', NULL, NULL, '5badc061bc4690fccdb549ab0a71b729e32d93c443ebce10508cba76c66261359f405a8b7c1f1efcc6017ad72b7f08148cbfff85cb0022941ff82fce19f12264XBnXzLfprXeYcVeUSz/hmNIzXJK+Z47JTOUVkAY4m3c=', 1),
(110, '', '', '', 'FIRDOSH KATGARA', 'fkatgara@yahoo.co.in', '9220275550', 'Male', '50', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-02-23 14:06:01', '106.209.153.227', NULL, NULL, 'web', '', NULL, NULL, 'd2d7177f44b8b9502ad9fd505928cd68c6fffa7846cc4bd7343372f5b49bd3c1f1966cfce462dcf48059d052487a1fc48e3c3544793dc9ae55f1959af5f9fb43EENjqSAbmrA8O637sKtvVPDHyY/C69eUCXGVaIE73MA=', 1),
(111, '', '', '', 'Khandker Md.Yeahia', 'khandker.yeahia@undp.org', '01730321165', 'Male', '50', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-03-01 12:04:13', '203.202.246.146', NULL, NULL, 'web', '', NULL, NULL, '3bfc76129db51b7e2c1c42b5a5bba8c33a91f254f02047736febfd192058161689c8705e3fb44df79339c1f703f0adcf51a9cdafa9c60a2d43f4bf5ba117a40dzrv66R7TjzfZmYUAPiPjJD38s2Z9SiG5ck9VjNSoAKE=', 1),
(112, '', '', '', 'Amk', 'Corporateaid9@gmail.com ', '6262993147', 'Male', '44', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-03-02 04:48:09', '27.97.69.54', NULL, NULL, 'web', '', NULL, NULL, '35e3038cfb4197ce41dc20f09da27bf71f928b4d680527c1bd62ceb54092fdd1b899c2841f1b3f488f2ce331b4004880c0823616372edf27a76b9da7b88079d9b7bjCJKEvp0J9nghMpzlG5MtEGPjzf/f2DknpXUkJS0=', 1),
(113, '', '', '', 'Bindesh', 'bindeshrahemani@gmail.com', '8450943036', 'Male', '32', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2020-03-02 13:43:06', '103.245.66.253', NULL, NULL, 'web', '', NULL, NULL, 'f6fc41e14e27f66e33384d28bce2a89b085683df314edd3337a2bf1a6b4de07256147604c8838f656bda80fe2e3f7518057c8837ae1d17ef0e207268bcb089faH9nage3ZrfAmvafrqBTBrhwzMrxcvsw4jkPUDssUgvU=', 1),
(114, '', '', '', 'Divyanshu Dhruw', 'divyanshudhruwcsit@gmail.com', '9004297044', 'Male', '29', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2020-03-08 10:22:23', '49.35.232.39', NULL, NULL, 'web', '', NULL, NULL, '4b1ac95cc9f19fb35c2503e1073205c369b271d221ffd04f98e5f5a506b315797c01719355687229ce0bf3a0eabe51fd082251d6cec4a77de401d691ed6c7f3fLwK8YAAe4mOQobixOYC9oPjVpyr64p7irt2iM0gqa/Y=', 1),
(115, '', '', '', 'HITESH SHAH', 'drhiteshshah@purnamhealth.com', '09869035111', 'Male', '53', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-03-30 05:38:52', '27.106.7.127', NULL, NULL, 'web', '', NULL, NULL, 'a94ba0ea533c48b990e46e090f1c418517a104517f1dd662ae09d65fd7f60178282ec82fed987b17fe6c5635fc1d4fec38f1157a447b3f39651a8a2e8d2c8907E4tREMRqyHsJDiY5zOBDcpYM4hBnsAte2SGDM/WVlA4=', 1),
(116, '', '', '', 'Tushar Gaur', 'tgaur2000@yahoo.com', '7678018936', 'Male', '29', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2020-04-27 06:58:54', '14.142.39.102', NULL, NULL, 'web', '', NULL, NULL, '0fcab75e9c6abf2bc03741d92c6ae4a76eb2066e38d93b27961966d5fdcb00068fb6647bcf11d994ba485b2a58cc35b288b8ee52a861b9aa3bfb279cec84967c10q9YMzuT5fz/j9stThQydv2WdJqYpWdqMK/lrUc6jY=', 1),
(117, '', '', '', 'Shah', 'mitahiteshshah@gmail.com', '9167044580', 'Female', '50', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-04-27 13:36:21', '27.106.7.120', NULL, NULL, 'web', '', NULL, NULL, '86ebf451b6f1a2b8bbdfed1cade67d9123a4a1afdd22b1585df8563a0cf3fffcf684f0d834933c68b6c33a5649525db4ec4f2472b4fc251618c062478307e7effqz9h/mqUipy4PQw9ymX4NFH99krFYRpu3Sl0IJcmkw=', 1),
(118, '', '', '', 'Dharmendra Singh', 'raodharmendrasingh@yahoo.com', '9799392343', 'Male', '30', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-05-03 09:07:44', '223.238.211.209', NULL, NULL, 'web', '', NULL, NULL, '4872d601dca695f33de9e72fd2bde0888e5d742185047293e7e7317b9e54b2b2dc39ea100462969bfc1e546397b8d4a291af9de786b5c8381b784f4808ce9ce7Ciloj/OqnSjLVga61GG2e33pK5fD5J4A1N/NHYibTEI=', 1),
(119, '', '', '', 'sumit sharma', 'sharmasbiomed@gmail.com', '9662556201', 'Male', '27', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2020-05-10 14:19:56', '106.222.41.102', NULL, NULL, 'web', '', NULL, NULL, '79c1319ca908973368ee1cd319db464dfb49122faed72845d04dfc9e2e267ecaabeca83360b68f0006fe5e7164e2943407aecc87b224942be0b5a968ffff9b6bDD6O5ms5dz56OyNPH7nKKnTpR1cnSxA+g7RQj/s+oRw=', 1),
(120, '', '', '', 'prashant shete', 'Prashantshete@gmail.com', '7768884115', 'Male', '40', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-06-17 16:16:59', '42.106.213.238', NULL, NULL, 'web', '', NULL, NULL, '72532e647cc4b558074005c5ce201962b2590af4e8b94921be4b19cc2318dcdc9ce1df3287fec8dab6071dde728e63ce48b32922b138848b3fda88fbf4e86919az2Mg12qRUzawYWZbFiMiRF8ppTa74ZXF9sR5oxR3Is=', 1),
(121, '', '', '', 'Anisha Pandit', 'anisha.pandit@citicorfinance.co.in', '9619452775', 'Female', '28', 'Live in', NULL, NULL, NULL, NULL, NULL, '2020-06-28 09:12:59', '103.216.193.98', NULL, NULL, 'web', '', NULL, NULL, '17c9dbc5b1f1464bc10932f9cb5f1b1e76003734ac9fcb46e721549d8ab452b779a41621c52627ca383bc462469a47cb26f7c0860872921c6c42630f5d99e6adPLh7D2ZKYJJRcPy55sUMOs1UcAY7lr1pFBFbQg4rNTw=', 1),
(122, '', '', '', 'Suresh walkar', 'Sureshwalkar14@Gmail.com', '9869194830', 'Male', '53', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-06-30 06:37:46', '49.32.28.144', NULL, NULL, 'web', '', NULL, NULL, '6366ba62a6ca015f3b48aa608b7c9ce1a81858201b495519772f414501043bc4f387a14879c99866675034c99265a622b834370094894bf354e8ecfe31731df8jUATD72dV9NBGtQ2WOv/pw+N1ZDxI18ZJFNSaXygNVI=', 1),
(123, '', '', '', 'Bhatu', 'patilbhatu2610@gmail.com', '8928171170', 'Male', '30', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-07-03 07:49:54', '157.33.210.151', NULL, NULL, 'web', '', NULL, NULL, 'bfcc2dcc5a59a15d23ab14e44a3e3dd9da0f67779aa8a571d3b9b50ea8ef3fa8e89bbc062a3cf3f70b0019deda1498e2d4acb6e0b0a9dee09d664412f7fcf8441EgsmadsD6TnJPnsKpChKREs0g3k5oW33pCUIofkspU=', 1),
(124, '', '', '', 'Laxman Ahir', 'laxmanahir@gmail.com', '9167913967', 'Male', '39', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-07-16 06:50:34', '112.79.165.195', NULL, NULL, 'web', '', NULL, NULL, 'a2aacdfc49dff8712502ea16b3e4741c273ea7918bda75093046828df220850abe410efb75c7379a5ae0872337b46c4d5f7e090c6bcbde819a92528552a9947dCtJGFm6TkrsBmpEw9Ko/jI7fbgPilb5o+HpQfa6SICs=', 1),
(125, '', '', '', 'Sumeet bhardwaj', 'atlantic311990@gmail.com', '7795402964', 'Male', '30', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2020-07-19 16:36:46', '106.206.15.40', NULL, NULL, 'web', '', NULL, NULL, '39b9f3fc90c40fd7357bceafe2741747ce71872058e8dbe9627f0d18176bb972d2b93368af5050c76d0be2061a25549f6664629bb74b428e605d83480a211c69u4IPHv+TyjpIUHrI7DqcVmc2SEucM330pgn/1q6Xufc=', 1),
(126, '', '', '', 'Ganesh', 'slord033@gmail.com', '8082014686', 'Male', '32', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-07-27 09:48:18', '104.129.196.126', NULL, NULL, 'web', '', NULL, NULL, 'c8ff96253f8c57d9bf133930f203c63947390f0252541d2a35f97fc5b7345bed7d97e684042028c74053ee6bfd86f81ecebaa73a985e4d0351f6136662dfc8c0pbRMPKzPpvklyxjroXBBfBp/GouLsmNecBobApvIorw=', 1),
(127, '', '', '', 'Ketan Nimsudkar', 'ketan.nimsudkar@gmail.com', '8080183650', 'Male', '36', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-07-27 19:14:55', '1.38.156.6', NULL, NULL, 'web', '', NULL, NULL, '7679c3cb4f9076d2ac5995fd6802fab72685a498107b1ee5bbd84f6821a18258aa56528db606fcdf526c778960c013c3e0d109630bfa13b28069b259a54199a40q+uZ8GW7OLLbhEJkCnRJm/NyadK+ZGMg2apeCQggOE=', 1),
(128, '', '', '', 'Khushi Shah', 'khushi.models@gmail.com', '09029284706', 'Female', '30', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2020-07-28 11:18:54', '1.38.140.141', NULL, NULL, 'web', '', NULL, NULL, 'ed2985e3b419cb33e92e0dd0b61a512e98b12d4d1561a204220c3c9f0e04cec9f4c0334c27135418e233578b92da632c8d54e7f34c582224070b817f5ee1991bnODi+Va1lNpP1G5rUA252dw2AIajMuAdK3f3N1KvtFI=', 1),
(129, '', '', '', 'Mandar Divekar', 'divekarmandar007@gmail.com', '7709048507', 'Male', '31', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-08-03 06:43:37', '103.116.196.10', NULL, NULL, 'web', '', NULL, NULL, '63fa97dd8919b82a82cb4d5f162e913a49121e3eb6594c29ab522d79b3baade92aace1d431e9abe9b2a24e3ca5d0bdc2acb9061f5dd858b1193206c6ef371b34y5lSJdvkiEeqsdOA+AWqNvO6IcM/7pu48TSvEhA8JiI=', 1),
(130, '', '', '', 'Kamlesh jagiasi', 'kamlesh185@yahoo.com', '7021733162', 'Male', '40', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-08-03 22:38:47', '103.49.243.253', NULL, NULL, 'web', '', NULL, NULL, '19cfa670dbd8339dab432da78de5a739f04cc4580b7f8af5a4a381402c45211f842db65aac7a5531981438fb5c28db0bc787abc0656f63d2ce516464b7bb66abauwBuzb6h7dRLQXbfvzhtsm/A8V47P+JKi6UsBAm6JM=', 1),
(131, '', '', '', 'NAVEENKUMAR DEVADIGA', 'naveen969@hotmail.com', '9821053538', 'Male', '51', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-08-13 07:14:35', '49.36.8.134', NULL, NULL, 'web', '', NULL, NULL, '6f9a5643111b56528e7727fbea4085c774aba28bd136b05d1cc0afa04398848ef77429f9026d5f6972c9f44e2f133a8aa1063f0d15145f1a2873bf0d9b7bfdf1SvTqo5/8iIKs0anVkdbLm5FeCbzsIdhJGOwVlUDKlUQ=', 1),
(132, '', '', '', 'Finu', 'finuporto@gmail.com ', '920178302 ', 'Male', '34', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-08-13 14:50:15', '87.196.133.174', NULL, NULL, 'web', '', NULL, NULL, 'e0ec9da8b00abaa022b4f48c55a46c37f6d094299a1c26ffc93299df523d0c92a56d838a8fe5ba7ff79d32ed7de0793faf8a4e0008a1e4d036bef3139d90e703v4a8a67fmoV/XlPVvaRsAj7OWMwgOyQNUc3aPTjl7cQ=', 1),
(133, '', '', '', 'Mujahid karel', 'karelmujahid@yahoo.com ', '60654131', 'Male', '29', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-08-24 18:27:15', '188.71.247.36', NULL, NULL, 'web', '', NULL, NULL, 'd7391eb949edc4625744f40be206f39ec8cd0514e05e161c2fc1bacf484a38345a6f4eeeb29da163aae8a1d407f4550f32d9437128386061ff5fdb95f55e7d01afjmCUj2YLA4rjp8ioLBmbSZ8JOEwzONGWzcja3Sero=', 1),
(134, '', '', '', 'Mujahid karel', 'karelmujahid@gmail.com', '0096560654131', 'Male', '29', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-08-24 18:28:50', '188.71.247.36', NULL, NULL, 'web', '', NULL, NULL, '09693be9c417621f891b056a17b2ce376db68cfd5b34c61b72e13fed498abe01b4961ba40aadc2e5d268c2766494b716456a1cce1144fde2d78449608e8723f0qQ2rVULo+9EODQ1jcMj+xwSD5TyH+WyC6zA7D9Y3kG8=', 1),
(135, '', '', '', 'Abhijeet Mestry', 'mestryabhijeet@gmail.com', '09664008854', 'Male', '30', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-09-02 12:05:02', '103.66.234.57', NULL, NULL, 'web', '', NULL, NULL, '018f4ef3ebee97a5a0afbee3ea0bf5869344056263f0f67520f6684f9dfd5ee93768d7e1d1827a276822384e2e296547a84c24ddc342c716726c2c56b6e345f3AUdNQI1Ez1USsY9CycU2JI92Qe5MiOvcIK7HHuF8M8Q=', 1),
(136, '', '', '', 'HEMLATA', 'hemlattaranjankanadia123@gmail.com', '8369465514', 'Female', '45', 'Bacheolar', NULL, NULL, NULL, NULL, NULL, '2020-09-12 06:26:32', '116.72.126.51', NULL, NULL, 'web', '', NULL, NULL, '7f0ca05a7ca67072d5acbc643faa7efd915d4e4f2d83df89a0a80f62d11baa947b6e612bbccd1555a19d5d9fb2ecbea2605d8f31b2d20b664a93fa5d53c5e1c28eLGYqyjROVRRIShcKzZJrsaidcDMM1kVICCxoG1GIA=', 1),
(137, '', '', '', 'Prashant', 'prashantrai.241@gmail.com', '9257246102', 'Male', '36', 'Married', NULL, NULL, NULL, NULL, NULL, '2020-09-14 20:54:00', '24.1.126.20', NULL, NULL, 'web', '', NULL, NULL, '768e3f2595a40bb1cc9d02e89ed298d831f98e83990ef2d833d50e9ef0bc3bf502dcc80cffee2e02e27cb43f2bd65a35e1e13115f376628815a0daa0f97a98f7r9jg7Vqf+o6maOn6VoF4nyekUJeh3vlJMxVyMH+3Z+U=', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(20) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `affliate` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_id`, `firstname`, `lastname`, `phone`, `mobile`, `address`, `sex`, `blood_group`, `date_of_birth`, `affliate`, `picture`, `created_by`, `create_date`, `status`) VALUES
(9, 'P7OGZGC3', 'Tuhin', 'Sorkar', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', '', '2015-11-01', NULL, 'assets/images/patient/2016-11-20/p14.png', 2, '2016-09-04', 1),
(10, 'PDX3KY02', 'Raihan', 'Rahman', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'B-', '2016-09-29', NULL, 'assets/images/patient/2016-11-20/p12.png', 2, '2011-10-19', 1),
(11, 'PEJNSXWO', 'Kamal', 'Uddin', '', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'B+', '1988-10-02', NULL, 'assets/images/patient/2016-11-20/p11.png', 2, '2016-08-10', 1),
(12, 'PEJNSXWC', 'Hashem', 'Roy', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'O+', '1988-10-02', NULL, 'assets/images/patient/2016-11-20/p10.png', 2, '2016-08-03', 1),
(13, 'P02DQ9T1', 'Hello', 'World', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'O+', '1996-10-01', NULL, 'assets/images/patient/2016-11-20/p9.png', 2, '2016-10-27', 1),
(15, 'PSUR2YIC', 'Hello', 'World', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'B+', '1996-10-01', NULL, 'assets/images/patient/2016-11-20/p8.png', 2, '2016-10-27', 1),
(16, 'PF3A7NPY', 'Nazmul', 'Islam', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'O-', '2010-10-01', NULL, 'assets/images/patient/2016-11-20/p7.png', 2, '2016-10-27', 1),
(17, 'PB92AZ7I', 'Hasan', 'Mashood', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'AB+', '1996-10-01', NULL, 'assets/images/patient/2016-11-20/p6.png', 2, '2016-10-27', 1),
(18, 'PMO8J6J9', 'Jhon', 'Doe', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'A+', '2016-11-19', NULL, 'assets/images/patient/2016-11-20/p5.png', 2, '2016-11-19', 1),
(19, 'P5FJJUQS', 'Jhon', 'Doe', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'A+', '2016-11-19', NULL, 'assets/images/patient/2016-11-20/p4.png', 2, '2016-11-19', 1),
(20, 'PHO969YL', 'Jhon', 'Doe', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'A+', '2016-11-01', NULL, 'assets/images/patient/2016-11-20/p3.png', 2, '2016-11-19', 1),
(21, 'P2FBAKE0', 'Jhon', 'Doe', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'A+', '2016-11-01', NULL, 'assets/images/patient/2016-11-20/p2.png', 2, '2016-11-19', 1),
(23, 'P4FXWA25', 'Jhon', 'Doe', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'A+', '2016-11-01', NULL, 'assets/images/patient/2016-11-20/p1.png', 2, '2016-11-19', 1),
(24, 'PPBSFHZP', 'Harald', 'Hass', '0123456789', '0123456789', '98 Green Road, Farmgate, Dhaka-1215', 'Male', 'A+', '2016-11-01', NULL, 'assets/images/patient/2016-11-20/p.png', 2, '2016-11-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_family`
--

DROP TABLE IF EXISTS `patient_family`;
CREATE TABLE `patient_family` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `relation` int(11) DEFAULT NULL COMMENT '1 = son, 2 = Daughter, 3 = Father, 4=Mother, 5=Brother, 6 =Sister',
  `age` longtext DEFAULT NULL,
  `illness` longtext DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `dr_feedback` longtext NOT NULL,
  `dr_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_family`
--

INSERT INTO `patient_family` (`id`, `patient_id`, `relation`, `age`, `illness`, `added_on`, `updated_on`, `deleted_on`, `dr_feedback`, `dr_flag`) VALUES
(1, 1, 1, '75', '', '2018-10-30 13:08:32', NULL, NULL, '', 0),
(2, 1, 2, '69', '', '2018-10-30 13:08:32', NULL, NULL, '', 0),
(4, 1, 4, '14', 'skin problem', '2018-10-30 13:08:32', NULL, NULL, '', 0),
(5, 2, 3, '75', '', '2019-03-31 03:52:04', NULL, NULL, '', 0),
(6, 2, 4, '71', '', '2019-03-31 03:52:04', NULL, NULL, '', 0),
(7, 4, 3, '75', '', '2019-04-06 07:48:06', NULL, NULL, '', 0),
(8, 4, 4, '70', '', '2019-04-06 07:48:06', NULL, NULL, '', 0),
(9, 4, 2, '14', '', '2019-04-06 07:48:06', NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_file`
--

DROP TABLE IF EXISTS `patient_file`;
CREATE TABLE `patient_file` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `ext` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_file`
--

INSERT INTO `patient_file` (`id`, `patient_id`, `filename`, `ext`) VALUES
(1, 1, '20190404102033.jpg', ''),
(2, 1, '20190404102047.jpg', ''),
(3, 1, '20190404103203.jpg', ''),
(4, 2, '20190406043449.jpg', ''),
(5, 2, '20190406043638.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_followup`
--

DROP TABLE IF EXISTS `patient_followup`;
CREATE TABLE `patient_followup` (
  `id` int(11) NOT NULL,
  `followup_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_lifestyle`
--

DROP TABLE IF EXISTS `patient_lifestyle`;
CREATE TABLE `patient_lifestyle` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `bedtime` longtext DEFAULT NULL,
  `wakeup_time` longtext DEFAULT NULL,
  `breakfast_time` longtext DEFAULT NULL,
  `breakfast_content` text DEFAULT NULL,
  `lunch_time` longtext DEFAULT NULL,
  `lunch_content` text DEFAULT NULL,
  `dinner_time` longtext DEFAULT NULL,
  `dinner_content` text DEFAULT NULL,
  `snack_time` longtext DEFAULT NULL,
  `snack_content` text DEFAULT NULL,
  `other_eatable` longtext DEFAULT NULL,
  `sunday_content` longtext DEFAULT NULL,
  `sleep_day` longtext DEFAULT NULL,
  `wake_fresh` longtext DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `dr_feedback` longtext NOT NULL,
  `dr_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_lifestyle`
--

INSERT INTO `patient_lifestyle` (`id`, `patient_id`, `bedtime`, `wakeup_time`, `breakfast_time`, `breakfast_content`, `lunch_time`, `lunch_content`, `dinner_time`, `dinner_content`, `snack_time`, `snack_content`, `other_eatable`, `sunday_content`, `sleep_day`, `wake_fresh`, `added_on`, `updated_on`, `deleted_on`, `dr_feedback`, `dr_flag`) VALUES
(1, 1, '00:30:00', '05:30:00', '09:00:00', 'tea, biscuits, toast', '13:00:00', 'roti, gravy, rice, dal', '21:30:00', 'rice, dal, gravy, roti', '17:00:00', 'sandwich, dosa', NULL, '', NULL, '1', '2018-10-30 13:08:32', NULL, NULL, '', 0),
(2, 2, '00:00:00', '00:00:00', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', NULL, '', '1', '1', '2019-03-31 03:52:04', NULL, NULL, '', 0),
(3, 3, '<p><s><u>bedtime</u></s></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', NULL, '<p><br></p>', '<p><br></p>', '<p><br></p>', '2019-03-31 12:09:53', NULL, NULL, '<p><br></p>', 0),
(4, 4, '', '', '', '', '', '', '', '', '', '', NULL, '', 'YES', 'YES', '2019-04-06 07:48:06', NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_master`
--

DROP TABLE IF EXISTS `patient_master`;
CREATE TABLE `patient_master` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `middle_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(200) DEFAULT NULL,
  `maritalstatus` int(11) DEFAULT NULL,
  `marital_since` varchar(200) NOT NULL DEFAULT '0',
  `tomarry` varchar(200) NOT NULL DEFAULT '0',
  `country_code` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `landline` varchar(200) DEFAULT NULL,
  `education` int(11) NOT NULL DEFAULT 0,
  `occupation` int(11) NOT NULL DEFAULT 0,
  `emailaddress` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `is_lock` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_master`
--

INSERT INTO `patient_master` (`id`, `patient_id`, `user_id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `maritalstatus`, `marital_since`, `tomarry`, `country_code`, `mobile`, `landline`, `education`, `occupation`, `emailaddress`, `website`, `added_on`, `updated_on`, `token`, `is_lock`, `deleted_on`) VALUES
(2, '00002', 3, '', NULL, '', NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, 0, 0, NULL, NULL, '2020-01-14 11:19:13', NULL, '76b19c2b5de8b8e6e3dbe8d9a6f03c', 1, NULL),
(3, '00003', 1, '', NULL, '', NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, 0, 0, NULL, NULL, '2020-01-14 11:21:57', NULL, '79bb798d561e317bb830b8191992ed', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_medical`
--

DROP TABLE IF EXISTS `patient_medical`;
CREATE TABLE `patient_medical` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `medical_history` longtext DEFAULT NULL,
  `medical_history_other` text DEFAULT NULL,
  `current_medication` mediumtext DEFAULT NULL,
  `habits` longtext DEFAULT NULL,
  `allergy` longtext DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `dr_feedback` longtext NOT NULL,
  `dr_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_medical`
--

INSERT INTO `patient_medical` (`id`, `patient_id`, `medical_history`, `medical_history_other`, `current_medication`, `habits`, `allergy`, `added_on`, `updated_on`, `deleted_on`, `dr_feedback`, `dr_flag`) VALUES
(1, 1, '<p><span style=\"color:#f39c12\"><strong>Acidity</strong></span>,<strong>Body</strong> Pain,<span style=\"color:#e74c3c\"><strong>Constipation</strong></span>,Sleep problem,<strong><span style=\"color:#ecf0f1\"><span style=\"background-color:#9b59b6\">Neck</span></span> pain</strong></p>', '<p>adas dasdd&nbsp;</p><p><u>asd</u></p><p><s>asdasd</s></p>', '<p>d asdasdd <strong>asdasdasd</strong></p>', '<p>habits</p><p><strong>habits2</strong></p>', '<p>Dust,<strong><span style=\"color:#3498db\">Smoke\' te, strst</span></strong></p>', '2018-10-30 13:08:32', NULL, NULL, '<p><span style=\"color:#f1c40f\"><s><strong>fedback</strong></s></span> feedback</p>', 0),
(3, 2, '<p><span style=\"color:#c0392b\"><strong><span style=\"background-color:#1abc9c\">ghghm</span></strong></span></p>', '<p><br></p>', '<p><span style=\"color:#e74c3c\"><strong>duyduduy</strong></span></p>', '<p><br></p>', '<p><br></p>', '2019-03-31 03:52:04', NULL, NULL, '<p><br></p>', 0),
(5, NULL, '<p>jhg jhg</p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '2019-03-31 12:07:58', NULL, NULL, '<p><br></p>', 0),
(6, 3, '<p><s><strong>fsdf f</strong></s></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '2019-03-31 12:09:30', NULL, NULL, '<p><br></p>', 0),
(10, 4, '', '', '', '', '', '2019-04-06 07:48:06', NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_spouse`
--

DROP TABLE IF EXISTS `patient_spouse`;
CREATE TABLE `patient_spouse` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `spouse_name` varchar(250) DEFAULT NULL,
  `spouse_age` varchar(255) DEFAULT NULL,
  `spouse_education` int(11) NOT NULL DEFAULT 0,
  `spouse_occupation` int(11) NOT NULL DEFAULT 0,
  `spouse_illness` longtext DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `dr_feedback` longtext NOT NULL,
  `dr_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_spouse`
--

INSERT INTO `patient_spouse` (`id`, `patient_id`, `spouse_name`, `spouse_age`, `spouse_education`, `spouse_occupation`, `spouse_illness`, `added_on`, `updated_on`, `deleted_on`, `dr_feedback`, `dr_flag`) VALUES
(1, 1, '<p>Fatema Haji</p>', '<p>38</p>', 3, 2, '<p>Migrane</p>', '2018-10-30 13:08:32', NULL, NULL, '<p><span style=\"color:#27ae60;\"><em><strong><span style=\"background-color:#f1c40f;\">hgghghgh</span></strong></em></span></p>', 0),
(3, 2, 'Mita Hitesh Shah', '20', 1, 1, '', '2019-03-31 03:52:04', NULL, NULL, '', 0),
(5, 3, '<p>spouse</p>', '<p><br></p>', 0, 0, '<p><br></p>', '2019-03-31 12:09:40', NULL, NULL, '<p><br></p>', 0),
(9, 4, '', '', 0, 0, '', '2019-04-06 07:48:06', NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_travel`
--

DROP TABLE IF EXISTS `patient_travel`;
CREATE TABLE `patient_travel` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `place_residence` varchar(250) DEFAULT NULL,
  `place_work` varchar(250) DEFAULT NULL,
  `leave_home` longtext DEFAULT NULL,
  `return_home` longtext DEFAULT NULL,
  `holidays` longtext DEFAULT NULL,
  `transport_type` varchar(100) DEFAULT NULL,
  `by_road` longtext DEFAULT NULL,
  `by_train` longtext DEFAULT NULL,
  `by_walk` longtext DEFAULT NULL,
  `overnight` longtext DEFAULT NULL,
  `sp_leave_home` longtext DEFAULT NULL,
  `sp_return_home` longtext DEFAULT NULL,
  `sp_holidays` longtext DEFAULT NULL,
  `exercise` varchar(200) DEFAULT NULL,
  `exercise_time` longtext DEFAULT NULL,
  `exercise_detail` varchar(200) DEFAULT NULL,
  `sports` longtext DEFAULT NULL,
  `from_work_time` varchar(200) DEFAULT NULL,
  `to_work_time` varchar(200) DEFAULT NULL,
  `rotating_shift` varchar(200) DEFAULT NULL,
  `flexi_hour` varchar(100) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `dr_feedback` longtext NOT NULL,
  `dr_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_travel`
--

INSERT INTO `patient_travel` (`id`, `patient_id`, `place_residence`, `place_work`, `leave_home`, `return_home`, `holidays`, `transport_type`, `by_road`, `by_train`, `by_walk`, `overnight`, `sp_leave_home`, `sp_return_home`, `sp_holidays`, `exercise`, `exercise_time`, `exercise_detail`, `sports`, `from_work_time`, `to_work_time`, `rotating_shift`, `flexi_hour`, `added_on`, `updated_on`, `deleted_on`, `dr_feedback`, `dr_flag`) VALUES
(1, 1, 'Goregaon', 'Andheri', '10:00:00', '18:30:00', '2', 'Self-Driving', '20', '0', '0', '', '00:00:00', '00:00:00', '0', 'Walking in open,Meditation', '06:00:00', '30', '', '10:30', '18:00', NULL, 'at night', '2018-10-30 13:08:32', NULL, NULL, '', 0),
(2, 2, '', '', '00:00:00', '00:00:00', '0', '', '0', '0', '0', '', '00:00:00', '00:00:00', '0', '', '00:00:00', '', '', '', '', '1', '', '2019-03-31 03:52:04', NULL, NULL, '', 0),
(3, 3, '<p><strong><em><s>andheri</s></em></strong></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '2019-03-31 12:10:04', NULL, NULL, '<p><br></p>', 0),
(4, 2, '<p><br></p>', '<p><br></p>', '<p>00:00:00</p>', '<p>00:00:00</p>', '<p>0</p>', '<p><br></p>', '<p>0</p>', '<p>0</p>', '<p>0</p>', '<p><br></p>', '<p>00:00:00</p>', '<p>00:00:00</p>', '<p>0</p>', '<p><br></p>', '<p>00:00:00</p>', '<p><s>???????</s><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p>1</p>', '<p><br></p>', '2019-03-31 12:23:32', NULL, NULL, '<p><br></p>', 0),
(5, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '2019-04-06 07:48:06', NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_treatment`
--

DROP TABLE IF EXISTS `patient_treatment`;
CREATE TABLE `patient_treatment` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `duration_period` char(1) DEFAULT NULL,
  `fees` varchar(20) DEFAULT NULL,
  `frequency` char(1) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_treatment`
--

INSERT INTO `patient_treatment` (`id`, `patient_id`, `duration`, `duration_period`, `fees`, `frequency`, `added_on`, `updated_on`, `deleted_on`) VALUES
(1, 1, 'dasd', 'D', 'sda', 'D', '2018-08-23 10:23:47', '2018-08-23 12:23:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `available_days` varchar(50) DEFAULT NULL,
  `per_patient_time` time DEFAULT NULL,
  `serial_visibility_type` tinyint(4) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `doctor_id`, `start_time`, `end_time`, `available_days`, `per_patient_time`, `serial_visibility_type`, `status`) VALUES
(5, 8, '09:00:00', '12:00:00', 'Monday', '00:30:00', 2, 1),
(6, 1, '09:00:00', '12:00:00', 'Tuesday', '00:30:00', 1, 1),
(9, 7, '10:00:00', '20:00:00', 'Sunday', '00:30:00', 2, 1),
(10, 7, '10:00:00', '20:00:00', 'Thursday', '00:30:00', 1, 1),
(11, 1, '11:00:00', '10:00:00', 'Sunday', '13:35:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `title`, `description`, `email`, `phone`, `logo`, `favicon`, `footer_text`) VALUES
(1, 'Hospital Application System', 'Hospital Application System', 'admin@example.com', '0123456788', 'assets/images/apps/2016-11-17/l.png', 'assets/images/icons/2016-11-20/f.png', 'Â©2016 bdtask.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `user_role` tinyint(1) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `short_biography` text DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `email`, `password`, `user_role`, `designation`, `department_id`, `address`, `phone`, `mobile`, `short_biography`, `picture`, `specialist`, `date_of_birth`, `sex`, `blood_group`, `degree`, `created_by`, `create_date`, `update_date`, `status`) VALUES
(1, 'Samim', 'Khan', 'doctor@demo.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '', 2, 'It is a long established fact that a reader will be distracted by the readable content ', '0123456798', '0123456798', '<p>It is a long established fact that a reader will be distracted by the readable content</p>', 'assets/images/doctor/2016-11-20/a1.png', '', '2016-10-12', 'Male', 'A+', '<p>It is a long established fact that a reader will be distracted by the readable content</p>', 2, '2016-11-20', NULL, 1),
(2, 'Shohrab', 'Hossain', 'admin@demo.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '', 0, 'Dhaka', '01821742285', '01821742285', '', 'assets/images/doctor/2016-11-20/p.png', '', '1994-02-10', 'Male', 'B+', '', 2, '2016-11-20', NULL, 1),
(4, 'Md. Jabed', 'Mahmud', 'doctor@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Frontent Developer', 1, '98 Green Road, Farmgate, Dhaka-1215', '0123456798', '1234567890', '<p>TEST</p>', 'assets/images/representative/2016-11-20/p1.png', 'MBBS', '2016-10-11', 'Male', 'B-', '<p>TEST</p>', 2, '2016-10-15', NULL, 1),
(7, 'Jahed', 'Abdullah', 'tuhin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 'Seniro Doctor', 3, 'It is a long established fact that a reader will be distracted by the readable content ', '01234567980', '01234567980', '<p>It is a long established fact that a reader will be distracted by the readable content </p>', 'assets/images/doctor/2016-11-20/a.png', 'MBBS', '2016-10-11', 'Male', 'A+', '<p>It is a long established fact that a reader will be distracted by the readable content </p>', 2, '2016-11-20', NULL, 1),
(8, 'Naeem', 'Khan', 'naeem@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'Frontent Developer', 1, 'Dhaka', '1234567890', '1234567890', '<p>sdfaasdfasdfs</p>', 'assets/images/doctor/2016-11-20/d1.png', '', '2016-10-10', 'Male', 'B+', '<p>It is a long established fact that a reader will be distracted by the readable content </p>', 2, '2016-11-20', NULL, 1),
(9, 'Kamrul', 'Anam', 'agent@demo.com', '827ccb0eea8a706c4c34a16891f84e7b', 3, '', 2, 'Dhaka Bangladesh', '0180525666', '0182554885', '', 'assets/images/representative/2016-11-20/p.png', '', '2016-10-02', 'Male', 'B-', '', 2, '2016-10-15', NULL, 1),
(10, 'Jane ', 'Doe', 'jane@example.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'Doctor', 2, 'Dhaka, Bangladesh', '1234567890', '1234567890', '<p>Test</p>', 'assets/images/doctor/2016-11-20/d.png', '', '1994-11-01', 'Male', 'B+', '', 2, '2016-11-20', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ws_comment`
--

DROP TABLE IF EXISTS `ws_comment`;
CREATE TABLE `ws_comment` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `add_to_website` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ws_comment`
--

INSERT INTO `ws_comment` (`id`, `item_id`, `name`, `email`, `comment`, `date`, `add_to_website`) VALUES
(17, 22, 'Admin', 'Test@test.com', 'TEST', '2016-11-08 07:41:34', 2),
(20, 19, 'Sahed', 'sahed@gmail.com', 'The quick brown fox jumps over the lazy dog.\r\nTHE QUICK BROWN FOX JUMPS OVER THE LAZY DOG\r\nThe Quick Brown Fox Jumps Over The Lazy Dog\r\nTHe QUick BRown FOx Jumps OVer THe LAzy DOg\r\nthE quicK browN foX jumpS oveR thE lazY doG', '2016-11-08 08:10:53', 1),
(23, 19, 'Rahim', 'rahim@example.com', '     \r\n\r\n90% Unlimited Downloads Choose from Over 300,000 Vectors, Graphics & Photos.\r\nads via Carbon\r\n\r\nYou asked, Font Awesome delivers with 41 shiny new icons in version 4.7. Want to request new icons? Here\'s how. Need vectors or want to use on the desktop? Check the cheatsheet.\r\n', '2016-11-08 08:25:06', 2),
(27, 18, 'Shohrab Hossain', 'sourav@example.com', 'This is test comment.\r\n[removed]alert&amp;#40;\'Hospital\'&amp;#41;[removed]', '2016-11-08 08:31:42', 6),
(30, 17, 'Shohrab Hossain', 'admin@example.com', 'TEst', '2016-11-08 08:35:58', 2),
(31, 17, 'Shohrab Hossain', 'admin@example.com', 'Shohrab Hossain', '2016-11-08 08:36:29', 2),
(32, 17, 'Hello World', 'hello@world.com', 'please visit Font Awesome\r\n\r\nhttp://fontawesome.io/icons/', '2016-11-08 08:37:18', 2),
(34, 23, '--; 0\' OR \'1\'=\'1', 'admin@example.com', 'Test', '2016-11-08 08:41:26', NULL),
(36, 1, 'TEST', 'hello@world.com', 'TEST', '2016-11-08 10:59:55', 2),
(37, 4, 'Al Amin', 'alamin@gmail.com', 'TEST COMMENTS', '2016-11-09 07:46:15', 2),
(38, 4, 'Hello World', 'hello@world.com', 'HELLO WORLD', '2016-11-09 07:46:43', 2),
(39, 4, 'Al Amin', 'hello@world.com', 'TEST', '2016-11-09 08:04:22', 2),
(40, 18, 'Jahangir Alam', 'jahangirmahi1@gmail.com', 'I honestly just don\'t know what else to do...\r\nI am a jewelry designer and opened my shop back in June 2016. I have been all over social media, sending out emails, etc... and as a result I receive likes, followers, traffic but NO SALES.\r\nRead More ', '2016-11-09 08:07:39', 3),
(41, 18, 'Hello World', 'hello@world.com', 'Test', '2016-11-09 08:26:43', 3),
(42, 18, 'Jahangir Alam', 'jahangirmahi1@gmail.com', 'TEST AGAIN', '2016-11-09 08:27:15', 2),
(43, 18, 'Hasan ', 'hasan@gmail.com', 'Hi, \r\nThis is awesome article\r\nLove it!', '2016-11-09 08:28:03', 2),
(44, 18, 'Naeem', 'naeem@gmail.com', 'Demo Hospital Limited...\r\ncopyright&amp;copy; All rights reserved.\r\nPower by bdtask.\r\nOfficial website Bdtask', '2016-11-10 07:12:27', 2),
(45, 2, 'Naeem', 'naeem@gmail.com', 'Test comment', '2016-11-10 07:30:01', 2),
(46, 2, 'Naeem', 'naeem@gmail.com', 'TEST', '2016-11-10 07:30:43', 2),
(47, 18, 'Jane Doe', 'jane@doe.com', 'Hello World!', '2016-11-10 10:31:09', 2),
(48, 6, 'Jane Doe', 'jane@doe.com', 'This is example comment...', '2016-11-10 11:04:11', 2),
(49, 6, 'Jane Doe', 'jane@doe.com', 'This is second comment', '2016-11-10 11:04:42', 2),
(50, 22, 'Naeem', 'naeem@gmail.com', 'Demo hospital limited...', '2016-11-10 11:05:19', 2),
(51, 22, 'Naeem', 'jane@doe.com', 'LEAVE A COMMENT', '2016-11-10 11:29:53', 2),
(52, 2, 'Jane Doe', 'jane@doe.com', 'LEAVE A COMMENT', '2016-11-10 11:30:48', 2),
(53, 17, 'Jahed Abdullah', 'jahed@example.com', 'Jahed Abdullah', '2016-11-13 08:12:13', 2),
(54, 1, 'Tuhin Sorkar', 'tuhin@example.com', 'Emergency Care Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2016-11-13 01:41:25', 1),
(55, 1, 'Jahed Abdullah', 'jahed@example.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationâ€¦', '2016-11-13 01:45:28', 1),
(56, 17, 'Samim Hasan', 'samim_hasan@gmail.com', 'TEST COMMENT', '2016-11-14 06:36:59', 2),
(57, 4, 'Jennifer ', 'jennifer@example.com', 'Awesome!', '2016-11-14 11:58:32', 2),
(58, 17, 'Hasan', 'hasan@boss.com', 'Hasan Boss', '2016-11-14 01:51:26', 1),
(59, 17, 'Zahid', 'zahid.samorita@sebaghar.com', 'Test Comment', '2016-11-15 06:24:31', 2),
(60, 18, 'Harald Haas', 'haas@gmail.com', 'Hello World!', '2016-11-19 06:55:05', 2),
(61, 1, 'Harald Haas', 'haas@gmail.com', 'TEST', '2016-11-19 07:58:23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ws_item`
--

DROP TABLE IF EXISTS `ws_item`;
CREATE TABLE `ws_item` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `icon_image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `position` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `counter` int(11) NOT NULL DEFAULT 0,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ws_item`
--

INSERT INTO `ws_item` (`id`, `name`, `icon_image`, `title`, `description`, `position`, `status`, `counter`, `date`) VALUES
(1, 'about', 'assets_web/images/icon_image/2016-11-20/a.png', 'About Us', 'Emergency Care Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Blood Test Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Cardiac Surgery Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Dental Care Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Outdoor Checkup Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Ophthalmology Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Heart disease Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 0, 1, 0, '2016-11-20'),
(3, 'service', 'assets_web/images/icon_image/2016-11-20/p8.png', 'Call Center 24/7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 2, 1, 0, '2016-11-20'),
(4, 'blog', 'assets_web/images/icon_image/2016-11-20/b1.png', 'Predefined functions', '<p>JavaScript has several top-level, built-in functions: eval&#40;&#41; The eval&#40;&#41; method evaluates JavaScript code represe</p>', 0, 1, 0, '2016-11-20'),
(5, 'blog', 'assets_web/images/icon_image/2016-11-20/b.png', 'Blog Title 2', '<p>There are many variations passages available, but the lorem, ipsum sit have suffered alteration</p>', 2, 1, 0, '2016-11-20'),
(6, 'blog', 'assets_web/images/icon_image/2016-11-20/b3.png', 'Blog Title 3', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BCContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BCContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>', 3, 1, 0, '2016-11-20'),
(7, 'service', 'assets_web/images/icon_image/2016-11-20/p7.png', 'Emergency Care', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 1, 1, 0, '2016-11-20'),
(8, 'service', 'assets_web/images/icon_image/2016-11-20/p9.png', 'Cardiac Surgery', 'Â  Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 3, 1, 0, '2016-11-20'),
(9, 'service', 'assets_web/images/icon_image/2016-11-20/p10.png', 'Dental Care', 'Â  Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 4, 1, 0, '2016-11-20'),
(10, 'service', 'assets_web/images/icon_image/2016-11-20/p11.png', ' Ophthalmology', 'Â  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 5, 1, 0, '2016-11-20'),
(11, 'service', 'assets_web/images/icon_image/2016-11-20/p12.png', 'Heart disease', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 6, 1, 0, '2016-11-20'),
(12, 'appointment', 'assets_web/images/icon_image/2016-11-20/p.png', 'Test Appointment', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.', 1, 1, 0, '2016-11-20'),
(14, 'appointment', 'assets_web/images/icon_image/2016-11-20/p1.png', 'Emergency Care', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 1, 1, 0, '2016-11-20'),
(15, 'appointment', 'assets_web/images/icon_image/2016-11-20/p2.png', 'Cardiac Surgery', 'Â  Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 3, 1, 0, '2016-11-20'),
(16, 'appointment', 'assets_web/images/icon_image/2016-11-20/p3.png', 'Cardiac Surgery', 'Â  Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 3, 1, 0, '2016-11-20'),
(17, 'blog', 'assets_web/images/icon_image/2016-11-20/b2.png', 'Call Center 24/7', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever</p>', 2, 1, 0, '2016-11-20'),
(18, 'blog', 'assets_web/images/icon_image/2016-11-20/p5.png', '3 Latest Headphones for Music Fans in Bangladesh', '<p>Hereâ€™s a question for you! What exactly are you using these days for listening to your music collection while you are at home, at work or you are on the move?</p>\r\n<p>Your answer would most probably be the terrible headphones you got packed along with your iPhone, cellular phone or the ones you stole from your younger brother. Whether you are using in-ears or over-ears for listening to your music library, you need making sure that your headphones are of top quality. By making use of cheap headphones we are doing our music library, a flagrant disservice by marrying it off to sub-standard headphones. As mentioned at Wikipedia as well as at various other sources, Bangladesh is one of the fastest growing electronics and multimedia markets in the world; which is the reason why you can find a great diversity in headphones across this part of the world.</p>\r\n<p>We have compiled a list of few latest headphones that have hit the Bangladeshi market with a bang!</p>', 1, 1, 1, '2016-11-20'),
(22, 'blog', 'assets_web/images/icon_image/2016-11-20/b4.png', 'Blog Title 22', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BCContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BCContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>', 3, 1, 0, '2016-11-20'),
(23, 'blog', 'assets_web/images/icon_image/2016-11-20/b5.png', 'Blog Title 23', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BCContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BCContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>', 3, 1, 0, '2016-11-20'),
(24, 'about', 'assets_web/images/icon_image/2016-11-20/a1.png', 'Our Mission at Medical', 'Emergency Care Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Call Center 24/7 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Blood Test Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Cardiac Surgery Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Dental Care Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Outdoor Checkup Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Ophthalmology Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever Heart disease Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 1, 1, 0, '2016-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `ws_section`
--

DROP TABLE IF EXISTS `ws_section`;
CREATE TABLE `ws_section` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `featured_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ws_section`
--

INSERT INTO `ws_section` (`id`, `name`, `title`, `description`, `featured_image`) VALUES
(19, 'service', 'Service We Offer', 'Our department & special service ', 'assets_web/images/uploads/2016-11-20/a5.png'),
(20, 'about', 'About Us', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature froLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,m 45 BC.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.', 'assets_web/images/uploads/2016-11-20/a.png'),
(23, 'appointment', 'Why Choose Us', 'Our department & special service ', 'assets_web/images/uploads/2016-11-20/a1.png'),
(26, 'doctor', 'OUR DOCTOR', 'Our department & special service ', 'assets_web/images/uploads/2016-11-20/a4.png'),
(27, 'department', 'DEPARTMENT', 'Our department & special service 2', 'assets_web/images/uploads/2016-11-20/a3.png'),
(28, 'blog', 'Lates Blog', 'Latest topics of the webstie', 'assets_web/images/uploads/2016-11-20/a2.png');

-- --------------------------------------------------------

--
-- Table structure for table `ws_setting`
--

DROP TABLE IF EXISTS `ws_setting`;
CREATE TABLE `ws_setting` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `copyright_text` varchar(255) DEFAULT NULL,
  `twitter_api` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `envelop` varchar(255) NOT NULL,
  `vimeo` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `dribbble` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `google_plus` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `time_slot` int(11) NOT NULL,
  `showdays` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ws_setting`
--

INSERT INTO `ws_setting` (`id`, `title`, `description`, `logo`, `favicon`, `meta_tag`, `meta_keyword`, `email`, `phone`, `address`, `copyright_text`, `twitter_api`, `google_map`, `facebook`, `twitter`, `linkedin`, `youtube`, `envelop`, `vimeo`, `instagram`, `dribbble`, `skype`, `google_plus`, `status`, `time_slot`, `showdays`) VALUES
(3, 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. ', 'assets/img/logo.png', 'assets/img/logo.png', 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai', 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai', 'demo@hospital.com', '0123456788', '123/A, Street, State-12345, Demo', '<p>Â© 2016 <a title=\"BdTask\" href=\"http://bdtask.com\" target=\"_blank\">bdtask</a>. All rights reservedÂ </p>', '<a class=\"twitter-timeline\" data-lang=\"en\" data-dnt=\"true\" data-link-color=\"#207FDD\" href=\"https://twitter.com/taylorswift13\">Tweets by taylorswift13</a> <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29215.021939977993!2d90.40923229999999!3d23.75173875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sbn!2sbd!4v1477987829881\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'https://www.facebook.com/drhiteshshah', 'https://twitter.com/sexologisttwitt', 'https://www.linkedin.com/in/drhitesh/', 'https://www.youtube.com/watch?v=g00Ua2QzNUc', 'mailto:drhiteshshah@gmail.com', NULL, NULL, NULL, NULL, 'https://plus.google.com/discover', 1, 30, '+7d');

-- --------------------------------------------------------

--
-- Table structure for table `ws_slider`
--

DROP TABLE IF EXISTS `ws_slider`;
CREATE TABLE `ws_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ws_slider`
--

INSERT INTO `ws_slider` (`id`, `title`, `subtitle`, `description`, `image`, `position`, `status`) VALUES
(1, 'Third Slide', 'Here is Demo Hospital slider', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it</p>', 'assets_web/images/slider/2016-11-20/P2.png', 3, 1),
(2, 'Second Slide', 'Demo Hospital', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>', 'assets_web/images/slider/2016-11-20/P1.png', 1, 1),
(5, 'First  Slide ', 'Welcome back - Second slide', '<p><strong>Lorem Ipsum</strong></p>\r\n<hr>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\r\n<p>- Demo Hospital Limited</p>', 'assets_web/images/slider/2016-11-20/P.png', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_appointment`
--
ALTER TABLE `clinic_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_holiday`
--
ALTER TABLE `clinic_holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_payment`
--
ALTER TABLE `clinic_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_timing`
--
ALTER TABLE `clinic_timing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_code`
--
ALTER TABLE `coupon_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dprt_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `master_admin`
--
ALTER TABLE `master_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_allergy`
--
ALTER TABLE `master_allergy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_appointmentstatus`
--
ALTER TABLE `master_appointmentstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_banner`
--
ALTER TABLE `master_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `master_casestudy`
--
ALTER TABLE `master_casestudy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_category`
--
ALTER TABLE `master_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_contact`
--
ALTER TABLE `master_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_content`
--
ALTER TABLE `master_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_diagnosis`
--
ALTER TABLE `master_diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_disease`
--
ALTER TABLE `master_disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_dosage`
--
ALTER TABLE `master_dosage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_enroll`
--
ALTER TABLE `master_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_exercise`
--
ALTER TABLE `master_exercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_fees`
--
ALTER TABLE `master_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_followup`
--
ALTER TABLE `master_followup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_habits`
--
ALTER TABLE `master_habits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_icon`
--
ALTER TABLE `master_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_industry`
--
ALTER TABLE `master_industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_investigation`
--
ALTER TABLE `master_investigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_lifestyle`
--
ALTER TABLE `master_lifestyle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_log`
--
ALTER TABLE `master_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_maritalstatus`
--
ALTER TABLE `master_maritalstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_medicine`
--
ALTER TABLE `master_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_occupation`
--
ALTER TABLE `master_occupation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_payment`
--
ALTER TABLE `master_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_physical_examination`
--
ALTER TABLE `master_physical_examination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_potency`
--
ALTER TABLE `master_potency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_qualification`
--
ALTER TABLE `master_qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_question`
--
ALTER TABLE `master_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_referby`
--
ALTER TABLE `master_referby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_subcategory`
--
ALTER TABLE `master_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_symptoms`
--
ALTER TABLE `master_symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_tag`
--
ALTER TABLE `master_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_testimonials`
--
ALTER TABLE `master_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_testimonials_handwritten`
--
ALTER TABLE `master_testimonials_handwritten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_token`
--
ALTER TABLE `master_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_family`
--
ALTER TABLE `patient_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_file`
--
ALTER TABLE `patient_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_followup`
--
ALTER TABLE `patient_followup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_lifestyle`
--
ALTER TABLE `patient_lifestyle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_master`
--
ALTER TABLE `patient_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_medical`
--
ALTER TABLE `patient_medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_spouse`
--
ALTER TABLE `patient_spouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_travel`
--
ALTER TABLE `patient_travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_treatment`
--
ALTER TABLE `patient_treatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ws_comment`
--
ALTER TABLE `ws_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ws_item`
--
ALTER TABLE `ws_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ws_section`
--
ALTER TABLE `ws_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ws_setting`
--
ALTER TABLE `ws_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ws_slider`
--
ALTER TABLE `ws_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `clinic_appointment`
--
ALTER TABLE `clinic_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clinic_holiday`
--
ALTER TABLE `clinic_holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clinic_payment`
--
ALTER TABLE `clinic_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clinic_timing`
--
ALTER TABLE `clinic_timing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupon_code`
--
ALTER TABLE `coupon_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dprt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_admin`
--
ALTER TABLE `master_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_allergy`
--
ALTER TABLE `master_allergy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_appointmentstatus`
--
ALTER TABLE `master_appointmentstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_banner`
--
ALTER TABLE `master_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_casestudy`
--
ALTER TABLE `master_casestudy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_category`
--
ALTER TABLE `master_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_contact`
--
ALTER TABLE `master_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_content`
--
ALTER TABLE `master_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `master_diagnosis`
--
ALTER TABLE `master_diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `master_disease`
--
ALTER TABLE `master_disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `master_dosage`
--
ALTER TABLE `master_dosage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `master_enroll`
--
ALTER TABLE `master_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_exercise`
--
ALTER TABLE `master_exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `master_fees`
--
ALTER TABLE `master_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_followup`
--
ALTER TABLE `master_followup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_habits`
--
ALTER TABLE `master_habits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `master_icon`
--
ALTER TABLE `master_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_industry`
--
ALTER TABLE `master_industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `master_investigation`
--
ALTER TABLE `master_investigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `master_lifestyle`
--
ALTER TABLE `master_lifestyle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_log`
--
ALTER TABLE `master_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `master_maritalstatus`
--
ALTER TABLE `master_maritalstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_medicine`
--
ALTER TABLE `master_medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_occupation`
--
ALTER TABLE `master_occupation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `master_payment`
--
ALTER TABLE `master_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `master_physical_examination`
--
ALTER TABLE `master_physical_examination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_potency`
--
ALTER TABLE `master_potency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `master_qualification`
--
ALTER TABLE `master_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `master_question`
--
ALTER TABLE `master_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `master_referby`
--
ALTER TABLE `master_referby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_subcategory`
--
ALTER TABLE `master_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=481;

--
-- AUTO_INCREMENT for table `master_symptoms`
--
ALTER TABLE `master_symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `master_tag`
--
ALTER TABLE `master_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_testimonials`
--
ALTER TABLE `master_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `master_testimonials_handwritten`
--
ALTER TABLE `master_testimonials_handwritten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_token`
--
ALTER TABLE `master_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `patient_family`
--
ALTER TABLE `patient_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient_file`
--
ALTER TABLE `patient_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_followup`
--
ALTER TABLE `patient_followup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_lifestyle`
--
ALTER TABLE `patient_lifestyle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_master`
--
ALTER TABLE `patient_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_medical`
--
ALTER TABLE `patient_medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_spouse`
--
ALTER TABLE `patient_spouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient_travel`
--
ALTER TABLE `patient_travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_treatment`
--
ALTER TABLE `patient_treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ws_comment`
--
ALTER TABLE `ws_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `ws_item`
--
ALTER TABLE `ws_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ws_section`
--
ALTER TABLE `ws_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ws_setting`
--
ALTER TABLE `ws_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ws_slider`
--
ALTER TABLE `ws_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
