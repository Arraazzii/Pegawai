-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 03:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tbl_about_me`
--

CREATE TABLE `tbl_about_me` (
  `nip` varchar(20) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about_me`
--

INSERT INTO `tbl_about_me` (`nip`, `about`) VALUES
('111', ''),
('1235', ''),
('1451', ''),
('18150', 'About Me...');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alamat`
--

CREATE TABLE `tbl_alamat` (
  `id_alamat` varchar(20) NOT NULL,
  `nama_jalan` text NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kota` text NOT NULL,
  `provinsi` text NOT NULL,
  `kode_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alamat`
--

INSERT INTO `tbl_alamat` (`id_alamat`, `nama_jalan`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `kode_pos`) VALUES
('ALM0001', 'JL. PONCOL NO. 42', 5, 7, 'CILANGKAP', 'TAPOS', 'DEPOK', 'JAWA BARAT', 16465),
('ALM0003', 'A', 1, 1, 'A', 'A', 'A', 'A', 1),
('ALM0004', '', 0, 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `total_cuti` varchar(10) NOT NULL,
  `cuti_tahunan` varchar(10) NOT NULL,
  `cuti_diambil` varchar(10) NOT NULL,
  `ambil_tahunan` varchar(10) NOT NULL,
  `cuti_belum_diambil` varchar(10) NOT NULL,
  `tahunan_blm_diambil` decimal(10,0) NOT NULL,
  `sisa_tahunan` int(10) NOT NULL,
  `sisa_cuti` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cuti`
--

INSERT INTO `tbl_cuti` (`id`, `nip`, `total_cuti`, `cuti_tahunan`, `cuti_diambil`, `ambil_tahunan`, `cuti_belum_diambil`, `tahunan_blm_diambil`, `sisa_tahunan`, `sisa_cuti`) VALUES
(1, '18150', '12', '12', '5', '5', '7', '7', 7, '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_agama`
--

CREATE TABLE `tbl_data_agama` (
  `kode_agama` varchar(20) NOT NULL,
  `nama_agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_agama`
--

INSERT INTO `tbl_data_agama` (`kode_agama`, `nama_agama`) VALUES
('AGM0001', 'ISLAM'),
('AGM0002', 'KRISTEN PROTESTAN'),
('AGM0003', 'KRISTEN KATHOLIK'),
('AGM0004', 'HINDU'),
('AGM0005', 'BUDHA'),
('AGM0006', 'KONGHUCU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_bank`
--

CREATE TABLE `tbl_data_bank` (
  `kode_bank` varchar(20) NOT NULL,
  `nama_bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_bank`
--

INSERT INTO `tbl_data_bank` (`kode_bank`, `nama_bank`) VALUES
('BNK0001', 'MANDIRI'),
('BNK0002', 'SYARIAH MANDIRI'),
('BNK0003', 'BCA'),
('BNK0004', 'BRI'),
('BNK0005', 'BNI'),
('BNK0006', 'CIMB NIAGA'),
('BNK0007', 'PERMATA BANK'),
('BNK0008', 'BCA SYARIAH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_divisi`
--

CREATE TABLE `tbl_data_divisi` (
  `kode_divisi` varchar(20) NOT NULL,
  `nama_divisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_divisi`
--

INSERT INTO `tbl_data_divisi` (`kode_divisi`, `nama_divisi`) VALUES
('DIV0001', 'OFFICE'),
('DIV0002', 'DIV PROVISIONING'),
('DIV0003', 'DIV COMMISIONING TEST'),
('DIV0004', 'DIV RADIO ALITA'),
('DIV0005', 'DIV LINTASARTA'),
('DIV0006', 'FREE AGENT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_email_pegawai`
--

CREATE TABLE `tbl_data_email_pegawai` (
  `nip_pegawai` varchar(20) NOT NULL,
  `email_pegawai` text NOT NULL,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_email_pegawai`
--

INSERT INTO `tbl_data_email_pegawai` (`nip_pegawai`, `email_pegawai`, `domain`) VALUES
('18150', 'ari.yanto', '@lrcom.co.id'),
('1451', 'aaa', '@lrcom.co.id'),
('111', 'a', '@lrcom.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_jabatan`
--

CREATE TABLE `tbl_data_jabatan` (
  `kode_jabatan` varchar(20) NOT NULL,
  `nama_jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_jabatan`
--

INSERT INTO `tbl_data_jabatan` (`kode_jabatan`, `nama_jabatan`) VALUES
('JBT0001', 'DIREKTUR UTAMA'),
('JBT0002', 'DIREKTUR'),
('JBT0003', 'HRD MANAGER'),
('JBT0004', 'LEADER ADMINISTRASI'),
('JBT0005', 'ADMINISTRASI'),
('JBT0006', 'PERSONAL MANAGER'),
('JBT0007', 'PROGRAMMER'),
('JBT0008', 'LEADER'),
('JBT0009', 'TEKNISI'),
('JBT0010', 'MARKETING'),
('JBT0011', 'OFFICE BOY'),
('JBT0012', 'FREE AGENT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_status_kawin`
--

CREATE TABLE `tbl_data_status_kawin` (
  `id_status_kawin` varchar(20) NOT NULL,
  `status_kawin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_status_kawin`
--

INSERT INTO `tbl_data_status_kawin` (`id_status_kawin`, `status_kawin`) VALUES
('STK0001', 'MENIKAH'),
('STK0002', 'BELUM MENIKAH'),
('STK0003', 'DUDA'),
('STK0004', 'JANDA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_status_pegawai`
--

CREATE TABLE `tbl_data_status_pegawai` (
  `kode_status` varchar(20) NOT NULL,
  `nama_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_status_pegawai`
--

INSERT INTO `tbl_data_status_pegawai` (`kode_status`, `nama_status`) VALUES
('STP0001', 'TETAP'),
('STP0002', 'KONTRAK'),
('STP0003', 'MAGANG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_cuti`
--

CREATE TABLE `tbl_detail_cuti` (
  `kode_cuti` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `total` varchar(10) NOT NULL,
  `keperluan` text NOT NULL,
  `ket` enum('Accept','Pending','Reject') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_cuti`
--

INSERT INTO `tbl_detail_cuti` (`kode_cuti`, `nip`, `dari`, `sampai`, `total`, `keperluan`, `ket`) VALUES
('01/CPLR/X/2018', '18150', '2018-10-30', '2018-11-11', '10', 'sendiri', 'Pending');

--
-- Triggers `tbl_detail_cuti`
--
DELIMITER $$
CREATE TRIGGER `cuti` AFTER UPDATE ON `tbl_detail_cuti` FOR EACH ROW BEGIN
IF(NEW.ket = 'Accept') THEN
	UPDATE tbl_cuti SET cuti_diambil = cuti_diambil + OLD.total, 
    sisa_cuti = sisa_cuti - OLD.total, tahunan_blm_diambil = cuti_tahunan - OLD.total,
    sisa_tahunan = cuti_tahunan - ambil_tahunan, 
    cuti_belum_diambil = total_cuti - cuti_diambil WHERE nip = OLD.nip;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pendidikan`
--

CREATE TABLE `tbl_detail_pendidikan` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jenjang` text NOT NULL,
  `nama_instansi` text NOT NULL,
  `tahun_ajaran` text NOT NULL,
  `masa_didik` text NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `ket_ijazah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_pendidikan`
--

INSERT INTO `tbl_detail_pendidikan` (`id`, `nip`, `jenjang`, `nama_instansi`, `tahun_ajaran`, `masa_didik`, `tahun_lulus`, `ket_ijazah`) VALUES
(4, '18150', 'SD', 'SD NEGERI SUKAMAJU 2', '2006 - 2012', '6', 2012, 'YA'),
(5, '18150', 'SMP', 'SMP NEGERI 7 DEPOK', '2012 - 2015', '3', 2015, 'YA'),
(6, '18150', 'SMA/K/Sederajat', 'SMK NEGERI 1 DEPOK', '2015 - 2018', '3', 2018, 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id_dokumen` varchar(20) NOT NULL,
  `no_ktp` text NOT NULL,
  `no_kk` text NOT NULL,
  `no_sim_a` text NOT NULL,
  `no_sim_c` text NOT NULL,
  `no_bpjs_kes` text NOT NULL,
  `no_bpjs_tk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id_dokumen`, `no_ktp`, `no_kk`, `no_sim_a`, `no_sim_c`, `no_bpjs_kes`, `no_bpjs_tk`) VALUES
('DKM0001', '3276100404000002', '3276102805140002', '0', '1221170600432', '0', '0'),
('DKM0003', '1', '1', '1', '1', '1', '1'),
('DKM0004', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `ktp` text NOT NULL,
  `kk` text NOT NULL,
  `sim_a` text NOT NULL,
  `sim_c` text NOT NULL,
  `ijazah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id_file`, `foto`, `ktp`, `kk`, `sim_a`, `sim_c`, `ijazah`) VALUES
('FLE0001', '_file/18150-foto-profil.jpg', '', '', '', '', ''),
('FLE0002', '', '', '', '', '', ''),
('FLE0004', '', '', '', '', '', ''),
('FLE0005', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` varchar(20) NOT NULL,
  `jabatan` text NOT NULL,
  `divisi` text NOT NULL,
  `no_npwp` text NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `jabatan`, `divisi`, `no_npwp`, `tgl_masuk`) VALUES
('JBT0001', 'JBT0007', 'DIV0001', '85.664.916.5-412.000', '2018-05-07'),
('JBT0003', 'JBT0012', 'DIV0001', '0', '2018-10-18'),
('JBT0004', 'Pilih Jabatan', 'Pilih Divisi', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_lahir` varchar(20) NOT NULL,
  `tmpt_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelahiran`
--

INSERT INTO `tbl_kelahiran` (`id_lahir`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`) VALUES
('KLH0001', 'BOGOR', '2000-04-04', 'LK', 'AGM0001'),
('KLH0003', 'A', '2018-10-17', 'LK', 'AGM0001'),
('KLH0004', '', '0000-00-00', 'LK', 'Pilih Agama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user`
--

CREATE TABLE `tbl_level_user` (
  `level` enum('SUPER ADMIN','ADMIN','USER') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`level`) VALUES
('SUPER ADMIN'),
('ADMIN'),
('USER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user_admin`
--

CREATE TABLE `tbl_level_user_admin` (
  `level` enum('USER') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user_admin`
--

INSERT INTO `tbl_level_user_admin` (`level`) VALUES
('USER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user_super`
--

CREATE TABLE `tbl_level_user_super` (
  `level` enum('ADMIN','USER') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user_super`
--

INSERT INTO `tbl_level_user_super` (`level`) VALUES
('ADMIN'),
('USER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masa`
--

CREATE TABLE `tbl_masa` (
  `masa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masa`
--

INSERT INTO `tbl_masa` (`masa`) VALUES
('BULAN'),
('HARI'),
('TAHUN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `judul`, `deskripsi`, `tanggal`) VALUES
(1, 'Test', 'Nyoba Doang', '2018-10-04'),
(2, 'Test Lagi', 'Nyoba Lagi', '2018-09-04'),
(3, 'kal', 'akls', '2018-10-05'),
(4, 'askd', 'aklsjd', '2018-10-01'),
(5, 'ue', 'kajd', '2018-10-02'),
(6, 'mxm', 'mxmx', '2018-10-02'),
(7, 'lla', 'aklsjdallala', '2018-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_no_telp`
--

CREATE TABLE `tbl_no_telp` (
  `id_telp` varchar(20) NOT NULL,
  `telp` text NOT NULL,
  `hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_no_telp`
--

INSERT INTO `tbl_no_telp` (`id_telp`, `telp`, `hp`) VALUES
('TLP0001', '(0__) ___-____', '081389061742'),
('TLP0003', '(0__) ___-____', '0'),
('TLP0004', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `nik` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `id_lahir` varchar(20) NOT NULL,
  `id_alamat` varchar(20) NOT NULL,
  `id_jabatan` varchar(20) NOT NULL,
  `id_telp` varchar(20) NOT NULL,
  `id_status` varchar(20) NOT NULL,
  `id_tabungan` varchar(20) NOT NULL,
  `id_dokumen` varchar(20) NOT NULL,
  `id_file` varchar(20) NOT NULL,
  `ket` enum('Non Aktif','Aktif') NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nik`, `nama`, `id_lahir`, `id_alamat`, `id_jabatan`, `id_telp`, `id_status`, `id_tabungan`, `id_dokumen`, `id_file`, `ket`, `time_update`) VALUES
('111', 'A', 'KLH0004', 'ALM0004', 'JBT0004', 'TLP0004', 'STS0004', 'TBG0004', 'DKM0004', 'FLE0005', 'Non Aktif', '2018-10-17 06:44:36'),
('1235', 'aaa', '', '', '', '', '', '', '', 'FLE0002', 'Non Aktif', '2018-10-09 07:00:13'),
('1451', 'TEST USER', 'KLH0003', 'ALM0003', 'JBT0003', 'TLP0003', 'STS0003', 'TBG0003', 'DKM0003', 'FLE0004', 'Non Aktif', '2018-10-30 07:28:25'),
('18150', 'ARI ARIYANTO', 'KLH0001', 'ALM0001', 'JBT0001', 'TLP0001', 'STS0001', 'TBG0001', 'DKM0001', 'FLE0001', 'Aktif', '2018-10-30 07:24:22');

--
-- Triggers `tbl_pegawai`
--
DELIMITER $$
CREATE TRIGGER `hapus_all` AFTER DELETE ON `tbl_pegawai` FOR EACH ROW BEGIN

DELETE FROM tbl_alamat WHERE id_alamat = OLD.id_alamat;

DELETE FROM tbl_kelahiran WHERE id_lahir = OLD.id_lahir;

DELETE FROM tbl_jabatan WHERE id_jabatan = OLD.id_jabatan;

DELETE FROM tbl_no_telp WHERE id_telp = OLD.id_telp;

DELETE FROM tbl_status WHERE id_status = OLD.id_status;

DELETE FROM tbl_tabungan WHERE id_tabungan = OLD.id_tabungan;

DELETE FROM tbl_dokumen WHERE id_dokumen = OLD.id_dokumen;

DELETE FROM tbl_file WHERE id_file = OLD.id_file;

DELETE FROM tbl_prestasi WHERE nip = OLD.nik;

DELETE FROM tbl_pengalaman_kerja WHERE nip = OLD.nik;

DELETE FROM tbl_skil WHERE nip = OLD.nik;

DELETE FROM tbl_skil_bahasa WHERE nip = OLD.nik;

DELETE FROM tbl_user_lr WHERE nip = OLD.nik;

DELETE FROM tbl_about_me WHERE nip = OLD.nik;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `jenjang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`jenjang`) VALUES
('D1'),
('D2'),
('D3'),
('S1'),
('S2'),
('S3'),
('SD'),
('SMA/K/Sederajat'),
('SMP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengalaman_kerja`
--

CREATE TABLE `tbl_pengalaman_kerja` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_instansi` text NOT NULL,
  `jabatan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `lama_kerja` text NOT NULL,
  `ket` enum('HARI','BULAN','TAHUN') NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengalaman_kerja`
--

INSERT INTO `tbl_pengalaman_kerja` (`id`, `nip`, `nama_instansi`, `jabatan`, `deskripsi`, `lama_kerja`, `ket`, `dari`, `sampai`) VALUES
(1, '18150', 'PT LUMBUNG RIANG COMMUNICATION', 'JUNIOR PROGRAMMER', 'Melakukan praktik kerja lapangan di PT. Lumbung Riang Communication dan menyelesaikan 1 buah project', '3', 'BULAN', '2017-01-03', '2017-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_prestasi` text NOT NULL,
  `tanggal` date NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id`, `nip`, `nama_prestasi`, `tanggal`, `ket`) VALUES
(1, '18150', 'GEA AWARD 2ND', '2017-11-12', 'CHAMPION OF 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skil`
--

CREATE TABLE `tbl_skil` (
  `id` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `skil` text NOT NULL,
  `kompetensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skil`
--

INSERT INTO `tbl_skil` (`id`, `nip`, `skil`, `kompetensi`) VALUES
(1, '18150', 'VISUAL BASIC', '90'),
(3, '18150', 'HTML, CSS, BOOTSTRAP', '85'),
(4, '18150', 'PHP, MYSQL, JAVASCRIPT', '70'),
(5, '18150', 'SYSTEM ANALYST, DATABASE', '70'),
(6, '18150', 'ANDROID PROGRAMMING, JAVA', '55'),
(7, '18150', 'PHOTOSHOP, CORELDRAW', '35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skil_bahasa`
--

CREATE TABLE `tbl_skil_bahasa` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `bahasa` text NOT NULL,
  `kompetensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skil_bahasa`
--

INSERT INTO `tbl_skil_bahasa` (`id`, `nip`, `bahasa`, `kompetensi`) VALUES
(1, '18150', 'INDONESIA', '95'),
(3, '18150', 'INGGRIS', '70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` varchar(20) NOT NULL,
  `status_peg` text NOT NULL,
  `sts_kawin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `status_peg`, `sts_kawin`) VALUES
('STS0001', 'STP0002', 'STK0002'),
('STS0003', 'STP0003', 'STK0002'),
('STS0004', 'Status Pegawai', 'Status Kawin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tabungan`
--

CREATE TABLE `tbl_tabungan` (
  `id_tabungan` varchar(20) NOT NULL,
  `bank` text NOT NULL,
  `no_rekening` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tabungan`
--

INSERT INTO `tbl_tabungan` (`id_tabungan`, `bank`, `no_rekening`) VALUES
('TBG0001', 'BNK0001', '1570006124581'),
('TBG0003', 'BNK0001', '0'),
('TBG0004', 'Nama Bank', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_lr`
--

CREATE TABLE `tbl_user_lr` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` enum('SUPER ADMIN','ADMIN','USER') NOT NULL,
  `kode_approve` int(5) NOT NULL,
  `status` int(5) NOT NULL,
  `w_daftar` datetime NOT NULL,
  `w_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_lr`
--

INSERT INTO `tbl_user_lr` (`id`, `nip`, `password`, `level_user`, `kode_approve`, `status`, `w_daftar`, `w_login`) VALUES
(2, '18150', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 1, 1, '2018-10-03 11:19:19', '2018-11-01 14:55:05'),
(3, '1235', '47bce5c74f589f4867dbd57e9ca9f808', 'SUPER ADMIN', 1, 1, '2018-10-09 00:00:00', '2018-10-17 13:43:04'),
(4, '1451', '47bce5c74f589f4867dbd57e9ca9f808', 'USER', 1, 1, '2018-10-17 08:59:50', '2018-11-01 14:57:53'),
(5, '111', '0cc175b9c0f1b6a831c399e269772661', 'USER', 1, 1, '2018-10-17 13:45:30', '2018-10-17 13:46:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alamat`
--
ALTER TABLE `tbl_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data_agama`
--
ALTER TABLE `tbl_data_agama`
  ADD PRIMARY KEY (`kode_agama`);

--
-- Indexes for table `tbl_data_bank`
--
ALTER TABLE `tbl_data_bank`
  ADD PRIMARY KEY (`kode_bank`);

--
-- Indexes for table `tbl_data_divisi`
--
ALTER TABLE `tbl_data_divisi`
  ADD PRIMARY KEY (`kode_divisi`);

--
-- Indexes for table `tbl_data_jabatan`
--
ALTER TABLE `tbl_data_jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indexes for table `tbl_data_status_kawin`
--
ALTER TABLE `tbl_data_status_kawin`
  ADD PRIMARY KEY (`id_status_kawin`);

--
-- Indexes for table `tbl_data_status_pegawai`
--
ALTER TABLE `tbl_data_status_pegawai`
  ADD PRIMARY KEY (`kode_status`);

--
-- Indexes for table `tbl_detail_cuti`
--
ALTER TABLE `tbl_detail_cuti`
  ADD PRIMARY KEY (`kode_cuti`);

--
-- Indexes for table `tbl_detail_pendidikan`
--
ALTER TABLE `tbl_detail_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id_lahir`);

--
-- Indexes for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `tbl_level_user_admin`
--
ALTER TABLE `tbl_level_user_admin`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `tbl_level_user_super`
--
ALTER TABLE `tbl_level_user_super`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `tbl_masa`
--
ALTER TABLE `tbl_masa`
  ADD PRIMARY KEY (`masa`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_no_telp`
--
ALTER TABLE `tbl_no_telp`
  ADD PRIMARY KEY (`id_telp`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`jenjang`);

--
-- Indexes for table `tbl_pengalaman_kerja`
--
ALTER TABLE `tbl_pengalaman_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_skil`
--
ALTER TABLE `tbl_skil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_skil_bahasa`
--
ALTER TABLE `tbl_skil_bahasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_tabungan`
--
ALTER TABLE `tbl_tabungan`
  ADD PRIMARY KEY (`id_tabungan`);

--
-- Indexes for table `tbl_user_lr`
--
ALTER TABLE `tbl_user_lr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_detail_pendidikan`
--
ALTER TABLE `tbl_detail_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_pengalaman_kerja`
--
ALTER TABLE `tbl_pengalaman_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_skil`
--
ALTER TABLE `tbl_skil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_skil_bahasa`
--
ALTER TABLE `tbl_skil_bahasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user_lr`
--
ALTER TABLE `tbl_user_lr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `cuti` ON SCHEDULE EVERY 12 MONTH STARTS '2018-10-31 14:46:00' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'cuti' DO UPDATE tbl_cuti SET total_cuti = OLD.total_cuti + OLD.cuti_tahunan, cuti_tahunan = 12, cuti_diambil = OLD.cuti_ciambil + OLD.ambil_tahunan, ambil_tahunan = 0, cuti_blm_diambil = OLD.cuti_blm_diambil + OLD.tahunan_blm_diambil, tahunan_blm_diambil = 12, sisa_cuti = OLD.sisa_cuti + OLD.sisa_tahunan, sisa_tahunan = 12$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
