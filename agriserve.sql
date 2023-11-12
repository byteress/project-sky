-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 02:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `crop_id` int(11) NOT NULL,
  `crop_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cultivated_plants`
--

CREATE TABLE `cultivated_plants` (
  `crop_id` int(11) NOT NULL,
  `land_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `farm_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_info`
--

CREATE TABLE `farmer_info` (
  `farmer_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `extenstion_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `highest_formal_education` varchar(255) NOT NULL,
  `mother_maiden_name` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `is_pwd` enum('Yes','No') NOT NULL,
  `is_4ps` enum('Yes','No') NOT NULL,
  `is_ip` enum('Yes','No') NOT NULL,
  `has_governement_id` enum('Yes','No') NOT NULL,
  `government_id_type` varchar(255) NOT NULL,
  `government_id_number` varchar(255) NOT NULL,
  `is_associated` enum('Yes','No') NOT NULL,
  `association_name` varchar(255) NOT NULL,
  `is_household_head` enum('Yes','No') NOT NULL,
  `household_head_name` varchar(255) NOT NULL,
  `household_head_relationship` varchar(255) NOT NULL,
  `living_household_members` varchar(255) NOT NULL,
  `no_of_female` varchar(255) NOT NULL,
  `no_of_male` varchar(255) NOT NULL,
  `emergency_contact_name` varchar(255) NOT NULL,
  `emergency_contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_land_info`
--

CREATE TABLE `farmer_land_info` (
  `farmer_land_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `land_area` varchar(255) NOT NULL COMMENT 'hectares',
  `location` varchar(255) NOT NULL,
  `agrarian_reform_beneficiary` enum('Yes','No') NOT NULL,
  `ownership_type` varchar(255) NOT NULL,
  `within_ancestral_domain` enum('Yes','No') DEFAULT NULL,
  `ownership_document_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farm_type`
--

CREATE TABLE `farm_type` (
  `farm_type_id` int(11) NOT NULL,
  `farm_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farm_type`
--

INSERT INTO `farm_type` (`farm_type_id`, `farm_type`) VALUES
(1, 'Irrigated'),
(2, 'Rainfed Upland'),
(3, 'Rainfed Lowland');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `date_created`) VALUES
(1, 'admin', 'admin@agrisudipen.net', '$2y$10$xTUX5nVlKW1q7Zat3i9gQeGGVh5MT8uNtnFMKEfqdM6kXrvlNTNIa', '2023-10-15 12:59:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `cultivated_plants`
--
ALTER TABLE `cultivated_plants`
  ADD KEY `crop_id` (`crop_id`),
  ADD KEY `land_id` (`land_id`),
  ADD KEY `farm_type` (`farm_type`);

--
-- Indexes for table `farmer_info`
--
ALTER TABLE `farmer_info`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `farmer_land_info`
--
ALTER TABLE `farmer_land_info`
  ADD PRIMARY KEY (`farmer_land_id`);

--
-- Indexes for table `farm_type`
--
ALTER TABLE `farm_type`
  ADD PRIMARY KEY (`farm_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `crop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer_land_info`
--
ALTER TABLE `farmer_land_info`
  MODIFY `farmer_land_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farm_type`
--
ALTER TABLE `farm_type`
  MODIFY `farm_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cultivated_plants`
--
ALTER TABLE `cultivated_plants`
  ADD CONSTRAINT `cultivated_plants_ibfk_1` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`crop_id`),
  ADD CONSTRAINT `cultivated_plants_ibfk_2` FOREIGN KEY (`land_id`) REFERENCES `farmer_land_info` (`farmer_land_id`),
  ADD CONSTRAINT `cultivated_plants_ibfk_3` FOREIGN KEY (`farm_type`) REFERENCES `farm_type` (`farm_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
