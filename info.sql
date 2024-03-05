-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 06:54 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `fname` varchar(188) NOT NULL,
  `lname` varchar(188) NOT NULL,
  `mname` varchar(188) NOT NULL,
  `streetnum` int(11) NOT NULL,
  `streetname` varchar(199) NOT NULL,
  `brgy` varchar(123) NOT NULL,
  `city` varchar(123) NOT NULL,
  `bday` date NOT NULL,
  `year` varchar(123) NOT NULL,
  `course` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fname`, `lname`, `mname`, `streetnum`, `streetname`, `brgy`, `city`, `bday`, `year`, `course`) VALUES
(5, 'paul', 'veroy', 'anshey', 12, 'ibayo', 'Malinta', 'Valenzuela', '2002-12-22', '11', 'GAS'),
(6, 'ivan', 'gonzales', 'lledo', 23, 'tangke', 'Malinta', 'Valenzuela', '2002-11-21', '11', 'GAS'),
(7, 'paul', 'gonzales', '', 23, 'tangke', 'Malinta', 'Valenzuela', '0000-00-00', '12', 'GAS'),
(8, 'kinjay', 'bugarin', 'dimaipinta', 233, 'dulong tangke', 'Malinta', 'Valenzuela', '2001-01-01', '12', 'GAS'),
(9, 'kinjay', 'veroy', 'lledo', 12, 'ibayo', 'Malinta', 'Valenzuela', '2002-02-12', '1st', 'BSIT'),
(10, 'Emmanuel', 'Manalaysay', 'P.', 33, 'backstreet', 'arkong stone', 'Mandaluyong', '1999-03-23', '4th', 'BSIT'),
(11, 'Mike', 'Oxmaul', 'D.', 23, 'Governor I Santiago St.', 'Malinta', 'Valenzuela', '2001-02-11', '3rd', 'BSIT'),
(12, 'Luffy', 'Monkey', 'D.', 11, 'dulong tangke', 'Malinta', 'Valenzuela', '2000-11-22', '11', 'GAS'),
(17, 'Alday', 'Cyril', '', 123, 'bahay', 'bubong', 'lupa city', '0000-00-00', '11', 'GAS'),
(18, 'Mike', 'Oxmaul', '', 23, 'Gov.', 'Malinta', 'Valenzuela', '2000-11-22', '11', 'GAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
