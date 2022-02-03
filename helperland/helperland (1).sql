-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 05:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Id` int(11) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `StateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactUsId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` varchar(500) DEFAULT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Message` longtext NOT NULL,
  `UploadFileName` varchar(100) DEFAULT NULL,
  `CreatedOn` datetime(3) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `FileName` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactUsId`, `Name`, `Email`, `Subject`, `PhoneNumber`, `Message`, `UploadFileName`, `CreatedOn`, `CreatedBy`, `FileName`) VALUES
(63, 'YatriShah', 'yatri.shah03@gmail.com', 'Message', '9426769464', 'Regarding SMS', 'avatar-iron.png', '2022-02-02 10:17:41.000', NULL, 'avatar-iron.png'),
(64, 'DrashyaMehta', 'drashyatri1726@gmail.com', 'Hi', '9909909223', 'Regarding SMS', 'helper456.png', '2022-02-02 11:36:39.000', NULL, 'helper456.png'),
(65, 'prishakothari', 'jkm483@gmail.com', 'hi', '9699187189', 'Regarding SMS', 'avatar-car.png', '2022-02-02 12:50:20.000', NULL, 'avatar-car.png'),
(66, 'yatriKothari', 'yatri.shah03@gmail.com', '123', '999', 'Regarding SMS', 'avatar-car.png', '2022-02-03 03:45:46.000', NULL, 'avatar-car.png'),
(67, 'yatriKothari', 'yatri.shah03@gmail.com', 'xx', '00', 'Regarding SMS', 'avatar-female.png', '2022-02-03 06:54:03.000', NULL, 'avatar-female.png'),
(68, 'yatriKothari', 'yatri.shah03@gmail.com', 'zz', '111', 'Regarding SMS', 'arrow2.png', '2022-02-03 06:55:21.000', NULL, 'arrow2.png'),
(69, 'yatriKothari', 'yatri.shah03@gmail.com', 'zz', '111', 'Regarding SMS', 'arrow2.png', '2022-02-03 06:56:07.000', NULL, 'arrow2.png'),
(70, '', '', '', '', '', '', '2022-02-03 06:56:09.000', NULL, ''),
(71, '', '', '', '', '', '', '2022-02-03 06:56:31.000', NULL, ''),
(72, '', '', '', '', '', '', '2022-02-03 06:56:32.000', NULL, ''),
(73, '', '', '', '', '', '', '2022-02-03 06:56:33.000', NULL, ''),
(74, '', '', '', '', '', '', '2022-02-03 06:56:34.000', NULL, ''),
(75, '', '', '', '', '', '', '2022-02-03 06:56:58.000', NULL, ''),
(76, '', '', '', '', '', '', '2022-02-03 06:57:01.000', NULL, ''),
(77, '', '', '', '', '', '', '2022-02-03 06:57:46.000', NULL, ''),
(78, 'yatriKothari', 'drashyatri1726@gmail.com', 'zz', '111', 'k', 'arrow-down.png', '2022-02-03 06:58:38.000', NULL, 'arrow-down.png'),
(79, 'yatriKothari', 'yatri.shah03@gmail.com', 'zz', '1', '.', 'avatar-hat.png', '2022-02-03 07:01:08.000', NULL, 'avatar-hat.png'),
(80, 'yatriKothari', 'yatri.shah03@gmail.com', 'xx', '11', 'k', 'arrow2.png', '2022-02-03 07:05:29.000', NULL, 'arrow2.png'),
(81, 'yatri  c', 'yatri.shah03@gmail.com', 'z', '9', 'Regarding SMS', 'admin.png', '2022-02-03 07:07:10.000', NULL, 'admin.png'),
(82, 'yatriKothari', 'yatri.shah03@gmail.com', '0', '00', '0', 'admin.png', '2022-02-03 07:07:56.000', NULL, 'admin.png'),
(83, 'yatrix', 'yatri.shah03@gmail.com', 'z', '1', 'xx', 'australia.svg', '2022-02-03 07:09:06.000', NULL, 'australia.svg'),
(84, 'yatriKothari', 'yatri.shah03@gmail.com', 'xx', '21', '11', 'avatar-hat.png', '2022-02-03 07:10:35.000', NULL, 'avatar-hat.png'),
(85, 'yatriKothari', 'yatri.shah03@gmail.com', 'xx', '21', '11', 'avatar-hat.png', '2022-02-03 07:11:01.000', NULL, 'avatar-hat.png'),
(86, 'yatrij', 'yatri.shah03@gmail.com', 'xx', '11', '11', 'avatar-hat.png', '2022-02-03 07:13:37.000', NULL, 'avatar-hat.png'),
(87, 'ya', 'yatri.shah03@gmail.com', 'x', '11', 'xx', 'australia.svg', '2022-02-03 07:14:42.000', NULL, 'australia.svg'),
(88, 'yatriKothari', 'yatri.shah03@gmail.com', 'x', '11', 'zzz', 'avatar-female.png', '2022-02-03 07:18:44.000', NULL, 'avatar-female.png'),
(89, 'yatrioooo', 'yatri.shah03@gmail.com', 'z', '11', 'h', 'avatar-female.png', '2022-02-03 07:19:35.000', NULL, 'avatar-female.png'),
(90, 'yatriKothari', 'yatri.shah03@gmail.com', 'xx', '1', '.', 'arrow-right.png', '2022-02-03 07:20:21.000', NULL, 'arrow-right.png'),
(91, 'yatriKothari', 'yatri.shah03@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxx', '11', 'aa', 'avatar-car.png', '2022-02-03 07:23:42.000', NULL, 'avatar-car.png'),
(92, 'yatriKothari', 'yatri.shah03@gmail.com', 'zz', '123', '1', 'avatar-female.png', '2022-02-03 07:53:02.000', NULL, 'avatar-female.png'),
(93, 'yatriKothari', 'yatri.shah03@gmail.com', 'xx', '11', '.', 'arrow-right.png', '2022-02-03 07:55:43.000', NULL, 'arrow-right.png'),
(94, 'cc', 'yatri.shah03@gmail.com', 'xx', '1', 'c', 'avatar-hat.png', '2022-02-03 08:05:51.000', NULL, 'avatar-hat.png'),
(95, 'jc', 'yatri.shah03@gmail.com', 'xx', '1', 'hhhhh', 'avatar-car.png', '2022-02-03 08:08:46.000', NULL, 'avatar-car.png'),
(96, 'yatriKothari', 'yatri.shah03@gmail.com', 'x', '11', 'z', 'australia.svg', '2022-02-03 08:09:42.000', NULL, 'australia.svg'),
(97, 'qMehta', 'yatri.shah03@gmail.com', 'xx', '1', 'Regarding SMS', 'australia.svg', '2022-02-03 08:10:36.000', NULL, 'australia.svg'),
(98, 'aa', 'yatri.shah03@gmail.com', '1', '1', 'k', 'arrow-right.png', '2022-02-03 08:11:56.000', NULL, 'arrow-right.png'),
(99, 'xKothari', '190773107023@socet.edu.in', 'x', '1', 'Regarding SMS', 'australia.svg', '2022-02-03 08:13:31.000', NULL, 'australia.svg'),
(100, 'yatric', 'yatri.shah03@gmail.com', 'x', '1', '1', 'avatar-car.png', '2022-02-03 08:14:03.000', NULL, 'avatar-car.png'),
(101, 'yatriKothari', 'yatri.shah03@gmail.com', 'X', '1', '1', 'arrow-right.png', '2022-02-03 08:15:50.000', NULL, 'arrow-right.png'),
(102, 'yatriKothari', 'yatri.shah03@gmail.com', 'ss', '11', 'c', '4.pdf', '2022-02-03 16:58:59.000', NULL, '4.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contactusattachment`
--

CREATE TABLE `contactusattachment` (
  `ContactUsAttachmentId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FileName` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favoriteandblocked`
--

CREATE TABLE `favoriteandblocked` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `TargetUserId` int(11) NOT NULL,
  `IsFavorite` tinyint(4) NOT NULL,
  `IsBlocked` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('jerrymarathe11@gmail.com', 'c5f3c9fc85ccdb1f13c2de88ae82e5986069c0a84e', '2022-02-03 04:18:06'),
('yatri.shah03@gmail.com', '6c274040e2837a7636a1d321243e79e75915bbb387', '2022-02-03 04:18:23'),
('yatri.shah03@gmail.com', 'c916f5c8532a10bdd665169e166e015c71c6a29350', '2022-02-03 04:29:35'),
('190773107023@socet.edu.in', 'a00d4db6d2cec8a7b7857f41bea20eb08c6e15b598', '2022-02-03 04:31:38'),
('190773107023@socet.edu.in', '6e3045a65bcd30a586880170bfa063f89e4ff9f099', '2022-02-03 04:32:30'),
('190773107023@socet.edu.in', '51a04da0e6e27f579331aef01a538d67a619a76baa', '2022-02-03 04:32:44'),
('yatri.shah03@gmail.com', 'bbf9b00165efb46a1344b895aa8a2662bb5f0c03a3', '2022-02-03 04:43:01'),
('siya@gmail.com', '5a5c27f0f104290762f57142d796a12f4876ff6566', '2022-02-03 04:43:27'),
('yatri.shah03@gmail.com', '8adccf6ce27a2c1fffeeb502022f4ce2db27413d82', '2022-02-03 05:23:24'),
('jerrymarathe11@gmail.com', '3c28469320e5ad3744dec6bff7d6d891ab6dec4a5a', '2022-02-03 05:24:09'),
('jerrymarathe11@gmail.com', '2fd7f5e30099cc245dd5fa5fae3ebc9fa2e4ad758d', '2022-02-03 05:33:24'),
('siya@gmail.com', 'adb8da90b0adafff513fe6f7f3052c0e284353a272', '2022-02-03 05:33:35'),
('siya@gmail.com', '1af3bc63d7a86146b3704c0fc3c44b89f2a6b14531', '2022-02-03 05:37:59'),
('yatri.shah03@gmail.com', '0495896bfb3dfd87a4ae5a07eacc23d4852f916d9f', '2022-02-04 04:13:53'),
('drashyatri1726@gmail.com', 'e72f04bd29565cf6fe16bd38cc14df68f52a94282f', '2022-02-04 04:14:43'),
('yatri.shah03@gmail.com', '315d12424b792e81d1e5d80729c5caa31f9642252c', '2022-02-04 05:39:11'),
('yatri.shah03@gmail.com', '72e725f269c06a0bf406dc64477e86e7143b6cde36', '2022-02-04 05:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RatingId` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `RatingFrom` int(11) NOT NULL,
  `RatingTo` int(11) NOT NULL,
  `Ratings` decimal(2,1) NOT NULL,
  `Comments` varchar(2000) DEFAULT NULL,
  `RatingDate` datetime(3) NOT NULL,
  `IsApproved` tinyint(4) DEFAULT 1,
  `VisibleOnHomeScreen` tinyint(4) NOT NULL DEFAULT 0,
  `OnTimeArrival` decimal(2,1) NOT NULL DEFAULT 0.0,
  `Friendly` decimal(2,1) NOT NULL DEFAULT 0.0,
  `QualityOfService` decimal(2,1) NOT NULL DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `ServiceRequestId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `ServiceStartDate` datetime(3) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `ServiceFrequency` tinyint(3) UNSIGNED DEFAULT NULL,
  `ServiceHourlyRate` decimal(8,2) DEFAULT NULL,
  `ServiceHours` double NOT NULL,
  `ExtraHours` double DEFAULT NULL,
  `SubTotal` decimal(8,2) NOT NULL,
  `Discount` decimal(8,2) DEFAULT NULL,
  `TotalCost` decimal(8,2) NOT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `PaymentTransactionRefNo` varchar(50) DEFAULT NULL,
  `PaymentDue` tinyint(4) NOT NULL DEFAULT 0,
  `JobStatus` tinyint(3) UNSIGNED DEFAULT NULL,
  `ServiceProviderId` int(11) DEFAULT NULL,
  `SPAcceptedDate` datetime(3) DEFAULT NULL,
  `HasPets` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL,
  `CreatedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedBy` int(11) DEFAULT NULL,
  `RefundedAmount` decimal(8,2) DEFAULT NULL,
  `Distance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `HasIssue` tinyint(4) DEFAULT NULL,
  `PaymentDone` tinyint(4) DEFAULT NULL,
  `RecordVersion` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicerequestaddress`
--

CREATE TABLE `servicerequestaddress` (
  `Id` int(11) NOT NULL,
  `ServiceRequestId` int(11) DEFAULT NULL,
  `AddressLine1` varchar(200) DEFAULT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Type` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicerequestextra`
--

CREATE TABLE `servicerequestextra` (
  `ServiceRequestExtraId` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `ServiceExtraId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicesetting`
--

CREATE TABLE `servicesetting` (
  `Id` int(11) NOT NULL,
  `ActionType` int(11) NOT NULL,
  `Interval` int(11) NOT NULL,
  `ScheduleTime` time(6) NOT NULL,
  `LastPoll` datetime(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `Id` int(11) NOT NULL,
  `StateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Mobile` varchar(20) NOT NULL,
  `UserTypeId` int(11) NOT NULL,
  `RoleId` int(11) DEFAULT NULL,
  `Gender` int(11) DEFAULT NULL,
  `DateOfBirth` datetime(3) DEFAULT NULL,
  `UserProfilePicture` varchar(200) DEFAULT NULL,
  `IsRegisteredUser` tinyint(4) NOT NULL DEFAULT 0,
  `ZipCode` varchar(20) DEFAULT NULL,
  `WorksWithPets` tinyint(4) NOT NULL DEFAULT 0,
  `LanguageId` int(11) DEFAULT NULL,
  `NationalityId` int(11) DEFAULT NULL,
  `ResetKey` varchar(200) DEFAULT NULL,
  `CreatedDate` datetime(3) NOT NULL,
  `ModifiedDate` datetime(3) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `IsApproved` tinyint(4) NOT NULL DEFAULT 0,
  `IsActive` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL,
  `IsOnline` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `email`, `Password`, `Mobile`, `UserTypeId`, `RoleId`, `Gender`, `DateOfBirth`, `UserProfilePicture`, `IsRegisteredUser`, `ZipCode`, `WorksWithPets`, `LanguageId`, `NationalityId`, `ResetKey`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `IsApproved`, `IsActive`, `IsDeleted`, `Status`, `IsOnline`) VALUES
(22, 'Yatri', 'Shah ', 'yatri.shah03@gmail.com', 'cc', '9426769464', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-02 10:22:01.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(24, 'Siya', 'Kothari ', '190773107023@socet.edu.in', 'siya123', '9426023083', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-02 10:45:59.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(25, 'xyz', 'abc ', 'yatri.shah03@gmail.com', '123', '000', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 03:46:50.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(26, 'yatri', 'shah ', '190773107023@socet.edu.in', '123', '00', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 03:48:06.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(27, 'yatri', 'vv ', 'yatri.shah03@gmail.com', '123', '1', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:26:26.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(28, 'yatri', 'Kothari ', 'yatri.shah03@gmail.com', '123', '11', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:40:22.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(29, 'yatri', 'Kothari ', 'yatri.shah03@gmail.com', '123', '1', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:41:30.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(30, 'yatri', 'Kothari ', 'yatri.shah03@gmail.com', '123', '11', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:50:51.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(31, 'j', 'Kothari ', 'yatri.shah03@gmail.com', '123', '1', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:51:28.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(32, 'yatri', 'Kothari ', 'yatri.shah03@gmail.com', '123', '99', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:52:02.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(33, 'yatri', 'Kothari ', 'yatri.shah03@gmail.com', '123', '11', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:56:14.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(34, 'j', 'Kothari ', 'yatri.shah03@gmail.com', '123', '12', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:57:39.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(35, 'yatri', 'Kothari ', 'yatri.shah03@gmail.com', '111', '11', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 07:58:13.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(36, 'j', 'Kothari ', 'yatri.shah03@gmail.com', '123', '12', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 08:00:04.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(37, 'q', 'q ', 'yatri.shah03@gmail.com', '1', '1', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 08:01:17.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(38, 'yatri', 'Kothari ', 'yatri.shah03@gmail.com', '1', '1', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 08:02:57.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(39, 'jay', 'Marathe ', 'yatri.shah03@gmail.com', '123', '99', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 16:57:49.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0),
(40, 'yatri', 'h ', 'yatri.shah03@gmail.com', '1', '1', 1, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2022-02-03 16:58:22.000', '0000-00-00 00:00:00.000', 0, 1, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `AddressId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AddressLine1` varchar(200) NOT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `IsDefault` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zipcode`
--

CREATE TABLE `zipcode` (
  `Id` int(11) NOT NULL,
  `ZipcodeValue` varchar(50) NOT NULL,
  `CityId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUsId`);

--
-- Indexes for table `contactusattachment`
--
ALTER TABLE `contactusattachment`
  ADD PRIMARY KEY (`ContactUsAttachmentId`);

--
-- Indexes for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RatingId`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`ServiceRequestId`);

--
-- Indexes for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  ADD PRIMARY KEY (`ServiceRequestExtraId`);

--
-- Indexes for table `servicesetting`
--
ALTER TABLE `servicesetting`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`AddressId`);

--
-- Indexes for table `zipcode`
--
ALTER TABLE `zipcode`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `contactusattachment`
--
ALTER TABLE `contactusattachment`
  MODIFY `ContactUsAttachmentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RatingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `ServiceRequestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  MODIFY `ServiceRequestExtraId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicesetting`
--
ALTER TABLE `servicesetting`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `AddressId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zipcode`
--
ALTER TABLE `zipcode`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
