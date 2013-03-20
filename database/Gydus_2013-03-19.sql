# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: Gydus
# Generation Time: 2013-03-20 02:21:27 +0000
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
	(1,13,'28.5927720000','-81.3052550000','FS4A'),
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
	(20,13,'28.5924260000','-81.3046490000','FS4A'),
	(21,13,'28.5921810000','-81.3042690000','FS4A'),
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
	(7,'FS4A','28.592568227711105, -81.3055282831192','28.592909716710317, -81.30466192960739','http://i1326.photobucket.com/albums/u657/GydusApp/FS4aweb_zpsd8d8bdd8.png','28.592568227711105',' -81.3055282831192','28.592909716710317','-81.30466192960739'),
	(8,'FS4A - Film','28.592204364073936, -81.30486845970154','28.59289205351343, -81.30392968654633','http://i1326.photobucket.com/albums/u657/GydusApp/FILM_zpsb5b9f822.png','28.592204364073936',' -81.30486845970154','28.59289205351343','-81.30392968654633'),
	(9,'FS4A -Closet','28.59199946943269, -81.30451440811157','28.592435164455885, -81.30397260189056','http://i1326.photobucket.com/albums/u657/GydusApp/FS4AWebclosetcopy_zpsfc6d5a09.png','28.59199946943269','-81.30451440811157','28.592435164455885',' -81.30397260189056'),
	(10,'FS4B','28.591540221372316, -81.3042676448822','28.59208660858179, -81.30340933799744','http://i1326.photobucket.com/albums/u657/GydusApp/FS4B_16158_zpsdbd74278.png','28.591540221372316',' -81.3042676448822','28.59208660858179','-81.30340933799744'),
	(11,'FS4G',NULL,NULL,'http://i1326.photobucket.com/albums/u657/GydusApp/Building4G_zpsa9c76fcc.png',NULL,NULL,NULL,NULL),
	(12,'FS4E','28.590131848143642, -81.30499720573425','28.59103151348649, -81.30378484725952','http://i1326.photobucket.com/albums/u657/GydusApp/FS4E_zps2bce355c.png','28.590131848143642','-81.30499720573425','28.59103151348649','-81.30378484725952'),
	(13,'FS4F','28.590310839767763, -81.30517423152924','28.590565195762043, -81.30491137504578','http://i1326.photobucket.com/albums/u657/GydusApp/FS4F_16160_zps5121c64c.png','28.590310839767763',' -81.30517423152924','28.590565195762043',' -81.30491137504578'),
	(14,'FS4G','28.590065903784236, -81.30573213100433','28.590277867649366, -81.30538880825043','http://i1326.photobucket.com/albums/u657/GydusApp/Building4G_zpsdec58bb4.png','28.590065903784236',' -81.30573213100433','28.590277867649366','-81.30538880825043');

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
	(15,'Zaxly\'s','FS3F',28.5939353546,-81.3054612279,'Food/Beverage'),
	(16,'Books','FS4E',28.5905180928,-81.3041979074,'Book Store'),
	(17,'Restroom','FS4A',28.5927589907,-81.3048268855,'Restroom'),
	(18,'Restroom','FS4A',28.5926117971,-81.3041134179,'Restroom'),
	(19,'Restroom','FS4A',28.5922620642,-81.3041321933,'Restroom'),
	(20,'Restroom','FS4B',28.5917651354,-81.3036333025,'Restroom'),
	(21,'Restroom','FS4E',28.5904827656,-81.3047169149,'Restroom'),
	(22,'Restroom','FS4F',28.5904809993,-81.3051011413,'Restroom'),
	(23,'Restroom','FS4G',28.5901230163,-81.3054471463,'Restroom'),
	(24,'Vending Machine','FS4A',28.5927095336,-81.3048195094,'Food/Beverage'),
	(25,'Vending Machine','FS4A',28.5927519254,-81.3042193651,'Food/Beverage');

/*!40000 ALTER TABLE `PointsOfInterest` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Rooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Rooms`;

CREATE TABLE `Rooms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `building_id` varchar(250) DEFAULT NULL,
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
	(15,'FS3B - GameDesign',28.5947659796,-81.3042179178,'304',1),
	(16,'FS3B - GameDesign',28.5947677459,-81.3040140699,'305',1),
	(17,'FS3B - GameDesign',28.5947300650,-81.3041568976,'308',1),
	(18,'FS3B - GameDesign',28.5947288875,-81.3041354399,'309',1),
	(19,'FS3B - GameDesign',28.5947288875,-81.3040066939,'310',1),
	(20,'FS3B - GameDesign',28.5947665683,-81.3039751779,'307',1),
	(21,'FS3B - GameDesign',28.5947259437,-81.3039577436,'313',1),
	(22,'FS3B - GameDesign',28.5947271212,-81.3039309215,'312',1),
	(23,'FS3C',28.5943915258,-81.3042206000,'102',1),
	(24,'FS3C',28.5943921145,-81.3041066062,'103',1),
	(25,'FS3C',28.5944250854,-81.3040100466,'104',1),
	(26,'FS3C',28.5943927033,-81.3039912712,'105',1),
	(27,'FS3C',28.5943691527,-81.3038806300,'110',1),
	(28,'FS3C',28.5945292967,-81.3039919417,'115',1),
	(29,'FS3C',28.5945245865,-81.3041066062,'116',1),
	(30,'FS3C',28.5945263528,-81.3042219411,'120',1),
	(31,'FS3E',28.5938904857,-81.3044331651,'100',1),
	(32,'FS3E',28.5940353224,-81.3043446522,'102',1),
	(33,'FS3F',28.5938463281,-81.3051077407,'104',1),
	(34,'FS3F',28.5938480944,-81.3052022885,'105',1),
	(35,'FS3F',28.5938139458,-81.3050929885,'112',1),
	(36,'FS3F',28.5938145346,-81.3051084112,'111',1),
	(37,'FS3F',28.5938062918,-81.3052505683,'110',1),
	(38,'FS3F',28.5936855943,-81.3052512388,'117',1),
	(39,'FS3F',28.5935472335,-81.3052519094,'118',1),
	(40,'FS3F',28.5934341897,-81.3052485566,'119',1),
	(41,'FS3F',28.5936061105,-81.3052203934,'115',1),
	(42,'FS3F',28.5935884474,-81.3050071578,'114',1),
	(43,'FS3F',28.5936084656,-81.3049783241,'113',1),
	(44,'FS3F',28.5935336918,-81.3052210640,'121',1),
	(45,'FS3F',28.5935472335,-81.3051164578,'123',1),
	(46,'FS3F',28.5935342806,-81.3049796652,'124',1),
	(47,'FS3F',28.5933464629,-81.3052210640,'122',1),
	(48,'FS3F',28.5933458741,-81.3049810063,'125',1),
	(49,'FS3F',28.5937956940,-81.3049501609,'128',1),
	(50,'FS3F',28.5935342806,-81.3049501609,'127',1),
	(51,'FS3F',28.5938486831,-81.3049354087,'129',1),
	(52,'FS3F',28.5937686107,-81.3047925811,'138',1),
	(53,'FS3F',28.5936190634,-81.3048012983,'139',1),
	(54,'FS3F',28.5935625415,-81.3047865461,'140',1),
	(55,'FS3F',28.5934494977,-81.3047731351,'141',1),
	(56,'FS3F',28.5933494068,-81.3048080038,'142',1),
	(58,'FS4A',28.5927629895,-81.3053887021,'102',1),
	(59,'FS4A',28.5927465038,-81.3052519094,'103',1),
	(60,'FS4A',28.5927453263,-81.3052311223,'106',1),
	(61,'FS4A',28.5927653446,-81.3050909769,'107',1),
	(62,'FS4A',28.5927147100,-81.3050091695,'108',1),
	(63,'FS4A',28.5924403408,-81.3044807743,'104S',1),
	(64,'FS4A',28.5924226776,-81.3044137191,'106S',1),
	(65,'FS4A',28.5926299265,-81.3041602503,'109S',1),
	(66,'FS4A',28.5926793836,-81.3045008909,'113S',1),
	(67,'FS4A',28.5922012976,-81.3042702209,'139',1),
	(68,'FS4A',28.5922171946,-81.3042554688,'138',1),
	(69,'FS4A',28.5922166058,-81.3041803669,'135',1),
	(70,'FS4B',28.5917208543,-81.3041495215,'132',1),
	(71,'FS4B',28.5917227433,-81.3040021062,'131',1),
	(72,'FS4B',28.5917239208,-81.3039739430,'130',1),
	(73,'FS4B',28.5917145004,-81.3037352264,'129',1),
	(74,'FS4B',28.5917145004,-81.3037084043,'128',1),
	(75,'FS4B',28.5917180330,-81.3035783172,'127',1),
	(76,'FS4B',28.5918711157,-81.3038130105,'114',1),
	(77,'FS4B',28.5919005546,-81.3038183749,'113',1),
	(78,'FS4B',28.5918840688,-81.3040557504,'111',1),
	(79,'FS4B',28.5918840688,-81.3040839136,'110',1),
	(80,'FS4E',28.5905934575,-81.3046699762,'104',1),
	(81,'FS4E',28.5906994390,-81.3045412302,'103',1),
	(82,'FS4E',28.5904097561,-81.3044634461,'105',1),
	(83,'FS4E',28.5905286910,-81.3043253124,'106',1),
	(84,'FS4F',28.5905074947,-81.3050991297,'101',1),
	(85,'FS4F',28.5904627469,-81.3050622493,'105',1),
	(86,'FS4F',28.5903915037,-81.3050072640,'106',1),
	(87,'FS4F',28.5903650082,-81.3050012290,'107',1),
	(88,'FS4F',28.5903567652,-81.3050018996,'109',1),
	(89,'FS4F',28.5903479334,-81.3050206751,'108',1),
	(90,'FS4F',28.5903273258,-81.3050280511,'110',1),
	(91,'FS4G',28.5901907270,-81.3054645807,'101',1),
	(92,'FS4G',28.5901671755,-81.3054960966,'103',1),
	(93,'FS4G',28.5901671755,-81.3056402653,'102',1);

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


# Dump of table search
# ------------------------------------------------------------

DROP VIEW IF EXISTS `search`;

CREATE TABLE `search` (
   `name` VARCHAR(250) DEFAULT NULL,
   `latitude` TEXT DEFAULT NULL,
   `longitude` TEXT DEFAULT NULL
) ENGINE=MyISAM;



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

LOCK TABLES `SuggestASpot` WRITE;
/*!40000 ALTER TABLE `SuggestASpot` DISABLE KEYS */;

INSERT INTO `SuggestASpot` (`id`, `school_id`, `building_id`, `name`, `latitude`, `longitude`, `tally`)
VALUES
	(1,1,NULL,'boob','28.59596351624264','-81.3041522037048',1);

/*!40000 ALTER TABLE `SuggestASpot` ENABLE KEYS */;
UNLOCK TABLES;


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




# Replace placeholder table for search with correct view syntax
# ------------------------------------------------------------

DROP TABLE `search`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `search`
AS SELECT
   `Buildings`.`name` AS `name`,
   `Buildings`.`latitude` AS `latitude`,
   `Buildings`.`longitude` AS `longitude`
FROM `Buildings` union select `Rooms`.`name` AS `name`,`Rooms`.`latitude` AS `latitude`,`Rooms`.`longitude` AS `longitude` from `Rooms`;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
