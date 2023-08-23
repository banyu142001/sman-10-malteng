-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 09:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `nuptk` varchar(50) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sekolah_induk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_pegawai`, `nuptk`, `pangkat`, `status`, `jenis_kelamin`, `tgl_lahir`, `sekolah_induk`) VALUES
(7, '2001020998876', 'BAYU GURIUM', '123456', 'KEPALA SEKOLAH', 'Honorer', 'Laki-Laki', '2023-08-08', 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bp`
--

CREATE TABLE `tb_bp` (
  `id_bp` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_bp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bp`
--

INSERT INTO `tb_bp` (`id_bp`, `nip`, `nama_bp`) VALUES
(6, '12347528392987', 'Putri Laitupa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelola_lab`
--

CREATE TABLE `tb_kelola_lab` (
  `id_kelola_lab` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_pengelola` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelola_lab`
--

INSERT INTO `tb_kelola_lab` (`id_kelola_lab`, `nip`, `nama_pengelola`) VALUES
(5, '20100209911', 'Sukma Wati');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelola_perpus`
--

CREATE TABLE `tb_kelola_perpus` (
  `id_perpus` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_kelola_perpus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelola_perpus`
--

INSERT INTO `tb_kelola_perpus` (`id_perpus`, `nip`, `nama_kelola_perpus`) VALUES
(2, '333445625328', 'Suci Nuraini');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepsek`
--

CREATE TABLE `tb_kepsek` (
  `id_kepsek` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_kepsek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kepsek`
--

INSERT INTO `tb_kepsek` (`id_kepsek`, `nip`, `nama_kepsek`) VALUES
(21, '20010099199', 'BAYU GURIUM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kesiswaan`
--

CREATE TABLE `tb_kesiswaan` (
  `id_kesiswaan` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_kesiswaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kesiswaan`
--

INSERT INTO `tb_kesiswaan` (`id_kesiswaan`, `nip`, `nama_kesiswaan`) VALUES
(12, '1234908282822', 'Anisa Safitry');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komite`
--

CREATE TABLE `tb_komite` (
  `id_komite` int(11) NOT NULL,
  `nama_komite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_komite`
--

INSERT INTO `tb_komite` (`id_komite`, `nama_komite`) VALUES
(15, 'ESAU FAUMASA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `id_kurikulum` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_kurikulum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kurikulum`
--

INSERT INTO `tb_kurikulum` (`id_kurikulum`, `nip`, `nama_kurikulum`) VALUES
(7, '334567896897', 'Gilang Dirga');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tu`
--

CREATE TABLE `tb_tu` (
  `id_tu` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_tu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tu`
--

INSERT INTO `tb_tu` (`id_tu`, `nip`, `nama_tu`) VALUES
(14, '20010078', 'Fikry Hatala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bp`
--
ALTER TABLE `tb_bp`
  ADD PRIMARY KEY (`id_bp`);

--
-- Indexes for table `tb_kelola_lab`
--
ALTER TABLE `tb_kelola_lab`
  ADD PRIMARY KEY (`id_kelola_lab`);

--
-- Indexes for table `tb_kelola_perpus`
--
ALTER TABLE `tb_kelola_perpus`
  ADD PRIMARY KEY (`id_perpus`);

--
-- Indexes for table `tb_kepsek`
--
ALTER TABLE `tb_kepsek`
  ADD PRIMARY KEY (`id_kepsek`);

--
-- Indexes for table `tb_kesiswaan`
--
ALTER TABLE `tb_kesiswaan`
  ADD PRIMARY KEY (`id_kesiswaan`);

--
-- Indexes for table `tb_komite`
--
ALTER TABLE `tb_komite`
  ADD PRIMARY KEY (`id_komite`);

--
-- Indexes for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tb_tu`
--
ALTER TABLE `tb_tu`
  ADD PRIMARY KEY (`id_tu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_bp`
--
ALTER TABLE `tb_bp`
  MODIFY `id_bp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kelola_lab`
--
ALTER TABLE `tb_kelola_lab`
  MODIFY `id_kelola_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kelola_perpus`
--
ALTER TABLE `tb_kelola_perpus`
  MODIFY `id_perpus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kepsek`
--
ALTER TABLE `tb_kepsek`
  MODIFY `id_kepsek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_kesiswaan`
--
ALTER TABLE `tb_kesiswaan`
  MODIFY `id_kesiswaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_komite`
--
ALTER TABLE `tb_komite`
  MODIFY `id_komite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_tu`
--
ALTER TABLE `tb_tu`
  MODIFY `id_tu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
