# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: Gydus
# Generation Time: 2013-03-19 00:47:32 +0000
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
  `latitude` text,
  `longitude` text,
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Buildings` WRITE;
/*!40000 ALTER TABLE `Buildings` DISABLE KEYS */;

INSERT INTO `Buildings` (`id`, `school_id`, `latitude`, `longitude`, `name`)
VALUES
	(1,13,'28.5927720000','-81.3052550000','FS4A - Web I'),
	(2,13,'28.5917660000','-81.3040220000','FS4B'),
	(3,13,'28.5912810000','-81.3042040000','FS4C'),
	(4,13,'28.59445935629823','-81.30424216389656','FS3C'),
	(11,13,'28.5955250000','-81.3041290000','FS3A '),
	(12,13,'28.595081089771963','-81.30428373813629','FS3B'),
	(13,13,'28.594146721883558','-81.3042502105236','FS3D'),
	(14,13,'28.5939560000','-81.3045260000','FS3E'),
	(15,13,'28.5937960000','-81.3050270000','FS3F'),
	(16,13,'28.5910270000','-81.3044820000','FS4D'),
	(17,13,'28.5907870000','-81.3047180000','FS4E'),
	(18,13,'28.5904500000','-81.3050780000','FS4F'),
	(19,13,'28.5901620000','-81.3053920000','FS4G'),
	(20,13,'28.5924260000','-81.3046490000','FS4A - Film'),
	(21,13,'28.5921810000','-81.3042690000','FS4A - Web II'),
	(22,13,'28.59474196287855','-81.30426898598671','FS3B - GameDesign');

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
	(2,'FS3B',131,'28.594416, -81.303782;\n28.594413, -81.304147;\n28.594475, -81.304270;\n28.595078, -81.304286;\n28.595023, -81.304056;\n28.595078, -81.303879;\n28.595038, -81.303871\n','FS3C',110),
	(3,'FS3B',1,'28.595081089771963,-81.30428373813629;\n28.595063426939948, -81.30416706204414;\n28.5950416428,-81.3041556627;','FS3B',137);

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
	(2,'FS3B','28.594865,-81.304356','28.595440,-81.303535','http://i1326.photobucket.com/albums/u657/GydusApp/FS3B-Entertainment-01copy_zpsaffa80e8.png','28.594865','-81.304356','28.595440','-81.303535'),
	(3,'FS3E','28.5937999379893, -81.3045734167099','28.594056640608454,-81.30420595407486','http://i1326.photobucket.com/albums/u657/GydusApp/FS3E-01test_zps55813cc6.png','28.5937999379893','-81.3045734167099','28.594056640608454','-81.30420595407486'),
	(4,'FS3D','28.594013,-81.304251','28.594253,-81.304002','http://i1326.photobucket.com/albums/u657/GydusApp/FS3D-01test_zps69747b5c.png','28.594013','-81.304251','28.594253','-81.304002'),
	(5,'FS3B-game','28.594650,-81.304268','28.594893,-81.303792','http://i1326.photobucket.com/albums/u657/GydusApp/FS3B-GameDesign-01copy_zps19177f44.png','28.594650','-81.304268','28.594893','-81.303792'),
	(6,'FS3F','28.593301,-81.305426','28.594046,-81.304612','http://i1326.photobucket.com/albums/u657/GydusApp/FS3F_16154try_zpsd43461ba.png','28.593301','-81.305426','28.594046','-81.304612'),
	(7,'FS4A','28.592496,-81.305500','28.592939,-81.304856','http://i1326.photobucket.com/albums/u657/GydusApp/FS4AWeb1FilmWeb2_33218copy_zpsbeb8c15b.png','28.592496','-81.305500','28.592939','-81.304856'),
	(8,'FS4A - Film','28.592260886663286, -81.30490601062775','28.592925024811905, -81.30419254302979','http://i1326.photobucket.com/albums/u657/GydusApp/FILM_zpsb5b9f822.png','28.592260886663286','-81.30490601062775','28.592925024811905','-81.30419254302979');

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
	(6,'Restroom','FS3C',28.5942968572,-81.3037768006,'Restroom'),
	(7,'Patio','FS3F',28.5937022024,-81.3054491580,'Patio'),
	(8,'Library','FS3E',28.5939942313,-81.3043320179,'Library'),
	(9,'Receptionist','FS3B',28.5950963976,-81.3041442633,'Receptionist'),
	(10,'Receptionist','FS3F',28.5939801009,-81.3050562143,'Receptionist'),
	(11,'Restroom','FS3E',28.5938811880,-81.3044634461,'Restroom'),
	(12,'Restroom','FS3F',28.5939070937,-81.3053163886,'Restroom'),
	(13,'Vending Machine','FS3E',28.5938717677,-81.3043588400,'Food/Beverage'),
	(14,'Vending Machine','FS3F',28.5938458619,-81.3053941727,'Food/Beverage'),
	(15,'Zaxly\'s','FS3F',28.5939353546,-81.3054612279,'Food/Beverage');

/*!40000 ALTER TABLE `PointsOfInterest` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Rooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Rooms`;

CREATE TABLE `Rooms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `building_id` varchar(11) DEFAULT NULL,
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
	(1,'FS3B',28.5950416428,-81.3041556627,'137',1),
	(2,'FS3B',28.5950381102,-81.3041154295,'136',1),
	(3,'FS3B',28.5949910093,-81.3039504737,'132',1),
	(4,'FS3B',28.5949403758,-81.3039511442,'133',1),
	(5,'FS3B',28.5949268343,-81.3039538264,'134',1),
	(6,'FS3B',28.5950381102,-81.3038921356,'131',1),
	(7,'FS3B',28.5950375214,-81.3037171215,'130',1),
	(8,'FS3B',28.5952218036,-81.3039886951,'115',1),
	(9,'FS3B',28.5952188598,-81.3037486374,'120',1),
	(10,'FS3B',28.5952477090,-81.3038887829,'112',1),
	(11,'FS3B',28.5952447652,-81.3037157804,'113',1),
	(12,'FS3B',28.5952471202,-81.3042220473,'106',1),
	(13,NULL,NULL,NULL,NULL,1);

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
