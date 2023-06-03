-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
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
CREATE DATABASE IF NOT EXISTS `formula_1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `formula_1`;

-- Dump della struttura di tabella formula_1.appartiene
CREATE TABLE IF NOT EXISTS `appartiene` (
  `cod_ap` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pilota` int(11) NOT NULL,
  `cod_squadra` int(11) NOT NULL,
  PRIMARY KEY (`cod_ap`),
  KEY `FK1_cod_pilota` (`cod_pilota`),
  KEY `FK2_cod_squadra` (`cod_squadra`),
  CONSTRAINT `FK1_cod_pilota` FOREIGN KEY (`cod_pilota`) REFERENCES `piloti` (`cod_pilota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK2_cod_squadra` FOREIGN KEY (`cod_squadra`) REFERENCES `squadra` (`cod_sq`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=815 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella formula_1.appartiene: ~0 rows (circa)
DELETE FROM `appartiene`;

-- Dump della struttura di tabella formula_1.piloti
CREATE TABLE IF NOT EXISTS `piloti` (
  `nome` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `team` char(50) DEFAULT NULL,
  `cod_pilota` int(11) NOT NULL DEFAULT 0,
  `foto` char(50) DEFAULT NULL,
  PRIMARY KEY (`cod_pilota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella formula_1.piloti: ~20 rows (circa)
DELETE FROM `piloti`;
INSERT INTO `piloti` (`nome`, `cognome`, `team`, `cod_pilota`, `foto`) VALUES
	('Lewis', 'Hamilton', 'Merced', 0, NULL),
	('George', 'Russell', 'Merced', 1, NULL),
	('Sergio', 'Perez', 'RedBull', 2, NULL),
	('Max', 'Verstappen', 'RedBull', 3, NULL),
	('Oscar', 'Piastri', 'McLaren', 4, NULL),
	('Lando', 'Norris', 'McLaren', 5, NULL),
	('Carlos', 'Sainz', 'Ferrari', 6, NULL),
	('Charles', 'Leclerc', 'Ferrari', 7, NULL),
	('Zhou', 'Guanyu', 'Alpha Romeo', 8, NULL),
	('Valtteri', 'Bottas', 'Alpha Romeo', 9, NULL),
	('Fernando', 'Alonso', 'Aston Martin', 10, NULL),
	('Lance', 'Stroll', 'Aston Martin', 11, NULL),
	('Kevin', 'Magnussen', 'Haas', 12, NULL),
	('Nico', 'Hulkenberg', 'Haas', 13, NULL),
	('Alexander', 'Albon', 'Williams', 14, NULL),
	('Logan', 'Sargeant', 'Williams', 15, NULL),
	('Pierre', 'Gasly', 'Alpine', 16, NULL),
	('Esteban', 'Ocon', 'Alpine', 17, NULL),
	('Nick', 'De Vries', 'Alpha Tauri', 18, NULL),
	('Yuki', 'Tsunoda', 'Alpha Tauri', 19, NULL);

-- Dump della struttura di tabella formula_1.squadra
CREATE TABLE IF NOT EXISTS `squadra` (
  `cod_sq` int(11) NOT NULL AUTO_INCREMENT,
  `pilota1` char(50) NOT NULL,
  `pilota2` char(50) NOT NULL,
  `pilota3` char(50) NOT NULL,
  `pilota4` char(50) NOT NULL,
  `pilota5` char(50) NOT NULL,
  `nome_sq` char(50) DEFAULT NULL,
  `email_utente` char(50) NOT NULL,
  PRIMARY KEY (`cod_sq`),
  KEY `FK2_emailutente` (`email_utente`),
  CONSTRAINT `FK2_emailutente` FOREIGN KEY (`email_utente`) REFERENCES `utente` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella formula_1.squadra: ~0 rows (circa)
DELETE FROM `squadra`;

-- Dump della struttura di tabella formula_1.utente
CREATE TABLE IF NOT EXISTS `utente` (
  `nome` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `email` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `immagine_profilo` char(50) DEFAULT '../immagini/immagini_profilo/iconaomino.png',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella formula_1.utente: ~1 rows (circa)
DELETE FROM `utente`;
INSERT INTO `utente` (`nome`, `cognome`, `email`, `password`, `immagine_profilo`) VALUES
	('dsa', 'dsa', 'dsa@g', 'dsa', 'fds - 2023.06.02 - 04.19.09.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
