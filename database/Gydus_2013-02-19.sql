# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: Gydus
# Generation Time: 2013-02-20 02:24:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Buildings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Buildings`;

CREATE TABLE `Buildings` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `school_id` int(255) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `floors` int(1) DEFAULT '1',
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  `alias` varchar(255) DEFAULT NULL,
  `latitude` int(255) DEFAULT NULL,
  `longitude` int(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Buildings` WRITE;
/*!40000 ALTER TABLE `Buildings` DISABLE KEYS */;

INSERT INTO `Buildings` (`id`, `school_id`, `name`, `floors`, `img`, `description`, `alias`, `latitude`, `longitude`, `label`)
VALUES
	(1,1,'FS4A - Web',1,NULL,'Web Building','Web Building',NULL,NULL,NULL),
	(2,1,'FS3B',1,NULL,'Entertainment Business\n','Fish Bowl',NULL,NULL,NULL),
	(3,1,'FS3E',1,NULL,'Media Center','Media Center',NULL,NULL,'Library'),
	(4,1,'FS4B',1,NULL,'Computer Animation \nGame Art','CA, GA',NULL,NULL,NULL),
	(5,1,'FS4A - Film',1,NULL,'Film	','Film',NULL,NULL,NULL),
	(6,1,'FS4E',1,NULL,NULL,NULL,NULL,NULL,NULL),
	(7,1,'FS2',1,NULL,'Digital Art and Design','DAD',NULL,NULL,NULL),
	(8,1,'FS3F ',1,NULL,'',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `Buildings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Rooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Rooms`;

CREATE TABLE `Rooms` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `building_id` int(255) DEFAULT NULL,
  `school_id` int(255) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `latitude` int(255) DEFAULT NULL,
  `longitude` int(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Rooms` WRITE;
/*!40000 ALTER TABLE `Rooms` DISABLE KEYS */;

INSERT INTO `Rooms` (`id`, `building_id`, `school_id`, `name`, `latitude`, `longitude`, `alias`, `label`)
VALUES
	(1,2,1,'Jet Fuel',NULL,NULL,'Jet Fuel','Food'),
	(2,6,1,'Diesel Bean',NULL,NULL,'Diesel Bean','Food'),
	(3,7,1,'Zackley\'s',NULL,NULL,'Zackley\'s','Food'),
	(4,7,1,'Patio 2',NULL,NULL,NULL,'Patio'),
	(5,8,1,'Patio 3',NULL,NULL,NULL,'Patio'),
	(6,8,1,'Zakley\'s 2',NULL,NULL,'Zackley\'s 2','Food');

/*!40000 ALTER TABLE `Rooms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Schools
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Schools`;

CREATE TABLE `Schools` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `latitude` int(255) DEFAULT NULL,
  `longitude` int(255) DEFAULT NULL,
  `address` text,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Schools` WRITE;
/*!40000 ALTER TABLE `Schools` DISABLE KEYS */;

INSERT INTO `Schools` (`id`, `name`, `latitude`, `longitude`, `address`, `img`, `description`)
VALUES
	(1,'FullSail University',NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `Schools` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table SuggestASpot
# ------------------------------------------------------------

DROP TABLE IF EXISTS `SuggestASpot`;

CREATE TABLE `SuggestASpot` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `school_id` int(255) DEFAULT '1',
  `building_id` int(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tally` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table Users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;

INSERT INTO `Users` (`id`, `name`, `email`, `password`)
VALUES
	(1,'Jarvis Jarin','jarvis@jardin.com','c8837b23ff8aaa8a2dde915473ce0991'),
	(4,'Geoffrey Ganga','ganga@email.com','c8837b23ff8aaa8a2dde915473ce0991'),
	(5,'Renee Marie','renee@marie.com','c8837b23ff8aaa8a2dde915473ce0991'),
	(6,'Edward','ed@email.com','c8837b23ff8aaa8a2dde915473ce0991');

/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
