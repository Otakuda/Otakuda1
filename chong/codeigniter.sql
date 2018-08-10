-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 12:03 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(60) NOT NULL,
  `hphone` int(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` double(60,6) NOT NULL,
  `lng` double(60,6) NOT NULL,
  `password` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `phone`, `hphone`, `email`, `address`, `lat`, `lng`, `password`, `file_name`, `date_time`) VALUES
(9, 'veg', 12345, 12345, 'w@hotmail.com', '3,jalan impian emas 14', 1.541870, 103.668335, '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/Shop_banner_96440_aaa.jpg', '2018-07-06 09:10:38'),
(10, 'fruit', 12345, 12345, 'e@hotmail.com', '23,jalan ros merah 2/8', 1.532055, 103.793331, '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/Shop_banner_111915_aaa.jpg', '2018-07-06 09:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `cargo_category`
--

CREATE TABLE `cargo_category` (
  `cargo_id` int(11) NOT NULL,
  `cargo_sort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargo_category`
--

INSERT INTO `cargo_category` (`cargo_id`, `cargo_sort`) VALUES
(1, 'vegetabel'),
(2, 'fruit'),
(3, 'meat');

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `i_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`i_id`, `name`) VALUES
(1, 'user'),
(2, 'trader');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_brief` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_brief_detail` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `product_price` double(20,2) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `cargo_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_brief`, `product_brief_detail`, `product_price`, `product_quantity`, `product_image`, `cargo_id`) VALUES
(1, 'apple', 'fresh', 'so cheap', 11.00, 11, 'temp_image/product_image_664853_20180726_102131.GIF ', 1),
(2, '蘋果', '新鮮', '超好吃', 11.00, 11, 'temp_image/product_image_187164_20180726_114359.jpg ', 1),
(3, '蘋果', '新鮮', '超好吃', 11.00, 11, 'temp_image/product_image_187164_20180726_114359.jpg ', 1),
(4, '蘋果', '新鮮', '今日最便宜', 11.00, 11, 'temp_image/product_image_265263_20180726_114544.jpg ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shangjia`
--

CREATE TABLE `shangjia` (
  `s_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shangjia`
--

INSERT INTO `shangjia` (`s_id`, `user_id`) VALUES
(1, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_lat` double(60,6) NOT NULL,
  `state_lng` double(60,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `state_lat`, `state_lng`) VALUES
(1, 'Molek', 1.524543, 103.789807),
(2, 'Johor Jaya', 1.535573, 103.797820);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `user_level`) VALUES
(4, 'terence', 'terencelee940203@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(5, 'mercy', 'ow@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(6, 'bernie', 'bernie@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(7, 'pharah', 'pharah@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo_category`
--
ALTER TABLE `cargo_category`
  ADD PRIMARY KEY (`cargo_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shangjia`
--
ALTER TABLE `shangjia`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cargo_category`
--
ALTER TABLE `cargo_category`
  MODIFY `cargo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shangjia`
--
ALTER TABLE `shangjia`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
