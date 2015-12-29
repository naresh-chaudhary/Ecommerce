-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2015 at 05:36 PM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poojadmi_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE IF NOT EXISTS `Admins` (
  `User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admins`
--

INSERT INTO `Admins` (`User`) VALUES
(0),
(0),
(0);

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE IF NOT EXISTS `Cart` (
`CartID` bigint(16) NOT NULL,
  `ProductID` bigint(16) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT '1',
  `Total` float DEFAULT NULL,
  `CustomerID` bigint(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=835 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Cart`
--

INSERT INTO `Cart` (`CartID`, `ProductID`, `Quantity`, `Total`, `CustomerID`) VALUES
(826, 54, 1, NULL, 1),
(830, 60, 1, NULL, 1),
(834, 68, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
`CategoryID` bigint(16) NOT NULL,
  `CategoryName` varchar(64) NOT NULL,
  `Description` varchar(512) NOT NULL,
  `Picture` varchar(64) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`CategoryID`, `CategoryName`, `Description`, `Picture`, `Active`) VALUES
(1, 'SportsWear', '', '', 0),
(2, 'Men', '', '', 0),
(3, 'Women', '', '', 0),
(4, 'Kids', '', '', 0),
(5, 'Bags', '', '', 0),
(6, 'Shoes', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE IF NOT EXISTS `Customers` (
`CustomerID` bigint(16) NOT NULL,
  `UserName` varchar(32) NOT NULL,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `Address1` varchar(256) NOT NULL,
  `Address2` varchar(256) NOT NULL,
  `City` varchar(32) NOT NULL,
  `State` varchar(32) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `Country` varchar(32) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `CreditCard` varchar(16) NOT NULL,
  `CreditCardTypeID` int(16) NOT NULL,
  `CardExpMo` int(2) NOT NULL,
  `CardExpYr` year(4) NOT NULL,
  `BillingAddress` varchar(256) NOT NULL,
  `BillingCity` varchar(32) NOT NULL,
  `BillingRegion` varchar(32) NOT NULL,
  `BillingPostalCode` int(11) NOT NULL,
  `BillingCountry` varchar(32) NOT NULL,
  `ShipAddress` varchar(256) NOT NULL,
  `ShipCity` varchar(32) NOT NULL,
  `ShipRegion` varchar(32) NOT NULL,
  `ShipPostalCode` int(11) NOT NULL,
  `ShipCountry` varchar(32) NOT NULL,
  `DateEntered` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`CustomerID`, `UserName`, `FirstName`, `LastName`, `Address1`, `Address2`, `City`, `State`, `PostalCode`, `Country`, `Phone`, `Email`, `Password`, `CreditCard`, `CreditCardTypeID`, `CardExpMo`, `CardExpYr`, `BillingAddress`, `BillingCity`, `BillingRegion`, `BillingPostalCode`, `BillingCountry`, `ShipAddress`, `ShipCity`, `ShipRegion`, `ShipPostalCode`, `ShipCountry`, `DateEntered`) VALUES
(1, '', 'Naresh', 'Kumar', '', '', '', '', 0, '', '9424692792', 'naresh.codeace@gmail.com', '12345', '', 0, 0, 0000, '', '', '', 0, '', '', '', '', 0, '', '0000-00-00 00:00:00'),
(2, '', 'Shweta', 'Gupta', '', '', '', '', 0, '', '9876543210', 'shweta.codeace@gmail.com', '12345', '', 0, 0, 0000, '', '', '', 0, '', '', '', '', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `FeaturedItems`
--

CREATE TABLE IF NOT EXISTS `FeaturedItems` (
  `ProductID` bigint(16) NOT NULL,
`FeaturedID` bigint(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FeaturedItems`
--

INSERT INTO `FeaturedItems` (`ProductID`, `FeaturedID`) VALUES
(54, 1),
(56, 2),
(58, 3),
(64, 4),
(72, 5),
(76, 6),
(78, 7),
(86, 8),
(87, 9),
(88, 10),
(90, 11),
(97, 12),
(99, 13),
(102, 14),
(103, 15);

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetails`
--

CREATE TABLE IF NOT EXISTS `OrderDetails` (
  `OrderID` bigint(16) NOT NULL,
  `ProductID` bigint(16) NOT NULL,
  `OrderNumber` varchar(16) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Discount` float NOT NULL,
  `Total` float NOT NULL,
  `IDSKU` varchar(16) NOT NULL,
  `SIZE` varchar(10) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `Fulfilled` tinyint(1) NOT NULL,
  `ShipDate` date NOT NULL,
`OrderDetailID` bigint(16) NOT NULL,
  `BillDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
`OrderID` bigint(16) NOT NULL,
  `CustomerID` bigint(16) NOT NULL,
  `OrderNumber` varchar(16) NOT NULL,
  `PaymentID` varchar(16) NOT NULL,
  `OrderDate` date NOT NULL,
  `ShipDate` date NOT NULL,
  `RequiredDate` date NOT NULL,
  `ShipperID` varchar(16) NOT NULL,
  `Freight` float NOT NULL,
  `SalesTax` float NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TransactStatus` varchar(32) NOT NULL,
  `ErrLoc` varchar(64) NOT NULL,
  `ErrMsg` varchar(128) NOT NULL,
  `Fulfilled` tinyint(1) NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  `Paid` tinyint(1) NOT NULL,
  `PaymentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE IF NOT EXISTS `Payment` (
`PaymentID` bigint(16) NOT NULL,
  `PaymentType` varchar(256) NOT NULL,
  `Allowed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
`ProductID` bigint(16) NOT NULL,
  `SKU` varchar(16) NOT NULL,
  `IDSKU` varchar(16) NOT NULL,
  `VendorProductID` bigint(16) NOT NULL,
  `ProductName` varchar(128) NOT NULL,
  `ProductDescription` varchar(1024) NOT NULL,
  `SupplierID` bigint(16) NOT NULL,
  `CategoryID` bigint(16) NOT NULL,
  `SubCategoryID` bigint(16) NOT NULL,
  `QuantityPerUnit` int(11) NOT NULL,
  `UnitPrice` float NOT NULL,
  `MSRP` float NOT NULL,
  `AvailableSize` varchar(500) NOT NULL,
  `AvailableColor` varchar(500) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Discount` float NOT NULL,
  `UnitWeight` float NOT NULL,
  `UnitsInStock` int(11) NOT NULL,
  `UnitsOnOrder` int(11) NOT NULL,
  `ReorderLevel` varchar(16) NOT NULL,
  `ProductAvailable` tinyint(1) NOT NULL,
  `DiscountAvailable` tinyint(1) NOT NULL,
  `CurrentOrder` varchar(128) NOT NULL,
  `Picture` varchar(128) NOT NULL,
  `Ranking` int(11) NOT NULL,
  `Note` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductID`, `SKU`, `IDSKU`, `VendorProductID`, `ProductName`, `ProductDescription`, `SupplierID`, `CategoryID`, `SubCategoryID`, `QuantityPerUnit`, `UnitPrice`, `MSRP`, `AvailableSize`, `AvailableColor`, `Size`, `Discount`, `UnitWeight`, `UnitsInStock`, `UnitsOnOrder`, `ReorderLevel`, `ProductAvailable`, `DiscountAvailable`, `CurrentOrder`, `Picture`, `Ranking`, `Note`) VALUES
(53, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(54, '', '', 0, 'Easy Ruund Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(55, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 1200, 0, 'M,S,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(56, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(57, '', '', 0, 'Easy Polo WHITE Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,XXL,XL', 'BLACK,WHITE', '', 30, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(58, '', '', 0, 'Tough Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 800, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(59, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 60, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(60, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(61, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(62, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(63, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(64, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(65, '', '', 0, 'Tshirt Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 499, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(66, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(67, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(68, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(69, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(70, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(71, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(72, '', '', 0, 'Easy Ruund Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(73, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(74, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(75, '', '', 0, 'Easy Polo WHITE Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,XXL,XL', 'BLACK,WHITE', '', 30, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(76, '', '', 0, 'Tough Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 6, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(77, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 60, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(78, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(79, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(80, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(81, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(82, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(83, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aut7 irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(84, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 7, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(85, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 8, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(86, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 8, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(87, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 8, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(88, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 2, 8, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(89, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(90, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 60, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(91, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(92, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 3, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(93, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 4, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(94, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(95, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 900, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(96, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(97, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(98, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(99, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 11, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(100, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 11, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(101, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(102, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(103, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,L,XL', 'BLACK,WHITE', '', 340, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(104, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 11, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(105, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(106, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(107, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(108, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 11, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(109, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(110, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(111, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 11, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(112, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 13, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, ''),
(113, '', '', 0, 'Easy Polo Black Edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 3, 12, 43, 600, 0, 'M,S,XXL,XL', 'BLACK,WHITE', '', 20, 0, 0, 0, '', 0, 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `Shippers`
--

CREATE TABLE IF NOT EXISTS `Shippers` (
`ShipperID` bigint(16) NOT NULL,
  `CompanyName` varchar(256) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SubCategory`
--

CREATE TABLE IF NOT EXISTS `SubCategory` (
`SubCategoryID` bigint(16) NOT NULL,
  `CategoryID` bigint(16) NOT NULL,
  `SubCategoryName` varchar(128) NOT NULL,
  `SubCategoryDescription` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SubCategory`
--

INSERT INTO `SubCategory` (`SubCategoryID`, `CategoryID`, `SubCategoryName`, `SubCategoryDescription`) VALUES
(1, 1, 'Nike', ''),
(2, 1, 'UnderArmour', ''),
(3, 1, 'Adidas', ''),
(4, 1, 'Puma', ''),
(5, 1, 'Asics', ''),
(6, 2, 'T-Shirts', ''),
(7, 2, 'Trousers', ''),
(8, 2, 'Shoes', ''),
(9, 2, 'SunGlasses', ''),
(10, 2, 'Jeans', ''),
(11, 3, 'T-Shirts', ''),
(12, 3, 'Tops', ''),
(13, 3, 'Jeans', ''),
(14, 3, 'Leggings', ''),
(15, 3, 'WinterWear', ''),
(16, 3, 'Shoes', '');

-- --------------------------------------------------------

--
-- Table structure for table `Suppliers`
--

CREATE TABLE IF NOT EXISTS `Suppliers` (
`SupplierID` bigint(16) NOT NULL,
  `CompanyName` varchar(64) NOT NULL,
  `ContactFName` varchar(64) NOT NULL,
  `ContactLName` varchar(64) NOT NULL,
  `ContactTitle` varchar(16) NOT NULL,
  `Address1` varchar(256) NOT NULL,
  `Address2` varchar(256) NOT NULL,
  `City` varchar(64) NOT NULL,
  `State` varchar(64) NOT NULL,
  `PostalCode` int(16) NOT NULL,
  `Country` varchar(32) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Fax` varchar(16) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `URL` varchar(256) NOT NULL,
  `PaymentMethods` varchar(256) NOT NULL,
  `DiscountType` varchar(256) NOT NULL,
  `TypeGoods` varchar(128) NOT NULL,
  `Notes` varchar(256) NOT NULL,
  `DiscountAvailable` tinyint(1) NOT NULL,
  `CurrentOrder` varchar(64) NOT NULL,
  `Logo` varchar(64) NOT NULL,
  `CustomerID` bigint(16) NOT NULL,
  `SizeURL` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
 ADD PRIMARY KEY (`CartID`), ADD UNIQUE KEY `uq_Cart` (`ProductID`,`CustomerID`), ADD KEY `CustomerID` (`CustomerID`), ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
 ADD PRIMARY KEY (`CategoryID`), ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
 ADD PRIMARY KEY (`CustomerID`), ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `FeaturedItems`
--
ALTER TABLE `FeaturedItems`
 ADD PRIMARY KEY (`FeaturedID`), ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `OrderDetails`
--
ALTER TABLE `OrderDetails`
 ADD PRIMARY KEY (`OrderDetailID`), ADD KEY `OrderDetails_ibfk_1` (`OrderID`), ADD KEY `OrderDetails_ibfk_2` (`ProductID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
 ADD PRIMARY KEY (`OrderID`), ADD KEY `ShipperID` (`ShipperID`), ADD KEY `P` (`PaymentID`), ADD KEY `Orders_ibfk_1` (`CustomerID`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
 ADD KEY `PaymentID` (`PaymentID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
 ADD PRIMARY KEY (`ProductID`), ADD KEY `Products_ibfk_2` (`SupplierID`), ADD KEY `Products_ibfk_3` (`CategoryID`), ADD KEY `SubCategoryID` (`SubCategoryID`);

--
-- Indexes for table `Shippers`
--
ALTER TABLE `Shippers`
 ADD PRIMARY KEY (`ShipperID`);

--
-- Indexes for table `SubCategory`
--
ALTER TABLE `SubCategory`
 ADD PRIMARY KEY (`SubCategoryID`), ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `Suppliers`
--
ALTER TABLE `Suppliers`
 ADD PRIMARY KEY (`SupplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
MODIFY `CartID` bigint(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=835;
--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
MODIFY `CategoryID` bigint(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
MODIFY `CustomerID` bigint(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `FeaturedItems`
--
ALTER TABLE `FeaturedItems`
MODIFY `FeaturedID` bigint(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `OrderDetails`
--
ALTER TABLE `OrderDetails`
MODIFY `OrderDetailID` bigint(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
MODIFY `OrderID` bigint(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
MODIFY `PaymentID` bigint(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
MODIFY `ProductID` bigint(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `Shippers`
--
ALTER TABLE `Shippers`
MODIFY `ShipperID` bigint(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `SubCategory`
--
ALTER TABLE `SubCategory`
MODIFY `SubCategoryID` bigint(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Suppliers`
--
ALTER TABLE `Suppliers`
MODIFY `SupplierID` bigint(16) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cart`
--
ALTER TABLE `Cart`
ADD CONSTRAINT `Cart_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customers` (`CustomerID`),
ADD CONSTRAINT `Cart_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

--
-- Constraints for table `FeaturedItems`
--
ALTER TABLE `FeaturedItems`
ADD CONSTRAINT `FeaturedItems_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

--
-- Constraints for table `OrderDetails`
--
ALTER TABLE `OrderDetails`
ADD CONSTRAINT `OrderDetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `Orders` (`OrderID`),
ADD CONSTRAINT `OrderDetails_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
ADD CONSTRAINT `Orders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customers` (`CustomerID`);

--
-- Constraints for table `Products`
--
ALTER TABLE `Products`
ADD CONSTRAINT `Products_ibfk_3` FOREIGN KEY (`CategoryID`) REFERENCES `Category` (`CategoryID`),
ADD CONSTRAINT `Products_ibfk_4` FOREIGN KEY (`SubCategoryID`) REFERENCES `SubCategory` (`SubCategoryID`);

--
-- Constraints for table `SubCategory`
--
ALTER TABLE `SubCategory`
ADD CONSTRAINT `SubCategory_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `Category` (`CategoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
