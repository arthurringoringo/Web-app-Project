CREATE DATABASE  IF NOT EXISTS `Lending_lib` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `Lending_lib`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 10.0.6.244    Database: Lending_lib
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Transactions`
--

DROP TABLE IF EXISTS `Transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Transactions` (
  `TransactionID` int(11) NOT NULL AUTO_INCREMENT,
  `Asset` int(11) NOT NULL,
  `Checked_Out_To` int(11) NOT NULL,
  `Due_Date` date DEFAULT NULL,
  `Checked_In_Date` date DEFAULT NULL,
  `Checked_In_Condition` varchar(45) DEFAULT NULL,
  `Notes` varchar(500) DEFAULT NULL,
  `Checked_Out_Condition` varchar(45) DEFAULT NULL,
  `Checked_Out_Date` date DEFAULT NULL,
  PRIMARY KEY (`TransactionID`),
  KEY `fk_Transactions_Contacts1_idx` (`Checked_Out_To`) /*!80000 INVISIBLE */,
  KEY `fk_asset` (`Asset`),
  CONSTRAINT `fk_Transactions_Contacts1` FOREIGN KEY (`Checked_Out_To`) REFERENCES `Contacts` (`ID`),
  CONSTRAINT `fk_asset_id` FOREIGN KEY (`Asset`) REFERENCES `Assets` (`ID_number`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Transactions`
--

LOCK TABLES `Transactions` WRITE;
/*!40000 ALTER TABLE `Transactions` DISABLE KEYS */;
INSERT INTO `Transactions` VALUES (1,231,3,'2019-12-11','2019-12-10','Good','test','Bad','2019-12-09'),(2,231,2,'2019-12-21','2019-12-10','Good','test','Good','2019-12-09'),(7,535,95,'2019-12-18','2019-12-09','Bad','eaten','Good','2019-12-09'),(8,400,99,'2019-12-19','2019-12-09','Bad','missing one earpice','Good','2019-12-09'),(9,529,103,'2019-12-14','2019-12-09','Bad','Have Holes','Bad','2019-12-09'),(10,475,101,'2019-12-14','2019-12-09','Bad','No soda','Good','2019-12-09'),(11,400,93,'2019-12-11','2019-12-09','Bad','no  plug','Bad','2019-12-09'),(12,372,115,'2019-12-26','2019-12-09','Good','gds','Bad','2019-12-09'),(13,21,3,'2019-12-10','2019-12-10','Good','test','Good','2019-12-10'),(14,21,1,'2019-12-10','2019-12-11','Good','aaaa','Good','2019-12-10'),(15,399,97,'2019-12-21',NULL,'','','Good','2019-12-11');
/*!40000 ALTER TABLE `Transactions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-11 17:19:13
