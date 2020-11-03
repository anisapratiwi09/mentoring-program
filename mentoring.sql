-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 03:49 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionplan`
--

CREATE TABLE `actionplan` (
  `id_actionplan` int(11) NOT NULL,
  `list` varchar(225) NOT NULL,
  `output` varchar(225) NOT NULL,
  `timeline` date NOT NULL,
  `pic` varchar(225) NOT NULL,
  `status` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `id_mentee` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actionplan`
--

INSERT INTO `actionplan` (`id_actionplan`, `list`, `output`, `timeline`, `pic`, `status`, `note`, `id_mentee`, `id_mentor`) VALUES
(2, 'Nisa ngegame mulu', 'epic come back', '2020-07-31', 'ML N', 'On Process', '', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `id_akun`) VALUES
(1, 'admin01', 1),
(2, 'admin02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(9) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `role`) VALUES
(1, 'admin01', '18c6d818ae35a3e8279b5330eda01498', 'admin'),
(2, 'admin02', '6e60a28384bc05fa5b33cc579d040c56', 'admin'),
(3, '111111111', '6d662f965d1e85bb367efaa03594c5a1', 'sdm'),
(4, '222222222', '23cbeacdea458e9ced9807d6cbe2f4d6', 'mentor'),
(5, '333333333', '4c0d07eab2ce912d12db2375f69d5152', 'mentee'),
(6, '444444444', '4c0d07eab2ce912d12db2375f69d5152', 'mentee'),
(7, '123456789', '123456789', 'mentee'),
(8, '123456543', '123456543', 'mentor'),
(9, '999999999', 'c8c605999f3d8352d7bb792cf3fdb25b', 'mentor'),
(10, '101010101', '8b01bd1f4531ea41ba3798b605293cf4', 'mentee'),
(11, '888888888', '134fb0bf3bdd54ee9098f4cbc4351b9a', 'mentor');

-- --------------------------------------------------------

--
-- Table structure for table `conten`
--

CREATE TABLE `conten` (
  `idPost` int(11) NOT NULL,
  `judulPost` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `date` date NOT NULL,
  `visibility` varchar(200) NOT NULL,
  `lampiranFile` varchar(255) NOT NULL,
  `linkForm` varchar(255) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conten`
--

INSERT INTO `conten` (`idPost`, `judulPost`, `deskripsi`, `date`, `visibility`, `lampiranFile`, `linkForm`, `gambar`) VALUES
(1, 'pergi ke hutan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-07-31', 'mentee', '', '', ''),
(2, 'mengumpulkan dosa', 'hayo siapa yg senang mengumpulkan dosa? mari bergabung', '2020-07-31', 'mentee', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contractagg`
--

CREATE TABLE `contractagg` (
  `id_contractAgg` int(11) NOT NULL,
  `pertama` varchar(100) NOT NULL,
  `kedua` varchar(100) NOT NULL,
  `ketiga` varchar(100) NOT NULL,
  `keempat` varchar(100) NOT NULL,
  `kelima` varchar(100) NOT NULL,
  `id_mentee` int(11) NOT NULL,
  `tgl_persetujuan_mentee` date NOT NULL,
  `tgl_persetujuan_mentor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractagg`
--

INSERT INTO `contractagg` (`id_contractAgg`, `pertama`, `kedua`, `ketiga`, `keempat`, `kelima`, `id_mentee`, `tgl_persetujuan_mentee`, `tgl_persetujuan_mentor`) VALUES
(15, '\"a,kkjj\"', '\"a,b,\"', '', 'a,', 'huhuh', 1, '2020-07-30', '2020-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `visibilitas` varchar(30) NOT NULL,
  `response` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_form`, `nama`, `tanggal`, `visibilitas`, `response`) VALUES
(1, 'Survey Kepuasan Mentoring', '2020-07-07', 'mentor/mentee', 10);

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id_goals` int(11) NOT NULL,
  `list_goals` varchar(255) NOT NULL,
  `id_mentee` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id_goals`, `list_goals`, `id_mentee`, `id_mentor`) VALUES
(1, 'punya mobil', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL,
  `nama_group` varchar(50) NOT NULL,
  `membership` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id_group`, `nama_group`, `membership`) VALUES
(1, 'MT-001', 2),
(3, 'MT-003', 3);

-- --------------------------------------------------------

--
-- Table structure for table `group_post`
--

CREATE TABLE `group_post` (
  `id_grupPost` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `posting` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_post`
--

INSERT INTO `group_post` (`id_grupPost`, `id_group`, `id_akun`, `nama`, `posting`, `created_at`, `updated_at`) VALUES
(8, 1, 4, 'Bella', 'halo harini kita ada pertemua ya jangan lupa check jadwal meeting', '2020-07-31 16:45:13', '0000-00-00 00:00:00'),
(9, 1, 4, 'Bella', 'apa kabar kalian', '2020-07-31 17:21:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `grup_comment`
--

CREATE TABLE `grup_comment` (
  `id_grupComment` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_grupPost` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup_comment`
--

INSERT INTO `grup_comment` (`id_grupComment`, `comment`, `id_akun`, `id_group`, `id_grupPost`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'diingat ya', 4, 1, 8, 'Bella', '2020-08-01 06:50:57', '0000-00-00 00:00:00'),
(2, 'baik', 4, 1, 9, 'Bella', '2020-08-01 06:51:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id_meeting` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL,
  `id_mentee` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `timestamp` datetime NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id_meeting`, `id_mentor`, `id_mentee`, `nama`, `deskripsi`, `timestamp`, `tanggal`, `waktu`, `status`) VALUES
(1, 1, 1, 'session 1', 'initial meetings', '2020-07-23 00:00:00', '2020-07-23', '17:00:00', 'Scheduled'),
(2, 1, 2, 'initial meeting', 'melakukan tahap awal', '2020-07-26 02:00:00', '2020-07-31', '00:06:00', 'Scheduled'),
(3, 1, 1, 'waaa', 'a', '0000-00-00 00:00:00', '2020-07-27', '01:54:00', 'none'),
(4, 1, 2, 'session 5', 'finish', '0000-00-00 00:00:00', '2020-07-30', '02:19:00', 'Scheduled');

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `id_mentee` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gelar` varchar(20) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jkelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jbtakhir` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `sosmed` varchar(255) NOT NULL,
  `nipp` varchar(9) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_sum` int(11) NOT NULL,
  `id_posisi` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_subProfile` int(11) NOT NULL,
  `id_contractAgg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`id_mentee`, `nama`, `gelar`, `nik`, `ttl`, `jkelamin`, `agama`, `jbtakhir`, `department`, `alamat`, `nohp`, `email`, `npwp`, `sosmed`, `nipp`, `cv`, `foto`, `id_akun`, `id_group`, `id_sum`, `id_posisi`, `id_pendidikan`, `id_subProfile`, `id_contractAgg`) VALUES
(1, 'Budi', '', '', '', '', '', 'SDM', '', '', '', 'Budiya@pelindo1.co.id', '', '', '333333333', '', '', 5, 1, 0, 0, 0, 0, 1),
(2, 'Jennie', '', '', '', '', '', 'Umum', '', '', '', 'JennieBP@pelindo1.co.id', '', '', '444444444', '', '', 6, 1, 0, 0, 0, 0, 0),
(3, 'tukiyem', 'M.Gosip', '123456789', '', '', '', '', '', '', '', '', '', '', '', '', '', 7, 1, 0, 0, 0, 0, 0),
(4, 'younglex', '', '', '', '', '', '', '', '', '', '', '', '', '101010101', '', '', 10, 3, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gelar` varchar(20) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jkelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jbtakhir` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `sosmed` varchar(255) NOT NULL,
  `nipp` varchar(9) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama`, `gelar`, `nik`, `ttl`, `jkelamin`, `agama`, `jbtakhir`, `department`, `alamat`, `nohp`, `email`, `npwp`, `sosmed`, `nipp`, `cv`, `foto`, `id_akun`, `id_group`, `id_sum`) VALUES
(1, 'Bella', 'S.pd', '123456789', 'sunda empire, 32/13/2000', 'perempuan', 'islam', '', '', '', '', '', '', '', '', '', '', 4, 1, 0),
(2, 'putri', 'M.pd', '888888888', '', '', '', 'Direksi 3', '', '', '', '', '', '', '888888888', '', '', 11, 5, 0),
(4, 'Juminten', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 9, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `visibilitas` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL DEFAULT 'None',
  `form` varchar(255) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `nama`, `tanggal`, `visibilitas`, `file`, `form`) VALUES
(1, 'Initial Meeting', '2020-07-08', 'Mentor/mentee', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sdm`
--

CREATE TABLE `sdm` (
  `id_sdm` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gelar` varchar(20) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jkelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jbtakhir` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `sosmed` varchar(255) NOT NULL,
  `nipp` varchar(9) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm`
--

INSERT INTO `sdm` (`id_sdm`, `nama`, `gelar`, `nik`, `ttl`, `jkelamin`, `agama`, `jbtakhir`, `alamat`, `nohp`, `email`, `npwp`, `sosmed`, `nipp`, `id_akun`) VALUES
(1, 'Ana Watson', '', '', '', '', '', 'SDM', '', '', 'Anawhat@pelindo1.co.id', '', '', '111111111', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subprofile_mentee`
--

CREATE TABLE `subprofile_mentee` (
  `id_subProfile` int(11) NOT NULL,
  `keahlian` text NOT NULL,
  `value` text NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `dream` text NOT NULL,
  `interest` text NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `univ` varchar(255) NOT NULL,
  `thn_lulus` int(11) NOT NULL,
  `jbtn_tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actionplan`
--
ALTER TABLE `actionplan`
  ADD PRIMARY KEY (`id_actionplan`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `FK_Admin` (`id_akun`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `conten`
--
ALTER TABLE `conten`
  ADD PRIMARY KEY (`idPost`);

--
-- Indexes for table `contractagg`
--
ALTER TABLE `contractagg`
  ADD PRIMARY KEY (`id_contractAgg`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id_goals`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `group_post`
--
ALTER TABLE `group_post`
  ADD PRIMARY KEY (`id_grupPost`);

--
-- Indexes for table `grup_comment`
--
ALTER TABLE `grup_comment`
  ADD PRIMARY KEY (`id_grupComment`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id_meeting`);

--
-- Indexes for table `mentee`
--
ALTER TABLE `mentee`
  ADD PRIMARY KEY (`id_mentee`),
  ADD KEY `FK_Mentee` (`id_akun`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`),
  ADD KEY `FK_Mentor` (`id_akun`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`id_sdm`),
  ADD KEY `FK_Sdm` (`id_akun`);

--
-- Indexes for table `subprofile_mentee`
--
ALTER TABLE `subprofile_mentee`
  ADD PRIMARY KEY (`id_subProfile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actionplan`
--
ALTER TABLE `actionplan`
  MODIFY `id_actionplan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `conten`
--
ALTER TABLE `conten`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contractagg`
--
ALTER TABLE `contractagg`
  MODIFY `id_contractAgg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id_goals` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group_post`
--
ALTER TABLE `group_post`
  MODIFY `id_grupPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `grup_comment`
--
ALTER TABLE `grup_comment`
  MODIFY `id_grupComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id_meeting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `id_mentee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sdm`
--
ALTER TABLE `sdm`
  MODIFY `id_sdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subprofile_mentee`
--
ALTER TABLE `subprofile_mentee`
  MODIFY `id_subProfile` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_Admin` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE;

--
-- Constraints for table `mentee`
--
ALTER TABLE `mentee`
  ADD CONSTRAINT `FK_Mentee` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE;

--
-- Constraints for table `mentor`
--
ALTER TABLE `mentor`
  ADD CONSTRAINT `FK_Mentor` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE;

--
-- Constraints for table `sdm`
--
ALTER TABLE `sdm`
  ADD CONSTRAINT `FK_Sdm` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
