-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.byetcluster.com
-- Generation Time: Apr 04, 2021 at 09:15 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27747943_projectweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuserchat`
--

CREATE TABLE `adminuserchat` (
  `id` int(11) NOT NULL,
  `pengirim` int(11) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminuserchat`
--

INSERT INTO `adminuserchat` (`id`, `pengirim`, `pesan`) VALUES
(15, 0, 'halo ha gaissd'),
(16, 0, 'haloo user'),
(17, 0, 'halo admin'),
(18, 0, 'oii'),
(19, 0, 'kok merah'),
(20, 0, 'hijau kek'),
(21, 0, 'dsadad'),
(22, 0, 'dsadas'),
(23, 1, 'dsad'),
(24, 1, 'dsadsadsd'),
(25, 0, 'dsadasd'),
(26, 0, 'halooo'),
(27, 1, 'halooo lagi'),
(28, 0, 'apa gitu'),
(29, 1, 'gitu'),
(30, 0, 'dasdsad'),
(31, 0, 'dasda'),
(32, 0, 'tes'),
(33, 0, 'tes'),
(34, 1, 'tes lagi'),
(35, 1, 'tes'),
(36, 0, 'tes'),
(37, 1, 'tes aan');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `post` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `name`, `kategori`, `post`) VALUES
(66, '', 'Kata', ''),
(10, 'asdsa', 'dsads', 'dsadsad'),
(11, 'akoh', 'aoh', 'sda'),
(13, 'dsadsad', 'dsadsadd', 'dsadsadsad'),
(14, 'dsada', 'dsad', 'ddsadsad'),
(21, 'dsadsa', 'csadsad', 'dsad'),
(24, 'dad', 'dsad', 'dadssad'),
(36, 'dsadDSADd', 'dsad', 'dsadasd'),
(37, 'dsadDSADd', 'dsad', 'dsadasd'),
(38, 'dsadDSADd', 'dsad', 'dsadasd'),
(39, 'dsadDSADd', 'dsad', 'dsadasd'),
(40, 'dsadDSADd', 'dsad', 'dsadasd'),
(41, 'dsadDSADd', 'dsad', 'dsadasd'),
(42, 'dsadDSADd', 'dsad', 'dsadasd'),
(54, 'coba', 'coba', 'coba'),
(56, 'bisa', 'bisa', 'bisa'),
(58, 'aan', 'aan', 'aan'),
(59, 'jajah', 'jaajah', 'jahah'),
(60, 'cara menggunakan for dan of', 'Kata', 'Labib'),
(62, 'coba aja', 'Kata', 'ADMIN'),
(63, 'bisa', 'Bahasa', 'labib'),
(65, 'coba forum', 'Kata', 'labib');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(5) NOT NULL,
  `soal` text COLLATE latin1_bin NOT NULL,
  `a` varchar(30) COLLATE latin1_bin NOT NULL,
  `b` varchar(30) COLLATE latin1_bin NOT NULL,
  `c` varchar(30) COLLATE latin1_bin NOT NULL,
  `d` varchar(30) COLLATE latin1_bin NOT NULL,
  `knc_jawaban` varchar(30) COLLATE latin1_bin NOT NULL,
  `gambar` varchar(100) COLLATE latin1_bin NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_bin NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `gambar`, `tanggal`, `aktif`) VALUES
(9, 'User atau Operator Komputer dalam Istilah Komputer disebut dengan..?', 'Brainware', 'Fireware', 'Software', 'Hardware', 'a', '', '0000-00-00', 'Y'),
(10, 'CPU Merupakan Singkatan dari', 'Central Progamming Unit', 'Central Promoting Unit', 'Central Processing Unit', 'Central Producing Unit', 'c', '', '0000-00-00', 'Y'),
(11, 'Jaringan dari elemen-elemen yang saling berhubungan adalah ?', 'pentium ', 'instal', 'system', 'data', 'c', '', '0000-00-00', 'Y'),
(12, 'Berikut merupakan elemen-elemen sistem komputer kecuali...?', 'Fireware', 'Brainware', 'Software', 'Hadware', 'a', '', '0000-00-00', 'Y'),
(13, 'Program yang berisi perinta-perintah / perangkat lunak disebut...?', 'Pentium', 'Brainware', 'Hardware', 'software', 'd', '', '0000-00-00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'aan', 'labibghaly21@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'labib', 'labibghaly21@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(3, 'riskiya', 'labibghaly21@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'aku', 'labibghaly21@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'galih', 'labibghaly21@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(6, 'akoh', 'labibghaly21@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70'),
(7, 'matthew', 'labibghaly21@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(8, 'labib', 'labibghaly21@gmail.com', 'user', 'c4ca4238a0b923820dcc509a6f75849b'),
(9, 'drjackyl', 'matthewricharda@gmail.com', 'user', '0cc175b9c0f1b6a831c399e269772661'),
(10, 'sekarayu_dmy', 'sekar30ayu@gmail.com', 'user', 'ae261cd42f5daea98234953430e92e15'),
(11, 'aan', 'labibghaly21@gmail.com', 'admin', 'c4ca4238a0b923820dcc509a6f75849b'),
(12, 'eldhyn', 'eldhyn@gmail.com', 'user', '3bdee987fa317d47bf61fa4644d3e9c7'),
(13, 'abc', 'abc@gmail.com', 'user', '900150983cd24fb0d6963f7d28e17f72'),
(14, 'adm1', 'adm1@gmail.com', 'admin', 'd0572253c0e7cdb85b13988712cb152e'),
(15, 'aan', 'labibghaly21@gmail.com', 'admin', 'c4ca4238a0b923820dcc509a6f75849b'),
(16, 'labib', 'labibriskiya21@gmail.com', 'user', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuserchat`
--
ALTER TABLE `adminuserchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuserchat`
--
ALTER TABLE `adminuserchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
