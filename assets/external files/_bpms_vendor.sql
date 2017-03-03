-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mar 2017 pada 16.45
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_bpms_vendor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat_kantor`
--

CREATE TABLE `alamat_kantor` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attachment_dokumen_administrasi`
--

CREATE TABLE `attachment_dokumen_administrasi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filesize` int(11) NOT NULL,
  `data` longblob NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attachment_k3s`
--

CREATE TABLE `attachment_k3s` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filesize` int(11) NOT NULL,
  `data` longblob NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attachment_klasifikasi_perusahaan`
--

CREATE TABLE `attachment_klasifikasi_perusahaan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filesize` int(11) NOT NULL,
  `data` longblob NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attachment_pengalaman_perusahaan`
--

CREATE TABLE `attachment_pengalaman_perusahaan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filesize` int(11) NOT NULL,
  `data` longblob NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attachment_surat_dan_dokumen_pelengkap`
--

CREATE TABLE `attachment_surat_dan_dokumen_pelengkap` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filesize` int(11) NOT NULL,
  `data` longblob NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attachment_surat_keagenan`
--

CREATE TABLE `attachment_surat_keagenan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filesize` int(11) NOT NULL,
  `data` longblob NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pemilik`
--

CREATE TABLE `daftar_pemilik` (
  `No` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Civil_ID` int(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone_Number` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Share` int(50) NOT NULL,
  `Value` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_rekening_bank`
--

CREATE TABLE `daftar_rekening_bank` (
  `No` int(50) NOT NULL,
  `Bank_Name` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Acc_Name` varchar(50) NOT NULL,
  `Acc_Number` int(50) NOT NULL,
  `Currency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alamat_kantor`
--

CREATE TABLE `data_alamat_kantor` (
  `id_user` int(11) NOT NULL,
  `id_alamat_kantor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_daftar_pemilik`
--

CREATE TABLE `data_daftar_pemilik` (
  `id_user` int(11) NOT NULL,
  `id_daftar_pemilik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_daftar_rekening_bank`
--

CREATE TABLE `data_daftar_rekening_bank` (
  `id_user` int(11) NOT NULL,
  `id_rekening_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dokumen_administrasi`
--

CREATE TABLE `data_dokumen_administrasi` (
  `id_user` int(11) NOT NULL,
  `id_dokumen_administrasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_klasifikasi_perusahaan`
--

CREATE TABLE `data_klasifikasi_perusahaan` (
  `id_user` int(11) NOT NULL,
  `id_klasifikasi_perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_nama_dan_tipe_perusahaan`
--

CREATE TABLE `data_nama_dan_tipe_perusahaan` (
  `id_user` int(11) NOT NULL,
  `id_nama_dan_tipe_perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_partner_k3s`
--

CREATE TABLE `data_partner_k3s` (
  `id_user` int(11) NOT NULL,
  `id_k3s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengajuan`
--

CREATE TABLE `data_pengajuan` (
  `id_user` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengalaman_perusahaan`
--

CREATE TABLE `data_pengalaman_perusahaan` (
  `id_user` int(11) NOT NULL,
  `id_pengalaman_perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perusahaan_induk_dan_rekanan`
--

CREATE TABLE `data_perusahaan_induk_dan_rekanan` (
  `id_user` int(11) NOT NULL,
  `id_data_perusahaan_induk_dan_rekanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perusahaan_pembuat_barang`
--

CREATE TABLE `data_perusahaan_pembuat_barang` (
  `id_user` int(11) NOT NULL,
  `id_perusahaan_pembuat_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_surat_dan_dokumen_pelengkap`
--

CREATE TABLE `data_surat_dan_dokumen_pelengkap` (
  `id_user` int(11) NOT NULL,
  `id_surat_dan_dokumen_pelengkap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_surat_keagenan`
--

CREATE TABLE `data_surat_keagenan` (
  `id_user` int(11) NOT NULL,
  `id_surat_keagenan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_susunan_pengurus`
--

CREATE TABLE `data_susunan_pengurus` (
  `id_user` int(11) NOT NULL,
  `id_susunan_pengurus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_administrasi`
--

CREATE TABLE `dokumen_administrasi` (
  `No` int(50) NOT NULL,
  `Document_Type` varchar(50) NOT NULL,
  `Document_Number` int(50) NOT NULL,
  `Issued_By` varchar(50) NOT NULL,
  `Issued_Date` date NOT NULL,
  `Expired_Date` date NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Attachment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keadaan_perusahaan`
--

CREATE TABLE `keadaan_perusahaan` (
  `user_id` int(11) NOT NULL,
  `Proses_Bangkrut` tinyint(1) NOT NULL,
  `Pengawasan_Keadilan` tinyint(1) NOT NULL,
  `Kegiatan_Usaha_Sedang_Dihentikan` tinyint(1) NOT NULL,
  `Tuntutan` tinyint(1) NOT NULL,
  `Sanksi_Hukum` tinyint(1) NOT NULL,
  `Sanksi_K3S` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi_perusahaan`
--

CREATE TABLE `klasifikasi_perusahaan` (
  `No` int(50) NOT NULL,
  `Activities_Section` varchar(30) NOT NULL,
  `Classification` varchar(50) NOT NULL,
  `Sub_Classification` varchar(30) NOT NULL,
  `Description` varchar(190) NOT NULL,
  `Attachment` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_dan_tipe_perusahaan`
--

CREATE TABLE `nama_dan_tipe_perusahaan` (
  `No` int(250) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Company_Type` varchar(50) NOT NULL,
  `Company_Qualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner_k3s`
--

CREATE TABLE `partner_k3s` (
  `No` int(30) NOT NULL,
  `K3S_Name` varchar(30) NOT NULL,
  `Contact_Name` varchar(30) NOT NULL,
  `Phone_Number` int(12) NOT NULL,
  `Fax_Number` int(12) NOT NULL,
  `Expired_Date` date NOT NULL,
  `Expiration_Days` date NOT NULL,
  `Attachment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `No` int(11) NOT NULL,
  `Registration_Status` text NOT NULL,
  `Notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman_perusahaan`
--

CREATE TABLE `pengalaman_perusahaan` (
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
  `Attachment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan_induk_dan_rekanan`
--

CREATE TABLE `perusahaan_induk_dan_rekanan` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan_pembuat_barang`
--

CREATE TABLE `perusahaan_pembuat_barang` (
  `No` int(50) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Description` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_dan_dokumen_pelengkap`
--

CREATE TABLE `surat_dan_dokumen_pelengkap` (
  `No` int(50) NOT NULL,
  `Supporting_Document_Type` varchar(50) NOT NULL,
  `Description` varchar(290) NOT NULL,
  `Attachment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keagenan`
--

CREATE TABLE `surat_keagenan` (
  `No` int(50) NOT NULL,
  `Distributor` varchar(50) NOT NULL,
  `Document_Number` int(50) NOT NULL,
  `Issued_By` varchar(50) NOT NULL,
  `Issued_Date` date NOT NULL,
  `Expired_Date` date NOT NULL,
  `Description` varchar(90) NOT NULL,
  `Attachment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `susunan_pengurus`
--

CREATE TABLE `susunan_pengurus` (
  `No` int(50) NOT NULL,
  `Management_Type` varchar(50) NOT NULL,
  `Primary_Person` varchar(30) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Civil_ID` int(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone_Number` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `id_negara` int(11) NOT NULL,
  `id_propinsi` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `nama_perusahaan`, `id_negara`, `id_propinsi`, `email`, `password`) VALUES
(1, '123akbar', 'PT. Akbar Makmur', 1, 2, 'akbar@gmail.com', 'akbar123'),
(2, '123arif', 'PT. Arif Sejahtera', 2, 2, 'arif@gmail.com', 'arif123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_kantor`
--
ALTER TABLE `alamat_kantor`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `attachment_dokumen_administrasi`
--
ALTER TABLE `attachment_dokumen_administrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment_k3s`
--
ALTER TABLE `attachment_k3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment_klasifikasi_perusahaan`
--
ALTER TABLE `attachment_klasifikasi_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment_pengalaman_perusahaan`
--
ALTER TABLE `attachment_pengalaman_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment_surat_dan_dokumen_pelengkap`
--
ALTER TABLE `attachment_surat_dan_dokumen_pelengkap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment_surat_keagenan`
--
ALTER TABLE `attachment_surat_keagenan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `data_alamat_kantor`
--
ALTER TABLE `data_alamat_kantor`
  ADD PRIMARY KEY (`id_user`,`id_alamat_kantor`);

--
-- Indexes for table `data_daftar_pemilik`
--
ALTER TABLE `data_daftar_pemilik`
  ADD PRIMARY KEY (`id_user`,`id_daftar_pemilik`);

--
-- Indexes for table `data_daftar_rekening_bank`
--
ALTER TABLE `data_daftar_rekening_bank`
  ADD PRIMARY KEY (`id_user`,`id_rekening_bank`);

--
-- Indexes for table `data_dokumen_administrasi`
--
ALTER TABLE `data_dokumen_administrasi`
  ADD PRIMARY KEY (`id_user`,`id_dokumen_administrasi`);

--
-- Indexes for table `data_klasifikasi_perusahaan`
--
ALTER TABLE `data_klasifikasi_perusahaan`
  ADD PRIMARY KEY (`id_user`,`id_klasifikasi_perusahaan`);

--
-- Indexes for table `data_nama_dan_tipe_perusahaan`
--
ALTER TABLE `data_nama_dan_tipe_perusahaan`
  ADD PRIMARY KEY (`id_user`,`id_nama_dan_tipe_perusahaan`);

--
-- Indexes for table `data_partner_k3s`
--
ALTER TABLE `data_partner_k3s`
  ADD PRIMARY KEY (`id_user`,`id_k3s`);

--
-- Indexes for table `data_pengajuan`
--
ALTER TABLE `data_pengajuan`
  ADD PRIMARY KEY (`id_user`,`id_pengajuan`);

--
-- Indexes for table `data_pengalaman_perusahaan`
--
ALTER TABLE `data_pengalaman_perusahaan`
  ADD PRIMARY KEY (`id_user`,`id_pengalaman_perusahaan`);

--
-- Indexes for table `data_perusahaan_induk_dan_rekanan`
--
ALTER TABLE `data_perusahaan_induk_dan_rekanan`
  ADD PRIMARY KEY (`id_user`,`id_data_perusahaan_induk_dan_rekanan`);

--
-- Indexes for table `data_perusahaan_pembuat_barang`
--
ALTER TABLE `data_perusahaan_pembuat_barang`
  ADD PRIMARY KEY (`id_user`,`id_perusahaan_pembuat_barang`);

--
-- Indexes for table `data_surat_dan_dokumen_pelengkap`
--
ALTER TABLE `data_surat_dan_dokumen_pelengkap`
  ADD PRIMARY KEY (`id_user`,`id_surat_dan_dokumen_pelengkap`);

--
-- Indexes for table `data_surat_keagenan`
--
ALTER TABLE `data_surat_keagenan`
  ADD PRIMARY KEY (`id_user`,`id_surat_keagenan`);

--
-- Indexes for table `data_susunan_pengurus`
--
ALTER TABLE `data_susunan_pengurus`
  ADD PRIMARY KEY (`id_user`,`id_susunan_pengurus`);

--
-- Indexes for table `dokumen_administrasi`
--
ALTER TABLE `dokumen_administrasi`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `keadaan_perusahaan`
--
ALTER TABLE `keadaan_perusahaan`
  ADD PRIMARY KEY (`user_id`);

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
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
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
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attachment_dokumen_administrasi`
--
ALTER TABLE `attachment_dokumen_administrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attachment_k3s`
--
ALTER TABLE `attachment_k3s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attachment_klasifikasi_perusahaan`
--
ALTER TABLE `attachment_klasifikasi_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attachment_pengalaman_perusahaan`
--
ALTER TABLE `attachment_pengalaman_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attachment_surat_dan_dokumen_pelengkap`
--
ALTER TABLE `attachment_surat_dan_dokumen_pelengkap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attachment_surat_keagenan`
--
ALTER TABLE `attachment_surat_keagenan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_pemilik`
--
ALTER TABLE `daftar_pemilik`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_rekening_bank`
--
ALTER TABLE `daftar_rekening_bank`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen_administrasi`
--
ALTER TABLE `dokumen_administrasi`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `klasifikasi_perusahaan`
--
ALTER TABLE `klasifikasi_perusahaan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nama_dan_tipe_perusahaan`
--
ALTER TABLE `nama_dan_tipe_perusahaan`
  MODIFY `No` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partner_k3s`
--
ALTER TABLE `partner_k3s`
  MODIFY `No` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengalaman_perusahaan`
--
ALTER TABLE `pengalaman_perusahaan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perusahaan_induk_dan_rekanan`
--
ALTER TABLE `perusahaan_induk_dan_rekanan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perusahaan_pembuat_barang`
--
ALTER TABLE `perusahaan_pembuat_barang`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_dan_dokumen_pelengkap`
--
ALTER TABLE `surat_dan_dokumen_pelengkap`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keagenan`
--
ALTER TABLE `surat_keagenan`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `susunan_pengurus`
--
ALTER TABLE `susunan_pengurus`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
