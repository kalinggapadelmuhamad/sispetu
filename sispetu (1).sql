-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 04:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispetu`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `idJurusan` int(10) UNSIGNED NOT NULL,
  `namaJurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`idJurusan`, `namaJurusan`) VALUES
(2, 'Akuntansi'),
(8, 'Sistem Informasi'),
(1, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `idPermohonan` int(10) UNSIGNED ZEROFILL NOT NULL,
  `namaPemohon` varchar(25) NOT NULL,
  `nim` int(10) NOT NULL,
  `idJurusan` int(10) UNSIGNED NOT NULL,
  `noWa` varchar(15) NOT NULL,
  `buktiKehilangan` varchar(225) NOT NULL,
  `validasi` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`idPermohonan`, `namaPemohon`, `nim`, `idJurusan`, `noWa`, `buktiKehilangan`, `validasi`) VALUES
(0000000009, 'Kalingga Padel Muhamad', 2011010098, 1, '082175572310', 'Screenshot (1).png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) UNSIGNED NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `tglLahir` date DEFAULT NULL,
  `gender` enum('L','P') NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL,
  `isAdmin` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `fullName`, `tglLahir`, `gender`, `email`, `password`, `isAdmin`) VALUES
(1, 'admin', '2002-03-16', 'L', 'admin@sispetu.com', '$2y$10$o.PT0gHkNWLksf5jolJC4O3nXTk4eiC0Mj2CqL3qNEww80HYoXmy2', '1'),
(10, 'user', '2022-09-14', 'P', 'user@sispetu.com', '$2y$10$rkDo/6pMld7LjMJgvLwiyuqyAuuDxnmnQjzvwjwFDO8EmOXbynK8m', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`idJurusan`),
  ADD UNIQUE KEY `namaJurusan` (`namaJurusan`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`idPermohonan`),
  ADD KEY `idJurusan` (`idJurusan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `idJurusan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `idPermohonan` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD CONSTRAINT `permohonan_ibfk_1` FOREIGN KEY (`idJurusan`) REFERENCES `jurusan` (`idJurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
