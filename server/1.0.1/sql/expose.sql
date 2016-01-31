# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.38)
# Database: expose
# Generation Time: 2016-01-31 11:40:09 +0000
# ************************************************************


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id_comment` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_key` varchar(500) COLLATE utf8_bin NOT NULL DEFAULT '',
  `device_key` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `number` varchar(75) COLLATE utf8_bin NOT NULL DEFAULT '',
  `rating` int(1) NOT NULL,
  `content` varchar(1500) COLLATE utf8_bin NOT NULL DEFAULT '',
  `reported` int(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `system` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `version` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id_contact` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `device_key` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `number` varchar(75) COLLATE utf8_bin NOT NULL DEFAULT '',
  `system` varchar(75) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

# Dump of table stats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stats`;

CREATE TABLE `stats` (
  `id_stats` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `users` int(11) NOT NULL,
  `active_users` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `searchs` int(11) NOT NULL,
  PRIMARY KEY (`id_stats`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `device_key` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `created` int(11) NOT NULL,
  `last_connection` int(11) NOT NULL,
  `system` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `version` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
