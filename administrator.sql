-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2019 at 08:36 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrator`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE IF NOT EXISTS `foods` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text NOT NULL,
  `item_name` text NOT NULL,
  `food_amount` int(11) NOT NULL,
  `approve` text NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `category_name`, `item_name`, `food_amount`, `approve`) VALUES
(25, 'CLASSIC', 'Cheese-Lovers', 50, 'Yes'),
(26, 'CLASSIC', 'Devilled-Chicken', 65, 'Yes'),
(27, 'CLASSIC', 'Sausage-Delight', 12, 'Yes'),
(28, 'CLASSIC', 'Tandoori-Chicken', 15, 'No'),
(29, 'SIGNATURE', 'Chicken-Bacon', 14, 'Yes'),
(30, 'SIGNATURE', 'Chicken-Hawaiian', 10, 'Yes'),
(31, 'SIGNATURE', 'Pepper-Chicken', 15, 'Yes'),
(32, 'SIGNATURE', 'Veggie-Supreme', 12, 'Yes'),
(33, 'FAVORITE', 'BBQ-Chicken', 15, 'Yes'),
(34, 'FAVORITE', 'Triple Chicken Feast', 5, 'Yes'),
(35, 'SUPREME', 'Spicy-Seafood', 8, 'Yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
