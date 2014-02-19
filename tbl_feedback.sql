-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2014 at 11:33 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `magnum_hiprojects`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feed_id_pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `feed_name` varchar(100) NOT NULL,
  `feed_email` varchar(200) NOT NULL,
  `feed_message` text NOT NULL,
  PRIMARY KEY (`feed_id_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Feedback' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feed_id_pk`, `feed_name`, `feed_email`, `feed_message`) VALUES
(4, 'ganesh', 'gani.sani2@gmail.com', 'dfhdhh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
