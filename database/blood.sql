-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: blood
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` text NOT NULL,
  `admin_name` text NOT NULL,
  `admin_title` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_image` varchar(5000) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (2,'mohamed20','mohamed','manager','123','2.jpg'),(5,'mariam20','mariam','manager','123','3.jpg'),(6,'aisha20','Aisha Salah','Admin','12345','3.jpg');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `application` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_nid` int(13) NOT NULL,
  `app_fname` text NOT NULL,
  `app_phone` int(11) NOT NULL,
  `app_job` varchar(255) NOT NULL,
  `app_age` int(11) NOT NULL,
  `app_image` varchar(5000) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application`
--

LOCK TABLES `application` WRITE;
/*!40000 ALTER TABLE `application` DISABLE KEYS */;
INSERT INTO `application` VALUES (4,300213333,'Aisha',1111372814,'Doctor',25,'3.jpg'),(5,2147483647,'Ganna Adel',1111372814,'Nurse',25,'3.jpg'),(6,2147483647,'Ahmed',126535885,'Doctor',50,'2.jpg'),(7,2147483647,'Mohamed',1112594703,'Doctor',36,'2.jpg'),(8,2147483647,'Menna Ashraf',152359595,'Nurse',27,'3.jpg'),(9,2147483647,'Mennatullah Khaled',1256599555,'Doctor',32,'3.jpg'),(10,2147483647,'Mahmoud',126569699,'Doctor',25,'2.jpg'),(11,2147483647,'aisha',1112594704,'dictor',24,'57357.jpg');
/*!40000 ALTER TABLE `application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_name` text NOT NULL,
  `message_email` varchar(255) NOT NULL,
  `message_content` varchar(255) NOT NULL,
  `message_phone` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES (6,'Ahmed Salah','ahmedsallaahh@gmail.com','Thank You',1111372814),(7,'mennatullahkhaled','Mennatullahkhaled@gmail.com','Good Experience',125635899),(8,'Aya Sayed','Aya@gmail.com','Where?',1269359995),(9,'Menna Ashraf','Mennaashraf@gmail.com','Help',1133695959),(10,'Raghad Hassan','raghad@gmail.com','Thankss',12659599),(11,'Raghad Hassan','raghad@gmail.com','Thankss',12659599),(12,'Ganaa','Ganaa@gmail.com','Thank Youuu',1111372814),(13,'Nour Yasser','Nour@gmail.com','Hello',1112594704),(14,'Nora','Nora@gmail.com','Hello',126598596),(16,'aisha','aisha@gmail.com','hello',1112594704);
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donator`
--

DROP TABLE IF EXISTS `donator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donator` (
  `donator_id` int(11) NOT NULL AUTO_INCREMENT,
  `national_id` int(11) NOT NULL,
  `donator_name` varchar(255) NOT NULL,
  `donator_phone` int(11) NOT NULL,
  `donator_age` int(11) NOT NULL,
  `donator_address` varchar(255) NOT NULL,
  `donate_location` varchar(255) NOT NULL,
  `blood_type` text NOT NULL,
  `donator_diseases` varchar(255) NOT NULL,
  `donator_gender` text NOT NULL,
  PRIMARY KEY (`donator_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donator`
--

LOCK TABLES `donator` WRITE;
/*!40000 ALTER TABLE `donator` DISABLE KEYS */;
INSERT INTO `donator` VALUES (13,2147483647,'Ahmed Salah',1111372814,55,'New cairo','Home','B-','No','male'),(14,2147483647,'Aya Sayed',1112594704,22,'hegaz','Home','O-','No','female'),(16,2147483647,'menna',111256697,36,'','Home','O-','No','female'),(17,2147483647,'Ganna',1111372814,0,'New cairo','Home','O-','Diabetes','female'),(18,2147483647,'Maria',123943266,19,'hegaz','Home','O-','No','female'),(19,2147483647,'Mahmoud',102556326,23,'New cairo','Home','O+','Diabetes','male'),(20,2147483647,'Nada',10269329,50,'Downtown','Home','B-','Diabetes','female'),(21,308239247,'aya',1112594704,25,'Hegaz','Hospital','B+','no','female');
/*!40000 ALTER TABLE `donator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_password`
--

DROP TABLE IF EXISTS `edit_password`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_password` (
  `edit_id` int(11) NOT NULL AUTO_INCREMENT,
  `old` varchar(255) NOT NULL,
  `new` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  PRIMARY KEY (`edit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_password`
--

LOCK TABLES `edit_password` WRITE;
/*!40000 ALTER TABLE `edit_password` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_password` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foundations`
--

DROP TABLE IF EXISTS `foundations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foundations` (
  `foundation_id` int(11) NOT NULL AUTO_INCREMENT,
  `foundation_name` varchar(255) NOT NULL,
  `foundation_image` varchar(5000) NOT NULL,
  `foundation_location` varchar(255) NOT NULL,
  `foundation_phone` int(11) NOT NULL,
  PRIMARY KEY (`foundation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foundations`
--

LOCK TABLES `foundations` WRITE;
/*!40000 ALTER TABLE `foundations` DISABLE KEYS */;
INSERT INTO `foundations` VALUES (12,'Children’s Cancer Hospital Egypt 57357','../shared/57357.jpg','Sekat Hadid Al Mahger, Zeinhom, El Sayeda Zeinab, Cairo Governorate 4260102',225351500),(13,'Ain Shams University Specialized Hospital','../shared/ain.jfif','El-Khalifa El-Maamoun, El-Qobba Bridge, Heliopolis, Cairo Governorate 4392003',1098106892),(14,'Cairo University Hospitals','../shared/cairo.jpg','Old Cairo, Cairo Governorate 4240310',223643988),(15,'Egyptian Red Crescent - ERC','../shared/Egyptian Red Crescent - ERC.jpg','Al Gayarah, Al Azbakeya, Cairo Governorate 4320151',225761587);
/*!40000 ALTER TABLE `foundations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `national_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_phone` int(11) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `patient_location` varchar(255) NOT NULL,
  `blood_type` text NOT NULL,
  `patient_diseases` varchar(255) NOT NULL,
  `patient_gender` text NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (1,2147483647,' mora',1062871829,22,'cairo','Home','A+','None','female'),(2,2147483647,'menna',1062871829,22,'Red sea _ Hurghada ','Home','A+','None','female'),(3,2147483647,' mora',1062871829,22,'cairo','Home','B+','None','female'),(4,2147483647,'Aya',1111372814,25,'New cairo','Home','A+','No','female'),(6,2147483647,'maryam',126535885,36,'Downtown','Home','O-','Diabetes','female'),(7,2147483647,'Ganna',2147483647,25,'Ain Shams','Home','O-','Diabetes','female'),(9,2147483647,'aisha',1112594704,25,'Ain Shams','Hospital','AB-','no','female');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_image` varchar(5000) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_gender` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (7,'Mennatullah ','khaled','menna20','3.jpg',1062871829,'123','female'),(10,'noha','ahmed','noha','v1.png',12365511,'123','female'),(11,'aisha','salah ','aisha20','3.jpg',1153360661,'123','female'),(12,'nada','salah ','nada','3.jpg',2147483647,'123','female'),(13,'Aya ','Sayed','ayasayed25','3.jpg',1111372814,'12345','female'),(14,'Ahmed','Salah','ahmed25','2.jpg',1112594704,'123','male'),(15,'Ganaa ','Adel','Ganaa36','3.jpg',126398599,'0123','female'),(16,'Menna','Ashraf','menna13','3.jpg',12365499,'0123456','female'),(17,'Aisha','Salah','osha23','3.jpg',1112594704,'12345','female'),(18,'aisha','salah','aisha25','57357.jpg',1112594704,'123','female');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-20  1:14:20
