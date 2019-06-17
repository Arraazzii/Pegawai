-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 05:20 AM
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
-- Table structure for table `tbl_absen`
--

CREATE TABLE `tbl_absen` (
  `id_absen` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `tgl_absen` date NOT NULL,
  `check_in` datetime DEFAULT NULL,
  `keterangan_ci` text NOT NULL,
  `geotag_ci` text NOT NULL,
  `check_out` datetime DEFAULT NULL,
  `keterangan_co` text NOT NULL,
  `geotag_co` text NOT NULL,
  `status` enum('Hadir','Terlambat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absen`
--

INSERT INTO `tbl_absen` (`id_absen`, `nip`, `tgl_absen`, `check_in`, `keterangan_ci`, `geotag_ci`, `check_out`, `keterangan_co`, `geotag_co`, `status`) VALUES
(1, '18150', '2019-06-13', '2019-06-13 09:52:05', '', '-6.212736, 106.875180', '2019-06-14 15:41:34', '131231', '-6.212736, 106.875180', 'Terlambat'),
(2, '111', '2019-06-14', '2019-06-14 08:00:00', '', '-6.212736, 106.875180', '2019-06-14 15:39:22', '', '-6.212736, 106.875180', 'Hadir'),
(3, '18150', '2019-06-17', '2019-06-17 09:59:56', '', '-6.2053671, 106.87685300000001', NULL, '', '', 'Terlambat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
