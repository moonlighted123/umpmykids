-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 10:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mykids`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(6) NOT NULL,
  `AdminPassword` varchar(8) NOT NULL,
  `AdminPhoneNo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminPassword`, `AdminPhoneNo`) VALUES
(100001, 'AD00_M', '0149678092'),
(100002, 'MIN02_', '0123679870'),
(100003, '@DMIN1', '0156798097'),
(100004, 'WA092', '0124890032'),
(100005, '12345#', '01112376890');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `KidsID` int(6) NOT NULL,
  `ParentsID` int(6) NOT NULL,
  `OutsidersID` int(6) NOT NULL,
  `KidsYearRegister` varchar(20) NOT NULL,
  `KidsStatus` varchar(20) NOT NULL,
  `KidsName` varchar(50) NOT NULL,
  `KidsAddress` varchar(100) NOT NULL,
  `KidsMedHistory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`KidsID`, `ParentsID`, `OutsidersID`, `KidsYearRegister`, `KidsStatus`, `KidsName`, `KidsAddress`, `KidsMedHistory`) VALUES
(800003, 900008, 500008, '2021', 'ACTIVE', 'Miasara', 'Kampung pengkalan Berangan, 51000 kuala lumpur', 'NO chronic diseases'),
(800004, 900009, 500009, '2021', 'ACTIVE', 'Maisarah Nasuha', 'Jalan pangkah, 34000 selangor', 'NO chronic diseases'),
(800005, 900010, 500010, '2021', 'ACTIVE', 'Muhamm ad hakimi', 'Lorong masjid lama, 21070 kuala terenggan u', 'NO chronic diseases'),
(800011, 900006, 500006, '2021', 'ACTIVE', 'Alissa Sofea', 'Jalan gong tok maseh, 43000 kuala lumpur', 'NO chronic diseases'),
(800012, 900007, 500007, '2021', 'ACTIVE', 'Athalia', '285A, kg atas tol, 21070 terengganu', 'NO chronic diseases');

-- --------------------------------------------------------

--
-- Table structure for table `outsider parents`
--

CREATE TABLE `outsider parents` (
  `OutsidersID` int(6) NOT NULL,
  `KidsID` int(6) NOT NULL,
  `PaymentID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `UserStatus` varchar(20) NOT NULL,
  `UserMaritalStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outsider parents`
--

INSERT INTO `outsider parents` (`OutsidersID`, `KidsID`, `PaymentID`, `UserID`, `UserStatus`, `UserMaritalStatus`) VALUES
(500001, 800001, 600005, 100086, 'ACTIVE', 'Single Mom'),
(500002, 800002, 600004, 100030, 'ACTIVE', 'Married'),
(500003, 800003, 600003, 100007, 'CANCEL', 'Married'),
(500004, 800004, 600002, 100090, 'CANCEL', 'Married'),
(500005, 800005, 600001, 100084, 'ACTIVE', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OwnerID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `PaymentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`OwnerID`, `UserID`, `PaymentID`) VALUES
(400001, 100086, 600001),
(400002, 100030, 600002),
(400003, 100007, 600003),
(400004, 100090, 600004),
(400005, 100084, 600005);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(6) NOT NULL,
  `ParentsID` int(6) NOT NULL,
  `StaffID` int(6) NOT NULL,
  `OwnerID` int(6) NOT NULL,
  `OutsidersID` int(6) NOT NULL,
  `PaymentStatus` varchar(20) NOT NULL,
  `PaymentDate` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `ParentsID`, `StaffID`, `OwnerID`, `OutsidersID`, `PaymentStatus`, `PaymentDate`, `Status`) VALUES
(600016, 900006, 300010, 400006, 500007, 'PAID', '2021-10-01', 'ACTIVE'),
(600017, 900007, 300011, 400007, 500008, 'OVERDUE', '2021-10-03', 'ACTIVE'),
(600018, 900008, 300012, 400008, 500009, 'PAID', '2021-10-03', 'ACTIVE'),
(600019, 900009, 300013, 400009, 500010, 'PAID', '2021-10-04', 'ACTIVE'),
(600020, 900010, 300014, 400010, 500011, 'OVERDUE', '2021-10-05', 'CANCEL'),
(600021, 900011, 300015, 400011, 500012, 'OVERDUE', '2021-10-02', 'CANCEL');

-- --------------------------------------------------------

--
-- Table structure for table `qr code`
--

CREATE TABLE `qr code` (
  `QRCodeID` int(6) NOT NULL,
  `StaffID (FK1)` int(6) NOT NULL,
  `AdminID (FK2)` int(6) NOT NULL,
  `QRCodeAttendance` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qr code`
--

INSERT INTO `qr code` (`QRCodeID`, `StaffID (FK1)`, `AdminID (FK2)`, `QRCodeAttendance`) VALUES
(700001, 300001, 200003, 'A'),
(700002, 300002, 200002, 'A'),
(700003, 300003, 200001, 'A'),
(700004, 300004, 200004, 'A'),
(700005, 300005, 200005, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `ump mykids staff`
--

CREATE TABLE `ump mykids staff` (
  `StaffID` int(6) NOT NULL,
  `PaymentID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `QRCodeID` int(6) NOT NULL,
  `StaffYearRegister` varchar(20) NOT NULL,
  `StaffSalary` float NOT NULL,
  `StaffMedHistory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ump mykids staff`
--

INSERT INTO `ump mykids staff` (`StaffID`, `PaymentID`, `UserID`, `QRCodeID`, `StaffYearRegister`, `StaffSalary`, `StaffMedHistory`) VALUES
(300004, 600011, 100065, 700011, '2021', 1200, 'No chronic diseases'),
(300005, 600012, 100050, 700012, '2021', 1400, 'No chronic diseases'),
(300006, 600013, 100012, 700013, '2021', 1200, 'No chronic diseases'),
(300007, 600014, 100032, 700014, '2021', 2200, 'No chronic diseases'),
(300008, 600015, 100044, 700015, '2021', 1000, 'No chronic diseases'),
(300009, 600016, 100020, 700016, '2021', 760, 'No chronic diseases');

-- --------------------------------------------------------

--
-- Table structure for table `ump staff parents`
--

CREATE TABLE `ump staff parents` (
  `ParentsID` int(6) NOT NULL,
  `KidsID` int(6) NOT NULL,
  `PaymentID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `UserMaritalStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ump staff parents`
--

INSERT INTO `ump staff parents` (`ParentsID`, `KidsID`, `PaymentID`, `UserID`, `Status`, `UserMaritalStatus`) VALUES
(900001, 800006, 600006, 100083, 'ACTIVE', 'Single Mom'),
(900002, 800007, 600007, 100021, 'ACTIVE', 'Married'),
(900003, 800008, 600008, 100023, 'CANCEL', 'Married'),
(900004, 800009, 600009, 100030, 'CANCEL', 'Married'),
(900005, 800010, 600010, 100040, 'ACTIVE', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(6) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `UserPassword` varchar(20) NOT NULL,
  `UserPhoneNo` varchar(12) NOT NULL,
  `UserAddress` varchar(100) NOT NULL,
  `UserStatus` varchar(20) NOT NULL,
  `UserMaritalStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `UserPassword`, `UserPhoneNo`, `UserAddress`, `UserStatus`, `UserMaritalStatus`) VALUES
(100002, 'Nuraini Abdul Majid', 'Nur_001', '0176908796', 'Kampung pengkalan Berangan, 51000 kuala lumpur', 'ACTIVE', 'Single'),
(100034, 'Muhammad Hafiq', 'Haf14#', '0143970345', 'Jalan pangkah, 34000 selangor', 'ACTIVE', 'Single dad'),
(100067, 'Lukman Hakim', 'man023', '0156709082', 'Lorong masjid lama, 21070 kuala terengganu', 'ACTIVE', 'Married'),
(100076, 'Abdul Salleh', 'Sa1e@h', '0149656092', '285A, kg atas tol, 21070 terengganu', 'ACTIVE', 'Single'),
(100093, 'Syuhada Anwar', 'Syuu00_', '01290876', 'Jalan gong tok maseh, 43000 kuala lumpur', 'ACTIVE', 'Married');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`KidsID`,`ParentsID`,`OutsidersID`);

--
-- Indexes for table `outsider parents`
--
ALTER TABLE `outsider parents`
  ADD PRIMARY KEY (`OutsidersID`,`KidsID`,`PaymentID`,`UserID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`OwnerID`,`UserID`,`PaymentID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`,`ParentsID`,`StaffID`,`OwnerID`,`OutsidersID`);

--
-- Indexes for table `qr code`
--
ALTER TABLE `qr code`
  ADD PRIMARY KEY (`QRCodeID`,`StaffID (FK1)`,`AdminID (FK2)`);

--
-- Indexes for table `ump mykids staff`
--
ALTER TABLE `ump mykids staff`
  ADD PRIMARY KEY (`StaffID`,`PaymentID`,`UserID`,`QRCodeID`);

--
-- Indexes for table `ump staff parents`
--
ALTER TABLE `ump staff parents`
  ADD PRIMARY KEY (`ParentsID`,`KidsID`,`PaymentID`,`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100006;

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `KidsID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800013;

--
-- AUTO_INCREMENT for table `outsider parents`
--
ALTER TABLE `outsider parents`
  MODIFY `OutsidersID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600005;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `OwnerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400006;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600022;

--
-- AUTO_INCREMENT for table `qr code`
--
ALTER TABLE `qr code`
  MODIFY `QRCodeID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=700006;

--
-- AUTO_INCREMENT for table `ump mykids staff`
--
ALTER TABLE `ump mykids staff`
  MODIFY `StaffID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300010;

--
-- AUTO_INCREMENT for table `ump staff parents`
--
ALTER TABLE `ump staff parents`
  MODIFY `ParentsID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=900006;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100094;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
