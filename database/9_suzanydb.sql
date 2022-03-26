-- MySQL dump 10.16  Distrib 10.1.33-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: suzanydb
-- ------------------------------------------------------
-- Server version	10.1.33-MariaDB

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
-- Table structure for table `table_contactus`
--

DROP TABLE IF EXISTS `table_contactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_contactus` (
  `contactus_id` int(11) NOT NULL AUTO_INCREMENT,
  `contactus_name` varchar(50) NOT NULL,
  `contactus_email` varchar(50) NOT NULL,
  `contactus_subject` varchar(1000) NOT NULL,
  `contactus_number` int(11) NOT NULL,
  `contactus_message` varchar(5000) NOT NULL,
  PRIMARY KEY (`contactus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_contactus`
--

LOCK TABLES `table_contactus` WRITE;
/*!40000 ALTER TABLE `table_contactus` DISABLE KEYS */;
INSERT INTO `table_contactus` VALUES (1,'Sakith','Sakith@gmail.com','',774353004,'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),(2,'Edwin','Edwin@hotmail.com','Request 2',773265987,'jjjjjggggggggggggggggggggggggggggggggggggggggg');
/*!40000 ALTER TABLE `table_contactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_customer`
--

DROP TABLE IF EXISTS `table_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_gender` varchar(11) NOT NULL,
  `customer_address` varchar(50) DEFAULT NULL,
  `customer_email` varchar(50) DEFAULT NULL,
  `customer_contact` int(11) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_customer`
--

LOCK TABLES `table_customer` WRITE;
/*!40000 ALTER TABLE `table_customer` DISABLE KEYS */;
INSERT INTO `table_customer` VALUES (1,'L.L.Perera','','Male','26,Mahanama Street,  Colombo 01500','perera55@gmail.com',776359785),(2,'Lahiru Piumal','','Male','78, St Peters Road, Colombo 01000','l.perera@outlook.com',765315987),(3,'Jason Mathew','','Male','120, Malawatta road, Colombo 00600','jasona@outlook.com',768973562),(4,'Anderson','','Male','05, Rudra Mawatta, Colombo 00600','AndersonM@gmail.com',759834568),(5,'Kavinda','','Male','No 55, Negombo-Colombo Main Rd,','kavindalakshan@gmail.com',756914556),(6,'James.A','','Male','\r\n89/7A, Kothalavala Flats, Kothalawala, Colombo 1','annajames@icloud.com',756914563),(9,'Edwin','','Male','Wellewatta','alfred.edwin@hotmail.com',789564526),(10,'Edwin','alfrededwin','Male','Colombo','alfred.edwin@hotmail.com',775081914),(11,'Jay Sakith','Sakith','Male','108 St Benadicts Street Colombo 01300','vijayasakith@gmail.com',774353004);
/*!40000 ALTER TABLE `table_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_employee`
--

DROP TABLE IF EXISTS `table_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(50) DEFAULT NULL,
  `employee_gender` varchar(11) NOT NULL,
  `employee_address` varchar(50) DEFAULT NULL,
  `employee_email` varchar(50) DEFAULT NULL,
  `employee_contact` int(11) DEFAULT NULL,
  `employee_privilege` varchar(20) DEFAULT NULL,
  `employee_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_employee`
--

LOCK TABLES `table_employee` WRITE;
/*!40000 ALTER TABLE `table_employee` DISABLE KEYS */;
INSERT INTO `table_employee` VALUES (1,'N.Subakaran','Male','78, St Beanadicts Street, Colombo 01300','subakaran89@gmail.com',759863459,'Admin','Admin'),(2,'SAMEERA HASHAN','Male','77, A.D.M.L Perra Lane, Colombo 01400','hashan94@gmail.com',759645835,'Staff','Staff'),(3,'W.A.DE SILVA','Male','105, St Perers Street, Colombo 01400','silva.w.a@gmail.com',764531689,'Admin','Admin'),(4,'A.M.M.SADIQ','Male','03, Amarasinha Mawatta, Colombo 01400','sadiq890@gmail.com',777689345,'Staff','Staff'),(6,'Adam','Male','Dehiwala','adam@gmail.com',778445698,'Admin','Adam'),(7,'Online','Online','Online','Online',773670980,'Admin','2729729');
/*!40000 ALTER TABLE `table_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_item`
--

DROP TABLE IF EXISTS `table_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_make` varchar(50) DEFAULT NULL,
  `item_model` varchar(50) DEFAULT NULL,
  `item_unitcost` int(11) DEFAULT NULL,
  `item_color` varchar(50) DEFAULT NULL,
  `item_warrantyperiod` varchar(11) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `item_nostock` int(11) DEFAULT NULL,
  `item_filter` varchar(50) NOT NULL,
  `item_imgpath` varchar(100) NOT NULL,
  `item_description` varchar(500) NOT NULL,
  `item_FullDescription` varchar(1000) NOT NULL,
  `item_imgFront` varchar(255) NOT NULL,
  `item_imgBack` varchar(255) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `supplier_id` (`supplier_id`),
  CONSTRAINT `table_item_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `table_supplier` (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_item`
--

LOCK TABLES `table_item` WRITE;
/*!40000 ALTER TABLE `table_item` DISABLE KEYS */;
INSERT INTO `table_item` VALUES (3,'Apple','IPhone 6S',60000,'Silver','3 Month',1,5,'MostRated','PH_IPhone 6S.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.','PH_Main_IPhone 6S01.jpg','PH_Main_IPhone 6S02.jpg'),(4,'Samsung','Galaxy S9 ',120000,'Blue','12 Months',2,15,'Latest','PH_Galaxy S9.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhoOur vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.ne that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','PH_Main_Galaxy S901.jpeg','PH_Main_Galaxy S902.jpeg'),(5,'Apple','IPhone 8 Plus',100000,'Rose Gold','24 Months',1,18,'Latest','PH_IPhone 8Plus.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.','PH_Main_IPhone 8Plus03.jpg','PH_Main_IPhone 8Plus02.jpg'),(6,'Apple','IPhone 7 Plus',90000,'Black','6 Month',2,20,'Mostrated','PH_IPhone 7Plus.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.','PH_Main_IPhone 7Plus01.jpg','PH_Main_IPhone 7Plus02.jpg'),(7,'Vivo','V9',50000,'Silver','12 Months',1,13,'Mostrated','PH_Vivo V9.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.','V9.jpg','V9.jpg'),(11,'Huwaei','P20 Pro',120000,'gold','3 Month',2,12,'Latest','PH_Huawei P20Pro.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.','PH_Main_Huawei P20Pro01.jpg','PH_Main_Huawei P20Pro02.jpg'),(12,'Oppo','F7',40000,'blue','12 Months',1,22,'Latest','PH_Oppo F7.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.','PH_Main_Oppo F1Plus02.jpg','PH_Main_Oppo F1Plus03.jpg'),(13,'Apple','Iphone 6S Plus',50000,'Silver','6 Month',1,5,'Latest','PH_IPhone 6SPlus.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.','PH_Main_IPhone 6SPlus01.jpg','PH_Main_IPhone 6SPlus02.jpg'),(14,'Samsung','A3',50000,'Blue','12 Months',1,50,'Latest','PH_Galaxy A8.jpg','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.','Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.','PH_Main_Galaxy S801.jpg','PH_Main_Galaxy S802.jpg');
/*!40000 ALTER TABLE `table_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_line`
--

DROP TABLE IF EXISTS `table_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_line` (
  `line_id` int(11) NOT NULL AUTO_INCREMENT,
  `line_qty` int(11) DEFAULT NULL,
  `line_cost` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`line_id`),
  KEY `customer_id` (`customer_id`),
  KEY `sale_id` (`sale_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `table_line_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `table_customer` (`customer_id`),
  CONSTRAINT `table_line_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `table_sale` (`sale_id`),
  CONSTRAINT `table_line_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `table_item` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_line`
--

LOCK TABLES `table_line` WRITE;
/*!40000 ALTER TABLE `table_line` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_sale`
--

DROP TABLE IF EXISTS `table_sale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_sale` (
  `sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_date` date DEFAULT NULL,
  `sale_time` time DEFAULT NULL,
  `sale_totalcost` varchar(50) DEFAULT NULL,
  `sale_qty` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`sale_id`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `table_sale_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `table_customer` (`customer_id`),
  CONSTRAINT `table_sale_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `table_employee` (`employee_id`),
  CONSTRAINT `table_sale_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `table_status` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_sale`
--

LOCK TABLES `table_sale` WRITE;
/*!40000 ALTER TABLE `table_sale` DISABLE KEYS */;
INSERT INTO `table_sale` VALUES (70,'2018-08-04','07:48:41','',5,11,7,20),(71,'2018-02-02','23:01:00','20000',NULL,1,1,0),(72,'2018-03-16','01:58:00','50000',NULL,1,1,0),(73,'2018-04-12','21:02:00','75000',NULL,1,1,0),(74,'2018-06-14','01:03:00','50000',NULL,1,1,0),(75,'2018-06-22','22:02:00','80000',NULL,1,1,0);
/*!40000 ALTER TABLE `table_sale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_status`
--

DROP TABLE IF EXISTS `table_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(55) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_status`
--

LOCK TABLES `table_status` WRITE;
/*!40000 ALTER TABLE `table_status` DISABLE KEYS */;
INSERT INTO `table_status` VALUES (0,'00 - DRAFT'),(10,'10 - ORDER DRAFT'),(20,'20 - PENDING PAYMENT'),(25,'25 - PATTIALLY INVOICED'),(30,'30 - PAYMENT CONFIRM'),(35,'35 - PAYMENT RETURN'),(90,'90 - CANCEL ORDER');
/*!40000 ALTER TABLE `table_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_supplier`
--

DROP TABLE IF EXISTS `table_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(50) DEFAULT NULL,
  `supplier_gender` varchar(11) NOT NULL,
  `supplier_address` varchar(50) DEFAULT NULL,
  `supplier_email` varchar(50) DEFAULT NULL,
  `supplier_contact` int(11) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_supplier`
--

LOCK TABLES `table_supplier` WRITE;
/*!40000 ALTER TABLE `table_supplier` DISABLE KEYS */;
INSERT INTO `table_supplier` VALUES (1,'Tharindu balasuriya','Male','56, Mahawatta Lane, Colombo - 14','tharindur@yahoo.com',77721911),(2,'Sharwan','Male','109, St Marys Lane, Colombo 00800','sharwan77@gmail.com',777219116),(3,'Samal Perera','Male','No. 30 Queens Road, Colombo 00300','samalp@outlook.com',776585351),(4,'Madusanka Perera','Male','52, Negombo-Colombo Main Rd,','perera.m@outlook.com',112589755),(5,'Samal Perera','Male','No:5,deans rd,colombo','samal@gmail.com',776585351),(6,'Alfred Edwin','Male','Colombo','alfred@gmail.com',777219116),(7,'Lashitha','Female','Kotehena','lakshitha@gmail.com',776219116);
/*!40000 ALTER TABLE `table_supplier` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-17 21:11:31
