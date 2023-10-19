-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2023 at 09:59 AM
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
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addmobile`
--

INSERT INTO `addmobile` (`mid`, `mname`, `mprize`, `msoft`, `mimg`, `status`, `ctid`, `cmid`) VALUES
(5, 'iphone', 150000, 'mac', '65a4797c291634d79ef810cc8794c2d3_8eb608066f91dedd07e9.jfif', 2, 0, 0),
(7, 'iphone', 150000, 'mac', 'dc7b9a4a6d57996181ae5ec2bb4165d1_7ebb2b02d74cc9b176dd.jfif', 2, 0, 0),
(8, 'iphone', 120000, 'mac', '68a13c88ec6eb9281c0529a82c0dd01a_eca5ee8ba52b25fcb.jfif', 2, 0, 0),
(9, 'nokia', 1200, 'uni', '0bd5780fcfe0f4daee339966ee7ad6fe_e349172727d992ab91d6.jfif', 2, 0, 0),
(10, 'vivo', 10000, 'funtinality', 'dc026613bf21edb1ca420dab001a0c22_e5c1807478ed3f54.jfif', 2, 0, 0),
(11, 'vivo', 150000, 'functionality', '28cfeb9c97ec5ccf38bc03c1ce864948_484798f58bd70d67739.jfif', 2, 0, 0),
(12, 'vivo', 150000, 'funtinality', 'fe0d21c23cde89cb45177d8deb06c0e2_0b85980d6378ae55bc7d.jfif', 2, 0, 0),
(13, 'oppo', 150000, 'mac', '', 2, 0, 0),
(17, 'nokia', 1500, 'gamelof', '382cf5c3a59d5049f6b9eb9598c6238c_0844e54a4d8234bdb389.jfif', 1, 3, 40),
(14, 'oneplus', 20000000, 'oxigen', 'b82b8ed02b412131b06dbcb328f10956_e50da0db2a9066.jfif', 1, 0, 0),
(15, 'iphone', 150000, 'mac', 'ccb842843ac767937c0b1361ff972e04_2b2d1a827cb0.jfif', 2, 4, 33),
(16, 'iphone', 120000, 'functionality', '12a5144db5ebf7df66d1fa328164d4a8_25b513ae64cb8013cda.jfif', 1, 5, 33),
(18, 'iphone', 20000000, 'mac', '430994eefbe2c2d008849a00c1ef5d2d_e9f9493273.jfif', 1, 5, 33),
(19, 'iphone', 20000000, 'mac', 'a4849cc546a6c3c3f4209c6593075f06_e7f5ab574fb7.jpg', 1, 5, 33);

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category` varchar(20) NOT NULL,
  `cid` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`, `cid`) VALUES
('tablet', 4),
('cell phone', 3),
('smartphone', 5);

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
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `cplace`, `cimg`) VALUES
(34, 'oneplus', 'us', ''),
(33, 'iphone', 'uk', '933cbc8dbb97ec18446599d82c3f18e2_9c3a77e1be3.png'),
(32, 'nokiya', 'us', '8d118297ab1cf82212f4d54319dcdc55_efc4bb2eeb3c13006.jpg'),
(35, 'redme', 'india', 'c46e0314ed7d3ee1dc611e72be4ef178_9fffb28b403.png'),
(36, 'realme', 'india', 'cbb464c2e4deae57485c4df80d452695_0052f9eaef.png'),
(37, 'samsung', 'canada', '71835d7a759a1ab20b4aa2e3a8a3b357_c93c0914a2774.png'),
(38, 'oppo', 'singapore', 'bb7d553ddd0b7881b5bae505936c972b_1a4607f1afea.png'),
(39, 'nokiya', 'india', '016b142a0341c2050b3d0fea730556bf_07fb9316a89837a5cd.png'),
(40, 'nokiya', 'uk', '680fd4249d5c34861b8cbc122eb73671_74e02b0470b49e779.jfif');

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
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
