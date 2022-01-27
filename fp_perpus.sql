-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2022 at 01:00 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_01_08_221107_create_tb_admin', 1),
(3, '2022_01_08_230756_create_admin', 2),
(4, '2022_01_09_010053_create_tbanggota', 3),
(5, '2022_01_13_011720_create_tbpeminjaman', 4),
(7, '2022_01_13_012433_create_tbbuku', 5),
(9, '2022_01_14_014922_create_tbpiinjam', 6),
(10, '2022_01_14_021924_create_tbpengembalian', 7),
(11, '2022_01_27_044059_create_user_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbanggota`
--

CREATE TABLE `tbanggota` (
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbanggota`
--

INSERT INTO `tbanggota` (`id_anggota`, `nama_anggota`, `alamat`, `no_tlp`) VALUES
(1, 'Mohammad Irham', 'Pangandaran', 62818172),
(2, 'Rasyid', 'Yogyakarta', 62811),
(3, 'luffy', 'jakarta', 9182813),
(4, 'gilang', 'jakarta', 987979),
(5, 'bayuNug', 'Yogya', 19271),
(6, 'irham', 'jawa barat', 98798798);

-- --------------------------------------------------------

--
-- Table structure for table `tbbuku`
--

CREATE TABLE `tbbuku` (
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbbuku`
--

INSERT INTO `tbbuku` (`id_buku`, `kode_buku`, `judul_buku`, `tahun_terbit`, `penerbit`, `stok`) VALUES
(1, 'au110', 'Java Script', '2015', 'Gramedia', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbpengembalian`
--

CREATE TABLE `tbpengembalian` (
  `id_pengembalian` bigint(20) UNSIGNED NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `id_peminjam` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbpengembalian`
--

INSERT INTO `tbpengembalian` (`id_pengembalian`, `tanggal_kembali`, `id_peminjam`, `id_buku`, `id_anggota`) VALUES
(1, '2019-05-16', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbpinjams`
--

CREATE TABLE `tbpinjams` (
  `id_pinjaman` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tangga_kembali` date NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbpinjams`
--

INSERT INTO `tbpinjams` (`id_pinjaman`, `tanggal_pinjam`, `tangga_kembali`, `id_buku`, `id_anggota`) VALUES
(1, '2019-04-17', '2019-05-15', 1, 1),
(2, '2019-04-17', '2019-05-15', 1, 1),
(3, '2022-01-04', '2022-01-07', 1, 1),
(4, '2022-01-22', '2022-01-29', 1, 3),
(5, '2022-01-22', '2022-01-29', 1, 1),
(6, '2022-01-22', '2022-01-29', 1, 2),
(7, '2022-01-22', '2022-01-29', 1, 2),
(8, '2019-04-17', '2019-05-15', 1, 2),
(9, '2019-04-17', '2019-05-15', 1, 2),
(10, '2022-01-14', '2022-01-31', 1, 1),
(11, '2022-01-03', '2022-01-07', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Moh Irham', 'admin', 'irham@gmail.com', NULL, '$2y$10$Nmga2ZeU30W4r33qb00wC.m4Qmy6vq0uMdt1xZUJx1OaDeoYaLO9a', 'nYd4J7qzjBeUcrMQ8nrOsaokmq14OzdWGpSROaNC7St9tVMPjkiXZiy7EjqJ', '2022-01-26 22:00:02', '2022-01-26 22:00:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_peminjam` (`id_peminjam`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `tbpinjams`
--
ALTER TABLE `tbpinjams`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbanggota`
--
ALTER TABLE `tbanggota`
  MODIFY `id_anggota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbbuku`
--
ALTER TABLE `tbbuku`
  MODIFY `id_buku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  MODIFY `id_pengembalian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbpinjams`
--
ALTER TABLE `tbpinjams`
  MODIFY `id_pinjaman` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  ADD CONSTRAINT `tbpengembalian_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `tbbuku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbpengembalian_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `tbanggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbpengembalian_ibfk_3` FOREIGN KEY (`id_peminjam`) REFERENCES `tbpinjams` (`id_pinjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbpinjams`
--
ALTER TABLE `tbpinjams`
  ADD CONSTRAINT `tbpinjams_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `tbbuku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbpinjams_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `tbanggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
