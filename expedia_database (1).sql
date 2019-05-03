-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 08:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expedia_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CLIENT_ID` int(8) NOT NULL,
  `CLIENT_LNAME` text,
  `CLIENT_FNAME` text,
  `STATE` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`CLIENT_ID`, `CLIENT_LNAME`, `CLIENT_FNAME`, `STATE`) VALUES
(1, 'Wittmer', 'Avery', '10'),
(2, 'Wittmer', 'Future Mrs.', '10'),
(3, 'Cooper', 'Dale', '10'),
(4, 'Cooper', 'Annie', '10');

-- --------------------------------------------------------

--
-- Table structure for table `donation_tbl`
--

CREATE TABLE `donation_tbl` (
  `DONATION_AMOUNT` float(50,2) DEFAULT NULL,
  `DONATION_DATE` date DEFAULT NULL,
  `DONATION_ID` int(8) NOT NULL,
  `DONOR_ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_tbl`
--

INSERT INTO `donation_tbl` (`DONATION_AMOUNT`, `DONATION_DATE`, `DONATION_ID`, `DONOR_ID`) VALUES
(100.00, '2019-05-01', 1, 11293),
(50.98, '2019-05-01', 3, NULL),
(60.88, '2019-05-03', 28, 11328),
(60.88, '2019-05-03', 29, 11329),
(80.00, '2019-05-03', 30, 11330),
(80.00, '2019-05-03', 31, 11331),
(40.00, '2019-05-03', 32, 11332),
(0.00, '2019-05-03', 33, 11333),
(40.00, '2019-05-03', 34, 11334);

-- --------------------------------------------------------

--
-- Table structure for table `donor_tbl`
--

CREATE TABLE `donor_tbl` (
  `DONOR_ID` int(8) NOT NULL,
  `DONOR_EMAIL` varchar(100) DEFAULT NULL,
  `DONOR_PAYPAL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_tbl`
--

INSERT INTO `donor_tbl` (`DONOR_ID`, `DONOR_EMAIL`, `DONOR_PAYPAL`) VALUES
(11290, 'michaelwittmer@gmail.com', 'michaelwittmer.paypal.com'),
(11293, 'someone@email.com', 'someone.paypal.com'),
(11296, NULL, 'george.paypal.com'),
(11298, NULL, 'marge.paypal.com'),
(11300, NULL, 'Markus.paypal.com'),
(11322, NULL, 'payname'),
(11323, NULL, 'george.paypal.com'),
(11324, NULL, 'george.paypal.com'),
(11325, NULL, 'george.paypal.com'),
(11326, NULL, 'george.paypal.com'),
(11327, NULL, 'george.paypal.com'),
(11328, NULL, 'george.paypal.com'),
(11329, NULL, 'george.paypal.com'),
(11330, NULL, 'Clara.paypal.com'),
(11331, NULL, 'Millie.paypal.com'),
(11332, 'Vincent@gmail.com', 'Vincent.paypal.com'),
(11333, '', ''),
(11334, 'someaddress.net', 'payname');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LOC_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LOC_ID`) VALUES
(2),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `package_tbl`
--

CREATE TABLE `package_tbl` (
  `CLIENT_ID` int(11) NOT NULL,
  `PACKAGE_ID` int(11) NOT NULL,
  `PACKAGE_DESC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_tbl`
--

INSERT INTO `package_tbl` (`CLIENT_ID`, `PACKAGE_ID`, `PACKAGE_DESC`) VALUES
(1, 1, 'Package 1 includes Experiences 1, 2, and 3...'),
(2, 3, 'Package 2 includes...');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`) VALUES
(1234444);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CLIENT_ID`);

--
-- Indexes for table `donation_tbl`
--
ALTER TABLE `donation_tbl`
  ADD PRIMARY KEY (`DONATION_ID`),
  ADD KEY `DONOR_ID` (`DONOR_ID`);

--
-- Indexes for table `donor_tbl`
--
ALTER TABLE `donor_tbl`
  ADD PRIMARY KEY (`DONOR_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LOC_ID`);

--
-- Indexes for table `package_tbl`
--
ALTER TABLE `package_tbl`
  ADD PRIMARY KEY (`CLIENT_ID`,`PACKAGE_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_tbl`
--
ALTER TABLE `donation_tbl`
  MODIFY `DONATION_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `donor_tbl`
--
ALTER TABLE `donor_tbl`
  MODIFY `DONOR_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11335;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `LOC_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234445;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_tbl`
--
ALTER TABLE `donation_tbl`
  ADD CONSTRAINT `donation_tbl_ibfk_1` FOREIGN KEY (`DONOR_ID`) REFERENCES `donor_tbl` (`DONOR_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
