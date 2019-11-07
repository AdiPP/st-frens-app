-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: dbFrens2
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agen`
--

DROP TABLE IF EXISTS `agen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agen` (
  `id_agen` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamat_detil` text NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `gambar_lokasi` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_agen`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `agen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agen`
--

LOCK TABLES `agen` WRITE;
/*!40000 ALTER TABLE `agen` DISABLE KEYS */;
INSERT INTO `agen` VALUES (1,'Galing Purnama','Purwokerto','','http://127.0.0.1:8000/images/foto_ktp_1.png','082220813406','http://127.0.0.1:8000/images/person_2.png',2),(2,'Jojo Sutarjo','Semarang','','http://127.0.0.1:8000/images/foto_ktp_1.png','082220813406','http://127.0.0.1:8000/images/person_2.png',4),(3,'Adi Permana Putra','Purwokerto','','','','',8),(4,'Axl Adilla','Purwokerto','','ktpPict/ZWfyscqyCAUAp6JHcFhC5fHTq2io9NQLNUeyK839.jpeg','081287711920','',11);
/*!40000 ALTER TABLE `agen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bahan`
--

DROP TABLE IF EXISTS `bahan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bahan` (
  `id_bahan` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `stok` int(5) NOT NULL,
  PRIMARY KEY (`id_bahan`),
  UNIQUE KEY `id_produk` (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bahan`
--

LOCK TABLES `bahan` WRITE;
/*!40000 ALTER TABLE `bahan` DISABLE KEYS */;
/*!40000 ALTER TABLE `bahan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `franchisor`
--

DROP TABLE IF EXISTS `franchisor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `franchisor` (
  `id_frans` int(11) NOT NULL AUTO_INCREMENT,
  `nama_franchisor` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `id_user` int(11) NOT NULL,
  `desk_brand` varchar(255) NOT NULL,
  PRIMARY KEY (`id_frans`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `franchisor_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `franchisor`
--

LOCK TABLES `franchisor` WRITE;
/*!40000 ALTER TABLE `franchisor` DISABLE KEYS */;
INSERT INTO `franchisor` VALUES (1,'Budi Sulisianto','082220813406','http://127.0.0.1:8000/images/foto_ktp_2.png','http://127.0.0.1:8000/images/foto_npwp_1.png','http://127.0.0.1:8000/images/person_3.png','axladilla@gmail.com',1,''),(2,'Hartanto Rusli','082220813406','http://127.0.0.1:8000/images/foto_ktp_2.png','http://127.0.0.1:8000/images/foto_npwp_1.png','http://127.0.0.1:8000/images/person_4.png','axladilla@gmail.com',3,''),(3,'Adi Permana Putra','','','','','',6,''),(4,'Bim','','','','','',9,''),(5,'Adi Permana Putra','081287711920','ktpPict/EM3O8fYBfbeVOroV8A9qJdzHzaO6TeQ3L4Re1sep.jpeg','npwpPict/wE3CUDwQ5WxDeBASxqDiRi9zXOLLLqgaJVXFvf2j.jpeg','','adiputrapermana@gmail.com',10,'');
/*!40000 ALTER TABLE `franchisor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis`
--

DROP TABLE IF EXISTS `jenis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_franchisor` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis`
--

LOCK TABLES `jenis` WRITE;
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
INSERT INTO `jenis` VALUES (1,'Makanan'),(2,'Minuman');
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai`
--

DROP TABLE IF EXISTS `nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai` (
  `id_nilai` int(10) NOT NULL AUTO_INCREMENT,
  `id_frans` int(11) NOT NULL,
  `id_agen` int(11) NOT NULL,
  `isi` text NOT NULL,
  `skor` int(12) NOT NULL,
  PRIMARY KEY (`id_nilai`),
  UNIQUE KEY `id_frans` (`id_frans`),
  UNIQUE KEY `id_agen` (`id_agen`),
  CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`),
  CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_frans`) REFERENCES `franchisor` (`id_frans`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai`
--

LOCK TABLES `nilai` WRITE;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paket`
--

DROP TABLE IF EXISTS `paket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paket` (
  `id_paket` int(10) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `foto_paket` varchar(255) NOT NULL,
  `deskripsi_paket` text NOT NULL,
  `harga` int(20) NOT NULL,
  PRIMARY KEY (`id_paket`),
  KEY `id_frans` (`id_produk`) USING BTREE,
  CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paket`
--

LOCK TABLES `paket` WRITE;
/*!40000 ALTER TABLE `paket` DISABLE KEYS */;
INSERT INTO `paket` VALUES (1,1,'Paket Ultimate','http://127.0.0.1:8000/images/product_banana_pisang.png','Ini merupakan Paket terbaik anda mendapatkan paket lengkap seperti \r\n\r\nBahan makanan, Stand, Stool, Cup, styereofoam \r\n\r\nuntuk 1000 pcs',10000000),(2,2,'Paket Ninja','http://127.0.0.1:8000/images/product_banana_pisang.png','Ini merupakan Paket terbaik anda mendapatkan paket lengkap seperti \r\n\r\nBahan makanan, Stand, Stool, Cup, styereofoam \r\n\r\nuntuk 1000 pcs',10000000),(5,1,'Paket Ambyar','paketPict/6dMNGz0Kakc4GOT4FLWviexmqo0xHyQbzIyJS6Io.jpeg','Ambyar Pisan!',123),(6,12,'Paket Hora','paketPict/tkXijCMrtAOM8uwugkGuWUAOMaZ7DSTjOI81sALM.jpeg','Hahaha',123),(7,12,'Paket Dora','paketPict/oLawuRCFJ2PT33i5UojM4LY5YYsKY6qgRMWCiW4n.jpeg','Deskripsi',1234);
/*!40000 ALTER TABLE `paket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partnership`
--

DROP TABLE IF EXISTS `partnership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partnership` (
  `id_partnership` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `id_agen` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_partnership`),
  KEY `id_produk` (`id_produk`),
  KEY `id_agen` (`id_agen`),
  CONSTRAINT `partnership_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  CONSTRAINT `partnership_ibfk_2` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partnership`
--

LOCK TABLES `partnership` WRITE;
/*!40000 ALTER TABLE `partnership` DISABLE KEYS */;
INSERT INTO `partnership` VALUES (1,1,1,'Diterima'),(2,1,2,'Menunggu Konfirmasi'),(3,1,3,'Diterima'),(4,2,1,'Diterima');
/*!40000 ALTER TABLE `partnership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pemesanan`
--

DROP TABLE IF EXISTS `pemesanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pemesanan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `id_agen` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alamat_detil` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemesanan`
--

LOCK TABLES `pemesanan` WRITE;
/*!40000 ALTER TABLE `pemesanan` DISABLE KEYS */;
INSERT INTO `pemesanan` VALUES (1,1,1,'2019-10-24 00:13:16','asdasdsa',1,'Terima'),(7,1,1,'2019-10-29 15:49:28','Purwokerto',2,'Terima'),(8,1,1,'2019-10-29 15:59:11','Jakarta',3,'Terima'),(9,1,1,'2019-10-29 15:49:28','Purwokerto',2,'Terima'),(10,1,1,'2019-10-29 15:59:11','Jakarta',3,'Tolak'),(11,1,1,'2019-10-29 15:59:11','Jakarta',3,'Terima'),(12,1,1,'2019-10-29 15:49:28','Purwokerto',2,'Tolak'),(13,1,1,'2019-10-29 15:59:11','Jakarta',3,'Tolak'),(14,1,1,'2019-09-17 00:13:16','asdasdsa',1,'Terima'),(15,1,1,'2016-10-29 15:49:28','Purwokerto',2,'Terima'),(16,1,1,'2019-08-17 00:13:16','asdasdsa',1,'Terima'),(17,1,2,'2019-10-29 15:49:28','Purwokerto',2,'Terima'),(18,1,2,'2019-10-29 15:59:11','Jakarta',3,'Tolak'),(19,1,2,'2019-10-29 15:59:11','Jakarta',3,'Terima'),(20,1,2,'2019-10-29 15:49:28','Purwokerto',2,'Tolak'),(21,1,2,'2019-10-29 15:59:11','Jakarta',3,'Tolak'),(22,1,2,'2019-09-17 00:13:16','asdasdsa',1,'Terima'),(23,1,1,'2019-11-06 16:59:51','',1,'Keranjang');
/*!40000 ALTER TABLE `pemesanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penjualan`
--

DROP TABLE IF EXISTS `penjualan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penjualan` (
  `id_jual` int(15) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `id_agen` int(11) NOT NULL,
  `id_frans` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_jual`),
  UNIQUE KEY `id_produk` (`id_produk`),
  UNIQUE KEY `id_agen` (`id_agen`),
  UNIQUE KEY `id_frans` (`id_frans`),
  CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`),
  CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`id_frans`) REFERENCES `franchisor` (`id_frans`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penjualan`
--

LOCK TABLES `penjualan` WRITE;
/*!40000 ALTER TABLE `penjualan` DISABLE KEYS */;
/*!40000 ALTER TABLE `penjualan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_frans` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `hak_paten` varchar(255) NOT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `id_frans` (`id_frans`) USING BTREE,
  KEY `id_jenis` (`id_jenis`) USING BTREE,
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_frans`) REFERENCES `franchisor` (`id_frans`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` VALUES (1,1,'Banana Pisang','JABODETABEK','082220348125',1,'5000','Banana Pisang adalah produk olahan pisang ciptaan seseorang yang merupakan makanan khas amerika dimana pisang dikukus terlebih dahulu kemudian dipanggang dengan melted keju','brandPict/JaTaf2CkeBum4cqIX2PrBXtIirLHmTBlXbKvX67A.jpeg','http://127.0.0.1:8000/images/hak_paten_1.png'),(2,1,'Nanas Pineapple','JABODETABEK','082220348123',1,'5000','Ini bukan banana pisang!','http://127.0.0.1:8000/images/product_banana_pisang.png','http://127.0.0.1:8000/images/hak_paten_1.png'),(11,1,'Brand A','PURWOKERTO','081287719920',1,'0','Desk 1','brandPict/JaTaf2CkeBum4cqIX2PrBXtIirLHmTBlXbKvX67A.jpeg','patenPict/r34rHO1xq6qxetzJzX1syGYseI0B3X5ynDP5Iirs.jpeg'),(12,3,'Brad 10','PURWOKERTO','081287711920',1,'0','Produk ini Sangat Bagus!','brandPict/QWNdlTsdPY9rzNTj0qir68z45mVPHbJLFO6pnyHo.jpeg','patenPict/czuPlHXP5ykYTST1ZJbtVCsVTcg5F0UiqQDaemw2.jpeg');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_agen`
--

DROP TABLE IF EXISTS `r_agen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `r_agen` (
  `id_ragen` int(11) NOT NULL AUTO_INCREMENT,
  `id_agen` int(11) NOT NULL,
  `id_frans` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_ragen`),
  KEY `r_agen_ibfk_1` (`id_agen`),
  KEY `r_agen_ibfk_2` (`id_frans`),
  CONSTRAINT `r_agen_ibfk_1` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`),
  CONSTRAINT `r_agen_ibfk_2` FOREIGN KEY (`id_frans`) REFERENCES `franchisor` (`id_frans`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_agen`
--

LOCK TABLES `r_agen` WRITE;
/*!40000 ALTER TABLE `r_agen` DISABLE KEYS */;
INSERT INTO `r_agen` VALUES (1,1,2,'Performanya bagus semoga bisa kerja sama lagi','2019-10-27 11:59:43',4);
/*!40000 ALTER TABLE `r_agen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat_frans`
--

DROP TABLE IF EXISTS `riwayat_frans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat_frans` (
  `id_rfrans` int(10) NOT NULL AUTO_INCREMENT,
  `id_agen` int(11) NOT NULL,
  `id_frans` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_rfrans`),
  UNIQUE KEY `id_agen` (`id_agen`),
  UNIQUE KEY `id_frans` (`id_frans`),
  CONSTRAINT `riwayat_frans_ibfk_1` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`),
  CONSTRAINT `riwayat_frans_ibfk_2` FOREIGN KEY (`id_frans`) REFERENCES `franchisor` (`id_frans`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_frans`
--

LOCK TABLES `riwayat_frans` WRITE;
/*!40000 ALTER TABLE `riwayat_frans` DISABLE KEYS */;
/*!40000 ALTER TABLE `riwayat_frans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'franchisor_1','franchisor_1','franchisor'),(2,'agen_1','agen_1','agen'),(3,'franchisor_2','franchisor_2','franchisor'),(4,'agen_2','agen_2','agen'),(6,'admin','admin','franchisor'),(8,'agen','agen','agen'),(9,'Bimbim','bimibm','franchisor'),(10,'adipepe','adiepep','franchisor'),(11,'Admin','Admin','agen');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'dbFrens2'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-08  0:15:57
