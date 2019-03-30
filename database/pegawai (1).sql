-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 04:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pega`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tmpt_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat_jalan` varchar(200) NOT NULL,
  `rt` text NOT NULL,
  `rw` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kode_pos` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_bag` varchar(4) NOT NULL,
  `level_user` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tlpn` text NOT NULL,
  `nohp` text NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `id_agm` int(3) NOT NULL,
  `kdpndidik` int(3) NOT NULL,
  `noktp` varchar(25) NOT NULL,
  `nojamsos` varchar(25) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `id_bank` int(15) NOT NULL,
  `kdstatusk` int(3) NOT NULL,
  `kdstatusp` int(3) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nosimc` varchar(30) NOT NULL,
  `nosima` varchar(30) NOT NULL,
  `nokk` varchar(25) NOT NULL,
  `bpjskes` varchar(30) NOT NULL,
  `bpjstk` varchar(30) NOT NULL,
  `filefoto` varchar(100) NOT NULL,
  `filektp` varchar(100) NOT NULL,
  `filekk` varchar(100) NOT NULL,
  `fileijazah` varchar(100) NOT NULL,
  `filesima` varchar(100) NOT NULL,
  `filesimc` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat_jalan`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `tgl_masuk`, `id_bag`, `level_user`, `foto`, `tlpn`, `nohp`, `npwp`, `id_agm`, `kdpndidik`, `noktp`, `nojamsos`, `norek`, `id_bank`, `kdstatusk`, `kdstatusp`, `time_update`, `nosimc`, `nosima`, `nokk`, `bpjskes`, `bpjstk`, `filefoto`, `filektp`, `filekk`, `fileijazah`, `filesima`, `filesimc`) VALUES
(1, '18150', 'ARI ARIYANTO', 'BOGOR', '2000-04-04', 'L', 'Jl. Cilangkap', '005', '007', 'Cilangkap', 'Tapos', 'Depok', '16465', '2018-05-07', 'B006', 5, '/pega/assets/avatars/avatar5.png', '', '081389061742', '', 1, 3, '3276100404000002', '0', '1570006124581', 3, 1, 2, '2018-06-08 08:03:16', '1221170600432', '', '3276102805140002', '', '', '', '', '', '', '', ''),
(2, '12001', 'ERLAN SUTRAJAT', 'BANDUNG', '1965-07-11', 'L', 'Jl. Camar Blok MD No 1', '05', '05', 'Pasir Gunung Selatan', 'Cimanggis', 'Depok', '16951', '2012-04-15', 'B001', 5, '/pega/assets/avatars/avatar5.png', '(021) 872-5948', '08551006100', '14.254.119.2-412.000', 1, 4, '3276021107650001', '0', '60007215852', 3, 2, 1, '2018-10-29 09:16:21', '650712211191', '650712212034', '3276020710070201', '0001800633429', '14037496966', '', '', '', '', '', ''),
(3, '12003', 'RISKA ADRINI', 'JAKARTA', '1991-11-15', 'P', 'Jl. Camar', '05', '05', 'Pasir Gunung Selatan', 'Cimanggis', 'Depok', '16951', '0000-11-30', 'B002', 5, '/pega/assets/avatars/avatar5.png', '(021) 872-5948', '08569809314', '54.292.579.7-412.000', 1, 5, '3276025511910003', '0', '1570002505866', 3, 2, 1, '2018-10-29 09:47:12', '', '911112210024', '3276020809150026', '0001800653152', '14037497253', '', '', '', '', '', ''),
(4, '12017', 'IRWAN SETIAWAN', 'JAKARTA', '1986-08-13', 'L', 'jalan almubarok III no 75', '007', '010', 'Cipulir', 'Kebayoran Lama', 'Jakarta Selatan', '12230', '2012-10-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '085885778797', '54.293.089.6-013.000', 1, 4, '3174051308860011', '0', '9000011749182', 3, 2, 1, '2018-10-29 09:23:49', '860812054186', '1220170707438', '3174052501111017', '0001609066708', '14037497311', '', '', '', '', '', ''),
(5, '13049', 'AGNES EKA LESTIA', 'JAKARTA', '1994-08-16', 'P', 'Jalan Haji Dalim', '06', '02', 'Pulogadung', 'Pulogadung', 'Jakarta Timur', '13260', '2013-09-02', 'B004', 5, '/pega/assets/avatars/avatar5.png', '', '085891480281', '66.038.781.2-003.000', 1, 3, '3175025608940004', '0', '9000011393288', 3, 1, 1, '2018-10-29 09:24:28', '', '', '3175021901094855', '0001324750184', '14037497196', '', '', '', '', '', ''),
(6, '13057', 'TONI', 'CIREBON', '1989-09-12', 'L', 'Jl. Warujaya', '07', '22', 'Mekarjaya', 'Sukmajaya', 'Depok', '0000', '2013-10-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '+62 857-1873-6624', '36.238.919.9-412.000', 1, 3, '3276050912890002', '0', '-322781', 3, 2, 1, '2018-10-29 09:50:27', '891212210591', '0000', '3276050611070039', '0001609066765', '14037497030', '', '', '', '', '', ''),
(7, '13058', 'ACHMAD SYARIF', 'JAKARTA', '1978-11-15', 'L', 'jl.Jati pulo VI', '09', '05', 'jatipulo', 'palmerah', 'jakarta barat', '11430', '2013-01-10', 'B004', 5, '/pega/assets/avatars/avatar5.png', '', '081585167652', '87.201.214.1-031.000', 1, 4, '3173071511780009 ', '0', '1210005098631', 3, 2, 1, '2018-05-31 04:57:39', '-', '-', '3173070601093070', '0001800385424', '14037497063', '', '', '', '', '', ''),
(8, '14069', 'BADAR SURAWAN', 'JAKARTA', '1972-03-13', 'L', 'JL. BALI MATRAMAN', '008', '008', 'MANGGARAI', 'TEBET', 'JAKARTA SELATAN', '-', '2014-02-03', 'B009', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '+62 858-8869-6266', '77.674.750.3-015.000', 1, 3, '3174051308760002', '0', '-785723', 3, 2, 1, '2018-10-29 09:32:20', '0', '0', '3174010701093826', '0001810422887', '14037497188', '', '', '', '', '', ''),
(9, '18149', 'DEA RACHMAYATI HANDIARTO', 'BOGOR', '1996-05-03', 'P', 'JL. KEBAHAGIAAN NO A-10', '01', '05', 'PASIR GUNUNG SELATAN', 'CIMANGGIS', 'DEPOK', '16951', '2018-03-09', 'B003', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '08558376635', '84.732.792.1-412.000', 1, 5, '3276024305960000', '0', '-772653', 3, 1, 2, '2018-07-02 09:21:54', '', '', '3276020710070270', '', '', '', '', '', '', '', ''),
(10, '14090', 'RAHMANIA RAMADHANI', 'CIANJUR', '1996-02-05', 'P', 'Perum Gadung Permai Blok E/11', '003', '016', 'Bojong', 'Karangtengah', 'Cianjur', '43281', '2014-10-01', 'B004', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '085771005674', '72.689.748.1-406.000', 1, 3, '3203074502960012', '0', '600077296888', 3, 1, 1, '2018-05-31 05:02:24', '-', '-', '3203073005070009', '0001609066743', '15000577062', '', '', '', '', '', ''),
(11, '14091', 'ETI FITRIANI', 'JAKARTA', '1993-02-04', 'P', 'Kramat V', '02', '003', 'Lubang Buaya', 'Cipayung', 'Jakarta Timur', '13810', '2014-11-03', 'B004', 5, '/pega/assets/avatars/avatar5.png', '', '085695876804', '36.744.740.6-009.000', 1, 3, '3175104402931001', '0', '9000029142636', 3, 1, 1, '2018-10-29 09:17:51', '', '', '3175101901111006', '', '11023250514', '', '', '', '', '', ''),
(12, '15095', 'BANGUN DWI PRASETYO', 'BEKASI', '1996-04-15', 'L', 'Jl. Percetakan Negara XI', '04', '05', 'Rawasari', 'Cempaka Putih', 'Jakarta Pusat', '10570', '0000-11-30', 'B010', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '08974337323', '73.395.092.7-024.000', 1, 3, '3171051504960002', '0', '1570005407144', 3, 1, 1, '2018-10-29 09:27:35', '96041205970114', '0', '3171051501098604', '0001658253475', '15050081577000', '', '', '', '', '', ''),
(13, '15097', 'FARHAN RAMADHAN', 'JAKARTA', '1997-01-13', 'L', 'Rawa Kuning', '05', '16', 'Pulogebang', 'Cakung', 'Jakarta Timur', '13950', '2015-04-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '085717709784', '73.358.160.7-006.000', 1, 3, '3175061301970002', '0', '1660001328970', 3, 1, 1, '2018-10-29 09:21:30', '000000000000000000000', '00000000000000000', '3175063001098511', '15037672092', '15037672092000', '', '', '', '', '', ''),
(14, '15098', 'GALUH DEVI PARADHITA GAMEKA', 'JAKARTA', '1997-05-29', 'P', 'Jln. Bekasi Timur II dalam No. 9', '013', '004', 'Rawabunga', 'Jatinegara', 'Jakarta Timur', '13350', '2015-04-01', 'B004', 5, '/pega/assets/avatars/avatar5.png', '', '0896-6862-9873', '73.342.290.1-002.000', 1, 3, '3175036905970001', '0', '-786457', 3, 1, 1, '2018-10-29 09:34:30', '', '', '3175031301095854', '', '15050081643.000', '', '', '', '', '', ''),
(15, '15100', 'MUHAMMAD GILANG RAMADHAN', 'JAKARTA', '1996-01-17', 'L', 'Jalan kebon bawang VIII no 27', '19', '001', 'Kebon bawang', 'Tanjung priok', 'Jakarta utara', '14320', '2015-04-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '082111095931', '73.424.138.3-042.000', 1, 3, '3172021701960002', '0', '9000025487241', 3, 1, 1, '2018-10-12 08:00:33', '96011205971295', '', '', '', '15037672134', '', '', '', '', '', ''),
(16, '15103', 'NUR MUFID', 'BANJARNEGARA', '1996-06-24', 'L', 'Kp. Pulo Jahe', '003', '010', 'Jatinegara', 'Cakung', 'Jakarta Timur', '13930', '2015-04-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '+62 858-9608-5251', '73.345.596.8-004.000', 1, 3, '3175062406960003', '0', '9000028943455', 3, 1, 1, '2018-10-30 03:33:41', '96061205984259', '0000', '3175062406960003', '00000', '15037672076', '', '', '', '', '', ''),
(17, '15107', 'AHMAD AJIJUDIN', 'SERANG', '1997-07-20', 'L', 'Kp Pangodokan Rt 1/1 Kel. Kutabumi Kec. Pasar Kemis Kab. Tangerang Prov. Banten', '01', '001', 'Kutabumi', 'Pasar Kemis', 'Tangerang', '15560', '2015-06-08', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '087886879155', '75.836.431.9-402.000', 1, 3, '3603122007970004', '0', '9000030319470', 3, 1, 1, '2018-10-12 07:52:35', '', '', '3603122006070069', '0001662023349', '15050081585', '', '', '', '', '', ''),
(18, '15116', 'LUTHFIAN SYAUQI', 'TANGERANG', '1997-08-23', 'L', 'Jl. Durian Raya B1/12A Bumi Asri', '02', '018', 'Kuta Bumi', 'Pasar Kemis', 'Tanggerang', '15560', '2015-06-11', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '+62 812-9574-0465', '75.416.017.4-418.000', 1, 3, '3603122308970004', '0', '-3031057', 3, 1, 1, '2018-10-29 09:41:31', '970812193377', '0000', '3603121907080123', '0001766799955', '15050081627', '', '', '', '', '', ''),
(19, '15121', 'MUHAMMAD NAUFAL', 'JAKARTA', '1997-07-04', 'L', 'Persada Raya no.3', '011', '011', 'Menteng Dalam', 'Tebet', 'Jakarta Selatan', '12870', '2015-09-07', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '085775307493', '75.600.736.5-015.000', 1, 3, '3174010407970005', '0', '1570004957016', 3, 1, 1, '2018-06-05 04:53:57', '970712051420', '97071205973274', '3174011301092932', '0', '16006622688', '', '', '', '', '', ''),
(20, '16129', 'HALIM RACHMAN RIFALDI', 'JAKARTA', '1995-01-27', 'L', 'Kp. Kekupu', '02', '03', 'Rangkapan Jaya', 'Pancoran Mas', 'Depok', '16435', '2013-08-13', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(021) 778-8541', '08998176115', '66.010.755.8-412.000', 1, 3, '3276012701950003', '0', '1570005116075', 3, 2, 1, '2018-10-29 09:22:37', '950112210918', '', '3276010410160014', '0001458237857', '14037497055', '', '', '', '', '', ''),
(21, '16130', 'MUADZ AZMI AMRULLAH', 'BANDUNG', '1995-05-28', 'L', 'Komp. Graha Alam Raya Jl. Meteor II W6 No.7', '004', '009', 'Margasari', 'Buah Batu', 'Bandung', '40286', '2016-09-06', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '081617595883', '79.919.259.2-429.000', 1, 3, '3217022805950010', '0', '1320014106711', 3, 1, 1, '2018-06-07 02:27:06', '950513310928', '', '3273220910150002', '0002097605496', '', '', '', '', '', '', ''),
(22, '16132', 'JOSHUA ILHAM', 'PEKANBARU', '1996-02-19', 'L', 'Jl. Kav. Sidomakmur 2', '005', '003', 'Kaliabang Tengah', 'Kaliabang Tengah', ' Bekasi Utara', '17125', '2017-01-04', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '085779457308', '81.076.487.8-432.000', 1, 3, '3275051902960012', '0', '-1232104', 3, 1, 2, '2018-10-29 09:40:01', '000000000000', '000000000000', '3275050412090029', '0002135137061', '18041680176', '', '', '', '', '', ''),
(23, '17135', 'DOBIYANTO KRISNA SETIAWAN', 'PONOROGO', '1996-10-27', 'L', 'Jl.Sunter Muara No.35C', '18', '005', 'Sunter Agung', 'Tanjung Priok', 'Jakarta Utara', '14350', '2015-04-12', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '085894177960', '83.388.103.0-048.000', 1, 3, '3172022710960001', '0', '1570005598355', 3, 1, 2, '2018-10-16 03:58:07', '96101205971813', '00000000000000000000', '000000000000', '0001226285921', '18064206966', '', '', '', '', '', ''),
(24, '17137', 'MUHAMMAD AFIF AFDHOLUL MATIN', 'JAKARTA', '1999-03-13', 'L', 'GG. Yudistira', '012', '003', 'Makasar', 'Makasar', 'Jakarta Timur', '13570', '2017-04-17', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(021) 870-7101', '085711728626', '81.663.274.9-005.000', 1, 3, '3175081303990002', '0', '1290011090863', 3, 1, 2, '2018-10-12 09:29:57', '000', '000', '3175082403160018', '000', '000', '', '', '', '', '', ''),
(32, '111', 'test1', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', 0, 0, '1', '', '', 0, 0, 0, '2018-10-15 09:30:45', '', '', '', '', '', '', '', '', '', '', ''),
(33, '112', 'test2', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', 0, 0, '2', '', '', 0, 0, 0, '2018-10-15 09:30:40', '', '', '', '', '', '', '', '', '', '', ''),
(26, '17143', 'ADE SYAUKI M', 'JAKARTA', '1992-08-14', 'L', 'Jl. Harapan no. 37', '02', '03', 'Rangkapan Jaya', 'Pancoran Mas', 'Depok', '16435', '2017-11-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(021) 778-8541', '085692258373', '73.259.100.3-411.000', 1, 5, '3674051408920005', '0', '1010006003923', 3, 2, 2, '2018-10-16 18:25:31', '920814190766', '920812190990', '3276010602180005', '0000043586133', '0000', '', '', '', '', '', ''),
(27, '17144', 'JAFAR SIDIX', 'JAKARTA', '1993-12-30', 'L', 'Jl. Kampung bentengan III', '001', '005', 'Sunter Jaya ', 'Sunter', 'Jakarta Utara', '14350', '2017-11-13', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '081213141931', '76.773.567.3-048.000', 1, 3, '3172023112930008', '0', '-2978969', 3, 2, 2, '2018-10-29 09:37:34', '0000000000000', '0000000000000', '0000000000000000', '000000000000', '00000000000', '', '', '', '', '', ''),
(28, '18146', 'RIAN ANANG PRAKOSO', 'JAKARTA', '1994-03-09', 'L', 'Kp. Pengarengan ', '009', '012', 'Jatinegara', 'Cakung', 'Jakarta Timur', '13930', '2018-02-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '081298555981', '66.661.073.8-004.000', 1, 4, '3175060903940005', '0', '1660001033638', 3, 1, 2, '2018-10-15 09:19:20', '940312051608', '0', '3175061201097371', '0001169159332', '14037496941', '', '', '', '', '', ''),
(29, '18147', 'BUDIMAN PRASETYO', 'JAKARTA', '1999-08-24', 'P', 'Jl.Malaka Baru', '008', '011', 'Pondok Kopi', 'Duren Sawit', 'Jakarta Timur', '13460', '2018-03-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(021) 866-1397', '085794954347', '84.385.598.2-008.000', 1, 3, '3175072408990006', '0', '-225301', 3, 1, 2, '2018-10-12 08:04:04', '99081205700142', '-', '3175072301097743', '000000', '000000', '', '', '', '', '', ''),
(30, '18148', 'ARYA ERLANGGA', 'JAKARTA', '1999-05-23', 'L', 'Jln.Cipinang Kebembem IX', '04', '013', 'Pisangan Timur', 'Pulogadung', 'Jakarta Timur', '13230', '2018-06-01', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '085776916411', '84.934.199.5-003.000', 1, 3, '3175022305990004', '0', '60010065476', 3, 1, 2, '2018-06-06 04:36:00', '99051205974621', '', '3175021301092974', '', '', '', '', '', '', '', ''),
(31, '18151', 'RIZKY PRATAMA PUTRA', 'JAKARTA', '2000-06-15', 'L', 'Gg. Masjid Cisalak', '02', '08', 'Cisalak', 'Sukmajaya', 'Depok', '0000', '2018-05-07', 'B006', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '0858-9267-9400', '00.000.000.0-000.000', 1, 3, '3276020506000008', '0', '-612192', 3, 1, 2, '2018-10-19 06:14:48', '0000', '0000', '00000', '00000', '000000', '', '', '', '', '', ''),
(34, '113', 'test3', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', 0, 0, '3', '', '', 0, 0, 0, '2018-10-15 09:30:49', '', '', '', '', '', '', '', '', '', '', ''),
(35, '114', 'test4', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', 0, 0, '4', '', '', 0, 0, 0, '2018-10-15 09:30:53', '', '', '', '', '', '', '', '', '', '', ''),
(36, '115', 'test5', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', 0, 0, '5', '', '', 0, 0, 0, '2018-10-15 09:30:56', '', '', '', '', '', '', '', '', '', '', ''),
(37, '001', 'VIBRA MILIANO', 'JAKARTA', '2000-01-03', 'L', 'jl Kalibata Utara 2', '02', '002', 'Kalibata', 'pancoran', 'DKI Jakarta', '19720', '2018-05-14', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '085714996319', '', 1, 3, '3174080301000003', '0', '0', 0, 1, 3, '2018-10-15 03:33:56', '0', '0', '0', '0', '0', '', '', '', '', '', ''),
(38, '002', 'AQSHAL ATTALLAH SIAHAN', 'JAKARTA', '2000-09-29', 'L', 'Jalan Kemuning Dalam 5', '13', '03', 'Utan Kayu Utara', 'Matraman', 'DKI JAKARTA', '13210', '2018-05-14', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '082119303878', '', 1, 3, '3175012909000004', '0', '0', 0, 1, 3, '2018-10-15 03:18:42', '0', '0', '0', '0', '0', '', '', '', '', '', ''),
(39, '003', 'AHMAD IRGI CHIESA', 'JAKARTA', '2000-01-25', 'L', 'Jalan Cipinang Jaya Blok GG', '02', '08', 'CIPINANG BESAR SELATAN', 'JATINEGARA', 'Jakarta Timur', '14310', '2018-05-14', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '085219788943', '', 1, 3, '3175032501000010', '0', '0', 0, 1, 3, '2018-10-15 03:35:14', '0', '0', '0', '0', '0', '', '', '', '', '', ''),
(40, '004', 'RIAN WAHAB', 'JAKARTA', '2000-08-14', 'L', 'KP.PEDONGKELAN', '05', '015', 'KAYU PUTIH', 'PULO GADUNG', 'JAKARTA TIMUR', '13210', '2000-08-14', 'B005', 5, '/pega/assets/avatars/avatar5.png', '', '089534503375', '', 1, 3, '317502140820002', '0', '0', 0, 1, 3, '2018-10-15 03:30:36', '0', '0', '0', '0', '0', '', '', '', '', '', ''),
(41, '005', 'FAUZAN DINAN MUHAMMAD', 'JAKARTA', '2000-11-02', 'L', 'Jalan Pisangan Baru II', '13', '07', 'Pisangan Baru', 'Matraman', 'Jakarta Timur', '13110', '2018-05-14', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '081224396382', '00.000.000.0-000.000', 1, 3, '3175010211000001', '0', '60010405888', 3, 1, 3, '2018-10-15 03:47:08', '0', '0', '0', '0', '0', '', '', '', '', '', ''),
(42, '006', 'MUHAMMAD IKHSANUDIN', 'MAGELANG', '2001-05-01', 'L', 'Jl. Wijaya 2 w16/13', '01', '10', 'Mekarbakti', 'Panongan', 'Kab. Tangerang', '15710', '2018-09-03', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '081910615218', '00.000.000.0-000.000', 1, 3, '3603190105010001', '0', '0', 6, 1, 3, '2018-10-15 03:56:49', '0', '0', '', '0', '0', '', '', '', '', '', ''),
(43, '007', 'ABYYU HAFIZH SEPTRIANTO', 'JAKARTA', '2001-09-04', 'L', 'Jalan Galunggung 22 no.2', '11', '15', 'Cengkareng Timur', 'Cengkareng', 'Jakarta Barat', '11730', '2018-09-03', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '081211517231', '00.000.000.0-000.000', 1, 3, '3173010409011003', '0', '703369133400', 7, 1, 3, '2018-10-15 04:00:25', '0', '0', '0', '0', '0', '', '', '', '', '', ''),
(44, '008', 'MAHMUD SYAIFUL AMINUDIN', 'NGAWI', '2000-10-24', 'L', 'Jl. Ki Hajar Dewantoro', '004', '06', 'Gondrong', 'Cipondoh', 'Tangerang', '14150', '2018-09-03', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '081318005253', '00.000.000.0-000.000', 1, 3, '3671052410000003', '0', '0', 2, 1, 3, '2018-10-15 04:01:56', '001013480014', '0', '0', '0', '0', '', '', '', '', '', ''),
(45, '009', 'MUHAMAD RIDWANSYAH', 'JAKARTA', '2001-02-15', 'L', 'Jl. Pesing Gadog no.49', '011', '07', 'Kedoya Utara', 'Kebon Jeruk', 'Jakarta Barat, Kota', '11520', '2018-09-03', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '087870825405', '00.000.000.0-000.000', 1, 3, '3173051502010002', '0', '0', 9, 1, 3, '2018-10-15 04:08:05', '1205180709458', '0', '0', '0', '0', '', '', '', '', '', ''),
(46, '010', 'IWAN SETIAWAN', 'BOYOLALI', '2000-05-08', 'L', 'jalan kp gaga', '07', '03', 'Semanan', 'Kalideres', 'Jakarta Barat', '11850', '2018-09-03', 'B005', 5, '/pega/assets/avatars/avatar5.png', '(000) 000-0000', '08995150875', '00.000.000.0-000.000', 1, 3, '3172010805001001', '0', '5490413474', 1, 1, 3, '2018-10-15 04:12:28', '1205170719940', '0', '0', '0', '0', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
