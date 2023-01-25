-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 12:51 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fce_addmission_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `status`) VALUES
(1, 'yastech722@gmail.com', '1234', 0),
(2, 'admin', 'admin', 1),
(3, 'abusadiq722@gmail.com', '1234', 0),
(4, 'sadiq722@gmail.com', '12', 0),
(5, 'adiq722@gmail.com', '12', 0),
(8, 'test@test.com', 'test', 0),
(9, 'auwal@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `name` varchar(45) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `state` varchar(21) NOT NULL,
  `lga` varchar(45) NOT NULL,
  `nationality` varchar(21) NOT NULL,
  `course` varchar(45) NOT NULL,
  `jamb_no` varchar(45) NOT NULL,
  `jamb_score` int(4) NOT NULL,
  `subject_combination` varchar(45) NOT NULL,
  `passport` varchar(111) NOT NULL,
  `olevel` varchar(111) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '2',
`id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `date_admitted` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`name`, `gender`, `state`, `lga`, `nationality`, `course`, `jamb_no`, `jamb_score`, `subject_combination`, `passport`, `olevel`, `status`, `id`, `username`, `date_admitted`) VALUES
('Yusuf Abubakar Sadiq', 'Male', 'KATSINA STATE', 'Katsina', 'Nigeria', 'Computer Science', 'ghffdrr43', 201, 'Physics, Mathematics, ', '', '', 1, 1, '', '0000-00-00'),
('Yusuf Abubakar Sadiq', 'Male', 'KATSINA STATE', 'Katsina', 'Nigeria', 'lll', '22554477', 210, 'Mathematics, Biology, Physics', '', '', 1, 2, '', '2018-05-26'),
('yahaya', 'Male', 'kaduna', 'north', 'nig', 'hj', 'llkki54', 222, 'Mathematics, Islamic Studies, Literature in E', 'Screenshot (2).png', 'Screenshot (6).png', 1, 3, '', '2018-05-26'),
('test', 'Male', 'test', 'test', 'test', 'test', 'test200', 200, 'Mathematics, Literature in English, Biology', 'passport.jpg', 'passport.jpg', 1, 4, '', '2018-05-26'),
('ABUBAKAR YUSUF', 'Male', 'KATSINA STATE', 'Katsina', 'Nigeria', 'Computer Science', '114', 222, 'Mathematics, Literature in English, Biology', 'bullet.png', 'numb.png', 1, 5, 'abusadiq722@gmail.com', '2018-05-26'),
('test', 'Male', 'test', 'test', 'test', 'test', '100', 0, 'Mathematics, Literature in English, Biology', 'passport.jpg', 'olevel.jpg', 1, 7, 'test@test.com', '2018-05-26'),
('auwal', 'Male', 'KATSINA STATE', 'katsina', 'Nigeria', 'Computer Science', '1452578', 222, 'Literature in English, Literature in English,', '201605151149021016.jpg', '001.JPG', 1, 8, 'auwal@gmail.com', '2018-05-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
