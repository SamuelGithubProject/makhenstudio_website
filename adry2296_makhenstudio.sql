-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2021 at 09:30 PM
-- Server version: 10.3.31-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adry2296_makhenstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataproject`
--

CREATE TABLE `dataproject` (
  `id_project` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_timpro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataproject`
--

INSERT INTO `dataproject` (`id_project`, `id_transaksi`, `id_timpro`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `datatim`
--

CREATE TABLE `datatim` (
  `id_timpro` int(11) NOT NULL,
  `Nama_pimpro` varchar(64) NOT NULL,
  `Nama_admin` varchar(64) NOT NULL,
  `Nama_photografer` varchar(64) NOT NULL,
  `Nama_editor` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datatim`
--

INSERT INTO `datatim` (`id_timpro`, `Nama_pimpro`, `Nama_admin`, `Nama_photografer`, `Nama_editor`) VALUES
(1, 'Hendy Kesuma', 'Santi Anisa Ginting', 'Yogi Mamanda Tarigan', 'Muhammad Aldi'),
(2, 'Hendy Kesuma', 'Santi Anisa Ginting', 'Ekel Brema', 'Muhammad Aldi');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Username` varchar(64) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Nik` varchar(64) DEFAULT NULL,
  `Nama` text DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `No_hp` varchar(64) DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `level_user` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Username`, `Password`, `Nik`, `Nama`, `Alamat`, `No_hp`, `Email`, `level_user`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL, NULL, 'Admin'),
('Kennedi Simbolon', '4bedd2ffb60c7cb9bcbf736a94b7d73b', '1211066909980002', 'Kennedi Simbolon', 'Samosir', '081360745775', 'tigorpurba9898@gmail.com', 'User'),
('tigorpurba', '184bbd8c84436919a7e50573b36a3c60', '1201040504550001', 'Tigor Purba', 'Jln Bunga Cempaka', '081360745775', 'tigorpurba9898@gmail.com', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Kode_paket` varchar(64) NOT NULL,
  `Nama_paket` varchar(64) NOT NULL,
  `Harga` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Kode_paket`, `Nama_paket`, `Harga`) VALUES
('1', 'Promo Akad', '1700000'),
('2', 'Promo Prewedding Studio', '1700000'),
('3', 'Promo Photo Studio', '650000'),
('4', 'Promo Prawedding Outdoor', '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `Kode_paket` int(11) NOT NULL,
  `Nama_paket` varchar(64) NOT NULL,
  `Alamat_cust` text NOT NULL,
  `Nama_cust` text NOT NULL,
  `Harga` varchar(64) NOT NULL,
  `Tanggal_pemesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `Kode_paket`, `Nama_paket`, `Alamat_cust`, `Nama_cust`, `Harga`, `Tanggal_pemesanan`) VALUES
(1, 1, 'Promo Akad', 'Samosir', 'Kennedi Simbolon', '1700000', '2021-07-16'),
(2, 4, 'Promo Prawedding Outdoor', 'Jln Bunga Cempaka', 'Tigor Purba', '2000000', '2021-07-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataproject`
--
ALTER TABLE `dataproject`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `datatim`
--
ALTER TABLE `datatim`
  ADD PRIMARY KEY (`id_timpro`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Nik` (`Nik`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Kode_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataproject`
--
ALTER TABLE `dataproject`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `datatim`
--
ALTER TABLE `datatim`
  MODIFY `id_timpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
