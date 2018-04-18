/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.30-MariaDB : Database - sipelaut
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sipelaut` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sipelaut`;

/*Table structure for table `jenispajak` */

DROP TABLE IF EXISTS `jenispajak`;

CREATE TABLE `jenispajak` (
  `id_wp` int(3) NOT NULL AUTO_INCREMENT,
  `jenis_pajak` varchar(30) NOT NULL,
  PRIMARY KEY (`jenis_pajak`),
  KEY `id_wp` (`id_wp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenispajak` */

/*Table structure for table `objekpajak` */

DROP TABLE IF EXISTS `objekpajak`;

CREATE TABLE `objekpajak` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama_wp` varchar(50) NOT NULL,
  PRIMARY KEY (`nama_wp`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `objekpajak` */

/*Table structure for table `rincianrekap` */

DROP TABLE IF EXISTS `rincianrekap`;

CREATE TABLE `rincianrekap` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `tgl_rekap_bill` date DEFAULT NULL,
  `nama_wp` varchar(30) DEFAULT NULL,
  `tgl_invoice` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  KEY `id_transaksi` (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rincianrekap` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) DEFAULT NULL,
  `jabatan` enum('Admin','Kasi','Staff') DEFAULT NULL,
  `passwords` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
