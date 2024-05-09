-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 05:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arte_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderss`
--

CREATE TABLE `orderss` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(20) NOT NULL,
  `flat` varchar(50) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `products_name` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderss`
--

INSERT INTO `orderss` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `products_name`, `total_price`) VALUES
(3, 'liam gabriel', '09661672593', 'dragondarkliam1@yahoo.com', 'cash', 'purok 2', 'sto ninio', 'magalang', 'philipines', 'Philippines', '1008', 'Renaissance Open Outdoors, Eloquent Paris', 4000.00),
(4, 'liam gabriel', '09661672593', 'dragondarkliam1@yahoo.com', 'cash', 'purok 2', 'sto ninio', 'magalang', 'philipines', 'Philippines', '1008', 'Renaissance Open Outdoors, Eloquent Paris', 4000.00),
(5, 'liam gabriel', '09661672593', 'dragondarkliam1@yahoo.com', 'cash', 'purok 2', 'sto ninio', 'magalang', 'philipines', 'Philippines', '1008', 'Renaissance Open Outdoors, Eloquent Paris, Queen Size Bed, Assorted Pillows(set)', 40500.00),
(6, 'liam gabriel', '09661672593', 'dragondarkliam1@yahoo.com', 'cash', 'purok 2', 'sto ninio', 'magalang', 'philipines', 'Philippines', '1008', 'Renaissance Open Outdoors, Eloquent Paris, Queen Size Bed, Assorted Pillows(set)', 40500.00),
(7, 'liam gabriel', '09661672593', 'dragondarkliam1@yahoo.com', 'cash', 'purok 2', 'sto ninio', 'magalang', 'philipines', 'Philippines', '1008', 'Renaissance Open Outdoors, Eloquent Paris, Queen Size Bed, Assorted Pillows(set)', 40500.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `image`) VALUES
(120, 'Renaissance Open Outdoors', 2000.00, 'images\\painting9.jpg'),
(126, 'Eloquent Paris', 2000.00, 'images\\painting8.jpg'),
(128, 'Queen Size Bed', 35000.00, 'images\\bed.jpg'),
(129, 'Assorted Pillows(set)', 1500.00, 'images\\pillows2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'liam gabriel', 'dragondarkliam1@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '342045522_944816990284921_3922382736676439441_n.jpg'),
(7, 'liam gabriel', 'dragondarkliam1@yahoo.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', ''),
(8, 'gabgab', 'naruto@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderss`
--
ALTER TABLE `orderss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderss`
--
ALTER TABLE `orderss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
