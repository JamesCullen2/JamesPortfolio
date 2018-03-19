# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.39)
# Database: Portfolio
# Generation Time: 2018-03-19 15:05:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(120) NOT NULL DEFAULT '',
  `text` varchar(2000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table contact
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `type` enum('email','tel','social') DEFAULT 'email',
  `link_url` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_id` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table header
# ------------------------------------------------------------

DROP TABLE IF EXISTS `header`;

CREATE TABLE `header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `type` enum('home','about me','portfolio','contact') DEFAULT 'home',
  `link_url` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_id` (`image_id`),
  UNIQUE KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table home
# ------------------------------------------------------------

DROP TABLE IF EXISTS `home`;

CREATE TABLE `home` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_id` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(120) NOT NULL DEFAULT '',
  `src` varchar(120) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table portfolio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(120) NOT NULL DEFAULT '',
  `text` varchar(600) NOT NULL DEFAULT '',
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_id` (`image_id`),
  UNIQUE KEY `subtitle` (`subtitle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
