# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: Gydus
# Generation Time: 2013-03-17 07:26:06 +0000
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
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `school_id` int(11) unsigned DEFAULT NULL,
  `latitude` decimal(65,10) DEFAULT NULL,
  `longitude` decimal(65,10) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Buildings` WRITE;
/*!40000 ALTER TABLE `Buildings` DISABLE KEYS */;

INSERT INTO `Buildings` (`id`, `school_id`, `latitude`, `longitude`, `name`)
VALUES
	(1,13,28.5927720000,-81.3052550000,'FS4A - Web I'),
	(2,13,28.5917660000,-81.3040220000,'FS4B'),
	(3,13,28.5912810000,-81.3042040000,'FS4C'),
	(4,13,28.5944770000,-81.3039730000,'FS3C'),
	(11,13,28.5955250000,-81.3041290000,'FS3A '),
	(12,13,28.5951290000,-81.3040320000,'FS3B'),
	(13,13,28.5941680000,-81.3041400000,'FS3D'),
	(14,13,28.5939560000,-81.3045260000,'FS3E'),
	(15,13,28.5937960000,-81.3050270000,'FS3F'),
	(16,13,28.5910270000,-81.3044820000,'FS4D'),
	(17,13,28.5907870000,-81.3047180000,'FS4E'),
	(18,13,28.5904500000,-81.3050780000,'FS4F'),
	(19,13,28.5901620000,-81.3053920000,'FS4G'),
	(20,13,28.5924260000,-81.3046490000,'FS4A - Film'),
	(21,13,28.5921810000,-81.3042690000,'FS4A - Web II');

/*!40000 ALTER TABLE `Buildings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Navigation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Navigation`;

CREATE TABLE `Navigation` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `buildingA` varchar(255) DEFAULT NULL,
  `pointA` int(255) DEFAULT NULL,
  `directions` text,
  `buildingB` varchar(255) DEFAULT NULL,
  `pointB` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Navigation` WRITE;
/*!40000 ALTER TABLE `Navigation` DISABLE KEYS */;

INSERT INTO `Navigation` (`id`, `buildingA`, `pointA`, `directions`, `buildingB`, `pointB`)
VALUES
	(1,'FS3B',136,'28.594416, -81.303782;\n28.594413, -81.304147;\n28.594475, -81.304270;\n28.595078, -81.304286;\n28.595038, -81.303871','FS3C',110),
	(2,'FS3B',131,'28.594416, -81.303782;\n28.594413, -81.304147;\n28.594475, -81.304270;\n28.595078, -81.304286;\n28.595023, -81.304056;\n28.595078, -81.303879;\n28.595038, -81.303871\n','FS3C',110);

/*!40000 ALTER TABLE `Navigation` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Overlays
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Overlays`;

CREATE TABLE `Overlays` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `SW` text,
  `NE` text,
  `url` varchar(155) DEFAULT NULL,
  `SWlat` text,
  `SWlng` text,
  `NElat` text,
  `NElng` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Overlays` WRITE;
/*!40000 ALTER TABLE `Overlays` DISABLE KEYS */;

INSERT INTO `Overlays` (`id`, `name`, `SW`, `NE`, `url`, `SWlat`, `SWlng`, `NElat`, `NElng`)
VALUES
	(1,'FS3C','28.594256,-81.304249','28.594663,-81.303696','http://i1326.photobucket.com/albums/u657/GydusApp/FSB3Ctest_zps85479c14.png','28.594256','-81.304249','28.594663','-81.303696'),
	(2,'FS3B','28.594906,-81.304305','28.595417,-81.303560','http://i1326.photobucket.com/albums/u657/GydusApp/FS3B-Entertainment-01copy_zpsaffa80e8.png','28.594906','-81.304305','28.595417','-81.303560'),
	(3,'FS3E','28.593777, -81.30455','28.594044,-81.304228','http://i1326.photobucket.com/albums/u657/GydusApp/FS3E-01test_zps2b70a342.png','28.593777',' -81.30455','28.594044','-81.304228'),
	(4,'FS3D','28.594013,-81.304251','28.594253,-81.304002','http://i1326.photobucket.com/albums/u657/GydusApp/FS3D-01test_zps69747b5c.png','28.594013','-81.304251','28.594253','-81.304002'),
	(5,'FS3B-game','28.594650,-81.304268','28.594893,-81.303792','http://i1326.photobucket.com/albums/u657/GydusApp/FS3B-GameDesign-01copy_zps19177f44.png','28.594650','-81.304268','28.594893','-81.303792'),
	(6,'FS3F','28.593301,-81.305426','28.594046,-81.304612','http://i1326.photobucket.com/albums/u657/GydusApp/FS3F_16154try_zpsd43461ba.png','28.593301','-81.305426','28.594046','-81.304612');

/*!40000 ALTER TABLE `Overlays` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table PointsOfInterest
# ------------------------------------------------------------

DROP TABLE IF EXISTS `PointsOfInterest`;

CREATE TABLE `PointsOfInterest` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `building` varchar(255) DEFAULT NULL,
  `latitude` decimal(65,10) DEFAULT NULL,
  `longitude` decimal(65,10) DEFAULT NULL,
  `categorey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `PointsOfInterest` WRITE;
/*!40000 ALTER TABLE `PointsOfInterest` DISABLE KEYS */;

INSERT INTO `PointsOfInterest` (`id`, `name`, `building`, `latitude`, `longitude`, `categorey`)
VALUES
	(1,'Restroom','FS3B',28.5951752915,-81.3036990166,'Restroom'),
	(2,'Vending Machine','FS3B',28.5951905993,-81.3035957515,'Food/Beverage'),
	(3,'Disel Bean','FS3B',28.5950893324,-81.3038800657,'Food/Beverage'),
	(4,'Restroom','FS3B',28.5947031045,-81.3038653135,'Restroom'),
	(5,'Vending Machine','FS3C',28.5945005698,-81.3037714362,'Food/Beverage'),
	(6,'Restroom','FS3C',28.5942968572,-81.3037768006,'Restroom');

/*!40000 ALTER TABLE `PointsOfInterest` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Rooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Rooms`;

CREATE TABLE `Rooms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `building_id` int(11) unsigned DEFAULT NULL,
  `latitude` decimal(65,10) DEFAULT NULL,
  `longitude` decimal(65,10) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `floor` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Rooms` WRITE;
/*!40000 ALTER TABLE `Rooms` DISABLE KEYS */;

INSERT INTO `Rooms` (`id`, `building_id`, `latitude`, `longitude`, `name`, `floor`)
VALUES
	(10,12,NULL,NULL,'106A',1),
	(11,12,NULL,NULL,'137',1),
	(12,12,NULL,NULL,'136',1),
	(13,12,NULL,NULL,'112',1),
	(14,12,NULL,NULL,'113',1),
	(15,12,NULL,NULL,'131',1),
	(16,12,NULL,NULL,'130',1),
	(17,12,NULL,NULL,'304',1),
	(18,12,NULL,NULL,'305',1),
	(19,12,NULL,NULL,'307',1),
	(20,12,NULL,NULL,'308',1),
	(21,12,NULL,NULL,'309',1),
	(22,4,NULL,NULL,'120',1),
	(23,4,NULL,NULL,'116',1),
	(24,4,NULL,NULL,'115',1),
	(25,4,NULL,NULL,'102',1),
	(26,4,NULL,NULL,'103',1),
	(27,4,NULL,NULL,'104',1),
	(28,4,NULL,NULL,'105',1),
	(29,4,NULL,NULL,'110',1),
	(30,1,NULL,NULL,'102',1),
	(31,1,NULL,NULL,'103',1),
	(32,1,NULL,NULL,'106',1),
	(33,1,NULL,NULL,'107',1),
	(34,1,NULL,NULL,'108',1),
	(35,2,NULL,NULL,'110',1),
	(36,2,NULL,NULL,'111',1),
	(37,2,NULL,NULL,'113',1),
	(38,2,NULL,NULL,'114',1),
	(39,2,NULL,NULL,'132',1),
	(40,2,NULL,NULL,'131',1),
	(41,2,NULL,NULL,'130',1),
	(42,2,NULL,NULL,'129',1),
	(43,2,NULL,NULL,'126',1),
	(44,2,NULL,NULL,'127',1),
	(45,3,NULL,NULL,'Offices',1),
	(83,11,NULL,NULL,'Audio Temple',1),
	(84,13,NULL,NULL,'APP',1),
	(85,13,NULL,NULL,'SRD',1),
	(86,14,NULL,NULL,'Media Center',1),
	(87,15,NULL,NULL,'111',1),
	(88,15,NULL,NULL,'121',1),
	(89,16,NULL,NULL,'Offices',1),
	(90,17,NULL,NULL,'Distribution Center',1),
	(91,18,NULL,NULL,'105',1),
	(92,19,NULL,NULL,'Enrollment',1),
	(93,20,NULL,NULL,'104S',1),
	(94,20,NULL,NULL,'106S',1),
	(95,20,NULL,NULL,'109S',1),
	(96,21,NULL,NULL,'139',1),
	(97,21,NULL,NULL,'135',1),
	(98,21,NULL,NULL,'138',1);

/*!40000 ALTER TABLE `Rooms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Rooms_copy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Rooms_copy`;

CREATE TABLE `Rooms_copy` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `building` varchar(11) DEFAULT NULL,
  `latitude` decimal(65,10) DEFAULT NULL,
  `longitude` decimal(65,10) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `floor` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Rooms_copy` WRITE;
/*!40000 ALTER TABLE `Rooms_copy` DISABLE KEYS */;

INSERT INTO `Rooms_copy` (`id`, `building`, `latitude`, `longitude`, `name`, `floor`)
VALUES
	(1,'FS3B',28.5950704921,-81.3042408228,'entrance',1),
	(2,'FS3B',28.5950257462,-81.3040463626,'137',1),
	(3,'FS3B',28.5950375214,-81.3040141761,'136',1);

/*!40000 ALTER TABLE `Rooms_copy` ENABLE KEYS */;
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
	(1,'Jarizard ','jarvis@jardin.com','81dc9bdb52d04dc20036dbd8313ed055'),
	(4,'Geoffrey Ganga','ganga@email.com','c8837b23ff8aaa8a2dde915473ce0991'),
	(5,'Renee Marie','renee@marie.com','c8837b23ff8aaa8a2dde915473ce0991'),
	(6,'Edward','ed@email.com','c8837b23ff8aaa8a2dde915473ce0991'),
	(7,'Yasmeen Lozada','yaz@email.com','c8837b23ff8aaa8a2dde915473ce0991'),
	(8,'Michael Hawke','mikeh@email.com','c8837b23ff8aaa8a2dde915473ce0991'),
	(9,'musi09','Vtech09@hotmail.com','e06de00830ba06a94b1ae61e63e0cba2');

/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
