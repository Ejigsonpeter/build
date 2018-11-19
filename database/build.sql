-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2018 at 12:25 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `build`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `passport` varchar(100) NOT NULL DEFAULT '0',
  `username` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `passport`, `username`, `password`) VALUES
(1, 'ejigson', 'ejigsonpeter@gmail.com', '/images/passport/h.jpg', 'ejigson', '12345'),
(2, '0', '0', '0', '0', '0'),
(3, '0', '0', '0', '0', '0'),
(4, '0', '0', '0', '0', '0'),
(7, 'PeterEjiga', 'ejigsonpeter@gmail.com', '', 'ejigson1', '08136777465'),
(8, 'PeterEjiga', 'ejigsonpeter@gmail.com', 'image/passport/d1.jpeg', 'ejigson1', '08136777465'),
(9, 'PeterEjiga', 'ejigsonpeter@gmail.com', 'image/passport/d1.jpeg', 'peter1', '08136777465');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(100) NOT NULL DEFAULT '0',
  `firstname` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `phoneno` varchar(100) NOT NULL DEFAULT '0',
  `gender` varchar(100) NOT NULL DEFAULT '0',
  `rrr` varchar(100) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT 'unpaid',
  `address` varchar(100) NOT NULL DEFAULT '0',
  `dob` varchar(100) NOT NULL DEFAULT '0',
  `school` varchar(100) NOT NULL DEFAULT '0',
  `year` varchar(100) NOT NULL DEFAULT '0',
  `type` varchar(100) NOT NULL DEFAULT '0',
  `grade` varchar(100) NOT NULL DEFAULT '0',
  `conference` varchar(100) NOT NULL DEFAULT '0',
  `firm` varchar(100) NOT NULL DEFAULT '0',
  `employer_name` varchar(100) NOT NULL DEFAULT '0',
  `employer_email` varchar(100) NOT NULL DEFAULT '0',
  `employer_phone` varchar(200) NOT NULL DEFAULT '0',
  `passport` varchar(2000) NOT NULL DEFAULT '0',
  `primary_school` varchar(2000) NOT NULL DEFAULT '0',
  `olevel` varchar(2000) NOT NULL DEFAULT '0',
  `higher_result` varchar(2000) NOT NULL DEFAULT '0',
  `approval` varchar(200) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `lastname`, `firstname`, `email`, `phoneno`, `gender`, `rrr`, `status`, `address`, `dob`, `school`, `year`, `type`, `grade`, `conference`, `firm`, `employer_name`, `employer_email`, `employer_phone`, `passport`, `primary_school`, `olevel`, `higher_result`, `approval`) VALUES
(1, 'PETER', 'EJIGA', 'ejigsonpeter@gmail.com', '08136777465', 'Male', '52583342842477832', 'paid', 'Nigeria, No 2 oworo estate felele lokoja', '11.29.2018', 'ss', '11.2018', 'kk', 'kkk', 'kkkkkkkk', 'kkkk', 'kkk', 'employer_email', 'employer_phone', 'image/passport/Capcopy.png', 'image/primary/z.png', 'image/olevel/sss.PNG', 'image/higher/ddddd.PNG', 'approved'),
(4, 'sss', 'ee', 'ejigsonpeter@yahoo.com', '22232', 'Female', '720374620539165214', 'paid', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Rejected'),
(5, 'Ejiga', 'victor', 'ejigsonvic@gmail.com', '08136777499', 'Male', '1595867238434856800', 'paid', 'Nigeria, No 2 oworo estate felele lokoja', '12.01.2018', 'Uniben', '11.2018', 'HND', 'First Class', 'ISACA,IMTO', 'CODEL', 'Mr T', 'employer_email', 'employer_phone', 'image/passport/git1.PNG', 'image/primary/aaa.PNG', 'image/olevel/Capcopy.png', 'image/higher/aa.PNG', 'pending'),
(6, 'Ejiga', 'Peter', 'ejigsonpeterxx@gmail.com', '08136777461', 'Male', '1101503718921896416', 'paid', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'pending'),
(7, 'Ejiga', 'Peter', 'ejigsonpeterxxx@gmail.com', '08136787461', 'Male', '5236591361537619314', 'paid', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'pending'),
(8, '', '', '', '', '', '9410072281620356542', 'paid', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'pending');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
