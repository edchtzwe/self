-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2016 at 11:05 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sproutkitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `size` varchar(128) NOT NULL,
  `price` double NOT NULL,
  `features` varchar(16) NOT NULL,
  `other_features` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `kitchen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `number` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `state` int(11) NOT NULL COMMENT 'int for easy serialization.',
  `suburb` varchar(255) DEFAULT NULL,
  `city` int(11) NOT NULL COMMENT 'int for easy serialization.',
  `pcode` int(11) NOT NULL,
  `ID` varchar(11) NOT NULL COMMENT 'Same as kitchen ID. This is not quantum space.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Location seperated from Kitchen for normalization.';

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL,
  `sunday` varchar(255) NOT NULL,
  `kitchen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Userbase table. ';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('test2', 'test', 'test2@mail.com'),
('test3', 'test', 'test3@mail.com'),
('test4', 'TETS', 'test4@mail.com'),
('test5', 'test', 'test5@mail.com'),
('test6', 'test', 'test6@mail.com'),
('test', 'test', 'test@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`kitchen_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`kitchen_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `kitchen_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
