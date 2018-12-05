-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 06:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer_tvu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `firstName` varchar(512) COLLATE utf8_persian_ci NOT NULL,
  `LastName` varchar(512) COLLATE utf8_persian_ci NOT NULL,
  `stuCode` varchar(512) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(512) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `userAccount` varchar(512) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(512) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`firstName`, `LastName`, `stuCode`, `email`, `tel`, `userAccount`, `password`) VALUES
('m', 'nemati', '9700', 'm.nemati2002@gmail.com', '09362990840', 'm-nemati', '1397'),
('m', 'nemati', '9700', 'm.nemati2002@gmail.com', '09362990840', 'm-nemati', '1397');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
