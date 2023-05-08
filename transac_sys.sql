-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 08, 2023 at 06:37 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transac_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_display`
--

DROP TABLE IF EXISTS `tbl_display`;
CREATE TABLE IF NOT EXISTS `tbl_display` (
  `ds_id` int(11) NOT NULL AUTO_INCREMENT,
  `ds_tnum` varchar(255) NOT NULL,
  `ds_order` varchar(255) NOT NULL,
  PRIMARY KEY (`ds_id`)
) ENGINE=MyISAM DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ts`
--

DROP TABLE IF EXISTS `tbl_ts`;
CREATE TABLE IF NOT EXISTS `tbl_ts` (
  `ts_id` int(11) NOT NULL AUTO_INCREMENT,
  `ts_user` varchar(255) NOT NULL,
  `ts_action` varchar(255) NOT NULL,
  `ts_qnum` varchar(255) NOT NULL,
  `ts_status` varchar(255) NOT NULL DEFAULT 'PENDING',
  PRIMARY KEY (`ts_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `tbl_ts`
--

INSERT INTO `tbl_ts` (`ts_id`, `ts_user`, `ts_action`, `ts_qnum`, `ts_status`) VALUES
(1, 'Juan A. Dela Cruz', 'Withdraw', 'W-001', 'PENDING'),
(2, 'Jerome B. Manalo', 'Deposit', 'D-001', 'FINISHED');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
