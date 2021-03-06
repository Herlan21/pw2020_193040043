-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 12:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040043`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `cover` varchar(20) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `harga` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `cover`, `judul_buku`, `pengarang`, `tahun_terbit`, `harga`) VALUES
(1, '11.jpg', 'sebelas,sebelas', 'Fiersa Besari', 2019, 'Rp.100.000'),
(2, 'koboykampus.jpg', 'Koboy Kampus', 'Pidi Baiq', 2019, 'Rp.250.000'),
(3, 'hilangarah.jpg', 'Hilang Arah', 'Sdavincii', 2018, 'Rp.95.000'),
(4, 'pisaubatu.jpg', 'Hanya Salju dan Pisau Batu', 'Pidi Baiq', 2010, 'Rp.85.000'),
(5, 'milea.jpg', 'Milea : Suara Dari Dilan', 'Pidi Baiq', 2016, 'Rp.105.000'),
(6, 'Dilan.jpg', 'Dilan', 'Pidi Baiq', 2014, 'Rp.100.000'),
(7, 'arahlangkah.jpg', 'Arah Langkah', 'Fiersa Besari', 2018, 'Rp.145.000'),
(8, 'gariswaktu.jpg', 'Garis Waktu', 'Fiersa Besari', 2016, 'Rp.130.000'),
(9, 'konspirasi.jpg', 'Konspirasi Alam Semesta', 'Fiersa Besari', 2017, 'Rp.150.000'),
(10, 'catatanjuang.jpg', 'Catatan Juang', 'Fiersa Besari', 2017, 'Rp.165.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
