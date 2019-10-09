-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 11:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_accessories`
--

CREATE TABLE `add_accessories` (
  `id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `hsn_code` int(12) NOT NULL,
  `quantity` int(255) NOT NULL,
  `rate` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `used_quantity` int(255) NOT NULL,
  `avail_quantity` int(255) NOT NULL,
  `total_amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_accessories`
--

INSERT INTO `add_accessories` (`id`, `company_name`, `model`, `hsn_code`, `quantity`, `rate`, `amount`, `used_quantity`, `avail_quantity`, `total_amount`) VALUES
(1, 'ert', '11', 0, 11, 11, 121, 0, 0, 108);

-- --------------------------------------------------------

--
-- Table structure for table `add_customer`
--

CREATE TABLE `add_customer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` int(255) NOT NULL,
  `pan_no` int(255) NOT NULL,
  `gstin` int(255) NOT NULL,
  `cin_no` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_customer`
--

INSERT INTO `add_customer` (`id`, `name`, `contact_no`, `pan_no`, `gstin`, `cin_no`, `address`) VALUES
(1, 'Abhinab Mohany', 2147483647, 123454321, 0, 1234321, 'Plot 51, Lane 4, Bapujinagar');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `order_number` int(11) NOT NULL,
  `date` date NOT NULL,
  `p_i_number` int(12) NOT NULL,
  `invoice_number` int(12) NOT NULL,
  `place_of_supply` varchar(255) NOT NULL,
  `mat_code` varchar(255) NOT NULL DEFAULT '0',
  `mat_des` varchar(255) NOT NULL,
  `hsd_code` int(11) NOT NULL,
  `cgst` int(11) NOT NULL,
  `sgst` int(11) NOT NULL,
  `igst` int(11) NOT NULL,
  `quantity` bigint(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` bigint(255) NOT NULL,
  `total_cost` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `supplier_name`, `order_number`, `date`, `p_i_number`, `invoice_number`, `place_of_supply`, `mat_code`, `mat_des`, `hsd_code`, `cgst`, `sgst`, `igst`, `quantity`, `rate`, `amount`, `total_cost`) VALUES
(1, '$supplierName', 0, '0000-00-00', 0, 0, '$placeOfSupply', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'Aniket Mishra', 1212121212, '2018-07-10', 2147483647, 2147483647, 'F mangala flats senthil andawar street vadapalanai chennai tamil nadu', 'Samsung', '9999', 4545, 12, 12, 0, 10000, 120, 1200000, 1324320),
(17, 'Aniket Mishra', 1212121212, '2018-07-10', 2147483647, 2147483647, 'F mangala flats senthil andawar street vadapalanai chennai tamil nadu', 'Samsung', '9999', 4545, 12, 12, 0, 10000, 120, 1200000, 1324320);

-- --------------------------------------------------------

--
-- Table structure for table `add_seller`
--

CREATE TABLE `add_seller` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) DEFAULT NULL,
  `contact_number` int(10) DEFAULT NULL,
  `gstin` bigint(20) DEFAULT NULL,
  `pan_no` int(255) DEFAULT NULL,
  `cin_no` int(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_seller`
--

INSERT INTO `add_seller` (`id`, `supplier_name`, `contact_number`, `gstin`, `pan_no`, `cin_no`, `address`) VALUES
(1, 'hgfg', 2147483647, 755675, 7656756, 765675, 'hghgfhg'),
(2, 'Aniket Mishra', 2147483647, 755675, 7656756, 765675, 'F, blah blah apartment, dundunboopboop street, chirpchirp city, tuntuntuntooonnnntooonnnn XD'),
(3, 'Aniket Mishra', 2147483647, 12345678, 234567890, 1234567890, 'B2B/32, Lingaraj Vihar, Pokhariput'),
(4, 'Aniket Mishra', 2147483647, 12345678, 234567890, 1234567890, 'B2B/32, Lingaraj Vihar, Pokhariput'),
(5, 'Aniket Mishra', 2147483647, 12345678, 234567890, 1234567890, 'B2B/32, Lingaraj Vihar, Pokhariput'),
(7, 'Aniket Mishra', 7550, 123456789, 123456, 123456789, 'No F, Third floor, Mangla appartments, Senthil andavar street, Kumaran colony, vadapalani'),
(10, 'Aniket', 2147483647, 478451245, 4851456, 2145621456, 'Plot 51, Lane 4, Bapujinagar'),
(15, 'asdfghjk', 2147483647, 45125541245, 58741, 45124545, 'Plot 51, Lane 4, Bapujinagar'),
(16, 'dfghjk', 2147483647, 2345678, 12345678, 1234567890, 'Plot 51, Lane 4, Bapujinagar'),
(17, 'aniket', 2147483647, 1213456, 2345678, 345678, 'Plot 51, Lane 4, Bapujinagar');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `uname`, `password`) VALUES
(1, 'Abhinab', '', 'lunord2@gmail.com', 'aa', 'password'),
(2, 'Aniket', 'Mishra', 'mishra1997aniket@gmail.com', 'aniket', 'password'),
(3, 'Abhinab', 'Mohany', 'lunord2@gmail.com', '123456789', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` text,
  `lname` text,
  `email` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `fname`, `lname`, `email`, `uname`, `password`) VALUES
(2, 'Abhinab', 'Mohany', 'lunord2@gmail.com', '5555', '5555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_accessories`
--
ALTER TABLE `add_accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_customer`
--
ALTER TABLE `add_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `add_seller`
--
ALTER TABLE `add_seller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_accessories`
--
ALTER TABLE `add_accessories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_customer`
--
ALTER TABLE `add_customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `add_seller`
--
ALTER TABLE `add_seller`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
