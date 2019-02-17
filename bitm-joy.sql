-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 06:51 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitm-joy`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobby` varchar(40) NOT NULL,
  `image_name` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`, `hobby`, `image_name`, `dob`) VALUES
(13, 'ms khan', 'shakibhasan6113@gmail.com', '6113', 'dfgfd', '015325635685552', 'male', 'cricket, dancing', 'diu-k-superstar.jpg', '16 - 10 - 2008'),
(20, 'sumon', 'sumon@gmail.com', 'sumona', 'Dhaka', '017799885522', 'male', 'cricket, singing, dancing', '', '1 - 1 - 2001'),
(21, 'sumon', 'sumon@gmail.com', '5656', 'Dhaka', '017799885522', 'male', 'cricket, singing, dancing', 'shakib hasan.jpg', '01 - 01 - 2001'),
(61, 'mahbub', 'mahbub22@gmail.com', '222244', 'hobigonj', '0177885566', 'male', 'cricket', '22555', '17 - 11 - 2017'),
(65, 'rafi', 'rafi@gmail.com', '123', 'kushtia', '01799886655', 'male', 'cricket', '', '11 - 11 - 1997'),
(67, 'Heron', 'heron@gmail.com', '656565', 'Gazipur', '01354887799', 'male', 'cricket, singing', 'diu-k-superstar.jpg', '18-09-2001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
