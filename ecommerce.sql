-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2019 at 07:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `price`, `id`) VALUES
('Lvate Capsule', 350, 1),
('Nestle NAN PRO', 550, 2),
('Himalaya Diabecon (DS)', 150, 3),
('Prega News', 110, 4),
('LS Dew Soap', 157, 5),
('Acnemoist Cream', 275, 6),
('Dormedo Acne', 8000, 7),
('Forever Aloe Vera gel', 1200, 8),
('Whey Protein', 2124, 9),
('Paracetamol', 100, 10),
('Diabetic protein', 5000, 11),
('Pain Relief Oil', 1295, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Sunil', 'Panchal', 'sunilpanchal123.sp@gmail.com', '25be3ef8c4b4f9a487d2fee6d6701f01', '7697767333', 'PITHAMPUR INDUSTRIAL HUB', 'vard no.20, Vill.-Kheda sec. no.3'),
(2, 'Ankit', 'Kumar', 'akumarsingh35@gmail.com', '6c44e5cd17f0019c64b042e4a745412a', '9304182778', 'Bhagalpur', 'village- Bhitti, Po- Sabour, Distt- Bhagalpur, Bihar'),
(3, 'Altaf', 'Raza', 'altafraza896@gmail.com', '0f0e338e05bd0eaa48edeac1c872da3f', '9199415833', 'jalandhar', 'Lovely Professional University, Jalandhar');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('added to cart','confirmed') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(15, 2, 2, 'confirmed'),
(5, 1, 1, 'confirmed'),
(4, 1, 4, 'confirmed'),
(9, 1, 7, 'confirmed'),
(12, 2, 2, 'confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
