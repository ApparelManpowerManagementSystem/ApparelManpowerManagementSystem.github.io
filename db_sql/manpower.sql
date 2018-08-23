-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 08:56 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comID` varchar(10) NOT NULL,
  `comName` varchar(45) DEFAULT NULL,
  `comPhone` varchar(45) DEFAULT NULL,
  `comAddress` varchar(200) DEFAULT NULL,
  `comEmail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comID`, `comName`, `comPhone`, `comAddress`, `comEmail`) VALUES
('1', 'zfzdf', 'dfz', 'zdf', 'zdf'),
('C214748364', 'srinath', '07668972390', NULL, 'asithaindrajithk9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_job`
--

CREATE TABLE `company_job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(45) DEFAULT NULL,
  `jobType` varchar(45) DEFAULT NULL,
  `jobAmount` varchar(45) DEFAULT NULL,
  `jobPeriod` varchar(45) DEFAULT NULL,
  `jobPrice` varchar(45) DEFAULT NULL,
  `jobDate` varchar(45) DEFAULT NULL,
  `jobStatus` varchar(45) DEFAULT NULL,
  `comID` varchar(10) NOT NULL,
  `supID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceID` int(11) NOT NULL,
  `jobID` int(11) DEFAULT NULL,
  `workerID` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `job_workers`
--

CREATE TABLE `job_workers` (
  `jobID` int(11) NOT NULL,
  `workerID` varchar(45) NOT NULL,
  `workerProgress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locID` int(11) NOT NULL,
  `locName` varchar(45) DEFAULT NULL,
  `locStreet` varchar(45) DEFAULT NULL,
  `locVillage` varchar(45) DEFAULT NULL,
  `locCity` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locID`, `locName`, `locStreet`, `locVillage`, `locCity`) VALUES
(2300, 'Ocen Lanka', 'Royal Street', 'sad', 'asfa');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` varchar(45) NOT NULL,
  `notification` varchar(200) DEFAULT NULL,
  `userType` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supID` varchar(45) NOT NULL,
  `supName` varchar(45) DEFAULT NULL,
  `supPhone` int(10) DEFAULT NULL,
  `supAddress` varchar(100) DEFAULT NULL,
  `supEmail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supID`, `supName`, `supPhone`, `supAddress`, `supEmail`) VALUES
('1', 'dsfs', 99898, 'dsf', 'zdf'),
('S2147483647', 'srinath', 2147483647, NULL, 'asithaindrajithk9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_job`
--

CREATE TABLE `supplier_job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(45) DEFAULT NULL,
  `jobType` varchar(45) DEFAULT NULL,
  `jobCount` int(11) DEFAULT NULL,
  `workerCount` int(11) NOT NULL,
  `jobPeriod` varchar(45) DEFAULT NULL,
  `jobStatus` varchar(45) DEFAULT NULL,
  `jobStart` varchar(45) DEFAULT NULL,
  `jobEnd` varchar(45) DEFAULT NULL,
  `jobProgress` varchar(45) DEFAULT NULL,
  `supID` varchar(45) NOT NULL,
  `locationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_job`
--

INSERT INTO `supplier_job` (`jobID`, `jobTitle`, `jobType`, `jobCount`, `workerCount`, `jobPeriod`, `jobStatus`, `jobStart`, `jobEnd`, `jobProgress`, `supID`, `locationID`) VALUES
(180000, 'CPI Job', 'CPI', 100, 15, '10', NULL, NULL, NULL, NULL, 'S2147483647', 2300),
(180001, 'T-Shirts Cutting Job', 'cutting', 1000, 0, '9', NULL, NULL, NULL, NULL, 'S2147483647', 2300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` varchar(20) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `userType` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userPassword`, `userType`) VALUES
('0766897230', '1234', 3),
('C2147483647', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 1),
('S2147483647', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 2),
('W12', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W123', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W12345', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W1234567', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W192', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W2147483647', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W3849038', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W3986434', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447123', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447479', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447600', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447656', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447666', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447689', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447697', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447699', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447875', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W89897889', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W987654', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `workerID` varchar(45) NOT NULL,
  `workerName` varchar(45) DEFAULT NULL,
  `workerNIC` varchar(45) DEFAULT NULL,
  `workerPhone` varchar(45) DEFAULT NULL,
  `workerMaxWorkPeriod` varchar(45) DEFAULT NULL,
  `workerEmail` varchar(45) DEFAULT NULL,
  `workerStatus` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`workerID`, `workerName`, `workerNIC`, `workerPhone`, `workerMaxWorkPeriod`, `workerEmail`, `workerStatus`) VALUES
('W12', 'piyumal', NULL, '12', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W123', 'piyadasa', NULL, '123', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W12345', 'nimal', NULL, '12345', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W1234567', 'divan', NULL, '1234567', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W192', 'siripalala', NULL, '192', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W2147483647', 'srinath', NULL, '07668972390', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W3849038', 'sirisena', NULL, '3849038', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W3986434', 'piyal', NULL, '3986434', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W772447123', 'nimalam', NULL, '0772447123', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W772447479', 'devis', NULL, '0772447479', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W772447656', 'siripala', NULL, '0772447656', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W772447875', 'sirisena', NULL, '0772447875', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W89897889', 'diyawan', NULL, '89897889', NULL, 'asithaindrajithk9@gmail.com', NULL),
('W987654', 'piyawan', NULL, '0987654', NULL, 'asithaindrajithk9@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `worker_leaves`
--

CREATE TABLE `worker_leaves` (
  `workerID` varchar(100) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worker_pending`
--

CREATE TABLE `worker_pending` (
  `jobID` int(11) NOT NULL,
  `workerID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comID`);

--
-- Indexes for table `company_job`
--
ALTER TABLE `company_job`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `fk_company_job_company_personal_idx` (`comID`),
  ADD KEY `fk_company_job_supplier_personal1_idx` (`supID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceID`),
  ADD KEY `jobID` (`jobID`),
  ADD KEY `workerID` (`workerID`);

--
-- Indexes for table `job_workers`
--
ALTER TABLE `job_workers`
  ADD PRIMARY KEY (`workerID`,`jobID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supID`);

--
-- Indexes for table `supplier_job`
--
ALTER TABLE `supplier_job`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `supID` (`supID`),
  ADD KEY `locationID` (`locationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`,`userPassword`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`workerID`);

--
-- Indexes for table `worker_leaves`
--
ALTER TABLE `worker_leaves`
  ADD KEY `workerID` (`workerID`);

--
-- Indexes for table `worker_pending`
--
ALTER TABLE `worker_pending`
  ADD PRIMARY KEY (`jobID`,`workerID`),
  ADD KEY `workerID` (`workerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_job`
--
ALTER TABLE `company_job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`jobID`) REFERENCES `supplier_job` (`jobID`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`workerID`) REFERENCES `worker` (`workerID`);

--
-- Constraints for table `supplier_job`
--
ALTER TABLE `supplier_job`
  ADD CONSTRAINT `supplier_job_ibfk_1` FOREIGN KEY (`supID`) REFERENCES `supplier` (`supID`),
  ADD CONSTRAINT `supplier_job_ibfk_2` FOREIGN KEY (`locationID`) REFERENCES `location` (`locID`);

--
-- Constraints for table `worker_leaves`
--
ALTER TABLE `worker_leaves`
  ADD CONSTRAINT `worker_leaves_ibfk_1` FOREIGN KEY (`workerID`) REFERENCES `worker` (`workerID`);

--
-- Constraints for table `worker_pending`
--
ALTER TABLE `worker_pending`
  ADD CONSTRAINT `worker_pending_ibfk_1` FOREIGN KEY (`jobID`) REFERENCES `supplier_job` (`jobID`),
  ADD CONSTRAINT `worker_pending_ibfk_2` FOREIGN KEY (`workerID`) REFERENCES `worker` (`workerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
