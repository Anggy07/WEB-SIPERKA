-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Des 2017 pada 05.06
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bibit`
--

CREATE TABLE `bibit` (
  `id_pembibitan` int(11) NOT NULL,
  `tgl_pembibitan` varchar(20) NOT NULL,
  `nama_tanaman` varchar(20) NOT NULL,
  `id_lahan` int(11) NOT NULL,
  `id_tanaman` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bibit`
--

INSERT INTO `bibit` (`id_pembibitan`, `tgl_pembibitan`, `nama_tanaman`, `id_lahan`, `id_tanaman`, `status`) VALUES
(9, '1 juni 2018', 'kakao istimewa', 2, 7, 'proses dibibit'),
(11, '2 Mei 2017', 'kakao lezat', 6, 8, 'selesai dibibit'),
(12, '12 Juni 2017', 'kakao istimewa', 2, 7, 'proses dibibit'),
(13, '12 juli 2019', 'kakao super', 2, 7, 'selesai dibibit'),
(14, '20 agustus 2017', 'kakao super', 7, 7, 'belum diproses'),
(15, '31 juli 2017', 'kakao jumbo', 7, 9, 'selesai dibibit'),
(16, '12bjkj1', 'kakao istimewa', 4, 1, 'belum diproses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_panen` int(11) NOT NULL,
  `id_sektorgudang` int(11) NOT NULL,
  `tgl_masuk` varchar(20) NOT NULL,
  `tgl_keluar` varchar(20) NOT NULL,
  `vol_gudang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id_panen`, `id_sektorgudang`, `tgl_masuk`, `tgl_keluar`, `vol_gudang`) VALUES
(1, 13, '11 juni 2017', '12juli 2017', 2000),
(2, 15, '11 juni 2017', '11 juli 2017', 1000),
(3, 16, '11 juli 2017', '12 juli 2017', 800);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `id_tanaman` varchar(11) NOT NULL,
  `kondisi_daun` varchar(30) NOT NULL,
  `kondisi_bunga` varchar(30) NOT NULL,
  `kondisi_pohon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `id_tanaman`, `kondisi_daun`, `kondisi_bunga`, `kondisi_pohon`) VALUES
(1, '3', 'mengering, kuning', 'tidak ada', 'menjamur'),
(3, '1', 'kering', 'tidak ada', 'kecil'),
(5, '2', 'kering', 'bagus', 'rayap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lahan`
--

CREATE TABLE `lahan` (
  `id_lahan` int(11) NOT NULL,
  `nama_lahan` varchar(10) NOT NULL,
  `luas_lahan` int(3) NOT NULL,
  `ph_tanah` int(1) NOT NULL,
  `id_sektor` varchar(3) NOT NULL,
  `nama_sektor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lahan`
--

INSERT INTO `lahan` (`id_lahan`, `nama_lahan`, `luas_lahan`, `ph_tanah`, `id_sektor`, `nama_sektor`) VALUES
(2, 'lotus', 110, 7, 's2', 'mawar'),
(4, 'raksa', 300, 6, 's4', 'arabia'),
(7, 'mangga', 200, 7, 's3', 'apel'),
(8, 'melati', 120, 6, 's3', 'anggrek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `firstname`, `lastname`, `username`, `password`, `email`, `level`) VALUES
(2, 'anggy', 'blabala', 'admin', '123', 'anggy@gmail.com', 1),
(3, 'adi', 'nugroho', 'kebun', '123', 'ijlik@gmail.com', 2),
(4, 'dimas', 'ageng', 'kebun1', '123', 'jnjkb', 2),
(5, 'danang', 'prasetya', 'admin', '123', 'wqdq', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `panen`
--

CREATE TABLE `panen` (
  `id_panen` int(11) NOT NULL,
  `tgl_panen` varchar(20) NOT NULL,
  `jumlah_panen` int(11) NOT NULL,
  `id_tanaman` varchar(11) NOT NULL,
  `id_sektor` varchar(11) NOT NULL,
  `id_lahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panen`
--

INSERT INTO `panen` (`id_panen`, `tgl_panen`, `jumlah_panen`, `id_tanaman`, `id_sektor`, `id_lahan`) VALUES
(2, '21 mei 2017', 3000, '10', 's21', 6),
(3, '8 juni 2107', 2000, 't12', 's22', 11),
(4, '19 juni 2017', 1200, '4', 's1', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pupuk`
--

CREATE TABLE `pupuk` (
  `id_pemupukan` int(11) NOT NULL,
  `tgl_pemupukan` varchar(20) NOT NULL,
  `pupuk` varchar(20) NOT NULL,
  `vol_pupuk` int(11) NOT NULL,
  `id_lahan` int(11) NOT NULL,
  `id_tanaman` varchar(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pupuk`
--

INSERT INTO `pupuk` (`id_pemupukan`, `tgl_pemupukan`, `pupuk`, `vol_pupuk`, `id_lahan`, `id_tanaman`, `status`) VALUES
(4, '20 juli 2017', 'rondap', 12, 3, '3', 'selesai dipupuk'),
(5, '12 Januari 2018', 'urea', 30, 2, '3', 'selesai dipupuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `username`, `password`, `email`) VALUES
('admin', 'admin', 'admin', 'admin', 'anggyyolanda07@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nama_tanaman` varchar(20) NOT NULL,
  `jenis_tanaman` varchar(20) NOT NULL,
  `periode_tanaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanaman`
--

INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`, `jenis_tanaman`, `periode_tanaman`) VALUES
(1, 'kakao istimewa', 'super', '15'),
(7, 'kakao super', 'power', '10'),
(8, 'kakao lezat', 'kw super', '13'),
(9, 'kakao jumbo', 'power', '11'),
(11, 'wdd', 'wef', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bibit`
--
ALTER TABLE `bibit`
  ADD PRIMARY KEY (`id_pembibitan`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_sektorgudang`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD KEY `id_lahan` (`id_lahan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `panen`
--
ALTER TABLE `panen`
  ADD PRIMARY KEY (`id_panen`);

--
-- Indexes for table `pupuk`
--
ALTER TABLE `pupuk`
  ADD PRIMARY KEY (`id_pemupukan`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibit`
--
ALTER TABLE `bibit`
  MODIFY `id_pembibitan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_sektorgudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `panen`
--
ALTER TABLE `panen`
  MODIFY `id_panen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pupuk`
--
ALTER TABLE `pupuk`
  MODIFY `id_pemupukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
