-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 05:56 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `retire`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_bank`
--

CREATE TABLE IF NOT EXISTS `account_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `aadhar_no` varchar(50) NOT NULL,
  `id_proof` varchar(25) NOT NULL,
  `photo` varchar(25) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `account_bank`
--

INSERT INTO `account_bank` (`id`, `name`, `address`, `contact`, `gender`, `aadhar_no`, `id_proof`, `photo`, `account_no`, `amount`, `status`) VALUES
(28, 'Mathew M', 'kjnkjsdvjsbdv<br />\r\nsvjbsjhvbsv<br />\r\nsvskvjnskjvnkjsvn', '9638527415', 'Male', '123123123123123', '1.jpg', '1.jpg', '266387', '454300', 1),
(29, 'Meena M', 'jncjabjchbasc<br />\r\nacbjajcbajsc<br />\r\nacacjhasbcj', '9638527414', 'Female', '123456', '29.jpg', '29.jpg', '209725', '16360', 1),
(30, 'Soumya M', 'asischvahgcv<br />\r\nacka bc acv ', '963555444.8', 'Female', '1234567', '30.1302.jpg', '30.jpg', '521957', '2000', 1),
(31, 'Pritha ', 'jvdcvdhgcvd<br />\r\ncsldjkbcjhdsbcjhdbsc<br />\r\ndclkjsdbchjb', '9638527412', 'Female', '90375424', '31.1302.jpg', '31.jpg', '494985', '108980', 1),
(32, 'anu', 'anu nivas', '9876543210', 'Female', '12345678', '32.1302.jpg', '32.jpg', '646762', '3000', 1),
(33, 'Meera', 'bcjhb cjhwb cjhwbc ', '9874563210', 'Female', '123123123123123', '33.png', '33.png', '856134', '10000', 1),
(34, 'Asha', 'hjbhjdbsjhcbdsjchb', '89754621345', 'Female', '123456789789', '34.txt', '34.jpg', '151718', '50000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assi`
--

CREATE TABLE IF NOT EXISTS `assi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `cid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assi`
--

INSERT INTO `assi` (`id`, `rid`, `uid`, `sid`, `cid`, `st`) VALUES
(1, '3', 'ak@gmail.com', 'an@gmail.com', 'intel@gmail.com', 0),
(2, '3', 'ak@gmail.com', 'fm@gmail.com', 'intel@gmail.com', 0),
(3, '3', 'ak@gmail.com', 'anju@gmail.com', 'intel@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cash_deposit`
--

CREATE TABLE IF NOT EXISTS `cash_deposit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount_from` varchar(25) NOT NULL,
  `amount_to` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `cash_deposit`
--

INSERT INTO `cash_deposit` (`id`, `amount_from`, `amount_to`, `amount`, `date`, `status`) VALUES
(3, 'self', 8333, 8222, '2016-12-02', 1),
(6, 'self', 465465, 1000, '2016-12-02', 1),
(7, 'self', 8333, 5444, '2016-12-02', 1),
(8, 'self', 8333, 1000, '2016-12-02', 1),
(9, 'self', 8333, 1000, '2016-12-02', 1),
(10, 'self', 8333, 1000, '2016-12-02', 1),
(11, 'self', 8333, 10000, '2016-12-02', 1),
(12, 'self', 8333, 70000, '2016-12-03', 1),
(13, 'self', 9471, 400, '2016-12-03', 1),
(14, 'self', 9471, 1000, '2016-12-03', 1),
(15, 'self', 8333, 100, '2016-12-06', 1),
(16, 'self', 3688, 2000, '2016-12-16', 1),
(17, 'self', 3688, 1000, '2016-12-16', 1),
(18, 'self', 2109, 1000, '2016-12-16', 1),
(19, 'self', 2109, 15000, '2016-12-19', 1),
(20, 'self', 3392, 1000, '2016-12-21', 1),
(21, 'self', 5410, 1000, '2016-12-21', 1),
(22, 'self', 4843, 2000, '2016-12-29', 1),
(23, 'self', 9970, 500, '2016-12-30', 1),
(24, 'self', 2955, 4000, '2017-01-10', 1),
(25, 'self', 7874, 2000, '2017-03-01', 1),
(26, 'self', 639318, 2000, '2017-03-01', 1),
(27, 'self', 639318, 2000, '2017-03-02', 1),
(28, 'self', 639318, 4000, '2017-03-09', 1),
(29, 'self', 557608, 9000, '2017-03-14', 1),
(30, 'self', 945974, 9000, '2017-03-20', 1),
(31, 'self', 683483, 3000, '2017-05-15', 1),
(32, 'self', 919305, 40000, '2017-05-15', 1),
(33, 'self', 633605, 40000, '2017-05-17', 1),
(34, 'self', 127822, 50000, '2017-05-20', 1),
(35, 'self', 441180, 50000, '2017-05-29', 1),
(36, 'self', 322006, 4000, '2017-06-09', 1),
(37, 'self', 711389, 3000, '2017-06-24', 1),
(38, 'self', 809991, 5000, '2017-06-24', 1),
(39, 'self', 266387, 50000, '2017-06-24', 1),
(40, 'self', 209725, 20000, '2017-06-24', 1),
(41, 'self', 521957, 2000, '2017-07-17', 1),
(42, 'self', 494985, 9000, '2017-07-28', 1),
(43, 'self', 494985, 2000, '2017-10-06', 1),
(44, 'self', 494985, 100000, '2017-10-13', 1),
(45, 'self', 646762, 1000, '2017-10-14', 1),
(46, 'self', 856134, 2000, '2017-12-26', 1),
(47, 'self', 856134, 4000, '2018-01-10', 1),
(48, 'self', 856134, 1000, '2018-01-18', 1),
(49, 'self', 856134, 2000, '2018-02-11', 1),
(50, 'self', 646762, 2000, '2018-03-22', 1),
(51, 'self', 856134, 1000, '2018-03-26', 1),
(52, 'self', 266387, 2000, '2018-10-16', 1),
(53, 'self', 266387, 5000, '2019-03-15', 1),
(54, 'self', 151718, 50000, '2019-03-15', 1),
(55, 'self', 266387, 500000, '2019-10-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE IF NOT EXISTS `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro` varchar(150) NOT NULL,
  `job` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `pro`, `job`, `st`) VALUES
(1, 'IT', 'Php Developer', 0),
(2, 'IT', 'Java Developer', 0),
(3, 'Non-IT', 'Police', 0),
(4, 'Non-IT', 'Army', 0);

-- --------------------------------------------------------

--
-- Table structure for table `com_data`
--

CREATE TABLE IF NOT EXISTS `com_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `hr` varchar(150) NOT NULL,
  `abt` text NOT NULL,
  `est` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `acc` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `ph1` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `com_data`
--

INSERT INTO `com_data` (`id`, `nme`, `hr`, `abt`, `est`, `cont`, `em`, `pass`, `acc`, `ph`, `ph1`, `st`) VALUES
(1, 'Intel Corporation', 'Ajay Nair', 'Intel Corporation is an American multinational corporation and technology company headquartered in Santa Clara, California, in Silicon Valley. It is the world''s largest and highest valued semiconductor chip manufacturer based on revenue,[4][5] and is the inventor of the x86 series of microprocessors, the processors found in most personal computers (PCs). Intel ranked No. 46 in the 2018 Fortune 500 list of the largest United States corporations by total revenue', '1962', '7896543127', 'intel@gmail.com', '123', '494985', '0.jpeg', '0.docx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `eid` varchar(150) NOT NULL,
  `msg` text NOT NULL,
  `dt` date NOT NULL,
  `tm` time NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `uid`, `eid`, `msg`, `dt`, `tm`, `st`) VALUES
(1, 'ak@gmail.com', '3', 'hellooo', '2020-09-19', '03:09:00', 1),
(2, 'ak@gmail.com', '3', 'how r u??', '2020-09-19', '03:10:00', 1),
(3, 'ak@gmail.com', '3', 'u there???', '2020-09-19', '03:15:00', 1),
(4, 'an@gmail.com', '3', 'helloo', '2020-09-19', '04:00:00', 0),
(5, 'an@gmail.com', '3', 'yes', '2020-09-19', '04:07:00', 0),
(6, 'fm@gmail.com', '3', 'I am also here', '2020-09-19', '04:09:00', 0),
(7, 'ak@gmail.com', '3', 'ok', '2020-09-19', '04:10:00', 1),
(8, 'an@gmail.com', '3', 'ok', '2020-09-20', '01:48:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg_bank`
--

CREATE TABLE IF NOT EXISTS `reg_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` int(11) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `re_password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `reg_bank`
--

INSERT INTO `reg_bank` (`id`, `name`, `email`, `mobile`, `gender`, `password`, `re_password`) VALUES
(1, 'jnbkjbnknk', '', 0, 'on', '4654654654', '123'),
(2, 'kdsmskldmvf', 'hadashdjh@gsdash', 654654654, 'on', '123', '123'),
(3, 'kdsmskldmvf', 'hadashdjh@gsdash', 654654654, 'on', '123', '123'),
(4, 'kdsmskldmvf', 'hadashdjh@gsdash', 654654654, 'on', '123', '123'),
(5, 'kdsmskldmvf', 'hadashdjh@gsdash', 654654654, 'on', '123', '123'),
(6, 'kdsmskldmvf', 'hadashdjh@gsdash', 654654654, 'on', '123', '123'),
(7, 'vishnu patel', 'patel.vishnu16@gmail.com', 2147483647, 'on', '123', '123'),
(8, '', '', 0, '', '', ''),
(9, 'knslcasklc', 'asnckansk@ashvc', 2147483647, 'on', '123', '123'),
(10, '', '', 0, '', '', ''),
(11, '', '', 0, '', '', ''),
(12, '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE IF NOT EXISTS `req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub` varchar(150) NOT NULL,
  `st_dt` date NOT NULL,
  `end_dt` date NOT NULL,
  `staff` varchar(150) NOT NULL,
  `dys` varchar(150) NOT NULL,
  `amt` varchar(150) NOT NULL,
  `tot` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `cid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`id`, `sub`, `st_dt`, `end_dt`, `staff`, `dys`, `amt`, `tot`, `uid`, `cid`, `st`) VALUES
(3, 'Php Training', '2020-09-18', '2020-09-22', '3', '5', '1000', '15000', 'ak@gmail.com', 'intel@gmail.com', 1),
(4, 'For Php training', '2021-01-18', '2021-01-22', '3', '5', '1000', '15000', 'ak@gmail.com', 'intel@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_data`
--

CREATE TABLE IF NOT EXISTS `staff_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `gen` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `pos` varchar(150) NOT NULL,
  `con` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `cid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `staff_data`
--

INSERT INTO `staff_data` (`id`, `nme`, `gen`, `age`, `pos`, `con`, `em`, `pass`, `ph`, `cid`, `st`) VALUES
(1, 'Anitha Krishna', 'Female', '28', 'Developer', '7894561235', 'an@gmail.com', '123', '0.jpg', 'intel@gmail.com', 1),
(2, 'Fathima Munaz', 'Female', '29', 'Developer', '7896453217', 'fm@gmail.com', '123', '1.jpg', 'intel@gmail.com', 1),
(3, 'Anju Sree', 'Female', '27', 'Developer', '7895642134', 'anju@gmail.com', '123', '2.jpg', 'intel@gmail.com', 1),
(4, 'Hari Kumar', 'Male', '30', 'Developer', '9873216547', 'hari@gmail.com', '123', '3.jpg', 'intel@gmail.com', 1),
(5, 'Neeraj Nair', 'Male', '31', 'Developer', '7894567895', 'ne@gmail.com', '123', '4.jpeg', 'intel@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `gen` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `abt` text NOT NULL,
  `typ` varchar(150) NOT NULL,
  `pro` varchar(150) NOT NULL,
  `exp` varchar(150) NOT NULL,
  `comp` varchar(150) NOT NULL,
  `job` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `acc` varchar(150) NOT NULL,
  `ph1` varchar(150) NOT NULL,
  `ph2` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  `fee` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `nme`, `gen`, `age`, `abt`, `typ`, `pro`, `exp`, `comp`, `job`, `cont`, `em`, `pass`, `acc`, `ph1`, `ph2`, `st`, `fee`) VALUES
(1, 'Aneesh Kumar', 'Male', '35', 'A PHP developer is responsible for writing server-side web application logic. PHP developers usually develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application. They are also often required to develop and integrate plugins for certain popular frameworks.', 'IT', '1', '10', 'Dreams Pvt Limited', 'Team Leader', '7894651325', 'ak@gmail.com', '123', '266387', '0.jpg', '0.docx', 1, '1000');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `utyp` varchar(15) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `uid`, `pwd`, `utyp`, `st`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 1),
(2, 'ak@gmail.com', '123', 'usr', 1),
(3, 'intel@gmail.com', '123', 'comp', 1),
(4, 'an@gmail.com', '123', 'staff', 1),
(5, 'fm@gmail.com', '123', 'staff', 1),
(6, 'anju@gmail.com', '123', 'staff', 1),
(7, 'hari@gmail.com', '123', 'staff', 1),
(8, 'ne@gmail.com', '123', 'staff', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
