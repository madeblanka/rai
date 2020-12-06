-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 08:28 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rai`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposito`
--

CREATE TABLE `deposito` (
  `idpengajuandeposito` int(11) NOT NULL,
  `idnasabah` int(11) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `waktu` int(11) NOT NULL,
  `bunga` varchar(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposito`
--

INSERT INTO `deposito` (`idpengajuandeposito`, `idnasabah`, `jumlah`, `waktu`, `bunga`, `tanggal`, `status`) VALUES
(3, 517151720, '10000000', 24, '0.7', '2020-09-30', 'Disetujui'),
(7, 517151720, '20000000', 24, '0.8', '2020-10-08', 'Disetujui'),
(9, 517151720, '80000000', 12, '0.7', '2020-10-10', 'Menunggu'),
(10, 517155972, '20000000', 6, '0.7', '2020-10-01', 'Menunggu'),
(11, 517155972, '10000000', 12, '0.7', '2020-10-08', 'Menunggu'),
(14, 517155972, '10000000', 6, '0.7', '2020-10-01', 'Menunggu'),
(15, 517155972, '10000000', 6, '0.7', '2020-10-01', 'Menunggu'),
(20, 517155972, '5000000', 1, '8', '2020-11-12', 'Menunggu'),
(21, 517155972, '5000000', 1, '8', '2020-11-13', 'Menunggu'),
(22, 517188483, '1000000000', 6, '10', '2020-11-27', 'Menunggu'),
(23, 517117669, '5000000', 1, '8', '2020-11-11', 'Menunggu'),
(24, 517193068, '10000000', 3, '9', '2020-12-06', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `idpengajuankredit` int(11) NOT NULL,
  `idnasabah` int(11) NOT NULL,
  `jumlah` double NOT NULL,
  `bunga` double NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kredit`
--

INSERT INTO `kredit` (`idpengajuankredit`, `idnasabah`, `jumlah`, `bunga`, `bulan`, `tanggal`, `status`) VALUES
(2, 517155972, 20000000, 1, '24', '2020-09-30', 'Menunggu'),
(3, 517155972, 1000000, 2, '12', '2020-10-02', 'Disetujui'),
(4, 517155972, 9000000, 1, '24', '2020-10-02', 'Menunggu'),
(5, 517155972, 69000000, 1.7, '60', '2020-10-02', 'Menunggu'),
(6, 517155972, 7000000, 2.25, '12', '2020-10-02', 'Menunggu'),
(7, 517155972, 1000000, 2.5, '12', '2020-10-06', 'Menunggu'),
(8, 517193068, 10000000, 21, '60', '2020-12-06', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `idnasabah` int(11) NOT NULL,
  `idpegawai` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `username` varchar(255) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `pernikahan` varchar(15) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `tempatkerja` varchar(255) NOT NULL,
  `lamakerja_tahun` varchar(10) NOT NULL,
  `lamakerja_bulan` varchar(10) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `gaji` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `statusrumah` varchar(15) NOT NULL,
  `namakerabat` varchar(50) NOT NULL,
  `alamatkerabat` varchar(255) DEFAULT NULL,
  `pekerjaankerabat` varchar(30) DEFAULT NULL,
  `status` varchar(15) NOT NULL,
  `ahliwaris` varchar(50) NOT NULL,
  `statusahliwaris` varchar(20) NOT NULL,
  `tgl_input` timestamp NULL DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`idnasabah`, `idpegawai`, `password`, `nik`, `nama`, `username`, `jeniskelamin`, `pernikahan`, `notelp`, `tempatkerja`, `lamakerja_tahun`, `lamakerja_bulan`, `jabatan`, `gaji`, `alamat`, `tgl_lahir`, `statusrumah`, `namakerabat`, `alamatkerabat`, `pekerjaankerabat`, `status`, `ahliwaris`, `statusahliwaris`, `tgl_input`, `tgl_update`) VALUES
(517117669, 0, '123123', '123', 'snuff', 'snuff', 'Pria', 'Belum Menikah', '123', '123', '123', '', '123', '123', '123', '0000-00-00', 'Milik Pribadi', '123', '123', '123', '', '', '', NULL, NULL),
(517119558, 0, '456', '456', '456', '456', 'Pria', 'Belum Menikah', '456', '456', '456', '', '456', '456', '456', '0000-00-00', 'Milik Pribadi', '456', '456', '46', '', '', '', '2020-11-27 20:41:16', NULL),
(517138363, 0, '351113', '12', 'I Made Blanca Jaya Patra', 'satu', 'Pria', 'Belum Menikah', '7', 'qweqwe', '12 tahun', '', 'staff', '1', 'Gianyar ', '0000-00-00', 'Milik Pribadi', 'dia', 'gaktau', 'nganggur', '', '', '', NULL, NULL),
(517145760, 0, '748679', '1233', 'I Made Blanca Jaya Patra', 'dua', 'Pria', 'Belum Menikah', '7', 'qweqwe', '12 tahun', '', 'staff', '1', 'Gianyar ', '0000-00-00', 'Milik Pribadi', 'dia', 'gaktau', 'nganggur', '', '', '', NULL, NULL),
(517149362, 0, '123', '3122', '123', 'admin', 'Pria', 'Belum Menikah', '123', '123', '1', '', '1', '1', '1', '0000-00-00', 'Milik Pribadi', '1', '1', '1', '', '', '', NULL, NULL),
(517151720, 0, '585025', '1233', 'basddsadsa80890', 'tiga', 'Pria', 'Belum Menikah', '7', 'qweqwe', '12 tahun', '', 'staff', '1', 'Gianyar', '0000-00-00', 'Milik Pribadi', 'dia', 'gaktau', 'nganggur', '', '', '', NULL, NULL),
(517155717, 0, '098989', '32', '8980', '908908', 'Pria', 'Belum Menikah', '809', '89809', '098', '098', '098', '098', '098', '2020-12-18', 'Milik Pribadi', '9', '89', '890', '', '', '', '2020-12-02 00:24:54', NULL),
(517155972, 0, '123123', '1232212', 'Satria Megaartha', 'satria', 'Pria', 'Menikah', '21331', 'coba', 'coba', '', 'Accounting', '3212', 'Bali', '0000-00-00', 'Kos', 'ddsfdsafd', 'asdffdsa', 'asdfds', '', '', '', NULL, NULL),
(517156246, 0, '904180', '123', '33', '33', 'Pria', 'Belum Menikah', '33', '33', '33', '', '33', '33', '33', '0000-00-00', 'Milik Pribadi', '33', '33', '33', '', '', '', NULL, NULL),
(517166796, 0, '639501', '1233', 'I Made Blanca Jaya Patra', 'empat', 'Pria', 'Belum Menikah', '7', 'qweqwe', '12 tahun', '', 'staff', '1', 'Gianyar ', '0000-00-00', 'Milik Pribadi', 'dia', 'gaktau', 'nganggur', '', '', '', NULL, NULL),
(517179610, 0, '123123', '0988921', 'slipkno', 'slipknot', 'Pria', 'Belum Menikah', '123', '123', '123', '', '123', '123', '123', '0000-00-00', 'Milik Pribadi', '123', '123', '123', '', '', '', NULL, NULL),
(517181081, 517138363, '898', '898', '898', '898', 'Pria', 'Belum Menikah', '898', '898', '18 tahun', '19 bulan', '898', '898', '890', '2020-11-30', 'Milik Pribadi', '123', '809', '890', '', '', '', '2020-11-27 20:51:33', NULL),
(517186800, 0, '559096', 'aa', 'ss', 'lima', 'Pria', 'Belum Menikah', '213', 'aa', 'aa', '', 'aa', '123', 'aa', '0000-00-00', 'Milik Pribadi', 'as', 'as', 'as', '', '', '', NULL, NULL),
(517188483, 0, '123123', '12330', 'Administrator', 'member', 'Pria', 'Belum Menikah', '123', 'qwe', '123', '', '123', '123', '123', '0000-00-00', 'Milik Pribadi', '123', '123', '123', '', '', '', NULL, NULL),
(517193068, 517138363, 'korn', '890890', 'korn', 'korn', 'Pria', 'Belum Menikah', '890', '890', '890', '890', '890', '890', '890', '2020-12-06', 'Milik Pribadi', 'kro', 'korn', 'korn', 'Aktif', 'korn', 'korn', '2020-12-05 23:29:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idpegawai` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idpegawai`, `nama`, `email`, `username`, `password`, `status`) VALUES
(517138363, 'Pegawai Test', 'pegawai@gmail.com', 'pegawai', '123123', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tabeldeposito`
--

CREATE TABLE `tabeldeposito` (
  `iddeposito` int(11) NOT NULL,
  `idpegawai` int(11) NOT NULL,
  `bunga` double NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tgl_input` timestamp NULL DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabeldeposito`
--

INSERT INTO `tabeldeposito` (`iddeposito`, `idpegawai`, `bunga`, `bulan`, `tgl_input`, `tgl_update`) VALUES
(7, 517138363, 8, '1 Bulan', '2020-11-28 03:02:37', '2020-12-02 00:34:57'),
(8, 517138363, 9, '3 Bulan', '2020-11-28 03:02:37', NULL),
(9, 517138363, 10, '6 Bulan', '2020-11-28 03:02:37', NULL),
(10, 517138363, 10.5, '12 Bulan', '2020-11-28 03:02:37', NULL),
(11, 517138363, 11, '24 Bulan', '2020-11-28 03:02:37', NULL),
(17, 517138363, 0.8, '9 Bulan', '2020-12-06 00:10:11', NULL),
(18, 517138363, 0.8, '6 Bulan', '2020-12-06 00:12:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabelkredit`
--

CREATE TABLE `tabelkredit` (
  `idkredit` int(11) NOT NULL,
  `idpegawai` int(11) NOT NULL,
  `jumlah1` double NOT NULL,
  `jumlah2` double NOT NULL,
  `bunga` double NOT NULL,
  `tgl_input` timestamp NULL DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelkredit`
--

INSERT INTO `tabelkredit` (`idkredit`, `idpegawai`, `jumlah1`, `jumlah2`, `bunga`, `tgl_input`, `tgl_update`) VALUES
(2, 517138363, 1000000, 5000000, 2.5, '2020-11-28 03:26:25', NULL),
(3, 517138363, 5000000, 10000000, 2.25, '2020-11-28 03:26:25', NULL),
(4, 517138363, 10000000, 25000000, 2, '2020-11-28 03:26:25', NULL),
(5, 517138363, 25000000, 50000000, 1.8, '2020-11-28 03:26:25', NULL),
(6, 517138363, 50000000, 100000000, 1.7, '2020-11-28 03:26:25', NULL),
(7, 517138363, 100000000, 10000000000, 1.6, '2020-11-28 03:26:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabeltabungan`
--

CREATE TABLE `tabeltabungan` (
  `idtabungan` int(11) NOT NULL,
  `idpegawai` int(11) NOT NULL,
  `bunga` double NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tgl_input` timestamp NULL DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabeltabungan`
--

INSERT INTO `tabeltabungan` (`idtabungan`, `idpegawai`, `bunga`, `bulan`, `tgl_input`, `tgl_update`) VALUES
(2, 517138363, 6, '12 Bulan', NULL, NULL),
(3, 517138363, 6, '24 Bulan', NULL, NULL),
(4, 517138363, 6, '36 Bulan', NULL, NULL),
(5, 517138363, 6, '48 Bulan', NULL, NULL),
(6, 517138363, 6, '60 Bulan', NULL, '2020-12-02 00:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `idpengajuantabungan` int(11) NOT NULL,
  `idnasabah` int(11) NOT NULL,
  `bunga` varchar(5) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `waktu` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`idpengajuantabungan`, `idnasabah`, `bunga`, `jumlah`, `waktu`, `tanggal`, `status`) VALUES
(2, 517151720, '0.7', '1000000', 36, '2020-09-30', 'Disetujui'),
(3, 517155972, '0.7', '1000000', 24, '2020-10-03', 'Menunggu'),
(4, 517155972, '6', '15000', 36, '2020-10-02', 'Menunggu'),
(5, 517155972, '6', '1000000', 12, '2020-10-29', 'Menunggu'),
(6, 517155972, '6', '15000', 24, '2020-11-13', 'Menunggu'),
(7, 517193068, '6', '1000000', 12, '2020-12-06', 'Menunggu'),
(8, 517193068, '6', '10000000', 12, '2020-12-06', 'Menunggu'),
(9, 517193068, '6', '15000', 12, '2020-12-06', 'Menunggu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposito`
--
ALTER TABLE `deposito`
  ADD PRIMARY KEY (`idpengajuandeposito`);

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`idpengajuankredit`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`idnasabah`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indexes for table `tabeldeposito`
--
ALTER TABLE `tabeldeposito`
  ADD PRIMARY KEY (`iddeposito`);

--
-- Indexes for table `tabelkredit`
--
ALTER TABLE `tabelkredit`
  ADD PRIMARY KEY (`idkredit`);

--
-- Indexes for table `tabeltabungan`
--
ALTER TABLE `tabeltabungan`
  ADD PRIMARY KEY (`idtabungan`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`idpengajuantabungan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposito`
--
ALTER TABLE `deposito`
  MODIFY `idpengajuandeposito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kredit`
--
ALTER TABLE `kredit`
  MODIFY `idpengajuankredit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabeldeposito`
--
ALTER TABLE `tabeldeposito`
  MODIFY `iddeposito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tabelkredit`
--
ALTER TABLE `tabelkredit`
  MODIFY `idkredit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabeltabungan`
--
ALTER TABLE `tabeltabungan`
  MODIFY `idtabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `idpengajuantabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
