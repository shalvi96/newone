-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2016 at 04:47 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tech_ques`
--
CREATE DATABASE IF NOT EXISTS `tech_ques` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tech_ques`;

-- --------------------------------------------------------

--
-- Table structure for table `answer_tbl`
--

CREATE TABLE IF NOT EXISTS `answer_tbl` (
  `ans_id` int(50) NOT NULL AUTO_INCREMENT,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_q_id` int(50) NOT NULL,
  `ans_des` varchar(500) NOT NULL,
  `ans_date` varchar(50) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE IF NOT EXISTS `question_tbl` (
  `q_id` int(50) NOT NULL AUTO_INCREMENT,
  `q_title` varchar(50) NOT NULL,
  `q_des` varchar(500) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_sub_id` int(50) NOT NULL,
  `q_view` int(50) NOT NULL,
  `q_date` varchar(50) NOT NULL,
  `q_flag` varchar(50) NOT NULL,
  `q_img` varchar(500) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE IF NOT EXISTS `subject_tbl` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `email_id` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_pwd` varchar(50) NOT NULL,
  `u_gender` varchar(50) NOT NULL,
  `u_mob` varchar(10) NOT NULL,
  `u_img` varchar(500) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
