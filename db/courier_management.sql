-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 07:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_management`
--
CREATE DATABASE IF NOT EXISTS `courier_management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `courier_management`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `mail` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`mail`, `pass`) VALUES('admin@admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `ch_login`
--

DROP TABLE IF EXISTS `ch_login`;
CREATE TABLE `ch_login` (
  `ch_email` varchar(30) NOT NULL,
  `ch_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ch_login`
--

INSERT INTO `ch_login` (`ch_email`, `ch_pass`) VALUES('ch@ch', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `customer_history`
--

DROP TABLE IF EXISTS `customer_history`;
CREATE TABLE `customer_history` (
  `customer_id` int(10) NOT NULL,
  `parcel_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

DROP TABLE IF EXISTS `customer_table`;
CREATE TABLE `customer_table` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_dob` date NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `customer_name`, `customer_dob`, `customer_email`, `customer_address`, `customer_phone`, `customer_password`) VALUES(1001, 'Al Amin', '2000-06-13', 'rifat@rifat', 'R5 , Block C, Bashundhara R/A, Dhaka', '01797372047', 'password');
INSERT INTO `customer_table` (`customer_id`, `customer_name`, `customer_dob`, `customer_email`, `customer_address`, `customer_phone`, `customer_password`) VALUES(1002, 'Muhammad Rifat', '2000-06-13', 'rifat2@rifat', '106 Baghmara road', '01860004203', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man`
--

DROP TABLE IF EXISTS `delivery_man`;
CREATE TABLE `delivery_man` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_man`
--

INSERT INTO `delivery_man` (`id`, `email`, `pass`) VALUES(1001, 'man@man', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man_data`
--

DROP TABLE IF EXISTS `delivery_man_data`;
CREATE TABLE `delivery_man_data` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `dob` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_man_data`
--

INSERT INTO `delivery_man_data` (`id`, `name`, `email`, `phone`, `address`, `dob`) VALUES(1001, 'Alice', 'man@man', '012344444', 'Vola , Borishal ', '1999-01-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_phone` varchar(15) NOT NULL,
  `emp_address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_dob`, `emp_phone`, `emp_address`) VALUES(1, '', '0000-00-00', '', '');
INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_dob`, `emp_phone`, `emp_address`) VALUES(100, 'Aryan Takhrim', '1995-03-07', '015565555', 'North Badda , Dhaka , Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

DROP TABLE IF EXISTS `parcel`;
CREATE TABLE `parcel` (
  `pid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `sphone` varchar(15) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `rphone` varchar(15) NOT NULL,
  `raddress` varchar(100) NOT NULL,
  `pweight` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`pid`, `sname`, `sphone`, `saddress`, `rname`, `rphone`, `raddress`, `pweight`) VALUES(1, 'Roar', '01999999', '1066 Wadiya Kingslad', 'John', '09110111', 'North Gate , Nights Watch', '100 Gram');
INSERT INTO `parcel` (`pid`, `sname`, `sphone`, `saddress`, `rname`, `rphone`, `raddress`, `pweight`) VALUES(100, 'Roar', '01999999', '1066 Wadiya Kingslad', 'John', '09110111', 'North Gate , Nights Watch', '100 Gram');
INSERT INTO `parcel` (`pid`, `sname`, `sphone`, `saddress`, `rname`, `rphone`, `raddress`, `pweight`) VALUES(101, 'Roar2', '01999999', 'adasfes afwerf sdfsd sdfdsf', 'John2', '09110111', 'asdf aerf fdssdf rer', '100 Gram');
INSERT INTO `parcel` (`pid`, `sname`, `sphone`, `saddress`, `rname`, `rphone`, `raddress`, `pweight`) VALUES(102, 'Roar2', '01999999', 'Kuratoli Bazar', 'Boar', '023154654', 'Khilkhet Dhaka', '1000gm');
INSERT INTO `parcel` (`pid`, `sname`, `sphone`, `saddress`, `rname`, `rphone`, `raddress`, `pweight`) VALUES(103, 'John', '01860004203', '106 Baghmara road', 'Doe', '4159560656', '3489 Locust View Drive', '11111');
INSERT INTO `parcel` (`pid`, `sname`, `sphone`, `saddress`, `rname`, `rphone`, `raddress`, `pweight`) VALUES(106, 'John', '1111111', '2529  Glendale Avenue', 'Doe', '22222222', '3489 Locust View Drive', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_track`
--

DROP TABLE IF EXISTS `parcel_track`;
CREATE TABLE `parcel_track` (
  `pid` int(10) NOT NULL,
  `delR` varchar(1) NOT NULL DEFAULT 'f',
  `chR` varchar(1) NOT NULL DEFAULT 'f',
  `chS` varchar(1) NOT NULL DEFAULT 'f',
  `delS` varchar(1) NOT NULL DEFAULT 'f',
  `rfinal` varchar(1) NOT NULL DEFAULT 'f'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel_track`
--

INSERT INTO `parcel_track` (`pid`, `delR`, `chR`, `chS`, `delS`, `rfinal`) VALUES(106, 'f', 'f', 'f', 't', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `test` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test`, `name`, `date`) VALUES(10, 'alaminrifat', '2022-03-01');
INSERT INTO `test` (`test`, `name`, `date`) VALUES(11, 'SE', '2022-03-03');
INSERT INTO `test` (`test`, `name`, `date`) VALUES(12, '1', '2022-03-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_man_data`
--
ALTER TABLE `delivery_man_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `parcel_track`
--
ALTER TABLE `parcel_track`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `delivery_man`
--
ALTER TABLE `delivery_man`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
