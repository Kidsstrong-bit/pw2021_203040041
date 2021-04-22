-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 12:58 AM
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
-- Database: `pw_tubes_203040041`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `foto`, `nama`, `detail`, `size`, `harga`, `stok`) VALUES
(1, 'nagri.jpg', 'NAGRI Enter Galactic Night Glo', '100% Heavy Weight Cotton, Super soft and smooth hand-feel\r\nMachine Wash / Hand Wash Recommend, Resis', 'S, M, L, XL, XXL', 7200000, 10),
(2, 'nirvana.jpg', 'Nirvana in Utero Hoodie Rock B', '100% high-quality cotton will bring you all-day comfort.\r\nIf you like rock band culture, especially ', 'S, M, L, XL, XXL', 4400000, 3),
(3, 'riot1.jpg', 'Riot Society Men\'s Graphic or ', 'Machine Wash\r\n50% Polyester / 50% Cotton\r\nFeel: Comfort\r\nMachine Washable\r\nSatin neck label zig-zag ', 'S, M, L, XL, XXL', 8600000, 4),
(4, 'riot2.jpg', 'Riot Society Men\'s Graphic or ', '50% Polyester / 50% Cotton\r\nFeel: Comfort\r\nMachine Washable\r\nSatin neck label zig-zag stitch behind ', 'S, M, L, XL, XXL', 8600000, 5),
(5, 'fabric.jpg', 'Fabric of the Universe Techwea', 'Fabric of the Universe signature techwear graphics\r\n100% Superior cotton outer 9 oz thick\r\n80% Cotto', 'S, M, L, XL, XXL', 8600000, 6),
(6, 'kanye.jpg', 'Kanye Holy Sweatshirt Men Crew', 'Comfortable Material:These crewneck sweatshirts feature the comfortable cotton and polyester fabric.', 'S, M, L, XL, XXL', 4700000, 26),
(7, 'lucky.jpg', 'NAGRI Kanye Lucky Me I See Gho', '100% HEAVYWEIGHT COTTON-Made from a dual blend of 100% heavyweight cotton,is ideal for that tailgate', 'S, M, L, XL, XXL', 5900000, 7),
(8, 'volcom.jpg', 'Volcom Men\'s Deadly Stones Hoo', '80% Cotton, 20% Polyester\r\nImported\r\nPull On closure\r\nMachine Wash\r\nModern fit\r\nPrinted stripe neck ', 'S, M, L, XL, XXL', 8600000, 9),
(9, 'skate.jfif', 'Skateboarding Gift for Skaters', 'Solid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotto', 'S, M, L, XL, XXL', 500000, 12),
(10, 'champion.jpg', 'Champion LIFE Men\'s Reverse We', '82% Cotton, 18% Polyester; Oxford Gray: 77% Cotton, 23% Polyester; Silver Gray: 80% Cotton, 20% Poly', 'S, M, L, XL, XXL', 8600000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
