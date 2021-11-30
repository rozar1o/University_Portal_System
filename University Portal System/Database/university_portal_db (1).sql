-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 04:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_portal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `V_NAME` varchar(50) NOT NULL,
  `V_ID` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `PHONE` int(11) NOT NULL,
  `IMAGE` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parents_info`
--

CREATE TABLE `parents_info` (
  `ID` int(11) NOT NULL,
  `A_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `PHONE` varchar(11) NOT NULL,
  `IMAGE` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `providenotice`
--

CREATE TABLE `providenotice` (
  `ID` int(11) NOT NULL,
  `TITLE` text NOT NULL,
  `DESCRIPTION` longtext NOT NULL,
  `DATE` date NOT NULL,
  `F_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resultinfo`
--

CREATE TABLE `resultinfo` (
  `ID` int(11) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `CGPA` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `S_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `PHONE` varchar(11) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `IMAGE` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentpayhistory`
--

CREATE TABLE `studentpayhistory` (
  `ID` int(11) NOT NULL,
  `PAID` double DEFAULT NULL,
  `DUE` double DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `S_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`V_ID`);

--
-- Indexes for table `parents_info`
--
ALTER TABLE `parents_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `providenotice`
--
ALTER TABLE `providenotice`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FacultyId` (`F_ID`);

--
-- Indexes for table `resultinfo`
--
ALTER TABLE `resultinfo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `StudentId` (`S_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentpayhistory`
--
ALTER TABLE `studentpayhistory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Student_Id` (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `V_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents_info`
--
ALTER TABLE `parents_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `providenotice`
--
ALTER TABLE `providenotice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resultinfo`
--
ALTER TABLE `resultinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentpayhistory`
--
ALTER TABLE `studentpayhistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `providenotice`
--
ALTER TABLE `providenotice`
  ADD CONSTRAINT `FacultyId` FOREIGN KEY (`F_ID`) REFERENCES `faculty` (`V_ID`);

--
-- Constraints for table `resultinfo`
--
ALTER TABLE `resultinfo`
  ADD CONSTRAINT `StudentId` FOREIGN KEY (`S_ID`) REFERENCES `student` (`ID`);

--
-- Constraints for table `studentpayhistory`
--
ALTER TABLE `studentpayhistory`
  ADD CONSTRAINT `Student_Id` FOREIGN KEY (`S_ID`) REFERENCES `student` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
