-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 12, 2023 at 02:24 AM
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
-- Table structure for table `tbl_ts`
--

DROP TABLE IF EXISTS `tbl_ts`;
CREATE TABLE IF NOT EXISTS `tbl_ts` (
  `ts_id` int(11) NOT NULL AUTO_INCREMENT,
  `ts_user` varchar(255) NOT NULL,
  `ts_action` varchar(255) NOT NULL,
  `ts_qnum` varchar(255) NOT NULL,
  `ts_status` varchar(255) NOT NULL DEFAULT 'PENDING',
  `ts_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ts_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `tbl_ts`
--

INSERT INTO `tbl_ts` (`ts_id`, `ts_user`, `ts_action`, `ts_qnum`, `ts_status`, `ts_date`) VALUES
(1, 'Juan A. Dela Cruz', 'Withdraw', 'W-1', 'NEXT', NULL),
(2, 'Jerome B. Manalo', 'Deposit', 'D-1', 'DISPLAY', '2023-05-12 10:21:55'),
(6, 'Elias Perez', 'Withdraw', 'W-9484', 'PENDING', NULL),
(3, 'A', 'Withdraw', 'W-920', 'PENDING', NULL),
(4, 'D', 'Deposit', 'D-695', 'DISPLAY', '2023-05-12 10:21:06'),
(5, 'Jerry Miller', 'Deposit', 'D-767', 'PENDING', NULL),
(7, 'Elias Perez', 'Deposit', 'D-2225', 'PENDING', NULL),
(8, 'Elton Brand', 'Withdraw', 'W-2046', 'NEXT', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
