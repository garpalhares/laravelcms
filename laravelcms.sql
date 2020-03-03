-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for laravelcms
CREATE DATABASE IF NOT EXISTS `laravelcms` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laravelcms`;

-- Dumping structure for table laravelcms.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table laravelcms.pages: 1 rows
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
REPLACE INTO `pages` (`id`, `title`, `slug`, `body`) VALUES
	(5, 'Teste 1', 'teste-1', '<p><img src="http://127.0.0.1:8000/media/images/1583194895.jpeg" alt="" width="1080" height="1039" />teasdadsdsad asa<strong>ssa</strong></p>');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table laravelcms.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table laravelcms.settings: 5 rows
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
REPLACE INTO `settings` (`id`, `name`, `content`) VALUES
	(1, 'title', 'Meu Site [ALTERADO]'),
	(2, 'subtitle', 'Slogan da Empresa [ALTERADO]'),
	(3, 'contact_email', 'contato@site.com'),
	(4, 'background_color', '#ffffff'),
	(5, 'text_color', '#d6d061');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table laravelcms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table laravelcms.users: 2 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `admin`) VALUES
	(7, 'Gabriel Palhares', 'garpalhares@gmail.com', '$2y$10$pHXwYu4UKDJfTy9E8c0ztudLPLtgO2vdtM690tNP8UpeZ8CXbpgkm', NULL, 1),
	(8, 'Sueli Daniela Vitoria Da Cunhaa', 'suelidanielavitoriadacunha@alcoa.com.br', '$2y$10$ZvVOUrxGL14VNyV/2nMtNeGFAtERX1X6i9/Lw0Goy4Nv6KMEwjcrO', NULL, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table laravelcms.visitors
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) DEFAULT NULL,
  `date_access` datetime DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table laravelcms.visitors: 0 rows
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;
REPLACE INTO `visitors` (`id`, `ip`, `date_access`, `page`) VALUES
	(1, '1', '2019-12-03 12:44:13', '/'),
	(2, '1', '2020-03-03 12:45:06', '/'),
	(3, '1', '2020-03-03 14:01:51', '/teste');
/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
