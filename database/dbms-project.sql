-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2020 at 04:37 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(255) NOT NULL AUTO_INCREMENT,
  `customer_id` int(255) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total` double NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `card_number` int(255) NOT NULL,
  `expiration_date` date NOT NULL,
  `cvv` int(255) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_id`, `vin`, `start_date`, `end_date`, `total`, `payment_type`, `card_number`, `expiration_date`, `cvv`) VALUES
(1, 11, '3FAHP0JA9CR100470', '2020-11-01', '2020-11-03', 1200, 'Mastercard', 12345, '2020-11-17', 123),
(2, 12, 'G3URU3ISIFHRI679232', '2020-11-01', '2020-11-19', 3420, 'Visa', 123445, '1970-01-01', 123),
(3, 12, 'JTKDE3B73A0347847', '2020-11-12', '2020-11-26', 3975, 'Mastercard', 123345, '2020-11-18', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `phone`, `feedback`) VALUES
(1, 'a', 'a', 'a@a.a', 'a', 'a'),
(2, 'Mitch', 'Hicks', 'ajdhdj@ddd.com', '4567ui', 'hjedgjkedfjkledfjkl;3def');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(255) NOT NULL AUTO_INCREMENT,
  `license_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `unit` int(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`,`license_number`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `license_number`, `first_name`, `last_name`, `email`, `street`, `city`, `postal`, `unit`, `phone_number`, `username`, `password`) VALUES
(12, '123445', 'Mitch', 'Hicks', 'm@s.com', 'Bot St', 'Uxbridge', 'L2VG5H', 11, '987654321', 'msens', 'test'),
(11, 'idk123', 'Austin', 'Page', 'a@p.com', 'Street', 'City', 'L1B3VG', 11, '1234567890', 'apage', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employeeID` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Postal` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  PRIMARY KEY (`employeeID`,`SSN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `SSN`, `firstName`, `lastName`, `City`, `Street`, `Unit`, `Postal`, `Email`) VALUES
(1, 123456789, 'Austin', 'Page', 'Toronto', 'Bridal Path', 23, 'M1C4G7', 'a@p.com'),
(2, 234567891, 'Taha', 'Hashmat', 'Oshawa', 'McGreggor Crescent', 19, 'L2G4G5', 't@h.com'),
(3, 384828485, 'Mitchell', 'Hicks', 'Uxbridge', 'Holloway Street', 43, 'N3C4C6', 'm@h.com'),
(4, 459683019, 'Yakho', 'Sivapur', 'Scarborough', 'Bot Road', 73, 'H3D8L4', 'y@s.com'),
(5, 547382910, 'Raveenth', 'Mahas', 'York', 'Porier Street', 442, 'K3M3K6', 'r@m.com'),
(6, 673929284, 'Sabesan', 'Sivakum', 'Pickering', 'Jones Boulevard', 32, 'G3M4H9', 's@s.com'),
(7, 728839120, 'Owais', 'Quadri', 'Oshawa', 'Khabib Circle', 53, 'K873G8', 'o@q.com'),
(8, 828382839, 'Aayush', 'Bajaj', 'Whitby', 'Ruiz Drive', 462, 'M4D8R4', 'a@b.com'),
(9, 938829293, 'Donald', 'Trump', 'York', 'Jane & Finch', 24, 'K2H8D8', 'd@t.com'),
(10, 104893929, 'Joe', 'Biden', 'Ottawa', 'Presidential Avenue', 1, 'A3A3B9', 'j@b.com');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `VIN` varchar(45) NOT NULL,
  `plateNumber` varchar(45) NOT NULL,
  `Colour` varchar(45) NOT NULL,
  `Year` int(11) NOT NULL,
  `Make` varchar(45) NOT NULL,
  `Model` varchar(45) NOT NULL,
  `Mileage` int(11) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Price` decimal(65,0) NOT NULL,
  PRIMARY KEY (`VIN`,`plateNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VIN`, `plateNumber`, `Colour`, `Year`, `Make`, `Model`, `Mileage`, `Status`, `Photo`, `Price`) VALUES
('JTKDE3B73A0347847', 'ABCD001', 'Yellow', 2018, 'Lamborghini', 'Aventador', 777, 'Available', 'yaventador18.jpg', '265'),
('3FAHP0JA9CR100470', 'BCDE002', 'Blue', 2020, 'Bugatti', 'Chiron', 201, 'Unavailable', 'bchiron20.jpg', '400'),
('1GNFK16K5RJ334512', 'CDEF003', 'White', 2019, 'Tesla', 'Model X', 1900, 'Available', 'wmodelx19.jpg', '100'),
('WBAVC53598FZ90864', 'DEFG004', 'Black', 2019, 'Lamborghini', 'Huracan Performante', 506, 'Available', 'bhuracan19.jpg', '275'),
('WAUKH68D11A004771', 'EFGH005', 'Purple', 2010, 'Lamborghini', 'Murcielago', 2034, 'Unavailable', 'pmurcielago10.jpg', '125'),
('1FTFW1CF7DKD95982', 'FGHI006', 'Red', 2020, 'Ferrari', 'F8', 102, 'Unavailable', 'rf820.jpg', '200'),
('G3URU3ISIFHRI679232', 'HWWO467', 'Charcoal', 2019, 'Aston Martin', 'DBS', 1500, 'Available', 'charcoaldb519.jpg', '180'),
('HJ3JRFJE922JS892109', 'KAIC234', 'Black', 2020, 'Bentley', 'Bentyga', 450, 'Available', 'bbentayga20.jpg', '275'),
('IEE433JFJDJEJ458922', 'QIWL920', 'Yellow', 2019, 'Lamborghini', 'Urus', 982, 'Available', 'yurus20.jpg', '250'),
('HSUW20DHJW348910', 'HWQL201', 'Black', 2018, 'Rolls Royce', 'Wraith', 3485, 'Unavailable', 'bwraith18.jpg', '350'),
('GHIWDXGHWEDGHJEDGH', 'JKDJKEDHJKED', 'Black', 1990, 'Honda', 'Civic', 999999, 'Unavailable', 'honda.jpg', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
