-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 06:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Address`, `ProfilePic`, `status`, `CreationDate`) VALUES
(12, 'Linlyn ', 'Canape', 12345, 'All', 'Hiba-iyo, Guihulngan', 'd41d8cd98f00b204e9800998ecf8427e1635666070.jpg', 'confirmed', '2021-11-29 05:25:03'),
(13, 'Linlyn ', 'Canape', 12345, 'Elementary Department', 'Hiba-iyo, Guihulngan', 'd41d8cd98f00b204e9800998ecf8427e1635666645.png', 'pending', '2021-11-29 05:22:40'),
(14, 'Linlyn ', 'Canape', 12345, 'Elementary Department', 'Hiba-iyo, Guihulngan', 'd41d8cd98f00b204e9800998ecf8427e1635667832.gif', 'pending', '2021-11-29 05:22:43'),
(15, 'Linlyn ', 'Canape', 12345, 'All', 'Hiba-iyo, Guihulngan', 'd41d8cd98f00b204e9800998ecf8427e1635670894.png', 'pending', '2021-11-29 05:22:44'),
(16, 'Linlyn ', 'Canape', 12344, 'All', 'Hiba-iyo, Guihulngan', 'd41d8cd98f00b204e9800998ecf8427e1635671190.png', 'pending', '2021-11-29 05:22:46'),
(17, 'Linlyn ', 'Canape', 12345, 'Elementary Department', 'Hiba-iyo, Guihulngan', 'd41d8cd98f00b204e9800998ecf8427e1635672238.jpg', 'confirmed', '2021-11-29 05:23:36'),
(20, 'test', 'test', 122345, 'All', 'test@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e1638163972.jpg', 'pending', '2021-11-29 05:32:52'),
(21, 'KIM', 'TABILON', 9675743804, 'All', 'BINOONGAN', 'd41d8cd98f00b204e9800998ecf8427e1638164011.jpg', 'pending', '2021-11-29 05:33:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
