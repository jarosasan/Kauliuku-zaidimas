-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 m. Spa 30 d. 14:07
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kauliukai`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `games`
--

CREATE TABLE `games` (
  `id` int(8) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `result` double(10,2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `games`
--

INSERT INTO `games` (`id`, `name`, `result`, `time`, `ip`) VALUES
(1, 'mantas', 0.00, '0000-00-00 00:00:00', ''),
(2, 'Siusana', 0.00, '0000-00-00 00:00:00', ''),
(3, 'Siusana', 0.00, '2017-10-29 07:02:12', ''),
(4, 'Siusana', 22.00, '2017-10-29 07:19:23', ''),
(5, 'kernius', 33.00, '2017-10-29 15:47:18', ''),
(6, 'kernius', 33.00, '2017-10-29 15:48:03', ''),
(7, 'kernius', 0.80, '2017-10-29 15:48:37', ''),
(8, 'simas', 0.20, '2017-10-29 18:14:57', ''),
(9, 'simas', 1.90, '2017-10-29 18:25:08', ''),
(10, 'simas', 0.00, '2017-10-29 19:21:43', ''),
(11, 'simas', 0.80, '2017-10-29 19:44:51', ''),
(12, 'simas', 2.10, '2017-10-29 21:32:15', ''),
(13, 'simas', 0.20, '2017-10-29 21:32:20', ''),
(14, 'simas', 0.90, '2017-10-29 21:32:23', ''),
(15, 'simas', 1.50, '2017-10-30 04:14:41', ''),
(16, 'simas', 0.00, '2017-10-30 04:15:35', ''),
(17, '', 0.30, '2017-10-30 05:23:15', ''),
(18, 'Tadas', 0.30, '2017-10-30 07:32:14', ''),
(19, 'Tadas', 1.00, '2017-10-30 07:33:11', ''),
(20, 'Tadas', 0.40, '2017-10-30 07:52:01', ''),
(21, 'Tadas', 0.00, '2017-10-30 08:03:59', ''),
(22, 'Tadas', 1.50, '2017-10-30 08:16:28', ''),
(23, 'Tadas', 0.40, '2017-10-30 08:16:31', ''),
(24, 'Tadas', 0.70, '2017-10-30 08:30:36', ''),
(25, 'Tadas', 0.60, '2017-10-30 09:03:43', ''),
(26, 'Tadas', 0.30, '2017-10-30 09:30:25', ''),
(27, 'Tadas', 0.10, '2017-10-30 09:31:17', ''),
(28, 'Tadas', 0.80, '2017-10-30 09:31:20', ''),
(29, 'Tadas', 0.60, '2017-10-30 09:35:47', ''),
(30, 'Antanas', 0.90, '2017-10-30 09:37:09', ''),
(31, 'Antanas', 0.80, '2017-10-30 09:39:08', ''),
(32, 'Antanas', 0.30, '2017-10-30 09:39:16', ''),
(33, 'Antanas', 0.60, '2017-10-30 09:40:33', ''),
(34, 'Antanas', 0.80, '2017-10-30 09:40:37', ''),
(35, 'Tadas', 3.30, '2017-10-30 10:37:34', '');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(8) UNSIGNED NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `lastId` varchar(50) COLLATE utf8_bin NOT NULL,
  `lastLogin` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `lastId`, `lastLogin`) VALUES
(6, 'qwerty', 'qwerty', '', ''),
(8, 'Simas', '$2y$10$d0aiUO81ERJcf/dsjBz.Iuv4mbP5Lr2MBcs5s19LGi9opB7ahdTh.', '', ''),
(9, 'Jarka', '$2y$10$4q0ew/GD2TOHt5.f94av..viSFCu/ZzmlhI/r1aQAvUjr8eTlNJEq', '', ''),
(10, 'Rasa', '1234', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, 'Jarka', '0000', '', ''),
(16, 'Siusana', '12345', '', ''),
(17, 'Antanas', '123', '', ''),
(18, 'Tadas', 'tadas', '', ''),
(19, '', '', '::1', '2017-10-30 13:27:47'),
(20, 'Ruta', 'ruta', '', ''),
(21, 'Kestas', 'kestas', '::1', '2017-10-30 13:56:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
