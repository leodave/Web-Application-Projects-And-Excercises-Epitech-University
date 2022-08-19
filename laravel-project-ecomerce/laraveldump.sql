-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `ADDS`
--

DROP TABLE IF EXISTS `ADDS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ADDS` (
  `Name` varchar(100) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Price` int DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Picture` varchar(100) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ADDS`
--

LOCK TABLES `ADDS` WRITE;
/*!40000 ALTER TABLE `ADDS` DISABLE KEYS */;
INSERT INTO `ADDS` VALUES ('BASKETBALL BACKPACK','BASKETBALL','Accessories Backpack 45 L Black',10,'Barcelona','MOCHILA1.jpeg','2022-04-11 12:16:39',1),('BALL PUMP','BASKETBALL','Double Action Pump To Inflate Balls',6,'Barcelona','BOMBA1.jpeg','2022-04-11 12:16:39',2),('SET OF NEEDLES','BASKETBALL','Set Of Three Needles',3,'Barcelona','NEEDLES.jpeg','2022-04-11 12:16:39',3),('BASKETBALL TARMAK WIZZY','BASKETBALL','Tarmak Wizzy Black Bordeaux Basketball',15,'Barcelona','balon2.jpeg','2022-04-11 12:16:39',4),('BAG BASKETBALL','BASKETBALL','Bag For 5 Basketball Balls',10,'Barcelona','bag.jpeg','2022-04-11 12:16:39',5),('BASKETBALL TARMARK K500','BASKETBALL','Tarmak K500 Aniball Basketball',15,'Barcelona','balon3.jpeg','2022-04-11 12:16:39',6),('BALL PUMP DOUBLE ACTION','BASKETBALL','Black Double Action Manometer Pump With Flexible Connection',10,'Barcelona','pump.jpeg','2022-04-11 12:16:39',7),('BEACH FOOTBALL BALL','FOOTBALL','Kipsta Bs9 Heat Sealed Beach Soccer Ball Yellow',25,'Barcelona','balon4.jpeg','2022-04-11 12:16:39',8),('FOOTBALL KIPSA FIFA PRO','FOOTBALL','Kipsta Fifa Pro F950 Soccer Ball Heat Sealed White',35,'Barcelona','balon5.jpeg','2022-04-11 12:16:39',9),('KIDS SOCCER GOALKEEPER GLOVES','FOOTBALL','Kids Soccer Goalkeeper Gloves F500 Blue Red',20,'Barcelona','guante1.jpeg','2022-04-11 12:16:39',10),('BASKETBALL BACKPACK','BASKETBALL','Accessories Backpack 45 L Black',10,'Barcelona','MOCHILA1.jpeg','2022-04-11 12:16:39',11),('MAGNETIK TURF GOALKEEPER GLOVE','FOOTBALL','Magnetik Turf Childrens Soccer Goalkeeper Glove Blue Green',22,'Barcelona','guante2.jpeg','2022-04-11 12:16:39',12),('KIPSTA AGILITY FOOTBALL BOOTS','FOOTBALL','Kipsta Agility 900 Mesh Mid Sg Soccer Cleats Adult Burgundy',30,'Barcelona','shoe1.jpeg','2022-04-11 12:16:39',13),('ADIDAS KAISER FOOTBALL BOOTS','FOOTBALL','Adidas Kaiser Cup Sg Soccer Cleats Aluminum Adult Black',75,'Barcelona','shoe2.jpeg','2022-04-11 12:16:39',14),('WHISTLE','FOOTBALL','Black Fox Whistle',7,'Barcelona','silbato.jpeg','2022-04-11 12:16:39',15),('LEFT/RIGHT ANKLE SUPPORT','FOOTBALL','Left/Right Ankle Brace Ligament Support Strong 100 Man/Woman Black',20,'Barcelona','tobillera.jpeg','2022-04-11 12:16:39',16),('MTB BIKE HELMET','CYCLING','Mtb Bicycle Helmet For Kids 500 Black/Fluor Yellow',30,'Barcelona','casco.jpeg','2022-04-11 12:16:39',17),('PLATFORM ADAPTERS','CYCLING','Shimano Spd Compatible Platform Adapters',10,'Barcelona','adaptadores.jpeg','2022-04-11 12:16:39',18),('ADULT CYCLING GLASSES','CYCLING','Adult Cycling Glasses Roadr 900 Cat 3 High Definition Black plus Crystals Cat 0',45,'Barcelona','gafas.jpeg','2022-04-11 12:16:39',19),('COVES','CYCLING','Spd Compatible Cleats',15,'Barcelona','CALAS.jpeg','2022-04-11 12:16:39',20),('ROCKRIDER MTB HELMET','CYCLING','Helmet Mtb Rockrider Xc Black Yellow',40,'Barcelona','casco1.jpeg','2022-04-11 12:16:39',21),('BICYCLE NECK PANTS','CYCLING','Bicycle Neck Pants 900 Black Windproof',9,'Barcelona','cuello.jpeg','2022-04-11 12:16:39',22),('BICYCLE HOLDER','CYCLING','Proride Roof Bike Holder 598',130,'Barcelona','PORTABICIS.jpeg','2022-04-11 12:16:39',23),('CYCLING BACKPACK','CYCLING','Xc Race Lite Cycling Backpack',55,'Barcelona','mochila3.jpeg','2022-04-11 12:16:39',24),('BOXING GLOVES','BOXING','Boxing Gloves 100 Red Initiation',12,'Barcelona','guante3.jpeg','2022-04-11 12:16:39',25),('EVERLAST BOXING GLOVES','BOXING','Everlast Powerlock Black/Gold Boxing Gloves',50,'Barcelona','guante4.jpeg','2022-04-11 12:16:39',26),('HANGING PUNCHING BAG','BOXING','Hanging Punching Bag With Support Homcom 115X163X224 Cm Black And Gray',190,'Barcelona','saco.jpeg','2022-04-11 12:16:39',27),('100 CM BOXING BAG','BOXING','Boxing Bag 100 Cm With Accessories Martial Arts Kick Boxing',55,'Barcelona','saco1.jpeg','2022-04-11 12:16:39',28),('BEAR PAWS 500 BLACK','BOXING','500 Black Curved Bear Paws With Adjustment Strap',45,'Barcelona','patas.jpeg','2022-04-11 12:16:39',29),('BOXING SHIELD','BOXING','Evergy Boxing Shield',79,'Barcelona','escudo.jpeg','2022-04-11 12:16:39',30),('BOXING HELMET','BOXING','Boxing Headgear Top Ten Competition Fight',92,'Barcelona','casco2.jpeg','2022-04-11 12:16:39',31),('DENTAL PROTECTOR','BOXING','Venum Challenger Gel Dental Protector',15,'Barcelona','protector.jpeg','2022-04-11 12:16:39',32),('BASKETBALL TARMAK BT100','BASKETBALL','Tarmak Bt100 Hazelnut Brown Basketball',15,'Barcelona','BALON1.jpeg','2022-04-11 12:16:39',33);
/*!40000 ALTER TABLE `ADDS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `Name` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `Nickname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2022-04-11 14:20:37
