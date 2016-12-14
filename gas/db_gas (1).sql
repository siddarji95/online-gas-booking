-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 03:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gas`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `citizenship_no` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `c_contact` varchar(50) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `d_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `comment`) VALUES
('siddharth darji', 'siddarji95@gmail.com', 'its very good website.'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('sdds', 'siddarji95@gmail.com', 'dfsd'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('siddharth darji', 'siddarji95@gmail.com', 'sdsd'),
('siddharth darji', 'siddarji95@gmail.com', 'sjgjjghjmj'),
('siddharth', 'siddharth.darji@somaiya.edu', 'svjdkf'),
('siddharth', 'siddarji95@gmail.com', 'sdiejoe');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `d_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `d_address` varchar(50) NOT NULL,
  `gas_stock` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`d_id`, `date`, `company_name`, `d_address`, `gas_stock`) VALUES
('15', '11/1/15', 'HP', 'vasai', '67'),
('16', '15/6/15', 'bharat', 'chembur', '44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `gas_no` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fname`, `lname`, `email`, `dob`, `gender`, `gas_no`, `c_name`) VALUES
('siddarji95@gmail.com', 'sidd', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
