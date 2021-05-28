-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 07:51 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_203040041`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `size` varchar(80) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `stok` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `gambar`, `nama`, `detail`, `size`, `harga`, `stok`) VALUES
(1, 'hoodie1.jpg', 'Metallica Justice Neon Charcoal Hoodie', 'Color: Charcoal\r\n50% Cotton, 50% Polyester\r\nMade in the USA and Imported\r\nPull On closure\r\nMachine Wash\r\nDouble-lined hood with color-matched drawcord\r\nPouch pocket\r\nAir jet yarn for softer feel and reduced pilling\r\nOfficial Metallica merchandise', 'S, M, L, XL, XXL', '$59.99', '8'),
(5, 'hoodie2.jpg', 'Misfits Splatter Pullover Hoodie', 'Solid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotton, 50% Polyester\r\nMisfits are New Jersey\'s legendary progenitors of horror punk!', 'S, M, L, XL, XXL', '$46.99', '16'),
(6, 'hoodie3.jpg', 'Death Metal Rainbow Funny Grim Reaper Unicorn Hoodie', 'Solid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotton, 50% Polyester\r\nUnicorn Death Metal Hoodie as Grim Reaper Halloween Costume Apparel.\r\nThis Rainbow Death Reaper Skeleton Unicorn Pullover Hoodie makes a ', 'S, M, L, XL, XXL', '$31.99', '10'),
(7, 'hoodie4.jpg', 'Skeleton Hand Red Rose Flower Pullover Hoodie', 'Solid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotton, 50% Polyester\r\nImported\r\nMachine wash cold with like colors, dry low heat', 'S, M, L, XL, XXL', '$31.99', '20'),
(8, 'hoodie5.jpg', 'Official Slipknot The Wheel Unisex Graphic Hoodie', 'Solid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotton, 50% Polyester\r\nImported\r\nMachine wash cold with like colors, dry low heat\r\nAuthentic Licensed Bravado Slipknot Merchandise\r\nBravado International Group,', 'S, M, L, XXL', '$39.99', '18'),
(9, 'hoodie6.jpg', 'Riot Society Kids Boys Graphic Hoodie Hooded Sweatshirt', 'Machine Wash\r\n50% Polyester / 50% Cotton\r\nFeel: Comfort\r\nMachine Washable\r\nSatin neck label zig-zag stitch behind hoodie', 'S, M, L, XL, XXL', '$40.00', '15'),
(10, 'hoodie7.jpg', 'Legendary Whitetails Mens Maplewood Hooded Shirt', '100% Cotton\r\nImported\r\nPolyester lining\r\nButton closure\r\nMachine Wash\r\nQuilted satin lined body and sleeves\r\n130 gm of poly-fill insulation\r\nZippered entry placket and double lined fleece hood\r\nConvenient side hand warming pockets\r\nLegendary buttons and S', 'S, M, L, XL, XXL', '$75.89', '20'),
(11, 'hoodie8.jpg', 'Nirvana Hoodie Yellow Smiley Band Logo Official', 'Color: Charcoal Grey\r\n100% Cotton\r\nMachine Wash\r\n100% Official\r\nLong Sleeve\r\nUnisex Hoodie\r\nMachine Washable\r\nQuality Item', 'S, M, L, XL, XXL', '$46.69', '9'),
(22, 'hoodie9.jpg', 'Kanye Sweatshirts Lucky Me I See Ghosts Hoodie', '100% HEAVYWEIGHT COTTON.\r\nIt goes very well with any pants.\r\nHigh-quality screen printing technology coupled with a unique puff effect will make you unique.\r\nNo matter when and where you are, this HIP-POP style kanye hoodie will make you the coolest one.', 'S, M, L, XL, XXL', '$48.99', '16'),
(23, 'hoodie10.jpg', 'Fabric of the Universe Techwear Graphic Cyberpunk', 'Machine Wash\r\nFabric of the Universe signature techwear graphics\r\n100% Superior cotton outer 9 oz thick\r\n80% Cotton 20% Poly blend fleece inner\r\nMachine wash cold to prevent shrinkage\r\nNormal US sizing / Slightly tapered fit', 'S, M, L, XL, XXL', '$59.50', '6'),
(24, 'hoodie11.jpg', 'Liquid Blue Men\'s Pink Floyd Dark Side Lander Prism', '80% Cotton, 20% Polyester\r\nMade in the USA or Imported\r\nMachine Wash\r\nOfficially licensed pink Floyd merchandise\r\nTaped shoulders for strength and comfort', 'S, M, L, XL, XXL', '$44.95', '12'),
(25, 'hoodie12.jpg', 'PASOK Men\'s Denim Distressed Jacket Casual', '65% Cotton, 35% Polyester\r\nImported\r\nButton closure\r\nHand Wash Only\r\nThis blue distressed denim ripped jeans jacket for men is the great boyfriend gifts choice.\r\n', 'S, M, L, XL, XXL', '$37.99', '18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'gilang', '$2y$10$fZuKwIydR97hafSEb2vj7e/pc.Enq4LnwFFNG4gT91PsWy46XDkM.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
