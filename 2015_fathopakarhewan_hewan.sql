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
-- Table structure for table `hewan`
--

DROP TABLE IF EXISTS `hewan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hewan` (
  `kd_hewan` varchar(5) NOT NULL,
  `nm_hewan` varchar(30) NOT NULL,
  `definisi` text,
  `gambar_hewan` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hewan`
--

LOCK TABLES `hewan` WRITE;
/*!40000 ALTER TABLE `hewan` DISABLE KEYS */;
INSERT INTO `hewan` VALUES ('001','Samarta','nggk tahu kak saya','e4c13beab7b5ac1242a4d57ff165032e.png'),('002','Coelenterata','Cnidaria atau Coelenterata adalah sebuah filum yang terdiri atas sekitar 9.000 spesies hewan sederhana yang hanya ditemukan di perairan, kebanyakan lingkungan laut. Dari sudut etimologi, kata Cnidaria berasal dari bahasa Yunani \"cnidos\" yang berarti \"jarum penyengat\". Kemampuan menyengat cnidaria-lah yang merupakan asal nama mereka. ','761f592d7adfd7f8362d0d2fac4498b1.jpg'),('003','Platihelminthes','Platyhelminthes adalah filum dalam Kerajaan Animalia (hewan). Filum ini mencakup semua cacing pipih kecuali Nemertea, yang dulu merupakan salah satu kelas pada Platyhelminthes, yang telah dipisahkan.',''),('004','Nemathelmintes','Nemathelmintes merupakan filum kerajaan hewan. Anggotanya merupakan berbagai cacing yang dikenal dengan cacing gilig. Tubuhnya silinder memanjang.',''),('005','Anelida','Anelida merupakan filum luas yang terdiri dari cacing berdegmen. Filum ini dapat ditemukan dilingkungan basah. ',''),('006','Artropodha ','Artropodha merupakan filum yang paling besar di dalam kerajaan hewan. Hewan ini dapat ditemukan dilaut dan didarat termasuk berbagai bentuk simbiosis dan parasit. Kata Artropoda berasal dari bahasa yunani arthron, “ ruas, buku, atau segmen” dan puos, “kaki” jika disatukan menjadi kaki yang berbuku-buku.',''),('007','Echinodhermata','Echinodhermata merupakan filum hewan laut yang mencakup bintang laut, teripang dan beberapa kekerabatannya. Echinodhermata berasal dari bahasa yunani yang berari kulit berduri. Kelompk filum ini ditemukan hamper semua dalam kedalaman laut.',''),('008','Mollusca','Mollusca merupakan hewan tripoblastik selomata yang bertubuh lunak. Kata molluscta berasal dari bahasa latin molluscus yang berarti lunak. Semua hewannya lunak dengan maupun tanpa cangkang.',''),('009','Hexatinelida','Hexatinelida termasuk dalam filum porifera. Hexatinelida spekulasinya terdiri dari zat kersik dan hisup dilaut yang dalam. ',''),('010','Demospongia','Demospongia merupakan kelas dari anggota hewan takbertulang belakang (avertebrata) dan merupakan filum dari porifera. Golongan ini bertulang lunak karena tidak memiliki rangka.',''),('011','Calcarea','Calcarea merupakan anggota filum porifera. Kerangka tubuhnya tersusun dari kalsium karbonat.',''),('012','Anthozoa','Anthozoa merupakan filum dari Cnidaria. Anthozoa berasal dari bahasa yunani, anthos berarti bunga, dan zoon berarti hewan. Hewan ini berbentuk seperti bunga',''),('013','Scypozoa','Scypozoa merupakan filum dari Cnidaria. Scypozoa berasal dari bahasa yunani, scypo = mangkuk dan zoa=hewan. Hewan ini ini mempunyai fase dominan berbentuk medusa',''),('014','Hydrozoa','Hydrozoa merupakan filum dari Cnidaria. Hydrozoa sebagian besar hidup berkoloni di laut.',''),('015','Turbellaria','Turbellaria termasuk dalam filum platihelmintes. Turbellaria sering juga disebut cacing rambut getar. ',''),('016','Cestoda','Cestoda termasuk dalam filum platihelminthes. Cestoda sering juga dosebut cacing pita. Dalam siklus hidupnya, cacing ini memerlukan air untuk bertelur dan menetaskan telurnya.',''),('017','Trematoda','Trematoda merupakan filum Platihelmintes. Trematoda hidup berparasit pada hwan dan manusia.',''),('018','Accarislumbriciodes','Accarislumbriciodes merupakan filum dari Nemathelminthes. Hewan ini akan membentuk inang pada manusia. Larva Accaris akan berkembang menjadi dewasa dan kopulasi serta akhirnya bertelur.',''),('019','Ancylotomauduodenale',NULL,''),('020','Ophiuroidea','Ophiuroidea merupakan kelas  dari filum echinodermata. Kelas ini memiliki kekerabatan dengan bintang laut. Hewan ini memiliki lima lengan cambuk yang panjangnya dapat mencapai 60 cm.',''),('021','Asterioidea','Asterioidea merupakan kelas hewan dari filum echinodermata. Asterioideaberbentuk simetri radial dengan lima lengan.',''),('022','Echinoidea','Echinoidea merupakan hewna jenis bulu babi dari filum Echinodermata. Hewan ini sering disebut landak laut. Hewan ini tidak mempunyai lengan, namun berduri.',''),('023','Holoturoidea','Holoturoidea merupakan hewan avertebrata dari filum Echinodermata. Holoturoideatersebar luas di lingkungan laut, mulai dari zona pasang surut sampai zona dalam. ',''),('024','Chepalopoda',NULL,''),('025','Bivalvia','Bivalvia merupakan kelas dari filum mollusca. Bivalvia mencakup kerang-kerangan. Bivalvia berari sepasang cangkang. ',''),('026','Gastropoda','Gastropoda merupakan kelas dari filum Mollusca. Dalam arti sempit, Gastropoda merupakan cangkang yang bergelung pada tahap dewasa. Gastropoda dapat ditemukan diberbagai lingkungan.',''),('027','Miriapoda','Miriapoda merupakan kelas dari filum Arthropoda. Tubuhnya teridir dari kepala dan badan, tanpa bagian dada. Pada kepala terdapat sepasang mata tunggaldan dua pasang alat peraba.',''),('028','Insecta','Insecta merupakan kelas dari Artropoda yang memiliki tubuh terbagi atas kepala, dada, dan perut. Insecta memiliki tiga pasang kaki dan 1-2 pasang sayap.',''),('029','Crustacea','Crustacea merupakan sekelompok besar dari Artropoda. Kebanyakan hewan  hidup di dalam ai, namun ada beberapa beradaptasi di darat. Tubuhnya terdiri dari dua bagian, kepala dan dada yang menyatu serta perut (abdomen)',''),('030','Arachnidea ','Arachnidea merupakan kelas dari artropoda. Arachnida berasal dari bahasa yunani yang berarti laba-laba. Tubuhnya terdiri atas efalotaraks dan perut (abdomen).',''),('031','Hirudinea','Hirudinea merupakan kelas dari Anelida. Hirudinea merupakan cacing yang tak berambut. Tempat hidup Hirudinea ada diair dan di darat. ',''),('032','Polychaeta ','Polychaeta merupaka kelas cacing dari filum Anelida. Polychaeta umumnya hidup dilaut dan sebagian ada di darat. Seluruh tubuh Polychaeta disertai rambut kaku yang dilapisi kultikula. Tubuhnya berwarna menarik.',''),('033','Oligochaeta','Oligochaeta  merupakan kelas dari filum Anelida. Namanya berasal dari oligo ynag artinya sedikit, dan chaeta yang artinya rambut kaku. ',''),('034','Mamalia ','H34	Mamalia 	Mamalia atau binatang menyusui merupakan hewan kelas verebrata dimana cirri-ciri utamanya adalah memiliki kelenjar susu. Pada hewan betina menghasilkan susu sebagai sumber makanan.',''),('035','Pisces','H35	Pisces	Pisces atau ikan merupakan kelas avertebrata yang hidup di air dan bernapas dengan ingsang. ',''),('036','Amphibi','H36	Amphibi	Amphibi umunya didefinisikan sebagai hewan vertebrata yang hidup di dua alam, yakni air dan darat. Tubuhnya diselimuti kulit yang berlendir, dan memiliki darah dingin. ',''),('037','Aves','H37	Aves	Aves atau unggas merupakan hewan vertebrata yang memiliki bulu dan sayap. Diperkirakan ada 8800-10.200 species burung di seluruh dunia',''),('038','Reptil','H38	Reptil	Reptil atau binatang melata merupakan sebuah kelompok hewan yang berdarah dingin memiliki sisik menutupi tubuhnya. ',''),('039','Monotremata','Monotremata merupakan mamalia yang bertelur. Monos berarti tunggal, dan Trema berarti lubang (kloaka). ','monotremata.jpg'),('040','Marsupilaria','Marsupilaria	Marsupilaria merupakan mamalia yang betinanya memiliki kantong perut (marsupium)',''),('041','Primata','Primata	Primata adalah hewan yang menjadi ordo biologi Primates. Kata Primates berasal dari bahasa latin yang berarti “yang pertama, yang mulia”',''),('042','Chiroptera','Chiroptera	Chirpotera merupaka hewan berordo dengan cirri utama memiliki kaki depan yang dapat berkembang menjadi sayap.',''),('043','Sirenia ','Sirenia merupakan mamalia laut. Sirenia bukanlah ikan karena memreka menyusui anaknya dan masih memiliki kekerabatan dengan gajah. ',''),('044','Artiodactyla','Artiodactyla merupakan hewan mamalia pemamah biak. Hewan ini mencerna makann=annya dua kali. ',''),('045','Perissodactyla','Perrisodactila merupakan hewan mamalia lapisan ordo. Perrisodactyla memiliki kuku berjumlah ganjil.',''),('046','Proboscidae ','Proboscidae merupakan ordo taksonomi yang terdiri dari satu family mamalia. Proboscidae juga disebut mamalia bergading',''),('047','Rodentia ','Rodentia atau hewan pengerat merupakan salah satu ordo dari mamalia. Hewan ini memiliki gigi depan yang selalu tumbuh dan akan diasah dengan menggerigiti sesuatu.',''),('048','Lagomorpha','Lagomorpha merupakan salah ordo dari mammalian yang sering dikira sama dengan ordo rodentia. Lagomorpha memiliki empat gigi depan di rahang atas.',''),('049','Carnivora','Carnivora hewan mamalia yang memakan daging atau bangkai hewan yang sudah mati. Kata Carnivora berasal dari bahasa latin, Carne berate daging dan vorare berarti memakan.',''),('050','Pinnipedia ','Pinnipedia adalah mamalia laut yang memiliki empat sirip dan lapisan lemak dibawahnya. Pinnipedia bernapas menggunakan paru-paru.',''),('051','Insectivore','Insectivore merupakan sebutan untuk hewan yang makanannya serangga.',''),('052','Polidota','Polidota merupakan ordo dari mamalia yang memakan serangga.',''),('053','Acipenceriformes','Acipenceriformes',''),('054','Lapisosteiformes','Lapisosteiformes',''),('055','Amiiformes ','Amiiformes ',''),('056','Cluferiformes ','Cluferiformes ',''),('057','Crossopterygii','Crossopterygii',''),('058','Cladoselachiformes','Cladoselachiformes',''),('059','Chondrecheliformes','Chondrecheliformes',''),('060','Xenachaniformes','Xenachaniformes',''),('061','Chimaeriformes','Chimaeriformes',''),('062','Selachiformes','Selachiformes',''),('063','Caecilian','Caecilian',''),('064','Urodela','Urodela',''),('065','Anura','Anura',''),('066','Struthioniformes','Struthioniformes merupakan ordo dari kelas Aves. Struthioniformes merupakan burung pemakan tumbuhan dan hewan. Tubuhnya dapat tumbuh mencapai 2,5 m.',''),('067','Casuariformes','Casuariformes merupakan burung yang tidak bisa terbang. Hewan ini memiliki sayap yang kecil, dan tingginya mencapai 1,7m.',''),('068','Apterygiformes','Apterygiformes',''),('069','Anseriformes','Anseriformes memiliki paruh yang lebar dan berkaki pendek. Bulu ekornya akan berbentuk seperti kipas. ',''),('070','Psittachiformes','Psittachiformes merupakan ordo dari kelas aves. Psittachiformes memiliki paruh pendek dank at di bagian ujungnya. Umumnya, Psittachiformes adalah pemakan buah-buahan',''),('071','Strigiformes','Strigiformes merupaka ordo dari kelas Aves. Strigiformes merupakan burung nocturnal dangna kepala dan  mata yang besar.',''),('072','Columbiformes','Columbiformes merupakan ordo dari kelas Aves. Columbiformes memiliki paruh pendek dan kulit lunak pada pangkal paruhnya. ',''),('073','Galliformes','Galliformes',''),('074','Pelacaniformes','Pelacaniformes merupaka ordo dari filum Aves yang memiliki paruh besar, lubang hidung vestigial dan hidupnya di lautan. ',''),('075','Procellariformes','Procellariformes',''),('076','Ciconiformes','Ciconiformes merupakan ordo dari filum Aves. Ciconiformesmemiliki leher dan kaki yang panjang. Hidupnya berada di perswahan secara berkelompok. Makanan Ciconiformes adalah ikan maupun hewan yang hidup di air.',''),('077','Falconiformes','Falconiformes merupakan ordo dari Kelas Aves. Falconiformes merupaka hewan pemakan hewan (karnivor). Paruhnya sangan kuat dielngkapi dengan kuku yang tajam.',''),('078','Chelonian','Chelonian merupakan ordo dari kelas reptile. Chelonian memiliki sepadang tungkai depan yang serupa kaki pendayung. Hewan ini bernafas menggunakan paru-paru.',''),('079','Squamata ','Squamata merupakan ordo dari kelas Reptil. Squamata memiliki species terbanyak di kelas Reptil. Tubuhnya ditutupi sisik yang terbuat dari bahan tanduk. Sisiknya mengalami perubahan secara periodic.',''),('080','Crocodilian','Crocodilian merupaka ordo dari kelas reptilian. Hewan ini umumnya bertubuh besar. Crocodilian merupakan hewan pemakan ikan, reptile lainnya dan terkadang mollusca.','');
/*!40000 ALTER TABLE `hewan` ENABLE KEYS */;
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