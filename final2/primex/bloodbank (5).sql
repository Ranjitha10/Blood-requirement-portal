-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 08:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `d_no` varchar(10) NOT NULL DEFAULT '',
  `address_d` varchar(200) DEFAULT NULL,
  `d_id` varchar(10) NOT NULL DEFAULT '',
  `pincode` varchar(6) DEFAULT NULL,
  `state_no` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`d_no`,`state_no`,`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`d_no`, `address_d`, `d_id`, `pincode`, `state_no`) VALUES
('1', '20th cross, bagalgunte, bangalore', '1', '560054', '1'),
('1', '20th cross, bagalgunte, bangalore', '2', '560054', '1'),
('12', '6th cross, basveshwarnagar', '3', '560124', '1'),
('12', '6th cross, basveshwarnagar', '4', '560124', '1'),
('12A', '8th cross, 9th block,jaynagar', '5', '560544', '1'),
('133', '18th B cross, RT nagar', '6', '560159', '1'),
('133', '18th B cross, RT nagar', '7', '560159', '1'),
('2', '3rd main, 5th cross, rajajinagar', '8', '560089', '1'),
('2', '3rd main, 5th cross, rajajinagar', '9', '560089', '1'),
('3', '24th cross, 3rd phase,kamalanagar', '10', '560509', '1'),
('343', '27th cross, kamalanagar', '11', '560299', '1'),
('343', '27th cross, kamalanagar', '12', '560299', '1'),
('43', '12th B cross, RT nagar', '13', '560264', '1'),
('43', '12th B cross, RT nagar', '14', '560264', '1'),
('45', '21st cross, kamalanagar', '15', '560194', '1'),
('45', '21st cross, kamalanagar', '16', '560194', '1'),
('45', '21st B cross,7th main, 2nd phase RT nagar', '17', '560474', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` varchar(10) NOT NULL,
  `institution` char(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `ph_number` varchar(20) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `password_a` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `institution`, `name`, `ph_number`, `email_id`, `password_a`) VALUES
('IS001', 'RVCE', 'Apoorva', '9611939150', 'apoo@gmail.com', '0553d1df16b3da22303502dd5a9d6ee3');

-- --------------------------------------------------------

--
-- Table structure for table `appends`
--

CREATE TABLE IF NOT EXISTS `appends` (
  `d_id` varchar(10) NOT NULL DEFAULT '',
  `s_id` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`d_id`,`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
  `b_code` varchar(10) NOT NULL DEFAULT '',
  `d_id` varchar(10) NOT NULL DEFAULT '',
  `date_of_donation` date DEFAULT NULL,
  PRIMARY KEY (`d_id`,`b_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`b_code`, `d_id`, `date_of_donation`) VALUES
('101', '1', '2042-08-02'),
('101', '10', '2042-08-02'),
('102', '11', '2042-08-02'),
('103', '12', '2042-08-02'),
('104', '13', '2042-08-02'),
('105', '14', '2042-08-02'),
('106', '15', '2042-08-02'),
('107', '16', '2042-08-02'),
('108', '17', '2042-08-02'),
('102', '2', '2042-08-02'),
('103', '3', '2042-08-02'),
('104', '4', '2042-08-02'),
('105', '5', '2042-08-02'),
('106', '6', '2042-08-02'),
('107', '7', '2042-08-02'),
('108', '8', '2042-08-02'),
('109', '9', '2042-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE IF NOT EXISTS `donates` (
  `d_id` varchar(10) NOT NULL DEFAULT '',
  `b_code` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`b_code`,`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `d_id` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(50) DEFAULT NULL,
  `ph_number` varchar(20) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `a_id` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`a_id`,`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`d_id`, `name`, `ph_number`, `email_id`, `dob`, `gender`, `age`, `blood_group`, `area`, `a_id`) VALUES
('1', 'APARNA JOSHI', '9738692465', 'aparnajoshi.88@gmail.com', '1995-02-21', 'F', 20, 'O+', 'Bangalore North', 'IS001'),
('10', 'ANISHA', '9886127398', 'anishaprasad.94@gmail.com', '1968-01-02', 'F', 47, 'AB+', 'Bangalore North', 'IS001'),
('11', 'M R SUNDARAKUMAR', '8908908900', 'suranadara@hotspot.com', '1984-02-21', 'M', 31, 'AB+', 'Bangalore East', 'IS001'),
('12', 'B S SUDHEENDRA', '9448143586', 'sudheendra@gmail.com', '1961-01-31', 'M', 54, 'AB+', 'Bangalore East', 'IS001'),
('13', 'CHANNA VEERIAH', '9538340017', 'cveeraiah@yahoo.com', '1969-02-01', 'M', 46, 'AB-', 'Bangalore North', 'IS001'),
('14', 'V MAMTHA', '9845098756', 'mamthav@hotspot.com', '1981-03-23', 'F', 34, 'O+', 'Bangalore South', 'IS001'),
('15', 'VIDYA PATIL', '9591230191', 'vidya_patil@gmail.com', '1981-05-06', 'F', 34, 'A+', 'Bangalore East', 'IS001'),
('16', 'KOWCIKA A', '8050424134', 'kowicka@yahoo.com', '1989-03-14', 'M', 26, 'O-', 'Bangalore West', 'IS001'),
('17', 'MANONMANI S ', '8050078123', 'manomani.s@hotspot.com', '1982-11-02', 'F', 33, 'B+', 'Bangalore North', 'IS001'),
('2', 'APOORVA N', '9611939150', 'apoorvanagaraj95@gmail.com', '1995-01-02', 'F', 20, 'O+', 'Bangalore North', 'IS001'),
('3', 'RAJATH JAVALI', '8867662232', 'rajathjavali@gmail.com', '1994-04-25', 'M', 20, 'B+', 'Bangalore East', 'IS001'),
('4', 'SUHAS BHAT', '9880012843', 'suhabhatta.a@gmail.com', '1994-03-26', 'F', 20, 'B-', 'Bangalore North', 'IS001'),
('5', 'PRAJNYA', '9845098756', 'prajnya@gmail.com', '1993-10-19', 'F', 21, 'AB-', 'Bangalore South', 'IS001'),
('6', 'POOJAN', '9591230191', 'poojan@gmail.com', '1995-03-07', 'M', 20, 'A+', 'Bangalore East', 'IS001'),
('7', 'NAMRATA', '7411882316', 'nams2594@gmail.com', '1994-12-25', 'F', 20, 'B-', 'Bangalore West', 'IS001'),
('8', 'RAKSHITHA', '9686687303', 'lrrakshitha@gmail.com', '1994-06-13', 'F', 20, 'B+', 'Bangalore North', 'IS001'),
('9', 'BHASKAR  M G', '8553948300', 'bhaskar.mg@gmail.com', '1987-02-01', 'M', 28, 'B+', 'Bangalore North', 'IS001');

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE IF NOT EXISTS `donor_details` (
  `d_id` varchar(10) NOT NULL DEFAULT '',
  `height` decimal(5,3) DEFAULT NULL,
  `weight` decimal(10,3) DEFAULT NULL,
  `bmi` decimal(10,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`d_id`,`bmi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`d_id`, `height`, `weight`, `bmi`) VALUES
('1', '5.600', '50.000', '21.000'),
('10', '5.600', '50.000', '21.000'),
('11', '5.700', '60.000', '21.000'),
('12', '5.800', '70.000', '26.000'),
('13', '5.500', '43.000', '16.050'),
('14', '6.200', '78.000', '19.000'),
('15', '5.300', '42.000', '16.000'),
('16', '5.110', '68.000', '23.000'),
('17', '5.800', '79.000', '27.000'),
('2', '5.700', '60.000', '21.000'),
('3', '5.800', '70.000', '24.000'),
('4', '6.200', '78.000', '20.300'),
('5', '5.110', '68.000', '28.000'),
('6', '5.800', '79.000', '16.000'),
('7', '5.300', '64.000', '27.000'),
('8', '5.400', '67.000', '16.000'),
('9', '5.500', '53.000', '14.000'),
('C5', '5.300', '42.000', '33.000'),
('C6', '5.000', '40.000', '18.000');

-- --------------------------------------------------------

--
-- Table structure for table `modify_blood`
--

CREATE TABLE IF NOT EXISTS `modify_blood` (
  `d_id` varchar(10) NOT NULL DEFAULT '',
  `a_id` varchar(10) NOT NULL DEFAULT '',
  `bmi` decimal(10,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`a_id`,`d_id`,`bmi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_no` varchar(5) NOT NULL,
  `state` char(20) DEFAULT NULL,
  PRIMARY KEY (`state_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_no`, `state`) VALUES
('1', 'karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

CREATE TABLE IF NOT EXISTS `system_user` (
  `s_id` varchar(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `institution` char(20) DEFAULT NULL,
  `ph_number` varchar(20) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `password_s` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_user`
--

INSERT INTO `system_user` (`s_id`, `name`, `institution`, `ph_number`, `email_id`, `password_s`) VALUES
('IS010', 'Anusha', 'RVCE', '9738020105', 'anusha@gmail.com', 'b5aa5d0293dd696e409650b234bec6b8'),
('IS011', 'Aparna', 'RVCE', '9881045312', 'aparna@gmail.com', '779394fca0680bde0e388ff2f6ac5ee8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
