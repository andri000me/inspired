-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 26 Jan 2020 pada 04.36
-- Versi Server: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_pasien`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `kode_dokter` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tgl_berobat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `id_pasien`, `kode_dokter`, `no_antrian`, `tgl_berobat`) VALUES
(5, 4, 2, 1, '2020-01-25'),
(6, 1, 2, 1, '2020-01-03'),
(7, 1, 2, 2, '2020-01-03'),
(8, 4, 2, 2, '2020-01-25'),
(9, 4, 3, 1, '2020-01-26'),
(10, 2, 2, 2, '2020-01-26'),
(11, 4, 4, 3, '2020-01-26'),
(12, 1, 4, 4, '2020-01-26'),
(13, 2, 2, 5, '2020-01-26'),
(14, 2, 2, 6, '2020-01-26'),
(15, 2, 2, 7, '2020-01-26'),
(16, 2, 2, 8, '2020-01-26'),
(17, 4, 2, 3, '2020-01-25'),
(18, 4, 2, 9, '2020-01-26'),
(19, 0, 2, 1, '2020-01-27'),
(20, 4, 2, 10, '2020-01-26'),
(21, 4, 2, 11, '2020-01-26'),
(22, 4, 2, 12, '2020-01-26'),
(23, 4, 2, 13, '2020-01-26'),
(24, 4, 2, 14, '2020-01-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dokter`
--

CREATE TABLE `data_dokter` (
  `no` int(20) NOT NULL,
  `nama_dokter` text NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `loket` int(11) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dokter`
--

INSERT INTO `data_dokter` (`no`, `nama_dokter`, `spesialis`, `loket`, `alamat`, `no_tlp`, `username`, `password`) VALUES
(2, 'Joko', 'Penyakit Dalam', 1, 'Jl. Warmasen', '2147483647', '', '0'),
(3, 'rio', 'THT', 2, 'asimas', '00808080080', '', '0'),
(4, 'khoirur rozaq', 'Penyakit Hati', 3, 'fdfdfdf1', '0867676', 'cahganteng', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `no` int(50) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl` date NOT NULL,
  `umur` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nama_org_tua` varchar(30) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`no`, `nama_pasien`, `tempat_lahir`, `tgl`, `umur`, `jenis_kelamin`, `alamat`, `pekerjaan`, `nama_org_tua`, `no_tlp`, `keterangan`, `username`, `password`) VALUES
(1, 'pasien12', 'dimana', '0000-00-00', '21', 'perempuan', 'asimas', 'bengkel', '', '', '', '', ''),
(2, 'pasien2', 'dimanasdf', '2020-01-24', '31', 'perempuan', 'sorong', 'tani', '', '', '', '', ''),
(3, 'pasien3', 'dimana3', '2020-01-14', '12', 'perempuan', 'aimas3', 'bengkel3', '', '', '', '', ''),
(4, 'rozaqku', 'dimana4', '0000-00-00', '42', 'perempuan', 'aimas4', 'bengkel4', '', '', '', 'pasienbaru4', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam_praktek`
--

CREATE TABLE `jam_praktek` (
  `no` int(11) NOT NULL,
  `kode_dokter` int(11) NOT NULL,
  `jam_mulai` varchar(128) NOT NULL,
  `jam_selesai` varchar(128) NOT NULL,
  `hari` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jam_praktek`
--

INSERT INTO `jam_praktek` (`no`, `kode_dokter`, `jam_mulai`, `jam_selesai`, `hari`) VALUES
(1, 2, '19.00', 'selesai', 'tiap hari'),
(2, 3, '11.00', 'selesai', 'tiap hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan_pasien`
--

CREATE TABLE `kunjungan_pasien` (
  `no` int(1) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_dokter` varchar(128) NOT NULL,
  `status_pelayanan` varchar(128) NOT NULL,
  `diagnosa` varchar(128) NOT NULL,
  `penanganan` varchar(128) NOT NULL,
  `biaya` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kunjungan_pasien`
--

INSERT INTO `kunjungan_pasien` (`no`, `user_name`, `no_antrian`, `tanggal`, `kode_dokter`, `status_pelayanan`, `diagnosa`, `penanganan`, `biaya`) VALUES
(1, 'pasienbaru4', 2, '2020-01-09', '2', 'dibatalkan', '', '', ''),
(2, 'pasienbaru4', 2, '2020-01-09', '2', 'dibatalkan', '', '', ''),
(3, 'pasienbaru4', 3, '2020-01-09', '2', 'dibatalkan', '', '', ''),
(4, 'pasienbaru4', 2, '2020-01-09', '2', 'dibatalkan', '', '', ''),
(5, 'pasienbaru4', 1, '2020-01-09', '3', 'menunggu', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomorantrian`
--

CREATE TABLE `nomorantrian` (
  `id` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `loket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nomorantrian`
--

INSERT INTO `nomorantrian` (`id`, `nomor`, `loket`) VALUES
(241, 0, 1),
(242, 0, 2),
(243, 0, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tgl_berobat` date NOT NULL,
  `diagnosa` varchar(150) NOT NULL,
  `terapi` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `id_pasien`, `id_dokter`, `tgl_berobat`, `diagnosa`, `terapi`) VALUES
(1, 2, 2, '2020-01-26', 'dkjkdjd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jam_praktek`
--
ALTER TABLE `jam_praktek`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kunjungan_pasien`
--
ALTER TABLE `kunjungan_pasien`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomorantrian`
--
ALTER TABLE `nomorantrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `data_dokter`
--
ALTER TABLE `data_dokter`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jam_praktek`
--
ALTER TABLE `jam_praktek`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kunjungan_pasien`
--
ALTER TABLE `kunjungan_pasien`
  MODIFY `no` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nomorantrian`
--
ALTER TABLE `nomorantrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
