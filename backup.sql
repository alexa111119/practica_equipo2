-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: practica_ipi
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `idEmpresas` int NOT NULL AUTO_INCREMENT,
  `Nombre_empresa` varchar(45) DEFAULT NULL,
  `RNC` int DEFAULT NULL,
  `Identidad` varchar(45) DEFAULT NULL,
  `Formacion_empresa` varchar(45) DEFAULT NULL,
  `Alcance_empresa` varchar(45) DEFAULT NULL,
  `Actividad_economica` varchar(45) DEFAULT NULL,
  `Industria` varchar(45) DEFAULT NULL,
  `Tamaño` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Sector` varchar(45) DEFAULT NULL,
  `Municipio` varchar(45) DEFAULT NULL,
  `Provincia` varchar(45) DEFAULT NULL,
  `Pais` varchar(45) DEFAULT NULL,
  `Telefono_principal` int DEFAULT NULL,
  `Telefono_directo` int DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Contraseña` int DEFAULT NULL,
  `Contacto` int DEFAULT NULL,
  PRIMARY KEY (`idEmpresas`),
  KEY `nom_empresa` (`Nombre_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiantes` (
  `ID_estudiantes` int NOT NULL AUTO_INCREMENT,
  `Año_graduacion` int NOT NULL,
  `Institucion` varchar(45) DEFAULT NULL,
  `Cedula` varchar(45) DEFAULT NULL,
  `Matricula` int DEFAULT NULL,
  `Carrera_tecnica` varchar(45) DEFAULT NULL,
  `Tecnico_basico` varchar(45) DEFAULT NULL,
  `Nombres` varchar(45) DEFAULT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `Fecha_nacimiento` date DEFAULT NULL,
  `Sexo` varchar(55) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Sector` varchar(45) DEFAULT NULL,
  `Seccion` varchar(45) DEFAULT NULL,
  `Municipio` varchar(45) DEFAULT NULL,
  `Provincia` varchar(45) DEFAULT NULL,
  `Pais_nacionalidad` varchar(45) DEFAULT NULL,
  `Telefono_residencial` int DEFAULT NULL,
  `Telefono_movil` varchar(45) DEFAULT NULL,
  `Licencia` varchar(45) DEFAULT NULL,
  `Vehiculo_propio` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Contraseña` int DEFAULT NULL,
  PRIMARY KEY (`ID_estudiantes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacantes`
--

DROP TABLE IF EXISTS `vacantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vacantes` (
  `idVacantes` int NOT NULL AUTO_INCREMENT,
  `Nombre_empresa` varchar(45) DEFAULT NULL,
  `Funciones` varchar(45) DEFAULT NULL,
  `Sueldo` int DEFAULT NULL,
  `Ubicacion` varchar(45) DEFAULT NULL,
  `Tipo_contrato` varchar(45) DEFAULT NULL,
  `Horario` int DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Persona_contacto` varchar(45) DEFAULT NULL,
  `Telefono` int DEFAULT NULL,
  PRIMARY KEY (`idVacantes`),
  KEY `nom_empresa_idx` (`Nombre_empresa`),
  CONSTRAINT `nom_empresa` FOREIGN KEY (`Nombre_empresa`) REFERENCES `empresas` (`Nombre_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacantes`
--

LOCK TABLES `vacantes` WRITE;
/*!40000 ALTER TABLE `vacantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `vacantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-09 19:11:19
