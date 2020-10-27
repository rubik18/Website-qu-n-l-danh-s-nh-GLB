-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 09:19 AM
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
(1, 0.001, 1, 'Cửa mở quay TOPAL Prima mở quay', 'topalprimamoquayanim.glb', 'topalprimamoquayanim.jpg', NULL, 0, 0, 0),
(7, 0.003, 8, 'Váº£i bay cjakc', '', 'Test - Google Chrome 2020-10-20 7_11_06 PM.png', NULL, 20, 20, 20),
(8, NULL, NULL, NULL, '/SEO4-Nhom14.2/webserver/upload/Horse.glb', NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, '/SEO4-Nhom14.2/webserver/uploadHorse.glb', NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, '/SEO4-Nhom14.2/webserver/uploadinstagram.jpg', NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
