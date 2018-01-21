-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2018 at 09:55 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_yii_gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `lampu`
--

CREATE TABLE `lampu` (
  `id_lampu` varchar(20) NOT NULL,
  `rayon_id` varchar(20) DEFAULT NULL,
  `lampu_id` varchar(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` text,
  `jenis_lmpu` varchar(255) DEFAULT NULL,
  `watt` int(11) DEFAULT NULL,
  `daya` int(11) DEFAULT NULL,
  `lat` text,
  `long` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampu`
--

INSERT INTO `lampu` (`id_lampu`, `rayon_id`, `lampu_id`, `nama`, `gambar`, `jenis_lmpu`, `watt`, `daya`, `lat`, `long`) VALUES
('222', '1', '02111', '80', 'Screenshot from 2018-01-11 00-50-59.png', '90', 90, 90, NULL, NULL),
('777', '7878778', '02111', '90', 'Screenshot from 2018-01-11 00-50-59.png', '90', 90, 90, NULL, NULL),
('9000', '1', '02111', 'pppp', 'Screenshot from 2018-01-11 00-53-48.png', '90', 800, 90, '90', '90');

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` varchar(20) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `lad` text,
  `long` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rayon`
--

INSERT INTO `rayon` (`id_rayon`, `nama`, `lad`, `long`) VALUES
('1', 'Timur', '11111', '11111'),
('7878778', 'dsfdfsdfsd', '111111111111', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `trafo`
--

CREATE TABLE `trafo` (
  `id_trafo` varchar(20) NOT NULL,
  `id_rayon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('non_meterisasi','meterisasi','rusak','legal') NOT NULL,
  `lat` text NOT NULL,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trafo`
--

INSERT INTO `trafo` (`id_trafo`, `id_rayon`, `alamat`, `status`, `lat`, `log`) VALUES
('02111', '1', 'asasas', 'non_meterisasi', '0.11111', '1111.1111');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_staff` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `role` enum('administrator','pegawai','pemimpin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `username`, `password`, `nama_staff`, `email`, `telepon`, `role`) VALUES
(1, 'aisah', 'aisah', 'aisha fitri', 'aishafitri@gmail.com', '081211211', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lampu`
--
ALTER TABLE `lampu`
  ADD PRIMARY KEY (`id_lampu`);

--
-- Indexes for table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id_rayon`);

--
-- Indexes for table `trafo`
--
ALTER TABLE `trafo`
  ADD PRIMARY KEY (`id_trafo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
