-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2022 at 07:07 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aurora`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `aid` int NOT NULL,
  `type` varchar(20) NOT NULL,
  `c_loc` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `r_date` date NOT NULL,
  `r_time` time NOT NULL,
  `veh_id` varchar(20) NOT NULL,
  `cid` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `type`, `c_loc`, `description`, `r_date`, `r_time`, `veh_id`, `cid`) VALUES
(1, 'repair', 'colombo', 'qwwwwww', '2022-05-17', '16:32:05', 'qqqqq', 'qqqq');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `cash_id` varchar(12) NOT NULL,
  `cash_name` varchar(50) NOT NULL,
  `qid` varchar(10) NOT NULL,
  `tokid` varchar(10) NOT NULL,
  `grand_total` double(10,2) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `date`, `cash_id`, `cash_name`, `qid`, `tokid`, `grand_total`) VALUES
(1, '0000-00-00', '', '', '0', '0', 0.00),
(2, '0000-00-00', '', '', '0', '0', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

DROP TABLE IF EXISTS `cashier`;
CREATE TABLE IF NOT EXISTS `cashier` (
  `cash_nic` varchar(12) NOT NULL,
  `cash_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csp`
--

DROP TABLE IF EXISTS `csp`;
CREATE TABLE IF NOT EXISTS `csp` (
  `CSP_NIC` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_nic` varchar(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `no` varchar(10) NOT NULL,
  `road` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`cus_nic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cus_app_veh`
--

DROP TABLE IF EXISTS `cus_app_veh`;
CREATE TABLE IF NOT EXISTS `cus_app_veh` (
  `cid` varchar(12) NOT NULL,
  `appid` int NOT NULL,
  `vid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cus_job_quo`
--

DROP TABLE IF EXISTS `cus_job_quo`;
CREATE TABLE IF NOT EXISTS `cus_job_quo` (
  `cid` varchar(12) NOT NULL,
  `jid` int NOT NULL,
  `qid` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_nic` varchar(12) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `no` varchar(5) NOT NULL,
  `road` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sup_eNIC` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_nic`, `fname`, `lname`, `no`, `road`, `city`, `mobile`, `position`, `password`, `email`, `sup_eNIC`) VALUES
('983464567v', 'qqqqqq', 'qqqqqqqq', '23', 'wwwwwww', 'wwwwww', '774607788', 'manager', '1234', 'wwwwww', ''),
('998582865V', 'Dilesha', 'Sathsara', '2', 'katubedda', 'Moratuwa', '754834606', 'Staff', 'Q123', 'dileshawijayathilaka', ''),
('998582865V', 'Dilesha', 'Sathsara', '2', 'katubedda', 'Moratuwa', '754834606', 'Staff', 'Q123', 'dileshawijayathilaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `part_id` varchar(10) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` int NOT NULL,
  PRIMARY KEY (`part_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`part_id`, `name`, `price`, `qty`) VALUES
('p001', 'part1', '1500', 2);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int NOT NULL,
  `documentation` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `job_status` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `mec_id` varchar(12) NOT NULL,
  `vehi_num` varchar(20) NOT NULL,
  `cus_nic` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `man_nic` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

DROP TABLE IF EXISTS `mechanic`;
CREATE TABLE IF NOT EXISTS `mechanic` (
  `mec_nic` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
CREATE TABLE IF NOT EXISTS `part` (
  `part_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `qty` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`part_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `part_quotation`
--

DROP TABLE IF EXISTS `part_quotation`;
CREATE TABLE IF NOT EXISTS `part_quotation` (
  `pid` int NOT NULL,
  `qid` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

DROP TABLE IF EXISTS `quotation`;
CREATE TABLE IF NOT EXISTS `quotation` (
  `qid` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `mec_id` varchar(12) NOT NULL,
  `customer_nic` varchar(12) NOT NULL,
  `veh_num` varchar(20) NOT NULL,
  `job_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`qid`, `status`, `date`, `mec_id`, `customer_nic`, `veh_num`, `job_id`) VALUES
(1, 'nbvfg', '2022-06-13', 'm1', 'C001', 'v1', 2),
(2, 'hgfrt', '2022-06-05', 'm2', 'c002', 'v2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `tok_id` int NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `issue_date` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cus_nic` varchar(12) NOT NULL,
  `veh_num` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_num` varchar(10) NOT NULL,
  `trim` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `model_name` varchar(20) NOT NULL,
  `customer_nic` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_num`, `trim`, `brand`, `color`, `model_name`, `customer_nic`) VALUES
('CBD3784', 'ABC', 'ABC', 'White', 'www', '998582865V');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
