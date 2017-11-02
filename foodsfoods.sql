-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2017 at 12:58 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Fried Chicken', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 14, 'brian-chan-12169.jpg', '2017-07-17 19:21:09', '2017-07-17 19:21:09'),
(5, 'Macaroon', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 12, 'food7.jpg', '2017-07-17 19:21:52', '2017-07-17 19:21:52'),
(6, 'Cupcake', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 8, 'karly-gomez-216611.jpg', '2017-07-17 19:22:45', '2017-07-17 19:22:45'),
(7, 'Italian Pizza', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 13, 'food1.jpg', '2017-07-17 19:23:15', '2017-07-17 19:23:15'),
(8, 'Tacos', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 9, 'food2.jpg', '2017-07-17 19:24:11', '2017-07-17 19:24:11'),
(9, 'Steak', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 17, 'food3.jpg', '2017-07-17 19:24:48', '2017-07-17 19:24:48'),
(10, 'Cheeseburger', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 10, 'food6.jpg', '2017-07-17 19:25:44', '2017-07-17 19:25:44'),
(11, 'Chicken Salad', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 11, 'food8.jpg', '2017-07-17 19:26:44', '2017-07-17 19:26:44'),
(12, 'Cheeseburger x2', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 16, 'food4.jpg', '2017-07-17 19:29:54', '2017-07-17 19:29:54'),
(13, 'Strawberry Whip', 'Biodiesel master cleanse VHS helvetica, cornhole messenger bag paleo enamel pin', 9, 'karly-gomez-216611.jpg', '2017-07-17 19:31:48', '2017-07-17 19:31:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
