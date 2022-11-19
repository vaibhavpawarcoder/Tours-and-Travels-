-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 06:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `short_des` varchar(1000) NOT NULL,
  `long_des` varchar(2000) NOT NULL,
  `pic_1` varchar(355) NOT NULL,
  `pic_2` varchar(255) NOT NULL,
  `pic_3` varchar(255) NOT NULL,
  `pic_4` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `title`, `name`, `email`, `short_des`, `long_des`, `pic_1`, `pic_2`, `pic_3`, `pic_4`, `Date`) VALUES
(1, 'Vaibhav_Pawar_Blog', 'vaibhav', 'vaibhavpawar8530@gmail.com', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?', 'asia.jpg', 'neth.jpg', 'thi.jpg', 'usa.jpg', '2022-11-05'),
(2, 'Vaibhav_Blog', 'vaibhav', 'vaibhavpawar8530@gmail.com', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, magni?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatem assumenda quibusdam porro eveniet quidem expedita mollitia, fuga laboriosam ipsum natus sequi ducimus debitis sint, voluptatibus ex velit nihil ut delectus dolorum magnam molestiae beatae numquam! Odit quos quas, animi dicta, maiores nihil repellat blanditiis, similique corporis officiis magni vero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatem assumenda quibusdam porro eveniet quidem expedita mollitia, fuga laboriosam ipsum natus sequi ducimus debitis sint, voluptatibus ex velit nihil ut delectus dolorum magnam molestiae beatae numquam! Odit quos quas, animi dicta, maiores nihil repellat blanditiis, similique corporis officiis magni vero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatem assumenda quibusdam porro eveniet quidem expedita mollitia, fuga laboriosam ipsum natus sequi ducimus debitis sint, voluptatibus ex velit nihil ut delectus dolorum magnam molestiae beatae numquam! Odit quos quas, animi dicta, maiores nihil repellat blanditiis, similique corporis officiis magni vero?', 'asia.jpg', 'neth.jpg', 'thi.jpg', 'usa.jpg', '2022-11-05'),
(3, 'Kareena_BLog', 'kari', 'tt@gmail.com', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, similique.', 'usa.jpg', 'ita.jpg', 'thi.jpg', 'tha.png', '2022-11-05'),
(4, 'Apply', 'vaibhav', 'vaibhavpawar8530@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatem assumenda quibusdam porro eveniet quidem expedita mollitia, fuga laboriosam ipsum natus sequi ducimus debitis sint, voluptatibus ex velit nihil ut delectus dolorum magnam molestiae beatae numquam! Odit quos quas, animi dicta, maiores nihil repellat blanditiis, similique corporis officiis magni vero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatem assumenda quibusdam porro eveniet quidem expedita mollitia, fuga laboriosam ipsum natus sequi ducimus debitis sint, voluptatibus ex velit nihil ut delectus dolorum magnam molestiae beatae numquam! Odit quos quas, animi dicta, maiores nihil repellat blanditiis, similique corporis officiis magni vero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatem assumenda quibusdam porro eveniet quidem expedita mollitia, fuga laboriosam ipsum natus sequi ducimus debitis sint, voluptatibus ex velit nihil ut delectus dolorum magnam molestiae beatae numquam! Odit quos quas, animi dicta, maiores nihil repellat blanditiis, similique corporis officiis magni vero?..', 'eu.jpg', 'nat.png', 'nature.jpg', 'be-3.jpg', '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(15) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `blog_title`, `blog_name`, `name`, `email`, `comment`, `Date`) VALUES
(1, 'Kareena_BLog', 'kari', 'vaibhav', 'vaibhavpawar8530@gmail.com', 'nice blog', '2022-11-06 00:00:00'),
(2, 'Vaibhav_BLog', 'vaibhav', 'Vishal', 'vishal@gmail.com', 'nice blog', '2022-11-06 15:03:39'),
(3, 'vandana@gmail.com', 'vaibhav', 'vandana shamrao', 'vandana@gmail.com', 'grt Blog', '2022-11-06 15:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'asia.jpg', '2022-11-03 10:51:12', '1'),
(2, 'eu.jpg', '2022-11-03 10:51:12', '1'),
(3, 'ita.jpg', '2022-11-03 10:51:12', '1'),
(4, 'neth.jpg', '2022-11-03 10:51:12', '1'),
(5, 'one.png', '2022-11-03 10:51:12', '1'),
(6, 'tha.png', '2022-11-03 10:51:12', '1'),
(7, 'thi.jpg', '2022-11-03 10:51:12', '1'),
(8, 'two.png', '2022-11-03 10:51:12', '1'),
(9, 'usa.jpg', '2022-11-03 10:51:12', '1'),
(10, 'asia.jpg', '2022-11-03 10:51:59', '1'),
(11, 'eu.jpg', '2022-11-03 10:51:59', '1'),
(12, 'tha.png', '2022-11-03 10:51:59', '1'),
(13, 'thi.jpg', '2022-11-03 10:51:59', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inquery`
--

CREATE TABLE `inquery` (
  `ID` int(16) NOT NULL,
  `Tour` varchar(555) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `mess` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquery`
--

INSERT INTO `inquery` (`ID`, `Tour`, `Name`, `email`, `mobile`, `guest`, `mess`, `Date`) VALUES
(1, 'Europe_Afghanistan', 'vandana shamrao', 'vandana@gmail.com', '07387545206', '12', 'hello , im vandana', '2022-11-05'),
(2, 'Europe_Afghanistan', 'vandana shamrao', 'vandana@gmail.com', '07387545206', '12', 'hi', '2022-11-05'),
(3, 'Asia_China', 'vandana shamrao', 'vandana@gmail.com', '07387545206', '12', 'ww', '2022-11-05'),
(4, 'Europe_United Kingdom', 'vandana shamrao', 'vandana@gmail.com', '07387545206', '12', 'vaibhav', '2022-11-05'),
(5, 'Asia_Korea', 'vandana shamrao', 'vandana@gmail.com', '07387545206', '12', 'hi', '2022-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pic` varchar(355) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `email`, `password`, `pic`, `Date`) VALUES
(1, 'vaibhav', 'vaibhav@gmail.com', '$2y$10$VpbbHeE8Y/tVrDN2Oh24Lu0EARixeKmgiP0FYfvQUTq8fdC.eaAP6', 'admin/asia.jpg', '2022-11-03'),
(2, 'vaibhav', 'vaibhavpawar8530@gmail.com', '$2y$10$qsF.VHtV19YFERQgV1hLTO9MAqoOyIVGiwN.C6JQvtj7zA8bWxuuS', 'tha.png', '2022-11-03'),
(4, 'Vandana Pawar', 'vandana@gmail.com', '$2y$10$9BNo5jPfW1k2KGQ2eh/5AuQjPNuxEAO5zouw56T72lPhqqHG/qy1.', 'nature.jpg', '2022-11-07'),
(5, 'vishal', 'vishal@gmail.com', '123456', 'be-1.jpg', '2022-11-08'),
(6, 'tt', 'tt@gmail.com', '$2y$10$DinAGcJBOIBeD6XtcxmdcOkrluUE/iQA6syJeKn051Ur2FZouGBlm', 'be-4.jpg', '2022-11-08'),
(7, 'admin', 'admin@gmail.com', '$2y$10$mxNfvmWUkBhCt.e7Cml1ruk.UdM4oMEo9oqr2K5kk8SmsJTQ43vLW', 'vaibhav.jpeg', '2022-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `pakages`
--

CREATE TABLE `pakages` (
  `ID` int(15) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Continents` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Min_Age` varchar(255) NOT NULL,
  `Diff` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Days` varchar(255) NOT NULL,
  `pic_1` varchar(355) NOT NULL,
  `pic_2` varchar(355) NOT NULL,
  `pic_3` varchar(255) NOT NULL,
  `pic_4` varchar(255) NOT NULL,
  `pic_5` varchar(255) NOT NULL,
  `pic_6` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakages`
--

INSERT INTO `pakages` (`ID`, `Name`, `email`, `Continents`, `Country`, `Min_Age`, `Diff`, `Type`, `Days`, `pic_1`, `pic_2`, `pic_3`, `pic_4`, `pic_5`, `pic_6`, `Date`) VALUES
(1, 'vaibhav', 'vaibhavpawar8530@gmail.com', 'Asia', 'China', '10-Min_Age', 'Medium', 'Cultural', '7-Days', 'asia.jpg', '', '', '', '', '', '2022-11-05'),
(2, 'tt', 'tt@gmail.com', 'Europe', 'Afghanistan', '10-Min_Age', 'High', 'Cultural', '5-Days', 'tha.png', 'usa.jpg', '', '', '', '', '2022-11-05'),
(3, 'tt', 'tt@gmail.com', 'Asia', 'Korea', '10-Min_Age', 'Medium', 'Relax', '11-Days', 'asia.jpg', 'two.png', 'one.png', 'ita.jpg', '', '', '2022-11-05'),
(4, 'vaibhav', 'vaibhavpawar8530@gmail.com', 'Europe', 'United Kingdom', '10-Min_Age', 'Medium', 'Relax', '9-Days', 'two.png', 'one.png', 'eu.jpg', 'neth.jpg', '', '', '2022-11-05'),
(5, 'vaibhav', 'vaibhavpawar8530@gmail.com', 'Europe', 'United Kingdom', '13-Min_Age', 'Medium', 'History', '9-Days', 'city.jpg', 'eu.jpg', 'neth.jpg', 'be-3.jpg', '', '', '2022-11-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquery`
--
ALTER TABLE `inquery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pakages`
--
ALTER TABLE `pakages`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inquery`
--
ALTER TABLE `inquery`
  MODIFY `ID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pakages`
--
ALTER TABLE `pakages`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
