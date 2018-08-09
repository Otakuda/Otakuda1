-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 05:24 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otakuda`
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`) VALUES
(1, '123', '123@hotmail.com', '29, Jalan Ros Merah 2/7', '123'),
(2, 'lee', 'abc@hotmail.com', '1,jalan pulai abc', '666'),
(3, 'gg', 'jayheng95@yahoo.com', '777@hotmail.com', '77777'),
(4, 'sss', '', '', ''),
(5, '', '', '', ''),
(6, 'terence', 'abc@hotmail.com', '214134', '123434'),
(7, 'c', '12345@hotmail.com', '1324', '123');

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `user_level` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`user_level`, `name`) VALUES
(1, 'user'),
(2, 'trader');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `customerid`) VALUES
(1, '2018-06-25', 1),
(2, '2018-06-25', 2),
(3, '2018-06-25', 3),
(4, '2018-06-26', 4),
(5, '2018-06-27', 5),
(6, '2018-06-27', 6),
(7, '2018-07-16', 7);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 2, 1, 80),
(2, 1, 1, 250),
(2, 2, 6, 80),
(2, 3, 9, 50),
(3, 1, 1, 250),
(3, 2, 6, 80),
(3, 3, 9, 50),
(3, 5, 101, 5),
(4, 1, 8, 250),
(4, 3, 8, 50),
(5, 1, 1, 250),
(5, 7, 1, 2000),
(6, 1, 1, 250),
(6, 7, 91, 2000),
(7, 1, 234, 250);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `code` varchar(6) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `phone`, `code`, `created_date`) VALUES
(140, '', '298928', '2018-07-18 17:07:30'),
(142, '', '339551', '2018-07-18 17:07:49'),
(144, '+60143837470', '612940', '2018-07-18 17:12:03'),
(145, '+60143837470', '327886', '2018-07-18 17:12:14'),
(146, '+60167519823', '887885', '2018-07-18 17:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `picture`) VALUES
(1, 'Watermelon', 'a plant species in the family Cucurbitaceae, a vine-like (scrambler and trailer) flowering plant originally from Africa. It is cultivated for its fruit.', 10, 'images/lcd.jpg'),
(2, 'Tomato', 'the edible, often red, fruit/berry of the plant Solanum lycopersicum,[2] commonly known as a tomato plant. The plant belongs to the nightshade family', 2, 'images/cdrom-drive.jpg'),
(3, 'Carrot', 'The carrot (Daucus carota subsp. sativus) is a root vegetable, usually orange in colour, though purple, black, red, white, and yellow cultivars exist.', 50, 'images/charger.jpg'),
(4, 'Peach', 'Peach is Japan\'s first true LCC bringing low fares and a casual quality of air travel to the people of North Asia and beyond.', 40, 'images/hard-drive.jpg'),
(5, 'Atech Mouse', 'Black colored laser mouse. No warranty', 5, 'images/mouse.jpg'),
(6, 'Nokia 5800', 'Nokia 5800 XpressMusic is a mobile device with 3.2\" widescreen display brings photos, video clips and web content to life', 299, 'images/mobile.jpg'),
(8, 'badminton', 'try to add on', 666, 'images/ip.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shangjia`
--

CREATE TABLE `shangjia` (
  `s_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shangjia`
--

INSERT INTO `shangjia` (`s_id`, `username`, `password`, `phone`, `user_level`, `user_id`) VALUES
(1, 'terence', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `temp_id` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `phone`, `password`, `created_date`) VALUES
(17, 'username', '+60143837470', '12345', '2018-07-18 15:28:11'),
(18, 'D150541C', '+60143837470', '12345', '2018-07-18 15:58:36'),
(19, 'D150541C', '+60143837470', '123457', '2018-07-18 16:23:24'),
(20, 'D150541C', '+60143837470', '123457', '2018-07-18 16:30:10'),
(21, '123', '+60143837470', '22222', '2018-07-18 17:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `user_level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `date_time`, `user_level`) VALUES
(10, 'sss', 'sss@hotmail.com', 'c455582f41f589213a7d34ccb3954c67476077da', '2018-04-26 11:30:49', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shangjia`
--
ALTER TABLE `shangjia`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shangjia`
--
ALTER TABLE `shangjia`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
