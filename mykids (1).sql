-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 04:26 PM
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
-- Database: `mykids`
--

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `kidsid` int(40) NOT NULL,
  `kidsname` varchar(200) NOT NULL,
  `kidsyearReg` varchar(200) NOT NULL,
  `kidsAdd` varchar(200) NOT NULL,
  `kidsmedHistory` varchar(200) NOT NULL,
  `kidsStatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`kidsid`, `kidsname`, `kidsyearReg`, `kidsAdd`, `kidsmedHistory`, `kidsStatus`) VALUES
(1, 'NANA', '2022', 'TAMAN DELIMA', 'ALLERGIC', 'ACTIVE'),
(2, 'AIMAN', '2021', 'TAMAN BAKAWALI', 'NONE', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `manpower`
--

CREATE TABLE `manpower` (
  `manpowerid` int(50) NOT NULL,
  `manpoweradd` varchar(200) NOT NULL,
  `manpowerstatus` varchar(200) NOT NULL,
  `manpowermedhistory` varchar(200) NOT NULL,
  `manpowername` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manpower`
--

INSERT INTO `manpower` (`manpowerid`, `manpoweradd`, `manpowerstatus`, `manpowermedhistory`, `manpowername`) VALUES
(1, 'TAMAN BAKAWALI', 'ACTIVE', 'NONE', ''),
(2, 'TAMAN BAKAWALI', 'ACTIVE', 'NONE', ''),
(3, 'TAMAN BAKAWALI', 'ACTIVE', 'NONE', ''),
(4, 'TAMAN DELIMA', 'ACTIVE', 'NONE', '');

-- --------------------------------------------------------

--
-- Table structure for table `qr`
--

CREATE TABLE `qr` (
  `qrid` int(30) NOT NULL,
  `qrattendance` varchar(100) NOT NULL,
  `qrdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salarystaff`
--

CREATE TABLE `salarystaff` (
  `idstaff` int(100) NOT NULL,
  `namastaff` varchar(250) NOT NULL,
  `kpstaff` varchar(100) NOT NULL,
  `actionstaff` varchar(250) NOT NULL,
  `paidstaff` varchar(200) NOT NULL,
  `pendingstaff` varchar(200) NOT NULL,
  `overduestaff` varchar(200) NOT NULL,
  `salary` varchar(150) NOT NULL,
  `wage` varchar(100) NOT NULL,
  `hour` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salarystaff`
--

INSERT INTO `salarystaff` (`idstaff`, `namastaff`, `kpstaff`, `actionstaff`, `paidstaff`, `pendingstaff`, `overduestaff`, `salary`, `wage`, `hour`) VALUES
(43, 'MARINA', '960111110234', 'ACTIVE', '', '', 'OVERDUE', '', '', ''),
(44, 'NAIM', '990109032345', 'ACTIVE', '', 'PENDING', '', '', '', ''),
(45, 'ALIA', '990101567892', 'ACTIVE', 'PAID', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `umpparent`
--

CREATE TABLE `umpparent` (
  `umpparentid` int(20) NOT NULL,
  `namaumpparent` varchar(200) NOT NULL,
  `icparent` varchar(200) NOT NULL,
  `noparent` varchar(200) NOT NULL,
  `maritalStat` varchar(200) NOT NULL,
  `accStat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umpparent`
--

INSERT INTO `umpparent` (`umpparentid`, `namaumpparent`, `icparent`, `noparent`, `maritalStat`, `accStat`) VALUES
(1, 'MUHD ALI', '950402042349', '0111293456', 'MARRIED', 'ACTIVE'),
(2, 'SABRINA', '910210144564', '01110023129', 'MARRIED', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin1234', 'admin'),
(2, 'syafiq', 'syafiq123', 'owner'),
(3, 'imran', '1234', 'umpparent'),
(4, 'daus', '1234', 'outsider'),
(5, 'alif', '1234', 'manpower'),
(8, 'faiz', '1234', 'manpower'),
(9, 'aina', '1111', 'manpower');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`kidsid`);

--
-- Indexes for table `manpower`
--
ALTER TABLE `manpower`
  ADD PRIMARY KEY (`manpowerid`);

--
-- Indexes for table `qr`
--
ALTER TABLE `qr`
  ADD PRIMARY KEY (`qrid`);

--
-- Indexes for table `salarystaff`
--
ALTER TABLE `salarystaff`
  ADD PRIMARY KEY (`idstaff`);

--
-- Indexes for table `umpparent`
--
ALTER TABLE `umpparent`
  ADD PRIMARY KEY (`umpparentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `kidsid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `manpower`
--
ALTER TABLE `manpower`
  MODIFY `manpowerid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `qr`
--
ALTER TABLE `qr`
  MODIFY `qrid` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salarystaff`
--
ALTER TABLE `salarystaff`
  MODIFY `idstaff` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `umpparent`
--
ALTER TABLE `umpparent`
  MODIFY `umpparentid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
