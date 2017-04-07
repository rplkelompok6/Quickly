/*
SQLyog Trial v11.31 (64 bit)
MySQL - 10.1.21-MariaDB : Database - quickly
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`quickly` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `quickly`;

/*Table structure for table `korban_bencana` */

DROP TABLE IF EXISTS `korban_bencana`;

CREATE TABLE `korban_bencana` (
  `id_korban` varchar(3) NOT NULL,
  `ktp` decimal(10,0) NOT NULL,
  `foto_korban` varchar(3) NOT NULL,
  `nama_korban` varchar(20) NOT NULL,
  `alamat_korban` varchar(25) NOT NULL,
  `ttl_korban` varchar(25) NOT NULL,
  `jk_korban` varchar(10) NOT NULL,
  `kondisi_korban` varchar(10) NOT NULL,
  PRIMARY KEY (`id_korban`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `korban_bencana` */

insert  into `korban_bencana`(`id_korban`,`ktp`,`foto_korban`,`nama_korban`,`alamat_korban`,`ttl_korban`,`jk_korban`,`kondisi_korban`) values ('001','123494324','','budi sudarsono','cihideung no 7','bandung 9 april 1990','laki laki','baik');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`username`,`password`,`hak_akses`) values ('admin','admin','admin'),('relawan','relawan','relawan');

/*Table structure for table `posko` */

DROP TABLE IF EXISTS `posko`;

CREATE TABLE `posko` (
  `id_posko` int(3) NOT NULL,
  `posko` varchar(20) NOT NULL,
  `jumlah_korban` int(3) NOT NULL,
  `pj` varchar(20) NOT NULL,
  `cp` int(12) NOT NULL,
  `jenis_bencana` varchar(20) NOT NULL,
  `alamat_posko` varchar(50) NOT NULL,
  PRIMARY KEY (`id_posko`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `posko` */

insert  into `posko`(`id_posko`,`posko`,`jumlah_korban`,`pj`,`cp`,`jenis_bencana`,`alamat_posko`) values (1,'Baleendah',50,'Daffa',2147483647,'banjir','j. baleendah no 53'),(2,'Cicaheum',100,'Daffa',2147483647,'banjir','j. cicamheum no 1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
