-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 04:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `akuisisi`
--

CREATE TABLE `akuisisi` (
  `id_akuisisi` bigint(20) UNSIGNED NOT NULL,
  `tgl_efektif` date NOT NULL,
  `nomor_dokumen` varchar(255) NOT NULL,
  `kategori_dokumen` varchar(255) NOT NULL,
  `versi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akuisisi`
--

INSERT INTO `akuisisi` (`id_akuisisi`, `tgl_efektif`, `nomor_dokumen`, `kategori_dokumen`, `versi`, `created_at`, `updated_at`) VALUES
(1, '2023-11-06', '500.12.10/1104.86/2023', 'Internal', '1.0', '2024-02-15 01:54:19', '2024-02-15 01:54:19'),
(2, '2024-02-12', 'knk', 'knk', 'lmlm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `id_backup` bigint(20) UNSIGNED NOT NULL,
  `periode` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `objek` varchar(255) NOT NULL,
  `pj` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`id_backup`, `periode`, `tanggal`, `objek`, `pj`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Tahun 2023 - 2024', '1111-11-11', 'Objek B', 'wdind', 'wndi', '2024-02-06 20:23:16', '2024-02-06 20:23:16'),
(2, 'Tahun 2023 - 2024', '2024-02-16', 'Objek A', 'Kayla', '-', '2024-02-15 20:05:48', '2024-02-15 20:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `detailakuisisi`
--

CREATE TABLE `detailakuisisi` (
  `id_detailakuisisi` bigint(20) UNSIGNED NOT NULL,
  `id_pemegang` bigint(20) NOT NULL,
  `id_akuisisi` bigint(20) NOT NULL,
  `akses_user` varchar(255) NOT NULL,
  `power_lock` varchar(255) NOT NULL,
  `sinkronisasi_waktu` varchar(255) NOT NULL,
  `antivirus` varchar(255) NOT NULL,
  `update_os` varchar(255) NOT NULL,
  `scan_malware` varchar(255) NOT NULL,
  `versi_os` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailakuisisi`
--

INSERT INTO `detailakuisisi` (`id_detailakuisisi`, `id_pemegang`, `id_akuisisi`, `akses_user`, `power_lock`, `sinkronisasi_waktu`, `antivirus`, `update_os`, `scan_malware`, `versi_os`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '', '2024-02-15 01:56:47', '2024-02-15 01:56:47'),
(2, 2, 1, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '', '2024-02-15 01:56:47', '2024-02-15 01:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fisik`
--

CREATE TABLE `fisik` (
  `id_fisik` bigint(20) UNSIGNED NOT NULL,
  `nama_fisik` varchar(255) NOT NULL,
  `jumlah_fisik` varchar(255) NOT NULL,
  `tglperiksa_fisik` date NOT NULL,
  `status_fisik` varchar(255) NOT NULL,
  `tindak_lanjut` varchar(255) NOT NULL,
  `pic_fisik` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fisik`
--

INSERT INTO `fisik` (`id_fisik`, `nama_fisik`, `jumlah_fisik`, `tglperiksa_fisik`, `status_fisik`, `tindak_lanjut`, `pic_fisik`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Switch Managable', '2', '2024-01-08', 'Tidak Baik', 'Tidak Bisa Diperbaiki', 'Akhmad Zainudin', 'Kena Petir', '2024-02-15 01:53:58', '2024-02-14 21:23:37'),
(2, 'Video Wall', '4', '2024-01-08', 'Tidak Baik', 'Menunggu Tim', 'Akhmad Zainudin', 'Kena Petir', '2024-02-15 02:20:54', '2024-02-15 17:39:55'),
(3, 'Wifi', '3', '2024-01-08', 'Tidak Baik', 'Tidak Bisa Diperbaiki', 'Akhmad Zainudin', 'Kena Petir', '2024-02-14 19:50:03', '2024-02-14 21:23:23'),
(4, 'Switch Hub', '3', '2024-01-08', 'Tidak Baik', 'Tidak Bisa Diperbaiki', 'Akhmad Zainudin', 'Kena Petir', '2024-02-14 21:30:46', '2024-02-15 00:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2024_01_25_152736_create_rfcs_table', 1),
(14, '2024_01_25_153206_create_backups_table', 1),
(15, '2024_01_25_153823_create_monitorings_table', 1),
(16, '2024_01_25_153924_create_restores_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 2),
(18, '2024_02_15_012114_create_fisik_table', 2),
(19, '2024_02_15_012626_create_whitelist_table', 3),
(20, '2024_02_15_014023_create_pemegangaset_table', 4),
(21, '2024_02_15_014129_create_akuisisi_table', 4),
(22, '2024_02_15_014314_create_detailakuisisi_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id_monitoring` bigint(20) UNSIGNED NOT NULL,
  `nama_perangkat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `max` varchar(255) NOT NULL,
  `tgl_monitoring` date NOT NULL,
  `cpu` int(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `disk` int(11) NOT NULL,
  `tindak_lanjut` text NOT NULL,
  `pj` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id_monitoring`, `nama_perangkat`, `lokasi`, `max`, `tgl_monitoring`, `cpu`, `ram`, `disk`, `tindak_lanjut`, `pj`, `created_at`, `updated_at`) VALUES
(1, 'adandj', 'ddiwidi', 'jdiwdjiw', '1111-02-11', 78, 87, 787, 'icwinc', 'aananin', '2024-02-06 20:20:16', '2024-02-06 20:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemegangaset`
--

CREATE TABLE `pemegangaset` (
  `id_pemegang` bigint(20) UNSIGNED NOT NULL,
  `nama_pemegang` varchar(255) NOT NULL,
  `nama_perangkat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemegangaset`
--

INSERT INTO `pemegangaset` (`id_pemegang`, `nama_pemegang`, `nama_perangkat`, `created_at`, `updated_at`) VALUES
(1, 'Eko Wibowo Saputro, S.Kom., M.Eng.', 'Laptop Asus', '2024-02-15 01:55:30', '2024-02-15 01:55:30'),
(2, 'Woni Oktavany', 'Laptop Acer Aspire', '2024-02-15 01:56:05', '2024-02-15 01:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restore`
--

CREATE TABLE `restore` (
  `id_restore` bigint(20) UNSIGNED NOT NULL,
  `periode` varchar(255) NOT NULL,
  `id_backup` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `objek` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `pj` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rfc`
--

CREATE TABLE `rfc` (
  `id_rfc` bigint(20) UNSIGNED NOT NULL,
  `tgl_req` date NOT NULL,
  `pengaju` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `acc` enum('Disetujui','Tidak setuju','Belum disetujui') NOT NULL DEFAULT 'Belum disetujui',
  `penyetuju` varchar(255) DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `tgl_acc` date DEFAULT NULL,
  `tindak_lanjut` text DEFAULT NULL,
  `tgl_perubahan` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rfc`
--

INSERT INTO `rfc` (`id_rfc`, `tgl_req`, `pengaju`, `detail`, `acc`, `penyetuju`, `alasan`, `tgl_acc`, `tindak_lanjut`, `tgl_perubahan`, `tgl_selesai`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2024-02-06', 'user', 'foajoojaojcoj', 'Disetujui', 'Pak Muallim', 'Bagus', '2024-02-06', 'anainincin', '2024-02-06', '2024-02-13', 'asaiduaubcuacb', '2024-02-06 08:16:08', '2024-02-06 08:26:02'),
(2, '2024-02-07', 'user', 'qsqisjqjs', 'Disetujui', 'abajb', 'ajjq', '2024-02-07', 'diwd`', '2024-02-07', '2024-02-07', 'diwnindiwn', '2024-02-06 20:21:31', '2024-02-06 20:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$12$8K4tvttrZ5CU5NSApj9HtO9s/MHMSxRk0eFfvxnWoPEqfxzTORTSi', 'admin', NULL, '2024-02-06 06:28:55', '2024-02-06 06:28:55'),
(2, 'user', 'user@gmail.com', '$2y$12$yz15v8hGThIzMkORD45tneJhIeiaPAhx82UrZ1Qvjz67OsckHoMo.', 'user', NULL, '2024-02-06 06:29:24', '2024-02-06 06:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `whitelist`
--

CREATE TABLE `whitelist` (
  `id_whitelist` bigint(20) UNSIGNED NOT NULL,
  `jenis_software` varchar(255) NOT NULL,
  `nama_software` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whitelist`
--

INSERT INTO `whitelist` (`id_whitelist`, `jenis_software`, `nama_software`, `created_at`, `updated_at`) VALUES
(1, 'Operating System', 'Linux', '2024-02-15 04:29:16', NULL),
(2, 'Office', 'WPS Office', '2024-02-15 04:29:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akuisisi`
--
ALTER TABLE `akuisisi`
  ADD PRIMARY KEY (`id_akuisisi`);

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id_backup`);

--
-- Indexes for table `detailakuisisi`
--
ALTER TABLE `detailakuisisi`
  ADD PRIMARY KEY (`id_detailakuisisi`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fisik`
--
ALTER TABLE `fisik`
  ADD PRIMARY KEY (`id_fisik`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id_monitoring`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pemegangaset`
--
ALTER TABLE `pemegangaset`
  ADD PRIMARY KEY (`id_pemegang`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `restore`
--
ALTER TABLE `restore`
  ADD PRIMARY KEY (`id_restore`);

--
-- Indexes for table `rfc`
--
ALTER TABLE `rfc`
  ADD PRIMARY KEY (`id_rfc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whitelist`
--
ALTER TABLE `whitelist`
  ADD PRIMARY KEY (`id_whitelist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akuisisi`
--
ALTER TABLE `akuisisi`
  MODIFY `id_akuisisi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id_backup` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detailakuisisi`
--
ALTER TABLE `detailakuisisi`
  MODIFY `id_detailakuisisi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fisik`
--
ALTER TABLE `fisik`
  MODIFY `id_fisik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id_monitoring` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemegangaset`
--
ALTER TABLE `pemegangaset`
  MODIFY `id_pemegang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restore`
--
ALTER TABLE `restore`
  MODIFY `id_restore` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rfc`
--
ALTER TABLE `rfc`
  MODIFY `id_rfc` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whitelist`
--
ALTER TABLE `whitelist`
  MODIFY `id_whitelist` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
