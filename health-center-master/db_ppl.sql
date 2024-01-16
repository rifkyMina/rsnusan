-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 04:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id_appointmen` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `departeman` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id_appointmen`, `nama`, `email`, `tanggal`, `departeman`, `telepon`, `pesan`) VALUES
(1, '', 'hardianto.hendrawan@gmail.com', '0000-00-00', '', '', ''),
(2, '', 'hardianto.hendrawan@gmail.com', '2024-01-24', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`nama`, `email`, `subject`, `pesan`) VALUES
('', 'hardianto.hendrawan@gmail.com', '', 'terlalu lama'),
('', 'hardianto.hendrawan@gmail.com', '', 'terlalu lama'),
('', 'hardianto.hendrawan@gmail.com', '', 'terlalu lama'),
('', 'hardianto.hendrawan@gmail.com', '', 'kurang ramah'),
('', 'hardianto.hendrawan@gmail.com', '', 'kurang ramah'),
('wawan', 'wawan@gmail.com', 'perilaku', 'terlalu cuek');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephon` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_appointmen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `telephon`, `password`, `level`, `id_appointmen`) VALUES
(1, 'admin', 'admin@gmail.com', '085523732473', 'root123', 'admin', 0),
(2, 'doktor', 'doktor@gmail.com', '085522854392', 'doktor123', 'doktor', 0),
(3, 'wawan', 'wawan@gmail.com', '085527896637', 'wawan123', 'biasa', 0),
(4, 'WIWIN', 'wiwin@gmail.com', '', 'wiwin123', 'biasa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appointmen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_appointmen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
