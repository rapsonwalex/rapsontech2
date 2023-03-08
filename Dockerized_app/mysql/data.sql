-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: aaflawfirm_db
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

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
-- Table structure for table `article_file_uploads`
--

CREATE DATABASE IF NOT EXISTS `MYSQL_DATABASE`;
USE `MYSQL_DATABASE`;

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
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  UNIQUE KEY `article_unique_id_index` (`article_unique_id`),
  KEY `article_laste_edited_by_user_id_index` (`article_laste_edited_by_user_id`) USING BTREE,
  KEY `article_submited_by_user_id_index` (`article_submited_by_user_id`) USING BTREE,
  KEY `publish_status_index` (`publish_status`) USING BTREE,
  KEY `review_status_index` (`review_status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'FCN000001',1,'Kizz Daniel released from Tanzanian police custody',NULL,NULL,'<html><body><p>The Nigerians in Diaspora Commission has said that singer, Oluwatobiloba Anidugbe, popularly known as Kizz Daniel, has been released from police custody in Tanzania.</p><p><br></p><p><strong><em><u>A video that went viral on social media on Monday showed the moment </u></em></strong><a href=\"https://punchng.com/singer-kizz-daniel-arrested-in-tanzania/\" target=\"_blank\" style=\"color: red;\"><strong><em><u>Tanzanian authorities arrested the singer.</u></em></strong></a></p><p><strong><em><u>Although no official statement was issued by the authorities, The PUNCH learnt that the arrest may not be unconnected to the singer’s failure to perform at an event in the country.</u></em></strong></p><p><br></p><p><img src=\"/article_media/16599890100.png\"></p><p><br></p><p>Reacting, NiDCOM, in a tweet, revealed that the singer was being held at Oyster Bay Police Station Civil Police in Dar es Salaam, Tanzania.</p><p>“We are presently engaging our Mission and see what can be done. We will keep the public posted with our investigation. Thank you,” the Commission added.</p><p><br></p><p>Giving an update, NiDCOM said, “Kizz Daniel has been released. His legal team will, however, report back to the police tomorrow while he will subsequently return to Nigeria.”</p></body></html>',NULL,'2022-08-08 19:03:30','2022-08-09 13:45:35','2022-08-08','1_averta.jpeg',0,1,1,'The Nigerians in Diaspora Commission has said that singer, Oluwatobiloba Anidugbe, popularly known as Kizz Daniel, has been released from police custody in Tanzania.A video that went viral on social media on Monday showed the moment&nbsp;Tanzanian authorities arrested the singer.Although no official statement was&nbsp;issued by the authorities, The PUNCH learnt that the arrest may not be unconnected to the singer’s failure to perform at an event in the country.Reacting, NiDCOM, in a tweet, revealed that the singer was being held at Oyster Bay Police Station Civil Police in Dar es Salaam, Tanzania.“We are presently engaging our Mission and see what can be done. We will keep the public posted with our investigation. Thank you,” the Commission added.Giving an update, NiDCOM said, “Kizz Daniel has been released. His legal team will, however, report back to the police tomorrow while he will subsequently return to Nigeria.”',1,NULL,3,2,NULL,'2022-08-08 20:03:30','2022-08-08 20:08:42',0,0,NULL,NULL),(2,'FCN000002',2,'sdsasda',NULL,NULL,'<html><body><p>asdadadasads vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p></body></html>',NULL,'2022-08-09 12:28:00','2022-08-09 13:45:38','2022-08-18','balance.png',0,1,1,'asdadadasads vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv',1,NULL,3,3,NULL,'2022-08-09 13:28:00','2022-08-09 13:30:51',0,0,NULL,NULL),(3,'BLOG000003',3,'teerrrwwe',NULL,NULL,'<html><body><p>adfadadfdaddadada</p></body></html>',NULL,'2022-08-09 15:00:29','2022-08-10 08:41:15','2022-08-18','3_averta.jpg',0,2,2,'adfadadfdaddadada',1,NULL,3,2,NULL,'2022-08-09 16:00:29','2022-08-09 16:08:16',0,0,NULL,NULL),(4,'BLOG000004',4,'jsdhhdajdjabbbbbbbbb',NULL,NULL,'<html><body><p>hhadjjadjasd</p></body></html>','akinalaw.com','2022-08-10 08:32:54','2022-08-15 18:54:52','2022-08-19','4_averta.jpg',0,2,1,'hhadjjadjasd',1,NULL,3,2,NULL,'2022-08-10 09:32:54','2022-08-15 19:54:52',0,0,NULL,NULL),(5,'BLOG000005',5,'pub adkdaja',NULL,NULL,'<html><body><p>tessssfsfsfsf</p></body></html>','akinlaw.com bello daily','2022-08-10 08:38:46','2022-08-15 18:42:35','2022-08-10','balance.png',0,6,1,'tessssfsfsfsf',1,NULL,3,2,NULL,'2022-08-10 09:38:46','2022-08-15 19:42:03',0,0,NULL,NULL),(6,'BLOG000006',6,'test empty',NULL,NULL,'<html><body><p>The Law Office of Akintunde F. Adeyemo, PLLC is principally dedicated to immigration law, providing unparalleled immigration services to the immigrant community. With our client-centric approach, we fiercely advocate on behalf of immigrants.</p></body></html>',NULL,'2022-08-12 21:29:46','2022-08-12 21:29:55','2022-08-12','balance.png',0,1,NULL,'The Law Office of Akintunde F. Adeyemo, PLLC is principally dedicated to immigration law, providing unparalleled immigration services to the immigrant community. With our client-centric approach, we fiercely advocate on behalf of immigrants.',1,NULL,3,2,NULL,'2022-08-12 22:29:46',NULL,0,0,NULL,NULL),(7,'BLOG000007',7,'Paths to Permanent Resident (Green Card) Status for H-1B or/and F-1/F-2 Visa Holders',NULL,NULL,'<html><body><p><br></p><p>This post specifically discusses the best legal paths to permanent residency for H-1B visa holders, as well as F-1/F-2 visa holders, and the process of transitioning from an H-1B/F-1/F-2 into a permanent resident (Green Card) holder in the United States.</p><p> </p><p>An H-1B visa holder is a qualified nonimmigrant foreign national who is NOT a lawful permanent resident (i.e., a Green Card holder), but is allowed to reside in the United States and is permitted to perform services in a specialty occupation. As a matter of law, the H-1B visa holder can only work for the sponsoring employer (save for a concurrent H1-B petition); otherwise, the visa will be revoked. The H-1B visa holder can stay in the United States for up to six years (first, an initial period of three years, followed by an extension for an additional three years). Pursuant to the American Competitiveness in the Twenty-First Century Act [specifically sections 104(c) and 106(a); and 8 CFR 214.2(h)(13)(iii)(D) and (E)], some H-1B visa holders can extend their visa beyond the six-year period.</p><p> </p><p>Though the H-1B visa is a non-immigrant visa, the H-1B visa holder can have dual intent [see INA 214(h)], meaning that the H-1B visa holder (a non-immigrant) can apply for a Green Card (immigrant visa) through different paths.</p><p> </p><p>On the other hand, an F-1 visa is specifically designed for international students studying at certified and accredited American universities and colleges. Usually, the F-1 visa is issued for up to five (5) years, depending on the duration of the program; practically speaking, the F-1 visa holder can reside in the United States for the duration of the study as highlighted on the I-120 form [(9 FAM 402.5-5(B)]. Post-graduation, the Optional Practical Training (OPT) program allows the F-1 visa holder to remain in the US for 12 months.</p><p> </p><p>Some students — specifically those students in the fields of STEM [Science, Technology, Engineering and Mathematics] who have completed their STEM studies and an initial post-completion OPT — are eligible for an additional 24-month OPT extension that is directly related to their field of study (STEM OPT). Please make sure that your field of study is part of the government-approved list of STEM fields [9 FAM 402.5-5(N)(6)]. See the U.S. Department of Homeland Security STEM-designated degree program list. A beneficiary may possess a bachelor’s, or master’s or doctoral degree.<strong> </strong></p><p> </p><p>Separately, an F-2 visa is a type of non-immigrant visa that allows dependents (spouse and unmarried minor children – under age 21) of F-1 student visa holders to move to, and reside legally in, the United States. The validity of the F-2 visa is dependent on the validity of the F-1 visa.</p><p> </p><p>All of the above-mentioned visas are non-immigrant visas, meaning that there are statutory and regulatory restrictions that limit your activities in the United States. In other words, you are entering the United States for a specific purpose, whether to study for a certain period of time, or to temporarily perform certain services.</p><p> </p><p>On the other hand, immigrant visas are specifically issued to foreign nationals who intend to live and work permanently in the United States. They are granted permanent residency (Green Cards). For the rest of this article, I will focus on the legal paths to becoming a permanent resident (Green Card holder) for the above-mentioned non-immigrant visas.</p><p> </p><p>For those who are already in the United States (H-1B or/and F-1/F-2 visa holders), you should consider this legal permanent residency option: employment-based (EB) visa.</p><p> </p><p>Depending on your credentials, you may be qualified under EB-1A, which is for people with extraordinary ability, or EB-2 (National Interest Waiver – NIW), which is for people with advanced degrees or exceptional ability. If you have a first degree only, with five (years) of progressive experience, that is equivalent to a master’s degree. If you are currently pursuing your master’s degree in the United States, then consider this option, but you must have had 5 years of progressive in the field (you are using the post-baccalaureate experience here, for you can’t use your ongoing master’s program to qualify: the degree must have been earned at the time of filing).</p><p> </p><p>Contrastingly, if you are currently enrolled in a doctoral program, you may be eligible, for you would have earned an advanced degree (master’s) at the time of filing, and your current academic pursuit will be used to support another element of the controlling law: Matter of Dhanasar, 26 I&amp;N Dec. 884 (AAO 2016), overruling Matter of New York State Dep’t of Transp. [NYSDOT], 22 I&amp;N Dec. 215 (Acting Assoc. Comm’r 1998).</p><p> </p><p>If you are on OPT/STEM OPT (post-baccalaureate), you should consider these options, too.</p><p> </p><p>Furthermore, if you are one of those H-1B visa holders — and even if your current employer is filing permanent employment (PERM) labor certification, also known as EB-2 PERM, which is a laborious process that goes through the U.S. Department of Labor — you can still file EB-2 NIW or EB-1A. Yes, concurrent filings are allowed.</p><p> </p><p> </p><p>Why should you consider EB-2 (NIW) or EB-1A? With EB-2 PERM filed by your current employer, you have to worry about transferring your EB-2 petition from your old employer to a new employer. With your H-1B visa, too, your destiny is tied to your current employer, save for certain exceptions. A lot of uncertainties can put your career on hold.</p><p> </p><p>With EB-2 (NIW)/EB-1A, however, you have the liberty to work for any employers. With EB-2-(NIW)/EB-1A, you do not need an employer to sponsor you, and you do not need a job offer (of course, your current employment will show that you are well positioned to advance the proposed endeavor). Both applicants can self-petition. Also, with EB-2 (NIW), you do not need a lengthy labor certification, which my law firm also does, but you must satisfy a three-prong test formulated in the above-cited precedent case.</p><p> </p><p>Finally, every case is unique. There is no one-size-fits-all strategy. My current clients are uniquely different. I create a uniquely tailored strategy for each client, applying the law to his/her unique profile, resulting in a petition memorandum that addresses all the nuances. Still, depending on your profile, I find the following evidence, while not outcome determinative, persuasive: recommendation letters, citations, publications, media reports, presentations (conferences and seminars), peer reviews, past achievements, etc. Again, these are not statutory requirements; so, for a free (personalized) eligibility evaluation, reach out to my law firm.</p><p> </p><p>And you can count on my law firm to represent you diligently. I bring the same level of agility, problem-solving skills, and creativity, which I used to solve complex problems in the business world, to my firm. To the extent possible under the law, I will provide you with unparalleled legal services.</p><p> </p><p> </p><p> </p><p>Wherever you are on your immigration journey, my law firm will be happy to represent you.</p><p> </p><p> </p><p> </p><p>For a free (100%) case evaluation, contact the attorney-in-charge of The Law Office of Akintunde F Adeyemo, PLLC:</p><p> </p><p> </p><p> </p><p>Akintunde F. Adeyemo, Esq.</p><p> </p><p>Attorney, Counselor &amp; Solicitor</p><p> </p><p>734-318-7053 (Call, Text, Including WhatsApp)</p><p> </p><p>Website: www.akinalaw.com</p><p> </p><p>Email address: info@akinalaw.com</p><p> </p><p> </p><p> </p><p>Please include your updated resume/CV in the email. If you do not have an updated resume, indicate whether you have advanced degrees (or a first degree, with 5 years of progressive post-baccalaureate work in the same field).</p><p> </p><p> </p><p> </p><p>The information in this article is for general information purposes only. Nothing in this post should be taken as legal advice for any individual case or situation. This information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.</p><p> </p><p> </p><p> </p><p>***Attorney Advertising***</p></body></html>',NULL,'2022-12-04 19:56:27','2022-12-04 20:42:24','2022-12-04','balance.png',0,1,1,'This post specifically discusses the best legal paths to permanent residency for H-1B visa holders, as well as F-1/F-2 visa holders, and the process of transitioning from an H-1B/F-1/F-2 into a permanent resident (Green Card) holder in the United States.&nbsp;An H-1B visa holder is a qualified nonimmigrant foreign national who is NOT a lawful permanent resident (i.e., a Green Card holder), but is allowed to reside in the United States and is permitted to perform services in a specialty occupation. As a matter of law, the H-1B visa holder can only work for the sponsoring employer (save for a concurrent H1-B petition); otherwise, the visa will be revoked. The H-1B visa holder can stay in the United States for up to six years (first, an initial period of three years, followed by an extension for an additional three years). Pursuant to the American Competitiveness in the Twenty-First Century Act [specifically sections 104(c) and 106(a); and 8 CFR 214.2(h)(13)(iii)(D) and (E)], some H-1B visa holders can extend their visa beyond the six-year period.&nbsp;Though the H-1B visa is a non-immigrant visa, the H-1B visa holder can have dual intent [see INA 214(h)], meaning that the H-1B visa holder (a non-immigrant) can apply for a Green Card (immigrant visa) through different paths.&nbsp;On the other hand, an F-1 visa is specifically designed for international students studying at certified and accredited American universities and colleges. Usually, the F-1 visa is issued for up to five (5) years, depending on the duration of the program; practically speaking, the F-1 visa holder can reside in the United States for the duration of the study as highlighted on the I-120 form [(9 FAM 402.5-5(B)]. Post-graduation, the Optional Practical Training (OPT) program allows the F-1 visa holder to remain in the US for 12 months.&nbsp;Some students — specifically those students in the fields of STEM [Science, Technology, Engineering and Mathematics] who have completed their STEM studies and an initial post-completion OPT — are eligible for an additional 24-month OPT extension that is directly related to their field of study (STEM OPT). Please make sure that your field of study is part of the government-approved list of STEM fields [9 FAM 402.5-5(N)(6)]. See the U.S. Department of Homeland Security STEM-designated degree program list. A beneficiary may possess a bachelor’s, or master’s or doctoral degree. &nbsp;Separately, an F-2 visa is a type of non-immigrant visa that allows dependents (spouse and unmarried minor children – under age 21) of F-1 student visa holders to move to, and reside legally in, the United States. The validity of the F-2 visa is dependent on the validity of the F-1 visa.&nbsp;All of the above-mentioned visas are non-immigrant visas, meaning that there are statutory and regulatory restrictions that limit your activities in the United States. In other words, you are entering the United States for a specific purpose, whether to study for a certain period of time, or to temporarily perform certain services.&nbsp;On the other hand, immigrant visas are specifically issued to foreign nationals who intend to live and work permanently in the United States. They are granted permanent residency (Green Cards). For the rest of this article, I will focus on the legal paths to becoming a permanent resident (Green Card holder) for the above-mentioned non-immigrant visas.&nbsp;For those who are already in the United States (H-1B or/and F-1/F-2 visa holders), you should consider this legal permanent residency option: employment-based (EB) visa.&nbsp;Depending on your credentials, you may be qualified under EB-1A, which is for people with extraordinary ability, or EB-2 (National Interest Waiver – NIW), which is for people with advanced degrees or exceptional ability. If you have a first degree only, with five (years) of progressive experience, that is equivalent to a master’s degree. If you are currently pursuing your master’s degree in the United States, then consider this option, but you must have had 5 years of progressive in the field (you are using the post-baccalaureate experience here, for you can’t use your ongoing master’s program to qualify: the degree must have been earned at the time of filing).&nbsp;Contrastingly, if you are currently enrolled in a doctoral program, you may be eligible, for you would have earned an advanced degree (master’s) at the time of filing, and your current academic pursuit will be used to support another element of the controlling law: Matter of Dhanasar, 26 I&amp;N Dec. 884 (AAO 2016), overruling Matter of New York State Dep’t of Transp. [NYSDOT], 22 I&amp;N Dec. 215 (Acting Assoc. Comm’r 1998).&nbsp;If you are on OPT/STEM OPT (post-baccalaureate), you should consider these options, too.&nbsp;Furthermore, if you are one of those H-1B visa holders — and even if your current employer is filing permanent employment (PERM) labor certification, also known as EB-2 PERM, which is a laborious process that goes through the U.S. Department of Labor — you can still file EB-2 NIW or EB-1A. Yes, concurrent filings are allowed.&nbsp;&nbsp;Why should you consider EB-2 (NIW) or EB-1A? With EB-2 PERM filed by your current employer, you have to worry about transferring your EB-2 petition from your old employer to a new employer. With your H-1B visa, too, your destiny is tied to your current employer, save for certain exceptions. A lot of uncertainties can put your career on hold.&nbsp;With EB-2 (NIW)/EB-1A, however, you have the liberty to work for any employers. With EB-2-(NIW)/EB-1A, you do not need an employer to sponsor you, and you do not need a job offer (of course, your current employment will show that you are well positioned to advance the proposed endeavor). Both applicants can self-petition. Also, with EB-2 (NIW), you do not need a lengthy labor certification, which my law firm also does, but you must satisfy a three-prong test formulated in the above-cited precedent case.&nbsp;Finally, every case is unique. There is no one-size-fits-all strategy. My current clients are uniquely different. I create a uniquely tailored strategy for each client, applying the law to his/her unique profile, resulting in a petition memorandum that addresses all the nuances. Still, depending on your profile, I find the following evidence, while not outcome determinative, persuasive: recommendation letters, citations, publications, media reports, presentations (conferences and seminars), peer reviews, past achievements, etc. Again, these are not statutory requirements; so, for a free (personalized) eligibility evaluation, reach out to my law firm.&nbsp;And you can count on my law firm to represent you diligently. I bring the same level of agility, problem-solving skills, and creativity, which I used to solve complex problems in the business world, to my firm. To the extent possible under the law, I will provide you with unparalleled legal services.&nbsp;&nbsp;&nbsp;Wherever you are on your immigration journey, my law firm will be happy to represent you.&nbsp;&nbsp;&nbsp;For a free (100%) case evaluation, contact the attorney-in-charge of The Law Office of Akintunde F Adeyemo, PLLC:&nbsp;&nbsp;&nbsp;Akintunde F. Adeyemo, Esq.&nbsp;Attorney, Counselor &amp; Solicitor&nbsp;734-318-7053 (Call, Text, Including WhatsApp)&nbsp;Website: www.akinalaw.com&nbsp;Email address: info@akinalaw.com&nbsp;&nbsp;&nbsp;Please include your updated resume/CV in the email. If you do not have an updated resume, indicate whether you have advanced degrees (or a first degree, with 5 years of progressive post-baccalaureate work in the same field).&nbsp;&nbsp;&nbsp;The information in this article is for general information purposes only. Nothing in this post should be taken as legal advice for any individual case or situation. This information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.&nbsp;&nbsp;&nbsp;***Attorney Advertising***',1,NULL,3,2,NULL,'2022-12-04 20:56:27','2022-12-04 21:18:05',0,0,'n H-1B visa holder is a qualified nonimmigrant foreign national','n H-1B visa holder is a qualified nonimmigrant foreign national who is NOT'),(8,'BLOG000008',8,'Asylum Application Process',NULL,NULL,'<html><body><p><br></p><p>In the United States, an application for asylum is adjudicated under the specific procedural requirements of the Immigration and Nationality Act (INA).</p><p> </p><p>While an asylum applicant must satisfy the definition of a refugee, unlike a refugee applicant, the asylum applicant must be physically present in the United States to apply for asylum. The asylum applicant must establish a credible fear of persecution or torture.</p><p> </p><p>The burden of establishing past or a well-founded fear of persecution rests with the asylum applicant. The applicant must show that s/he has been persecuted in the country of origin or has a well-founded fear of persecution on account of <strong>race</strong>, <strong>religion</strong>, <strong>nationality</strong>, membership in a particular <strong>social group</strong>, or <strong>political opinion</strong> if returned to the country.</p><p> </p><p>There are criteria for determining eligibility for asylum (i.e., the standard of a well-founded fear of persecution), as well as certain presumptions (for instance, persons who have been forced to abort a pregnancy or undergo involuntary sterilization; a person who has been subjected to coercive family-planning practices, pursuant to INA § 101(a)(42)).</p><p> </p><p>If you have an asylum case (as indicated above, you must be PHYSICALLY PRESENT in the United States), my firm can assist you with preparing your asylum application package, declaration, asylum Form I-589, country conditions and human rights reports (U.S. Department of State Country Report on Human Rights Practices in your country), sworn affidavits, corroborating evidence (evidence showing the applicant suffered past persecution, including photographs, police reports, arrest records, medical and mental health records, medical or psychological evaluations, newspaper or media coverage of events, etc.) and other supporting documents.</p><p> </p><p>My firm will represent you throughout the ENTIRE process, including mock interviews and preparation of an oral and written closing statement during the interview.</p><p> </p><p>Please contact the attorney in charge of The Law Office of Akintunde F Adeyemo, PLLC:</p><p> </p><p>Akintunde F. Adeyemo, Esq.</p><p>Attorney, Counselor &amp; Solicitor</p><p>734-318-7053 (Call, Text, Including WhatsApp)</p><p>Email address: info@akinalaw.com</p><p> </p><p>To learn more about other immigration solutions, visit: <a href=\"http://www.akinalaw.com\" target=\"_blank\">www.akinalaw.com</a></p><p> </p><p> </p><p>The information in this article is for general information purposes only. Nothing in this post should be taken as legal advice for any individual case or situation. This information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.</p><p> </p><p>*Attorney advertisement*</p><p> </p></body></html>',NULL,'2022-12-05 06:33:11','2022-12-05 06:33:11','2022-12-05','balance.png',0,1,NULL,'In the United States, an application for asylum is adjudicated under the specific procedural requirements of the Immigration and Nationality Act (INA).&nbsp;While an asylum applicant must satisfy the definition of a refugee, unlike a refugee applicant, the asylum applicant must be physically present in the United States to apply for asylum. The asylum applicant must establish a credible fear of persecution or torture.&nbsp;The burden of establishing past or a well-founded fear of persecution rests with the asylum applicant. The applicant must show that s/he has been persecuted in the country of origin or has a well-founded fear of persecution on account of race, religion, nationality, membership in a particular social group, or political opinion if returned to the country.&nbsp;There are criteria for determining eligibility for asylum (i.e., the standard of a well-founded fear of persecution), as well as certain presumptions (for instance, persons who have been forced to abort a pregnancy or undergo involuntary sterilization; a person who has been subjected to coercive family-planning practices, pursuant to INA § 101(a)(42)).&nbsp;If you have an asylum case (as indicated above, you must be PHYSICALLY PRESENT in the United States), my firm can assist you with preparing your asylum application package, declaration, asylum Form I-589, country conditions and human rights reports (U.S. Department of State Country Report on Human Rights Practices in your country), sworn affidavits, corroborating evidence (evidence showing the applicant suffered past persecution, including photographs, police reports, arrest records, medical and mental health records, medical or psychological evaluations, newspaper or media coverage of events, etc.) and other supporting documents.&nbsp;My firm will represent you throughout the ENTIRE process, including mock interviews and preparation of an oral and written closing statement during the interview.&nbsp;Please contact the attorney in charge of The Law Office of Akintunde F Adeyemo, PLLC:&nbsp;Akintunde F. Adeyemo, Esq.Attorney, Counselor &amp; Solicitor734-318-7053 (Call, Text, Including WhatsApp)Email address: info@akinalaw.com&nbsp;To learn more about other immigration solutions, visit: www.akinalaw.com&nbsp;&nbsp;The information in this article is for general information purposes only. Nothing in this post should be taken as legal advice for any individual case or situation. This information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.&nbsp;*Attorney advertisement*&nbsp;',1,NULL,3,3,NULL,'2022-12-05 07:33:10',NULL,0,0,'In the United States, an application for asylum is adjudicated under the specific procedural requirements of the Immigration and Nationality Act (INA).','In the United States, an application for asylum is adjudicated under the specific procedural require');
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
  `first_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `clientornot` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES (1,'Adewale','Bello','belloadewalea@gmail.com','07014105464','testing the contact form','No, I\'m a current existing client','2022-06-26 15:30:52','2022-06-26 15:30:52'),(2,'Adewale','Bello','belloadewalea@gmail.com',NULL,'testing the contact form2','I\'m neither','2022-06-26 15:32:15','2022-06-26 15:32:15'),(3,'Dewale','Bello','belloadewalea@gmail.com',NULL,'testing','No, I\'m a current existing client','2022-06-26 15:34:37','2022-06-26 15:34:37'),(4,'asddas','acacda','dada@fsds.com','313131131','fadadfadfafqwe','No, I\'m a current existing client','2022-06-26 20:06:10','2022-06-26 20:06:10'),(5,'Adewale','Bello','belloadewalea@gmail.com','07014105464','testing 1234','I\'m neither','2022-06-27 07:59:19','2022-06-27 07:59:19'),(6,'Bello','Adewale','belloadewalea@gmail.com','07014105464','This is a sample test from the contact model form.','Yes, I am a potential new client','2022-06-27 09:32:19','2022-06-27 09:32:19'),(7,'Bello','Adewale','belloadewalea@gmail.com','9288292','hhdjjdjdjjddkdkdkdd','Yes, I am a potential new client','2022-06-27 09:57:33','2022-06-27 09:57:33'),(8,'Adewale','Bello','belloadewalea@gmail.com','92920393930','sdsdsdsdqedqeqweqwcvcvzcvz','Yes, I am a potential new client','2022-06-27 09:58:26','2022-06-27 09:58:26'),(9,'Adewale','Bello','belloadewalea@gmail.com','0200239303','kkdkdkdkdkdkdkdjddj','Yes, I am a potential new client','2022-06-27 12:15:31','2022-06-27 12:15:31'),(10,'bello','adewale','belloadewalea@gmail.com','131311','sdadaseqweqwe qwewqeqw','No, I\'m a current existing client','2022-06-27 12:30:23','2022-06-27 12:30:23'),(11,'snnsns','mmmssm','mmm@mdmd.com','222','kkdkdkd','Yes, I am a potential new client','2022-06-27 12:55:34','2022-06-27 12:55:34'),(12,'Bello','Adewale','belld@gmail.com','12121212','nndmdmdmdddndm','Yes, I am a potential new client','2022-06-27 13:10:36','2022-06-27 13:10:36'),(13,'Bello','Adewale','belld@gmail.com','12121212','nndmdmdmdddndm','Yes, I am a potential new client','2022-06-27 13:13:03','2022-06-27 13:13:03'),(14,'sasdasd','adadsa','sasa@gmsil.com','22222','djdjdkdkdkdkdkd','Yes, I am a potential new client','2022-06-27 13:14:47','2022-06-27 13:14:47'),(15,'Bello','Adewale','belloadewalea@gmail.com','090333','hhhhhhhhhhhhiiiii','No, I\'m a current existing client','2022-07-11 20:13:21','2022-07-11 20:13:21'),(16,'sdasda','asddsada','asdda@msnms.com','dadsdfdfasf','adcadfadffa','No, I\'m a current existing client','2022-08-03 12:30:50','2022-08-03 12:30:50'),(17,'bello','adewale','belloadewalea@gmail.com','09013131','mcadcadcadas','No, I\'m a current existing client','2022-08-08 18:46:48','2022-08-08 18:46:48'),(18,'asdasd','sdsada','asdad@gmail.com','dadasd','axczxcz','Yes, I am a potential new client','2022-08-13 09:35:12','2022-08-13 09:35:12'),(19,'APi','Bello','api@gmail.com','080778383','testing the API','yes','2022-08-13 12:09:56','2022-08-13 12:09:56'),(20,'Bello API','Adewale','bello@gmail.com','09088383','Hi there API','yes','2022-08-13 13:10:44','2022-08-13 13:10:44'),(21,'Bello API','Adewale','bello@gmail.com','09088383','Hi there API','yes','2022-08-13 13:11:45','2022-08-13 13:11:45'),(22,'Bello','Adewale','belloadewalea@gmail.com','testing','testing API','Yes, I am a potential new client','2022-08-13 14:51:12','2022-08-13 14:51:12'),(23,'bello','Adewale','belloadewalea@gmail.com','0909880','Testing API','Yes, I am a potential new client','2022-08-13 14:53:31','2022-08-13 14:53:31'),(24,'Bello API','postman','bello@gmail.com','089990099',NULL,'yes','2022-08-13 15:28:52','2022-08-13 15:28:52'),(25,'Bello API','postman','bello@gmail.com','089990099',NULL,'yes','2022-08-13 15:35:00','2022-08-13 15:35:00'),(26,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-13 15:36:01','2022-08-13 15:36:01'),(27,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 15:37:24','2022-08-13 15:37:24'),(28,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-13 15:38:24','2022-08-13 15:38:24'),(29,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 15:40:07','2022-08-13 15:40:07'),(30,NULL,NULL,NULL,NULL,NULL,NULL,'2022-08-13 15:41:07','2022-08-13 15:41:07'),(31,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 15:44:35','2022-08-13 15:44:35'),(32,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 15:47:21','2022-08-13 15:47:21'),(33,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 15:49:38','2022-08-13 15:49:38'),(34,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 15:54:31','2022-08-13 15:54:31'),(35,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 15:57:48','2022-08-13 15:57:48'),(36,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 16:08:27','2022-08-13 16:08:27'),(37,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 16:10:28','2022-08-13 16:10:28'),(38,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 16:16:32','2022-08-13 16:16:32'),(39,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 16:27:22','2022-08-13 16:27:22'),(40,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 16:29:41','2022-08-13 16:29:41'),(41,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 16:56:44','2022-08-13 16:56:44'),(42,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:01:06','2022-08-13 17:01:06'),(43,'Bello API','postman','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:03:10','2022-08-13 17:03:10'),(44,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:06:34','2022-08-13 17:06:34'),(45,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:07:04','2022-08-13 17:07:04'),(46,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:08:32','2022-08-13 17:08:32'),(47,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:16:06','2022-08-13 17:16:06'),(48,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:16:52','2022-08-13 17:16:52'),(49,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:23:16','2022-08-13 17:23:16'),(50,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:24:07','2022-08-13 17:24:07'),(51,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:26:54','2022-08-13 17:26:54'),(52,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:34:46','2022-08-13 17:34:46'),(53,'Bello','Adewale','belloadewalea@gmail.com','09090','API test','No, I\'m a current existing client','2022-08-13 17:41:34','2022-08-13 17:41:34'),(54,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:45:17','2022-08-13 17:45:17'),(55,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 17:53:13','2022-08-13 17:53:13'),(56,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:09:46','2022-08-13 18:09:46'),(57,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:24:38','2022-08-13 18:24:38'),(58,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:26:47','2022-08-13 18:26:47'),(59,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:37:31','2022-08-13 18:37:31'),(60,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:38:56','2022-08-13 18:38:56'),(61,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:40:17','2022-08-13 18:40:17'),(62,'Bello API','postman2','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:42:46','2022-08-13 18:42:46'),(63,'Bello API3','postman3','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:48:32','2022-08-13 18:48:32'),(64,'Bello API3','postman3','bello@gmail.com','089990099','testing from postman','yes','2022-08-13 18:51:53','2022-08-13 18:51:53'),(65,'Bello','Adewale','belloadewalea@gmail.com','0901234531','Testing API','Yes, I am a potential new client','2022-08-13 19:02:28','2022-08-13 19:02:28'),(66,'Bello','Adewale','belloadewalea@gmail.com','07014105464','This is an API test from me, Bello','Yes, I am a potential new client','2022-08-13 19:23:39','2022-08-13 19:23:39'),(67,'Bello','Adewale','belloadewalea@gmail.com','07014105464','API test, all should show now','Yes, I am a potential new client','2022-08-13 19:36:43','2022-08-13 19:36:43'),(68,'Bello','Adewale','belloadewalea@gmail.com','07014105464','All should show now. API TEST','Yes, I am a potential new client','2022-08-13 19:55:35','2022-08-13 19:55:35'),(69,'Bello','Adewale','belloadewalea@gmail.com','07014105464','This should work fine now. TESTING THE API','Yes, I am a potential new client','2022-08-13 20:27:20','2022-08-13 20:27:20'),(70,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Can you see this? testing the API','Yes, I am a potential new client','2022-08-13 20:31:03','2022-08-13 20:31:03'),(71,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Work still in progress. Testing the API','Yes, I am a potential new client','2022-08-13 20:35:36','2022-08-13 20:35:36'),(72,'Bello','Adewale','belloadewalea@gmail.com','07014104565','testin API','Yes, I am a potential new client','2022-08-13 20:51:50','2022-08-13 20:51:50'),(73,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Still testing. API TEST','Yes, I am a potential new client','2022-08-13 20:58:12','2022-08-13 20:58:12'),(74,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Still Testing the API','Yes, I am a potential new client','2022-08-13 21:06:18','2022-08-13 21:06:18'),(75,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the feedback msg','Yes, I am a potential new client','2022-08-13 21:25:45','2022-08-13 21:25:45'),(76,'bello','Adewale','belloadewalea@gmail.com','07014105464','working on the API','Yes, I am a potential new client','2022-08-16 08:37:16','2022-08-16 08:37:16'),(77,'Bello','Adewale','belloadewalea@gmail.com','07014105464','testing the API','No, I\'m a current existing client','2022-08-16 08:42:16','2022-08-16 08:42:16'),(78,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 08:44:42','2022-08-16 08:44:42'),(79,'Bello','Adewale','belloadewalea@gmail.com','07014105464','TESTING THE API','Yes, I am a potential new client','2022-08-16 08:50:02','2022-08-16 08:50:02'),(80,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 08:55:35','2022-08-16 08:55:35'),(81,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 08:58:03','2022-08-16 08:58:03'),(82,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 09:08:05','2022-08-16 09:08:05'),(83,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 09:19:03','2022-08-16 09:19:03'),(84,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 09:22:44','2022-08-16 09:22:44'),(85,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 09:24:12','2022-08-16 09:24:12'),(86,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 09:25:32','2022-08-16 09:25:32'),(87,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 09:31:11','2022-08-16 09:31:11'),(88,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 09:31:43','2022-08-16 09:31:43'),(89,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API','Yes, I am a potential new client','2022-08-16 11:46:28','2022-08-16 11:46:28'),(90,'Bello','Adewale','belloadewalea@gmail.com','07014105464','Testing the API from my local machine.','Yes, I am a potential new client','2022-08-16 12:51:03','2022-08-16 12:51:03'),(91,'bello','adewale','belloadewalea@gmail.com','07014105464','test','Yes, I am a potential new client','2022-10-31 21:04:34','2022-10-31 21:04:34'),(92,'bello','adewale','belloadewalea@gmail.com','07014105464','test22222222222222222222222222222222','Yes, I am a potential new client','2022-10-31 21:08:27','2022-10-31 21:08:27');
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
INSERT INTO `password_resets` VALUES ('belloadewalea@gmail.com','$2y$10$eYOHIsarA2VGwxkxuO9bO.YwF30hT8GQfHW.JLP/GXdyxWGXMGPAm','2022-12-05 14:01:34');
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
  `publish_status_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `publish_status_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_colour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `review_status_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `review_status_decription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_colour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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

-- Dump completed on 2023-03-04 21:41:17
