-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2023 at 06:15 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robin`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcust`
--

DROP TABLE IF EXISTS `addcust`;
CREATE TABLE IF NOT EXISTS `addcust` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contry` varchar(15) NOT NULL,
  `phone` int NOT NULL,
  `pincode` int NOT NULL,
  `purmobname` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addmobile`
--

DROP TABLE IF EXISTS `addmobile`;
CREATE TABLE IF NOT EXISTS `addmobile` (
  `mid` int NOT NULL AUTO_INCREMENT,
  `mname` varchar(20) NOT NULL,
  `mprize` int NOT NULL,
  `msoft` varchar(30) NOT NULL,
  `mimg` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `ctid` int NOT NULL,
  `cmid` int NOT NULL,
  `qty` int NOT NULL DEFAULT '20',
  `storage` varchar(20) NOT NULL,
  `camera` varchar(20) NOT NULL,
  `charge` varchar(20) NOT NULL,
  `loangedob` date NOT NULL,
  `warentity` varchar(20) NOT NULL,
  `stocks` int NOT NULL DEFAULT '30',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addmobile`
--

INSERT INTO `addmobile` (`mid`, `mname`, `mprize`, `msoft`, `mimg`, `status`, `ctid`, `cmid`, `qty`, `storage`, `camera`, `charge`, `loangedob`, `warentity`, `stocks`) VALUES
(30, 'iphone14', 200000, 'mac', 'c681b8424052bfedfb6b1b5842937fcb_c1c80486d6db5a06c84.jfif', 1, 8, 45, 20, '0', '', '', '0000-00-00', '', 30),
(29, 'samsung', 100000, 'andriod', 'ba02d2ddc9b6b3db701bbf657939da15_27d3daee8b10f7c31.jpg', 1, 8, 42, 20, '0', '', '', '0000-00-00', '', 30),
(28, 'pixel', 40000, 'google', 'e3e16f90b2ebd5c6ef4abe68db0f0ba1_22bc0e4c775c53ca.jpg', 1, 8, 41, 20, '0', '', '', '0000-00-00', '', 30),
(27, 'samsung', 100000, 'andriod', 'd9bc202ae03d78a4236cb2c116a19eca_e98cfa05707fed345.jfif', 1, 8, 42, 20, '0', '', '', '0000-00-00', '', 30),
(26, 'iphone ', 100000, 'mac', 'dd7ceafc8e392215cabf7ddbff8061e3_705ee521ee78.jpg', 1, 8, 45, 20, '0', '', '', '0000-00-00', '', 30),
(31, 'oneplus3 nord', 80000, 'oxigen', 'f7168566d95a669a702e2ae07ed44843_6baf25d0460ef.jpg', 1, 8, 44, 20, '0', '', '', '0000-00-00', '', 30),
(32, 'oppo', 40000, 'andriod', '1628fc24d6b4fff645772eed8861abcd_8da47c5c42f8ef.jpg', 1, 8, 46, 20, '0', '', '', '0000-00-00', '', 30),
(33, 'vivo', 20000, 'andriod', '92a714d812a3e5b6ce4ee5e0a991093a_f1a96e7c7b88b5d7.jfif', 1, 8, 47, 20, '0', '', '', '0000-00-00', '', 30),
(34, 'nokiya', 2000, 'gameloft', 'e7cc488410419ea111951e188f8914b3_fb2ebc89308c4.png', 1, 9, 48, 20, '0', '', '', '0000-00-00', '', 30),
(35, 'samsung', 300000, 'andriod', '', 2, 10, 42, 20, '0', '', '', '0000-00-00', '', 30),
(36, 'oppo', 40000, 'andriod', '2943ef2d5935be59c54d33722e74bc16_5b67ea1733afc1.jpg', 2, 8, 46, 20, '0', '', '', '0000-00-00', '', 30);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `aid` int NOT NULL AUTO_INCREMENT,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aid`, `email`, `password`) VALUES
(1, 'robin', 'robin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bid` int NOT NULL AUTO_INCREMENT,
  `bname` varchar(30) NOT NULL,
  `baddress` varchar(30) NOT NULL,
  `bplace` varchar(30) NOT NULL,
  `bproduct` varchar(20) NOT NULL,
  `bprice` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `date` date NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `bname`, `baddress`, `bplace`, `bproduct`, `bprice`, `status`, `date`) VALUES
(26, 'robin', 'choondiyani', 'choondiyanikkal', '', 0, 2, '0000-00-00'),
(27, 'robin', 'choondiyani', 'choondiyanikkal', '', 0, 2, '0000-00-00'),
(28, 'robin', 'choondiyani', 'choondiyanikkal', 'iphone14', 200000, 2, '0000-00-00'),
(29, 'robin', 'davis', 'hjvv', 'iphone14', 400000, 2, '0000-00-00'),
(30, 'robin', 'davis', 'hjvv', 'iphone14', 400000, 2, '2023-11-24'),
(31, 'robin', 'davis', 'hjvv', 'iphone14', 400000, 2, '2023-11-23'),
(32, 'roc', 'choondiyani', 'palethine', 'samsung', 100000, 1, '2023-11-23'),
(33, 'roc', 'choondiyanikal', 'amama', 'samsung', 100000, 1, '2023-11-22'),
(34, 'roc', 'choondiyanikal', 'malayattor', 'iphone14', 200000, 1, '2023-11-23'),
(35, 'roc', 'choondiyanikal', 'malayattor', 'oneplus3', 80000, 1, '2023-11-29'),
(36, 'roc', 'choondiyanikal', 'malayattor', 'iphone14', 200000, 1, '2023-11-23'),
(37, 'roc', 'choondiyanikal', 'malayattor', 'samsung', 100000, 1, '2023-11-22'),
(38, 'roc', 'choondiyanikal', 'hjvv', 'iphone14', 200000, 1, '2023-11-09'),
(39, 'roc', 'choondiyanikal', 'ghgf', 'samsung', 300000, 1, '2023-11-08'),
(40, 'roc', 'choondiyanikal', 'malayattor', 'iphone14', 200000, 1, '0000-00-00'),
(41, 'roc', 'choondiyanikal', 'malayattor', 'iphone14', 200000, 1, '2023-11-30'),
(42, 'roc', 'choondiyanikal', 'amama', 'iphone14', 200000, 1, '0000-00-00'),
(43, 'roc', 'choondiyanikal', 'choondiyanikkal', 'pixel', 80000, 1, '2023-11-29'),
(44, 'roc', 'choondiyanikal', 'ghgf', 'pixel', 40000, 1, '2023-11-23'),
(45, 'roc', 'choondiyanikal', 'malayattor', 'iphone14', 200000, 1, '2023-11-20'),
(46, 'roc', 'choondiyanikal', 'malayattor', 'samsung', 400000, 1, '2023-11-08'),
(47, 'roc', 'choondiyanikal', 'malayattor', 'iphone14', 400000, 1, '2023-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `carid` int NOT NULL AUTO_INCREMENT,
  `carname` varchar(20) NOT NULL,
  `quandity` int NOT NULL DEFAULT '20',
  `proprice` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `odate` date NOT NULL,
  `total` int NOT NULL,
  `deliver` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`carid`)
) ENGINE=MyISAM AUTO_INCREMENT=306 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`carid`, `carname`, `quandity`, `proprice`, `status`, `odate`, `total`, `deliver`) VALUES
(297, 'iphone14', 1, 200000, 2, '0000-00-00', 200000, '<h style = color:green;>item delivared</h>'),
(299, 'iphone14', 1, 200000, 2, '0000-00-00', 200000, '<h style = color:gray;>item delivaryed</h>'),
(300, 'samsung', 3, 100000, 2, '0000-00-00', 300000, '<h style = color:gray;>item delivaryed</h>'),
(303, 'samsung', 4, 100000, 2, '0000-00-00', 400000, '<h style = color:gray;>item delivaryed</h>'),
(302, 'samsung', 3, 100000, 2, '0000-00-00', 300000, '<h style = color:gray;>item delivaryed</h>'),
(304, 'iphone14', 2, 200000, 3, '0000-00-00', 400000, '<h style = color:green;> delivary conform</h>'),
(305, 'iphone14', 2, 200000, 1, '0000-00-00', 400000, '<h style = color:gray;>item delivaryed</h>');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category` varchar(20) NOT NULL,
  `cid` int NOT NULL AUTO_INCREMENT,
  `catimg` varchar(300) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`, `cid`, `catimg`) VALUES
('smart phone', 8, '055954c7afad889065630be1b9ecfce5_cf88c4d1994c1995.jfif'),
('cell phone', 9, 'a694e55c874a6b8cd3b310a6e1ce6d1e_d9a22fcc75b3.png'),
('folder phone', 10, '10e44a28208ce957c3438461ecfde6ef_37d9927c955c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) NOT NULL,
  `cplace` varchar(20) NOT NULL,
  `cimg` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `cplace`, `cimg`, `status`) VALUES
(41, 'pixel', 'in', '', 2),
(50, 'iphone', 'ef', '00d74d2a7b4ded3f7312225a4f5dd001_153853e4c9a5cd30b.png', 2),
(42, 'samsung', 'india', '73af57cc98d282b597ebcc41a8d8e43d_0690b9d2b22.jfif', 1),
(43, 'realme', 'ei', '', 2),
(49, 'realme', 'india', '40fc3608bb6b9f51176cefb4ee4ba67f_b714b16608286578b10.png', 1),
(44, 'oneplus', 'india', '5b93cac81e5c40f4e209e78e147d7574_bef0a3758dd.png', 1),
(45, 'iphone', 'india', 'b34b8451fbef3bd55a03151eb64db8b7_68b26472cc670df0b8e3.png', 2),
(46, 'oppo', 'ef', '2b0d28077bb6a7535d9a955f64b43793_880ea850dc28fabd6935.png', 1),
(47, 'vivo', 'bn', '9a4e9a1d6ac150d0893e0551e4ed1d3a_23d0f353ad9ea.jpg', 1),
(48, 'nokiya', 'ri', 'e0080a99ef6eb206e00e52eb62559e5e_9697f8b99fe7442d3ff5.jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

DROP TABLE IF EXISTS `oder`;
CREATE TABLE IF NOT EXISTS `oder` (
  `oid` int NOT NULL AUTO_INCREMENT,
  `quandity` int NOT NULL DEFAULT '20',
  `total` int NOT NULL,
  `proprice` int NOT NULL,
  `status` int NOT NULL DEFAULT '2',
  `odate` date NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `cardname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cardnumber` int NOT NULL,
  `hname` varchar(30) NOT NULL,
  `pprice` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `cartid` int NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `cardname`, `cardnumber`, `hname`, `pprice`, `status`, `cartid`) VALUES
(44, 'sam', 1234, 'hhhhud', 50000, 1, 102),
(45, 'rob', 6565, 'rtt', 50000, 1, 104),
(46, 'rir', 1111, 'eolf', 150000, 1, 106),
(47, 'run', 111, 'robiis', 200000, 1, 107),
(48, 'sam', 11111, 'hhhhud', 50000, 1, 110),
(49, 'sam', 345667, 'sass', 100000, 1, 115),
(50, 'gygh', 9879879, 'jhhhhhhkh', 200000, 1, 117),
(51, 'run', 111111111, 'king', 200000, 1, 118),
(52, 'roco', 111, 'robin', 200000, 1, 110),
(53, 'rir', 1111, 'rtt', 100000, 1, 121),
(54, 'roco', 1111777, 'hhhhud', 400000, 1, 122),
(55, 'sam', 6756777, 'robiis', 400000, 1, 125),
(56, 'rob', 5652651, 'robin', 100000, 1, 127),
(57, 'aaa', 8239729, 'sheon', 300000, 1, 127),
(58, 'sdadsdsd', 1234, 'fsffefe', 600000, 1, 129),
(59, 'jkqguq', 2147483647, 'yutwuw', 400000, 1, 126),
(60, 'run', 22222, 'robiis', 8000, 1, 137),
(61, 'sam', 114, 'robiis', 10000, 1, 137),
(62, 'rob', 4414523, 'rtt', 12000, 1, 137),
(63, 'ghhhhhhhh', 7678, 'robiis', 2000, 1, 146),
(64, 'yuu', 7678, 'robiis', 2000, 1, 146),
(65, 'yuu', 7678, 'robiis', 2000, 1, 146),
(66, 'yuu', 7678, 'robiis', 2000, 1, 146),
(67, 'yuu', 7678, 'robiis', 2000, 1, 146),
(68, 'run', 7868, 'hhhhud', 2000, 1, 146),
(69, 'run', 7868, 'hhhhud', 2000, 1, 146),
(70, 'run', 7868, 'hhhhud', 2000, 1, 146),
(71, 'sam', 7868, 'robin', 2000, 1, 146),
(72, 'sam', 7868, 'robin', 2000, 1, 146),
(73, 'sam', 7868, 'robin', 2000, 1, 146),
(74, 'sam', 7868, 'robin', 2000, 1, 146),
(75, 'sam', 7868, 'robin', 2000, 1, 146),
(76, 'sam', 7868, 'robin', 2000, 1, 146),
(77, 'sam', 7868, 'robin', 2000, 1, 146),
(78, 'sam', 7868, 'robin', 2000, 1, 146),
(79, 'sam', 7868, 'robin', 2000, 1, 146),
(80, 'sam', 7868, 'robin', 2000, 1, 146),
(81, 'sam', 7868, 'robin', 2000, 1, 146),
(82, 'visa', 123456, 'robiis', 1000000, 1, 149),
(83, 'run', 234341, 'irorir', 400000, 1, 136),
(84, 'rob', 12342, 'robin', 600000, 1, 136),
(85, 'rob', 12342, 'robin', 600000, 1, 136),
(86, 'makkrii', 3919, 'rtt', 100000, 1, 149),
(87, 'rob', 98000, 'eolf', 4000, 1, 153),
(88, 'rob', 98000, 'eolf', 4000, 1, 153),
(89, 'rob', 4223, 'hhhhud', 100000, 1, 155),
(90, 'sam', 762761, 'gujiib', 120000, 1, 128),
(91, 'sam', 762761, 'gujiib', 120000, 1, 128),
(92, 'sam', 762761, 'gujiib', 120000, 1, 128),
(93, 'rob', 89979, 'hhhhud', 2000, 1, 157),
(94, 'rob', 6755858, 'rtt', 600000, 1, 150),
(95, 'run', 3434, 'rtt', 200000, 1, 159),
(96, 'roco', 6456465, 'robin', 400000, 1, 159),
(97, 'run', 2147483647, 'hhhhud', 100000, 1, 161),
(98, 'rir', 6865865, 'hhhhud', 200000, 1, 219),
(99, 'roco', 123456, 'robin', 200000, 1, 261),
(100, 'roco', 434, 'rtt', 80000, 1, 262),
(101, 'rob', 121313, 'sass', 200000, 1, 265),
(102, 'sam', 121, 'robiis', 100000, 1, 266),
(103, 'run', 2121, 'rtt', 200000, 1, 267),
(104, 'sam', 21212, 'robiis', 300000, 1, 268),
(105, 'roco', 1202837, 'robin', 200000, 1, 269),
(106, 'roco', 16272812, 'robin', 200000, 1, 270),
(107, 'rir', 151571, 'hhhhud', 40000, 1, 272),
(108, 'rir', 151571, 'hhhhud', 40000, 1, 272),
(109, 'roco', 1212, 'robiis', 100000, 1, 276),
(110, 'roco', 1212, 'robiis', 100000, 1, 276),
(111, 'visa', 12342222, 'robin', 200000, 1, 286),
(112, 'roco', 11, 'asdf', 1000000, 1, 286),
(113, 'sam', 323232, 'rtt', 40000, 1, 292),
(114, 'sam', 323232, 'rtt', 40000, 1, 292),
(115, 'sam', 323232, 'rtt', 40000, 1, 292),
(116, 'sam', 323232, 'rtt', 40000, 1, 292),
(117, 'sam', 323232, 'rtt', 40000, 1, 292),
(118, 'sam', 323232, 'rtt', 40000, 1, 292),
(119, 'rob', 123456, 'sass', 80000, 1, 292),
(120, 'run', 564, 'robin', 40000, 1, 296),
(121, 'sam', 45352, 'robin', 200000, 1, 297),
(122, 'roco', 1213, 'hhhhud', 200000, 1, 299),
(123, 'roco', 23131, 'hhhhud', 300000, 1, 300),
(124, 'roco', 2523, 'sass', 300000, 1, 300),
(125, 'roco', 2523, 'sass', 300000, 1, 300),
(126, 'run', 13111131, 'rtt', 300000, 1, 302),
(127, 'run', 13111131, 'rtt', 300000, 1, 302),
(128, 'roco', 13352, 'hhhhud', 400000, 1, 303),
(129, 'rob', 23121446, 'robin', 400000, 1, 304);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `rid` int NOT NULL AUTO_INCREMENT,
  `address` varchar(30) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `rid`, `address`, `status`) VALUES
('roc', 'roc@gmail.com', '12345', 31, 'choondiyanikal', 2),
('samsung', 'robincd@gmail.com', '123123', 34, 'kothpurakkal,kalady', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
