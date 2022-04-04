-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2022 pada 11.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahadi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_207`
--

CREATE TABLE `tbl_207` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `Asal` varchar(25) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_207`
--

INSERT INTO `tbl_207` (`id_mhs`, `nim`, `nama`, `Asal`, `prodi`) VALUES
(1, '200411100207', 'Rahadi Sudipta', 'Bangkalan', 'Teknik Informatika'),
(2, '200411100199', 'Muhammad Adam', 'Sumenep', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_207`
--
ALTER TABLE `tbl_207`
  ADD PRIMARY KEY (`id_mhs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
