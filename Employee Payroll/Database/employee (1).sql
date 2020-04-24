-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 06:59 PM
-- Server version: 5.5.58
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `Sr_No` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` int(11) NOT NULL,
  `AttendedDays` int(5) NOT NULL,
  `TotalDays` int(5) NOT NULL,
  `Percentage` int(5) NOT NULL,
  PRIMARY KEY (`Sr_No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`Sr_No`, `ID`, `FirstName`, `LastName`, `Department`, `Username`, `Month`, `Year`, `AttendedDays`, `TotalDays`, `Percentage`) VALUES
(1, 2, 'Ekta', 'Hemnani', 'CE', 'ektahemnani', 'January', 2020, 23, 25, 92),
(2, 2, 'Ekta', 'Hemnani', 'CE', 'ektahemnani', 'February', 2020, 24, 26, 92),
(3, 2, 'Ekta', 'Hemnani', 'CE', 'ektahemnani', 'March', 2020, 26, 26, 100),
(4, 12, 'Megha', 'Butani', 'IT', 'meghabutani', 'January', 2020, 23, 25, 92),
(5, 12, 'Megha', 'Butani', 'IT', 'meghabutani', 'February', 2020, 25, 26, 96),
(6, 12, 'Megha', 'Butani', 'IT', 'meghabutani', 'March', 2020, 23, 26, 88);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE IF NOT EXISTS `personal_details` (
  `EmpId` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Mob` text NOT NULL,
  `EmployeeType` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(64) NOT NULL,
  PRIMARY KEY (`EmpId`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `EmpId` (`EmpId`),
  UNIQUE KEY `EmpId_2` (`EmpId`),
  KEY `FirstName` (`FirstName`),
  KEY `FirstName_2` (`FirstName`),
  KEY `FirstName_3` (`FirstName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`EmpId`, `FirstName`, `LastName`, `Gender`, `Email`, `Mob`, `EmployeeType`, `Department`, `Username`, `Password`) VALUES
(2, 'Ekta', 'Hemnani', 'Female', 'ektahemnani@gmail.com', '7788995566', 'Jr. Manager', 'CE', 'ektahemnani', '12345'),
(3, 'Puja', 'Kumari', 'Female', 'p@gmail.com', '9898987766', 'Jr. Manager', 'MBA', 'pujakumari', '2345'),
(5, 'Nayana', 'Sharma', 'Female', 'nayana@gmail.com', '9898776655', 'Jr. Clerk', 'Electronics ', 'Nayana', '12345'),
(6, 'Riya', 'Shah', 'Female', 'r@gmail.com', '8889997776', 'sr. Clerk', 'Electronics ', 'riyashah', '1234'),
(10, 'Puja', 'Sharma', 'Female', 'pujasharma@yahoo.com', '7799088555', 'Jr. Clerk', 'IT', 'pujasharma', '44556'),
(11, 'Priya', 'Roy', 'Female', 'priya@gmail.com', '6678899444', 'Jr. Manager', 'IT', 'priyaroy', '34567'),
(12, 'Megha', 'Butani', 'Female', 'megha@gmail.com', '9898775564', 'Jr. Manager', 'IT', 'meghabutani', 'adil'),
(13, 'swati', 'aaadd', 'Female', 'sdcsdvc@gmail.com', '9898987766', 'sr. Clerk', 'MBA', 'aaaa', '23333'),
(15, 'Nayana', 'Roy', 'Female', 'nroy@gmail.com', '7788995566', 'Jr. Clerk', 'IT', 'nayanaroy', 'nayana'),
(16, 'Dipa', 'Mishra', 'Female', 'dipa@gmail.com', '8866644433', 'Jr. Clerk', 'Electronics', 'dipa', 'dipa'),
(17, 'Jayesh', 'Patel', 'Male', 'jayesh@gmail.com', '7788866555', 'Jr. Manager', 'MBA', 'jayesh', 'jayesh'),
(18, 'sheetal', 'shah', 'Female', 'sssss@ffdd', '1234567890', 'sr. Clerk', 'ce', 'sss', 'sss'),
(21, 'Ekta', 'Hemnani', 'Female', 'ekta@gmail.com', '5566778899', 'Manager', 'Finance', 'ektahemnani2', '12345'),
(23, 'Priya', 'Roy', 'Female', 'priyaroy@gmail.com', '6677554433', 'sr. Clerk', 'IT', 'priya', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `Sr_No` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` int(11) NOT NULL,
  `Basic` varchar(30) NOT NULL,
  `HouseRentA` varchar(10) NOT NULL,
  `MedicalA` varchar(10) NOT NULL,
  `DearnessA` varchar(10) NOT NULL,
  `Gross` varchar(30) NOT NULL,
  `IncomeTax` varchar(10) NOT NULL,
  `ProfessionalTax` int(10) NOT NULL,
  `VehicleAdvance` int(10) NOT NULL,
  `Net` varchar(30) NOT NULL,
  PRIMARY KEY (`Sr_No`),
  KEY `ID` (`ID`),
  KEY `ID_2` (`ID`),
  KEY `EmpName` (`FirstName`),
  KEY `EmpName_2` (`FirstName`),
  KEY `EmpName_3` (`FirstName`),
  KEY `EmpName_4` (`FirstName`),
  KEY `EmpName_5` (`FirstName`),
  KEY `EmpName_6` (`FirstName`),
  KEY `EmpName_7` (`FirstName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`Sr_No`, `ID`, `FirstName`, `LastName`, `Department`, `Username`, `Month`, `Year`, `Basic`, `HouseRentA`, `MedicalA`, `DearnessA`, `Gross`, `IncomeTax`, `ProfessionalTax`, `VehicleAdvance`, `Net`) VALUES
(1, 2, 'Ekta', 'Hemnani', 'CE', 'ektahemnani', 'January', 2020, '45000', '6750', '4500', '9000', '65250', '4500', 200, 4500, '56050'),
(2, 2, 'Ekta', 'Hemnani', 'CE', 'ektahemnani', 'February', 2020, '47000', '7050', '4700', '9400', '68150', '4700', 200, 4700, '58550'),
(3, 2, 'Ekta', 'Hemnani', 'CE', 'ektahemnani', 'March', 2020, '48000', '7200', '4800', '9600', '69600', '4800', 200, 4800, '59800'),
(5, 2, 'Ekta', 'Hemnani', 'CE', 'ektahemnani', 'April', 2020, '51000', '7650', '5100', '7650', '71400', '5100', 200, 5100, '61000');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `personal_details` (`EmpId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
