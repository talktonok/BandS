-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 07:26 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasuwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email_address`, `password`, `firstname`, `surname`, `image`) VALUES
('ad1', 'mansuribrahimnok@gmail.com', '1234', 'Mansur', 'Ibrahim Nok', 'img/371577758_IMG_20180727_095028.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` text NOT NULL,
  `pro_category` varchar(50) NOT NULL,
  `pro_details` longtext NOT NULL,
  `pro_price` double NOT NULL,
  `pro_type` varchar(15) NOT NULL,
  `pro_image` text NOT NULL,
  `visibility` int(11) NOT NULL,
  `user` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_category`, `pro_details`, `pro_price`, `pro_type`, `pro_image`, `visibility`, `user`) VALUES
(2, 'Iphone', 'Phone', 'Phone and some watches', 20000, 'New', 'images/product/1_789852518_â€ª+234 706 041 1060â€¬ 20141124_183735.jpg', 1, '1'),
(10, 'House', 'Accessories', 'Beautiful House', 5000000, 'New', 'images/product/ad1_397132869_a25.jpg', 0, 'ad1'),
(11, 'House', 'Accessories', 'Beautiful House', 5000000, 'New', 'images/product/ad1_994133137_a25.jpg', 1, 'ad1'),
(12, 'House', 'Accessories', 'Beautiful House', 5000000, 'New', 'images/product/ad1_830577613_a25.jpg', 1, 'ad1'),
(13, 'House', 'Clothes', 'High Hills', 7000, 'New', 'images/product/ad1_1397426911_2014-05-16 18.57.48.png', 1, 'ad1'),
(14, 'House', 'Book', 'dddddd', 20000, 'New', 'images/product/ad1_980124414_b29.jpg', 1, 'ad1'),
(17, 'clothes', 'Clothes', 'some clothes', 7000, 'New', 'images/product/1_228884420_c6.jpg', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `firstname` text NOT NULL,
  `surname` text NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` text NOT NULL,
  `state` text NOT NULL,
  `nationality` text NOT NULL,
  `department` text NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `firstname`, `surname`, `gender`, `address`, `state`, `nationality`, `department`, `phone_no`, `image`) VALUES
('1', 'mansuribrahimnok@gmail.com', '1234', 'Mansur', 'Ibrahim Nok', 'Male', 'Nok', 'Kaduna', 'Nigeria', 'Comp scie.', '08161939418', 'images/user/371577758_IMG_20180727_095028.jpg'),
('3', 'amina@gmail.com', '1234', 'Amina', 'Jibril Kalamu', 'female', 'Kaduna', '08051488489', '1234', '1234', '2147483647', 'images/user/1979086316_b9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `user` (`user`),
  ADD KEY `user_2` (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
