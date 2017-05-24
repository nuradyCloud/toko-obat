-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2015 at 10:17 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toko_obat`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen_penyalur`
--

CREATE TABLE IF NOT EXISTS `agen_penyalur` (
  `id_agen` varchar(4) NOT NULL,
  `Nama` varchar(20) DEFAULT NULL,
  `Alamat` varchar(20) DEFAULT NULL,
  `No_HP` varbinary(11) DEFAULT NULL,
  PRIMARY KEY (`id_agen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agen_penyalur`
--

INSERT INTO `agen_penyalur` (`id_agen`, `Nama`, `Alamat`, `No_HP`) VALUES
('a01', 'Supardi', 'Padang', '08974632576'),
('a010', 'Tuti Hamida', 'Bandung', '08987654321'),
('a02', 'Marlena', 'Jakarta', '08263836257'),
('a03', 'Darius', 'Medan', '08917367435'),
('a04', 'Emrizal', 'Padang', '08127534875'),
('a05', 'Zulkarnain', 'Lampung', '08865736287'),
('a06', 'Halimah', 'Jakarta', '08912835128'),
('a07', 'Siti haliza', 'Padang', '08926483561'),
('a08', 'Yusperi', 'Semarang', '08781620372'),
('a09', 'Karmila', 'Padang', '08123456789');

-- --------------------------------------------------------

--
-- Table structure for table `faktur_penerimaan_obat`
--

CREATE TABLE IF NOT EXISTS `faktur_penerimaan_obat` (
  `No` varchar(3) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `ID_Karyawan` varchar(4) DEFAULT NULL,
  `id_agen` varchar(4) DEFAULT NULL,
  `ID_Obat` varchar(4) DEFAULT NULL,
  `Jumlah` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`No`),
  KEY `ID_Obat` (`ID_Obat`),
  KEY `ID_Agen` (`id_agen`),
  KEY `ID_Karyawan` (`ID_Karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faktur_penerimaan_obat`
--

INSERT INTO `faktur_penerimaan_obat` (`No`, `Tanggal`, `ID_Karyawan`, `id_agen`, `ID_Obat`, `Jumlah`) VALUES
('01', '2015-03-09', 'k101', 'a01', 'b001', '200'),
('02', '2015-03-10', 'k102', 'a02', 'b002', '150'),
('03', '2015-03-11', 'k103', 'a03', 'b003', '300'),
('04', '2015-03-12', 'k104', 'a04', 'b004', '250'),
('05', '2015-02-25', 'k105', 'a05', 'b005', '400'),
('06', '2015-03-04', 'k106', 'a06', 'b006', '100'),
('07', '2015-02-24', 'k107', 'a07', 'b007', '150'),
('08', '2015-03-02', 'k108', 'a08', 'b008', '200'),
('09', '2015-02-07', 'k109', 'a09', 'b009', '300'),
('10', '2015-02-27', 'k110', 'a10', 'b010', '250');

-- --------------------------------------------------------

--
-- Table structure for table `faktur_penjualan`
--

CREATE TABLE IF NOT EXISTS `faktur_penjualan` (
  `No` varchar(3) NOT NULL,
  `ID_Pelanggan` varchar(4) DEFAULT NULL,
  `ID_Karyawan` varchar(4) DEFAULT NULL,
  `ID_Obat` varchar(4) DEFAULT NULL,
  `Jumlah` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`No`),
  KEY `ID_Karyawan` (`ID_Karyawan`),
  KEY `ID_Obat` (`ID_Obat`),
  KEY `ID_Pelanggan` (`ID_Pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faktur_penjualan`
--

INSERT INTO `faktur_penjualan` (`No`, `ID_Pelanggan`, `ID_Karyawan`, `ID_Obat`, `Jumlah`) VALUES
('01', 'p001', 'k101', 'b001', '20'),
('02', 'p002', 'k102', 'b002', '50'),
('03', 'p003', 'k103', 'b003', '30'),
('04', 'p004', 'k104', 'b004', '45'),
('05', 'p005', 'k105', 'b005', '20'),
('06', 'p006', 'k106', 'b006', '10'),
('07', 'p007', 'k107', 'b007', '16'),
('08', 'p008', 'k108', 'b008', '39'),
('09', 'p009', 'k109', 'b009', '20'),
('10', 'p010', 'k110', 'b010', '50');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `ID_karyawan` varchar(4) NOT NULL,
  `Nama` varchar(20) DEFAULT NULL,
  `Alamat` varchar(20) DEFAULT NULL,
  `No_HP` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`ID_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`ID_karyawan`, `Nama`, `Alamat`, `No_HP`) VALUES
('k101', 'Arif', 'Payakumbuh', '08318097421'),
('k102', 'Seira', 'Padang', '0827546175'),
('k103', 'Yandi', 'Payakumbuh', '08962435172'),
('k104', 'Arnanda', 'Medan', '08926472835'),
('k105', 'Puja', 'Sijunjung', '0853847673'),
('k106', 'Risk', 'Darmasraya', '0897481738'),
('k107', 'Feby', 'Bengkulu', '08609807098'),
('k108', 'Rahman', 'Pariaman', '08912735463'),
('k109', 'Novi', 'Bukitinggi', '08123823987'),
('k110', 'Irman', 'Pessel', '08127536453');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `password`) VALUES
('k101', '12345'),
('k102', '12346');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `ID_Obat` varchar(4) NOT NULL,
  `Nama` varchar(20) DEFAULT NULL,
  `Harga` varchar(6) DEFAULT NULL,
  `Stok` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`ID_Obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_Obat`, `Nama`, `Harga`, `Stok`) VALUES
('b001', 'Paracetamol', '1000', '31'),
('b002', 'CTM', '2000', '24'),
('b003', 'Bodrex', '1000', '64'),
('b004', 'Paramex', '1500', '57'),
('b005', 'Inza', '1000', '63'),
('b006', 'Oskadon', '2000', '79'),
('b007', 'Laserin', '5000', '25'),
('b008', 'Promagh', '1000', '80'),
('b009', 'Milanta', '7000', '31'),
('b010', 'Bio Placenton', '15000', '57');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `ID_Pelanggan` varchar(4) NOT NULL,
  `ID_Obat` varchar(4) DEFAULT NULL,
  `Nama` varchar(20) DEFAULT NULL,
  `Alamat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Pelanggan`),
  KEY `ID_Obat` (`ID_Obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `ID_Obat`, `Nama`, `Alamat`) VALUES
('p001', 'b001', 'Abdullah', 'Padang'),
('p002', 'b002', 'Hayati', 'Padang'),
('p003', 'b003', 'Amir', 'Padang'),
('p004', 'b004', 'Sandy', 'Padang'),
('p005', 'b005', 'Reina', 'Padang'),
('p006', 'b006', 'Messi', 'Padang'),
('p007', 'b007', 'Ronaldo', 'Padang'),
('p008', 'b008', 'Ilham', 'Padang'),
('p009', 'b009', 'Rio', 'Padang'),
('p010', 'b010', 'Elza', 'Padang');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faktur_penerimaan_obat`
--
ALTER TABLE `faktur_penerimaan_obat`
  ADD CONSTRAINT `faktur_penerimaan_obat_ibfk_1` FOREIGN KEY (`ID_Obat`) REFERENCES `obat` (`ID_Obat`),
  ADD CONSTRAINT `faktur_penerimaan_obat_ibfk_3` FOREIGN KEY (`ID_Karyawan`) REFERENCES `karyawan` (`ID_karyawan`);

--
-- Constraints for table `faktur_penjualan`
--
ALTER TABLE `faktur_penjualan`
  ADD CONSTRAINT `faktur_penjualan_ibfk_1` FOREIGN KEY (`ID_Karyawan`) REFERENCES `karyawan` (`ID_karyawan`),
  ADD CONSTRAINT `faktur_penjualan_ibfk_2` FOREIGN KEY (`ID_Obat`) REFERENCES `obat` (`ID_Obat`),
  ADD CONSTRAINT `faktur_penjualan_ibfk_3` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`);

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`ID_Obat`) REFERENCES `obat` (`ID_Obat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
