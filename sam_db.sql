-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2025 at 03:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `judul_profesi` varchar(255) DEFAULT NULL,
  `summary` text,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `foto_profil`, `judul_profesi`, `summary`, `email`, `telepon`, `alamat`) VALUES
(1, 'Samsul Huda', 'pp.jpeg', 'Mahasiswa Teknik Informatika & IT Enthusiast', 'Saya adalah mahasiswa Teknik Informatika di Universitas Muhammadiyah Sukabumi. Memiliki pengalaman di bidang IT Support dan Digital Marketing. Saat ini fokus mendalami Pemrograman Web (CodeIgniter 4) dan Python.', 'samsul077@ummi.ac.id', '088213542030', 'Sukabumi, Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `nama_institusi` varchar(255) NOT NULL,
  `jenjang` varchar(50) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_masuk` year DEFAULT NULL,
  `tahun_lulus` year DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_institusi`, `jenjang`, `jurusan`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 'Universitas Muhamadiyah Sukabumi', 'S1', 'Teknik Informatika', '2023', NULL),
(2, 'SMK 1 Gunungguruh', 'SMK', 'Teknik Komputer & Jaringan', '2020', '2023'),
(3, 'SMP 1 Gunungguruh', 'SMP', NULL, '2017', '2020'),
(4, 'SDN 4 Gunungguruh', 'SD', NULL, '2011', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `tahun_mulai` int DEFAULT NULL,
  `tahun_selesai` int DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `posisi`, `perusahaan`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 'IT Support', 'Universitas Muhamadiyah Sukabumi', 2024, NULL, 'Bertanggung jawab untuk troubleshooting hardware, software, dan jaringan di lingkungan kampus serta dukungan teknis.'),
(2, 'Digital Marketing', 'Toko Almadinah', 2023, 2024, 'Mengelola strategi pemasaran digital, optimasi SEO, dan manajemen konten media sosial untuk meningkatkan penjualan.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `nama_skill` varchar(100) NOT NULL,
  `persentase` int NOT NULL DEFAULT '80'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `nama_skill`, `persentase`) VALUES
(1, 'CodeIgniter 4', 75),
(2, 'Python', 60),
(3, 'Digital Marketing', 70),
(4, 'Leadership', 65),
(5, 'Bahasa Inggris', 40),
(6, 'IT Support & Networking', 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
