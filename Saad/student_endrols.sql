-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 09:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_endrols`
--

CREATE TABLE `student_endrols` (
  `stu_nid` int(5) NOT NULL,
  `stu_name` varchar(10) NOT NULL,
  `stu_email` varchar(30) NOT NULL,
  `stu_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_endrols`
--

INSERT INTO `student_endrols` (`stu_nid`, `stu_name`, `stu_email`, `stu_password`) VALUES
(0, 'Ali', 'ali12@gmail.com', 'ali66'),
(1, 'Hamza', 'hamza123@gmail.com', '1234'),
(3, 'Ali', 'ali12@gmail.com', 'uk.com'),
(4, 'Saad', 'Saad90@yahoo.com', 'Saad12'),
(5, 'Ali Abas', 'b@gmail.com', '12345'),
(6, 'Ali Abas', 'b@gmail.com', '12345'),
(7, 'Ali Abas', 'b@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_endrols`
--
ALTER TABLE `student_endrols`
  ADD PRIMARY KEY (`stu_nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_endrols`
--
ALTER TABLE `student_endrols`
  MODIFY `stu_nid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
