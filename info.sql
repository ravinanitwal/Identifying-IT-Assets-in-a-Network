-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 08:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ongc`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ip` text,
  `manufacturer` text,
  `hostname` text,
  `os` text,
  `processor` text,
  `ram` text,
  `videocard` text,
  `localdd` text,
  `mountedfile` text,
  `availuser` text,
  `printer` text,
  `ssn` text,
  `updown` text,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ip`, `manufacturer`, `hostname`, `os`, `processor`, `ram`, `videocard`, `localdd`, `mountedfile`, `availuser`, `printer`, `ssn`, `updown`, `uid`) VALUES
('192.168.43.224', '\r\n\r\n', '\r\n\r\n', '\r\n\r\n', '\r\n\r\n', '\r\n\r\n', 'Not available', '\r\n\r\n', 'Not available', 'Not available', '\r\n\r\n', '\r\n\r\n', 'UP', 422),
('192.168.43.225', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'DOWN', 423),
('192.168.43.226', '\r\n\r\n', '\r\n\r\n', '\r\n\r\n', '\r\n\r\n', '\r\n\r\n', 'Not available', '\r\n\r\n', 'Not available', 'Not available', '\r\n\r\n', '\r\n\r\n', 'UP', 424),
('192.168.43.227', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available', 'DOWN', 425);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
