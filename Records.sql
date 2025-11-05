-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 05:40 PM
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
-- Database: `records`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(4) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Status` varchar(256) NOT NULL,
  `Time_In` datetime NOT NULL,
  `Time_Out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `Name`, `Status`, `Time_In`, `Time_Out`) VALUES
(1, 'asdasd', 'asdasdas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'asdas', 'asdas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'asdas', 'asdasda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'TETET', 'TURAT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'TETET', 'TURAT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'turat', 'turattt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', '', '2024-02-11 02:25:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Department` varchar(256) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Hire_Date` date NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `Name`, `Department`, `Position`, `Hire_Date`, `Salary`) VALUES
(0, 'qwewq', 'qweqw', 'qwewqe', '0000-00-00', 54654),
(0, '13221', '1312', '1312', '0000-00-00', 1312312),
(0, 'adas', 'dad', 'asdas', '0000-00-00', 1312312),
(0, 'asdas', 'dasdas', 'das', '0000-00-00', 12312321),
(0, 'asdas', 'dasdas', 'qwewqe', '2023-12-14', 1312312);

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `ID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Grade` int(11) NOT NULL,
  `Feedback` varchar(500) NOT NULL,
  `Action` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
