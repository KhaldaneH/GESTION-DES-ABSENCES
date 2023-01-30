-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 05:09 AM
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
-- Database: `dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE `absence` (
  `ID` int(10) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Absence` int(10) NOT NULL,
  `Moyen_abs` int(10) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absence`
--

INSERT INTO `absence` (`ID`, `Fullname`, `Email`, `Password`, `Absence`, `Moyen_abs`, `Message`) VALUES
(1, 'Aderak Mohamed', 'aderakmohamed@ofppt-du.ma', 'A44758321', 1, 20, 'no message'),
(2, 'Mustapha Ait laarbi', 'Mustapha@ofppt-du.ma', 'M2222222', 0, 20, 'no message'),
(3, 'Elmajouti Hicham', 'elmajoutihicham@ofppt-du.ma', 'E5557482', 19, 2, 'no message'),
(4, 'Abakrim Mohamed', 'elmajoutihicham@ofppt-du.ma', 'A7775826', 10, 11, 'no message'),
(5, 'Aafane Najat', 'aafanenajat@ofppt-du.ma', 'A44569987', 5, 16, 'no message'),
(6, 'Missou Zakaria', 'missouzakaria@ofppt-du.ma', 'A44569987', 0, 20, 'no message'),
(7, 'Sabiri Fadma', 'sabirifadma@ofppt-du.ma', 'S11100223', 6, 15, 'no message');

-- --------------------------------------------------------

--
-- Table structure for table `gestionnaire`
--

CREATE TABLE `gestionnaire` (
  `ID` int(10) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gestionnaire`
--

INSERT INTO `gestionnaire` (`ID`, `Fullname`, `Email`, `Password`) VALUES
(1, 'Hamza khaldane', 'hamzakhaldane@ofppt-edu.ma', 'K7770911'),
(2, 'Tsuka Boumlik', 'tsuka@ofppt-edu.ma', 'T0001233'),
(3, 'Ysf khouchoa', 'ysf@ofppt-edu.ma', 'Y9985522');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absence`
--
ALTER TABLE `absence`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
