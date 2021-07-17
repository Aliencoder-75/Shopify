-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 07:44 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopify`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`uname`, `email`, `phone`, `message`) VALUES
('dinesh', 'dinesh@gmail.com', 1234567890, 'hello.,'),
('avinash', 'avinash@gmail.com', 2147483647, 'hi..,'),
('Kiran', 'kir@gmail.com', 2147483647, ''),
('Kiran', 'kir@gmail.com', 2147483647, 'hi..,');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expmonth` varchar(20) NOT NULL,
  `expyear` int(10) NOT NULL,
  `cvv` int(10) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`uname`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `total`) VALUES
('sathya', 'sat@gmail.com', '542 M. 2ns street', 'Tumkur', 'karnataka', 560012, 'sathya', '2222-1761-4444-9898', 'march', 2025, 441, 2175),
('Dinesh', 'di@gmail.com', '541 B. 10th street', 'tiptur', 'Karnataka', 572001, 'Dinesh', '2342-3456-3566-6783', 'may', 2022, 245, 1720),
('Kiran', 'kir@gmail.com', '541 B. 10th street', 'Tumkur', 'Karnataka', 572001, 'Kiran', '5223-1332-3456-3422', 'Aug', 2027, 214, 749),
('santhu', 'sa@gmail.com', '541 B. 10th street', 'tiptur', 'Karnataka', 572001, 'santhu', '5223-1332-3456-3422', 'jan', 2027, 433, 150);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uname`, `email`, `phone`, `password`) VALUES
('dinesh', 'din@gmail.com', 2147483647, '123456789'),
('sathya', 'sat@gmail.com', 2147483647, '0987612345'),
('faisal', 'fi@gmail.com', 2147483647, '87345790'),
('harsha', 'har@gmail.com', 9876543, '73234732'),
('prasad', 'tp@gmail.com', 2147483647, '09876512'),
('nischal', 'nis@gmail.com', 2147483647, '99765433562'),
('ramesh', 'ram@gmail.com', 1234567890, '098765432'),
('kiran', 'kiran@gmail.com', 2147483647, '9019716868'),
('santhu', 'sa@gmail.com', 2147483647, '123asd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
