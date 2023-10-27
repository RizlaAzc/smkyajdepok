-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 03:38 PM
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
(1, 'SMK YAJ', 'Sekolah YAJ adalah Sekolah berbasis religius serta Sekolah berbasis Informasi Teknologi. Gedung sekolah tidak terintegrasi dengan satuan pendidikan yang lain. Memiliki ciri khas seragam harian yang berbeda, unik dan menarik. Sistem pembinaan peserta didik yang terintegrasi dengan prestasi. Ruang Belajar dan peralatan praktek yang lengkap.', 'smk.png');

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
(1, 'SMK YAJ DEPOK', 'WELCOME TO OUR WEBSITE', 'smk.jpg'),
(2, 'VISI', 'Making SMK YAJ a vocational high school that produces skilled, superior, independent and religious students', 'ykk.jpeg'),
(3, 'MISI', 'We come to study and follow the rules', 'yaj.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `subjek`, `gambar`) VALUES
(1, 'Shalat Duha', 'duha.jpg'),
(2, 'Upacara Bendera', 'upacara.jpg'),
(3, 'Senam Pagi', 'senam.jpg'),
(4, 'Outing Class', 'ykk.jpeg'),
(5, 'Wisuda', 'wisuda.jpeg'),
(6, 'Jalan Santai', 'santai.jpeg');

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
(1, 'admin cms', 'admin', 'admin@gmail.com', '$2y$10$awxE5A4xvS0q52GzajvqOOYqSfaF1L7cfUW.AG1mU/cXMrtiSC.zy', '000000000', 'profil.png', '2023-10-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `subjek`, `pesan`, `date`) VALUES
(1, 'asd', 'rinisaja@gmail.com', 'tes', 'asdasdasdasdasdasdasdasd', '2023-10-24 11:04:27');

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
  `asalsekolah` varchar(255) NOT NULL,
  `waktudaftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ppdb`
--

INSERT INTO `ppdb` (`nisn`, `namalengkap`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `statusanak`, `anakke`, `alamat`, `telephone`, `email`, `photo`, `namaayah`, `namaibu`, `alamatortu`, `telephoneortu`, `pekerjaanayah`, `pekerjaanibu`, `namawali`, `alamatwali`, `telephonewali`, `pekerjaanwali`, `jalurpendaftaran`, `pilihan1`, `pilihan2`, `asalsekolah`, `waktudaftar`) VALUES
(234533, 'asd', 'asdasd', '2015-11-03', 'Perempuan', 'Islam', 'Anak Angkat', '12', 'adss', '123', 'rinisaja@gmail.com', 'paidham.jpg', 'sada', 'sadasd', 'adas', '234234', 'asd', 'asdad', 'ass', 'sa', '12313', 'asdasda', 'Online', 'Manajemen Perkantoran dan Layanan Bisnis', 'Akuntansi dan Keuangan Lembaga', 'qsdsads', '2023-10-26 19:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `quotes` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `nama`, `jabatan`, `quotes`, `gambar`) VALUES
(1, 'Idham Kholid, S.Ag, S.E.', 'School principal', 'Don\'t be too busy looking for the perfect one if a', 'pakidham.jpg'),
(2, 'Lukmanul Hakim, S.Kom<', 'Hubin', 'To achieve success is not just by imagining and da', 'palukman.jpg'),
(3, 'Dea Anggi Rahmawati, A.Md. MI', 'Head of Program PPLG', 'Don\'t worry too much about other people\'s expectations of you. Just be yourself, that\'s better.', 'budea.jpg');

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
(1, 'Teknik Jaringan Komputer dan Telekomunikasi'),
(2, 'Pengembangan Perangkat Lunak dan Gim'),
(3, 'Akuntansi dan Keuangan Lembaga'),
(4, 'Manajemen Perkantoran dan Layanan Bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `gambar`, `nama`, `jabatan`) VALUES
(1, 'paidham.jpg', 'Idham Kholid ', 'School principal'),
(2, 'kangyusuf.jpg', 'Yusuf Zamzami ', 'Student Affairs'),
(3, 'kangir.jpg', 'Irkham Kardianto ', 'student council advisor'),
(4, 'bumirna.jpg', 'Mirna Meylani ', 'curriculum leader');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
