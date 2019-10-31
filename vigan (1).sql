-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 09:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vigan`
--

-- --------------------------------------------------------

--
-- Table structure for table `appform`
--

CREATE TABLE `appform` (
  `ID` int(11) NOT NULL,
  `body` text NOT NULL,
  `closing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `ID` int(11) NOT NULL,
  `profession` text NOT NULL,
  `company` text NOT NULL,
  `objective` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `middlename` text NOT NULL,
  `address` text NOT NULL,
  `contactn` text NOT NULL,
  `email` text NOT NULL,
  `age` text NOT NULL,
  `religion` text NOT NULL,
  `status` text NOT NULL,
  `birthdate` text NOT NULL,
  `skill` text NOT NULL,
  `skill2` text NOT NULL,
  `skill3` text NOT NULL,
  `tertiary` text NOT NULL,
  `shs` text NOT NULL,
  `jhs` text NOT NULL,
  `elem` text NOT NULL,
  `sem` text NOT NULL,
  `sem2` text NOT NULL,
  `cref` text NOT NULL,
  `cref2` text NOT NULL,
  `cref3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `undergrad`
--

CREATE TABLE `undergrad` (
  `ID` int(11) NOT NULL,
  `profession` text NOT NULL,
  `company` text NOT NULL,
  `objective` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `middlename` text NOT NULL,
  `address` text NOT NULL,
  `contactn` text NOT NULL,
  `email` text NOT NULL,
  `age` text NOT NULL,
  `religion` text NOT NULL,
  `status` text NOT NULL,
  `birthdate` text NOT NULL,
  `skill` text NOT NULL,
  `skill2` text NOT NULL,
  `skill3` text NOT NULL,
  `tertiary` text NOT NULL,
  `shs` text NOT NULL,
  `jhs` text NOT NULL,
  `elem` text NOT NULL,
  `sem` text NOT NULL,
  `sem2` text NOT NULL,
  `cref` text NOT NULL,
  `cref2` text NOT NULL,
  `cref3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appform`
--
ALTER TABLE `appform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `undergrad`
--
ALTER TABLE `undergrad`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appform`
--
ALTER TABLE `appform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `undergrad`
--
ALTER TABLE `undergrad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
