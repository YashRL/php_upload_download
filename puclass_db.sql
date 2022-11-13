-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 10:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puclass_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `imgupload_tb`
--

CREATE TABLE `imgupload_tb` (
  `img_id` int(10) NOT NULL,
  `img_nm` varchar(250) NOT NULL,
  `img_url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imgupload_tb`
--

INSERT INTO `imgupload_tb` (`img_id`, `img_nm`, `img_url`) VALUES
(1, 'hello1', 'Web capture_11-10-2022_22492_shreejimultitech.com.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgupload_tb`
--
ALTER TABLE `imgupload_tb`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgupload_tb`
--
ALTER TABLE `imgupload_tb`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
