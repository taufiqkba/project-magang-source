-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: projectkp
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `berita_acaras`
--

DROP TABLE IF EXISTS `berita_acaras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `berita_acaras` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `mitra_id` bigint unsigned NOT NULL,
  `sto_id` bigint unsigned NOT NULL,
  `status_id` bigint unsigned NOT NULL,
  `cust_wo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_inet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_depan_odp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_dalam_odp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_label_dc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_redaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_ont` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_stb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_teknisi_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_rumah_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita_acaras`
--

LOCK TABLES `berita_acaras` WRITE;
/*!40000 ALTER TABLE `berita_acaras` DISABLE KEYS */;
INSERT INTO `berita_acaras` VALUES (1,2,1,1,1,'37396782','Vera Laksita S.E.','(+62) 28 2083 0130','klazuardi@example.org','Jr. Ekonomi No. 51, Tanjung Pinang 44359, Sultra','975904515','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(2,2,3,3,3,'30430084','Janet Jamalia Purwanti','0800 0965 9283','putri64@example.com','Jr. Laksamana No. 141, Subulussalam 29837, Malut','100068793','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(3,2,2,2,1,'72340985','Diana Hassanah M.Farm','0822 1689 213','zthamrin@example.org','Ki. Bara Tambar No. 318, Padang 74670, Sulteng','711185540','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(4,2,1,1,3,'98304398','Jayadi Luwar Suryono S.Kom','(+62) 244 0012 3357','sakura38@example.org','Jr. Ki Hajar Dewantara No. 958, Depok 27777, Jateng','396042187','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(5,2,2,2,3,'62245887','Mujur Hakim','0923 6202 083','kurnia53@example.com','Dk. Gedebage Selatan No. 69, Balikpapan 36880, Sumsel','819611403','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(6,2,3,2,1,'34238725','Dina Mardhiyah','(+62) 634 0595 8031','jaga.habibi@example.net','Jln. Radio No. 787, Administrasi Jakarta Timur 44818, Sumut','159900163','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(7,2,1,3,3,'79874268','Dewi Hassanah','(+62) 907 2014 915','suryatmi.tiara@example.net','Jr. Baha No. 984, Pekanbaru 63782, Jabar','205290685','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(8,2,1,1,1,'52584013','Ani Pudjiastuti M.Farm','(+62) 903 8585 5753','lantar18@example.org','Kpg. Siliwangi No. 186, Banda Aceh 51482, Aceh','703817587','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(9,2,1,3,1,'75311905','Cawisadi Putra','0697 7998 5470','wasita.gangsar@example.net','Dk. Supomo No. 639, Jayapura 36738, Malut','672125857','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(10,2,3,1,1,'21060723','Maryanto Hutapea','0555 8142 138','lailasari.victoria@example.org','Gg. Jaksa No. 126, Manado 90357, Jambi','178396839','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(11,2,2,1,1,'13492539','Fitriani Lalita Anggraini','0562 7534 5414','oktaviani.alika@example.com','Ki. Suharso No. 630, Semarang 25759, Sumut','558403492','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(12,2,3,3,1,'97136534','Betania Riyanti','0402 7735 1789','prima03@example.net','Jr. Kebonjati No. 549, Mojokerto 82036, Jateng','292409473','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(13,2,2,1,3,'96165751','Jelita Halimah','(+62) 485 0015 704','amalia49@example.net','Psr. Agus Salim No. 921, Pasuruan 16092, Sulbar','331557827','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(14,2,1,2,1,'39799139','Naradi Hutapea','0406 6414 005','taswir.suartini@example.net','Gg. Gedebage Selatan No. 515, Padangsidempuan 28093, Jambi','756993229','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(15,2,2,2,3,'92371972','Elisa Winarsih','0412 0069 6408','usafitri@example.com','Ds. Babadak No. 215, Jambi 41140, Lampung','942440731','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(16,2,2,2,1,'54204754','Surya Maheswara S.E.I','0739 0570 035','maryati.ajimin@example.org','Ki. Dago No. 178, Balikpapan 39944, Sultra','752462139','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(17,2,1,1,3,'47243735','Tania Widiastuti','(+62) 629 9282 156','aryani.karsa@example.org','Jln. Ciwastra No. 799, Sabang 47626, Aceh','716685901','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(18,2,2,3,3,'93426849','Juli Zulfa Mayasari M.Farm','026 0849 9598','jamal25@example.net','Gg. Dr. Junjunan No. 689, Semarang 31053, Pabar','611164668','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:36:41','2022-01-06 02:36:41'),(19,3,2,3,1,'94863301','Diah Susanti S.Psi','(+62) 787 7785 630','sabrina.sihombing@example.org','Dk. R.M. Said No. 300, Tarakan 51239, Banten','126156855','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(20,3,2,3,1,'86272975','Uchita Ika Fujiati','0296 2069 0679','manullang.sarah@example.org','Ds. Sentot Alibasa No. 202, Tomohon 42835, Kaltara','902663319','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(21,3,3,3,1,'29219251','Timbul Rajata','(+62) 828 6542 3530','ramadan.lembah@example.org','Ds. Ciumbuleuit No. 684, Blitar 10873, Bengkulu','416059909','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(22,3,1,2,1,'43830081','Harsanto Hari Siregar S.H.','0490 5158 713','juli15@example.org','Jr. Bagonwoto  No. 129, Gorontalo 69634, Kaltara','153752854','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(23,3,3,3,1,'98171904','Kamidin Wibowo S.Pd','(+62) 234 4000 833','hartati.cindy@example.org','Jln. Jamika No. 966, Surakarta 78242, DKI','670372084','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(24,3,3,2,2,'30347744','Ina Andriani','(+62) 25 6216 6380','intan88@example.org','Dk. Thamrin No. 964, Pasuruan 47694, Gorontalo','222568371','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(25,3,2,1,2,'69102612','Cinthia Fitria Purwanti','(+62) 409 3196 934','langgraini@example.net','Jr. Yosodipuro No. 141, Balikpapan 31124, Lampung','107951011','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(26,3,3,1,1,'22017170','Elisa Usamah','(+62) 29 9717 569','endah54@example.com','Gg. Dahlia No. 21, Ternate 25377, Kalsel','550525591','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(27,3,2,2,1,'42787787','Cemani Sitorus','0330 8597 3497','jabal67@example.net','Dk. Yosodipuro No. 787, Banjarbaru 26245, Pabar','147735705','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(28,3,1,2,2,'14462712','Panca Januar','0841 157 754','kpratama@example.org','Dk. Bakhita No. 898, Pariaman 55384, Lampung','272598883','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(29,3,1,3,1,'58579116','Puti Hamima Maryati','028 4061 187','galur08@example.net','Jr. R.E. Martadinata No. 150, Tasikmalaya 53261, Aceh','173738139','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(30,3,1,3,3,'13147209','Ani Wahyuni','0636 9252 5762','hmaulana@example.net','Kpg. Bappenas No. 715, Pekanbaru 73432, Aceh','775348289','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(31,3,2,3,1,'53307152','Jasmin Iriana Lailasari M.TI.','0616 5698 7018','rama.situmorang@example.org','Dk. Babadan No. 283, Lhokseumawe 72161, Sulbar','189541779','2P [Inet+Voice]','evident/image_depan_odp.jpg','evident/image_dalam_odp.jpg','evident/image_label_dc.jpg','evident/image_redaman.jpg','evident/image_ont.jpg','evident/image_stb.jpg','evident/image_teknisi_pelanggan.jpg','evident/image_rumah_pelanggan.jpeg','2022-01-06 02:37:01','2022-01-06 02:37:01'),(32,2,3,4,3,'42133231','Didik Sugiarto','252312325','dididk@gmail.com','Semarang Barat 29','13234213132','2P [Inet + Voice]','evident//image_depan_odp.jpg','evident//image_dalam_odp.jpg','evident//image_label_dc.jpg','evident//image_redaman.jpg','evident//image_ont.jpg','evident//image_stb.jpg','evident//image_teknisi_pelanggan.jpg','evident//image_rumah_pelanggan.jpeg','2022-01-19 00:31:29','2022-01-19 00:31:29'),(33,2,3,4,1,'3421321323','Fandi Muhammad Ilham','0817230839782','fandimuh@gmail.com','JL. Gemah sari 87, Semarang.','142410319299','2P [Inet + Voice]','evident//image_rumah_pelanggan.jpeg','evident//image_teknisi_pelanggan.jpg','evident//image_stb.jpg','evident//image_ont.jpg','evident//image_redaman.jpg','evident//image_label_dc.jpg','evident//image_dalam_odp.jpg','evident//image_depan_odp.jpg','2022-01-19 00:48:30','2022-01-19 00:48:30'),(34,5,11,4,1,'54092019','Fendi Muhammad','081676323123','fendi@gmail.com','JL. Menjangan barat 29, semarang, jawa tengah 50152.','14231092092','2P [Inet + Voice]','evident//image_depan_odp.jpg','evident//image_dalam_odp.jpg','evident//image_label_dc.jpg','evident//image_redaman.jpg','evident//image_ont.jpg','evident//image_stb.jpg','evident//image_rumah_pelanggan.jpeg','evident//image_rumah_pelanggan.jpeg','2022-01-19 10:39:32','2022-01-19 10:39:32'),(35,5,11,4,3,'234234235','Dedi cahyo','08263213423','dedi@gmail.com','JL. Semarang','1428937213','2P [Inet + Voice]','evident//image_depan_odp.jpg','evident//image_dalam_odp.jpg','evident//image_label_dc.jpg','evident//image_redaman.jpg','evident//image_ont.jpg','evident//image_stb.jpg','evident//image_teknisi_pelanggan.jpg','evident//image_rumah_pelanggan.jpeg','2022-01-19 10:41:18','2022-01-19 10:41:18');
/*!40000 ALTER TABLE `berita_acaras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_01_04_121220_create_mitras_table',1),(6,'2022_01_04_122842_create_berita_acaras_table',1),(7,'2022_01_04_122913_create_sto_cabangs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitras`
--

DROP TABLE IF EXISTS `mitras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mitras` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitras`
--

LOCK TABLES `mitras` WRITE;
/*!40000 ALTER TABLE `mitras` DISABLE KEYS */;
INSERT INTO `mitras` VALUES (1,'PD Kuswoyo Pudjiastuti','Jr. Pacuan Kuda No. 230, Sawahlunto 47142, Sumbar','2022-01-06 02:35:48','2022-01-06 02:35:48'),(2,'UD Zulaika Adriansyah (Persero) Tbk','Jln. Sutoyo No. 615, Pagar Alam 39098, Kalbar','2022-01-06 02:35:48','2022-01-06 02:35:48'),(3,'Perum Simbolon Marpaung (Persero) Tbk','Jr. Baranang Siang Indah No. 415, Padang 50416, Sulut','2022-01-06 02:35:48','2022-01-06 02:35:48'),(4,'CV Sudiati Fujiati','Psr. Bambu No. 797, Palu 83824, Kalbar','2022-01-06 02:35:48','2022-01-06 02:35:48'),(5,'UD Wijayanti Hutapea','Kpg. Kalimalang No. 970, Banda Aceh 71874, Kaltara','2022-01-06 02:35:48','2022-01-06 02:35:48'),(6,'CV Wulandari','Jr. Basudewo No. 138, Malang 35654, Kalteng','2022-01-06 02:35:48','2022-01-06 02:35:48'),(7,'PD Hutasoit','Psr. Pahlawan No. 239, Pekalongan 33792, Sulut','2022-01-06 02:35:48','2022-01-06 02:35:48'),(8,'Perum Safitri Tamba','Jln. Gardujati No. 708, Manado 65872, Jambi','2022-01-06 02:35:48','2022-01-06 02:35:48'),(9,'UD Prasetyo Suartini (Persero) Tbk','Jln. Muwardi No. 482, Palu 91528, Lampung','2022-01-06 02:35:48','2022-01-06 02:35:48'),(10,'Perum Uwais','Jln. Jaksa No. 912, Bontang 79084, Pabar','2022-01-06 02:35:48','2022-01-06 02:35:48'),(11,'PT. TELEKOMUNIKASI BERASAMA INDONESIA','JALAN SEMARANG BARAT 29, SEMARANG','2022-01-19 00:42:39','2022-01-19 00:42:39'),(12,'PT. KOMUNIKASI SEJAHTERA','JL. SEMARANG TIMUR 29, SEMARANG, JAWA TENGAH','2022-01-19 10:35:43','2022-01-19 10:35:43');
/*!40000 ALTER TABLE `mitras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `sto_cabangs`
--

DROP TABLE IF EXISTS `sto_cabangs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sto_cabangs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sto_cabangs`
--

LOCK TABLES `sto_cabangs` WRITE;
/*!40000 ALTER TABLE `sto_cabangs` DISABLE KEYS */;
INSERT INTO `sto_cabangs` VALUES (1,'ABR','AMBARAWA','2022-01-06 02:35:48','2022-01-06 02:35:48'),(2,'BDN','BANDUNGAN','2022-01-06 02:35:48','2022-01-06 02:35:48'),(3,'UNR','UNGARAN','2022-01-06 02:35:48','2022-01-06 02:35:48'),(4,'MJP','GEMAH, PEDURUNGAN','2022-01-06 02:35:48','2022-01-06 02:35:48'),(5,'GNK','GENUK','2022-01-06 02:35:48','2022-01-06 02:35:48'),(6,'SMT','BANGUNHARJO, PEKUNDEN','2022-01-06 02:35:48','2022-01-06 02:35:48'),(7,'SKR','SEKARANG','2022-01-06 02:35:48','2022-01-06 02:35:48'),(8,'MKG','MANGKANG','2022-01-06 02:35:48','2022-01-06 02:35:48'),(9,'JHR','JOHAR, KARANG KIDUL','2022-01-06 02:35:48','2022-01-06 02:35:48'),(10,'BOJ','BOJA','2022-01-06 02:35:48','2022-01-06 02:35:48'),(11,'WNJ','WELERI, KENDAL, KARO','2022-01-19 00:42:01','2022-01-19 00:42:01');
/*!40000 ALTER TABLE `sto_cabangs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `mitra_id` bigint unsigned NOT NULL,
  `sto_id` bigint unsigned NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_user_id_unique` (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,1,'123123',1,'Taufiq Kurniawan Bayu Amartha','taufiqkba@gmail.com','2022-01-06 02:35:48','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','VXRvgCzi0Mk9deGyQc2OakuI8ewGJVuXx30jD48zwZe5AZS09dg529s92D9F','2022-01-06 02:35:48','2022-01-19 10:26:46'),(2,3,4,'321321',0,'Kamaria Puspasari','nsitompul@example.org','2022-01-06 02:35:48','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','SgWIEhj8sIOQnpBmShV620cP5F5eN3UXvS2YIboZKfF7z1c0NS2aKzPfwAsk','2022-01-06 02:35:48','2022-01-06 02:35:48'),(3,2,5,'882607',0,'Aditya Ardiansyah','aditya99@gmail.com','2022-01-06 02:35:48','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','OzkGwFj588soZ5v1fWN6mwU0nPmARQocjLeKFyISOABz8laTchXoteRdEsx9','2022-01-06 02:35:48','2022-01-06 03:12:30'),(4,1,4,'145196',0,'Ahmad Setiawan Nugroho','ahmad@gmail.com',NULL,'$2y$10$1SnE.dzm0DNccxkNNY4hC.qxhveuc71EVFbDlYJ2FY/Dyfgpp3e/i',NULL,'2022-01-19 09:59:17','2022-01-19 09:59:17'),(5,11,4,'101121',0,'Gunawan Dwi Cahyo','gunawan@gmail.com',NULL,'$2y$10$IyDJARaSmNX1Pe0ThcoIo.7ZCopS6Znyif5P3fy8zIg19NkgTsx8K',NULL,'2022-01-19 10:34:12','2022-01-19 10:37:01');
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

-- Dump completed on 2022-01-19 23:34:03
