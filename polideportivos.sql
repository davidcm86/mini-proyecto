CREATE DATABASE  IF NOT EXISTS `polideportivos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `polideportivos`;
-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: polideportivos
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudades` (
  `id` char(36) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudades`
--

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
INSERT INTO `ciudades` VALUES ('551ffa7e-8c2c-4c7e-8fa9-41c67f000101','Madrid','2015-04-04 16:51:42','2015-04-04 16:51:42'),('551ffa82-c3f0-4d02-90f2-41c67f000101','Barcelona','2015-04-04 16:51:46','2015-04-04 16:51:46'),('551ffa86-2db8-427b-a43e-41c67f000101','Valencia','2015-04-04 16:51:50','2015-04-04 16:51:50'),('551ffa8a-7c54-4626-b499-41c67f000101','Sevilla','2015-04-04 16:51:54','2015-04-04 16:51:54'),('551ffa8f-faf4-4e73-bd64-41c67f000101','Galicia','2015-04-04 16:51:59','2015-04-04 16:51:59'),('5520102a-7d1c-4dcb-a7be-41fa7f000101','Burgos','2015-04-04 18:24:10','2015-04-04 18:24:10'),('5520102e-b150-46aa-b89c-41fa7f000101','Segovia','2015-04-04 18:24:14','2015-04-04 18:24:14'),('55201032-6d6c-4700-807f-41fa7f000101','Cordoba','2015-04-04 18:24:18','2015-04-04 18:24:18'),('5520103b-ad28-48be-84c8-45dd7f000101','San Sebastian','2015-04-04 18:24:27','2015-04-04 18:24:27');
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deportes`
--

DROP TABLE IF EXISTS `deportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deportes` (
  `id` char(36) NOT NULL,
  `deporte` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deportes`
--

LOCK TABLES `deportes` WRITE;
/*!40000 ALTER TABLE `deportes` DISABLE KEYS */;
INSERT INTO `deportes` VALUES ('551ffa5f-1084-45fa-98d6-40a27f000101','Baloncesto','2015-04-04 16:51:11','2015-04-04 16:51:11'),('551ffb1b-7f10-40c0-aa55-40a47f000101','Fútbol','2015-04-04 16:54:19','2015-04-04 16:54:19');
/*!40000 ALTER TABLE `deportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instalaciones_deportivas`
--

DROP TABLE IF EXISTS `instalaciones_deportivas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instalaciones_deportivas` (
  `id` char(36) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `instalaciones_libres` int(11) DEFAULT '0',
  `ciudad_id` char(36) NOT NULL,
  `deporte_id` char(36) NOT NULL,
  `tipo_instalacion_id` char(36) NOT NULL,
  `modifed` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_instalaciones_deportivas_tipo_instalacion_idx` (`tipo_instalacion_id`),
  KEY `fk_instalaciones_deportivas_deporte_idx` (`deporte_id`),
  KEY `fk_instalaciones_deportivas_ciudad_idx` (`ciudad_id`),
  CONSTRAINT `fk_instalaciones_deportivas_ciudad` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_instalaciones_deportivas_deporte` FOREIGN KEY (`deporte_id`) REFERENCES `deportes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_instalaciones_deportivas_tipo_instalacion` FOREIGN KEY (`tipo_instalacion_id`) REFERENCES `tipos_instalaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instalaciones_deportivas`
--

LOCK TABLES `instalaciones_deportivas` WRITE;
/*!40000 ALTER TABLE `instalaciones_deportivas` DISABLE KEYS */;
INSERT INTO `instalaciones_deportivas` VALUES ('552009d1-09b4-43d2-adbd-41c67f000101','Polideportivo Madrid con Fútbol',3,'551ffa7e-8c2c-4c7e-8fa9-41c67f000101','551ffb1b-7f10-40c0-aa55-40a47f000101','551ffaab-8e4c-45ae-b6ab-41fa7f000101','2015-04-04 17:56:00','2015-04-04 17:57:05'),('55200a0c-1078-4a90-be7d-40a07f000101','Barcelona club Baloncesto',0,'551ffa82-c3f0-4d02-90f2-41c67f000101','551ffa5f-1084-45fa-98d6-40a27f000101','551ffaae-affc-44a3-b316-41fa7f000101','2015-04-04 17:57:00','2015-04-04 17:58:04'),('55200a1b-8bc4-4263-89d3-40a47f000101','Galicia polideportivo baloncesto',1,'551ffa8f-faf4-4e73-bd64-41c67f000101','551ffa5f-1084-45fa-98d6-40a27f000101','551ffaab-8e4c-45ae-b6ab-41fa7f000101','2015-04-04 17:58:00','2015-04-04 17:58:19'),('55214e8b-26d8-486e-bfc8-21f27f000101','Club Fútbol Madrid',2,'551ffa7e-8c2c-4c7e-8fa9-41c67f000101','551ffb1b-7f10-40c0-aa55-40a47f000101','551ffaae-affc-44a3-b316-41fa7f000101','2015-04-05 17:02:00','2015-04-05 17:02:35'),('55215c91-8c90-476e-9632-22497f000101','Madrid Futbol Club',0,'551ffa7e-8c2c-4c7e-8fa9-41c67f000101','551ffb1b-7f10-40c0-aa55-40a47f000101','551ffaae-affc-44a3-b316-41fa7f000101','2015-04-05 18:02:00','2015-04-05 18:02:25');
/*!40000 ALTER TABLE `instalaciones_deportivas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_instalaciones`
--

DROP TABLE IF EXISTS `tipos_instalaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_instalaciones` (
  `id` char(36) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_instalaciones`
--

LOCK TABLES `tipos_instalaciones` WRITE;
/*!40000 ALTER TABLE `tipos_instalaciones` DISABLE KEYS */;
INSERT INTO `tipos_instalaciones` VALUES ('551ffaab-8e4c-45ae-b6ab-41fa7f000101','Polideportivo','2015-04-04 16:52:27','2015-04-04 16:52:27'),('551ffaae-affc-44a3-b316-41fa7f000101','Club','2015-04-04 16:52:30','2015-04-04 16:52:30');
/*!40000 ALTER TABLE `tipos_instalaciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-05 19:21:21
