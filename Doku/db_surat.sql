-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 02:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username_admin`, `password`, `gambar`) VALUES
(1, 'Sandi Mujito', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin.jpg'),
(2, 'admin2', 'admin2', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id_suratmasuk` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp(),
  `kode_kantor` varchar(25) NOT NULL,
  `kantor_pabean` varchar(255) NOT NULL,
  `nomor_pengajuan` varchar(50) NOT NULL,
  `halaman` varchar(10) NOT NULL,
  `keterangan` varchar(6) NOT NULL,
  `jenis_pib` varchar(25) NOT NULL,
  `jenis_impor` varchar(25) NOT NULL,
  `cara_pembayaran` varchar(25) NOT NULL,
  `pengirim_nama` varchar(100) NOT NULL,
  `pengirim_alamat` text NOT NULL,
  `penjual_nama` varchar(100) NOT NULL,
  `penjual_alamat` text NOT NULL,
  `importir_jenis_identitas` varchar(10) NOT NULL,
  `importir_nomor_identitas` varchar(25) NOT NULL,
  `importir_nama` varchar(100) NOT NULL,
  `importir_alamat` text NOT NULL,
  `pemilik_jenis_identitas` varchar(10) NOT NULL,
  `pemilik_nomor_identitas` varchar(25) NOT NULL,
  `pemilik_nama` varchar(100) NOT NULL,
  `pemilik_alamat` text NOT NULL,
  `cara_angkut` varchar(5) NOT NULL,
  `nama_pengangkut` varchar(25) NOT NULL,
  `perkiraan_tiba` date NOT NULL DEFAULT '1111-11-11',
  `pelabuhan_muat` varchar(25) NOT NULL,
  `pelabuhan_transit` varchar(25) NOT NULL,
  `pelabuhan_tujuan` varchar(25) NOT NULL,
  `invoice_nomor` varchar(25) NOT NULL,
  `invoice_tanggal` date NOT NULL DEFAULT '1111-11-11',
  `bl_nomor` varchar(25) NOT NULL,
  `bl_tanggal` date NOT NULL DEFAULT '1111-11-11',
  `manifest_nomor` varchar(25) NOT NULL,
  `manifest_pos` varchar(25) NOT NULL,
  `manifest_tanggal` date NOT NULL DEFAULT '1111-11-11',
  `tempat_penimbunan` varchar(25) NOT NULL,
  `valuta` varchar(25) NOT NULL,
  `nilai_cif` varchar(25) NOT NULL DEFAULT '0',
  `asuransi` varchar(25) NOT NULL DEFAULT '0.0',
  `freight` varchar(25) NOT NULL DEFAULT '0.0',
  `ndpbm` varchar(25) NOT NULL DEFAULT '0.0',
  `nilai_pabean` varchar(25) NOT NULL DEFAULT '0.0',
  `peti_kemas` varchar(255) NOT NULL,
  `jjm` varchar(255) NOT NULL,
  `berat_kotor` varchar(25) NOT NULL DEFAULT '0.0',
  `berat_bersih` varchar(25) NOT NULL DEFAULT '0.0',
  `hs_code` varchar(25) NOT NULL,
  `file_suratmasuk` varchar(255) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `bm_dibayar` varchar(25) NOT NULL DEFAULT '0',
  `bm_ditanggung` varchar(25) NOT NULL DEFAULT '0',
  `bm_ditunda` varchar(25) NOT NULL DEFAULT '0',
  `bm_tidak` varchar(25) NOT NULL DEFAULT '0',
  `bm_bebas` varchar(25) NOT NULL DEFAULT '0',
  `bm_lunas` varchar(25) NOT NULL DEFAULT '0',
  `bmkite_dibayar` varchar(25) NOT NULL DEFAULT '0',
  `bmkite_ditanggung` varchar(25) NOT NULL DEFAULT '0',
  `bmkite_ditunda` varchar(25) NOT NULL DEFAULT '0',
  `bmkite_tidak` varchar(25) NOT NULL DEFAULT '0',
  `bmkite_bebas` varchar(25) NOT NULL DEFAULT '0',
  `bmkite_lunas` varchar(25) NOT NULL DEFAULT '0',
  `bmt_dibayar` varchar(25) NOT NULL DEFAULT '0',
  `bmt_ditanggung` varchar(25) NOT NULL DEFAULT '0',
  `bmt_ditunda` varchar(25) NOT NULL DEFAULT '0',
  `bmt_tidak` varchar(25) NOT NULL DEFAULT '0',
  `bmt_bebas` varchar(25) NOT NULL DEFAULT '0',
  `bmt_lunas` varchar(25) NOT NULL DEFAULT '0',
  `cukai_dibayar` varchar(25) NOT NULL DEFAULT '0',
  `cukai_ditanggung` varchar(25) NOT NULL DEFAULT '0',
  `cukai_ditunda` varchar(25) NOT NULL DEFAULT '0',
  `cukai_tidak` varchar(25) NOT NULL DEFAULT '0',
  `cukai_bebas` varchar(25) NOT NULL DEFAULT '0',
  `cukai_lunas` varchar(25) NOT NULL DEFAULT '0',
  `ppn_dibayar` varchar(25) NOT NULL DEFAULT '0',
  `ppn_ditanggung` varchar(25) NOT NULL DEFAULT '0',
  `ppn_ditunda` varchar(25) NOT NULL DEFAULT '0',
  `ppn_tidak` varchar(25) NOT NULL DEFAULT '0',
  `ppn_bebas` varchar(25) NOT NULL DEFAULT '0',
  `ppn_lunas` varchar(25) NOT NULL DEFAULT '0',
  `ppnbm_dibayar` varchar(25) NOT NULL DEFAULT '0',
  `ppnbm_ditanggung` varchar(25) NOT NULL DEFAULT '0',
  `ppnbm_ditunda` varchar(25) NOT NULL DEFAULT '0',
  `ppnbm_tidak` varchar(25) NOT NULL DEFAULT '0',
  `ppnbm_bebas` varchar(25) NOT NULL DEFAULT '0',
  `ppnbm_lunas` varchar(25) NOT NULL DEFAULT '0',
  `pph_dibayar` varchar(25) NOT NULL DEFAULT '0',
  `pph_ditanggung` varchar(25) NOT NULL DEFAULT '0',
  `pph_ditunda` varchar(25) NOT NULL DEFAULT '0',
  `pph_tidak` varchar(25) NOT NULL DEFAULT '0',
  `pph_bebas` varchar(25) NOT NULL DEFAULT '0',
  `pph_lunas` varchar(25) NOT NULL DEFAULT '0',
  `total_dibayar` varchar(25) NOT NULL DEFAULT '0',
  `total_ditanggung` varchar(25) NOT NULL DEFAULT '0',
  `total_ditunda` varchar(25) NOT NULL DEFAULT '0',
  `total_tidak` varchar(25) NOT NULL DEFAULT '0',
  `total_bebas` varchar(25) NOT NULL DEFAULT '0',
  `total_lunas` varchar(25) NOT NULL DEFAULT '0',
  `tanggal_entry` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id_suratmasuk`, `tanggal_masuk`, `kode_kantor`, `kantor_pabean`, `nomor_pengajuan`, `halaman`, `keterangan`, `jenis_pib`, `jenis_impor`, `cara_pembayaran`, `pengirim_nama`, `pengirim_alamat`, `penjual_nama`, `penjual_alamat`, `importir_jenis_identitas`, `importir_nomor_identitas`, `importir_nama`, `importir_alamat`, `pemilik_jenis_identitas`, `pemilik_nomor_identitas`, `pemilik_nama`, `pemilik_alamat`, `cara_angkut`, `nama_pengangkut`, `perkiraan_tiba`, `pelabuhan_muat`, `pelabuhan_transit`, `pelabuhan_tujuan`, `invoice_nomor`, `invoice_tanggal`, `bl_nomor`, `bl_tanggal`, `manifest_nomor`, `manifest_pos`, `manifest_tanggal`, `tempat_penimbunan`, `valuta`, `nilai_cif`, `asuransi`, `freight`, `ndpbm`, `nilai_pabean`, `peti_kemas`, `jjm`, `berat_kotor`, `berat_bersih`, `hs_code`, `file_suratmasuk`, `operator`, `bm_dibayar`, `bm_ditanggung`, `bm_ditunda`, `bm_tidak`, `bm_bebas`, `bm_lunas`, `bmkite_dibayar`, `bmkite_ditanggung`, `bmkite_ditunda`, `bmkite_tidak`, `bmkite_bebas`, `bmkite_lunas`, `bmt_dibayar`, `bmt_ditanggung`, `bmt_ditunda`, `bmt_tidak`, `bmt_bebas`, `bmt_lunas`, `cukai_dibayar`, `cukai_ditanggung`, `cukai_ditunda`, `cukai_tidak`, `cukai_bebas`, `cukai_lunas`, `ppn_dibayar`, `ppn_ditanggung`, `ppn_ditunda`, `ppn_tidak`, `ppn_bebas`, `ppn_lunas`, `ppnbm_dibayar`, `ppnbm_ditanggung`, `ppnbm_ditunda`, `ppnbm_tidak`, `ppnbm_bebas`, `ppnbm_lunas`, `pph_dibayar`, `pph_ditanggung`, `pph_ditunda`, `pph_tidak`, `pph_bebas`, `pph_lunas`, `total_dibayar`, `total_ditanggung`, `total_ditunda`, `total_tidak`, `total_bebas`, `total_lunas`, `tanggal_entry`) VALUES
(47, '2020-08-20', 'sdfsdf', 'PBU Jakarta Utara', 'asd-ashd-jj', '7', 'Ekspor', '1. Biasa', '1. Untuk Dipakai', '9. Lainnya', 'sandi', '$(\'#MYDATEPICKER2\').DATETIMEPICKER({\r\n        IGNOREREADONLY: TRUE,\r\n        ALLOWINPUTTOGGLE: TRUE,\r\n        FORMAT: \'DD-MM-YYYY\'\r\n    });\r\n    \r\n    $(\'#MYDATEPICKER3\').DATETIMEPICKER({\r\n        IGNOREREADONLY: TRUE,\r\n        ALLOWINPUTTOGGLE: TRUE,\r\n        FORMAT: \'DD-MM-YYYY\'\r\n    });\r\n    ', 'jito', '$(\'#MYDATEPICKER2\').DATETIMEPICKER({\r\n        IGNOREREADONLY: TRUE,\r\n        ALLOWINPUTTOGGLE: TRUE,\r\n        FORMAT: \'DD-MM-YYYY\'\r\n    });\r\n    \r\n    $(\'#MYDATEPICKER3\').DATETIMEPICKER({\r\n        IGNOREREADONLY: TRUE,\r\n        ALLOWINPUTTOGGLE: TRUE,\r\n        FORMAT: \'DD-MM-YYYY\'\r\n    });\r\n    ', 'Lainnya', '1345457', 'sandi mujito', '$(\'#MYDATEPICKER2\').DATETIMEPICKER({\r\n        IGNOREREADONLY: TRUE,\r\n        ALLOWINPUTTOGGLE: TRUE,\r\n        FORMAT: \'DD-MM-YYYY\'\r\n    });\r\n    \r\n    $(\'#MYDATEPICKER3\').DATETIMEPICKER({\r\n        IGNOREREADONLY: TRUE,\r\n        ALLOWINPUTTOGGLE: TRUE,\r\n        FORMAT: \'DD-MM-YYYY\'\r\n    });\r\n    ', 'NPWP', '2234324324', 'solihin', '\r\nWARNING: UNLINK(../SURAT_MASUK/SDF444-AJUAN1 PAGE 2.PDF): NO SUCH FILE OR DIRECTORY IN C:\\XAMPP\\HTDOCS\\ARSIPSURAT-MASTER\\DOKU\\ADMIN\\PROSES\\PROSES_EDITSURATMASUK.PHP ON LINE 151\r\n\r\nDATA SURAT MASUK TELAH DIUBAH\r\nMENYIMPAN FILE...\r\nUPDATE TB_SURATMASUK SET TANGGAL_MASUK =\'2023-08-20\', KODE_KANTOR =\'SDF444\', KANTOR_PABEAN =\'PBU JAKARTA UTARA\', NOMOR_PENGAJUAN =\'AJUAN1\', HALAMAN =\'2\', KETERANGAN =\'IMPOR\', JENIS_PIB =\'1. BIASA\', JENIS_IMPOR =\'2. SEMENTARA\', CARA_PEMBAYARAN =\'2. BERKALA\', PENGIRIM_NAMA =\'SANDI\', PENGIRIM_ALAMAT =\'HTTP://LOCALHOST/PHPMYADMIN/INDEX.PHP?ROUTE=/TABLE/STRUCTURE/SAVE\', PENJUAL_NAMA =\'JITO\', PENJUAL_ALAMAT =\'HTTP://LOCALHOST/PHPMYADMIN/INDEX.PHP?ROUTE=/TABLE/STRUCTURE/SAVE\', IMPORTIR_JENIS_IDENTITAS =\'NPWP\', IMPORTIR_NOMOR_IDENTITAS =\'1345457\', IMPORTIR_NAMA =\'SANDI MUJITO\', IMPORTIR_ALAMAT =\'HTTP://LOCALHOST/PHPMYADMIN/INDEX.PHP?ROUTE=/TABLE/STRUCTURE/SAVE\', PEMILIK_JENIS_IDENTITAS =\'NPWP\', PEMILIK_NOMOR_IDENTITAS =\'2234324324\', PEMILIK_NAMA =\'SOLIHIN\', PEMILIK_ALAMAT =\'HTTP://LOCALHOST/PHPMYADMIN/INDEX.PHP?ROUTE=/TABLE/STRUCTURE/SAVE\', CARA_ANGKUT =\'LAUT\', NAMA_PENGANGKUT =\'ASDASA ADFSEF55543\', PERKIRAAN_TIBA =\'2009-09-20\', PELABUHAN_MUAT =\'MERAK\', PELABUHAN_TRANSIT =\'BATU\', PELABUHAN_TUJUAN =\'YANJUNG PRIOK\', INVOICE_NOMOR =\'INVC2000\', INVOICE_TANGGAL =\'2025-08-20\', BL_NOMOR =\'BL5000\', BL_TANGGAL =\'2002-09-20\', MANIFEST_NOMOR =\'MFT3000\', MANIFEST_POS =\'POS 2233\', MANIFEST_TANGGAL =\'2010-09-20\', TEMPAT_PENIMBUNAN =\'TPU PEMAKAMAN\', VALUTA =\'VALUTA ASING\', NILAI_CIF =\'200,000.233\', ASURANSI =\'0\', FREIGHT =\'0\', NDPBM =\'123,000\', NILAI_PABEAN =\'9,988,700,000.5,000\', PETI_KEMAS =\'APHU-7328512 40 FEET FCL\', JJM =\'711 CT/CARTOON MERK: SESUAI B/L\', BERAT_KOTOR =\'12000\', BERAT_BERSIH =\'9800\', HS_CODE = \'HSCODE\', OPERATOR = \'SANDI MUJITO\', TANGGAL_ENTRY = \'2022-08-26 16:06:40\' FILE_SURATMASUK = \'SDF444-AJUAN1-2.PDF\' WHERE ID_SURATMASUK = 52', 'Laut', 'asdasa adfsef55543', '2020-08-20', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2026-08-20', 'BL5000', '2031-08-20', 'MFT3000', 'POS2233', '2031-08-20', 'TPU PEMAKAMAN', '0', '0', '0.0', '0.0', '0.0', '0.0', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '0.0', '0.0', 'HSCODE', 'sdfsdf-asd-ashd-jj page 7.pdf', 'Sandi Mujito', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '1123', '123', '123', '123', '123', '123', '123', '123', '2022-08-27 15:27:13'),
(48, '2020-08-20', 'sdf444', 'PBU Jakarta Utara', '124543', '2', 'Impor', '2. Berkala', '2. Sementara', '2. Berkala', 'sandi', 'TERIMA KASIH\r\nINSERT INTO TB_SURATMASUK(TANGGAL_MASUK,KODE_KANTOR, KANTOR_PABEAN, NOMOR_PENGAJUAN, HALAMAN, KETERANGAN, JENIS_PIB, JENIS_IMPOR, CARA_PEMBAYARAN, PENGIRIM_NAMA, PENGIRIM_ALAMAT, PENJUAL_NAMA, PENJUAL_ALAMAT, IMPORTIR_JENIS_IDENTITAS, IMPORTIR_NOMOR_IDENTITAS, IMPORTIR_NAMA, IMPORTIR_ALAMAT, PEMILIK_JENIS_IDENTITAS, PEMILIK_NOMOR_IDENTITAS, PEMILIK_NAMA, PEMILIK_ALAMAT, CARA_ANGKUT, NAMA_PENGANGKUT, PERKIRAAN_TIBA, PELABUHAN_MUAT, PELABUHAN_TRANSIT, PELABUHAN_TUJUAN, INVOICE_NOMOR, INVOICE_TANGGAL, BL_NOMOR, BL_TANGGAL, MANIFEST_NOMOR, MANIFEST_POS, MANIFEST_TANGGAL, TEMPAT_PENIMBUNAN, HS_CODE, FILE_SURATMASUK, OPERATOR, TANGGAL_ENTRY ) VALUES (\'2022-08-23\', \'SDFSDF\', \'PBU JAKARTA UTARA\', \'ASD-ASHD-JJ\', \'7\', \'IMPOR\', \'1. BIASA\', \'1. UNTUK DIPAKAI\', \'3. DENGAN JAMINAN\', \'SANDI\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'JITO\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'NPWP\', \'1345457\', \'SANDI MUJITO\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'NPWP\', \'2234324324\', \'SOLIHIN\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'LAUT\', \'ASDASA ADFSEF55543\', \'2022-08-23\', \'MERAK\', \'BATU\', \'YANJUNG PRIOK\', \'INVC2000\', \'23-08-2022\', \'BL5000\', \'23-08-2022\', \'MFT3000\', \'POS2233\', \'23-08-2022\', \'TPU PEMAKAMAN\', \'HSCODE\', \'SDFSDF-ASD-ASHD-JJ PAGE 7.PDF\', \'SANDI MUJITO\', \'2022-08-23 14:10:43\')\r\nSURAT MASUK TELAH DIMASUKKAN', 'jito', 'TERIMA KASIH\r\nINSERT INTO TB_SURATMASUK(TANGGAL_MASUK,KODE_KANTOR, KANTOR_PABEAN, NOMOR_PENGAJUAN, HALAMAN, KETERANGAN, JENIS_PIB, JENIS_IMPOR, CARA_PEMBAYARAN, PENGIRIM_NAMA, PENGIRIM_ALAMAT, PENJUAL_NAMA, PENJUAL_ALAMAT, IMPORTIR_JENIS_IDENTITAS, IMPORTIR_NOMOR_IDENTITAS, IMPORTIR_NAMA, IMPORTIR_ALAMAT, PEMILIK_JENIS_IDENTITAS, PEMILIK_NOMOR_IDENTITAS, PEMILIK_NAMA, PEMILIK_ALAMAT, CARA_ANGKUT, NAMA_PENGANGKUT, PERKIRAAN_TIBA, PELABUHAN_MUAT, PELABUHAN_TRANSIT, PELABUHAN_TUJUAN, INVOICE_NOMOR, INVOICE_TANGGAL, BL_NOMOR, BL_TANGGAL, MANIFEST_NOMOR, MANIFEST_POS, MANIFEST_TANGGAL, TEMPAT_PENIMBUNAN, HS_CODE, FILE_SURATMASUK, OPERATOR, TANGGAL_ENTRY ) VALUES (\'2022-08-23\', \'SDFSDF\', \'PBU JAKARTA UTARA\', \'ASD-ASHD-JJ\', \'7\', \'IMPOR\', \'1. BIASA\', \'1. UNTUK DIPAKAI\', \'3. DENGAN JAMINAN\', \'SANDI\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'JITO\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'NPWP\', \'1345457\', \'SANDI MUJITO\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'NPWP\', \'2234324324\', \'SOLIHIN\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'LAUT\', \'ASDASA ADFSEF55543\', \'2022-08-23\', \'MERAK\', \'BATU\', \'YANJUNG PRIOK\', \'INVC2000\', \'23-08-2022\', \'BL5000\', \'23-08-2022\', \'MFT3000\', \'POS2233\', \'23-08-2022\', \'TPU PEMAKAMAN\', \'HSCODE\', \'SDFSDF-ASD-ASHD-JJ PAGE 7.PDF\', \'SANDI MUJITO\', \'2022-08-23 14:10:43\')\r\nSURAT MASUK TELAH DIMASUKKAN', 'Lainnya', '234456rgh', 'sandi mujito', 'TERIMA KASIH\r\nINSERT INTO TB_SURATMASUK(TANGGAL_MASUK,KODE_KANTOR, KANTOR_PABEAN, NOMOR_PENGAJUAN, HALAMAN, KETERANGAN, JENIS_PIB, JENIS_IMPOR, CARA_PEMBAYARAN, PENGIRIM_NAMA, PENGIRIM_ALAMAT, PENJUAL_NAMA, PENJUAL_ALAMAT, IMPORTIR_JENIS_IDENTITAS, IMPORTIR_NOMOR_IDENTITAS, IMPORTIR_NAMA, IMPORTIR_ALAMAT, PEMILIK_JENIS_IDENTITAS, PEMILIK_NOMOR_IDENTITAS, PEMILIK_NAMA, PEMILIK_ALAMAT, CARA_ANGKUT, NAMA_PENGANGKUT, PERKIRAAN_TIBA, PELABUHAN_MUAT, PELABUHAN_TRANSIT, PELABUHAN_TUJUAN, INVOICE_NOMOR, INVOICE_TANGGAL, BL_NOMOR, BL_TANGGAL, MANIFEST_NOMOR, MANIFEST_POS, MANIFEST_TANGGAL, TEMPAT_PENIMBUNAN, HS_CODE, FILE_SURATMASUK, OPERATOR, TANGGAL_ENTRY ) VALUES (\'2022-08-23\', \'SDFSDF\', \'PBU JAKARTA UTARA\', \'ASD-ASHD-JJ\', \'7\', \'IMPOR\', \'1. BIASA\', \'1. UNTUK DIPAKAI\', \'3. DENGAN JAMINAN\', \'SANDI\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'JITO\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'NPWP\', \'1345457\', \'SANDI MUJITO\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'NPWP\', \'2234324324\', \'SOLIHIN\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'LAUT\', \'ASDASA ADFSEF55543\', \'2022-08-23\', \'MERAK\', \'BATU\', \'YANJUNG PRIOK\', \'INVC2000\', \'23-08-2022\', \'BL5000\', \'23-08-2022\', \'MFT3000\', \'POS2233\', \'23-08-2022\', \'TPU PEMAKAMAN\', \'HSCODE\', \'SDFSDF-ASD-ASHD-JJ PAGE 7.PDF\', \'SANDI MUJITO\', \'2022-08-23 14:10:43\')\r\nSURAT MASUK TELAH DIMASUKKAN', 'Lainnya', '234456rgh', 'sandi mujito', 'TERIMA KASIH\r\nINSERT INTO TB_SURATMASUK(TANGGAL_MASUK,KODE_KANTOR, KANTOR_PABEAN, NOMOR_PENGAJUAN, HALAMAN, KETERANGAN, JENIS_PIB, JENIS_IMPOR, CARA_PEMBAYARAN, PENGIRIM_NAMA, PENGIRIM_ALAMAT, PENJUAL_NAMA, PENJUAL_ALAMAT, IMPORTIR_JENIS_IDENTITAS, IMPORTIR_NOMOR_IDENTITAS, IMPORTIR_NAMA, IMPORTIR_ALAMAT, PEMILIK_JENIS_IDENTITAS, PEMILIK_NOMOR_IDENTITAS, PEMILIK_NAMA, PEMILIK_ALAMAT, CARA_ANGKUT, NAMA_PENGANGKUT, PERKIRAAN_TIBA, PELABUHAN_MUAT, PELABUHAN_TRANSIT, PELABUHAN_TUJUAN, INVOICE_NOMOR, INVOICE_TANGGAL, BL_NOMOR, BL_TANGGAL, MANIFEST_NOMOR, MANIFEST_POS, MANIFEST_TANGGAL, TEMPAT_PENIMBUNAN, HS_CODE, FILE_SURATMASUK, OPERATOR, TANGGAL_ENTRY ) VALUES (\'2022-08-23\', \'SDFSDF\', \'PBU JAKARTA UTARA\', \'ASD-ASHD-JJ\', \'7\', \'IMPOR\', \'1. BIASA\', \'1. UNTUK DIPAKAI\', \'3. DENGAN JAMINAN\', \'SANDI\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'JITO\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'NPWP\', \'1345457\', \'SANDI MUJITO\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'NPWP\', \'2234324324\', \'SOLIHIN\', \'$(\\\'#MYDATEPICKER2\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \\R\\N $(\\\'#MYDATEPICKER3\\\').DATETIMEPICKER({\\R\\N IGNOREREADONLY: TRUE,\\R\\N ALLOWINPUTTOGGLE: TRUE,\\R\\N FORMAT: \\\'DD-MM-YYYY\\\'\\R\\N });\\R\\N \', \'LAUT\', \'ASDASA ADFSEF55543\', \'2022-08-23\', \'MERAK\', \'BATU\', \'YANJUNG PRIOK\', \'INVC2000\', \'23-08-2022\', \'BL5000\', \'23-08-2022\', \'MFT3000\', \'POS2233\', \'23-08-2022\', \'TPU PEMAKAMAN\', \'HSCODE\', \'SDFSDF-ASD-ASHD-JJ PAGE 7.PDF\', \'SANDI MUJITO\', \'2022-08-23 14:10:43\')\r\nSURAT MASUK TELAH DIMASUKKAN', 'Udara', 'asdasa adfsef55543', '2020-08-20', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2020-08-20', 'BL5000', '2020-08-20', 'MFT3000', 'POS2233', '2020-08-20', 'TPU PEMAKAMAN', '0', '0', '0.0', '0.0', '0.0', '0.0', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '0.0', '0.0', 'HSCODE', 'sdf444_124543_2.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-27 15:31:33'),
(52, '2022-08-23', 'sdf444', 'PBU Jakarta Utara', 'ajuan1', '2', 'Impor', '1. Biasa', '2. Sementara', '2. Berkala', 'sandi', 'HTTP://LOCALHOST/PHPMYADMIN/INDEX.PHP?ROUTE=/TABLE/STRUCTURE/SAVE', 'jito', 'HTTP://LOCALHOST/PHPMYADMIN/INDEX.PHP?ROUTE=/TABLE/STRUCTURE/SAVE', 'NPWP', '1345457', 'sandi mujito', 'HTTP://LOCALHOST/PHPMYADMIN/INDEX.PHP?ROUTE=/TABLE/STRUCTURE/SAVE', 'NPWP', '2234324324', 'solihin', 'HTTP://LOCALHOST/PHPMYADMIN/INDEX.PHP?ROUTE=/TABLE/STRUCTURE/SAVE', 'Laut', 'asdasa adfsef55543', '2022-09-09', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2022-08-25', 'BL5000', '2022-09-02', 'MFT3000', 'POS 2233', '2022-09-10', 'TPU PEMAKAMAN', 'valuta asing', '200,000.233', '0', '0', '123,000', '9,988,700,000.5,000', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '12000', '9800', 'HSCODE', 'sdf444-ajuan1 page 2.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-23 22:40:14'),
(53, '2022-08-25', 'asd123', 'PBU Jakarta Utara', '46456-45645-645645-45645-456456', '2', 'Ekspor', '2. Berkala', '1. Untuk Dipakai', '2. Berkala', 'sandi', '.REPLACE(/\\B(?=(\\D{3})+(?!\\D))/G,\",\")', 'sandi', '.REPLACE(/\\B(?=(\\D{3})+(?!\\D))/G,\",\")', 'NPWP', '1345457', 'sandi mujito', '.REPLACE(/\\B(?=(\\D{3})+(?!\\D))/G,\",\")', 'NPWP', '1345457', 'sandi mujito', '.REPLACE(/\\B(?=(\\D{3})+(?!\\D))/G,\",\")', 'Laut', 'asdasa adfsef55543', '2022-08-25', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2022-08-25', 'BL5000', '2022-08-25', 'MFT3000', 'POS2233', '2022-08-25', 'TPU PEMAKAMAN', 'valuta asing', '020000044.22', '00,000', '0,345', '123,000', '9988700000.5', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '12,000', '9800.6', 'HSCODE', 'asd123-46456-45645-645645-45645-456456 page 2.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-25 15:28:38'),
(54, '2022-08-26', 'asd123', 'KPU Jakarta Utara', '123', '7', 'Impor', '1. Biasa', '2. Sementara', '2. Berkala', 'sandi', 'EPIZ_32165887', 'sandi', 'EPIZ_32165887', 'NPWP', '1345457', 'sandi mujito', 'EPIZ_32165887', 'NPWP', '1345457', 'sandi mujito', 'EPIZ_32165887', 'Darat', 'asdasa adfsef55543', '2022-08-26', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2022-08-26', 'BL5000', '2022-08-26', 'MFT3000', 'POS 2233', '2022-08-26', 'TPU PEMAKAMAN', 'valuta asing', '20,000', '2,000,000', '343,444', '123,000', '0', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '100', '9,800', 'HSCODE', 'asd123_123_7.pdf', 'admin2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-26 18:24:48'),
(55, '2022-08-27', 'sdf444', 'PBU Jakarta Utara', '234-23423222222', '7', 'Ekspor', '2. Berkala', '5. Pelayanan segera', '9. Lainnya', 'sandi', 'ECHO \"<!DOCTYPE HTML>\r\n					<CENTER>\r\n						<H2><BR>LOADING...</H2>\r\n		  			</CENTER>\r\n					<SCRIPT TYPE=\'TEXT/JAVASCRIPT\'>\r\n						ALERT(\'INPUT TIDAK SESUI! ULANGI KEMBALI...\');\r\n					</SCRIPT>\r\n		  			<META HTTP-EQUIV=\'REFRESH\' CONTENT=\'2;URL=../EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'>\r\n				  </HTML>\";	', 'sandi', 'ECHO \"<!DOCTYPE HTML>\r\n					<CENTER>\r\n						<H2><BR>LOADING...</H2>\r\n		  			</CENTER>\r\n					<SCRIPT TYPE=\'TEXT/JAVASCRIPT\'>\r\n						ALERT(\'INPUT TIDAK SESUI! ULANGI KEMBALI...\');\r\n					</SCRIPT>\r\n		  			<META HTTP-EQUIV=\'REFRESH\' CONTENT=\'2;URL=../EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'>\r\n				  </HTML>\";	', 'NPWP', '1345457', 'sandi mujito', 'ECHO \"<!DOCTYPE HTML>\r\n					<CENTER>\r\n						<H2><BR>LOADING...</H2>\r\n		  			</CENTER>\r\n					<SCRIPT TYPE=\'TEXT/JAVASCRIPT\'>\r\n						ALERT(\'INPUT TIDAK SESUI! ULANGI KEMBALI...\');\r\n					</SCRIPT>\r\n		  			<META HTTP-EQUIV=\'REFRESH\' CONTENT=\'2;URL=../EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'>\r\n				  </HTML>\";	', 'NPWP', '1345457', 'sandi mujito', 'ECHO \"<!DOCTYPE HTML>\r\n					<CENTER>\r\n						<H2><BR>LOADING...</H2>\r\n		  			</CENTER>\r\n					<SCRIPT TYPE=\'TEXT/JAVASCRIPT\'>\r\n						ALERT(\'INPUT TIDAK SESUI! ULANGI KEMBALI...\');\r\n					</SCRIPT>\r\n		  			<META HTTP-EQUIV=\'REFRESH\' CONTENT=\'2;URL=../EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'>\r\n				  </HTML>\";	', 'Laut', 'asdasa adfsef55543', '2022-08-27', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2022-08-27', 'BL5000', '2022-08-27', 'MFT3000', 'POS2233', '2022-08-27', 'TPU PEMAKAMAN', 'valuta asing', '20,000', '2,444,444', '0', '123,000', '0', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '12,000', '90', 'HSCODE', 'sdf444_234-23423222222_7.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-27 15:48:27'),
(56, '2022-08-27', 'asd123', 'PBU Jakarta Utara', '123', '7', 'Ekspor', '2. Berkala', '5. Pelayanan segera', '3. Dengan jaminan', 'sandi', 'ECHO \"<!DOCTYPE HTML>\r\n					<CENTER>\r\n						<H2><BR>LOADING...</H2>\r\n		  			</CENTER>\r\n					<SCRIPT TYPE=\'TEXT/JAVASCRIPT\'>\r\n						ALERT(\'INPUT TIDAK SESUI! ULANGI KEMBALI...\');\r\n					</SCRIPT>\r\n		  			<META HTTP-EQUIV=\'REFRESH\' CONTENT=\'2;URL=../EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'>\r\n				  </HTML>\";	', 'sandi', 'ECHO \"<!DOCTYPE HTML>\r\n					<CENTER>\r\n						<H2><BR>LOADING...</H2>\r\n		  			</CENTER>\r\n					<SCRIPT TYPE=\'TEXT/JAVASCRIPT\'>\r\n						ALERT(\'INPUT TIDAK SESUI! ULANGI KEMBALI...\');\r\n					</SCRIPT>\r\n		  			<META HTTP-EQUIV=\'REFRESH\' CONTENT=\'2;URL=../EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'>\r\n				  </HTML>\";	', 'NPWP', '1345457', 'sandi mujito', 'ECHO \"<!DOCTYPE HTML>\r\n					<CENTER>\r\n						<H2><BR>LOADING...</H2>\r\n		  			</CENTER>\r\n					<SCRIPT TYPE=\'TEXT/JAVASCRIPT\'>\r\n						ALERT(\'INPUT TIDAK SESUI! ULANGI KEMBALI...\');\r\n					</SCRIPT>\r\n		  			<META HTTP-EQUIV=\'REFRESH\' CONTENT=\'2;URL=../EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'>\r\n				  </HTML>\";	', 'NPWP', '1345457', 'sandi mujito', 'ECHO \"<!DOCTYPE HTML>\r\n					<CENTER>\r\n						<H2><BR>LOADING...</H2>\r\n		  			</CENTER>\r\n					<SCRIPT TYPE=\'TEXT/JAVASCRIPT\'>\r\n						ALERT(\'INPUT TIDAK SESUI! ULANGI KEMBALI...\');\r\n					</SCRIPT>\r\n		  			<META HTTP-EQUIV=\'REFRESH\' CONTENT=\'2;URL=../EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'>\r\n				  </HTML>\";	', 'Laut', 'asdasa adfsef55543', '2022-08-27', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2022-08-27', 'BL5000', '2022-08-27', 'MFT3000', 'POS2233', '2022-08-27', 'TPU PEMAKAMAN', 'valuta asing', '20,000', '0', '0', '0', '0', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '12,000', '9,800', 'HSCODE', 'asd123_123_7.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-27 15:54:32'),
(57, '2022-08-27', 'sdf444', 'PBU Jakarta Utara', '234-234-2-34222', '2', 'Ekspor', '1. Biasa', '5. Pelayanan segera', '3. Dengan jaminan', 'sandi', '	IF ( IS_NULL($DATA[\"NOMOR_PENGAJUAN\"])) {\r\n', 'sandi', '	IF ( IS_NULL($DATA[\"NOMOR_PENGAJUAN\"])) {\r\n', 'NPWP', '1345457', 'sandi mujito', '	IF ( IS_NULL($DATA[\"NOMOR_PENGAJUAN\"])) {\r\n', 'NPWP', '1345457', 'sandi mujito', '	IF ( IS_NULL($DATA[\"NOMOR_PENGAJUAN\"])) {\r\n', 'Laut', 'asdasa adfsef55543', '2022-08-27', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2022-08-27', 'BL5000', '2022-08-27', 'MFT3000', 'POS 2233', '2022-08-27', 'TPU PEMAKAMAN', 'valuta asing', '20,000', '00,000', '0', '123,000', '23,423.23', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '12,000', '90', 'HSCODE', 'sdf444_234-234-2-34222_2.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-27 15:59:26'),
(58, '2022-08-27', 'asd123', 'PBU Jakarta Utara', '2342-2342-2342348888', '2', 'Impor', '2. Berkala', '9. Gabungan 1 & 2', '3. Dengan jaminan', 'sandi', 'ERROR_REPORTING(0);', 'sandi', 'ERROR_REPORTING(0);', 'Lainnya', '1345457', 'sandi mujito', 'ERROR_REPORTING(0);', 'Lainnya', '1345457', 'sandi mujito', 'ERROR_REPORTING(0);', 'Laut', 'asdasa adfsef55543', '2022-08-27', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2022-08-27', 'BL5000', '2022-08-27', 'MFT3000', 'POS2233', '2022-08-27', 'TPU PEMAKAMAN', 'valuta asing', '20,000', '00,000', '0', '123,000', '23,423.23', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '12,000', '90', 'HSCODE', 'asd123_2342-2342-2342348888_2.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-27 16:07:37'),
(59, '2022-08-27', 'sdf444', 'PBU Jakarta Utara', '123-786-890-90-9', '7', 'Ekspor', '2. Berkala', '2. Sementara', '9. Lainnya', 'sandi', 'EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'', 'sandi', 'EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'', 'Lainnya', '1345457', 'sandi mujito', 'EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'', 'Lainnya', '1345457', 'sandi mujito', 'EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'', 'Laut', 'asdasa adfsef55543', '2022-08-27', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2022-08-27', 'BL5000', '2022-08-27', 'MFT3000', 'POS2233', '2022-08-27', 'TPU PEMAKAMAN', 'valuta asing', '20,000', '2,444,444', '343,444', '123,000', '0', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '12,000', '9,800', 'HSCODE', 'sdf444_123-786-890-90-9_7.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-27 16:15:07'),
(60, '2027-08-20', 'asd123', 'PBU Jakarta Utara', '123-890-89098-09-9-08998', '2', 'Impor', '2. Berkala', '5. Pelayanan segera', '1. Biasa/Tunai', 'sandi', 'EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'', 'sandi', 'EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'', 'NPWP', '1345457', 'sandi mujito', 'EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'', 'NPWP', '1345457', 'sandi mujito', 'EDITSURATMASUK.PHP?ID_SURATMASUK=\".$ID.\"\'', 'Laut', 'asdasa adfsef55543', '2027-08-20', 'merak', 'batu', 'yanjung priok', 'INVC2000', '2027-08-20', 'BL5000', '2027-08-20', 'MFT3000', 'POS2233', '2027-08-20', 'TPU PEMAKAMAN', 'valuta asing', '20,000', '2,444,444', '0', '123,000', '0', 'APHU-7328512 40 Feet FCL', '711 CT/Cartoon Merk: SESUAI B/L', '12,000', '9,800', 'HSCODE', 'asd123_123-890-89098-09-9-08998_2.pdf', 'Sandi Mujito', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-08-27 16:20:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username_admin` (`username_admin`);

--
-- Indexes for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
