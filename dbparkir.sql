-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2022 pada 12.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbparkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniskendaraan`
--

CREATE TABLE `jeniskendaraan` (
  `jenis_id` int(10) NOT NULL,
  `jeniskendaraan` varchar(150) NOT NULL,
  `status` enum('on','off') NOT NULL,
  `bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jeniskendaraan`
--

INSERT INTO `jeniskendaraan` (`jenis_id`, `jeniskendaraan`, `status`, `bayar`) VALUES
(1, 'Motor', 'on', 5000),
(2, 'Mobil', 'on', 5000),
(3, 'Sepeda', 'on', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `kendaraan_id` int(10) NOT NULL,
  `jenis_id` int(10) NOT NULL,
  `nomor_polisi` varchar(250) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` enum('Masuk','Keluar') NOT NULL,
  `stat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`kendaraan_id`, `jenis_id`, `nomor_polisi`, `waktu_masuk`, `waktu_keluar`, `harga`, `keterangan`, `stat`) VALUES
(112, 1, 'dawdoaw', '2022-12-17 14:45:37', '2022-12-17 14:45:46', 1, 'Keluar', 'pegawai'),
(113, 1, 'adwadad', '2022-12-17 14:51:58', '2022-12-17 14:52:00', 1, 'Keluar', 'pegawai'),
(114, 1, 'ttyvv', '2022-12-17 14:55:56', '2022-12-17 14:55:59', 1, 'Keluar', 'pegawai'),
(115, 1, 'dapwjddwa', '2022-12-17 15:07:04', '2022-12-17 15:17:57', 0, 'Keluar', 'pegawai'),
(116, 2, 'awdada', '2022-12-17 15:07:33', '2022-12-17 15:18:03', 0, 'Keluar', 'pegawai'),
(117, 1, 'qweqeq', '2022-12-17 15:09:15', '2022-12-17 15:10:01', 2, 'Keluar', 'pengunjung'),
(118, 1, 'awidaiwd', '2022-12-17 15:17:19', '2022-12-17 15:17:21', 750, 'Keluar', 'tamu'),
(119, 1, 'auwduawd', '2022-12-17 15:18:16', '2022-12-17 15:18:18', 5000, 'Keluar', 'pengunjung'),
(120, 1, 'dawda2', '2022-12-17 15:18:47', '2022-12-17 15:18:49', 750, 'Keluar', 'tamu'),
(121, 1, 'awdlkanwda', '2022-12-17 15:19:06', '2022-12-17 15:19:07', 5000, 'Keluar', 'pengunjung'),
(122, 1, 'awdawda', '2022-12-17 15:19:20', '2022-12-17 15:19:22', 0, 'Keluar', 'pegawai'),
(123, 1, 'AB 1234', '2022-12-17 16:36:31', '2022-12-18 00:51:47', 45000, 'Keluar', 'pengunjung'),
(124, 1, 'BE 6754', '2022-12-17 16:36:43', '0000-00-00 00:00:00', 0, 'Masuk', 'pegawai'),
(125, 2, 'KB 6754', '2022-12-17 16:39:50', '0000-00-00 00:00:00', 0, 'Masuk', 'pengunjung'),
(126, 2, 'DE 7865', '2022-12-17 16:39:58', '0000-00-00 00:00:00', 0, 'Masuk', 'tamu'),
(127, 1, 'DE 5290', '2022-12-17 16:40:17', '0000-00-00 00:00:00', 0, 'Masuk', 'pengunjung'),
(128, 2, 'DE 8710', '2022-12-17 16:41:27', '0000-00-00 00:00:00', 0, 'Masuk', 'pegawai'),
(129, 1, 'PB 8888', '2022-12-17 16:41:45', '0000-00-00 00:00:00', 0, 'Masuk', 'pengunjung'),
(130, 1, 'RE 5436', '2022-12-17 16:41:54', '0000-00-00 00:00:00', 0, 'Masuk', 'pengunjung'),
(131, 1, 'AB 1214 QS', '2022-12-18 00:48:15', '2022-12-18 00:48:20', 750, 'Keluar', 'tamu'),
(132, 2, '', '2022-12-18 16:23:23', '0000-00-00 00:00:00', 0, 'Masuk', ''),
(133, 2, '', '2022-12-18 16:23:26', '0000-00-00 00:00:00', 0, 'Masuk', ''),
(134, 2, '', '2022-12-18 16:23:27', '0000-00-00 00:00:00', 0, 'Masuk', ''),
(135, 3, 'wdawda', '2022-12-18 16:37:28', '2022-12-18 16:37:30', 0, 'Keluar', 'pegawai'),
(138, 3, 'awdawd', '2022-12-18 17:06:24', '0000-00-00 00:00:00', 0, 'Masuk', 'pengunjung'),
(139, 1, 'serser', '2022-12-18 18:10:14', '2022-12-18 18:10:18', 750, 'Keluar', 'tamu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'whops', '$2y$10$uXmsRbjvkdRs6Hzm95l35.m1Rm9I7uBvt9NMPoyN2VYHLgBxPWpFS'),
(8, 'admin', '$2y$10$15FJgcwxzpkYKkLKTrq1BuR/BuOOYNLlUr.Pe6Q1u3uFmD0TEnwbC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jeniskendaraan`
--
ALTER TABLE `jeniskendaraan`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`kendaraan_id`),
  ADD KEY `kategori_id` (`jenis_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jeniskendaraan`
--
ALTER TABLE `jeniskendaraan`
  MODIFY `jenis_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `kendaraan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `jeniskendaraan` (`jenis_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
