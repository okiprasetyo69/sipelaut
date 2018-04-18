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
  `id_jenis` int(3) NOT NULL AUTO_INCREMENT,
  `jenis_pajak` varchar(30) NOT NULL,
  PRIMARY KEY (`jenis_pajak`),
  KEY `id_wp` (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jenispajak` */

insert  into `jenispajak`(`id_jenis`,`jenis_pajak`) values 
(1,'Hotel'),
(2,'Restoran');

/*Table structure for table `lapor_pajak` */

DROP TABLE IF EXISTS `lapor_pajak`;

CREATE TABLE `lapor_pajak` (
  `id_lapor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_wp` varchar(50) DEFAULT NULL,
  `jenis_pajak` varchar(30) DEFAULT NULL,
  `total_lapor` double DEFAULT NULL,
  `masa_pajak` varchar(20) DEFAULT NULL,
  `tgl_lapor` date DEFAULT NULL,
  KEY `id_lapor` (`id_lapor`),
  KEY `nama_wp` (`nama_wp`),
  KEY `jenis_pajak` (`jenis_pajak`),
  CONSTRAINT `lapor_pajak_ibfk_1` FOREIGN KEY (`nama_wp`) REFERENCES `objekpajak` (`nama_wp`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `lapor_pajak_ibfk_2` FOREIGN KEY (`jenis_pajak`) REFERENCES `jenispajak` (`jenis_pajak`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `lapor_pajak` */

insert  into `lapor_pajak`(`id_lapor`,`nama_wp`,`jenis_pajak`,`total_lapor`,`masa_pajak`,`tgl_lapor`) values 
(1,'Moscato','Hotel',1000000,NULL,'2018-03-21'),
(2,'Moscato','Restoran',500000,NULL,'2018-03-21'),
(3,'Floating Market','Restoran',200000,NULL,'2018-03-21'),
(4,'Warung Kampung','Restoran',100000,NULL,'2018-03-21');

/*Table structure for table `objekpajak` */

DROP TABLE IF EXISTS `objekpajak`;

CREATE TABLE `objekpajak` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama_wp` varchar(50) NOT NULL,
  PRIMARY KEY (`nama_wp`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `objekpajak` */

insert  into `objekpajak`(`id`,`nama_wp`) values 
(1,'VIB'),
(2,'Moscato'),
(3,'Floating Market'),
(4,'De\'Ranch'),
(5,'Tahu Susu Lembang'),
(6,'Warung Kampung'),
(7,'RM. Cikole'),
(8,'Yehezkiel');

/*Table structure for table `rekap` */

DROP TABLE IF EXISTS `rekap`;

CREATE TABLE `rekap` (
  `id_rincian` int(10) NOT NULL AUTO_INCREMENT,
  `nama_wp` varchar(30) DEFAULT NULL,
  `jenis_pajak` varchar(30) DEFAULT NULL,
  `kd_bill` varchar(15) DEFAULT NULL,
  `tgl_invoice` date DEFAULT NULL,
  `omset_pada_bill` double DEFAULT NULL,
  `tgl_rekap_bill` date DEFAULT NULL,
  KEY `id_transaksi` (`id_rincian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rekap` */

/*Table structure for table `rincianpajak` */

DROP TABLE IF EXISTS `rincianpajak`;

CREATE TABLE `rincianpajak` (
  `id_rincian` int(5) NOT NULL AUTO_INCREMENT,
  `nama_wp` varchar(50) DEFAULT NULL,
  `jenis_pajak` varchar(30) DEFAULT NULL,
  KEY `id_rincian` (`id_rincian`),
  KEY `nama_wp` (`nama_wp`),
  KEY `jenis_pajak` (`jenis_pajak`),
  CONSTRAINT `rincianpajak_ibfk_1` FOREIGN KEY (`nama_wp`) REFERENCES `objekpajak` (`nama_wp`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rincianpajak_ibfk_2` FOREIGN KEY (`jenis_pajak`) REFERENCES `jenispajak` (`jenis_pajak`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `rincianpajak` */

insert  into `rincianpajak`(`id_rincian`,`nama_wp`,`jenis_pajak`) values 
(1,'VIB','Hotel'),
(2,'Moscato','Hotel'),
(3,'Moscato','Restoran'),
(4,'De\'Ranch','Restoran'),
(5,'Yehezkiel','Hotel');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) DEFAULT NULL,
  `jabatan` enum('Admin','Kasi','Staff') DEFAULT NULL,
  `passwords` varchar(50) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`jabatan`,`passwords`,`photo`) values 
(1,'Oki Prasetyo','Admin','oki1234',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
