-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB-1:10.4.21+maria~bionic-log

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
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(225) NOT NULL,
  `isi_artikel` text NOT NULL,
  `penulis_artikel` varchar(225) NOT NULL,
  `tgl_artikel` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (1,'Buku','Buku adalah jendela dunia. Maka dari itu seringlah baca buku biar wawasan luas.','Badrud Tamami','2021-09-09 08:20:25'),(5,'Bahaya internet untuk remaja','Di kalangan remaja saat ini internet nampaknya sudah menjadi kebutuhan pokok. Akan tetapi tidak semua remaja memanfaatkan internet dengan baik dan benar. Ada banyak remaja yang salah menggunakan internet sehingga berdampak buruk bagi dirinya dan lingkungannya.Berdasarkan riset yang mendalam terdapat beberapa bahaya dari salah penggunaan internet di kalangan remaja, yaitu sebagai berikut: Perilaku bullyng melalui media sosial Mudahnya mengakses konten pornografi yang berakibat perilaku kejahatan seksualMaraknya kasus penculikan di kalangan remaja setelah berkenalan melalui media sosial.','Badrud Tamami','2021-09-09 14:39:19'),(6,'Pendidikan Karakter Untuk Membangun Peradaban Bangsa','Pendidikan adalah hal yang sangat dianggap penting di dunia, karena dunia butuh akan orang-orang yang berpendidikan agar dapat membangun Negara yang maju. Tapi selain itu karakter pun sangat diutamakan karena orang-orang pada zaman ini tidak hanya melihat pada betapa tinggi pendidikan ataupun gelar yang telah ia raih, melainkan juga pada karakter dari pribadi dari setiap orang.\r\n\r\nProses pendidikan di sekolah masih banyak yang mementingkan aspek kognitifnya ketimbang psikomotoriknya, masih banyak guru-guru di setiap sekolah yang hanya asal mengajar saja agar terlihat formalitasnya, tanpa mengajarkan bagaimana etika-etika yang baik yang harus dilakukan.\r\n\r\nDi dalam buku tentang Kecerdasan Ganda (Multiple Intelligences), Daniel Goleman menjelaskan kepada kita bahwa kecerdasan emosional dan sosial dalam kehidupan diperlukan 80%, sementara kecerdasan intelektual hanyalah 20% saja. Dalam hal inilah maka pendidikan karakter diperlukan untuk membangun kehidupan yang lebih baik dan beradab, bukan kehidupan yang justru dipenuhi dengan perilaku biadab. Maka terpikirlah oleh para cerdik pandai tentang apa yang dikenal dengan pendidikan karakter (character education).\r\n\r\nBanyak pilar karakter yang harus kita tanamkan kepada anak â€“ anak penerus bangsa, diantaranya adalah kejujuran, yah kejujuran adalah hal yang paling pertama harus kita tanamkan pada diri kita maupun anak â€“ anak penerus bangsa karena kejujuran adalah benteng dari semuanya, Demikian juga ada pilarkarakter tentang keadilan, karena seperti yang dapat kita lihat banyak sekali ketidakadilan khususnya di Negara ini. Selain itu harus ditanamkan juga pilarkarakter seperti rasa hormat. Hormat kepada siapapun itu, contohnya adik kelas mempunyai rasa hormat kepada kakak kelasnya, dan kakak kelasnya pun menyayangi adik â€“ adik kelasnya, begitu juga dengan teman seangkatan rasa saling menghargai harus ada dalam diri setiap murid â€“ murid agar terciptanya dunia pendidikan yang tidak ramai akan tawuran.\r\n\r\nSekarang mulai banyak sekolah â€“ sekolah di Indonesia yang mengajarkan pendidikan karakter menjadi mata pelajaran khusus di sekolah tersebut. Mereka diajarkan bagaimana cara bersifat terhadap orang tua, guru â€“guru ataupun lingkungan tempat hidup.\r\n\r\nMudah â€“ mudahan dengan diterapkannnya pendidikan karakter di sekolah semua potensi kecerdasan anak â€“anak akan dilandisi oleh karakter â€“ karakter yang dapat membawa mereka menjadi orang â€“ orang yang diharapkan sebagai penerus bangsa. Bebas dari korupsi, ketidakadilan dan lainnya. Dan makin menjadi bangsa yang berpegang teguh kepada karakter yang kuat dan beradab. Walaupun mendidik karakter tidak semudah membalikan telapak tangan, oleh karena itu ajarkanlah kepada anak bangsa pendidikan karakter sejak saat ini.','Azzam','2021-09-09 16:39:14');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'badrud','badrud@gmail.com','$2y$10$qAo805OOS6We96xEBTsxaOmkcg9mUg6pVOW7jkFmBLX86dKhTXEzW'),(6,'tamami','tamami@gmail.com','$2y$10$phvmpSi4sFw9BV87w2nGNuTOguA8z2/e732V07LrGsO7OrcZe9m4W'),(7,'bintang','bintang@scirpt.xyz','$2y$10$aPsUFnxsFbabmUhV3p8KFe3f/cYeriWM0aXTwfnNL7oc/e4mGjFh2'),(9,'azzam','azzam@yahoo.com','$2y$10$RCVo.KeJfQWXLJfojSqRzOn8CF/7RZYTr9nIzczhwjfLKNHpcSJh6');
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

-- Dump completed on 2021-09-09 21:04:38
