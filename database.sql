-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: coproduc
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB


CREATE DATABASE coproduc;
use coproduc;

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `user_data_dni` varchar(9) NOT NULL,
  PRIMARY KEY (`user`),
  KEY `fk_account_user_data1_idx` (`user_data_dni`),
  CONSTRAINT `fk_account_user_data1` FOREIGN KEY (`user_data_dni`) REFERENCES `user_data` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES ('5','123','5'),('6','123','6'),('admin','123','56789897'),('angy','123','76197146'),('frank','123','89674523'),('hp','123','56'),('jose95','jose','24342343'),('keke','123','23456237'),('luis','123','2e'),('moto','123','34'),('pame','123','76197142'),('pur','123','76197141'),('tech','123','23e'),('torta','123','27846237'),('viole','123','98765432');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financial_entity`
--

DROP TABLE IF EXISTS `financial_entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financial_entity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_op` varchar(50) NOT NULL DEFAULT '0',
  `order_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `entity` varchar(100) DEFAULT NULL,
  `monto` float DEFAULT '0',
  `eliminated` enum('1','0') DEFAULT '0',
  PRIMARY KEY (`id`,`order_id`),
  KEY `fk_financial_entity_order1_idx` (`order_id`),
  CONSTRAINT `fk_financial_entity_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financial_entity`
--

LOCK TABLES `financial_entity` WRITE;
/*!40000 ALTER TABLE `financial_entity` DISABLE KEYS */;
INSERT INTO `financial_entity` VALUES (1,'156',9,'2018-02-08',NULL,'Banco Central del Perú',12.3,'0'),(2,'544',9,'2018-02-14',NULL,'Banco Central del Perú',342,'0'),(3,'678',9,'2018-02-07',NULL,'Interbank',56,'0'),(4,'67',9,'2018-02-07',NULL,'Banco Central del Perú',5.4,'0'),(5,'5',9,'2018-02-14',NULL,'Banco Central del Perú',453,'0'),(6,'12',9,'2018-02-01',NULL,'Banco Central del Perú',3,'0'),(7,'1',9,'2018-02-01','11:11:00','Banco Central del Perú',2,'0'),(8,'12389',7,'2018-03-01','17:10:00','Pago Efectivo',457.3,'0'),(9,'90',7,'2018-01-02','19:00:00','Banco Central del Perú',87.3,'0'),(10,'76',7,'2018-01-02',NULL,'Banco Central del Perú',10.8,'0'),(11,'678',7,'2018-02-01',NULL,'Banco Central del Perú',12.3,'0'),(12,'123',7,'2018-02-01',NULL,'Interbank',123,'0'),(13,'546',1,'2018-02-01','09:10:00','Banco Central del Perú',12.3,'0'),(14,'1000',11,'2018-02-17',NULL,'Banco Central del Perú',123.1,'0'),(15,'1002',11,'2018-02-17','10:00:00','Banco Central del Perú',78.2,'0');
/*!40000 ALTER TABLE `financial_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `user_data_dni` varchar(9) NOT NULL,
  `product_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` float DEFAULT NULL,
  `date_order` datetime DEFAULT NULL,
  `date_confirmation` datetime DEFAULT NULL,
  `date_delivery` date DEFAULT NULL,
  `state` enum('P','D','A') DEFAULT 'D',
  `delivered` enum('1','0') DEFAULT '0',
  `price_unit` float DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_order_product1_idx` (`product_id`),
  KEY `fk_order_user_data1` (`user_data_dni`),
  CONSTRAINT `fk_order_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_order_user_data1` FOREIGN KEY (`user_data_dni`) REFERENCES `user_data` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES ('24342343',6,1,3,'2018-02-05 23:52:44',NULL,NULL,'D','0',0),('24342343',1,2,1,'2018-02-05 23:53:18',NULL,NULL,'D','0',0),('24342343',1,3,1,'2018-02-05 23:59:48',NULL,NULL,'D','0',0),('24342343',8,4,3,'2018-02-06 00:01:02',NULL,NULL,'D','0',0),('24342343',8,5,2,'2018-02-05 18:13:37',NULL,NULL,'D','0',0),('24342343',6,6,7,'2018-02-06 16:28:44',NULL,NULL,'D','0',0),('24342343',2,7,34,'2018-02-08 21:14:17','2018-02-01 00:00:00','2018-02-15','P','1',300),('2e',1,8,1,'2018-02-09 12:50:16',NULL,NULL,'D','0',0),('56',1,9,2,'2018-02-09 12:52:04',NULL,NULL,'D','0',0),('34',1,10,1,'2018-02-09 12:52:52',NULL,NULL,'P','1',0),('24342343',4,11,10,'2018-02-16 09:17:43',NULL,NULL,'D','0',0),('24342343',1,12,160,'2018-02-17 01:17:56',NULL,NULL,'D','0',0),('24342343',6,13,10,'2018-02-17 01:33:16',NULL,NULL,'D','0',0),('24342343',7,14,13,'2018-02-17 01:36:25',NULL,NULL,'A','0',0),('89674523',7,15,2,'2018-02-17 01:49:32',NULL,NULL,'D','0',0);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT '0',
  `image` varchar(150) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `state` enum('1','0') DEFAULT '1',
  `eliminated` enum('1','0') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Queso','10','yogurt.jpg','yogurt de fresa','1','0'),(2,'Queso Dietético','10','yogurt.jpg','yogurt de fresa','1','0'),(3,'Manjar Blanco','10','yogurt.jpg','yogurt de fresa','1','0'),(4,'Rosquitas','10','yogurt.jpg','yogurt de fresa','1','0'),(6,'Alfajores','13.4','1517822094.jpg','queso mas rico','1','0'),(7,'Café','12','1517822859.jpg','fddsf','1','0'),(8,'Panela','dfsdf','1517826354.jpg','456','1','0');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubication`
--

DROP TABLE IF EXISTS `ubication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dpto` varchar(100) DEFAULT NULL,
  `prov` varchar(100) DEFAULT NULL,
  `dist` varchar(100) DEFAULT NULL,
  `urb` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `reference` varchar(300) DEFAULT NULL,
  `state` enum('1','0') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubication`
--

LOCK TABLES `ubication` WRITE;
/*!40000 ALTER TABLE `ubication` DISABLE KEYS */;
INSERT INTO `ubication` VALUES (1,'La Libertad','Trujillo','Trujillo','El Huerto','calle los fantasmas','frente a Tours Trujillo','1'),(2,'La Libertad','Trujillo','Trujillo','La rinconada','avenida','cerro','0'),(3,'La Libertad','Trujillo','Trujillo','La rinconada','avenida','cerro','0'),(4,'La Libertad','Trujillo','La Esperanza','La rinconada','calle','taxi','0'),(5,'La Libertad','Trujillo','Simbal','La rinconada','calle','taxi','0'),(6,'La Libertad','Trujillo','La Esperanza','La rinconada','calle','taxi','0'),(7,'La Libertad','Trujillo','La Esperanza','La rinconada','calle','taxi','0'),(8,'La Libertad','Trujillo','La Esperanza','Palermo','calle','taxi','0'),(9,'La Libertad','Trujillo','La Esperanza','La rinconada','calle','taxi','0'),(10,'La Libertad','Trujillo','La Esperanza','La rinconada','calle','taxi','0'),(11,'La Libertad','Trujillo','La Esperanza','la rinconada','calle','taxi','0'),(12,'La Libertad','Trujillo','La Esperanza','la rinconada','calle','taxi','0'),(13,'La Libertad','Trujillo','La Esperanza','la rinconada','calle','taxi','0'),(14,'La Libertad','Trujillo','La Esperanza','la rinconada','calle','taxi','0'),(15,'La Libertad','Trujillo','La Esperanza','la rinconada','calle','taxi','0');
/*!40000 ALTER TABLE `ubication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_data` (
  `dni` varchar(9) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `telephone2` varchar(20) DEFAULT NULL,
  `type` enum('l','n') DEFAULT 'l',
  `date_time_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `eliminated` enum('1','0') NOT NULL DEFAULT '0',
  `ubication_id` int(11) NOT NULL,
  PRIMARY KEY (`dni`),
  KEY `fk_user_data_ubication1_idx` (`ubication_id`),
  CONSTRAINT `fk_user_data_ubication1` FOREIGN KEY (`ubication_id`) REFERENCES `ubication` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
INSERT INTO `user_data` VALUES ('23456237','keke','suarez','jose@gmail.com','123','123','l','2018-02-16 07:40:43','0',13),('23e','tech','suarez','jose@gmail.com','123','123','l','2018-02-13 12:32:17','1',6),('24342343','jose alfred','suarez principe','jose95sp@gmail.com','123','','l','2018-02-16 12:32:17','0',1),('27846237','torta','choclate','jose@gmail.com','123','123','l','2018-02-16 07:42:19','0',14),('2e','luis','quispe','pame@gmail.com','456','123','l','2018-02-12 12:32:17','1',3),('34','sony','suarez','jose@gmail.com','123','123','l','2018-02-14 12:32:17','1',5),('5','tech','suarez','jose@gmail.com','123','123','l','2018-02-17 12:32:17','1',7),('56','hp','suarez','jose@gmail.com','123','123','l','2018-01-12 12:32:17','0',9),('56789897','jose alfred','suarez','jose@gmail.com','123','123','l','2018-02-16 07:36:18','0',12),('6','jose alfred','suarez','jose@gmail.com','123','123','l','2018-01-13 12:32:17','0',8),('76197141','new purfect','suarez','jose@gmail.com','123','123','l','2018-01-14 12:32:17','0',10),('76197142','pame','suarez','jose@gmail.com','123','123','l','2018-01-16 12:32:17','0',4),('76197146','angy','quispe','Angy@gmail.com','123','123','l','2018-02-15 12:32:17','0',2),('89674523','frank','acuña','jose@gmail.com','123','123','l','2018-02-17 01:49:32','0',15),('98765432','violeta','quipuscoa','violeta@gmail.com','123',NULL,'l','2018-02-16 07:26:44','0',11);
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'coproduc'
--

--
-- Dumping routines for database 'coproduc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-20 11:55:08
