-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: database_mailoo
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (9,'badahahuhi','2023-02-01','2023-02-02','2022-05-23 03:10:27','2022-05-23 03:10:27'),(34,'hari libur','2022-05-26','2022-05-27','2022-05-23 09:21:46','2022-05-23 09:21:51'),(37,'pipk','2022-05-30','2022-05-31','2022-05-23 09:59:28','2022-05-23 09:59:28'),(38,'pipk','2022-06-06','2022-06-07','2022-05-23 09:59:56','2022-05-23 09:59:56'),(39,'pipk','2022-04-13','2022-04-14','2022-05-23 10:00:18','2022-05-23 10:00:21'),(40,'kocak','2022-04-14','2022-04-15','2022-05-23 10:00:29','2022-05-23 10:00:29'),(41,'tidak','2022-05-18','2022-05-19','2022-05-23 10:00:38','2022-05-23 10:00:38'),(42,'pipk','2022-05-31','2022-06-04','2022-05-23 10:01:06','2022-05-23 10:01:27'),(43,'bukan kegiatan pipk','2022-05-31','2022-06-01','2022-05-23 10:01:41','2022-05-23 10:01:41'),(44,'inven','2022-05-31','2022-06-01','2022-05-23 10:02:00','2022-05-23 10:02:00');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_10_01_062856_create_table-unitbagians_table',2),(6,'2021_10_02_073420_create_categories_table',2),(7,'2021_10_02_073953_create_courses_table',3),(8,'2021_10_02_075110_create_country_state_city_tables',4),(9,'2021_10_07_080957_create_ref_unitbagian_4_surat_masuks_table',5),(10,'2021_10_07_132954_create_tabel_surat_masuks_table',6),(11,'2021_11_06_072822_create_t_mainsurats_table',6),(12,'2021_11_21_080820_update_t_mainsurat',7),(13,'2022_01_30_164959_create_t_cobas_table',8),(14,'2022_05_23_094502_create_events_table',8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nama_pelaksana`
--

DROP TABLE IF EXISTS `nama_pelaksana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nama_pelaksana` (
  `id` int(11) NOT NULL,
  `rkkl_id` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `nama_pelaksana` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nama_pelaksana`
--

LOCK TABLES `nama_pelaksana` WRITE;
/*!40000 ALTER TABLE `nama_pelaksana` DISABLE KEYS */;
/*!40000 ALTER TABLE `nama_pelaksana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('kukuhbinanto@gmail.com','$2y$10$wSBOLqSGnFGcso5ILhbaQOujFvUa2AXdmW0JHB/Dp9bMu1Y84c42q','2022-03-28 17:39:41');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_confirmjabatan`
--

DROP TABLE IF EXISTS `ref_confirmjabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_confirmjabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_confirmjabatan`
--

LOCK TABLES `ref_confirmjabatan` WRITE;
/*!40000 ALTER TABLE `ref_confirmjabatan` DISABLE KEYS */;
INSERT INTO `ref_confirmjabatan` VALUES (1,'Kepala Biro Perlengkapan'),(2,'Kepala Bagian'),(3,'Kepala Sub Bagian'),(4,'Staff / Pelaksana / Fungsional'),(5,'Super User'),(6,'bendahara bagian');
/*!40000 ALTER TABLE `ref_confirmjabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_jabatan`
--

DROP TABLE IF EXISTS `ref_jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitbagian_id` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `level_jabatan` int(1) NOT NULL COMMENT 'ref_confirmjabatan(id)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_jabatan`
--

LOCK TABLES `ref_jabatan` WRITE;
/*!40000 ALTER TABLE `ref_jabatan` DISABLE KEYS */;
INSERT INTO `ref_jabatan` VALUES (1,'Kepala Biro Perlengkapan',1,1),(2,'Kepala Bagian',2,2),(3,'Kepala Sub Bagian',2,3),(4,'Staff / Pelaksana / Fungsional',2,4),(5,'Kepala Bagian',3,2),(6,'Kepala Sub Bagian',3,3),(7,'Staff / Pelaksana / Fungsional',3,4),(8,'Kepala Bagian',4,2),(9,'Kepala Sub Bagian',4,3),(10,'Staff / Pelaksana / Fungsional',4,4),(11,'Kepala Bagian',5,2),(12,'Kepala Sub Bagian',5,3),(13,'Staff / Pelaksana / Fungsiona',5,4),(14,'Kepala Bagian',6,2),(15,'Kepala Sub Bagian',6,3),(16,'Staff / Pelaksana / Fungsional',6,4),(17,'Kepala Bagian',7,2),(18,'Kepala Sub Bagian',7,3),(19,'Staff / Pelaksana / Fungsional',7,4),(20,'Super User',8,5),(21,'Bendahara Bagian',3,6),(22,'Bendahara Bagian',4,6),(23,'Bendahara Bagian',5,6),(24,'Bendahara Bagian',6,6),(25,'Bendahara Bagian',7,6);
/*!40000 ALTER TABLE `ref_jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_jabatanlengkap`
--

DROP TABLE IF EXISTS `ref_jabatanlengkap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_jabatanlengkap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` int(11) NOT NULL COMMENT 'ref_jabatan(id)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48367 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_jabatanlengkap`
--

LOCK TABLES `ref_jabatanlengkap` WRITE;
/*!40000 ALTER TABLE `ref_jabatanlengkap` DISABLE KEYS */;
INSERT INTO `ref_jabatanlengkap` VALUES (1,'Kepala Biro Perlengkapan',1),(2,'Kepala Bagian T U (Persuratan)',2),(3,'Kepala Sub Bagian TU (Persuratan)',3),(4,'Staff / Pelaksana / Fungsional',4),(5,'Kepala Bagian IKN',5),(6,'Kepala Sub. Bagian Pendataan',6),(7,'Kepala Sub. Bagian Pembukuan dan Neraca',6),(8,'Kepala Sub. Bagian Statistik dan Pelaporan',6),(9,'Staff / Pelaksana / Fungsional',7),(10,'Kepala Bagian Bimon',8),(11,'Kepala Sub. Bagian Bimbingan Dan Monitoring A',9),(12,'Kepala Sub. Bagian Bimbingan Dan Monitoring B',9),(13,'Kepala Sub. Bagian Bimbingan Dan Monitoring C',9),(14,'Staff / Pelaksana / Fungsional',10),(15,'Kepala Bagian Penghapusan',11),(16,'Kepala Sub. Bagian Standarisasi Dan Penilaian',12),(17,'Kepala Sub. Bagian Stakap',12),(18,'Staff / Pelaksana / Fungsional',13),(19,'Kepala Bagian PB I',14),(20,'Kepala Sub. Bagian Analisa Evaluasi Pengadaan Barang I',15),(21,'Kepala Sub. Bagian Analisa Kebutuhan Barang I',15),(22,'Kepala Sub. Bagian Analisa Standarisasi Pengadaan Barang I',15),(23,'Staff / Pelaksana / Fungsional',16),(24,'Kepala Bagian PB II',17),(25,'Kepala Sub. Bagian Analisa Evaluasi Pengadaan Barang II',18),(26,'Kepala Sub. Bagian Analisa Kebutuhan Barang II',18),(27,'Kepala Sub. Bagian Analisa Standarisasi Pengadaan Barang II',18),(28,'Staff / Pelaksana / Fungsional',19),(29,'Super User',20),(30,'bendahara bagian ikn',21),(31,'bendahara bagian bimon',22),(32,'bendahara bagian penghapusan',23),(33,'bendahara bagian pb 1',24),(34,'bendahara bagian pb 2',25);
/*!40000 ALTER TABLE `ref_jabatanlengkap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_keuangan_uraian_kegiatan`
--

DROP TABLE IF EXISTS `ref_keuangan_uraian_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_keuangan_uraian_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `kode_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_sub_menu_uraian_kegiatan` varchar(255) NOT NULL,
  `kelompok_pagu` varchar(255) NOT NULL,
  `pagu_anggaran` varchar(255) NOT NULL,
  `user_penginput_data` int(11) DEFAULT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_keuangan_uraian_kegiatan`
--

LOCK TABLES `ref_keuangan_uraian_kegiatan` WRITE;
/*!40000 ALTER TABLE `ref_keuangan_uraian_kegiatan` DISABLE KEYS */;
INSERT INTO `ref_keuangan_uraian_kegiatan` VALUES (10,3,'1068.EBA.95.053.B','Pembukuan BMN','Akurasi Data Pembukuan Neraca BMN','Pengadaan pencetakan Laporan Semester 1 tk KL','5.000.000',6,2022,'2022-02-24 21:22:59','2022-05-24 10:18:16'),(11,3,'1068.EBA.95.053.B','Pembukuan BMN','Akurasi Data Pembukuan Neraca BMN','Buku Profile Aset','5.500.000',6,2022,'2022-02-24 21:23:51','2022-05-24 10:19:10'),(12,3,'068.EBA.95.053.B','Pembukuan BMN','Melakukan Verifikasi, Evaluasi, Sertifikasi','Transportasi','1.000.000',6,2022,'2022-02-24 21:25:42','2022-05-28 06:58:11'),(14,3,'068.EBA.95.053.B','Pembukuan BMN','Melakukan Verifikasi, Evaluasi, Sertifikasi','Representatif','1.000.000',6,2022,'2022-02-24 21:29:56','2022-05-28 06:58:21'),(16,3,'068.EBA.95.053.C','Penatausahaan BMN','Evaluasi Penyusunan Laporan BMN Tingkat Wilayah','Tiket Pesawat','1.000.000',0,0,'2022-02-24 21:34:15','2022-02-24 21:34:15'),(17,3,'068.EBA.95.053.C','Penatausahaan BMN','Evaluasi Penyusunan Laporan BMN Tingkat Wilayah','Biaya Rill','1.000.000',0,0,'2022-02-24 21:35:22','2022-02-24 21:35:22'),(18,3,'068.EBA.95.053.C','Penatausahaan BMN','Evaluasi Penyusunan Laporan BMN Tingkat Wilayah','Penginapan','1.000.000',0,0,'2022-02-24 21:36:30','2022-02-24 21:36:30'),(19,3,'068.EBA.95.053.C','Penatausahaan BMN','Evaluasi Penyusunan Laporan BMN Tingkat Wilayah','Uang Harian','1.000.000',0,0,'2022-02-24 21:38:49','2022-02-24 21:38:49'),(21,3,'068.EBA.95.053.C','Penatausahaan BMN','Tindak Lanjut Temuan BPK','Biaya Rill','1.000.000',0,0,'2022-02-24 21:42:35','2022-02-24 21:42:35'),(25,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Uang Harian  [12 org x 1 keg x 4 hr]','1.000.000',0,0,'2022-02-24 21:49:46','2022-02-24 21:49:46'),(26,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Penginapan [20 org x 1 keg x 4 hr]','1.000.000',0,0,'2022-02-24 21:50:52','2022-02-24 21:50:52'),(27,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Uang Harian [20 org x 1 keg x 5 hr]','1.000.000',0,0,NULL,NULL),(28,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Penginapan [15 org x 1 keg x 4 hr]','1.000.000',0,0,NULL,NULL),(29,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Uang Harian [15 org x 1 keg x 5 hr]','1.000.000',0,0,NULL,NULL),(30,3,'068.EBA.95.053.C','Penatausahaan BMN','Melaksanakan Verifikasi dan Validasi BMN','Penginapan','1.000.000',0,0,'2022-02-24 22:43:04','2022-02-24 22:43:04'),(31,3,'068.EBA.95.053.C','Penatausahaan BMN','Melaksanakan Verifikasi dan Validasi BMN','Uang Harian','1.000.000',0,0,'2022-02-24 22:44:11','2022-02-24 22:44:11'),(32,3,'068.EBA.95.053.D','Penilaian PIPK','Pelaporan dan evaluasi','Belanja bahan kegiatan','1.000.000',0,0,'2022-02-24 22:45:42','2022-02-24 22:45:42'),(33,3,'068.EBA.95.053.D','Penilaian PIPK','Narasumber','Narasumber [2org x 9 keg]','1.000.000',0,0,'2022-02-24 22:46:24','2022-02-24 22:46:24'),(34,3,'068.EBA.95.053.D','Penilaian PIPK','Penilaian Pengendalian Intern atas Pelaporan','Tiket pesawat','1.000.000',0,0,'2022-02-24 22:47:10','2022-02-24 22:47:10'),(35,3,'068.EBA.95.053.D','Penilaian PIPK','Penilaian Pengendalian Intern atas Pelaporan','Biaya Rill','1.000.000',0,0,'2022-02-24 22:47:55','2022-02-24 22:47:55'),(36,3,'068.EBA.95.053.D','Penilaian PIPK','Penilaian Pengendalian Intern atas Pelaporan','Penginapan','1.000.000',0,0,'2022-02-24 22:48:36','2022-02-24 22:48:36'),(37,3,'1068.EBA.95.053.D','Penilaian PIPK','Penilaian Pengendalian Intern atas Pelaporan','Uang Harian','1.000.000',0,0,'2022-02-24 22:50:07','2022-02-24 22:50:07'),(38,3,'068.EBA.95.053.D','Penilaian PIPK','Penyusunan Laporan Hasil Penilaian PIPK','Paket Fullday','1.000.000',0,0,'2022-02-24 22:51:10','2022-02-24 22:51:10'),(39,3,'068.EBA.95.053.D','Penilaian PIPK','Penyusunan Laporan Hasil Penilaian PIPK','Uang saku kegiatan','1.000.000',0,0,'2022-02-24 22:52:05','2022-02-24 22:52:05'),(40,3,'068.EBA.95.053.D','Penilaian PIPK','Penyusunan Laporan Hasil Penilaian PIPK','Transport kegiatan','1.000.000',0,0,'2022-02-24 22:53:10','2022-02-24 22:53:10'),(41,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Rekonsiliasi Data','Belanja bahan kegiatan','1.000.000',0,0,'2022-02-24 22:54:43','2022-02-24 22:54:43'),(42,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Narasumber','Narasumber [2org x 6keg]','1.000.000',0,0,'2022-02-24 22:55:29','2022-02-24 22:55:29'),(43,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Rekonsiliasi Data','Paket Fullday','1.000.000',0,0,'2022-02-24 23:00:13','2022-02-24 23:00:13'),(44,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Rekonsiliasi Data','Uang saku kegiatan','1.000.000',0,0,'2022-02-24 23:01:06','2022-02-24 23:01:06'),(45,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Rekonsiliasi Data','Transport kegiatan','1.000.000',0,0,'2022-02-24 23:01:54','2022-02-24 23:01:54'),(72,3,'a','a','a','a','1.000.000',0,0,'2022-03-31 08:13:42','2022-03-31 08:13:42'),(73,3,'a','a','a','a','1.000.000',0,0,'2022-04-02 05:00:25','2022-04-02 05:00:25'),(74,3,'b','b','b','bb','1.000.000',0,0,'2022-04-02 05:02:08','2022-04-02 05:02:08'),(75,3,'xxx','xxx','xxx','xxx','1.000.000',1,0,'2022-05-22 11:42:02','2022-05-22 11:42:02'),(76,3,'test','test','test','test','2.000.000',6,2022,'2022-05-24 10:10:02','2022-05-24 10:10:02');
/*!40000 ALTER TABLE `ref_keuangan_uraian_kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_keuangan_uraian_kegiatan_bck`
--

DROP TABLE IF EXISTS `ref_keuangan_uraian_kegiatan_bck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_keuangan_uraian_kegiatan_bck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_unitbagian` int(11) NOT NULL COMMENT 'ref_unitbagian(id)',
  `kode_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_uraian_kegiatan` varchar(255) NOT NULL,
  `nama_sub_menu_uraian_kegiatan` varchar(255) NOT NULL,
  `kelompok_pagu` varchar(255) NOT NULL,
  `pagu_anggaran` varchar(255) NOT NULL,
  `user_penginput_data` int(11) DEFAULT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_keuangan_uraian_kegiatan_bck`
--

LOCK TABLES `ref_keuangan_uraian_kegiatan_bck` WRITE;
/*!40000 ALTER TABLE `ref_keuangan_uraian_kegiatan_bck` DISABLE KEYS */;
INSERT INTO `ref_keuangan_uraian_kegiatan_bck` VALUES (10,3,'1068.EBA.95.053.B','Pembukuan BMN','Akurasi Data Pembukuan Neraca BMN','Pengadaan pencetakan Laporan Semester 1 tk KL','5.000.000',6,2022,'2022-02-24 21:22:59','2022-05-24 10:18:16'),(11,3,'1068.EBA.95.053.B','Pembukuan BMN','Akurasi Data Pembukuan Neraca BMN','Buku Profile Aset','5.500.000',6,2022,'2022-02-24 21:23:51','2022-05-24 10:19:10'),(12,3,'068.EBA.95.053.B','Pembukuan BMN','Melakukan Verifikasi, Evaluasi, Sertifikasi','Transportasi','1.000.000',6,2022,'2022-02-24 21:25:42','2022-05-28 06:58:11'),(14,3,'068.EBA.95.053.B','Pembukuan BMN','Melakukan Verifikasi, Evaluasi, Sertifikasi','Representatif','1.000.000',6,2022,'2022-02-24 21:29:56','2022-05-28 06:58:21'),(16,3,'068.EBA.95.053.C','Penatausahaan BMN','Evaluasi Penyusunan Laporan BMN Tingkat Wilayah','Tiket Pesawat','1.000.000',0,0,'2022-02-24 21:34:15','2022-02-24 21:34:15'),(17,3,'068.EBA.95.053.C','Penatausahaan BMN','Evaluasi Penyusunan Laporan BMN Tingkat Wilayah','Biaya Rill','1.000.000',0,0,'2022-02-24 21:35:22','2022-02-24 21:35:22'),(18,3,'068.EBA.95.053.C','Penatausahaan BMN','Evaluasi Penyusunan Laporan BMN Tingkat Wilayah','Penginapan','1.000.000',0,0,'2022-02-24 21:36:30','2022-02-24 21:36:30'),(19,3,'068.EBA.95.053.C','Penatausahaan BMN','Evaluasi Penyusunan Laporan BMN Tingkat Wilayah','Uang Harian','1.000.000',0,0,'2022-02-24 21:38:49','2022-02-24 21:38:49'),(21,3,'068.EBA.95.053.C','Penatausahaan BMN','Tindak Lanjut Temuan BPK','Biaya Rill','1.000.000',0,0,'2022-02-24 21:42:35','2022-02-24 21:42:35'),(25,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Uang Harian  [12 org x 1 keg x 4 hr]','1.000.000',0,0,'2022-02-24 21:49:46','2022-02-24 21:49:46'),(26,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Penginapan [20 org x 1 keg x 4 hr]','1.000.000',0,0,'2022-02-24 21:50:52','2022-02-24 21:50:52'),(27,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Uang Harian [20 org x 1 keg x 5 hr]','1.000.000',0,0,NULL,NULL),(28,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Penginapan [15 org x 1 keg x 4 hr]','1.000.000',0,0,NULL,NULL),(29,3,'068.EBA.95.053.C','Penatausahaan BMN','Asistensi Penyusunan Laporan','Uang Harian [15 org x 1 keg x 5 hr]','1.000.000',0,0,NULL,NULL),(30,3,'068.EBA.95.053.C','Penatausahaan BMN','Melaksanakan Verifikasi dan Validasi BMN','Penginapan','1.000.000',0,0,'2022-02-24 22:43:04','2022-02-24 22:43:04'),(31,3,'068.EBA.95.053.C','Penatausahaan BMN','Melaksanakan Verifikasi dan Validasi BMN','Uang Harian','1.000.000',0,0,'2022-02-24 22:44:11','2022-02-24 22:44:11'),(32,3,'068.EBA.95.053.D','Penilaian PIPK','Pelaporan dan evaluasi','Belanja bahan kegiatan','1.000.000',0,0,'2022-02-24 22:45:42','2022-02-24 22:45:42'),(33,3,'068.EBA.95.053.D','Penilaian PIPK','Narasumber','Narasumber [2org x 9 keg]','1.000.000',0,0,'2022-02-24 22:46:24','2022-02-24 22:46:24'),(34,3,'068.EBA.95.053.D','Penilaian PIPK','Penilaian Pengendalian Intern atas Pelaporan','Tiket pesawat','1.000.000',0,0,'2022-02-24 22:47:10','2022-02-24 22:47:10'),(35,3,'068.EBA.95.053.D','Penilaian PIPK','Penilaian Pengendalian Intern atas Pelaporan','Biaya Rill','1.000.000',0,0,'2022-02-24 22:47:55','2022-02-24 22:47:55'),(36,3,'068.EBA.95.053.D','Penilaian PIPK','Penilaian Pengendalian Intern atas Pelaporan','Penginapan','1.000.000',0,0,'2022-02-24 22:48:36','2022-02-24 22:48:36'),(37,3,'1068.EBA.95.053.D','Penilaian PIPK','Penilaian Pengendalian Intern atas Pelaporan','Uang Harian','1.000.000',0,0,'2022-02-24 22:50:07','2022-02-24 22:50:07'),(38,3,'068.EBA.95.053.D','Penilaian PIPK','Penyusunan Laporan Hasil Penilaian PIPK','Paket Fullday','1.000.000',0,0,'2022-02-24 22:51:10','2022-02-24 22:51:10'),(39,3,'068.EBA.95.053.D','Penilaian PIPK','Penyusunan Laporan Hasil Penilaian PIPK','Uang saku kegiatan','1.000.000',0,0,'2022-02-24 22:52:05','2022-02-24 22:52:05'),(40,3,'068.EBA.95.053.D','Penilaian PIPK','Penyusunan Laporan Hasil Penilaian PIPK','Transport kegiatan','1.000.000',0,0,'2022-02-24 22:53:10','2022-02-24 22:53:10'),(41,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Rekonsiliasi Data','Belanja bahan kegiatan','1.000.000',0,0,'2022-02-24 22:54:43','2022-02-24 22:54:43'),(42,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Narasumber','Narasumber [2org x 6keg]','1.000.000',0,0,'2022-02-24 22:55:29','2022-02-24 22:55:29'),(43,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Rekonsiliasi Data','Paket Fullday','1.000.000',0,0,'2022-02-24 23:00:13','2022-02-24 23:00:13'),(44,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Rekonsiliasi Data','Uang saku kegiatan','1.000.000',0,0,'2022-02-24 23:01:06','2022-02-24 23:01:06'),(45,3,'068.EBA.95.053.E','Penyusunan Laporan Penatausahaan BMN','Rekonsiliasi Data','Transport kegiatan','1.000.000',0,0,'2022-02-24 23:01:54','2022-02-24 23:01:54'),(72,3,'a','a','a','a','1.000.000',0,0,'2022-03-31 08:13:42','2022-03-31 08:13:42'),(73,3,'a','a','a','a','1.000.000',0,0,'2022-04-02 05:00:25','2022-04-02 05:00:25'),(74,3,'b','b','b','bb','1.000.000',0,0,'2022-04-02 05:02:08','2022-04-02 05:02:08'),(75,3,'xxx','xxx','xxx','xxx','1.000.000',1,0,'2022-05-22 11:42:02','2022-05-22 11:42:02'),(76,3,'test','test','test','test','2.000.000',6,2022,'2022-05-24 10:10:02','2022-05-24 10:10:02');
/*!40000 ALTER TABLE `ref_keuangan_uraian_kegiatan_bck` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_satuankerja`
--

DROP TABLE IF EXISTS `ref_satuankerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_satuankerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_satuankerja` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=917 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_satuankerja`
--

LOCK TABLES `ref_satuankerja` WRITE;
/*!40000 ALTER TABLE `ref_satuankerja` DISABLE KEYS */;
INSERT INTO `ref_satuankerja` VALUES (1,'PT Jakarta'),(2,'PN Jakarta Pusat'),(3,'PN Jakarta Barat'),(4,'PN Jakarta Timur'),(5,'PN Jakarta Selatan'),(6,'PN Jakarta Utara'),(7,'PA Jakarta Pusat'),(8,'PA Jakarta Utara'),(9,'PA Jakarta Barat'),(10,'PA Jakarta Timur'),(11,'PA Jakarta Selatan'),(12,'PTA Jakarta'),(13,'PTTUN Jakarta'),(14,'PTUN Jakarta'),(15,'BUA '),(16,'DILMIL Utama'),(17,'DIMILTI Ii Di Jakarta'),(18,'DILMILIi - 8 di Jakarta'),(19,'PT Bandung'),(20,'PN Bandung'),(21,'PN Sumedang'),(22,'PN Tasikmalaya'),(23,'PN Garut'),(24,'PN Ciamis'),(25,'PN Purwakarta'),(26,'PN Bekasi'),(27,'PN Karawang'),(28,'PN Subang'),(29,'PN Bogor'),(30,'PN Sukabumi'),(31,'PN Cianjur'),(32,'PN Cirebon'),(33,'PN Indramayu'),(34,'PN Majalengka'),(35,'PN Kuningan'),(36,'PTA Bandung'),(37,'PN Cibadak'),(38,'PN Sumber'),(39,'PN Bale Bandung'),(40,'PA Bandung'),(41,'PA Sumedang'),(42,'PA Ciamis'),(43,'PA Tasikmalaya'),(44,'PA Garut'),(45,'PA Bogor'),(46,'PA Sukabumi'),(47,'PA Cianjur'),(48,'PA Cirebon'),(49,'PA Indramayu'),(50,'PA Majalengka'),(51,'PA Kuningan'),(52,'PA Bekasi'),(53,'PA Karawang'),(54,'PA Purwakarta'),(55,'PN Banjar'),(56,'PN Cikarang'),(57,'PA Soreang'),(58,'PA Cimahi'),(59,'PA Ngamprah'),(60,'PA Subang'),(61,'PA Cibadak'),(62,'PA Sumber'),(63,'PN Depok'),(64,'PTUN Bandung'),(65,'PA Cibinong'),(66,'PN Kab.bogor Di Cibinong, Jawa Barat'),(67,'PA Cikarang'),(68,'PA Depok'),(69,'DILMILIi - 9 di Bandung'),(70,'PA Kota Tasikmalaya'),(71,'PA Kota Banjar'),(72,'PT Semarang'),(73,'PN Semarang'),(74,'PN Tegal'),(75,'PN Pekalongan'),(76,'PN Kudus'),(77,'PN Pati'),(78,'PN Brebes'),(79,'PN Pemalang'),(80,'PN Kendal'),(81,'PN Demak'),(82,'PN Purwodadi'),(83,'PN Salatiga'),(84,'PN Kabupaten Semarang Di Uangaran'),(85,'PN Jepara'),(86,'PN Blora'),(87,'PN Rembang'),(88,'PN Batang'),(89,'PN Purworejo'),(90,'PN Magelang'),(91,'PN Kebumen'),(92,'PN Temanggung'),(93,'PN Wonosobo'),(94,'PN Surakarta'),(95,'PN Sragen'),(96,'PN Wonogiri'),(97,'PN Sukoharjo'),(98,'PN Karangayar'),(99,'PN Boyolali'),(100,'PN Klaten'),(101,'PN Purwokerto'),(102,'PN Cilacap'),(103,'PN Banyumas'),(104,'PN Purbalingga'),(105,'PN Banjarnegara'),(106,'PN Kabupaten Tegal Di Slawi'),(107,'PN Kabupaten Magelang Di Mungkid'),(108,'PA Pekalongan'),(109,'PA Pemalang'),(110,'PA Tegal'),(111,'PA Brebes'),(112,'PA Batang'),(113,'PA Semarang'),(114,'PA Salatiga'),(115,'PA Kendal'),(116,'PA Demak'),(117,'PA Purwodadi'),(118,'PA Pati'),(119,'PA Kudus'),(120,'PA Jepara'),(121,'PA Rembang'),(122,'PA Blora'),(123,'PA Magelang'),(124,'PA Temanggung'),(125,'PA Wonosobo'),(126,'PA Purworejo'),(127,'PA Kebumen'),(128,'PA Purwokerto'),(129,'PA Banyumas'),(130,'PA Cilacap'),(131,'PA Purbalingga'),(132,'PA Banjarnegara'),(133,'PA Klaten'),(134,'PA Boyolali'),(135,'PA Sragen'),(136,'PA Wonogiri'),(137,'PA Sukoharjo'),(138,'PA Karanganyar'),(139,'PA Surakarta'),(140,'PA Ambarawa'),(141,'PTA Semarang'),(142,'PA Slawi'),(143,'PA Mungkid'),(144,'PTUN Semarang'),(145,'PA Kajen'),(146,'DILMILIi - 10 di Semarang'),(147,'PN Yogyakarta'),(148,'PN Wates'),(149,'PN Wonosari'),(150,'PN Sleman'),(151,'PN Bantul'),(152,'PT Yogyakarta'),(153,'PA Yogyakarta'),(154,'PA Sleman'),(155,'PA Wates'),(156,'PA Bantul'),(157,'PA Wonosari'),(158,'PTA Yogyakarta'),(159,'PTUN Yogyakarta'),(160,'DILMILIi - 11 di Yogyakarta'),(161,'PT Surabaya'),(162,'PN Surabaya'),(163,'PN Bojonegoro'),(164,'PN Tuban'),(165,'PN Lamongan'),(166,'PN Gresik'),(167,'PN Sidoarjo'),(168,'PN Mojokerto'),(169,'PN Jombang'),(170,'PN Bondowoso'),(171,'PN Jember'),(172,'PN Banyuwangi'),(173,'PN Situbondo'),(174,'PN Kediri'),(175,'PN Nganjuk'),(176,'PN Tulungagung'),(177,'PN Trenggalek'),(178,'PN Blitar'),(179,'PN Malang'),(180,'PN Pasuruan'),(181,'PN Probolinggo'),(182,'PN Lumajang'),(183,'PN Bangil'),(184,'PN Kraksaan'),(185,'PN Madiun'),(186,'PN Ponorogo'),(187,'PN Pacitan'),(188,'PN Ngawi'),(189,'PN Magetan'),(190,'PN Pamekasan'),(191,'PN Sumenep'),(192,'PN Bangkalan'),(193,'PN Sampang'),(194,'PTA Surabaya'),(195,'PN Kab. Kediri'),(196,'PN Kab. Madiun'),(197,'PA Surabaya'),(198,'PA Mojokerto'),(199,'PA Sidoarjo'),(200,'PA Jombang'),(201,'PA Bawean'),(202,'PA Gresik'),(203,'PA Bojonegoro'),(204,'PA Lamongan'),(205,'PA Jember'),(206,'PA Bondowoso'),(207,'PA Situbondo'),(208,'PA Banyuwangi'),(209,'PA Kabupaten Kediri'),(210,'PA Tulungagung'),(211,'PA Trenggalek'),(212,'PA Blitar'),(213,'PA Nganjuk'),(214,'PA Malang'),(215,'PA Pasuruan'),(216,'PA Bangil'),(217,'PA Probolinggo'),(218,'PA Kraksaan'),(219,'PA Lumajang'),(220,'PA Madiun'),(221,'PA Magetan'),(222,'PA Ngawi'),(223,'PA Ponorogo'),(224,'PA Pacitan'),(225,'PA Pamekasan'),(226,'PA Bangkalan'),(227,'PA Sampang'),(228,'PA Sumenep'),(229,'PA Kangean'),(230,'PA Kabupaten Madiun'),(231,'PA Kediri'),(232,'PA Tuban'),(233,'PTUN Surabaya'),(234,'PTTUN Surabaya'),(235,'PA Malang Kab. Malang'),(236,'PN Kab.malang, Jawa Timur'),(237,'DILMILTinggi Iii di Surabaya'),(238,'DILMILIii - 12 di Surabaya'),(239,'DILMILIii - 13 di Madiun'),(240,'PT Banda Aceh'),(241,'PN Banda Aceh'),(242,'PN Sabang'),(243,'PN Sigli'),(244,'PN Beureun'),(245,'PN Lhok Sukon'),(246,'PN Lhok Seumawe'),(247,'PN Takengon'),(248,'PN Langsa'),(249,'PN Idi'),(250,'PN Kuala Simpang'),(251,'PN Blangkajeren'),(252,'PN Kutacane'),(253,'PN Meulaboh'),(254,'PN Calang'),(255,'PN Sinabang'),(256,'PN Tapak Tuan'),(257,'PN Singkel'),(258,'PN Janthoi'),(259,'MS Aceh'),(260,'MS Banda Aceh'),(261,'MS Sabang'),(262,'MS Sigli'),(263,'MS Meureudu'),(264,'MS Bireuen'),(265,'MS Lhok Sukon'),(266,'MS Takengon'),(267,'MS Lhok Seumawe'),(268,'MS Idi'),(269,'MS Langsa'),(270,'MS Kuala Simpang'),(271,'MS Blangkajeren'),(272,'MS Kotacane'),(273,'MS Meulaboh'),(274,'MS Sinabang'),(275,'MS Calang'),(276,'MS Singkil'),(277,'MS Tapak Tuan'),(278,'PN Blangpidie'),(279,'PN Meureudu'),(280,'PN Suka Makmue'),(281,'MS Blangpidie'),(282,'MS Suka Makmue'),(283,'MS Kota Subulussalam'),(284,'MS Jantho'),(285,'PTUN Banda Aceh'),(286,'DILMILI - 1 di Banda'),(287,'PN Simpang Tiga Redelong'),(288,'MS Simpang Tiga Redelong'),(289,'PT Medan'),(290,'PN Medan'),(291,'PN Binjai'),(292,'PN Tanjung Balai Asahan'),(293,'PN Sidikalang'),(294,'PN Kabanjahe'),(295,'PN Rantau Prapat'),(296,'PN Tebing Tinggi'),(297,'PN Gunung Sitoli'),(298,'PN Pematang Siantar'),(299,'PN Tarutung'),(300,'PN Padang Sidempuan'),(301,'PN Sibolga'),(302,'PN Stabat'),(303,'PN Simalungun'),(304,'PN Kisaran'),(305,'PN Lubuk Pakam'),(306,'PTA Medan'),(307,'PA Binjai'),(308,'PA Kabanjahe'),(309,'PA Medan'),(310,'PA Rantau Prapat'),(311,'PA Tanjung Balai'),(312,'PA Tebing Tinggi'),(313,'PA Sidikalang'),(314,'PA Pematang Siantar'),(315,'PA Balige'),(316,'PA Sibolga'),(317,'PA Padang Sidempuan'),(318,'PA Gunung Sitoli'),(319,'PN Sei Rampah'),(320,'PN Sibuhuan'),(321,'PASibuhuan'),(322,'PA Sei Rampah'),(323,'PA Kisaran'),(324,'PA Lubuk Pakam'),(325,'PA Simalungun'),(326,'PN Mandailing Natal'),(327,'PTTUNMEDAN '),(328,'PTUN Medan'),(329,'PA Stabat'),(330,'PA Pandan'),(331,'PA Tarutung'),(332,'PA Panyabungan'),(333,'DIMILTI - I Di Medan'),(334,'DILMILI - 2 di Medan'),(335,'PN Balige'),(336,'PA Kota Padang Sidempuan'),(337,'PT Padang'),(338,'PN Padang'),(339,'PN Sawahlunto'),(340,'PN Batusangkar'),(341,'PN Solok'),(342,'PN Pariaman'),(343,'PN Painan'),(344,'PN Bukittinggi'),(345,'PN Lubuk Sikaping'),(346,'PN Payakumbuh'),(347,'PN Padang Panjang'),(348,'PN Lubuk Basung'),(349,'PN Tanjung Pati'),(350,'PN Kotobaru'),(351,'PN Muaro'),(352,'PTA Padang'),(353,'PN Pulau Punjung'),(354,'PA Pariaman'),(355,'PA Solok'),(356,'PA Sawahlunto'),(357,'PA Pulau Punjung'),(358,'PA Batusangkar'),(359,'PA Padang'),(360,'PA Padang Panjang'),(361,'PA Sijunjung'),(362,'PA Koto Baru'),(363,'PA Muara Labuh'),(364,'PA Painan'),(365,'PA Bukittinggi'),(366,'PA Lubuk Sikaping'),(367,'PA Talu'),(368,'PA Maninjau'),(369,'PA Payakumbuh'),(370,'PA Tanjung Pati'),(371,'PENGADILANAgama Lubuk Basung'),(372,'PN Pasaman Barat'),(373,'PTUN Padang'),(374,'DILMILI - 3 di Padang'),(375,'PN Pekanbaru'),(376,'PN Bengkalis'),(377,'PN Rengat/indragiri'),(378,'PN Tembilahan'),(379,'PN Bangkinang'),(380,'PN Dumai'),(381,'PT Pekanbaru'),(382,'PN Teluk Kuantan'),(383,'PA Siak Sri Indrapura'),(384,'PA Teluk Kuantan'),(385,'PA Pekanbaru'),(386,'PA Rengat'),(387,'PA Tembilahan'),(388,'PA Bangkinang'),(389,'PA Bengkalis'),(390,'PA Pasir Pangarayan'),(391,'PA Selat Panjang'),(392,'PA Dumai'),(393,'PTA Pekanbaru'),(394,'PN Pelalawan'),(395,'PN Rokan Hilir'),(396,'PN Siak Sri Indrapura'),(397,'PTUN Pekan Baru'),(398,'PA Pangkalan Kerinci'),(399,'PA Ujung Tanjung'),(400,'PN Pasir Pangaraian'),(401,'PN Jambi'),(402,'PN Muara Bungo'),(403,'PN Kuala Tungkal'),(404,'PN Sungai Penuh'),(405,'PN Bangko'),(406,'PN Muara Bulian'),(407,'PT Jambi'),(408,'PA Jambi'),(409,'PA Muara Bungo'),(410,'PA Kuala Tungkal'),(411,'PA Bangko'),(412,'PA Sungai Penuh'),(413,'PA Muara Bulian'),(414,'PN Tebo'),(415,'PN Sarolangun'),(416,'PN Tanjung Jabung Timur'),(417,'PTA Jambi'),(418,'PTUN Jambi'),(419,'PA Sarolangun'),(420,'PA Muara Sabak'),(421,'PA Muara Tebo'),(422,'PA Sengeti'),(423,'PN Sengeti'),(424,'PT Palembang'),(425,'PN Palembang'),(426,'PN Kayuagung'),(427,'PN Baturaja'),(428,'PN Lubuk Lingau'),(429,'PN Lahat'),(430,'PN Muara Enim'),(431,'PN Sekayu'),(432,'PN Pangkalan Balai'),(433,'PA Pangkalan Balai'),(434,'PA Martapura'),(435,'PA Muaradua'),(436,'PA Pagar Alam'),(437,'PA Prabumulih'),(438,'PTA Palembang'),(439,'PA Palembang'),(440,'PA Lahat'),(441,'PA Baturaja'),(442,'PA Kayu Agung'),(443,'PA Muara Enim'),(444,'PA Lubuk Linggau'),(445,'PA Sekayu'),(446,'PTUN Palembang'),(447,'DILMILI - 4 di Palembang'),(448,'PN Prabumulih'),(449,'PN Pagar Alam'),(450,'PN Tanjung Karang'),(451,'PN Metro'),(452,'PN Kotabumi'),(453,'PT Tanjung Karang'),(454,'KANTOR Pn Kalianda'),(455,'PN Gedong Tataan'),(456,'PA Gedong Tataan'),(457,'PA Pringsewu'),(458,'PA Mesuji'),(459,'PA Tulang Bawang Tengah'),(460,'PA Sukadana'),(461,'PA Tanjung Karang'),(462,'PA Krui'),(463,'PA Kotabumi'),(464,'PA Metro'),(465,'PA Kalianda'),(466,'PN Kota Agung'),(467,'PTA Bandar Lampung'),(468,'PTUN Bandar Lampung'),(469,'PA Tulang Bawang'),(470,'PA Tanggamus'),(471,'PN Liwa Kabupaten Lampung Barat'),(472,'PA Gunung Sugih'),(473,'PA Blambangan Umpu'),(474,'PN Menggala'),(475,'PN Gunung Sugih'),(476,'PN Sukadana'),(477,'PN Blambangan Umpu'),(478,'PN Pontianak'),(479,'PN Singkawang'),(480,'PN Sintang'),(481,'PN Ketapang'),(482,'PN Mempawah'),(483,'PN Sanggau'),(484,'PN Putussibau'),(485,'PT Pontianak'),(486,'PA Singkawang'),(487,'PA Nanga Pinoh'),(488,'PA Sungai Raya'),(489,'PA Pontianak'),(490,'PA Sambas'),(491,'PA Ketapang'),(492,'PA Sanggau'),(493,'PA Sintang'),(494,'PA Putussibau'),(495,'PTA Pontianak'),(496,'PA Mempawah'),(497,'PTUN Pontianak'),(498,'PA Bengkayang'),(499,'DILMILI - 5 di Pontianak'),(500,'PN Sambas'),(501,'PN Bengkayang'),(502,'PN Ngabang'),(503,'PN Palangkaraya'),(504,'PN Pangkalan Bun'),(505,'PN Muara Tewe'),(506,'PN Kuala Kapuas'),(507,'PN Buntok'),(508,'PN Sampit'),(509,'PT Palangkaraya'),(510,'PA Nanga Bulik'),(511,'PA Sukamara'),(512,'PA Kuala Pembuang'),(513,'PA Kasongan'),(514,'PA Tamiyang Layang'),(515,'PA Pulang Pisau'),(516,'PA Kuala Kurun'),(517,'PN Kuala Kurun'),(518,'PN Nanga Bulik'),(519,'PN Pulang Pisau'),(520,'PA Palangkaraya'),(521,'PA Pangkalan Bun'),(522,'PA Muara Tewe'),(523,'PA Buntok'),(524,'PA Kuala Kapuas'),(525,'PA Sampit'),(526,'PTA Palangkaraya'),(527,'PTUN Palangkaraya'),(528,'PN Tamiang Layang'),(529,'PN Kasongan'),(530,'PT Banjarmasin'),(531,'PN Banjarmasin'),(532,'PN Kandangan'),(533,'PN Kotabaru'),(534,'PN Barabai'),(535,'PN Martapura'),(536,'PN Tanjung'),(537,'PN Amuntai'),(538,'PN Rantau'),(539,'PA Marabahan'),(540,'PA Pelaihari'),(541,'PA Kotabaru'),(542,'PN Marabahan'),(543,'PN Pleihari'),(544,'PN Paringin'),(545,'PTA Banjarmasin'),(546,'PA Banjarmasin'),(547,'PA Rantau'),(548,'PA Kandangan'),(549,'PA Barabai'),(550,'PA Amuntai'),(551,'PA Tanjung'),(552,'PA Negara'),(553,'PTUN Banjarmasin'),(554,'PA Banjarbaru'),(555,'PN Banjarbaru'),(556,'DILMILI - 6 di Banjarmasin'),(557,'PN Batulicin'),(558,'PA Batu Licin'),(559,'PN Samarinda'),(560,'PN Tenggarong'),(561,'PN Balikpapan'),(562,'PA Tenggarong'),(563,'PA Samarinda'),(564,'PA Tanah Grogot'),(565,'PA Balikpapan'),(566,'PA Tanjung Redep'),(567,'PN Tanjung Redep'),(568,'PN Tanah Grogot'),(569,'PT Samarinda'),(570,'PA Penajam'),(571,'PA Sendawar'),(572,'PN Penajam'),(573,'PTASamarinda'),(574,'PN Kutai Barat'),(575,'PTUN Samarinda'),(576,'PA Bontang'),(577,'PA Sangatta'),(578,'PN Bontang'),(579,'PN Sangatta'),(580,'DILMILI - 7 di Balikpapan'),(581,'PT Manado'),(582,'PN Manado'),(583,'PN Kotamubago'),(584,'PN Tahuna'),(585,'PN Tondano'),(586,'PA Manado'),(587,'PA Kotamubagu'),(588,'PA Tahuna'),(589,'PA Lolak'),(590,'PA Bolaang Uki'),(591,'PA Boroko'),(592,'PA Tutuyan'),(593,'PN Melonguane'),(594,'PTA Manado'),(595,'PA Tondano'),(596,'PTUN Manado'),(597,'PN Bitung'),(598,'PA Bitung'),(599,'DILMILIii - 17 di Manado'),(600,'PN Airmadidi'),(601,'PN Amurang'),(602,'PA Amurang'),(603,'PN Palu'),(604,'PN Toli-toli'),(605,'PN Luwuk'),(606,'PN Poso'),(607,'PA Kodya Palu'),(608,'PA Toli Toli'),(609,'PA Poso'),(610,'PA Luwuk'),(611,'PT Palu'),(612,'PA Ampana'),(613,'PN Donggala'),(614,'PTA Palu'),(615,'PTUN Palu'),(616,'PA Palu Kab. Donggala'),(617,'PA Buol'),(618,'PA Bungku'),(619,'PA Banggai'),(620,'PN Buol'),(621,'PN Parigi'),(622,'PA Parigi'),(623,'PT Ujung Pandang'),(624,'PN Ujung Pandang'),(625,'PN Sungguminasa'),(626,'PN Pangkajene'),(627,'PN Barru'),(628,'PN Takalar'),(629,'PN Maros'),(630,'PN Jeneponto'),(631,'PN Pare-pare'),(632,'PN Enrekang'),(633,'PN Sidenreng Rappang'),(634,'PN Pinrang'),(635,'PN Watampone'),(636,'PN Watansopeng'),(637,'PN Sengkang'),(638,'PN Banta Eng'),(639,'PN Sinjai'),(640,'PN Bulukumba'),(641,'PN Selayar'),(642,'PN Palopo'),(643,'PN Makale'),(644,'PTA Makassar'),(645,'PA Pangkajene'),(646,'PA Maros'),(647,'PA Ujung Pandang'),(648,'PA Jenneponto'),(649,'PA Takalar'),(650,'PA Barru'),(651,'PA Sungguminasa'),(652,'PA Watampone'),(653,'PA Sengkang'),(654,'PA Watan Soppeng'),(655,'PA Bantaeng'),(656,'PA Bulukumba'),(657,'PA Sinjai'),(658,'PA Selayar'),(659,'PA Pare Pare'),(660,'PA Pinrang'),(661,'PA Enrekang'),(662,'PA Sidenreng'),(663,'PA Palopo'),(664,'PA Makale'),(665,'PA Belopa'),(666,'PA Malili'),(667,'PN Belopa'),(668,'PTTUNUJUNG Pandang'),(669,'PTUN Ujung Pandang'),(670,'PA Masamba'),(671,'DILMILIii - 16 di Makassar'),(672,'PN Masamba'),(673,'PN Malili'),(674,'PN Pasangkayu'),(675,'PN Kendari'),(676,'PN Bau-bau'),(677,'PN Raha'),(678,'PN Kolaka'),(679,'PA Kolaka'),(680,'PA Raha'),(681,'PA Kendari'),(682,'PA Bau-bau'),(683,'PT Kendari'),(684,'PA Wangi Wangi'),(685,'PA Lasusua'),(686,'PA Rumbia'),(687,'PN Lasusua'),(688,'PN Wangi Wangi'),(689,'PN Una Aha'),(690,'PTA Kendari'),(691,'PTUN Kendari'),(692,'PA Unaaha'),(693,'PN Andoolo'),(694,'PN Pasarwajo'),(695,'PA Andoolo'),(696,'PA Pasarwajo'),(697,'PT Ambon'),(698,'PN Ambon'),(699,'PN Masohi'),(700,'PN Tual'),(701,'PA Ambon'),(702,'PA Tual'),(703,'PA Masohi'),(704,'PA Dataran Hunipopu'),(705,'PA Dataran Hunimoa'),(706,'PA Namlea'),(707,'PN Dobo'),(708,'PN Namlea'),(709,'PN Dataran Hunipopu'),(710,'PN Dataran Hunimoa'),(711,'PTA Ambon'),(712,'PTUN Ambon'),(713,'DILMILIii - 18 di Ambon'),(714,'PN Saumlaki'),(715,'PT Denpasar'),(716,'PN Denpasar'),(717,'PN Singaraja'),(718,'PN Negara'),(719,'PN Klungkung'),(720,'PN Tabanan'),(721,'PN Karangasem'),(722,'PN Gianyar'),(723,'PN Bangli'),(724,'PA Denpasar'),(725,'PA Singaraja'),(726,'PA Bangli'),(727,'PA Karangasem'),(728,'PA Tabanan'),(729,'PA Klungkung'),(730,'PA Gianyar'),(731,'PTUN Denpasar'),(732,'PA Badung'),(733,'DILMILIii - 14 di Denpasar'),(734,'PN Mataram'),(735,'PN Raba/bima'),(736,'PN Sumbawa Besar'),(737,'PN Selong'),(738,'PN Dompu'),(739,'PN Praya'),(740,'PA Mataram'),(741,'PA Sumbawa'),(742,'PA Praya'),(743,'PA Selong'),(744,'PA Bima'),(745,'PA Dompu'),(746,'PT Mataram'),(747,'PTA Mataram'),(748,'PTUN Mataram'),(749,'PA Giri Menang'),(750,'PA Taliwang'),(751,'PN Kupang'),(752,'PN Atambua'),(753,'PN Soe'),(754,'PN Kefamenanu'),(755,'PN Waingapu'),(756,'PN Waikabubak'),(757,'PN Ende'),(758,'PN Maumere'),(759,'PA Waikabubak'),(760,'PA Kupang'),(761,'PA Kalabahi'),(762,'PA Ende'),(763,'PA Waingapu'),(764,'PN Larantuka'),(765,'PN Ruteng'),(766,'PN Bajawa'),(767,'PN Kalabahi'),(768,'PT Kupang'),(769,'PA Larantuka'),(770,'PA Ruteng'),(771,'PA Atambua'),(772,'PA Soe'),(773,'PA Kefamenanu'),(774,'PA Bajawa'),(775,'PA Maumere'),(776,'PN Lembata'),(777,'PN Rote Ndao'),(778,'PTUN Kupang'),(779,'PTA Kupang'),(780,'PA Lewoleba'),(781,'DILMILIii - 15 di Kupang'),(782,'PN Labuan Bajo'),(783,'PN Oelamasi'),(784,'PA Labuan Bajo'),(785,'PT Jayapura'),(786,'PN Jayapura'),(787,'PN Wamena'),(788,'PN Merauke'),(789,'PN Biak'),(790,'PN Nabire'),(791,'PN Serui'),(792,'PTA Jayapura'),(793,'PA Jayapura'),(794,'PA Biak'),(795,'PA Nabire'),(796,'PA Wamena'),(797,'PA Serui'),(798,'PA Merauke'),(799,'PTUN Jayapura'),(800,'PA Sentani'),(801,'PA Mimika'),(802,'PA Paniai'),(803,'PN Kota Timika Kabupaten Mimika'),(804,'DILMILIii - 19 di Jayapura'),(805,'PA Arso'),(806,'PA Manna'),(807,'PA Curup'),(808,'PA Argamakmur'),(809,'PA Bengkulu'),(810,'PN Bengkulu'),(811,'PN Curup'),(812,'PN Manna'),(813,'PN Arga Makmur'),(814,'PT Bengkulu'),(815,'PN Mukomuko'),(816,'PA Mukomuko'),(817,'PA Bintuhan'),(818,'PA Tais'),(819,'PA Kepahiang'),(820,'PTA Bengkulu'),(821,'PTUN Bengkulu'),(822,'PN Bintuhan'),(823,'PN Tais'),(824,'PN Kepahiang'),(825,'PN Tubei'),(826,'PA Lebong'),(827,'PN Ternate'),(828,'PN Tobelo'),(829,'PN Labuha'),(830,'PN Soasiu'),(831,'PA Ternate'),(832,'PA Morotai'),(833,'PA Soa Sio'),(834,'PA Labuhan Bacan'),(835,'PN Sanana'),(836,'PN Bobong'),(837,'PTA Maluku Utara'),(838,'PT Maluku Utara'),(839,'PN Serang'),(840,'PN Rangkas Bitung'),(841,'PN Tangerang'),(842,'PA Serang'),(843,'PA Rangkas Bitung'),(844,'PA Tangerang'),(845,'PN Pandeglang'),(846,'PA Pandeglang'),(847,'PTA Banten'),(848,'PA Tigaraksa'),(849,'PA Cilegon'),(850,'PT Banten'),(851,'PTUN Serang'),(852,'PN Pangkal Pinang'),(853,'PN Sungai Liat'),(854,'PN Tanjung Pandan'),(855,'PN Koba'),(856,'PN Mentok'),(857,'PTUN Pangkal Pinang'),(858,'PA Pangkal Pinang'),(859,'PA Tanjung Pandan'),(860,'PA Sungai Liat'),(861,'PTA Bangka Belitung'),(862,'PT Bangka Belitung'),(863,'PA Mentok'),(864,'PN Gorontalo'),(865,'PA Gorontalo'),(866,'PN Limboto'),(867,'PA Suwawa'),(868,'PA Kwandang'),(869,'PTUN Gorontalo'),(870,'PA Limboto'),(871,'PTA Gorontalo'),(872,'PN Tilamuta'),(873,'PA Tilamuta'),(874,'PT Gorontalo'),(875,'PN Marisa'),(876,'PA Marisa'),(877,'PN Tanjung Pinang'),(878,'PN Batam'),(879,'PA Tanjung Pinang'),(880,'PA Dabo Singkep'),(881,'PA Tanjung Balai Karimun'),(882,'PA Tarempa'),(883,'PA Batam'),(884,'PA Natuna'),(885,'PN Tanjung Balai Karimun'),(886,'PN Ranai'),(887,'PTUN Tanjung Pinang'),(888,'PN Manokwari'),(889,'PN Sorong'),(890,'PN Fak Fak'),(891,'PA Kaimana'),(892,'PN Kaimana'),(893,'PA Sorong'),(894,'PA Fak Fak'),(895,'PA Manokwari'),(896,'PN Majene'),(897,'PN Mamuju'),(898,'PN Polewali'),(899,'PA Polewali'),(900,'PA Majene'),(901,'PA Mamuju'),(902,'PA Pasangkayu'),(903,'PN Tarakan'),(904,'PA Tarakan'),(905,'PA Tanjung Selor'),(906,'PN Malinau'),(907,'PN Tanjung Selor'),(908,'PN Nunukan'),(909,'PA Nunukan'),(910,'KEPANITERAAN'),(911,'BADILUM'),(912,'BADILAG'),(913,'PA Kota Cimahi'),(914,'MS Simpang Tiga Redelong'),(915,'BADIMILTUN'),(916,'BALITBANG Diklat');
/*!40000 ALTER TABLE `ref_satuankerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_tahun_anggaran`
--

DROP TABLE IF EXISTS `ref_tahun_anggaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_tahun_anggaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2024 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_tahun_anggaran`
--

LOCK TABLES `ref_tahun_anggaran` WRITE;
/*!40000 ALTER TABLE `ref_tahun_anggaran` DISABLE KEYS */;
INSERT INTO `ref_tahun_anggaran` VALUES (1,2022),(2,2023);
/*!40000 ALTER TABLE `ref_tahun_anggaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_unitbagian`
--

DROP TABLE IF EXISTS `ref_unitbagian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_unitbagian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_unitbagian`
--

LOCK TABLES `ref_unitbagian` WRITE;
/*!40000 ALTER TABLE `ref_unitbagian` DISABLE KEYS */;
INSERT INTO `ref_unitbagian` VALUES (1,'Kepala Biro','Karo'),(2,'Tata Usaha (Persuratan)','T U'),(3,'Inventarisasi Kekayaan Negara','IKN'),(4,'Bimbingan Monitoring','Bimon'),(5,'Penghapusan','Penghapusan'),(6,'Pengadaan Barang Wilayah I','PB I'),(7,'Pengadaan Barang Wilayah II','PB II'),(8,'Super User','SU');
/*!40000 ALTER TABLE `ref_unitbagian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_unitbagian_4_surat_masuk`
--

DROP TABLE IF EXISTS `ref_unitbagian_4_surat_masuk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_unitbagian_4_surat_masuk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_unitbagian_4_surat_masuk`
--

LOCK TABLES `ref_unitbagian_4_surat_masuk` WRITE;
/*!40000 ALTER TABLE `ref_unitbagian_4_surat_masuk` DISABLE KEYS */;
INSERT INTO `ref_unitbagian_4_surat_masuk` VALUES (3,'Inventarisasi Kekayaan Negara',NULL,NULL),(4,'Bimbingan Monitoring',NULL,NULL),(5,'Penghapusan',NULL,NULL),(6,'Pengadaan Barang Wilayah I',NULL,NULL),(7,'Pengadaan Barang Wilayah II',NULL,NULL);
/*!40000 ALTER TABLE `ref_unitbagian_4_surat_masuk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cobas`
--

DROP TABLE IF EXISTS `t_cobas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_cobas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cobas`
--

LOCK TABLES `t_cobas` WRITE;
/*!40000 ALTER TABLE `t_cobas` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_cobas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_mainsurat`
--

DROP TABLE IF EXISTS `t_mainsurat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_mainsurat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `status_ii` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_mainsurat`
--

LOCK TABLES `t_mainsurat` WRITE;
/*!40000 ALTER TABLE `t_mainsurat` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_mainsurat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pembuat_laporan`
--

DROP TABLE IF EXISTS `t_pembuat_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pembuat_laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_unitbagian_id` int(2) NOT NULL,
  `t_realisasi_rkkl_id` int(11) NOT NULL,
  `nama_pelaksana` varchar(255) NOT NULL,
  `no_surat_tugas` varchar(255) DEFAULT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pembuat_laporan`
--

LOCK TABLES `t_pembuat_laporan` WRITE;
/*!40000 ALTER TABLE `t_pembuat_laporan` DISABLE KEYS */;
INSERT INTO `t_pembuat_laporan` VALUES (1,3,11,'kocak','nomor surat tugas 5',1,0,'2022-04-03 02:01:58','2022-04-03 02:01:58'),(2,3,12,'budak corporate','nomor surat tugas 6',1,0,'2022-04-03 02:36:38','2022-04-03 02:36:38'),(3,3,11,'budak corporate','nomor surat tugas 5',1,0,'2022-04-03 02:42:57','2022-04-03 02:42:57'),(5,3,12,'budak corporate','nomor surat tugas 6',1,0,'2022-05-17 10:27:16','2022-05-17 10:27:16'),(6,3,17,'budak corporate','nomor surat tugas 11',1,0,'2022-05-18 10:02:26','2022-05-18 10:02:26'),(7,3,11,'kukuh binanto','nomor surat tugas 5',6,2022,'2022-05-24 12:20:04','2022-05-24 12:20:04'),(8,3,13,'kukuh binanto','nomor surat tugas 7',6,2022,'2022-05-28 07:07:48','2022-05-28 07:07:48');
/*!40000 ALTER TABLE `t_pembuat_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pengirim_laporan`
--

DROP TABLE IF EXISTS `t_pengirim_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pengirim_laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_unitbagian_id` int(2) NOT NULL,
  `pengirim_laporan` varchar(255) NOT NULL COMMENT 'ref_unitbagian(id)',
  `t_realisasi_rkkl_id` int(11) DEFAULT NULL COMMENT '(t_realisasi_rkkl)',
  `no_surat_tugas` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pengirim_laporan`
--

LOCK TABLES `t_pengirim_laporan` WRITE;
/*!40000 ALTER TABLE `t_pengirim_laporan` DISABLE KEYS */;
INSERT INTO `t_pengirim_laporan` VALUES (4,3,'budak corporate',11,'','1652779777_DAFTAR ASISTENSI WIL ACEH-signed.pdf','kokkok',1,0,'2022-05-17 09:29:37','2022-05-17 09:29:37'),(5,3,'budak corporate',12,'','1652783258_lap_susut_intra_12_kl005.pdf','av',1,0,'2022-05-17 10:27:38','2022-05-17 10:27:38'),(12,3,'kukuh binanto',11,'nomor surat tugas 5','1653726745_sertifikat anugrah.pdf','a',6,2022,'2022-05-28 08:32:25','2022-05-28 08:32:25');
/*!40000 ALTER TABLE `t_pengirim_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_realisasi_pagu_rkkl`
--

DROP TABLE IF EXISTS `t_realisasi_pagu_rkkl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_realisasi_pagu_rkkl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_unitbagian_id` int(2) NOT NULL COMMENT '(ref_unitbagian)',
  `t_realisasi_rkkl_id` int(11) NOT NULL COMMENT '(t_realisasi_rkkl)',
  `ref_keuangan_uraian_kegiatan_id` int(11) NOT NULL COMMENT '(ref_keuangan_uraian_kegiatan)',
  `nilai_pagu_realisasi` varchar(255) NOT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_realisasi_pagu_rkkl`
--

LOCK TABLES `t_realisasi_pagu_rkkl` WRITE;
/*!40000 ALTER TABLE `t_realisasi_pagu_rkkl` DISABLE KEYS */;
INSERT INTO `t_realisasi_pagu_rkkl` VALUES (1,3,11,10,'1.000.000',1,0,'2022-05-22 12:16:00','2022-05-22 12:16:00'),(2,3,11,30,'1.111',6,2022,'2022-05-22 12:17:36','2022-05-28 09:08:39'),(4,3,11,74,'12',6,2022,'2022-05-22 12:33:33','2022-05-28 07:44:05'),(5,3,11,10,'1',6,2022,'2022-05-24 12:18:13','2022-05-24 12:18:13'),(6,3,11,17,'1.000.000',6,2022,'2022-05-28 07:07:05','2022-05-28 07:07:05');
/*!40000 ALTER TABLE `t_realisasi_pagu_rkkl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_realisasi_rkkl`
--

DROP TABLE IF EXISTS `t_realisasi_rkkl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_realisasi_rkkl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_unitbagian_id` int(2) NOT NULL COMMENT '(ref_unitbagian)',
  `nomor_surat_tugas` varchar(255) DEFAULT NULL,
  `tanggal_surat_tugas` date DEFAULT NULL,
  `tanggal_pelaksana_dari` date DEFAULT NULL,
  `tanggal_pelaksana_sampai` date DEFAULT NULL,
  `verifikasi_kelengkapan` varchar(20) DEFAULT 'belum lengkap',
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_realisasi_rkkl`
--

LOCK TABLES `t_realisasi_rkkl` WRITE;
/*!40000 ALTER TABLE `t_realisasi_rkkl` DISABLE KEYS */;
INSERT INTO `t_realisasi_rkkl` VALUES (11,3,'nomor surat tugas 5','2022-04-02','2022-04-02','2022-04-02','belum lengkap',6,2022,'2022-04-02 02:07:08','2022-05-28 08:53:57'),(12,3,'nomor surat tugas 6','2022-04-02','2022-04-02','2022-04-02','belum lengkap',1,0,'2022-04-02 02:08:31','2022-04-02 02:08:31'),(14,3,'nomor surat tugas 8','2022-04-02','2022-04-02','2022-04-02','belum lengkap',1,0,'2022-04-02 02:14:12','2022-04-02 02:14:12'),(15,3,'nomor surat tugas 9','2022-04-02','2022-04-02','2022-04-02','belum lengkap',1,0,'2022-04-02 02:15:09','2022-04-02 02:15:09'),(16,3,'nomor surat tugas 10','2022-04-02','2022-04-02','2022-04-02','belum lengkap',1,0,'2022-04-02 02:16:37','2022-04-02 02:16:37'),(17,3,'nomor surat tugas 11','2022-04-02','2022-04-02','2022-04-02','sudah lengkap',6,2022,'2022-04-02 02:21:17','2022-05-24 10:35:33'),(18,3,'nomor surat tugas 12','2022-04-02','2022-04-02','2022-04-02','belum lengkap',1,0,'2022-04-02 02:31:38','2022-04-02 02:31:38'),(19,3,'nomor surat tugas 13','2022-04-02','2022-04-02','2022-04-02','belum lengkap',1,0,'2022-04-02 02:32:14','2022-04-02 02:32:14'),(22,3,'nomor surat tugas 16','2022-04-02','2022-04-02','2022-04-02','sudah lengkap',6,2022,'2022-04-02 05:12:15','2022-05-24 10:36:23'),(23,3,'abcd','2022-05-22','2022-05-22','2022-05-22','belum lengkap',1,0,'2022-05-22 11:14:33','2022-05-22 11:14:33'),(24,3,'ST/01/V/01/2022','2022-05-23','2022-05-23','2022-05-27','belum lengkap',6,0,'2022-05-23 09:23:53','2022-05-23 09:23:53'),(25,3,'ST/101/V/3/2022','2022-05-24','2022-05-30','2022-05-31','belum lengkap',6,0,'2022-05-24 10:26:20','2022-05-24 10:26:20'),(26,3,'ST/1001/VI/6/2021','2022-05-24','2022-05-26','2022-05-27','belum lengkap',6,2022,'2022-05-24 10:28:05','2022-05-24 10:28:05');
/*!40000 ALTER TABLE `t_realisasi_rkkl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_realisasi_tempatpelaksanaan`
--

DROP TABLE IF EXISTS `t_realisasi_tempatpelaksanaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_realisasi_tempatpelaksanaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_realisasi_rkkl_id` int(11) NOT NULL COMMENT 't_realisasi_rkkl',
  `nama_pelaksana` varchar(255) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `golongan` varchar(10) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tempat_pelaksana` varchar(255) NOT NULL,
  `user_penginput_data` int(11) NOT NULL COMMENT '(user_id)',
  `tahun_anggaran` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_realisasi_tempatpelaksanaan`
--

LOCK TABLES `t_realisasi_tempatpelaksanaan` WRITE;
/*!40000 ALTER TABLE `t_realisasi_tempatpelaksanaan` DISABLE KEYS */;
INSERT INTO `t_realisasi_tempatpelaksanaan` VALUES (1,11,'Kukuh Binanto','199401242019031003','iii/c','Pranata Komputer Ahli Pertama','PT Bandung',6,2022,'2022-04-04 03:17:02','2022-05-28 07:13:01'),(2,11,'endah sri mulyani gradini',NULL,NULL,'-','PT Jakarta',6,2022,'2022-04-04 03:17:24','2022-05-28 07:16:00'),(3,11,'s','1','a','mn','PT Jakarta',6,2022,'2022-05-22 02:11:06','2022-05-28 07:30:36'),(4,12,'abc','123','123','123','PT Jakarta',6,2022,'2022-05-22 02:12:42','2022-05-28 07:36:42'),(5,11,'binanto kukuh',NULL,NULL,'Pranata Komputer Ahli Pertama','PT Jakarta',6,0,'2022-05-24 12:13:01','2022-05-24 12:13:01');
/*!40000 ALTER TABLE `t_realisasi_tempatpelaksanaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_rekapperjanjiansewa`
--

DROP TABLE IF EXISTS `t_rekapperjanjiansewa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_rekapperjanjiansewa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_rekapperjanjiansewa`
--

LOCK TABLES `t_rekapperjanjiansewa` WRITE;
/*!40000 ALTER TABLE `t_rekapperjanjiansewa` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_rekapperjanjiansewa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabel_surat_masuks`
--

DROP TABLE IF EXISTS `tabel_surat_masuks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabel_surat_masuks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabel_surat_masuks`
--

LOCK TABLES `tabel_surat_masuks` WRITE;
/*!40000 ALTER TABLE `tabel_surat_masuks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabel_surat_masuks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `nip` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'budak corporate','1234567890',8,5,'Super User',NULL,'budakcorporate.404notfound@gmail.com','2022-03-31 04:47:57','$2y$10$nJriREmXMKRfRKkTQW68Yu23d21W4i6lu/Kv55CqTg2AzTvQIN8B2','LJ519qJscT1PuJYpLFdXVfUzCO4rPmRbiTuFhO70qNz0Xb9oCqrAnTgSxcca','Screenshot (2).png',0,0,1,'2022-03-31 04:44:49','2022-05-28 09:02:47'),(6,'kukuh binanto','199401242019031003',3,6,'bendahara bagian ikn','1','kukuhbinanto@gmail.com','2022-05-23 02:25:20','$2y$10$mKQpcp.8UR7HXM7mElDRKukKl9RTyR6vJwmPUfFNfkLYZvo7XXFn2',NULL,'Screenshot (1).png',0,0,1,'2022-05-23 02:24:34','2022-05-28 09:02:52');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-29 19:22:25
