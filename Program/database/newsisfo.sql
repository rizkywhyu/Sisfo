-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 03:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsisfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nama_client` varchar(300) NOT NULL,
  `alamat_client` varchar(300) NOT NULL,
  `tlp_client` varchar(300) NOT NULL,
  `username_client` varchar(300) NOT NULL,
  `password_client` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nama_client`, `alamat_client`, `tlp_client`, `username_client`, `password_client`) VALUES
(8, 'acil', 'ganteng', '42', 'da', 'da');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(300) NOT NULL,
  `alamat_pegawai` varchar(300) NOT NULL,
  `tlp_pegawai` varchar(300) NOT NULL,
  `username_pegawai` varchar(300) NOT NULL,
  `password_pegawai` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_pegawai`, `alamat_pegawai`, `tlp_pegawai`, `username_pegawai`, `password_pegawai`) VALUES
(1, 'Rochi', 'rr', '082134234231', 'fajar', 'fajar123'),
(4, 'Roci', 'rochi', '1231231', 'rochateer', 'rochi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `pengirim_nama` varchar(300) NOT NULL,
  `pengirim_alamat` varchar(300) NOT NULL,
  `pengirim_notlp` varchar(300) NOT NULL,
  `penerima_nama` varchar(300) NOT NULL,
  `penerima_alamat` varchar(300) NOT NULL,
  `penerima_notlp` varchar(300) NOT NULL,
  `berat_barang` varchar(300) NOT NULL,
  `biaya` varchar(300) NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `id_transaksi` varchar(300) NOT NULL,
  `jenis_pengiriman` varchar(300) NOT NULL,
  `tipe_pengirim` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `pengirim_nama`, `pengirim_alamat`, `pengirim_notlp`, `penerima_nama`, `penerima_alamat`, `penerima_notlp`, `berat_barang`, `biaya`, `tanggal_pengiriman`, `id_transaksi`, `jenis_pengiriman`, `tipe_pengirim`) VALUES
(6, 'PT Rajawali', 'bandung', '123123', '1231231', '12312412', '124124', '124124', '124124', '0000-00-00', '123123', '124124', 'client'),
(7, 'ahmad', 'bojongsoang', '12', 'aa', 'aa', '12', '123', '2460000', '2017-05-08', '907', 'Cepat', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_username` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_role` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_username`, `user_password`, `user_role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'fajar', 'fajar123', 'pegawai'),
(3, 'rochateer', '123123', 'client'),
(5, 'qweqwrqwr', 'lolololo', 'client'),
(6, 'dada', 'dada', 'client'),
(7, 'fasfa', 'fafsafas', 'client'),
(8, 'da', 'da', 'client'),
(9, 'ghfg', 'gd', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
