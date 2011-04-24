-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2011 at 10:04 AM
-- Server version: 5.1.46
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms-gw`
--

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id_group` int(10) NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(30) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `group`
--


-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kontak`
--


-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tgl_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `status`, `tgl_buat`) VALUES
(1, 'Invasi', 1, '2011-04-24 00:57:51'),
(2, 'Undangan', 1, '2011-04-24 09:01:33'),
(5, 'Informasi', 1, '2011-04-24 10:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `id_sms` int(10) NOT NULL AUTO_INCREMENT,
  `isi_sms` text NOT NULL,
  PRIMARY KEY (`id_sms`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sms`
--


-- --------------------------------------------------------

--
-- Table structure for table `sms_group`
--

CREATE TABLE IF NOT EXISTS `sms_group` (
  `id_sms_group` int(11) NOT NULL AUTO_INCREMENT,
  `id_sms` int(11) NOT NULL,
  `id_group` int(3) NOT NULL,
  PRIMARY KEY (`id_sms_group`),
  KEY `id_sms` (`id_sms`),
  KEY `id_group` (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sms_group`
--


-- --------------------------------------------------------

--
-- Table structure for table `sms_kriteria`
--

CREATE TABLE IF NOT EXISTS `sms_kriteria` (
  `id_sms_kriteria` int(10) NOT NULL AUTO_INCREMENT,
  `id_sms` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  PRIMARY KEY (`id_sms_kriteria`),
  KEY `id_sms` (`id_sms`),
  KEY `id_kriteria` (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sms_kriteria`
--


-- --------------------------------------------------------

--
-- Table structure for table `sms_template`
--

CREATE TABLE IF NOT EXISTS `sms_template` (
  `id_template` int(3) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(3) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_template`),
  KEY `id_user` (`id_user`),
  KEY `id_kriteria` (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sms_template`
--

INSERT INTO `sms_template` (`id_template`, `id_kriteria`, `pesan`, `tgl_buat`, `id_user`) VALUES
(1, 1, 'asdfasdf', '2011-04-24 02:05:00', NULL),
(2, 2, 'aseas', '2011-04-24 09:04:56', NULL),
(3, 5, 'rrrrrerertetertertert', '2011-04-24 10:03:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(130) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
  `id_user_group` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(3) NOT NULL,
  `id_group` int(3) NOT NULL,
  PRIMARY KEY (`id_user_group`),
  KEY `id_user` (`id_user`),
  KEY `id_group` (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_group`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `group_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `sms_group` (`id_sms_group`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sms_group`
--
ALTER TABLE `sms_group`
  ADD CONSTRAINT `sms_group_ibfk_1` FOREIGN KEY (`id_sms`) REFERENCES `sms` (`id_sms`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sms_group_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `group` (`id_group`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sms_kriteria`
--
ALTER TABLE `sms_kriteria`
  ADD CONSTRAINT `sms_kriteria_ibfk_1` FOREIGN KEY (`id_sms`) REFERENCES `sms` (`id_sms`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sms_kriteria_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sms_template`
--
ALTER TABLE `sms_template`
  ADD CONSTRAINT `sms_template_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sms_template_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_group`
--
ALTER TABLE `user_group`
  ADD CONSTRAINT `user_group_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_group_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `group` (`id_group`) ON DELETE NO ACTION ON UPDATE NO ACTION;
