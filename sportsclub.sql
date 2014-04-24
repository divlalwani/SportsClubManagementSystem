-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2013 at 10:19 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sportsclub`
--
CREATE DATABASE IF NOT EXISTS `sportsclub` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sportsclub`;

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `Fid` int(11) NOT NULL,
  `Tid` int(11) NOT NULL,
  PRIMARY KEY (`Fid`,`Tid`),
  KEY `Tid` (`Tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`Fid`, `Tid`) VALUES
(1, 10000),
(2, 10000),
(3, 10000),
(4, 10000),
(5, 10000),
(6, 10000),
(1, 20000),
(2, 20000),
(3, 20000),
(4, 20000),
(1, 30000),
(2, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE IF NOT EXISTS `consult` (
  `Cid` int(11) NOT NULL,
  `Eid` int(11) NOT NULL,
  PRIMARY KEY (`Cid`,`Eid`),
  KEY `Eid` (`Eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Cid` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Apt_No` varchar(10) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zip` int(20) NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Ph_No` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(80) NOT NULL,
  PRIMARY KEY (`Cid`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cid`, `FName`, `LName`, `Apt_No`, `Street`, `State`, `City`, `Zip`, `Start_date`, `End_date`, `Dob`, `Gender`, `Ph_No`, `Email`, `Password`) VALUES
(4, 'Divya', 'Lalwani', '748', 'Woodbridge Drive', 'IN', 'Bloomington', 47408, '2013-12-01', '2014-12-01', '1990-10-05', 'Female', '123456789', 'divlalwani@gmail.com', 'e19d5cd5af0378da05f63f891c7467af'),
(100, 'Sagar', 'Thakur', '3528', 'John Hinkle Pl', 'Indiana', 'Bloomington', 47408, '0000-00-00', '0000-00-00', '1991-11-15', 'Male', '2194480231', 'thakursagar@gmail.co', 'e10adc3949ba59abbe56e057f20f883e'),
(101, 'Oliver', 'Lewis', '608', 'Woodbridge Drive', 'Indiana', 'Bloomington', 47408, '0000-00-00', '0000-00-00', '2013-11-04', 'Male', '8128128120', 'oliverlewis7@gmail.c', '96e79218965eb72c92a549dd5a330112'),
(102, 'Shreya', 'Ahuja', '219', 'Fountain Park', 'Indiana', 'Bloomington', 47408, '2013-12-09', '2014-12-09', '1999-12-01', 'male', '8123450987', 'shreya@gmail.com', '4a3232c59ecda21ac71bebe3b329bf36'),
(103, 'Shreya', 'Ahuja', '389', 'Fountain Park', 'Indiana', 'Bloomington', 47408, '2013-12-09', '2014-12-09', '2013-12-05', 'female', '8123450987', 'shreya@yahoo.com', '4a3232c59ecda21ac71bebe3b329bf36'),
(104, 'Shreya', 'Ahuja', '890', 'Fountain Park', 'Indiana', 'Bloomington', 47408, '2014-12-10', '2015-12-10', '2013-12-01', 'female', '8123450987', 'shreya@hotmail.com', '4a3232c59ecda21ac71bebe3b329bf36');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Eid` int(11) NOT NULL AUTO_INCREMENT,
  `EName` varchar(25) NOT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Eid`, `EName`) VALUES
(111, 'Miley Cyrus'),
(112, 'Ricky Martin'),
(113, 'Jeff Fritz'),
(114, 'Gincy Mathew'),
(115, 'Ant Corrie'),
(116, 'Ted Mosby'),
(117, 'Amanda Lowe');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE IF NOT EXISTS `facility` (
  `Fid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`Fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`Fid`, `Name`, `Description`) VALUES
(1, 'Basketball', 'Basketball Facility'),
(2, 'Tennis', 'Tennis Facility'),
(3, 'Badminton', 'Badminton Facility'),
(4, 'Squash', 'Squash Facility'),
(5, 'Volleyball', 'Volleyball Facility'),
(6, 'Swimming', 'Swimming Pool');

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE IF NOT EXISTS `has` (
  `date` date NOT NULL,
  `Cid` int(11) DEFAULT NULL,
  `Fid` int(11) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Is_Avail` tinyint(1) NOT NULL,
  PRIMARY KEY (`date`,`Fid`,`Sid`),
  KEY `Sid` (`Sid`),
  KEY `has_ibfk_1` (`Fid`),
  KEY `has_ibfk_3` (`Cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has`
--

INSERT INTO `has` (`date`, `Cid`, `Fid`, `Sid`, `Is_Avail`) VALUES
('2013-12-09', NULL, 1, 1, 0),
('2013-12-09', 4, 1, 2, 1),
('2013-12-09', NULL, 3, 2, 0),
('2013-12-11', NULL, 4, 3, 0),
('2013-12-12', 4, 1, 3, 1),
('2013-12-18', 4, 5, 2, 1),
('2013-12-19', NULL, 1, 1, 0),
('2013-12-19', NULL, 1, 2, 0),
('2013-12-19', 4, 4, 2, 1),
('2013-12-21', NULL, 6, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `Tid` int(11) NOT NULL AUTO_INCREMENT,
  `Amt` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`Tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30001 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`Tid`, `Amt`, `Description`) VALUES
(10000, 800, 'Gold'),
(20000, 600, 'Silver'),
(30000, 400, 'Bronze');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `Cid` int(11) NOT NULL,
  `Tid` int(11) NOT NULL,
  PRIMARY KEY (`Cid`,`Tid`),
  KEY `Tid` (`Tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`Cid`, `Tid`) VALUES
(4, 10000),
(104, 10000),
(101, 20000),
(100, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE IF NOT EXISTS `slots` (
  `Sid` int(11) NOT NULL AUTO_INCREMENT,
  `Time` time NOT NULL,
  PRIMARY KEY (`Sid`),
  UNIQUE KEY `Time` (`Time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`Sid`, `Time`) VALUES
(1, '12:00:00'),
(2, '14:00:00'),
(3, '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Eid` int(11) NOT NULL,
  `Duty_Desc` varchar(100) NOT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE IF NOT EXISTS `teach` (
  `Fid` int(11) NOT NULL,
  `Eid` int(11) NOT NULL,
  PRIMARY KEY (`Fid`,`Eid`),
  KEY `Eid` (`Eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`Fid`, `Eid`) VALUES
(1, 111),
(2, 112),
(3, 113),
(4, 114),
(5, 115),
(6, 116);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `Eid` int(11) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Exp` int(3) NOT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Eid`, `Designation`, `Exp`) VALUES
(111, 'Gold Medalist in Basketball', 2),
(112, 'Tennis Trainer', 3),
(113, 'Indiana University''s Best Badminton Trainer', 3),
(114, 'Squash Trainer', 0),
(115, 'Volleyball Trainer', 1),
(116, 'Swimming Expert', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `access_ibfk_2` FOREIGN KEY (`Tid`) REFERENCES `membership` (`Tid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `access_ibfk_1` FOREIGN KEY (`Fid`) REFERENCES `facility` (`Fid`) ON UPDATE CASCADE;

--
-- Constraints for table `consult`
--
ALTER TABLE `consult`
  ADD CONSTRAINT `consult_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `customer` (`Cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `consult_ibfk_2` FOREIGN KEY (`Eid`) REFERENCES `employee` (`Eid`) ON UPDATE CASCADE;

--
-- Constraints for table `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `has_ibfk_1` FOREIGN KEY (`Fid`) REFERENCES `facility` (`Fid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `has_ibfk_2` FOREIGN KEY (`Sid`) REFERENCES `slots` (`Sid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `has_ibfk_3` FOREIGN KEY (`Cid`) REFERENCES `customer` (`Cid`) ON UPDATE CASCADE;

--
-- Constraints for table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `pays_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `customer` (`Cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pays_ibfk_2` FOREIGN KEY (`Tid`) REFERENCES `membership` (`Tid`) ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`Eid`) REFERENCES `employee` (`Eid`) ON UPDATE CASCADE;

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
  ADD CONSTRAINT `teach_ibfk_1` FOREIGN KEY (`Fid`) REFERENCES `facility` (`Fid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `teach_ibfk_2` FOREIGN KEY (`Eid`) REFERENCES `employee` (`Eid`) ON UPDATE CASCADE;

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`Eid`) REFERENCES `employee` (`Eid`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
