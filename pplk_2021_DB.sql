-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2021 at 12:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pplk_2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ormawas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `body`, `ormawas_id`, `created_at`, `updated_at`) VALUES
(12, 'tester artikelll', 12, '2021-06-20 08:15:02', '2021-06-20 08:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `funfacts`
--

CREATE TABLE `funfacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `himpunans`
--

CREATE TABLE `himpunans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodeWarna` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembina` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketuaHimpunan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahunBerdiri` int(11) NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filosofiLogo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ormawas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaLengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaSingkat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepalaJurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruangJurusan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `namaLengkap`, `namaSingkat`, `kepalaJurusan`, `ruangJurusan`) VALUES
(1, 'Jurusan Tester', 'JT', 'Kepala Tester', '001');

-- --------------------------------------------------------

--
-- Table structure for table `kabinets`
--

CREATE TABLE `kabinets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presiden` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekjen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organigram` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filosofiLogo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamusgauls`
--

CREATE TABLE `kamusgauls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gaul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`) VALUES
(1, 'prodi'),
(2, 'Himpunan'),
(3, 'UKM'),
(4, 'Komunitas');

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
(8, '2021_06_19_164010_create_kategoris_table', 1),
(9, '2021_06_19_164108_create_ormawas_table', 1),
(10, '2021_06_19_164307_create_jurusans_table', 1),
(11, '2021_06_19_164449_create_prodis_table', 1),
(12, '2021_06_19_165015_create_roles_table', 1),
(13, '2021_06_19_165046_create_users_table', 1),
(14, '2021_06_19_190022_create_artikels_table', 1),
(15, '2021_06_20_140203_create_ukms_table', 2),
(16, '2021_06_21_064924_create_himpunans_table', 3),
(17, '2021_06_21_070601_create_social_media_table', 3),
(18, '2021_06_21_071029_create_visi_misis_table', 3),
(19, '2021_06_21_073756_create_funfacts_table', 4),
(20, '2021_06_21_073819_create_kamusgauls_table', 4),
(21, '2021_06_21_073832_create_pplks_table', 4),
(22, '2021_06_21_073842_create_upts_table', 4),
(23, '2021_06_21_073850_create_kabinets_table', 4),
(24, '2021_06_21_073857_create_senats_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ormawas`
--

CREATE TABLE `ormawas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaLengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaSingkat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoris_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ormawas`
--

INSERT INTO `ormawas` (`id`, `namaLengkap`, `namaSingkat`, `kategoris_id`, `created_at`, `updated_at`) VALUES
(8, 'ini Tes 13', 'TB', 1, '2021-06-19 16:45:51', '2021-06-20 08:50:03'),
(9, 'Naufal Taufiq Ridwan', 'IFA', 1, '2021-06-19 19:21:00', '2021-06-19 19:21:00'),
(10, 'Tes UKM', 'TU', 3, '2021-06-20 08:13:34', '2021-06-20 08:13:34'),
(11, 'Tes UKM', 'TU', 3, '2021-06-20 08:14:20', '2021-06-20 08:14:20'),
(12, 'Tes UKM', 'TU', 3, '2021-06-20 08:15:02', '2021-06-20 08:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `pplks`
--

CREATE TABLE `pplks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kepalaProdi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akreditasi` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahunBerdiri` int(11) NOT NULL,
  `ruangProdi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahMahaSiswa` int(11) DEFAULT NULL,
  `diagramAlir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ormawas_id` bigint(20) UNSIGNED NOT NULL,
  `jurusans_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Tugas'),
(3, 'Daplok/Mentor'),
(4, 'Pendanaan'),
(5, 'Maba');

-- --------------------------------------------------------

--
-- Table structure for table `senats`
--

CREATE TABLE `senats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketua` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_medias`
--

CREATE TABLE `social_medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ormawas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ukms`
--

CREATE TABLE `ukms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembina` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketuaUmum` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahunBerdiri` int(11) NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filosofiLogo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ormawas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukms`
--

INSERT INTO `ukms` (`id`, `pembina`, `ketuaUmum`, `tahunBerdiri`, `logo`, `filosofiLogo`, `barcode`, `ormawas_id`, `created_at`, `updated_at`) VALUES
(1, 'Naufal TR', 'Nopal', 2021, 'logotes.jpg', 'tester logo', 'barcode.jpg', 11, '2021-06-20 08:14:20', '2021-06-20 08:14:20'),
(2, 'Naufal TR', 'Nopal', 2000, 'logotes.jpg', 'tester logo', 'barcode.jpg', 12, '2021-06-20 08:15:02', '2021-06-20 08:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `upts`
--

CREATE TABLE `upts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelompok` int(11) NOT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodis_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `roles_id`, `nim`, `kelompok`, `instagram`, `prodis_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Naufal', 'nopal@mail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '120140044', 44, 'instagram.com/yaelahfal_', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visi_misis`
--

CREATE TABLE `visi_misis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ormawas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_ormawas_id_foreign` (`ormawas_id`);

--
-- Indexes for table `funfacts`
--
ALTER TABLE `funfacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `himpunans`
--
ALTER TABLE `himpunans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `himpunans_ormawas_id_foreign` (`ormawas_id`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabinets`
--
ALTER TABLE `kabinets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamusgauls`
--
ALTER TABLE `kamusgauls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawas`
--
ALTER TABLE `ormawas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ormawas_kategoris_id_foreign` (`kategoris_id`);

--
-- Indexes for table `pplks`
--
ALTER TABLE `pplks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodis_jurusans_id_foreign` (`jurusans_id`),
  ADD KEY `prodis_ormawas_id_foreign` (`ormawas_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senats`
--
ALTER TABLE `senats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_medias`
--
ALTER TABLE `social_medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_medias_ormawas_id_foreign` (`ormawas_id`);

--
-- Indexes for table `ukms`
--
ALTER TABLE `ukms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ukms_ormawas_id_foreign` (`ormawas_id`);

--
-- Indexes for table `upts`
--
ALTER TABLE `upts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`),
  ADD KEY `users_roles_id_foreign` (`roles_id`),
  ADD KEY `users_prodis_id_foreign` (`prodis_id`);

--
-- Indexes for table `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visi_misis_ormawas_id_foreign` (`ormawas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `funfacts`
--
ALTER TABLE `funfacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `himpunans`
--
ALTER TABLE `himpunans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kabinets`
--
ALTER TABLE `kabinets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamusgauls`
--
ALTER TABLE `kamusgauls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ormawas`
--
ALTER TABLE `ormawas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pplks`
--
ALTER TABLE `pplks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `senats`
--
ALTER TABLE `senats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_medias`
--
ALTER TABLE `social_medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukms`
--
ALTER TABLE `ukms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upts`
--
ALTER TABLE `upts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi_misis`
--
ALTER TABLE `visi_misis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_ormawas_id_foreign` FOREIGN KEY (`ormawas_id`) REFERENCES `ormawas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `himpunans`
--
ALTER TABLE `himpunans`
  ADD CONSTRAINT `himpunans_ormawas_id_foreign` FOREIGN KEY (`ormawas_id`) REFERENCES `ormawas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ormawas`
--
ALTER TABLE `ormawas`
  ADD CONSTRAINT `ormawas_kategoris_id_foreign` FOREIGN KEY (`kategoris_id`) REFERENCES `kategoris` (`id`);

--
-- Constraints for table `prodis`
--
ALTER TABLE `prodis`
  ADD CONSTRAINT `prodis_jurusans_id_foreign` FOREIGN KEY (`jurusans_id`) REFERENCES `jurusans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodis_ormawas_id_foreign` FOREIGN KEY (`ormawas_id`) REFERENCES `ormawas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social_medias`
--
ALTER TABLE `social_medias`
  ADD CONSTRAINT `social_medias_ormawas_id_foreign` FOREIGN KEY (`ormawas_id`) REFERENCES `ormawas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ukms`
--
ALTER TABLE `ukms`
  ADD CONSTRAINT `ukms_ormawas_id_foreign` FOREIGN KEY (`ormawas_id`) REFERENCES `ormawas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD CONSTRAINT `visi_misis_ormawas_id_foreign` FOREIGN KEY (`ormawas_id`) REFERENCES `ormawas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;