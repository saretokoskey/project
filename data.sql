-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 11:38 AM
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
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `S.no` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`S.no`, `Username`, `Email`, `Password`) VALUES
(1, 'Rebecca', 'kosk@gmail.com', 'Rebecca123'),
(2, 'KIPTOO', 'kiptoo.0239423@stude', '$2y$10$SoUW/IUKGKqvy'),
(3, 'KIPTOO', 'kiptoo.0239423@stude', '$2y$10$kR5SYNEmsO4or'),
(4, 'KIPTOO', 'kiptoo.0239423@stude', '$2y$10$f6xjfkL228scF'),
(5, 'KIPTOO', 'kiptoo.0239423@stude', '$2y$10$dgUo7wipy8S.9'),
(6, 'Bonny', 'bonny@gmail.com', '$2y$10$ZuOuSUzzAVqXb'),
(7, 'njk', '7889k@hhj.nm', '$2y$10$yQH6rfDjGmoUT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`S.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
