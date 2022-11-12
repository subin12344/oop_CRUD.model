-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 02:09 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `profilepic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`) VALUES
(1, 'Parallelcode', 'parallelcode2018@gma', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE `studentreg` (
  `id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_email` varchar(20) NOT NULL,
  `student_mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`id`, `student_name`, `student_email`, `student_mobile`) VALUES
(1, 'Parallelcode', 'parallelcode2018@gma', 9876543210),
(2, 'Parallelcode', 'parallelcode2018@gma', 9876543210),
(3, 'Venkat', 'venkat@gmail.com', 9876543210),
(4, 'Youtube', 'youtube@gmail.com', 2345788765),
(5, 'Krishna', 'krishna@gmail.com', 87654321109),
(6, 'Krishna', 'krishna@gmail.com', 87654321109),
(7, 'Dhana', 'dhana@gmail.com', 9848358837),
(8, 'Ram', 'ram@gmail.com', 9876543210),
(9, 'Tamil', 'ttm@gmail.com', 9876543210),
(10, 'Venkat', 'youtube@gmail.com', 345678),
(11, 'Youtube', 'youtube@gmail.com', 2345678),
(12, 'Youtube', 'parallelcode2018@gma', 23456765),
(13, 'Transaction', 'trans@gmail.com', 9876543210),
(14, 'Krishna', 'venkat@gmail.com', 9876543210),
(15, 'Krishna', 'krishna@gmail.com', 9876543210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentreg`
--
ALTER TABLE `studentreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentreg`
--
ALTER TABLE `studentreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
