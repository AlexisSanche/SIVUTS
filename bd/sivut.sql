-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para sivuts
CREATE DATABASE IF NOT EXISTS `sivuts` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sivuts`;

-- Volcando estructura para tabla sivuts.cargo
CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sivuts.cargo: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` (`id`, `descripcion`) VALUES
	(1, 'admin'),
	(2, 'votante');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;

-- Volcando estructura para tabla sivuts.proyecto
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `votante_id` int(11) NOT NULL DEFAULT 0,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `fecha` date NOT NULL,
  `votos` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_proyecto_votante` (`votante_id`),
  CONSTRAINT `FK_proyecto_votante` FOREIGN KEY (`votante_id`) REFERENCES `votante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sivuts.proyecto: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
INSERT INTO `proyecto` (`id`, `votante_id`, `titulo`, `descripcion`, `fecha`, `votos`) VALUES
	(64, 18, 'SIVUTS', 'pagina para votar en linea', '2021-08-19', 1);
/*!40000 ALTER TABLE `proyecto` ENABLE KEYS */;

-- Volcando estructura para tabla sivuts.votante
CREATE TABLE IF NOT EXISTS `votante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `phone` text CHARACTER SET utf8mb4 NOT NULL,
  `years` text CHARACTER SET utf8mb4 NOT NULL,
  `curp` text CHARACTER SET utf8mb4 NOT NULL,
  `matri` text CHARACTER SET utf8mb4 NOT NULL,
  `email` text CHARACTER SET utf8mb4 NOT NULL,
  `pass` text CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_votante_cargo` (`cargo_id`),
  CONSTRAINT `FK_votante_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sivuts.votante: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `votante` DISABLE KEYS */;
INSERT INTO `votante` (`id`, `cargo_id`, `name`, `lastname`, `phone`, `years`, `curp`, `matri`, `email`, `pass`) VALUES
	(16, 1, 'Rafael', 'Hernandez Hernandez  ', '9191066509', '24', 'HEHR092096HCSRRF00', '091810677', 'rafa@gmail.com', '2d8d596a0b97569f9226a8c33ed9c6dbc8d88120'),
	(17, 1, 'Miguel', 'Camacho Diaz  ', '9191061256', '21', 'HCSDWERGT5423', '091810645', 'migue@gmail.com', '75004f149038473757da0be07ef76dd4a9bdbc8d'),
	(18, 2, 'muchaplata', 'Castillo  ', '9191066509', '23', 'DIGV990903HSZMC09', '091815569', 'plata@gmail.com', '321bee424892ebf10dff926d024e997f7f71e8c1');
/*!40000 ALTER TABLE `votante` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
