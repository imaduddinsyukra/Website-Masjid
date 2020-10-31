-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mei 2019 pada 09.47
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `nama`, `username`, `password`, `email`, `level`) VALUES
('189898989', 'Coba', '189898989', '60caacdd33bbc6da8e9ab4641bbecae6', 'coba@gmail.com', 'Admin'),
('232323', 'Kepala Lab', '232323', '2467d3744600858cc9026d5ac6005305', 'kalab@gmail.com', 'Kepala Lab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE IF NOT EXISTS `inventaris` (
`kd_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` varchar(3) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`kd_barang`, `nama_barang`, `jumlah`, `tgl_masuk`, `tgl_keluar`) VALUES
(1, 'kursi seminar', '100', '2019-05-01', '0000-00-00'),
(2, 'Meja Seminar', '200', '2019-05-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `email`, `username`, `password`) VALUES
('11553102661', 'Imaduddin Syukra', 'Sistem Informasi', 'imaduddinsykra@gmail.com', '11553102661', 'da4a91bdb50946ae2f6b1a670302b31d'),
('115531026612', 'Ferdian Hadi', 'Sistem Informasi', 'ferdi@gmail.com', '115531026612', 'b97a269001d8f82e21161830e771a96b'),
('123456789', 'Carlos Mandelas', 'Teknik Kimia', 'carlosganteng69@gmail.com', '123456789', '25f9e794323b453885f5181f1b624d0b'),
('696969696969', 'Assad Hidayatul', 'Teknik Informatika', 'assad69@gmail.com', '1155310210', '8d154da515bd9970cf00d59c541a0e12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembina`
--

CREATE TABLE IF NOT EXISTS `pembina` (
  `nip` varchar(20) NOT NULL,
  `nama_pembina` varchar(30) NOT NULL,
  `email_pembina` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembina`
--

INSERT INTO `pembina` (`nip`, `nama_pembina`, `email_pembina`) VALUES
('321', 'Taktuk', 'taktukenak@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
`kd_pinjam` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`kd_pinjam`, `nim`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, '11553102661', '2019-05-01', '2019-05-02', 'Pengajuan'),
(2, '123456789', '2019-05-01', '2019-05-02', 'Pengajuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE IF NOT EXISTS `pengembalian` (
`kd_pengembalian` int(11) NOT NULL,
  `kd_peminjaman` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_kembali` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian_peminjaman`
--

CREATE TABLE IF NOT EXISTS `rincian_peminjaman` (
`no` int(11) NOT NULL,
  `kd_pinjam` int(11) NOT NULL,
  `peminjaman` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rincian_peminjaman`
--

INSERT INTO `rincian_peminjaman` (`no`, `kd_pinjam`, `peminjaman`, `status`) VALUES
(1, 1, '1, 2, 3', 'Pengajuan'),
(2, 2, '2,3,4', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `kd_ruang` varchar(20) NOT NULL,
  `stat_ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`kd_ruang`, `stat_ruang`) VALUES
('FSTR1.1012', 'Availabled'),
('PSI105', 'Available'),
('PSI106', 'Available'),
('PSI212', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`nip`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
 ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pembina`
--
ALTER TABLE `pembina`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
 ADD PRIMARY KEY (`kd_pinjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
 ADD PRIMARY KEY (`kd_pengembalian`);

--
-- Indexes for table `rincian_peminjaman`
--
ALTER TABLE `rincian_peminjaman`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
 ADD PRIMARY KEY (`kd_ruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
MODIFY `kd_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
MODIFY `kd_pinjam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
MODIFY `kd_pengembalian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rincian_peminjaman`
--
ALTER TABLE `rincian_peminjaman`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
