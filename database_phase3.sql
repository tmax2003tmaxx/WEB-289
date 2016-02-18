#
# DUMP FILE
#
# Database is ported from MS Access
#------------------------------------------------------------------
# Created using "MS Access to MySQL" form http://www.bullzip.com
# Program Version 5.3.259
#
# OPTIONS:
#   sourcefilename=C:\Users\Cody\Desktop\School\WEB-289\ERD.accdb
#   sourceusername=
#   sourcepassword=
#   sourcesystemdatabase=
#   destinationdatabase=movedb
#   storageengine=MyISAM
#   dropdatabase=1
#   createtables=1
#   unicode=1
#   autocommit=1
#   transferdefaultvalues=1
#   transferindexes=1
#   transferautonumbers=1
#   transferrecords=1
#   columnlist=1
#   tableprefix=
#   negativeboolean=0
#   ignorelargeblobs=0
#   memotype=LONGTEXT
#

DROP DATABASE IF EXISTS `movedb`;
CREATE DATABASE IF NOT EXISTS `movedb`;
USE `movedb`;

#
# Table structure for table 'Cart'
#

DROP TABLE IF EXISTS `Cart`;

CREATE TABLE `Cart` (
  `transactionID` INTEGER NOT NULL AUTO_INCREMENT, 
  `productName` VARCHAR(255), 
  `productID` VARCHAR(255), 
  `totalPrice` DECIMAL(19,4) DEFAULT 0, 
  `memberID` INTEGER DEFAULT 0, 
  INDEX (`productName`), 
  INDEX (`transactionID`), 
  INDEX (`memberID`), 
  PRIMARY KEY (`transactionID`), 
  INDEX (`productID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Cart'
#

INSERT INTO `Cart` (`transactionID`, `productName`, `productID`, `totalPrice`, `memberID`) VALUES (2, NULL, NULL, NULL, NULL);
# 1 records

#
# Table structure for table 'Invoices'
#

DROP TABLE IF EXISTS `Invoices`;

CREATE TABLE `Invoices` (
  `transactionID` INTEGER AUTO_INCREMENT, 
  `invoiceDate` DATETIME, 
  `memberId` VARCHAR(255), 
  `totalPrice` INTEGER DEFAULT 0, 
  INDEX (`memberId`), 
  INDEX (`transactionID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Invoices'
#

# 0 records

#
# Table structure for table 'Members'
#

DROP TABLE IF EXISTS `Members`;

CREATE TABLE `Members` (
  `memberID` INTEGER NOT NULL AUTO_INCREMENT, 
  `firstName` VARCHAR(255), 
  `lastName` VARCHAR(255), 
  `email` VARCHAR(255), 
  `address` VARCHAR(255), 
  `status` VARCHAR(255), 
  PRIMARY KEY (`memberID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Members'
#

INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (1, 'Cody', 'Mogensen', 'mogensencd@gmail.com', '123 wood ave', 'Admin');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (2, 'Rachel', 'Arena', 'apieforstrength@gmail.com', '123 wood ave', 'Admin');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (3, 'Bill', 'Deskevich', 'asdf@gmail.com', '123 wood ave', 'Member');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (4, 'Ryan', 'Marshal', 'Rygy@gmail.com', '123 wood ave', 'Member');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (5, 'Chef', 'Jones', 'Chef@gmail.com', '145 button ave', 'Member');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (6, 'Norika', 'Oda', 'Noda@gmail.com', '4324 tote st', 'Member');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (7, 'Lori', 'Hawes', 'mom@gmail.com', '15 cool dr', 'Member');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (8, 'Rich', 'Mogensen', 'dad@gmail.com', '1 dad dr', 'Member');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (9, 'Nikki', 'Mogensen', 'sister@gmail.com', '2 sister dr', 'Member');
INSERT INTO `Members` (`memberID`, `firstName`, `lastName`, `email`, `address`, `status`) VALUES (10, 'Phil', 'Pitts', 'Pitts@gmail.com', '3 pitts st', 'Member');
# 10 records

#
# Table structure for table 'Products'
#

DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `productName` VARCHAR(255) NOT NULL, 
  `description` LONGTEXT, 
  `price` INTEGER DEFAULT 0, 
  `productID` VARCHAR(255) NOT NULL, 
  `Category` VARCHAR(255), 
  PRIMARY KEY (`productID`), 
  INDEX (`productID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Products'
#

INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Chocolate Cookies', '12 mind blowing cookies', 10, '7', '4');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Oatmeal Rasin Cookies', '12 out of this world cookies', 10, '8', '4');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Pecan Pie', 'Delicious Pecan Pie', 10, '9', '1');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Red Velvet Cake 8in', 'Silky Smooth Cake', 20, '10', '2');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Oreo Cupcakes', 'Delcious Oreo Goodness', 12, '11', '3');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Peanut Butter Cookies', '12 Peanutty cookies', 12, '12', '4');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Apple Pie', 'Tasty Apple Pie', 10, '1', '1');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Pumpkin Pie', 'Tasty Pumpkin Pie', 10, '2', '1');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Chocolate Cake 8in', 'Delicous cake perfect for a birthday', 20, '3', '2');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Vanilla Cake 8in', 'Delicous cake perfect for a birthday party', 20, '4', '2');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Chocolate Cupcakes', '12 tasty cupcakes', 10, '5', '3');
INSERT INTO `Products` (`productName`, `description`, `price`, `productID`, `Category`) VALUES ('Vanilla Cupcakes', '12 tasty cupcakes', 10, '6', '3');
# 12 records

