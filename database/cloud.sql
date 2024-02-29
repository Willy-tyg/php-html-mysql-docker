-- --------------------------------------------------------
-- Hôte:                         
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour cloud
CREATE DATABASE IF NOT EXISTS `cloud` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cloud`;

-- Listage de la structure de table cloud. client
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int NOT NULL AUTO_INCREMENT,
  `login` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `telephone` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idClient`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

-- Listage des données de la table cloud.client : ~2 rows (environ)
INSERT INTO `client` (`idClient`, `login`, `adresse`, `telephone`, `email`, `pass`) VALUES
	(29, 'willy', 'nnn', 627854102, 'gireswilly32@gmail.com', '123'),
	(104, 'tene', 'nkoabang', 657074277, 'tenewillyg@gmail.com', 'tene'),
	(105, 'ema', 'lose', 625265897, 'willy@g.c', '123'),
	(106, 'test', 'ngoa', 652585741, 'teng@gmail.com', 'uiemjfioer');

-- Listage de la structure de table cloud. produit
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` varchar(50) NOT NULL,
  `libelle` varchar(45) NOT NULL,
  `prixUnitaire` float NOT NULL,
  `quantiteStock` int NOT NULL,
  `prixAchat` float NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `seuil` int DEFAULT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cloud.produit : ~6 rows (environ)
INSERT INTO `produit` (`reference`, `libelle`, `prixUnitaire`, `quantiteStock`, `prixAchat`, `image`, `seuil`) VALUES
	('biscuit-a', 'amore', 100, 10, 92, NULL, 6),
	('biscuit-parle', 'parle g', 25, 98, 23, NULL, 25),
	('jus-top-a', 'ananas', 500, 7, 425, NULL, 3),
	('jus-top-g', 'grenadine', 500, 9, 425, NULL, 3),
	('jus-top-o', 'orange', 500, 2, 425, NULL, 3),
	('oeuf', 'oeuf de poule', 100, 89, 75, NULL, 35);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
