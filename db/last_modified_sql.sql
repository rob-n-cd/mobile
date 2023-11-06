-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2023 at 01:28 PM
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
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addmobile`
--

INSERT INTO `addmobile` (`mid`, `mname`, `mprize`, `msoft`, `mimg`, `status`, `ctid`, `cmid`, `qty`) VALUES
(30, 'iphone14', 200000, 'mac', 'c681b8424052bfedfb6b1b5842937fcb_c1c80486d6db5a06c84.jfif', 1, 8, 45, 20),
(29, 'samsung', 100000, 'andriod', 'ba02d2ddc9b6b3db701bbf657939da15_27d3daee8b10f7c31.jpg', 1, 8, 42, 20),
(28, 'pixel', 40000, 'google', 'e3e16f90b2ebd5c6ef4abe68db0f0ba1_22bc0e4c775c53ca.jpg', 1, 8, 41, 20),
(27, 'samsung', 100000, 'andriod', 'd9bc202ae03d78a4236cb2c116a19eca_e98cfa05707fed345.jfif', 1, 8, 42, 20),
(26, 'iphone ', 100000, 'mac', 'dd7ceafc8e392215cabf7ddbff8061e3_705ee521ee78.jpg', 1, 8, 45, 20),
(31, 'oneplus3 nord', 80000, 'oxigen', 'f7168566d95a669a702e2ae07ed44843_6baf25d0460ef.jpg', 1, 8, 44, 20),
(32, 'oppo', 40000, 'andriod', '1628fc24d6b4fff645772eed8861abcd_8da47c5c42f8ef.jpg', 1, 8, 46, 20),
(33, 'vivo', 20000, 'andriod', '92a714d812a3e5b6ce4ee5e0a991093a_f1a96e7c7b88b5d7.jfif', 1, 8, 47, 20),
(34, 'nokiya', 2000, 'gameloft', 'e7cc488410419ea111951e188f8914b3_fb2ebc89308c4.png', 1, 9, 48, 20),
(35, 'samsung', 300000, 'andriod', '6136ae4bcca5c6530011440c3d5149dc_e88fdb899daa71f23b.jpg', 1, 10, 42, 20);

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
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `bname`, `baddress`, `bplace`, `bproduct`, `bprice`, `status`) VALUES
(11, 'robin', 'davis', 'malayattor', 'pixel', 50000, 2),
(12, 'robin', 'ghvghg', 'ghgf', 'oneplus', 100000, 2),
(13, 'robin', 'choondiyani', 'malayattor', 'pixel', 50000, 2),
(14, 'robin', 'choondiyani', 'choondiyanikkal', 'pixel', 50000, 2),
(15, 'robin', 'choondiyani', 'malayattor', 'iphone', 400000, 2),
(16, 'jguhh', 'jhhuggu', 'hjvv', 'iphone', 200000, 2),
(17, 'king', 'palace', 'palethine', 'oneplus', 100000, 2),
(18, 'robin', 'choondiyani', 'choondiyanikkal', 'pixel', 50000, 2),
(19, 'jguhh', 'choondiyani', 'ghgf', 'pixel', 50000, 2),
(20, 'robin', 'jhhuggu', 'hjvv', 'samsung', 50000, 1),
(21, 'king', 'davis', 'hjvv', 'iphone', 400000, 1),
(22, 'robin', 'davis', 'choondiyanikkal', 'samsung', 50000, 1);

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
  PRIMARY KEY (`carid`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`carid`, `carname`, `quandity`, `proprice`, `status`, `odate`, `total`) VALUES
(102, 'samsung', 1, 50000, 2, '0000-00-00', 50000),
(103, 'iphone', 2, 200000, 2, '0000-00-00', 400000),
(104, 'pixel', 1, 50000, 2, '0000-00-00', 50000),
(105, 'pixel', 1, 50000, 2, '0000-00-00', 50000),
(106, 'pixel', 2, 50000, 2, '0000-00-00', 100000),
(107, 'pixel', 1, 50000, 2, '0000-00-00', 50000),
(108, 'pixel', 2, 50000, 2, '0000-00-00', 100000),
(109, 'pixel', 1, 50000, 2, '0000-00-00', 50000),
(110, 'pixel', 1, 50000, 2, '0000-00-00', 50000),
(111, 'samsung', 2, 100000, 2, '0000-00-00', 200000),
(112, 'samsung', 2, 100000, 2, '0000-00-00', 0),
(113, 'samsung', 2, 100000, 2, '0000-00-00', 0),
(114, 'samsung', 2, 100000, 2, '0000-00-00', 0),
(115, 'samsung', 1, 100000, 2, '0000-00-00', 100000),
(116, 'pixel', 1, 50000, 2, '0000-00-00', 50000),
(117, 'samsung', 2, 100000, 2, '0000-00-00', 200000),
(118, 'iphone', 1, 200000, 2, '0000-00-00', 200000),
(119, 'pixel', 2, 50000, 2, '0000-00-00', 100000),
(120, 'pixel', 1, 50000, 2, '0000-00-00', 50000),
(121, 'pixel', 2, 50000, 1, '0000-00-00', 100000),
(122, 'iphone', 2, 200000, 1, '0000-00-00', 400000),
(123, 'oneplus', 2, 100000, 1, '0000-00-00', 200000),
(124, 'iphone14', 1, 200000, 2, '0000-00-00', 200000),
(125, 'iphone14', 2, 200000, 1, '0000-00-00', 400000);

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
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `cplace`, `cimg`, `status`) VALUES
(41, 'pixel', 'india', '1cc84a69b4c33a3137829c77b8252185_56cc72e547fa12.png', 1),
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
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(55, 'sam', 6756777, 'robiis', 400000, 1, 125);

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
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `rid`) VALUES
('hello', 'hello@gmail.comd', '1234', 11),
('hello', 'hello@gmail.comd', 'rojoicepatti', 12),
('hello', 'hello@gmail.comd', 'rijocemorran', 13),
('hello', 'hello@gmail.com', 'yuvhjdrgfas', 14),
('hello', 'hello@gmail.comd', '1234', 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
