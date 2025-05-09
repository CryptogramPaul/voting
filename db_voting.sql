-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2025 at 08:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_abm`
--

CREATE TABLE `tb_abm` (
  `abmid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_abm`
--

INSERT INTO `tb_abm` (`abmid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, 'asdddd', 'asddd', ' aasdddd', 'BTVTED', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(2, 'aaaa ', ' aaa', ' aaa', 'BSICT', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(3, 'pio', ' asdasdasd', ' asdasdasd', 'BSICT', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asaud`
--

CREATE TABLE `tb_asaud` (
  `asaudid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_asaud`
--

INSERT INTO `tb_asaud` (`asaudid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, 'asad ', ' asad', ' asad', 'BTVTED', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(2, '12', '12', ' 12', 'BSCJE', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart');

-- --------------------------------------------------------

--
-- Table structure for table `tb_assec`
--

CREATE TABLE `tb_assec` (
  `assecid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_assec`
--

INSERT INTO `tb_assec` (`assecid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, ' Maria', ' Santos', ' Lopez', 'BTVTED', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart');

-- --------------------------------------------------------

--
-- Table structure for table `tb_astreas`
--

CREATE TABLE `tb_astreas` (
  `astreasid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_astreas`
--

INSERT INTO `tb_astreas` (`astreasid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, ' as', ' as', ' as', 'BSHM', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(2, ' sa', ' sa', 'sa', 'BSIT', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aud`
--

CREATE TABLE `tb_aud` (
  `audid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_aud`
--

INSERT INTO `tb_aud` (`audid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, ' ad', ' ad', ' ad', 'BSCJE', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(2, 'add', ' add', ' add', 'BSICT', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bm`
--

CREATE TABLE `tb_bm` (
  `bmid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_bm`
--

INSERT INTO `tb_bm` (`bmid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, 'b', 'b', 'b', 'BSED', '', '', '', '', '', '', 'Liberal'),
(2, 'bm ', ' bn', ' bn', 'BSCJE', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart');

-- --------------------------------------------------------

--
-- Table structure for table `tb_candidates`
--

CREATE TABLE `tb_candidates` (
  `canid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `sy` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_candidates`
--

INSERT INTO `tb_candidates` (`canid`, `fname`, `mname`, `lname`, `course`, `sy`, `position`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, 'nn', 'nn', 'nn', 'BSHM', '2021-2022', 'CHAIRMAN', '', '', '', '', '', '', 'Liberal'),
(2, 'pp', 'pp', 'pp', 'BSICT', '2020-2021', 'VICE CHAIRMAN', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(3, 'jj', 'jj', 'jj', 'BEED', '2020-2021', 'CHAIRMAN', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(4, 'aa', 'aa', 'aa', 'BSICT', '2020-2021', 'SECRETARY', 'Y', 'Y', '', '', 'Y', 'Y', 'Smart'),
(5, ' Maria', ' Santos', ' Lopez', 'BTVTED', '2022-2023', 'ASSISTANT SECRETARY', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(6, ' qq', ' qq', ' qq', 'BSIT', '2022-2023', 'CHAIRMAN', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(7, ' ddd', ' jjj', ' gfg', 'BEED', '2022-2023', 'SECRETARY', 'Y', 'Y', '', 'Y', 'Y', 'Y', 'Liberal'),
(8, ' hgb', ' hjh', ' hgh', 'BTVTED', '2022-2023', 'VICE CHAIRMAN', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(9, ' joyce', ' fgg', ' limua', 'BSICT', '2022-2023', 'SECRETARY', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(10, 'sample', 'sample', 'sample', 'BSCJE', '2024-2025', 'TREASURER', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(11, ' q', ' a', ' a', 'BEED', '2024-2025', 'TREASURER', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(12, ' as', ' as', ' as', 'BSHM', '2024-2025', 'ASSISTANT TREASURER', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(13, ' sa', ' sa', 'sa', 'BSIT', '2024-2025', 'ASSISTANT TREASURER', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(14, ' ad', ' ad', ' ad', 'BSCJE', '2024-2025', 'AUDITOR', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(15, 'add', ' add', ' add', 'BSICT', '2024-2025', 'AUDITOR', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(16, 'asad ', ' asad', ' asad', 'BTVTED', '2024-2025', 'ASSISTANT AUDITOR', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(17, '12', '12', ' 12', 'BSCJE', '2024-2025', 'ASSISTANT AUDITOR', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(18, 'b', 'b', 'b', 'BSED', '2024-2025', 'BUSINESS MANAGER', '', '', '', '', '', '', 'Liberal'),
(19, 'bm ', ' bn', ' bn', 'BSCJE', '2024-2025', 'BUSINESS MANAGER', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(20, 'asdddd', 'asddd', ' aasdddd', 'BTVTED', '2024-2025', 'ASSISTANT BUSINESS MANAGER', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(21, 'aaaa ', ' aaa', ' aaa', 'BSICT', '2024-2025', 'ASSISTANT BUSINESS MANAGER', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(22, 'pio', ' asdasdasd', ' asdasdasd', 'BSICT', '2024-2025', 'PIO', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart'),
(23, ' qwe', ' qwe', ' qwe', 'BTVTED', '2024-2025', 'PIO', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chairman`
--

CREATE TABLE `tb_chairman` (
  `chairid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_chairman`
--

INSERT INTO `tb_chairman` (`chairid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(5, ' qwerty', ' asdfg', ' zxcvb', 'BSED', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', ' HAHA'),
(4, 'Maj', 'Jahaha', ' HAHAHAH', 'BSICT', '', '', '', '', '', '', ' Smart'),
(3, ' sdfs', ' fgdf', ' vbv', 'BSED', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', ' ffgf'),
(7, ' hg', ' hg', ' hg', 'BSED', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', ' '),
(8, 'mm', 'mm', 'mm', 'BSED', 'Y', 'Y', '', '', '', '', 'Smart'),
(9, 'nn', 'nn', 'nn', 'BSHM', '', 'Y', 'Y', 'Y', '', '', 'Liberal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_coun`
--

CREATE TABLE `tb_coun` (
  `counid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pio`
--

CREATE TABLE `tb_pio` (
  `pioid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_pio`
--

INSERT INTO `tb_pio` (`pioid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, ' qwe', ' qwe', ' qwe', 'BTVTED', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sec`
--

CREATE TABLE `tb_sec` (
  `secid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_sec`
--

INSERT INTO `tb_sec` (`secid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, 'jj', 'jj', 'jj', 'BEED', '', 'Y', 'Y', 'Y', 'Y', '', 'Liberal'),
(2, ' joyce', ' fgg', ' limua', 'BSICT', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_students`
--

CREATE TABLE `tb_students` (
  `studid` int(200) NOT NULL,
  `schoolid` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_students`
--

INSERT INTO `tb_students` (`studid`, `schoolid`, `fname`, `mname`, `lname`, `course`, `username`, `password`, `status`) VALUES
(18, '1234', ' Mak', ' Mak', ' Mak', 'BSED', 'user', '12345', 'Registered'),
(19, '1111', 'wweee', 'ddddd', 'aaaaa', 'BEED', '12321', '12321', 'Registered'),
(20, '0504-15', 'John Paul', 'Llera', 'Libero', 'BSICT', 'paul', 'admin', 'Registered'),
(21, '46564', 'ASDASD', 'ASDASD', 'ASDASD', 'BTVTED', 'SA', 'SA', 'Registered'),
(22, ' 65787', 'qwert', 'we', 'sdasd ', 'BTVTED', '1', '1 ', 'Registered'),
(23, ' 6564', ' sample', ' sample', ' sample', 'BSCJE', 'sample', ' sa', 'Registered'),
(24, ' 6459', ' mark', ' makr', ' mark', 'BSIT', ' mark', ' admin', 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `tb_treas`
--

CREATE TABLE `tb_treas` (
  `treasid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_treas`
--

INSERT INTO `tb_treas` (`treasid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, 'sample', 'sample', 'sample', 'BSCJE', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Liberal'),
(2, ' q', ' a', ' a', 'BEED', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vicechairman`
--

CREATE TABLE `tb_vicechairman` (
  `vchairid` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `coc` varchar(200) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `tor` varchar(200) NOT NULL,
  `rf` varchar(200) NOT NULL,
  `gm` varchar(200) NOT NULL,
  `party` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_vicechairman`
--

INSERT INTO `tb_vicechairman` (`vchairid`, `fname`, `mname`, `lname`, `course`, `pic`, `coc`, `biodata`, `tor`, `rf`, `gm`, `party`) VALUES
(1, 'pp', 'pp', 'pp', 'BSICT', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Smart');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vote`
--

CREATE TABLE `tb_vote` (
  `voteid` int(200) NOT NULL,
  `studid` int(200) NOT NULL,
  `cm` varchar(200) NOT NULL,
  `vcm` varchar(200) NOT NULL,
  `sec` varchar(200) NOT NULL,
  `assec` varchar(200) NOT NULL,
  `tre` varchar(200) NOT NULL,
  `astre` varchar(200) NOT NULL,
  `aud` varchar(200) NOT NULL,
  `asaud` varchar(200) NOT NULL,
  `bm` varchar(200) NOT NULL,
  `abm` varchar(200) NOT NULL,
  `pio` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_vote`
--

INSERT INTO `tb_vote` (`voteid`, `studid`, `cm`, `vcm`, `sec`, `assec`, `tre`, `astre`, `aud`, `asaud`, `bm`, `abm`, `pio`) VALUES
(6, 18, 'nn nn nn', ' hgb  hjh  hgh', ' ddd  jjj  gfg', ' Maria  Santos  Lopez', 'sample sample sample', ' sa  sa sa', 'add  add  add', '12 12  12', 'b b b', 'aaaa   aaa  aaa', 'pio  asdasdasd  asdasdasd'),
(7, 22, 'nn nn nn', ' hgb  hjh  hgh', ' ddd  jjj  gfg', ' Maria  Santos  Lopez', ' q  a  a', ' as  as  as', 'add  add  add', 'asad   asad  asad', 'b b b', 'aaaa   aaa  aaa', 'pio  asdasdasd  asdasdasd'),
(8, 20, 'jj jj jj', ' hgb  hjh  hgh', ' ddd  jjj  gfg', ' Maria  Santos  Lopez', 'sample sample sample', ' sa  sa sa', 'add  add  add', 'asad   asad  asad', 'b b b', 'asdddd asddd  aasdddd', 'pio  asdasdasd  asdasdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_abm`
--
ALTER TABLE `tb_abm`
  ADD PRIMARY KEY (`abmid`);

--
-- Indexes for table `tb_asaud`
--
ALTER TABLE `tb_asaud`
  ADD PRIMARY KEY (`asaudid`);

--
-- Indexes for table `tb_assec`
--
ALTER TABLE `tb_assec`
  ADD PRIMARY KEY (`assecid`);

--
-- Indexes for table `tb_astreas`
--
ALTER TABLE `tb_astreas`
  ADD PRIMARY KEY (`astreasid`);

--
-- Indexes for table `tb_aud`
--
ALTER TABLE `tb_aud`
  ADD PRIMARY KEY (`audid`);

--
-- Indexes for table `tb_bm`
--
ALTER TABLE `tb_bm`
  ADD PRIMARY KEY (`bmid`);

--
-- Indexes for table `tb_candidates`
--
ALTER TABLE `tb_candidates`
  ADD PRIMARY KEY (`canid`);

--
-- Indexes for table `tb_chairman`
--
ALTER TABLE `tb_chairman`
  ADD PRIMARY KEY (`chairid`);

--
-- Indexes for table `tb_coun`
--
ALTER TABLE `tb_coun`
  ADD PRIMARY KEY (`counid`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pio`
--
ALTER TABLE `tb_pio`
  ADD PRIMARY KEY (`pioid`);

--
-- Indexes for table `tb_sec`
--
ALTER TABLE `tb_sec`
  ADD PRIMARY KEY (`secid`);

--
-- Indexes for table `tb_students`
--
ALTER TABLE `tb_students`
  ADD PRIMARY KEY (`studid`),
  ADD UNIQUE KEY `schoolid` (`schoolid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_treas`
--
ALTER TABLE `tb_treas`
  ADD PRIMARY KEY (`treasid`);

--
-- Indexes for table `tb_vicechairman`
--
ALTER TABLE `tb_vicechairman`
  ADD PRIMARY KEY (`vchairid`);

--
-- Indexes for table `tb_vote`
--
ALTER TABLE `tb_vote`
  ADD PRIMARY KEY (`voteid`),
  ADD UNIQUE KEY `studid` (`studid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_abm`
--
ALTER TABLE `tb_abm`
  MODIFY `abmid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_asaud`
--
ALTER TABLE `tb_asaud`
  MODIFY `asaudid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_assec`
--
ALTER TABLE `tb_assec`
  MODIFY `assecid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_astreas`
--
ALTER TABLE `tb_astreas`
  MODIFY `astreasid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_aud`
--
ALTER TABLE `tb_aud`
  MODIFY `audid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bm`
--
ALTER TABLE `tb_bm`
  MODIFY `bmid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_candidates`
--
ALTER TABLE `tb_candidates`
  MODIFY `canid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_chairman`
--
ALTER TABLE `tb_chairman`
  MODIFY `chairid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_coun`
--
ALTER TABLE `tb_coun`
  MODIFY `counid` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pio`
--
ALTER TABLE `tb_pio`
  MODIFY `pioid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sec`
--
ALTER TABLE `tb_sec`
  MODIFY `secid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_students`
--
ALTER TABLE `tb_students`
  MODIFY `studid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_treas`
--
ALTER TABLE `tb_treas`
  MODIFY `treasid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_vicechairman`
--
ALTER TABLE `tb_vicechairman`
  MODIFY `vchairid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_vote`
--
ALTER TABLE `tb_vote`
  MODIFY `voteid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
