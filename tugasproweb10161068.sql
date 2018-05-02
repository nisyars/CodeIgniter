-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2018 pada 15.06
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
-- Database: `tugasproweb10161068`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(8) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `TTL` date NOT NULL,
  `Kota_Asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `TTL`, `Kota_Asal`) VALUES
(10161016, 'Annisa Fardotilla', '1997-12-04', 'Balikpapan'),
(10161045, 'Indah Nur Rachmawati', '1998-01-19', 'Balikpapan'),
(10161056, 'Melinda Andriyati', '1998-05-01', 'Balikpapan'),
(10161057, 'Merinda Eka Nur Oviyani', '1998-05-25', 'Samarinda'),
(10161068, 'Nisya Rani Sabilla', '1998-08-05', 'Balikpapan'),
(10161075, 'Putri Larasati', '1998-02-06', 'Balikpapan'),
(10161078, 'Raydha Yulia', '1997-11-14', 'Balikpapan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
