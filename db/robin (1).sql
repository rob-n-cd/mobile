-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2024 at 01:15 PM
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
  `stocks` int NOT NULL DEFAULT '30',
  `ct` varchar(10) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addmobile`
--

INSERT INTO `addmobile` (`mid`, `mname`, `mprize`, `msoft`, `mimg`, `status`, `ctid`, `cmid`, `qty`, `storage`, `camera`, `charge`, `stocks`, `ct`) VALUES
(30, 'iphone14', 200000, 'mac', 'c681b8424052bfedfb6b1b5842937fcb_c1c80486d6db5a06c84.jfif', 1, 8, 45, 20, '64', '74', 'half hour', 0, '4g'),
(29, 'samsung', 100000, 'andriod', '7342cf9662516172405f9186220c9d5e_d4192c9865589d9e.jpg', 1, 8, 42, 20, '1tb', '12345', 'half hour', 17, '5g'),
(28, 'pixel', 40000, 'google', '9159d961e5316ae4d9c9fc33abf1902c_90eaf7d49081ce0.jpg', 1, 8, 41, 20, '8gb', '1222', 'half hour c type', 23, '4g'),
(26, 'iphone15', 100000, 'mac', '8c371e922161e6ab7ce69581c964e19e_3edbe4d0a1e.jpg', 1, 8, 45, 20, '15gb', '123pix', 'half hour', 30, '5g'),
(31, 'oneplus3 nord', 80000, 'oxigen', '3d76f82b7f0c4cb54fcfd78568b10186_3d4b01da63bb5.jpg', 1, 8, 44, 20, '12gb', '1324pix', 'half hour c type cha', 22, '5g'),
(32, 'oppo A78', 40000, 'andriod', 'b52c5ce16b1297e28a379c4a6f07fb0e_5cb0b1641289f.jpg', 1, 8, 46, 20, '8gb', '123pix', 'half hour c-type cha', 0, '4g'),
(33, 'vivoY35', 20000, 'andriod', '92a714d812a3e5b6ce4ee5e0a991093a_f1a96e7c7b88b5d7.jfif', 1, 8, 47, 20, '8gb', '323pix', 'one hour pin type ch', 4, '4g'),
(34, 'nokiya', 2000, 'nokiyas', 'a87cbe1c50c363c93785d6d9fc58f320_77e734116d0f2c77339e.png', 1, 9, 48, 20, '2gb', '46pix', '2hour pin type charg', 0, '2g'),
(37, 'samsung f folder', 740000, 'galaxy', '2a1f9d9d8405f4242964a4b798986572_e15bde1d0a2.jpg', 1, 10, 42, 20, '1tb', '2000pix', '15mints c port charg', 30, '5g'),
(39, 'nokiya 5', 40000, 'nokiyas', 'acda1aa3aedb59178dabbcfe0f9d29bd_b4077009599.jfif', 1, 9, 48, 20, '2gb', '123pix', '1hour pin or c type ', 30, '2g'),
(40, 'vivo t', 15000, 'funtinality', 'fca543e5dec9bc7483659532fe8e2db7_137fcedef855e45a2ce.png', 1, 8, 47, 20, '6gb', '567pix', 'half hour c type cha', 30, '4g');

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
  `cartid` int NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `bname`, `baddress`, `bplace`, `bproduct`, `bprice`, `status`, `date`, `cartid`) VALUES
(133, 'robin', 'choondiyanikal', 'malayattor', 'samsung', 100000, 2, '2023-12-20', 538),
(132, 'robin', 'choondiyanikal', 'malayattor', 'vivo', 60000, 2, '2023-12-21', 537),
(134, 'robin', 'choondiyanikal', 'choondiyanikkal', 'oneplus3', 80000, 1, '2023-12-20', 539),
(135, 'robin', 'choondiyanikal', 'choondiyanikkal', 'samsung', 100000, 2, '2023-12-20', 540),
(136, 'robin', 'choondiyanikal', 'blackbourn', 'pixel', 40000, 1, '2023-12-20', 541),
(137, 'robin', 'choondiyanikal', 'choondiyanikkal', 'samsung', 100000, 2, '2023-12-14', 542),
(138, 'robin', 'choondiyanikal', 'choondiyanikkal', 'samsung', 300000, 1, '2023-12-11', 543);

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
  `button` varchar(8000) NOT NULL,
  `bid` int NOT NULL,
  PRIMARY KEY (`carid`)
) ENGINE=MyISAM AUTO_INCREMENT=546 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`carid`, `carname`, `quandity`, `proprice`, `status`, `odate`, `total`, `deliver`, `button`, `bid`) VALUES
(538, 'samsung', 1, 100000, 6, '0000-00-00', 100000, '<h style = color:green;>delivary conform</h>', '<a href =../user/returnproduct.php?cid=538>Return</a>', 0),
(537, 'vivo', 3, 20000, 2, '0000-00-00', 60000, '<h style = color:gray;>item delivaryed</h>', '', 0),
(539, 'oneplus3 nord', 1, 80000, 6, '0000-00-00', 80000, '<h style = color:green;>delivary conform</h>', '<a href =../user/returnproduct.php?cid=539>Return</a>', 0),
(540, 'samsung', 1, 100000, 2, '0000-00-00', 100000, '<h style = color:gray;>item delivaryed</h>', '', 0),
(541, 'pixel', 1, 40000, 4, '0000-00-00', 40000, '<h style = color:green;>delivary conform</h>', '<a href =../user/returnproduct.php?cid=541>Return</a>', 0),
(542, 'samsung', 1, 100000, 2, '0000-00-00', 100000, '<h style = color:gray;>item delivaryed</h>', '', 0),
(543, 'samsung', 3, 100000, 4, '0000-00-00', 300000, '<h style = color:green;>delivary conform</h>', '<a href =../user/returnproduct.php?cid=543>Return</a>', 0),
(544, 'iphone ', 1, 100000, 2, '0000-00-00', 100000, '<h style = color:gray;>item delivaryed</h>', '', 0),
(545, 'samsung', 2, 100000, 1, '0000-00-00', 200000, '<h style = color:gray;>item delivaryed</h>', '', 0);

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
(48, 'nokia', 'ri', 'd0c431e918d99150c56808722c4f9ee2_04f0b27d0e36.jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `goret`
--

DROP TABLE IF EXISTS `goret`;
CREATE TABLE IF NOT EXISTS `goret` (
  `status` int NOT NULL DEFAULT '1',
  `bookdate` date NOT NULL,
  `retname` varchar(30) NOT NULL,
  `retaddress` varchar(40) NOT NULL,
  `reproduct` varchar(40) NOT NULL,
  `requandity` int NOT NULL,
  `retotal` int NOT NULL,
  `discription` varchar(200) NOT NULL,
  `redate` date NOT NULL,
  `reemail` varchar(40) NOT NULL,
  `reid` int NOT NULL AUTO_INCREMENT,
  `replace` varchar(40) NOT NULL,
  `reprice` int NOT NULL,
  PRIMARY KEY (`reid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `goret`
--

INSERT INTO `goret` (`status`, `bookdate`, `retname`, `retaddress`, `reproduct`, `requandity`, `retotal`, `discription`, `redate`, `reemail`, `reid`, `replace`, `reprice`) VALUES
(1, '2023-12-20', 'robin', 'choondiyanikal', 'samsung', 1, 100000, 'screen problem', '2023-12-07', 'robin123@gmail.com', 17, ' malayattor', 100000);

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
  `cartname` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=273 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `cardname`, `cardnumber`, `hname`, `pprice`, `status`, `cartid`, `cartname`) VALUES
(266, 'visa', 346343, 'robin', 100000, 1, 538, ''),
(267, 'makkrii', 74781581, 'robiis', 80000, 1, 539, ''),
(268, 'rodd', 684684483, 'robiis', 100000, 2, 540, ''),
(269, 'visa', 89454895, 'allen', 40000, 1, 541, ''),
(270, 'roco', 4234387, 'robin', 100000, 2, 542, ''),
(271, 'roco', 7834563, 'robin', 300000, 1, 543, ''),
(272, 'visa', 64283565, 'robin', 200000, 1, 545, '');

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
  `flag` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `rid`, `address`, `status`, `flag`) VALUES
('roc', 'roc@gmail.com', '12345', 31, 'choondiyanikal', 2, 1),
('robin', 'robin123@gmail.com', 'robin123', 35, 'choondiyanikal', 1, 1),
('samsung', 'robincd@gmail.com', '123123', 34, 'kothpurakkal,kalady', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
