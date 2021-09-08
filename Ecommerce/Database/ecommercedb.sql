-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 08:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `quantity`, `price`, `store_id`) VALUES
(12, 'Blue Jeans', 'New casual blue jeans, very comfortable and trendy.', 'product-02.jpg', 10, 40, 6),
(13, 'Converse R', 'Red converse to complete your ultimate look.', 'product-04.jpg', 5, 80, 6),
(14, 'Pink Purse', 'Leather curve shoulder bag for women. ', 'product-06.jpg', 13, 55, 6),
(15, 'Blue Jacket', 'Winter blue trendy jacket suitable for everyday.', 'product-03.jpg', 12, 123, 6),
(16, 'Blue Jeans', 'New casual blue jeans, very comfortable and trendy.', 'product-02.jpg', 6, 26, 7),
(17, 'Blue Jacket', 'Winter blue trendy jacket suitable for everyday.', 'product-03.jpg', 10, 48, 8);

-- --------------------------------------------------------

--
-- Table structure for table `purchased`
--

CREATE TABLE `purchased` (
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `phone`, `city`, `owner_id`) VALUES
(6, 'Zara', '+96170289518', 'Beirut', 5),
(7, 'Berskha', '+96170289518', 'Jbeil', 6),
(8, 'Eternity', '+9613345158', 'Jbeil', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `city` varchar(50) NOT NULL,
  `user_type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `phone_number`, `email`, `password`, `city`, `user_type`) VALUES
(5, 'Amani', 'Masri', 1, '+961 7136582', 'amani@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'Beirut', 1),
(6, 'Rami', 'Mrad', 0, '+96170258956', 'rami@hotmail.com', 'f0e4c2f76c58916ec258f246851bea091d14d4247a2fc3e18694461b1816e13b', 'Nabatieh', 1),
(7, 'Lana', 'wehbe', 1, '+96170258956', 'lana@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Nabatieh', 0),
(8, 'Mohamad', 'Masri', 0, 'mnmn', 'mohamad@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'Nabatieh', 0),
(10, 'Sara', 'Mohsen', 1, '+96171365800', 'sara@gmail.com', '8588310a98676af6e22563c1559e1ae20f85950792bdcd0c8f334867c54581cd', 'Beirut', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchased`
--
ALTER TABLE `purchased`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
