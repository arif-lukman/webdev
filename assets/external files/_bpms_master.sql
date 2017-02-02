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
(1, 'admin', 'Administrator', 'admin@gmail.com', 'sprl1234', '1', 1, 'ini admin, ini form, ugh admin fom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_affil_type`
--

CREATE TABLE `_affil_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_bank`
--

CREATE TABLE `_bank` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_class_type`
--

CREATE TABLE `_class_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_company_type`
--

CREATE TABLE `_company_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_country`
--

CREATE TABLE `_country` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_currency`
--

CREATE TABLE `_currency` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_dist_type`
--

CREATE TABLE `_dist_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_document+_type`
--

CREATE TABLE `_document+_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_document_type`
--

CREATE TABLE `_document_type` (
  `_id` int(11) NOT NULL,
  `_kode` int(11) NOT NULL,
  `_judul` int(11) NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `_nama_app` text NOT NULL,
  `_desc` text NOT NULL,
  `_email_1` text NOT NULL,
  `_email_2` text NOT NULL,
  `_email_proc` text NOT NULL,
  `_ttd_skt` text NOT NULL,
  `_footer_txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Admin', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_manager_type`
--

CREATE TABLE `_manager_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_office_type`
--

CREATE TABLE `_office_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_province`
--

CREATE TABLE `_province` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_qual_type`
--

CREATE TABLE `_qual_type` (
  `_id` int(11) NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_regist_cfg`
--

CREATE TABLE `_regist_cfg` (
  `_judul` text NOT NULL,
  `_desc` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_scope_type`
--

CREATE TABLE `_scope_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `_dist_type`
--
ALTER TABLE `_dist_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_document+_type`
--
ALTER TABLE `_document+_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_document_type`
--
ALTER TABLE `_document_type`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_admin`
--
ALTER TABLE `_admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `_affil_type`
--
ALTER TABLE `_affil_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_bank`
--
ALTER TABLE `_bank`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_class_type`
--
ALTER TABLE `_class_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_company_type`
--
ALTER TABLE `_company_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_country`
--
ALTER TABLE `_country`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_currency`
--
ALTER TABLE `_currency`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_dist_type`
--
ALTER TABLE `_dist_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_document+_type`
--
ALTER TABLE `_document+_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_document_type`
--
ALTER TABLE `_document_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_group_priv`
--
ALTER TABLE `_group_priv`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `_manager_type`
--
ALTER TABLE `_manager_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_office_type`
--
ALTER TABLE `_office_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_province`
--
ALTER TABLE `_province`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_qual_type`
--
ALTER TABLE `_qual_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_scope_type`
--
ALTER TABLE `_scope_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
