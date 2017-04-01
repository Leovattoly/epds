-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 03:02 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epds`
--
CREATE DATABASE IF NOT EXISTS `epds` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epds`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_email` varchar(30) NOT NULL,
  `a_password` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `a_email`, `a_password`) VALUES
(1, 'tsochalakudy@gamil.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `image` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `user`, `image`, `date`) VALUES
(1, '', '70247932-rice-wallpapers1.jpg', '2017-03-08 10:25:22'),
(2, '', '70247932-rice-wallpapers2.jpg', '2017-03-08 10:25:48'),
(3, '', '70247932-rice-wallpapers3.jpg', '2017-03-08 10:29:44'),
(4, '', '6797668-hazy-wallpaper.jpg', '2017-04-01 06:26:28'),
(5, '', '6797668-hazy-wallpaper1.jpg', '2017-04-01 06:28:15'),
(6, '', '6797668-hazy-wallpaper2.jpg', '2017-04-01 06:30:42'),
(7, '', '6797668-hazy-wallpaper3.jpg', '2017-04-01 06:34:03'),
(8, '', '6797668-hazy-wallpaper4.jpg', '2017-04-01 06:44:48'),
(9, '', '6797668-hazy-wallpaper5.jpg', '2017-04-01 06:47:55'),
(10, '', '14910276_1149882408461979_37613640905771', '2017-04-01 06:49:10'),
(11, '', '14910276_1149882408461979_37613640905771', '2017-04-01 07:17:14'),
(12, '', '14910276_1149882408461979_37613640905771', '2017-04-01 07:19:42'),
(13, '', '6797668-hazy-wallpaper6.jpg', '2017-04-01 07:23:23'),
(14, '', '6797668-hazy-wallpaper7.jpg', '2017-04-01 09:30:43'),
(15, '', '14910276_1149882408461979_37613640905771', '2017-04-01 10:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alloc_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user`, `date`, `alloc_date`) VALUES
(1, '', '0000-00-00 00:00:00', '0000-00-00'),
(2, '', '0000-00-00 00:00:00', '2017-04-28'),
(3, '', '0000-00-00 00:00:00', '0000-00-00'),
(4, '', '0000-00-00 00:00:00', '0000-00-00'),
(5, '', '0000-00-00 00:00:00', '0000-00-00'),
(6, '', '0000-00-00 00:00:00', '0000-00-00'),
(7, '', '0000-00-00 00:00:00', '0000-00-00'),
(8, '', '0000-00-00 00:00:00', '0000-00-00'),
(9, '', '0000-00-00 00:00:00', '0000-00-00'),
(10, '', '0000-00-00 00:00:00', '0000-00-00'),
(11, '', '0000-00-00 00:00:00', '0000-00-00'),
(12, '', '0000-00-00 00:00:00', '0000-00-00'),
(13, '', '0000-00-00 00:00:00', '0000-00-00'),
(14, '', '0000-00-00 00:00:00', '0000-00-00'),
(15, '', '0000-00-00 00:00:00', '0000-00-00'),
(16, '', '0000-00-00 00:00:00', '0000-00-00'),
(17, '', '0000-00-00 00:00:00', '0000-00-00'),
(18, '', '0000-00-00 00:00:00', '0000-00-00'),
(19, '', '0000-00-00 00:00:00', '0000-00-00'),
(20, '', '0000-00-00 00:00:00', '0000-00-00'),
(21, '', '0000-00-00 00:00:00', '0000-00-00'),
(22, '', '0000-00-00 00:00:00', '0000-00-00'),
(23, '', '0000-00-00 00:00:00', '0000-00-00'),
(24, '', '0000-00-00 00:00:00', '0000-00-00'),
(25, '', '0000-00-00 00:00:00', '0000-00-00'),
(26, '', '0000-00-00 00:00:00', '0000-00-00'),
(27, '', '0000-00-00 00:00:00', '0000-00-00'),
(28, '', '2017-04-01 09:30:50', '0000-00-00'),
(29, '', '2017-04-01 10:22:59', '0000-00-00'),
(30, '', '2017-04-01 10:23:34', '2017-04-07'),
(31, '', '2017-04-01 10:25:19', '2017-04-07'),
(32, '', '2017-04-01 10:28:31', '0000-00-00'),
(33, '', '2017-04-01 10:29:09', '2017-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `dist_shop`
--

CREATE TABLE IF NOT EXISTS `dist_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dist_id` varchar(25) NOT NULL,
  `shop_id` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `dist_shop`
--

INSERT INTO `dist_shop` (`id`, `dist_id`, `shop_id`) VALUES
(16, '10', 'ARD001'),
(19, '10', 'ARD192'),
(20, '10', '1245'),
(21, '10', 'ARD191'),
(22, '10', 'ARD193');

-- --------------------------------------------------------

--
-- Table structure for table `dist_stock`
--

CREATE TABLE IF NOT EXISTS `dist_stock` (
  `dist_id` varchar(20) NOT NULL,
  `date` float NOT NULL,
  `rice_qty` float NOT NULL,
  `wheat_qty` float NOT NULL,
  `sugar_qty` float NOT NULL,
  `kerosene_qty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dist_stock`
--

INSERT INTO `dist_stock` (`dist_id`, `date`, `rice_qty`, `wheat_qty`, `sugar_qty`, `kerosene_qty`) VALUES
('10', 2017, 12, 21, 12, 32),
('10', 2017, 12, 12, 23, 12),
('10', 2013, 32, 23, 23, 32);

-- --------------------------------------------------------

--
-- Table structure for table `guestusers`
--

CREATE TABLE IF NOT EXISTS `guestusers` (
  `rg_id` int(11) NOT NULL AUTO_INCREMENT,
  `rg_name` varchar(20) NOT NULL,
  `rg_adhar` int(11) NOT NULL,
  `rg_gender` char(6) NOT NULL,
  `rg_mobile` int(11) NOT NULL,
  `rg_email` varchar(30) NOT NULL,
  `rg_username` varchar(20) NOT NULL,
  `rg_password` varchar(10) NOT NULL,
  PRIMARY KEY (`rg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `guestusers`
--

INSERT INTO `guestusers` (`rg_id`, `rg_name`, `rg_adhar`, `rg_gender`, `rg_mobile`, `rg_email`, `rg_username`, `rg_password`) VALUES
(1, 'Liz maria', 2147483647, 'female', 2147483647, 'lichumaria.seby604@gmail.com', '', '007'),
(2, 'leo', 2147483647, 'Male', 2147483647, 'leovattoliy13@gmail.com', 'leo', '123456'),
(3, 'Mrudula', 2147483647, 'female', 2147483647, 'marudulamalu23@gmail.com', 'malumak', '9000'),
(4, 'siraj', 1123456789, 'Male', 2147483647, 'sira@gmail.com', 'siru', '1123');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL DEFAULT '0',
  `itemcode` varchar(10) NOT NULL,
  `itemname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(30) NOT NULL AUTO_INCREMENT,
  `ration_id` varchar(20) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `member_age` varchar(5) NOT NULL,
  `member_gender` varchar(10) NOT NULL,
  `member_occupation` varchar(30) NOT NULL,
  `member_relation` varchar(30) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `ration_id`, `member_name`, `member_age`, `member_gender`, `member_occupation`, `member_relation`) VALUES
(24, '33434', 'angel ', '20', 'female', 'student', 'daughter'),
(32, '1123', 'jameel', '12', 'male', 'vb', 'bvjhdf'),
(33, '1123', 'jumana', '20', 'female', 'student', 'daughter'),
(34, '1123', 'jamseer', '32', 'male', 'farmer', 'jds'),
(35, '33434', 'mariyama', '52', 'female', 'housewife', 'wife'),
(37, '100', 'Nadasha ', '2', 'female', 'student', 'grand daughter'),
(39, '102', 'juju', '12', 'male', 'student', 'daughter'),
(47, '100064544', 'Sneha Deepak', '26', 'Female', 'Teacher', 'wife'),
(48, '100064544', 'Anagha', '3', 'female', 'student', 'daughter'),
(49, '123044', 'liji', '1999-', 'Female', 'house wife', 'daughter');

-- --------------------------------------------------------

--
-- Table structure for table `regiusers`
--

CREATE TABLE IF NOT EXISTS `regiusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ration_id` varchar(20) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `ration_shop_no` varchar(20) NOT NULL,
  `locality` varchar(25) NOT NULL,
  `panchayath` text NOT NULL,
  `no_members` varchar(20) NOT NULL,
  `vehicle` varchar(20) NOT NULL,
  `sq_ft` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `gas` tinyint(1) NOT NULL,
  `land_area` int(11) NOT NULL,
  `electricity` tinyint(1) NOT NULL,
  `card_type` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `regiusers`
--

INSERT INTO `regiusers` (`id`, `ration_id`, `owner_name`, `ration_shop_no`, `locality`, `panchayath`, `no_members`, `vehicle`, `sq_ft`, `income`, `occupation`, `gas`, `land_area`, `electricity`, `card_type`) VALUES
(1, '101', 'Chakkunny Vattoly', 'ARD-193', 'Koovakattukunnu', 'Meloor', '2', '', 0, 0, '', 0, 0, 0, ''),
(2, '100', 'Seby Kodiyan', 'ARD-192', 'Pudukad', 'Pudukad', '1', '', 0, 0, '', 0, 0, 0, ''),
(4, '102', 'Chandramathi amma ', 'ARD-191', 'Peramangalam', 'Kaiparambu', '1', '', 0, 0, '', 0, 0, 0, ''),
(10, '100064544', 'deepak', '122', 'hnvgbn', 'b vc ', '2', '', 0, 0, '', 0, 0, 0, ''),
(13, '33434', 'Lorenz', 'fgfg', 'dfdjh', 'gy', '2', '', 0, 0, '', 0, 0, 0, ''),
(15, '1123', 'Ragu ram', '11212', 'kollam', 'thire', '3', '', 0, 0, '', 0, 0, 0, ''),
(16, '14356', 'kkkkkkk', '156', 'ggggg', 'hhhh', '', '', 0, 0, '', 0, 0, 0, ''),
(17, '123044', 'paul', '1143', 'meloor', 'meloor', '1', '', 0, 0, '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `regi_distributors`
--

CREATE TABLE IF NOT EXISTS `regi_distributors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dist_id` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `no_shops` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dist_id` (`dist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `regi_distributors`
--

INSERT INTO `regi_distributors` (`id`, `dist_id`, `location`, `owner_name`, `address`, `no_shops`) VALUES
(1, '10', 'Meloor', 'Leo', 'Vattoly house', 30),
(2, '1300', 'thrissur', 'binoj', 'mapranathukaran ', 30),
(3, '1234', 'THRISSUR', 'kiran', 'poonjattil', 45),
(5, '233', 'thopp', 'sivan', 'fgghzkkj', 23),
(7, '12345', 'Meloor', 'V O Pilappan', 'Meloor O O', 20);

-- --------------------------------------------------------

--
-- Table structure for table `regi_dist_login`
--

CREATE TABLE IF NOT EXISTS `regi_dist_login` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `regi_dist_login`
--

INSERT INTO `regi_dist_login` (`id`, `username`, `password`) VALUES
(1, '10', '1123');

-- --------------------------------------------------------

--
-- Table structure for table `regi_shop`
--

CREATE TABLE IF NOT EXISTS `regi_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ration_shop_no` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `salesman` varchar(20) NOT NULL,
  `no_cards` int(11) NOT NULL,
  `licence_end_date` date NOT NULL,
  `dist_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ration_shop_no` (`ration_shop_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `regi_shop`
--

INSERT INTO `regi_shop` (`id`, `ration_shop_no`, `location`, `owner_name`, `salesman`, `no_cards`, `licence_end_date`, `dist_id`) VALUES
(1, 'ARD100', 'Jibin', 'Pudukkad', 'Glins', 100, '0000-00-00', ''),
(3, 'ARD001', 'Pudukkad', 'Denny', 'Derin', 120, '0000-00-00', ''),
(6, 'ARD101', 'Meloor', 'Leo', 'Linto', 120, '0000-00-00', '1123'),
(8, '1245', 'Chalakudy', 'Anandhu', 'Varun', 50, '0000-00-00', '1110'),
(9, '1234567890', 'aanakallu', 'abhilash', 'paapu', 700, '2019-05-13', '100'),
(10, 'ARD192', 'mundur', 'Kochu thresya', 'jobin', 340, '2019-12-03', '5673'),
(12, '124', 'ghhj', 'rghh', 'fghjjk', 123, '0001-10-12', '13344');

-- --------------------------------------------------------

--
-- Table structure for table `shop_alloc`
--

CREATE TABLE IF NOT EXISTS `shop_alloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` varchar(25) NOT NULL,
  `item_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'not',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shop_alloc`
--

INSERT INTO `shop_alloc` (`id`, `shop_id`, `item_id`, `date`, `status`) VALUES
(1, 'ARD001', 1, '2017-03-08 09:48:11', 'allocated');

-- --------------------------------------------------------

--
-- Table structure for table `shop_order`
--

CREATE TABLE IF NOT EXISTS `shop_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopid` varchar(20) NOT NULL,
  `itemcode` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `shopid` (`shopid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop_stock`
--

CREATE TABLE IF NOT EXISTS `shop_stock` (
  `shop_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `rice_qty` float NOT NULL,
  `wheat_qty` float NOT NULL,
  `sugar_qty` float NOT NULL,
  `kerosene_qty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_stock`
--

INSERT INTO `shop_stock` (`shop_id`, `date`, `rice_qty`, `wheat_qty`, `sugar_qty`, `kerosene_qty`) VALUES
('', '1996-10-09', 3, 2, 3, 1),
('', '1996-12-04', 3, 2, 3, 1),
('', '1996-12-26', 2, 2, 22, 2),
('', '1996-12-03', 2, 2, 2, 2),
('', '1996-12-03', 2, 2, 2, 2),
('', '1996-04-12', 2, 23, 1, 12),
('', '1996-04-12', 12, 12, 12, 12),
('6', '1997-01-01', 12, 12, 12, 13),
('1', '2017-02-23', 2, 9, 34, 12),
('1', '2017-02-02', 12, 12, 12, 12),
('ARD101', '2014-12-23', 12, 12, 12, 12),
('', '2017-12-03', 245, 200, 150, 100);

-- --------------------------------------------------------

--
-- Table structure for table `stock_alloc`
--

CREATE TABLE IF NOT EXISTS `stock_alloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemcode` varchar(20) NOT NULL,
  `cardtype` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `stock_alloc`
--

INSERT INTO `stock_alloc` (`id`, `itemcode`, `cardtype`, `quantity`, `price`) VALUES
(1, 'bl128', 'apl non su', 235, 12),
(2, 'krsn12', 'bpl', 200, 5),
(3, 'krsn12', 'bpl', 200, 5),
(10, 'bls1123', 'bpl', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'mrudula', '12345', 'mrudulamalu25@gmail.com', '7558072370'),
(2, 'lizmaria', 'chunkz', 'lichu@gmail.com', '9446650250');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
