-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 08:46 AM
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
-- Table structure for table `bunga`
--

CREATE TABLE `bunga` (
  `idbunga` varchar(10) NOT NULL,
  `bunga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bunga`
--

INSERT INTO `bunga` (`idbunga`, `bunga`) VALUES
('deposito', '10'),
('kredit', '10'),
('tabungan', '10');

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
  `ahliwaris` varchar(50) NOT NULL,
  `statusahliwaris` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposito`
--

INSERT INTO `deposito` (`idpengajuandeposito`, `idnasabah`, `jumlah`, `waktu`, `bunga`, `ahliwaris`, `statusahliwaris`, `tanggal`, `status`) VALUES
(3, 517151720, '10000000', 24, '0.7', 'Harry Potter', 'Menikah', '2020-09-30', 'Disetujui'),
(7, 517151720, '20000000', 24, '0.8', 'Harry Potter', 'Menikah', '2020-10-08', 'Disetujui'),
(9, 517151720, '80000000', 12, '0.7', 'Hermione Granger', 'Menikah', '2020-10-10', 'Menunggu'),
(10, 517155972, '20000000', 6, '0.7', 'Hermione Granger', 'Menikah', '2020-10-01', 'Menunggu'),
(11, 517155972, '10000000', 12, '0.7', 'Hermione Granger', 'Menikah', '2020-10-08', 'Menunggu'),
(14, 517155972, '10000000', 6, '0.7', 'Harry Potter', 'Menikah', '2020-10-01', 'Menunggu'),
(15, 517155972, '10000000', 6, '0.7', 'Harry Potter', 'Menikah', '2020-10-01', 'Menunggu');

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
(7, 517155972, 1000000, 2.5, '12', '2020-10-06', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `idnasabah` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `pernikahan` varchar(15) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `tempatkerja` varchar(255) NOT NULL,
  `lamakerja` varchar(10) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `gaji` varchar(10) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `statusrumah` varchar(15) NOT NULL,
  `namakerabat` varchar(50) NOT NULL,
  `statuskerabat` varchar(15) NOT NULL,
  `alamatkerabat` varchar(255) DEFAULT NULL,
  `pekerjaankerabat` varchar(30) DEFAULT NULL,
  `perusahaankerabat` varchar(25) DEFAULT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`idnasabah`, `password`, `nik`, `nama`, `jeniskelamin`, `pernikahan`, `notelp`, `tempatkerja`, `lamakerja`, `jabatan`, `gaji`, `umur`, `alamat`, `statusrumah`, `namakerabat`, `statuskerabat`, `alamatkerabat`, `pekerjaankerabat`, `perusahaankerabat`, `kelurahan`, `kecamatan`, `provinsi`) VALUES
(517138363, '351113', '12', 'I Made Blanca Jaya Patra', 'Pria', 'Belum Menikah', '7', 'qweqwe', '12 tahun', 'staff', '1', 7, 'Gianyar ', 'Milik Pribadi', 'dia', 'mantab', 'gaktau', 'nganggur', 'dibilang nganggur', 'sada', 'coba', 'coba'),
(517145760, '748679', '1233', 'I Made Blanca Jaya Patra', 'Pria', 'Belum Menikah', '7', 'qweqwe', '12 tahun', 'staff', '1', 7, 'Gianyar ', 'Milik Pribadi', 'dia', 'mantab', 'gaktau', 'nganggur', 'dibilang nganggur', 'sada', 'coba', 'coba'),
(517151720, '585025', '1233', 'basddsadsa80890', 'Pria', 'Belum Menikah', '7', 'qweqwe', '12 tahun', 'staff', '1', 7, 'Gianyar', 'Milik Pribadi', 'dia', 'mantab', 'gaktau', 'nganggur', 'dibilang nganggur', 'sada', 'coba', 'coba'),
(517155972, '123123', '1232212', 'Satria Megaartha', 'Pria', 'Menikah', '21331', 'coba', 'coba', 'Accounting', '3212', 20, 'Bali', 'Kos', 'ddsfdsafd', 'asdffdsfd', 'asdffdsa', 'asdfds', 'asdfsfad', 'gianyar', 'gianar', 'gianyar'),
(517166796, '639501', '1233', 'I Made Blanca Jaya Patra', 'Pria', 'Belum Menikah', '7', 'qweqwe', '12 tahun', 'staff', '1', 7, 'Gianyar ', 'Milik Pribadi', 'dia', 'mantab', 'gaktau', 'nganggur', 'dibilang nganggur', 'sada', 'coba', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idpegawai` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idpegawai`, `nama`, `email`, `password`, `jabatan`, `status`) VALUES
(517138363, 'Pegawai Test', 'pegawai@gmail.com', '123123', 'Administrator', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tabeldeposito`
--

CREATE TABLE `tabeldeposito` (
  `iddeposito` int(11) NOT NULL,
  `jumlah` double NOT NULL,
  `bunga` double NOT NULL,
  `bulan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabeldeposito`
--

INSERT INTO `tabeldeposito` (`iddeposito`, `jumlah`, `bunga`, `bulan`) VALUES
(7, 0, 8, '1 Bulan'),
(8, 0, 9, '3 Bulan'),
(9, 0, 10, '6 Bulan'),
(10, 0, 10.5, '12 Bulan'),
(11, 0, 11, '24 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `tabelkredit`
--

CREATE TABLE `tabelkredit` (
  `idkredit` int(11) NOT NULL,
  `jumlah1` double NOT NULL,
  `jumlah2` double NOT NULL,
  `bunga` double NOT NULL,
  `bulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelkredit`
--

INSERT INTO `tabelkredit` (`idkredit`, `jumlah1`, `jumlah2`, `bunga`, `bulan`) VALUES
(2, 1000000, 5000000, 2.5, 0),
(3, 5000000, 10000000, 2.25, 0),
(4, 10000000, 25000000, 2, 0),
(5, 25000000, 50000000, 1.8, 0),
(6, 50000000, 100000000, 1.7, 0),
(7, 100000000, 10000000000, 1.6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabelperhitungan`
--

CREATE TABLE `tabelperhitungan` (
  `idperhitungan` int(11) NOT NULL,
  `idnasabah` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `jumlah` double NOT NULL,
  `bunga` float NOT NULL,
  `bulan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabeltabungan`
--

CREATE TABLE `tabeltabungan` (
  `idtabungan` int(11) NOT NULL,
  `jumlah` double NOT NULL,
  `bunga` double NOT NULL,
  `bulan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabeltabungan`
--

INSERT INTO `tabeltabungan` (`idtabungan`, `jumlah`, `bunga`, `bulan`) VALUES
(2, 0, 6, '12 Bulan'),
(3, 0, 6, '24 Bulan'),
(4, 0, 6, '36 Bulan'),
(5, 0, 6, '48 Bulan'),
(6, 0, 6, '60 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `idpengajuantabungan` int(11) NOT NULL,
  `idnasabah` int(11) NOT NULL,
  `ahliwaris` varchar(20) NOT NULL,
  `statusahliwaris` varchar(20) NOT NULL,
  `bunga` varchar(5) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `waktu` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`idpengajuantabungan`, `idnasabah`, `ahliwaris`, `statusahliwaris`, `bunga`, `jumlah`, `waktu`, `tanggal`, `status`) VALUES
(2, 517151720, 'Harry Potter', 'Menikah', '0.7', '1000000', 36, '2020-09-30', 'Disetujui'),
(3, 517155972, 'Harry Potter', 'Menikah', '0.7', '1000000', 24, '2020-10-03', 'Menunggu'),
(4, 517155972, 'Hermione Granger', 'Menikah', '6', '15000', 36, '2020-10-02', 'Menunggu'),
(5, 517155972, 'Harry Potter', 'Menikah', '6', '1000000', 12, '2020-10-29', 'Menunggu'),
(6, 517155972, 'Hermione Granger', 'Menikah', '6', '15000', 24, '2020-11-13', 'Menunggu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bunga`
--
ALTER TABLE `bunga`
  ADD PRIMARY KEY (`idbunga`);

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
-- Indexes for table `tabelperhitungan`
--
ALTER TABLE `tabelperhitungan`
  ADD PRIMARY KEY (`idperhitungan`);

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
  MODIFY `idpengajuandeposito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kredit`
--
ALTER TABLE `kredit`
  MODIFY `idpengajuankredit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabeldeposito`
--
ALTER TABLE `tabeldeposito`
  MODIFY `iddeposito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabelkredit`
--
ALTER TABLE `tabelkredit`
  MODIFY `idkredit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabeltabungan`
--
ALTER TABLE `tabeltabungan`
  MODIFY `idtabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `idpengajuantabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
