-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 03:10 PM
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
(45, NULL, NULL, 'PrimaryIonDrive.glb', '/SEO4-Nhom14.2/webserver/upload/PrimaryIonDrive.glb', '/SEO4-Nhom14.2/webserver/upload/img/PrimarylonDrive.gif', NULL, NULL, NULL, NULL),
(47, NULL, NULL, 'Parrot.glb', '/SEO4-Nhom14.2/webserver/upload/Parrot.glb', '/SEO4-Nhom14.2/webserver/upload/img/aviator.png', NULL, NULL, NULL, NULL),
(48, NULL, NULL, 'ferrari.glb', '/SEO4-Nhom14.2/webserver/upload/ferrari.glb', '/SEO4-Nhom14.2/webserver/upload/img/anagram.png', NULL, NULL, NULL, NULL),
(50, NULL, NULL, 'Flamingo.glb', '/SEO4-Nhom14.2/webserver/upload/Flamingo.glb', '/SEO4-Nhom14.2/webserver/upload/img/analysis.png', NULL, NULL, NULL, NULL),
(51, NULL, NULL, 'SittingBox.glb', '/SEO4-Nhom14.2/webserver/upload/SittingBox.glb', '/SEO4-Nhom14.2/webserver/upload/img/carvisualizer.jpg', NULL, NULL, NULL, NULL),
(52, NULL, NULL, 'Soldier.glb', '/SEO4-Nhom14.2/webserver/upload/Soldier.glb', '/SEO4-Nhom14.2/webserver/upload/img/3dc.png', NULL, NULL, NULL, NULL),
(54, NULL, NULL, 'Xbot.glb', '/SEO4-Nhom14.2/webserver/upload/Xbot.glb', '/SEO4-Nhom14.2/webserver/upload/img/cabbibo.png', NULL, NULL, NULL, NULL);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `model3d`
--
ALTER TABLE `model3d`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
