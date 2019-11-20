-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 03:36 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ningpuri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` varchar(5) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Username`, `Password`, `Alamat`) VALUES
('adm1', 'Ningpuri', '1234', 'Jember');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `ID_Bank` varchar(5) NOT NULL,
  `No_Rek` varchar(15) NOT NULL,
  `Nama_Rek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`ID_Bank`, `No_Rek`, `Nama_Rek`) VALUES
('b01', '1430005516248', 'Mandiri'),
('b02', '0032723624', 'Jatim');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` varchar(5) NOT NULL,
  `Nama_Barang` varchar(40) NOT NULL,
  `Harga` int(5) NOT NULL,
  `Stock` int(3) NOT NULL,
  `Gambar Barang` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Nama_Barang`, `Harga`, `Stock`, `Gambar Barang`) VALUES
('brg1', 'Sirup Markisa netto 500ml', 15000, 100, ''),
('brg2', 'Sirup Markisa netto 800ml', 25000, 100, ''),
('brg3', 'Sirup Markisa netto 500ml (box)', 204000, 100, ''),
('brg4', 'Sirup Markisa netto 800ml (box)', 264000, 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `NIK` varchar(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_Telepon` varchar(13) NOT NULL,
  `Scan KTP` longblob NOT NULL,
  `Member` enum('Bronze','Gold') NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NIK`, `Nama`, `Alamat`, `No_Telepon`, `Scan KTP`, `Member`, `Username`, `Password`) VALUES
('3509193011990003', 'Denny Eko Satrijo', 'Jember', '085706965182', '', 'Gold', 'Eko', '123b'),
('3513090809000002', 'Ahmad Syadidul Fahim', 'Probolinggo', '085215822336', '', 'Bronze', 'Fahim', '123a');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `ID_Detail` varchar(5) NOT NULL,
  `ID_Barang` varchar(5) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Subtotal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`ID_Detail`, `ID_Barang`, `Qty`, `Subtotal`) VALUES
('dt01', 'brg1', 10, 150000),
('dt02', 'brg2', 10, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_Pembayaran` varchar(5) NOT NULL,
  `ID_Bank` varchar(5) NOT NULL,
  `ID_Transaksi` varchar(5) NOT NULL,
  `ID_Admin` varchar(5) NOT NULL,
  `Bukti_Pembayaran` mediumblob NOT NULL,
  `Tanggal_Pembayaran` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID_Pembayaran`, `ID_Bank`, `ID_Transaksi`, `ID_Admin`, `Bukti_Pembayaran`, `Tanggal_Pembayaran`, `Status`) VALUES
('p01', 'b01', 'tr01', 'adm1', '', '2019-11-04', 'sukses'),
('p02', 'b01', 'tr02', 'adm1', '', '2019-11-04', 'menunggu konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` varchar(10) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `ID_Detail` varchar(5) NOT NULL,
  `ID_Admin` varchar(5) NOT NULL,
  `Tanggal_Transaksi` date NOT NULL,
  `Grand_Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `NIK`, `ID_Detail`, `ID_Admin`, `Tanggal_Transaksi`, `Grand_Total`) VALUES
('tr01', '3513090809000002', 'dt01', 'adm1', '2019-11-04', 150000),
('tr02', '3509193011990003', 'dt02', 'adm1', '2019-11-04', 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`ID_Bank`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`ID_Detail`),
  ADD KEY `ID_Barang` (`ID_Barang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_Pembayaran`),
  ADD KEY `ID_Admin` (`ID_Admin`),
  ADD KEY `ID_Bank` (`ID_Bank`),
  ADD KEY `ID_Transaksi` (`ID_Transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`),
  ADD KEY `ID_Admin` (`ID_Admin`),
  ADD KEY `ID_Detail` (`ID_Detail`),
  ADD KEY `NIK` (`NIK`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`ID_Barang`) REFERENCES `barang` (`ID_Barang`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `admin` (`ID_Admin`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`ID_Bank`) REFERENCES `bank` (`ID_Bank`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`ID_Transaksi`) REFERENCES `transaksi` (`ID_Transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `admin` (`ID_Admin`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`ID_Detail`) REFERENCES `detail_transaksi` (`ID_Detail`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `customer` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
