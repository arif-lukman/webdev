-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2017 pada 09.02
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat_kantor`
--

CREATE TABLE IF NOT EXISTS `alamat_kantor` (
  `No` int(50) NOT NULL,
  `Office_Type` varchar(50) NOT NULL,
  `Primary_Office` varchar(30) NOT NULL,
  `Office_Address` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Province` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `ZIP_Code` int(20) NOT NULL,
  `Office_Phone_Number` int(12) NOT NULL,
  `Office_Fax_Number` int(20) NOT NULL,
  `Office_Email` varchar(50) NOT NULL,
  `Website` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alamat_kantor`
--

INSERT INTO `alamat_kantor` (`No`, `Office_Type`, `Primary_Office`, `Office_Address`, `Country`, `Province`, `City`, `ZIP_Code`, `Office_Phone_Number`, `Office_Fax_Number`, `Office_Email`, `Website`) VALUES
(4, 'Pusat', 'Kantor Utama', 'jalan barbarian no. jin circle swing. TA!! Hiaaaaa', 'Indonesia', 'Aceh', 'anak orang', 909234, 210498230, 23049823, 'mamakusayang@yahoo.com', 'www.musangitulucu.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pemilik`
--

CREATE TABLE IF NOT EXISTS `daftar_pemilik` (
  `No` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Civil_ID` int(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone_Number` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Share` int(50) NOT NULL,
  `Value` bigint(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_pemilik`
--

INSERT INTO `daftar_pemilik` (`No`, `Name`, `Civil_ID`, `Address`, `Phone_Number`, `Email`, `Share`, `Value`) VALUES
(3, 'aku adalah kamu yaa', 0, 'dimana ya! dihatiku??', 92323, 'ajadasld', 343, 3434),
(5, 'ka..kawaiii', 232434, 'asadadasda', 324234, 'sdfs', 34, 34),
(6, '', 0, '', 0, '', 0, 2147483647453535);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_rekening_bank`
--

CREATE TABLE IF NOT EXISTS `daftar_rekening_bank` (
  `No` int(50) NOT NULL,
  `Bank_Name` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Acc_Name` varchar(50) NOT NULL,
  `Acc_Number` int(50) NOT NULL,
  `Currency` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_rekening_bank`
--

INSERT INTO `daftar_rekening_bank` (`No`, `Bank_Name`, `Branch`, `Country`, `Acc_Name`, `Acc_Number`, `Currency`) VALUES
(6, 'Bank Negara Indonesia', 'utara', 'Indonesia', 'yura ikitsuki', 324, 'USD-Dolar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_administrasi`
--

CREATE TABLE IF NOT EXISTS `dokumen_administrasi` (
  `No` int(50) NOT NULL,
  `Document_Type` varchar(50) NOT NULL,
  `Document_Number` int(50) NOT NULL,
  `Issued_By` varchar(50) NOT NULL,
  `Issued_Date` date NOT NULL,
  `Expired_Date` date NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Attachment` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen_administrasi`
--

INSERT INTO `dokumen_administrasi` (`No`, `Document_Type`, `Document_Number`, `Issued_By`, `Issued_Date`, `Expired_Date`, `Description`, `Attachment`) VALUES
(1, 'Penetapan Perusahaan Kena Pajak', 123123, 'orang utan', '2017-02-17', '2017-02-26', 'siapa aja tolong aku ya', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keadaan_perusahaan`
--

CREATE TABLE IF NOT EXISTS `keadaan_perusahaan` (
  `No` int(50) NOT NULL,
  `Proses_Bangkrut` varchar(50) NOT NULL,
  `Pengawasan_Keadilan` varchar(50) NOT NULL,
  `Kegiatan_Usaha_Sedang_Dihentikan` varchar(50) NOT NULL,
  `Tuntutan` varchar(50) NOT NULL,
  `Sanksi_Hukum` varchar(50) NOT NULL,
  `Sanksi_K3S` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keadaan_perusahaan`
--

INSERT INTO `keadaan_perusahaan` (`No`, `Proses_Bangkrut`, `Pengawasan_Keadilan`, `Kegiatan_Usaha_Sedang_Dihentikan`, `Tuntutan`, `Sanksi_Hukum`, `Sanksi_K3S`) VALUES
(1, '', '', '', '', '', ''),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', ''),
(5, '', '', '', '', '', ''),
(6, '', '', '', '', '', ''),
(7, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(8, '', '', '', '', '', ''),
(9, '', '', '', '', '', ''),
(10, '', '', '', '', '', ''),
(11, '', '', '', '', '', ''),
(12, '', '', '', '', '', ''),
(13, '', '', '', '', '', ''),
(14, '', '', '', '', '', ''),
(15, '', '', '', '', '', ''),
(16, '', '', '', '', '', ''),
(17, '', '', '', '', '', ''),
(18, '', '', '', '', '', ''),
(19, '', '', '', '', '', ''),
(20, '', '', '', '', '', ''),
(21, '', '', '', '', '', ''),
(22, '', '', '', '', '', ''),
(23, '', '', '', '', '', ''),
(24, '', '', '', '', '', ''),
(25, '', '', '', '', '', ''),
(26, 'Yes', '', '', '', '', ''),
(27, '', '', '', '', '', ''),
(28, '', '', '', '', '', ''),
(29, '', '', '', '', '', ''),
(30, '', '', '', '', '', ''),
(31, '', '', '', '', '', ''),
(32, '', '', '', '', '', ''),
(33, '', '', '', '', '', ''),
(34, '', '', '', '', '', ''),
(35, '', '', '', '', '', ''),
(36, '', '', '', '', '', ''),
(37, '', '', '', '', '', ''),
(38, '', '', '', '', '', ''),
(39, '', '', '', '', '', ''),
(40, '', '', '', '', '', ''),
(41, '', '', '', '', '', ''),
(42, '', '', '', '', '', ''),
(43, '', '', '', '', '', ''),
(44, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi_perusahaan`
--

CREATE TABLE IF NOT EXISTS `klasifikasi_perusahaan` (
  `No` int(50) NOT NULL,
  `Activities_Section` varchar(30) NOT NULL,
  `Classification` varchar(50) NOT NULL,
  `Sub_Classification` varchar(30) NOT NULL,
  `Description` varchar(190) NOT NULL,
  `Attachment` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasifikasi_perusahaan`
--

INSERT INTO `klasifikasi_perusahaan` (`No`, `Activities_Section`, `Classification`, `Sub_Classification`, `Description`, `Attachment`) VALUES
(3, 'Indonesia', 'Indonesia', 'Indonesia', 'asdadasda', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_dan_tipe_perusahaan`
--

CREATE TABLE IF NOT EXISTS `nama_dan_tipe_perusahaan` (
  `No` int(250) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Company_Type` varchar(50) NOT NULL,
  `Company_Qualification` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nama_dan_tipe_perusahaan`
--

INSERT INTO `nama_dan_tipe_perusahaan` (`No`, `Company_Name`, `Company_Type`, `Company_Qualification`) VALUES
(1, 'UNRI', 'Perseroan Terbatas', 'Besar'),
(2, 'Aku orang utan', 'Koperasi', 'Menengah'),
(3, 'ka...kawaiii !', 'Lembaga', 'Besar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner_k3s`
--

CREATE TABLE IF NOT EXISTS `partner_k3s` (
  `No` int(30) NOT NULL,
  `K3S_Name` varchar(30) NOT NULL,
  `Contact_Name` varchar(30) NOT NULL,
  `Phone_Number` int(12) NOT NULL,
  `Fax_Number` int(12) NOT NULL,
  `Expired_Date` date NOT NULL,
  `Expiration_Days` date NOT NULL,
  `Attachment` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partner_k3s`
--

INSERT INTO `partner_k3s` (`No`, `K3S_Name`, `Contact_Name`, `Phone_Number`, `Fax_Number`, `Expired_Date`, `Expiration_Days`, `Attachment`) VALUES
(4, 'adaa AKU DISINI SAYANG', 'aaadadad', 213123123, 222111, '2017-02-24', '2017-02-09', ''),
(5, 'aku adalah lelaki', 'yang tak pernah lelah', 444123, 134134, '2017-02-10', '2017-02-28', ''),
(8, 'wwaaaahahahah ketawa saya', 'apa kau ketawa kawan', 12, 21212, '0000-00-00', '0000-00-00', ''),
(9, 'uvuwewewe', '3weq', 851222, 232323, '0000-00-00', '0000-00-00', ''),
(10, 'AHAHAHAHAH', 'kenapa kau ketawa', 234, 545, '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman_perusahaan`
--

CREATE TABLE IF NOT EXISTS `pengalaman_perusahaan` (
  `No` int(50) NOT NULL,
  `Project_Name` varchar(50) NOT NULL,
  `Activities_Section` varchar(50) NOT NULL,
  `Classification` varchar(50) NOT NULL,
  `Sub_Classification` varchar(50) NOT NULL,
  `User_Company` varchar(50) NOT NULL,
  `Contact_Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone_Number` int(12) NOT NULL,
  `Contact_Date` date NOT NULL,
  `Completion_Date` date NOT NULL,
  `Value` int(255) NOT NULL,
  `Sub_Value` varchar(20) NOT NULL,
  `Document_Number` bigint(100) NOT NULL,
  `Last_Progress` int(100) NOT NULL,
  `Attachment` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman_perusahaan`
--

INSERT INTO `pengalaman_perusahaan` (`No`, `Project_Name`, `Activities_Section`, `Classification`, `Sub_Classification`, `User_Company`, `Contact_Name`, `Address`, `Phone_Number`, `Contact_Date`, `Completion_Date`, `Value`, `Sub_Value`, `Document_Number`, `Last_Progress`, `Attachment`) VALUES
(3, 'aaaaaaaaaaa', 'Pengadaan Barang', 'Pengadaan Barang', 'Pengadaan Barang', 'dwq', 'wqeqw', 'wwerw', 8734873, '2017-02-15', '2017-02-16', 3434, 'Indonesia', 2334, 23, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan_induk_dan_rekanan`
--

CREATE TABLE IF NOT EXISTS `perusahaan_induk_dan_rekanan` (
  `No` int(50) NOT NULL,
  `Affiliate_Type` varchar(50) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Phone_Number` int(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Province` varchar(30) NOT NULL,
  `ZIP_Code` int(10) NOT NULL,
  `Fax_Number` int(10) NOT NULL,
  `Website` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan_induk_dan_rekanan`
--

INSERT INTO `perusahaan_induk_dan_rekanan` (`No`, `Affiliate_Type`, `Company_Name`, `Address`, `Country`, `City`, `Phone_Number`, `Email`, `Description`, `Province`, `ZIP_Code`, `Fax_Number`, `Website`) VALUES
(3, 'Perusahaan Induk', 'Company_Name', 'Address', 'Indonesia', 'waaa', 2323, 'ass', 'seeew', 'Indonesia', 2323, 5, 'yuyuyuang!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan_pembuat_barang`
--

CREATE TABLE IF NOT EXISTS `perusahaan_pembuat_barang` (
  `No` int(50) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Description` varchar(190) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan_pembuat_barang`
--

INSERT INTO `perusahaan_pembuat_barang` (`No`, `Product`, `Description`) VALUES
(3, 'awkarin', 'kalian suci aku penuh dosa'),
(4, 'younglex', 'makan bang makan kak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_dan_dokumen_pelengkap`
--

CREATE TABLE IF NOT EXISTS `surat_dan_dokumen_pelengkap` (
  `No` int(50) NOT NULL,
  `Supporting_Document_Type` varchar(50) NOT NULL,
  `Description` varchar(290) NOT NULL,
  `Attachment` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_dan_dokumen_pelengkap`
--

INSERT INTO `surat_dan_dokumen_pelengkap` (`No`, `Supporting_Document_Type`, `Description`, `Attachment`) VALUES
(2, 'Head Office', 'apa itu spongebob kak? benar', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keagenan`
--

CREATE TABLE IF NOT EXISTS `surat_keagenan` (
  `No` int(50) NOT NULL,
  `Distributor` varchar(50) NOT NULL,
  `Document_Number` int(50) NOT NULL,
  `Issued_By` varchar(50) NOT NULL,
  `Issued_Date` date NOT NULL,
  `Expired_Date` date NOT NULL,
  `Description` varchar(90) NOT NULL,
  `Attachment` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keagenan`
--

INSERT INTO `surat_keagenan` (`No`, `Distributor`, `Document_Number`, `Issued_By`, `Issued_Date`, `Expired_Date`, `Description`, `Attachment`) VALUES
(1, 'Agen Tunggal', 12213, 'tunggal?jomblo ya? kasian', '2017-02-02', '2017-02-07', 'aku tak tau aku dimana', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `susunan_pengurus`
--

CREATE TABLE IF NOT EXISTS `susunan_pengurus` (
  `No` int(50) NOT NULL,
  `Management_Type` varchar(50) NOT NULL,
  `Primary_Person` varchar(30) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Civil_ID` int(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone_Number` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `susunan_pengurus`
--

INSERT INTO `susunan_pengurus` (`No`, `Management_Type`, `Primary_Person`, `Position`, `Name`, `Civil_ID`, `Address`, `Phone_Number`, `Email`) VALUES
(3, 'Dewan Direksi', 'Pengurus Utama', 'guild master', 'felixx', 1221, 'jalan maya', 923408, 'aw'),
(4, 'Dewan Direksi', 'Pengurus Utama', 'guild master', 'felixx', 1221, 'jalan maya lunar knight', 923408, 'aw'),
(6, 'Dewan Direksi', '', 'guild master', 'felixx', 1221, 'jalan maya lunar knight ciaat hat hat hat', 923408, 'aw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, '123akbar', 'akbar123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_kantor`
--
ALTER TABLE `alamat_kantor`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `daftar_pemilik`
--
ALTER TABLE `daftar_pemilik`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `daftar_rekening_bank`
--
ALTER TABLE `daftar_rekening_bank`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `dokumen_administrasi`
--
ALTER TABLE `dokumen_administrasi`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `keadaan_perusahaan`
--
ALTER TABLE `keadaan_perusahaan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `klasifikasi_perusahaan`
--
ALTER TABLE `klasifikasi_perusahaan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `nama_dan_tipe_perusahaan`
--
ALTER TABLE `nama_dan_tipe_perusahaan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `partner_k3s`
--
ALTER TABLE `partner_k3s`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `pengalaman_perusahaan`
--
ALTER TABLE `pengalaman_perusahaan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `perusahaan_induk_dan_rekanan`
--
ALTER TABLE `perusahaan_induk_dan_rekanan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `perusahaan_pembuat_barang`
--
ALTER TABLE `perusahaan_pembuat_barang`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `surat_dan_dokumen_pelengkap`
--
ALTER TABLE `surat_dan_dokumen_pelengkap`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `surat_keagenan`
--
ALTER TABLE `surat_keagenan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `susunan_pengurus`
--
ALTER TABLE `susunan_pengurus`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat_kantor`
--
ALTER TABLE `alamat_kantor`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `daftar_pemilik`
--
ALTER TABLE `daftar_pemilik`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `daftar_rekening_bank`
--
ALTER TABLE `daftar_rekening_bank`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dokumen_administrasi`
--
ALTER TABLE `dokumen_administrasi`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `keadaan_perusahaan`
--
ALTER TABLE `keadaan_perusahaan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `klasifikasi_perusahaan`
--
ALTER TABLE `klasifikasi_perusahaan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nama_dan_tipe_perusahaan`
--
ALTER TABLE `nama_dan_tipe_perusahaan`
  MODIFY `No` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `partner_k3s`
--
ALTER TABLE `partner_k3s`
  MODIFY `No` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengalaman_perusahaan`
--
ALTER TABLE `pengalaman_perusahaan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `perusahaan_induk_dan_rekanan`
--
ALTER TABLE `perusahaan_induk_dan_rekanan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `perusahaan_pembuat_barang`
--
ALTER TABLE `perusahaan_pembuat_barang`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `surat_dan_dokumen_pelengkap`
--
ALTER TABLE `surat_dan_dokumen_pelengkap`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `surat_keagenan`
--
ALTER TABLE `surat_keagenan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `susunan_pengurus`
--
ALTER TABLE `susunan_pengurus`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
