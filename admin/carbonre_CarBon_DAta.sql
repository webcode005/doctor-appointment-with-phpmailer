-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2023 at 12:50 PM
-- Server version: 10.6.15-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbonre_CarBon_DAta`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `comp_name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `website` varchar(120) NOT NULL,
  `bdate` varchar(50) NOT NULL,
  `btime` varchar(20) NOT NULL,
  `remarks` text NOT NULL,
  `rdate` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `comp_name`, `email`, `phone`, `website`, `bdate`, `btime`, `remarks`, `rdate`) VALUES
(2, 'Basant Mallick', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', '2023-09-10', '1', 'test', '2023-09-10 11:13:30'),
(3, 'Media', 'abcdef', 'basant.mallick@digiclawmedia.com', '08523697410', 'https://hotremai.org/listing/register', '2023-09-13', '14', 'tesfgdf', '2023-09-11 04:25:44'),
(4, 'mohammad kaleem', 'Website', 'kaleemw@gmail.com', '8687698698', 'mohammadkaleem.com', '2023-09-13', '1', 'test message', '2023-09-11 06:32:49'),
(5, 'mohammad kaleem', 'Website', 'kaleemw@gmail.com', '8687698698', 'website', '2023-09-16', '10', 'asasa', '2023-09-14 06:49:01'),
(6, 'Mohammad Kalee', 'Website Designer ', 'mohammadkaleem61@gmail.com', '8527554620', 'www.mohammadkaleem.com', '2023-09-21', '9', 'This is testing', '2023-09-20 04:43:08'),
(7, 'Mohammed Ali', 'Titan', 'sal202020@gmail.com', '07866202020', 'titan.co.uk', '2023-10-18', '6', 'I need a CRP', '2023-10-16 09:15:09'),
(8, 'xyz', 'abc', 'aliabrarkhan@gmail.com', '7888598486', 'www', '2023-10-16', '', 'need help', '2023-10-16 12:38:38'),
(20, 'Media', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', '2023-10-17', '1', 'testing', '2023-10-17 11:40:56'),
(19, 'Media', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', '2023-10-17', '1', 'testing', '2023-10-17 11:39:50'),
(18, 'Media', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', '2023-10-17', '1', 'testing', '2023-10-17 11:37:51'),
(17, 'Media', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', '2023-10-17', '1', 'testing', '2023-10-17 11:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `booked_slot`
--

CREATE TABLE `booked_slot` (
  `id` int(11) NOT NULL,
  `book_time` varchar(120) NOT NULL,
  `book_date` varchar(120) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `book_id` varchar(25) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booked_slot`
--

INSERT INTO `booked_slot` (`id`, `book_time`, `book_date`, `status`, `book_id`, `crdate`) VALUES
(2, '14', '2023-09-16', '1', '3', '2023-09-11 20:25:44'),
(3, '1', '2023-09-18', '1', '4', '2023-09-11 18:32:49'),
(4, '12', '2023-09-18', '1', '4', '2023-09-11 18:32:49'),
(5, '10', '2023-09-16', '1', '5', '2023-09-14 18:49:01'),
(6, '9', '2023-09-21', '1', '6', '2023-09-20 16:43:08'),
(7, '6', '2023-10-18', '1', '7', '2023-10-16 09:15:09'),
(8, '', '2023-10-16', '1', '8', '2023-10-16 12:38:38'),
(9, '1', '2023-10-17', '1', '9', '2023-10-17 11:11:54'),
(10, '1', '2023-10-17', '1', '10', '2023-10-17 11:13:04'),
(11, '1', '2023-10-17', '1', '11', '2023-10-17 11:14:20'),
(12, '1', '2023-10-17', '1', '12', '2023-10-17 11:29:14'),
(13, '1', '2023-10-17', '1', '13', '2023-10-17 11:29:28'),
(14, '1', '2023-10-17', '1', '14', '2023-10-17 11:30:14'),
(15, '1', '2023-10-17', '1', '15', '2023-10-17 11:34:26'),
(16, '1', '2023-10-17', '1', '16', '2023-10-17 11:34:47'),
(17, '1', '2023-10-17', '1', '17', '2023-10-17 11:36:56'),
(18, '1', '2023-10-17', '1', '18', '2023-10-17 11:37:51'),
(19, '1', '2023-10-17', '1', '19', '2023-10-17 11:39:50'),
(20, '1', '2023-10-17', '1', '20', '2023-10-17 11:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `book_time`
--

CREATE TABLE `book_time` (
  `bid` int(11) NOT NULL,
  `booking_time` varchar(60) NOT NULL,
  `book_time` varchar(120) NOT NULL,
  `book_date` varchar(120) NOT NULL,
  `status` varchar(25) NOT NULL,
  `book_id` varchar(25) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book_time`
--

INSERT INTO `book_time` (`bid`, `booking_time`, `book_time`, `book_date`, `status`, `book_id`, `crdate`) VALUES
(1, '9:30 - 10:00 AM', '', '', '', '', '2023-09-11 20:44:02'),
(2, '10:00 - 10:30 AM', '', '', '', '', '2023-09-11 20:44:02'),
(3, '10:30 - 11:00 AM', '', '', '', '', '2023-09-11 20:44:02'),
(4, '11:00 - 10:30 AM', '', '', '', '', '2023-09-11 20:44:02'),
(5, '11:30 - 12:00 AM', '', '', '', '', '2023-09-11 20:44:02'),
(6, '12:00 - 12:30 PM', '', '', '', '', '2023-09-11 20:44:02'),
(7, '12:30 - 1:30 PM', '', '', '', '', '2023-09-11 20:44:02'),
(8, '1:30 - 2:00 PM', '', '', '', '', '2023-09-11 20:44:02'),
(9, '2:00 - 2:30 PM', '', '', '', '', '2023-09-11 20:44:02'),
(10, '2:30 - 3:00 PM', '', '', '', '', '2023-09-11 20:44:02'),
(11, '3:00 - 3:30 PM', '', '', '', '', '2023-09-11 20:44:02'),
(12, '3:00 - 4:00 PM', '', '', '', '', '2023-09-11 20:44:02'),
(13, '4:00 - 4:30 PM', '', '', '', '', '2023-09-11 20:44:02'),
(14, '4:30 - 5:00 PM', '', '', '', '', '2023-09-11 20:44:02'),
(15, '5:00 - 5:30 PM', '', '', '', '', '2023-09-11 20:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `main_admin`
--

CREATE TABLE `main_admin` (
  `id` int(11) NOT NULL,
  `username11` varchar(25) NOT NULL,
  `password11` varchar(120) NOT NULL,
  `passwords` varchar(25) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `main_admin`
--

INSERT INTO `main_admin` (`id`, `username11`, `password11`, `passwords`, `reg_date`) VALUES
(1, 'global', 'a5d6b0388aa69d1f34fc13a60a0477d4', 'Services@321', '2023-09-17 11:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `comp_name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `website` varchar(120) NOT NULL,
  `service` varchar(120) NOT NULL,
  `price` varchar(25) NOT NULL,
  `txn_no` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `rdate` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `comp_name`, `email`, `phone`, `website`, `service`, `price`, `txn_no`, `payment_status`, `rdate`) VALUES
(10, 'Mohammad Kaleem', 'Website Designer ', 'mohammadkaleem61@gmail.com', '8527554620', 'www.mohammadkaleem.com', 'Gold', '895', '', '', '2023-09-20 04:44:50'),
(3, 'mohammad kaleem', 'Website', 'kaleemw@gmail.com', '8687698698', 'www.mohammadkaleem.com', 'Silver', '695', '', '', '2023-09-11 06:34:20'),
(4, 'Basant Mallick', 'Abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', 'Bronze', '395', '', '', '2023-09-15 05:38:15'),
(11, 'Basant Mallick', 'Abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', 'Bronze', '474', '', '', '2023-09-22 05:14:13'),
(9, 'Mohammad Kaleem', 'Website Designer', 'mohammadkaleem6@gmail.com', '8527554620', 'www.mohammadkaleem.com', 'Gold', '895', '', '', '2023-09-17 07:59:44'),
(12, 'Mohammed Ali', 'Titan', 'sal202020@gmail.com', '07866202020', 'titan.co.uk', 'Bronze', '474', '', '', '2023-10-16 08:14:00'),
(13, 'Mohammed Ali', 'Titan', 'sal202020@gmail.com', '07866202020', 'titan.co.uk', 'Bronze', '474', '', '', '2023-10-16 09:12:03'),
(14, 'Web Expert', 'EWS Technologies', 'domain@webxpertindia.com', '08527554620', 'www.mohammadkaleem.com', 'Test', '12', '', '', '2023-10-16 09:24:12'),
(15, 'Mohammed Ali', 'Titan', 'sal202020@gmail.com', '07866202020', 'titan.co.uk', 'Test', '12', '', '', '2023-10-16 09:24:30'),
(16, 'Mohammed Ali', 'Titan', 'sal202020@gmail.com', '07866202020', 'titan.co.uk', 'Test', '6', '', '', '2023-10-16 09:32:14'),
(21, 'Basant Mallick111', 'Abc111', 'basant.mallick@digiclawmedia.com', '08523697410', 'https://hotremai.org/listing/register', 'Bronze', '474', '', '', '2023-10-17 11:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `stripe_payment`
--

CREATE TABLE `stripe_payment` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `stripe_payment`
--

INSERT INTO `stripe_payment` (`id`, `fullname`, `email`, `item_description`, `currency`, `amount`, `transaction_id`, `payment_status`, `created_at`) VALUES
(1, 'Basant Mallick', 'basant.mallick@digiclawmedia.com', '3', 'usd', 1.00, 'pi_3NqaKrKf4SeJUQvX0HxqYX7S', 'succeeded', '2023-09-15 07:41:08'),
(2, 'Mohammad kaleem', 'basant.mallick@digiclawmedia.com', '4', 'usd', 1.00, 'pi_3NqaKrKf4SeJUQvX0HxqYX7S', 'succeeded', '2023-09-15 07:41:08'),
(3, 'Mohammed Ali', 'sal202020@gmail.com', '15', 'eur', 12.00, 'pi_3O1n2JKf4SeJUQvX07BoPbva', 'succeeded', '2023-10-16 10:25:20'),
(4, 'Mohammed Ali', 'sal202020@gmail.com', '16', 'eur', 6.00, 'pi_3O1n9nKf4SeJUQvX1TbOtdsU', 'succeeded', '2023-10-16 10:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `UDatarecords`
--

CREATE TABLE `UDatarecords` (
  `udrid` int(11) NOT NULL,
  `udate` varchar(120) NOT NULL,
  `comp_name` varchar(120) NOT NULL,
  `pdf` varchar(120) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `UDatarecords`
--

INSERT INTO `UDatarecords` (`udrid`, `udate`, `comp_name`, `pdf`, `video`, `created_date`) VALUES
(7, '17/09/2023', 'Abc', '621419700048766_signed (1)_unlocked.pdf', 'video (2160p).mp4', '2023-09-17 16:52:09'),
(8, '20/09/2023', 'Website Designer ', 'SMFG EMI September Pay Slip.pdf', 'video (2160p).mp4', '2023-09-20 16:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `uvideos`
--

CREATE TABLE `uvideos` (
  `vid` int(11) NOT NULL,
  `consultation_id` int(11) NOT NULL,
  `videos` varchar(255) NOT NULL,
  `up_date` varchar(25) NOT NULL,
  `regdata` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `uvideos`
--

INSERT INTO `uvideos` (`vid`, `consultation_id`, `videos`, `up_date`, `regdata`) VALUES
(2, 7, '1695058889_2022_01_31_143451.mp4', '2023-09-18', '2023-09-18 18:06:28'),
(3, 7, '1695059039_2022_01_31_142636.mp4', '2023-09-19', '2023-09-18 17:44:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_slot`
--
ALTER TABLE `booked_slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_time`
--
ALTER TABLE `book_time`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `main_admin`
--
ALTER TABLE `main_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_payment`
--
ALTER TABLE `stripe_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `UDatarecords`
--
ALTER TABLE `UDatarecords`
  ADD PRIMARY KEY (`udrid`);

--
-- Indexes for table `uvideos`
--
ALTER TABLE `uvideos`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `booked_slot`
--
ALTER TABLE `booked_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `book_time`
--
ALTER TABLE `book_time`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `main_admin`
--
ALTER TABLE `main_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stripe_payment`
--
ALTER TABLE `stripe_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `UDatarecords`
--
ALTER TABLE `UDatarecords`
  MODIFY `udrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uvideos`
--
ALTER TABLE `uvideos`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
