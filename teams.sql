# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: teams
# Generation Time: 2021-08-02 14:30:44 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table f1teams
# ------------------------------------------------------------

DROP TABLE IF EXISTS `f1teams`;

CREATE TABLE `f1teams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `teamName` varchar(30) DEFAULT NULL,
  `basedIn` varchar(30) DEFAULT NULL,
  `poles` int(11) DEFAULT NULL,
  `wins` int(11) DEFAULT NULL,
  `podiums` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `f1teams` WRITE;
/*!40000 ALTER TABLE `f1teams` DISABLE KEYS */;

INSERT INTO `f1teams` (`id`, `teamName`, `basedIn`, `poles`, `wins`, `podiums`)
VALUES
	(1,'Mercedes','UK',15,13,25),
	(2,'Red Bull','UK',1,2,13),
	(3,'McLaren','UK',0,0,2),
	(4,'Racing Point','UK',1,1,4),
	(5,'Renault','UK',0,0,2),
	(6,'Ferrari','Italy',0,0,2),
	(7,'AlphaTauri','Italy',0,1,1),
	(8,'Alfa Romeo','Switzerland',0,0,0),
	(9,'Haas','USA',0,0,0),
	(10,'Williams','UK',0,0,0);

/*!40000 ALTER TABLE `f1teams` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
