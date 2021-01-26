-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 02:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbormas`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `username`) VALUES
(1, 'dc191963012763218b04e8ac6dd2ff1d', 'kesbangpol1'),
(2, 'dc191963012763218b04e8ac6dd2ff1d', 'kesbangpol2');

-- --------------------------------------------------------

--
-- Table structure for table `ormas`
--

CREATE TABLE `ormas` (
  `id` int(40) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bidang_kegiatan` varchar(40) NOT NULL,
  `ruang_lingkup` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `asas` varchar(200) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `pendiri` varchar(40) NOT NULL,
  `pembina` varchar(40) NOT NULL,
  `penasihat` varchar(40) NOT NULL,
  `ketua` varchar(40) NOT NULL,
  `sekretaris` varchar(40) NOT NULL,
  `bendahara` varchar(40) NOT NULL,
  `masa_bhakti` varchar(100) NOT NULL,
  `keputusan` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `usaha` varchar(100) NOT NULL,
  `sumber_keuangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ormas`
--

INSERT INTO `ormas` (`id`, `nama`, `bidang_kegiatan`, `ruang_lingkup`, `alamat`, `tempat`, `asas`, `tujuan`, `pendiri`, `pembina`, `penasihat`, `ketua`, `sekretaris`, `bendahara`, `masa_bhakti`, `keputusan`, `unit`, `usaha`, `sumber_keuangan`) VALUES
(1, 'gamdoh', '', 'main', '', '', 'asas', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'gamdoh2', '', '', '', '', 'asas', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_file` int(40) NOT NULL,
  `nama_file` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormas`
--
ALTER TABLE `ormas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_file`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ormas`
--
ALTER TABLE `ormas`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_file` int(40) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
