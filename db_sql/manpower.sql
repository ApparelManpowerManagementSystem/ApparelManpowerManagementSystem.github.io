-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 01:10 AM
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

--
-- Dumping data for table `company_job`
--

INSERT INTO `company_job` (`jobID`, `jobTitle`, `jobType`, `jobAmount`, `jobPeriod`, `jobPrice`, `jobDate`, `jobStatus`, `comID`, `supID`) VALUES
(1, 'CPI Job', 'CPI', '202', '25', '25000', '2018-09-01', 'online', 'C214748364', 'S2147483647'),
(2, '1000 T-Shirts Cutting Job', 'cutting', '200', '9', '35000', '2018-09-04', 'offline', 'C214748364', 'S2147483647'),
(3, 'Ironing Job', 'Ironing', '200', '15', '35000', '2018-08-02', 'cancle', 'C214748364', 'S2147483647'),
(4, 'Mending Job', 'Mending', '500', '20', '30000', '2018-09-16', 'offline', '', 'S2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceID` int(11) NOT NULL,
  `jobID` int(11) DEFAULT NULL,
  `workerID` varchar(45) DEFAULT NULL,
  `invoice` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceID`, `jobID`, `workerID`, `invoice`) VALUES
(12, 180010, 'W12345', 'hddhso');

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
(2300, 'Ocen Lanka', 'Maya Aveneue', 'Hanvella Road', 'Ranala'),
(2301, 'Miami Garments', 'Railway Street', 'Old Road', 'Homagama'),
(2302, 'Mass Groups', 'No. 234', 'Highlevel Road', 'Maharagama'),
(2303, 'NSL Garments', 'No.123', 'Highlevel Road', 'Pannipitiya');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` varchar(45) NOT NULL,
  `notification` varchar(200) DEFAULT NULL,
  `userType` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificationID`, `notification`, `userType`) VALUES
('12', 'you logged', 3),
('12', 'you logged', 3);

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
  `jobPublished` varchar(100) DEFAULT NULL,
  `jobProgress` varchar(45) DEFAULT NULL,
  `supID` varchar(45) NOT NULL,
  `locationID` int(11) NOT NULL,
  `comID` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_job`
--

INSERT INTO `supplier_job` (`jobID`, `jobTitle`, `jobType`, `jobCount`, `workerCount`, `jobPeriod`, `jobStatus`, `jobStart`, `jobEnd`, `jobPublished`, `jobProgress`, `supID`, `locationID`, `comID`) VALUES
(180000, 'CPI Job', 'CPI', 100, 15, '10', 'start', '2018-Sep-2', NULL, '2018-Aug-28', '78', 'S2147483647', 2300, NULL),
(180001, 'T-Shirts Cutting Job', 'cutting', 1000, 0, '9', 'offline', '2018-Sep-13', NULL, NULL, '35', 'S2147483647', 2300, NULL),
(180002, 'Ironin Job', 'Ironing', 400, 20, '20', 'offline', NULL, NULL, '2018-Sep-14', '0', 'S2147483647', 2300, '2300'),
(180003, 'Mending Job', 'Mending', 500, 10, '16', 'offline', NULL, NULL, '2018-sep-13', '0', 'S2147483647', 2300, 'C214748364'),
(180010, 'Cutting Job', 'Cutting', 400, 20, '20', 'done', '2018-Jul-1', '2018-jul-25', '2018-Jun-28', '100', 'S2147483647', 2302, 'C214748364'),
(180019, 'Ironing Job', 'Ironing', 200, 30, '', 'offline', NULL, NULL, '', NULL, 'S2147483647', 2302, 'C214748364'),
(180023, 'Ironing Job', 'Ironing', 200, 20, '15', 'offline', NULL, NULL, '18-09-15', NULL, 'S2147483647', 2302, 'C214748364'),
(180024, 'CPI Job', 'CPI', 202, 20, '11', 'offline', NULL, NULL, '18-09-15', NULL, 'S2147483647', 2302, 'C214748364');

-- --------------------------------------------------------

--
-- Table structure for table `uploadimages`
--

CREATE TABLE `uploadimages` (
  `image` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploadimages`
--

INSERT INTO `uploadimages` (`image`) VALUES
(0x75706c6f6164732f33353339313537395f3433353937313638333439363738345f333637373238363537343332353736305f6f2e6a7067),
(0x2e2e2f417373657374732f776f726b65722f33353431373734385f3433353937303437333439363930355f323430343436343430393034313639383831365f6f2e6a7067),
(0x2e2e2f417373657374732f776f726b65722f33353339313537395f3433353937313638333439363738345f333637373238363537343332353736305f6f2e6a7067);

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
('C214748364', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 1),
('S2147483647', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 2),
('W0', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W12', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W123', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W12345', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W1234567', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W192', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W20384039', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W2147483647', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W2980921', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W343456', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W3849038', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W39274', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W3986434', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W454567', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W643298', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W676789', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W721927172', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
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
('W9387493', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
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
  `workerRank` int(10) DEFAULT NULL,
  `workerEmail` varchar(45) DEFAULT NULL,
  `workerStatus` varchar(45) DEFAULT NULL,
  `workerImage` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`workerID`, `workerName`, `workerNIC`, `workerPhone`, `workerMaxWorkPeriod`, `workerRank`, `workerEmail`, `workerStatus`, `workerImage`) VALUES
('W12', 'Piyumal Rangajeewa', NULL, '12', NULL, 10, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W123', 'Piyadasa Sirisena', NULL, '123', NULL, 8, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W12345', 'Nimal Kariyawasam', NULL, '12345', NULL, 8, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W1234567', 'Divan Jayasuriya', NULL, '1234567', NULL, 5, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W192', 'Siripala Sirisena', NULL, '192', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W2147483647', 'Srinath Sekara', NULL, '07668972390', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W343456', 'images.jpg', NULL, '343456', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', '../Assests/worker/images.jpg'),
('W3849038', 'Sirisena Aiyyo', NULL, '3849038', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W3986434', 'Piyal Bandara', NULL, '3986434', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W454567', 'images.jpg', NULL, '454567', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', '../Assests/worker/images.jpg'),
('W676789', 'Picture1.png', NULL, '676789', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', '../Assests/worker/Picture1.png'),
('W772447123', 'Nivedan Kanakaraja', NULL, '0772447123', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W772447479', 'Devis Imesha', NULL, '0772447479', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W772447656', 'Siripala Jayathunga', NULL, '0772447656', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W772447875', 'Kumaraswami banadara', NULL, '0772447875', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W8493089', 'kdsfk', NULL, '2384092', NULL, NULL, 'ldf', 'offline', 'wejflw'),
('W89897889', 'Diyon Malaka', NULL, '89897889', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W987654', 'Piyumal Botheju', NULL, '0987654', NULL, NULL, 'asithaindrajithk9@gmail.com', 'offline', '');

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
-- Dumping data for table `worker_pending`
--

INSERT INTO `worker_pending` (`jobID`, `workerID`) VALUES
(180000, 'W12345');

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
  ADD KEY `workerID` (`workerID`),
  ADD KEY `jobID` (`jobID`);

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
  ADD UNIQUE KEY `workerID` (`workerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_job`
--
ALTER TABLE `company_job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `supplier_job`
--
ALTER TABLE `supplier_job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180026;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`workerID`) REFERENCES `worker` (`workerID`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`jobID`) REFERENCES `supplier_job` (`jobID`);

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
  ADD CONSTRAINT `worker_pending_ibfk_2` FOREIGN KEY (`workerID`) REFERENCES `worker` (`workerID`),
  ADD CONSTRAINT `worker_pending_ibfk_3` FOREIGN KEY (`jobID`) REFERENCES `supplier_job` (`jobID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
