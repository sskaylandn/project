-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 08:57 AM
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
(10, '2024-03-26', '500.12/2023', 'Internal', '1.0', '2024-03-25 20:02:52', '2024-03-25 20:02:52'),
(11, '2023-11-06', '500.12.10/1104.86/2023', 'Internal', '1.0', '2024-03-25 22:24:28', '2024-03-25 22:24:28');

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
  `nama_pemegang` text NOT NULL,
  `nama_perangkat` text NOT NULL,
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

INSERT INTO `detailakuisisi` (`id_detailakuisisi`, `nama_pemegang`, `nama_perangkat`, `id_akuisisi`, `akses_user`, `power_lock`, `sinkronisasi_waktu`, `antivirus`, `update_os`, `scan_malware`, `versi_os`, `keterangan`, `created_at`, `updated_at`) VALUES
(5, 'Eko Wibowo Saputro, S.Kom., M.Eng.', 'Laptop Asus', 10, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 20:02:52', '2024-03-25 20:30:06'),
(6, 'Woni Oktavany', 'Laptop Acer Aspire', 10, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 20:02:52', '2024-03-25 20:02:52'),
(7, 'Andhi Tyo Mardhian', 'Laptop Asus', 10, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 20:02:52', '2024-03-25 20:02:52'),
(8, 'Roidatul Hanifahh', 'Laptop Apple', 10, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'IOS 17', '-', '2024-03-25 20:02:52', '2024-03-25 20:25:45'),
(9, 'Eko Wibowo Saputro, S.Kom., M.Eng.', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(10, 'Woni Oktavany', 'Laptop Acer Aspire', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(11, 'Andhi Tyo Mardhian', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(12, 'Roidatul Hanifahh', 'Laptop Apple', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'IOS 17', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:55'),
(13, 'Masruri', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(14, 'Aditya Akbar Nugraha', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(15, 'Zanri Nova Chalimi', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(16, 'Fiklia Fitriani, S.STP., MM.', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(17, 'Ery Rahayu, S.Sos.', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(18, 'Dwi Yusi Sasepti, S.Sos., MM.', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(19, 'Kurniyawati Puji Rahayu, A.Md.', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(20, 'Mualim', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(21, 'Ahmad Faisal', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(22, 'M. Saddam Husein, S.E.', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(23, 'Mohamad Fachrian Farochi', 'Laptop Apple', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'IOS 17', '-', '2024-03-25 22:24:28', '2024-03-25 22:25:57'),
(24, 'M. Eko Nugroho', 'Laptop Apple', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'IOS 17', '-', '2024-03-25 22:24:28', '2024-03-25 22:26:21'),
(25, 'Ellsa Bian Susanti', 'Laptop Apple', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'IOS 17', '-', '2024-03-25 22:24:28', '2024-03-25 22:26:42'),
(26, 'Jimmi Zuliadi', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(27, 'Ery Sudarti', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(28, 'Ita Hastarita Agustin', 'Lapop Compaq', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(29, 'Norma Wulandari', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(30, 'Saiful Fariz, ST.', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(31, 'Vandalia Riskha Agustina', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(32, 'Akhmad Zainuddin, S.Kom.', 'Laptop Dell', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(33, 'Gatot Prasetyo Utomo, SH.', 'Laptop Apple', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'IOS 17', '-', '2024-03-25 22:24:28', '2024-03-25 22:25:33'),
(34, 'Bakti Tataryo, S.S.', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(35, 'Agung Purwanto, S.Kom.', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(36, 'Silvia Nurul Fata, S.Kom.', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(37, 'Gatot Prasetyo Utomo, SH.', 'Laptop Asus Zenbook', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(38, 'Tatuk Bayu Suryaningtyas, A.Md', 'Laptop Premium Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(39, 'Zanri Nova Chalimi', 'Laptop Premium Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(40, 'Muhammad Masruri, S.Kom.', 'Laptop Premium Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(41, 'Ganggas Dwi Setya R. S.Kom.', 'Laptop Premium Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(42, 'Roidatul Hanifah', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28'),
(43, 'Retno Kustiah, S.T., M.Ap.', 'Laptop Asus', 11, 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Aktif', 'Sudah', 'Windows 11', '-', '2024-03-25 22:24:28', '2024-03-25 22:24:28');

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
(1, 'Switch Managable', '2', '2024-01-08', 'Tidak Baik', 'Tidak Bisa Diperbaiki', 'Akhmad Zainudin', 'Kena Petir', '2024-02-15 01:53:58', '2024-03-25 20:37:38'),
(2, 'Video Wall', '4', '2024-01-08', 'Tidak Baik', 'Menunggu Tim', 'Akhmad Zainudin', 'Kena Petir', '2024-02-15 02:20:54', '2024-03-24 22:19:13'),
(3, 'Wifi', '3', '2024-01-08', 'Tidak Baik', 'Tidak Bisa Diperbaiki', 'Akhmad Zainudin', 'Kena Petir', '2024-02-14 19:50:03', '2024-03-24 22:15:03'),
(4, 'Switch Hub', '3', '2024-01-08', 'Tidak Baik', 'Tidak Bisa Diperbaiki', 'Akhmad Zainudin', 'Kena Petir', '2024-02-14 21:30:46', '2024-03-24 23:12:19'),
(6, 'Converter FO', '2', '2024-01-08', 'Tidak Baik', 'Tidak Bisa Diperbaiki', 'Akhmad Zainudin', 'Kena Petir', '2024-03-24 23:12:47', '2024-03-24 23:12:47'),
(7, 'CPanel', '1', '2024-01-13', 'Tidak Baik', 'Upgrade', 'Agung Purwanto', '-', '2024-03-24 23:13:32', '2024-03-24 23:13:32');

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
(1, 'Eko Wibowo Saputro, S.Kom., M.Eng.', 'Laptop Asus', '2024-02-15 01:55:30', '2024-03-24 21:57:37'),
(2, 'Woni Oktavany', 'Laptop Acer Aspire', '2024-02-15 01:56:05', '2024-02-15 01:56:05'),
(3, 'Andhi Tyo Mardhian', 'Laptop Asus', '2024-03-24 21:41:51', '2024-03-24 21:41:51'),
(6, 'Roidatul Hanifahh', 'Laptop Apple', '2024-03-24 22:02:39', '2024-03-24 22:02:39'),
(7, 'Masruri', 'Laptop Dell', '2024-03-25 22:11:43', '2024-03-25 22:11:43'),
(8, 'Aditya Akbar Nugraha', 'Laptop Dell', '2024-03-25 22:11:43', '2024-03-25 22:12:13'),
(9, 'Zanri Nova Chalimi', 'Laptop Dell', '2024-03-25 22:13:43', '2024-03-25 22:13:43'),
(10, 'Fiklia Fitriani, S.STP., MM.', 'Laptop Dell', '2024-03-25 22:13:43', '2024-03-25 22:13:43'),
(11, 'Ery Rahayu, S.Sos.', 'Laptop Dell', '2024-03-25 22:13:43', '2024-03-25 22:13:43'),
(12, 'Dwi Yusi Sasepti, S.Sos., MM.', 'Laptop Dell', '2024-03-25 22:13:43', '2024-03-25 22:13:43'),
(13, 'Kurniyawati Puji Rahayu, A.Md.', 'Laptop Dell', '2024-03-25 22:14:42', '2024-03-25 22:14:42'),
(14, 'Mualim', 'Laptop Dell', '2024-03-25 22:14:42', '2024-03-25 22:14:42'),
(15, 'Ahmad Faisal', 'Laptop Dell', '2024-03-25 22:14:42', '2024-03-25 22:14:42'),
(16, 'M. Saddam Husein, S.E.', 'Laptop Dell', '2024-03-25 22:14:42', '2024-03-25 22:14:42'),
(17, 'Mohamad Fachrian Farochi', 'Laptop Apple', '2024-03-25 22:15:39', '2024-03-25 22:15:39'),
(18, 'M. Eko Nugroho', 'Laptop Apple', '2024-03-25 22:15:39', '2024-03-25 22:15:39'),
(19, 'Ellsa Bian Susanti', 'Laptop Apple', '2024-03-25 22:15:39', '2024-03-25 22:15:39'),
(20, 'Jimmi Zuliadi', 'Laptop Dell', '2024-03-25 22:17:25', '2024-03-25 22:17:25'),
(21, 'Ery Sudarti', 'Laptop Asus', '2024-03-25 22:17:25', '2024-03-25 22:17:25'),
(22, 'Ita Hastarita Agustin', 'Lapop Compaq', '2024-03-25 22:17:25', '2024-03-25 22:17:25'),
(23, 'Norma Wulandari', 'Laptop Asus', '2024-03-25 22:17:25', '2024-03-25 22:17:25'),
(24, 'Saiful Fariz, ST.', 'Laptop Asus', '2024-03-25 22:17:25', '2024-03-25 22:17:25'),
(25, 'Vandalia Riskha Agustina', 'Laptop Asus', '2024-03-25 22:17:25', '2024-03-25 22:17:25'),
(26, 'Akhmad Zainuddin, S.Kom.', 'Laptop Dell', '2024-03-25 22:19:09', '2024-03-25 22:19:09'),
(27, 'Gatot Prasetyo Utomo, SH.', 'Laptop Apple', '2024-03-25 22:19:09', '2024-03-25 22:19:09'),
(28, 'Bakti Tataryo, S.S.', 'Laptop Asus', '2024-03-25 22:19:09', '2024-03-25 22:19:09'),
(29, 'Agung Purwanto, S.Kom.', 'Laptop Asus', '2024-03-25 22:19:09', '2024-03-25 22:19:09'),
(30, 'Silvia Nurul Fata, S.Kom.', 'Laptop Asus', '2024-03-25 22:19:09', '2024-03-25 22:19:09'),
(31, 'Gatot Prasetyo Utomo, SH.', 'Laptop Asus Zenbook', '2024-03-25 22:20:04', '2024-03-25 22:20:04'),
(32, 'Tatuk Bayu Suryaningtyas, A.Md', 'Laptop Premium Asus', '2024-03-25 22:20:04', '2024-03-25 22:20:04'),
(33, 'Zanri Nova Chalimi', 'Laptop Premium Asus', '2024-03-25 22:20:35', '2024-03-25 22:20:35'),
(34, 'Muhammad Masruri, S.Kom.', 'Laptop Premium Asus', '2024-03-25 22:21:39', '2024-03-25 22:21:39'),
(35, 'Ganggas Dwi Setya R. S.Kom.', 'Laptop Premium Asus', '2024-03-25 22:21:39', '2024-03-25 22:21:39'),
(36, 'Roidatul Hanifah', 'Laptop Asus', '2024-03-25 22:21:39', '2024-03-25 22:21:39'),
(37, 'Retno Kustiah, S.T., M.Ap.', 'Laptop Asus', '2024-03-25 22:21:39', '2024-03-25 22:21:39');

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
(1, 'Operating System', 'Linux', '2024-02-15 04:29:16', '2024-03-24 22:32:42'),
(2, 'Office', 'WPS Office', '2024-02-15 04:29:16', '2024-03-24 22:32:56'),
(7, 'Operating System', 'Windows', '2024-03-24 23:14:00', '2024-03-24 23:14:00'),
(8, 'Operating System', 'Mac OS', '2024-03-24 23:14:11', '2024-03-24 23:14:11'),
(9, 'Antivirus', 'Windows Defender', '2024-03-24 23:14:27', '2024-03-24 23:14:27'),
(10, 'Antivirus', 'Smadav', '2024-03-24 23:14:37', '2024-03-24 23:14:37'),
(11, 'Design', 'Corel Draw', '2024-03-24 23:14:49', '2024-03-24 23:14:49'),
(12, 'Design', 'Adobe Photoshop', '2024-03-24 23:15:02', '2024-03-24 23:15:02'),
(13, 'Design', 'Adobe Illustrator', '2024-03-24 23:15:15', '2024-03-24 23:15:15'),
(14, 'Browser', 'Mozilla Firefox', '2024-03-24 23:15:27', '2024-03-24 23:15:27'),
(15, 'Browser', 'Google Chrome', '2024-03-24 23:15:40', '2024-03-24 23:15:40'),
(16, 'Text Editor', 'Visual Studio Code', '2024-03-24 23:16:01', '2024-03-24 23:16:01'),
(17, 'Text Editor', 'Notepad', '2024-03-24 23:16:12', '2024-03-24 23:16:12'),
(18, 'Text Editor', 'Sublime Text', '2024-03-24 23:16:25', '2024-03-24 23:16:25'),
(19, 'Remote', 'Any Desk', '2024-03-24 23:16:37', '2024-03-24 23:16:37'),
(20, 'Remote', 'VNC', '2024-03-24 23:16:48', '2024-03-24 23:16:48'),
(21, 'API Tester', 'Postman', '2024-03-24 23:17:02', '2024-03-24 23:17:02'),
(22, 'SQL Client', 'DBeaver', '2024-03-24 23:17:16', '2024-03-24 23:17:16'),
(23, 'SQL Client', 'phpMyAdmin', '2024-03-24 23:17:48', '2024-03-24 23:17:48'),
(24, 'SQL Client', 'Pgadmin', '2024-03-24 23:18:00', '2024-03-24 23:18:00'),
(25, 'Communication', 'WhatsApp', '2024-03-24 23:18:12', '2024-03-24 23:18:12'),
(26, 'Communication', 'Telegram', '2024-03-24 23:18:23', '2024-03-24 23:18:23'),
(27, 'Communication', 'Google Meet', '2024-03-24 23:18:34', '2024-03-24 23:18:34'),
(28, 'Communication', 'Zoom', '2024-03-24 23:18:44', '2024-03-24 23:18:44'),
(29, 'Office', 'Microsoft Office', '2024-03-24 23:19:01', '2024-03-24 23:19:01'),
(30, 'Office', 'PDF Reader', '2024-03-24 23:19:13', '2024-03-24 23:19:13'),
(31, 'Office', 'Open Office', '2024-03-24 23:19:25', '2024-03-24 23:19:25'),
(32, 'Office', 'Google Office', '2024-03-24 23:19:42', '2024-03-24 23:19:42'),
(33, 'Development', 'Docker', '2024-03-24 23:19:55', '2024-03-24 23:19:55'),
(34, 'Development', 'Proxmox', '2024-03-24 23:20:11', '2024-03-24 23:20:11'),
(35, 'Server', 'Cacti', '2024-03-24 23:20:23', '2024-03-24 23:20:33'),
(36, 'Server', 'Vmware', '2024-03-24 23:20:45', '2024-03-24 23:20:45'),
(37, 'Server', 'Proxmox', '2024-03-24 23:20:58', '2024-03-24 23:20:58'),
(38, 'Server', 'OS - Debian', '2024-03-24 23:21:24', '2024-03-24 23:21:24'),
(39, 'Server', 'OS - Ubuntu', '2024-03-24 23:21:36', '2024-03-24 23:21:36'),
(40, 'Server', 'OS -  Centos', '2024-03-24 23:21:52', '2024-03-24 23:21:52'),
(41, 'Server', 'Web Server - Apache', '2024-03-24 23:22:04', '2024-03-24 23:22:04'),
(42, 'Server', 'Web Server - NGINX', '2024-03-24 23:22:22', '2024-03-24 23:22:22'),
(43, 'Server', 'Database - mariadb', '2024-03-24 23:22:35', '2024-03-24 23:22:35'),
(44, 'Server', 'Database - mysql', '2024-03-24 23:22:47', '2024-03-24 23:22:47'),
(45, 'Server', 'Database - postgree', '2024-03-24 23:23:04', '2024-03-24 23:23:04');

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
  MODIFY `id_akuisisi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id_backup` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detailakuisisi`
--
ALTER TABLE `detailakuisisi`
  MODIFY `id_detailakuisisi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fisik`
--
ALTER TABLE `fisik`
  MODIFY `id_fisik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_pemegang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `id_whitelist` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
