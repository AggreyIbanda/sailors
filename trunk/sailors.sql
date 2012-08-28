-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2012 at 06:26 AM
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
  `transactionDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `bar`
--

INSERT INTO `bar` (`id`, `openingStock`, `closingStock`, `purchases`, `unitsSold`, `totalSales`, `product`, `transactionDate`) VALUES
(15, 0, 0, 0, 0, 0, '+0', '2012-08-27 19:22:09'),
(16, 1, 1, 1, 0, 0, '+1', '2012-08-27 19:22:09'),
(17, 2, 2, 2, 0, 0, '+2', '2012-08-27 19:22:10'),
(18, 3, 3, 3, 0, 0, '+3', '2012-08-27 19:22:10'),
(19, 4, 4, 4, 0, 0, '+4', '2012-08-27 19:22:10'),
(20, 5, 5, 5, 0, 0, '+5', '2012-08-27 19:22:10'),
(21, 5, 5, 5, 0, 0, '+5', '2012-08-27 19:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'gloria', 'gloria'),
(2, 'Admin', 'admin'),
(5, 'Admininstrator', 'admin'),
(6, 'mutheu', 'mut'),
(7, 'jose', 'nn'),
(8, 'gladys', 'waka');

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
  `businessUnit` varchar(30) NOT NULL DEFAULT 'undefined',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `Description`, `buyingPrice`, `sellingPrice`, `businessUnit`) VALUES
(1, '500Ml Tusker', '', 100, 120, 'bar'),
(2, '350ml Smirnof Ice', '', 200, 250, 'bar'),
(3, 'Alvaro', '', 100, 150, 'bar'),
(4, 'Snapps', '', 120, 125, 'bar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
