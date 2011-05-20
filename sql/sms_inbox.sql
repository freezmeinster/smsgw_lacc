-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2011 at 01:40 AM
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
-- Table structure for table `sms_inbox`
--

CREATE TABLE IF NOT EXISTS `sms_inbox` (
  `id_sms` int(10) NOT NULL AUTO_INCREMENT,
  `status_baca` tinyint(1) NOT NULL DEFAULT '0',
  `no_kontak` varchar(20) NOT NULL,
  `isi_sms` text NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sms`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sms_inbox`
--

INSERT INTO `sms_inbox` (`id_sms`, `status_baca`, `no_kontak`, `isi_sms`, `id_kriteria`, `waktu_masuk`) VALUES
(1, 0, '085279916229', 'Hoy', NULL, '2011-05-19 23:49:17'),
(2, 0, '085279916229', 'Gahagagagbgagagd mgjgjgbpe.mpapdgm.ap.m.jgap mgd.jgpa', NULL, '2011-05-19 23:50:47');
