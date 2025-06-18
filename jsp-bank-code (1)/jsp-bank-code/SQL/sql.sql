-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 09:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banksystem`
--

CREATE TABLE `banksystem` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `emaill` text NOT NULL,
  `pin` text NOT NULL,
  `phone_number` text NOT NULL,
  `birth_date` text NOT NULL,
  `location` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `accountno` text NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banksystem`
--

INSERT INTO `banksystem` (`id`, `username`, `emaill`, `pin`, `phone_number`, `birth_date`, `location`, `password`, `accountno`, `amount`) VALUES
(14, 'prasad', 'prasadpolisetti@gmail.com', '1111', '9542101619', '2003-08-09', 'cheyyeru', 'prasad', '3029425465003', 3),
(15, 'm.sairam', 'sairammedida@gmail.com', '1234', '6300978371', '2004-11-09', 'cheyyeru', '6300978371', '3029425465004', 4),
(9, 'praveen', 'praveen9721@gmail.com', '1234', '9014277766', '2005-08-19', 'I.Polavaram', 'praveen', '3029425465001', 1),
(13, 'yvdsai', 'sai@gmail.com', '7777', '8374912999', '2004-09-07', 'g.pedapudi', 'venkatsai', '3029425465002', 2),
(16, 'jagansai', 'jagan@gmail.com', '1234', '8688295885', '2003-01-06', 'cheyyeru', 'jagansai', '3029425465005', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banksystem`
--
ALTER TABLE `banksystem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banksystem`
--
ALTER TABLE `banksystem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
