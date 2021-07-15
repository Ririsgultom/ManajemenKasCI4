-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 10:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `masjid` varchar(255) DEFAULT 'Nama Masjid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `masjid`) VALUES
(1, 'admin', '38edee319a0cc59dd1e3a6acc9ff207c4d0e399fc1aeb590ace81f6a203ca2231f0c4e2d49aee558fd417ecf75ac7b59043a05dab3b8ae52ac3c99e78d15a88crSYwHNtLu3Zqk7K5pgmJ5EPnClumDvVzGjqNt0gkW20=', 'Nama');

-- --------------------------------------------------------

--
-- Table structure for table `kas_keluar`
--

CREATE TABLE `kas_keluar` (
  `id` int(10) NOT NULL,
  `nomor` varchar(9) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` int(2) NOT NULL,
  `jumlah` int(13) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas_keluar`
--

INSERT INTO `kas_keluar` (`id`, `nomor`, `tanggal`, `kategori`, `jumlah`, `keterangan`) VALUES
(1, 'BCA-00001', '2021-07-05', 2, 1000, 'Transport Penceramah Malam Selasa'),
(2, 'BCA-00067', '2021-07-07', 1, 120000, 'sasasa'),
(3, '111111111', '2019-11-06', 1, 2120, 'ssss'),
(8, 'dddddddd', '2020-01-01', 1, 1, 'dddd'),
(11, '8372', '2021-01-01', 1, 9, 'dddddddddd'),
(13, 'rrrr', '2021-07-09', 1, 444, 'ffff'),
(15, 't', '2021-07-10', 7, 333333, 'rrrr');

-- --------------------------------------------------------

--
-- Table structure for table `kas_masuk`
--

CREATE TABLE `kas_masuk` (
  `id` int(10) NOT NULL,
  `nomor` varchar(9) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` int(2) NOT NULL,
  `jumlah` int(13) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas_masuk`
--

INSERT INTO `kas_masuk` (`id`, `nomor`, `tanggal`, `kategori`, `jumlah`, `keterangan`) VALUES
(16, '444444444', '2020-02-21', 1, 12121, 'ddd'),
(19, '222222', '2020-09-07', 1, 11111, 'gggggggg'),
(20, '12345', '2019-09-09', 1, 1111, 'ss'),
(21, '44', '2020-01-01', 1, 9, '44'),
(22, 'BCA-00094', '2021-07-07', 1, 120000, 'sasasa'),
(25, 'dddd1', '2020-01-01', 1, 22, '121'),
(26, '090909', '2020-09-01', 1, 221, '2'),
(31, 'wawawa', '2021-07-10', 1, 1424, 'vsvsv');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(9) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Transport'),
(2, 'Infaq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas_keluar`
--
ALTER TABLE `kas_keluar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `kas_masuk`
--
ALTER TABLE `kas_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kas_keluar`
--
ALTER TABLE `kas_keluar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kas_masuk`
--
ALTER TABLE `kas_masuk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
