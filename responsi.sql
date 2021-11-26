-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2021 pada 17.24
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tgl_datang` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `status_barang` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`kode_barang`, `nama_barang`, `jumlah`, `satuan`, `tgl_datang`, `kategori`, `status_barang`, `harga`) VALUES
('PMK', 'Paket Meja Kursi', 15, 'unit', '2019-12-12', 'Alat Tulis Kantor', 'Perawatan', 150000),
('GDG05', 'Gudang 5', 500, 'm^2', '2020-11-11', 'Bangunan', 'Rusak', 3000000),
('ASUVBM', 'Laptop ASUS VivoBook', 25, 'unit', '2020-10-10', 'Elektronik', 'Baik', 5000000),
('HNDV19', 'Honda Vario 2019', 5, 'unit', '2020-10-21', 'Kendaraan', 'Baik', 17000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`username`, `password`, `nama_lengkap`, `email`, `no_tlp`) VALUES
('marten', 'marten123', 'Marteen', 'marteeen@gmail.com', '085432101234'),
('fatin', 'fatin123', 'Fatin Lutfi Salman', 'fatinlutfisalman@gmail.com', '085432101235');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
