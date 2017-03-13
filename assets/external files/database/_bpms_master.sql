-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Feb 2017 pada 14.56
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
(2, 'yahya', 'Super Administrator', 'yahya@gmail.com', '', '1', 1, '');

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
(4, 'KNS', 'Konsorsium', 4, 1),
(5, 'AA', 'Afiliasi dan Aliansi', 5, 1);

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
(3, 'BTN', 'Bank Tabungan Negara', 3, 1),
(4, 'Mandiri', 'Bank Mandiri', 4, 1),
(5, '-', 'Lain - lain', 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_class`
--

CREATE TABLE `_class` (
  `_id` int(11) NOT NULL,
  `_nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_class`
--

INSERT INTO `_class` (`_id`, `_nama`) VALUES
(1, 'Bidang'),
(2, 'Sub Bidang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_class_type`
--

CREATE TABLE `_class_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_kelas` int(1) NOT NULL,
  `_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_class_type`
--

INSERT INTO `_class_type` (`_id`, `_kode`, `_judul`, `_order`, `_kelas`, `_status`) VALUES
(1, 'A01', 'Eksplorasi, Produksi dan Pengolangan Lanjutan', 1, 1, 1),
(2, 'A0101', 'Peralatan/suku cadang pemboran, eksplorasi dan produksi', 2, 2, 1),
(3, 'A0102', 'Selubung sumur, pipa produksi dan kelengkapannya', 3, 2, 1),
(4, 'A0103', 'Peralatan/bahan lumpur/kimia pemboran dan penyemenan', 4, 2, 1),
(5, 'A0104', 'Peralatan/suku cadang boiler, mesin, turbin, pembangkit listrik, pompa dan kompresor', 5, 2, 1),
(6, 'A0105', 'Peralatan/suku cadang pengolahan dan pemurni minyak/gas/kimia', 6, 2, 1),
(7, 'A02', 'Konstruksi, Mekanikal dan Elektrikal', 7, 1, 1),
(8, 'A0201', 'Peralatan/suku cadang pengemas, pengangkat dan pengangkut', 8, 2, 1),
(9, 'A0202', 'Peralatan/suku cadang bangunan, jalan dan konstruksi', 9, 2, 1),
(10, 'A0203', 'Peralatan/suku cadang instrumentasi dan kelengkapan mesin', 10, 2, 1),
(11, 'A0204', 'Peralatan/suku cadang mekanikal serta elektrikal', 11, 2, 1),
(12, 'A0205', 'Pipa, selang, katup, dan penyambung', 12, 2, 1),
(13, 'A0206', 'Peralatan/suku cadang telekomunikasi, navigasi, dan komputer', 13, 2, 1),
(14, 'A0207', 'Peralatan/suku cadang alat ukur, survei dan laboratorium', 14, 2, 1),
(15, 'A0208', 'Alat-alat kerja dan peralatan bengkel', 15, 2, 1),
(16, 'A0209', 'Peralatan/suku cadang keselamatan kerja, pemadam kebakaran dan lindungan lingkungan', 16, 2, 1),
(17, 'A0210', 'Peralatan/bahan bangunan/tangki, bahan metal/bukan metal, tali baja, rantai, bahan kemasan, bahan pengikat dan kelengkapannya', 17, 2, 1),
(18, 'A03', 'Bahan Kimia dan Bahan Peledak', 18, 1, 1),
(19, 'A0301', 'Bahan kimia, bahan bakar, pelumas dan cat', 19, 1, 1),
(20, 'A0302', 'Peralatan/suku cadang/bahan peledak, senjata api dan amunisi', 20, 2, 1),
(21, 'A04', 'Kantor, Pegudangan, Kesehatan dan Rumah Tangga', 21, 1, 1),
(22, 'A0401', 'Peralatan/perlengkapan tulis, barang cetakan, kantor, pendidikan, peragaan/visualisasi, olahraga, kesenian, pergudangan dan perlengkapan pegawai', 22, 2, 1),
(23, 'A0402', 'Peralatan/suku cadang/bahan pertanian, perkebunan, peternakan, perikanan, dan kehutanan', 23, 2, 1),
(24, 'A0403', 'Peralatan/suku cadang kesehatan, farmasi dan obat-obatan', 24, 2, 1),
(25, 'A0404', 'Peralatan, perlengkapan, perabotan dan bahan-bahan kebutuhan rumah tangga', 25, 2, 1),
(26, 'B01', 'Pekerjaan Sipil', 26, 1, 1),
(27, 'B0101', 'Drainase dan jaringan pengairan', 27, 2, 1),
(28, 'B0102', 'Jalan, jembatan, landasan dan lokasi pembiran darat/rawa', 28, 2, 1),
(29, 'B0103', 'Fasilitas produksi darat', 29, 2, 1),
(30, 'B0104', 'Fasilitas produksi dan platfom lepas pantai', 30, 2, 1),
(31, 'B0105', 'Jalur pipa dan fasilitas pendukungnya', 31, 2, 1),
(32, 'B0106', 'Gedung dan pabrik', 32, 2, 1),
(33, 'B0107', 'Bangunan pengolahan air bersih dan limbah', 33, 2, 1),
(34, 'B0108', 'Reklamasi dan pengerukan', 34, 2, 1),
(35, 'B0109', 'Dermaga, penahan gelombang dan penahan tanah(talud)', 35, 2, 1),
(36, 'B0110', 'Pemboran air tanah', 36, 2, 1),
(37, 'B0111', 'Pertamanan dan lanskap', 37, 2, 1),
(38, 'B0112', 'Perumahan dan pemukiman', 38, 2, 1),
(39, 'B0113', 'Bendung dan bendungan', 39, 2, 1),
(40, 'B0114', 'Interior', 40, 2, 1),
(41, 'B02', 'Bidang Mekanikal/Elektrikal', 41, 1, 1),
(42, 'B0201', 'Pembangkitan dan jaringan transmisi listrik', 42, 2, 1),
(43, 'B0202', 'Instalasi kelistrikan dan jasa kelistrikan lain', 43, 2, 1),
(44, 'B0203', 'Tata udara', 44, 2, 1),
(45, 'B0204', 'Pekerjaan mekanikal', 45, 2, 1),
(46, 'B0205', 'Pabrikasi platform, SBM, DBM, struktur dan pancang', 46, 2, 1),
(47, 'B0206', 'Pabrikasi vessels, heat exchanger, heater, boiler, tanki dan pipa', 47, 2, 1),
(48, 'B0207', 'Pemasangan alat angkut dan alat angkat', 48, 2, 1),
(49, 'B0208', 'Pemasangan fasilitas produksi dan fasilitas lain lepas pantai', 49, 2, 1),
(50, 'B03', 'Bidang Radio, Telekomunikasi dan Instrumentasi', 50, 1, 1),
(51, 'B0301', 'Meteorologi dan geofisika', 51, 2, 1),
(52, 'B0302', 'Radio, telekomunikasi, sarana bantu navigasi laut/udara, rambu sungai dan peralatan SAR', 52, 2, 1),
(53, 'B0303', 'Pemasangan jaringan teknologi informasi dan telekomunikasi', 53, 2, 1),
(54, 'B0304', 'Pemasangan & pemeliharaan instrumentasi', 54, 2, 1),
(55, 'B04', 'Bidang Logam, Kayu dan Plastik', 55, 1, 1),
(56, 'B0401', 'Pembangunan dan reparasi kapal', 56, 2, 1),
(57, 'B0402', 'Pengangkatan kerangka kapal', 57, 2, 1),
(58, 'B0403', 'Pembesituaan kapal dan fasilitas produksi', 58, 2, 1),
(59, 'B0404', 'Barak, peti kemas dan lain-lain yang sejenis', 59, 2, 1),
(60, 'B0405', 'Pengecoran dan pembentukan', 60, 2, 1),
(61, 'B05', 'Bidang Pertanian', 61, 1, 1),
(62, 'B0501', 'Pembibitan/pembenihan tanaman dan perikanan', 62, 2, 1),
(63, 'B0502', 'Reboisasi/penghijauan', 63, 2, 1),
(64, 'B06', 'Bidang Pertambangan Minyak/Gas BUmi & Panas Bumi', 64, 1, 1),
(65, 'B0601', 'Penjajakan dan pemindaian', 65, 2, 1),
(66, 'B0602', 'Pemboran darat', 66, 2, 1),
(67, 'B0603', 'Pemboran rawa dan lepas pantai', 67, 2, 1),
(68, 'B0604', 'Pemboran terarah', 68, 2, 1),
(69, 'B0605', 'Pemboran inti', 69, 2, 1),
(70, 'B0606', 'Pemboran seismic', 70, 2, 1);

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
(3, 'SNG', 'Singapura', 3, 1),
(4, 'USA', 'Amerika', 4, 1),
(5, 'CHN', 'China', 5, 1),
(6, 'UK', 'Inggris', 6, 1),
(7, 'RU', 'Rusia', 7, 1);

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
(3, 'SGD', 'Dolar', 3, 1),
(4, 'USD', 'Dolar', 4, 1),
(5, 'CNY', 'Renminbi', 5, 1),
(6, 'GBP', 'Poundsterling', 6, 1),
(7, 'RUB', 'Rubel', 7, 1);

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
(3, 'Distributor', 3, 1),
(4, 'Dealer', 4, 1);

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
(2, 'JMS', 'Jamsostek', 2, 1),
(3, 'SILO', 'SILO', 3, 1),
(4, 'SIO', 'SIO', 4, 1),
(5, 'SIUJK', 'SIUJK', 5, 1),
(6, 'SS', 'Specimen Signature', 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_document_type`
--

CREATE TABLE `_document_type` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_judul` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL,
  `_kadaluarsa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_document_type`
--

INSERT INTO `_document_type` (`_id`, `_kode`, `_judul`, `_order`, `_status`, `_kadaluarsa`) VALUES
(1, 'AKT', 'Akte Pendirian Perusahaan (AKT)', 1, 1, 90),
(2, 'SK-MKH', 'SK Menteri Kehakiman dan HAM (SK-MKH)', 2, 1, 90),
(3, 'SIUP', 'Surat Ijin Usaha Perusahaan (SIUP)', 3, 1, 90),
(4, 'TDP', 'Tanda Daftar Perusahaan (TDP)', 4, 1, 90),
(5, 'SKDP', 'Surat Keterangan Domisili Perusahaan (SKDP)', 5, 1, 90),
(6, 'HO', 'Surat Ijin Gangguan (HO)', 6, 1, 90),
(7, 'SITU', 'Surat Ijin Tempat Usaha (SITU)', 7, 1, 90),
(8, 'NPWP', 'Nomor Pokok Wajib Pajak (NPWP)', 8, 1, 90),
(9, 'PPKP', 'Penetapan Perusahaan Kena Pajak (PPKP)', 9, 1, 90),
(10, 'BBPT', 'Bukti Bayar Pajak Tahunan (BBPT)', 10, 1, 90),
(11, 'SKD', 'Surat Keagenan/ Distributor (SKD)', 11, 1, 90),
(12, 'NA', 'Neraca Audit', 12, 1, 90),
(13, '-', 'Lain-lain', 13, 1, 90);

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
(1, 'SPR Langgak', '', 'scm_lgk@sprlanggak.co.id', 'scm_jkt@sprlanggak.co.id', 'proc@sprlanggak.co.id', 'Mahpuzoh, MM', 'E-Business Partner Registration', '');

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
(2, 'DataEntry', 1, 1, 0, 0, 0),
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
(2, 'BOC', 'Dewan Komisaris', 2, 1);

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
(3, 'RO', 'Kantor Perwakilan', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_province`
--

CREATE TABLE `_province` (
  `_id` int(11) NOT NULL,
  `_kode` text NOT NULL,
  `_nama` text NOT NULL,
  `_order` int(11) NOT NULL,
  `_status` tinyint(1) NOT NULL,
  `_id_negara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_province`
--

INSERT INTO `_province` (`_id`, `_kode`, `_nama`, `_order`, `_status`, `_id_negara`) VALUES
(1, 'ID-AC', 'Aceh', 1, 1, 0),
(2, 'ID-BA', 'Bali', 2, 1, 0),
(3, 'ID-BT', 'Banten', 3, 1, 0),
(4, 'ID-BE', 'Bengkulu', 4, 1, 0),
(5, 'ID-GO', 'Gorontalo', 5, 1, 0),
(6, 'ID-JK', 'DKI Jakarta', 6, 1, 0),
(7, 'ID-JA', 'Jambi', 7, 1, 0),
(8, 'ID-JB', 'Jawa Barat', 8, 1, 0),
(9, 'ID-JT', 'Jawa Tengah', 9, 1, 0),
(10, 'ID-JI', 'Jawa Timur', 10, 1, 0),
(11, 'ID-KB', 'Kalimantan Barat', 11, 1, 0),
(12, 'ID-KS', 'Kalimantan Selatan', 12, 1, 0),
(13, 'ID-KT', 'Kalimantan Tengah', 13, 1, 0),
(14, 'ID-KI', 'Kalimantan Timur', 14, 1, 0),
(15, 'ID-KU', 'Kalimantan Utara', 15, 1, 0),
(16, 'ID-BB', 'Kepulauan Bangka Belitung', 16, 1, 0),
(17, 'ID-KR', 'Kepulauan Riau', 17, 1, 0),
(18, 'ID-LA', 'Lampung', 18, 1, 0),
(19, 'ID-MA', 'Maluku', 19, 1, 0),
(20, 'ID-MU', 'Maluku Utara', 20, 1, 0),
(21, 'ID-NB', 'Nusa Tenggara Barat', 21, 1, 0),
(22, 'ID-PA', 'Papua', 22, 1, 0),
(23, 'ID-PB', 'Papua Barat', 23, 1, 0),
(24, 'ID-RI', 'Riau', 24, 1, 0),
(25, 'ID-SR', 'Sulawesi Barat', 25, 1, 0),
(26, 'ID-SN', 'Sulawesi Selatan', 26, 1, 0),
(27, 'ID-ST', 'Sulawesi Tengah', 27, 1, 0),
(28, 'ID-SG', 'Sulawesi Tenggara', 28, 1, 0),
(29, 'ID-SA', 'Sulawesi Tenggara', 29, 1, 0),
(30, 'ID-SB', 'Sumatera Barat', 30, 1, 0),
(31, 'ID-SS', 'Sumatera Selatan', 31, 1, 0),
(32, 'ID-SU', 'Sumatera Utara', 32, 1, 0),
(33, 'ID-YO', 'Yogyakarta', 33, 1, 0),
(34, '-', 'Lain-lain/Others', 34, 1, 0);

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
('Pengumuman pendaftaran', 'Pendaftaran sudah ditutup.', 0);

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
(4, 'JL', 'Jasa Lainnya', 4, 1);

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
-- Indexes for table `_class`
--
ALTER TABLE `_class`
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
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `_affil_type`
--
ALTER TABLE `_affil_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `_bank`
--
ALTER TABLE `_bank`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `_class_type`
--
ALTER TABLE `_class_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `_company_type`
--
ALTER TABLE `_company_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_country`
--
ALTER TABLE `_country`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `_currency`
--
ALTER TABLE `_currency`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `_distributor`
--
ALTER TABLE `_distributor`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_docplus_type`
--
ALTER TABLE `_docplus_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `_document_type`
--
ALTER TABLE `_document_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `_office_type`
--
ALTER TABLE `_office_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_province`
--
ALTER TABLE `_province`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `_qual_type`
--
ALTER TABLE `_qual_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_scope_type`
--
ALTER TABLE `_scope_type`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
