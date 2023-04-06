/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.17-MariaDB : Database - ecommerce
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ecommerce`;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `customer_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`customer_id`,`customer_name`,`address`) values 
(1,'paijo','jl. Kutilang berkicau 12, jakarta barat');

/*Table structure for table `mutasi_stock` */

DROP TABLE IF EXISTS `mutasi_stock`;

CREATE TABLE `mutasi_stock` (
  `id` bigint(11) NOT NULL,
  `tgl_mutasi` date DEFAULT NULL,
  `pcode` int(11) DEFAULT NULL,
  `order_id` varchar(25) DEFAULT NULL,
  `type_mutasi` varchar(11) DEFAULT NULL,
  `jumlah` double DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mutasi_stock` */

insert  into `mutasi_stock`(`id`,`tgl_mutasi`,`pcode`,`order_id`,`type_mutasi`,`jumlah`) values 
(1,'2020-02-17',10001,'INV/07/2020/00001','O',2);

/*Table structure for table `order_detail` */

DROP TABLE IF EXISTS `order_detail`;

CREATE TABLE `order_detail` (
  `order_detail_id` bigint(11) NOT NULL DEFAULT 0,
  `order_id` varchar(11) DEFAULT NULL,
  `pcode` varchar(12) DEFAULT NULL,
  `qty` int(11) DEFAULT 0,
  `price` double DEFAULT 0,
  `subtotal` double DEFAULT 0,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `order_detail` */

insert  into `order_detail`(`order_detail_id`,`order_id`,`pcode`,`qty`,`price`,`subtotal`) values 
(1,'INV/07/2020','010001',2,10000,20000);

/*Table structure for table `order_header` */

DROP TABLE IF EXISTS `order_header`;

CREATE TABLE `order_header` (
  `order_id` varchar(25) NOT NULL,
  `order_date` date DEFAULT NULL,
  `customer_name` varchar(25) DEFAULT NULL,
  `promo_code` varchar(25) DEFAULT NULL,
  `amount_discount` double DEFAULT 0,
  `net` double DEFAULT 0,
  `ppn` double DEFAULT 0,
  `total` double DEFAULT 0,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `order_header` */

insert  into `order_header`(`order_id`,`order_date`,`customer_name`,`promo_code`,`amount_discount`,`net`,`ppn`,`total`) values 
('INV/07/2020/00001','2020-02-17','202007-0001','pmo-001',1000,20000,1900,20900);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `pcode` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` double DEFAULT 0,
  PRIMARY KEY (`pcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `product` */

insert  into `product`(`pcode`,`product_name`,`price`) values 
(10001,'MIRANDA H.C N.BLACK 30.MC1',10000);

/*Table structure for table `promo` */

DROP TABLE IF EXISTS `promo`;

CREATE TABLE `promo` (
  `promo_code` varchar(11) NOT NULL,
  `promo_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`promo_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `promo` */

insert  into `promo`(`promo_code`,`promo_name`) values 
('pmo-001','Setiap pembelian MIRANDA H.C N.BLACK 30.MC1, mendapat potongan 1000');

/*Table structure for table `stock` */

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock` (
  `pcode` int(11) NOT NULL,
  `jumlah` double DEFAULT 0,
  PRIMARY KEY (`pcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `stock` */

insert  into `stock`(`pcode`,`jumlah`) values 
(10001,200);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
