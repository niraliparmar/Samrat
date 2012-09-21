-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2012 at 10:01 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `samrat`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenta_per_day`
--

CREATE TABLE IF NOT EXISTS `agenta_per_day` (
  `user_name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `in_time` varchar(50) NOT NULL,
  `out_time` varchar(50) NOT NULL,
  `total_hour_per_day` varchar(50) NOT NULL,
  `rupees_per_hour` varchar(50) NOT NULL,
  `rupees_per_day` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenta_per_day`
--

INSERT INTO `agenta_per_day` (`user_name`, `date`, `month`, `in_time`, `out_time`, `total_hour_per_day`, `rupees_per_hour`, `rupees_per_day`) VALUES
('Jekin Gohel', '09-01-2012', '01', '01:00 am', '06:00 am', '5', '500', '2500'),
('Diveyesh Dabhi', '09-01-2012', '01', '01:00 am', '05:00 am', '4', '500', '2000'),
('Diveyesh Dabhi', '10-01-2012', '01', '02:00 am', '05:00 am', '3', '500', '1500'),
('Jekin Gohel', '10-01-2012', '01', '02:00 am', '05:00 am', '3', '500', '1500'),
('Umesh Vaghela', '10-01-2012', '', '11:13 pm', '12:20 am', '13', '20', '260'),
('Jekin Gohel', '11-01-2012', '01', '01:00 am', '01:00 pm', '12', '500', '6000'),
('Jekin Gohel', '13-01-2012', '01', '02:00 am', '08:00 am', '6', '500', '3000'),
('Jekin Gohel', '11-01-2012', '', '11:00 am', '01:00 pm', '2', '100', '200'),
('Jekin Gohel', '03-01-2012', '', '11:07 pm', '10:00 am', '11', '20', '220'),
('nitin chavda', '12-01-2012', '', '08:00 am', '11:59 pm', '16', '20', '320'),
('Diveyesh Dabhi', '13-01-2012', '', '02:00 am', '03:00 am', '1', '200', '200'),
('Jekin Gohel', '11-01-2012', '', '07:34 pm', '05:11 am', '10', '12', '120'),
('Jekin Gohel', '24-01-2012', '', '07:41 pm', '10:52 am', '16', '120', '1920'),
('sweta katkoria', '13-01-2012', '', '08:00 am', '06:00 pm', '10', '100', '1000'),
('sweta katkoria', '01-01-2011', '', '09:00 am', '06:00 pm', '9', '100', '900'),
('sweta katkoria', '01', '', '10:00 am', '07:52 pm', '10', '100', '1000'),
('sweta katkoria', '14-01-2012', '', '02:00 am', '09:00 am', '7', '500', '3500'),
('nitin chavda', '21-02-2012', '', '8', '12', '4', '30', '120'),
('Keval Shah', '01-03-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '02-03-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '03-03-2012', '', '08:15 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '04-03-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '05-03-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '01-01-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '02-01-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '03-01-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '04-01-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '05-01-2012', '', '08:00 am', '12:00 pm', '16', '45', '720'),
('Keval Shah', '06-01-2012', '', '09:00 am', '12:15 pm', '15', '45', '675'),
('Jekin Gohel', '16-09-2012', '09', '03:00 am', '04:00 am', '1', '20', '20');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `first_name` (`first_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `first_name`, `last_name`, `address`, `contact_no`) VALUES
(1, 'Jekin', 'Gohel', 'Maheshwary socity', '8866130880'),
(2, 'Diveyesh', 'Dabhi', 'Maheshwary socity', '8866130880'),
(3, 'Keval', 'Shah', 'Maheshwary socity', '8866130880'),
(5, 'Kishan', 'Patel', 'Maheshwary socity', '8866130880'),
(7, 'Umesh', 'Vaghela', 'Ahmedabad', '9275082836'),
(8, 'Himal', 'Kansagra', 'Kalawad Road', '9913134037'),
(9, 'nitin', 'chavda', 'rajkot', '9785167531'),
(10, 'Nirali', 'Paramar', 'xyzfdsjfsdkljf', '8866130880'),
(11, 'k', 'h', 'k', '8866130880'),
(12, 'sweta', 'katkoria', 'rajkot', '9876543210'),
(13, 'riddhi', 'patalia', 'rampark', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
