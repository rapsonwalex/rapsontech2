-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: aaflawfirm_db
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appointment_requests`
--

DROP TABLE IF EXISTS `appointment_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointment_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `appointment_date` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `appointment_time` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `q1` varchar(100) DEFAULT NULL,
  `q2` varchar(100) DEFAULT NULL,
  `q3` varchar(100) DEFAULT NULL,
  `other_specify` varchar(100) DEFAULT NULL,
  `phone_no2` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment_requests`
--

LOCK TABLES `appointment_requests` WRITE;
/*!40000 ALTER TABLE `appointment_requests` DISABLE KEYS */;
INSERT INTO `appointment_requests` VALUES (1,'21/07/2022',NULL,'Bello','bello@gmail.com','07014105464','some shit talk','Yes','Yes','YouTube','zipp','07014105464','2022-07-14 20:23:07','2022-07-14 20:23:07'),(2,'14/07/2022','11:30AM','aSA','ascsaa','09009090909','cdaa','No','Yes','Facebook','adcaca','09009090909','2022-07-14 20:26:07','2022-07-14 20:26:07'),(3,'29/08/2022','01:00PM','dsfsdf','dadfaf','3331','dcdc','Yes','Yes','Google','dfdad','1341331','2022-07-14 20:31:56','2022-07-14 20:31:56'),(4,'29/08/2022','11:30 AM','asddsasd','adfadfa','asdasdas','sadasdas','Yes','Yes','YouTube','asdas','sdasdas','2022-07-28 09:37:04','2022-07-28 09:37:04'),(5,'29/08/2022','12:00 PM','hhfjfjfj','jdjdjdjdjj','jdjdjdjdj','iriirri','Yes','Yes','other','jdjjkdk','iirururir','2022-07-28 09:49:02','2022-07-28 09:49:02'),(6,'29/08/2022','3:00 PM','dasdas','asdada','dasd','dfada','Yes','Yes','Google','dfds','dadadaa','2022-07-28 15:32:41','2022-07-28 15:32:41'),(7,'29/08/2022','09:30 AM','asdadas','dasdasd','asdadas','asdasda','Yes','Yes','Google','dadas','asdasda','2022-07-28 15:34:07','2022-07-28 15:34:07'),(8,'29/08/2022','5:00 PM','asdasd','dasdasdas','asdasdas','sdasdasd','Yes','Yes','Google','sddasfsdf','adasda','2022-07-28 15:38:04','2022-07-28 15:38:04'),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:54:10','2022-08-02 20:54:10'),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:54:12','2022-08-02 20:54:12'),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:54:19','2022-08-02 20:54:19'),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:54:26','2022-08-02 20:54:26'),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:54:35','2022-08-02 20:54:35'),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:54:45','2022-08-02 20:54:45'),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:54:54','2022-08-02 20:54:54'),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:55:08','2022-08-02 20:55:08'),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:56:03','2022-08-02 20:56:03'),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:56:11','2022-08-02 20:56:11'),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:57:13','2022-08-02 20:57:13'),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-02 20:57:22','2022-08-02 20:57:22'),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-03 12:12:33','2022-08-03 12:12:33'),(22,'29/08/2022','10:00 AM','weqweq','dasdasd','dasdasda','asdasdsa','Yes','Yes','Email Newsletter',NULL,'adasdasdas','2022-08-03 12:22:51','2022-08-03 12:22:51'),(23,NULL,NULL,'sasaa','assas','asasas','asxasxa','Yes','No','other','asas','sadasdas','2022-08-03 12:25:06','2022-08-03 12:25:06'),(24,NULL,NULL,'asdfad','adada','adfdadfaf','adada','Yes','Yes','other','asdad','asdasdas','2022-08-03 12:27:48','2022-08-03 12:27:48'),(25,NULL,NULL,'bello','bello@gmail.com','qddadad','dadadad','Yes','Yes','other','dadada','sadasas','2022-08-03 12:34:20','2022-08-03 12:34:20'),(26,'29/08/2022','09:00 AM','Bello','bello@gmail.com','07014105464','nothing','Yes','Yes','other','testing','nnfnfnnff','2022-08-03 12:40:03','2022-08-03 12:40:03'),(27,'29/08/2022','10:30 AM','Bello2','bello2@gmail.com','07014105464','test','No','No','other','teees','07014105464','2022-08-03 12:42:46','2022-08-03 12:42:46'),(28,'25/08/2022','10:30 AM','Bello Adewale','belloadewalea@gmail.com','07014105464','anything','Yes','Yes','Facebook',NULL,'07014105464','2022-08-05 09:26:52','2022-08-05 09:26:52'),(29,'10/08/2022','10:00 AM','bello','be@gmail.com','07014105464',NULL,'No','No','Other','xyz',NULL,'2022-08-05 09:32:39','2022-08-05 09:32:39'),(30,'17/08/2022','10:00 AM','sdsds','dada@sdfs.com','12222222223','qeqeq','Yes','Yes','Instagram',NULL,NULL,'2022-08-05 10:29:53','2022-08-05 10:29:53');
/*!40000 ALTER TABLE `appointment_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointment_time_master`
--

DROP TABLE IF EXISTS `appointment_time_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointment_time_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment_time_master`
--

LOCK TABLES `appointment_time_master` WRITE;
/*!40000 ALTER TABLE `appointment_time_master` DISABLE KEYS */;
INSERT INTO `appointment_time_master` VALUES (1,'09:00 AM'),(2,'09:30 AM'),(3,'10:00 AM'),(4,'10:30 AM'),(5,'11:00 AM'),(6,'11:30 AM'),(7,'12:00 PM'),(8,'12:30 PM'),(9,'1:00 PM'),(10,'1:30 PM'),(11,'2:00 PM'),(12,'2:30 PM'),(13,'3:00 PM'),(14,'3:30 PM'),(15,'4:00 PM'),(16,'4:30 PM'),(17,'5:00 PM');
/*!40000 ALTER TABLE `appointment_time_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_file_uploads`
--

DROP TABLE IF EXISTS `article_file_uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article_file_uploads` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `article` bigint unsigned DEFAULT NULL,
  `mime` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `original_filename` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `end_record` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `article_index12` (`article`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_file_uploads`
--

LOCK TABLES `article_file_uploads` WRITE;
/*!40000 ALTER TABLE `article_file_uploads` DISABLE KEYS */;
INSERT INTO `article_file_uploads` VALUES (1,1,'application/pdf','AWS Certified Cloud Practitioner.pdf','72613716011659989323_1.pdf',1,'2022-08-08 19:08:43','2022-08-09 12:41:59'),(2,1,'image/jpeg','1398439.jpg','46628103481659989323_1.jpg',0,'2022-08-08 19:08:43','2022-08-08 19:08:43'),(3,3,'application/pdf','AWS Certified Cloud Practitioner.pdf','46857506291660060829_3.pdf',0,'2022-08-09 15:00:29','2022-08-09 15:00:29'),(4,3,'image/jpeg','1398439.jpg','89196397421660060829_3.jpg',0,'2022-08-09 15:00:29','2022-08-09 15:00:29'),(5,4,'application/pdf','AWS Cloud Practitioner - Guide.pdf','46253378551660123974_4.pdf',0,'2022-08-10 08:32:54','2022-08-10 08:32:54'),(6,4,'image/jpeg','1398439.jpg','92002464751660123974_4.jpg',0,'2022-08-10 08:32:54','2022-08-10 08:32:54');
/*!40000 ALTER TABLE `article_file_uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `article_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `article_unique_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `record_no` bigint DEFAULT NULL,
  `article_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_short_description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `author` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_body` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `reference` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_created` date DEFAULT NULL,
  `averta` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_record` tinyint(1) DEFAULT '0',
  `article_submited_by_user_id` int unsigned DEFAULT NULL,
  `article_laste_edited_by_user_id` int unsigned DEFAULT NULL,
  `article_body_searchable` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `request_for_review` tinyint(1) DEFAULT '1',
  `last_request_for_review_date` datetime DEFAULT NULL,
  `review_status` int unsigned DEFAULT '3',
  `publish_status` int unsigned DEFAULT '3',
  `published_date` datetime DEFAULT NULL,
  `article_submited_at_date` datetime DEFAULT NULL,
  `article_laste_edited_at_date` datetime DEFAULT NULL,
  `article_comment_counter` int DEFAULT '0',
  `detected_by_ai` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`article_id`),
  UNIQUE KEY `article_unique_id_index` (`article_unique_id`),
  KEY `article_laste_edited_by_user_id_index` (`article_laste_edited_by_user_id`) USING BTREE,
  KEY `article_submited_by_user_id_index` (`article_submited_by_user_id`) USING BTREE,
  KEY `publish_status_index` (`publish_status`) USING BTREE,
  KEY `review_status_index` (`review_status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'FCN000001',1,'Kizz Daniel released from Tanzanian police custody',NULL,NULL,'<html><body><p>The Nigerians in Diaspora Commission has said that singer, Oluwatobiloba Anidugbe, popularly known as Kizz Daniel, has been released from police custody in Tanzania.</p><p><br></p><p><strong><em><u>A video that went viral on social media on Monday showed the moment </u></em></strong><a href=\"https://punchng.com/singer-kizz-daniel-arrested-in-tanzania/\" target=\"_blank\" style=\"color: red;\"><strong><em><u>Tanzanian authorities arrested the singer.</u></em></strong></a></p><p><strong><em><u>Although no official statement was issued by the authorities, The PUNCH learnt that the arrest may not be unconnected to the singer’s failure to perform at an event in the country.</u></em></strong></p><p><br></p><p><img src=\"/article_media/16599890100.png\"></p><p><br></p><p>Reacting, NiDCOM, in a tweet, revealed that the singer was being held at Oyster Bay Police Station Civil Police in Dar es Salaam, Tanzania.</p><p>“We are presently engaging our Mission and see what can be done. We will keep the public posted with our investigation. Thank you,” the Commission added.</p><p><br></p><p>Giving an update, NiDCOM said, “Kizz Daniel has been released. His legal team will, however, report back to the police tomorrow while he will subsequently return to Nigeria.”</p></body></html>',NULL,'2022-08-08 19:03:30','2022-08-09 13:45:35','2022-08-08','1_averta.jpeg',0,1,1,'The Nigerians in Diaspora Commission has said that singer, Oluwatobiloba Anidugbe, popularly known as Kizz Daniel, has been released from police custody in Tanzania.A video that went viral on social media on Monday showed the moment&nbsp;Tanzanian authorities arrested the singer.Although no official statement was&nbsp;issued by the authorities, The PUNCH learnt that the arrest may not be unconnected to the singer’s failure to perform at an event in the country.Reacting, NiDCOM, in a tweet, revealed that the singer was being held at Oyster Bay Police Station Civil Police in Dar es Salaam, Tanzania.“We are presently engaging our Mission and see what can be done. We will keep the public posted with our investigation. Thank you,” the Commission added.Giving an update, NiDCOM said, “Kizz Daniel has been released. His legal team will, however, report back to the police tomorrow while he will subsequently return to Nigeria.”',1,NULL,3,2,NULL,'2022-08-08 20:03:30','2022-08-08 20:08:42',0,0),(2,'FCN000002',2,'sdsasda',NULL,NULL,'<html><body><p>asdadadasads vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p></body></html>',NULL,'2022-08-09 12:28:00','2022-08-09 13:45:38','2022-08-18','balance.png',0,1,1,'asdadadasads vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv',1,NULL,3,3,NULL,'2022-08-09 13:28:00','2022-08-09 13:30:51',0,0),(3,'BLOG000003',3,'teerrrwwe',NULL,NULL,'<html><body><p>adfadadfdaddadada</p></body></html>',NULL,'2022-08-09 15:00:29','2022-08-10 08:41:15','2022-08-18','3_averta.jpg',0,2,2,'adfadadfdaddadada',1,NULL,3,2,NULL,'2022-08-09 16:00:29','2022-08-09 16:08:16',0,0),(4,'BLOG000004',4,'jsdhhdajdjabbbbbbbbb',NULL,NULL,'<html><body><p>hhadjjadjasd</p></body></html>',NULL,'2022-08-10 08:32:54','2022-08-10 08:39:35','2022-08-19','4_averta.jpg',0,2,2,'hhadjjadjasd',1,NULL,3,2,NULL,'2022-08-10 09:32:54','2022-08-10 09:33:45',0,0),(5,'BLOG000005',5,'pub adkdaja',NULL,NULL,'<html><body><p>tessssfsfsfsf</p></body></html>',NULL,'2022-08-10 08:38:46','2022-08-10 08:38:46','2022-08-10','balance.png',0,6,NULL,'tessssfsfsfsf',1,NULL,3,3,NULL,'2022-08-10 09:38:46',NULL,0,0);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` text,
  `clientornot` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES (1,'Adewale','Bello','belloadewalea@gmail.com','07014105464','testing the contact form','No, I\'m a current existing client','2022-06-26 15:30:52','2022-06-26 15:30:52'),(2,'Adewale','Bello','belloadewalea@gmail.com',NULL,'testing the contact form2','I\'m neither','2022-06-26 15:32:15','2022-06-26 15:32:15'),(3,'Dewale','Bello','belloadewalea@gmail.com',NULL,'testing','No, I\'m a current existing client','2022-06-26 15:34:37','2022-06-26 15:34:37'),(4,'asddas','acacda','dada@fsds.com','313131131','fadadfadfafqwe','No, I\'m a current existing client','2022-06-26 20:06:10','2022-06-26 20:06:10'),(5,'Adewale','Bello','belloadewalea@gmail.com','07014105464','testing 1234','I\'m neither','2022-06-27 07:59:19','2022-06-27 07:59:19'),(6,'Bello','Adewale','belloadewalea@gmail.com','07014105464','This is a sample test from the contact model form.','Yes, I am a potential new client','2022-06-27 09:32:19','2022-06-27 09:32:19'),(7,'Bello','Adewale','belloadewalea@gmail.com','9288292','hhdjjdjdjjddkdkdkdd','Yes, I am a potential new client','2022-06-27 09:57:33','2022-06-27 09:57:33'),(8,'Adewale','Bello','belloadewalea@gmail.com','92920393930','sdsdsdsdqedqeqweqwcvcvzcvz','Yes, I am a potential new client','2022-06-27 09:58:26','2022-06-27 09:58:26'),(9,'Adewale','Bello','belloadewalea@gmail.com','0200239303','kkdkdkdkdkdkdkdjddj','Yes, I am a potential new client','2022-06-27 12:15:31','2022-06-27 12:15:31'),(10,'bello','adewale','belloadewalea@gmail.com','131311','sdadaseqweqwe qwewqeqw','No, I\'m a current existing client','2022-06-27 12:30:23','2022-06-27 12:30:23'),(11,'snnsns','mmmssm','mmm@mdmd.com','222','kkdkdkd','Yes, I am a potential new client','2022-06-27 12:55:34','2022-06-27 12:55:34'),(12,'Bello','Adewale','belld@gmail.com','12121212','nndmdmdmdddndm','Yes, I am a potential new client','2022-06-27 13:10:36','2022-06-27 13:10:36'),(13,'Bello','Adewale','belld@gmail.com','12121212','nndmdmdmdddndm','Yes, I am a potential new client','2022-06-27 13:13:03','2022-06-27 13:13:03'),(14,'sasdasd','adadsa','sasa@gmsil.com','22222','djdjdkdkdkdkdkd','Yes, I am a potential new client','2022-06-27 13:14:47','2022-06-27 13:14:47'),(15,'Bello','Adewale','belloadewalea@gmail.com','090333','hhhhhhhhhhhhiiiii','No, I\'m a current existing client','2022-07-11 20:13:21','2022-07-11 20:13:21'),(16,'sdasda','asddsada','asdda@msnms.com','dadsdfdfasf','adcadfadffa','No, I\'m a current existing client','2022-08-03 12:30:50','2022-08-03 12:30:50'),(17,'bello','adewale','belloadewalea@gmail.com','09013131','mcadcadcadas','No, I\'m a current existing client','2022-08-08 18:46:48','2022-08-08 18:46:48');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_05_29_211227_laratrust_setup_tables',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `our_services`
--

DROP TABLE IF EXISTS `our_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `our_services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `icon` varchar(100) DEFAULT NULL,
  `url_link` varchar(100) DEFAULT NULL,
  `order` int DEFAULT NULL,
  `end_record` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `our_services`
--

LOCK TABLES `our_services` WRITE;
/*!40000 ALTER TABLE `our_services` DISABLE KEYS */;
INSERT INTO `our_services` VALUES (1,'Permanent Residency (“Green Card”)','<p>Lawful Permanent Residents</p>, or Green Card Holders, are noncitizens (foreign nationals) who have been lawfully permitted to live (and eligible to work) permanently in the United States. A lawful permanent resident is then issued a green card, also known as a permanent resident card, as a form of documentary proof of status. \nGenerally, the law provides multiple paths of admission for noncitizens to become legal permanent residents: this summary captures some of the paths: \nGreen Card through Family: As a U.S. citizen, you can help the following relatives become U.S. permanent residents: children, spouse, parents, and siblings. As a permanent resident, you can only help the following relatives become U.S. permanent residents: children and spouse. \nGreen Card through Employment: There are several ways to qualify to become permanent residents through employment-based immigration. After evaluating your case, you might be qualified under EB-1 visa, EB-2 visa, EB-3 visa, EB-4 visa, and EB-5 visa (immigrant investor).\nGreen Card through Refugee or Asylum: If you have been issued a visa based on asylum or refuge, you can apply for an adjustment of status to become a legal permanent resident after one year. \nGreen Card Through Religious Work: For a religious worker coming to the U.S. to work for a nonprofit organization, the organization can petition for him or her to receive a visa. Subsequently, s/he can apply for an adjustment of status to become a legal permanent resident. \n\nTalking to a lawyer, who can fiercely advocate on your behalf, is highly recommended. That is where my firm comes in, and you can count on my law firm to represent you diligently. Because of the complexity of this area of law, I provide different services to prospective clients. If you want a full package (end-to end processing), I will be happy to provide that. If you want a limited package, I will be happy to provide that as well. The advantage of hiring a lawyer is that you have a go-to person to advocate, represent and diligently counsel you at every step of the way, mitigating the inherent risks involved in your application. \n','icofont-group-students',NULL,NULL,0),(2,'Citizenship & Naturalization ','Naturalization is a process in which non-U.S. citizens, who were born out of the U.S., become American citizens. U.S. citizens. Prior to becoming a U.S. citizen, you must have had a Green Card for at least five (5) years, or for at least three (3) years if you’re filing as a spouse of a U.S. citizen. Every client is unique, so I provide a customized approach to your petition. The process of filing can be complicated, particularly for noncitizens who might have had life-changing events after obtaining their Green Cards.\n\nTalking to a lawyer, who can fiercely advocate on your behalf, is highly recommended. That is where my firm comes in, and you can count on my law firm to represent you diligently. The advantage of hiring a lawyer is that you have a go-to person to advocate, represent and diligently counsel you at every step of the way, mitigating the inherent risks involved in your application. \n','icofont-worker',NULL,NULL,0),(3,'Removal & Relief','Under the law, there are different forms of relief that are applicable to noncitizens who have been found to be removable. The applicability of relief is on a case-by-case basis. The burden is on a noncitizen to prove that s/he is eligible for relief under the law. Cancellation of removal is available to qualifying permanent residents and non-permanent residents. And there are different applicable standards for victims of domestic violence. When dealing with cases involving deportation, detention and bond hearings, and immigration appeals, time is of the essence. Don’t sleep on your rights. \n\nTalking to a lawyer, who can fiercely advocate on your behalf, is highly recommended. That is where my firm comes in, and you can count on my law firm to represent you diligently. The advantage of hiring a lawyer is that you have a go-to person to advocate, represent and diligently counsel you at every step of the way, mitigating the inherent risks involved in your application. ','icofont-building',NULL,NULL,0),(4,'Consular Practice','The U.S. Department of States, through its consulates, embassies, and other diplomatic posts worldwide, issues or denies visas to noncitizens. These visa application decisions are made by consular officers at the U.S. embassies and consulates around the world. Our Consular Practice is solely dedicated to providing bespoke services that are tailored to your unique needs:\n1. Recommending the best non-immigrant visa, based on your unique profile.\n2. Reviewing your initial application (DS-160), to ensure compliance.\n3. Providing sound legal advice/strategy on how to mitigate the inherent risks involved in seeking non-immigrant visas.\n4. Providing a second look at prior visa rejections, with recommendations on how to achieve your principal objective.\n5. One-hour of mocked interview/coaching prior to your next interview.\n6. Consular report of birth.\n7. Questions and issues surrounding the admission process provisions\n\nTalking to a lawyer, who can fiercely advocate on your behalf, is highly recommended. That is where my firm comes in, and you can count on my law firm to represent you diligently. The advantage of hiring a lawyer is that you have a go-to person to advocate, represent and diligently counsel you at every step of the way, mitigating the inherent risks involved in your application. \n','icofont-mining',NULL,NULL,0);
/*!40000 ALTER TABLE `our_services` ENABLE KEYS */;
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
INSERT INTO `password_resets` VALUES ('belloadewalea@gmail.com','$2y$10$8wUs1eOKeYmnmAQ6aOXirO8IKj0u1CN5YQU5cklbNgwo0KOfugMf2','2022-06-01 12:01:38');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(1,2),(3,2),(4,2),(5,2),(6,2),(8,2),(9,2),(10,2),(11,2),(1,3),(8,3),(10,3),(1,4),(8,4),(9,4),(10,4),(11,4);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_user` (
  `permission_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'can-view-dashboard','can-view-dashboard',NULL,NULL,NULL),(2,'can-view-dashboard-client','can view dashboard client',NULL,NULL,NULL),(3,'can-view-user-details','can view user details',NULL,NULL,NULL),(4,'can-edit-user-records','can edit user records',NULL,NULL,NULL),(5,'can-reset-user-password','can reset user password',NULL,NULL,NULL),(6,'can-delete-user','Can delete user',NULL,NULL,NULL),(7,'can-view-settings','Can view settings','the user with this permission can view the settings',NULL,'2022-06-24 15:02:53'),(8,'can-create-edit-posts','can create edit posts','can create edit posts','2022-06-24 15:08:31','2022-06-24 15:16:12'),(9,'can-delete-posts','can-delete-posts','can-delete-posts','2022-06-24 15:09:22','2022-06-24 15:09:22'),(10,'can-view-posts','can-view-posts','can-view-posts',NULL,NULL),(11,'can-publish-posts','can-publish-posts','can-publish-posts',NULL,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
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
-- Table structure for table `publis_status`
--

DROP TABLE IF EXISTS `publis_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publis_status` (
  `publish_status_id` int unsigned NOT NULL,
  `publish_status_name` varchar(255) DEFAULT NULL,
  `publish_status_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_colour` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publis_status`
--

LOCK TABLES `publis_status` WRITE;
/*!40000 ALTER TABLE `publis_status` DISABLE KEYS */;
INSERT INTO `publis_status` VALUES (1,'Not Published',NULL,NULL,'2019-06-26 05:12:45','red'),(2,'Published',NULL,NULL,'2019-05-11 05:50:45','green'),(3,'Pending',NULL,NULL,NULL,'orange');
/*!40000 ALTER TABLE `publis_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_status`
--

DROP TABLE IF EXISTS `review_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review_status` (
  `review_status_id` int unsigned NOT NULL,
  `review_status_name` varchar(255) DEFAULT NULL,
  `review_status_decription` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_colour` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_status`
--

LOCK TABLES `review_status` WRITE;
/*!40000 ALTER TABLE `review_status` DISABLE KEYS */;
INSERT INTO `review_status` VALUES (1,'Under Review',NULL,NULL,'2019-06-26 05:11:21','red'),(2,'Review Completed',NULL,NULL,'2019-05-11 05:51:05','green'),(3,'Pending',NULL,NULL,NULL,'orange');
/*!40000 ALTER TABLE `review_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_user` (
  `role_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1,'App\\Models\\User'),(1,4,'App\\Models\\User'),(1,5,'App\\Models\\User'),(2,3,'App\\Models\\User'),(3,2,'App\\Models\\User'),(4,6,'App\\Models\\User');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super_admin','Super Admin','Super Admin',NULL,NULL),(2,'admin','Admin','Admin',NULL,NULL),(3,'editor','Editor','Can create and edit posts. cannot publish and delete posts',NULL,'2022-06-23 09:56:24'),(4,'publisher','Publisher','can create, edit, delete, and publish posts',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `end_record` smallint DEFAULT '0',
  `phone_number1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` tinytext COLLATE utf8mb4_unicode_ci,
  `address2` tinytext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bello Adewale A','belloadewalea@gmail.com',NULL,'$2y$10$EOvC5.GwDyipLmf8aAyC4OlSY6hTtrUV3vH67Uh7BRnjkduK15q36',NULL,'2022-05-29 20:35:06','2022-06-24 14:40:08',0,'07014105464',NULL,'odomola Epe,LGA Lagos, Nigeria2',NULL),(2,'Editor user','editor@gmail.com',NULL,'$2y$10$0Yd4BVRwhg74Ja3a.rjRlutxiL4kQoPEM2mwOWkPFyko.krcuYWlW',NULL,'2022-06-01 11:59:48','2022-08-10 11:42:55',0,NULL,NULL,'a',NULL),(3,'Test Admin','admin@gmail.com',NULL,'$2y$10$0TqxaucIfAegIojCbHEHLupIbq3bJbxgX8Y.9bP68KBZ/4ah4F4rm',NULL,'2022-06-01 12:00:38','2022-08-10 21:05:07',0,NULL,NULL,NULL,NULL),(4,'Test Client3','test3@gmail.com',NULL,'$2y$10$H2VHG.KAdqi7C0C.N6pQQeXm7QDNd8VgrgW8QA0DeO6rOK2L1FJ2a',NULL,'2022-06-01 20:15:46','2022-08-10 11:47:11',0,NULL,NULL,NULL,NULL),(5,'Test4','test4@gmail.com',NULL,'$2y$10$BnTRk92edDNK5mYtomRfhu1HAobEM5q2MGHmUhdnnh2ui8sAWvs7u',NULL,'2022-06-22 19:28:04','2022-06-24 13:49:17',1,'07014105464',NULL,'Wuse Zone 2',NULL),(6,'Publisher','publisher@gmail.com',NULL,'$2y$10$3D/5hGQG3itNxxRKyBq6ne/pI2xaUhthrp7iIYMsXA/I5ZvX/Dx7a',NULL,'2022-06-22 19:33:40','2022-08-10 08:08:42',0,'07014105464',NULL,'Epe, Lagos, Nigeria',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `vw_permission_user`
--

DROP TABLE IF EXISTS `vw_permission_user`;
/*!50001 DROP VIEW IF EXISTS `vw_permission_user`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_permission_user` AS SELECT 
 1 AS `id`,
 1 AS `name`,
 1 AS `email`,
 1 AS `email_verified_at`,
 1 AS `password`,
 1 AS `remember_token`,
 1 AS `created_at`,
 1 AS `updated_at`,
 1 AS `end_record`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_user_roleuser_role`
--

DROP TABLE IF EXISTS `vw_user_roleuser_role`;
/*!50001 DROP VIEW IF EXISTS `vw_user_roleuser_role`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_user_roleuser_role` AS SELECT 
 1 AS `name`,
 1 AS `email`,
 1 AS `phone_number1`,
 1 AS `address1`,
 1 AS `end_record`,
 1 AS `role_display_name`,
 1 AS `role_description`,
 1 AS `role_name`,
 1 AS `user_id`,
 1 AS `role_id`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping routines for database 'aaflawfirm_db'
--

--
-- Final view structure for view `vw_permission_user`
--

/*!50001 DROP VIEW IF EXISTS `vw_permission_user`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_permission_user` AS select `users`.`id` AS `id`,`users`.`name` AS `name`,`users`.`email` AS `email`,`users`.`email_verified_at` AS `email_verified_at`,`users`.`password` AS `password`,`users`.`remember_token` AS `remember_token`,`users`.`created_at` AS `created_at`,`users`.`updated_at` AS `updated_at`,`users`.`end_record` AS `end_record` from ((`permissions` join `permission_user` on((`permission_user`.`permission_id` = `permissions`.`id`))) join `users` on((`permission_user`.`user_id` = `users`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_user_roleuser_role`
--

/*!50001 DROP VIEW IF EXISTS `vw_user_roleuser_role`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_user_roleuser_role` AS select `users`.`name` AS `name`,`users`.`email` AS `email`,`users`.`phone_number1` AS `phone_number1`,`users`.`address1` AS `address1`,`users`.`end_record` AS `end_record`,`roles`.`display_name` AS `role_display_name`,`roles`.`description` AS `role_description`,`roles`.`name` AS `role_name`,`users`.`id` AS `user_id`,`roles`.`id` AS `role_id` from ((`users` left join `role_user` on((`role_user`.`user_id` = `users`.`id`))) left join `roles` on((`role_user`.`role_id` = `roles`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-11 14:33:25
