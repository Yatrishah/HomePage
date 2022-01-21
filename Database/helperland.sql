-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 09:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helperland`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin refund`
--

CREATE TABLE `admin refund` (
  `Refund_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL,
  `Refund_amount` float NOT NULL,
  `Total_refund_amount` float NOT NULL,
  `Refund_comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_postal_code` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `msg_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` int(50) NOT NULL,
  `message_type` varchar(40) NOT NULL,
  `message` varchar(300) NOT NULL,
  `attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `extraservices`
--

CREATE TABLE `extraservices` (
  `extra_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `extra_service_name` varchar(50) NOT NULL,
  `extra_service_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favourite sp`
--

CREATE TABLE `favourite sp` (
  `favourite_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `Favourite` varchar(50) NOT NULL,
  `Not Favourite` varchar(50) NOT NULL,
  `Block sp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification_id`
--

CREATE TABLE `notification_id` (
  `notification_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `notification message` varchar(50) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servicehistory`
--

CREATE TABLE `servicehistory` (
  `service_history_id` int(11) NOT NULL,
  `time_of_completed` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servicerating`
--

CREATE TABLE `servicerating` (
  `service_rating_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `on_time_arrival` int(11) NOT NULL,
  `friendly` int(11) NOT NULL,
  `quality_of_service` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_date` date NOT NULL,
  `service_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cust_id` int(11) NOT NULL,
  `working_hour` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `postcode` int(11) NOT NULL,
  `extra` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `have_pet` tinyint(1) NOT NULL,
  `address_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street_name` varchar(250) NOT NULL,
  `house_number` varchar(250) NOT NULL,
  `is_selected` tinyint(1) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `is_verfied` tinyint(1) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin refund`
--
ALTER TABLE `admin refund`
  ADD PRIMARY KEY (`Refund_id`),
  ADD KEY `Admin_id` (`Admin_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `extraservices`
--
ALTER TABLE `extraservices`
  ADD PRIMARY KEY (`extra_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `favourite sp`
--
ALTER TABLE `favourite sp`
  ADD PRIMARY KEY (`favourite_id`),
  ADD KEY `sp_id` (`sp_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `notification_id`
--
ALTER TABLE `notification_id`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `servicehistory`
--
ALTER TABLE `servicehistory`
  ADD PRIMARY KEY (`service_history_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `servicerating`
--
ALTER TABLE `servicerating`
  ADD PRIMARY KEY (`service_rating_id`),
  ADD KEY `sp_id` (`sp_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `services_ibfk_1` (`address_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin refund`
--
ALTER TABLE `admin refund`
  MODIFY `Refund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extraservices`
--
ALTER TABLE `extraservices`
  MODIFY `extra_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite sp`
--
ALTER TABLE `favourite sp`
  MODIFY `favourite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_id`
--
ALTER TABLE `notification_id`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicehistory`
--
ALTER TABLE `servicehistory`
  MODIFY `service_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicerating`
--
ALTER TABLE `servicerating`
  MODIFY `service_rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin refund`
--
ALTER TABLE `admin refund`
  ADD CONSTRAINT `admin refund_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `extraservices`
--
ALTER TABLE `extraservices`
  ADD CONSTRAINT `extraservices_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `favourite sp`
--
ALTER TABLE `favourite sp`
  ADD CONSTRAINT `favourite sp_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `favourite sp_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `notification_id`
--
ALTER TABLE `notification_id`
  ADD CONSTRAINT `notification_id_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `notification_id_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `servicehistory`
--
ALTER TABLE `servicehistory`
  ADD CONSTRAINT `servicehistory_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `servicerating`
--
ALTER TABLE `servicerating`
  ADD CONSTRAINT `servicerating_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `servicerating_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD CONSTRAINT `useraddress_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
