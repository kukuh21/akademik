-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 02:27 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_Dosen` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `Nip`, `Nama_Dosen`, `created_at`, `updated_at`) VALUES
(1, '199019238123', 'Khairullah', '2019-09-08 02:30:11', '2019-09-08 02:30:11'),
(3, '199019238121', 'Maria, M.Kom', '2019-09-08 03:52:31', '2019-09-08 03:54:00'),
(4, '199019238122', 'Irianda, S. Ap', '2019-09-08 05:20:45', '2019-09-08 05:20:45'),
(5, '199019238124', 'Hugo', '2019-09-08 05:21:01', '2019-09-08 05:21:01'),
(6, '199019238125', 'Fatimah', '2019-09-08 05:21:08', '2019-09-08 05:21:08'),
(7, '199019238126', 'Siti', '2019-09-08 05:21:14', '2019-09-08 05:21:14'),
(8, '199019238127', 'Abidah', '2019-09-08 05:21:26', '2019-09-08 05:21:26'),
(9, '199019238128', 'Aprilianto', '2019-09-08 05:21:33', '2019-09-08 05:21:33'),
(10, '199019238129', 'Faisal', '2019-09-08 05:21:43', '2019-09-08 05:21:43'),
(11, '199019238131', 'Maman', '2019-09-08 05:22:00', '2019-09-08 05:22:00'),
(12, '199019238132', 'Suherman', '2019-09-08 05:22:06', '2019-09-08 05:22:06'),
(13, '199019238134', 'Hairun', '2019-09-08 05:22:15', '2019-09-08 05:22:15'),
(14, '199019238135', 'Riyan Hari', '2019-09-08 05:22:30', '2019-09-08 05:22:30'),
(15, '199019238136', 'Syaifudin', '2019-09-08 05:22:37', '2019-09-08 05:22:37'),
(16, '199019238138', 'Indra Maulana', '2019-09-08 05:22:44', '2019-09-08 05:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nim` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_Mhs` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nim`, `Nama_Mhs`, `Tgl_Lahir`, `Alamat`, `Jenis_Kelamin`, `created_at`, `updated_at`) VALUES
(1, '201901011', 'Kukuh Aprianto', '1994-05-04', 'Kambitin', 'Laki-laki', '2019-09-07 22:24:01', '2019-09-07 22:24:01'),
(2, '201901012', 'Rian', '1990-09-20', 'Barabari', 'Laki-laki', '2019-09-08 03:03:23', '2019-09-08 03:03:23'),
(3, '201901013', 'Andi', '1994-02-20', 'Kambitin', 'Laki-laki', '2019-09-08 03:04:17', '2019-09-08 03:04:17'),
(4, '201901014', 'Ani Ina', '1990-02-09', 'Kambitin', 'Perempuan', '2019-09-08 03:04:39', '2019-09-08 03:37:55'),
(5, '201901010', 'Juan', '1994-09-29', 'Banjar', 'Laki-laki', '2019-09-08 03:05:22', '2019-09-08 03:05:22'),
(6, '201901107', 'Ina', '2010-09-29', 'Banjar', 'Perempuan', '2019-09-08 03:05:57', '2019-09-08 03:05:57'),
(7, '201301010', 'Azis', '1994-08-08', 'Jakarta', 'Laki-laki', '2019-09-08 03:38:49', '2019-09-08 03:38:49'),
(9, '201845748', 'Abi', '2019-02-22', 'Kambitin', 'Laki-laki', '2019-09-08 05:06:19', '2019-09-08 05:06:19'),
(10, '201845741', 'Ucok', '1990-02-09', 'Kambitin', 'Laki-laki', '2019-09-08 05:06:31', '2019-09-08 05:06:31'),
(11, '201845742', 'Inda', '2019-02-08', 'Barabari', 'Perempuan', '2019-09-08 05:06:43', '2019-09-08 05:06:43'),
(12, '201845743', 'Jayanti', '1999-02-09', 'Barabari', 'Perempuan', '2019-09-08 05:07:00', '2019-09-08 05:07:00'),
(13, '201845744', 'Servi', '1999-09-09', 'Kambitin', 'Perempuan', '2019-09-08 05:07:17', '2019-09-08 05:07:17'),
(14, '201845745', 'Jaya', '2010-09-09', 'Kambitin', 'Laki-laki', '2019-09-08 05:07:35', '2019-09-08 05:07:35'),
(15, '201845746', 'Santi', '1999-03-02', 'Barabari', 'Perempuan', '2019-09-08 05:07:54', '2019-09-08 05:07:54'),
(16, '201845747', 'Steve', '2019-09-09', 'Jakarta', 'Laki-laki', '2019-09-08 05:08:12', '2019-09-08 05:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Kode_MK` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_MK` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Sks` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `Kode_MK`, `Nama_MK`, `Sks`, `created_at`, `updated_at`) VALUES
(1, 'MK-001', 'Programer', 2, '2019-09-08 00:20:31', '2019-09-08 00:20:31'),
(3, 'MK-002', 'Database', 1, '2019-09-08 04:00:35', '2019-09-08 04:01:35'),
(4, 'MK-003', 'Android', 2, NULL, NULL),
(5, 'MK-004', 'IOS', 2, NULL, NULL),
(6, 'MK-005', 'Web', 2, NULL, NULL),
(7, 'MK-006', 'Java', 2, NULL, NULL),
(8, 'MK-007', 'Spring', 2, NULL, NULL),
(9, 'MK-008', 'Laravel', 3, NULL, NULL),
(10, 'MK-009', 'Javascript', 3, NULL, NULL),
(11, 'MK-010', 'Node Js', 3, NULL, NULL),
(12, 'MK-011', 'Dart', 1, NULL, NULL),
(13, 'MK-012', 'Flutter', 1, NULL, NULL),
(14, 'MK-013', 'Jquery', 2, NULL, NULL),
(15, 'MK-014', 'CSS', 2, NULL, NULL),
(16, 'MK-015', 'HTML', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_09_03_084307_matakuliah', 2),
(10, '2019_09_03_084827_dosen', 2),
(11, '2019_09_03_084845_mahasiswa', 2),
(12, '2019_09_03_084909_perkuliahan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perkuliahan`
--

CREATE TABLE `perkuliahan` (
  `id_perkuliahan` bigint(20) UNSIGNED NOT NULL,
  `id_dosen` bigint(20) NOT NULL,
  `id_mahasiswa` bigint(20) NOT NULL,
  `id_matakuliah` bigint(20) NOT NULL,
  `Nilai` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `perkuliahan`
--

INSERT INTO `perkuliahan` (`id_perkuliahan`, `id_dosen`, `id_mahasiswa`, `id_matakuliah`, `Nilai`, `created_at`, `updated_at`) VALUES
(2, 3, 2, 3, '7', '2019-09-08 04:08:36', '2019-09-08 04:08:36'),
(3, 1, 1, 1, '7', '2019-09-08 04:08:43', '2019-09-08 04:08:43'),
(4, 3, 4, 1, '9', '2019-09-08 04:08:52', '2019-09-08 04:40:38'),
(5, 1, 5, 1, '7', '2019-09-08 04:08:59', '2019-09-08 04:08:59'),
(6, 3, 5, 3, '8', '2019-09-08 04:09:07', '2019-09-08 04:09:07'),
(7, 1, 6, 1, '7', '2019-09-08 04:09:16', '2019-09-08 04:09:16'),
(8, 3, 6, 3, '7', '2019-09-08 04:09:24', '2019-09-08 04:09:24'),
(9, 1, 7, 1, '7', '2019-09-08 04:09:31', '2019-09-08 04:09:31'),
(10, 5, 9, 7, '7', '2019-09-08 05:25:13', '2019-09-08 05:25:13'),
(11, 11, 6, 10, '8', '2019-09-08 05:25:20', '2019-09-08 05:25:20'),
(12, 8, 13, 7, '9', '2019-09-08 05:25:26', '2019-09-08 05:25:26'),
(13, 7, 14, 8, '9', '2019-09-08 05:25:33', '2019-09-08 05:25:33'),
(14, 10, 11, 10, '9', '2019-09-08 05:25:40', '2019-09-08 05:25:40'),
(15, 6, 11, 12, '9', '2019-09-08 05:25:48', '2019-09-08 05:25:48'),
(16, 10, 15, 10, '8', '2019-09-08 05:25:57', '2019-09-08 05:25:57'),
(17, 6, 14, 10, '8', '2019-09-08 05:26:03', '2019-09-08 05:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kukuh Aprianto', 'kaprianto@gmail.com', NULL, '$2y$10$CU4k2n1hTDBjWS23vw2mJucSfgXoG4Hl9uQo/QQWEz0OvA49YM1Se', NULL, '2019-09-05 07:16:15', '2019-09-05 07:16:15'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$NnIQFNct9gxhb9IblxxcveBgtQLJyWFPue.WyGegT2qly/4//lMvK', NULL, '2019-09-08 05:01:42', '2019-09-08 05:01:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perkuliahan`
--
ALTER TABLE `perkuliahan`
  ADD PRIMARY KEY (`id_perkuliahan`);

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
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `perkuliahan`
--
ALTER TABLE `perkuliahan`
  MODIFY `id_perkuliahan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
