/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - aqmps
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`aqmps` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `aqmps`;

/*Table structure for table `bharat` */

DROP TABLE IF EXISTS `bharat`;

CREATE TABLE `bharat` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bharat` */

insert  into `bharat`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Bharat','bharat','2021-04-07','15:03:04',114,158);

/*Table structure for table `bharat_predict` */

DROP TABLE IF EXISTS `bharat_predict`;

CREATE TABLE `bharat_predict` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bharat_predict` */

insert  into `bharat_predict`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Bharat','bharat','2021-04-07','15:03:04',116,160);

/*Table structure for table `client_complete_data` */

DROP TABLE IF EXISTS `client_complete_data`;

CREATE TABLE `client_complete_data` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `Password` varchar(500) DEFAULT NULL,
  `Full_Name` varchar(500) NOT NULL,
  `Industry_Name` varchar(500) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `Scale` varchar(500) DEFAULT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `Type` varchar(500) DEFAULT NULL,
  `Area` varchar(500) DEFAULT NULL,
  `Closure_Status` varchar(50) DEFAULT NULL,
  `Closure_Date` date DEFAULT NULL,
  `Revoke_Date` date DEFAULT NULL,
  `Revoke_Status` varchar(50) DEFAULT NULL,
  `License_Status` varchar(50) DEFAULT NULL,
  `License_Application_Status` varchar(50) DEFAULT NULL,
  `License_Confirm_Reject` varchar(50) DEFAULT NULL,
  `License_Date_Confirm` date DEFAULT NULL,
  `License_Date_Expire` date DEFAULT NULL,
  PRIMARY KEY (`Id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `client_complete_data` */

insert  into `client_complete_data`(`Id`,`username`,`Password`,`Full_Name`,`Industry_Name`,`Rating`,`Scale`,`Comments`,`Type`,`Area`,`Closure_Status`,`Closure_Date`,`Revoke_Date`,`Revoke_Status`,`License_Status`,`License_Application_Status`,`License_Confirm_Reject`,`License_Date_Confirm`,`License_Date_Expire`) values (1,'Nirma','nirma','Ramesh Patel','Nirma Phamaceuticals Ltd.',66,'Large Scale Industry','Bad industry ','Chemical Industry','Ahmedabad','Yes','2021-04-07','2021-05-07','No','Yes','NULL','Yes','2021-04-06','2021-10-03'),(2,'Zydus','zydus','Pankaj Patel','Zydus Cadilla Pharmaceuticals Ltd.',75.4,'Large Scale Industry',NULL,'Chemical Industry','Ahmedabad','No','0000-00-00','0000-00-00',NULL,'Pending','Yes','No','0000-00-00','0000-00-00'),(3,'Bharat','bharat','Bharat Shah','Bharat Fertilizers Pvt. Ltd.',54.4,'Medium Scale Industry',NULL,'Fertilizer Industry','Vadodara','No',NULL,NULL,NULL,'Pending','Yes',NULL,NULL,'0000-00-00'),(4,'Tata','tata','Ratan Tata','Tata Steel',40.2,'Large Scale Industry','','Steel Industry','Ahmedabad','No','0000-00-00','0000-00-00','NULL','Pending','Yes','No','0000-00-00','0000-00-00'),(13,'Reliance','reliance','Mukesh Ambani','Reliance Petrochemicals',69.8,'Large Scale Industry',NULL,'Petrochemical','Ahmedabad','No',NULL,NULL,NULL,'Yes',NULL,NULL,'2021-04-07','2021-04-06');

/*Table structure for table `client_data` */

DROP TABLE IF EXISTS `client_data`;

CREATE TABLE `client_data` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `client_data` */

insert  into `client_data`(`Id`,`username`,`password`) values (1,'Nirma','nirma'),(2,'Zydus','zydus'),(3,'Bharat','bharat'),(4,'Tata','tata'),(11,'Reliance','reliance');

/*Table structure for table `govt_complete_data` */

DROP TABLE IF EXISTS `govt_complete_data`;

CREATE TABLE `govt_complete_data` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Full_Name` varchar(500) DEFAULT NULL,
  `AQI` float DEFAULT NULL,
  `Area` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `govt_complete_data` */

insert  into `govt_complete_data`(`Id`,`username`,`password`,`Full_Name`,`AQI`,`Area`) values (1,'Bhavya','bhavya','Bhavya Bhimani',225,'Ahmedabad'),(2,'Mit','mit','Mit Desai',150,'Vadodara'),(3,'Meet','meet','Meet Gohil',193,'Gandhinagar');

/*Table structure for table `govt_data` */

DROP TABLE IF EXISTS `govt_data`;

CREATE TABLE `govt_data` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `govt_data` */

insert  into `govt_data`(`Id`,`username`,`password`) values (1,'Bhavya','bhavya'),(2,'Mit','mit'),(3,'Meet','meet');

/*Table structure for table `nirma` */

DROP TABLE IF EXISTS `nirma`;

CREATE TABLE `nirma` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`),
  KEY `Id` (`Id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `nirma` */

insert  into `nirma`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Nirma','nirma','2021-04-01','22:04:05',225,105),(2,1,'Nirma','nirma','2021-04-02','22:04:05',219,132),(3,1,'Nirma','nirma','2021-04-03','22:04:05',187,99),(4,1,'Nirma','nirma','2021-04-04','22:04:05',232,118),(5,1,'Nirma','nirma','2021-04-05','22:04:05',212,125);

/*Table structure for table `nirma_predict` */

DROP TABLE IF EXISTS `nirma_predict`;

CREATE TABLE `nirma_predict` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`),
  KEY `Id` (`Id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `nirma_predict` */

insert  into `nirma_predict`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Nirma','nirma','2021-04-01','22:04:05',229,105),(2,1,'Nirma','nirma','2021-04-02','22:04:05',215,133),(3,1,'Nirma','nirma','2021-04-03','22:04:05',158,99),(4,1,'Nirma','nirma','2021-04-04','22:04:05',240,117),(5,1,'Nirma','nirma','2021-04-05','22:04:05',220,121);

/*Table structure for table `reliance` */

DROP TABLE IF EXISTS `reliance`;

CREATE TABLE `reliance` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `reliance` */

insert  into `reliance`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Reliance','reliance','2021-04-07','07:07:07',225,124);

/*Table structure for table `reliance_predict` */

DROP TABLE IF EXISTS `reliance_predict`;

CREATE TABLE `reliance_predict` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `reliance_predict` */

insert  into `reliance_predict`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Reliance','reliance','2021-04-07','07:07:07',225,123);

/*Table structure for table `tata` */

DROP TABLE IF EXISTS `tata`;

CREATE TABLE `tata` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tata` */

insert  into `tata`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Tata','tata','2021-04-06','19:02:54',58,143);

/*Table structure for table `tata_predict` */

DROP TABLE IF EXISTS `tata_predict`;

CREATE TABLE `tata_predict` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tata_predict` */

insert  into `tata_predict`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Tata','tata','2021-04-06','19:02:54',60,140);

/*Table structure for table `zydus` */

DROP TABLE IF EXISTS `zydus`;

CREATE TABLE `zydus` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `zydus` */

insert  into `zydus`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Zydus','zydus','2021-04-06','18:04:52',125,252);

/*Table structure for table `zydus_predict` */

DROP TABLE IF EXISTS `zydus_predict`;

CREATE TABLE `zydus_predict` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Id` int(10) DEFAULT 1,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `CO` double DEFAULT NULL,
  `PM25` float DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `zydus_predict` */

insert  into `zydus_predict`(`Sno`,`Id`,`username`,`password`,`Date`,`Time`,`CO`,`PM25`) values (1,1,'Zydus','zydus','2021-04-06','18:04:52',129,250);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
