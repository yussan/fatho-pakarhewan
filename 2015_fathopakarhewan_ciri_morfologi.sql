CREATE DATABASE  IF NOT EXISTS `2015_fathopakarhewan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `2015_fathopakarhewan`;
-- MySQL dump 10.13  Distrib 5.6.24, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: 2015_fathopakarhewan
-- ------------------------------------------------------
-- Server version	5.6.24-0ubuntu2

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
-- Table structure for table `ciri_morfologi`
--

DROP TABLE IF EXISTS `ciri_morfologi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciri_morfologi` (
  `kd_ciri_morfologi` int(5) NOT NULL AUTO_INCREMENT,
  `nm_ciri_morfologi` varchar(35) NOT NULL,
  `type` enum('vertebrata','avertebrata') NOT NULL,
  `hubungan_klasifikasi` varchar(500) NOT NULL,
  `desk_morf` varchar(1000) NOT NULL,
  PRIMARY KEY (`kd_ciri_morfologi`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciri_morfologi`
--

LOCK TABLES `ciri_morfologi` WRITE;
/*!40000 ALTER TABLE `ciri_morfologi` DISABLE KEYS */;
INSERT INTO `ciri_morfologi` VALUES (1,'menyusui','vertebrata','','Binatang menyusui atau mamalia adalah kelas hewan vertebrata yang terutama dicirikan oleh adanya kelenjar susu, yang pada betina menghasilkan susu sebagai sumber makanan anaknya'),(2,'Tidak menyusui','vertebrata','',''),(3,' Berkaki','vertebrata','2',''),(4,'Tidak berkaki','vertebrata','2',''),(5,'berkulit lembab','vertebrata','3','Kulit lembab sangat \r\ntipis, mengandung kapiler \r\ndarah dan dilengkapi dengan \r\nkelenjar-kelenjar penghasil \r\nlendir di bagian dermis dan di \r\nbawah kulit.'),(6,'Bersisik','vertebrata','3','Sisik secara umumnya berarti semacam lapisan kulit yang keras dan berhelai-helai, seperti pada ikan, ular atau kaki ayam.'),(7,'Berbulu','vertebrata','3','Bulu mempunyai banyak fungsi pada burung tapi yang paling penting adalah bulu berperan penting dalam memungkinkan membantu burung untuk terbang.Selain membantu untuk memungkinkan penerbangan, bulu juga memberikan perlindungan dari elemen. Bulu burung dengan memberikan Waterproofing dan insulasi dan bahkan memblokir sinar UV yang berbahaya untuk mencapai kulit burung.'),(8,'Bertelur','vertebrata','1','Salah satu cara berkembang biakkan hewan dengan cara bertelur adalah Ovipar, yang pada umumnya mempunyai ciri-ciri telurnya dierami sampai menetas. Ovipar adalah jenis reproduksi yg mengakibatkan telur yg dikeluarkan berkembang dan menetas di luar badan induknya.'),(9,'Tidak  bertelur','vertebrata','1',''),(10,'Berkantung','vertebrata','9','Kantung (marsupium) ini umumnya dijumpai pada hewan betina di bagian ventral tubuh'),(11,'Tak  berkantung','vertebrata','9',''),(12,'omnivora ','vertebrata','11','Omnivora adalah hewan pemakan segala.mnivora adalah spesies yang memiliki pola makan yang terdiri dari tumbuhan dan bahan hewani.'),(13,'herbivora','vertebrata','11','herbivora adalah suatu golongan hewan pemakan tumbuhan saja. '),(14,'karnivora','vertebrata','11','karnivora adalah suatu golongan hewan pemakan daging yang merupakan suatu  ordo atau bangsa Mamalia dan bagian dari komponen konsumen ekosistem.'),(15,'Tidak  terbang','vertebrata','12',''),(16,'Terbang','vertebrata','12',''),(17,'Hidup di air','vertebrata','13',''),(18,'hidup di darat','vertebrata','13',''),(20,'Tidak bergigi acip','vertebrata','18',''),(21,'Memiliki gigi acip','vertebrata','18',' gigi acip dan insisor) merupakan jenis gigi pertama yang tumbuh dalam mamalia heterodon. Gigi acip terletak pada pramaksila di rahang atas, dan mandibel di rahang bawah.'),(22,'Begigi acip dua','vertebrata','21',''),(23,'bergigi acip empat','vertebrata','21',''),(24,'Berkaki empat','vertebrata','115',''),(25,'Berkaki lebih dari empat','vertebrata','115',''),(26,'berbelalai','vertebrata','20','fungsi utama belalai pada hewan adalah untuk bernafas dan mencium bau. tapi terkadang, belalai juga berfungsi sebagai pipa penyedor air untuk mendinginkan badannya.'),(27,'Tidak berbelalai','vertebrata','20',''),(28,'Jari genap','vertebrata','27',''),(29,'Jari ganjil','vertebrata','27',''),(30,'Tulang sejati','vertebrata','4',''),(31,'Tulang rawan','vertebrata','4',' Sebuah tulang rawan terdiri dari matriks ekstraseluler terdiri dari serat kolagen, zat dasar yang kaya proteoglikan, dan serat elastin.'),(32,'Sirip kipas','vertebrata','30',''),(33,'Sirip cuping','vertebrata','30',''),(34,'Sirip archipterygeal','vertebrata','31',''),(35,'Sirip bukan archipterygeal','vertebrata','31',''),(36,'Ganoid tulang rawan','vertebrata','32',''),(37,'Ganoid tulang keras','vertebrata','32',''),(38,'Ganoid tulang keras tingkat tinggi','vertebrata','32',''),(41,'ekor heterocercal','vertebrata','35','Type Homocercal yaitu bila columna vertebralis berakhir tidak persis di ujung ekor, tapi agak membelok sedikit, tapi ujung membagi diri menjadi dua bagian yang sama'),(42,'ekor bukan heterocercal','vertebrata','35',''),(43,'berkaki','vertebrata','6',''),(44,'tidak berkaki','vertebrata','6',''),(45,'berekor','vertebrata','44',''),(46,'tidak berekor','vertebrata','44',''),(47,'tidak bisa terbang','vertebrata','7',''),(48,'bisa terbang','vertebrata','7',''),(49,'badan tinggi','vertebrata','47',''),(50,'badn tidak tinggi','vertebrata','47',''),(51,'paruh pendek','vertebrata','48',''),(52,'paruh besar','vertebrata','48',''),(53,'leher panjang','vertebrata','49',''),(54,'leher pendek','vertebrata','49',''),(55,'kaki bermembran','vertebrata','50',''),(56,'kaki tidak bermembran','vertebrata','50',''),(57,'warna mencolok','vertebrata','51',''),(58,'warna tidak mencolok','vertebrata','51',''),(59,'mata kedepan','vertebrata','58',''),(60,'mata kesamping','vertebrata','58',''),(61,'kaki pendek','vertebrata','60',''),(62,'kaki panjang','vertebrata','60',''),(63,'paruh berkantung','vertebrata','52',''),(64,'paruh tidak berkantung','vertebrata','52',''),(65,'kaki vestigeal','vertebrata','64',''),(66,'kaki kuat','vertebrata','64',''),(67,'bercangkang','vertebrata','6',''),(68,'tidak bercangkang','vertebrata','6',''),(69,'bersisik kering','vertebrata','68',''),(70,'bersisik keras','vertebrata','68',''),(71,'tubuh dua lapisan','avertebrata','',''),(72,'tubuh tidak ada lapisan','avertebrata','',''),(73,'berpori','avertebrata','71',''),(74,'tidak berpori','avertebrata','71',''),(75,'tidak berongga','avertebrata','72',''),(76,'berongga semu','avertebrata','72',''),(77,'berongga sejati','avertebrata','72',''),(78,'bersegmen','avertebrata','77',''),(79,'tidak bersegmen','avertebrata','77',''),(80,'berkaki','avertebrata','78',''),(81,'tidak berkaki','avertebrata','78',''),(82,'berduri','avertebrata','79',''),(83,'tidak berduri','avertebrata','79',''),(84,'kerangka kapur','avertebrata','73',''),(85,'kerangka bukan kapur','avertebrata','73',''),(86,'kerangka salkeosik','avertebrata','85',''),(87,'kerangka spons','avertebrata','85',''),(88,'bersiklus','avertebrata','74',''),(89,'tidak bersiklus','avertebrata','74',''),(90,'medusa dominan','avertebrata','88',''),(91,'medusa tidak dominan','avertebrata','88',''),(92,'tidak parasit','avertebrata','75',''),(93,'parasit pada hewan','avertebrata','75',''),(94,'parasit pada manusia','avertebrata','75',''),(95,'panjang tubuh > 10 cm','avertebrata','76',''),(96,'panjang tubuh 1 cm','avertebrata','76',''),(97,'lima lengan cambuk','avertebrata','82',''),(98,'lima lengan bukan cambuk','avertebrata','82',''),(99,'tidak punya lima lengan cambuk','avertebrata','82',''),(100,'berduri','avertebrata','99',''),(101,'tidak berduri','avertebrata','99',''),(102,'tidak bercangkang','avertebrata','83',''),(103,'bercangkang satu','avertebrata','83',''),(104,'bercangkang dua','avertebrata','83',''),(105,'kaki lebih dr 5 pasang','avertebrata','80',''),(106,'kaki kurang dr 5 pasang','avertebrata','80',''),(107,'bersayap','avertebrata','106',''),(108,'tidak bersayap','avertebrata','106',''),(109,'berantena','avertebrata','108',''),(110,'tidak berantena','avertebrata','108',''),(111,'tidak berabut','avertebrata','81',''),(112,'berambut banyak','avertebrata','81',''),(113,'berambut sedikit','avertebrata','81',''),(114,'Hidup di air','vertebrata','120',''),(115,'Hidup di Darat','vertebrata','120',''),(120,'bergigi','vertebrata','14',''),(121,'tidak bergigi','vertebrata','14','');
/*!40000 ALTER TABLE `ciri_morfologi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-21 19:48:16
