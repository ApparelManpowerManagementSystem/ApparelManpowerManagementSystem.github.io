-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 05:08 PM
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
  `supID` varchar(45) NOT NULL,
  `locID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company_personal`
--

CREATE TABLE `company_personal` (
  `comID` varchar(10) NOT NULL,
  `comName` varchar(45) DEFAULT NULL,
  `comPhone` varchar(45) DEFAULT NULL,
  `comStreet` varchar(45) DEFAULT NULL,
  `comVillage` varchar(45) DEFAULT NULL,
  `comCity` varchar(45) DEFAULT NULL,
  `company_password` varchar(60) DEFAULT NULL,
  `company_email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_personal`
--

CREATE TABLE `supplier_personal` (
  `supID` varchar(45) NOT NULL,
  `supName` varchar(45) DEFAULT NULL,
  `supPhone` int(10) DEFAULT NULL,
  `supAddress` varchar(100) DEFAULT NULL,
  `supRegNum` varchar(45) DEFAULT NULL,
  `supPassword` varchar(45) DEFAULT NULL,
  `supEmail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worker_personal`
--

CREATE TABLE `worker_personal` (
  `workerID` varchar(45) NOT NULL,
  `workerFname` varchar(45) DEFAULT NULL,
  `workerLname` varchar(45) DEFAULT NULL,
  `workerMname` varchar(45) DEFAULT NULL,
  `workerNIC` varchar(45) DEFAULT NULL,
  `workerPhone` varchar(45) DEFAULT NULL,
  `workerStreet` varchar(45) DEFAULT NULL,
  `workerVillage` varchar(45) DEFAULT NULL,
  `workerCity` varchar(45) DEFAULT NULL,
  `workerSkill` varchar(45) DEFAULT NULL,
  `workerMaxWorkPeriod` varchar(45) DEFAULT NULL,
  `workerEmail` varchar(45) DEFAULT NULL,
  `workerStatus` varchar(45) DEFAULT NULL,
  `workerPassword` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_job`
--
ALTER TABLE `company_job`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `fk_company_job_company_personal_idx` (`comID`),
  ADD KEY `fk_company_job_supplier_personal1_idx` (`supID`),
  ADD KEY `fk_company_job_location1_idx` (`locID`);

--
-- Indexes for table `company_personal`
--
ALTER TABLE `company_personal`
  ADD PRIMARY KEY (`comID`);

--
-- Indexes for table `supplier_personal`
--
ALTER TABLE `supplier_personal`
  ADD PRIMARY KEY (`supID`);

--
-- Indexes for table `worker_personal`
--
ALTER TABLE `worker_personal`
  ADD PRIMARY KEY (`workerID`);

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
-- Constraints for table `company_job`
--
ALTER TABLE `company_job`
  ADD CONSTRAINT `fk_company_job_company_personal` FOREIGN KEY (`comID`) REFERENCES `company_personal` (`comID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_company_job_location1` FOREIGN KEY (`locID`) REFERENCES `location` (`locID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_company_job_supplier_personal1` FOREIGN KEY (`supID`) REFERENCES `supplier_personal` (`supID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
