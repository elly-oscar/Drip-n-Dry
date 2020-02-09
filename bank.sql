-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 05:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(5) NOT NULL,
  `names` varchar(100) NOT NULL,
  `natid` int(10) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `names`, `natid`, `phone`) VALUES
(1, 'Roman Reigns', 1, '0712345678'),
(2, 'Jessie Reyez', 2, '0723456789'),
(3, 'James Arthur', 3, '0734567890'),
(4, 'Camilla Cabello', 4, '0745678901'),
(5, 'Scarlet Johanson', 5, '0775432673'),
(6, 'anthony', 1234, '123');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(5) NOT NULL,
  `duty` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `duty`, `email`, `password`, `type`) VALUES
(1, '', 'wara23@gmail.com', 'Mwaya67', 2),
(2, '', 'fed@gmail.com', 'Mwaura890', 2),
(4, '', 'ved@gamil.com', 'fed45', 2),
(5, '', 'Dualipa@gmail.com', 'hed45', 2),
(6, '', 'ded45@gamil.com', 'Fedr54', 2),
(7, '', 'fedr@gmail.com', 'Sawa56', 2),
(25, '', 'chege746@gmail.com', 'Mwaura890', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `password`, `type`) VALUES
(3, 'David Guetta', 'Davidguetta@gmail.com', 'Guetta', 2),
(4, 'Travis Scott', 'Travisscott@gmail.com', 'Scott', 2),
(5, 'Yara Shahidi', 'Yarashahidi@gmail.com', 'Shahidi', 2),
(6, 'Gucci Mane', 'Guccimane@gmail.com', 'Mane', 2),
(18, 'Jamie Foxx', 'Jamiefoxx@gmail.com', 'Foxx', 2),
(22, 'Chloe Kardashian', 'Chloekardashian@gmail.com', 'Kardashian', 2),
(25, 'Louis Austin', 'Louisaustin@gmail.com', 'Austin', 2),
(26, 'Anthony', 'chege746@gmail.com', 'Mwaura890', 1),
(27, 'Michelle', 'michelle.riunga@riarauniversity.ac.ke', '123456', 1),
(29, 'Oscar', 'oscar@gmail.com', '1234', 1),
(35, 'allan34@gmail.com', '', 'chege56', 2),
(36, 'cleaning of windows', 'wanga45@gmail.com', 'Mwara45', 2),
(38, 'aj', 'aj@gmail.com', 'Asad12', 2),
(39, 'PROF', 'prof@gmail.com', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `natid` (`natid`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
