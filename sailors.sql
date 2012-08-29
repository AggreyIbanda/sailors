-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2012 at 01:49 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sailors`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE IF NOT EXISTS `accommodation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomN0` int(11) NOT NULL,
  `dateOccupied` date NOT NULL,
  `amountRecieved` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `roomN0`, `dateOccupied`, `amountRecieved`) VALUES
(19, 401, '2012-08-30', 400),
(20, 402, '2012-08-30', 400),
(21, 407, '2012-08-30', 600),
(22, 408, '2012-08-30', 600),
(23, 401, '2012-08-21', 400),
(24, 401, '2012-08-21', 400),
(25, 401, '2012-08-14', 400),
(26, 402, '2012-08-14', 400),
(27, 401, '2012-08-12', 400),
(28, 402, '2012-08-12', 400),
(29, 407, '2012-08-12', 600),
(30, 408, '2012-08-12', 600);

-- --------------------------------------------------------

--
-- Table structure for table `bar`
--

CREATE TABLE IF NOT EXISTS `bar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openingStock` int(11) NOT NULL,
  `closingStock` int(11) NOT NULL,
  `purchases` int(11) NOT NULL,
  `unitsSold` int(11) NOT NULL,
  `totalSales` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `transactionDate` date NOT NULL,
  `totalCost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `bar`
--

INSERT INTO `bar` (`id`, `openingStock`, `closingStock`, `purchases`, `unitsSold`, `totalSales`, `product`, `transactionDate`, `totalCost`) VALUES
(104, 100, 34, 444, 510, 76500, '3', '2012-08-30', 51000),
(105, 100, 54, 44, 90, 9000, '4', '2012-08-30', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `butchery`
--

CREATE TABLE IF NOT EXISTS `butchery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchases` int(11) NOT NULL,
  `waste` int(11) NOT NULL,
  `closingStock` int(11) NOT NULL,
  `transactionDate` date NOT NULL,
  `amountSold` int(11) NOT NULL,
  `totalSales` int(11) NOT NULL,
  `openingStock` int(11) NOT NULL,
  `totalCost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10015 ;

--
-- Dumping data for table `butchery`
--

INSERT INTO `butchery` (`id`, `purchases`, `waste`, `closingStock`, `transactionDate`, `amountSold`, `totalSales`, `openingStock`, `totalCost`) VALUES
(10014, 250, 100, 50, '2012-08-08', 100, 38000, 0, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'gloria', 'gloria'),
(2, 'Admin', 'admin'),
(5, 'Admininstrator', 'admin'),
(6, 'mutheu', 'mut'),
(7, 'jose', 'nn'),
(8, 'gladys', 'waka'),
(9, 'katheu', 'yes'),
(10, 'tick', 'tick'),
(11, 'tick3', '44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `buyingPrice` int(11) NOT NULL,
  `sellingPrice` int(11) NOT NULL,
  `businessUnit` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `Description`, `buyingPrice`, `sellingPrice`, `businessUnit`) VALUES
(3, 'Alvaro', '', 100, 150, 'bar'),
(4, 'Mango Juice', '', 50, 100, 'bar'),
(5, 'meat', '', 200, 380, 'butchery'),
(6, 'candles', '', 50, 100, 'rooms'),
(7, 'soap', '', 50, 100, 'rooms');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amountRecieved` int(11) NOT NULL,
  `dateRecieved` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `amountRecieved`, `dateRecieved`) VALUES
(9, 500000, '2012-07-31'),
(10, 500000, '2012-08-07'),
(11, 50000023, '2012-08-07'),
(12, 34343, '2012-08-21'),
(13, 50000023, '2012-08-29'),
(14, 44, '2012-09-03'),
(15, 400, '2012-08-01'),
(16, 400, '2012-08-01'),
(17, 444444, '2012-09-05'),
(18, 7700, '2012-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `roomcosts`
--

CREATE TABLE IF NOT EXISTS `roomcosts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `datePurchased` date NOT NULL,
  `noOfItems` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `roomcosts`
--

INSERT INTO `roomcosts` (`id`, `product`, `amount`, `datePurchased`, `noOfItems`) VALUES
(27, 6, 50, '2012-08-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomNumber` int(11) NOT NULL,
  `roomType` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomNumber`, `roomType`) VALUES
(1, 401, 1),
(2, 407, 2),
(3, 402, 1),
(4, 408, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE IF NOT EXISTS `roomtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomType` varchar(50) NOT NULL,
  `amountPerNight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `roomType`, `amountPerNight`) VALUES
(1, 'SINLE', 400),
(2, 'SELF-CONTAINED', 600);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
