-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 06:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(3) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kampanye`
--

CREATE TABLE `tb_kampanye` (
  `id_pemilihan` int(3) NOT NULL,
  `id_kandidat` int(3) NOT NULL,
  `id_pemilih` int(3) NOT NULL,
  `tanggal_pemilihan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kandidat`
--

CREATE TABLE `tb_kandidat` (
  `id_kandidat` int(3) NOT NULL,
  `no_urut` int(3) NOT NULL,
  `nama_kandidat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama_kandidat` varchar(255) NOT NULL,
  `nim_kandidat` varchar(255) NOT NULL,
  `visi_kandidat` text NOT NULL,
  `misi_kandidat` text NOT NULL,
  `pengalaman_organisasi` text NOT NULL,
  `pengalaman_kepanitiaan` text NOT NULL,
  `gambar_kandidat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kandidat`
--

INSERT INTO `tb_kandidat` (`id_kandidat`, `no_urut`, `nama_kandidat`, `tempat_lahir`, `tanggal_lahir`, `agama_kandidat`, `nim_kandidat`, `visi_kandidat`, `misi_kandidat`, `pengalaman_organisasi`, `pengalaman_kepanitiaan`, `gambar_kandidat`) VALUES
(2, 1, 'Mukidi Official', 'Sidoarjo', '2021-01-01', 'ateis', '111', 'Visi saya sangat bagus', 'Misi saya sangat bagus', 'Pengalaman Organisasi Banyak', 'Pengalaman Kepanitiaan juga banyak', 'ecea6842c519b2a1563735fdd565e810.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_panitia`
--

CREATE TABLE `tb_panitia` (
  `id_panitia` int(3) NOT NULL,
  `nama_panitia` varchar(255) NOT NULL,
  `divisi_panitia` varchar(255) NOT NULL,
  `email_panitia` varchar(255) NOT NULL,
  `username_panitia` varchar(255) NOT NULL,
  `password_panitia` varchar(255) NOT NULL,
  `status_panitia` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_panitia`
--

INSERT INTO `tb_panitia` (`id_panitia`, `nama_panitia`, `divisi_panitia`, `email_panitia`, `username_panitia`, `password_panitia`, `status_panitia`) VALUES
(1, 'wilky', 'psdm', 'wilky@gmail.com', 'wilwil', '123', 0),
(2, 'wilki', 'humas', 'humas@gmail.com', '123', '123', 1),
(3, 'rijal', 'menteri', 'ijal@gmail.com', 'ijal', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilih`
--

CREATE TABLE `tb_pemilih` (
  `id_pemilih` int(3) NOT NULL,
  `username_pemilih` varchar(255) NOT NULL,
  `password_pemilih` varchar(255) NOT NULL,
  `nama_pemilih` varchar(255) NOT NULL,
  `nim_pemilih` varchar(255) NOT NULL,
  `kelas_pemilih` varchar(255) NOT NULL,
  `semester_pemilih` varchar(255) NOT NULL,
  `alamat_pemilih` text NOT NULL,
  `email_pemilih` varchar(255) NOT NULL,
  `no_telp_pemilih` varchar(255) NOT NULL,
  `gambar_ktm` varchar(255) NOT NULL,
  `status_pemilih` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemilih`
--

INSERT INTO `tb_pemilih` (`id_pemilih`, `username_pemilih`, `password_pemilih`, `nama_pemilih`, `nim_pemilih`, `kelas_pemilih`, `semester_pemilih`, `alamat_pemilih`, `email_pemilih`, `no_telp_pemilih`, `gambar_ktm`, `status_pemilih`) VALUES
(1, 'qwerty', '12345678', 'Wilky Irawan ', '1234567891234234', 'TIK B', '4', 'aksndasdna', 'kaskdjakdak@aksjd.com', '123412341234', '97ac7fe15dceb2d1048394a1934456c5.jpg', 0),
(2, 'andjaajsdajdk', 'ajsdnajsds', 'deva', '12348992838', 'TIK C', '2', 'ajhdasjdhjadsh', 'aksjdakdjkj@kajskjd.cin', '293829392389', '16defb454b7950c4842defcc38b14817.jpg', 0),
(3, 'aaa', 'aaa', 'badru', '12091038138', 'TIK B', '3', 'aksjdaskd', 'kasjdkas@kasjd.com', '29823kasjd', 'bf80f1fd5184260565cc3193c62c73dd.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kampanye`
--
ALTER TABLE `tb_kampanye`
  ADD PRIMARY KEY (`id_pemilihan`);

--
-- Indexes for table `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `tb_pemilih`
--
ALTER TABLE `tb_pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kampanye`
--
ALTER TABLE `tb_kampanye`
  MODIFY `id_pemilihan` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  MODIFY `id_kandidat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  MODIFY `id_panitia` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pemilih`
--
ALTER TABLE `tb_pemilih`
  MODIFY `id_pemilih` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
