-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 11:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chef_management1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('owner', 'Vinay79@');

-- --------------------------------------------------------

--
-- Table structure for table `book1`
--

CREATE TABLE `book1` (
  `id` int(10) NOT NULL,
  `chef_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `phno` varchar(200) NOT NULL,
  `people` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `dish` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book1`
--

INSERT INTO `book1` (`id`, `chef_id`, `user_id`, `phno`, `people`, `date`, `location`, `dish`, `status`) VALUES
(5, '9845211925', 'vinay@gmail.com', '9845211925', '1000', '2024-07-09', 'sagara', 'Veg', 'Approved'),
(6, '9741435484', 'vinayvinusgr@gmail.com', '9741435484', '1000', '2024-07-20', 'joga', 'Veg', 'Approved'),
(7, '8762533661', 'vinayvinusgr@gmail.com', '9741435485', '1000', '2024-07-06', 'joga', 'Non-veg', 'rejected'),
(8, '9741435484', 'vinayvinusgr@gmail.com', '9741435485', '1000', '2024-07-27', 'tumari', 'Non-veg', 'Approved'),
(9, '9741435484', 'viji03662@gmail.com', '8431735221', '50', '2024-07-20', 'tumkur', 'Veg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `status` varchar(50) NOT NULL,
  `cateringname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phno` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `expert_in` varchar(200) NOT NULL,
  `dishtype` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nomembers` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`status`, `cateringname`, `name`, `phno`, `experience`, `email`, `location`, `expert_in`, `dishtype`, `password`, `nomembers`) VALUES
('Requested', 'jd catering', 'sagar', '1234567895', '10', 'uhuh@gmail.com', 'goa', 'choose', 'choose', '123', '2'),
('Approved', 'SS catering', 'divya', '8762533661', '10', 'divyajain@gmail.com', 'tumari', 'choose', 'choose', '12', '2'),
('Approved', 'SS catering', 'vijay', '9741435484', '10', 'tarun@gmail.com', 'joga', 'South indian', 'Non-veg', '123', '20'),
('Approved', 'SS catering', 'vinu', '9845211925', '10', 'tarun@gmail.com', 'joga', 'South indian', 'veg', '123', '20');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `chef_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `satisfy` varchar(200) NOT NULL,
  `suggession` varchar(200) NOT NULL,
  `ratings` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`chef_id`, `user_id`, `satisfy`, `suggession`, `ratings`) VALUES
('9741435484', 'vinayvinusgr@gmail.com', 'yes', ' good', '5'),
('9741435484', 'vinayvinusgr@gmail.com', 'yes', '  124', '3'),
('9845211925', 'vinay@gmail.com', 'yes', '  254', '3'),
('9741435484', 'vinayvinusgr@gmail.com', 'yes', '  123', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(200) NOT NULL,
  `chef id` varchar(200) NOT NULL,
  `user id` varchar(200) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `ratings` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) NOT NULL,
  `phnumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `phnumber`, `email`, `address`, `dob`, `password`) VALUES
('vikas', '8431735221', 'viji03662@gmail.com', 'dvg', '2024-07-11', '1295'),
('tarun', '9845211925', 'vinay@gmail.com', 'banglore', '2024-07-27', '123'),
('vinay J D', '9741435485', 'vinayvinusgr@gmail.com', 'bengaluru', '2024-06-01', 'Vinay79@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `book1`
--
ALTER TABLE `book1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`phno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book1`
--
ALTER TABLE `book1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
