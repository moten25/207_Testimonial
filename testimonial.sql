-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 06:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `examination` varchar(100) NOT NULL,
  `roll` int(40) NOT NULL,
  `year` int(40) NOT NULL,
  `gpa` varchar(40) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `approve` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`email`, `password`, `name`, `father`, `mother`, `address`, `mobile`, `examination`, `roll`, `year`, `gpa`, `payment`, `approve`) VALUES
('\0', '123', 'Md. Abdul Moten', 'Mosir Ali', 'Aysia', 'Dhaka', '', '', 0, 0, '', '', 0),
('Motin@gmail.com', '123', 'Motin', 'Mosir Ali Mollah', 'Aysia begum', 'Gaibanda', '', '', 0, 0, '', '', 0),
('\0', '123', 'Md. Abdul Moten', 'Mosir Ali', 'Aysia', 'Dhaka', '', '', 0, 0, '', '', 0),
('Motin@gmail.com', '123', 'Motin', 'Mosir Ali Mollah', 'Aysia begum', 'Gaibanda', '', '', 0, 0, '', '', 0),
('moten@gmail.com', '', 'Md. Abdul Moten', 'Mosir Ali', 'Aysia', 'Dhaka', '', '', 0, 0, '', '', 0),
('moten@gmail.com', '', 'Md.Abdul Moten', 'Mosir Ali', 'Aysia', 'Dhaka', '', '', 0, 0, '', '', 0),
('moten@gmail.com', '', 'Md.Abdul Moten', '', '', '', '', '', 0, 0, '', '', 0),
('motin@gmail.com', '', 'motin', '', '', '', '', '', 0, 0, '', '', 0),
('ali@gmail.com', '', 'Shahar Ali', 'Abdul Wahab Mia', 'Firoja Khalasi', 'Motijheel, Dhaka', '', '', 0, 0, '', '', 1),
('ali@gmail.com', '', 'Md.Abdul Moten', '', '', '', '', '', 0, 0, '', '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
