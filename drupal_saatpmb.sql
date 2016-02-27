-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2016 at 04:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drupal_saatpmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_gelombang`
--

CREATE TABLE IF NOT EXISTS `saatpmb_gelombang` (
  `gelombang_id` int(11) NOT NULL AUTO_INCREMENT,
  `proper_id` int(11) NOT NULL,
  `gel_nama` int(11) NOT NULL,
  `gel_start` int(11) NOT NULL,
  `gel_end` int(11) NOT NULL,
  `input_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`gelombang_id`),
  KEY `proper_id` (`proper_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_hasiltest`
--

CREATE TABLE IF NOT EXISTS `saatpmb_hasiltest` (
  `hasiltest_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `mhs_noreg` int(11) NOT NULL,
  `hasil_nilai` int(11) NOT NULL,
  `hasil_status` int(11) NOT NULL,
  PRIMARY KEY (`hasiltest_id`),
  KEY `mhs_noreg` (`mhs_noreg`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_log`
--

CREATE TABLE IF NOT EXISTS `saatpmb_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_message` varchar(255) NOT NULL,
  `log_date` date NOT NULL,
  KEY `log_id` (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_mhs_regconfirm`
--

CREATE TABLE IF NOT EXISTS `saatpmb_mhs_regconfirm` (
  `proper_id` int(11) NOT NULL,
  `mhs_noreg` int(11) NOT NULL,
  `mhs_nama` varchar(255) NOT NULL,
  `mhs_panggilan` varchar(100) NOT NULL,
  `mhs_gender` varchar(20) NOT NULL,
  `mhs_tempatlahir` varchar(50) NOT NULL,
  `mhs_tgllahir` date NOT NULL,
  `mhs_imagefile` varchar(255) NOT NULL,
  `mhs_goldarah` char(5) NOT NULL,
  `mhs_alamat` varchar(255) NOT NULL,
  `mhs_kota` varchar(100) NOT NULL,
  `mhs_kodepos` varchar(20) NOT NULL,
  `mhs_telp` varchar(50) NOT NULL,
  `mhs_hp` varchar(50) NOT NULL,
  `mhs_email` varchar(50) NOT NULL,
  `mhs_warganegara` varchar(50) NOT NULL,
  `mhs_password` varchar(50) NOT NULL,
  `mhs_hash_confirm` varchar(100) NOT NULL,
  `mhs_gereja` varchar(255) NOT NULL,
  `mhs_tglkonfirmasi` date NOT NULL,
  PRIMARY KEY (`mhs_noreg`),
  KEY `proper_id` (`proper_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_mhs_regstart`
--

CREATE TABLE IF NOT EXISTS `saatpmb_mhs_regstart` (
  `seq` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_repeat` varchar(50) NOT NULL,
  `hash_confirm` varchar(100) NOT NULL,
  `input_date` datetime NOT NULL,
  PRIMARY KEY (`seq`),
  KEY `hash_confirm` (`hash_confirm`),
  KEY `email` (`email`),
  KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `saatpmb_mhs_regstart`
--

INSERT INTO `saatpmb_mhs_regstart` (`seq`, `name`, `email`, `password`, `password_repeat`, `hash_confirm`, `input_date`) VALUES
(1, 'Billy Charles Wagey', 'billy.wagey@gmail.com', 'beleey123', '', '1724190', '0000-00-00 00:00:00'),
(2, 'Bece', 'becewe@becewe.com', 'sss', 'sss', 'e0f75f486847036f1ebc4541b246cfd17a3bfb390ef7f6d6f8beaa5a3e258fb2e0930b565961983f59727f5a0b4a660d1207', '2016-02-22 07:14:44'),
(4, 'do', 'do@do.com', 'do', 'do', '72b0f93d2ff628539b129ac720afb2826aced28299ebcc059c4954bb1241f326a06ae28bbf19ab493785634b9bfae2216b6f', '2016-02-22 00:00:00'),
(5, 'test', 'test@tsat.asd', 'ahk', 'ahk', '18a38b5e379dcd9d223cae3740876fa1d3b10f6780ef8fbd78aa9f2b18790ead89ca2fab6adda192ceb77e844d21b9732057', '2016-02-22 07:09:57'),
(6, 'set', 'set@set.com', 'set', 'set', '6717b45c951cda1c98dc66771296feaeeccb5f1b70204001bee09df6194ae99a907c8a6f515bdbdff0be6f16a627071db33d', '2016-02-22 13:22:23'),
(8, 'bele', 'bele@bele.com', 'bele', 'bele', 'dfcc93b3cb9d8a46fdf2e62445ba590029bd1092ca9983e2b0ed064bc02e794761a9ea381e5d608101622e5961df530c05c6', '2016-02-23 13:30:28'),
(9, 'bb', 'bb@Bb.com', 'bb', 'bb', '9dceb0449f0fe245822d0bf81812919a24d1a80f0f4299cd368dac1cd8f27551d6838b7a7f1348a7abdd40bbb8c76a0ad444', '2016-02-23 13:47:25'),
(10, 'ok', 'ok@ok.ok', 'ok', 'ok', '21a8967baed1ea5e6765b475457b12b7c35e55453974196e7fa6ce46eef85bc9b0beb8e6bfb23065ef43f41008707ee83ff6', '2016-02-23 15:07:44'),
(11, 'rerera', 'erar@sdfsf.ghf', 'sdf', 'sdf', 'f5eb7a3e7f795049c5253b84474f7df6ec098568e0eb01970b666abc6fbef200a4568c012ea86aff250a3a6fc38b48e9f6ae', '2016-02-25 15:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_periode`
--

CREATE TABLE IF NOT EXISTS `saatpmb_periode` (
  `periode_id` int(11) NOT NULL AUTO_INCREMENT,
  `periode_name` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `status` smallint(6) NOT NULL COMMENT 'Active=1, Non=0',
  PRIMARY KEY (`periode_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `saatpmb_periode`
--

INSERT INTO `saatpmb_periode` (`periode_id`, `periode_name`, `tahun`, `status`) VALUES
(1, 'TA 2016/2017', 2016, 1);

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_prodi`
--

CREATE TABLE IF NOT EXISTS `saatpmb_prodi` (
  `prodi_id` int(11) NOT NULL AUTO_INCREMENT,
  `prodi_name` varchar(255) NOT NULL,
  `prodi_desc` text NOT NULL,
  PRIMARY KEY (`prodi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `saatpmb_prodi`
--

INSERT INTO `saatpmb_prodi` (`prodi_id`, `prodi_name`, `prodi_desc`) VALUES
(1, 'Sarjana Teologi - S.Th.', ''),
(2, 'Magister Divinitas - M.Div.', '');

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_prodiperiode`
--

CREATE TABLE IF NOT EXISTS `saatpmb_prodiperiode` (
  `proper_id` int(11) NOT NULL AUTO_INCREMENT,
  `periode_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`proper_id`),
  KEY `periode_id` (`periode_id`),
  KEY `prodi_id` (`prodi_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `saatpmb_prodiperiode`
--

INSERT INTO `saatpmb_prodiperiode` (`proper_id`, `periode_id`, `prodi_id`, `create_date`, `user_id`) VALUES
(1, 1, 1, '2016-02-27 10:00:00', 1),
(2, 1, 2, '2016-02-27 10:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `saatpmb_test`
--

CREATE TABLE IF NOT EXISTS `saatpmb_test` (
  `test_id` int(11) NOT NULL,
  `proper_id` int(11) NOT NULL,
  `test_nama` varchar(255) NOT NULL,
  `test_desc` text NOT NULL,
  PRIMARY KEY (`test_id`),
  KEY `proper_id` (`proper_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_hash` varchar(100) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `hash_confirm` varchar(100) NOT NULL,
  `active` smallint(6) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `password_hash`, `password_reset_token`, `auth_key`, `hash_confirm`, `active`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bcw', 'Billy Wagey', 'bcw@bcw.com', 'bcw', '$2y$13$syzVInja.94FTqGK9tWz6.qwItlVmQ4RPQEwH577DK5YtLUwMOYNG', '', '', '', 0, 10, 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `saatpmb_gelombang`
--
ALTER TABLE `saatpmb_gelombang`
  ADD CONSTRAINT `saatpmb_gelombang_ibfk_1` FOREIGN KEY (`proper_id`) REFERENCES `saatpmb_prodiperiode` (`proper_id`);

--
-- Constraints for table `saatpmb_hasiltest`
--
ALTER TABLE `saatpmb_hasiltest`
  ADD CONSTRAINT `saatpmb_hasiltest_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `saatpmb_test` (`test_id`),
  ADD CONSTRAINT `saatpmb_hasiltest_ibfk_2` FOREIGN KEY (`mhs_noreg`) REFERENCES `saatpmb_mhs_regconfirm` (`mhs_noreg`);

--
-- Constraints for table `saatpmb_mhs_regconfirm`
--
ALTER TABLE `saatpmb_mhs_regconfirm`
  ADD CONSTRAINT `proper_mhs` FOREIGN KEY (`proper_id`) REFERENCES `saatpmb_prodiperiode` (`proper_id`);

--
-- Constraints for table `saatpmb_prodiperiode`
--
ALTER TABLE `saatpmb_prodiperiode`
  ADD CONSTRAINT `saatpmb_prodiperiode_ibfk_1` FOREIGN KEY (`periode_id`) REFERENCES `saatpmb_periode` (`periode_id`),
  ADD CONSTRAINT `saatpmb_prodiperiode_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `saatpmb_prodi` (`prodi_id`),
  ADD CONSTRAINT `saatpmb_prodiperiode_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `saatpmb_test`
--
ALTER TABLE `saatpmb_test`
  ADD CONSTRAINT `saatpmb_test_ibfk_1` FOREIGN KEY (`proper_id`) REFERENCES `saatpmb_prodiperiode` (`proper_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
