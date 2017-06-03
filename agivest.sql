-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 07:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agivest`
--

-- --------------------------------------------------------

--
-- Table structure for table `fyidentitas`
--

CREATE TABLE `fyidentitas` (
  `id_identitas` bigint(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verificationCodeForgotPass` varchar(255) NOT NULL,
  `activeStatusForgotPass` varchar(1) NOT NULL,
  `statusUser` varchar(2) NOT NULL,
  `activeStatus` varchar(2) NOT NULL,
  `verificationCode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pictureProfile` text NOT NULL,
  `biodata` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `namaAhliWaris` varchar(255) NOT NULL,
  `noTelphoneAW` varchar(255) NOT NULL,
  `alamatAhliWaris` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fyidentitas`
--

INSERT INTO `fyidentitas` (`id_identitas`, `username`, `pass`, `email`, `verificationCodeForgotPass`, `activeStatusForgotPass`, `statusUser`, `activeStatus`, `verificationCode`, `name`, `pictureProfile`, `biodata`, `gender`, `province`, `region`, `address`, `telephone`, `namaAhliWaris`, `noTelphoneAW`, `alamatAhliWaris`) VALUES
(1, 'helfi', '25d55ad283aa400af464c76d713c07ad', 'helfipangestu12@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'helfi1', '25d55ad283aa400af464c76d713c07ad', 'helfi1@gmail.com', '', '', '0', 'A', 'us597MzTYlhkPN3W4XIA', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fyinvest`
--

CREATE TABLE `fyinvest` (
  `id_invest` bigint(6) NOT NULL,
  `statusInvest` varchar(1) NOT NULL,
  `money` varchar(255) NOT NULL,
  `ordered` date NOT NULL,
  `expired` date NOT NULL,
  `nameTambak` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fytambak`
--

CREATE TABLE `fytambak` (
  `id_tambak` bigint(6) NOT NULL,
  `id_invest` bigint(6) NOT NULL,
  `statusInvest` varchar(1) NOT NULL,
  `nameTambak` varchar(255) NOT NULL,
  `pictureTambak` text NOT NULL,
  `fishFarmer` varchar(255) NOT NULL,
  `pictureFishFarmer` text NOT NULL,
  `statusTambak` varchar(1) NOT NULL,
  `progresTambak` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `spaciousPond` varchar(255) NOT NULL,
  `temporaryInvestment` int(1) NOT NULL,
  `expired` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fyuang`
--

CREATE TABLE `fyuang` (
  `id_uang` bigint(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `reportDay` text NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `kredit` varchar(255) NOT NULL,
  `nameTambak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fyidentitas`
--
ALTER TABLE `fyidentitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `fyinvest`
--
ALTER TABLE `fyinvest`
  ADD PRIMARY KEY (`id_invest`);

--
-- Indexes for table `fytambak`
--
ALTER TABLE `fytambak`
  ADD PRIMARY KEY (`id_tambak`);

--
-- Indexes for table `fyuang`
--
ALTER TABLE `fyuang`
  ADD PRIMARY KEY (`id_uang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fyidentitas`
--
ALTER TABLE `fyidentitas`
  MODIFY `id_identitas` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fyinvest`
--
ALTER TABLE `fyinvest`
  MODIFY `id_invest` bigint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fytambak`
--
ALTER TABLE `fytambak`
  MODIFY `id_tambak` bigint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fyuang`
--
ALTER TABLE `fyuang`
  MODIFY `id_uang` bigint(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
