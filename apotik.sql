-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Linux (x86_64)
--
-- Host: matrash.id    Database: u7612757_apotek
-- ------------------------------------------------------
-- Server version	10.2.30-MariaDB

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
-- Table structure for table `antrian`
--

DROP TABLE IF EXISTS `antrian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antrian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) NOT NULL,
  `kode_dokter` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antrian`
--

LOCK TABLES `antrian` WRITE;
/*!40000 ALTER TABLE `antrian` DISABLE KEYS */;
/*!40000 ALTER TABLE `antrian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dokter`
--

DROP TABLE IF EXISTS `data_dokter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dokter` (
  `no` int(20) NOT NULL AUTO_INCREMENT,
  `nama_dokter` text NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(36) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dokter`
--

LOCK TABLES `data_dokter` WRITE;
/*!40000 ALTER TABLE `data_dokter` DISABLE KEYS */;
INSERT INTO `data_dokter` VALUES (2,'Joko','Penyakit Dalam','Jl. Warmasen','2147483647','','0'),(3,'rio','THT','asimas','00808080080','','0'),(4,'khoirur rozaq','php','fdfdfdf1','0867676','cahganteng','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `data_dokter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pasien`
--

DROP TABLE IF EXISTS `data_pasien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pasien` (
  `no` int(50) NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(30) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl` date NOT NULL,
  `umur` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nama_org_tua` varchar(30) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pasien`
--

LOCK TABLES `data_pasien` WRITE;
/*!40000 ALTER TABLE `data_pasien` DISABLE KEYS */;
INSERT INTO `data_pasien` VALUES (1,'pasien12','dimana','0000-00-00','21','perempuan','asimas','bengkel','','','','',''),(2,'pasien2','dimanasdf','2020-01-24','31','perempuan','sorong','tani','','','','',''),(3,'pasien3','dimana3','2020-01-14','12','perempuan','aimas3','bengkel3','','','','',''),(4,'rozaqku','dimana4','0000-00-00','42','perempuan','aimas4','bengkel4','','','','pasienbaru4','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `data_pasien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jam_praktek`
--

DROP TABLE IF EXISTS `jam_praktek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jam_praktek` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `kode_dokter` int(11) NOT NULL,
  `jam_mulai` varchar(128) NOT NULL,
  `jam_selesai` varchar(128) NOT NULL,
  `hari` varchar(128) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jam_praktek`
--

LOCK TABLES `jam_praktek` WRITE;
/*!40000 ALTER TABLE `jam_praktek` DISABLE KEYS */;
INSERT INTO `jam_praktek` VALUES (1,2,'19.00','selesai','tiap hari'),(2,3,'11.00','selesai','tiap hari');
/*!40000 ALTER TABLE `jam_praktek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kunjungan_pasien`
--

DROP TABLE IF EXISTS `kunjungan_pasien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kunjungan_pasien` (
  `no` int(1) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_dokter` varchar(128) NOT NULL,
  `status_pelayanan` varchar(128) NOT NULL,
  `diagnosa` varchar(128) NOT NULL,
  `penanganan` varchar(128) NOT NULL,
  `biaya` varchar(128) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kunjungan_pasien`
--

LOCK TABLES `kunjungan_pasien` WRITE;
/*!40000 ALTER TABLE `kunjungan_pasien` DISABLE KEYS */;
INSERT INTO `kunjungan_pasien` VALUES (1,'pasienbaru4',2,'2020-01-09','2','dibatalkan','','',''),(2,'pasienbaru4',2,'2020-01-09','2','dibatalkan','','',''),(3,'pasienbaru4',3,'2020-01-09','2','dibatalkan','','',''),(4,'pasienbaru4',2,'2020-01-09','2','dibatalkan','','',''),(5,'pasienbaru4',1,'2020-01-09','3','menunggu','','','');
/*!40000 ALTER TABLE `kunjungan_pasien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'admin'),(2,'dokter'),(3,'pasien');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'admin','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nomorantrian`
--

DROP TABLE IF EXISTS `nomorantrian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nomorantrian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(11) NOT NULL,
  `loket` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nomorantrian`
--

LOCK TABLES `nomorantrian` WRITE;
/*!40000 ALTER TABLE `nomorantrian` DISABLE KEYS */;
INSERT INTO `nomorantrian` VALUES (68,0,1),(69,0,2),(70,0,3);
/*!40000 ALTER TABLE `nomorantrian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'u7612757_apotek'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-25 22:13:15
