-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 04:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project5_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_number` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_image_name` varchar(2550) NOT NULL,
  `product_image` longblob NOT NULL,
  `product_name` varchar(2550) NOT NULL,
  `product_color` varchar(2550) NOT NULL,
  `product_size` enum('S','M','L','XL') NOT NULL,
  `order_price` int(100) NOT NULL,
  `order_quantity` int(100) NOT NULL,
  `order_subtotal` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_number`, `user_id`, `product_image_name`, `product_image`, `product_name`, `product_color`, `product_size`, `order_price`, `order_quantity`, `order_subtotal`, `created_at`, `updated_at`, `product_id`) VALUES
(10, 1, '', '', 'dress', 'black', 'XL', 250, 0, 0, '2022-05-19 17:52:14', '2022-05-19 17:52:14', 1),
(15, 1, '', '', 'pen', 'black', 'M', 150, 0, 0, '2022-05-20 10:42:22', '2022-05-20 10:42:22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(14) NOT NULL,
  `order_number` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `order_quantity` int(14) NOT NULL,
  `order_subtotal` float(10,5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `zipcode` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `order_number`, `user_id`, `product_id`, `order_quantity`, `order_subtotal`, `first_name`, `last_name`, `country`, `state`, `city`, `street_address`, `zipcode`, `phone`, `order_email`, `created_at`, `updated_at`) VALUES
(38, 10, 3, 2, 5, 1250.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 10:48:05', '2022-05-20 10:48:05'),
(39, 15, 3, 1, 0, 1500.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 10:48:05', '2022-05-20 10:48:05'),
(40, 10, 3, 2, 5, 1250.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 10:49:34', '2022-05-20 10:49:34'),
(41, 15, 3, 1, 0, 1500.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 10:49:34', '2022-05-20 10:49:34'),
(42, 10, 3, 2, 5, 1250.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 10:50:46', '2022-05-20 10:50:46'),
(43, 15, 3, 1, 0, 1500.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 10:50:46', '2022-05-20 10:50:46'),
(44, 10, 3, 2, 5, 750.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:14:51', '2022-05-20 12:14:51'),
(45, 15, 3, 1, 0, 450.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:14:51', '2022-05-20 12:14:51'),
(46, 10, 3, 2, 5, 750.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:16:02', '2022-05-20 12:16:02'),
(47, 15, 3, 1, 0, 450.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:16:02', '2022-05-20 12:16:02'),
(48, 10, 3, 2, 5, 750.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:18:42', '2022-05-20 12:18:42'),
(49, 15, 3, 1, 0, 450.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:18:42', '2022-05-20 12:18:42'),
(50, 10, 3, 2, 5, 750.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:19:37', '2022-05-20 12:19:37'),
(51, 15, 3, 1, 0, 450.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:19:37', '2022-05-20 12:19:37'),
(52, 10, 3, 2, 5, 750.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:20:11', '2022-05-20 12:20:11'),
(53, 15, 3, 1, 0, 450.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:20:11', '2022-05-20 12:20:11'),
(54, 10, 3, 2, 5, 750.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:20:42', '2022-05-20 12:20:42'),
(55, 15, 3, 1, 0, 450.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:20:42', '2022-05-20 12:20:42'),
(56, 10, 3, 2, 5, 750.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:24:01', '2022-05-20 12:24:01'),
(57, 15, 3, 1, 0, 450.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:24:01', '2022-05-20 12:24:01'),
(58, 10, 3, 2, 5, 750.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:27:25', '2022-05-20 12:27:25'),
(59, 15, 3, 1, 0, 450.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-20 12:27:25', '2022-05-20 12:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(14) NOT NULL,
  `user_id` int(14) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `product_comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `user_first_name`, `user_last_name`, `product_comment`, `created_at`, `updated_at`) VALUES
(154, 2, 4, 'aya', 'ali', '', '2022-05-19 12:16:48', '2022-05-19 12:16:48'),
(155, 2, 4, 'aya', 'ali', '                    hizz', '2022-05-19 12:17:21', '2022-05-19 12:17:21'),
(156, 2, 4, 'aya', 'ali', '                 hello   ', '2022-05-19 12:17:30', '2022-05-19 12:17:30'),
(157, 2, 4, 'aya', 'ali', '                 hello   ', '2022-05-19 12:17:46', '2022-05-19 12:17:46'),
(158, 2, 4, 'aya', 'ali', '               Welcome     ', '2022-05-19 12:18:15', '2022-05-19 12:18:15'),
(159, 2, 4, 'aya', 'ali', '               Welcome     ', '2022-05-19 12:21:36', '2022-05-19 12:21:36'),
(160, 2, 4, 'aya', 'ali', '               Welcome     ', '2022-05-19 12:21:44', '2022-05-19 12:21:44'),
(161, 2, 4, 'aya', 'ali', '               Welcome     ', '2022-05-19 12:33:29', '2022-05-19 12:33:29'),
(162, 2, 4, 'aya', 'ali', '               Welcome     ', '2022-05-19 12:33:36', '2022-05-19 12:33:36'),
(163, 2, 4, 'aya', 'ali', '               Welcome     ', '2022-05-19 12:34:19', '2022-05-19 12:34:19'),
(164, 2, 4, 'aya', 'ali', '               Welcome     ', '2022-05-19 12:34:25', '2022-05-19 12:34:25'),
(165, 2, 4, 'aya', 'ali', '                    This is Ibrahim', '2022-05-19 12:34:57', '2022-05-19 12:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_image_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` float(110,2) NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` enum('S','M','L','XL') NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `delete_product` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_image_name`, `product_image`, `product_name`, `product_code`, `product_category`, `product_price`, `product_quantity`, `product_color`, `product_size`, `product_description`, `delete_product`, `created_at`, `updated_at`) VALUES
(1, 'dress', 'img\\Accessories\\access 1-1.webp', 'dress', '123M', 'dress', 100.00, 1, 'black', 'S', 'dress for party', 0, '2022-05-18 12:27:54', '2022-05-18 12:27:54'),
(2, 'new item', 'img\\Accessories\\access 2-1.webp', 'new item', '102e', 'accs', 132.00, 1, 'brown', 'S', 'new item', 0, '2022-05-18 12:49:34', '2022-05-18 12:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `phone_num` int(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `delete_user` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `phone_num`, `user_password`, `age`, `gender`, `delete_user`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'ahmad', 'ahmad', 'ahmad@gmail.com', 77777799, 'anaahmad', 34, 'male', 0, 0, '2022-05-18 03:24:33', '2022-05-18 03:24:33'),
(2, 'mohhamd', 'mohhamd', 'mohhamd@gg.com', 2147483647, 'Aqaba1234$', 45, 'male', 0, 0, '2022-05-18 03:47:54', '2022-05-18 03:47:54'),
(3, 'hadi', 'alsaden', 'hadi@gmail.com', 123254126, 'Abcd*1234', 20, 'male', 0, 0, '2022-05-18 12:25:44', '2022-05-18 12:25:44'),
(4, 'aya', 'ali', 'aya@gmail.com', 1203214532, 'aaa', 15, 'female', 0, 0, '2022-05-19 08:10:52', '2022-05-19 08:10:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category` (`product_category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144775;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`Product_id`),
  ADD CONSTRAINT `checkout_ibfk_3` FOREIGN KEY (`order_number`) REFERENCES `cart` (`order_number`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `products` (`Product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
