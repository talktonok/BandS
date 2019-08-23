-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 07:54 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `landlord_email` varchar(255) NOT NULL,
  `house_name` varchar(255) NOT NULL,
  `house_address` varchar(255) NOT NULL,
  `house_description` text NOT NULL,
  `house_price` varchar(255) NOT NULL,
  `house_image` text NOT NULL,
  `visibility` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `landlord_email`, `house_name`, `house_address`, `house_description`, `house_price`, `house_image`, `visibility`) VALUES
(7, 'kaseemaliyu123@gmail.com', 'House Abakwa', 'No 333 Samaru', 'erstyiop[o', '30000', 'images/house/kaseemaliyu123@gmail.com_1207443178_1904061_549599608476418_1547482016792582390_n.jpg', '1'),
(8, 'kaseemaliyu123@gmail.com', 'House Abakwa', 'No 33 Samaru Zaria', 'saaaaaaaaaaaaaaa', '30000', 'images/house/kaseemaliyu123@gmail.com_2005253430_Rolls-Royce-Wraith-0 - Copy.jpg', '1'),
(5, 'kaseemauwal501@gmail.com', 'Blue House', 'No 333 Samaru', '4 bed room flat', '30000', 'images/house/kaseemauwal501@gmail.com_882307291_10603459_518345534977068_5923144380952529251_n.jpg', '1'),
(9, 'kaseemaliyu1@gmail.com', 'Dan Raka', 'No 33 Samaru Zaria', 'ghcnbvvvvvvc', '20000', 'images/house/kaseemaliyu1@gmail.com_1045618775_Screenshot_2016-01-14-17-24-45.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `landlord_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `pnumber` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`landlord_id`, `fname`, `lname`, `email`, `gender`, `address`, `pnumber`, `password`, `image`) VALUES
(7, 'Auwal', 'Kasim', 'kaseemaliyu13@gmail.com', 'male', 'No 33 Jos', '8909-099999999', 'e', 'images/landlords/2043082304_1601512_693129714139404_871671322700310085_n.jpg'),
(6, 'Auwal', 'Kasim', 'kaseemauwal501@gmail.com', 'male', 'No 33 Kano', '09074682323', 'aaa', 'images/landlords/1353953509_1FF4E309-2103-4FA2-B695-4514026FF5EBL0001-1.jpg'),
(5, 'Sani', 'Kasim', 'kaseemaliyu123@gmail.com', 'male', 'No 33 Kano', '6723233', 'aaa', 'images/landlords/69226592_1920372_397027870433382_447516830_n.jpg'),
(8, 'Maryam', 'Kasim', 'kaseemaliyu1@gmail.com', 'female', 'No 33 kkwkd', '9043434343', '111', 'images/landlords/847165301_3D433866-F602-4E5A-A7AF-CBDFC2656DCBL0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` int(11) NOT NULL,
  `tenant_name` varchar(255) NOT NULL,
  `tenant_address` varchar(255) NOT NULL,
  `tenant_phone` varchar(255) NOT NULL,
  `ll_email` varchar(255) NOT NULL,
  `h_id` int(11) NOT NULL,
  `date_approved` date DEFAULT NULL,
  `date_leaving` date DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `tenant_image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `tenant_name`, `tenant_address`, `tenant_phone`, `ll_email`, `h_id`, `date_approved`, `date_leaving`, `status`, `tenant_image`) VALUES
(5, 'Aliyu Bala', 'No 222 kaa', '090932333', 'kaseemauwal501@gmail.com', 5, '2018-07-03', NULL, '0', 'images/tenants/Aliyu Bala_511050455_3DE_khushi-and-arnav-iss-pyar-ko-kya-naam-doon-29957476-1024-768.jpg'),
(4, 'Aliyu Bala', 'No 333 kano', '090932333', 'kaseemauwal501@gmail.com', 5, '2018-07-17', '2019-07-17', '1', 'images/tenants/Aliyu Bala_1110983940_1904061_549599608476418_1547482016792582390_n.jpg'),
(6, 'Salis Usman', 'No 333 Riga chikun', '09068740352', 'kaseemaliyu123@gmail.com', 3, NULL, NULL, '0', 'images/tenants/Salis Usman_1280903363_Ak0140.jpg'),
(7, 'Aliyu Bala', 'No 333 kano', '090932333', 'kaseemaliyu123@gmail.com', 7, '2018-07-17', '2019-07-17', '1', 'images/tenants/Aliyu Bala_266247252_66955_145601345602323_172340074_n.jpg'),
(8, 'Aliyu Bala', 'No 333 kano', '090 KAsim', 'kaseemaliyu123@gmail.com', 8, '2018-07-17', '2019-07-17', '1', 'images/tenants/Aliyu Bala_1379192370_20150225_181156.jpg'),
(10, 'Aliyu Bala', 'no 33 kkd', '0903332332', 'kaseemauwal501@gmail.com', 5, NULL, NULL, '0', 'images/tenants/Aliyu Bala_604545765_20180114_101638.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`landlord_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `ll_email` (`ll_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `landlord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
