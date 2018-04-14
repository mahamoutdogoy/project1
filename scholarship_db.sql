-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 04:37 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`username`, `password`) VALUES
('mahamat', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `usern` varchar(50) NOT NULL,
  `appliedfor` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`usern`, `appliedfor`, `status`) VALUES
('monish', 'Scholarship', 'no'),
('mahamat', 'Sponsorship', 'no'),
('sophia', 'Sponsorship', 'no'),
('samuel', 'Sponsorship', 'no'),
('nishmitha', 'Scholarship', 'no'),
('shalini', 'Sponsorship', 'no'),
('dongui', 'Scholarship', 'no'),
('smith', 'Sponsorship', 'no'),
('padma', 'Sponsorship', 'no'),
('jainath', 'Sponsorship', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `name` varchar(50) NOT NULL,
  `acctype` varchar(20) NOT NULL,
  `accnum` int(30) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `ifsc` varchar(30) NOT NULL,
  `usern` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`name`, `acctype`, `accnum`, `bname`, `branch`, `ifsc`, `usern`) VALUES
('monish krishnan', 'Savings', 2147483647, 'sbi', 'christ', '34gh567bn', 'monish'),
('mahamat abdh', 'savings', 1234534563, 'south ', 'christ', '12er34', 'mahamat'),
('sophia parker', 'Current', 234234234, 'state bank of india', 'koramangala', '1223weer', 'sophia'),
('samuel', 'Savings', 2321344, 'sefef', 'sefef', 'wefs123', 'samuel'),
('nishmitha ravindran', 'Savings', 12334454, 'sbi', 'christ', '123213see', 'nishmitha'),
('shalini M gowda', 'Savings', 123342312, 'south indian bank', 'koramangala', '1212wewe', 'shalini'),
('dongui moussa', 'Current', 2147483647, 'south indian bank', 'mico layout', '235chad', 'dongui'),
('smith', 'Savings', 1212121, 'kotak', 'christ', '1212jdfj', 'smith'),
('padma', 'Current', 90896745, 'axis', 'korma', '131abc', 'padma'),
('jainath kumar', 'Savings', 2147483647, 'south indian bank', 'christ university', 'asds2345', 'jainath');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `message` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donordetails`
--

CREATE TABLE `donordetails` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donordetails`
--

INSERT INTO `donordetails` (`username`, `email`, `phone`, `password`, `gender`) VALUES
('kumar', 'kumar@gmail.com', 2147483647, '12we', 'Male'),
('mahamat', 'mahamatabdallah98@gmail.com', 1234567890, '12345', 'Male'),
('monish', 'monishju02@gmail.com', 1234554321, '1234', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `usern` varchar(50) NOT NULL,
  `ins10` varchar(50) NOT NULL,
  `board10` varchar(30) NOT NULL,
  `year10` int(4) NOT NULL,
  `percent10` int(3) NOT NULL,
  `ins12` varchar(50) NOT NULL,
  `board12` varchar(30) NOT NULL,
  `year12` int(4) NOT NULL,
  `percent12` int(3) NOT NULL,
  `insdeg` varchar(50) NOT NULL,
  `boarddeg` varchar(30) DEFAULT NULL,
  `yeardeg` int(4) NOT NULL,
  `percentdeg` int(3) DEFAULT NULL,
  `ccourse` varchar(50) NOT NULL,
  `dcourse` int(1) NOT NULL,
  `nature` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`usern`, `ins10`, `board10`, `year10`, `percent10`, `ins12`, `board12`, `year12`, `percent12`, `insdeg`, `boarddeg`, `yeardeg`, `percentdeg`, `ccourse`, `dcourse`, `nature`) VALUES
('mahamat', 'mcc', 'cbse', 2014, 89, 'mcc', 'state', 2016, 94, 'christ university', '', 2019, 82, 'bca', 3, 'Full Time'),
('monish', 'fdg', 'drg', 43, 23, 'cg', 'dg', 34, 34, 'df', 'df', 34, 89, 'df', 3, 'Part Time'),
('sophia', 'kv', 'state', 2014, 98, 'mcc', 'state', 2016, 94, 'christ university', '', 2019, 80, 'bca', 3, 'Full Time'),
('samuel', 'serf', 'se', 2014, 90, 'drg', 'sdrf', 2016, 90, 'christ university', '', 2019, 82, 'bca', 3, 'Full Time'),
('nishmitha', 'mcc', 'state', 2014, 89, 'mcc', 'state', 2016, 85, 'christ university', '', 2019, 83, 'bcom', 3, 'Part Time'),
('shalini', 'christ', 'state', 2014, 75, 'christ', 'state', 2016, 80, 'jain university', '', 2019, 78, 'Bcom', 3, 'Full Time'),
('dongui', 'st john', 'cbse', 2010, 93, 'st john', 'cbse', 2012, 95, 'bangalore university', '', 2015, 88, 'cme', 3, 'Full Time'),
('smith', 'sedfbej', 'badbwu', 2011, 87, 'anudbw', 'sbfie', 2013, 89, 'jain', '', 2018, 75, 'bcom', 3, 'Full Time'),
('padma', 'itno', 'abech', 2010, 90, 'itno', 'abech', 2011, 92, 'christuniversity', '', 2015, 89, 'bca', 3, 'Full Time'),
('jainath', 'mcc', 'state', 2014, 89, 'mcc', 'state', 2016, 93, 'jain university', '', 2019, 83, 'bcom', 3, 'Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `mname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `moccupation` varchar(50) NOT NULL,
  `foccupation` varchar(50) NOT NULL,
  `mincome` int(10) NOT NULL,
  `fincome` int(10) NOT NULL,
  `tincome` int(10) DEFAULT NULL,
  `usern` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`mname`, `fname`, `moccupation`, `foccupation`, `mincome`, `fincome`, `tincome`, `usern`) VALUES
('semse', 'sdfef', 'sefesf', 's', 234, 234, 234, 'mahamat'),
('asd', 'sdfef', 'sdf', 'sdf', 12, 12, 12, 'monish'),
('jika', 'mika', 'jika', 'mika', 12000, 12000, 24000, 'sophia'),
('sdfe', 'sfesef', 'sef', 'sef', 12000, 12000, 24000, 'samuel'),
('wer', 'wer', 'were', 'weew', 23000, 23000, 0, 'samuel'),
('mm', 'mm', 'mm', 'mm', 23, 234, 0, 'samuel'),
('sd', 'sd', 'se', 'se', 34, 23, 57, 'samuel'),
('semse', 'xyz', 'ewrr', 'ewr', 123, 123, 246, 'samuel'),
('nish', 'nish', 'nish', 'nish', 19000, 19000, 38000, 'nishmitha'),
('manju', 'milan', 'house wife', 'business', 12000, 20000, 32000, 'shalini'),
('tougounou', 'moussa', 'manager', 'programmer', 30000, 60000, 90000, 'dongui'),
('ithia', 'ithias', 'nisfni', 'nisefni', 12000, 13000, 25000, 'smith'),
('jelow', 'joe', 'programmer', 'programmer', 45000, 56000, 101000, 'padma'),
('nisha', 'nishit', 'housewife', 'tailor', 0, 20000, 20000, 'jainath');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `usern` varchar(50) NOT NULL,
  `tuition1` int(6) NOT NULL,
  `tuition2` int(6) NOT NULL,
  `tuition3` int(6) NOT NULL,
  `tuition4` int(6) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`usern`, `tuition1`, `tuition2`, `tuition3`, `tuition4`, `total`) VALUES
('monish', 34, 234, 324, 234, 324),
('mahamat', 80000, 70000, 103500, 0, 864615),
('sophia', 80000, 80000, 80000, 0, 240000),
('samuel', 20000, 20000, 20000, 0, 60000),
('nishmitha', 12000, 12000, 12000, 0, 36000),
('shalini', 23000, 23000, 20000, 0, 66000),
('dongui', 10000, 20000, 30000, 0, 60000),
('smith', 20000, 20000, 13000, 0, 53000),
('padma', 30000, 30000, 3000, 0, 63000),
('jainath', 35000, 35000, 35000, 0, 105000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `username` varchar(50) NOT NULL,
  `card` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL,
  `cardnum` int(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `trn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`username`, `card`, `amount`, `cardnum`, `cvv`, `month`, `year`, `trn_date`) VALUES
('monish', 'Credit Card', 12345, 12345, 123, 'june', 2018, '2018-03-15'),
('kumar', 'Debit Card', 34000, 12233445, 112, 'june', 2020, '0000-00-00'),
('kumar', 'Debit Card', 20000, 32542545, 122, 'june', 2020, '0000-00-00'),
('mahamat', 'Debit Card', 200000, 90909012, 890, '05', 2018, '2018-03-19'),
('mahamat', 'Credit Card', 100000, 2147483647, 123, 'june', 2018, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  `adhar` int(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL,
  `physic` varchar(4) NOT NULL,
  `usern` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`firstname`, `lastname`, `dob`, `age`, `adhar`, `address`, `street`, `city`, `state`, `pin`, `physic`, `usern`) VALUES
('mk', 'mk', '2018-03-07', 34, 2341, 'drdr', 'ftdt', 'dtdt', 'dtdt', 3445, 'Yes', 'monish'),
('dongui', 'siro', '2018-03-06', 21, 1067889, 'njamena', '50 meter', 'njamena', 'chari', 11001, 'No', 'dongui'),
('maha', 'abdh', '2018-03-04', 12, 1212213, 'saede', 'sedse', 'sed', 'sedf', 12, 'no', 'mahamat'),
('smith', 'loss', '1998-08-12', 21, 9849342, 'hosur road', 'bangalore', 'bangalore', 'karnataka', 560029, '', 'smith'),
('sophia', 'parker', '2017-06-01', 20, 12344321, 'california', 'california', 'california', 'karnataka', 560029, 'No', 'sophia'),
('samuel', 'sam', '2017-08-17', 20, 21323243, 'srefsdr', 'sefef', 'sfe', 'sef', 45676, 'No', 'samuel'),
('padma', 'jow', '1998-02-10', 20, 23456532, 'hhhh', 'hhh', 'delhi', 'how', 560079, 'No', 'padma'),
('jainath', 'kumar', '1997-03-07', 21, 24904214, 'kormangala', 'koramangala', 'bangalore', 'karnataka', 560030, 'No', 'jainath'),
('smith', 'loadj', '1992-02-11', 25, 83239238, 'isdid', 'jfie', 'jidjw', 'iwjdeij', 83493, 'Yes', 'smith'),
('nishmitha', 'ravindran', '1998-12-12', 19, 1234567890, 'qwer', 'qwewe', 'bangalore', 'karnataka', 560029, 'No', 'nishmitha'),
('shalini ', 'GOWDA', '1998-02-01', 20, 2147483647, 'Arekere', 'arekere main road', 'bangalore', 'karnataka', 560029, 'No', 'shalini');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `email`, `phone`, `password`, `gender`) VALUES
('dongui', 'dongui@yahoo.fr', 73909090, '12345', 'Male'),
('jainath', 'jainath98@gmail.com', 1893748592, '12345', 'Male'),
('mahamat', 'mahamatabdallah98@gmail.com', 1245678943, '12345', 'Male'),
('monish', 'monishju02@gmail.com', 987654321, '12345', 'Male'),
('nishmitha', 'nishi@gmail.com', 1289903482, '12345', 'Female'),
('padma', 'padma@gmail.com', 90897856, '12345', 'Female'),
('samuel', 'samuel@gmail.com', 123231232, '12345', 'Male'),
('shalini', 'shalini@gmail.com', 12568743, '12345', 'Female'),
('smith', 'smith@gmail.com', 1232211, '12345', 'Female'),
('sophia', 'sophia@gmail.com', 1290562345, 'sophia', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `scholars`
--

CREATE TABLE `scholars` (
  `usern` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholars`
--

INSERT INTO `scholars` (`usern`, `amount`) VALUES
('monish', 90000),
('monish', 23000),
('nishmitha', 100000),
('dongui', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `usern` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`usern`, `status`) VALUES
('monish', 'yes'),
('nishmitha', 'yes'),
('dongui', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sponsordetails`
--

CREATE TABLE `sponsordetails` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsordetails`
--

INSERT INTO `sponsordetails` (`username`, `email`, `password`, `phone`, `gender`) VALUES
('lokesh', 'lokesh@yahoo.fr', '123456', 98376253, 'Male'),
('mahamat', 'mahamatabdallah98@gmail.com', '12345', 123456789, 'Male'),
('nanda', 'a@gm.com', '12345', 123423450, 'male'),
('raj', 'raj@gmail.com', 'raj12', 2147483647, 'Male'),
('ssss', 'ssss@gm.com', '12345', 123432415, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `sponsored`
--

CREATE TABLE `sponsored` (
  `usern` varchar(50) NOT NULL,
  `sponusern` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `trn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsored`
--

INSERT INTO `sponsored` (`usern`, `sponusern`, `amount`, `trn_date`) VALUES
('sophia', 'raj', 50000, '0000-00-00'),
('samuel', 'raj', 30000, '0000-00-00'),
('monish', 'nanda', 12000, '2018-03-15'),
('shalini', 'nanda', 12000, '2018-03-16'),
('sophia', 'nanda', 100000, '2018-04-10'),
('jainath', 'lokesh', 100000, '2018-04-11'),
('shalini', 'mahamat', 200000000, '2018-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--

CREATE TABLE `sponsorship` (
  `usern` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsorship`
--

INSERT INTO `sponsorship` (`usern`, `status`) VALUES
('monish', 'no'),
('sophia', 'yes'),
('samuel', 'no'),
('shalini', 'yes'),
('smith', 'no'),
('padma', 'no'),
('jainath', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD KEY `user6` (`usern`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD KEY `user4` (`usern`);

--
-- Indexes for table `donordetails`
--
ALTER TABLE `donordetails`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD KEY `user2` (`usern`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD KEY `user3` (`usern`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD KEY `user5` (`usern`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD UNIQUE KEY `cardnum` (`cardnum`),
  ADD KEY `user7` (`username`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD UNIQUE KEY `adhar` (`adhar`),
  ADD KEY `usern` (`usern`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `scholars`
--
ALTER TABLE `scholars`
  ADD KEY `user12` (`usern`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD KEY `user8` (`usern`);

--
-- Indexes for table `sponsordetails`
--
ALTER TABLE `sponsordetails`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sponsored`
--
ALTER TABLE `sponsored`
  ADD KEY `user10` (`usern`),
  ADD KEY `user11` (`sponusern`);

--
-- Indexes for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD KEY `user9` (`usern`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied`
--
ALTER TABLE `applied`
  ADD CONSTRAINT `user6` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `user4` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `user2` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `user3` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `user5` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `user7` FOREIGN KEY (`username`) REFERENCES `donordetails` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `user1` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `scholars`
--
ALTER TABLE `scholars`
  ADD CONSTRAINT `user12` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD CONSTRAINT `user8` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `sponsored`
--
ALTER TABLE `sponsored`
  ADD CONSTRAINT `user10` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `user11` FOREIGN KEY (`sponusern`) REFERENCES `sponsordetails` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD CONSTRAINT `user9` FOREIGN KEY (`usern`) REFERENCES `registration` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
