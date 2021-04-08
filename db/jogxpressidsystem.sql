-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 03:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jogxpressidsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `jogxpress_employee`
--

CREATE TABLE `jogxpress_employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_address` varchar(100) NOT NULL,
  `employee_birthdate` varchar(20) NOT NULL,
  `employee_position` varchar(50) NOT NULL,
  `employee_contact_number` int(11) NOT NULL,
  `employee_image` varchar(255) NOT NULL,
  `employee_date_uploaded` varchar(10) NOT NULL,
  `employee_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jogxpress_employee`
--

INSERT INTO `jogxpress_employee` (`employee_id`, `employee_name`, `employee_address`, `employee_birthdate`, `employee_position`, `employee_contact_number`, `employee_image`, `employee_date_uploaded`, `employee_active`) VALUES
(16, 'dad', 'dasd', 'dad', 'ad', 12, 'james1.jpg', '2021-04-07', 1),
(17, 'dasda', 'dasd', 'ad', 'Android Developer', 12121212, 'default-avatar.png', '2021-04-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jogxpress_user`
--

CREATE TABLE `jogxpress_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jogxpress_user`
--

INSERT INTO `jogxpress_user` (`user_id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'jogpress Admin', 'jogxpress', 'jogxpressadmin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogxpress_employee`
--
ALTER TABLE `jogxpress_employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `jogxpress_user`
--
ALTER TABLE `jogxpress_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jogxpress_employee`
--
ALTER TABLE `jogxpress_employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jogxpress_user`
--
ALTER TABLE `jogxpress_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
