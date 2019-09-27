-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 06:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keanggotaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nik` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nik`, `password`, `level`) VALUES
(198878767, 'fasi', ''),
(199868999, 'fajar', ''),
(2147483647, 'doni', '');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_pengguna`
--

CREATE TABLE `mapping_pengguna` (
  `nik` int(20) NOT NULL,
  `id_posisi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping_pengguna`
--

INSERT INTO `mapping_pengguna` (`nik`, `id_posisi`) VALUES
(198878767, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nik` int(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_posisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nik`, `nama`, `ttl`, `alamat`, `provinsi`, `email`, `password`, `id_posisi`) VALUES
(1, 'marliyana', '2019-07-03', 'surabaya', 'Jawa Timur', 'marliyana809@gmail.com', '12345', 0),
(4567, 'rth', '0000-00-00', 'fghj', 'fghjk', 'ghjk', 'fghj', 0),
(80978786, 'gfhm', '2019-07-09', 'ghj', 'bn', 'bnm', '', 0),
(198878767, 'faris', '0000-00-00', 'surabaya', 'Jawa Timur', 'faris@gmail.com', 'fasi', 2),
(199868999, 'm.fajar', '0000-00-00', 'Jakarta', 'Jawa Timur', 'fajar90@gmail.com', 'fajar', 2),
(2147483647, 'doni saputra', '0000-00-00', 'surabaya', 'Jawa Timur', 'ma', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `portopolio`
--

CREATE TABLE `portopolio` (
  `nik` int(15) NOT NULL,
  `bidang_keahlian` varchar(100) NOT NULL,
  `riwayat_pelatihan` text NOT NULL,
  `sertifikat_dimiliki` text NOT NULL,
  `file` varchar(10) NOT NULL,
  `id_posisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portopolio`
--

INSERT INTO `portopolio` (`nik`, `bidang_keahlian`, `riwayat_pelatihan`, `sertifikat_dimiliki`, `file`, `id_posisi`) VALUES
(198878767, 'Informatika', 'DTS', 'DTS', '', 2),
(199868999, 'IT', 'DTS', 'DTS', '', 0),
(2147483647, 'TI', 'DTSS', 'STD', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id_posisi` int(30) NOT NULL,
  `nama_posisi` enum('admin','ketua','sekretariat','anggota') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `nama_posisi`) VALUES
(1, 'admin'),
(2, 'anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `mapping_pengguna`
--
ALTER TABLE `mapping_pengguna`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `portopolio`
--
ALTER TABLE `portopolio`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `nik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `nik` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id_posisi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pengguna` (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
