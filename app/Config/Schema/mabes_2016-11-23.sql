# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: mabes
# Generation Time: 2016-11-23 06:10:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table personels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personels`;

CREATE TABLE `personels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place_of_birth` varchar(160) CHARACTER SET utf8 NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `matra_id` int(11) NOT NULL,
  `occupations_type_id` int(11) NOT NULL,
  `corps_id` int(11) NOT NULL,
  `nrp_nip` varchar(200) CHARACTER SET utf8 NOT NULL,
  `unity` varchar(250) CHARACTER SET utf8 NOT NULL,
  `source_dikma` varchar(250) CHARACTER SET utf8 NOT NULL,
  `contries_id` int(11) NOT NULL,
  `study_programs` int(11) NOT NULL,
  `study_program_categories` int(11) NOT NULL,
  `depart` datetime NOT NULL,
  `arrived` int(11) NOT NULL,
  `education_status` int(1) NOT NULL,
  `commander_tni` varchar(250) CHARACTER SET utf8 NOT NULL,
  `sprin_force` varchar(250) CHARACTER SET utf8 NOT NULL,
  `medical_record` varchar(250) CHARACTER SET utf8 NOT NULL,
  `pasport` varchar(250) CHARACTER SET utf8 NOT NULL,
  `security_clearance` varchar(250) CHARACTER SET utf8 NOT NULL,
  `office_address` varchar(250) CHARACTER SET utf8 NOT NULL,
  `tlp_office` varchar(250) CHARACTER SET utf8 NOT NULL,
  `home_address` varchar(250) CHARACTER SET utf8 NOT NULL,
  `tlp_home` varchar(250) CHARACTER SET utf8 NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 NOT NULL,
  `relationship` varchar(250) CHARACTER SET utf8 NOT NULL,
  `home_adress_a` varchar(250) CHARACTER SET utf8 NOT NULL,
  `tlp_hp` varchar(250) CHARACTER SET utf8 NOT NULL,
  `no_rek` varchar(250) CHARACTER SET utf8 NOT NULL,
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
