-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 05:42 PM
-- Server version: 10.4.11-MariaDB-log
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_mailoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(11) NOT NULL,
  `api_id` int(255) NOT NULL,
  `node_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `api_tmp`
--

CREATE TABLE `api_tmp` (
  `id` int(255) NOT NULL,
  `api_id` varchar(255) NOT NULL,
  `node_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_tmp`
--

INSERT INTO `api_tmp` (`id`, `api_id`, `node_id`, `created_at`, `updated_at`) VALUES
(1, '3350317182022', 'MDEwOlJlcG9zaXRvcnkzMzUwMzE3MTg=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(2, '4397142582022', 'R_kgDOGjWB0g', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(3, '3198067762022', 'MDEwOlJlcG9zaXRvcnkzMTk4MDY3NzY=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(4, '3038704212022', 'MDEwOlJlcG9zaXRvcnkzMDM4NzA0MjE=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(5, '2824790802022', 'MDEwOlJlcG9zaXRvcnkyODI0NzkwODA=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(6, '3032876102022', 'MDEwOlJlcG9zaXRvcnkzMDMyODc2MTA=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(7, '2384324902022', 'MDEwOlJlcG9zaXRvcnkyMzg0MzI0OTA=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(8, '3066911502022', 'MDEwOlJlcG9zaXRvcnkzMDY2OTExNTA=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(9, '3572834562022', 'MDEwOlJlcG9zaXRvcnkzNTcyODM0NTY=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(10, '3572718002022', 'MDEwOlJlcG9zaXRvcnkzNTcyNzE4MDA=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(11, '4921910022022', 'R_kgDOHVY9Gg', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(12, '3061564612022', 'MDEwOlJlcG9zaXRvcnkzMDYxNTY0NjE=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(13, '3055345522022', 'MDEwOlJlcG9zaXRvcnkzMDU1MzQ1NTI=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(14, '2004934172022', 'MDEwOlJlcG9zaXRvcnkyMDA0OTM0MTc=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(15, '2731320842022', 'MDEwOlJlcG9zaXRvcnkyNzMxMzIwODQ=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(16, '3243810312022', 'MDEwOlJlcG9zaXRvcnkzMjQzODEwMzE=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(17, '3043249982022', 'MDEwOlJlcG9zaXRvcnkzMDQzMjQ5OTg=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(18, '2963781932022', 'MDEwOlJlcG9zaXRvcnkyOTYzNzgxOTM=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(19, '3071870242022', 'MDEwOlJlcG9zaXRvcnkzMDcxODcwMjQ=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(20, '2940010502022', 'MDEwOlJlcG9zaXRvcnkyOTQwMDEwNTA=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(21, '3090262382022', 'MDEwOlJlcG9zaXRvcnkzMDkwMjYyMzg=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(22, '3018196862022', 'MDEwOlJlcG9zaXRvcnkzMDE4MTk2ODY=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(23, '3064709492022', 'MDEwOlJlcG9zaXRvcnkzMDY0NzA5NDk=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(24, '3027483472022', 'MDEwOlJlcG9zaXRvcnkzMDI3NDgzNDc=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(25, '2974022522022', 'MDEwOlJlcG9zaXRvcnkyOTc0MDIyNTI=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(26, '3107197642022', 'MDEwOlJlcG9zaXRvcnkzMTA3MTk3NjQ=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(27, '3009749122022', 'MDEwOlJlcG9zaXRvcnkzMDA5NzQ5MTI=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(28, '3179765572022', 'MDEwOlJlcG9zaXRvcnkzMTc5NzY1NTc=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(29, '1671573502022', 'MDEwOlJlcG9zaXRvcnkxNjcxNTczNTA=', '2022-06-28 09:04:54', '2022-06-28 09:04:54'),
(30, '3237454972022', 'MDEwOlJlcG9zaXRvcnkzMjM3NDU0OTc=', '2022-06-28 09:04:54', '2022-06-28 09:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `unit_kerja` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `unit_kerja`, `created_at`, `updated_at`) VALUES
(5, 'kegiatan fullday sosialisasi kegiatan sakti', '2022-06-28', '2022-07-01', 3, '2022-06-27 03:25:53', '2022-06-27 07:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_01_062856_create_table-unitbagians_table', 2),
(6, '2021_10_02_073420_create_categories_table', 2),
(7, '2021_10_02_073953_create_courses_table', 3),
(8, '2021_10_02_075110_create_country_state_city_tables', 4),
(9, '2021_10_07_080957_create_ref_unitbagian_4_surat_masuks_table', 5),
(10, '2021_10_07_132954_create_tabel_surat_masuks_table', 6),
(11, '2021_11_06_072822_create_t_mainsurats_table', 6),
(12, '2021_11_21_080820_update_t_mainsurat', 7),
(13, '2022_01_30_164959_create_t_cobas_table', 8),
(14, '2022_05_23_094502_create_events_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `nama_pelaksana`
--

CREATE TABLE `nama_pelaksana` (
  `id` int(11) NOT NULL,
  `rkkl_id` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `nama_pelaksana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('budakcorporate.404notfound@gmail.com', '$2y$10$1eL8PeB0yPBtiiznq6FbzO1WCvIPxkS2kOzjya7fV9vnoJRHKkMxu', '2022-06-26 04:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_confirmjabatan`
--

CREATE TABLE `ref_confirmjabatan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_confirmjabatan`
--

INSERT INTO `ref_confirmjabatan` (`id`, `name`) VALUES
(1, 'Kepala Biro Perlengkapan'),
(2, 'Kepala Bagian'),
(3, 'Kepala Sub Bagian'),
(4, 'Staff / Pelaksana / Fungsional'),
(5, 'Super User'),
(6, 'bendahara bagian');

-- --------------------------------------------------------

--
-- Table structure for table `ref_dasar`
--

CREATE TABLE `ref_dasar` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `text_dasar` longtext NOT NULL,
  `tahun_anggaran` int(4) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0,
  `user_penginput_data` int(11) NOT NULL COMMENT 'users(id)',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_dasar`
--

INSERT INTO `ref_dasar` (`id`, `id_unitbagian`, `text_dasar`, `tahun_anggaran`, `locked`, `user_penginput_data`, `created_at`, `updated_at`) VALUES
(1, 3, 'Undang-Undang Nomor 17 Tahun 2003 tentang Keuangan Negara;', 2022, 1, 6, '2022-06-05 13:44:07', '2022-06-13 01:31:45'),
(2, 3, 'Undang-Undang Nomor 1 Tahun 2004, tentang Perbendaharaan Negara;', 2022, 1, 6, '2022-06-05 13:44:37', '2022-06-19 04:41:54'),
(3, 3, 'Undang-Undang Nomor 15 Tahun 2004 tentang Pemeriksaan Pengelolaan dan Tanggung Jawab Keuangan Negara;', 2022, 1, 6, '2022-06-05 13:44:56', '2022-06-18 14:52:15'),
(4, 3, 'Peraturan Pemerintah Nomor 71 Tahun 2010 tentang Standar Akuntansi Pemerintahan;', 2022, 1, 6, '2022-06-05 13:45:12', '2022-06-18 14:52:19'),
(5, 3, 'Peraturan Pemerintah Nomor 27 Tahun 2014 tentang Pengelolaan Barang Milik Negara/Daerah;', 2022, 1, 6, '2022-06-05 13:45:28', '2022-06-18 14:52:22'),
(6, 3, 'Peraturan Menteri Keuangan Republik Indonesia Nomor 181/PMK.06/2016, tentang Penatausahaan Barang Milik Negara;', 2022, 1, 6, '2022-06-05 13:45:46', '2022-06-18 14:52:26'),
(7, 3, 'Peraturan Menteri Keuangan Republik Indonesia Nomor 222/PMK.05/2016,  tentang Pedoman Penyusunan Laporan Keuangan Kementerian Negara/Lembaga;', 2022, 1, 6, '2022-06-05 13:46:24', '2022-06-18 14:52:32'),
(8, 3, 'Peraturan  Menteri Keuangan Nomor 69 Tahun 2016 tentang Tata Cara Rekonsiliasi BMN;', 2022, 1, 6, '2022-06-05 13:47:19', '2022-06-18 14:52:36'),
(9, 3, 'Peraturan Menteri Keuangan Nomor 165/PMK.02/2021 tentang Standar Biaya Masukan Tahun Anggaran 2022.', 2022, 1, 6, '2022-06-05 13:49:35', '2022-06-18 14:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `ref_jabatan`
--

CREATE TABLE `ref_jabatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitbagian_id` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `level_jabatan` int(1) NOT NULL COMMENT 'ref_confirmjabatan(id)',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ref_jabatan`
--

INSERT INTO `ref_jabatan` (`id`, `name`, `unitbagian_id`, `level_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Biro Perlengkapan', 1, 1, NULL, NULL),
(2, 'Kepala Bagian', 2, 2, NULL, NULL),
(3, 'Kepala Sub Bagian', 2, 3, NULL, NULL),
(4, 'Staff / Pelaksana / Fungsional', 2, 4, NULL, NULL),
(5, 'Kepala Bagian', 3, 2, NULL, NULL),
(6, 'Kepala Sub Bagian', 3, 3, NULL, NULL),
(7, 'Staff / Pelaksana / Fungsional', 3, 4, NULL, NULL),
(8, 'Kepala Bagian', 4, 2, NULL, NULL),
(9, 'Kepala Sub Bagian', 4, 3, NULL, NULL),
(10, 'Staff / Pelaksana / Fungsional', 4, 4, NULL, NULL),
(11, 'Kepala Bagian', 5, 2, NULL, NULL),
(12, 'Kepala Sub Bagian', 5, 3, NULL, NULL),
(13, 'Staff / Pelaksana / Fungsiona', 5, 4, NULL, NULL),
(14, 'Kepala Bagian', 6, 2, NULL, NULL),
(15, 'Kepala Sub Bagian', 6, 3, NULL, NULL),
(16, 'Staff / Pelaksana / Fungsional', 6, 4, NULL, NULL),
(17, 'Kepala Bagian', 7, 2, NULL, NULL),
(18, 'Kepala Sub Bagian', 7, 3, NULL, NULL),
(19, 'Staff / Pelaksana / Fungsional', 7, 4, NULL, NULL),
(20, 'Super User', 8, 5, NULL, NULL),
(21, 'Bendahara Bagian', 3, 6, NULL, NULL),
(22, 'Bendahara Bagian', 4, 6, NULL, NULL),
(23, 'Bendahara Bagian', 5, 6, NULL, NULL),
(24, 'Bendahara Bagian', 6, 6, NULL, NULL),
(25, 'Bendahara Bagian', 7, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_jabatanlengkap`
--

CREATE TABLE `ref_jabatanlengkap` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` int(11) NOT NULL COMMENT 'ref_jabatan(id)',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ref_jabatanlengkap`
--

INSERT INTO `ref_jabatanlengkap` (`id`, `name`, `jabatan_id`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Biro Perlengkapan', 1, NULL, NULL),
(2, 'Kepala Bagian T U (Persuratan)', 2, NULL, NULL),
(3, 'Kepala Sub Bagian TU (Persuratan)', 3, NULL, NULL),
(4, 'Staff / Pelaksana / Fungsional', 4, NULL, NULL),
(5, 'Kepala Bagian IKN', 5, NULL, NULL),
(6, 'Kepala Sub. Bagian Pendataan', 6, NULL, NULL),
(7, 'Kepala Sub. Bagian Pembukuan dan Neraca', 6, NULL, NULL),
(8, 'Kepala Sub. Bagian Statistik dan Pelaporan', 6, NULL, NULL),
(9, 'Staff / Pelaksana / Fungsional', 7, NULL, NULL),
(10, 'Kepala Bagian Bimon', 8, NULL, NULL),
(11, 'Kepala Sub. Bagian Bimbingan Dan Monitoring A', 9, NULL, NULL),
(12, 'Kepala Sub. Bagian Bimbingan Dan Monitoring B', 9, NULL, NULL),
(13, 'Kepala Sub. Bagian Bimbingan Dan Monitoring C', 9, NULL, NULL),
(14, 'Staff / Pelaksana / Fungsional', 10, NULL, NULL),
(15, 'Kepala Bagian Penghapusan', 11, NULL, NULL),
(16, 'Kepala Sub. Bagian Standarisasi Dan Penilaian', 12, NULL, NULL),
(17, 'Kepala Sub. Bagian Stakap', 12, NULL, NULL),
(18, 'Staff / Pelaksana / Fungsional', 13, NULL, NULL),
(19, 'Kepala Bagian PB I', 14, NULL, NULL),
(20, 'Kepala Sub. Bagian Analisa Evaluasi Pengadaan Barang I', 15, NULL, NULL),
(21, 'Kepala Sub. Bagian Analisa Kebutuhan Barang I', 15, NULL, NULL),
(22, 'Kepala Sub. Bagian Analisa Standarisasi Pengadaan Barang I', 15, NULL, NULL),
(23, 'Staff / Pelaksana / Fungsional', 16, NULL, NULL),
(24, 'Kepala Bagian PB II', 17, NULL, NULL),
(25, 'Kepala Sub. Bagian Analisa Evaluasi Pengadaan Barang II', 18, NULL, NULL),
(26, 'Kepala Sub. Bagian Analisa Kebutuhan Barang II', 18, NULL, NULL),
(27, 'Kepala Sub. Bagian Analisa Standarisasi Pengadaan Barang II', 18, NULL, NULL),
(28, 'Staff / Pelaksana / Fungsional', 19, NULL, NULL),
(29, 'Super User', 20, NULL, NULL),
(30, 'bendahara bagian ikn', 21, NULL, NULL),
(31, 'bendahara bagian bimon', 22, NULL, NULL),
(32, 'bendahara bagian penghapusan', 23, NULL, NULL),
(33, 'bendahara bagian pb 1', 24, NULL, NULL),
(34, 'bendahara bagian pb 2', 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_keuangan_uraian_kegiatan`
--

CREATE TABLE `ref_keuangan_uraian_kegiatan` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `kode_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_sub_menu_uraian_kegiatan` varchar(255) NOT NULL,
  `kelompok_pagu` varchar(255) NOT NULL,
  `pagu_anggaran` varchar(255) NOT NULL,
  `user_penginput_data` int(11) DEFAULT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_keuangan_uraian_kegiatan`
--

INSERT INTO `ref_keuangan_uraian_kegiatan` (`id`, `id_unitbagian`, `kode_uraian_kegiatan`, `nama_uraian_kegiatan`, `nama_sub_menu_uraian_kegiatan`, `kelompok_pagu`, `pagu_anggaran`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(1, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Transportasi [4 org x 16 lok x 1 pp]', '135.699.000', 6, 2022, '2022-06-05 23:54:34', '2022-06-19 12:19:29'),
(2, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Representatif [1 org x 3 lok x 6 hr]', '2.700.000', 6, 2022, '2022-06-05 23:55:39', '2022-06-18 11:24:00'),
(3, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Penginapan [4 org x 24 lok x 1 pp x 2 hr', '177.332.000', 6, 2022, '2022-06-05 23:59:04', '2022-06-05 23:59:04'),
(4, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Uang Harian [4 org x 24 lok x 3 hr]', '119.120.000', 6, 2022, '2022-06-06 00:00:33', '2022-06-06 00:00:33'),
(5, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk. Kementerian Negara/Lembaga (K/L)Unaudited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:03:58', '2022-06-06 00:03:58'),
(6, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk.Esl I Unaudited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:06:19', '2022-06-06 00:06:19'),
(7, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk.Kementerian Negara/Lembaga (K/L) Audited [8 ekp x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:07:28', '2022-06-06 00:07:28'),
(8, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk. Esl.1 Audited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:08:57', '2022-06-06 00:08:57'),
(9, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan Laporan Semester I tk. Kementerian Negara/Lembaga (K/L) [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:10:36', '2022-06-06 00:10:36'),
(11, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan Laporan Semester I tk. Esl.1 [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:11:46', '2022-06-06 00:11:46'),
(12, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Buku Profile Aset [8 eks x 1 set]', '5.340.000', 6, 2022, '2022-06-06 00:12:40', '2022-06-06 00:12:40'),
(13, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Transportasi [4 org x 6 lok x 1 pp]', '52.425.000', 6, 2022, '2022-06-06 00:15:11', '2022-06-06 00:15:11'),
(14, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Penginapan [4 org x 5 lok x 1 pp x 3 hr', '48.914.000', 6, 2022, '2022-06-06 00:16:24', '2022-06-06 00:16:24'),
(15, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Representatif', '1.050.000', 6, 2022, '2022-06-06 00:17:30', '2022-06-06 00:17:30'),
(16, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Uang Harian [4 org x 8 lok x 3 hr]', '30.540.000', 6, 2022, '2022-06-06 00:19:11', '2022-06-06 00:19:11'),
(17, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Tiket pesawat [2 keg]', '10.536.000', 6, 2022, '2022-06-06 00:20:35', '2022-06-06 00:20:35'),
(18, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Biaya Rill [2 keg]', '1.179.000', 6, 2022, '2022-06-06 00:21:46', '2022-06-06 00:21:46'),
(19, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Penginapan [3 keg]', '28.552.000', 6, 2022, '2022-06-06 00:22:41', '2022-06-06 00:22:41'),
(20, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Uang Harian [3 keg]', '25.800.000', 6, 2022, '2022-06-06 00:23:36', '2022-06-06 00:23:36'),
(21, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Transportasi [6 org x 6 lok x 1 pp]', '87.210.000', 6, 2022, '2022-06-06 00:24:52', '2022-06-06 00:24:52'),
(22, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Biaya Rill [9 org x 7 lok x 1 pp]', '37.800.000', 6, 2022, '2022-06-06 00:25:53', '2022-06-06 00:25:53'),
(23, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Penginapan [9 org x 3 lok x 3 hr x 2 hr', '103.950.000', 6, 2022, '2022-06-06 00:27:00', '2022-06-06 00:27:00'),
(24, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Uang Harian [9 org x 7 lok x 4 hr]', '105.840.000', 6, 2022, '2022-06-06 00:28:41', '2022-06-06 00:28:41'),
(25, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Penginapan', '105.600.000', 6, 2022, '2022-06-06 00:29:49', '2022-06-13 05:09:43'),
(26, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Uang Harian', '95.890.000', 6, 2022, '2022-06-06 00:31:26', '2022-06-13 05:16:04'),
(31, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Melaksanakan Verifikasi dan Validasi Data BMN, Penyusunan laporan Audited', 'Penginapan [13 org x 8 keg x 4 hr]', '291.200.000', 6, 2022, '2022-06-06 00:36:42', '2022-06-06 00:36:42'),
(32, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Melaksanakan Verifikasi dan Validasi Data BMN, Penyusunan laporan Audited', 'Uang Harian [13 org x 8 keg x 5 hr]', '223.600.000', 6, 2022, '2022-06-06 00:37:33', '2022-06-06 00:37:33'),
(33, 3, '068.EBA.956.053.D.521211', 'Penilaian PIPK', 'Pelaporan dan evaluasi', 'Belanja bahan kegiatan', '21.150.000', 6, 2022, '2022-06-06 00:39:05', '2022-06-06 00:39:05'),
(34, 3, '068.EBA.956.053.D.522151', 'Penilaian PIPK', 'Belanja Jasa Profesi', 'Narasumber [2 org x 9 keg]', '16.200.000', 6, 2022, '2022-06-06 00:43:14', '2022-06-06 00:55:05'),
(35, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Tiket pesawat [3 org x 31 lok x 1 pp]', '247.428.000', 6, 2022, '2022-06-06 00:44:57', '2022-06-06 00:44:57'),
(36, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Biaya Rill [3 org x 31 lok x 1 pp]', '130.200.000', 6, 2022, '2022-06-06 00:46:04', '2022-06-06 00:46:04'),
(37, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Penginapan [3 org x 31 lok x 3 hr]', '237.150.000', 6, 2022, '2022-06-06 00:46:56', '2022-06-06 00:46:56'),
(38, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Uang Harian [3 org x 31 lok x 4 hr]', '156.240.000', 6, 2022, '2022-06-06 00:48:18', '2022-06-06 00:48:18'),
(39, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Paket Fullday [21 org x 9 keg x 1 hr]', '81.270.000', 6, 2022, '2022-06-06 00:49:25', '2022-06-06 00:49:25'),
(40, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Uang saku kegiatan [21 org x 9 keg x 1 hr]', '39.690.000', 6, 2022, '2022-06-06 00:50:23', '2022-06-06 00:50:23'),
(41, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Transport kegiatan [21 org x 9 keg x 1 hr]', '30.840.000', 6, 2022, '2022-06-06 00:51:09', '2022-06-06 00:51:09'),
(42, 3, '068.EBA.956.053.E.521211', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Belanja Bahan Kegiatan [1 keg]', '23.900.000', 6, 2022, '2022-06-06 00:52:02', '2022-06-06 00:52:02'),
(43, 3, '068.EBA.956.053.E.522151', 'Penyusunan Laporan Penatausahaan BMN', 'Belanja Jasa Profesi', 'Narasumber [2 org x 6 keg]', '10.800.000', 6, 2022, '2022-06-06 00:53:24', '2022-06-06 00:55:29'),
(44, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Paket Fullday [33 org x 6 keg x 1 hr]', '85.140.000', 6, 2022, '2022-06-06 00:57:54', '2022-06-06 00:57:54'),
(45, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Uang saku kegiatan [33 org x 6 keg x 1 hr]', '41.580.000', 6, 2022, '2022-06-06 00:58:38', '2022-06-06 00:58:38'),
(46, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Transport kegiatan [6 KEG]', '30.480.000', 6, 2022, '2022-06-06 00:59:29', '2022-06-06 00:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `ref_keuangan_uraian_kegiatan_bck`
--

CREATE TABLE `ref_keuangan_uraian_kegiatan_bck` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `kode_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_sub_menu_uraian_kegiatan` varchar(255) NOT NULL,
  `kelompok_pagu` varchar(255) NOT NULL,
  `pagu_anggaran` varchar(255) NOT NULL,
  `user_penginput_data` int(11) DEFAULT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_keuangan_uraian_kegiatan_bck`
--

INSERT INTO `ref_keuangan_uraian_kegiatan_bck` (`id`, `id_unitbagian`, `kode_uraian_kegiatan`, `nama_uraian_kegiatan`, `nama_sub_menu_uraian_kegiatan`, `kelompok_pagu`, `pagu_anggaran`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(1, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Transportasi [4 org x 16 lok x 1 pp]', '135.699.000', 6, 2022, '2022-06-05 23:54:34', '2022-06-05 23:54:34'),
(2, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Representatif [1 org x 3 lok x 6 hr]', '2.700.000', 6, 2022, '2022-06-05 23:55:39', '2022-06-05 23:55:39'),
(3, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Penginapan [4 org x 24 lok x 1 pp x 2 hr', '177.332.000', 6, 2022, '2022-06-05 23:59:04', '2022-06-05 23:59:04'),
(4, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Uang Harian [4 org x 24 lok x 3 hr]', '119.120.000', 6, 2022, '2022-06-06 00:00:33', '2022-06-06 00:00:33'),
(5, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk. Kementerian Negara/Lembaga (K/L)Unaudited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:03:58', '2022-06-06 00:03:58'),
(6, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk.Esl I Unaudited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:06:19', '2022-06-06 00:06:19'),
(7, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk.Kementerian Negara/Lembaga (K/L) Audited [8 ekp x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:07:28', '2022-06-06 00:07:28'),
(8, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk. Esl.1 Audited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:08:57', '2022-06-06 00:08:57'),
(9, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan Laporan Semester I tk. Kementerian Negara/Lembaga (K/L) [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:10:36', '2022-06-06 00:10:36'),
(11, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan Laporan Semester I tk. Esl.1 [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:11:46', '2022-06-06 00:11:46'),
(12, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Buku Profile Aset [8 eks x 1 set]', '5.340.000', 6, 2022, '2022-06-06 00:12:40', '2022-06-06 00:12:40'),
(13, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Transportasi [4 org x 6 lok x 1 pp]', '52.425.000', 6, 2022, '2022-06-06 00:15:11', '2022-06-06 00:15:11'),
(14, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Penginapan [4 org x 5 lok x 1 pp x 3 hr', '48.914.000', 6, 2022, '2022-06-06 00:16:24', '2022-06-06 00:16:24'),
(15, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Representatif', '1.050.000', 6, 2022, '2022-06-06 00:17:30', '2022-06-06 00:17:30'),
(16, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Uang Harian [4 org x 8 lok x 3 hr]', '30.540.000', 6, 2022, '2022-06-06 00:19:11', '2022-06-06 00:19:11'),
(17, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Tiket pesawat [2 keg]', '10.536.000', 6, 2022, '2022-06-06 00:20:35', '2022-06-06 00:20:35'),
(18, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Biaya Rill [2 keg]', '1.179.000', 6, 2022, '2022-06-06 00:21:46', '2022-06-06 00:21:46'),
(19, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Penginapan [3 keg]', '28.552.000', 6, 2022, '2022-06-06 00:22:41', '2022-06-06 00:22:41'),
(20, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Uang Harian [3 keg]', '25.800.000', 6, 2022, '2022-06-06 00:23:36', '2022-06-06 00:23:36'),
(21, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Transportasi [6 org x 6 lok x 1 pp]', '87.210.000', 6, 2022, '2022-06-06 00:24:52', '2022-06-06 00:24:52'),
(22, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Biaya Rill [9 org x 7 lok x 1 pp]', '37.800.000', 6, 2022, '2022-06-06 00:25:53', '2022-06-06 00:25:53'),
(23, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Penginapan [9 org x 3 lok x 3 hr x 2 hr', '103.950.000', 6, 2022, '2022-06-06 00:27:00', '2022-06-06 00:27:00'),
(24, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Uang Harian [9 org x 7 lok x 4 hr]', '105.840.000', 6, 2022, '2022-06-06 00:28:41', '2022-06-06 00:28:41'),
(25, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Penginapan [12 org x 1 keg x 3 hr]', '21.600.000', 6, 2022, '2022-06-06 00:29:49', '2022-06-06 00:29:49'),
(26, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Uang Harian [12 org x 1 keg x 4 hr]', '20.640.000', 6, 2022, '2022-06-06 00:31:26', '2022-06-06 00:31:26'),
(27, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Penginapan [20 org x 1 keg x 4 hr]', '48.000.000', 6, 2022, '2022-06-06 00:32:33', '2022-06-06 00:32:33'),
(28, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Uang Harian [20 org x 1 keg x 5 hr]', '43.000.000', 6, 2022, '2022-06-06 00:33:17', '2022-06-06 00:33:17'),
(29, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Penginapan [15 org x 1 keg x 4 hr]', '36.000.000', 6, 2022, '2022-06-06 00:33:58', '2022-06-06 00:33:58'),
(30, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Uang Harian [15 org x 1 keg x 5 hr]', '32.250.000', 6, 2022, '2022-06-06 00:34:45', '2022-06-06 00:34:45'),
(31, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Melaksanakan Verifikasi dan Validasi Data BMN, Penyusunan laporan Audited', 'Penginapan [13 org x 8 keg x 4 hr]', '291.200.000', 6, 2022, '2022-06-06 00:36:42', '2022-06-06 00:36:42'),
(32, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Melaksanakan Verifikasi dan Validasi Data BMN, Penyusunan laporan Audited', 'Uang Harian [13 org x 8 keg x 5 hr]', '223.600.000', 6, 2022, '2022-06-06 00:37:33', '2022-06-06 00:37:33'),
(33, 3, '068.EBA.956.053.D.521211', 'Penilaian PIPK', 'Pelaporan dan evaluasi', 'Belanja bahan kegiatan', '21.150.000', 6, 2022, '2022-06-06 00:39:05', '2022-06-06 00:39:05'),
(34, 3, '068.EBA.956.053.D.522151', 'Penilaian PIPK', 'Belanja Jasa Profesi', 'Narasumber [2 org x 9 keg]', '16.200.000', 6, 2022, '2022-06-06 00:43:14', '2022-06-06 00:55:05'),
(35, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Tiket pesawat [3 org x 31 lok x 1 pp]', '247.428.000', 6, 2022, '2022-06-06 00:44:57', '2022-06-06 00:44:57'),
(36, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Biaya Rill [3 org x 31 lok x 1 pp]', '130.200.000', 6, 2022, '2022-06-06 00:46:04', '2022-06-06 00:46:04'),
(37, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Penginapan [3 org x 31 lok x 3 hr]', '237.150.000', 6, 2022, '2022-06-06 00:46:56', '2022-06-06 00:46:56'),
(38, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Uang Harian [3 org x 31 lok x 4 hr]', '156.240.000', 6, 2022, '2022-06-06 00:48:18', '2022-06-06 00:48:18'),
(39, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Paket Fullday [21 org x 9 keg x 1 hr]', '81.270.000', 6, 2022, '2022-06-06 00:49:25', '2022-06-06 00:49:25'),
(40, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Uang saku kegiatan [21 org x 9 keg x 1 hr]', '39.690.000', 6, 2022, '2022-06-06 00:50:23', '2022-06-06 00:50:23'),
(41, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Transport kegiatan [21 org x 9 keg x 1 hr]', '30.840.000', 6, 2022, '2022-06-06 00:51:09', '2022-06-06 00:51:09'),
(42, 3, '068.EBA.956.053.E.521211', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Belanja Bahan Kegiatan [1 keg]', '23.900.000', 6, 2022, '2022-06-06 00:52:02', '2022-06-06 00:52:02'),
(43, 3, '068.EBA.956.053.E.522151', 'Penyusunan Laporan Penatausahaan BMN', 'Belanja Jasa Profesi', 'Narasumber [2 org x 6 keg]', '10.800.000', 6, 2022, '2022-06-06 00:53:24', '2022-06-06 00:55:29'),
(44, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Paket Fullday [33 org x 6 keg x 1 hr]', '85.140.000', 6, 2022, '2022-06-06 00:57:54', '2022-06-06 00:57:54'),
(45, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Uang saku kegiatan [33 org x 6 keg x 1 hr]', '41.580.000', 6, 2022, '2022-06-06 00:58:38', '2022-06-06 00:58:38'),
(46, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Transport kegiatan [6 KEG]', '30.480.000', 6, 2022, '2022-06-06 00:59:29', '2022-06-06 00:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `ref_keuangan_uraian_kegiatan_bck_25062022`
--

CREATE TABLE `ref_keuangan_uraian_kegiatan_bck_25062022` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `kode_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_sub_menu_uraian_kegiatan` varchar(255) NOT NULL,
  `kelompok_pagu` varchar(255) NOT NULL,
  `pagu_anggaran` varchar(255) NOT NULL,
  `user_penginput_data` int(11) DEFAULT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_keuangan_uraian_kegiatan_bck_25062022`
--

INSERT INTO `ref_keuangan_uraian_kegiatan_bck_25062022` (`id`, `id_unitbagian`, `kode_uraian_kegiatan`, `nama_uraian_kegiatan`, `nama_sub_menu_uraian_kegiatan`, `kelompok_pagu`, `pagu_anggaran`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(1, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Transportasi [4 org x 16 lok x 1 pp]', '135.699.000', 6, 2022, '2022-06-05 23:54:34', '2022-06-19 12:19:29'),
(2, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Representatif [1 org x 3 lok x 6 hr]', '2.700.000', 6, 2022, '2022-06-05 23:55:39', '2022-06-18 11:24:00'),
(3, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Penginapan [4 org x 24 lok x 1 pp x 2 hr', '177.332.000', 6, 2022, '2022-06-05 23:59:04', '2022-06-05 23:59:04'),
(4, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Uang Harian [4 org x 24 lok x 3 hr]', '119.120.000', 6, 2022, '2022-06-06 00:00:33', '2022-06-06 00:00:33'),
(5, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk. Kementerian Negara/Lembaga (K/L)Unaudited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:03:58', '2022-06-06 00:03:58'),
(6, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk.Esl I Unaudited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:06:19', '2022-06-06 00:06:19'),
(7, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk.Kementerian Negara/Lembaga (K/L) Audited [8 ekp x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:07:28', '2022-06-06 00:07:28'),
(8, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk. Esl.1 Audited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:08:57', '2022-06-06 00:08:57'),
(9, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan Laporan Semester I tk. Kementerian Negara/Lembaga (K/L) [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:10:36', '2022-06-06 00:10:36'),
(11, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan Laporan Semester I tk. Esl.1 [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:11:46', '2022-06-06 00:11:46'),
(12, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Buku Profile Aset [8 eks x 1 set]', '5.340.000', 6, 2022, '2022-06-06 00:12:40', '2022-06-06 00:12:40'),
(13, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Transportasi [4 org x 6 lok x 1 pp]', '52.425.000', 6, 2022, '2022-06-06 00:15:11', '2022-06-06 00:15:11'),
(14, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Penginapan [4 org x 5 lok x 1 pp x 3 hr', '48.914.000', 6, 2022, '2022-06-06 00:16:24', '2022-06-06 00:16:24'),
(15, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Representatif', '1.050.000', 6, 2022, '2022-06-06 00:17:30', '2022-06-06 00:17:30'),
(16, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Uang Harian [4 org x 8 lok x 3 hr]', '30.540.000', 6, 2022, '2022-06-06 00:19:11', '2022-06-06 00:19:11'),
(17, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Tiket pesawat [2 keg]', '10.536.000', 6, 2022, '2022-06-06 00:20:35', '2022-06-06 00:20:35'),
(18, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Biaya Rill [2 keg]', '1.179.000', 6, 2022, '2022-06-06 00:21:46', '2022-06-06 00:21:46'),
(19, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Penginapan [3 keg]', '28.552.000', 6, 2022, '2022-06-06 00:22:41', '2022-06-06 00:22:41'),
(20, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Uang Harian [3 keg]', '25.800.000', 6, 2022, '2022-06-06 00:23:36', '2022-06-06 00:23:36'),
(21, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Transportasi [6 org x 6 lok x 1 pp]', '87.210.000', 6, 2022, '2022-06-06 00:24:52', '2022-06-06 00:24:52'),
(22, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Biaya Rill [9 org x 7 lok x 1 pp]', '37.800.000', 6, 2022, '2022-06-06 00:25:53', '2022-06-06 00:25:53'),
(23, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Penginapan [9 org x 3 lok x 3 hr x 2 hr', '103.950.000', 6, 2022, '2022-06-06 00:27:00', '2022-06-06 00:27:00'),
(24, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Uang Harian [9 org x 7 lok x 4 hr]', '105.840.000', 6, 2022, '2022-06-06 00:28:41', '2022-06-06 00:28:41'),
(25, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Penginapan', '105.600.000', 6, 2022, '2022-06-06 00:29:49', '2022-06-13 05:09:43'),
(26, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Uang Harian', '95.890.000', 6, 2022, '2022-06-06 00:31:26', '2022-06-13 05:16:04'),
(31, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Melaksanakan Verifikasi dan Validasi Data BMN, Penyusunan laporan Audited', 'Penginapan [13 org x 8 keg x 4 hr]', '291.200.000', 6, 2022, '2022-06-06 00:36:42', '2022-06-06 00:36:42'),
(32, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Melaksanakan Verifikasi dan Validasi Data BMN, Penyusunan laporan Audited', 'Uang Harian [13 org x 8 keg x 5 hr]', '223.600.000', 6, 2022, '2022-06-06 00:37:33', '2022-06-06 00:37:33'),
(33, 3, '068.EBA.956.053.D.521211', 'Penilaian PIPK', 'Pelaporan dan evaluasi', 'Belanja bahan kegiatan', '21.150.000', 6, 2022, '2022-06-06 00:39:05', '2022-06-06 00:39:05'),
(34, 3, '068.EBA.956.053.D.522151', 'Penilaian PIPK', 'Belanja Jasa Profesi', 'Narasumber [2 org x 9 keg]', '16.200.000', 6, 2022, '2022-06-06 00:43:14', '2022-06-06 00:55:05'),
(35, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Tiket pesawat [3 org x 31 lok x 1 pp]', '247.428.000', 6, 2022, '2022-06-06 00:44:57', '2022-06-06 00:44:57'),
(36, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Biaya Rill [3 org x 31 lok x 1 pp]', '130.200.000', 6, 2022, '2022-06-06 00:46:04', '2022-06-06 00:46:04'),
(37, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Penginapan [3 org x 31 lok x 3 hr]', '237.150.000', 6, 2022, '2022-06-06 00:46:56', '2022-06-06 00:46:56'),
(38, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Uang Harian [3 org x 31 lok x 4 hr]', '156.240.000', 6, 2022, '2022-06-06 00:48:18', '2022-06-06 00:48:18'),
(39, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Paket Fullday [21 org x 9 keg x 1 hr]', '81.270.000', 6, 2022, '2022-06-06 00:49:25', '2022-06-06 00:49:25'),
(40, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Uang saku kegiatan [21 org x 9 keg x 1 hr]', '39.690.000', 6, 2022, '2022-06-06 00:50:23', '2022-06-06 00:50:23'),
(41, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Transport kegiatan [21 org x 9 keg x 1 hr]', '30.840.000', 6, 2022, '2022-06-06 00:51:09', '2022-06-06 00:51:09'),
(42, 3, '068.EBA.956.053.E.521211', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Belanja Bahan Kegiatan [1 keg]', '23.900.000', 6, 2022, '2022-06-06 00:52:02', '2022-06-06 00:52:02'),
(43, 3, '068.EBA.956.053.E.522151', 'Penyusunan Laporan Penatausahaan BMN', 'Belanja Jasa Profesi', 'Narasumber [2 org x 6 keg]', '10.800.000', 6, 2022, '2022-06-06 00:53:24', '2022-06-06 00:55:29'),
(44, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Paket Fullday [33 org x 6 keg x 1 hr]', '85.140.000', 6, 2022, '2022-06-06 00:57:54', '2022-06-06 00:57:54'),
(45, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Uang saku kegiatan [33 org x 6 keg x 1 hr]', '41.580.000', 6, 2022, '2022-06-06 00:58:38', '2022-06-06 00:58:38'),
(46, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Transport kegiatan [6 KEG]', '30.480.000', 6, 2022, '2022-06-06 00:59:29', '2022-06-06 00:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `ref_keuangan_uraian_kegiatan_bck_27062022`
--

CREATE TABLE `ref_keuangan_uraian_kegiatan_bck_27062022` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `kode_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_sub_menu_uraian_kegiatan` varchar(255) NOT NULL,
  `kelompok_pagu` varchar(255) NOT NULL,
  `pagu_anggaran` varchar(255) NOT NULL,
  `user_penginput_data` int(11) DEFAULT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_keuangan_uraian_kegiatan_bck_27062022`
--

INSERT INTO `ref_keuangan_uraian_kegiatan_bck_27062022` (`id`, `id_unitbagian`, `kode_uraian_kegiatan`, `nama_uraian_kegiatan`, `nama_sub_menu_uraian_kegiatan`, `kelompok_pagu`, `pagu_anggaran`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(1, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Transportasi [4 org x 16 lok x 1 pp]', '135.699.000', 6, 2022, '2022-06-05 23:54:34', '2022-06-19 12:19:29'),
(2, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Representatif [1 org x 3 lok x 6 hr]', '2.700.000', 6, 2022, '2022-06-05 23:55:39', '2022-06-18 11:24:00'),
(3, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Penginapan [4 org x 24 lok x 1 pp x 2 hr', '177.332.000', 6, 2022, '2022-06-05 23:59:04', '2022-06-05 23:59:04'),
(4, 3, '1068.EBA.956.053.A.524111', 'Inventarisasi dan Pendataan BMN', 'Penyusunan Data Inventarisasi BMN Wil.Sumatera dan Jawa', 'Uang Harian [4 org x 24 lok x 3 hr]', '119.120.000', 6, 2022, '2022-06-06 00:00:33', '2022-06-06 00:00:33'),
(5, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk. Kementerian Negara/Lembaga (K/L)Unaudited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:03:58', '2022-06-06 00:03:58'),
(6, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk.Esl I Unaudited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:06:19', '2022-06-06 00:06:19'),
(7, 3, '1068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk.Kementerian Negara/Lembaga (K/L) Audited [8 ekp x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:07:28', '2022-06-06 00:07:28'),
(8, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan laporan tk. Esl.1 Audited [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:08:57', '2022-06-06 00:08:57'),
(9, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan Laporan Semester I tk. Kementerian Negara/Lembaga (K/L) [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:10:36', '2022-06-06 00:10:36'),
(11, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Pengadaan pencetakan Laporan Semester I tk. Esl.1 [8 eks x 1 set x 1 smt]', '4.800.000', 6, 2022, '2022-06-06 00:11:46', '2022-06-06 00:11:46'),
(12, 3, '068.EBA.956.053.B.521211', 'Pembukuan BMN', 'Akurasi Data Pembukuan Neraca BMN', 'Buku Profile Aset [8 eks x 1 set]', '5.340.000', 6, 2022, '2022-06-06 00:12:40', '2022-06-06 00:12:40'),
(13, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Transportasi [4 org x 6 lok x 1 pp]', '52.425.000', 6, 2022, '2022-06-06 00:15:11', '2022-06-06 00:15:11'),
(14, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Penginapan [4 org x 5 lok x 1 pp x 3 hr', '48.914.000', 6, 2022, '2022-06-06 00:16:24', '2022-06-06 00:16:24'),
(15, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Representatif', '1.050.000', 6, 2022, '2022-06-06 00:17:30', '2022-06-06 00:17:30'),
(16, 3, '068.EBA.956.053.B.524111', 'Pembukuan BMN', 'Melakukan Verifikasi, Evaluasi, Asistensi Penyusunan Usulan PSP dan Inventarisasi Bukti Kepemilikan Tanah', 'Uang Harian [4 org x 8 lok x 3 hr]', '30.540.000', 6, 2022, '2022-06-06 00:19:11', '2022-06-06 00:19:11'),
(17, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Tiket pesawat [2 keg]', '10.536.000', 6, 2022, '2022-06-06 00:20:35', '2022-06-06 00:20:35'),
(18, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Biaya Rill [2 keg]', '1.179.000', 6, 2022, '2022-06-06 00:21:46', '2022-06-06 00:21:46'),
(19, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Penginapan [3 keg]', '28.552.000', 6, 2022, '2022-06-06 00:22:41', '2022-06-06 00:22:41'),
(20, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Evaluasi Penyusunan Laporan BMN Tingkat Wilayah', 'Uang Harian [3 keg]', '25.800.000', 6, 2022, '2022-06-06 00:23:36', '2022-06-06 00:23:36'),
(21, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Transportasi [6 org x 6 lok x 1 pp]', '87.210.000', 6, 2022, '2022-06-06 00:24:52', '2022-06-06 00:24:52'),
(22, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Biaya Rill [9 org x 7 lok x 1 pp]', '37.800.000', 6, 2022, '2022-06-06 00:25:53', '2022-06-06 00:25:53'),
(23, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Penginapan [9 org x 3 lok x 3 hr x 2 hr', '103.950.000', 6, 2022, '2022-06-06 00:27:00', '2022-06-06 00:27:00'),
(24, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Tindak Lanjut Temuan BPK', 'Uang Harian [9 org x 7 lok x 4 hr]', '105.840.000', 6, 2022, '2022-06-06 00:28:41', '2022-06-06 00:28:41'),
(25, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Penginapan', '105.600.000', 6, 2022, '2022-06-06 00:29:49', '2022-06-13 05:09:43'),
(26, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Penyusunan Laporan Unaudited', 'Uang Harian', '95.890.000', 6, 2022, '2022-06-06 00:31:26', '2022-06-13 05:16:04'),
(31, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Melaksanakan Verifikasi dan Validasi Data BMN, Penyusunan laporan Audited', 'Penginapan [13 org x 8 keg x 4 hr]', '291.200.000', 6, 2022, '2022-06-06 00:36:42', '2022-06-06 00:36:42'),
(32, 3, '068.EBA.956.053.C.524111', 'Penatausahaan BMN', 'Melaksanakan Verifikasi dan Validasi Data BMN, Penyusunan laporan Audited', 'Uang Harian [13 org x 8 keg x 5 hr]', '223.600.000', 6, 2022, '2022-06-06 00:37:33', '2022-06-06 00:37:33'),
(33, 3, '068.EBA.956.053.D.521211', 'Penilaian PIPK', 'Pelaporan dan evaluasi', 'Belanja bahan kegiatan', '21.150.000', 6, 2022, '2022-06-06 00:39:05', '2022-06-06 00:39:05'),
(34, 3, '068.EBA.956.053.D.522151', 'Penilaian PIPK', 'Belanja Jasa Profesi', 'Narasumber [2 org x 9 keg]', '16.200.000', 6, 2022, '2022-06-06 00:43:14', '2022-06-06 00:55:05'),
(35, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Tiket pesawat [3 org x 31 lok x 1 pp]', '247.428.000', 6, 2022, '2022-06-06 00:44:57', '2022-06-06 00:44:57'),
(36, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Biaya Rill [3 org x 31 lok x 1 pp]', '130.200.000', 6, 2022, '2022-06-06 00:46:04', '2022-06-06 00:46:04'),
(37, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Penginapan [3 org x 31 lok x 3 hr]', '237.150.000', 6, 2022, '2022-06-06 00:46:56', '2022-06-06 00:46:56'),
(38, 3, '068.EBA.956.053.D.524111', 'Penilaian PIPK', 'Penilaian Pengendalian Intern atas Pelaporan Keuangan', 'Uang Harian [3 org x 31 lok x 4 hr]', '156.240.000', 6, 2022, '2022-06-06 00:48:18', '2022-06-06 00:48:18'),
(39, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Paket Fullday [21 org x 9 keg x 1 hr]', '81.270.000', 6, 2022, '2022-06-06 00:49:25', '2022-06-06 00:49:25'),
(40, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Uang saku kegiatan [21 org x 9 keg x 1 hr]', '39.690.000', 6, 2022, '2022-06-06 00:50:23', '2022-06-06 00:50:23'),
(41, 3, '068.EBA.956.053.D.524114', 'Penilaian PIPK', 'Penyusunan Laporn Hasil Penilaian PIPK', 'Transport kegiatan [21 org x 9 keg x 1 hr]', '30.840.000', 6, 2022, '2022-06-06 00:51:09', '2022-06-06 00:51:09'),
(42, 3, '068.EBA.956.053.E.521211', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Belanja Bahan Kegiatan [1 keg]', '23.900.000', 6, 2022, '2022-06-06 00:52:02', '2022-06-06 00:52:02'),
(43, 3, '068.EBA.956.053.E.522151', 'Penyusunan Laporan Penatausahaan BMN', 'Belanja Jasa Profesi', 'Narasumber [2 org x 6 keg]', '10.800.000', 6, 2022, '2022-06-06 00:53:24', '2022-06-06 00:55:29'),
(44, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Paket Fullday [33 org x 6 keg x 1 hr]', '85.140.000', 6, 2022, '2022-06-06 00:57:54', '2022-06-06 00:57:54'),
(45, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Uang saku kegiatan [33 org x 6 keg x 1 hr]', '41.580.000', 6, 2022, '2022-06-06 00:58:38', '2022-06-06 00:58:38'),
(46, 3, '068.EBA.956.053.E.524114', 'Penyusunan Laporan Penatausahaan BMN', 'Rekonsiliasi Data', 'Transport kegiatan [6 KEG]', '30.480.000', 6, 2022, '2022-06-06 00:59:29', '2022-06-06 00:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kodemak`
--

CREATE TABLE `ref_kodemak` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `text_kodemak` longtext NOT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT 'users(id)',
  `tahun_anggaran` int(4) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_kodemak`
--

INSERT INTO `ref_kodemak` (`id`, `id_unitbagian`, `text_kodemak`, `user_penginput_data`, `tahun_anggaran`, `locked`, `created_at`, `updated_at`) VALUES
(1, 3, '1068.EBA.956.053.A 524111', 6, 2022, 1, '2022-06-05 14:29:49', '2022-06-13 02:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `ref_menimbang`
--

CREATE TABLE `ref_menimbang` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `urutan` varchar(1) NOT NULL,
  `text_menimbang` longtext NOT NULL,
  `tahun_anggaran` int(4) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0,
  `user_penginput_data` int(11) NOT NULL COMMENT 'users(id)',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_menimbang`
--

INSERT INTO `ref_menimbang` (`id`, `id_unitbagian`, `urutan`, `text_menimbang`, `tahun_anggaran`, `locked`, `user_penginput_data`, `created_at`, `updated_at`) VALUES
(1, 3, 'a', 'Bahwa dalam rangka melaksanakan kegiatan Inventarisasi dan Pendataan BMN, perlu  ditugaskan Pegawai untuk melaksakan kegiatan tersebut.', 2022, 1, 6, '2022-06-05 13:03:14', '2022-06-12 17:09:54'),
(2, 3, 'b', 'Bahwa nama yang tercantum dalam surat tugas ini dipandang mampu melaksanakan tugas tersebut.', 2022, 1, 6, '2022-06-05 13:04:03', '2022-06-19 04:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `ref_nominatif_penginapan`
--

CREATE TABLE `ref_nominatif_penginapan` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL COMMENT 'ref_unitbagian(id)',
  `harga` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`harga`)),
  `locked` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_nominatif_penginapan`
--

INSERT INTO `ref_nominatif_penginapan` (`id`, `provinsi`, `harga`, `locked`, `created_at`, `updated_at`) VALUES
(2, 'aceh', '{ \"I\": \"1000000\", \"II\": \"2000000\" }', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_pelaksana`
--

CREATE TABLE `ref_pelaksana` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL COMMENT 'ref_unitbagian(id)',
  `nip` varchar(255) DEFAULT NULL,
  `gol` varchar(10) DEFAULT NULL,
  `eselon` varchar(10) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_pelaksana`
--

INSERT INTO `ref_pelaksana` (`id`, `nama`, `nip`, `gol`, `eselon`, `jabatan`, `locked`, `created_at`, `updated_at`) VALUES
(1, 'Sofyan Adi Irawan, S.Kom., MT.', '197710302009041001', 'III', 'IV', 'Kepala Sub Bagian Standarisasi Pengadaan Barang I Biro Perlengkapan', 0, '2022-07-02 17:00:00', '2022-07-04 02:10:48'),
(2, 'Arif Hidayat, S.E., M.H.', '197505072009121003', 'III', 'IV', 'Kepala Sub Bagian Analisa Kebutuhan Pengadaan Barang II Biro Perlengkapan ', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(3, 'Dimas Aryo Putra, SE.', '198212292009121005', 'III', 'IV', 'Kepala Sub Bagian Evaluasi Pengadaan Barang II Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(4, 'Nur Rahmat Baskara, S.E.', '198011022009121004', 'III', 'IV', 'Kepala Sub Bagian Bimbingan Dan Monitoring C Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(5, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(6, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(7, 'Arif Setiadi, S.H.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(8, 'Antonius Adhi Irianto, S.S', '198405072011011007', 'III', 'IV', 'Kepala Sub Bagian Tata Usaha Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(9, 'Wahyu Dhimas S, S.H., M.M.', '198210062008051001', 'III', 'IV', 'Kepala Sub Bagian Standarisasi Dan Penilaian Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(10, 'Adi Mardiansyah, S.Kom., M.M.', '198803252011011012', 'III', 'IV', 'Kepala Sub Bagian Bimbingan dan Monitoring A Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(11, 'Heni Lestari, S.H., M.M.', '197204121999032001', 'III', 'V', 'Penelaah Kebijakan Pengadaan Barang Dan Jasa pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(12, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan ', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(13, 'Lumaksono Sugiharto, S.E.', '198105302006041002', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(14, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(15, 'Falcon, S.H., M.H.', '198003242007041001', 'III', 'V', 'Analis Tata Usaha pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(16, 'Ulfah Apriyani, S.E., M.Ak.', '198603222011012013', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(17, 'A. Adriyanti Akbar, S.H., M.H.', '198802052011012013', 'III', 'V', 'Analis Tata Usaha pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(18, 'Ratna Yunita, ST', '197802062009042002', 'III', 'V', 'Pranata Keuangan APBN Pelaksanaan Lanjutan/Mahir pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(19, 'Devi Amelia, S.H.', '198406072008052001', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(20, 'David Achmad Wijaya, S.E.', '198603022008051001', 'III', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(21, 'Fitri Darmayanti, S.Kom.', '198909052015032001', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(22, 'Drajat Prakosa, S.H.', '199401242019031003', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(23, 'Kukuh Binanto, S.T', '199401242019031000', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(24, 'Silvani Elsa Fitriana, A.Md', '199007072019032011', 'III', 'V', 'Pengelola Sistem Dan Jaringan pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(25, 'Agus Wiguno, SE', '198703162019031004', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(26, 'Muhammad Naufal Mu`Tashim Billah, S.A.P.', '199409202019031003', 'III', 'V', 'Analis Monitoring Dan Evaluasi Pelaksanaan Anggaran pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(27, 'Syafar, A.Md.Kom., S.A.P.', '198405052010011019', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Biro Keuangan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(28, 'Zona Imania, SE', '199104102019032013', 'III', 'V', 'Analis Monitoring, Evaluasi dan Pelaporan pada Biro perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(29, 'Eka Andi Mardani, S.S.T.Ars.', '198710242020121003', 'III', 'V', 'Arsiparis Pertama pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(30, 'Anisa Dwi Yunianti, S.Hum', '199706192020122009', 'III', 'V', 'Arsiparis Ahli Pertama pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(31, 'Sari Alsaqati Ardana, A.Md.K.b.n', '200012182022012004', 'II', 'V', 'Pengelola Akuntansi pada Badan Pengawasan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(32, 'Beatrix Retta Celia, ST', '199508222020122009', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(33, 'Indah Niasty Manao, A.Md.Ak.', '199704132022032012', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(34, 'Susi Susanti Sinaga, A.Md', '199112192022032006', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(35, 'Riska Rohana Silalahi, A.Md', '199610112022032009', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(36, 'Sefti Kurniasih, A.Md.', '199909252022032002', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(37, 'Rendy Rumeza, A.Md.', '199002262022031002', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(38, 'Sari Soraya Sianturi, A.Md', '199711122022032013', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(39, 'Irvandy Rizky Septianno, A.Md.', '199709012022031007', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(40, 'Redimel Vischo, A.Md', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(41, 'Wahyudin', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(42, 'Lian Ariyanto, S.H', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(43, 'Vera Rosmamalini', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(44, 'Safrudin, S.H', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(45, 'Yunita, S.H, M.Kn', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(46, 'Rina Lastriana, S.H.', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(47, 'M. Syahnan Irawan, S.E', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(48, 'Ahmad Fauzi Ibrahim, S.KOM., M.M.', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(49, 'Hendro Prio Sasongko, SH', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(50, 'Ahmad Baidowi', '', '', '', 'PPNPN pada Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(51, 'Rosfiana, S.H., M.H', '197202042002121004', 'IV', 'II', 'Kepala Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(52, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag. Inventaris Kekayaan Negara Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(53, 'Marwendi Putra, S.T., M.M.', '197603142006041002', 'IV', 'III', 'Kepala Bagian Tata Laksana Pengadaan Barang I Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(54, 'Fany Widia, S.E., M.M.', '197202042002121004', 'IV', 'III', 'Kepala Bagian Tata Laksana Pengadaan Barang II Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(55, 'Irwansyah, S,H., M,H.', '196804291988031001', 'IV', 'III', 'Kepala Bagian Mutasi II BUA', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(56, 'Eko Prihanto, S.H.,M.H.', '198412282005021001', 'III', 'III', 'Kepala Bagian Bimbingan Dan Monitoring Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(57, 'Isrul, S.E., M.H.', '197002141999031002', 'III', 'IV', 'Kepala Sub Bagian Standarisasi Pengadaan Barang II Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(58, 'Budi Hendrasti, S.H., M.H.', '196708011994032004', 'III', 'IV', 'Kepala Sub Bagian Evaluasi Pengadaan Barang I Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00'),
(59, 'Marsilah, S.H.', '196406011987032001', 'III', 'IV', 'Kepala Sub Bagian Bimbingan Dan Monitoring B Biro Perlengkapan', 1, '2022-07-02 17:00:00', '2022-07-02 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_satuankerja`
--

CREATE TABLE `ref_satuankerja` (
  `id` int(11) NOT NULL,
  `nama_satuankerja` varchar(255) NOT NULL,
  `nominatif_penginapan` varchar(255) NOT NULL,
  `locked` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_satuankerja`
--

INSERT INTO `ref_satuankerja` (`id`, `nama_satuankerja`, `nominatif_penginapan`, `locked`, `created_at`, `updated_at`) VALUES
(1, 'PT Jakarta', '', 1, '2022-06-17 17:00:00', '2022-06-18 12:54:31'),
(2, 'PN Jakarta Pusat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(3, 'PN Jakarta Barat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(4, 'PN Jakarta Timur', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(5, 'PN Jakarta Selatan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(6, 'PN Jakarta Utara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(7, 'PA Jakarta Pusat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(8, 'PA Jakarta Utara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(9, 'PA Jakarta Barat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(10, 'PA Jakarta Timur', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(11, 'PA Jakarta Selatan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(12, 'PTA Jakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(13, 'PTTUN Jakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(14, 'PTUN Jakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(15, 'BUA ', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(16, 'DILMIL Utama', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(17, 'DIMILTI Ii Di Jakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(18, 'DILMILIi - 8 di Jakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(19, 'PT Bandung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(20, 'PN Bandung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(21, 'PN Sumedang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(22, 'PN Tasikmalaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(23, 'PN Garut', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(24, 'PN Ciamis', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(25, 'PN Purwakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(26, 'PN Bekasi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(27, 'PN Karawang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(28, 'PN Subang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(29, 'PN Bogor', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(30, 'PN Sukabumi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(31, 'PN Cianjur', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(32, 'PN Cirebon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(33, 'PN Indramayu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(34, 'PN Majalengka', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(35, 'PN Kuningan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(36, 'PTA Bandung', '{ \"I\": \"1000000\",\"II\": \"2000000\",\"III\": \"3000000\",\"IV\": \"4000000\",\"V\": \"5000000\"   }', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(37, 'PN Cibadak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(38, 'PN Sumber', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(39, 'PN Bale Bandung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(40, 'PA Bandung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(41, 'PA Sumedang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(42, 'PA Ciamis', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(43, 'PA Tasikmalaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(44, 'PA Garut', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(45, 'PA Bogor', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(46, 'PA Sukabumi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(47, 'PA Cianjur', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(48, 'PA Cirebon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(49, 'PA Indramayu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(50, 'PA Majalengka', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(51, 'PA Kuningan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(52, 'PA Bekasi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(53, 'PA Karawang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(54, 'PA Purwakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(55, 'PN Banjar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(56, 'PN Cikarang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(57, 'PA Soreang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(58, 'PA Cimahi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(59, 'PA Ngamprah', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(61, 'PA Cibadak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(62, 'PA Sumber', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(63, 'PN Depok', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(64, 'PTUN Bandung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(65, 'PA Cibinong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(66, 'PN Kab.bogor Di Cibinong, Jawa Barat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(67, 'PA Cikarang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(68, 'PA Depok', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(69, 'DILMILIi - 9 di Bandung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(70, 'PA Kota Tasikmalaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(71, 'PA Kota Banjar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(72, 'PT Semarang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(73, 'PN Semarang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(74, 'PN Tegal', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(75, 'PN Pekalongan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(76, 'PN Kudus', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(77, 'PN Pati', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(78, 'PN Brebes', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(79, 'PN Pemalang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(80, 'PN Kendal', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(81, 'PN Demak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(82, 'PN Purwodadi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(83, 'PN Salatiga', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(84, 'PN Kabupaten Semarang Di Uangaran', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(85, 'PN Jepara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(86, 'PN Blora', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(87, 'PN Rembang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(88, 'PN Batang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(89, 'PN Purworejo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(90, 'PN Magelang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(91, 'PN Kebumen', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(92, 'PN Temanggung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(93, 'PN Wonosobo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(94, 'PN Surakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(95, 'PN Sragen', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(96, 'PN Wonogiri', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(97, 'PN Sukoharjo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(98, 'PN Karangayar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(99, 'PN Boyolali', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(100, 'PN Klaten', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(101, 'PN Purwokerto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(102, 'PN Cilacap', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(103, 'PN Banyumas', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(104, 'PN Purbalingga', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(105, 'PN Banjarnegara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(106, 'PN Kabupaten Tegal Di Slawi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(107, 'PN Kabupaten Magelang Di Mungkid', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(108, 'PA Pekalongan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(109, 'PA Pemalang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(110, 'PA Tegal', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(111, 'PA Brebes', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(112, 'PA Batang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(113, 'PA Semarang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(114, 'PA Salatiga', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(115, 'PA Kendal', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(116, 'PA Demak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(117, 'PA Purwodadi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(118, 'PA Pati', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(119, 'PA Kudus', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(120, 'PA Jepara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(121, 'PA Rembang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(122, 'PA Blora', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(123, 'PA Magelang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(124, 'PA Temanggung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(125, 'PA Wonosobo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(126, 'PA Purworejo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(127, 'PA Kebumen', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(128, 'PA Purwokerto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(129, 'PA Banyumas', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(130, 'PA Cilacap', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(131, 'PA Purbalingga', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(132, 'PA Banjarnegara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(133, 'PA Klaten', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(134, 'PA Boyolali', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(135, 'PA Sragen', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(136, 'PA Wonogiri', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(137, 'PA Sukoharjo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(138, 'PA Karanganyar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(139, 'PA Surakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(140, 'PA Ambarawa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(141, 'PTA Semarang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(142, 'PA Slawi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(143, 'PA Mungkid', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(144, 'PTUN Semarang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(145, 'PA Kajen', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(146, 'DILMILIi - 10 di Semarang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(147, 'PN Yogyakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(148, 'PN Wates', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(149, 'PN Wonosari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(150, 'PN Sleman', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(151, 'PN Bantul', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(152, 'PT Yogyakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(153, 'PA Yogyakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(154, 'PA Sleman', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(155, 'PA Wates', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(156, 'PA Bantul', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(157, 'PA Wonosari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(158, 'PTA Yogyakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(159, 'PTUN Yogyakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(160, 'DILMILIi - 11 di Yogyakarta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(161, 'PT Surabaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(162, 'PN Surabaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(163, 'PN Bojonegoro', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(164, 'PN Tuban', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(165, 'PN Lamongan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(166, 'PN Gresik', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(167, 'PN Sidoarjo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(168, 'PN Mojokerto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(169, 'PN Jombang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(170, 'PN Bondowoso', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(171, 'PN Jember', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(172, 'PN Banyuwangi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(173, 'PN Situbondo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(174, 'PN Kediri', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(175, 'PN Nganjuk', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(176, 'PN Tulungagung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(177, 'PN Trenggalek', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(178, 'PN Blitar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(179, 'PN Malang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(180, 'PN Pasuruan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(181, 'PN Probolinggo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(182, 'PN Lumajang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(183, 'PN Bangil', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(184, 'PN Kraksaan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(185, 'PN Madiun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(186, 'PN Ponorogo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(187, 'PN Pacitan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(188, 'PN Ngawi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(189, 'PN Magetan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(190, 'PN Pamekasan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(191, 'PN Sumenep', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(192, 'PN Bangkalan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(193, 'PN Sampang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(194, 'PTA Surabaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(195, 'PN Kab. Kediri', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(196, 'PN Kab. Madiun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(197, 'PA Surabaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(198, 'PA Mojokerto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(199, 'PA Sidoarjo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(200, 'PA Jombang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(201, 'PA Bawean', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(202, 'PA Gresik', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(203, 'PA Bojonegoro', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(204, 'PA Lamongan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(205, 'PA Jember', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(206, 'PA Bondowoso', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(207, 'PA Situbondo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(208, 'PA Banyuwangi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(209, 'PA Kabupaten Kediri', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(210, 'PA Tulungagung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(211, 'PA Trenggalek', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(212, 'PA Blitar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(213, 'PA Nganjuk', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(214, 'PA Malang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(215, 'PA Pasuruan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(216, 'PA Bangil', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(217, 'PA Probolinggo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(218, 'PA Kraksaan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(219, 'PA Lumajang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(220, 'PA Madiun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(221, 'PA Magetan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(222, 'PA Ngawi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(223, 'PA Ponorogo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(224, 'PA Pacitan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(225, 'PA Pamekasan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(226, 'PA Bangkalan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(227, 'PA Sampang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(228, 'PA Sumenep', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(229, 'PA Kangean', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(230, 'PA Kabupaten Madiun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(231, 'PA Kediri', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(232, 'PA Tuban', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(233, 'PTUN Surabaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(234, 'PTTUN Surabaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(235, 'PA Malang Kab. Malang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(236, 'PN Kab.malang, Jawa Timur', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(237, 'DILMILTinggi Iii di Surabaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(238, 'DILMILIii - 12 di Surabaya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(239, 'DILMILIii - 13 di Madiun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(240, 'PT Banda Aceh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(241, 'PN Banda Aceh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(242, 'PN Sabang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(243, 'PN Sigli', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(244, 'PN Beureun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(245, 'PN Lhok Sukon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(246, 'PN Lhok Seumawe', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(247, 'PN Takengon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(248, 'PN Langsa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(249, 'PN Idi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(250, 'PN Kuala Simpang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(251, 'PN Blangkajeren', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(252, 'PN Kutacane', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(253, 'PN Meulaboh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(254, 'PN Calang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(255, 'PN Sinabang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(256, 'PN Tapak Tuan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(257, 'PN Singkel', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(258, 'PN Janthoi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(259, 'MS Aceh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(260, 'MS Banda Aceh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(261, 'MS Sabang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(262, 'MS Sigli', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(263, 'MS Meureudu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(264, 'MS Bireuen', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(265, 'MS Lhok Sukon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(266, 'MS Takengon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(267, 'MS Lhok Seumawe', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(268, 'MS Idi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(269, 'MS Langsa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(270, 'MS Kuala Simpang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(271, 'MS Blangkajeren', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(272, 'MS Kotacane', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(273, 'MS Meulaboh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(274, 'MS Sinabang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(275, 'MS Calang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(276, 'MS Singkil', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(277, 'MS Tapak Tuan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(278, 'PN Blangpidie', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(279, 'PN Meureudu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(280, 'PN Suka Makmue', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(281, 'MS Blangpidie', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(282, 'MS Suka Makmue', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(283, 'MS Kota Subulussalam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(284, 'MS Jantho', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(285, 'PTUN Banda Aceh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(286, 'DILMILI - 1 di Banda', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(287, 'PN Simpang Tiga Redelong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(288, 'MS Simpang Tiga Redelong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(289, 'PT Medan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(290, 'PN Medan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(291, 'PN Binjai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(292, 'PN Tanjung Balai Asahan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(293, 'PN Sidikalang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(294, 'PN Kabanjahe', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(295, 'PN Rantau Prapat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(296, 'PN Tebing Tinggi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(297, 'PN Gunung Sitoli', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(298, 'PN Pematang Siantar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(299, 'PN Tarutung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(300, 'PN Padang Sidempuan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(301, 'PN Sibolga', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(302, 'PN Stabat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(303, 'PN Simalungun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(304, 'PN Kisaran', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(305, 'PN Lubuk Pakam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(306, 'PTA Medan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(307, 'PA Binjai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(308, 'PA Kabanjahe', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(309, 'PA Medan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(310, 'PA Rantau Prapat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(311, 'PA Tanjung Balai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(312, 'PA Tebing Tinggi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(313, 'PA Sidikalang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(314, 'PA Pematang Siantar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(315, 'PA Balige', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(316, 'PA Sibolga', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(317, 'PA Padang Sidempuan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(318, 'PA Gunung Sitoli', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(319, 'PN Sei Rampah', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(320, 'PN Sibuhuan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(321, 'PASibuhuan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(322, 'PA Sei Rampah', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(323, 'PA Kisaran', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(324, 'PA Lubuk Pakam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(325, 'PA Simalungun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(326, 'PN Mandailing Natal', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(327, 'PTTUNMEDAN ', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(328, 'PTUN Medan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(329, 'PA Stabat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(330, 'PA Pandan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(331, 'PA Tarutung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(332, 'PA Panyabungan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(333, 'DIMILTI - I Di Medan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(334, 'DILMILI - 2 di Medan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(335, 'PN Balige', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(336, 'PA Kota Padang Sidempuan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(337, 'PT Padang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(338, 'PN Padang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(339, 'PN Sawahlunto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(340, 'PN Batusangkar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(341, 'PN Solok', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(342, 'PN Pariaman', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(343, 'PN Painan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(344, 'PN Bukittinggi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(345, 'PN Lubuk Sikaping', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(346, 'PN Payakumbuh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(347, 'PN Padang Panjang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(348, 'PN Lubuk Basung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(349, 'PN Tanjung Pati', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(350, 'PN Kotobaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(351, 'PN Muaro', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(352, 'PTA Padang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(353, 'PN Pulau Punjung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(354, 'PA Pariaman', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(355, 'PA Solok', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(356, 'PA Sawahlunto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(357, 'PA Pulau Punjung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(358, 'PA Batusangkar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(359, 'PA Padang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(360, 'PA Padang Panjang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(361, 'PA Sijunjung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(362, 'PA Koto Baru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(363, 'PA Muara Labuh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(364, 'PA Painan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(365, 'PA Bukittinggi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(366, 'PA Lubuk Sikaping', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(367, 'PA Talu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(368, 'PA Maninjau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(369, 'PA Payakumbuh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(370, 'PA Tanjung Pati', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(371, 'PENGADILANAgama Lubuk Basung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(372, 'PN Pasaman Barat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(373, 'PTUN Padang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(374, 'DILMILI - 3 di Padang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(375, 'PN Pekanbaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(376, 'PN Bengkalis', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(377, 'PN Rengat/indragiri', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(378, 'PN Tembilahan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(379, 'PN Bangkinang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(380, 'PN Dumai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(381, 'PT Pekanbaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(382, 'PN Teluk Kuantan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(383, 'PA Siak Sri Indrapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(384, 'PA Teluk Kuantan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(385, 'PA Pekanbaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(386, 'PA Rengat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(387, 'PA Tembilahan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(388, 'PA Bangkinang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(389, 'PA Bengkalis', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(390, 'PA Pasir Pangarayan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(391, 'PA Selat Panjang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(392, 'PA Dumai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(393, 'PTA Pekanbaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(394, 'PN Pelalawan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(395, 'PN Rokan Hilir', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(396, 'PN Siak Sri Indrapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(397, 'PTUN Pekan Baru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(398, 'PA Pangkalan Kerinci', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(399, 'PA Ujung Tanjung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(400, 'PN Pasir Pangaraian', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(401, 'PN Jambi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(402, 'PN Muara Bungo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(403, 'PN Kuala Tungkal', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(404, 'PN Sungai Penuh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(405, 'PN Bangko', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(406, 'PN Muara Bulian', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(407, 'PT Jambi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(408, 'PA Jambi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(409, 'PA Muara Bungo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(410, 'PA Kuala Tungkal', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(411, 'PA Bangko', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(412, 'PA Sungai Penuh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(413, 'PA Muara Bulian', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(414, 'PN Tebo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(415, 'PN Sarolangun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(416, 'PN Tanjung Jabung Timur', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(417, 'PTA Jambi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(418, 'PTUN Jambi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(419, 'PA Sarolangun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(420, 'PA Muara Sabak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(421, 'PA Muara Tebo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(422, 'PA Sengeti', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(423, 'PN Sengeti', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(424, 'PT Palembang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(425, 'PN Palembang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(426, 'PN Kayuagung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(427, 'PN Baturaja', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(428, 'PN Lubuk Lingau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(429, 'PN Lahat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(430, 'PN Muara Enim', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(431, 'PN Sekayu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(432, 'PN Pangkalan Balai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(433, 'PA Pangkalan Balai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(434, 'PA Martapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(435, 'PA Muaradua', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(436, 'PA Pagar Alam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(437, 'PA Prabumulih', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(438, 'PTA Palembang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(439, 'PA Palembang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(440, 'PA Lahat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(441, 'PA Baturaja', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(442, 'PA Kayu Agung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(443, 'PA Muara Enim', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(444, 'PA Lubuk Linggau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(445, 'PA Sekayu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(446, 'PTUN Palembang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(447, 'DILMILI - 4 di Palembang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(448, 'PN Prabumulih', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(449, 'PN Pagar Alam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(450, 'PN Tanjung Karang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(451, 'PN Metro', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(452, 'PN Kotabumi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(453, 'PT Tanjung Karang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(454, 'KANTOR Pn Kalianda', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(455, 'PN Gedong Tataan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(456, 'PA Gedong Tataan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(457, 'PA Pringsewu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(458, 'PA Mesuji', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(459, 'PA Tulang Bawang Tengah', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(460, 'PA Sukadana', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(461, 'PA Tanjung Karang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(462, 'PA Krui', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(463, 'PA Kotabumi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(464, 'PA Metro', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(465, 'PA Kalianda', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(466, 'PN Kota Agung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(467, 'PTA Bandar Lampung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(468, 'PTUN Bandar Lampung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(469, 'PA Tulang Bawang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(470, 'PA Tanggamus', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(471, 'PN Liwa Kabupaten Lampung Barat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(472, 'PA Gunung Sugih', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(473, 'PA Blambangan Umpu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(474, 'PN Menggala', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(475, 'PN Gunung Sugih', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(476, 'PN Sukadana', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(477, 'PN Blambangan Umpu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(478, 'PN Pontianak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(479, 'PN Singkawang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(480, 'PN Sintang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(481, 'PN Ketapang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(482, 'PN Mempawah', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(483, 'PN Sanggau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(484, 'PN Putussibau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(485, 'PT Pontianak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(486, 'PA Singkawang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(487, 'PA Nanga Pinoh', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(488, 'PA Sungai Raya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(489, 'PA Pontianak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(490, 'PA Sambas', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(491, 'PA Ketapang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(492, 'PA Sanggau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(493, 'PA Sintang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(494, 'PA Putussibau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(495, 'PTA Pontianak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(496, 'PA Mempawah', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(497, 'PTUN Pontianak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(498, 'PA Bengkayang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(499, 'DILMILI - 5 di Pontianak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(500, 'PN Sambas', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(501, 'PN Bengkayang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(502, 'PN Ngabang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(503, 'PN Palangkaraya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(504, 'PN Pangkalan Bun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(505, 'PN Muara Tewe', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(506, 'PN Kuala Kapuas', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(507, 'PN Buntok', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(508, 'PN Sampit', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(509, 'PT Palangkaraya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(510, 'PA Nanga Bulik', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(511, 'PA Sukamara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(512, 'PA Kuala Pembuang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(513, 'PA Kasongan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(514, 'PA Tamiyang Layang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(515, 'PA Pulang Pisau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(516, 'PA Kuala Kurun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(517, 'PN Kuala Kurun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(518, 'PN Nanga Bulik', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(519, 'PN Pulang Pisau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(520, 'PA Palangkaraya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(521, 'PA Pangkalan Bun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(522, 'PA Muara Tewe', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(523, 'PA Buntok', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(524, 'PA Kuala Kapuas', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(525, 'PA Sampit', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(526, 'PTA Palangkaraya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(527, 'PTUN Palangkaraya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(528, 'PN Tamiang Layang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(529, 'PN Kasongan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(530, 'PT Banjarmasin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(531, 'PN Banjarmasin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(532, 'PN Kandangan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(533, 'PN Kotabaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(534, 'PN Barabai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(535, 'PN Martapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(536, 'PN Tanjung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(537, 'PN Amuntai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(538, 'PN Rantau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(539, 'PA Marabahan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(540, 'PA Pelaihari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(541, 'PA Kotabaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(542, 'PN Marabahan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(543, 'PN Pleihari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(544, 'PN Paringin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(545, 'PTA Banjarmasin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(546, 'PA Banjarmasin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(547, 'PA Rantau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(548, 'PA Kandangan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(549, 'PA Barabai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(550, 'PA Amuntai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(551, 'PA Tanjung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(552, 'PA Negara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(553, 'PTUN Banjarmasin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(554, 'PA Banjarbaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(555, 'PN Banjarbaru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(556, 'DILMILI - 6 di Banjarmasin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(557, 'PN Batulicin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(558, 'PA Batu Licin', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(559, 'PN Samarinda', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(560, 'PN Tenggarong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(561, 'PN Balikpapan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(562, 'PA Tenggarong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(563, 'PA Samarinda', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(564, 'PA Tanah Grogot', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(565, 'PA Balikpapan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(566, 'PA Tanjung Redep', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(567, 'PN Tanjung Redep', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(568, 'PN Tanah Grogot', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(569, 'PT Samarinda', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(570, 'PA Penajam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(571, 'PA Sendawar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(572, 'PN Penajam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(573, 'PTASamarinda', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(574, 'PN Kutai Barat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(575, 'PTUN Samarinda', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(576, 'PA Bontang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(577, 'PA Sangatta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(578, 'PN Bontang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(579, 'PN Sangatta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(580, 'DILMILI - 7 di Balikpapan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(581, 'PT Manado', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(582, 'PN Manado', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(583, 'PN Kotamubago', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(584, 'PN Tahuna', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(585, 'PN Tondano', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(586, 'PA Manado', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(587, 'PA Kotamubagu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(588, 'PA Tahuna', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(589, 'PA Lolak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(590, 'PA Bolaang Uki', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(591, 'PA Boroko', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(592, 'PA Tutuyan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(593, 'PN Melonguane', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(594, 'PTA Manado', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(595, 'PA Tondano', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(596, 'PTUN Manado', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(597, 'PN Bitung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(598, 'PA Bitung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(599, 'DILMILIii - 17 di Manado', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(600, 'PN Airmadidi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(601, 'PN Amurang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(602, 'PA Amurang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(603, 'PN Palu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(604, 'PN Toli-toli', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(605, 'PN Luwuk', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(606, 'PN Poso', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(607, 'PA Kodya Palu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(608, 'PA Toli Toli', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(609, 'PA Poso', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(610, 'PA Luwuk', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(611, 'PT Palu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(612, 'PA Ampana', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(613, 'PN Donggala', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(614, 'PTA Palu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(615, 'PTUN Palu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(616, 'PA Palu Kab. Donggala', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(617, 'PA Buol', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(618, 'PA Bungku', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(619, 'PA Banggai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(620, 'PN Buol', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(621, 'PN Parigi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(622, 'PA Parigi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(623, 'PT Ujung Pandang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(624, 'PN Ujung Pandang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(625, 'PN Sungguminasa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(626, 'PN Pangkajene', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(627, 'PN Barru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(628, 'PN Takalar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(629, 'PN Maros', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(630, 'PN Jeneponto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(631, 'PN Pare-pare', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(632, 'PN Enrekang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(633, 'PN Sidenreng Rappang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(634, 'PN Pinrang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(635, 'PN Watampone', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(636, 'PN Watansopeng', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(637, 'PN Sengkang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(638, 'PN Banta Eng', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(639, 'PN Sinjai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(640, 'PN Bulukumba', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(641, 'PN Selayar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(642, 'PN Palopo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(643, 'PN Makale', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(644, 'PTA Makassar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(645, 'PA Pangkajene', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(646, 'PA Maros', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(647, 'PA Ujung Pandang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(648, 'PA Jenneponto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(649, 'PA Takalar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(650, 'PA Barru', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(651, 'PA Sungguminasa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(652, 'PA Watampone', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(653, 'PA Sengkang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(654, 'PA Watan Soppeng', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(655, 'PA Bantaeng', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(656, 'PA Bulukumba', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(657, 'PA Sinjai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(658, 'PA Selayar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(659, 'PA Pare Pare', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(660, 'PA Pinrang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(661, 'PA Enrekang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(662, 'PA Sidenreng', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(663, 'PA Palopo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(664, 'PA Makale', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(665, 'PA Belopa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(666, 'PA Malili', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(667, 'PN Belopa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(668, 'PTTUNUJUNG Pandang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(669, 'PTUN Ujung Pandang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(670, 'PA Masamba', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(671, 'DILMILIii - 16 di Makassar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00');
INSERT INTO `ref_satuankerja` (`id`, `nama_satuankerja`, `nominatif_penginapan`, `locked`, `created_at`, `updated_at`) VALUES
(672, 'PN Masamba', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(673, 'PN Malili', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(674, 'PN Pasangkayu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(675, 'PN Kendari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(676, 'PN Bau-bau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(677, 'PN Raha', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(678, 'PN Kolaka', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(679, 'PA Kolaka', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(680, 'PA Raha', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(681, 'PA Kendari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(682, 'PA Bau-bau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(683, 'PT Kendari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(684, 'PA Wangi Wangi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(685, 'PA Lasusua', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(686, 'PA Rumbia', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(687, 'PN Lasusua', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(688, 'PN Wangi Wangi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(689, 'PN Una Aha', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(690, 'PTA Kendari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(691, 'PTUN Kendari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(692, 'PA Unaaha', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(693, 'PN Andoolo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(694, 'PN Pasarwajo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(695, 'PA Andoolo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(696, 'PA Pasarwajo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(697, 'PT Ambon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(698, 'PN Ambon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(699, 'PN Masohi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(700, 'PN Tual', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(701, 'PA Ambon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(702, 'PA Tual', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(703, 'PA Masohi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(704, 'PA Dataran Hunipopu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(705, 'PA Dataran Hunimoa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(706, 'PA Namlea', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(707, 'PN Dobo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(708, 'PN Namlea', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(709, 'PN Dataran Hunipopu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(710, 'PN Dataran Hunimoa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(711, 'PTA Ambon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(712, 'PTUN Ambon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(713, 'DILMILIii - 18 di Ambon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(714, 'PN Saumlaki', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(715, 'PT Denpasar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(716, 'PN Denpasar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(717, 'PN Singaraja', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(718, 'PN Negara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(719, 'PN Klungkung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(720, 'PN Tabanan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(721, 'PN Karangasem', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(722, 'PN Gianyar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(723, 'PN Bangli', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(724, 'PA Denpasar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(725, 'PA Singaraja', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(726, 'PA Bangli', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(727, 'PA Karangasem', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(728, 'PA Tabanan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(729, 'PA Klungkung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(730, 'PA Gianyar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(731, 'PTUN Denpasar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(732, 'PA Badung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(733, 'DILMILIii - 14 di Denpasar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(734, 'PN Mataram', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(735, 'PN Raba/bima', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(736, 'PN Sumbawa Besar', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(737, 'PN Selong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(738, 'PN Dompu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(739, 'PN Praya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(740, 'PA Mataram', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(741, 'PA Sumbawa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(742, 'PA Praya', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(743, 'PA Selong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(744, 'PA Bima', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(745, 'PA Dompu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(746, 'PT Mataram', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(747, 'PTA Mataram', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(748, 'PTUN Mataram', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(749, 'PA Giri Menang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(750, 'PA Taliwang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(751, 'PN Kupang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(752, 'PN Atambua', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(753, 'PN Soe', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(754, 'PN Kefamenanu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(755, 'PN Waingapu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(756, 'PN Waikabubak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(757, 'PN Ende', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(758, 'PN Maumere', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(759, 'PA Waikabubak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(760, 'PA Kupang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(761, 'PA Kalabahi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(762, 'PA Ende', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(763, 'PA Waingapu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(764, 'PN Larantuka', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(765, 'PN Ruteng', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(766, 'PN Bajawa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(767, 'PN Kalabahi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(768, 'PT Kupang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(769, 'PA Larantuka', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(770, 'PA Ruteng', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(771, 'PA Atambua', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(772, 'PA Soe', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(773, 'PA Kefamenanu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(774, 'PA Bajawa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(775, 'PA Maumere', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(776, 'PN Lembata', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(777, 'PN Rote Ndao', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(778, 'PTUN Kupang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(779, 'PTA Kupang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(780, 'PA Lewoleba', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(781, 'DILMILIii - 15 di Kupang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(782, 'PN Labuan Bajo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(783, 'PN Oelamasi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(784, 'PA Labuan Bajo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(785, 'PT Jayapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(786, 'PN Jayapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(787, 'PN Wamena', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(788, 'PN Merauke', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(789, 'PN Biak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(790, 'PN Nabire', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(791, 'PN Serui', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(792, 'PTA Jayapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(793, 'PA Jayapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(794, 'PA Biak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(795, 'PA Nabire', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(796, 'PA Wamena', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(797, 'PA Serui', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(798, 'PA Merauke', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(799, 'PTUN Jayapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(800, 'PA Sentani', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(801, 'PA Mimika', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(802, 'PA Paniai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(803, 'PN Kota Timika Kabupaten Mimika', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(804, 'DILMILIii - 19 di Jayapura', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(805, 'PA Arso', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(806, 'PA Manna', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(807, 'PA Curup', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(808, 'PA Argamakmur', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(809, 'PA Bengkulu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(810, 'PN Bengkulu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(811, 'PN Curup', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(812, 'PN Manna', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(813, 'PN Arga Makmur', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(814, 'PT Bengkulu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(815, 'PN Mukomuko', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(816, 'PA Mukomuko', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(817, 'PA Bintuhan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(818, 'PA Tais', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(819, 'PA Kepahiang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(820, 'PTA Bengkulu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(821, 'PTUN Bengkulu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(822, 'PN Bintuhan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(823, 'PN Tais', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(824, 'PN Kepahiang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(825, 'PN Tubei', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(826, 'PA Lebong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(827, 'PN Ternate', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(828, 'PN Tobelo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(829, 'PN Labuha', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(830, 'PN Soasiu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(831, 'PA Ternate', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(832, 'PA Morotai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(833, 'PA Soa Sio', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(834, 'PA Labuhan Bacan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(835, 'PN Sanana', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(836, 'PN Bobong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(837, 'PTA Maluku Utara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(838, 'PT Maluku Utara', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(839, 'PN Serang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(840, 'PN Rangkas Bitung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(841, 'PN Tangerang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(842, 'PA Serang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(843, 'PA Rangkas Bitung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(844, 'PA Tangerang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(845, 'PN Pandeglang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(846, 'PA Pandeglang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(847, 'PTA Banten', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(848, 'PA Tigaraksa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(849, 'PA Cilegon', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(850, 'PT Banten', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(851, 'PTUN Serang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(852, 'PN Pangkal Pinang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(853, 'PN Sungai Liat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(854, 'PN Tanjung Pandan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(855, 'PN Koba', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(856, 'PN Mentok', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(857, 'PTUN Pangkal Pinang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(858, 'PA Pangkal Pinang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(859, 'PA Tanjung Pandan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(860, 'PA Sungai Liat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(861, 'PTA Bangka Belitung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(862, 'PT Bangka Belitung', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(863, 'PA Mentok', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(864, 'PN Gorontalo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(865, 'PA Gorontalo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(866, 'PN Limboto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(867, 'PA Suwawa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(868, 'PA Kwandang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(869, 'PTUN Gorontalo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(870, 'PA Limboto', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(871, 'PTA Gorontalo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(872, 'PN Tilamuta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(873, 'PA Tilamuta', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(874, 'PT Gorontalo', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(875, 'PN Marisa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(876, 'PA Marisa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(877, 'PN Tanjung Pinang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(878, 'PN Batam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(879, 'PA Tanjung Pinang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(880, 'PA Dabo Singkep', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(881, 'PA Tanjung Balai Karimun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(882, 'PA Tarempa', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(883, 'PA Batam', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(884, 'PA Natuna', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(885, 'PN Tanjung Balai Karimun', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(886, 'PN Ranai', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(887, 'PTUN Tanjung Pinang', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(888, 'PN Manokwari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(889, 'PN Sorong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(890, 'PN Fak Fak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(891, 'PA Kaimana', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(892, 'PN Kaimana', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(893, 'PA Sorong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(894, 'PA Fak Fak', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(895, 'PA Manokwari', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(896, 'PN Majene', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(897, 'PN Mamuju', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(898, 'PN Polewali', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(899, 'PA Polewali', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(900, 'PA Majene', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(901, 'PA Mamuju', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(902, 'PA Pasangkayu', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(903, 'PN Tarakan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(904, 'PA Tarakan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(905, 'PA Tanjung Selor', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(906, 'PN Malinau', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(907, 'PN Tanjung Selor', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(908, 'PN Nunukan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(909, 'PA Nunukan', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(910, 'KEPANITERAAN', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(911, 'BADILUM', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(912, 'BADILAG', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(913, 'PA Kota Cimahi', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(914, 'MS Simpang Tiga Redelong', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(915, 'BADIMILTUN', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(916, 'BALITBANG Diklat', '', 1, '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(918, 'Holiday Inn Gajahmada', '', 1, '2022-07-01 05:03:57', '2022-07-01 05:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tahun_anggaran`
--

CREATE TABLE `ref_tahun_anggaran` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_tahun_anggaran`
--

INSERT INTO `ref_tahun_anggaran` (`id`, `tahun`, `locked`, `created_at`, `updated_at`) VALUES
(1, 2022, 1, '2022-06-17 17:00:00', '2022-06-18 13:44:20'),
(2, 2023, 0, '2022-06-17 17:00:00', '2022-07-03 13:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tertanda`
--

CREATE TABLE `ref_tertanda` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `nama` longtext NOT NULL,
  `nip` longtext NOT NULL,
  `tahun_anggaran` int(4) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0,
  `user_penginput_data` int(11) NOT NULL COMMENT 'users(id)',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_tertanda`
--

INSERT INTO `ref_tertanda` (`id`, `id_unitbagian`, `nama`, `nip`, `tahun_anggaran`, `locked`, `user_penginput_data`, `created_at`, `updated_at`) VALUES
(1, 3, 'ROSFIANA, SH., MH', '19640612.198703.2.003', 2022, 1, 6, '2022-06-05 14:48:40', '2022-06-13 02:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `ref_unitbagian`
--

CREATE TABLE `ref_unitbagian` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ref_unitbagian`
--

INSERT INTO `ref_unitbagian` (`id`, `name`, `sortname`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Biro', 'Karo', '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(2, 'Tata Usaha (Persuratan)', 'T U', '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(3, 'Inventarisasi Kekayaan Negara', 'IKN', '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(4, 'Bimbingan Monitoring', 'Bimon', '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(5, 'Penghapusan', 'Penghapusan', '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(6, 'Pengadaan Barang Wilayah I', 'PB I', '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(7, 'Pengadaan Barang Wilayah II', 'PB II', '2022-06-17 17:00:00', '2022-06-17 17:00:00'),
(8, 'Super User', 'SU', '2022-06-17 17:00:00', '2022-06-17 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_unitbagian_4_surat_masuk`
--

CREATE TABLE `ref_unitbagian_4_surat_masuk` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ref_unitbagian_4_surat_masuk`
--

INSERT INTO `ref_unitbagian_4_surat_masuk` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Inventarisasi Kekayaan Negara', NULL, NULL),
(4, 'Bimbingan Monitoring', NULL, NULL),
(5, 'Penghapusan', NULL, NULL),
(6, 'Pengadaan Barang Wilayah I', NULL, NULL),
(7, 'Pengadaan Barang Wilayah II', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_untuk`
--

CREATE TABLE `ref_untuk` (
  `id` int(11) NOT NULL,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `text_untuk` longtext NOT NULL,
  `tahun_anggaran` int(4) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0,
  `user_penginput_data` int(11) NOT NULL COMMENT 'users(id)',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_untuk`
--

INSERT INTO `ref_untuk` (`id`, `id_unitbagian`, `text_untuk`, `tahun_anggaran`, `locked`, `user_penginput_data`, `created_at`, `updated_at`) VALUES
(1, 3, 'Melaksanakan Kegiatan Inventarisasi dan Pendataan BMN dalam rangka Penyusunan Data Inventaris BMN.', 2022, 1, 6, '2022-06-05 14:13:54', '2022-06-13 02:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_surat_masuks`
--

CREATE TABLE `tabel_surat_masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_cobas`
--

CREATE TABLE `t_cobas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_mainsurat`
--

CREATE TABLE `t_mainsurat` (
  `id` int(10) UNSIGNED NOT NULL,
  `asal_surat` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal_surat` varchar(255) NOT NULL,
  `pejabat_pengirim_surat` varchar(255) NOT NULL,
  `surat_ditujukan_kepada` varchar(255) NOT NULL,
  `pdf_surat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `status_ii` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_pembuat_laporan`
--

CREATE TABLE `t_pembuat_laporan` (
  `id` int(11) NOT NULL,
  `ref_unitbagian_id` int(2) NOT NULL,
  `t_realisasi_rkkl_id` int(11) NOT NULL,
  `nama_pelaksana` varchar(255) NOT NULL,
  `no_surat_tugas` varchar(255) DEFAULT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_pengirim_laporan`
--

CREATE TABLE `t_pengirim_laporan` (
  `id` int(11) NOT NULL,
  `ref_unitbagian_id` int(2) NOT NULL,
  `pengirim_laporan` varchar(255) NOT NULL COMMENT 'ref_unitbagian(id)',
  `t_realisasi_rkkl_id` int(11) DEFAULT NULL COMMENT '(t_realisasi_rkkl)',
  `no_surat_tugas` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_pengurang_nilai_awal`
--

CREATE TABLE `t_pengurang_nilai_awal` (
  `id` int(11) NOT NULL,
  `nilai_kurang` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pengurang_nilai_awal`
--

INSERT INTO `t_pengurang_nilai_awal` (`id`, `nilai_kurang`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_realisasi_pagu_rkkl`
--

CREATE TABLE `t_realisasi_pagu_rkkl` (
  `id` int(11) NOT NULL,
  `ref_unitbagian_id` int(2) NOT NULL COMMENT '(ref_unitbagian)',
  `t_realisasi_rkkl_id` int(11) NOT NULL COMMENT '(t_realisasi_rkkl)',
  `ref_keuangan_uraian_kegiatan_id` int(11) NOT NULL COMMENT '(ref_keuangan_uraian_kegiatan)',
  `nilai_pagu_realisasi` varchar(255) NOT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_realisasi_pagu_rkkl`
--

INSERT INTO `t_realisasi_pagu_rkkl` (`id`, `ref_unitbagian_id`, `t_realisasi_rkkl_id`, `ref_keuangan_uraian_kegiatan_id`, `nilai_pagu_realisasi`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(1, 3, 21, 2, '1.350.000', 6, 2022, '2022-06-13 04:00:34', '2022-06-13 04:00:34'),
(2, 3, 21, 3, '23.490.000', 6, 2022, '2022-06-13 04:01:29', '2022-06-13 04:01:29'),
(3, 3, 21, 4, '10.320.000', 6, 2022, '2022-06-13 04:02:15', '2022-06-13 04:02:15'),
(4, 3, 7, 3, '45.460.000', 6, 2022, '2022-06-13 04:13:22', '2022-06-13 04:13:22'),
(5, 3, 7, 4, '32.250.000', 6, 2022, '2022-06-13 04:13:50', '2022-06-13 04:13:50'),
(6, 3, 2, 3, '13.575.000', 6, 2022, '2022-06-13 04:15:39', '2022-06-13 04:15:39'),
(7, 3, 2, 4, '5.160.000', 6, 2022, '2022-06-13 04:16:07', '2022-06-13 04:16:07'),
(8, 3, 3, 4, '27.950.000', 6, 2022, '2022-06-13 04:19:00', '2022-06-13 06:19:34'),
(9, 3, 3, 3, '35.625.000', 6, 2022, '2022-06-13 04:20:31', '2022-06-13 04:20:31'),
(10, 3, 3, 2, '750.000', 6, 2022, '2022-06-13 04:20:58', '2022-06-19 14:33:38'),
(11, 3, 4, 3, '7.790.000', 6, 2022, '2022-06-13 04:22:17', '2022-06-13 04:22:17'),
(12, 3, 4, 4, '3.870.000', 6, 2022, '2022-06-13 04:22:37', '2022-06-13 04:22:37'),
(13, 3, 4, 2, '450.000', 6, 2022, '2022-06-13 04:22:57', '2022-06-13 04:22:57'),
(14, 3, 5, 4, '4.730.000', 6, 2022, '2022-06-13 04:28:09', '2022-06-13 04:28:09'),
(15, 3, 5, 3, '12.375.000', 6, 2022, '2022-06-13 04:28:33', '2022-06-13 04:28:33'),
(16, 3, 11, 4, '20.640.000', 6, 2022, '2022-06-13 04:32:25', '2022-06-13 04:32:25'),
(17, 3, 16, 25, '48.120.000', 6, 2022, '2022-06-13 05:24:47', '2022-06-13 05:24:47'),
(18, 3, 16, 26, '43.000.000', 6, 2022, '2022-06-13 05:25:23', '2022-06-13 05:25:23'),
(19, 3, 14, 25, '17.100.000', 6, 2022, '2022-06-13 05:27:25', '2022-06-13 05:27:25'),
(20, 3, 14, 26, '16.340.000', 6, 2022, '2022-06-13 05:28:02', '2022-06-13 05:28:02'),
(21, 3, 13, 31, '29.640.000', 6, 2022, '2022-06-13 05:29:47', '2022-06-13 06:02:34'),
(22, 3, 13, 32, '27.950.000', 6, 2022, '2022-06-13 05:30:26', '2022-06-13 06:03:13'),
(23, 3, 20, 19, '1.950.000', 6, 2022, '2022-06-13 05:34:06', '2022-06-13 06:03:46'),
(24, 3, 20, 32, '1.720.000', 6, 2022, '2022-06-13 05:34:29', '2022-06-13 06:04:19'),
(25, 3, 20, 18, '518.000', 6, 2022, '2022-06-13 05:36:57', '2022-06-13 05:36:57'),
(26, 3, 20, 17, '3.370.400', 6, 2022, '2022-06-13 05:37:30', '2022-06-13 05:37:30'),
(27, 3, 19, 17, '4.357.200', 6, 2022, '2022-06-13 05:38:17', '2022-06-13 05:38:17'),
(28, 3, 19, 18, '226.000', 6, 2022, '2022-06-13 05:38:41', '2022-06-13 05:38:41'),
(29, 3, 19, 20, '1.800.000', 6, 2022, '2022-06-13 05:39:26', '2022-06-13 05:39:26'),
(30, 3, 19, 19, '2.200.000', 6, 2022, '2022-06-13 05:39:45', '2022-06-13 05:39:45'),
(31, 3, 18, 17, '2.808.400', 6, 2022, '2022-06-13 05:41:14', '2022-06-13 05:41:14'),
(32, 3, 18, 18, '435.000', 6, 2022, '2022-06-13 05:41:37', '2022-06-13 05:41:37'),
(33, 3, 18, 20, '1.640.000', 6, 2022, '2022-06-13 05:42:00', '2022-06-13 05:42:00'),
(34, 3, 18, 19, '1.992.000', 6, 2022, '2022-06-13 05:42:34', '2022-06-13 05:42:34'),
(36, 3, 17, 19, '22.410.000', 6, 2022, '2022-06-13 05:44:24', '2022-06-13 05:44:24'),
(37, 3, 15, 25, '18.480.000', 6, 2022, '2022-06-13 06:06:05', '2022-06-13 06:06:05'),
(38, 3, 15, 26, '15.050.000', 6, 2022, '2022-06-13 06:06:34', '2022-06-13 06:06:34'),
(39, 3, 12, 31, '24.120.000', 6, 2022, '2022-06-13 06:08:14', '2022-06-13 06:08:14'),
(40, 3, 12, 32, '22.360.000', 6, 2022, '2022-06-13 06:09:19', '2022-06-13 06:09:19'),
(41, 3, 11, 23, '22.410.000', 6, 2022, '2022-06-13 06:13:03', '2022-06-13 06:13:03'),
(42, 3, 11, 24, '20.640.000', 6, 2022, '2022-06-13 06:13:33', '2022-06-13 06:13:33'),
(43, 3, 17, 20, '20.640.000', 6, 2022, '2022-06-13 06:17:14', '2022-06-13 06:17:14'),
(44, 3, 8, 37, '43.000.000', 6, 2022, '2022-06-13 06:26:38', '2022-06-13 06:26:38'),
(45, 3, 8, 38, '13.000.000', 6, 2022, '2022-06-13 06:27:08', '2022-06-13 06:27:08'),
(46, 3, 8, 36, '13.500.000', 6, 2022, '2022-06-13 06:27:28', '2022-06-13 06:27:28'),
(47, 3, 9, 1, '11.424.000', 6, 2022, '2022-06-13 06:32:38', '2022-06-13 06:32:38'),
(48, 3, 9, 1, '2.048.000', 6, 2022, '2022-06-13 06:32:55', '2022-06-13 06:32:55'),
(49, 3, 9, 4, '1.110.000', 6, 2022, '2022-06-13 06:33:15', '2022-06-13 06:33:15'),
(50, 3, 9, 2, '150.000', 6, 2022, '2022-06-13 06:33:28', '2022-06-13 06:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `t_realisasi_rkkl`
--

CREATE TABLE `t_realisasi_rkkl` (
  `id` int(11) NOT NULL,
  `ref_unitbagian_id` int(2) NOT NULL COMMENT '(ref_unitbagian)',
  `nomor_surat_tugas` varchar(255) DEFAULT NULL,
  `tanggal_surat_tugas` date DEFAULT NULL,
  `tanggal_pelaksana_dari` date DEFAULT NULL,
  `tanggal_pelaksana_sampai` date DEFAULT NULL,
  `verifikasi_kelengkapan` varchar(20) DEFAULT 'belum lengkap',
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_realisasi_rkkl`
--

INSERT INTO `t_realisasi_rkkl` (`id`, `ref_unitbagian_id`, `nomor_surat_tugas`, `tanggal_surat_tugas`, `tanggal_pelaksana_dari`, `tanggal_pelaksana_sampai`, `verifikasi_kelengkapan`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(2, 3, 'ST No. ST-45/BUA.4/3/2022', '2022-03-22', '2022-03-29', '2022-04-01', 'belum lengkap', 6, 2022, '2022-06-08 03:34:11', '2022-06-25 15:15:12'),
(3, 3, 'ST No. ST-48/BUA.4/3/2022', '2022-03-25', '2022-04-18', '2022-04-22', 'belum lengkap', 6, 2022, '2022-06-08 03:34:53', '2022-06-13 04:18:17'),
(4, 3, 'ST No. ST-61/BUA.4/5/2022', '2022-05-21', '2022-05-19', '2022-05-21', 'belum lengkap', 9, 2022, '2022-06-08 03:35:51', '2022-06-08 03:35:51'),
(5, 3, 'ST No. ST-62/BUA.4/5/2022', '2022-05-18', '2022-06-19', '2022-06-21', 'belum lengkap', 6, 2022, '2022-06-08 03:38:37', '2022-06-13 04:27:03'),
(7, 3, 'ST No. ST-11/BUA.4/I/2022', '2022-01-26', '2022-02-21', '2022-02-25', 'belum lengkap', 9, 2022, '2022-06-08 04:08:56', '2022-06-08 04:08:56'),
(8, 3, 'ST. No. 71/Bua.4/ST/5/2022', '2022-05-27', '2022-05-30', '2022-05-31', 'belum lengkap', 9, 2022, '2022-06-08 04:49:22', '2022-06-08 04:49:22'),
(9, 3, 'ST. No. 68/BUA.4/ST/5/2022', '2022-05-20', '2022-05-25', '2022-05-25', 'belum lengkap', 6, 2022, '2022-06-08 06:26:17', '2022-06-13 04:24:23'),
(10, 3, 'ST. No. 63/BUA.4/ST/5/2022', '2022-05-18', '2022-05-18', '2022-05-20', 'belum lengkap', 9, 2022, '2022-06-08 06:29:57', '2022-06-08 06:29:57'),
(11, 3, 'ST. No. 49/BUA.4/ST/3/2022', '2022-03-28', '2022-04-25', '2022-04-28', 'belum lengkap', 9, 2022, '2022-06-08 06:33:40', '2022-06-08 06:33:40'),
(12, 3, 'ST No. ST-47/BUA.4/3/2022', '2022-03-24', '2022-04-11', '2022-04-14', 'belum lengkap', 9, 2022, '2022-06-08 06:43:41', '2022-06-08 06:43:41'),
(13, 3, 'ST No. 46/BUA.4/ST/3/2022', '2022-03-23', '2022-04-04', '2022-04-08', 'belum lengkap', 9, 2022, '2022-06-08 06:56:43', '2022-06-08 06:56:43'),
(14, 3, 'ST No. 43/BUA.4/ST/3/2022', '2022-03-21', '2022-03-21', '2022-03-25', 'belum lengkap', 9, 2022, '2022-06-08 07:08:09', '2022-06-08 07:08:09'),
(15, 3, 'ST No. ST-26/BUA.4/3/2022', '2022-03-04', '2022-03-07', '2022-03-11', 'belum lengkap', 9, 2022, '2022-06-08 07:16:51', '2022-06-08 07:16:51'),
(16, 3, 'ST No. 10/BUA.4/ST/1/2022', '2022-01-26', '2022-02-14', '2022-02-18', 'belum lengkap', 9, 2022, '2022-06-08 07:24:20', '2022-06-08 07:24:20'),
(17, 3, 'ST No. 9/BUA.4/ST/1/2022', '2022-01-26', '2022-02-02', '2022-02-05', 'belum lengkap', 9, 2022, '2022-06-08 07:40:56', '2022-06-08 07:40:56'),
(18, 3, 'ST No. 5/BUA.4/ST/1/2022', '2022-01-24', '2022-01-25', '2022-01-28', 'belum lengkap', 9, 2022, '2022-06-08 07:49:32', '2022-06-08 07:49:32'),
(19, 3, 'ST No. 3/BUA.4/ST/1/2022', '2022-01-10', '2022-01-18', '2022-01-22', 'belum lengkap', 9, 2022, '2022-06-08 07:51:25', '2022-06-08 07:54:06'),
(20, 3, 'ST No. 2/BUA.4/ST/1/2022', '2022-01-10', '2022-01-19', '2022-01-22', 'belum lengkap', 6, 2022, '2022-06-08 07:52:36', '2022-06-13 05:39:53'),
(21, 3, 'ST No. 1/BUA.4/ST/1/2022', '2022-01-10', '2022-01-12', '2022-01-14', 'belum lengkap', 9, 2022, '2022-06-08 07:54:46', '2022-06-08 07:54:46'),
(34, 3, 'ST. 77/BUA.4/ST/5/2022', '2022-05-31', '2022-06-14', '2022-06-17', 'belum lengkap', 6, 2022, '2022-07-01 03:56:04', '2022-07-01 04:11:05'),
(35, 3, 'ST. 80/BUA.4/ST/5/2022', '2022-05-31', '2022-06-20', '2022-06-23', 'belum lengkap', 6, 2022, '2022-07-01 04:14:19', '2022-07-01 04:52:47'),
(36, 3, 'ST. 80/BUA.4/ST/5/2022', '2022-05-31', '2022-06-21', '2022-06-24', 'belum lengkap', 6, 2022, '2022-07-01 04:18:11', '2022-07-01 04:53:25'),
(37, 3, 'ST. 80/BUA.4/ST/5/2022', '2022-05-31', '2022-06-21', '2022-06-23', 'belum lengkap', 6, 2022, '2022-07-01 04:28:11', '2022-07-01 04:53:55'),
(38, 3, 'ST. 79/BUA.4/5/2022', '2022-05-31', '2022-06-21', '2022-06-24', 'belum lengkap', 6, 2022, '2022-07-01 04:31:08', '2022-07-01 04:54:39'),
(40, 3, NULL, '2022-06-20', '2022-06-28', '2022-06-30', 'belum lengkap', 6, 2022, '2022-07-01 06:14:45', '2022-07-01 06:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `t_realisasi_tempatpelaksanaan`
--

CREATE TABLE `t_realisasi_tempatpelaksanaan` (
  `id` int(11) NOT NULL,
  `t_realisasi_rkkl_id` int(11) NOT NULL COMMENT 't_realisasi_rkkl',
  `nama_pelaksana` varchar(255) NOT NULL,
  `nip` varchar(255) DEFAULT '-',
  `golongan` varchar(10) DEFAULT '-',
  `eselon` varchar(10) DEFAULT '-',
  `jabatan` varchar(255) NOT NULL,
  `tempat_pelaksana` varchar(255) NOT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_realisasi_tempatpelaksanaan`
--

INSERT INTO `t_realisasi_tempatpelaksanaan` (`id`, `t_realisasi_rkkl_id`, `nama_pelaksana`, `nip`, `golongan`, `eselon`, `jabatan`, `tempat_pelaksana`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rosfiana, S.H., M.H.', '196406121987032003', 'IV', 'II', 'Kepala Biro Perlengkapan BUA', 'PN Cikarang', 9, 2022, '2022-06-08 03:50:12', '2022-06-08 03:50:12'),
(2, 1, 'Arif Setiadi, SH', '198008072008051001', 'III', 'IV', 'Kasubbag. Statistik & Laporan', 'PN Cikarang', 9, 2022, '2022-06-08 03:50:55', '2022-06-08 03:50:55'),
(3, 1, 'Drajat prakosa, SH', '198703082015031002', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 03:51:39', '2022-06-08 03:51:39'),
(4, 1, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 03:52:08', '2022-06-08 03:52:08'),
(5, 1, 'Rina Lastriana, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 03:52:36', '2022-06-08 03:52:36'),
(6, 1, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag IKN, Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:53:18', '2022-06-08 03:53:18'),
(7, 1, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:53:55', '2022-06-08 03:53:55'),
(8, 1, 'Dian Anggraini, S.Kom', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:54:35', '2022-06-08 03:54:35'),
(9, 1, 'Yunita, SH., M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:55:03', '2022-06-08 03:55:03'),
(10, 1, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:55:26', '2022-06-08 03:55:26'),
(11, 1, 'Adi Mardiansyah, S.Kom., MM', '198803252011011012', 'III', 'IV', 'Kasubbag. Bimbingan & Monitoring', 'PN Bekasi', 9, 2022, '2022-06-08 03:57:31', '2022-06-08 03:57:31'),
(12, 1, 'Fidyanto Sandi Saputro, S.KOM.MBA', '198610192008051001', 'III', 'IV', 'Kasubbag. Pemb. & Neraca, Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 03:58:04', '2022-06-08 03:58:04'),
(13, 1, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 03:58:44', '2022-06-08 03:58:44'),
(14, 1, 'Kukuh Binanto, ST', '199401242019031003', 'III', 'V', 'Pranata Komputer pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 03:59:15', '2022-06-08 03:59:15'),
(15, 1, 'Lian Ariyanto, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 04:00:06', '2022-06-08 04:00:06'),
(16, 2, 'Rosfiana, SH., MH', '196406121987032003', 'IV', 'II', 'Kepala Biro Perlengkapan BUA', 'PTA Bandung', 6, 2022, '2022-06-08 04:06:05', '2022-07-04 03:11:54'),
(17, 2, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag IKN, Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 04:06:46', '2022-06-08 04:06:46'),
(18, 2, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 04:07:19', '2022-06-08 04:07:19'),
(19, 7, 'Rosfiana, S.H., M.H.', '196406121987032003', 'IV', 'II', 'Kepala Biro Perlengkapan BUA', 'PN Cikarang', 9, 2022, '2022-06-08 04:09:45', '2022-06-08 04:09:45'),
(20, 7, 'Arif Setiadi, SH', '198008072008051001', 'III', 'IV', 'Kasubbag. Statistik & Laporan', 'PN Cikarang', 9, 2022, '2022-06-08 04:10:18', '2022-06-08 04:10:18'),
(21, 7, 'Drajat prakosa, SH', '198703082015031002', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 04:10:44', '2022-06-08 04:10:44'),
(22, 7, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 04:11:02', '2022-06-08 04:11:02'),
(23, 7, 'Rina Lastriana, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 04:11:23', '2022-06-08 04:11:23'),
(24, 7, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag IKN, Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:11:52', '2022-06-08 04:11:52'),
(25, 7, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:12:24', '2022-06-08 04:12:24'),
(26, 7, 'Dian Anggraini, S.Kom', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:12:53', '2022-06-08 04:12:53'),
(27, 7, 'Yunita, SH., M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:13:16', '2022-06-08 04:13:16'),
(28, 7, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:13:34', '2022-06-08 04:13:34'),
(29, 7, 'Adi Mardiansyah, S.Kom., MM', '198803252011011012', 'III', 'IV', 'Kasubbag. Bimbingan & Monitoring', 'PA Bekasi', 9, 2022, '2022-06-08 04:14:11', '2022-06-08 04:14:11'),
(30, 7, 'Fidyanto Sandi Saputro, S.KOM.MBA', '198610192008051001', 'III', 'IV', 'Kasubbag. Pemb. & Neraca, Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 04:14:40', '2022-06-08 04:14:40'),
(31, 7, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 04:15:27', '2022-06-08 04:15:27'),
(32, 7, 'Kukuh Binanto, ST', '199401242019031003', 'III', 'V', 'Pranata Komputer pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 04:15:55', '2022-06-08 04:15:55'),
(33, 7, 'Lian Ariyanto, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 04:16:15', '2022-06-08 04:16:15'),
(34, 3, 'Rosfiana, S.H., M.H.', '196406121987032003', 'IV', 'II', 'Kepala Biro Perlengkapan BUA', 'PT Bandung', 9, 2022, '2022-06-08 04:18:49', '2022-06-08 04:18:49'),
(35, 3, 'Arif Setiadi, SH', '198008072008051001', 'III', 'IV', 'Kasubbag. Statistik & Laporan', 'PT Bandung', 9, 2022, '2022-06-08 04:19:30', '2022-06-08 04:19:30'),
(36, 3, 'Kukuh Binanto, ST', '199401242019031003', 'III', 'V', 'Pranata Komputer pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 04:19:59', '2022-06-08 04:19:59'),
(37, 3, 'Saprudin, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 04:20:22', '2022-06-08 04:20:22'),
(38, 3, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag IKN, Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 04:20:58', '2022-06-08 04:20:58'),
(39, 3, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 04:21:29', '2022-06-08 04:21:29'),
(40, 3, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 04:21:59', '2022-06-08 04:21:59'),
(41, 3, 'Yunita, SH., M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 04:22:19', '2022-06-08 04:22:19'),
(42, 3, 'Fidyanto Sandi Saputro, S.KOM.MBA', '198610192008051001', 'III', 'IV', 'Kasubbag. Pemb. & Neraca, Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:23:30', '2022-06-08 04:23:30'),
(43, 3, 'Dian Anggraini, S.Kom', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:24:10', '2022-06-08 04:24:10'),
(44, 3, 'Drajat prakosa, SH', '198703082015031002', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:24:35', '2022-06-08 04:24:35'),
(45, 3, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:25:16', '2022-06-08 04:25:16'),
(46, 3, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:25:36', '2022-06-08 04:25:36'),
(47, 4, 'Rosfiana, SH., MH', '196406121987032003', 'IV', 'II', 'Kepala Biro Perlengkapan BUA', 'PTA Bandung', 9, 2022, '2022-06-08 04:30:38', '2022-06-08 04:30:38'),
(48, 4, 'Antonius Adhi Irianto, SS', '198405072011011007', 'III', 'IV', 'Kasubbag. TU pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 04:31:32', '2022-06-08 04:31:32'),
(49, 4, 'Saprudin', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Banjar', 9, 2022, '2022-06-08 04:32:16', '2022-06-08 04:32:16'),
(50, 4, '-', '-', '-', '-', '-', 'PA Cimahi', 9, 2022, '2022-06-08 04:32:52', '2022-06-08 04:32:52'),
(51, 5, 'H. Sahwan, SH., MH', '196808171989031007', 'IV', 'II', 'Kepala Biro Perencanaan  Badan Urusan Adminitrasi', 'PTA Bandung', 9, 2022, '2022-06-08 04:35:49', '2022-06-08 04:35:49'),
(52, 5, 'Dedi Waryoman, S.Sos., MH', '196304071984031002', 'IV', 'II', 'Kepala Biro Keuangan Badan Urusan Adminitrasi', 'PT Bandung', 9, 2022, '2022-06-08 04:39:32', '2022-06-08 04:39:32'),
(53, 5, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag IKN, Biro Perlengkapan', 'PN Banjar', 9, 2022, '2022-06-08 04:41:01', '2022-06-08 04:41:01'),
(54, 5, 'Muhammad Anwar', '-', '-', '-', 'PPNPN Biro Keuangan', 'PA Cimahi', 9, 2022, '2022-06-08 04:43:56', '2022-06-08 04:43:56'),
(55, 5, 'Syahrel Lubis', '-', '-', '-', 'PPNPN Biro Perencanaan', 'PA Cimahi', 9, 2022, '2022-06-08 04:44:41', '2022-06-08 04:44:41'),
(58, 8, 'Rosfiana, SH., MH.', '196406121987032003', 'IV', 'II', 'Kepala Biro Perlengkapan BUA', 'Hotel Vertu', 9, 2022, '2022-06-08 04:49:54', '2022-06-08 04:49:54'),
(59, 8, 'Dedi Waryoman, S.Sos., M.H.', '196304071984031002', 'IV', 'II', 'Kepala Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:50:27', '2022-06-08 04:50:27'),
(60, 8, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:50:55', '2022-06-08 04:50:55'),
(61, 8, 'Rama Rahim, SE., MM., MBA.', '198105202009121002', 'III', 'III', 'Kepala Bagian Akuntansi Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:51:28', '2022-06-08 04:51:28'),
(62, 8, 'Azkia Kusumastuti, SE., MM', '197709232002122003', 'IV', 'III', 'Kepala Bagian Verifikasi Dan Tuntutan Ganti Rugi Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:51:57', '2022-06-08 04:51:57'),
(63, 8, 'Imam Purnomo, S.E., Ak., Ca.', '198109092006041002', 'IV', 'III', 'Auditor Ahli Madya Badan Pengawasan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:52:28', '2022-06-08 04:52:28'),
(64, 8, 'Jufri Hardi, S.T., M.H.', '198404042009121008', 'III', 'IV', 'Auditor Muda Badan Pengawasan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:53:15', '2022-06-08 04:53:15'),
(65, 8, 'Dimas Aryo Putra, SE.', '198212292009121005', 'III', 'IV', 'Kepala Sub Bagian Evaluasi Tata Laksana PB2 Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:53:50', '2022-06-08 04:53:50'),
(66, 8, 'Nugroho Urip Widodo, SE.,MM.', '198005232009121002', 'III', 'IV', 'Kepala Sub Bagian Akuntansi II Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:55:39', '2022-06-08 04:55:39'),
(67, 8, 'Anita Novianti, SE.,M.Ak', '198408112009042006', 'III', 'IV', 'Kepala Sub Bagian Akuntansi I A Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:56:10', '2022-06-08 04:56:10'),
(68, 8, 'Fita Rusfandari, SE.,MM.', '198412192009042004', 'III', 'IV', 'Kepala Sub Bagian Verifikasi Dan Tuntutan Ganti Rugi I B Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:56:37', '2022-06-08 04:56:37'),
(69, 8, 'Wikan Santoso, S.Kom.', '197705132009121006', 'III', 'IV', 'Kepala Sub Bagian TU Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:57:04', '2022-06-08 04:57:04'),
(70, 8, 'Indra Kurniawan, S.E., M.M', '198611292011011005', 'III', 'IV', 'Kepala Sub Bagian Perlengkapan Direktorat Jenderal Badan Peradilan Umum', 'Hotel Vertu', 9, 2022, '2022-06-08 04:58:08', '2022-06-08 04:58:08'),
(71, 8, 'Reynul Ardi, S.E., M.M', '198611292011011005', 'III', 'IV', 'Kepala Sub. Bagian Akuntansi Direktorat Jenderal Badan Peradilan Agama', 'Hotel Vertu', 9, 2022, '2022-06-08 04:58:33', '2022-06-08 04:58:33'),
(72, 8, 'Puji Mulyani, S.E.', '198203012006042004', 'III', 'IV', 'Kepala Sub Bagian Akuntansi Direktorat Jenderal Badan Peradilan Umum', 'Hotel Vertu', 9, 2022, '2022-06-08 04:59:00', '2022-06-08 04:59:00'),
(73, 8, 'Jefri Ardianto, S.T.', '197704142009041005', 'III', 'IV', 'Kepala Sub Bagian Perlengkapan Direktorat Jenderal Badan Peradilan Militer Dan Tata Usaha Negara', 'Hotel Vertu', 9, 2022, '2022-06-08 04:59:28', '2022-06-08 04:59:28'),
(74, 8, 'Marwanto, S.H.', '196906151991031008', 'III', 'IV', 'Kepala Sub Bagian Akuntansi Dan Pelaporan Badan Penelitian Dan Pengembangan Dan Pendidikan Dan Pelatihan Hukum Dan Peradilan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:00:08', '2022-06-08 05:00:08'),
(75, 8, 'Mariana Erka Puteri, S.H.,M.H.', '198503312006042002', 'III', 'IV', 'Kepala Sub Bagian Pelaksana Anggaran Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:02:30', '2022-06-08 05:02:30'),
(76, 8, 'Hamsarip Ongso, S.H.I', '197507062003121002', 'III', 'IV', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:02:53', '2022-06-08 05:02:53'),
(77, 8, 'Muhammad Sam Umar Wiraharja, S.Kom', '197507062003121002', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:03:19', '2022-06-08 05:03:19'),
(78, 8, 'Arif Setiadi, SH.', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:03:51', '2022-06-08 05:03:51'),
(79, 8, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:04:38', '2022-06-08 05:04:38'),
(80, 8, 'Adi Mardiansyah, S.Kom., M.M.', '198803252011011012', 'III', 'IV', 'Kepala Sub Bagian Bimbingan dan Monitoring Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:05:45', '2022-06-08 05:05:45'),
(81, 8, 'Antonius Adhi Irianto, S.S', '198405072011011007', 'III', 'IV', 'Kepala Sub Bagian Tata Usaha Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:01:36', '2022-06-08 06:01:36'),
(82, 8, 'Ignasia Sekar Astari Putri', '198701192011012019', 'III', 'IV', 'Kepala Sub Bagian Akuntansi I B Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:02:06', '2022-06-08 06:02:06'),
(83, 8, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:02:49', '2022-06-08 06:02:49'),
(84, 8, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:03:23', '2022-06-08 06:03:23'),
(85, 8, 'Ika Zulianancy, S.E., M.H.', '198407032011012011', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Muda pada Kepaniteraan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:03:48', '2022-06-08 06:03:48'),
(86, 8, 'Raden Roro Harningsih Arifin, S.H.', '198407032011012011', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Muda pada Kepaniteraan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:04:16', '2022-06-08 06:04:16'),
(87, 8, 'Meftafudin', '198403122006021002', 'III', 'V', 'Auditor Pertama Inspektorat Jenderal Kementrian Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:05:13', '2022-06-08 06:05:13'),
(88, 8, 'Ratna Yunita, ST', '197802062009042002', 'III', 'V', 'Pranata Keuangan APBN Pelaksanaan Lanjutan pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:06:07', '2022-06-08 06:06:07'),
(89, 8, 'Ahmad Khomaeni, A.Md.', '198111102006041004', 'III', 'V', 'Pranata Keuangan APBN Pelaksana Lanjutan/Mahir pada Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:06:35', '2022-06-08 06:06:35'),
(90, 8, 'Rustimah, A.Md., S.M.', '198501012009042022', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Pertama', 'Hotel Vertu', 9, 2022, '2022-06-08 06:07:03', '2022-06-08 06:07:03'),
(91, 8, 'Reza Dwi Ardianto , S.H.,M.H.', '198805242009121003', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Direktorat Jenderal Badan Peradilan Agama', 'Hotel Vertu', 9, 2022, '2022-06-08 06:07:34', '2022-06-08 06:07:34'),
(92, 8, 'Satrio Dirgantoro, S.SI.', '198901302020121005', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Sekretariat Badan Penelitian Dan Pengembangan Dan Pendidikan Dan Pelatihan Hukum Dan Peradilan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:07:57', '2022-06-08 06:07:57'),
(93, 8, 'Mulia Rahman, S.H.', '199011132009041001', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:08:24', '2022-06-08 06:08:24'),
(94, 8, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:08:52', '2022-06-08 06:08:52'),
(95, 8, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:09:22', '2022-06-08 06:09:22'),
(96, 8, 'Syafar, A.Md.Kom., S.A.P.', '198405052010011019', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:09:51', '2022-06-08 06:09:51'),
(97, 8, 'Zona Imania, SE', '199104102019032013', 'III', 'V', 'Analis Monitoring, Evaluasi dan Pelaporan pada Biro perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:10:13', '2022-06-08 06:10:13'),
(98, 8, 'Anisa Dwi Yunianti, S.Hum', '199706192020122009', 'III', 'V', 'Arsiparis Ahli Pertama pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:10:38', '2022-06-08 06:10:38'),
(99, 8, 'Eka Andi Mardani, S.S.T.Ars', '198710242020121003', 'III', 'V', 'Arsiparis Pertama Biro Perlebgkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:11:01', '2022-06-08 06:11:01'),
(100, 8, 'Egla Margaretta Meliala, A.Md.Kb.N.', '198710242020121003', 'II', 'V', 'Pranata Keuangan APBN Terampil pada Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:11:22', '2022-06-08 06:11:22'),
(101, 8, 'Susi Susanti Sinaga, A.Md', '199112192022032006', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:11:50', '2022-06-08 06:11:50'),
(102, 8, 'Sefti Kurniasih, A.Md.', '199909252022032002', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:12:13', '2022-06-08 06:12:13'),
(103, 8, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:12:27', '2022-06-08 06:12:27'),
(104, 8, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:12:40', '2022-06-08 06:12:40'),
(105, 8, 'Yunita, S.H, M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:12:55', '2022-06-08 06:12:55'),
(106, 8, 'Rina Lastriana, S.H.', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:13:08', '2022-06-08 06:13:08'),
(107, 8, 'Saprudin', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:13:22', '2022-06-08 06:13:22'),
(108, 9, 'Rosfiana, SH., MH', '196406121987032003', 'IV', 'II', 'Kepala Biro Perlengkapan BUA', 'PTA Medan', 9, 2022, '2022-06-08 06:27:14', '2022-06-08 06:27:14'),
(109, 9, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag IKN, Biro Perlengkapan', 'PTA Medan', 9, 2022, '2022-06-08 06:27:44', '2022-06-08 06:27:44'),
(110, 9, 'Antonius Adhi Irianto, SS', '198405072011011007', 'III', '-', 'Kasubbag. TU pada Biro Perlengkapan', 'PTA Medan', 9, 2022, '2022-06-08 06:28:24', '2022-06-08 06:28:24'),
(111, 10, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'Griya Persada Convention Hotel & Resort Kaliurang Yogyakarta', 9, 2022, '2022-06-08 06:31:06', '2022-06-08 06:31:06'),
(112, 11, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Karawang', 9, 2022, '2022-06-08 06:34:28', '2022-06-08 06:34:28'),
(113, 11, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PN Karawang', 9, 2022, '2022-06-08 06:35:10', '2022-06-08 06:35:10'),
(114, 11, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PN Karawang', 9, 2022, '2022-06-08 06:35:45', '2022-06-08 06:35:45'),
(115, 11, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Karawang', 9, 2022, '2022-06-08 06:36:14', '2022-06-08 06:36:14'),
(116, 11, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PA Karawang', 9, 2022, '2022-06-08 06:36:56', '2022-06-08 06:36:56'),
(117, 11, 'Antonius Adhi Irianto, S.S', '198405072011011007', 'III', 'IV', 'Kepala Sub Bagian Tata Usaha Biro Perlengkapan', 'PA Karawang', 9, 2022, '2022-06-08 06:37:55', '2022-06-08 06:37:55'),
(118, 11, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V\r\n\r\n', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PA Karawang', 9, 2022, '2022-06-08 06:38:26', '2022-06-08 06:38:26'),
(119, 11, 'Yunita, S.H, M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Karawang', 9, 2022, '2022-06-08 06:38:53', '2022-06-08 06:38:53'),
(120, 11, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 06:40:01', '2022-06-08 06:40:01'),
(121, 11, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V\r\n\r\n', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 06:40:43', '2022-06-08 06:40:43'),
(122, 11, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'V\r\n', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 06:41:17', '2022-06-08 06:41:17'),
(123, 11, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 06:41:45', '2022-06-08 06:41:45'),
(124, 12, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:45:10', '2022-06-08 06:45:10'),
(125, 12, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:45:43', '2022-06-08 06:45:43'),
(126, 12, 'Yunita, S.H, M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:46:14', '2022-06-08 06:46:14'),
(127, 12, 'Desy Putriani Purwastuti', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:46:54', '2022-06-08 06:46:54'),
(128, 12, 'Lian Ariyanto, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:47:51', '2022-06-08 06:47:51'),
(129, 12, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 06:48:55', '2022-06-08 06:48:55'),
(130, 12, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 06:49:42', '2022-06-08 06:49:42'),
(131, 12, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 06:50:12', '2022-06-08 06:50:12'),
(132, 12, 'Rina Lastriana, S.H.', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 06:50:34', '2022-06-08 06:50:34'),
(133, 12, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 06:51:27', '2022-06-08 06:51:27'),
(134, 12, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 06:51:56', '2022-06-08 06:51:56'),
(135, 12, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 06:52:30', '2022-06-08 06:52:30'),
(136, 12, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 06:52:53', '2022-06-08 06:52:53'),
(137, 13, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 06:57:51', '2022-06-08 06:57:51'),
(138, 13, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 06:59:08', '2022-06-08 06:59:08'),
(139, 13, 'Ratna Yunita, ST', '197802062009042002', 'III', 'V', 'Pranata Keuangan APBN Pelaksanaan Lanjutan pada Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 06:59:53', '2022-06-08 06:59:53'),
(140, 13, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 07:00:33', '2022-06-08 07:00:33'),
(141, 13, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:01:12', '2022-06-08 07:01:12'),
(142, 13, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:01:46', '2022-06-08 07:01:46'),
(143, 13, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:02:23', '2022-06-08 07:02:23'),
(144, 13, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:02:53', '2022-06-08 07:02:53'),
(145, 13, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:03:43', '2022-06-08 07:03:43'),
(146, 13, 'A. Adriyanti Akbar, S.H., M.H.', '197802052011012013', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:05:41', '2022-06-08 07:05:41'),
(147, 13, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:06:18', '2022-06-08 07:06:18'),
(148, 13, 'Yunita, S.H, M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:06:49', '2022-06-08 07:06:49'),
(149, 14, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 07:08:54', '2022-06-08 07:08:54'),
(150, 14, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 07:09:28', '2022-06-08 07:09:28'),
(151, 14, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 07:10:12', '2022-06-08 07:10:12'),
(152, 14, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 07:11:00', '2022-06-08 07:11:00'),
(153, 14, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 07:11:33', '2022-06-08 07:11:33'),
(154, 14, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 07:12:05', '2022-06-08 07:12:05'),
(155, 14, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 07:13:11', '2022-06-08 07:13:11'),
(156, 14, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 07:14:56', '2022-06-08 07:14:56'),
(157, 15, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 07:17:28', '2022-06-08 07:17:28'),
(158, 15, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 07:18:31', '2022-06-08 07:18:31'),
(159, 15, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 07:19:05', '2022-06-08 07:19:05'),
(160, 15, 'Budi Hendrasti, SH.,MH', '196708011994032004', 'IV', 'IV', 'Kasubag,. Pengadaan Barang I pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:21:09', '2022-06-08 07:21:09'),
(161, 15, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:21:53', '2022-06-08 07:21:53'),
(162, 15, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:22:21', '2022-06-08 07:22:21'),
(163, 15, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:22:53', '2022-06-08 07:22:53'),
(164, 16, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:25:16', '2022-06-08 07:25:16'),
(165, 16, 'Adi Mardiansyah, S.Kom., M.M.', '198803252011011012', 'III', 'IV', 'Kepala Sub Bagian Bimbingan dan Monitoring Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:26:16', '2022-06-08 07:26:16'),
(166, 16, 'Devi Amalia, S.H.', '198406072008052001', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:27:23', '2022-06-08 07:27:23'),
(167, 16, 'Yunita, S.H, M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:28:16', '2022-06-08 07:28:16'),
(168, 16, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 07:28:58', '2022-06-08 07:28:58'),
(169, 16, 'Arif Hidayat, S.E., M.H.', '197505072009121003', 'III', 'IV', 'Kasubag Analisa Kebutuhan PB II', 'PA Bogor', 9, 2022, '2022-06-08 07:30:07', '2022-06-08 07:30:07'),
(170, 16, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 07:30:40', '2022-06-08 07:30:40'),
(171, 16, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 07:31:03', '2022-06-08 07:31:03'),
(172, 16, 'Fairuz Lazwardi, S.Kom', '198201182009041001', 'III', 'IV', 'Kasubag Analisa Kebutuhan PB I', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:32:08', '2022-06-08 07:32:08'),
(173, 16, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:32:42', '2022-06-08 07:32:42'),
(174, 16, 'Ratna Yunita, ST', '197802062009042002', 'III', 'V', 'Pranata Keuangan APBN Pelaksanaan Lanjutan pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:33:15', '2022-06-08 07:33:15'),
(175, 16, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:33:36', '2022-06-08 07:33:36'),
(176, 16, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PA Cibinong', 9, 2022, '2022-06-08 07:34:14', '2022-06-08 07:34:14'),
(177, 16, 'Ulfah Apriani, S.E., M.Ak.', '198603222011012013', 'III', 'V\r\n\r\n', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Cibinong', 9, 2022, '2022-06-08 07:35:23', '2022-06-08 07:35:23'),
(178, 16, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'V\r\n\r\n', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Cibinong', 9, 2022, '2022-06-08 07:35:57', '2022-06-08 07:35:57'),
(179, 16, 'Eka Andi Mardani, S.S.T.Ars', '198710242020121003', 'III', 'V\r\n', 'Arsiparis Pertama Biro Perlengkapan', 'PA Cibinong', 9, 2022, '2022-06-08 07:36:41', '2022-06-08 07:36:41'),
(180, 16, 'Wahyu Dhimas Suparmasto, S.H., M.H.', '198210062008051001', 'III', 'IV', 'Kasubag Standarisasi dan Penilaian BUA', 'BALITBANG Diklat', 9, 2022, '2022-06-08 07:37:53', '2022-06-08 07:37:53'),
(181, 16, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'BALITBANG Diklat', 9, 2022, '2022-06-08 07:38:27', '2022-06-08 07:38:27'),
(182, 16, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'BALITBANG Diklat', 9, 2022, '2022-06-08 07:39:13', '2022-06-08 07:39:13'),
(183, 16, 'Desy Putriani Purwastuti', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'BALITBANG Diklat', 9, 2022, '2022-06-08 07:39:54', '2022-06-08 07:39:54'),
(184, 17, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:41:43', '2022-06-08 07:41:43'),
(185, 17, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:42:26', '2022-06-08 07:42:26'),
(186, 17, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:43:16', '2022-06-08 07:43:16'),
(187, 17, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:44:05', '2022-06-08 07:44:05'),
(188, 17, 'A. Adriyanti Akbar, S.H., M.H.', '1978002052011012013', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:45:21', '2022-06-08 07:45:21'),
(189, 17, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:45:40', '2022-06-08 07:45:40'),
(190, 17, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:46:15', '2022-06-08 07:46:15'),
(191, 17, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:46:55', '2022-06-08 07:46:55'),
(192, 17, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:47:27', '2022-06-08 07:47:27'),
(193, 17, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:48:12', '2022-06-08 07:48:12'),
(194, 17, 'Yunita, S.H, M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:48:30', '2022-06-08 07:48:30'),
(195, 17, 'Redi Melfisko', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:48:54', '2022-06-08 07:48:54'),
(196, 18, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PT Surabaya', 9, 2022, '2022-06-08 07:50:48', '2022-06-08 07:50:48'),
(197, 19, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'MS Aceh', 9, 2022, '2022-06-08 07:52:02', '2022-06-08 07:52:02'),
(198, 20, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PT Ujung Pandang', 9, 2022, '2022-06-08 07:53:40', '2022-06-08 08:01:34'),
(199, 21, 'Drs. Arif Hidayat, SH. MM.', '196809041993031004', 'IV', 'IV', 'Sekretaris Dirjen Badilag', 'PTA Bandung', 9, 2022, '2022-06-08 07:55:44', '2022-06-08 07:55:44'),
(200, 21, 'Rosfiana, SH., MH.', '196406121987032003', 'IV', 'II', 'Kepala Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:56:17', '2022-06-08 07:56:17'),
(201, 21, 'H. Sahwan, SH. MH.', '196808171989031007', 'IV', 'II', 'Kepala Biro Keuangan BUA', 'PTA Bandung', 9, 2022, '2022-06-08 07:56:59', '2022-06-08 07:56:59'),
(202, 21, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:57:25', '2022-06-08 07:57:25'),
(203, 21, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Cimahi', 9, 2022, '2022-06-08 07:57:53', '2022-06-08 07:57:53'),
(204, 21, 'Imam Santoso', '-', '-', '-', 'PPNPN pada Badilag', 'PA Bandung', 9, 2022, '2022-06-08 07:58:26', '2022-06-08 07:58:26'),
(205, 21, 'Saprudin', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:58:47', '2022-06-08 07:58:47'),
(206, 21, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:59:07', '2022-06-08 07:59:07'),
(215, 32, 'kukuh binanto', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama', 'PN Palangkaraya', 6, 2022, '2022-06-29 08:48:50', '2022-06-29 08:48:50'),
(219, 34, 'M. Sam Umar Wiraharja S.kom', '198303242011011005', 'III', 'IV', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'MS Aceh', 6, 2022, '2022-07-01 03:58:29', '2022-07-01 03:58:29'),
(220, 34, 'Dian Anggraini, S.Kom', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'MS Aceh', 6, 2022, '2022-07-01 03:59:40', '2022-07-01 03:59:40'),
(221, 34, 'Sefti Kurniasih, Amd', '199909252022032002', 'III', 'V', 'Pengelola Barang Milik Negara', 'MS Aceh', 6, 2022, '2022-07-01 04:00:51', '2022-07-01 04:00:51'),
(222, 34, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kepala Bagian Inventaris Kekayaan Negara', 'PT Pontianak', 6, 2022, '2022-07-01 04:06:33', '2022-07-01 04:06:33'),
(223, 34, 'Budi Wantoro, S.H., M.H.', '197005271991031003', 'III', 'III', 'Kabag. Penghapusan pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:08:01', '2022-07-01 04:08:01'),
(224, 34, 'Kukuh Binanto , ST', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama', 'PT Pontianak', 6, 2022, '2022-07-01 04:09:42', '2022-07-01 04:09:42'),
(225, 34, 'Hendro Prio Sasongko, S.H.', '-', '-', '-', 'PPNPN pada Biro perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:10:20', '2022-07-01 04:10:20'),
(226, 35, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008052001', 'III', 'IV', 'Kasubbag. Pembukuan & Neraca pada Biro Perlengkapan', 'PN Mojokerto', 6, 2022, '2022-07-01 04:16:35', '2022-07-01 04:16:35'),
(227, 35, 'Kukuh Binanto , ST', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama', 'PN Mojokerto', 6, 2022, '2022-07-01 04:17:04', '2022-07-01 04:17:04'),
(228, 35, 'Susi Susanti Sinaga', '199112192022032006', 'II', 'V', 'Pengelola Barang milik Negara', 'PN Mojokerto', 6, 2022, '2022-07-01 04:17:39', '2022-07-01 04:17:39'),
(229, 36, 'Arif Setiadi, S.H', '198008072008051001', 'III', 'IV', 'Kasubbag. Statistik & Pelaporan pada Biro Perlengkapan', 'PT Ujung Pandang', 6, 2022, '2022-07-01 04:21:09', '2022-07-01 04:21:09'),
(230, 36, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analisis Aset Negara pada Biro', 'PT Ujung Pandang', 6, 2022, '2022-07-01 04:22:50', '2022-07-01 04:22:50'),
(231, 36, 'Yunita, S.H., M.kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PT Ujung Pandang', 6, 2022, '2022-07-01 04:25:24', '2022-07-01 04:25:24'),
(232, 36, 'Ratna Yunita, ST.', '197802062009042002', 'III', 'V', 'Pranata Keuangan APBN Pelaksanaan Lanjutan pada Biro Perlengkapan', 'PT Ujung Pandang', 6, 2022, '2022-07-01 04:27:42', '2022-07-01 04:27:42'),
(233, 37, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag. Invetaris Kekayaan Negara pada Biro Perlengkapan', 'PT Surabaya', 6, 2022, '2022-07-01 04:29:44', '2022-07-01 04:29:44'),
(234, 38, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'V', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PTA Kupang', 6, 2022, '2022-07-01 04:32:26', '2022-07-01 04:32:26'),
(235, 38, 'Sefti Kurniasih, A.md', '199909252022032002', 'II', 'V', 'Pengelola Barang Milik Negara', 'PTA Kupang', 6, 2022, '2022-07-01 04:33:25', '2022-07-01 04:33:25'),
(236, 38, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perelengkapan', 'PTA Kupang', 6, 2022, '2022-07-01 04:34:22', '2022-07-01 04:34:22'),
(237, 39, 'M. Sam Wiraharja, S.Kom.', '198303242011011005', 'III', 'IV', 'Kasubbag. Pendataan pada Biro Perlngkapan', 'MS Aceh', 6, 2022, '2022-07-01 04:43:44', '2022-07-01 04:43:44'),
(238, 39, 'Dian Anggraini, S.kom', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'MS Aceh', 6, 2022, '2022-07-01 04:45:47', '2022-07-01 04:45:47'),
(239, 39, 'Sefti Kurniasih, A.md', '199909252022032002', 'II', 'V', 'Pengelola Barang Milik Negara', 'MS Aceh', 6, 2022, '2022-07-01 04:47:04', '2022-07-01 04:47:04'),
(240, 39, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag. Inventaris Kekayaan Negara pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:48:22', '2022-07-01 04:48:22'),
(241, 39, 'Budi Wantoro, S.H., M.H.', '197005271991031003', 'IV', 'III', 'Kabag. Penghapusan pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:49:40', '2022-07-01 04:49:40'),
(242, 39, 'Kukuh Binanto , ST', '199401242019031003', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:50:23', '2022-07-01 04:50:23'),
(243, 39, 'Hendro Pro Sasongko, S.H.', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:51:05', '2022-07-01 04:51:05'),
(244, 40, 'Rosfiana, S.H., M.H', '197202042002121004', 'IV', 'II', 'Kepala Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '2022-07-01 06:16:23', '2022-07-01 06:16:23'),
(245, 40, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'III', 'Kabag. Inventaris Kekayaan Negara Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '2022-07-01 06:18:47', '2022-07-01 06:18:47'),
(246, 40, 'Marwendi Putra, S.T., M.M.', '197603142006041002', 'IV', 'III', 'Kepala Bagian Tata Laksana Pengadaan Barang I Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '2022-07-01 06:27:07', '2022-07-01 06:27:07'),
(247, 40, 'Fany Widia, S.E., M.M.\r\n', '197202042002121004', 'IV', 'III', 'Kepala Bagian Tata Laksana Pengadaan Barang II Biro Perlengkapan\r\n', 'Holiday Inn Gajahmada', 6, 2022, '2022-07-01 06:34:02', '2022-07-01 06:34:02'),
(248, 40, 'Irwansyah, S,H., M,H.', '196804291988031001', 'IV', 'III', 'Kepala Bagian Mutasi II BUA', 'Holiday Inn Gajahmada', 6, 2022, '2022-07-01 06:36:52', '2022-07-01 06:36:52'),
(249, 40, 'Eko Prihanto, S.H.,M.H.', '198412282005021001', 'III', 'III', 'Kepala Bagian Bimbingan Dan Monitoring Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 40, 'Sukatno, S.H.', '196705281987031003', 'IV', 'III', 'Kepala Bagian Umum pada Direktorat Jenderal Badan Peradilan Umum', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 40, 'Isrul, S.E., M.H.', '197002141999031002', 'III', 'IV', 'Kepala Sub Bagian Standarisasi Pengadaan Barang II Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 40, 'Budi Hendrasti, S.H., M.H.', '196708011994032004', 'III', 'IV', 'Kepala Sub Bagian Evaluasi Pengadaan Barang I Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 40, 'Marsilah, S.H.', '196406011987032001', 'III', 'IV', 'Kepala Sub Bagian Bimbingan Dan Monitoring B Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 40, 'Wielly Prasekti', '197709122000121001', 'III', 'V', 'Kepala Seksi Perumusan Kebijakan BMN III D', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 40, 'Puji Mulyani, S.E.', '198201182009041001', 'III', 'IV', 'Kepala Sub Bagian Analisa Kebutuhan Pengadaan Barang I Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 40, 'Sofyan Adi Irawan, S.Kom., MT.', '197710302009041001', 'III', 'IV', 'Kepala Sub Bagian Standarisasi Pengadaan Barang I Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 40, 'Arif Hidayat, S.E., M.H.', '197505072009121003', 'III', 'IV', 'Kepala Sub Bagian Analisa Kebutuhan Pengadaan Barang II Biro Perlengkapan ', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 40, 'Dimas Aryo Putra, SE.', '198212292009121005', 'III', 'IV', 'Kepala Sub Bagian Evaluasi Pengadaan Barang II Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 40, 'Nur Rahmat Baskara, S.E.', '198011022009121004', 'III', 'IV', 'Kepala Sub Bagian Bimbingan Dan Monitoring C Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 40, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'IV', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 40, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'IV', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 40, 'Arif Setiadi, S.H.', '198008072008051001', 'III', 'IV', 'Kepala Sub Bagian Statistik Dan Laporan pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 40, 'Antonius Adhi Irianto, S.S', '198405072011011007', 'III', 'IV', 'Kepala Sub Bagian Tata Usaha Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 40, 'Wahyu Dhimas S, S.H., M.M.', '198210062008051001', 'III', 'IV', 'Kepala Sub Bagian Standarisasi Dan Penilaian Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 40, 'Adi Mardiansyah, S.Kom., M.M.', '198803252011011012', 'III', 'IV', 'Kepala Sub Bagian Bimbingan dan Monitoring A Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 40, 'Arif Purwadi, SE, MM', '198702072009121003', 'III', 'IV', 'Kepala Sub Bagian Penyimpanan dan Pendistribusian Biro Umum', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 40, 'Puji Mulyani, S.E.', '198203012006042004', 'III', 'IV', 'Kepala Sub Bagian Akuntansi pada Direktorat Jenderal Badan Peradilan Umum', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 40, 'Victor Albadi`U Ratib, S.H.', '199611022019031005', 'III', 'V', 'Penyusun laporan Keuangan pada Direktorat Jenderal Badan Peradilan Militer Dan Tata Usaha Negara', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 40, 'Raden Roro Harningsih Arifin, S.H.', '198705152006042001', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Muda pada Kepaniteraan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 40, 'Hari Pramono, S.Kom.', '198402182009121004', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Kepaniteraan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 40, 'Satrio Dirgantoro, S.SI.', '198901302020121005', 'III', 'V', 'Analis Pelaporan pada Badan Penelitian Dan Pengembangan Dan Pendidikan Dan Pelatihan Hukum Dan Peradilan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 40, 'Donny Afrijanto, S.H.', '198004172009121005', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Badan Penelitian Dan Pengembangan Dan Pendidikan Dan Pelatihan Hukum Dan Peradilan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 40, 'Reza Dwi Ardianto , S.H., M.H.', '198805242009121003', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Direktorat Jenderal Badan Peradilan Agama', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 40, 'Muhammad Fahrizal Adriyanto, S.Kom.', '198712272015031002', 'III', 'V', 'Analis Sistem Informasi Dan Jaringan pada Direktorat Jenderal Badan Peradilan Agama', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 40, 'Heni Lestari, S.H., M.M.', '197204121999032001', 'III', 'V', 'Penelaah Kebijakan Pengadaan Barang Dan Jasa pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 40, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan ', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 40, 'Lumaksono Sugiharto, S.E.', '198105302006041002', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, 40, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, 40, 'Falcon, S.H., M.H.', '198003242007041001', 'III', 'V', 'Analis Tata Usaha pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `t_realisasi_tempatpelaksanaan` (`id`, `t_realisasi_rkkl_id`, `nama_pelaksana`, `nip`, `golongan`, `eselon`, `jabatan`, `tempat_pelaksana`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(280, 40, 'Ulfah Apriyani, S.E., M.Ak.', '198603222011012013', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, 40, 'A. Adriyanti Akbar, S.H., M.H.', '198802052011012013', 'III', 'V', 'Analis Tata Usaha pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, 40, 'Ratna Yunita, ST', '197802062009042002', 'III', 'V', 'Pranata Keuangan APBN Pelaksanaan Lanjutan/Mahir pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, 40, 'Devi Amelia, S.H.', '198406072008052001', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 40, 'David Achmad Wijaya, S.E.', '198603022008051001', 'III', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 40, 'Fitri Darmayanti, S.Kom.', '198909052015032001', 'III', 'V', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 40, 'Drajat Prakosa, S.H.', '199401242019031003', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 40, 'Kukuh Binanto, S.T', '199401242019031000', 'III', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 40, 'Silvani Elsa Fitriana, A.Md', '199007072019032011', 'III', 'V', 'Pengelola Sistem Dan Jaringan pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 40, 'Agus Wiguno, SE', '198703162019031004', 'III', 'V', 'Analis Aset Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 40, 'Muhammad Naufal Mu`Tashim Billah, S.A.P.', '199409202019031003', 'III', 'V', 'Analis Monitoring Dan Evaluasi Pelaksanaan Anggaran pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 40, 'Syafar, A.Md.Kom., S.A.P.', '198405052010011019', 'III', 'V', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Biro Keuangan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, 40, 'Zona Imania, SE', '199104102019032013', 'III', 'V', 'Analis Monitoring, Evaluasi dan Pelaporan pada Biro perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, 40, 'Eka Andi Mardani, S.S.T.Ars.', '198710242020121003', 'III', 'V', 'Arsiparis Pertama pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 40, 'Anisa Dwi Yunianti, S.Hum', '199706192020122009', 'III', 'V', 'Arsiparis Ahli Pertama pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 40, 'Sari Alsaqati Ardana, A.Md.K.b.n', '200012182022012004', 'II', 'V', 'Pengelola Akuntansi pada Badan Pengawasan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 40, 'Farid Iqbal Darmawan, A.Md.Ak', '199811062022011002', 'II', 'V', 'Pengelola Kendaraan dan Perjalanan Dinas pada Badan Pengawasan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 40, 'Egla Margaretta Meliala, A.Md.Kb.N.', '200103152022012001', 'II', 'V', 'Pranata Keuangan APBN Terampil pada Biro Keuangan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 40, 'Beatrix Retta Celia, ST', '199508222020122009', 'II', 'V', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 40, 'Indah Niasty Manao, A.Md.Ak.', '199704132022032012', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 40, 'Susi Susanti Sinaga, A.Md', '199112192022032006', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 40, 'Riska Rohana Silalahi, A.Md', '199610112022032009', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 40, 'Sefti Kurniasih, A.Md.', '199909252022032002', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 40, 'Rendy Rumeza, A.Md.', '199002262022031002', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 40, 'Sari Soraya Sianturi, A.Md', '199711122022032013', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 40, 'Irvandy Rizky Septianno, A.Md.', '199709012022031007', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 40, 'David Theodorus Sijabat, A.Md.', '199612122022031000', 'II', 'V', 'Pengelola Barang Milik Negara pada Biro Umum', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 40, 'Redimel Vischo, A.Md', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 40, 'Wahyudin', '-', '-', 'III', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 40, 'Lian Ariyanto, S.H', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 40, 'Vera Rosmamalini', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 40, 'Safrudin, S.H', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 40, 'Yunita, S.H, M.Kn', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 40, 'Rina Lastriana, S.H.', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 40, 'M. Syahnan Irawan, S.E', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 40, 'Ahmad Fauzi Ibrahim, S.KOM., M.M.', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, 40, 'Hendro Prio Sasongko, SH', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, 40, 'Ahmad Baidowi', '-', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, 40, 'Robbiati Adawiyah, S.E.', '-', '-', '-', 'PPNPN pada Direktorat Jenderal Badan Peradilan Militer Dan Tata Usaha Negara', 'Holiday Inn Gajahmada', 6, 2022, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_realisasi_tempatpelaksanaan_bck_01072022`
--

CREATE TABLE `t_realisasi_tempatpelaksanaan_bck_01072022` (
  `id` int(11) NOT NULL,
  `t_realisasi_rkkl_id` int(11) NOT NULL COMMENT 't_realisasi_rkkl',
  `nama_pelaksana` varchar(255) NOT NULL,
  `nip` varchar(255) DEFAULT '-',
  `golongan` varchar(10) DEFAULT '-',
  `jabatan` varchar(255) NOT NULL,
  `tempat_pelaksana` varchar(255) NOT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_realisasi_tempatpelaksanaan_bck_01072022`
--

INSERT INTO `t_realisasi_tempatpelaksanaan_bck_01072022` (`id`, `t_realisasi_rkkl_id`, `nama_pelaksana`, `nip`, `golongan`, `jabatan`, `tempat_pelaksana`, `user_penginput_data`, `tahun_anggaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rosfiana, S.H., M.H.', '196406121987032003', 'IV', 'Kepala Biro Perlengkapan BUA', 'PN Cikarang', 9, 2022, '2022-06-08 03:50:12', '2022-06-08 03:50:12'),
(2, 1, 'Arif Setiadi, SH', '198008072008051001', 'III', 'Kasubbag. Statistik & Laporan', 'PN Cikarang', 9, 2022, '2022-06-08 03:50:55', '2022-06-08 03:50:55'),
(3, 1, 'Drajat prakosa, SH', '198703082015031002', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 03:51:39', '2022-06-08 03:51:39'),
(4, 1, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 03:52:08', '2022-06-08 03:52:08'),
(5, 1, 'Rina Lastriana, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 03:52:36', '2022-06-08 03:52:36'),
(6, 1, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag IKN, Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:53:18', '2022-06-08 03:53:18'),
(7, 1, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:53:55', '2022-06-08 03:53:55'),
(8, 1, 'Dian Anggraini, S.Kom', '197805102006042003', 'III', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:54:35', '2022-06-08 03:54:35'),
(9, 1, 'Yunita, SH., M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:55:03', '2022-06-08 03:55:03'),
(10, 1, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 03:55:26', '2022-06-08 03:55:26'),
(11, 1, 'Adi Mardiansyah, S.Kom., MM', '198803252011011012', 'III', 'Kasubbag. Bimbingan & Monitoring', 'PN Bekasi', 9, 2022, '2022-06-08 03:57:31', '2022-06-08 03:57:31'),
(12, 1, 'Fidyanto Sandi Saputro, S.KOM.MBA', '198610192008051001', 'III', 'Kasubbag. Pemb. & Neraca, Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 03:58:04', '2022-06-08 03:58:04'),
(13, 1, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 03:58:44', '2022-06-08 03:58:44'),
(14, 1, 'Kukuh Binanto, ST', '199401242019031003', 'III', 'Pranata Komputer pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 03:59:15', '2022-06-08 03:59:15'),
(15, 1, 'Lian Ariyanto, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 04:00:06', '2022-06-08 04:00:06'),
(16, 2, 'Rosfiana, SH., MH', '196406121987032003', 'IV', 'Kepala Biro Perlengkapan BUA', 'PTA Bandung', 6, 2022, '2022-06-08 04:06:05', '2022-06-19 14:23:29'),
(17, 2, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag IKN, Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 04:06:46', '2022-06-08 04:06:46'),
(18, 2, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 04:07:19', '2022-06-08 04:07:19'),
(19, 7, 'Rosfiana, S.H., M.H.', '196406121987032003', 'IV', 'Kepala Biro Perlengkapan BUA', 'PN Cikarang', 9, 2022, '2022-06-08 04:09:45', '2022-06-08 04:09:45'),
(20, 7, 'Arif Setiadi, SH', '198008072008051001', 'III', 'Kasubbag. Statistik & Laporan', 'PN Cikarang', 9, 2022, '2022-06-08 04:10:18', '2022-06-08 04:10:18'),
(21, 7, 'Drajat prakosa, SH', '198703082015031002', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 04:10:44', '2022-06-08 04:10:44'),
(22, 7, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 04:11:02', '2022-06-08 04:11:02'),
(23, 7, 'Rina Lastriana, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 04:11:23', '2022-06-08 04:11:23'),
(24, 7, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag IKN, Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:11:52', '2022-06-08 04:11:52'),
(25, 7, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:12:24', '2022-06-08 04:12:24'),
(26, 7, 'Dian Anggraini, S.Kom', '197805102006042003', 'III', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:12:53', '2022-06-08 04:12:53'),
(27, 7, 'Yunita, SH., M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:13:16', '2022-06-08 04:13:16'),
(28, 7, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 04:13:34', '2022-06-08 04:13:34'),
(29, 7, 'Adi Mardiansyah, S.Kom., MM', '-', '-', 'Kasubbag. Bimbingan & Monitoring', 'PA Bekasi', 9, 2022, '2022-06-08 04:14:11', '2022-06-08 04:14:11'),
(30, 7, 'Fidyanto Sandi Saputro, S.KOM.MBA', '198610192008051001', 'III', 'Kasubbag. Pemb. & Neraca, Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 04:14:40', '2022-06-08 04:14:40'),
(31, 7, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 04:15:27', '2022-06-08 04:15:27'),
(32, 7, 'Kukuh Binanto, ST', '199401242019031003', 'III', 'Pranata Komputer pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 04:15:55', '2022-06-08 04:15:55'),
(33, 7, 'Lian Ariyanto, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 04:16:15', '2022-06-08 04:16:15'),
(34, 3, 'Rosfiana, S.H., M.H.', '196406121987032003', 'IV', 'Kepala Biro Perlengkapan BUA', 'PT Bandung', 9, 2022, '2022-06-08 04:18:49', '2022-06-08 04:18:49'),
(35, 3, 'Arif Setiadi, SH', '198008072008051001', 'III', 'Kasubbag. Statistik & Laporan', 'PT Bandung', 9, 2022, '2022-06-08 04:19:30', '2022-06-08 04:19:30'),
(36, 3, 'Kukuh Binanto, ST', '199401242019031003', 'III', 'Pranata Komputer pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 04:19:59', '2022-06-08 04:19:59'),
(37, 3, 'Saprudin, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 04:20:22', '2022-06-08 04:20:22'),
(38, 3, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag IKN, Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 04:20:58', '2022-06-08 04:20:58'),
(39, 3, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 04:21:29', '2022-06-08 04:21:29'),
(40, 3, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 04:21:59', '2022-06-08 04:21:59'),
(41, 3, 'Yunita, SH., M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 04:22:19', '2022-06-08 04:22:19'),
(42, 3, 'Fidyanto Sandi Saputro, S.KOM.MBA', '198610192008051001', 'III', 'Kasubbag. Pemb. & Neraca, Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:23:30', '2022-06-08 04:23:30'),
(43, 3, 'Dian Anggraini, S.Kom', '197805102006042003', 'III', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:24:10', '2022-06-08 04:24:10'),
(44, 3, 'Drajat prakosa, SH', '198703082015031002', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:24:35', '2022-06-08 04:24:35'),
(45, 3, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:25:16', '2022-06-08 04:25:16'),
(46, 3, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 04:25:36', '2022-06-08 04:25:36'),
(47, 4, 'Rosfiana, SH., MH', '196406121987032003', 'IV', 'Kepala Biro Perlengkapan BUA', 'PTA Bandung', 9, 2022, '2022-06-08 04:30:38', '2022-06-08 04:30:38'),
(48, 4, 'Antonius Adhi Irianto, SS', '198405072011011007', 'III', 'Kasubbag. TU pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 04:31:32', '2022-06-08 04:31:32'),
(49, 4, 'Saprudin', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Banjar', 9, 2022, '2022-06-08 04:32:16', '2022-06-08 04:32:16'),
(50, 4, '-', '-', '-', '-', 'PA Cimahi', 9, 2022, '2022-06-08 04:32:52', '2022-06-08 04:32:52'),
(51, 5, 'H. Sahwan, SH., MH', '196808171989031007', 'IV', 'Kepala Biro Perencanaan  Badan Urusan Adminitrasi', 'PTA Bandung', 9, 2022, '2022-06-08 04:35:49', '2022-06-08 04:35:49'),
(52, 5, 'Dedi Waryoman, S.Sos., MH', '196304071984031002', 'IV', 'Kepala Biro Keuangan Badan Urusan Adminitrasi', 'PT Bandung', 9, 2022, '2022-06-08 04:39:32', '2022-06-08 04:39:32'),
(53, 5, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag IKN, Biro Perlengkapan', 'PN Banjar', 9, 2022, '2022-06-08 04:41:01', '2022-06-08 04:41:01'),
(54, 5, 'Muhammad Anwar', '-', '-', 'PPNPN Biro Keuangan', 'PA Cimahi', 9, 2022, '2022-06-08 04:43:56', '2022-06-08 04:43:56'),
(55, 5, 'Syahrel Lubis', '-', '-', 'PPNPN Biro Perencanaan', 'PA Cimahi', 9, 2022, '2022-06-08 04:44:41', '2022-06-08 04:44:41'),
(56, 6, 'Rosfiana, SH., MH.', '-', '-', 'Kepala Biro Perlengkapan', 'PT Jakarta', 9, 2022, '2022-06-08 04:47:10', '2022-06-08 04:47:10'),
(57, 6, 'Dedi Waryoman, S.Sos., M.H.', '196304071984031002', 'IV', 'Kepala Biro Keuangan', 'PT Jakarta', 9, 2022, '2022-06-08 04:48:05', '2022-06-08 04:48:05'),
(58, 8, 'Rosfiana, SH., MH.', '196406121987032003', 'IV', 'Kepala Biro Perlengkapan BUA', 'Hotel Vertu', 9, 2022, '2022-06-08 04:49:54', '2022-06-08 04:49:54'),
(59, 8, 'Dedi Waryoman, S.Sos., M.H.', '196304071984031002', 'IV', 'Kepala Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:50:27', '2022-06-08 04:50:27'),
(60, 8, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:50:55', '2022-06-08 04:50:55'),
(61, 8, 'Rama Rahim, SE., MM., MBA.', '198105202009121002', 'III', 'Kepala Bagian Akuntansi Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:51:28', '2022-06-08 04:51:28'),
(62, 8, 'Azkia Kusumastuti, SE., MM', '197709232002122003', 'IV', 'Kepala Bagian Verifikasi Dan Tuntutan Ganti Rugi Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:51:57', '2022-06-08 04:51:57'),
(63, 8, 'Imam Purnomo, S.E., Ak., Ca.', '198109092006041002', 'IV', 'Auditor Ahli Madya Badan Pengawasan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:52:28', '2022-06-08 04:52:28'),
(64, 8, 'Jufri Hardi, S.T., M.H.', '198404042009121008', 'III', 'Auditor Muda Badan Pengawasan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:53:15', '2022-06-08 04:53:15'),
(65, 8, 'Dimas Aryo Putra, SE.', '198212292009121005', 'III', 'Kepala Sub Bagian Evaluasi Tata Laksana PB2 Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:53:50', '2022-06-08 04:53:50'),
(66, 8, 'Nugroho Urip Widodo, SE.,MM.', '198005232009121002', 'III', 'Kepala Sub Bagian Akuntansi II Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:55:39', '2022-06-08 04:55:39'),
(67, 8, 'Anita Novianti, SE.,M.Ak', '198408112009042006', 'III', 'Kepala Sub Bagian Akuntansi I A Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:56:10', '2022-06-08 04:56:10'),
(68, 8, 'Fita Rusfandari, SE.,MM.', '198412192009042004', 'III', 'Kepala Sub Bagian Verifikasi Dan Tuntutan Ganti Rugi I B Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:56:37', '2022-06-08 04:56:37'),
(69, 8, 'Wikan Santoso, S.Kom.', '197705132009121006', 'III', 'Kepala Sub Bagian TU Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 04:57:04', '2022-06-08 04:57:04'),
(70, 8, 'Indra Kurniawan, S.E., M.M', '198611292011011005', 'III', 'Kepala Sub Bagian Perlengkapan Direktorat Jenderal Badan Peradilan Umum', 'Hotel Vertu', 9, 2022, '2022-06-08 04:58:08', '2022-06-08 04:58:08'),
(71, 8, 'Reynul Ardi, S.E., M.M', '198611292011011005', 'III', 'Kepala Sub. Bagian Akuntansi Direktorat Jenderal Badan Peradilan Agama', 'Hotel Vertu', 9, 2022, '2022-06-08 04:58:33', '2022-06-08 04:58:33'),
(72, 8, 'Puji Mulyani, S.E.', '198203012006042004', 'III', 'Kepala Sub Bagian Akuntansi Direktorat Jenderal Badan Peradilan Umum', 'Hotel Vertu', 9, 2022, '2022-06-08 04:59:00', '2022-06-08 04:59:00'),
(73, 8, 'Jefri Ardianto, S.T.', '197704142009041005', 'III', 'Kepala Sub Bagian Perlengkapan Direktorat Jenderal Badan Peradilan Militer Dan Tata Usaha Negara', 'Hotel Vertu', 9, 2022, '2022-06-08 04:59:28', '2022-06-08 04:59:28'),
(74, 8, 'Marwanto, S.H.', '196906151991031008', 'III', 'Kepala Sub Bagian Akuntansi Dan Pelaporan Badan Penelitian Dan Pengembangan Dan Pendidikan Dan Pelatihan Hukum Dan Peradilan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:00:08', '2022-06-08 05:00:08'),
(75, 8, 'Mariana Erka Puteri, S.H.,M.H.', '198503312006042002', 'III', 'Kepala Sub Bagian Pelaksana Anggaran Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:02:30', '2022-06-08 05:02:30'),
(76, 8, 'Hamsarip Ongso, S.H.I', '197507062003121002', 'III', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:02:53', '2022-06-08 05:02:53'),
(77, 8, 'Muhammad Sam Umar Wiraharja, S.Kom', '197507062003121002', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:03:19', '2022-06-08 05:03:19'),
(78, 8, 'Arif Setiadi, SH.', '198303242011011005', 'III', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:03:51', '2022-06-08 05:03:51'),
(79, 8, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:04:38', '2022-06-08 05:04:38'),
(80, 8, 'Adi Mardiansyah, S.Kom., M.M.', '198803252011011012', 'III', 'Kepala Sub Bagian Bimbingan dan Monitoring Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 05:05:45', '2022-06-08 05:05:45'),
(81, 8, 'Antonius Adhi Irianto, S.S', '198405072011011007', 'III', 'Kepala Sub Bagian Tata Usaha Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:01:36', '2022-06-08 06:01:36'),
(82, 8, 'Ignasia Sekar Astari Putri', '198701192011012019', 'III', 'Kepala Sub Bagian Akuntansi I B Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:02:06', '2022-06-08 06:02:06'),
(83, 8, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:02:49', '2022-06-08 06:02:49'),
(84, 8, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:03:23', '2022-06-08 06:03:23'),
(85, 8, 'Ika Zulianancy, S.E., M.H.', '198407032011012011', 'III', 'Analis Pengelolaan Keuangan APBN Ahli Muda pada Kepaniteraan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:03:48', '2022-06-08 06:03:48'),
(86, 8, 'Raden Roro Harningsih Arifin, S.H.', '198407032011012011', 'III', 'Analis Pengelolaan Keuangan APBN Ahli Muda pada Kepaniteraan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:04:16', '2022-06-08 06:04:16'),
(87, 8, 'Meftafudin', '198403122006021002', 'III', 'Auditor Pertama Inspektorat Jenderal Kementrian Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:05:13', '2022-06-08 06:05:13'),
(88, 8, 'Ratna Yunita, ST', '197802062009042002', 'III', 'Pranata Keuangan APBN Pelaksanaan Lanjutan pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:06:07', '2022-06-08 06:06:07'),
(89, 8, 'Ahmad Khomaeni, A.Md.', '198111102006041004', 'III', 'Pranata Keuangan APBN Pelaksana Lanjutan/Mahir pada Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:06:35', '2022-06-08 06:06:35'),
(90, 8, 'Rustimah, A.Md., S.M.', '198501012009042022', 'III', 'Analis Pengelolaan Keuangan APBN Ahli Pertama', 'Hotel Vertu', 9, 2022, '2022-06-08 06:07:03', '2022-06-08 06:07:03'),
(91, 8, 'Reza Dwi Ardianto , S.H.,M.H.', '198805242009121003', 'III', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Direktorat Jenderal Badan Peradilan Agama', 'Hotel Vertu', 9, 2022, '2022-06-08 06:07:34', '2022-06-08 06:07:34'),
(92, 8, 'Satrio Dirgantoro, S.SI.', '198901302020121005', 'III', 'Pranata Komputer Ahli Pertama pada Sekretariat Badan Penelitian Dan Pengembangan Dan Pendidikan Dan Pelatihan Hukum Dan Peradilan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:07:57', '2022-06-08 06:07:57'),
(93, 8, 'Mulia Rahman, S.H.', '199011132009041001', 'III', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:08:24', '2022-06-08 06:08:24'),
(94, 8, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:08:52', '2022-06-08 06:08:52'),
(95, 8, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:09:22', '2022-06-08 06:09:22'),
(96, 8, 'Syafar, A.Md.Kom., S.A.P.', '198405052010011019', 'III', 'Analis Pengelolaan Keuangan APBN Ahli Pertama pada Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:09:51', '2022-06-08 06:09:51'),
(97, 8, 'Zona Imania, SE', '199104102019032013', 'III', 'Analis Monitoring, Evaluasi dan Pelaporan pada Biro perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:10:13', '2022-06-08 06:10:13'),
(98, 8, 'Anisa Dwi Yunianti, S.Hum', '199706192020122009', 'III', 'Arsiparis Ahli Pertama pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:10:38', '2022-06-08 06:10:38'),
(99, 8, 'Eka Andi Mardani, S.S.T.Ars', '198710242020121003', 'III', 'Arsiparis Pertama Biro Perlebgkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:11:01', '2022-06-08 06:11:01'),
(100, 8, 'Egla Margaretta Meliala, A.Md.Kb.N.', '198710242020121003', 'II', 'Pranata Keuangan APBN Terampil pada Biro Keuangan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:11:22', '2022-06-08 06:11:22'),
(101, 8, 'Susi Susanti Sinaga, A.Md', '199112192022032006', 'II', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:11:50', '2022-06-08 06:11:50'),
(102, 8, 'Sefti Kurniasih, A.Md.', '199909252022032002', 'II', 'Pengelola Barang Milik Negara pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:12:13', '2022-06-08 06:12:13'),
(103, 8, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:12:27', '2022-06-08 06:12:27'),
(104, 8, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:12:40', '2022-06-08 06:12:40'),
(105, 8, 'Yunita, S.H, M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:12:55', '2022-06-08 06:12:55'),
(106, 8, 'Rina Lastriana, S.H.', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:13:08', '2022-06-08 06:13:08'),
(107, 8, 'Saprudin', '-', '-', 'PPNPN pada Biro Perlengkapan', 'Hotel Vertu', 9, 2022, '2022-06-08 06:13:22', '2022-06-08 06:13:22'),
(108, 9, 'Rosfiana, SH., MH', '196406121987032003', 'IV', 'Kepala Biro Perlengkapan BUA', 'PTA Medan', 9, 2022, '2022-06-08 06:27:14', '2022-06-08 06:27:14'),
(109, 9, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag IKN, Biro Perlengkapan', 'PTA Medan', 9, 2022, '2022-06-08 06:27:44', '2022-06-08 06:27:44'),
(110, 9, 'Antonius Adhi Irianto, SS', '198405072011011007', 'III', 'Kasubbag. TU pada Biro Perlengkapan', 'PTA Medan', 9, 2022, '2022-06-08 06:28:24', '2022-06-08 06:28:24'),
(111, 10, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'Griya Persada Convention Hotel & Resort Kaliurang Yogyakarta', 9, 2022, '2022-06-08 06:31:06', '2022-06-08 06:31:06'),
(112, 11, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Karawang', 9, 2022, '2022-06-08 06:34:28', '2022-06-08 06:34:28'),
(113, 11, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PN Karawang', 9, 2022, '2022-06-08 06:35:10', '2022-06-08 06:35:10'),
(114, 11, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PN Karawang', 9, 2022, '2022-06-08 06:35:45', '2022-06-08 06:35:45'),
(115, 11, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Karawang', 9, 2022, '2022-06-08 06:36:14', '2022-06-08 06:36:14'),
(116, 11, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PA Karawang', 9, 2022, '2022-06-08 06:36:56', '2022-06-08 06:36:56'),
(117, 11, 'Antonius Adhi Irianto, S.S', '198405072011011007', 'III', 'Kepala Sub Bagian Tata Usaha Biro Perlengkapan', 'PA Karawang', 9, 2022, '2022-06-08 06:37:55', '2022-06-08 06:37:55'),
(118, 11, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PA Karawang', 9, 2022, '2022-06-08 06:38:26', '2022-06-08 06:38:26'),
(119, 11, 'Yunita, S.H, M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Karawang', 9, 2022, '2022-06-08 06:38:53', '2022-06-08 06:38:53'),
(120, 11, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 06:40:01', '2022-06-08 06:40:01'),
(121, 11, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 06:40:43', '2022-06-08 06:40:43'),
(122, 11, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 06:41:17', '2022-06-08 06:41:17'),
(123, 11, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 06:41:45', '2022-06-08 06:41:45'),
(124, 12, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:45:10', '2022-06-08 06:45:10'),
(125, 12, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:45:43', '2022-06-08 06:45:43'),
(126, 12, 'Yunita, S.H, M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:46:14', '2022-06-08 06:46:14'),
(127, 12, 'Desy Putriani Purwastuti', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:46:54', '2022-06-08 06:46:54'),
(128, 12, 'Lian Ariyanto, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 06:47:51', '2022-06-08 06:47:51'),
(129, 12, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 06:48:55', '2022-06-08 06:48:55'),
(130, 12, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 06:49:42', '2022-06-08 06:49:42'),
(131, 12, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 06:50:12', '2022-06-08 06:50:12'),
(132, 12, 'Rina Lastriana, S.H.', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bekasi', 9, 2022, '2022-06-08 06:50:34', '2022-06-08 06:50:34'),
(133, 12, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 06:51:27', '2022-06-08 06:51:27'),
(134, 12, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 06:51:56', '2022-06-08 06:51:56'),
(135, 12, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 06:52:30', '2022-06-08 06:52:30'),
(136, 12, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Cikarang', 9, 2022, '2022-06-08 06:52:53', '2022-06-08 06:52:53'),
(137, 13, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 06:57:51', '2022-06-08 06:57:51'),
(138, 13, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 06:59:08', '2022-06-08 06:59:08'),
(139, 13, 'Ratna Yunita, ST', '197802062009042002', 'III', 'Pranata Keuangan APBN Pelaksanaan Lanjutan pada Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 06:59:53', '2022-06-08 06:59:53'),
(140, 13, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 07:00:33', '2022-06-08 07:00:33'),
(141, 13, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:01:12', '2022-06-08 07:01:12'),
(142, 13, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:01:46', '2022-06-08 07:01:46'),
(143, 13, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:02:23', '2022-06-08 07:02:23'),
(144, 13, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:02:53', '2022-06-08 07:02:53'),
(145, 13, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:03:43', '2022-06-08 07:03:43'),
(146, 13, 'A. Adriyanti Akbar, S.H., M.H.', '197802052011012013', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:05:41', '2022-06-08 07:05:41'),
(147, 13, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:06:18', '2022-06-08 07:06:18'),
(148, 13, 'Yunita, S.H, M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:06:49', '2022-06-08 07:06:49'),
(149, 14, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 07:08:54', '2022-06-08 07:08:54'),
(150, 14, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 07:09:28', '2022-06-08 07:09:28'),
(151, 14, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 07:10:12', '2022-06-08 07:10:12'),
(152, 14, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PN Bekasi', 9, 2022, '2022-06-08 07:11:00', '2022-06-08 07:11:00'),
(153, 14, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 07:11:33', '2022-06-08 07:11:33'),
(154, 14, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 07:12:05', '2022-06-08 07:12:05'),
(155, 14, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 07:13:11', '2022-06-08 07:13:11'),
(156, 14, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Cikarang', 9, 2022, '2022-06-08 07:14:56', '2022-06-08 07:14:56'),
(157, 15, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 07:17:28', '2022-06-08 07:17:28'),
(158, 15, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 07:18:31', '2022-06-08 07:18:31'),
(159, 15, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bandung', 9, 2022, '2022-06-08 07:19:05', '2022-06-08 07:19:05'),
(160, 15, 'Budi Hendrasti, SH.,MH', '196708011994032004', 'IV', 'Kasubag,. Pengadaan Barang I pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:21:09', '2022-06-08 07:21:09'),
(161, 15, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:21:53', '2022-06-08 07:21:53'),
(162, 15, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:22:21', '2022-06-08 07:22:21'),
(163, 15, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:22:53', '2022-06-08 07:22:53'),
(164, 16, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:25:16', '2022-06-08 07:25:16'),
(165, 16, 'Adi Mardiansyah, S.Kom., M.M.', '198803252011011012', 'III', 'Kepala Sub Bagian Bimbingan dan Monitoring Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:26:16', '2022-06-08 07:26:16'),
(166, 16, 'Devi Amalia, S.H.', '198406072008052001', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:27:23', '2022-06-08 07:27:23'),
(167, 16, 'Yunita, S.H, M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Bogor', 9, 2022, '2022-06-08 07:28:16', '2022-06-08 07:28:16'),
(168, 16, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 07:28:58', '2022-06-08 07:28:58'),
(169, 16, 'Arif Hidayat, S.E., M.H.', '197505072009121003', 'III', 'Kasubag Analisa Kebutuhan PB II', 'PA Bogor', 9, 2022, '2022-06-08 07:30:07', '2022-06-08 07:30:07'),
(170, 16, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 07:30:40', '2022-06-08 07:30:40'),
(171, 16, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bogor', 9, 2022, '2022-06-08 07:31:03', '2022-06-08 07:31:03'),
(172, 16, 'Fairuz Lazwardi, S.Kom', '198201182009041001', 'III', 'Kasubag Analisa Kebutuhan PB I', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:32:08', '2022-06-08 07:32:08'),
(173, 16, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:32:42', '2022-06-08 07:32:42'),
(174, 16, 'Ratna Yunita, ST', '197802062009042002', 'III', 'Pranata Keuangan APBN Pelaksanaan Lanjutan pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:33:15', '2022-06-08 07:33:15'),
(175, 16, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PN Kab.bogor Di Cibinong, Jawa Barat', 9, 2022, '2022-06-08 07:33:36', '2022-06-08 07:33:36'),
(176, 16, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PA Cibinong', 9, 2022, '2022-06-08 07:34:14', '2022-06-08 07:34:14'),
(177, 16, 'Ulfah Apriani, S.E., M.Ak.', '198603222011012013', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Cibinong', 9, 2022, '2022-06-08 07:35:23', '2022-06-08 07:35:23'),
(178, 16, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Cibinong', 9, 2022, '2022-06-08 07:35:57', '2022-06-08 07:35:57'),
(179, 16, 'Eka Andi Mardani, S.S.T.Ars', '-', '-', 'Arsiparis Pertama Biro Perlengkapan', 'PA Cibinong', 9, 2022, '2022-06-08 07:36:41', '2022-06-08 07:36:41'),
(180, 16, 'Wahyu Dhimas Suparmasto, S.H., M.H.', '198210062008051001', 'III', 'Kasubag Standarisasi dan Penilaian BUA', 'BALITBANG Diklat', 9, 2022, '2022-06-08 07:37:53', '2022-06-08 07:37:53'),
(181, 16, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'BALITBANG Diklat', 9, 2022, '2022-06-08 07:38:27', '2022-06-08 07:38:27'),
(182, 16, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'BALITBANG Diklat', 9, 2022, '2022-06-08 07:39:13', '2022-06-08 07:39:13'),
(183, 16, 'Desy Putriani Purwastuti', '-', '-', 'PPNPN pada Biro Perlengkapan', 'BALITBANG Diklat', 9, 2022, '2022-06-08 07:39:54', '2022-06-08 07:39:54'),
(184, 17, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:41:43', '2022-06-08 07:41:43'),
(185, 17, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:42:26', '2022-06-08 07:42:26'),
(186, 17, 'Dian Anggraini, S.Kom.', '197805102006042003', 'III', 'Penyusun Kebutuhan Barang Inventaris pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:43:16', '2022-06-08 07:43:16'),
(187, 17, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:44:05', '2022-06-08 07:44:05'),
(188, 17, 'A. Adriyanti Akbar, S.H., M.H.', '1978002052011012013', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:45:21', '2022-06-08 07:45:21'),
(189, 17, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PT Bandung', 9, 2022, '2022-06-08 07:45:40', '2022-06-08 07:45:40'),
(190, 17, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:46:15', '2022-06-08 07:46:15'),
(191, 17, 'Arif Setiadi, SH.', '198008072008051001', 'III', 'Kepala Sub Bagian Statistik Dan Laporan Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:46:55', '2022-06-08 07:46:55'),
(192, 17, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:47:27', '2022-06-08 07:47:27'),
(193, 17, 'Drajat Prakosa, S.H.', '198703082015031002', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:48:12', '2022-06-08 07:48:12'),
(194, 17, 'Yunita, S.H, M.Kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:48:30', '2022-06-08 07:48:30'),
(195, 17, 'Redi Melfisko', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:48:54', '2022-06-08 07:48:54'),
(196, 18, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008051001', 'III', 'Kepala Sub Bagian Pembukuan Dan Neraca Biro Perlengkapan', 'PT Surabaya', 9, 2022, '2022-06-08 07:50:48', '2022-06-08 07:50:48'),
(197, 19, 'Muhammad Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kepala Sub Bagian Pendataan Biro Perlengkapan', 'MS Aceh', 9, 2022, '2022-06-08 07:52:02', '2022-06-08 07:52:02'),
(198, 20, 'Kukuh Binanto, S.T', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PT Ujung Pandang', 9, 2022, '2022-06-08 07:53:40', '2022-06-08 08:01:34'),
(199, 21, 'Drs. Arif Hidayat, SH. MM.', '196809041993031004', 'IV', 'Sekretaris Dirjen Badilag', 'PTA Bandung', 9, 2022, '2022-06-08 07:55:44', '2022-06-08 07:55:44'),
(200, 21, 'Rosfiana, SH., MH.', '196406121987032003', 'IV', 'Kepala Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:56:17', '2022-06-08 07:56:17'),
(201, 21, 'H. Sahwan, SH. MH.', '196808171989031007', 'IV', 'Kepala Biro Keuangan BUA', 'PTA Bandung', 9, 2022, '2022-06-08 07:56:59', '2022-06-08 07:56:59'),
(202, 21, 'Yudi Cahyadi, ST.', '197707162006041006', 'IV', 'Kepala Bagian Inventarisasi Kekayaan Negara Biro Perlengkapan', 'PTA Bandung', 9, 2022, '2022-06-08 07:57:25', '2022-06-08 07:57:25'),
(203, 21, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analis Aset Negara pada Biro Perlengkapan', 'PA Cimahi', 9, 2022, '2022-06-08 07:57:53', '2022-06-08 07:57:53'),
(204, 21, 'Imam Santoso', '-', '-', 'PPNPN pada Badilag', 'PA Bandung', 9, 2022, '2022-06-08 07:58:26', '2022-06-08 07:58:26'),
(205, 21, 'Saprudin', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:58:47', '2022-06-08 07:58:47'),
(206, 21, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PA Bandung', 9, 2022, '2022-06-08 07:59:07', '2022-06-08 07:59:07'),
(215, 32, 'kukuh binanto', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama', 'PN Palangkaraya', 6, 2022, '2022-06-29 08:48:50', '2022-06-29 08:48:50'),
(216, 32, 'Silvani', '-', '-', 'Pengelola Jaringan', 'PT Banjarmasin', 6, 2022, '2022-06-29 08:49:42', '2022-06-29 08:49:42'),
(217, 32, 'Rina', '-', '-', 'PPNPN', 'PN Banjarmasin', 6, 2022, '2022-06-29 08:50:03', '2022-06-29 08:50:03'),
(218, 33, 'Kukuh Binanto', '-', '-', 'Pranata Komputer Ahli Pertama', 'PT Jakarta', 6, 2022, '2022-06-29 09:01:48', '2022-06-29 09:01:48'),
(219, 34, 'M. Sam Umar Wiraharja S.kom', '198303242011011005', 'III', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'MS Aceh', 6, 2022, '2022-07-01 03:58:29', '2022-07-01 03:58:29'),
(220, 34, 'Dian Anggraini, S.Kom', '197805102006042003', 'III', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'MS Aceh', 6, 2022, '2022-07-01 03:59:40', '2022-07-01 03:59:40'),
(221, 34, 'Sefti Kurniasih, Amd', '199909252022032002', 'III', 'Pengelola Barang Milik Negara', 'MS Aceh', 6, 2022, '2022-07-01 04:00:51', '2022-07-01 04:00:51'),
(222, 34, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kepala Bagian Inventaris Kekayaan Negara', 'PT Pontianak', 6, 2022, '2022-07-01 04:06:33', '2022-07-01 04:06:33'),
(223, 34, 'Budi Wantoro, S.H., M.H.', '197005271991031003', 'III', 'Kabag. Penghapusan pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:08:01', '2022-07-01 04:08:01'),
(224, 34, 'Kukuh Binanto , ST', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama', 'PT Pontianak', 6, 2022, '2022-07-01 04:09:42', '2022-07-01 04:09:42'),
(225, 34, 'Hendro Prio Sasongko, S.H.', '-', '-', 'PPNPN pada Biro perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:10:20', '2022-07-01 04:10:20'),
(226, 35, 'Fidyanto Sandi Saputro, S.Kom.MBA', '198610192008052001', 'III', 'Kasubbag. Pembukuan & Neraca pada Biro Perlengkapan', 'PN Mojokerto', 6, 2022, '2022-07-01 04:16:35', '2022-07-01 04:16:35'),
(227, 35, 'Kukuh Binanto , ST', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama', 'PN Mojokerto', 6, 2022, '2022-07-01 04:17:04', '2022-07-01 04:17:04'),
(228, 35, 'Susi Susanti Sinaga', '199112192022032006', 'II', 'Pengelola Barang milik Negara', 'PN Mojokerto', 6, 2022, '2022-07-01 04:17:39', '2022-07-01 04:17:39'),
(229, 36, 'Arif Setiadi, S.H', '198008072008051001', 'III', 'Kasubbag. Statistik & Pelaporan pada Biro Perlengkapan', 'PT Ujung Pandang', 6, 2022, '2022-07-01 04:21:09', '2022-07-01 04:21:09'),
(230, 36, 'Endang Setyo Hartanti, SE', '197802032011012007', 'III', 'Analisis Aset Negara pada Biro', 'PT Ujung Pandang', 6, 2022, '2022-07-01 04:22:50', '2022-07-01 04:22:50'),
(231, 36, 'Yunita, S.H., M.kn', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PT Ujung Pandang', 6, 2022, '2022-07-01 04:25:24', '2022-07-01 04:25:24'),
(232, 36, 'Ratna Yunita, ST.', '197802062009042002', 'III', 'Pranata Keuangan APBN Pelaksanaan Lanjutan pada Biro Perlengkapan', 'PT Ujung Pandang', 6, 2022, '2022-07-01 04:27:42', '2022-07-01 04:27:42'),
(233, 37, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag. Invetaris Kekayaan Negara pada Biro Perlengkapan', 'PT Surabaya', 6, 2022, '2022-07-01 04:29:44', '2022-07-01 04:29:44'),
(234, 38, 'M. Sam Umar Wiraharja, S.Kom', '198303242011011005', 'III', 'Kasubbag. Pendataan pada Biro Perlengkapan', 'PTA Kupang', 6, 2022, '2022-07-01 04:32:26', '2022-07-01 04:32:26'),
(235, 38, 'Sefti Kurniasih, A.md', '199909252022032002', 'II', 'Pengelola Barang Milik Negara', 'PTA Kupang', 6, 2022, '2022-07-01 04:33:25', '2022-07-01 04:33:25'),
(236, 38, 'Hendro Prio Sasongko, SH', '-', '-', 'PPNPN pada Biro Perelengkapan', 'PTA Kupang', 6, 2022, '2022-07-01 04:34:22', '2022-07-01 04:34:22'),
(237, 39, 'M. Sam Wiraharja, S.Kom.', '198303242011011005', 'III', 'Kasubbag. Pendataan pada Biro Perlngkapan', 'MS Aceh', 6, 2022, '2022-07-01 04:43:44', '2022-07-01 04:43:44'),
(238, 39, 'Dian Anggraini, S.kom', '197805102006042003', 'III', 'Penyusun Kebutuhan Inventaris BMN pada Biro Perlengkapan', 'MS Aceh', 6, 2022, '2022-07-01 04:45:47', '2022-07-01 04:45:47'),
(239, 39, 'Sefti Kurniasih, A.md', '199909252022032002', 'II', 'Pengelola Barang Milik Negara', 'MS Aceh', 6, 2022, '2022-07-01 04:47:04', '2022-07-01 04:47:04'),
(240, 39, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag. Inventaris Kekayaan Negara pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:48:22', '2022-07-01 04:48:22'),
(241, 39, 'Budi Wantoro, S.H., M.H.', '197005271991031003', 'IV', 'Kabag. Penghapusan pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:49:40', '2022-07-01 04:49:40'),
(242, 39, 'Kukuh Binanto , ST', '199401242019031003', 'III', 'Pranata Komputer Ahli Pertama pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:50:23', '2022-07-01 04:50:23'),
(243, 39, 'Hendro Pro Sasongko, S.H.', '-', '-', 'PPNPN pada Biro Perlengkapan', 'PT Pontianak', 6, 2022, '2022-07-01 04:51:05', '2022-07-01 04:51:05'),
(244, 40, 'Rosfiana, S.H., M.H', '197202042002121004', 'IV', 'Kepala Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '2022-07-01 06:16:23', '2022-07-01 06:16:23'),
(245, 40, 'Yudi Cahyadi, ST', '197707162006041006', 'IV', 'Kabag. Inventaris Kekayaan Negara Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '2022-07-01 06:18:47', '2022-07-01 06:18:47'),
(246, 40, 'Marwendi Putra, S.T., M.M.', '197603142006041002', 'IV', 'Kepala Bagian Tata Laksana Pengadaan Barang I Biro Perlengkapan', 'Holiday Inn Gajahmada', 6, 2022, '2022-07-01 06:27:07', '2022-07-01 06:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `t_rekapperjanjiansewa`
--

CREATE TABLE `t_rekapperjanjiansewa` (
  `id` int(11) NOT NULL,
  `satuan_kerja` varchar(255) NOT NULL,
  `nomor_surat_rekomendasi_kpknl` varchar(255) NOT NULL,
  `tanggal_surat_rekomendasi_kpknl` date NOT NULL,
  `nomor_sk_sekma` varchar(255) NOT NULL,
  `tanggal_sk_sekma` date NOT NULL,
  `kode_billing_bukti_setor` varchar(255) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `nomor_perjanjian_sewa` varchar(255) NOT NULL,
  `tanggal_perjanjian_sewa` date NOT NULL,
  `jenis_barang_milik_negara` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `penyewa` varchar(255) NOT NULL,
  `tanggal_mulai_sewa` date NOT NULL,
  `tanggal_berakhir_sewa` date NOT NULL,
  `nilai_sewa` bigint(20) NOT NULL,
  `jangka_waktu_sewa` varchar(255) NOT NULL,
  `peruntukan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_kerja` int(11) DEFAULT NULL COMMENT 'ref_unitbagian(id)',
  `jabatan` int(11) DEFAULT NULL COMMENT 'ref_confirmjabatan(id)',
  `jabatanlengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi_atasanlangsung` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'users(id)',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `status` int(11) NOT NULL DEFAULT 0,
  `status_ii` int(11) NOT NULL DEFAULT 0,
  `locked` int(1) NOT NULL DEFAULT 0,
  `last_seen` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `unit_kerja`, `jabatan`, `jabatanlengkap`, `referensi_atasanlangsung`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `status`, `status_ii`, `locked`, `last_seen`, `created_at`, `updated_at`) VALUES
(1, 'budak corporate', '1234567890', 8, 5, 'Super User', NULL, 'budakcorporate.404notfound@gmail.com', '2022-03-31 04:47:57', '$2y$10$rHQBA4xQogPM0zyBIEmriOBVbxCuQKGbvg17b7D6O0rES7K00K9yy', 'QAxhVcEK7ZjzaeCnXfSm2LvoXI6E8hSm89VOUDyzSpAYTo7OWfG0WmJQpUKH', 'Screenshot (2).png', 0, 0, 1, '2022-06-05 04:47:53', '2022-03-31 04:44:49', '2022-06-05 05:31:58'),
(6, 'kukuh binanto', '199401242019031003', 3, 5, 'bendahara bagian ikn', '1', 'kukuhbinanto@gmail.com', '2022-05-23 02:25:20', '$2y$10$s91E5KqebmzQeCjJn4aHTetuSn/RkkkauSwZidkk79phqnUXh3ANS', 'Cb7nOmqdYd1MqhPKtRbHCcglZqnCeE4q8tkLGlI9krIi2J6FuJXBR7g2uSSw', 'pink.JPG', 0, 0, 1, '2022-07-16 15:34:06', '2022-05-23 02:24:34', '2022-07-16 15:34:06'),
(7, 'Sefti Kurniasih', '199909252022032002', 3, 4, 'Staff / Pelaksana / Fungsional', '6', 'sftikurniasih@gmail.com', '2022-06-06 09:17:12', '$2y$10$DEhuCQKKzqt60rq3.Br.duxFa1gW8W494zCC2P90UV2wx.hs9kdpO', NULL, 'user.png', 0, 0, 1, '2022-06-06 09:19:03', '2022-06-06 09:13:04', '2022-06-06 09:19:03'),
(8, 'Hendro prio sasongko', NULL, 3, 4, 'Staff / Pelaksana / Fungsional', '6', 'prio.sasongko99@gmail.com', '2022-06-06 09:27:32', '$2y$10$fzymW25RNcyu2z5XBKYIUOIxZDONSjtwtq/bMDDjMnk3Z1fRbmcnW', NULL, 'user.png', 0, 0, 0, '2022-06-06 09:56:17', '2022-06-06 09:24:55', '2022-06-06 09:56:17'),
(9, 'susi susanti sinaga', '199112192022032006', 3, 4, 'Staff / Pelaksana / Fungsional', '6', 'susisusantisinaga@gmail.com', '2022-06-06 09:32:21', '$2y$10$mSsn3ucagCdAFSq11zlofuZazh078eKmn6FkDnNtS8x.6EbPaGYkS', NULL, 'user.png', 0, 0, 0, '2022-06-08 08:47:53', '2022-06-06 09:31:07', '2022-06-08 08:47:53'),
(10, 'endah sri mulyani gradini', '1234556789808', 3, 4, 'false', '6', 'endahsmgradini@gmail.com', NULL, '$2y$10$D61O6ulrX0EmeuSD1vYTPO8C9PWFDI8rtlhYrz8W5/KUREm6KUbTi', NULL, 'user.png', 0, 0, 0, NULL, '2022-06-26 03:39:03', '2022-06-26 03:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `viewer` int(11) NOT NULL,
  `visit_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `click`, `viewer`, `visit_date`, `created_at`, `updated_at`) VALUES
(1, 2, 100, '2022-06-27', '2022-06-27 03:53:00', '2022-06-27 03:53:00'),
(2, 10, 10, '2022-06-27', '2022-06-27 03:53:00', '2022-06-27 03:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_tmp`
--
ALTER TABLE `api_tmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_pelaksana`
--
ALTER TABLE `nama_pelaksana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ref_confirmjabatan`
--
ALTER TABLE `ref_confirmjabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_dasar`
--
ALTER TABLE `ref_dasar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_jabatan`
--
ALTER TABLE `ref_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_jabatanlengkap`
--
ALTER TABLE `ref_jabatanlengkap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_keuangan_uraian_kegiatan`
--
ALTER TABLE `ref_keuangan_uraian_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_keuangan_uraian_kegiatan_bck`
--
ALTER TABLE `ref_keuangan_uraian_kegiatan_bck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_keuangan_uraian_kegiatan_bck_25062022`
--
ALTER TABLE `ref_keuangan_uraian_kegiatan_bck_25062022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_keuangan_uraian_kegiatan_bck_27062022`
--
ALTER TABLE `ref_keuangan_uraian_kegiatan_bck_27062022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_kodemak`
--
ALTER TABLE `ref_kodemak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_menimbang`
--
ALTER TABLE `ref_menimbang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_nominatif_penginapan`
--
ALTER TABLE `ref_nominatif_penginapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_pelaksana`
--
ALTER TABLE `ref_pelaksana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_satuankerja`
--
ALTER TABLE `ref_satuankerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_tahun_anggaran`
--
ALTER TABLE `ref_tahun_anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_tertanda`
--
ALTER TABLE `ref_tertanda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_unitbagian`
--
ALTER TABLE `ref_unitbagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_unitbagian_4_surat_masuk`
--
ALTER TABLE `ref_unitbagian_4_surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_untuk`
--
ALTER TABLE `ref_untuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_surat_masuks`
--
ALTER TABLE `tabel_surat_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_cobas`
--
ALTER TABLE `t_cobas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_mainsurat`
--
ALTER TABLE `t_mainsurat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pembuat_laporan`
--
ALTER TABLE `t_pembuat_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pengirim_laporan`
--
ALTER TABLE `t_pengirim_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pengurang_nilai_awal`
--
ALTER TABLE `t_pengurang_nilai_awal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_realisasi_pagu_rkkl`
--
ALTER TABLE `t_realisasi_pagu_rkkl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_realisasi_rkkl`
--
ALTER TABLE `t_realisasi_rkkl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_realisasi_tempatpelaksanaan`
--
ALTER TABLE `t_realisasi_tempatpelaksanaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_realisasi_tempatpelaksanaan_bck_01072022`
--
ALTER TABLE `t_realisasi_tempatpelaksanaan_bck_01072022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_rekapperjanjiansewa`
--
ALTER TABLE `t_rekapperjanjiansewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `api_tmp`
--
ALTER TABLE `api_tmp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_confirmjabatan`
--
ALTER TABLE `ref_confirmjabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ref_dasar`
--
ALTER TABLE `ref_dasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ref_jabatan`
--
ALTER TABLE `ref_jabatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4130;

--
-- AUTO_INCREMENT for table `ref_jabatanlengkap`
--
ALTER TABLE `ref_jabatanlengkap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48367;

--
-- AUTO_INCREMENT for table `ref_keuangan_uraian_kegiatan`
--
ALTER TABLE `ref_keuangan_uraian_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ref_keuangan_uraian_kegiatan_bck`
--
ALTER TABLE `ref_keuangan_uraian_kegiatan_bck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ref_keuangan_uraian_kegiatan_bck_25062022`
--
ALTER TABLE `ref_keuangan_uraian_kegiatan_bck_25062022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ref_keuangan_uraian_kegiatan_bck_27062022`
--
ALTER TABLE `ref_keuangan_uraian_kegiatan_bck_27062022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ref_kodemak`
--
ALTER TABLE `ref_kodemak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_menimbang`
--
ALTER TABLE `ref_menimbang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ref_nominatif_penginapan`
--
ALTER TABLE `ref_nominatif_penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_pelaksana`
--
ALTER TABLE `ref_pelaksana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `ref_satuankerja`
--
ALTER TABLE `ref_satuankerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=919;

--
-- AUTO_INCREMENT for table `ref_tahun_anggaran`
--
ALTER TABLE `ref_tahun_anggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2025;

--
-- AUTO_INCREMENT for table `ref_tertanda`
--
ALTER TABLE `ref_tertanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_unitbagian`
--
ALTER TABLE `ref_unitbagian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `ref_unitbagian_4_surat_masuk`
--
ALTER TABLE `ref_unitbagian_4_surat_masuk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ref_untuk`
--
ALTER TABLE `ref_untuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_surat_masuks`
--
ALTER TABLE `tabel_surat_masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_cobas`
--
ALTER TABLE `t_cobas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_mainsurat`
--
ALTER TABLE `t_mainsurat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pembuat_laporan`
--
ALTER TABLE `t_pembuat_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_pengirim_laporan`
--
ALTER TABLE `t_pengirim_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_realisasi_pagu_rkkl`
--
ALTER TABLE `t_realisasi_pagu_rkkl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `t_realisasi_rkkl`
--
ALTER TABLE `t_realisasi_rkkl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `t_realisasi_tempatpelaksanaan`
--
ALTER TABLE `t_realisasi_tempatpelaksanaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `t_realisasi_tempatpelaksanaan_bck_01072022`
--
ALTER TABLE `t_realisasi_tempatpelaksanaan_bck_01072022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `t_rekapperjanjiansewa`
--
ALTER TABLE `t_rekapperjanjiansewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
