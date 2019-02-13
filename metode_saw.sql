-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 03:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metode_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` varchar(2) NOT NULL,
  `kode_kriteria` varchar(2) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `kode_kriteria`, `bobot`) VALUES
('B1', 'C1', 0.4),
('B2', 'C2', 0.2),
('B3', 'C3', 0.2),
('B4', 'C4', 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `kasus`
--

CREATE TABLE `kasus` (
  `alt` varchar(2) NOT NULL,
  `C1` int(11) NOT NULL,
  `C2` int(11) NOT NULL,
  `C3` int(11) NOT NULL,
  `C4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasus`
--

INSERT INTO `kasus` (`alt`, `C1`, `C2`, `C3`, `C4`) VALUES
('A1', 80, 70, 70, 70),
('A2', 85, 75, 65, 60),
('A3', 70, 80, 80, 90),
('A4', 70, 90, 80, 60);

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `keputusan` varchar(50) NOT NULL,
  `rentang` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`keputusan`, `rentang`) VALUES
('Sangat Layak', 0.89),
('Layak', 0.72),
('Tidak Layak', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(2) NOT NULL,
  `desc_kriteria` int(11) NOT NULL,
  `nilai_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `desc_kriteria`, `nilai_kriteria`) VALUES
(1, 'C1', 20, 90),
(2, 'C1', 30, 85),
(3, 'C1', 35, 80),
(4, 'C1', 40, 75),
(5, 'C1', 45, 70),
(6, 'C1', 50, 65),
(7, 'C1', 65, 60),
(8, 'C1', 70, 50),
(9, 'C2', 1000000, 90),
(10, 'C2', 5000000, 85),
(11, 'C2', 8000000, 80),
(12, 'C2', 10000000, 75),
(13, 'C2', 15000000, 70),
(14, 'C2', 20000000, 65),
(15, 'C2', 25000000, 60),
(16, 'C2', 30000000, 50),
(17, 'C3', 1, 90),
(18, 'C3', 2, 85),
(19, 'C3', 3, 80),
(20, 'C3', 4, 75),
(21, 'C3', 5, 70),
(22, 'C3', 6, 65),
(23, 'C3', 7, 60),
(24, 'C3', 8, 50),
(25, 'C4', 6000000, 90),
(26, 'C4', 5500000, 80),
(27, 'C4', 4000000, 70),
(28, 'C4', 3000000, 60),
(29, 'C4', 2000000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `normal1`
--

CREATE TABLE `normal1` (
  `alt` varchar(2) NOT NULL,
  `normal_c1` float NOT NULL,
  `normal_c2` float NOT NULL,
  `normal_c3` float NOT NULL,
  `normal_c4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
