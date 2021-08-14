-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: 10119281_kepegawaian
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `golongan`
--

DROP TABLE IF EXISTS `golongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `golongan` (
  `id_golongan` int(4) NOT NULL AUTO_INCREMENT,
  `nama_golongan` varchar(100) NOT NULL,
  `status_pegawai` enum('Tetap','Magang') NOT NULL,
  `gaji_pokok` int(12) NOT NULL,
  `tunjangan_kinerja` int(12) NOT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `golongan`
--

LOCK TABLES `golongan` WRITE;
/*!40000 ALTER TABLE `golongan` DISABLE KEYS */;
INSERT INTO `golongan` VALUES (2,'Manajer Utama','Tetap',15000000,2000000),(4,'Manajer Keuangan','Tetap',13500000,2000000),(5,'Manajer Pemasaran','Tetap',13000000,2000000),(6,'Staff Umum','Tetap',7000000,2000000),(7,'Keamanan','Tetap',4000000,2000000),(8,'Manajer Produksi','Magang',13000000,500000),(9,'Manajer Pemasaran','Magang',13000000,500000),(10,'Staff Umum','Magang',7000000,500000),(11,'Keamanan','Magang',4000000,500000);
/*!40000 ALTER TABLE `golongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `id_pegawai` int(4) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` varchar(13) DEFAULT NULL,
  `id_golongan` int(4) NOT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `id_golongan` (`id_golongan`),
  CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id_golongan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8475 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` VALUES (1197,'Santoso R','Pria','Purwakarta','1980-06-30','08446612221',2),(1223,'Fatima','Wanita','Jakarta','1999-12-12','085311882923',6),(2213,'Anita','Wanita','Bojong','2001-08-12','085677889921',4),(2797,'Adam','Pria','London','1989-06-20','087721324422',2),(6777,'Udain','Pria','Bandung','2000-12-22','087655664421',6),(6789,'Siti Rohana','Wanita','Solo','1999-12-02','087653329080',6),(7217,'Kamal','Pria','Bogor','1979-11-12','081290908080',7),(8473,'Sahroni','Pria','Bandung','1991-04-14','087766889070',8);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penggajian`
--

DROP TABLE IF EXISTS `penggajian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penggajian` (
  `id_penggajian` int(4) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `id_pegawai` int(4) NOT NULL,
  `jumlah_gaji` int(11) NOT NULL,
  `upah_lembur` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  PRIMARY KEY (`id_penggajian`),
  KEY `id_pegawai` (`id_pegawai`),
  CONSTRAINT `penggajian_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4445 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penggajian`
--

LOCK TABLES `penggajian` WRITE;
/*!40000 ALTER TABLE `penggajian` DISABLE KEYS */;
INSERT INTO `penggajian` VALUES (2121,'2021-08-14',1197,17000000,140000,100000,17040000);
/*!40000 ALTER TABLE `penggajian` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-14 21:35:03
