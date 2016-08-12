-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2016 at 07:25 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `registertable`
--

CREATE TABLE `registertable` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertable`
--

INSERT INTO `registertable` (`firstname`, `lastname`, `email_id`, `username`, `password`) VALUES
('admin', 'admin', 'admin@gmail.com', 'admin', '1a1dc91c907325c69271ddf0c944bc72'),
('Arvind', 'Malik', 'arvindmalik@gmail.com', 'Arvind', 'd80fa3a5c25bf7a9dd3a69f7fde6c73c'),
('Manish', 'Kumar', 'manishkumar@gmail.com', 'Manish', 'd1e6b917e2b99d7e4a94d0390b84e304');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(30) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `prof_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `roll`, `age`, `prof_name`) VALUES
('AAA BBB', '1111', 14, 'Arvind'),
('Arnav Das', '1122', 11, 'Arvind'),
('Yash Goyal', '1222', 18, 'Arvind'),
('Abhishek Meena', '1234', 13, 'Arvind'),
('Tushnik Goswami', '1299', 22, 'Arvind'),
('Anushanka Devi', '1357', 11, 'Manish'),
('Abhishek Ranjan', '1400', 22, 'Arvind'),
('aaaaaa', '1401', 22, 'Arvind'),
('Shanta Singh', '1405', 22, 'Manish'),
('Sharik Singh', '1455', 22, 'Manish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registertable`
--
ALTER TABLE `registertable`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `roll` (`roll`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
