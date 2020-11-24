-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2020 at 01:57 AM
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
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `bookingID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `VIN` varchar(45) NOT NULL,
  `startDate` varchar(45) NOT NULL,
  `endDate` varchar(45) NOT NULL,
  `Price` double NOT NULL,
  `paymentType` varchar(45) NOT NULL,
  PRIMARY KEY (`bookingID`,`customerID`,`VIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='	';

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingID`, `customerID`, `VIN`, `startDate`, `endDate`, `Price`, `paymentType`) VALUES
(828191, 1, 'JTKDE3B73A0347847', '09-08-2020', '09-11-2020', 3000, 'Visa Credit'),
(483912, 2, '3FAHP0JA9CR100470', '09-17-2020', '09-17-2020', 1000, 'Visa Credit'),
(219191, 3, '1GNFK16K5RJ334512', '10-3-2020', '10-4-2020', 2000, 'Mastercard Credit'),
(939192, 4, 'WBAVC53598FZ90864', '10-21-2020', '10-24-2020', 4000, 'Visa Credit'),
(573829, 5, 'WAUKH68D11A004771', '10-19-2020', '10-19-2020', 1000, 'Mastercard Credit'),
(261728, 6, '1FTFW1CF7DKD95982', '08-28-2020', '08-28-2020', 1000, 'Mastercard Credit'),
(828718, 7, 'G3URU3ISIFHRI679232', '08-16-2020', '08-19-2020', 3000, 'Visa Credit'),
(374783, 8, 'HJ3JRFJE922JS892109', '07-29-2020', '07-30-2020', 2000, 'Visa Credit'),
(728239, 9, 'IEE433JFJDJEJ458922', '10-15-2020', '10-20-2020', 5000, 'Mastercard Credit'),
(374201, 10, 'HSUW20DHJW348910', '10-26-2020', '10-26-2020', 1000, 'Visa Credit');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerID` varchar(45) NOT NULL,
  `licenseNumber` varchar(45) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Postal` varchar(45) NOT NULL,
  `Unit` int(11) NOT NULL,
  PRIMARY KEY (`customerID`,`licenseNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `licenseNumber`, `firstName`, `lastName`, `Email`, `Street`, `City`, `Postal`, `Unit`) VALUES
('7', '1029394020', 'Justin', 'Beiber', 'j@b.com', 'Simcoe Street', 'Oshawa', 'K2K9H8', 45),
('8', '2001039201', 'Rachel', 'McAdams', 'r@a.com', 'Oasis Lane', 'Oakville', 'Y7Y9D8', 31),
('1', '8345838289', 'Aubrey', 'Drake', 'a@b.com', 'Mayfair Lane', 'North York', 'K3K4M2', 15),
('2', '1923392901', 'Abel', 'Hernandez', 'a@h.com', 'Bridal Path', 'Toronto', 'L3L9J7', 23),
('3', '3939110100', 'Kwahi', 'Leonard', 'k@l.com', 'King Street', 'Toronto', 'D4D9L0', 15),
('4', '7382919191', 'Ryan', 'Reynolds', 'r@r.com', 'Bellevue Way', 'Waterloo', 'I2I4G5', 19),
('5', '9393930011', 'Kyle', 'Lowry', 'k@l.com', 'Gardner Avenue', 'Vaughan', 'B4B1G7', 70),
('6', '3823834844', 'Shawn', 'Mendes', 's@m.com', 'Bilson Shores', 'Etobicoke', 'R3R9K0', 13),
('10', '2838495929', 'Ryan', 'Gosling', 'r@g.com', 'Kims Circle', 'Whitby', 'L1L9C9', 65),
('9', '9438237181', 'Jim', 'Carrey', 'j@c.com', 'Yosemite Park', 'Pickering', 'E7E0K8', 17);

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(1, 'test', 'test', 'test', 'test@test.test', 'test'),
(2, 'a', 'a', 'aaa', 'a@a.a', 'aaa');

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
('JTKDE3B73A0347847', 'ABCD001', 'Yellow', 2018, 'Lamborghini', 'Aventador', 777, 'Available', 'yaventador18.jpg', '0'),
('3FAHP0JA9CR100470', 'BCDE002', 'Blue', 2020, 'Bugatti', 'Chiron', 201, 'Unavailable', 'bchiron20.jpg', '0'),
('1GNFK16K5RJ334512', 'CDEF003', 'White', 2019, 'Tesla', 'Model X', 1900, 'Available', 'wmodelx19.jpg', '0'),
('WBAVC53598FZ90864', 'DEFG004', 'Black', 2019, 'Lamborghini', 'Huracan Performante', 506, 'Available', 'bhuracan19.jpg', '0'),
('WAUKH68D11A004771', 'EFGH005', 'Purple', 2010, 'Lamborghini', 'Murcielago', 2034, 'Unavailable', 'pmurcielago10.jpg', '0'),
('1FTFW1CF7DKD95982', 'FGHI006', 'Red', 2020, 'Ferrari', 'F8', 102, 'Unavailable', 'rf820.jpg', '0'),
('G3URU3ISIFHRI679232', 'HWWO467', 'Charcoal', 2019, 'Aston Martin', 'DBS', 1500, 'Available', 'charcoaldb519.jpg', '0'),
('HJ3JRFJE922JS892109', 'KAIC234', 'Black', 2020, 'Bentley', 'Bentyga', 450, 'Available', 'bbentayga20.jpg', '0'),
('IEE433JFJDJEJ458922', 'QIWL920', 'Yellow', 2019, 'Lamborghini', 'Urus', 982, 'Available', 'yurus20.jpg', '0'),
('HSUW20DHJW348910', 'HWQL201', 'Black', 2018, 'Rolls Royce', 'Wraith', 3485, 'Unavailable', 'bwraith18.jpg', '0'),
('GHIWDXGHWEDGHJEDGH', 'JKDJKEDHJKED', 'Black', 1990, 'Honda', 'Civic', 999999, 'Unavailable', 'honda.jpg', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
