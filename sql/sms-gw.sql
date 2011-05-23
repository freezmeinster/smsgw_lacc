-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2011 at 07:51 PM
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
  `status_aktif` tinyint(1) NOT NULL DEFAULT '1',
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `status_aktif`, `nama`, `no_telp`, `alamat`) VALUES
(1, 1, 'Bram 3', '089662048911', ''),
(2, 1, 'Bandar Bokep', '085721176190', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `status`, `tgl_buat`) VALUES
(1, 'Invasi', 1, '2011-04-24 00:57:51'),
(2, 'Undangan', 1, '2011-04-24 09:01:33'),
(5, 'Informasi', 1, '2011-04-24 10:03:41'),
(6, 'Tagihan', 1, '2011-04-25 20:48:45'),
(7, 'Lain nya', 1, '2011-05-22 14:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `note_kontak`
--

CREATE TABLE IF NOT EXISTS `note_kontak` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `id_kontak` int(11) NOT NULL,
  `isi_note` text NOT NULL,
  `waktu_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_aktif` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_note`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `note_kontak`
--

INSERT INTO `note_kontak` (`id_note`, `id_kontak`, `isi_note`, `waktu_buat`, `status_aktif`) VALUES
(2, 1, 'orang ini udah mau sih diajak bekerja sama . <br>Tapi katanya mau nanya orang tua dulu .<br><br>Trus mau ketemu di ITB katanya ', '2011-05-22 17:16:28', 1),
(3, 2, 'bandar bokep minta ketemu di surga<br>', '2011-05-22 19:50:07', 1);

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
  `id_kontak` int(11) DEFAULT NULL,
  `status_baca` tinyint(1) NOT NULL DEFAULT '0',
  `status_aktif` tinyint(1) NOT NULL DEFAULT '1',
  `no_kontak` varchar(20) NOT NULL,
  `isi_sms` text NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sms`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sms_inbox`
--

INSERT INTO `sms_inbox` (`id_sms`, `id_kontak`, `status_baca`, `status_aktif`, `no_kontak`, `isi_sms`, `id_kriteria`, `waktu_masuk`) VALUES
(1, 1, 1, 1, '089662048911', 'Hako', 5, '2011-05-22 16:11:14'),
(2, 1, 1, 1, '089662048911', 'Nama saya bram', 7, '2011-05-22 16:12:39'),
(3, 2, 1, 1, '085721176190', 'saya butuh wanita', NULL, '2011-05-22 19:42:17'),
(4, 2, 1, 1, '085721176190', 'yang mirip mirip aura kasih lah. Rada hot', NULL, '2011-05-22 19:43:30'),
(5, 2, 1, 1, '085721176190', 'nama saya bram. agak cepetan sedikit ya', 7, '2011-05-22 19:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `sms_kontak`
--

CREATE TABLE IF NOT EXISTS `sms_kontak` (
  `id_sms_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `id_sms` int(11) NOT NULL,
  `id_kontak` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `status_aktif` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_sms_kontak`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sms_kontak`
--

INSERT INTO `sms_kontak` (`id_sms_kontak`, `id_sms`, `id_kontak`, `id_kriteria`, `status_aktif`) VALUES
(1, 2, 1, 7, 1),
(2, 1, 1, 5, 1),
(3, 5, 2, 7, 1);

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
  `status_aktif` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_sms`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sms_outbox`
--

INSERT INTO `sms_outbox` (`id_sms`, `id_kontak`, `no_kontak`, `isi_sms`, `id_kriteria`, `waktu_masuk`, `status_kirim`, `status_aktif`) VALUES
(1, 1, '089662048911', 'maaf mas namanya siapa ya', 7, '2011-05-22 16:11:31', 1, 1),
(2, 0, '085721176190', 'fuck', 1, '2011-05-22 19:38:05', 1, 1),
(3, 2, '085721176190', 'Selamat malam , dengan layanan kamar disini . ada yang bisa saya bantu ?', 6, '2011-05-22 19:41:34', 1, 1),
(4, 2, '085721176190', 'yang kaya apa mas?', 5, '2011-05-22 19:42:37', 1, 1),
(5, 2, '085721176190', 'Ok deh , nanti saya cara yang rada mirip . BTW nama anda siap&nbsp; ya ? . Biar jelas nanti saya ngenter paket nya . hohohooh', 5, '2011-05-22 19:44:22', 1, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sms_template`
--


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
