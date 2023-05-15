-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.24-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database formula_1
CREATE DATABASE IF NOT EXISTS `formula_1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `formula_1`;

-- Dump della struttura di tabella formula_1.piloti
CREATE TABLE IF NOT EXISTS `piloti` (
  `nome` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `team` char(50) DEFAULT NULL,
  `cod_pilota` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cod_pilota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella formula_1.piloti: ~20 rows (circa)
DELETE FROM `piloti`;
INSERT INTO `piloti` (`nome`, `cognome`, `team`, `cod_pilota`) VALUES
	('Lewis', 'Hamilton', 'Merced', 0),
	('George', 'Russell', 'Merced', 1),
	('Sergio', 'Perez', 'RedBull', 2),
	('Max', 'Verstappen', 'RedBull', 3),
	('Oscar', 'Piastri', 'McLaren', 4),
	('Lando', 'Norris', 'McLaren', 5),
	('Carlos', 'Sainz', 'Ferrari', 6),
	('Charles', 'Leclerc', 'Ferrari', 7),
	('Zhou', 'Guanyu', 'Alpha Romeo', 8),
	('Valtteri', 'Bottas', 'Alpha Romeo', 9),
	('Fernando', 'Alonso', 'Aston Martin', 10),
	('Lance', 'Stroll', 'Aston Martin', 11),
	('Kevin', 'Magnussen', 'Haas', 12),
	('Nico', 'Hulkenberg', 'Haas', 13),
	('Alexander', 'Albon', 'Williams', 14),
	('Logan', 'Sargeant', 'Williams', 15),
	('Pierre', 'Gasly', 'Alpine', 16),
	('Esteban', 'Ocon', 'Alpine', 17),
	('Nick', 'De Vries', 'Alpha Tauri', 18),
	('Yuki', 'Tsunoda', 'Alpha Tauri', 19);

-- Dump della struttura di tabella formula_1.squadra
CREATE TABLE IF NOT EXISTS `squadra` (
  `cod_sq` int(11) NOT NULL DEFAULT 0,
  `piloti` char(50) NOT NULL,
  `nome_sq` char(50) DEFAULT NULL,
  `cod_pilota` int(11) NOT NULL,
  `email_utente` char(50) NOT NULL,
  PRIMARY KEY (`cod_sq`),
  KEY `FK1_codicepilota` (`cod_pilota`),
  KEY `FK2_emailutente` (`email_utente`),
  CONSTRAINT `FK1_codicepilota` FOREIGN KEY (`cod_pilota`) REFERENCES `piloti` (`cod_pilota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK2_emailutente` FOREIGN KEY (`email_utente`) REFERENCES `utente` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella formula_1.squadra: ~0 rows (circa)
DELETE FROM `squadra`;

-- Dump della struttura di tabella formula_1.utente
CREATE TABLE IF NOT EXISTS `utente` (
  `nome` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `email` char(50) NOT NULL,
  `password` char(50) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella formula_1.utente: ~0 rows (circa)
DELETE FROM `utente`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
