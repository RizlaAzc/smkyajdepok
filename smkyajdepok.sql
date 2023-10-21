-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 04:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkyajdepok`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `subjek`, `deskripsi`, `gambar`) VALUES
(1, 'SMK YAJ', 'Sekolah YAJ adalah Sekolah berbasis religius serta Sekolah berbasis Informasi Teknologi. Gedung sekolah tidak terintegrasi dengan satuan pendidikan yang lain. Memiliki ciri khas seragam harian yang berbeda, unik dan menarik. Sistem pembinaan peserta didik yang terintegrasi dengan prestasi. Ruang Belajar dan peralatan praktek yang lengkap.  jurusan yang ada di SMK YAJ antara lain :   REKAYASA PERANGKAT LUNAK  TEKNOLOGI KOMPUTER JARINGAN  PERKANTORAN  AKUNTANSI', 'smk.png');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `subjek`, `deskripsi`, `gambar`) VALUES
(7, 'SMK YAJ DEPOK', 'WELCOME TO OUR WEBSITE', 'smk2.jpg'),
(8, 'VISI', 'Making SMK YAJ a vocational high school that produces skilled, superior, independent and religious students', 'ykk2.jpeg'),
(9, 'MISI', 'We come to study and follow the rules', 'yaj1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `subjek`, `deskripsi`, `gambar`) VALUES
(3, 'SHALAT DUHA', 'SHALAT DUHA', 'duha.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama_lengkap`, `nama`, `email`, `password`, `telepon`, `foto`, `date_created`, `is_active`) VALUES
(1, 'admin cms', 'admin', 'admin@gmail.com', '$2y$10$awxE5A4xvS0q52GzajvqOOYqSfaF1L7cfUW.AG1mU/cXMrtiSC.zy', '000000000', 'profil1.png', '2023-10-14', 1),
(2, 'zc', 'asd', 'rinisaja@gmail.com', '$2y$10$S2Qs.MjVqTjSTMNAi7dI3eYj3dSkB8NIN47tUYjPLVT01dTwbQdY6', '\\', 'profil.png', '2023-10-15', 1),
(3, 'zc', 'admin', 'a@asd.com', '$2y$10$XOnoqUjhneWb7Fd0P2fiH.b1HunhPrfabZ2rJW1AObZgkMo0eqNiK', '123\\', 'profil.png', '2023-10-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ppdb`
--

CREATE TABLE `ppdb` (
  `nisn` int(11) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `statusanak` varchar(255) NOT NULL,
  `anakke` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `namaayah` varchar(255) NOT NULL,
  `namaibu` varchar(255) NOT NULL,
  `alamatortu` text NOT NULL,
  `telephoneortu` varchar(255) NOT NULL,
  `pekerjaanayah` varchar(255) NOT NULL,
  `pekerjaanibu` varchar(255) NOT NULL,
  `namawali` varchar(255) NOT NULL,
  `alamatwali` text NOT NULL,
  `telephonewali` varchar(255) NOT NULL,
  `pekerjaanwali` varchar(255) NOT NULL,
  `jalurpendaftaran` varchar(255) NOT NULL,
  `pilihan1` varchar(255) NOT NULL,
  `pilihan2` varchar(255) NOT NULL,
  `asalsekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `quotes` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `nama`, `jabatan`, `quotes`, `gambar`) VALUES
(2, 'Albert Einstein', 'physicist', 'Anyone who has never made a mistake has never trie', 'albert.jpeg'),
(3, 'Idham Kholid, S.Ag, S.E.', 'School principal', 'Don\'t be too busy looking for the perfect one if a', 'pakidham.jpg'),
(4, 'Lukmanul Hakim, S.Kom<', 'Hubin', 'To achieve success is not just by imagining and da', 'palukman.jpg'),
(5, 'Dea Anggi Rahmawati, A.Md.MI', 'KAPROG', 'Don\'t think too much about other people\'s expectat', 'budea.jpg'),
(6, 'Martin Luther King', 'social activist', 'Intelligence coupled with character is the goal of', 'Martin.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id` int(11) NOT NULL,
  `sosmed` varchar(150) NOT NULL,
  `url` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id`, `jurusan`) VALUES
(2, 'Teknik Jaringan Komputer dan Telekomunikasi'),
(3, 'Pengembangan Perangkat Lunak dan Gim'),
(4, 'Akuntansi dan Keuangan Lembaga'),
(5, 'Manajemen Perkantoran dan Layanan Bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `gambar`, `nama`, `jabatan`) VALUES
(3, 'paidham.jpg', 'Idham Kholid ', 'School principal'),
(4, 'kangyusuf.jpg', 'Yusuf Zamzami ', 'Student Affairs'),
(5, 'kangir.jpg', 'Irkham Kardianto ', 'student council advisor'),
(6, 'bumirna.jpg', 'Mirna Meylani ', 'curriculum leader');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sosial_media`
--
ALTER TABLE `sosial_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
