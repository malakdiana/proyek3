-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Okt 2019 pada 04.30
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ikm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif_industri` varchar(200) NOT NULL,
  `desa` varchar(200) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `tenaga_kerja` int(50) NOT NULL,
  `investasi` int(50) NOT NULL,
  `kapasitas_produksi` int(50) NOT NULL,
  `nilai_produksi` int(50) NOT NULL,
  `bahan_baku` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif_industri`, `desa`, `alias`, `tenaga_kerja`, `investasi`, `kapasitas_produksi`, `nilai_produksi`, `bahan_baku`) VALUES
(1, 'Bubut Kayu - Keswadi', 'Betet - Kasiman', 'A1', 9, 200000, 3000, 6000, 5000),
(2, 'Bubut Kayu - H. Suwito', 'Sambeng - Kasiman ', 'A2', 7, 180000, 2000, 8000, 6000),
(3, 'xxx', 'malang', 'A3', 10, 600000, 6000, 80000, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_alternatif`, `bobot`) VALUES
(1, 1, 0.20136666666667),
(2, 2, 0.18490666666667),
(3, 3, 0.61049333333333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `batas_max` varchar(50) NOT NULL,
  `kolom` varchar(255) NOT NULL,
  `eigen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `keterangan`, `batas_max`, `kolom`, `eigen`) VALUES
(1, 'C1', 'Tenaga Kerja', '19', 'tenaga_kerja', 0.068),
(2, 'C2', 'Nilai Investasi', '1000000000', 'investasi', 0.102),
(3, 'C3', 'Kapasitas Produksi', '6000', 'kapasitas_produksi', 0.308),
(4, 'C4', 'Nilai Produksi', '925000000', 'nilai_produksi', 0.356),
(5, 'C5', 'Nilai Bahan Baku', '198000', 'bahan_baku', 0.166);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_alternatif`
--

CREATE TABLE `kriteria_alternatif` (
  `id_kriteria_alternatif` int(20) NOT NULL,
  `id_kriteria` int(20) NOT NULL,
  `id_alternatif` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matriks_perbandingan`
--

CREATE TABLE `matriks_perbandingan` (
  `id_perbandingan` int(20) NOT NULL,
  `id_kriteria1` varchar(20) NOT NULL,
  `id_kriteria2` varchar(20) NOT NULL,
  `n_kriteria1` int(11) NOT NULL,
  `n_kriteria2` int(11) NOT NULL,
  `nilai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matriks_perbandingan`
--

INSERT INTO `matriks_perbandingan` (`id_perbandingan`, `id_kriteria1`, `id_kriteria2`, `n_kriteria1`, `n_kriteria2`, `nilai`) VALUES
(51, '1', '1', 1, 1, '1.00'),
(52, '1', '2', 1, 2, '0.50'),
(53, '1', '3', 1, 4, '0.25'),
(54, '1', '4', 1, 4, '0.25'),
(55, '1', '5', 1, 3, '0.33'),
(56, '2', '1', 2, 1, '2.00'),
(57, '2', '2', 1, 1, '1.00'),
(58, '2', '3', 1, 3, '0.33'),
(59, '2', '4', 1, 4, '0.25'),
(60, '2', '5', 1, 2, '0.50'),
(61, '3', '1', 4, 1, '4.00'),
(62, '3', '2', 3, 1, '3.00'),
(63, '3', '3', 1, 1, '1.00'),
(64, '3', '4', 1, 1, '1.00'),
(65, '3', '5', 2, 1, '2.00'),
(66, '4', '1', 4, 1, '4.00'),
(67, '4', '2', 4, 1, '4.00'),
(68, '4', '3', 1, 1, '1.00'),
(69, '4', '4', 1, 1, '1.00'),
(70, '4', '5', 3, 1, '3.00'),
(71, '5', '1', 3, 1, '3.00'),
(72, '5', '2', 2, 1, '2.00'),
(73, '5', '3', 1, 2, '0.50'),
(74, '5', '4', 1, 3, '0.33'),
(75, '5', '5', 1, 1, '1.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `eigen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_kriteria`, `id_alternatif`, `eigen`) VALUES
(1, 1, 1, 0.35),
(2, 1, 2, 0.27),
(3, 1, 3, 0.38),
(4, 2, 1, 0.2),
(5, 2, 2, 0.18),
(6, 2, 3, 0.61),
(7, 3, 1, 0.27),
(8, 3, 2, 0.18),
(9, 3, 3, 0.54666666666667),
(10, 4, 1, 0.063333333333333),
(11, 4, 2, 0.083333333333333),
(12, 4, 3, 0.85),
(13, 5, 1, 0.31),
(14, 5, 2, 0.38),
(15, 5, 3, 0.31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_alternatif`
--
ALTER TABLE `kriteria_alternatif`
  ADD PRIMARY KEY (`id_kriteria_alternatif`);

--
-- Indexes for table `matriks_perbandingan`
--
ALTER TABLE `matriks_perbandingan`
  ADD PRIMARY KEY (`id_perbandingan`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kriteria_alternatif`
--
ALTER TABLE `kriteria_alternatif`
  MODIFY `id_kriteria_alternatif` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matriks_perbandingan`
--
ALTER TABLE `matriks_perbandingan`
  MODIFY `id_perbandingan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
