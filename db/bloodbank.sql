-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 03:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `fullnames` text NOT NULL,
  `username` text NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `gender` text NOT NULL,
  `location` text NOT NULL,
  `dob` varchar(500) NOT NULL,
  `bloodgroup` text NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `fullnames`, `username`, `phone`, `email`, `gender`, `location`, `dob`, `bloodgroup`, `password`) VALUES
(4, 'Alvin Kiveu Odari', 'umeskia', '0768168060', 'alvo967@gmail.com', 'Male', 'Nakuru', '2000-03-02', 'O+', '256a73e75672cc991b94aee31c1c61e7');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `fullnames` text NOT NULL,
  `phonenumber` varchar(500) NOT NULL,
  `location` text NOT NULL,
  `bloodtype` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`ID`, `username`, `fullnames`, `phonenumber`, `location`, `bloodtype`, `info`) VALUES
(1, 'umeskia', 'Alvin Kiveu Odari', '0768168060', 'Nakuru', 'O+', 'mwdkmekdmekdekdwed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
