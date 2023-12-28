-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 06:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toll plaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `DOB`, `address`) VALUES
(100, 'Ambrish', 'ambrish', 'ambrish', '2015-10-10', 'Utter Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `DOB`, `address`) VALUES
(104, 'Ashish Lashkan', 'Ashish', 'user2', '1999-10-18', 'Indore'),
(105, 'User3', 'user3', 'user3', '2021-10-12', 'Delhi'),
(107, 'User4', 'user4', 'user4', '2018-05-18', 'Haryana');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_information`
--

CREATE TABLE `vehicle_information` (
  `Sr_No` int(11) NOT NULL,
  `Vehicle_Number` varchar(50) NOT NULL,
  `Date` datetime NOT NULL,
  `Driver_Name` varchar(50) NOT NULL,
  `Mobile_No` varchar(13) NOT NULL,
  `Toll_Tax` int(11) NOT NULL,
  `Vehicle_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_information`
--

INSERT INTO `vehicle_information` (`Sr_No`, `Vehicle_Number`, `Date`, `Driver_Name`, `Mobile_No`, `Toll_Tax`, `Vehicle_Type`) VALUES
(1, 'Up 70 AT 3268', '2023-10-18 16:40:21', 'Pankaj', '987654321', 40, 'Auto'),
(2, 'UP 70 BT 5570', '2023-10-18 22:12:00', 'Mohit', '321654987', 40, 'Auto'),
(3, 'UP 70 CT 8956', '2023-10-18 20:22:00', 'Amit', '789456123', 40, 'Auto'),
(4, 'UP 53 C 5582', '2023-10-18 20:58:00', 'Ambrish', '9307865252', 70, 'Car');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `vehicle_information`
--
ALTER TABLE `vehicle_information`
  ADD PRIMARY KEY (`Sr_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `vehicle_information`
--
ALTER TABLE `vehicle_information`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
