-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 01:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jkel` varchar(1) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgllhr` date DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jkel`, `alamat`, `tgllhr`, `jurusan`) VALUES
('MHS01', 'Siti Aminah', 'P', 'SOLO', '1995-10-01', 'Teknik Informatika'),
('MHS02', 'Rita', 'P', 'SOLO', '1999-01-01', 'Teknik Informatika'),
('MHS03', 'Amirudin', 'L', 'SEMARANG', '1998-08-11', 'Teknik Elektro'),
('MHS04', 'Siti Maryam', 'P', 'JAKARTA', '1995-04-15', 'Teknik Elektro'),
('MHS05', 'Laila Nur', 'P', 'MADIUN', '2001-04-11', 'Teknik Industri'),
('MHS06', 'Ida Widaningrum', 'P', 'BANDUNG', '1999-04-17', 'Teknik Pangan'),
('MHS07', 'Bambang Wid', 'L', 'SURABAYA', '1997-11-23', 'Teknik Kimia'),
('MHS08', 'Oki Prasetyo', 'L', 'JAKARTA', '1995-07-20', 'Teknik Industri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
