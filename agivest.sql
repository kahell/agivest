-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 02:01 PM
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
-- Table structure for table `fycondition_ikan`
--

CREATE TABLE `fycondition_ikan` (
  `id_condition` bigint(6) NOT NULL,
  `condition_ikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fycondition_ikan`
--

INSERT INTO `fycondition_ikan` (`id_condition`, `condition_ikan`) VALUES
(4, 'Bad'),
(1, 'Excelent'),
(2, 'Good'),
(3, 'Sick');

-- --------------------------------------------------------

--
-- Table structure for table `fygender`
--

CREATE TABLE `fygender` (
  `id_gender` bigint(6) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fygender`
--

INSERT INTO `fygender` (`id_gender`, `gender`) VALUES
(3, 'Pria'),
(4, 'Wanita');

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
  `statusUser` varchar(255) DEFAULT NULL,
  `activeStatus` varchar(2) NOT NULL,
  `verificationCode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `pictureProfile` text NOT NULL,
  `biodata` text NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
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

INSERT INTO `fyidentitas` (`id_identitas`, `username`, `pass`, `email`, `verificationCodeForgotPass`, `activeStatusForgotPass`, `statusUser`, `activeStatus`, `verificationCode`, `name`, `birthday`, `pictureProfile`, `biodata`, `gender`, `province`, `region`, `address`, `telephone`, `namaAhliWaris`, `noTelphoneAW`, `alamatAhliWaris`) VALUES
(6, 'helfi', '25d55ad283aa400af464c76d713c07ad', 'helfi@gmail.com', '', '', '2', 'A', '', 'Helfi Pangestu', '1997-01-12', '/assets/images/person-flat.png', 'Helfi adalah seorang mahasiswa', 'Pria', 'Bekasi', '', '', '0838123', '', '', ''),
(7, 'helfi1 ', '25d55ad283aa400af464c76d713c07ad', 'helfi123@gmail.com', '', '', '0', 'A', '', 'Helfi User', '1997-01-12', '/assets/images/person-flat.png', '123', 'Wanita', '123', '123', '123', '1231231', '', '', ''),
(8, 'mahmud ', '25d55ad283aa400af464c76d713c07ad', 'mahmud@gmail.com', '', '', '1', 'A', '', 'Mahmud', '1997-01-12', '/assets/images/person-flat.png', 'Mahmuda adalahs soerang penambak proesional', 'Pria', 'Jawa Timur', 'Malang', 'Jalan Mayjen Panjaitan gang 19 No. 44', '083873767400', '', '', ''),
(9, 'helfipangestu', '25d55ad283aa400af464c76d713c07ad', '1234@gmail.com', '', '', '0', 'A', '', '12345', '2311-12-31', '', '123', 'Pria', '123', '123', '123', '123', '', '', ''),
(11, 'raniaakh_', '25d55ad283aa400af464c76d713c07ad', 'raniaakh@gmail.com', '', '', '0', 'A', '', 'Rania', '1995-08-08', '', 'Raniaaa', 'Wanita', 'Jawa Timur', 'Pasuruan', 'Merpati', '083828321', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fyikan`
--

CREATE TABLE `fyikan` (
  `id_ikan` bigint(6) NOT NULL,
  `condition_ikan` varchar(255) DEFAULT NULL,
  `id_penambak` bigint(6) DEFAULT NULL,
  `id_tambak` bigint(6) NOT NULL,
  `date_ikan` varchar(255) NOT NULL,
  `desc_ikan` text NOT NULL,
  `dead_ikan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fyikan`
--

INSERT INTO `fyikan` (`id_ikan`, `condition_ikan`, `id_penambak`, `id_tambak`, `date_ikan`, `desc_ikan`, `dead_ikan`) VALUES
(9, 'Excelent', 8, 5, '2017-06-11 11:59:35 am', 'Masih baik', 10);

-- --------------------------------------------------------

--
-- Table structure for table `fyinvest`
--

CREATE TABLE `fyinvest` (
  `id_invest` bigint(6) NOT NULL,
  `id_tambak` bigint(6) NOT NULL,
  `id_identitas` bigint(6) NOT NULL,
  `statusInvest` varchar(1) NOT NULL,
  `money` varchar(255) NOT NULL,
  `saham_invest` double NOT NULL,
  `ordered` date NOT NULL,
  `expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fyinvest`
--

INSERT INTO `fyinvest` (`id_invest`, `id_tambak`, `id_identitas`, `statusInvest`, `money`, `saham_invest`, `ordered`, `expired`) VALUES
(21, 5, 7, 'A', '200000', 1, '2017-06-11', '2017-06-14'),
(22, 5, 11, 'A', '15000000', 75, '2017-06-11', '2017-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `fypakan`
--

CREATE TABLE `fypakan` (
  `id_pakan` bigint(6) NOT NULL,
  `id_tambak` bigint(6) NOT NULL,
  `id_penambak` bigint(6) DEFAULT NULL,
  `jmlhKg_pakan` int(255) NOT NULL,
  `tanggal_pakan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fypakan`
--

INSERT INTO `fypakan` (`id_pakan`, `id_tambak`, `id_penambak`, `jmlhKg_pakan`, `tanggal_pakan`) VALUES
(20, 5, 8, 100, '2017-06-11 11:59:26 am');

-- --------------------------------------------------------

--
-- Table structure for table `fystatus_user`
--

CREATE TABLE `fystatus_user` (
  `id_statusUser` bigint(6) NOT NULL,
  `statusUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fystatus_user`
--

INSERT INTO `fystatus_user` (`id_statusUser`, `statusUser`) VALUES
(1, '0'),
(2, '1'),
(3, '2');

-- --------------------------------------------------------

--
-- Table structure for table `fytambak`
--

CREATE TABLE `fytambak` (
  `id_tambak` bigint(6) NOT NULL,
  `id_penambak` bigint(6) DEFAULT NULL,
  `total_investTambak` int(255) NOT NULL,
  `nameTambak` varchar(255) NOT NULL,
  `pictureTambak` text NOT NULL,
  `statusTambak` varchar(1) NOT NULL,
  `progresTambak` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `spaciousPond` varchar(255) NOT NULL,
  `temporaryInvestment` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fytambak`
--

INSERT INTO `fytambak` (`id_tambak`, `id_penambak`, `total_investTambak`, `nameTambak`, `pictureTambak`, `statusTambak`, `progresTambak`, `location`, `spaciousPond`, `temporaryInvestment`) VALUES
(5, 8, 20000000, 'Nakula', '/assets/images/perikanan.jpeg', 'A', 'Pembibitan', 'Malang', '3m x 3m x 3m', 15200000);

-- --------------------------------------------------------

--
-- Table structure for table `fyuang`
--

CREATE TABLE `fyuang` (
  `id_uang` bigint(6) NOT NULL,
  `id_penambak` bigint(6) DEFAULT NULL,
  `id_tambak` bigint(6) NOT NULL,
  `buy_uang` int(255) NOT NULL,
  `save_uang` int(255) NOT NULL,
  `desc_uang` text NOT NULL,
  `date_uang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fyuang`
--

INSERT INTO `fyuang` (`id_uang`, `id_penambak`, `id_tambak`, `buy_uang`, `save_uang`, `desc_uang`, `date_uang`) VALUES
(5, 8, 5, 200000, -200000, 'Beli Pakan ikan ', '2017-06-11 11:59:46 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fycondition_ikan`
--
ALTER TABLE `fycondition_ikan`
  ADD PRIMARY KEY (`id_condition`),
  ADD KEY `condition_ikan` (`condition_ikan`);

--
-- Indexes for table `fygender`
--
ALTER TABLE `fygender`
  ADD PRIMARY KEY (`id_gender`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `fyidentitas`
--
ALTER TABLE `fyidentitas`
  ADD PRIMARY KEY (`id_identitas`),
  ADD KEY `username` (`username`),
  ADD KEY `gender` (`gender`),
  ADD KEY `statusUser` (`statusUser`);

--
-- Indexes for table `fyikan`
--
ALTER TABLE `fyikan`
  ADD PRIMARY KEY (`id_ikan`),
  ADD KEY `id_penambak` (`id_penambak`),
  ADD KEY `id_tambak` (`id_tambak`),
  ADD KEY `condition_ikan` (`condition_ikan`);

--
-- Indexes for table `fyinvest`
--
ALTER TABLE `fyinvest`
  ADD PRIMARY KEY (`id_invest`),
  ADD KEY `id_tambak` (`id_tambak`),
  ADD KEY `id_user` (`id_identitas`);

--
-- Indexes for table `fypakan`
--
ALTER TABLE `fypakan`
  ADD PRIMARY KEY (`id_pakan`),
  ADD KEY `id_tambak` (`id_tambak`),
  ADD KEY `id_penambak` (`id_penambak`);

--
-- Indexes for table `fystatus_user`
--
ALTER TABLE `fystatus_user`
  ADD PRIMARY KEY (`id_statusUser`),
  ADD KEY `statusUser` (`statusUser`);

--
-- Indexes for table `fytambak`
--
ALTER TABLE `fytambak`
  ADD PRIMARY KEY (`id_tambak`),
  ADD KEY `nameTambak` (`nameTambak`),
  ADD KEY `id_penambak` (`id_penambak`);

--
-- Indexes for table `fyuang`
--
ALTER TABLE `fyuang`
  ADD PRIMARY KEY (`id_uang`),
  ADD KEY `id_tambak` (`id_tambak`),
  ADD KEY `id_penambak` (`id_penambak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fycondition_ikan`
--
ALTER TABLE `fycondition_ikan`
  MODIFY `id_condition` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fygender`
--
ALTER TABLE `fygender`
  MODIFY `id_gender` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fyidentitas`
--
ALTER TABLE `fyidentitas`
  MODIFY `id_identitas` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fyikan`
--
ALTER TABLE `fyikan`
  MODIFY `id_ikan` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fyinvest`
--
ALTER TABLE `fyinvest`
  MODIFY `id_invest` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `fypakan`
--
ALTER TABLE `fypakan`
  MODIFY `id_pakan` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `fystatus_user`
--
ALTER TABLE `fystatus_user`
  MODIFY `id_statusUser` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fytambak`
--
ALTER TABLE `fytambak`
  MODIFY `id_tambak` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fyuang`
--
ALTER TABLE `fyuang`
  MODIFY `id_uang` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fyidentitas`
--
ALTER TABLE `fyidentitas`
  ADD CONSTRAINT `fyidentitas_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `fygender` (`gender`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fyidentitas_ibfk_2` FOREIGN KEY (`statusUser`) REFERENCES `fystatus_user` (`statusUser`);

--
-- Constraints for table `fyikan`
--
ALTER TABLE `fyikan`
  ADD CONSTRAINT `fyikan_ibfk_1` FOREIGN KEY (`id_penambak`) REFERENCES `fytambak` (`id_penambak`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fyikan_ibfk_2` FOREIGN KEY (`id_tambak`) REFERENCES `fytambak` (`id_tambak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fyikan_ibfk_3` FOREIGN KEY (`condition_ikan`) REFERENCES `fycondition_ikan` (`condition_ikan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `fyinvest`
--
ALTER TABLE `fyinvest`
  ADD CONSTRAINT `fyinvest_ibfk_2` FOREIGN KEY (`id_tambak`) REFERENCES `fytambak` (`id_tambak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fyinvest_ibfk_3` FOREIGN KEY (`id_identitas`) REFERENCES `fyidentitas` (`id_identitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fypakan`
--
ALTER TABLE `fypakan`
  ADD CONSTRAINT `fypakan_ibfk_1` FOREIGN KEY (`id_tambak`) REFERENCES `fytambak` (`id_tambak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fypakan_ibfk_2` FOREIGN KEY (`id_penambak`) REFERENCES `fytambak` (`id_penambak`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `fytambak`
--
ALTER TABLE `fytambak`
  ADD CONSTRAINT `fytambak_ibfk_1` FOREIGN KEY (`id_penambak`) REFERENCES `fyidentitas` (`id_identitas`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `fyuang`
--
ALTER TABLE `fyuang`
  ADD CONSTRAINT `fyuang_ibfk_2` FOREIGN KEY (`id_tambak`) REFERENCES `fytambak` (`id_tambak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fyuang_ibfk_3` FOREIGN KEY (`id_penambak`) REFERENCES `fyidentitas` (`id_identitas`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
