-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2022 at 03:31 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
CREATE TABLE IF NOT EXISTS `flights` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destination` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `base_price` varchar(255) DEFAULT '',
  `mo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `tu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `we` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `th` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `fr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `sa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `su` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `destination`, `base_price`, `mo`, `tu`, `we`, `th`, `fr`, `sa`, `su`) VALUES
(3, 'Скопје-Берлин', '3000', '8:00AM', '', '17:00PM', '', '', '16:00PM', ''),
(5, 'Берлин-Скопје', '3000', '8:00AM', '', '', '17:00PM', '', '', '16:00PM'),
(2, 'Охрид-Белград', '1000', '', '8:00AM', '', '16:00PM', '', '', '15:00PM'),
(4, 'Берлин-Виена', '3000', '', '8:00AM', '', '17:00PM', '', '', '16:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `destination` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `num_passengers` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type_class` varchar(255) DEFAULT NULL,
  `num_luggage` varchar(255) DEFAULT NULL,
  `type_luggage` varchar(255) DEFAULT NULL,
  `emial` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `date`, `destination`, `num_passengers`, `type_class`, `num_luggage`, `type_luggage`, `emial`, `name`, `surname`, `price`) VALUES
(46, '2022-05-31  8:00AM', 'Охрид-Белград', '1', 'Економска', '5', '20кг-1000ден', 'stefankrste@yahoo.com', 'dsdf', 'dsdfsdfsdf', '5910.69');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `points` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `points`, `email`) VALUES
(1, 'StefanKrste', '$2y$10$fr0ggZ19yZIt7kSpFB3rhOfTxTVNUdX2vrSou1QQh/NOHV6qZG5UO', '177.3', 'stefankrste@yahoo.com'),
(2, 'StefanKrste1', '$2y$10$gYJtJ9QZTPPLSfXezK3Z5O.aTWYXOd08hgUN6ttgq3YU5AbTRLpVK', '3', 'krste_mafija@hotmail.com'),
(3, 'StefanKrste12', '$2y$10$uP5PxDAEySh8g/N5z4vtpOsG8fhhAgAk0oNgWtI1mGkt/nNOuxeh6', '3', 'stefankrst1e@yahoo.com'),
(4, 'StefanKrste23', '$2y$10$C4x1bCFhHOPnOAAhlA2uzujJFfv3eZsnJHICOQBpgH2nXybvbAEha', '3', 'stefankrste123@yahoo.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
