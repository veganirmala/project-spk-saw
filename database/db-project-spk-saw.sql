-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 02:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-project-spk-saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot_kriteria`
--

CREATE TABLE `tabel_bobot_kriteria` (
  `id_bobot` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `id_jenis_beasiswa` int(11) NOT NULL,
  `kriteria_ipk` float NOT NULL,
  `kriteria_prestasi` float NOT NULL,
  `kriteria_penghasilan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_bobot_kriteria`
--

INSERT INTO `tabel_bobot_kriteria` (`id_bobot`, `nim`, `id_usulan`, `id_jenis_beasiswa`, `kriteria_ipk`, `kriteria_prestasi`, `kriteria_penghasilan`) VALUES
(1, 1815323055, 4, 0, 30, 40, 30),
(2, 1815323056, 3, 4, 10, 40, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data_prestasi`
--

CREATE TABLE `tabel_data_prestasi` (
  `id_data_prestasi` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `id_jenis_prestasi` int(11) NOT NULL,
  `skor` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `id_jenis_beasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_data_prestasi`
--

INSERT INTO `tabel_data_prestasi` (`id_data_prestasi`, `nim`, `id_jenis_prestasi`, `skor`, `id_usulan`, `id_jenis_beasiswa`) VALUES
(6, 1815323055, 1, 7, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ipk`
--

CREATE TABLE `tabel_ipk` (
  `id_ipk` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `ipk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_ipk`
--

INSERT INTO `tabel_ipk` (`id_ipk`, `nim`, `ipk`) VALUES
(2, 1815323056, 3.8);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jenis_beasiswa`
--

CREATE TABLE `tabel_jenis_beasiswa` (
  `id_jenis_beasiswa` int(11) NOT NULL,
  `jenis_beasiswa` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_jenis_beasiswa`
--

INSERT INTO `tabel_jenis_beasiswa` (`id_jenis_beasiswa`, `jenis_beasiswa`) VALUES
(1, 'Swadana'),
(4, 'PPA');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jenis_prestasi`
--

CREATE TABLE `tabel_jenis_prestasi` (
  `id_jenis_prestasi` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jenis` varchar(256) NOT NULL,
  `tingkat` varchar(150) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_jenis_prestasi`
--

INSERT INTO `tabel_jenis_prestasi` (`id_jenis_prestasi`, `nama`, `jenis`, `tingkat`, `nilai`) VALUES
(1, 'Juara 1', 'Akademik', 'Kabupaten', 5),
(3, 'Juara 2', 'Akademik', 'Provinsi', 3),
(7, 'Juara 2', 'Non Akademik', 'Intern Kampus', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jurusan`
--

CREATE TABLE `tabel_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_jurusan`
--

INSERT INTO `tabel_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Elektro'),
(2, 'Teknik Mesin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jk_mhs` varchar(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `nama_ayah` varchar(256) NOT NULL,
  `pekerjaan_ayah` varchar(256) NOT NULL,
  `nama_ibu` varchar(256) NOT NULL,
  `pekerjaan_ibu` varchar(256) NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `penghasilan_ortu` int(11) NOT NULL,
  `nama_bank` varchar(25) NOT NULL,
  `norek_bank` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`nim`, `nama`, `jk_mhs`, `id_prodi`, `email`, `no_telp`, `alamat`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `tanggungan`, `penghasilan_ortu`, `nama_bank`, `norek_bank`, `semester`, `id_usulan`) VALUES
(1815323055, 'NI PUTU VEGA NIRMALA KANTI', 'Perempuan', 1, 'veganirmala31@gmail.com', 2147483647, 'SELAT, KARANGASEM', 'I MADE', 'PETANI', 'NI WAYAN RAYUNI', 'IRT', 3, 3000000, 'BRI', 2147483647, 1, 1),
(1815323056, 'aa', 'Laki-laki', 1, 'veganirmala08@gmail.com', 2147483647, 'SELAT, KARANGASEM', 'I MADE', 'PETANI', 'NI WAYAN', 'IRT', 3, 3000000, 'BRI', 2147483647, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_prodi`
--

CREATE TABLE `tabel_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(150) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_prodi`
--

INSERT INTO `tabel_prodi` (`id_prodi`, `nama_prodi`, `jenjang`, `id_jurusan`) VALUES
(1, 'Manajemen Informatika', 'D4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tahun_usulan`
--

CREATE TABLE `tabel_tahun_usulan` (
  `id_usulan` int(11) NOT NULL,
  `id_jenis_beasiswa` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_tahun_usulan`
--

INSERT INTO `tabel_tahun_usulan` (`id_usulan`, `id_jenis_beasiswa`, `tahun`, `kuota`) VALUES
(1, 0, 2020, 150),
(3, 4, 2020, 50),
(4, 1, 2020, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(256) NOT NULL,
  `email_user` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `jk_user` varchar(10) NOT NULL,
  `telp_user` varchar(256) NOT NULL,
  `alamat_user` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `email_user`, `password`, `jk_user`, `telp_user`, `alamat_user`) VALUES
(3, 'Ariska P', 'ariska99@gmail.com', '$2y$10$fUQVJ/d4IoFwz8wzjq732uABmJlpmWZThHNL6uPOBCk0MvRQODTLW', 'Laki-laki', '081339585876', 'Karangasem'),
(4, 'Vega N', 'vega12@gmail.com', '$2y$10$j3ld3kXVt//xe3xofFgNiuKCmCNiOo.9I.eR6/vfOFTWxGF01Gzu.', 'Perempuan', '081339585876', 'Karangasem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_bobot_kriteria`
--
ALTER TABLE `tabel_bobot_kriteria`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tabel_data_prestasi`
--
ALTER TABLE `tabel_data_prestasi`
  ADD PRIMARY KEY (`id_data_prestasi`);

--
-- Indexes for table `tabel_ipk`
--
ALTER TABLE `tabel_ipk`
  ADD PRIMARY KEY (`id_ipk`);

--
-- Indexes for table `tabel_jenis_beasiswa`
--
ALTER TABLE `tabel_jenis_beasiswa`
  ADD PRIMARY KEY (`id_jenis_beasiswa`);

--
-- Indexes for table `tabel_jenis_prestasi`
--
ALTER TABLE `tabel_jenis_prestasi`
  ADD PRIMARY KEY (`id_jenis_prestasi`);

--
-- Indexes for table `tabel_jurusan`
--
ALTER TABLE `tabel_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tabel_prodi`
--
ALTER TABLE `tabel_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tabel_tahun_usulan`
--
ALTER TABLE `tabel_tahun_usulan`
  ADD PRIMARY KEY (`id_usulan`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_bobot_kriteria`
--
ALTER TABLE `tabel_bobot_kriteria`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_data_prestasi`
--
ALTER TABLE `tabel_data_prestasi`
  MODIFY `id_data_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_ipk`
--
ALTER TABLE `tabel_ipk`
  MODIFY `id_ipk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_jenis_beasiswa`
--
ALTER TABLE `tabel_jenis_beasiswa`
  MODIFY `id_jenis_beasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_jenis_prestasi`
--
ALTER TABLE `tabel_jenis_prestasi`
  MODIFY `id_jenis_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_jurusan`
--
ALTER TABLE `tabel_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1815323057;

--
-- AUTO_INCREMENT for table `tabel_prodi`
--
ALTER TABLE `tabel_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_tahun_usulan`
--
ALTER TABLE `tabel_tahun_usulan`
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
