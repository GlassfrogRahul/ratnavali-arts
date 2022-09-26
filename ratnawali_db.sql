-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 12:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ratnawali_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_slots`
--

CREATE TABLE `booked_slots` (
  `slot_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `slot_type_id` int(11) NOT NULL,
  `slot_status` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_slots`
--

INSERT INTO `booked_slots` (`slot_id`, `user_id`, `first_name`, `last_name`, `phone`, `email`, `country_id`, `slot_type_id`, `slot_status`, `date`, `time`) VALUES
(1, 1, 'Rahul', 'Rana', '08449950998', 'rahul@glassfrog.design', 2, 1, 1, '2022-09-26', '16:00:00'),
(2, 1, 'Rahul', 'Rana', '08449950998', 'sanjay@cityheart.com', 4, 1, 1, '2022-09-27', '16:00:00'),
(3, 1, 'Rahul', 'Rana', '08449950998', 'rahul@glassfrog.design', 4, 1, 1, '2022-09-29', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` text NOT NULL,
  `country_code` int(11) NOT NULL,
  `timezone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `country_code`, `timezone`) VALUES
(2, 'Japan', 81, 'JST'),
(3, 'UK', 44, 'Europe/London'),
(4, 'USA - PST', 1, 'PST'),
(6, 'USA - CST', 1, 'CST'),
(7, 'USA - EST', 1, 'America/New_York');

-- --------------------------------------------------------

--
-- Table structure for table `slot_types`
--

CREATE TABLE `slot_types` (
  `slot_type_id` int(11) NOT NULL,
  `slot_time` time NOT NULL,
  `monday_active` tinyint(1) NOT NULL,
  `tuesday_active` tinyint(1) NOT NULL,
  `wednesday_active` tinyint(1) NOT NULL,
  `thursday_active` tinyint(1) NOT NULL,
  `friday_active` tinyint(1) NOT NULL,
  `saturday_active` tinyint(1) NOT NULL,
  `sunday_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot_types`
--

INSERT INTO `slot_types` (`slot_type_id`, `slot_time`, `monday_active`, `tuesday_active`, `wednesday_active`, `thursday_active`, `friday_active`, `saturday_active`, `sunday_active`) VALUES
(1, '16:00:00', 1, 1, 1, 1, 1, 0, 0),
(2, '17:00:00', 1, 0, 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `country` text NOT NULL,
  `phone` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `country`, `phone`, `image`, `created_at`) VALUES
(1, 'rahul@glassfrog.design', 'cb0be96f8987916ab91e638b6abd85f8', 'Rahul Rana', '1', '8449950998', NULL, '2022-09-22 16:49:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_slots`
--
ALTER TABLE `booked_slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `slot_types`
--
ALTER TABLE `slot_types`
  ADD PRIMARY KEY (`slot_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_slots`
--
ALTER TABLE `booked_slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slot_types`
--
ALTER TABLE `slot_types`
  MODIFY `slot_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
