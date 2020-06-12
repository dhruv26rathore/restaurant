-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 06:06 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formrjsdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `formtabledata`
--

CREATE TABLE `formtabledata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formtabledata`
--

INSERT INTO `formtabledata` (`id`, `name`, `contact`, `email`, `password`, `image`, `city`, `gender`, `status`) VALUES
(19, 'kapil', '7354809319', 'patidarkapil333@gmail.com', '3499776ee73013a17c9ce7c3c3b252e5', '3-_1464346834.jpg', 'indore', 'male', 'deactive'),
(20, 'kapil', '7354809319', 'patidarkp333@outlook.com', '3499776ee73013a17c9ce7c3c3b252e5', '1553663035.PNG', 'neemuch', 'male', 'deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formtabledata`
--
ALTER TABLE `formtabledata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formtabledata`
--
ALTER TABLE `formtabledata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
