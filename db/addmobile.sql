-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2023 at 01:38 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addmobile`
--

INSERT INTO `addmobile` (`mid`, `mname`, `mprize`, `msoft`, `mimg`, `status`, `ctid`, `cmid`, `qty`) VALUES
(20, 'pixel', 50000, 'google', 'e6b17732b0c1e51f65696b35575448eb_2e5bc83b87.jpg', 1, 8, 41, 20),
(21, 'samsung', 50000, 'andriod', '6af1f04fbfadfdd43d985c5fbffd6246_592f019796.png', 2, 8, 42, 20),
(22, 'oneplus', 100000, 'andriod', '31c63fe44c83af2ad7cd518c02e84509_25289c871a43a130.jfif', 1, 7, 44, 20),
(23, 'redmi', 100000, 'andriod', 'f7a25f6808467b55c89efa483c08ed54_f52039cf38.jpg', 1, 7, 43, 20),
(24, 'samsung', 100000, 'andriod', '245af03b7c0a30eaf4f6df8bfd95ceaa_d2c997a5e5f342ac.jfif', 1, 8, 42, 20),
(25, 'iphone', 200000, 'mac', 'fd4823ba5cd9dd98d08f5b59ed784216_fbc21fa2ee650.jfif', 1, 8, 45, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
