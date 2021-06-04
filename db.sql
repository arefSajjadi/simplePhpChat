-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2021 at 03:38 PM
-- Server version: 5.7.28
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_detail`
--

DROP TABLE IF EXISTS `chat_detail`;
CREATE TABLE IF NOT EXISTS `chat_detail` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_title` text COLLATE utf8_persian_ci NOT NULL,
  `chat_dor` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `chat_detail`
--

INSERT INTO `chat_detail` (`chat_id`, `chat_title`, `chat_dor`, `user_id`, `friend_id`) VALUES
(56, 'اوم', '2020-01-06 12:34:37', 5, 4),
(55, 'قرار نیست هرکاری دلت میخاد بکنیا', '2020-01-06 12:34:30', 5, 4),
(54, 'خوفی عزیزم؟', '2020-01-06 12:34:28', 4, 5),
(52, 'سلام', '2020-01-06 12:34:04', 4, 5),
(53, 'علیک سلام', '2020-01-06 12:34:13', 5, 4),
(57, 'gogoli ha', '2020-08-03 12:18:37', 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `username_dor` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `username_dor`) VALUES
(4, 'aref', '123', '2020-01-06 12:26:32'),
(5, 'Mohi', 'aref', '2020-01-06 12:26:44'),
(6, 'ewdmund', 'asd', '2020-01-06 13:17:48'),
(7, 'aref', 'asd', '2020-08-03 12:17:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
