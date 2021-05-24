-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 08:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babycare1`
--

-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

CREATE TABLE `kantor` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `visi` varchar(50) DEFAULT NULL,
  `misi` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id`, `nama`, `email`, `username`, `alamat`, `telepon`, `kelurahan`, `kecamatan`, `kota`, `visi`, `misi`, `deskripsi`, `verification_key`, `is_email_verified`) VALUES
(33, 'ade', 'samsulalyusa@gmail.com', 'sam', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '32b4bbf26e7a6640c753766c975472d9', 'no'),
(34, 'ade', 'samsulalyusa@gmail.com', 'sam', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'b74ef57d7fdff21cfc5a99b5ea0a74ed', 'no'),
(35, 'ade', 'samsulalyusa@gmail.com', 'sam', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '93a4747473f117d354b51df7240cd7aa', 'no'),
(36, 'ade', 'samsulalyusa@gmail.com', 'sam', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'cf28e80502a55066551b020c36a74641', 'no'),
(37, 'ade', 'samsulalyusa@gmail.com', 'sam', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '338e45fd003e190d4a73f7c70c1bc9ed', 'no'),
(38, 'ade', 'samsulalyusa@gmail.com', 'sam', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '66006cb66f66ede939b1028418cd3342', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_transaksi`
--

CREATE TABLE `laporan_transaksi` (
  `laporan_id` int(11) DEFAULT NULL,
  `nama_pengasuh` int(11) DEFAULT NULL,
  `atasnama` int(11) DEFAULT NULL,
  `lama_kontrak` int(11) DEFAULT NULL,
  `Kolom 5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `telepon`, `email`, `alamat`) VALUES
(2, 'lisa marsel', '087543772846', 'lisa@gmail.com', 'sby'),
(3, 'fiva', '089746652673', 'fiva@gmail.com', 'mlg'),
(4, 'mey ndita', '081346263776', 'mey@gmail.com', 'pagak'),
(5, 'andika', '08963572541', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengasuh`
--

CREATE TABLE `pengasuh` (
  `id` int(11) NOT NULL,
  `nama_pengasuh` varchar(30) NOT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `nik` varchar(30) NOT NULL,
  `foto` varchar(20) DEFAULT 'default.png',
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengasuh`
--

INSERT INTO `pengasuh` (`id`, `nama_pengasuh`, `alamat`, `telepon`, `email`, `kategori`, `nik`, `foto`, `tgl_lahir`, `agama`, `status`, `pendidikan`, `username`, `password`, `date_created`) VALUES
(1, 'fiva', NULL, NULL, 'fivaayu77@gmail.com', NULL, '1324526', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Mey Ndita', NULL, NULL, 'mey@gmail.com', NULL, '434571287398', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Ayu Lestari', NULL, NULL, 'ayu@gmail.com', NULL, '7348989028', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'gduj', NULL, NULL, 'bshh@gmail.com', NULL, '56123798', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'gfh', NULL, NULL, 'gdru@gmail.com', NULL, '0388732', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'samsul', NULL, NULL, 'samsul@gmail.com', NULL, '4276364889', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Dina', NULL, NULL, 'dina@gamil.com', NULL, '73487809239', 'default.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Lisa', NULL, NULL, 'lisa@gmail.com', NULL, '53719036458627339', 'default.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Prawesti', NULL, NULL, 'prawesti@gmail.com', NULL, '2663874048327861', 'default.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama_pengasuh` varchar(30) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `token_pengasuh`
--

CREATE TABLE `token_pengasuh` (
  `id_token` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL DEFAULT 'default.png',
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `is_active` enum('aktif','pasif') NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `foto`, `nama_lengkap`, `alamat`, `email`, `level`, `id`, `is_active`, `date_created`) VALUES
(1, 'admin', 'admin', 'default.png', 'hahaha', 'surabaya', 'haha@gmail.com', 'admin', 1, 'aktif', ''),
(2, 'admin2', 'admin2', 'default.png', 'lala', 'jombang', 'lala@gmail.com', 'admin', 2, 'aktif', ''),
(3, 'owner', 'owner', 'default.png', 'ayu', 'malang', 'ayu@gmail.com', 'owner', NULL, 'aktif', ''),
(4, 'superadmin', 'superadmin', 'IMG_20190605_071814.', 'fiva ayu lestari', 'surabaya', 'fiva@gmail.com', 'superadmin', 1, 'aktif', ''),
(5, 'superadmin2', 'superadmin2', 'default.png', 'fivaa', 'mlg', 'fv@gmail.com', 'superadmin', 2, 'aktif', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengasuh`
--
ALTER TABLE `pengasuh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `token_pengasuh`
--
ALTER TABLE `token_pengasuh`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengasuh`
--
ALTER TABLE `pengasuh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `token_pengasuh`
--
ALTER TABLE `token_pengasuh`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
