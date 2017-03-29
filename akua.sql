-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mar 2017 pada 19.11
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akunadmin`
--

CREATE TABLE IF NOT EXISTS `akunadmin` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `akunadmin`
--

INSERT INTO `akunadmin` (`id`, `email`, `password`, `nama`, `level`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chart`
--

CREATE TABLE IF NOT EXISTS `chart` (
  `id_investor` varchar(100) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `isi` varchar(5) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chart`
--

INSERT INTO `chart` (`id_investor`, `bulan`, `tahun`, `isi`, `type`) VALUES
('58d1585b30c15', 'Maret', '2017', '55', 'Harga'),
('58d1585b30c15', 'April', '2017', '57', 'Harga'),
('58d1585b30c15', 'Mei', '2017', '60', 'Harga'),
('58d1585b30c15', 'Maret', '2017', '45', 'Berat'),
('58d1585b30c15', 'April', '2017', '47', 'Berat'),
('58d1585b30c15', 'Mei', '2017', '50', 'Berat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_produk`
--

CREATE TABLE IF NOT EXISTS `detail_produk` (
`no_detail` int(11) NOT NULL,
  `id_investor` varchar(100) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_kambing` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `detail_produk`
--

INSERT INTO `detail_produk` (`no_detail`, `id_investor`, `id_produk`, `id_kambing`) VALUES
(1, '58d1585b30c15', 1, '58d15889ebb00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `investor`
--

CREATE TABLE IF NOT EXISTS `investor` (
  `id_investor` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `investor`
--

INSERT INTO `investor` (`id_investor`, `nama`, `ktp`, `alamat`, `kodepos`, `kontak`, `email`, `password`) VALUES
('58d1585b30c15', 'aldi', '089046045', 'kemanggisan', '11480', '0857604604', 'aldi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kambing`
--

CREATE TABLE IF NOT EXISTS `kambing` (
  `id_kambing` varchar(100) NOT NULL,
  `nama_kambing` varchar(100) NOT NULL,
  `id_investor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kambing`
--

INSERT INTO `kambing` (`id_kambing`, `nama_kambing`, `id_investor`) VALUES
('58d15889ebb00', 'Koala.jpg', '58d1585b30c15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `keterangan`, `foto_produk`, `status`, `harga`) VALUES
(1, 'Domba', 'Domba susu lahir di Finlandia, domba sangat mudah diurus dan makannya rumput basah', 'Produk1.png', 1, '3 juta sampai 5 juta'),
(2, 'Kambing', 'Kambing jawa lahir dipulau jawa, kambing sangat mudah dirawat dan makannya rumput kering', 'Produk2.png', 1, '1.5 juta sampai 5 juta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id_slider` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `foto`, `nama`) VALUES
(2, 'slide2.png', 'Domba Jantan'),
(3, 'slide3.png', 'Kambing Jantan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akunadmin`
--
ALTER TABLE `akunadmin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_produk`
--
ALTER TABLE `detail_produk`
 ADD PRIMARY KEY (`no_detail`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
 ADD PRIMARY KEY (`id_investor`);

--
-- Indexes for table `kambing`
--
ALTER TABLE `kambing`
 ADD PRIMARY KEY (`id_kambing`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akunadmin`
--
ALTER TABLE `akunadmin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_produk`
--
ALTER TABLE `detail_produk`
MODIFY `no_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
