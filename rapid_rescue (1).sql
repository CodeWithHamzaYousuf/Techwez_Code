-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 10:05 AM
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
-- Database: `rapid_rescue`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `id` int(11) NOT NULL,
  `vehcile_num` varchar(150) NOT NULL,
  `equipement_level` varchar(150) NOT NULL,
  `current_stat` varchar(150) NOT NULL,
  `drivername` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `vehcile_num`, `equipement_level`, `current_stat`, `drivername`) VALUES
(2626, '4444', 'Basic', 'Online', 'Hamza'),
(6666, '8888', 'Basic', 'Online', 'Bilal'),
(6667, '6545', 'Basic', 'Online', 'Billu');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(150) NOT NULL,
  `option` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `number`, `location`, `option`) VALUES
('Hamza', 'hamza@gmail.com', '03378022639', 'Liaquatabad,Karanchi', 'Helicopter');

-- --------------------------------------------------------

--
-- Table structure for table `drivers_profile`
--

CREATE TABLE `drivers_profile` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone_num` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers_profile`
--

INSERT INTO `drivers_profile` (`id`, `first_name`, `lastname`, `phone_num`, `salary`) VALUES
(2, 'Hamza', 'Yousuf', '0306232082', 2000),
(3, 'Hamza', 'Yousuf', '3003030', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `emts`
--

CREATE TABLE `emts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `certification` varchar(100) NOT NULL,
  `phone_num` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emts`
--

INSERT INTO `emts` (`id`, `first_name`, `lastname`, `certification`, `phone_num`) VALUES
(11, 'Hamza', 'Yousuf', 'AIFM', '0337-8022639');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `text`) VALUES
(1, 'sohni', '', ''),
(2, 'sohni', '', ''),
(3, 'sohni', 'sabi201@gmail.com', 'faHF OifeOIU eAHfuAHfguIAEgfiuHGF'),
(4, 'sohni', 'sabi201@gmail.com', 'faHF OifeOIU eAHfuAHfguIAEgfiuHGF'),
(5, 'Osama', 'billuu0011@gmail.com', 'fKJFAfkjAHFkj;FgKJgfKJgf');

-- --------------------------------------------------------

--
-- Table structure for table `req_info`
--

CREATE TABLE `req_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers_profile`
--
ALTER TABLE `drivers_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emts`
--
ALTER TABLE `emts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_info`
--
ALTER TABLE `req_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6668;

--
-- AUTO_INCREMENT for table `drivers_profile`
--
ALTER TABLE `drivers_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emts`
--
ALTER TABLE `emts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `req_info`
--
ALTER TABLE `req_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
