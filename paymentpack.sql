-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 10:08 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paymentpack`
--

-- --------------------------------------------------------

--
-- Table structure for table `requisitions`
--

CREATE TABLE `requisitions` (
  `Tracknum` int(15) NOT NULL,
  `demandnum` varchar(40) NOT NULL,
  `facility` varchar(40) NOT NULL,
  `demandcode` varchar(7) NOT NULL,
  `catnum` int(7) NOT NULL,
  `orderqty` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `position`, `facility`, `district`, `username`, `email`, `password`, `avatar`) VALUES
(2, 'themb', 'sikosana', 'Assistant Manager', 'Port Shepstone', 'Uthukela', 'themba', 'tg@gmail.com', '', NULL),
(3, 'the', 'fre', 'Pharmacy Manager', 'CJM Hospital', 'Ugu', 'them', 'tr@si.com', '', NULL),
(8, 'rex', 'rex', 'Pharmacy Manager', 'Addington Hospital', 'Amajuba', 'rex', 'rex@gmail.com', '', NULL),
(12, 'tupac', 'shakur', 'Pharmacy Supervisor', 'CJM Hospital', 'Ugu', '2pac', '2pac@gmail.com', '', NULL),
(13, 'mel', 'mel', 'Pharmacist', 'Benedictine Hospital', 'Ugu', 'mel', 'mel@gmail.com', '', NULL),
(18, 'anc', 'anc', 'Pharmacist', 'Charles James Hospital', 'Ugu', 'anc', 'anc@gmail.com', '', NULL),
(21, 'ace', 'khuse', 'Pharmacist', 'Childrens Hospital', 'Ugu', 'ace', 'ace@gmail.com', '', NULL),
(23, 'rama', 'rama', 'Pharmacist', 'Charles James Hospital', 'Umzinyathi', 'rama', 'rama@gmail.com', '', NULL),
(26, 'fox', 'fox', 'Pharmacy Supervisor', 'Childrens Hospital', 'King Cetshwayo', 'fox', 'fox@gmail.com', '', NULL),
(31, 'doc', 'doc', 'Pharmacy Manager', 'Addington Hospital', 'Amajuba', 'doc', 'doc@gmail.com', '', NULL),
(43, '', '', '', '', '', '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requisitions`
--
ALTER TABLE `requisitions`
  ADD PRIMARY KEY (`Tracknum`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requisitions`
--
ALTER TABLE `requisitions`
  MODIFY `Tracknum` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
