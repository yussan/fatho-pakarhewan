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
-- Table structure for table `relasi_hewan_morfologi`
--

DROP TABLE IF EXISTS `relasi_hewan_morfologi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relasi_hewan_morfologi` (
  `kd_ciri_morfologi` int(11) NOT NULL AUTO_INCREMENT,
  `Kd_hewan` varchar(5) NOT NULL,
  PRIMARY KEY (`kd_ciri_morfologi`),
  KEY `Kd_hewan` (`Kd_hewan`),
  CONSTRAINT `relasi_hewan_morfologi_ibfk_1` FOREIGN KEY (`Kd_hewan`) REFERENCES `hewan` (`kd_hewan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relasi_hewan_morfologi`
--

LOCK TABLES `relasi_hewan_morfologi` WRITE;
/*!40000 ALTER TABLE `relasi_hewan_morfologi` DISABLE KEYS */;
INSERT INTO `relasi_hewan_morfologi` VALUES (1,'001'),(2,'002'),(3,'003'),(4,'004'),(5,'005'),(6,'006'),(7,'007'),(8,'008'),(9,'009'),(10,'010'),(11,'011'),(12,'012'),(13,'013'),(14,'014'),(15,'015'),(16,'016'),(17,'017'),(18,'018'),(19,'019'),(20,'020'),(21,'021'),(22,'022'),(23,'023'),(24,'023'),(25,'024'),(26,'025'),(27,'026'),(28,'027'),(29,'028'),(30,'029'),(31,'030'),(32,'031'),(33,'032'),(34,'032'),(35,'033'),(36,'034'),(37,'035'),(38,'036'),(39,'037'),(40,'038'),(41,'039'),(42,'040'),(43,'041'),(44,'042'),(45,'043'),(46,'044'),(47,'045'),(48,'046'),(49,'047'),(50,'048'),(51,'049'),(52,'050'),(53,'051'),(54,'052'),(55,'053'),(56,'054'),(57,'055'),(58,'056'),(59,'057'),(60,'058'),(61,'059'),(62,'060'),(63,'061'),(64,'062'),(65,'063'),(66,'064'),(67,'065'),(68,'066'),(69,'067'),(70,'068'),(71,'069'),(72,'070'),(73,'071'),(74,'072'),(75,'073'),(76,'074'),(77,'075'),(78,'076'),(79,'077'),(80,'078'),(81,'079'),(82,'080');
/*!40000 ALTER TABLE `relasi_hewan_morfologi` ENABLE KEYS */;
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
