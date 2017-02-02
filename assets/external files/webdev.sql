-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Feb 2017 pada 08.45
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
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`, `time`) VALUES
(1, 'Tis'' a mocking thing', 'This is just a simple plain mocking object that used to mock coders.', '2017-01-26', '14:44:00'),
(2, 'Just a sample', '<p>Sample</p>\r\n<p style="text-align: center;">Sample</p>\r\n<p style="text-align: right;">Sample</p>\r\n<h1 style="text-align: left;">Heading 1</h1>\r\n<h2>Heading 2</h2>\r\n<h3>Heading 3</h3>\r\n<p><strong>bold</strong></p>\r\n<p><em>italic</em></p>\r\n<p><span style="text-decoration: underline;">underline</span></p>\r\n<p><span style="text-decoration: line-through;">strikethrough</span></p>\r\n<p>&nbsp;</p>', '2017-01-26', '14:44:00'),
(6, 'KUNJUNGAN INDUSTRI MAHASISWA TEKNIK GEOLOGI UIR KE LAPANGAN LANGGAK', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../assets/images/uploads/mceclip0.png" width="306" height="242" /></p>\r\n<p style="text-align: justify;">Pada tanggal 10 dan 11 Januari 2017, Lapangan Langgak mendapat kunjungan dari Mahasiswa Teknik Geologi UIR. Kunjungan ini bertujuan untuk menambah pengetahuan mahasiswa tentang kegiatan yang dilakukan oleh perusahan migas. Peserta kunjungan ini terdiri dari 28 orang mahasiswa yang mengambil pembidangan jurusan geologi migas dan 3 dosen pendamping. Mahasiswa ini berangkat dari Pekanbaru, berkumpul di Kantor Sarana Pembaunan Riau, dan mendapatkan pengarahan dan penjelasan mengenai geologi Pekanbaru dari Direktur Operasional PT SPR, Bapak Ahmiyul Rauf.</p>', '2017-01-30', '15:53:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sot_sprl`
--

CREATE TABLE `sot_sprl` (
  `ID` int(11) NOT NULL,
  `TGL` date NOT NULL,
  `GROSS_PROD` float NOT NULL,
  `NETT_PROD` float NOT NULL,
  `ALLOCATED_PROD` float NOT NULL,
  `EKSPOR_SPRL_DAILY` float NOT NULL,
  `EKSPOR_SPRL_CUM` float NOT NULL,
  `DOMESTIK_GOI_TANKER_DAILY` float NOT NULL,
  `DOMESTIK_GOI_TANKER_CUM` float NOT NULL,
  `DOMESTIK_GOI_PIPA_DAILY` float NOT NULL,
  `DOMESTIK_GOI_PIPA_CUM` float NOT NULL,
  `OPENING_TERMINAL` float NOT NULL,
  `OPENING_FIELD` float NOT NULL,
  `OWN_USE` float NOT NULL,
  `ENDING_TERMINAL` float NOT NULL,
  `ENDING_DEAD_TERMINAL` float NOT NULL,
  `ENDING_FIELD` float NOT NULL,
  `ENDING_DEAD_FIELD` float NOT NULL,
  `DUMAI_LOSS_GAIN` float NOT NULL,
  `BLANK_FIELD` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sot_sprl`
--

INSERT INTO `sot_sprl` (`ID`, `TGL`, `GROSS_PROD`, `NETT_PROD`, `ALLOCATED_PROD`, `EKSPOR_SPRL_DAILY`, `EKSPOR_SPRL_CUM`, `DOMESTIK_GOI_TANKER_DAILY`, `DOMESTIK_GOI_TANKER_CUM`, `DOMESTIK_GOI_PIPA_DAILY`, `DOMESTIK_GOI_PIPA_CUM`, `OPENING_TERMINAL`, `OPENING_FIELD`, `OWN_USE`, `ENDING_TERMINAL`, `ENDING_DEAD_TERMINAL`, `ENDING_FIELD`, `ENDING_DEAD_FIELD`, `DUMAI_LOSS_GAIN`, `BLANK_FIELD`) VALUES
(1, '2017-01-07', 7, 87, 89, 89, 0, 987, 796, 786, 87678, 678, 687, 56, 0, 567, 7, 0, 0, 5675),
(2, '2017-01-04', 390, 71823, 17236, 12637500, 5, 54, 64, 54, 5, 56, 587, 87, 0, 6546, 1233, 0, 0, 4564),
(3, '2017-01-05', 90909, 723, 865, 7657, 7654, 465, 56464, 765765, 6576, 54654, 765675, 7868, 0, 456, 456, 0, 0, 456),
(4, '2017-01-06', 780, 731, 6237, 16237, 612783, 126378, 56123, 516327, 56123, 123, 651, 127, 0, 7238, 38, 0, 0, 1233),
(5, '2017-01-12', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 2, 2, 0, 0, 2),
(6, '2017-01-14', 89, 37, 38, 893, 37, 36, 3738, 3782, 327, 3728, 3929, 3892, 4036, 3674, 6327, 3929, -51, 362);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'sprl1234');

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sot_sprl`
--
ALTER TABLE `sot_sprl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_proc`
--
ALTER TABLE `user_proc`
  ADD PRIMARY KEY (`id_proc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sot_sprl`
--
ALTER TABLE `sot_sprl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_proc`
--
ALTER TABLE `user_proc`
  MODIFY `id_proc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
