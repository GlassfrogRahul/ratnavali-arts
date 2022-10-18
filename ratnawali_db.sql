-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 11:20 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Aniket', 'ratnavali@gmail.com', '12345');

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
  `token` text NOT NULL,
  `session` varchar(220) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_slots`
--

INSERT INTO `booked_slots` (`slot_id`, `user_id`, `first_name`, `last_name`, `phone`, `email`, `country_id`, `slot_type_id`, `slot_status`, `token`, `session`, `date`, `time`) VALUES
(11, 2, 'Priyanshu', 'Prajapati', '7533944601', 'priyanshu@glassfrog.design', 2, 1, 1, 'T1==cGFydG5lcl9pZD00NzU4MDg3MSZzaWc9YzcxN2VjOGZmM2Q2MDM5ZDBiOTlkZGQwMTU0OWJjZWQ3YjFlNGY4MzpzZXNzaW9uX2lkPTFfTVg0ME56VTRNRGczTVg1LU1UWTJORFEwTkRNd05UVTRNWDUyWWxrdlZVcHpNM0Z4UkhRNVJXbzRTRnBNYUhnNVpYRi1mZyZjcmVhdGVfdGltZT0xNjY0NDQ0MzA1JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NjQ0NDQzMDUuMzA5NDEyNDgwMTY4NzkmZXhwaXJlX3RpbWU9MTY2NTA0OTEwNSZjb25uZWN0aW9uX2RhdGE9bmFtZSUzRFByaXlhbnNodSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', '1_MX40NzU4MDg3MX5-MTY2NDQ0NDMwNTU4MX52YlkvVUpzM3FxRHQ5RWo4SFpMaHg5ZXF-fg', '2022-09-30', '16:00:00'),
(12, 2, 'Priyanshu', 'Prajapati', '7533944601', 'priyanshu@glassfrog.design', 2, 2, 1, 'T1==cGFydG5lcl9pZD00NzU4MDg3MSZzaWc9ODg0NGQzNWMxZTNmMjcxYjg2NzlkNDJjYTYwMDFmNmRjMTUzOTQ1ZDpzZXNzaW9uX2lkPTFfTVg0ME56VTRNRGczTVg1LU1UWTJORFEwTlRrM01qSTVNSDU2YlV4WU1XaElNR1JtUzJ4V01YTnJaWGRyYlZwaVl5dC1mZyZjcmVhdGVfdGltZT0xNjY0NDQ1OTcyJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NjQ0NDU5NzIuMDUzMjA4MTc2NzczNSZleHBpcmVfdGltZT0xNjY1MDUwNzcyJmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNEUHJpeWFuc2h1JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', '1_MX40NzU4MDg3MX5-MTY2NDQ0NTk3MjI5MH56bUxYMWhIMGRmS2xWMXNrZXdrbVpiYyt-fg', '2022-09-30', '17:00:00'),
(13, 3, 'Amit', 'Bajaj', '09212120292', 'abajajdun@gmail.com', 3, 2, 1, 'T1==cGFydG5lcl9pZD00NzU4MDg3MSZzaWc9Y2NhNDU4MDhmNDg1MTk4M2IzZDdjYjFkODllMzRlMWFkNTAyMzU2MzpzZXNzaW9uX2lkPTFfTVg0ME56VTRNRGczTVg1LU1UWTJORFV5TmpRMk5EWTVNSDVvY25ORk1FVlFjekV3UW5VMFUySjJVRlpxYW5BM1RHSi1mZyZjcmVhdGVfdGltZT0xNjY0NTI2NDY0JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NjQ1MjY0NjQuODEzODEyNTQ1NjkzNTgmZXhwaXJlX3RpbWU9MTY2NTEzMTI2NCZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREFtaXQmaW5pdGlhbF9sYXlvdXRfY2xhc3NfbGlzdD1mb2N1cw==', '1_MX40NzU4MDg3MX5-MTY2NDUyNjQ2NDY5MH5ocnNFMEVQczEwQnU0U2J2UFZqanA3TGJ-fg', '2022-10-03', '17:00:00'),
(14, 1, 'Rahul', 'Rana', '08449950998', 'rahul@glassfrog.design', 2, 1, 1, 'T1==cGFydG5lcl9pZD00NzU4MDg3MSZzaWc9NjM4MGY3YjVmYzRjYTcxMzljNmQ2NzA3NTYwZThkMjkxOTBlYzE3ZDpzZXNzaW9uX2lkPTFfTVg0ME56VTRNRGczTVg1LU1UWTJORFV6TVRNM09EQTVOWDVZWmxwTk1rMUpSMGhOYlZOVmVscG9ZM1pLUmxOb00wMS1mZyZjcmVhdGVfdGltZT0xNjY0NTMxMzc4JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NjQ1MzEzNzguMjE1NzE2ODU2NDY3MDYmZXhwaXJlX3RpbWU9MTY2NTEzNjE3OCZjb25uZWN0aW9uX2RhdGE9bmFtZSUzRFJhaHVsJmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', '1_MX40NzU4MDg3MX5-MTY2NDUzMTM3ODA5NX5YZlpNMk1JR0hNbVNVelpoY3ZKRlNoM01-fg', '2022-10-03', '16:00:00'),
(15, 2, 'Rebekah', 'Daugherty', '98', 'tyjepeniko@mailinator.com', 7, 1, 1, 'T1==cGFydG5lcl9pZD00NzU4MDg3MSZzaWc9MzJmOTE0YzhmZjIwZWZjYWMyZmRkODNjOWFlYjQzY2QxNTQ5ZGU0MzpzZXNzaW9uX2lkPTJfTVg0ME56VTRNRGczTVg1LU1UWTJORFV6TVRZNU56WXpNbjVCUzBKSVpYbFJNR1pWUkcxRGJVMWlOMnRvZGpnM1NITi1mZyZjcmVhdGVfdGltZT0xNjY0NTMxNjk3JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NjQ1MzE2OTcuNzQ0MjgzNjMzMzU3NyZleHBpcmVfdGltZT0xNjY1MTM2NDk3JmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNEUmViZWthaCZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', '2_MX40NzU4MDg3MX5-MTY2NDUzMTY5NzYzMn5BS0JIZXlRMGZVRG1DbU1iN2todjg3SHN-fg', '2022-10-07', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `first_name`, `last_name`, `phone`, `email`, `message`, `created_at`) VALUES
(1, 'Demo', 'Name', '08449950998', '0', '0', '2022-10-03 15:19:57'),
(2, 'Demo', 'Name', '08449950998', 'rahul@glassfrog.design', 'HI hello', '2022-10-18 12:01:41');

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
(1, 'rahul@glassfrog.design', 'cb0be96f8987916ab91e638b6abd85f8', 'Rahul Rana', '1', '8449950998', NULL, '2022-09-22 16:49:52'),
(2, 'priyanshu@glassfrog.design', '827ccb0eea8a706c4c34a16891f84e7b', 'priyanshu', '2', '7533944601', NULL, '2022-09-29 11:54:02'),
(3, 'abajajdun@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Amit Bajaj', '3', '09212120292', NULL, '2022-09-30 13:56:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_slots`
--
ALTER TABLE `booked_slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booked_slots`
--
ALTER TABLE `booked_slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
