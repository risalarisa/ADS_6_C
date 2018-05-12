-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 08:32 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_laporan_barang`
--

CREATE TABLE `data_laporan_barang` (
  `id_laporan` int(11) NOT NULL,
  `jenisbarang` varchar(50) NOT NULL,
  `wanabarang` varchar(50) NOT NULL,
  `ukuranbarang` varchar(50) NOT NULL,
  `ciribarang` varchar(50) NOT NULL,
  `tanggalbarang` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` longblob NOT NULL,
  `namapelapor` varchar(25) NOT NULL,
  `noktp` int(11) NOT NULL,
  `notelpon` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_laporan_barang`
--

INSERT INTO `data_laporan_barang` (`id_laporan`, `jenisbarang`, `wanabarang`, `ukuranbarang`, `ciribarang`, `tanggalbarang`, `keterangan`, `foto`, `namapelapor`, `noktp`, `notelpon`, `alamat`) VALUES
(1, 'hp', 'm', '15x5 cm', 'hp xiomay', '2018-05-01', '-', '', 'samsul', 123, 123, 'jl kaki');

-- --------------------------------------------------------

--
-- Table structure for table `data_laporan_orang`
--

CREATE TABLE `data_laporan_orang` (
  `id_laporan` int(11) NOT NULL,
  `nama_orang` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `umur` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `alamatpelapor` varchar(255) NOT NULL,
  `tanggalhilang` date NOT NULL,
  `pakaian` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` longblob NOT NULL,
  `namapelapor` varchar(50) NOT NULL,
  `noktp` int(11) NOT NULL,
  `notelpon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_laporan_orang`
--

INSERT INTO `data_laporan_orang` (`id_laporan`, `nama_orang`, `jk`, `umur`, `tinggi`, `alamatpelapor`, `tanggalhilang`, `pakaian`, `keterangan`, `foto`, `namapelapor`, `noktp`, `notelpon`) VALUES
(3, 'paijo', 'laki', 55, 165, 'jalan kaki', '2018-05-08', 'kaos polo', '', '', 'samsul', 123, 123123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_laporan_barang`
--
ALTER TABLE `data_laporan_barang`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `data_laporan_orang`
--
ALTER TABLE `data_laporan_orang`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_laporan_barang`
--
ALTER TABLE `data_laporan_barang`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_laporan_orang`
--
ALTER TABLE `data_laporan_orang`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
