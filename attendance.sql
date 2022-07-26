-- MySQL database for Employee Attendance Management System
-- This database is made grp_70_batch2020 (IIITA)



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_taken`
--

DROP TABLE IF EXISTS `attendance_taken`;
CREATE TABLE IF NOT EXISTS `attendance_taken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `attendance` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

DROP TABLE IF EXISTS `employee_details`;
CREATE TABLE IF NOT EXISTS `employee_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `contact_no` varchar(25) NOT NULL,
  `department` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table `admin`

INSERT INTO `employee_details` (`id`, `name`, `gender`, `email`, `DOB`, `contact_no`, `department`) VALUES
(1, 'Ashish', 'Male', 'Ashish@gmail.com', '15-03-2000', '9999999999', 'IT');

-- --------------------------------------------------------

COMMIT;
