-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 05:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_email`, `user_pass`) VALUES
(1, 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE `student_result` (
  `id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `score` varchar(250) NOT NULL DEFAULT '0',
  `1` varchar(250) NOT NULL DEFAULT '',
  `2` varchar(250) NOT NULL DEFAULT '',
  `3` varchar(250) NOT NULL DEFAULT '',
  `4` varchar(250) NOT NULL DEFAULT '',
  `5` varchar(250) NOT NULL DEFAULT '',
  `6` varchar(250) NOT NULL DEFAULT '',
  `7` varchar(250) NOT NULL DEFAULT '',
  `8` varchar(250) NOT NULL DEFAULT '',
  `9` varchar(250) NOT NULL DEFAULT '',
  `10` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`id`, `student_name`, `username`, `score`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`) VALUES
(1, 'Shree', 'shree@test.com', '3', 'Horse-Riding', 'Taylor Hawkins', 'C#', '35', '', '', '', '', '', ''),
(2, 'Ganesh', 'Ganesh@test.com', '0', '', '', '', '', '', '', '', '', '', ''),
(6, 'Sai', 'sai@test.com', '10', 'Talc', 'Need for Speed: Most Wanted (2005)', 'Burro', 'Drill Containment Unit', 'True', 'Indonesia', 'Audi A8', '7', 'Vladivostok', 'True'),
(7, 'Om', 'Om@test.com', '3', 'Horse-Riding', 'Taylor Hawkins', 'C#', '35', '', '', '', '', '', ''),
(8, 'Pooja', 'Pooja@test.com', '1', 'True', '', '', '', '', '', '', '', '', ''),
(9, 'Siddhi', 'siddhi@test.com', '1', 'True', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_result`
--
ALTER TABLE `student_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_result`
--
ALTER TABLE `student_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
