-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2011 at 02:22 AM
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
  `status_baca` tinyint(1) NOT NULL DEFAULT '0',
  `no_kontak` varchar(20) NOT NULL,
  `isi_sms` text NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `status_kirim` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_sms`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `sms_outbox`
--

INSERT INTO `sms_outbox` (`id_sms`, `id_kontak`, `no_kontak`, `isi_sms`, `id_kriteria`, `waktu_masuk`, `status_kirim`) VALUES
(5, 1, NULL, 'Bangunf', 1, '2011-05-17 23:41:31', 1),
(6, 7, NULL, 'jhjh', 1, '2011-05-18 17:56:50', 1),
(7, 7, NULL, 'gffffjjjjjhgfjhgfjgh', 1, '2011-05-18 17:57:10', 1),
(3, 7, NULL, 'Hai aihai', 5, '2011-05-17 18:52:53', 1),
(4, 1, NULL, 'guck fucvkasdfasdfasdfasdfasdfasdfasdfasd', 1, '2011-05-17 18:53:50', 1),
(8, 1, NULL, 'sdfgsdfgsdfg', 2, '2011-05-18 17:57:28', 1),
(9, 1, NULL, 'hallo<br>', 2, '2011-05-18 17:59:27', 1),
(10, 7, NULL, 'Fuck diki', 5, '2011-05-18 18:03:26', 1),
(11, 1, NULL, '&nbsp;nguk nguk nguk', 1, '2011-05-18 18:03:55', 1),
(12, 1, '085279916229', 'ajsdfnajklsdnflkjasdnfkj', 5, '2011-05-18 18:23:51', 1),
(13, 0, '085721176190', 'sdfasd', 5, '2011-05-18 18:25:21', 1),
(14, 1, '085279916229', 'dftydtydrtyrty', 2, '2011-05-18 18:56:57', 1),
(15, 8, '08997773073', 'Maaf', 1, '2011-05-18 20:57:23', 1),
(16, 1, '085279916229', 'Fuck ', 5, '2011-05-20 23:19:40', 1),
(17, 3, '089662048911', 'asfasfasdfa', 2, '2011-05-20 23:21:20', 1),
(18, 3, '089662048911', 'uksdflksdkfsklfmskdmfksdmfsk;dmfklsdmfklsmdflksmdlkfmsdfks<br>sl;kdmfk;lsdmfk;lsdmflk;smdfs<br>df;smdf;klms;dklfms;dkmf;lksdmfk;lsdmfklsmdf<br>sdfksmdfkl;msdk;l', 1, '2011-05-21 00:38:37', 1),
(19, 3, '089662048911', 'fmsd;lkfms;ldmf;lskdmf;lksdmfk;lsmdfs<br>dfl;sdmfk;lsmd;fkmsd;klmfs;lkdmf;slkdmf;lksmdf;skldf<br>sdkflmsdk;lfmsk;ldmf;skldmf;lksdmf;slkdmfsd<br>', 1, '2011-05-21 00:38:37', 1),
(20, 3, '089662048911', 'opopopopopo<br>', 2, '2011-05-21 00:40:37', 1),
(21, 3, '089662048911', 'asdfasd', 2, '2011-05-21 00:42:02', 1),
(22, 3, '089662048911', 'asdfasdasdfasdf', 1, '2011-05-21 00:50:58', 1),
(23, 3, '089662048911', 'asd34tw er', 5, '2011-05-21 01:00:46', 1),
(24, 3, '089662048911', 'slkmfklamsfasdf', 1, '2011-05-21 01:18:30', 1),
(25, 3, '089662048911', 'kamsdkfmaksldfa', 1, '2011-05-21 01:18:37', 1),
(26, 3, '089662048911', 'asli lah , lapar', 2, '2011-05-21 02:08:44', 1),
(27, 3, '089662048911', 'asdfasdf asdfkmasdf asdfasdfas', 5, '2011-05-21 02:10:56', 1),
(29, 3, '089662048911', 'asdfasd', 6, '2011-05-21 02:12:29', 1),
(30, 1, '085279916229', 'asdfasdfasdfasdna sdfasdf a sdf as f asd fa sdf a sdf a dsf a sdf as df ads f a', 1, '2011-05-21 02:14:07', 1),
(31, 1, '085279916229', 'askdfkasdnlfjanlsdfn;lasdnflajsdnf;lajdnf<br>asdfnasdjfnalkjsdnfkjalsdnfkjansdklfjnsdfadsfjasdnfjlasdnfjlkansdjkfnads<br>fajsdnfljandfjandsjklfansdjfnas;djfands', 1, '2011-05-21 02:14:55', 1),
(32, 1, '085279916229', '<br>fajsdnfljasdnfl;jandfl;jansdfl;jnasdlfkjnasd;kfnasd<br>fajlsdnflja;sdnf;ljadnsf;jlaf;ansdlfjandslj;fnasd;lfnasd<br>falkdsnfl;asndflkansdf;klansd;lfkansd;lkf', 1, '2011-05-21 02:14:55', 1),
(33, 1, '085279916229', 'ads', 1, '2011-05-21 02:14:55', 1);

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
