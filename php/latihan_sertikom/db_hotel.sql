-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 10.12
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Ariva Zweena', 'Zwn', '123'),
(2, 'Zweena', 'Arivau', '345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_kamar`
--

CREATE TABLE `tbl_jenis_kamar` (
  `id_kamar` int(11) NOT NULL,
  `jenis_kamar` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenis_kamar`
--

INSERT INTO `tbl_jenis_kamar` (`id_kamar`, `jenis_kamar`, `harga`, `keterangan`) VALUES
(2, 'nyaman', 10000, 'dingin'),
(3, 'mewah', 1000, 'bagus'),
(5, 'Standard Room', 800000, 'ruangan dengan 1 single bed'),
(6, 'Superior Room', 1500000, 'ada dapurnya'),
(7, 'Deluxe Room', 1800000, 'queen size bed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyewaan`
--

CREATE TABLE `tbl_penyewaan` (
  `id_sewa` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `cekin` date NOT NULL,
  `cekout` date NOT NULL,
  `no_identitas` int(20) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penyewaan`
--

INSERT INTO `tbl_penyewaan` (`id_sewa`, `id_kamar`, `nama`, `cekin`, `cekout`, `no_identitas`, `no_hp`, `id_admin`, `jumlah`, `total`) VALUES
(1, 3, 'Lonely wolf', '2024-05-15', '2024-05-22', 123456789, 987654321, 1, 4, 0),
(2, 2, 'j', '2024-05-22', '2024-05-30', 67, 89, 1, 6, 60000),
(3, 3, 'o', '2024-05-28', '2024-05-28', 67868, 6876, 1, 8, 8000),
(4, 3, 'Zweena', '2024-05-06', '2024-05-25', 3456, 65543, 1, 8, 8000),
(5, 7, 'Lorentza Ar', '2024-05-31', '2024-06-07', 1111112, 22222233, 1, 5, 9000000),
(6, 6, 'qwerty', '2024-05-14', '2024-05-21', 999, 777, 1, 2, 3000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tbl_penyewaan`
--
ALTER TABLE `tbl_penyewaan`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_kamar` (`id_kamar`,`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_penyewaan`
--
ALTER TABLE `tbl_penyewaan`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_penyewaan`
--
ALTER TABLE `tbl_penyewaan`
  ADD CONSTRAINT `tbl_penyewaan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`),
  ADD CONSTRAINT `tbl_penyewaan_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `tbl_jenis_kamar` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
