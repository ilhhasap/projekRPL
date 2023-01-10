-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2023 at 09:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mallDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `brandInMall`
--

CREATE TABLE `brandInMall` (
  `idBrandMall` int(11) NOT NULL,
  `idMall` int(11) NOT NULL,
  `idBrand` int(11) NOT NULL,
  `floor` varchar(8) NOT NULL,
  `jamBukaBrand` time NOT NULL,
  `jamTutupBrand` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandInMall`
--

INSERT INTO `brandInMall` (`idBrandMall`, `idMall`, `idBrand`, `floor`, `jamBukaBrand`, `jamTutupBrand`) VALUES
(1, 11, 9, '2', '11:00:00', '21:00:00'),
(2, 11, 7, '2', '11:06:00', '00:06:00'),
(3, 12, 7, '3', '11:49:00', '00:49:00'),
(4, 13, 8, '1', '01:09:00', '13:09:00'),
(5, 11, 10, '3', '10:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `idBrand` int(11) NOT NULL,
  `logoBrand` varchar(64) NOT NULL,
  `namaBrand` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`idBrand`, `logoBrand`, `namaBrand`) VALUES
(7, 'starbucks.svg', 'Starbucks Coffee'),
(8, 'uniqlo-1.svg', 'Uniqlo Indonesia'),
(9, 'apple-13.svg', 'iBox'),
(10, 'love.svg', 'pdip');

-- --------------------------------------------------------

--
-- Table structure for table `malls`
--

CREATE TABLE `malls` (
  `idMall` int(11) NOT NULL,
  `thumbnail` varchar(64) NOT NULL,
  `namaMall` varchar(128) NOT NULL,
  `alamatMall` text NOT NULL,
  `mapLink` varchar(255) NOT NULL,
  `jamBukaMall` time NOT NULL,
  `jamTutupMall` time NOT NULL,
  `active` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `malls`
--

INSERT INTO `malls` (`idMall`, `thumbnail`, `namaMall`, `alamatMall`, `mapLink`, `jamBukaMall`, `jamTutupMall`, `active`) VALUES
(11, 'jezael-melgoza-layMbSJ3YOE-unsplash.jpg', 'Solo Paragon', 'Jl. Yosodipuro No.133, Mangkubumen', 'https://goo.gl/maps/LHxi41LkjxM9Fy3H7', '09:00:00', '21:00:00', '1'),
(12, 'mostafa-meraji-X0yKdR_F9rM-unsplash.jpg', 'The Park Mall', 'Jl. Ir. Soekarno, Grogol', 'https://goo.gl/maps/e3hpzYiNNrYUnc4p9', '10:00:00', '22:00:00', '1'),
(13, 'zac-wolff-uuwA21vmI3o-unsplash.jpg', 'Solo Square', 'Jl. Slamet Riyadi No.451-455, Pajang', 'https://goo.gl/maps/wo1VXbHbV4tS1p3C7', '10:00:00', '22:00:00', '1'),
(14, 'patrick-tomasso-gMes5dNykus-unsplash.jpg', 'Solo Grand Mall', 'Jl. Slamet Riyadi No.273, Laweyan', 'https://goo.gl/maps/THmA3Y6UYz45FxdR9', '09:10:00', '10:10:00', '1'),
(15, 'hernan-lucio-gJFvHkUHdSI-unsplash.jpg', 'Pakuwon Mall', 'Jl. Ir. Soekarno, Dusun II, Sukoharjo', 'https://goo.gl/maps/dMHufpZocdjE5ySP9', '08:10:00', '22:10:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `emailUser` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `namaUser` varchar(128) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `emailUser`, `password`, `namaUser`, `role`) VALUES
(1, 'ilhhasap@gmail.com', 'e0923f7790b70e5f80373bb198957b4d', 'ilham tristadika', 'admin'),
(3, 'ray@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Ray', 'user'),
(4, 'stefan@gmail.com', '8dd2cdcec15a6f3a4ef80d18c27ed2c2', 'Stefanus Chandra', 'user'),
(6, 'cahyadi@gmail.com', '4cb971996c49a3b5a00951f14ad3abc6', 'cahyadi', 'admin'),
(7, 'prad@gmail.com', 'e4713347e6f0197c63cd9cc81bb61f65', 'prad', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `idWishlist` varchar(16) NOT NULL,
  `idMall` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brandInMall`
--
ALTER TABLE `brandInMall`
  ADD PRIMARY KEY (`idBrandMall`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`idBrand`);

--
-- Indexes for table `malls`
--
ALTER TABLE `malls`
  ADD PRIMARY KEY (`idMall`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `emailUser` (`emailUser`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`idWishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brandInMall`
--
ALTER TABLE `brandInMall`
  MODIFY `idBrandMall` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `idBrand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `malls`
--
ALTER TABLE `malls`
  MODIFY `idMall` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
