-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.36-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bienesraices
CREATE DATABASE IF NOT EXISTS `bienesraices` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `bienesraices`;

-- Volcando estructura para tabla bienesraices.propiedades
CREATE TABLE IF NOT EXISTS `propiedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `descripcion` longtext COLLATE latin1_general_ci,
  `habitaciones` int(1) DEFAULT NULL,
  `wc` int(1) DEFAULT NULL,
  `estacionamiento` int(1) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `vendedores_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vendedores` (`vendedores_id`),
  CONSTRAINT `fk_vendedores` FOREIGN KEY (`vendedores_id`) REFERENCES `vendedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Volcando datos para la tabla bienesraices.propiedades: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `habitaciones`, `wc`, `estacionamiento`, `creado`, `vendedores_id`) VALUES
	(6, 'Casa de una planta en el bosque', 110000.00, '04f7c3e542675bc1f3e1e4ad751b34c1.jpg', 'Hermosa casa de campo con amplios jardines delanteros y traseros, alejados del ruido de la ciudad', 4, 3, 3, '2022-08-02', 2),
	(7, 'Casa en la playa', 120000.00, '173ad39796de7b8a55f0b37fbefcf4d8.jpg', 'Hermosa casa en la playa, para disfrutar en vacaciones de verano', 3, 2, 2, '2022-08-03', 1),
	(8, 'Casa de ciudad familiar', 100000.00, '79901a95867c8f1cdc836db32185ce65.jpg', 'Amplia casa familiar en zona residencial, segura,  cerca de supermercados y centros comerciales, ', 3, 2, 1, '2022-08-04', 2),
	(9, 'Casa grande con piscina', 140000.00, 'a79ce22d070bc26d06a126e0058e1d3f.jpg', 'Hermosa casa en zona residencial con amplios espacios interiores y exteriores', 5, 3, 2, '2022-08-03', 1);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;

-- Volcando estructura para tabla bienesraices.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(60) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Volcando datos para la tabla bienesraices.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
	(1, 'correo@correo.com', '$2y$10$z/QNpZSHS/qjVrvMRPzy9.GtKzShgxpsryEEpMbhWUO7tXzfXeXKW');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla bienesraices.vendedores
CREATE TABLE IF NOT EXISTS `vendedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `apellido` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Volcando datos para la tabla bienesraices.vendedores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` (`id`, `nombre`, `apellido`, `telefono`) VALUES
	(1, 'Alex', 'Guaman', '099999999'),
	(2, 'Karen', 'García', '088888888');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
