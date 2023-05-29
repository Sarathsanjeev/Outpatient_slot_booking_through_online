-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 02:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `op`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` enum('male','female','other') NOT NULL,
  `marital_status` enum('married','unmarried') NOT NULL,
  `password` varchar(255) NOT NULL,
  `reason_for_registration` text DEFAULT NULL,
  `additional_notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `sex`, `marital_status`, `password`, `reason_for_registration`, `additional_notes`, `created_at`) VALUES
(1, 's', 's@gmail.com', '9874562135', 's', 'male', '', '123', 's', 's', '2023-04-02 08:32:09'),
(8, 's', 'sai@gmail.com', '9632145789', 'z', 'male', 'unmarried', 's', 's', 's', '2023-04-07 07:38:01'),
(9, 'v', 'v@gmail.com', '9632145756', 'a', 'male', 'unmarried', '$2y$10$VPFV5Q8GlqFrE1PAyOuIF.F/m9LlAQQQgXvEowLEnh5BF7bTITXtO', 's', 'a', '2023-04-07 07:58:26'),
(28, 'a', 'va2@gmail.com', '9654781256', 'a', 'male', 'unmarried', '$2y$10$INkGFPzyepkzCX5cCo5OHeQETihVnicOnyOIGbh7IOuBAm2.oXXn.', 'a', 'a', '2023-04-07 08:52:34'),
(32, 'aa', 's1@gmail.com', '9874562135', 's', 'male', 'unmarried', '$2y$10$mZqnt.QqWdtw7KZlYzRvDOvkzjpGPUtr/PDtsYb16bfioPIp6NkIC', 'a', 'a', '2023-04-07 10:06:00'),
(33, 'aa', '1@gmail.com', '9874512458', 's', 'male', 'unmarried', '$2y$10$xHtuOQqu.UwSny5UT4UcY.xy9Yzxepe.47tgAiGGA6JmiZHZ4vI.K', 'a', 'a', '2023-04-07 10:38:51'),
(34, 'az', '12@gmail.com', '9645123569', 'a', 'male', 'unmarried', '$2y$10$L2/ipdMQPWlGlylcWPtDTOPG1NaaqJX2G/y0b5hbkaw0/PROWl6aa', 'a', 'a', '2023-04-07 12:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
