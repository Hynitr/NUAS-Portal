-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 04:17 AM
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
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin No.` text NOT NULL,
  `Password` text NOT NULL,
  `id` int(11) NOT NULL,
  `school` text NOT NULL,
  `website` text NOT NULL,
  `alias` text NOT NULL,
  `adm` text NOT NULL,
  `tel` text NOT NULL,
  `addr` text NOT NULL,
  `tagline` text NOT NULL,
  `blksmsname` text NOT NULL,
  `stud` text NOT NULL,
  `admn` text NOT NULL,
  `staf` text NOT NULL,
  `emal` text NOT NULL,
  `session` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin No.`, `Password`, `id`, `school`, `website`, `alias`, `adm`, `tel`, `addr`, `tagline`, `blksmsname`, `stud`, `admn`, `staf`, `emal`, `session`) VALUES
('fgs/admin', '8f96e4f5fcff936298f13a4b8db8a242', 1, 'Fountain of Gold School', 'http://localhost/jobs/fgsportal/admin', 'Demo', 'DOT', '09010484986', 'Ikole-Ekiti, Ekiti State.', 'Building business web confidence...', 'Doteightplus', 'http://localhost/software/DemoSCMS/student', 'http://localhost/software/DemoSCMS/admin', 'http://localhost/software/DemoSCMS/staff', 'info@dotdemo.com.ng', '2021/2022');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `file` text NOT NULL,
  `date` datetime NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entrance`
--

CREATE TABLE `entrance` (
  `sn` int(11) NOT NULL,
  `id` text NOT NULL,
  `entyr` text NOT NULL,
  `ent_id` text NOT NULL,
  `email` text NOT NULL,
  `surname` text NOT NULL,
  `otherName` text NOT NULL,
  `lastName` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `disablity` text NOT NULL,
  `parent` text NOT NULL,
  `parent_rel` text NOT NULL,
  `parent_occ` text NOT NULL,
  `parent_res` text NOT NULL,
  `parent_tel` text NOT NULL,
  `parent_tel2` text NOT NULL,
  `parent_offadd1` text NOT NULL,
  `parent_offadd2` text NOT NULL,
  `schlst` text NOT NULL,
  `classcomp` text NOT NULL,
  `Active` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id` int(11) NOT NULL,
  `term` text NOT NULL,
  `class` text NOT NULL,
  `admno` text NOT NULL,
  `attendance` text NOT NULL,
  `punctuality` text NOT NULL,
  `honesty` int(11) NOT NULL,
  `neatness` text NOT NULL,
  `nonaggr` text NOT NULL,
  `leader` text NOT NULL,
  `relation` text NOT NULL,
  `sport` text NOT NULL,
  `societies` text NOT NULL,
  `youth` text NOT NULL,
  `aesth` text NOT NULL,
  `principal` text NOT NULL,
  `mrkpos` text NOT NULL,
  `mrkobt` text NOT NULL,
  `perc` text NOT NULL,
  `totgra` text NOT NULL,
  `tso` text NOT NULL,
  `tsa` text NOT NULL,
  `tsp` text NOT NULL,
  `ses` text NOT NULL,
  `resm` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `class` text NOT NULL,
  `admno` text NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `test` text NOT NULL,
  `ass` text NOT NULL,
  `classex` text NOT NULL,
  `exam` text NOT NULL,
  `total` text NOT NULL,
  `position` text NOT NULL,
  `grade` text NOT NULL,
  `remark` text NOT NULL,
  `term` text NOT NULL,
  `ses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `admno` text NOT NULL,
  `class` text NOT NULL,
  `subject` text NOT NULL,
  `fscore` text NOT NULL,
  `sndscore` text NOT NULL,
  `tscore` text NOT NULL,
  `id` int(11) NOT NULL,
  `ses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`admno`, `class`, `subject`, `fscore`, `sndscore`, `tscore`, `id`, `ses`) VALUES
('DOT/STUD/2021/1001', 'Reception', 'Mathematics', '69', '0', '0', 824, '2021/2022'),
('DOT/STUD/2021/1001', 'Reception', 'Chemistry', '44', '0', '0', 825, '2021/2022');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `id` int(11) NOT NULL,
  `identifier` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `identifier`) VALUES
(1, '184da1856d2c36dc9e95cff7582a07dc');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `ses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `ses`) VALUES
(2, '2021/2022');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sn` text NOT NULL,
  `id` int(11) NOT NULL,
  `staffcode` text NOT NULL,
  `staffno` text NOT NULL,
  `staffid` text NOT NULL,
  `qrid` text NOT NULL,
  `title` text NOT NULL,
  `surname` text NOT NULL,
  `firstname` text NOT NULL,
  `othername` text NOT NULL,
  `date` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `gender` text NOT NULL,
  `tertiary` text NOT NULL,
  `discipline` text NOT NULL,
  `category` text NOT NULL,
  `staffpost` text NOT NULL,
  `staffclass` text NOT NULL,
  `subject` text NOT NULL,
  `salary` text NOT NULL,
  `transport` text NOT NULL,
  `medical` text NOT NULL,
  `gross` text NOT NULL,
  `datereg` datetime NOT NULL,
  `qual` text NOT NULL,
  `marital` text NOT NULL,
  `nok` text NOT NULL,
  `relation` text NOT NULL,
  `nokocc` text NOT NULL,
  `radd` text NOT NULL,
  `nokradd` text NOT NULL,
  `tel1` text NOT NULL,
  `tel2` text NOT NULL,
  `passport` text NOT NULL,
  `qrcode` text NOT NULL,
  `admletter` text NOT NULL,
  `idcard` text NOT NULL,
  `active` text NOT NULL,
  `bday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sn`, `id`, `staffcode`, `staffno`, `staffid`, `qrid`, `title`, `surname`, `firstname`, `othername`, `date`, `month`, `year`, `gender`, `tertiary`, `discipline`, `category`, `staffpost`, `staffclass`, `subject`, `salary`, `transport`, `medical`, `gross`, `datereg`, `qual`, `marital`, `nok`, `relation`, `nokocc`, `radd`, `nokradd`, `tel1`, `tel2`, `passport`, `qrcode`, `admletter`, `idcard`, `active`, `bday`) VALUES
('', 22, '', '1000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', 'DMSSTAFF20211001.pdf', '', '9', '0'),
('1', 28, 'DOT/STAFF/2021/', '1001', 'DOT/STAFF/2021/1001', 'b024af816426dcba3d33e2ed6b6682d4', 'Miss', 'Greatness', 'Abolade', 'Olatomiwa', '23', '02', '2021', 'Male', 'Federal University Oye-Ekiti', 'Mathematics', 'Teaching Staff', 'Class Teacher', 'Reception', 'Physics', '27000', '0', '0', '27000', '2021-11-24 09:27:22', 'HND', 'Single', 'Mr and Mrs Abolade', 'Mr and Mrs Abolade', 'Staff', 'DotEightPlus Secretariat,Ikole', 'DotEightPlus Secretariat,Ikole', '09121132025', '09121132025', '1591977058757.jpg', 'DOTSTAFF20211001.png', 'DOTSTAFF20211001.pdf', 'upload/IdCard/DOTSTAFF20211001.php', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffattend`
--

CREATE TABLE `staffattend` (
  `id` int(11) NOT NULL,
  `staffid` text NOT NULL,
  `qrid` text NOT NULL,
  `name` text NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `date` date NOT NULL,
  `month` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `Admincode` text NOT NULL,
  `Admission No.` text NOT NULL,
  `AdminID` text NOT NULL,
  `qrid` text NOT NULL,
  `SurName` text NOT NULL,
  `Middle Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Date` int(255) NOT NULL,
  `Month` int(255) NOT NULL,
  `Year` int(255) NOT NULL,
  `Gender` text NOT NULL,
  `cbk` text NOT NULL,
  `suF` text NOT NULL,
  `schlst` text NOT NULL,
  `parent` text NOT NULL,
  `relation` text NOT NULL,
  `occupation` text NOT NULL,
  `SchF` text NOT NULL,
  `AcF` text NOT NULL,
  `Telephone1` text NOT NULL,
  `Address 1` text NOT NULL,
  `Address 2` text NOT NULL,
  `Telephone2` text NOT NULL,
  `Datereg` date NOT NULL,
  `Class` text NOT NULL,
  `Department` text NOT NULL,
  `Active` text NOT NULL,
  `Passport` text NOT NULL,
  `admletter` text NOT NULL,
  `qrcode` text NOT NULL,
  `idcard` text NOT NULL,
  `bday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sn`, `Admincode`, `Admission No.`, `AdminID`, `qrid`, `SurName`, `Middle Name`, `Last Name`, `Date`, `Month`, `Year`, `Gender`, `cbk`, `suF`, `schlst`, `parent`, `relation`, `occupation`, `SchF`, `AcF`, `Telephone1`, `Address 1`, `Address 2`, `Telephone2`, `Datereg`, `Class`, `Department`, `Active`, `Passport`, `admletter`, `qrcode`, `idcard`, `bday`) VALUES
(136, '', '', '1000', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9', '', 'DMSSTUD20211001.pdf', '', 'upload/IdCard/.php', '0'),
(158, '1', 'DOT/STUD/2021/', '1001', 'DOT/STUD/2021/1001', '58551485e4adc7081ba6c7198dbf952e', 'Greatness', 'Abolade', 'Olatomiwa', 20, 2, 2000, 'Male', '1', '', 'Federal University Oye-Ekiti', 'Mr and Mrs Abolade', 'Guardian', 'Staff', '', '', '5353666', 'DotEightPlus Secretariat,Ikole', '', '47777747', '2021-11-24', 'Reception', 'Null', '0', '1591977058757.jpg', 'DOTSTUD20211001.pdf', 'DOTSTUD20211001.png', 'upload/IdCard/DOTSTUD20211001.php', '');

-- --------------------------------------------------------

--
-- Table structure for table `upassignment`
--

CREATE TABLE `upassignment` (
  `sn` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `file` text NOT NULL,
  `name` text NOT NULL,
  `date` datetime NOT NULL,
  `class` text NOT NULL,
  `adminid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrance`
--
ALTER TABLE `entrance`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffattend`
--
ALTER TABLE `staffattend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upassignment`
--
ALTER TABLE `upassignment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `entrance`
--
ALTER TABLE `entrance`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1549;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=826;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `staffattend`
--
ALTER TABLE `staffattend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `upassignment`
--
ALTER TABLE `upassignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
