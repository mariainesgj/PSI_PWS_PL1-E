-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: emissaodb
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `folhaobras`
--

DROP TABLE IF EXISTS `folhaobras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folhaobras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `valortotal` float NOT NULL,
  `ivatotal` float NOT NULL,
  `estado` enum('em lancamento','emitida','paga') NOT NULL,
  `id_cliente` int NOT NULL,
  `id_funcionario` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=219 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folhaobras`
--

LOCK TABLES `folhaobras` WRITE;
/*!40000 ALTER TABLE `folhaobras` DISABLE KEYS */;
INSERT INTO `folhaobras` VALUES (1,'2023-06-16',0,1,'em lancamento',5,2),(2,'2023-06-27',0,0,'emitida',5,2),(3,'2023-06-27',0,0,'emitida',5,2),(4,'2023-06-27',0,0,'em lancamento',5,2),(5,'2023-06-27',0,0,'em lancamento',5,2),(6,'2023-06-27',0,0,'em lancamento',5,2),(7,'2023-06-27',0,0,'em lancamento',5,2),(218,'2023-06-28',0,0,'em lancamento',5,5),(217,'2023-06-28',0,0,'em lancamento',5,5),(216,'2023-06-28',0,0,'em lancamento',5,5),(215,'2023-06-28',0,0,'em lancamento',7,6),(214,'2023-06-28',0,0,'em lancamento',7,6),(213,'2023-06-28',0,0,'em lancamento',7,6),(212,'2023-06-28',0,0,'em lancamento',7,6),(211,'2023-06-28',0,0,'em lancamento',7,6),(210,'2023-06-28',0,0,'em lancamento',7,6),(209,'2023-06-28',0,0,'em lancamento',7,6),(208,'2023-06-28',0,0,'em lancamento',7,6),(207,'2023-06-28',0,0,'em lancamento',7,6),(206,'2023-06-28',0,0,'em lancamento',7,6),(205,'2023-06-28',0,0,'em lancamento',7,6),(204,'2023-06-28',0,0,'em lancamento',7,6),(203,'2023-06-28',0,0,'em lancamento',7,6),(202,'2023-06-28',0,0,'em lancamento',7,6);
/*!40000 ALTER TABLE `folhaobras` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-28 20:52:43
