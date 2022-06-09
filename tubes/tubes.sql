-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 03:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi`, `gambar`, `icon`) VALUES
(1, 'Bubble Gum', 'In tincidunt lorem arcu, eu facilisis ipsum molestie quis. Pellentesque habitant morbi tristique sen', 'bubblegum.jpg', 'bubblegums.png'),
(2, 'Candy Bar', ' Sed molestie maximus ex eget malesuada. Curabitur quis tortor sit amet purus porttitor efficitur. I', 'candybar.jpg', 'candybars.png'),
(3, 'Candy Cane', 'Donec laoreet pellentesque volutpat. Duis luctus sapien eget finibus pharetra. Mauris vestibulum ips', 'candycane.jpg', 'candycanes.png'),
(4, 'Candy', 'Donec venenatis vulputate purus et tempus. Nullam malesuada odio eu varius pellentesque. Duis vulput', 'candy.jpg', 'candys.png'),
(5, 'Chocolate', 'Nam ac ligula non urna dignissim rutrum facilisis mattis augue. Suspendisse ut elit ut mauris ornare', 'chocolate.jpg', 'chocolates.png'),
(6, 'Gummy Bear', 'Morbi rhoncus erat in cursus posuere. Maecenas a dolor sit amet purus pretium cursus sed vitae nibh.', 'gummybear.jpg', 'gummybears.png'),
(7, 'Lolipop', 'Curabitur euismod odio vel ligula pulvinar dapibus. Ut volutpat lectus et libero efficitur posuere. ', 'lolipop.jpg', 'lolipops.png'),
(8, 'Other', 'Nullam a tellus maximus, volutpat elit ac, pulvinar velit. Aliquam ac dolor quis massa blandit trist', 'other.jpg', 'others.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `dekripsi` varchar(1000) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_barang`, `nama`, `dekripsi`, `harga`, `gambar`, `id_kategori`) VALUES
(2, 'Bigbabol', 'Cras luctus et mauris eget varius. Praesent non metus mattis, tincidunt sem a, malesuada lacus. Maecenas euismod eros sed nulla condimentum tincidunt. In hac habitasse platea dictumst. Nulla facilisi. Sed in tristique felis, quis maximus velit. Ut massa libero, hendrerit et tincidunt non, euismod ut velit. Vestibulum eros urna, egestas sit amet leo ut, scelerisque luctus magna. In at dapibus purus, id sollicitudin diam. Nulla ut elit sed lacus laoreet vehicula. Nullam rhoncus condimentum sapien, at blandit dolor tincidunt non. Vestibulum consectetur, velit non molestie suscipit, elit ante accumsan ante, eget sagittis nisl lectus non mauris. Duis velit quam, pretium id faucibus id, placerat sit amet erat. Morbi ut elementum lorem. Nulla turpis ipsum, vulputate vel sapien nec, dignissim sodales massa.\r\n ', 21000, '62a0f7f31f716bigbabol.jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `zip` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `alamat`, `kota`, `provinsi`, `zip`) VALUES
(1, 'admin', '$2y$10$qnqc1avDE/0vuoQv.B40Q.Qq8SFTL5VlHBhFc.FMnfCZILHAoQq2e', 'harisharyarevano@gmail.com', 'PERUMNAS BTJ BLOK J NO272', 'KABUPATEN KARAWANG', 'JAWA BARAT', '41361'),
(5, 'minna', '$2y$10$.01TQoe3HYtuciZae831OOmI7cUfGSqZRILt9dFJ4xufN27HwHtV2', 'dcintawati7@gmail.com', 'PERUMNAS BTJ BLOK J NO272', 'KABUPATEN KARAWANG', 'JAWA BARAT', '41361');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
