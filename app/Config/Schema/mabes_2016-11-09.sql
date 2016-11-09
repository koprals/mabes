# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: mabes
# Generation Time: 2016-11-09 16:34:31 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table education_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `education_types`;

CREATE TABLE `education_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `education_types` WRITE;
/*!40000 ALTER TABLE `education_types` DISABLE KEYS */;

INSERT INTO `education_types` (`id`, `name`, `status`, `created`, `modified`)
VALUES
	(1,'Bahasa Inggris',1,'2014-02-06 04:09:01','2014-02-06 04:09:01'),
	(2,'',1,'2016-11-09 21:09:22','2016-11-09 21:09:22'),
	(3,'Bahasa Jepang',1,'2016-11-09 21:10:38','2016-11-09 21:10:38'),
	(4,'Bahasa Mandarin',1,'2016-11-09 22:43:57','2016-11-09 22:43:57');

/*!40000 ALTER TABLE `education_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table corps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `corps`;

CREATE TABLE `corps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matra_id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table matras
# ------------------------------------------------------------

DROP TABLE IF EXISTS `matras`;

CREATE TABLE `matras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `matras` WRITE;
/*!40000 ALTER TABLE `matras` DISABLE KEYS */;

INSERT INTO `matras` (`id`, `name`, `status`, `created`, `modified`)
VALUES
	(1,NULL,1,'2016-11-09 23:09:14','2016-11-09 23:09:14'),
	(2,'Matras',1,'2016-11-09 23:10:51','2016-11-09 23:10:51');

/*!40000 ALTER TABLE `matras` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table occupations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `occupations`;

CREATE TABLE `occupations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
