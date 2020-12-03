-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 03, 2020 at 04:03 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xd-ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `unit` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `unit`, `category_id`, `details`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'changed', 'changed', 8, 'changed', 1, '2020-10-20 09:20:24', '2020-10-20 09:20:24', '2020-10-20 04:08:55'),
(2, 'Gwendolyn Guthrie', 'Adipisci labore at a', 7, 'Non ullamco labore q', 1, '2020-10-20 09:49:11', '2020-10-20 09:49:11', '2020-10-20 04:08:58'),
(3, 'Remote', 'pcs', 8, '', 1, '2020-10-20 14:27:42', '2020-10-20 14:27:42', '2020-10-21 05:12:30'),
(4, 'Fantech Gaming Keyboard', 'pcs', 8, 'This is details.', 1, '2020-10-20 14:28:17', '2020-10-20 14:28:17', '2020-11-05 22:01:50'),
(5, 'Quyn Emerson', 'Aliqua Duis sed ut ', 9, 'Fugit ipsum anim ex', 1, '2020-11-06 03:46:48', '2020-11-06 03:46:48', NULL),
(6, 'Gail Villarreal', 'Et laborum fugiat ut', 8, 'Voluptas in incididu', 0, '2020-11-06 03:47:09', '2020-11-06 03:47:09', NULL),
(7, 'Yoshi Pitts', 'Ex molestiae nemo ne', 8, 'Aliquid nihil perfer', 1, '2020-11-29 03:42:39', '2020-11-29 03:42:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `details`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Kuame Frank', 'Eum in voluptas sed ', 1, '2020-10-20 08:22:14', '2020-10-20 08:22:14', '2020-11-05 22:01:22'),
(8, 'Jordan Walls', 'Quia numquam ullam i', 1, '2020-10-20 08:22:23', '2020-10-20 08:22:23', NULL),
(9, 'Burton Silva', 'Repudiandae itaque e', 1, '2020-11-06 03:46:01', '2020-11-06 03:46:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Dinesh Thapa', 'thapadinesh1328@gmail.com', 'thapadinesh1328', 'c44a471bd78cc6c2fea32b9fe028d30a', 'admin', 1, '2020-10-20 05:13:47', '2020-10-20 05:13:47', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
