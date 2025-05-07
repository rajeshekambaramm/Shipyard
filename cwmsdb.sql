-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2025 at 06:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2020-12-10 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `content_management`
--

CREATE TABLE `content_management` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serviceandproducts`
--

CREATE TABLE `serviceandproducts` (
  `id` int(11) NOT NULL,
  `startingPoint` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  `shipbuildingOrders` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serviceandproducts`
--

INSERT INTO `serviceandproducts` (`id`, `startingPoint`, `destination`, `facilities`, `shipbuildingOrders`, `status`) VALUES
(1, 'chennai', 'nagapatinam', 'cargo', 'Tankers', 'ongoing'),
(2, 'chennai', 'nagapatinam', 'cargo', 'Tankers', 'ongoing'),
(3, 'mumbai', 'goa', 'passenger', 'Ferries', 'completed'),
(4, 'kolkata', 'vizag', 'cargo', 'Container Ships', 'planned'),
(5, 'chennai', 'nagapatinam', 'cargo', 'Tankers', 'ongoing'),
(6, 'mumbai', 'goa', 'passenger', 'Ferries', 'completed'),
(7, 'kolkata', 'vizag', 'cargo', 'Bulk Carriers', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `tblcarwashbooking`
--

CREATE TABLE `tblcarwashbooking` (
  `id` int(11) NOT NULL,
  `bookingId` bigint(10) DEFAULT NULL,
  `packageType` varchar(120) DEFAULT NULL,
  `carWashPoint` int(11) DEFAULT NULL,
  `fullName` varchar(150) DEFAULT NULL,
  `mobileNumber` bigint(12) DEFAULT NULL,
  `washDate` date DEFAULT NULL,
  `washTime` time DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `adminRemark` mediumtext DEFAULT NULL,
  `paymentMode` varchar(120) DEFAULT NULL,
  `txnNumber` varchar(120) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcarwashbooking`
--

INSERT INTO `tblcarwashbooking` (`id`, `bookingId`, `packageType`, `carWashPoint`, `fullName`, `mobileNumber`, `washDate`, `washTime`, `message`, `status`, `adminRemark`, `paymentMode`, `txnNumber`, `postingDate`, `lastUpdationDate`) VALUES
(1, 316460298, '1', 1, 'ANuj kumar', 1234567890, '2021-12-16', '11:45:00', 'NA', 'Completed', 'Washing completed', 'e-Wallet', '345345345', '2021-12-13 19:14:22', '2021-12-14 18:04:52'),
(2, 647869499, '3', 2, 'Anuj kumar', 1234567890, '2021-12-30', '15:47:00', 'na', 'New', NULL, NULL, NULL, '2021-12-13 19:14:47', '2021-12-14 17:20:56'),
(3, 215755984, '2', 3, 'AMit', 9874563210, '2021-12-19', '15:05:00', 'NA', 'New', NULL, NULL, NULL, '2021-12-13 19:16:19', NULL),
(4, 440337019, '1', 2, 'Sarita', 6987412360, '2022-01-01', '19:37:00', 'NA', 'New', NULL, NULL, NULL, '2021-12-14 17:01:55', NULL),
(5, 783971257, '2', 2, 'John Doe', 1234567890, '2021-12-25', '13:31:00', 'NA', 'New', NULL, NULL, NULL, '2021-12-14 19:00:44', NULL),
(6, 328979472, '3 ', 3, 'Rahul Yadav', 1234567890, '2021-12-18', '10:15:00', 'NA', 'New', NULL, NULL, NULL, '2021-12-14 19:12:37', NULL),
(7, 151983398, '1', 2, 'Sanjeev', 1234569870, '2021-12-15', '19:50:00', 'Car wash', 'Completed', 'Car Wash Completed', 'Debit/Credit Card', 'DSGFS72342834', '2021-12-14 19:15:28', '2021-12-14 19:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(4, 'Anuj kumar', 'anuj@gmail.com', 'General Enquiry', 'I want to know the price of car wash', '2021-12-13 18:27:53', 1),
(5, 'Amit', 'amit@gmail.com', 'Test', 'Test', '2021-12-14 19:14:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL,
  `openignHrs` varchar(255) DEFAULT NULL,
  `phoneNumber` bigint(20) DEFAULT NULL,
  `emailId` varchar(120) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`, `openignHrs`, `phoneNumber`, `emailId`) VALUES
(3, 'aboutus', '																																																																						<div style=\"text-align: justify;\"><p style=\"text-align: justify;\">Shipyards aretries for centuries, evolving from wooden shipbuilding in ancient civilizations to modern steel and composite construction. Today, shipyards support global trade, defense, and offshore industries by building commercial vessels, naval warships, and specialized marine structures. Major shipbuilding nations include China, South Korea, and the United States. Shipyards vary in ownership, with some operated by governments for military purposes and others privately owned for commercial shipbuilding. Advanced technologies, automation, and sustainable practices are shaping the future of shipyards, ensuring efficiency and environmental responsibility in maritime development.<br><br><br></p></div>																																			\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										', NULL, NULL, NULL),
(11, 'contact', '123 Street, Chennai,Tamil Nadu ,India', 'Mon - Sat, 7:00 AM - 10:00 PM', 1234567890, 'shipyard@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblwashingpoints`
--

CREATE TABLE `tblwashingpoints` (
  `id` int(11) NOT NULL,
  `washingPointName` varchar(255) DEFAULT NULL,
  `washingPointAddress` varchar(255) DEFAULT NULL,
  `contactNumber` bigint(20) DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblwashingpoints`
--

INSERT INTO `tblwashingpoints` (`id`, `washingPointName`, `washingPointAddress`, `contactNumber`, `creationDate`) VALUES
(1, NULL, NULL, NULL, '2021-12-13 16:21:20'),
(2, 'ABC Car Washing Point', 'A3263 Sector 1- Noida 201301', 98745463210, '2021-12-13 16:22:38'),
(3, ' Matrix Car washing Point ', 'H911 Indira Puram Ghaziabad 201017 UP', 4582365419, '2021-12-13 16:24:28'),
(6, NULL, NULL, 9876543210, '2025-02-22 02:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tender_applications`
--

CREATE TABLE `tender_applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `bid_amount` decimal(10,2) NOT NULL,
  `documents` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tender_applications`
--

INSERT INTO `tender_applications` (`id`, `name`, `contact`, `bid_amount`, `documents`, `submitted_at`) VALUES
(1, 'Rajesh', '151545551', 2345.00, '', '2025-02-22 04:15:18'),
(2, 'Atchaya', '9874563210', 4000000.00, '', '2025-02-22 09:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `fullName`, `companyName`, `contactNumber`, `email`, `password`) VALUES
(1, 'SATHISHKUMAR L', 'Sivasethu infotech', '8807535542', 'sathishkumar@gmail.com', '$2y$10$GJnMwTc/d7uIRlmaBqImp.geOf02g6.q999OKEdYsKYfWhofiK.zK'),
(2, 'Rajesh E', 'Jhon company', '9988776655', 'rajesh@gmail.com', '$2y$10$qnfjjbT6PMjul7nhX6Ae5O5Cd0Q/iUrOtJS2OugkdstwLFYswUAta'),
(3, 'Shanmadha G', 'Accenture', '6395874255', 'shanmadha@gmail.com', '$2y$10$ydv2yj.qVuyLAsoXT7/GY.hfLAPOsYVRe3bxulnP7MxWQ9KkIQstK'),
(4, 'Karthi', 'MRF company', '9876543210', 'karthi@gmail.com', '$2y$10$y0svg2FCLlvMKZqhue718.NTlIZ9cu8qIFdy/lkjqTeScUzG//y1S'),
(5, 'Sathish', 'kovai', '2346567891', 'sathish@gmail.com', '$2y$10$jeIYSgivPwEA0QpTqHM5ZOJX6reP/nFy4vrFnCqGeYQkm0hycqpS2'),
(6, 'vidya', 'bishop', '0987654321', 'hj123@gmail.co', '$2y$10$Ve5R1ReL4fC03B6EOVxOsezpRBqiLOroTE/U5rMLGmWFkINjoElIK'),
(7, 'jasintha', 'MGF company', '14569873245', 'jasinthayuvaraj@gmail.com', '$2y$10$TNlxU0PpAD8b938omLW.OOAgKw8NVDUyXuO5DUg8wyTUX8rFN1FA.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_management`
--
ALTER TABLE `content_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceandproducts`
--
ALTER TABLE `serviceandproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcarwashbooking`
--
ALTER TABLE `tblcarwashbooking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carWashPoint` (`carWashPoint`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblwashingpoints`
--
ALTER TABLE `tblwashingpoints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender_applications`
--
ALTER TABLE `tender_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content_management`
--
ALTER TABLE `content_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceandproducts`
--
ALTER TABLE `serviceandproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcarwashbooking`
--
ALTER TABLE `tblcarwashbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblwashingpoints`
--
ALTER TABLE `tblwashingpoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender_applications`
--
ALTER TABLE `tender_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcarwashbooking`
--
ALTER TABLE `tblcarwashbooking`
  ADD CONSTRAINT `washingpointid` FOREIGN KEY (`carWashPoint`) REFERENCES `tblwashingpoints` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
