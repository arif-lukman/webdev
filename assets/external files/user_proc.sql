-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2017 pada 10.08
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_proc`
--

CREATE TABLE `user_proc` (
  `id_proc` int(11) NOT NULL,
  `username_proc` varchar(20) NOT NULL,
  `password_proc` varchar(20) NOT NULL,
  `privilege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_proc`
--

INSERT INTO `user_proc` (`id_proc`, `username_proc`, `password_proc`, `privilege`) VALUES
(1, '123akbar', 'akbar123', 'user'),
(2, 'admin', 'sprlproc', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_proc`
--
ALTER TABLE `user_proc`
  ADD PRIMARY KEY (`id_proc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_proc`
--
ALTER TABLE `user_proc`
  MODIFY `id_proc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
