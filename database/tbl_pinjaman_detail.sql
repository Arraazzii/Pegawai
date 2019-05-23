-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 05:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjaman_detail`
--

CREATE TABLE `tbl_pinjaman_detail` (
  `id` int(11) NOT NULL,
  `kode_cicilan` varchar(30) NOT NULL,
  `besaran` int(11) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `keterangan` enum('BELUM LUNAS','LUNAS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjaman_detail`
--

INSERT INTO `tbl_pinjaman_detail` (`id`, `kode_cicilan`, `besaran`, `tgl_bayar`, `keterangan`) VALUES
(0, '', 0, '2019-03-30 23:47:37', 'BELUM LUNAS'),
(1, 'CCL00001-2019', 300000, '2019-03-29 00:00:00', 'LUNAS'),
(2, 'CCL00001-2019', 300000, '2019-03-30 23:47:37', 'LUNAS'),
(3, 'CCL00001-2019', 300000, '2019-03-25 10:53:43', 'LUNAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pinjaman_detail`
--
ALTER TABLE `tbl_pinjaman_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pinjaman_detail`
--
ALTER TABLE `tbl_pinjaman_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
