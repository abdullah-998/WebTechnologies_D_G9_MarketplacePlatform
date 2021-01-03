-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 12:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riverr`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `about` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL,
  `git` varchar(50) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `dob`, `email`, `phone`, `address`, `about`, `link`, `git`, `photo`) VALUES
(17, 'Andrew As', '1998-06-19', 'juru4@gmail.com', '01632086022', '', '', '', '', '../asset/img/profile.png'),
(18, 'Md Abdullah', '1997-06-19', 'juru5@gmail.com', '01632086021', 'Dhaka,Bangladesh', 'Hello, this is me...', '', '', '../asset/img/profile.png'),
(19, 'Abdullah', '1997-12-02', 'juru8@gmail.com', '01632086021', '', '', '', '', '../asset/img/profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `epays`
--

CREATE TABLE `epays` (
  `id` int(5) NOT NULL,
  `balance` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `epays`
--

INSERT INTO `epays` (`id`, `balance`) VALUES
(14, 50),
(18, 50);

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `about` varchar(100) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `git` varchar(50) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`id`, `name`, `dob`, `email`, `phone`, `address`, `about`, `link`, `git`, `photo`) VALUES
(14, 'Abdullah', '1998-06-19', 'juru@gmail.com', '01632086021', 'Dhaka,Bangladesh', 'Hello there', '', '', '../asset/img/profile.png'),
(15, 'Md Abdullah', '1998-06-19', 'juru2@gmail.com', '01632086022', '', '', '', '', '../asset/img/profile.png'),
(16, 'Andrew', '1998-06-19', 'juru3@gmail.com', '01632086023', '', '', '', '', '../asset/img/profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `fid` int(5) NOT NULL,
  `bid` int(5) NOT NULL,
  `projectstatus` varchar(15) DEFAULT NULL,
  `paymentstatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `pid`, `fid`, `bid`, `projectstatus`, `paymentstatus`) VALUES
(100, 12, 45, 76, 'Running', 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(5) NOT NULL,
  `uid` int(5) DEFAULT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `descr` varchar(100) DEFAULT NULL,
  `price` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `uid`, `pname`, `descr`, `price`) VALUES
(1, 18, 'Mini Personal Website', 'We need web devoloper for our shop.', '50'),
(2, 18, 'Android App', 'I need a android devoloper ', '89'),
(3, 18, 'Android App', 'I need a android devoloper ', '89'),
(4, 18, 'iOS dev need', 'Mini iOS for school going children', '100'),
(5, 18, 'Flutter Dev', 'Im searching for a flutter devoloper', '340');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(5) NOT NULL,
  `froms` int(5) NOT NULL,
  `tos` int(5) NOT NULL,
  `report` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `rid` int(5) NOT NULL,
  `fid` int(5) NOT NULL,
  `bid` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `price` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`rid`, `fid`, `bid`, `pid`, `status`, `price`) VALUES
(7, 14, 18, 1, 'Accept', '50'),
(8, 14, 18, 2, '', '89'),
(9, 15, 18, 1, 'Accept', '50');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(5) NOT NULL,
  `froms` int(5) NOT NULL,
  `tos` int(5) NOT NULL,
  `star` int(2) NOT NULL,
  `review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `status`) VALUES
(14, 'juru@gmail.com', '87654321', 'Freelancer', 0),
(15, 'juru2@gmail.com', 'asdfghjk', 'Freelancer', 1),
(16, 'juru3@gmail.com', '12345678', 'Freelancer', 1),
(17, 'juru4@gmail.com', '12345678', 'Buyer', 0),
(18, 'juru5@gmail.com', '87654321', 'Buyer', 1),
(19, 'juru8@gmail.com', '12345678', 'Buyer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epays`
--
ALTER TABLE `epays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD UNIQUE KEY `id_f` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
