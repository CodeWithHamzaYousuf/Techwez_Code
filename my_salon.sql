-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 09:42 PM
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
-- Database: `my_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `service` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `phone`, `address`, `service`) VALUES
(6, 'stylist', 'this@this.com', '9999999999', 'kjklfje', 'pedicure');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `section_name`, `content`) VALUES
(1, 'salon_paragraph', '  We offer premium salon services that cater to your grooming needs. Our services include haircuts, styling, and treatments tailored to your preferences. .');

-- --------------------------------------------------------

--
-- Table structure for table `emps`
--

CREATE TABLE `emps` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `service` varchar(20) DEFAULT NULL,
  `salary` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emps`
--

INSERT INTO `emps` (`id`, `name`, `email`, `number`, `service`, `salary`) VALUES
(2, 'Rec', 'this@this.com', '0337', 'stylist', '20,000'),
(3, 'admin', 'njjjj@gmail.com', '7675', 'wdwsdw', 'dadw');

-- --------------------------------------------------------

--
-- Table structure for table `my_login`
--

CREATE TABLE `my_login` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `cat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_login`
--

INSERT INTO `my_login` (`id`, `name`, `password`, `cat`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'Rec', 'rec123', 'Recption'),
(3, 'stylist', 'stylist123', 'emp');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist_table`
--

CREATE TABLE `receptionist_table` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cate` varchar(20) DEFAULT NULL,
  `salary` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist_table`
--

INSERT INTO `receptionist_table` (`id`, `name`, `email`, `phone`, `cate`, `salary`) VALUES
(6, 'admin', 'njjjj@gmail.com', '03376246548', 'qjnejqkjaldj', 'ksjdl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emps`
--
ALTER TABLE `emps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_login`
--
ALTER TABLE `my_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionist_table`
--
ALTER TABLE `receptionist_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emps`
--
ALTER TABLE `emps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `my_login`
--
ALTER TABLE `my_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receptionist_table`
--
ALTER TABLE `receptionist_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
