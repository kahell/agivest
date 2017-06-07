-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 05:54 PM
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
  `birthday` date NOT NULL,
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

INSERT INTO `fyidentitas` (`id_identitas`, `username`, `pass`, `email`, `verificationCodeForgotPass`, `activeStatusForgotPass`, `statusUser`, `activeStatus`, `verificationCode`, `name`, `birthday`, `pictureProfile`, `biodata`, `gender`, `province`, `region`, `address`, `telephone`, `namaAhliWaris`, `noTelphoneAW`, `alamatAhliWaris`) VALUES
(1, 'helfi', '25d55ad283aa400af464c76d713c07ad', 'helfipangestu12@gmail.com', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(2, 'helfi1', '25d55ad283aa400af464c76d713c07ad', 'helfi1@gmail.com', '', '', '0', 'A', 'us597MzTYlhkPN3W4XIA', 'HELFI ', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(3, 'mahmud', '25d55ad283aa400af464c76d713c07ad', 'mahmud@gmail.com', '', '', '1', 'A', '', 'Mahmud', '0000-00-00', '/assets/images/person-flat.png', 'Mahmud adalah seorang penambak profesional yang telah berpengalaman bidang budidaya tambak udang vaname selama 50 tahun', 'Laki-laki', 'Jawa Timur', 'Malang', 'Mayjen, Panjaitan Gang 19 No. 44', '+6283873767405', '', '', ''),
(4, 'rania', '25d55ad283aa400af464c76d713c07ad', 'mahmud@gmail.com', '', '', '0', 'A', '', 'Rania', '1995-08-08', '/assets/images/person-flat.png', 'Mahmud adalah seorang penambak profesional yang telah berpengalaman bidang budidaya tambak udang vaname selama 50 tahun', 'Laki-laki', 'Jawa Timur', 'Malang', 'Mayjen, Panjaitan Gang 19 No. 44', '+6283873767405', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fyikan`
--

CREATE TABLE `fyikan` (
  `id_ikan` bigint(6) NOT NULL,
  `condition_ikan` varchar(255) NOT NULL,
  `id_penambak` bigint(6) NOT NULL,
  `id_tambak` bigint(6) NOT NULL,
  `date_ikan` varchar(255) NOT NULL,
  `desc_ikan` text NOT NULL,
  `dead_ikan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `fypakan`
--

CREATE TABLE `fypakan` (
  `id_pakan` bigint(6) NOT NULL,
  `id_tambak` bigint(6) NOT NULL,
  `id_penambak` bigint(6) NOT NULL,
  `jmlhKg_pakan` int(255) NOT NULL,
  `tanggal_pakan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fytambak`
--

CREATE TABLE `fytambak` (
  `id_tambak` bigint(6) NOT NULL,
  `id_penambak` bigint(6) NOT NULL,
  `total_investTambak` int(255) NOT NULL,
  `nameTambak` varchar(255) NOT NULL,
  `pictureTambak` text NOT NULL,
  `statusTambak` varchar(1) NOT NULL,
  `progresTambak` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `spaciousPond` varchar(255) NOT NULL,
  `temporaryInvestment` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fytambak`
--

INSERT INTO `fytambak` (`id_tambak`, `id_penambak`, `total_investTambak`, `nameTambak`, `pictureTambak`, `statusTambak`, `progresTambak`, `location`, `spaciousPond`, `temporaryInvestment`) VALUES
(4, 3, 20000000, 'Nakula', '/assets/images/perikanan.jpeg', 'A', 'Pembibitan', 'Malang, Jawa Timur', '3m x 3m x 3m', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fyuang`
--

CREATE TABLE `fyuang` (
  `id_uang` bigint(6) NOT NULL,
  `id_penambak` bigint(6) NOT NULL,
  `id_tambak` bigint(6) NOT NULL,
  `buy_uang` int(255) NOT NULL,
  `save_uang` int(255) NOT NULL,
  `desc_uang` text NOT NULL,
  `date_uang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `fyidentitas`
--
ALTER TABLE `fyidentitas`
  ADD PRIMARY KEY (`id_identitas`),
  ADD KEY `username` (`username`);

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
-- AUTO_INCREMENT for table `fyidentitas`
--
ALTER TABLE `fyidentitas`
  MODIFY `id_identitas` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fyikan`
--
ALTER TABLE `fyikan`
  MODIFY `id_ikan` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fyinvest`
--
ALTER TABLE `fyinvest`
  MODIFY `id_invest` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `fypakan`
--
ALTER TABLE `fypakan`
  MODIFY `id_pakan` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `fytambak`
--
ALTER TABLE `fytambak`
  MODIFY `id_tambak` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fyuang`
--
ALTER TABLE `fyuang`
  MODIFY `id_uang` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fyikan`
--
ALTER TABLE `fyikan`
  ADD CONSTRAINT `fyikan_ibfk_1` FOREIGN KEY (`id_penambak`) REFERENCES `fytambak` (`id_penambak`),
  ADD CONSTRAINT `fyikan_ibfk_2` FOREIGN KEY (`id_tambak`) REFERENCES `fytambak` (`id_tambak`),
  ADD CONSTRAINT `fyikan_ibfk_3` FOREIGN KEY (`condition_ikan`) REFERENCES `fycondition_ikan` (`condition_ikan`);

--
-- Constraints for table `fyinvest`
--
ALTER TABLE `fyinvest`
  ADD CONSTRAINT `fyinvest_ibfk_2` FOREIGN KEY (`id_tambak`) REFERENCES `fytambak` (`id_tambak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fyinvest_ibfk_3` FOREIGN KEY (`id_identitas`) REFERENCES `fyidentitas` (`id_identitas`);

--
-- Constraints for table `fypakan`
--
ALTER TABLE `fypakan`
  ADD CONSTRAINT `fypakan_ibfk_1` FOREIGN KEY (`id_tambak`) REFERENCES `fytambak` (`id_tambak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fypakan_ibfk_2` FOREIGN KEY (`id_penambak`) REFERENCES `fytambak` (`id_penambak`);

--
-- Constraints for table `fytambak`
--
ALTER TABLE `fytambak`
  ADD CONSTRAINT `fytambak_ibfk_1` FOREIGN KEY (`id_penambak`) REFERENCES `fyidentitas` (`id_identitas`);

--
-- Constraints for table `fyuang`
--
ALTER TABLE `fyuang`
  ADD CONSTRAINT `fyuang_ibfk_2` FOREIGN KEY (`id_tambak`) REFERENCES `fytambak` (`id_tambak`),
  ADD CONSTRAINT `fyuang_ibfk_3` FOREIGN KEY (`id_penambak`) REFERENCES `fyidentitas` (`id_identitas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
