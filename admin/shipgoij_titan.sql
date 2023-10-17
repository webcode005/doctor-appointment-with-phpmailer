-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2023 at 01:11 PM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipgoij_titan`
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
(3, 'Media', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'https://hotremai.org/listing/register', '2023-09-13', '14', 'tesfgdf', '2023-09-11 04:25:44'),
(4, 'mohammad kaleem', 'Website', 'kaleemw@gmail.com', '8687698698', 'mohammadkaleem.com', '2023-09-13', '1', 'test message', '2023-09-11 06:32:49'),
(5, 'mohammad kaleem', 'Website', 'kaleemw@gmail.com', '8687698698', 'website', '2023-09-16', '10', 'asasa', '2023-09-14 06:49:01');

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
(5, '10', '2023-09-16', '1', '5', '2023-09-14 18:49:01');

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
(2, 'Basant Mallick 123', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', 'Bronze', '395', '', '1', '2023-09-10 11:49:25'),
(3, 'mohammad kaleem', 'website', 'kaleemw@gmail.com', '8687698698', 'www.mohammadkaleem.com', 'Silver', '695', '', '', '2023-09-11 06:34:20'),
(4, 'Basant Mallick', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', 'Bronze', '395', '', '', '2023-09-15 05:38:15'),
(5, 'Basant Mallick', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', 'Bronze', '395', '', '', '2023-09-15 05:41:47'),
(6, 'Basant Mallick', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', 'Bronze', '395', '', '', '2023-09-15 05:42:05'),
(7, 'Basant Mallick', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', 'Bronze', '395', '', '', '2023-09-15 05:43:15'),
(8, 'Basant Mallick', 'abc', 'basant.mallick@digiclawmedia.com', '08523697410', 'www.abcd.com', 'Bronze', '395', '', '', '2023-09-15 07:31:37');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stripe_payment`
--

INSERT INTO `stripe_payment` (`id`, `fullname`, `email`, `item_description`, `currency`, `amount`, `transaction_id`, `payment_status`, `created_at`) VALUES
(1, 'Mohammad kaleem', 'basant.mallick@digiclawmedia.com', 'Laptop Bag', 'usd', 1.00, 'pi_3NqaKrKf4SeJUQvX0HxqYX7S', 'succeeded', '2023-09-15 07:41:08');

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
(2, '', 'Abc company limited', 'aarti.pdf', 'movie.mp4', '2023-09-16 16:42:38'),
(4, '16/09/2023', 'ABC car rent limited', 'dsf.jpg', 'movie.mp4', '2023-09-16 17:05:09');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booked_slot`
--
ALTER TABLE `booked_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_time`
--
ALTER TABLE `book_time`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stripe_payment`
--
ALTER TABLE `stripe_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `UDatarecords`
--
ALTER TABLE `UDatarecords`
  MODIFY `udrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
