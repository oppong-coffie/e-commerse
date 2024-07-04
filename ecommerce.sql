-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 03:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `total_number` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `paid` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `total_number`, `unit_price`, `image`, `paid`) VALUES
(1, 1, 6, 1, 250, 's4.png', 'yes'),
(2, 1, 1, 2, 54, 'b5.jpg', 'yes'),
(3, 1, 8, 5, 250, 'b6.png', 'yes'),
(4, 1, 13, 3, 100, 'c1.png', 'yes'),
(5, 1, 11, 3, 75, 'headphone.png', 'yes'),
(6, 1, 6, 3, 250, 's5.png', 'yes'),
(7, 1, 1, 1, 54, 'b6.png', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `p_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `price`, `p_image`) VALUES
(1, 'Chicago suit', 'collections', 54, 'b6.png'),
(6, 'Realistic men', 'electronics', 250, 's5.png'),
(7, 'Pastorial men', 'collections', 250, 's4.png'),
(8, 'Heavy Radio', 'electronics', 250, 'radio.png'),
(9, 'Nintendo Game', 'electronics', 250, 'nintendo.png'),
(10, 'Gaming Laptop', 'electronics', 250, 'lap2.jpg'),
(11, 'Laptop Headphone', 'electronics', 75, 'headphone.png'),
(12, 'Hand bag', 'collections', 75, 'b5.jpg'),
(13, 'Sleeping pijamas', 'collections', 100, 'c1.png'),
(14, 'Cinema Camera', 'electronics', 900, 'camera.png'),
(15, 'Computer Set', 'electronics', 1200, 'com.jpg'),
(16, 'Aqua Backup', 'electronics', 400, 'aqua.png'),
(17, 'Amazon Projector', 'electronics', 700, 'Amazon.png'),
(18, 'NEW PRODUCT', 'electronics', 1000, 'braces.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`) VALUES
(1, 'Oppong Coffie', 'oppongcoffie27@gmail.com', '5011'),
(2, 'Ata Ahenkora', 'ata@gmail.com', '5011'),
(3, 'Coffie oppong', 'oppongcoffie27@gmail.com', '5011');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
