-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 08:54 AM
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
-- Database: `project5_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_history`
--

CREATE TABLE `billing_history` (
  `billing_number` int(14) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_history`
--

INSERT INTO `billing_history` (`billing_number`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '11', '2022-05-23 17:28:25', '2022-05-23 15:06:14'),
(2, '12', '2022-05-23 15:06:29', '2022-05-23 15:06:29'),
(3, '12', '2022-05-23 16:10:01', '2022-05-23 16:10:01'),
(4, '12', '2022-05-23 16:10:44', '2022-05-23 16:10:44'),
(5, '12', '2022-05-23 16:12:00', '2022-05-23 16:12:00'),
(6, '12', '2022-05-23 16:12:49', '2022-05-23 16:12:49'),
(7, '12', '2022-05-23 16:13:32', '2022-05-23 16:13:32'),
(8, '13', '2022-05-23 16:15:15', '2022-05-23 16:15:15'),
(9, '12', '2022-05-23 16:16:11', '2022-05-23 16:16:11'),
(10, '12', '2022-05-23 16:17:14', '2022-05-23 16:17:14'),
(11, '12', '2022-05-23 16:22:10', '2022-05-23 16:22:10'),
(12, '6', '2022-05-23 18:52:12', '2022-05-23 18:52:12'),
(13, '6', '2022-05-23 19:06:02', '2022-05-23 19:06:02'),
(14, '14', '2022-05-23 20:09:01', '2022-05-23 20:09:01'),
(15, '14', '2022-05-23 20:21:24', '2022-05-23 20:21:24'),
(16, '14', '2022-05-23 20:25:45', '2022-05-23 20:25:45'),
(17, '14', '2022-05-23 20:26:22', '2022-05-23 20:26:22'),
(18, '14', '2022-05-23 20:26:55', '2022-05-23 20:26:55'),
(19, '14', '2022-05-23 20:30:02', '2022-05-23 20:30:02'),
(20, '14', '2022-05-23 20:34:55', '2022-05-23 20:34:55'),
(21, '14', '2022-05-23 20:35:24', '2022-05-23 20:35:24'),
(22, '14', '2022-05-23 20:36:02', '2022-05-23 20:36:02'),
(23, '15', '2022-05-23 21:16:05', '2022-05-23 21:16:05'),
(24, '16', '2022-05-27 16:42:18', '2022-05-27 16:42:18'),
(25, '16', '2022-05-27 17:30:32', '2022-05-27 17:30:32'),
(26, '11', '2022-05-28 04:43:03', '2022-05-28 04:43:03'),
(27, '11', '2022-05-28 05:30:45', '2022-05-28 05:30:45'),
(28, '11', '2022-05-28 05:35:06', '2022-05-28 05:35:06'),
(29, '11', '2022-05-28 05:36:49', '2022-05-28 05:36:49'),
(30, '11', '2022-05-28 05:41:00', '2022-05-28 05:41:00'),
(31, '11', '2022-05-28 05:41:35', '2022-05-28 05:41:35'),
(32, '11', '2022-05-28 05:52:14', '2022-05-28 05:52:14'),
(33, '11', '2022-05-28 05:57:53', '2022-05-28 05:57:53'),
(34, '11', '2022-05-28 05:58:38', '2022-05-28 05:58:38'),
(35, '11', '2022-05-28 06:03:33', '2022-05-28 06:03:33'),
(36, '11', '2022-05-28 06:04:07', '2022-05-28 06:04:07'),
(37, '11', '2022-05-28 06:04:52', '2022-05-28 06:04:52'),
(38, '17', '2022-05-28 11:12:13', '2022-05-28 11:12:13'),
(39, '17', '2022-05-28 11:13:48', '2022-05-28 11:13:48'),
(40, '17', '2022-05-28 11:14:30', '2022-05-28 11:14:30'),
(41, '18', '2023-02-08 19:20:04', '2023-02-08 19:20:04'),
(42, '18', '2023-02-08 19:30:02', '2023-02-08 19:30:02'),
(43, '18', '2023-02-08 19:41:20', '2023-02-08 19:41:20'),
(44, '18', '2023-02-09 14:00:49', '2023-02-09 14:00:49'),
(45, '18', '2023-02-09 14:03:02', '2023-02-09 14:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_number` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` enum('S','M','L','XL','39','40','41','42','43','') DEFAULT NULL,
  `order_price` float(14,2) NOT NULL,
  `order_quantity` int(100) NOT NULL,
  `order_subtotal` float(14,10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_number`, `user_id`, `product_image`, `product_name`, `product_color`, `product_size`, `order_price`, `order_quantity`, `order_subtotal`, `created_at`, `updated_at`, `product_id`) VALUES
(25, 19, 'img/Nikon/Nikon-nikkor.jpg', 'Nikon nikkor', 'black', NULL, 333.00, 1, 0.0000000000, '2023-02-09 14:02:33', '2023-02-09 14:02:33', 90);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(14) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `is_deleted`, `category_name`, `created_at`, `updated_at`) VALUES
(0, 0, 'Sony', '2023-02-09 17:05:06', '2023-02-09 14:05:06'),
(1, 0, 'Sony', '2023-02-08 15:08:40', '2023-02-08 12:08:40'),
(2, 0, 'Fujifilm', '2023-02-08 15:08:41', '2023-02-08 12:08:41'),
(3, 0, 'Canon', '2023-02-08 15:08:42', '2023-02-08 12:08:42'),
(4, 0, 'Nikon', '2023-02-08 15:08:43', '2023-02-08 12:08:43'),
(5, 0, 'Lumix', '2023-02-08 15:08:44', '2022-05-23 07:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(14) NOT NULL,
  `bill_id` int(14) NOT NULL,
  `order_number` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `order_quantity` int(14) NOT NULL,
  `order_subtotal` float(10,5) NOT NULL,
  `total` float(10,5) NOT NULL,
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

INSERT INTO `checkout` (`id`, `bill_id`, `order_number`, `user_id`, `product_id`, `order_quantity`, `order_subtotal`, `total`, `first_name`, `last_name`, `country`, `state`, `city`, `street_address`, `zipcode`, `phone`, `order_email`, `created_at`, `updated_at`) VALUES
(340, 41, 16, 18, 7, 1, 0.00000, 0.00000, 'yazan', 'obeidat', 'jordan', 'ain', 'amman', 'jordan', 125, 788882222, 'yazan@gmail.com', '2023-02-08 19:20:04', '2023-02-08 19:20:04'),
(343, 42, 16, 18, 7, 1, 0.00000, 0.00000, 'yazan', 'obeidat', 'Jordan', 'ainalbasha', 'amman', 'jordan', 1, 788882222, 'yazan@gmail.com', '2023-02-08 19:30:02', '2023-02-08 19:30:02'),
(344, 0, 17, 18, 92, 1, 344.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-08 19:40:56', '2023-02-08 19:40:56'),
(345, 43, 17, 18, 92, 1, 0.00000, 0.00000, 'ahmad', 'obeidat', 'Jordan', 'amman', 'amman', 'jordan', 1, 788882222, 'ahmad@gmail.com', '2023-02-08 19:41:20', '2023-02-08 19:41:20'),
(346, 0, 17, 18, 92, 1, 344.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-08 19:42:56', '2023-02-08 19:42:56'),
(347, 0, 17, 18, 92, 1, 344.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-08 19:43:04', '2023-02-08 19:43:04'),
(348, 0, 17, 18, 92, 1, 344.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-08 20:44:42', '2023-02-08 20:44:42'),
(349, 0, 18, 18, 87, 2, 1308.00000, 344.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-08 20:44:42', '2023-02-08 20:44:42'),
(350, 0, 17, 18, 92, 1, 344.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-09 10:17:22', '2023-02-09 10:17:22'),
(351, 0, 18, 18, 87, 2, 1308.00000, 344.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-09 10:17:22', '2023-02-09 10:17:22'),
(352, 0, 19, 18, 97, 1, 455.00000, 1652.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-09 10:17:22', '2023-02-09 10:17:22'),
(353, 0, 20, 18, 87, 1, 654.00000, 2107.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-09 10:17:22', '2023-02-09 10:17:22'),
(354, 0, 23, 18, 14, 1, 680.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-09 14:00:19', '2023-02-09 14:00:19'),
(355, 0, 24, 18, 14, -1, -680.00000, 680.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-09 14:00:19', '2023-02-09 14:00:19'),
(356, 44, 24, 18, 14, -1, 0.00000, 0.00000, 'yazan', 'obeidat', 'Jordan', 'amman', 'amman', 'jordan', 1, 788882222, 'yazan@gmail.com', '2023-02-09 14:00:49', '2023-02-09 14:00:49'),
(357, 0, 25, 18, 90, 1, 333.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2023-02-09 14:02:43', '2023-02-09 14:02:43'),
(358, 45, 25, 18, 90, 1, 0.00000, 0.00000, 'yazan', 'obeidat', 'Jordan', 'amman', 'amman', 'jordan', 1, 788882222, 'yazan@gmail.com', '2023-02-09 14:03:02', '2023-02-09 14:03:02');

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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` float(110,2) NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` enum('S','M','L','XL','39','40','41','42','43','') NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_image`, `product_name`, `product_category`, `product_price`, `product_quantity`, `product_color`, `product_size`, `product_description`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'img/Canon/canon_eos_5d_mark_iv.jpg', 'Canon eos 5d mark iv', 'Canon', 500.00, 1, 'Black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 1, '2023-02-08 12:08:31', '2023-02-08 12:08:31'),
(4, 'img/Lumix/panasonic1.jpeg', 'LUMIX cameras are made for all content creators', 'LUMIX', 350.00, 1, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 1, '2023-02-08 12:08:33', '2023-02-08 12:08:33'),
(5, 'img/Nikon/nikon.jpg', 'The Nikon is one of our favorite DSLRs for photography', 'Nikon', 770.00, 1, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 1, '2023-02-08 12:08:35', '2023-02-08 12:08:35'),
(6, 'img/Sony/Son1.jpeg', 'Sony zeeis', 'Sony', 310.00, 1, 'Black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 1, '2023-02-08 12:08:38', '2023-02-08 12:08:38'),
(7, 'img/Canon/Canon1.jpg', 'Canon Mirrorless Camera with RF 24-105mm', 'Canon', 520.00, 1, 'White', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 1, '2023-02-08 12:08:31', '2023-02-08 12:08:31'),
(12, 'img/Lumix/panasonic_dc_s1hbody_lumix.jpg', 'Panasonic Lumix DMC-FZ300 Digital Camera with Accessories Kit', 'Lumix', 566.00, 1, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 0, '2023-02-08 12:08:31', '2023-02-08 12:08:31'),
(14, 'img/Canon/Canon-eos-r6.jpg', 'CANON EOS R6 MIRRORLESS CAMERA WITH RF 24', 'Canon', 680.00, 1, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 0, '2023-02-08 12:08:31', '2023-02-08 12:08:31'),
(23, 'img/Sony/sony_ilce_6400m_b_alpha.jpg', 'Sony a6400 Mirrorless Camera with 18-135mm', 'Sony', 390.00, 1, 'Sony', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 0, '2023-02-08 12:08:31', '2023-02-08 12:08:31'),
(25, 'img/Nikon/nikon_1663_z_6ii.jpg', 'The black COOLPIX B500 Digital Camera from Nikon', 'Nikon', 480.00, 1, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 0, '2023-02-08 12:08:31', '2023-02-08 12:08:31'),
(81, 'img/Canon/canon_eosc.jpg', 'canon', 'Canon', 200.00, 0, 'black', '', 'blackblackblackblackblackblack', 0, '2023-02-08 12:08:31', '2023-02-08 12:08:31'),
(82, 'img/Canon/canon_eosr.jpg', 'Canon', 'Canon', 320.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 12:39:51', '2023-02-08 12:39:51'),
(83, 'img/Canon/canon_g7x.jpg', 'Canon G7x', 'Canon', 430.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 12:44:58', '2023-02-08 12:44:58'),
(84, 'img/Canon/canon_rd.jpg', 'Canon RD', 'Canon', 523.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 12:46:04', '2023-02-08 12:46:04'),
(85, 'img/Sony/sony2.jpg', 'Sony RX-10', 'Sony', 330.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 12:49:45', '2023-02-08 12:49:45'),
(86, 'img/Sony/Son1.jpeg', 'Sony zeeis', 'Sony', 310.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 1, '2023-02-08 12:50:56', '2023-02-08 12:50:56'),
(87, 'img/Sony/sony_ilce_7.jpg', 'Sony', 'Sony', 654.00, 0, 'black', '', 'Lorem', 0, '2023-02-08 12:53:54', '2023-02-08 12:53:54'),
(88, 'img/Sony/Sony_sd.jpg', 'Sony sd', 'Sony', 499.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 12:55:18', '2023-02-08 12:55:18'),
(89, 'img/Sony/sonyrxo.jpg', 'Sony RXO', 'Sony', 215.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 12:58:01', '2023-02-08 12:58:01'),
(90, 'img/Nikon/Nikon-nikkor.jpg', 'Nikon nikkor', 'Nikon', 333.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:06:13', '2023-02-08 13:06:13'),
(91, 'img/Nikon/nikon_d_610_digital.jpg', 'Nikon d610', 'Nikon', 510.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:09:03', '2023-02-08 13:09:03'),
(92, 'img/Nikon/nikon_z_6_ii.jpg', 'Nikon z6 ii', 'Nikon', 344.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:11:56', '2023-02-08 13:11:56'),
(93, 'img/Lumix/panasonic-55.jpg', 'Lumix panasonic 55', 'Lumix', 430.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:17:30', '2023-02-08 13:17:30'),
(94, 'img/Lumix/panasonic_dc.jpg', 'Lumix panasonic DC', 'Lumix', 782.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:18:53', '2023-02-08 13:18:53'),
(95, 'img/Lumix/panasonic_lumix_gh5_ii.jpg', 'Panasonic Lumix GH5', 'Lumix', 412.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:20:47', '2023-02-08 13:20:47'),
(96, 'img/Fujifilm/fujifilm_s.jpg', 'Fujifilm S', 'Fujifilm', 190.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:23:52', '2023-02-08 13:23:52'),
(97, 'img/Fujifilm/fujifilm_x_s10.jpg', 'Fujifilm_x_s10', 'Fujifilm', 455.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:25:14', '2023-02-08 13:25:14'),
(98, 'img/Fujifilm/fujifilm_x-T4.jpg', 'Fujifilm x-T4', 'Fujifilm', 600.00, 0, 'black', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor', 0, '2023-02-08 13:28:02', '2023-02-08 13:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `ord_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `is_admin` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `phone_num`, `user_password`, `age`, `gender`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(17, 'yazzan', 'ob', 'yazzan@gmail.com', 2147483647, 'Abcd*1234', 24, 'male', 0, 1, '2023-02-08 12:05:34', '2023-02-08 12:05:34'),
(18, 'yazan', 'obeidat', 'yazan@gmail.com', 788882222, 'b4b7f633b998f0511e736eb128f501c3', 25, 'male', 0, 0, '2023-02-08 12:05:34', '2023-02-08 12:05:34'),
(19, 'Admin', 'admin', 'admin1@gmail.com', 788888888, 'b4b7f633b998f0511e736eb128f501c3', 25, 'male', 1, 0, '2023-02-08 12:42:53', '2023-02-08 12:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `email`, `password`, `is_deleted`, `created_at`, `updated_at`) VALUES
(0, 'yazan@gmail.com', '', 0, '2023-02-08 13:36:21', '2022-05-28 17:56:37'),
(1, 'admin', 'admin', 0, '2023-02-08 19:56:13', '2023-02-08 12:08:50'),
(2, 'd@gmail.com', '', 1, '2023-02-08 19:56:37', '2023-02-08 12:08:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_history`
--
ALTER TABLE `billing_history`
  ADD PRIMARY KEY (`billing_number`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`ord_num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
