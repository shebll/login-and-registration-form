-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 10:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `full_name` varchar(100) DEFAULT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `username`, `email`, `password`, `address`, `birthdate`, `phone`, `image`) VALUES
('ahmed mo', 'ahm', 'a@gmail.com', '011Ams---', 'cs', '2000-01-01', '01111111111', 'linked-in-cover.png'),
('ahmed shebl', 'ahmedshebl11', 'shebl@gmail.com', '011Ams---', 'cairo', '2000-01-01', '01159999999', 'photo_6032594078098635999_y.jpg'),
('Ali shebl', 'alishebl11', 'ali@gmail.com', '011Ams---', 'cairo', '2000-11-01', '01111111111', 'linked-in-cover.png'),
('saif shebl', 'saifshebl11', 'saifl@gmail.com', '011Ams---', 'cairo', '2000-01-01', '01222222222', 'linked-in-cover.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
