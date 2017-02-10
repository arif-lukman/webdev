-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Feb 2017 pada 13.27
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_bpms_master`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `_admin`
--

CREATE TABLE `_admin` (
  `_id` int(11) NOT NULL,
  `_username` text NOT NULL,
  `_fullname` text NOT NULL,
  `_email` text NOT NULL,
  `_password` text NOT NULL,
  `_group_id` text NOT NULL,
  `_status` tinyint(1) NOT NULL,
  `_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_admin`
--

INSERT INTO `_admin` (`_id`, `_username`, `_fullname`, `_email`, `_password`, `_group_id`, `_status`, `_desc`) VALUES
(1, 'admin', 'Administrator', 'admin@gmail.com', 'as', '1', 1, 'ini admin, ini form, ugh admin form'),
(3, 'kos', 'kos', 'kos@kos.com', 'kos', '4', 0, '1'),
(4, 'arif', 'arif', 'arif@yahoo.com', 'arif', '1', 1, 'arif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_affil_type`
--

CREATE TABLE `_affil_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_affil_type`
--

INSERT INTO `_affil_type` (`_id`, `_kode`, `_judul`, `_order`, `_status`) VALUES
(1, 'PI', 'Perusahaan Induk', 1, 1),
(2, 'GP', 'Grup Perusahaan', 2, 1),
(3, 'RK', 'Rekanan', 3, 1),
(4, 'KNS', 'Konsorsium', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_bank`
--

CREATE TABLE `_bank` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_bank`
--

INSERT INTO `_bank` (`_id`, `_kode`, `_nama`, `_order`, `_status`) VALUES
(1, 'BNI', 'Bank Negara Indonesia', 1, 1),
(2, 'BRI', 'Bank Rakyat Indonesia', 2, 1),
(3, 'DAN', 'Danamon', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_class_type`
--

CREATE TABLE `_class_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_kelas` text NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_class_type`
--

INSERT INTO `_class_type` (`_id`, `_kode`, `_judul`, `_order`, `_kelas`, `_status`) VALUES
(1, 'A01', 'Ekplorasi, Produksi dan Pengolangan Lanjutan', 1, 'Bidang', 1),
(2, 'A0101', 'Peralatan/suku cadang pemboran, eksplorasi dan produksi', 2, 'Sub Bidang', 1),
(3, 'A02', 'Kelas 2', 3, 'Bidang', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_company_type`
--

CREATE TABLE `_company_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_company_type`
--

INSERT INTO `_company_type` (`_id`, `_kode`, `_judul`, `_order`, `_status`) VALUES
(1, 'PT', 'Perseroan Terbatas', 1, 1),
(2, 'CV', 'Persekutuan Komanditer', 2, 1),
(3, 'Koperasi', 'Koperasi', 3, 1),
(4, 'Lembaga', 'Lembaga', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_country`
--

CREATE TABLE `_country` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_country`
--

INSERT INTO `_country` (`_id`, `_kode`, `_nama`, `_order`, `_status`) VALUES
(1, 'INA', 'Indonesia', 1, 1),
(2, 'MLY', 'Malaysia', 2, 1),
(3, 'USA', 'Amerika', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_currency`
--

CREATE TABLE `_currency` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_currency`
--

INSERT INTO `_currency` (`_id`, `_kode`, `_nama`, `_order`, `_status`) VALUES
(1, 'IDR', 'Rupiah', 1, 1),
(2, 'MYR', 'Ringgit', 2, 1),
(3, 'USD', 'Dollar Amerika', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_distributor`
--

CREATE TABLE `_distributor` (
  `_id` int(11) NOT NULL,
  `_nama` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_distributor`
--

INSERT INTO `_distributor` (`_id`, `_nama`, `_order`, `_status`) VALUES
(1, 'Agen Tunggal', 1, 1),
(2, 'Agen', 2, 1),
(3, 'Agen Ganda', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_docplus_type`
--

CREATE TABLE `_docplus_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_docplus_type`
--

INSERT INTO `_docplus_type` (`_id`, `_kode`, `_judul`, `_order`, `_status`) VALUES
(1, 'SMK3', 'SMK3', 1, 1),
(2, 'Jamsostek', 'JMS', 2, 1),
(3, 'SILO', 'SILO', 3, 1),
(4, 'TBH', 'Tambahan', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_document_type`
--

CREATE TABLE `_document_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_document_type`
--

INSERT INTO `_document_type` (`_id`, `_kode`, `_judul`, `_order`, `_status`) VALUES
(1, 'AKT', 'Akte Pendirian Perusahaan (AKT)', 1, 1),
(2, 'SK-MKH', 'SK Menteri Kehakiman dan HAM (SK-MKH)', 2, 1),
(3, 'SIUP', 'Surat Ijin Usaha Perusahaan (SIUP)', 3, 1),
(4, 'MENG', 'Dokumen Biasa', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_expiry_cfg`
--

CREATE TABLE `_expiry_cfg` (
  `_doc_id` int(11) NOT NULL,
  `_expiry_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_general_cfg`
--

CREATE TABLE `_general_cfg` (
  `_id` int(11) NOT NULL,
  `_nama_app` text NOT NULL,
  `_desc` text NOT NULL,
  `_email_1` text NOT NULL,
  `_email_2` text NOT NULL,
  `_email_proc` text NOT NULL,
  `_ttd_skt` text NOT NULL,
  `_footer_txt` text NOT NULL,
  `_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_general_cfg`
--

INSERT INTO `_general_cfg` (`_id`, `_nama_app`, `_desc`, `_email_1`, `_email_2`, `_email_proc`, `_ttd_skt`, `_footer_txt`, `_img`) VALUES
(1, 'aksjdadknl', 'hggiugiiha', 'oihoh@gmail.com', 'asep@gmail.com', 'asep@gmail.com', 'ajshdahdosh', 'ashdoahsdoh', 'Wisata Alam.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_group_priv`
--

CREATE TABLE `_group_priv` (
  `_id` int(11) NOT NULL,
  `_name` text NOT NULL,
  `_view` tinyint(1) NOT NULL,
  `_add` tinyint(1) NOT NULL,
  `_edit` tinyint(1) NOT NULL,
  `_delete` tinyint(1) NOT NULL,
  `_setting` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_group_priv`
--

INSERT INTO `_group_priv` (`_id`, `_name`, `_view`, `_add`, `_edit`, `_delete`, `_setting`) VALUES
(1, 'Admin', 1, 1, 1, 1, 1),
(2, 'Data Entry', 1, 1, 0, 0, 0),
(3, 'Viewer', 1, 0, 0, 0, 0),
(4, 'Editor', 1, 0, 1, 0, 0),
(5, 'Procurement', 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_manager_type`
--

CREATE TABLE `_manager_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_manager_type`
--

INSERT INTO `_manager_type` (`_id`, `_kode`, `_judul`, `_order`, `_status`) VALUES
(1, 'BOD', 'Dewan Direksi', 1, 1),
(2, 'BOC', 'Dewan Komisaris', 2, 1),
(3, 'BOM', 'DUARRR', 3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_office_type`
--

CREATE TABLE `_office_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_office_type`
--

INSERT INTO `_office_type` (`_id`, `_kode`, `_judul`, `_order`, `_status`) VALUES
(1, 'KP', 'Kantor Pusat', 1, 1),
(2, 'BO', 'Kantor Cabang', 2, 1),
(3, 'RO', 'Kantor Perwakilan', 3, 1),
(4, 'SO', 'Special Operator', 4, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_province`
--

CREATE TABLE `_province` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_province`
--

INSERT INTO `_province` (`_id`, `_kode`, `_nama`, `_order`, `_status`) VALUES
(1, 'ID-AC', 'Aceh', 1, 1),
(2, 'ID-BA', 'Bali', 2, 1),
(3, 'HB-HC', 'Jawa Utara', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_qual_type`
--

CREATE TABLE `_qual_type` (
  `_id` int(11) NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_qual_type`
--

INSERT INTO `_qual_type` (`_id`, `_judul`, `_order`, `_status`) VALUES
(1, 'Besar', 1, 1),
(2, 'Kecil', 3, 1),
(3, 'Menengah', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_regist_cfg`
--

CREATE TABLE `_regist_cfg` (
  `_judul` text NOT NULL,
  `_desc` text NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_regist_cfg`
--

INSERT INTO `_regist_cfg` (`_judul`, `_desc`, `_status`) VALUES
('asdasda', 'asdasdads', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_scope_type`
--

CREATE TABLE `_scope_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_scope_type`
--

INSERT INTO `_scope_type` (`_id`, `_kode`, `_judul`, `_order`, `_status`) VALUES
(1, 'PB', 'Pengadaan Barang', 1, 1),
(2, 'JS', 'Jasa Pemborongan', 2, 1),
(3, 'JK', 'Jasa Konsultasi', 3, 1),
(4, 'JL', 'Jasa Lainnya', 4, 1),
(5, 'JCS', 'Judul', 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_status`
--

CREATE TABLE `_status` (
  `_id` int(11) NOT NULL,
  `_nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_status`
--

INSERT INTO `_status` (`_id`, `_nama`) VALUES
(0, 'Inactive'),
(1, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_admin`
--
ALTER TABLE `_admin`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_affil_type`
--
ALTER TABLE `_affil_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_bank`
--
ALTER TABLE `_bank`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_class_type`
--
ALTER TABLE `_class_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_company_type`
--
ALTER TABLE `_company_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_country`
--
ALTER TABLE `_country`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_currency`
--
ALTER TABLE `_currency`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_distributor`
--
ALTER TABLE `_distributor`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_docplus_type`
--
ALTER TABLE `_docplus_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_document_type`
--
ALTER TABLE `_document_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_general_cfg`
--
ALTER TABLE `_general_cfg`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_group_priv`
--
ALTER TABLE `_group_priv`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_manager_type`
--
ALTER TABLE `_manager_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_office_type`
--
ALTER TABLE `_office_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_province`
--
ALTER TABLE `_province`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_qual_type`
--
ALTER TABLE `_qual_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_scope_type`
--
ALTER TABLE `_scope_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_status`
--
ALTER TABLE `_status`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_admin`
--
ALTER TABLE `_admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_affil_type`
--
ALTER TABLE `_affil_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_bank`
--
ALTER TABLE `_bank`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_class_type`
--
ALTER TABLE `_class_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_company_type`
--
ALTER TABLE `_company_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_country`
--
ALTER TABLE `_country`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_currency`
--
ALTER TABLE `_currency`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_distributor`
--
ALTER TABLE `_distributor`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_docplus_type`
--
ALTER TABLE `_docplus_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_document_type`
--
ALTER TABLE `_document_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_general_cfg`
--
ALTER TABLE `_general_cfg`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `_group_priv`
--
ALTER TABLE `_group_priv`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `_manager_type`
--
ALTER TABLE `_manager_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_office_type`
--
ALTER TABLE `_office_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_province`
--
ALTER TABLE `_province`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_qual_type`
--
ALTER TABLE `_qual_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_scope_type`
--
ALTER TABLE `_scope_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
