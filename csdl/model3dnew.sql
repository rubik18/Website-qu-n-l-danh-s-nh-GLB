-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 05:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `model3d`
--

-- --------------------------------------------------------

--
-- Table structure for table `model3d`
--

CREATE TABLE `model3d` (
  `id` int(15) NOT NULL,
  `scale` float DEFAULT NULL,
  `animations` int(15) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `glbUri` varchar(150) DEFAULT NULL,
  `thumbnaillmageUri` varchar(150) DEFAULT NULL,
  `category` varchar(150) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model3d`
--

INSERT INTO `model3d` (`id`, `scale`, `animations`, `name`, `glbUri`, `thumbnaillmageUri`, `category`, `width`, `height`, `depth`) VALUES
(21, NULL, NULL, 'Flamingo.glb', '/SEO4-Nhom14.2/webserver/upload/Flamingo.glb', NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, 'ferrari.glb', '/SEO4-Nhom14.2/webserver/upload/ferrari.glb', NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, 'LittlestTokyo.glb', '/SEO4-Nhom14.2/webserver/upload/LittlestTokyo.glb', NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, 'PrimaryIonDrive.glb', '/SEO4-Nhom14.2/webserver/upload/PrimaryIonDrive.glb', NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, 'Parrot.glb', '/SEO4-Nhom14.2/webserver/upload/Parrot.glb', NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, 'Soldier.glb', '/SEO4-Nhom14.2/webserver/upload/Soldier.glb', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `model_animation`
--

CREATE TABLE `model_animation` (
  `id` int(15) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `speed` float DEFAULT NULL,
  `selected` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `model3d`
--
ALTER TABLE `model3d`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animations` (`animations`);

--
-- Indexes for table `model_animation`
--
ALTER TABLE `model_animation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `model3d`
--
ALTER TABLE `model3d`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `model_animation`
--
ALTER TABLE `model_animation`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_animation`
--
ALTER TABLE `model_animation`
  ADD CONSTRAINT `model_animation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `model3d` (`animations`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
