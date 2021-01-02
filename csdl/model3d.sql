-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 03:22 AM
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
(64, NULL, NULL, 'BotSkinned.gltf', '/SEO4-Nhom14.2/upload/gltf/BotSkinned/BotSkinned.gltf', '', NULL, NULL, NULL, NULL),
(66, NULL, NULL, 'CesiumMan.gltf', '/SEO4-Nhom14.2/upload/gltf/CesiumMan/CesiumMan.gltf', '/SEO4-Nhom14.2/upload/img/CesiumMan.gif', NULL, NULL, NULL, NULL),
(67, NULL, NULL, 'Flamingo.glb', '/SEO4-Nhom14.2/upload/gltf/glb/Flamingo.glb', '/SEO4-Nhom14.2/upload/img/pablotheflamingo.jpg', NULL, NULL, NULL, NULL),
(68, NULL, NULL, 'DamagedHelmet.gltf', '/SEO4-Nhom14.2/upload/gltf/DamagedHelmet/DamagedHelmet.gltf', '/SEO4-Nhom14.2/upload/img/carvisualizer.jpg', NULL, NULL, NULL, NULL),
(71, NULL, NULL, 'Duck.gltf', '/SEO4-Nhom14.2/upload/gltf/Duck/Duck.gltf', '/SEO4-Nhom14.2/upload/img/Duck.png', NULL, NULL, NULL, NULL),
(74, NULL, NULL, 'HORSE.GLB', '/SEO4-Nhom14.2/upload/gltf/glb/HORSE.GLB', '/SEO4-Nhom14.2/upload/img/Horse.png', NULL, NULL, NULL, NULL),
(75, NULL, NULL, 'test1.1.glb', '/SEO4-Nhom14.2/upload/gltf/glb/test1.1.glb', '/SEO4-Nhom14.2/upload/img/wildflower.png', NULL, NULL, NULL, NULL),
(76, NULL, NULL, 'CesiumMilkTruck.gltf', '/SEO4-Nhom14.2/upload/gltf/CesiumMilkTruck/CesiumMilkTruck.gltf', '/SEO4-Nhom14.2/upload/img/CesiumMilkTruck.gif', NULL, NULL, NULL, NULL),
(77, NULL, NULL, 'Wolf-Blender-2.82a.gltf', '/SEO4-Nhom14.2/upload/gltf/Wolf-Blender-2.82a/Wolf-Blender-2.82a.gltf', '/SEO4-Nhom14.2/upload/gltf/Wolf-Blender-2.82a/Fur_Alpha_3.png', NULL, NULL, NULL, NULL),
(78, NULL, NULL, 'BrainStem.gltf', '/SEO4-Nhom14.2/upload/gltf/BrainStem/BrainStem.gltf', '/SEO4-Nhom14.2/upload/img/BrainStem.gif', NULL, NULL, NULL, NULL),
(100, NULL, NULL, 'AntiqueCamera.glb', '  /SEO4-Nhom14.2/upload/gltf/glb/AntiqueCamera.glb', '/SEO4-Nhom14.2/upload/img/AntiqueCamera.png', NULL, NULL, NULL, NULL),
(101, NULL, NULL, 'Avocado.glb', '/SEO4-Nhom14.2/upload/gltf/glb/Avocado.glb', '/SEO4-Nhom14.2/upload/img/Avocado.jpg', NULL, NULL, NULL, NULL),
(102, NULL, NULL, 'BarramundiFish.glb', '/SEO4-Nhom14.2/upload/gltf/glb/BarramundiFish.glb', '/SEO4-Nhom14.2/upload/img/BarramundiFish.jpg', NULL, NULL, NULL, NULL),
(107, NULL, NULL, 'Lantern.glb', '/SEO4-Nhom14.2/upload/gltf/glb/Lantern.glb', '/SEO4-Nhom14.2/upload/img/Lantern.jpg', NULL, NULL, NULL, NULL),
(108, NULL, NULL, 'MaterialsVariantsShoe.glb', '/SEO4-Nhom14.2/upload/gltf/glb/MaterialsVariantsShoe.glb', '/SEO4-Nhom14.2/upload/img/MaterialsVariantsShoe.jpg', NULL, NULL, NULL, NULL),
(109, NULL, NULL, 'SheenChair.glb', '/SEO4-Nhom14.2/upload/gltf/glb/SheenChair.glb', '/SEO4-Nhom14.2/upload/img/SheenChair.jpg', NULL, NULL, NULL, NULL),
(110, NULL, NULL, 'SimpleSkinning.gltf', '/SEO4-Nhom14.2/upload/gltf/SimpleSkinning/SimpleSkinning.gltf', '/SEO4-Nhom14.2/upload/img/SimpleSkinning.png', NULL, NULL, NULL, NULL),
(111, NULL, NULL, 'SpecGlossVsMetalRough.glb', '/SEO4-Nhom14.2/upload/gltf/glb/SpecGlossVsMetalRough.glb', '/SEO4-Nhom14.2/upload/img/SpecGlossVsMetalRough.jpg', NULL, NULL, NULL, NULL),
(112, NULL, NULL, 'ToyCar.glb', '/SEO4-Nhom14.2/upload/gltf/glb/ToyCar.glb', '/SEO4-Nhom14.2/upload/img/ToyCar.jpg', NULL, NULL, NULL, NULL),
(113, NULL, NULL, 'zoro.glb', '/SEO4-Nhom14.2/upload/gltf/glb/zoro.glb', '/SEO4-Nhom14.2/upload/img/zoro.jpg', NULL, NULL, NULL, NULL),
(115, NULL, NULL, 'PrimaryIonDrive.glb', '/SEO4-Nhom14.2/upload/gltf/glb/PrimaryIonDrive.glb', '/SEO4-Nhom14.2/upload/img/PrimarylonDrive.gif', NULL, NULL, NULL, NULL),
(116, NULL, NULL, 'Xbot.glb', '/SEO4-Nhom14.2/upload/gltf/glb/Xbot.glb', '/SEO4-Nhom14.2/upload/img/aviator.png', NULL, NULL, NULL, NULL),
(117, NULL, NULL, 'Stork.glb', '/SEO4-Nhom14.2/upload/gltf/glb/Stork.glb', '/SEO4-Nhom14.2/upload/img/cassinigrandtour.png', NULL, NULL, NULL, NULL),
(118, NULL, NULL, 'SittingBox.glb', '/SEO4-Nhom14.2/upload/gltf/glb/SittingBox.glb', '/SEO4-Nhom14.2/upload/img/earth2050.png', NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

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
