-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 06:59 AM
-- Server version: 5.7.37-log
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `9am_elms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Yogesh Gaur', 'ygbuddy007@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `department` varchar(20) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `qualification` varchar(25) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `address` text,
  `password` varchar(25) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `emp_id`, `department`, `designation`, `qualification`, `phone`, `email`, `address`, `password`, `image`) VALUES
(1, 'Haaris', 'Saifi', 'DBEF - 010', 'IT', 'Sr. Technical Instructor', 'M.Phil ', 9634166040, 'haaris@trainingbasket.in', 'House no. 65\nMohalla Ghulam Sabir Near Lal Masjid', '123', ''),
(2, 'Akanksha', 'Bhatt', '234453', 'HR', 'General HR Manager', 'MBA Ph.D.', 1234567889, 'aanaya@gmail.com', 'Rudrapur, Nainital, U.K.', '123', 'PHP.png'),
(3, 'Anuj', 'Aabhan', 'DBEF - 011', 'IT', 'Project Manager', 'M.Tech. ', 12304560, 'anuj@aabhan.com', 'Noida, Karnataka', '123123', '18a-healing-brush-royal-anwar-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info-updates`
--

CREATE TABLE `info-updates` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info-updates`
--

INSERT INTO `info-updates` (`id`, `emp_id`, `department`, `designation`, `qualification`, `phone`, `email`, `address`, `password`, `status`) VALUES
(1, 'DBEF - 010', 'IT', 'Sr. Technical Instructor', 'M.Phil ', 9634166040, 'haaris@trainingbasket.in', 'House no. 65\nMohalla Ghulam Sabir Near Lal Masjid', '123', 'Approved'),
(2, '234453', 'HR', 'General HR Manager', 'MBA Ph.D.', 1234567889, 'aanaya@gmail.com', 'Rudrapur, Nainital, U.K.', '123', 'Approved'),
(3, '234453', 'Other', 'Pantry boy', 'BA', 1234567889, 'abcd@mygmail.com', 'Dehradun', '12345', 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `leave_num` int(11) NOT NULL,
  `leave_type` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `status` varchar(10) DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `e_id`, `leave_num`, `leave_type`, `start_date`, `status`) VALUES
(1, 1, 2, 'Casual Leave', '2022-06-25', 'Declined'),
(2, 2, 4, 'Sick Leave', '2022-06-28', 'Declined'),
(3, 1, 1, 'Sick Leave', '2022-06-23', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info-updates`
--
ALTER TABLE `info-updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leave_foreign_key` (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info-updates`
--
ALTER TABLE `info-updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leave_foreign_key` FOREIGN KEY (`e_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
