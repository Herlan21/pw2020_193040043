-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 03:59 PM
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
-- Database: `pw_193040043`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nrp` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nrp`, `nama`, `jurusan`, `email`, `foto`) VALUES
(2, '193040042', 'Suhendani', 'Teknik Mesin', '193040042@mail.unpas.ac.id', '193040042.jpg'),
(3, '193040052', 'Adinda Fadhil Patria', 'Perencanaan Wilayah dan Kota', '193040052@mail.unpas.ac.id', '193040052.jpg'),
(4, '193040055', 'Devi Ayu Lestari', 'Teknologi Pangan', '193040055@mail.unpas.ac.id', '193040055.jpg'),
(5, '193040054', 'Aldi Ageng Tri Seftian', 'Teknik Lingkungan', '193040054@mail.unpas.ac.id', '193040054.jpg'),
(6, '193040056', 'Sahid Jafar', 'Teknik Industri', '193040056@mail.unpas.ac.id', '193040056.jpg'),
(7, '193040046', 'Aji Nuansa Sengarie', 'Teknik Informatika', '193040046@mail.unpas.ac.id', '193040046.jpg'),
(8, '193040062', 'Rifki Gema Fauzi', 'Teknologi Pangan', '193040062@mail.unpas.ac.id', '193040062.jpg'),
(9, '193040050', 'Salsabila Nada Adzani', 'Teknik Mesin', '193040050@mail.unpas.ac.id', '193040050.jpg'),
(10, '193040073', 'Hanan Fakhrul Hakim', 'Perencanaan Wilayah dan Kota', '193040073@mail.unpas.ac.id', '193040073.jpg'),
(11, '193040043', 'Herlan Nurachman', 'Teknik Informatika', '193040043@mail.unpas.ac.id', '193040043.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
