CREATE DATABASE  IF NOT EXISTS `controls` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `controls`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: controls
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `global_customers`
--

DROP TABLE IF EXISTS `global_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `global_customers` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `limite_credito` decimal(18,2) DEFAULT NULL,
  `activo` char(1) NOT NULL DEFAULT '1',
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `global_customers`
--

LOCK TABLES `global_customers` WRITE;
/*!40000 ALTER TABLE `global_customers` DISABLE KEYS */;
INSERT INTO `global_customers` VALUES (1,'Cliente 1','656-123-1234','656-124-3210','micorreo@dominio.com','Direccion #123, Col. Colonia',500.00,'1',1),(2,'Cliente 2','656-342-1243','656-342-1243','correo@gmail.com','Nueva ubicación #453',100.00,'1',1),(3,'Cliente 3','544343','43534','','',100.00,'1',1);
/*!40000 ALTER TABLE `global_customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `global_departament`
--

DROP TABLE IF EXISTS `global_departament`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `global_departament` (
  `id_dep` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_perm` varchar(150) NOT NULL,
  `date_perm` date DEFAULT NULL,
  `active_perm` char(1) DEFAULT '1',
  PRIMARY KEY (`id_dep`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `global_departament`
--

LOCK TABLES `global_departament` WRITE;
/*!40000 ALTER TABLE `global_departament` DISABLE KEYS */;
INSERT INTO `global_departament` VALUES (1,'Investigaci&oacute;n y Dessarrollo','2021-01-30','1');
/*!40000 ALTER TABLE `global_departament` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `global_permission`
--

DROP TABLE IF EXISTS `global_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `global_permission` (
  `id_permission` int(11) NOT NULL AUTO_INCREMENT,
  `name_perm` varchar(180) NOT NULL,
  `date_perm` date DEFAULT NULL,
  `active_perm` char(1) NOT NULL DEFAULT '1',
  `user_c` tinyint(1) NOT NULL DEFAULT '0',
  `user_e` tinyint(1) NOT NULL DEFAULT '0',
  `user_v` tinyint(1) NOT NULL DEFAULT '0',
  `user_d` tinyint(1) NOT NULL DEFAULT '0',
  `task_v` tinyint(1) NOT NULL DEFAULT '0',
  `task_c` tinyint(1) NOT NULL DEFAULT '0',
  `task_e` tinyint(1) NOT NULL DEFAULT '0',
  `task_d` tinyint(1) NOT NULL DEFAULT '0',
  `service_v` tinyint(1) NOT NULL DEFAULT '0',
  `service_c` tinyint(1) NOT NULL DEFAULT '0',
  `service_e` tinyint(1) NOT NULL DEFAULT '0',
  `service_d` tinyint(1) NOT NULL DEFAULT '0',
  `client_v` tinyint(1) NOT NULL DEFAULT '0',
  `client_c` tinyint(1) NOT NULL DEFAULT '0',
  `client_e` tinyint(1) NOT NULL DEFAULT '0',
  `client_d` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_permission`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `global_permission`
--

LOCK TABLES `global_permission` WRITE;
/*!40000 ALTER TABLE `global_permission` DISABLE KEYS */;
INSERT INTO `global_permission` VALUES (1,'Developer','2021-01-29','1',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);
/*!40000 ALTER TABLE `global_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `global_users`
--

DROP TABLE IF EXISTS `global_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `global_users` (
  `id_users` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_user` varchar(45) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `fullname_user` varchar(255) NOT NULL,
  `mail_user` varchar(85) NOT NULL,
  `picture_user` text,
  `relog_user` varchar(25) DEFAULT NULL,
  `datestart_user` date NOT NULL,
  `company_user` int(11) NOT NULL,
  `cellphone_user` varchar(60) DEFAULT NULL,
  `departament_user` varchar(45) DEFAULT NULL,
  `token_user` varchar(145) DEFAULT NULL,
  `active_user` char(1) NOT NULL,
  `desc_user` text,
  `id_permission` int(11) NOT NULL,
  PRIMARY KEY (`id_users`),
  UNIQUE KEY `global_users_user_user_uindex` (`user_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `global_users`
--

LOCK TABLES `global_users` WRITE;
/*!40000 ALTER TABLE `global_users` DISABLE KEYS */;
INSERT INTO `global_users` VALUES (1,'d.pacheco','63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1','Derly Pacheco','derly.pacheco@outlook.com','src/img/avatar/default.jpg','1','2021-01-29',1,'6561800230','1',NULL,'1',NULL,1);
/*!40000 ALTER TABLE `global_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `globals_companys`
--

DROP TABLE IF EXISTS `globals_companys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `globals_companys` (
  `id_company` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_comp` varchar(180) NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `globals_companys`
--

LOCK TABLES `globals_companys` WRITE;
/*!40000 ALTER TABLE `globals_companys` DISABLE KEYS */;
/*!40000 ALTER TABLE `globals_companys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'controls'
--
/*!50003 DROP PROCEDURE IF EXISTS `sp_login_app` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login_app`(
varUser varchar(45),
varPass varchar(100)
)
BEGIN
  
	SELECT
	global_users.fullname_user, 
	global_permission.*, 
	global_users.user_user, 
	global_users.picture_user, 
	global_users.mail_user
FROM
	global_users
	INNER JOIN
	global_permission
	ON 
		global_users.id_permission = global_permission.id_permission
		WHERE user_user = varUser and password_user = sha1(varPass);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-31 12:01:56
