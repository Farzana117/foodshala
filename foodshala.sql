-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 08:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmenu`
--

CREATE TABLE `addmenu` (
  `item` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmenu`
--

INSERT INTO `addmenu` (`item`, `price`) VALUES
('Biryani', '70/-'),
('Rice Bowl', '60/-'),
('Dosa', '40/-'),
('Samosa', '10/-'),
('Pastry', '50/-'),
('Egg Biryani', '100/-'),
('Noodles', '60/-'),
('Manchurian', '60/-'),
('pulao', '50/-'),
('Haleem', '280/-'),
('Hakka Noodles', '80/-'),
('Kichidi', '150/-');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`, `email`) VALUES
('Farzana', 'far123', '99farzanask@gmail.co'),
('robo', 'far123', '99farzanask@gmail.co'),
('far', 'far123', '99farzanask@gmail.co'),
('farru', 'far123', '99farzanask@gmail.com'),
('Farzana', 'far123', 'gvge@gmail.com'),
('rihi', 'rihi', 'rihi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `password`, `email`) VALUES
('Farzana', 'far123', '99farzanask@gmail.co'),
('Rihi', 'Rihi@17', 'rihi@gmail.com'),
('rooo', 'robo@12', 'robo@gmail.com'),
('farru', 'far123', 'vcdiuuij@gmail.com'),
('farrr', 'f123', '99farzanask@gmail.com'),
('far', 'far123', 'sdfre@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
