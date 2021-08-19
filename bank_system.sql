-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 07:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` double NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `current_balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `email_id`, `current_balance`) VALUES
(7590, 'Satya', 'satya@gmail.com', 100600),
(7591, 'Girija', 'girija@gmail.com', 47000),
(7592, 'Sai', 'sai@gmail.com', 72400),
(7593, 'Tejaswini', 'teju@gmail.com', 377000),
(7594, 'Priya', 'priya@gmail.com', 39200),
(7595, 'Akshara', 'akshara@gmail.com', 81500),
(7596, 'Revathi', 'revathi@gmail.com', 57600),
(7597, 'Usha', 'usha@gmail.com', 32400),
(7598, 'Anesha', 'anesha@gmail.com', 69800),
(7599, 'sandhya', 'sandhya@gmail.com', 87500);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `money` double NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `sender`, `receiver`, `money`, `time`) VALUES
(1, 'Satya', 'Sai', 100, '2021-08-18 11:55:04 AM'),
(2, 'Tejaswini', 'Priya', 1000, '2021-08-18 12:00:40 PM'),
(3, 'Usha', 'Revathi', 2000, '2021-08-18 12:00:58 PM'),
(4, 'Priya', 'Sai', 3000, '2021-08-18 12:35:43 PM'),
(5, 'Tejaswini', 'Revathi', 2000, '2021-08-18 01:52:11 PM'),
(6, 'Priya', 'Akshara', 10000, '2021-08-18 02:05:59 PM'),
(7, 'Anesha', 'sandhya', 10000, '2021-08-18 02:06:45 PM'),
(8, 'Akshara', 'Satya', 1000, '2021-08-18 02:17:34 PM'),
(9, 'Usha', 'Priya', 1000, '2021-08-18 02:18:01 PM'),
(10, 'Girija', 'Usha', 3000, '2021-08-18 02:25:38 PM'),
(11, 'Revathi', 'Usha', 700, '2021-08-18 02:27:43 PM'),
(12, 'Revathi', 'Usha', 700, '2021-08-18 02:30:15 PM'),
(13, 'Anesha', 'Priya', 200, '2021-08-18 02:31:03 PM'),
(14, 'Sai', 'Usha', 1500, '2021-08-18 02:40:29 PM'),
(15, 'Akshara', 'sandhya', 2500, '2021-08-18 02:41:54 PM'),
(16, 'Usha', 'Sai', 500, '2021-08-18 02:42:26 PM'),
(17, 'Tejaswini', 'Priya', 20000, '2021-08-18 07:06:16 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
