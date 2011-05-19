-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2011 at 09:01 PM
-- Server version: 5.1.56
-- PHP Version: 5.3.6

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id_group`, `nama_group`, `keterangan`) VALUES
(5, 'Pagi AAS', 'Group ini masuk pagi jam 08:00 sampai 09:00');

-- --------------------------------------------------------

--
-- Table structure for table `group_kontak`
--

CREATE TABLE IF NOT EXISTS `group_kontak` (
  `id_group_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `id_kontak` int(11) NOT NULL,
  PRIMARY KEY (`id_group_kontak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `group_kontak`
--


-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `no_telp`, `alamat`) VALUES
(1, 'Bramandityo Prabowo', '085279916229', ''),
(2, 'Prastina Dwiutami', '0845652191', ''),
(3, 'Bram 3', '089662048911', ''),
(4, 'Nguk', '16401635465', ''),
(5, 'bram tina', '5415463514654', 'asdfasdfasdasdf'),
(6, 'tina bram', '23412341', 'asdfasdfasdf'),
(7, 'Dicky', '087822159280', 'Bandung'),
(8, 'Maya Dewi Mustika', '08997773073', 'Tasik');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `status`, `tgl_buat`) VALUES
(1, 'Invasi', 1, '2011-04-24 00:57:51'),
(2, 'Undangan', 1, '2011-04-24 09:01:33'),
(5, 'Informasi', 1, '2011-04-24 10:03:41'),
(6, 'Tagihan', 1, '2011-04-25 20:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `sms_group`
--

CREATE TABLE IF NOT EXISTS `sms_group` (
  `id_sms_group` int(11) NOT NULL AUTO_INCREMENT,
  `id_sms` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_sms_group`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sms_group`
--


-- --------------------------------------------------------

--
-- Table structure for table `sms_inbox`
--

CREATE TABLE IF NOT EXISTS `sms_inbox` (
  `id_sms` int(10) NOT NULL AUTO_INCREMENT,
  `isi_sms` text NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  PRIMARY KEY (`id_sms`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sms_inbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `sms_outbox`
--

CREATE TABLE IF NOT EXISTS `sms_outbox` (
  `id_sms` int(11) NOT NULL AUTO_INCREMENT,
  `id_kontak` int(11) DEFAULT NULL,
  `no_kontak` text,
  `isi_sms` text NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sms`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sms_outbox`
--

INSERT INTO `sms_outbox` (`id_sms`, `id_kontak`, `no_kontak`, `isi_sms`, `id_kriteria`, `waktu_masuk`) VALUES
(5, 1, NULL, 'Bangun', 1, '2011-05-17 23:41:31'),
(6, 7, NULL, '', 1, '2011-05-18 17:56:50'),
(7, 7, NULL, 'gffffjjjjjhgfjhgfjgh', 1, '2011-05-18 17:57:10'),
(3, 7, NULL, 'Hai aihai', 5, '2011-05-17 18:52:53'),
(4, 1, NULL, 'guck fucvkasdfasdfasdfasdfasdfasdfasdfasd', 1, '2011-05-17 18:53:50'),
(8, 1, NULL, 'sdfgsdfgsdfg', 2, '2011-05-18 17:57:28'),
(9, 1, NULL, 'hallo<br>', 2, '2011-05-18 17:59:27'),
(10, 7, NULL, 'Fuck diki', 5, '2011-05-18 18:03:26'),
(11, 1, NULL, '&nbsp;nguk nguk nguk', 1, '2011-05-18 18:03:55'),
(12, 1, '085279916229', 'ajsdfnajklsdnflkjasdnfkj', 5, '2011-05-18 18:23:51'),
(13, 0, '085721176190', 'sdfasd', 5, '2011-05-18 18:25:21'),
(14, 1, '085279916229', 'dftydtydrtyrty', 2, '2011-05-18 18:56:57'),
(15, 8, '08997773073', 'Maaf', 1, '2011-05-18 20:57:23');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sms_template`
--

INSERT INTO `sms_template` (`id_template`, `id_kriteria`, `pesan`, `tgl_buat`, `id_user`) VALUES
(5, 2, 'asdfasdfaqdfasdf', '2011-05-16 00:02:41', 1),
(6, 2, 'mari bugil bersama', '2011-05-16 17:23:49', NULL),
(7, 1, '', '2011-05-17 10:48:40', NULL),
(8, 1, '', '2011-05-17 10:50:34', NULL);

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
-- Constraints for table `user_group`
--
ALTER TABLE `user_group`
  ADD CONSTRAINT `user_group_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_group_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `group` (`id_group`) ON DELETE NO ACTION ON UPDATE NO ACTION;
