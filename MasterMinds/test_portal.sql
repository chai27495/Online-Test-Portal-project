-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 07:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1235 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `Email`) VALUES
(1234, 'admin', 'admin1', 'ssa@dssd.com');

-- --------------------------------------------------------

--
-- Table structure for table `look_up_master`
--

CREATE TABLE IF NOT EXISTS `look_up_master` (
`lookup_id` int(11) NOT NULL,
  `lookup_name` varchar(50) NOT NULL,
  `lookup_group` varchar(50) NOT NULL,
  `Edit_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `look_up_master`
--

INSERT INTO `look_up_master` (`lookup_id`, `lookup_name`, `lookup_group`, `Edit_status`) VALUES
(1, 'category', '0', 1),
(2, 'subcategory', '1', 1),
(3, 'subsubcategory', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parameter_master`
--

CREATE TABLE IF NOT EXISTS `parameter_master` (
`lookup_value_id` int(11) NOT NULL,
  `lookup_value_name` varchar(50) NOT NULL,
  `lookup_value_code` varchar(50) NOT NULL,
  `lookup_value_group` int(11) NOT NULL,
  `lookup_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parameter_master`
--

INSERT INTO `parameter_master` (`lookup_value_id`, `lookup_value_name`, `lookup_value_code`, `lookup_value_group`, `lookup_id`) VALUES
(1, 'Aptitude', 'APT', 0, 1),
(2, 'Quants', 'Q', 1, 2),
(3, 'Decimal and Fractions', 'DAF', 2, 3),
(4, 'Verbal', 'VER', 1, 2),
(5, 'Core', 'CORE', 0, 1),
(6, 'Logical Reasoning', 'LOG', 1, 2),
(7, 'Data Analysis', 'DATA_ANA', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `qbank`
--

CREATE TABLE IF NOT EXISTS `qbank` (
`Qid` int(11) NOT NULL,
  `Qcat` varchar(50) NOT NULL,
  `Qsub_cat` varchar(50) NOT NULL,
  `Qlevel` int(11) NOT NULL,
  `Qtype` varchar(10) NOT NULL,
  `Qdescription` varchar(500) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `ans` int(11) NOT NULL,
  `Qexplanation` varchar(100) NOT NULL,
  `Qimage` varchar(20) NOT NULL,
  `Q_pdf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `sid` int(11) NOT NULL,
  `session_id` varchar(80) NOT NULL,
  `test_date` datetime NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `test_cat` varchar(50) NOT NULL,
  `test_sub_cat` varchar(50) NOT NULL,
  `test_sub_sub_cat` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE IF NOT EXISTS `student_master` (
`Sid` int(11) NOT NULL,
  `Full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Stream` varchar(20) NOT NULL,
  `year_of_pass` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7489 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`Sid`, `Full_name`, `email`, `Password`, `Stream`, `year_of_pass`) VALUES
(5870, 'Masal Aba Shivaji', 'jjnjnjn@ssas.com', '1234', 'IT', 2017),
(6111, 'Abhishek Yogesh', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(6803, 'Chache Parag Dhondu', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(6847, 'Sarwade Kanishk Ashok', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(6853, 'Tikoo Pranay Bharat', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7109, 'Acharya Sankalp Samir', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7110, 'Almeida Gavin Wilson', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7112, 'Baheti Adarsh Deepak', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7113, 'Bath Ranvir Singh', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7114, 'Carvalho Karen Joe', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7115, 'Castelino Prince Lawrence', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7116, 'Chaudhari Akshay Ravindra', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7117, 'Chitnis Chinmayi Vishnu', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7118, 'Chungath Delwin Antony', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7119, 'Chungath Rijo Martin', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7120, 'Colaco Orville Denis', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7121, 'Dabre Melnita Manuel', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7122, 'Divya Unnikrishnan', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7123, 'Dmello Glen Edward', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7124, 'Dsouza Ashton Calvin', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7125, 'Dsouza Elton Nathan', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7126, 'Dsouza Lillita Rhea', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7127, 'Dsouza Lyzanne Peter', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7128, 'Dsouza Maxwell William', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7129, 'Dsouza Priston Caron', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7130, 'Faria Kimberley Euphemia', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7131, 'Fernandes Tansy Savia', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7132, 'Fonseca Queenie Cletus', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7133, 'Gandhi Chaitrali Kiran', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7134, 'Gawad Anushree Ashok', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7136, 'Gonsalves Denzil Zacharia', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7137, 'Grewal Gursheen Tarlochan', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7138, 'Jain Kapil Mukesh', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7139, 'Jain Manoj Vimalbhai', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7140, 'Jennifer Reuben', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7141, 'Jose Jijin Bennet', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7143, 'Kanegaonkar Sumit Satishrao', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7144, 'Kannampuzha Langston Vareed', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7145, 'Kollamana Ronn Kurien', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7146, 'Malik Naman Pravin', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7147, 'Maryson Johnson', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7148, 'Maurya Jyoti Ramawadh', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7149, 'Menon Gaurav Ramesh', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7150, 'Merai Hetal Rajesh', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7151, 'Mohite Jagruti Mohan', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7152, 'Musale Anoop Ganesh', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7153, 'Naik Isha Santosh', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7154, 'Nunes Jason Darrel', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7155, 'Parekh Yash Mahesh', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7156, 'Patel Hetal Ramesh', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7157, 'Patwardhan Ojas Milind', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7158, 'Pradhan Vinod Laxmi', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7160, 'Rai Parikshith Naveen', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7161, 'Raje Rucha Shailendra', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7162, 'Rautela Suraj Lalitmohan', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7163, 'Rotiwar Surabhi Rajiv', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7164, 'Sabadra Shantanu Alhad', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7165, 'Shah Shivani Hitesh', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7166, 'Shah Shrushti Ganesh', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7167, 'Sindwani Devika Rajiv', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7168, 'Thorat Gaurav Rajiv', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7169, 'Tirodkar Prerana Nikhil', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7170, 'Upadhyay Rishabh Gyanendra', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7171, 'Varghese Joash Jose', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7172, 'Vijan Rachit Gurcharan', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7218, 'Anu George', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7219, 'Bole Prateet Prasad', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7220, 'Choudhari Shamali Hemant', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7221, 'Chudasama Harshil Yogesh', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7222, 'Dbritto Jeetson Francis', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7223, 'Dsouza Leon Thomas', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7224, 'Gonsalves Glanson Peter', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7225, 'Jangul Noha Moses', 'sccdcd@xss.com', '1234', 'IT', 2017),
(7226, 'Naik Pranjali Deepak', 'sxaxff@cdcsd.com', 'wer2323', 'IT', 2017),
(7227, 'Pilankar Yash Rajendra', 'wddwdcw@dwd.com', 'd3232d', 'IT', 2017),
(7228, 'Salunkhe Shailesh Sunil', 'ewcecw@snm.com', 'cwcdw', 'IT', 2017),
(7488, 'Thakur Arshiya Sudesh', 'cdcccscs@dcdc.com', 'effwcdc', 'IT', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `flag` int(1) DEFAULT NULL,
  `admin` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fname`, `mname`, `lname`, `branch`, `emailid`, `flag`, `admin`) VALUES
('7139', 'admin', 'Manoj', 'Vimal', 'Jain', 'IT', 'manojjain1295@gmail.com', 1, 1),
('7140', 'admin12', 'Jennifer', 'abc', 'Reuben', 'IT', 'abc.123@gmail.com', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `look_up_master`
--
ALTER TABLE `look_up_master`
 ADD PRIMARY KEY (`lookup_id`);

--
-- Indexes for table `parameter_master`
--
ALTER TABLE `parameter_master`
 ADD PRIMARY KEY (`lookup_value_id`), ADD KEY `lookup_id` (`lookup_id`);

--
-- Indexes for table `qbank`
--
ALTER TABLE `qbank`
 ADD PRIMARY KEY (`Qid`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
 ADD KEY `sid` (`sid`);

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
 ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1235;
--
-- AUTO_INCREMENT for table `look_up_master`
--
ALTER TABLE `look_up_master`
MODIFY `lookup_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `parameter_master`
--
ALTER TABLE `parameter_master`
MODIFY `lookup_value_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `qbank`
--
ALTER TABLE `qbank`
MODIFY `Qid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7489;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `parameter_master`
--
ALTER TABLE `parameter_master`
ADD CONSTRAINT `parameter_master_ibfk_1` FOREIGN KEY (`lookup_id`) REFERENCES `look_up_master` (`lookup_id`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student_master` (`Sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
