-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2019 pada 15.07
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `email`, `username`, `password`, `image`, `status`) VALUES
(6, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '1'),
(9, 'Admin 1', 'admin1@gmail.com', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', '', '1'),
(10, 'Admin 2', 'admin2@gmail.com', 'admin2', 'c84258e9c39059a89ab77d846ddab909', '', '1'),
(11, 'Admin 3', 'admin3@gmail.com', 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `jadwal` varchar(30) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `status` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `jadwal`, `waktu`, `tgl`, `status`) VALUES
(1, 'Batch 1', '08:00', '2018-08-15', '1'),
(2, 'Batch 2', '10:00', '2018-09-01', '1'),
(3, 'Batch 3', '13:00', '2018-09-01', '1'),
(4, 'Batch 4', '15:00', '2018-09-19', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode` varchar(30) DEFAULT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode`, `jurusan`) VALUES
(1, '001', 'Manajemen Informatika'),
(2, '030', 'Sistem Komputer'),
(3, '020', 'Teknik Informatika'),
(4, '040', 'Sistem Informasi '),
(6, '032', 'Komputerisasi Akuntansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `terdaftar` int(11) NOT NULL,
  `selesai_ujian` int(11) NOT NULL,
  `lulus` int(11) NOT NULL,
  `tidak_lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matauji`
--

CREATE TABLE `matauji` (
  `id` int(11) NOT NULL,
  `nama_matauji` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matauji`
--

INSERT INTO `matauji` (`id`, `nama_matauji`) VALUES
(1, 'Verbal'),
(2, 'Numerik'),
(3, 'Logika'),
(4, 'Sinonim'),
(5, 'Anonim'),
(6, 'Padanan hubungan kata (analogi)'),
(7, 'Geometri dan Aritmatika'),
(8, 'Antonim'),
(9, 'Komputer'),
(10, 'Pengetahuan umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panitia`
--

CREATE TABLE `panitia` (
  `id` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nama_panitia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panitia`
--

INSERT INTO `panitia` (`id`, `id_jadwal`, `nama_panitia`) VALUES
(2, 1, 'Panitia 1'),
(6, 2, 'Panitia 2'),
(7, 3, 'panitia 3'),
(8, 4, 'panitia 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `kode_pendaftaran` varchar(10) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_jurusan2` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `jenkel` enum('P','L','','') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `kode_pendaftaran`, `nama_peserta`, `id_jurusan`, `id_jurusan2`, `id_panitia`, `id_jadwal`, `jenkel`, `tgl_lahir`, `alamat`, `no_telp`, `email`, `username`, `password`, `tahun`, `status`) VALUES
(22, 'KD-F6CAA7', 'Peserta 1', 2, 2, 6, 1, 'L', '1997-01-21', 'Perintis', '089456123', 'Peserta1@gmail.com', 'peserta1', 'peserta1', 2019, '1'),
(23, 'KD-65164E', 'Peserta 2', 4, 2, 2, 3, 'L', '1998-11-11', 'Makassar', '082197127361', 'Peserta2@gmail.com', 'peserta2', 'fd691b79410137e434260361625d5c63', 2019, '1'),
(24, 'KD-21E12D', 'Peserta 3', 2, 3, 2, 1, 'L', '1995-01-01', 'Alauddin', '081312443556', 'peserta3@gmail.com', 'peserta3', 'peserta3', 1999, '1'),
(25, 'KD-F38FD4', 'wiwik', 3, 2, 2, 1, 'P', '1997-01-31', 'Perintis', '082395149760', 'wiwik@gmail.com', 'wiwik', '0fd1ec5593cd341c7c4af53276f10be6', 2014, '1'),
(26, 'KD-8493B8', 'winda', 1, 2, 2, 1, 'P', '1996-01-31', 'Jepot', '08239544555', 'winda@gmail.com', 'winda', 'aed2aec41bfd7ddb55b21f3ce206c66b', 2019, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `id_matauji` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `e` varchar(100) NOT NULL,
  `jawaban` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `id_matauji`, `pertanyaan`, `a`, `b`, `c`, `d`, `e`, `jawaban`) VALUES
(1, 1, 'Mencitrakan', 'Memperbaiki', 'Mempersolek', 'Membangun nama baik', 'Menggambarkan', 'Menceritakan', 'C'),
(3, 1, 'Laik', 'Bagus sekali', 'Sepadan', 'Wajib', 'Patut', 'Harus', 'D'),
(4, 1, 'Repatrisi', 'Penangkapan ulang', 'Pemulihan nama baik', 'Pendalaman kembali', 'Pemulangan kembali', 'Perbaiki kembali', 'D'),
(5, 1, 'Kedap', 'Tidak retak', 'Celah', 'Lolos', 'Rapat', 'Tembus', 'D'),
(6, 1, 'Monogami', 'Perpisahan', 'Pemisahan', 'Kawin dengan satu jenis', 'Kawin silang', 'Kawin lebih dari satu', 'E'),
(7, 1, 'Tangguh', 'Kuat', 'Luwes', 'Fleksibel', 'Rapuh', 'Hebat', 'D'),
(8, 1, 'Konvergen', 'Bercabang', 'Memusat', 'Pusat', 'Arah', 'Cekung', 'B'),
(9, 1, 'Naratif', 'Bersifat Melukiskan', 'Bersifat Menggambarkan', 'Bersifat Mengarahkan', 'Bersifat Menceritakan', 'Bersifat Meng-imajinasikan', 'C'),
(10, 1, 'Sekuler', 'Agamis', 'Hedonis', 'Pemuja Dunia', 'Fana', 'Modern', 'A'),
(11, 2, 'Berapakah angka lanjutan dari deret angka berikut : 11 22 24 37....', '50', '51', '49', '48', '47', 'B'),
(12, 2, 'Berapakah angka lanjutan dari deret angka berikut : 80 70 61 53...', '45', '36', '66', '56', '46', 'E'),
(13, 2, 'Berapakah angka lanjutan dari deret bilangan ini 9 50 14 49 19 47 24 44...', '40 29', '29 41', '25 40', '29 39', '29 40', 'E'),
(14, 2, 'Berapakah angka lanjutan dari deret angka berikut : 7 8 7 12 7 16 7 20 Selanjutnya ...', '7 25', '7 20', '7 19', '6 24', '7 24', 'E'),
(15, 2, 'Berapakah angka lanjutan dari deret angka berikut : 39 2 38 9 36 17 33...', '26 29', '25 29', '24 30', '26 30', '27 29', 'A'),
(16, 2, 'Huruf lanjutan dari urutan ini adlah G I K M', 'R', 'Q', 'N', 'O', 'P', 'D'),
(17, 2, 'Huruf lanjutan dari urutan U S P L', 'D', 'E', 'F', 'G', 'H', 'D'),
(18, 2, 'Huruf lanjutan dari C Q E Q G Q I', 'Q K', 'Q J', 'Q I', 'Q M', 'Q N', 'A'),
(19, 2, 'Huruf lanjutan dari urutan ini K O S', 'V', 'T', 'W', 'X', 'Z', 'C'),
(20, 2, 'Huruf lanjutan dari urutan ini A I Q', 'U', 'T', 'X', 'Z', 'Y', 'E'),
(21, 3, 'Seluruh laki-laki memiliki hormon testosteron. Andrea seorang laki-laki.', 'Andrea mungkin juga punya hormon testosteron', 'Belum tentu Andrea memiliki hormon testosteron', 'Siapa tahu Andrea tidak memiliki hormon testosteron', 'Andrea tidak memiliki memiliki hormon testosteron', 'Andrea memiliki hormon testosteron', 'E'),
(22, 3, 'Sebagian perajin tempe mengeluhkan harga kedelai naik. Pak Anto seorang perajin tempe.', 'Pak Anto pasti mengeluhkan harga kedelai naik.', 'Pak Anto tidak mengeluhkan harga kedelai naik.', 'Harga kedelai bukanlah keluhan Pak Anto', 'Pak Anto mungkin ikut mengeluhkan harga kedelai naik', 'Harga kedelai naik atau tidak, pak Anto tetap mengeluh', 'D'),
(23, 3, 'Semua pemain sepakbola yang berkebangsaan italia berwajah tampan. John adalah pemain sepakbola berkebangsaan inggris.', 'John bukanlah pemain sepakbola yang tampan', 'John adalah pemain sepakbola yang tampan', 'Meskipun bukan berkebangsaan Italia, John pasti berwajah tampan', 'Mustahil John berwajah tampan', 'Tidak dapat ditarik kesimpulan', 'E'),
(24, 3, 'Sebagian orang yang berminat menjadi politikus hanya menginginkan harta dan tahta. Rosyid tidak berminat menjadi politikus.', 'Rosyid tidak menginginkan harta dan tahta.', 'Tahta bukanlah keinginan Rosyid, tapi harta mungkin ya.', 'Rosyid menginginkan tahta tapi tidak berminat menjadi politikus.', 'Rosyid tidak ingin menjadi politikus karena sudah kaya dan punya tahta', 'Tidak dapat ditarik kesimpulan', 'E'),
(25, 3, 'Permen yang dibungkus dalam kemasan menarik sangat laris terjual. Permen X dibungkus dalam kemasan berwarna merah menyala. Menurut anak-anak, warna merah menyala sangatlah menarik.', 'Permen X kurang laris terjual di kalangan anak-anak', 'Permen X tidak laku terjual di kalangan orang dewasa', 'Permen X laris terjual', 'Permen X laris terjual di kalangan anak-anak', 'Tidak dapat ditarik kesimpulan', 'D'),
(26, 3, 'Mister A adalah seorang yang jenius. Mister A seorang penemu. Semua penemu adalah kreatif. Mister B juga seorang penemu.', 'Mister B seorang yang jenius', 'Mister B belum tentu kreatif', 'Mister A dan Mister B sama-sama jenius dan kreatif', 'Mister B pasti kreatif. Dan belum tentu jenius', 'Mister A pasti jenius dan belum tentu kreatif', 'D'),
(27, 3, 'Ivan lebih ringan beratnya daripada Wawan. Andika lebih berat daripada wawan.', 'Wawan adalah yang paling ringan dari ketiganya', 'Ivan mungkin saja sama beratnya dengan andika', 'Jika wawan memiliki berat 65 Kg. Mustahil andika memiliki berat lebih dari 65 Kg.', 'Jika andika memiliki berat 65 Kg. Mustahil ivan memiliki berat lebih dari 65 Kg.', 'Jika ivan memiliki berat 65Kg. Mungkin saja andika memiliki berat lebih dari 65 Kg.', 'D'),
(28, 3, 'Jika sedang libur sekolah Anjas berkunjung ke rumah temannya. Kecuali saat sakit.', 'Anjas saat ini sedang masuk sekolah, jadi pastilah tidak berkunjung ke rumah temannya meskipun di so', 'Sekarang Anjas sedang libur sekolah. Mungkin dia sedang bersantai-santai di rumah.', 'Hari ini Anjas sedang libur sekolah, jadi dia berkunjung ke rumah temannya.', 'Anjas tidak berkunjung ke rumah temannya kemarin. Jadi kemarin pasti dia sakit', 'Meskipun sakit, Anjas akan berkunjung ke rumah temannya saat liburan panjang.', 'C'),
(29, 3, 'Tidak ada ikan lele yang punya sisik. Ikan lele memiliki sungut.', 'Ikan yang tidak bersisik pasti punya sungut', 'Ikan yang bersungut pasti tidak punya sisik', 'Sisik ada hubungannya dengan sungut', 'Andai lele punya sisik, maka tidak akan punya sungut', 'Tidak bisa ditarik kesimpulan', 'E'),
(30, 3, 'Sebagian besar orang bersuku Jawa menyukai makanan manis. Zulfa juga bersuku Jawa. Maka', 'Zulfa pastilah menyukai makanan manis.', 'Mustahil Zulfa menyukai makanan manis', 'Kemungkinan Zulfa juga menyukai makanan manis adalah sangat kecil', 'Zulfa tidak menyukai makanan manis', 'KemungkinanZulfa menyukai makanan manis adalah sangat besar.', 'E'),
(31, 3, 'Sebagian besar pengusaha kecil mengeluhkan harga Tarif Dasar Listrik (TDL) yang tinggi. Aris adalah seorang pengusaha kecil.', 'Aris pastilah mengeluhkan harga TDL yang tinggi.', 'Aris pasti tidak mengeluhkan harga TDL yang tinggi', 'Aris belum mengeluhkan harga TDL yang tinggi', 'Aris mungkin mengeluhkan harga TDL yang tinggi', 'Tak dapat diambil kesimpulan', 'D'),
(32, 3, 'Sebagian pejabat adalah koruptor. Seluruh koruptor tak bisa hidup tenang & bahagia. Rizal seorang pejabat korup.', 'Rizal tak dapat hidup tenang & bahagia', 'Rizal masih bisa tenang & bahagia dengan kekayaanya', 'Rizal mungkin tidak tenang & bahagia', 'Rizal tidak menginginkan hidup tenang & bahagia', 'Tidak dapat ditarik kesimpulan', 'A'),
(33, 3, 'Seluruh pelaku syirik yang tidak bertobat hingga mati, masuk neraka. Percaya dengan jimat keselamatan & jimat penglarisan adalah syirik. Sampai matinya, Sutopo masih terus memiliki dan mempercayai jimat penglarisan.', 'Sutopo masuk Surga', 'Kemungkinan Sutopo masuk Neraka', 'Sutopo masuk neraka.', 'Kemungkinan Sutopo masuk Surga', 'Tak bisa disimpulkan', 'C'),
(34, 3, 'Sebagian alumni kampus ternama di Indonesia adalah pejabat yang gemar korupsi. Anton seorang pejabat. Anton adalah alumni kampus ternama di Indonesia.', 'Belum tentu Anton gemar korupsi.', 'Tentulah Anton gemar korupsi', 'Pastilah Anton tidak suka korupsi', 'Anton pejabat jujur.', 'Tak bisa disimpulkan', 'A'),
(35, 2, '(? (100-51)) : 0,5 =', '3,5', '56', '7/2', '14', '35', 'D'),
(36, 2, '24 x 0,625 =', '16', '18', '21', '20', '15', 'E'),
(37, 2, '(0,125 x 64) / 2', '0,16', '0,4', '16', '4', '24', 'D'),
(38, 2, '3/40  adalah berapa persen ?', '7,5%', '5%', '75%', '7%', '6%', 'A'),
(39, 2, 'Suatu seri angka : 19 28 37 46 selanjutnya...', '56', '55', '57', '47', '65', 'B'),
(40, 2, 'Seri huruf: e h a j m b selanjutnya...', 'p s', 'p t', 'o q', 'o r', 'o s', 'D'),
(41, 2, 'Suatu seri huruf : z v r selanjutnya...', 'm', 'o', 't', 'l', 'n', 'E'),
(42, 2, 'Seri huruf : z a h i j z a k l m z a selanjutnya...', 'n o q', 'o p q', 'r s t', 'n o p', 'p o y', 'D'),
(43, 5, 'Landai', 'Datar', 'Curam', 'Sedang', 'Luas', 'Lapang', 'B'),
(44, 5, 'Enmity', 'Permusuhan', 'Hubungan', 'Pertengkaran', 'Amity', 'Perseteruan', 'D'),
(45, 5, 'Eternal', 'Abadi', 'Selamanya', 'Seterusnya', 'Fana', 'Lama', 'D'),
(46, 4, 'Fantastis', 'Ampuh', 'Sakti', 'Bagus', 'Luar Biasa', 'Kesenangan', 'D'),
(47, 4, 'Artifisial', 'Alami', 'Campuran', 'Murni', 'Buatan', 'Pabrikan', 'D'),
(48, 4, 'Panorama', 'Penglihatan', 'Pemandangan', 'Melihat', 'Memandang', 'Tontonan', 'B'),
(49, 4, 'Anonim', 'Nama singkat', 'Singkatan', 'Kepanjangan dari', 'Tanpa nama', 'Nama kecil', 'D'),
(50, 4, 'Pandir', 'Agak pintar', 'Bodoh', 'Pandai hadir', 'Tidak jenius', 'Pemandangan', 'B'),
(51, 4, 'Efektif', 'Manjur', 'Tepat sasaran', 'Tepat waktu', 'Hemat', 'Efisien', 'A'),
(52, 4, 'Egaliter', 'Suka memerintah', 'Otoriter', 'Sederajat', 'Militer', 'Tentara', 'C'),
(53, 4, 'Intermediari', 'Sales', 'Tidak susah', 'Cukup', 'Perantara', 'Terus terang', 'D'),
(54, 4, 'Faksi', 'Partai', 'Perpecahan', 'Golongan', 'Pendapat', 'Pandangan', 'C'),
(55, 4, 'Kontribusi', 'Uang', 'Dana', 'Sumbangan', 'Hadiah', 'Pajak', 'C'),
(56, 4, 'Ambigu', 'Mendua', 'Bingung', 'Tidak tentu', 'Tidak ada keputusan', 'Mengambang', 'A'),
(57, 4, 'Komplemen', 'Makanan sehat', 'Bagian', 'Departemen', 'Pelengkap', 'Bahan pengganti', 'D'),
(58, 4, 'Kompleksitas', 'Kerumitan', 'Perumahan berjumlah banyak', 'keteraturan', 'Susunan', 'Banyak', 'A'),
(59, 4, 'Normadik', 'Tarzan', 'Tidak punya komunitas', 'Temannya banyak', 'Tinggalnya tidak tetap', 'Orang utan', 'D'),
(60, 4, 'Mortalitas', 'Tingkat', 'Kelahiran', 'Kematian', 'Pertarungan', 'Level', 'C'),
(61, 4, 'Fusi', 'Energi', 'Gabungan', 'Inti', 'Reaksi', 'Reaktor', 'B'),
(62, 4, 'Assessment', 'Suka', 'Timbang pilih', 'Timbang terima', 'Taksiran', 'Wawancara', 'D'),
(63, 5, 'Take off', 'Tinggal landas', 'Berangkat', 'Landing', 'Turun', 'Hinggap', 'C'),
(64, 5, 'Hakiki', 'Majasi', 'Penipuan', 'Tidak jujur', 'Kewajiban', 'Sebentar', 'A'),
(65, 5, 'Absurd', 'Mengada-ada', 'Tidak mustahil', 'Absen', 'Hadir', 'Tidak hilang', 'B'),
(66, 5, 'Sederhana', 'Kompleks', 'Simple', 'Banyak', 'Tinggi', 'Mewah', 'A'),
(67, 5, 'Ad Hoc', 'Khusus', 'Panitia', 'Komite', 'General', 'Spesial', 'D'),
(68, 5, 'Aristokrat', 'Bangsawan', 'Raja', 'Hulubalang', 'Rakyat jelata', 'Pedagang', 'D'),
(69, 5, 'Asimilasi', 'Perselarasan', 'Harmoni', 'Kebangkitan', 'Tidak setuju', 'Pertengkaran', 'E'),
(70, 5, 'Deforestasi', 'Kehutanan', 'Penebangan pohon', 'Pembukaan lahan', 'Reboisasi', 'Hutan Lindung', 'D'),
(71, 5, 'Statis', 'Bergerak', 'Diam', 'Begitu saja', 'Terus-terusan', 'Tanpa hitungan', 'A'),
(72, 5, 'Rigid', 'Kaku', 'Keras', 'Bisa ditawar', 'Negoisasi', 'Fleksibel', 'E'),
(73, 5, 'Prematur', 'Dini', 'Kecil', 'Besar', 'Terlambat', 'Lama', 'D'),
(74, 5, 'Skeptis', 'Ragu-ragu', 'Yakin', 'Iman', 'Optimis', 'Percaya diri', 'B'),
(75, 5, 'Moderat', 'Pertengahan', 'Sedang-sedang', 'Ekstrem', 'Tinggi sekali', 'Besar sekali', 'C'),
(76, 5, 'Persona non grata', 'Orang pribumi', 'Orang asing', 'Orang yang disukai', 'Orang yang membumi', 'Orang baru', 'C'),
(77, 5, 'Kasual', 'Kantoran', 'Rapi', 'Formal', 'Tertib', 'Santai', 'C'),
(78, 5, 'Afeksi', 'Kasih sayang', 'Cinta', 'Perasaan', 'Kejahatan', 'Kriminal', 'D'),
(79, 5, 'Partisan', 'Pihak', 'Netral', 'Partai politik', 'Kelompok', 'Ikut bergabung', 'B'),
(80, 5, 'Parsimoni', 'Irit', 'Tinggi', 'Boros', 'Besar sekali', 'Harmoni', 'C'),
(81, 5, 'Absolut', 'Mutlak', 'Besar sekali', 'Kecil sekali', 'Tergantung mood', 'Relatif', 'E'),
(82, 5, 'Eksodus', 'Transmigrasi', 'Bedol Desa', 'Bermalam', 'Pindah', 'Bermukim', 'E'),
(83, 5, 'Imun', 'Payah', 'Rapuh', 'Lelah', 'Kebal', 'Loyo', 'B'),
(84, 5, 'Progresi', 'Selalu bergerak', 'Statis', 'Lambat maju', 'Regresi', 'Stagnasi', 'E'),
(85, 5, 'Up to date', 'Kuno', 'Mutakhir', 'Canggih', 'Baru', 'Dahulu', 'A'),
(86, 5, 'Veteran', 'Pemula', 'Perang', 'Sipil', 'Rakyat biasa', 'Bukan tentara', 'A'),
(87, 4, 'Domain', 'Internet', 'Website', 'Daerah', 'Situs', 'Tataran', 'C'),
(88, 4, 'Interseksi', 'Antar Karyawan', 'Persimpangan', 'Perempatan', 'Seksi', 'Gabungan', 'B'),
(89, 4, 'Union', 'Kelompok', 'Negara', 'Penyelarasan', 'Perjumpaan', 'Penyatuan', 'E'),
(90, 4, 'Tandem', 'Bekerjasama', 'Bertandang', 'Tandingan', 'Saingan', 'Berdua', 'E'),
(91, 4, 'Oktagonal', 'Bersegi 6', 'Bersegi 8', 'Banyak segi', 'Berbagai segi', '6 pandangan berbeda', 'B'),
(92, 4, 'Oseanografi', 'Pantai', 'Samudera', 'Ilmu tentang laut', 'Ilmu tentang benua', 'Ilmu perkapalan', 'C'),
(93, 4, 'Komputasi', 'Ilmu tentang komputer', 'Pemotongan', 'Canggih', 'Perhitungan', 'Komponen elektronik', 'D'),
(94, 4, 'Evaporasi', 'Peremajaan', 'Penghijauan', 'Penguapan', 'Pengembunan', 'Pencairan', 'C'),
(95, 4, 'Konjungsi', 'Penghubung', 'Tasrif', 'Penyesuaian', 'Pemugaran', 'Kenaikan', 'A'),
(96, 4, 'Adiktif', 'Ingin berhenti', 'Candu', 'Obat terlarang', 'NAPZA', 'Narkotika', 'E'),
(97, 4, 'Tag', 'Label', 'Internet', 'Perkataan', 'Situs', 'Blog', 'A'),
(98, 4, 'Absorpsi', 'Pengeluarann', 'Penafsiran', 'Penerimaan', 'Pengambilan', 'Penyerapan', 'E'),
(99, 4, 'Via', 'Pos', 'Surat', 'Kilat khusus', 'Melalui', 'Transportasi', 'D'),
(100, 4, 'Konjugasi', 'Penghubung', 'Tasrif V', 'Penyesuaian', 'Pemugaran', 'kenaikan', 'B'),
(101, 2, 'Jika x = 60 derajat dan jika sudut suatu segitiga adalah 2y, 4y, dan 4y maka …', 'x > y', 'x &lt; y', 'x = y', '2x = 3y', 'x dan y tidak bisa ditentukan', 'A'),
(102, 2, 'Diketahui panjang sisi-sisi sebuah segitiga sama sisi adalah 3 cm dan di dalamnya dibuat segitiga sama sisi yang panjangnya 1 cm. Berapakah jumlah maksimum segitiga kecil yang dibentuk?', '3', '6', '9', '12', '15', 'C'),
(103, 2, 'Sebuah Aquarium panjangnya 4 kaki, lebarnya 3 kaki, dan dalamnya 2 kaki. Jika air dalam aquarium mencapai 4 inci dari atas aquarium maka berapa kaki kubikkah volume air yang ada di aquarium? (1 kaki = 12 inci)', '8', '12', '16', '20', '24', 'D'),
(104, 2, 'Sebuah balok berukuran 9 m x 300 cm x 12 m dipotong menjadi kubus dengan ukuran terbesar yang dapat dibuat. Berapa banyakkah kubus yang dapat dibuat?', '6', '8', '10', '12', '14', 'D'),
(105, 2, 'Sebuah bujur sangkar B, luasnya 81 yang memiliki sisi y. Sedangkan A adalah persegi panjang dengan sisi 18, dan sisi yang lainnya x. Bila luas A sama dengan 2 kali luas B, maka …', 'x > y', 'y > x', 'x = y', '3y = x+2', 'x dan y tidak bisa ditentukan', 'C'),
(106, 3, 'Semua pengendara harus mengenakan helm. Sebagian pengendara mengenakan sarung tangan.', 'Sebagian pengendara tidak mengenakan sarung tangan', 'Semua pengendara tidak mengenakan sarung tangan', 'Sebagian pengendara mengenakan helm dan sarung tangan', 'Sebagian pengendara tidak mengenakan helm dan sarung tangan', 'Sebagian pengendara tidak mengenakan helm dan tidak mengenakan sarung tangan', 'C'),
(107, 3, 'Semua yang hadir merupakan anggota perkumpulan, sebagian yang hadir adalah psikolog.', 'Semua psikolog hadir dalam rapat', 'Semua anggota perkumpulan adalah psikolog', 'Semua anggota perkumpulan yang hadir', 'Sebagian psikolog adalah anggota perkumpulan', 'Sebagian yang hadir bukan anggota perkumpulan', 'D'),
(108, 3, 'Tidak semua hipotesis penelitian terbukti benar. Beberapa penelitian skripsi tidak menguji hipotesis.', 'Beberapa sarjana tidak menulis skripsi', 'Beberapa hipotesis skripsi tidak terbukti benar', 'Semua hipotesis skripsi terbukti benar', 'Semua hipotesis penelitian terbukti benar', 'Semua sarjana, hipotesis skripsinya benar', 'B'),
(109, 3, 'Ada lima orang bersahabat : Yuan, Dian, Nadia, Nisa, dan Yuni. Yang paling muda di antara mereka Yuni. Yuan tidak lebih tua dibandingkan Dian dan Nadia. Hanya Yuan lebih muda dari Nisa. Nadia lebih tua dibandingkan Dian. Urutan usia kelima orang sahabat t', 'Nadia, Dian, Nisa, Yuan, Yuni', 'Yuan, Nadia, Nisa, Dian, Yuni', 'Yuni, Nisa, Yuan, Nadia, Dian', 'Yuni, Yuan, Nisa, Dian, Nadia', 'Nadia, Dian, Yuan, Nisa, Yuni', 'A'),
(110, 3, 'Ogis lebih tinggi daripada Benny, Rangga lebih pendek daripada Ogis, maka:', 'Jika Rangga 180 cm, Benny 180', 'Jika Rangga 180 cm, Benny tingginya kurang dari 180 cm', 'Jika Rangga 180 cm, Benny tingginya lebih dari 180 cm', 'Jika Ogis 180 cm, Benny dan Rangga tingginya kurang dari 180 cm', 'Tidak terdeteksi', 'D'),
(111, 4, 'Virtual', 'Maya', 'Impian', 'Nyata', 'Virgin', 'Hiponema', 'B'),
(112, 4, 'Semiotika', 'Ilmu tentang tanda', 'Ilmu seni', 'Ilmu Bahasa', 'Bahasa simbol', 'Ungkapan kata', 'A'),
(113, 4, 'Renovasi', 'Pemagaran', 'Pemugaran', 'Pembongkaran', 'Peningkatan', 'Pemekaran', 'B'),
(114, 4, 'Friksi', 'Membelah', 'Melepaskan', 'Perpecahan', 'Putus asa', 'Penggabungan', 'C'),
(115, 4, 'Rancu', 'Canggung', 'Jorok', 'Kacau', 'Tidak wajar', 'Semu', 'C'),
(116, 4, 'Prominem', 'Konsisten', 'Biasa', 'Tidak setuju', 'Konsekuen', 'Perintis', 'B'),
(117, 4, 'Utopis', 'Komunis', 'Realistis', 'Agamis', 'Sosialis', 'Demokrasi', 'B'),
(118, 4, 'Paradoksal', 'berseberangan', 'Sejalan', 'Kesempatan', 'Perumpamaan', 'Hubungan', 'B'),
(119, 6, 'Hewan : Senapan : Berburu = ... : ... : ...', 'Tanah : petani : sawah', 'Nasi : sendok : makan', 'Meja : kursi : duduk', 'Halaman : ibu : masak', 'Beras : nasi : jemur', 'B'),
(120, 6, 'Hujan : Kekeringan = ... : ... : ...', 'Api : kebakaran', 'Penuh : sesak', 'Panas : api', 'Lampu : gelap', 'Angin : dingin', 'D'),
(121, 6, 'Rekan : Rival = … :...', 'Pendukung : penghambat', 'Dermawan : serakah', 'Dokter : pasien', 'Adat : istiadat', 'Tradisonal : kontemporer', 'A'),
(122, 6, 'Pakaian : Lemari = … : …', 'Gelap : lampu', 'Kepala : rambut', 'Rumah : atap', 'Air : ember', 'Api : panas', 'D'),
(123, 6, 'Air : Es = Uap : …', 'Salju', 'Es', 'Air', 'Hujan', 'Embun', 'C'),
(124, 7, 'Sebuah buku disewakan dengan harga Rp.1.000 untuk 3 hari pertama dan untuk selanjutnya Rp. 600 setiap hari. Jika penyewa buku tersebut membayar Rp. 11.800 untuk sebuah buku, berapa harikah buku tersebut disewanya ?', '15', '18', '20', '21', '24', 'D'),
(125, 7, 'Nadia hendak membeli sepatu dan gaun dengan membawa uang sebesar Rp 363.000,-. Harga sepatu di toko A adalah Rp. 210.000,- dengan diskon 35 ?n harga celana adalah Rp. 85.000,- dengan diskon 15 %. Uang sisa pembelian sepatu dan celana adalah ...', 'Rp. 145.750,-', 'Rp. 154.250,-', 'Rp. 155.750,-', 'Rp. 144.250,-', 'Rp. 145.250,-', 'B'),
(126, 7, 'Sebuah lonceng jam berbunyi setiap 35 menit sekali. Lonceng tersebut berbunyi untuk pertama kali pada tengah malam. Pada malam yang sama, berapa menit lagikah lonceng tersebut akan berbunyi setelah pukul 04.12 ?', '7', '9', '14', '19', '28', 'E'),
(127, 7, 'Sebuah sepeda memiliki roda berjari-jari 21 cm. Jika roda berputar sebanyak 2.500 kali, maka panjang lintasan lurus yang dilaluinya adalah ...', '1,65 Km', '3,3 Km', '33 Km', '330 Km', '16,5 Km', 'B'),
(128, 7, 'Seekor burung berkicau setiap 14 menit dan sebuah bell berdering setiap 12 menit. Jika burung dan bell berbunyi bersama-sama pada pukul 12 siang maka pukul berapakah mereka pertama kali berbunyi setelah pukul 12 siang tadi?', '14.48', '14.24', '13.54', '13.24', '12.42', 'D'),
(129, 7, 'Sebuah balok kayu berukuran 15 dm × 30 cm × 12 dm dipotong menjadi kubus dengan ukuran terbesar yang dapat dibuat. Berapakah banyaknya kubus yang dapat dibuat?', '6', '9', '12', '15', '20', 'E'),
(130, 7, 'Nilai rata-rata ulangan matematika 13 siswa SMA adalah 7,4. Jika ada 3 orang siswa yang ikut ulangan susulan dengan nilai 6,9 ; 7,8 dan 9,1 maka nilai rata-rata ulangan matematika yang sekarang adalah ...', '7,50', '7,97', '8,00', '8,03', '8,33', 'A'),
(131, 3, 'Seorang penyiar radio harus memutar lagu yang dipesan pendengar. lagu yang dipesan pendengar A akan diputar menjelang akhir acara, lagu pendengar B akan diputar lebih dahulu dari lagu yang dipesan A tetapi bukan sebagai lagu pembuka. lagu yang dipesan pen', 'A', 'B', 'C', 'D', 'E', 'C'),
(132, 3, 'Lima orang pedagang asongan menghitung hasil penjualan dalam satu hari. Pedagang III lebih banyak menjual dari pedagang IV, tetapi tidak melebihi pedagang I. Penjualan pedagang II tidak melebihi pedagang V dan melebihi pedagang I. Pedagang mana yang hasil', 'I', 'II', 'III', 'IV', 'V', 'E'),
(133, 3, 'Siska harus kursus bahasa Mandarin setiap Kamis. Sedangkan Julia kursus bahasa Inggris tiga kali seminggu setiap selasa, rabu dan kamis. Sementara Weni harus kursus bahasa Jepang pada hari yang sama dengan Julia kecuali hari rabu. Linda kursus computer se', 'Linda, Siska dan Weni', 'Julia, Linda dan Weni', 'Linda dan Siska', 'Weni dan Linda', 'Siska dan Weni', 'E'),
(134, 3, 'Andini selalu pergi berwisata di akhir pekan. Tidak semua tempat wisata terletak di luar kota', 'Andini selalu pergi berwisata di luar kota', 'Andini tidak suka berwisata di luar kota', 'Kadangkala Andini berwisata di dalam kota', 'Kadangkala Andini tidak berwisata di akhir pekan', 'Tempat wisata lebih banyak terletak di dalam kota.', 'C'),
(135, 3, 'Hanya barang-barang dari plastik yang dijual di toko Wiwik. Tekstil terbuat dari bahan dasar kapas.', 'Barang plastik hanya djual ditoko Wiwik', 'Semua barang di toko Wiwik bahan dasarnya plastik', 'Tidak ada tekstil yang dijual di toko Wiwik.', 'Toko Wiwik menjual barang dari kapas dan plastik.', 'Di toko Wiwik terdapat segalam macam barang .', 'C'),
(136, 8, 'Awam X ....', 'Khusus', 'Pandai', 'Bodoh', 'Umum', 'Pakar', 'E'),
(137, 8, 'Proletar X ....', 'Feodalis', 'Kapitalis', 'Komunis', 'Sosialis', 'Individualis', 'B'),
(138, 8, 'Deskriptif', 'Fiktif', 'Persuatif', 'Perspektif', 'Argumentatif', 'Naratif', 'A'),
(139, 8, 'Abolisi X ....', 'Keringanan', 'Grasi', 'Pengurangan', 'Pemberatan', 'Penambahan', 'D'),
(140, 4, 'Istal', 'Kandang sapi', 'Kandang kambing', 'Kandang kuda', 'Kandang gajah', 'kandang macan', 'C'),
(141, 6, 'JARUM : BENANG =', 'lurah : aparat', 'manajer : karyawan', 'bapak : anak', 'pemimpin : pengikut', 'komandan : tentara', 'D'),
(142, 6, 'IKLIM : KLIMATOLOGI =', 'fosil : antropologi', 'asal-usul kata : etnologi', 'sekolah : pedagogis', 'bintang : astrologi', 'kulit : dermatologi', 'E'),
(143, 6, 'SEGI TIGA : PIRAMIDA =', 'lingkaran : bola', 'segi empat : kotak', 'segi lima : pentagon', 'segi enam : kubus', 'segi delapan : oktagon', 'A'),
(144, 6, 'STETOSKOP : DOKTER = osiloskop :', 'neurolog', 'arkeolog', 'masinis', 'montir', 'insinyur', 'D'),
(145, 6, 'SEKUTU : KOMPETISI = kolaborasi :', 'Teman', 'Persaingan', 'Lawan', 'Musuh', 'Pertandingan', 'B'),
(146, 9, 'Yang bukan merupakan perangkat masukan  (input device) dari kumpulan nama perangkat keras berikut ini adalah ....', 'Keyboard', 'Mic', 'Scanner', 'Mouse', 'Monitor', 'E'),
(147, 9, 'Pilihlah yang bukan merupakan perangkat Keluaran (output device) dari kumpulan nama perangkat keras berikut ini:', 'Monitor', 'Web Kamera', 'Printer', 'LCD Projector', 'Speaker', 'B'),
(148, 9, 'Pilihlah yang bukan merupakan perangkat lunak sistem operasi dari kumpulan nama perangkat lunak di bawah ini:', 'Linux', 'Microsoft Office', 'Microsoft WIndows', 'Macintos', 'UNIX', 'B'),
(149, 9, 'Microsoft Windows merupakan sistem operasi komputer yang berbasis ….', 'Graphical Universal Interface', 'Picture User Interface', 'Text User Interface', 'Graphical and Picture Interface', 'Graphic User Interface', 'E'),
(150, 9, 'Berikut di bawah ini adalah nama-nama software program aplikasi yang digunakan untuk browsing internet kecuali  ....', 'Netscape', 'Netbrowser', 'Internet Explorer', 'Opera', 'Modzilla', 'B'),
(151, 9, 'Yang tidak termasuk dalam aplikasi Microsoft Office adalah  ....', 'Power Point', 'Excel', 'Word', 'Clip Board', 'Access', 'E'),
(152, 9, 'Sistem komputer terdiri dari 3 (tiga) unsur berikut, kecuali ....', 'Brainware   ', 'Mailware', 'Hardware   ', 'Software', 'Malware', 'E'),
(153, 9, 'Komponen fisik yang membentuk sistem komputer adalah ....', 'Brainware', 'Mailware', 'Hardware ', 'Software', 'Malware', 'C'),
(154, 9, 'Komponen non fisik untuk menjalankan, mengendalikan dan mengatur proses oleh perangkat keras komputer adalah ....', 'Brainware', 'Mailware', 'Hardware   ', 'Software', 'Malware', 'D'),
(155, 9, 'Manusia dengan tenaga dan ilmu pengetahuan yang digunakan untuk mengoperasikan serta mengatur system komputer adalah ....', 'Brainware', 'Mailware', 'Hardware ', 'Software', 'Spyware', 'A'),
(156, 9, 'Tujuan pokok system computer adalah ….', 'Mengolah data menjadi imformasi', 'Mengolah input menjadi proses', 'Mengolah output menjadi input', 'Mengolah output jadi proses', 'Mengolah imformasi jadi output', 'A'),
(157, 9, 'Berikut ini merupakan application software, kecuali ….', 'Ubuntu    ', 'Ms. Office', 'Photoshop', 'RAM', 'Coreldraw', 'D'),
(158, 9, 'Hardware yang berfungsi sebagai alat penunjuk untuk mengatur posisi kursor di layar adalah ….', 'Monitor', 'Printer', 'Mouse', 'Speaker', 'Scanner', 'C'),
(159, 9, 'Yang merupakan Perangkat Input Device yaitu ....', 'Monitor', 'Mouse', 'CPU', 'Printer', 'Proyektor', 'B'),
(160, 9, 'Berikut ini merupakan definisi dari komputer, kecuali ....', 'Sebuah mesin hitung', 'Mesin elektronik', 'Menerima informasi masukan', 'Mengolah informasi', 'Mesin mekanik', 'B'),
(161, 9, 'Berikut ini  yang tidak termasuk fungsi operasi dari komputer adalah ....', 'fungsi operasi pengolahan data', 'fungsi operasi penyimpanan data', 'fungsi operasi pemindahan data', 'fungsi operasi kontrol data', 'fungsi operasi  perhitungan data', 'E'),
(162, 9, 'Fungsi operasi komputer yang dapat menghubungkan komputer dengan lingkungan luar adalah ....', 'fungsi operasi pengolahan data', 'fungsi operasi penyimpanan data', 'fungsi operasi pemindahan data', 'fungsi operasi kontrol data', 'fungsi operasi  perhitungan data', 'C'),
(163, 9, 'Seperangkat komputer yang digunakan oleh satu orang saja / pribadi adalah …..', 'Server', 'client', 'PC ', 'Client Server', 'NIC', 'C'),
(164, 9, 'Perangkat keras komputer yang berfungsi sebagai alat untuk memasukan data atau perintah ke dalam komputer adalah….', 'Output device', 'Input device', 'I/O ports', 'Data BUS', 'Memori', 'B'),
(165, 9, 'Yang termasuk perangkat penyimpan data adalah,kecuali ….', 'hardisk', 'Flashdisk', 'RAM', 'ROM', 'Modem', 'E'),
(166, 9, 'Merupakan alat penyimpanan data sekunder yang kapasitasnya cukup besar adalah...', 'Flashdisk', 'RAM', 'ROM', 'Hardisk', 'Modem', 'D'),
(167, 9, 'Memori yang berfungsi untuk menyimpan sementara perintah dan data pada saat program dijalankan.', 'Flashdisk', 'RAM', 'ROM', 'hardisk', 'Modem', 'B'),
(168, 9, 'Perangkat keras pada komputer atau PC yang berupa chip memori semikonduktor yang isinya hanya bisa dibaca saja', 'Flashdisk', 'RAM', 'ROM', 'Hardisk', 'Modem', 'C'),
(169, 9, 'Modem kepanjangan dari…', 'Modulasi Demodulasi', 'Modulator Demodulator', 'Modulsi Demodulator', 'Modulator Demodulasi', 'Salah Semua', 'B'),
(170, 9, 'Agar perangkat keras dapat berfungsi maka di perlukan …', 'perangkat lunak', 'perangkat tambahan', 'perangkat keluaran', 'perangkat keras', 'perangkat masukan', 'A'),
(171, 9, 'Yang tidak termasuk perangkat lunak aplikasi pengolah kata adalah …', 'Microsoft Word 2007', 'Openoffice.org', 'Abiword', 'Notepad', 'Adobe Photoshop', 'E'),
(172, 9, 'Hal-hal yang harus diperhatikan dalam menghidupkan komputer apabila menggunakan sisitem operasi Microsoft Windows adalah sebagai berikut, kecuali …', 'pastikan semua kabel power di komputer sudah terhubung dengan jaringan listrik', 'hidupkan CPU dengan menakan tombol on di casing', 'hidupkan CPU dengan menakan tombol restart di casing', 'hidupkan CPU dengan menekan tombol on di monitor', 'tunggu sampai prosedur booting selesai', 'C'),
(173, 9, 'Untuk mematikan komputer apabila menggunakan sistem operasi Microsoft Windows adalah dengan menggunakan prosedur …', 'shut down', 'shut up', 'shut system', 'pull down', 'download', 'A'),
(174, 9, 'Berkut ini adalah prosedur shut down di Microsoft Window, kecuali …', 'tutup semua program aplikasi yang masih aktif', 'klik tombol Start dengan mouse di desktop menu', 'pilih tombol Delete', 'klik Turn Off komputer', 'klik tombol Turn Off', 'C'),
(175, 9, 'Tombol … digunakan ketika komputer mengalami hang atau crash.', 'Remote', 'Remove', 'Reset', 'replace', 'reserve', 'C'),
(176, 9, 'Cara menjalankan aplikasi Microsoft Excel dengan menggunakan fasilitas shortcut yang ada di desktop Windows adalah ….', 'klik Start, pilih Programs, klik Microsoft Excel', 'double klik shortcut Excel', 'klik kanan shortcut Excel', 'klik shortcut Excel', 'klik Start, klik Microsoft Excel', 'B'),
(177, 9, 'Nama tempat untuk menyimpan pengelompokan beberapa file terutama yang sejenis, adalah…', 'explorer', 'folder', 'drive', 'dokumen', 'desktop', 'B'),
(178, 9, 'Kegunaan dari tombol “Caps Lock” pada pengeditan dokumen pada aplikasi microsoft word adalah…', 'mengunci kata menjadi besar', 'mengunci huruf menjadi besar', 'mengunci kalimat menjadi besar', 'mengunci paragraph menjadi besar', 'mengunci naskah manjadi besar', 'B'),
(179, 9, 'Perintah untuk menampilkan fasilitas header dan footer adalah…', 'format – header and footer', 'file – header and footer', 'view – header and footer', ' tools – header and footer', 'edit – header and footer', 'C'),
(180, 9, 'Perintah untuk mencetak dokumen ke layar adalah…', 'file – print out', 'file – page print', 'file – print preview', 'file – print', 'file – print – print preview', 'C'),
(181, 9, 'Fungsi dari tombol X yang terdapat pada ujung kanan suatu tampilan window adalah…', 'restore', 'maximize', 'minimize', 'close', 'exit', 'D'),
(182, 9, 'Perintah untuk menjalankan aplikasi power point adalah…', 'start – microsoft power point', 'start – all program – microsoft power point', 'start – office – microsoft power point', 'start – all program – microsoft power point', 'start – all program – office – microsoft power point', 'E'),
(183, 9, 'Kegunaan pilihan Blank Presentasi pada pembuatan presentasi adalah…', 'menggunakan template', 'menggunakan wizard', 'menggunakan slide kosong', 'menggunakan tutorial', 'menggunakan design otomatis', 'C'),
(184, 9, 'ShortCut yang digunakan untuk menghapus Text yang di blok adalah…', 'Ctrl+S', 'Ctrl+Y', 'Ctrl+X', 'Ctrl+V', 'Ctrl+T', 'C'),
(185, 9, 'Surat yang berbentuk elektronik dan dikirim dengan jaringan internet disebut…', 'Chatting', 'e-Mail', 'Sending', 'MIRC', 'Telnet', 'B'),
(186, 9, 'Forum yang di mana pengguna atau pemakai dapat saling berdiskusi atau berbincang-bncang dengan pemakai lain disebut…', 'MRC', 'IRC', 'FTP', 'Chatting', 'Chat Room', 'D'),
(187, 9, 'Proses mengambil data dari internet disebut…', 'Upload', 'Download', 'Copy', 'Loading', 'Get', 'B'),
(188, 9, 'Salah satu fasilitas internet yang dijalankan melalui browser untuk mencari informasi yang diinginkan adalah…', 'Search Engine', 'Portal', 'Situs', 'Web Site', 'Spider', 'A'),
(189, 9, 'Microsoft Office Word termasuk ke dalam bagian software…', 'Sistem pengolah angka', 'Sistem Operasi', 'Sistem Pengolah kata', 'Sistem Pengolah data', 'Sistem Operasi berbasis open source', 'C'),
(190, 9, 'Cara membuka file dalam Microsoft Word adalah…', 'File-Page Setup', 'File-New', 'File-Print Preview', 'File-Open', 'File-Save', 'D'),
(191, 9, 'Perintah untuk mengurutkan data secara menurun (Z ke A) pada pengurutan data (Data Sort), adalah…', 'Ascending', 'Cresending', 'Descending', 'Scresending', 'SortSending', 'A'),
(192, 9, 'Perintah untuk menyisipkan sel, baris dan kolom pada lembar kerja terdapat pada menu…', 'Format', 'Tools', 'Edit', 'Insert', 'WorkSheet', 'D'),
(193, 9, 'Fasilitas yang digunakan untuk mendaftar suatu  email adalah…', 'Sign in', 'Sign Up', 'Register', 'Upload', 'Download', 'B'),
(194, 9, 'Folder yang berfungsi sebagai tempat menyimpan email yang masuk pada yahoo!mail adalah…', 'Inbox', 'Outbox', 'Draft', 'Trash', 'Check Email', 'A'),
(195, 9, 'Folder yang berfungsi sebagai tempat menyimpan email yang pernah dikirim pada yahoo!mail adalah…', 'Inbox', 'Outbox', 'Draft', 'Trash', 'Check email', 'B'),
(196, 9, 'Mengaktifkan ulang komputer yang awalnya sudah aktif disebut . . . .', 'shutdown', 'command line interface', 'restart', 'cold booting', 'Linux', 'C'),
(197, 9, 'Input device yang memiliki fungsi sama seperti mouse, dan biasanya terdapat di keyboard adalah', 'keyboard', 'Touchpad', 'Mouse', 'Monitor', 'Komputer', 'B'),
(198, 9, 'Alat input yang berfungsi untuk mengubah media kertas menjadi sebuah dokumen yang dapat di buka di computer adalah…', 'Printer', 'Foto Copy', 'Joystick', 'Modem', 'Scanner', 'E'),
(199, 9, 'Berikut ini yang merupakan fungsi mouse adalah….', 'Memasukkan data dan program', 'Mengetik dan memasukkan data', 'Mempermudah dalam memilih pilihan', 'Melaksanakan instruksi secara berurutan', 'Untuk menyimpan data dan program', 'C'),
(200, 9, 'Alat input berfungsi untuk mengkopi gambar/teks, lalu disimpan di memori komputer disebut…..', 'Printer', 'Web Cam', 'Kamera Digital', 'Scanner ', 'Harddisk', 'D'),
(201, 9, 'Syarat yang harus dipenuhi sebelum mengoperasikan komputer adalah….', 'Hardware, software, dan brainware', 'Brainware, hardware, software, dan processor', 'Brainware, hardware, dan media penyimpanan data', 'Hardware, software, dan processor', 'Hardware, Brainware dan Processor', 'A'),
(202, 9, 'Perangkat keras komputer yang termasuk sebagai alat keluaran antara lain…..', 'Keyboard dan Mouse', 'CPU dan Keyboard', 'Monitor dan Printer', 'CPU dan Printer', 'Keyboard dan Monitor', 'C'),
(203, 9, 'Sistem komputer terbangun dari elemen-elemen :', 'Hardware – Software – Input Device', 'Software – Software – Output Device', 'Perangkat keras – Pengguna – Perangkat Lunak', 'Proses – Hardware – Software', ' Software -  Proses – Hardware', 'E'),
(204, 9, 'Cara untuk mempercepat kerja komputer dapat dilakukan dengan ....', 'menghentikan layanan windows yang tidak digunakan', 'menambah software game', 'mengurangi penggunaan komputer', 'memasang kipas tambahan', 'menggunakan ups', 'A'),
(205, 9, 'Istilah perangkat lunak yang bebas penggunaannya tetapi tidak harus gratis adalah ', 'Freeware', 'Free Software', ' Shareware', 'Adware', 'Malware', 'B'),
(206, 9, 'Berikut ini yang bukan termasuk hardware sebuah computer adalah….', 'Motherboard', 'Processor', 'Power supply', 'RAM', 'Windows', 'E'),
(207, 9, 'Keuntungan Menggunakan Jaringan Komputer di bawah ini kecuali ?', 'Mengakses data dari komputer lain', 'Dapat disimpan atau di copy ke beberapa komputer lain sebagai strategi back-up data', 'Dapat menggunakan perangkat bersama-sama', 'Administrator jaringan dapat mengontrol data sehingga keamanan data dapat lebih terjamin', 'mengkses wifi', 'E'),
(208, 10, 'Berikut ini yang artinya tutup/keluar kecuali...', 'Quit', 'Close', 'Exit', 'Quitter', 'Stop', 'E'),
(209, 10, 'Simbol garis-garis yang dibawahnya ada angka-angka yang selalu ditemukan pada produk disebut...', 'Codec', 'Barcode', 'Fingerprint', 'Komposisi', 'Captcha', 'B'),
(210, 9, 'Alamat-alamat dalam halaman web dikenal dengan nama :', 'Web', 'URL', 'UTP', 'ISP', 'IP', 'B'),
(211, 9, 'Layanan di internet yang paling tepat digunakan untuk komunikasi adalah :', 'Chatting', 'Browsing', 'FTP', 'e-mail', 'gameonline', 'A'),
(212, 9, 'Browser yang sudah ada ter-instal di Windows dan merupakan browser default bawaan Windows adalah', 'Mozilla Firefox', 'Opera', 'Google Chrome', 'Safari', 'Internet Explorer', 'E'),
(213, 9, 'Tombol yang digunakan untuk melihat alamat website yang pernah kita kunjungi beberapa saat terakhir adalah ', 'History', 'Media', 'Engine', 'Search', 'Favorite', 'A'),
(214, 9, 'Search engine merupakan fasilitas yang disediakan oleh website tertentu, yang merupakan contoh situs yang memiliki fasilitas search engine adalah', 'Google', 'Mozilla Firefox', 'Yahoo Messenger', 'Facebook', 'Toko bagus', 'A'),
(215, 9, 'Proses pengambilan file dari internet untuk kita simpan ke dalam harddisk komputer kita disebut dengan', 'Downline', 'Online', 'Upload', 'Download', 'Unggah', 'D'),
(216, 9, 'Transaksi pembayaran yang dilakukan secara online via internet dikenal dengan nama', 'e-banking', 'e-mail', 'e-learning', 'e-lifestyle', 'e-commerce', 'A'),
(217, 9, 'Berikut ini yang merupakan fungsi mouse adalah….', 'Memasukkan data dan program', 'Mengetik dan memasukkan data', 'Mempermudah dalam memilih pilihan', 'Melaksanakan instruksi secara berurutan', 'Untuk menyimpan data dan program', 'C'),
(218, 9, 'Fungsi dari tombol caps lock pada keyboard adalah….', 'Memindahkan kursor', 'Menghapus data', 'Mengakhiri pengetikan', 'Mengetik huruf besar', 'Membuat spasi', 'D'),
(219, 9, 'Kata lain dari otak computer adalah…', 'CPU', 'Power Supply', 'Processor', 'Mouse', ' Monitor', 'C'),
(220, 9, ' Apa nama kipas pendingin pada computer', 'Motherboard', 'Kipas angin', 'Processor', 'Chipset', 'Cooling fan', 'B'),
(221, 9, 'Pengaturan booting pertama kali dalam instalasi XP diatur di ....', 'Task manager', 'BIOS', 'CD rom', 'Control Panel', 'Windows Explorer', 'B'),
(222, 9, 'Sistem komputer terbangun dari elemen-elemen ...', 'Hardware – Software – Input Device', ' Software – Software – Output Device', 'Perangkat keras – Pengguna – Perangkat Lunak', 'Proses – Hardware – Software', 'Software -  Proses – Hardware', 'E'),
(223, 9, 'Media komunikasi Wireline adalah media komunikasi yang menggunakan', 'Infra Merah    ', 'Gelombang Radio    ', 'Bluetooth', 'Kabe', 'Satelit ', 'D'),
(224, 9, 'Sistem komputer terdiri dari 3 (tiga) unsur berikut, kecuali...', 'Brainware ', 'Hardware', 'Mailware', 'Software', '', 'C'),
(225, 9, 'I/O adalah kependekan dari…', 'In/out', 'Is/output', 'Input/output', 'Input/other', 'Semua jawaban benar', 'C'),
(226, 9, 'Perangkat yang digunakan untuk memasukkan data atau perintah ke dalam computer, adalah kegunaan dari… ', 'Perangkat input', 'Perangkat output', 'Perangkat pemroses', 'Perangkat penyimpanan', 'Perangkat piranti', 'A'),
(227, 9, 'Casing berfungsi sebagai…', 'Alat yang bertugas untuk melakukan perhitungan', 'Pengontrol yang ada pada computer', 'Arus listrik untuk berbagai peralat dalam CPU', 'Kotak pembungkus hardware dala CPU agar terhindar dari kotor', ' Ukuran besar prosesor', 'd'),
(228, 9, 'Kapasitas memori dinyatakan dalam satuan…', 'Byte', 'doc', 'Jpg', 'Png', 'Html', 'A'),
(229, 9, 'Read Only Memory, adalah… ', 'Pengolah data dan intruksi', 'Tempat penyimpanan data sementara', 'Tempat penyimpanan yang hanya dapat dibaca dan tidak dapat diubah', 'Satuan kapasitas memory', 'Salah satu pengembangan dari EDO RAM yg memiliki kecepatan lebih dari 66 MHz', 'C'),
(230, 9, 'Tugas utama power supply, adalah…', 'Membungkus hardware dalam CPU agar terjaga', 'Menyediakan aliran listrik untuk digunakan computer', 'Membuat perintah jika computer terdeteksi virus', 'Menghapus secara otomatis virus yang ada dalam computer', ' Memformat data dokumen yang jarang dibuka', 'B'),
(231, 9, 'Monitor merupakan salah satu alat output, yang berfungsi sebagai…', ' unit keluaran yang memberikan informasi kepada pengguna computer dari hasil peoses dan masih dalam ', 'menampilkan hasil suara', 'mencetak teks atau gambar', 'mencetak gambar dalam ukuran besar', '  semua jawaban salah', 'A'),
(232, 9, 'Contoh perangkat petunjuk adalah... ', 'Keyboard', 'Light Pen   ', 'Digitizing Tablet', 'Mouse', 'Scanner', 'd'),
(233, 9, 'Dibawah ini yang bukan perangkat suara adalah... ', 'Mikropon', 'Automatic Speech Recognition (ASR)  ', 'Kamera', 'Touchtone', 'Headset', 'C'),
(234, 9, 'Teknologi pengiriman sinyal elektronik dari suatu gambar bergerak, pengertian dari... ', ' Suara  ', 'Video     ', 'Sensor', 'Gerakan', 'Gambar tak terformat', 'B'),
(235, 9, 'Dibawah ini perangkat output kecuali...', 'Monitor', 'Speaker  ', 'Plotter', 'Mouse', 'Proyektor', 'D'),
(236, 9, 'Alat yang digunakan untuk presentasi, yang dihubungkan ke komputer untuk menampilkan screen monitor ke dinding, pengertian dari... ', 'Proyektor ', ' Printer    ', 'Inkjet', 'Plotter', 'Dot Matrik', 'D'),
(237, 9, 'Komputer stand alone adalah.....', 'Komputer yang hanya memiliki 1 server dan 1 user saja', 'Komputer yang memiliki banyak server dan banyak user', ' Komputer yang memiliki 2 server dan 2 user', 'Komputer yang memiliki 1 server dan 2 user', 'Komputer yang memiliki 2 server dan 1 user', 'A'),
(238, 9, 'Macam-macam jaringan diklasifikasikan menjadi . . .', 'jaringan transmisi dan koneksi', 'jaringan transmisi dan transformasi', 'jaringan transmisi dan jarak', 'jaringan jarak dan transformasi', ' jaringan lokal dan internasional', 'C'),
(239, 9, 'BIOS singkatan dari….', 'Basic Internal Output Service', 'Basic Input Output System', 'Basic Input Output Service', 'Basic Internal Output System', 'Basic Instinc Output System', 'B'),
(240, 9, 'Yang dimaksud dengan proses “installasi” adalah….', 'Memindah data dari media penyimpan ke komputer', 'Perintah-perintah untuk menjalankan suatu proses', 'Membuat program dari yang belum ada menjadi ada', 'Menguraikan file-file & Menyesuaikan program dengan alat-alat yg terpasang pada komputer', 'Menyalin file-file dari program yang bersangkutan ke media penyimpan dan menjalankan program tersebu', 'D'),
(241, 9, 'Yang harus tersedia sebelum kita meng-install software aplikasi pengolah kata adalah', 'Software sistem operasi', ' Software presentasi', 'Software utilitas', ' Software grafis dan multimedia', 'Software pengolah angka', 'A'),
(242, 9, 'Hardware yang merupakan unit penyimpan adalah….', 'CPU', 'Harddisk', 'Printer', 'Floppy Drive', 'CD room Drive', 'B'),
(243, 9, 'Sistem operasi adalah….', 'penghubung antara brainware, hardware dan software', 'penghubung antara user dan software', 'penghubung user dengan user', 'penghubung software dengan hardware', 'penghubung antara hardware dan brainware', 'A'),
(244, 9, 'Fungsi dari sistem operasi adalah….', 'Mengatur perangkat lunak dengan perangkat keras komputer', ' Mengatur semua operasi dari seluruh perangkat keras komputer', 'Mengatur operasi perangkat lunak komputer', 'Mengatur penggunaan komputer', 'Mengatur perintah komputer', 'A'),
(245, 9, 'Dalam melakukan upaya pencegahan agar perangkat lunak dapat terlindungi hak ciptanya dari pembajakan, maka perusahaan pembuat perangkat lunak melengkapi produknya dengan kode tertentu yang biasa disebut ….', 'Serial number', 'Code number', 'Dial number', 'Passing number', 'Certificate number', 'A'),
(246, 9, 'Dualboot dalam sistem operasi berarti….', 'dapat dijalankan bersama system operasi yang lain', 'dapat dijalankan oleh lebih dari satu pengguna', 'dapat dijalankan di lebih dari satu komputer', 'dapat melakukan tugas secara bersamaan', 'memiliki lebih dari satu versi', 'C'),
(247, 9, 'Mampu menjalankan beberapa proses atau beberapa program dalam satu waktu merupakan pengertian dari ….', 'Multi use', 'Multi player', 'Multi core', 'Multi tasking', ' Multi platform', 'D'),
(248, 9, 'Untuk mengatur tanggal dan waktu, dari jendela Control Panel dipilih….', 'Add or Remove Program', 'Date and Time', 'Internet Options', 'Region and Language', 'Ease of Access Center', 'B'),
(249, 9, 'Fungsi dari perangkat lunak aplikasi adalah….', 'menentukan karakteristik penggunaan komputer', 'membuat perangkat lunak lain', 'menyediakan interface bagi user komputer', ' mengelola seluruh sumber daya komputer', 'memudahkan user untuk menyelesaikan suatu pekerjaan', 'E'),
(250, 9, 'Di bawah ini yang tidak termasuk dalam perangkat lunak aplikasi adalah….', 'Office', 'Browser', 'Multimedia', 'Windows', 'Desain Grafis', 'D'),
(251, 9, 'Untuk mengerjakan tugas-tugas perkantoran jenis aplikasi yang digunakan adalah….', ' Office Suite', 'Graphics Suite', ' AntiVirus', 'Utility', 'Sistem Operasi', 'A'),
(252, 9, ' Tombol Shut down pada sistem operasi berfungsi untuk….', 'Mematikan monitor', 'Membatalkan perintah terakhir', 'Merestart komputer', 'Menghidupkan komputer', 'Mematikan komputer', 'E'),
(253, 9, 'Gambar-gambar kecil pada desktop dan digunakan sebagai jalan pintas untuk membuka file atau menjalankan aplikasi, disebut dengan….', 'Folder', 'File', 'Taskbar', 'Icon', 'Symbol', 'D'),
(254, 9, 'Ketika Setup selesai dijalankan, berarti proses instalasi sistem operasi telah selesai dan sudah bisa dioperasikan. Namun terkadang tampilannya masih kasar dan sound card belum berfungsi. Ketika Sound card, VGA card, printer, Network/internet Card  penggu', 'Aplikasi', 'Program', 'Driver', ' Anti virus', 'Norton Utility', 'C'),
(255, 9, 'Ketika anda bekerja dengan suatu program, tidak selamanya program tersebut bekerja dengan baik. Ada kalanya program tersebut tidak berfungsi sebagaimana mestinya, sehingga tidak dapat menerima perintah-perintah dari pemakai. Dalam keadaan ini dikatakan ba', 'Restart', ' Shoutdown', 'Standby', 'Hang', 'Low memory', 'D'),
(256, 9, 'Ketika anda bekerja dengan suatu program, tidak selamanya program tersebut bekerja dengan baik. Ada kalanya program tersebut tidak berfungsi sebagaimana mestinya, sehingga tidak dapat menerima perintah-perintah dari pemakai. Tetapi anda dapat mematikan pr', 'Alt+F4', 'Ctrl+P', 'Ctrl+I ', 'Ctrl+Alt+Del', 'Tap+Alt+Del', 'D'),
(257, 9, 'Screensaver adalah tampilan sesaat pada waktu komputer tidak digunakan dalam keadaan ….', ' Rusak', 'Menyala', ' Hidup', 'Mati', 'Standby', 'B'),
(258, 9, 'Selama proses instalasi sistem operasi berlangsung, akan muncul beberapa jendela untuk konfigurasi. Pada bagian Regional and Language Options, kita akan memilih …', 'Negara dan Bahasa', 'Waktu', 'Password', 'Jaringan', 'Serial Number', 'A'),
(259, 8, 'Menghapus program aplikasi adalah bagian yang sangat penting dalam Windows karena hal ini sangatlah sering kita gunakan. Cara untuk menghapus program aplikasi di Windows 7 adalah….', 'Start Menu > Control Panel  > Printers and faxes > Pilih Program > Uninstall', 'Start Menu > Settting  > Control Panel  > Add/Remove Program > Pilih Program > Uninstall', 'Start Menu > Control Panel  > Network Connection > Pilih Program > Uninstall', 'Start Menu > Control Panel  > Add/Remove > Pilih Program > Unistall Program > Taskbar and Start menu', 'Start Menu > Control Panel  > Programs > Programs and Features > Pilih Program > Uninstall', 'E'),
(260, 9, 'Perintah yang digunakan untuk menghapus pada layar konsol/terminal di Linux adalah.…', 'Clear', 'Cls', 'Erase', 'Ers', 'Clr', 'A'),
(261, 9, 'Bila kita mempunyai Printer baru dan ingin dihubungkan ke komputer, maka dilakukan setting di control panel > device and printer dengan perintah….', 'Fix a Printer', 'Add a printer', 'Setting Printer', 'Remove Printer', 'Maintenance', 'B'),
(262, 9, '“Auto-hide the taskbar” berarti tampilan taskbar….', 'Tetap', 'Muncul dan tersembunyi secara otomatis', 'Berubah', 'Tersembunyi', 'Di atas Windows', 'B'),
(263, 9, 'Untuk mengubah $23 menjadi Rp23 diatur pada regional setting di bagian….', 'Number', 'Currency', 'Time', 'Date', 'Month', 'B'),
(264, 9, 'Tampilan Windows dimana ikon-ikon shortcut, gadget, dan gambar latar belakang (background) berada disebut….', ' Toolbar', 'Screensaver', 'Pattern', 'Wallpaper', 'Desktop', 'E'),
(265, 9, 'Mengunci desktop aktif atau tampilan layar komputer yang sedang aktif agar orang lain yang tidak berhak tidak dapat masuk ke sistem disebut….', 'lock screen', 'sleep', 'logout', 'shutdown', 'switch user', 'A'),
(266, 9, 'Ciri-ciri jaringan komputer adalah sebagai berikut ini, kecuali….', 'Berbagi pakai perangkat keras (hardware)', 'Berbagi pakai perangkat lunak (software)', 'Berbagi user (brainware)', 'Berbagi saluran komunikasi (internet)', 'Berbagi data dengan mudah.', 'C'),
(267, 9, 'Di bawah ini yang bukan merupakan manfaat jaringan komputer adalah …', 'berbagi perangkat keras', 'memudahkan mengakses informasi', 'berbagi program atau data', 'mendukung kecepatan berkomunikasi', 'menyimpan data lebih aman', 'B'),
(268, 9, 'Perintah “PING” pada jaringan digunakan untuk hal-hal yang berikut ini, kecuali …', 'Menguji fungsi kirim sebuah NIC', 'Menguji fungsi terima sebuah NIC', 'Menguji kesesuaian sebuah NIC', 'Menguji konfigurasi TCP/IP', 'Menguji koneksi jaringan', 'E'),
(269, 9, 'Berikut ini yang merupakan kelebihan dari modem internal adalah …', 'lebih mudah dipasang', 'pemasangan sulit', 'harganya lebih mahal dibandingkan modem eksternal', 'harganya lebih murah dibandingkan modem eksternal', 'dapat dibawa kemana – mana', 'D'),
(270, 4, 'Interupsi adalah', 'Penyelaan', 'Penulisan', 'Penghasilan', ' Penundaan', 'Perlawanan', 'A'),
(271, 4, 'Komitmen=', 'Perjanjian', 'Persamaan', 'Kesepakatan', 'Ketaatan', 'Konsekuen', 'C'),
(272, 4, 'Evaluasi=', 'Ujian', 'Pelajaran', 'Perbandingan', 'Perumusan', ' Penilaian', 'E'),
(273, 5, 'Alpha><', 'Absen', 'Lalai', 'Hadir', 'Lupa', 'Bolos', 'C'),
(274, 5, 'Reaksi><', 'Pasif', 'Aktif', 'Agresif', ' Aksi', 'Proaksi', 'D'),
(275, 5, 'Lawan kata dari Konsisten ><', 'Stabil', ' Ragu-ragu', 'Tetap', 'Berubah-ubah', 'Sama', 'D'),
(276, 5, 'Lawan kata dari Protes adalah ', 'Ikut', 'Melawan', 'Damai', 'Kompak', 'Setuju', 'E'),
(277, 9, 'Cara membuat basis data  baru yang masih kosong dari Ms Access adalah dengan memilih ….', 'Blank data access page', 'Blank database', 'Project using existing data', 'From existing file', 'Project using new data', 'B'),
(278, 8, 'Object Reports  pada Microsoft Accesss merupakan perintah untuk membuat …..', 'Table', 'Query', 'Form  ', 'Laporan', 'Halaman', 'D'),
(279, 9, 'Untuk menjalankan hasil persentasi yang telah kita buat dapat menggunakan perintah ….', 'Slide show => Slide transition', 'Slide show => Animation schemes', 'Slide show => View show', 'Slide show => Slide layout', 'Slide show => Slide design', 'C'),
(280, 9, 'Untuk menjalankan dari suatu slide, di antaranya bisa dilakukan melalui menu slide show, kemudian klik sub menu ….', 'View show', 'Slide transintion', 'Set Up Show', 'Costum animation', 'Present Animation', 'A'),
(281, 9, 'Keunggulan Microsoft Access adalah ….', 'Angka', 'Data base dengan prinsip DBMS', 'Presentase', ' Kata', 'Gambar', 'B'),
(282, 9, 'Data type yang berisi huruf, angka, spasi, tanda baca dan karakter lainya di sebut . . .', ' Memo', 'Number ', 'Date/time', ' Text', 'Currency', 'd'),
(283, 9, 'Orang yang bertugas untuk melaksanakan proses pengolahan data dan bertanggung jawab dalam pemakain perangkat keras computer adalah …..', 'Operator ', 'Program ', 'Analist', ' Teknisi', 'Brainware', 'A'),
(284, 9, 'Berikut ini yang bukan merupakan jenis-jenis jaringan adalah …..', 'LAN', 'MAN ', 'WAN', ' Internet', 'RING', 'E'),
(285, 9, 'Keadaan dimana computer berhenti bekerja tanpa suatu sebab yang jelas saat computer dalam keadaan aktif, disebut …..', 'Hung', 'Hang', 'Shut down', 'Restart', 'Editing', 'B'),
(286, 9, 'Teknologi jaringan yang tepat untuk suatu sekolah dengan satu gedung adalah ….', 'Facsimile', 'WAN ', 'MAN ', 'Internet', 'LAN', 'E'),
(287, 8, 'HTTP (Hyper Text Transfer Protocol) adalah protocol yang digunakan untuk mentransfer dokumen dalam ….', 'Word Wide Wab', 'Word Wide Web ', 'Gopher', 'Jaringan', 'Internet', 'B');
INSERT INTO `soal` (`id`, `id_matauji`, `pertanyaan`, `a`, `b`, `c`, `d`, `e`, `jawaban`) VALUES
(288, 9, 'Proses pemakaian bersama perangkat computer disebut ….', ' Sharing ekstra  ', 'Fasilitas sharing', 'Gabungan', 'Sharing devices', 'Sharing terpasang', 'D'),
(289, 9, 'Kegiatan membuka Web Site disebut juga dengan ….', 'Chatting  ', 'Email ', 'Facebook', 'Download', 'Browsing', 'E'),
(290, 9, 'Untuk menampilkan daftar Situs yang ada pada toolbar menggunakan ….', 'Print', 'Link', 'History', 'Search', 'Stop', 'D'),
(291, 9, 'Dalam alamat internet sebuah Web sering disebut dengan ….', 'WWW', 'COM', 'URL', ' SWEET', 'ATM', 'C'),
(292, 9, 'Menyimpan sebagian informasi pada Web dapat menggunakan cara ….', 'Copy => Paste', 'Delete => Cut', 'Rename => Paste', 'Cut => Paste', 'Move => Cut', 'A'),
(293, 9, 'Suatu kotak pada Browser Internet Explorer untuk mengetik alamat Web disebut ….', 'Refresh ', 'Back', 'Address  ', 'Stop', 'View', 'C'),
(294, 9, 'Apakah kepanjangan dari URL …..', 'Universal Resource Locator', 'Uniform Resource Locator', 'Universal Research Local', 'Universitas Research Local', 'United Resource Local', 'B'),
(295, 9, 'COM.  merupakan nama organisasi yang mengatur situs internet tentang …..', 'Comersial', 'Pendidikan', 'Manajemen', 'Politik', 'Pemerintahan', 'A'),
(296, 9, 'Suatu proses dan cara pengiriman pesan atau gambar melalui Internet disebut ….', 'Chatting', 'Browsing ', 'Download', 'E-Mail', 'Upload', 'E'),
(297, 9, 'Tombol yang harus ditekan ketika hendak masuk ke halaman utama pada yahoo.mail adalah ….', 'Sign up', 'Register ', 'Log out   ', 'Sign in', 'Log in', 'D'),
(298, 9, 'Semua surat yang masuk ke Email akan tertampung pada menu …..', 'Inbox', 'Spam ', 'Sent', 'Draft', 'Outbox', 'A'),
(299, 9, 'Cara untuk mempercepat kerja komputer dapat dilakukan dengan .... ', 'menghentikan layanan windows yang tidak digunakan', 'menambah software game', 'mengurangi penggunaan komputer', 'memasang kipas tambahan', 'menggunakan ups', 'A'),
(300, 9, 'Berikut ini yang bukan merupakan fungsi dari keyboard adalah…', 'Membaca kode', 'Menghapus kata', 'Melaksanakan intruksi', 'Mengetik data', 'Menjalankan perintah', 'A'),
(301, 9, 'Istilah dari teknik menekan menahan kemudian menggesernya ke tempat yang diinginkan dalam mouse di sebut…..', 'Klik kiri', 'Klik kanan', 'Double klik', 'Scroll', 'Drag and drop', 'E'),
(302, 9, 'Fungsi webcam adalah….', 'Mencetak gambar', 'Mencetak text', 'Membaca angka-angka', 'Memasukan gambar', 'Memasukan suara', 'D'),
(303, 9, 'Request Time Out menandakan ….', 'jaringan terhubung dengan baik', 'jaringan terhubung tapi sering putus', 'jaringan tidak terhubung sama sekali', 'permintaan untuk keluar dari jaringan', 'permintaan untuk memutuskan koneksi', 'C'),
(304, 9, 'Pengujian server ini dapat dilakukan dengan mengirimkan pesan ke salah satu account email. Format account email yang benar adalah ….', 'name#namedomain.com', 'name%namedomain.com', 'name@namedomain.com', 'name&namedomain.com', 'name!!namedomain.com', 'C'),
(305, 9, 'Untuk virus yang sangat ganas dan tidak dapat dihapus oleh antivirus, maka tindakan yang biasanya dilakukan oleh antivirus terhadap file yang terinfeksi adalah ….', 'diduplikasi', 'dihapus', 'disimpan', 'dikarantina', 'dicopy', 'D'),
(306, 9, 'Agar anti virus dapat mendeteksi jenis-jenis virus terbaru maka yang harus dilakukan adalah dengan mengaktifkan ….', 'scan automatic', 'life update', 'repeate checking', 'protected automatic', ' tidak ada yang benar', 'B'),
(307, 9, 'Suatu perangkat elektronik yang dapat menerima dan mengolah data menjadi informasi, menjalankan program yang tersimpan dalam memori, serta dapat bekerja secara otomatis dengan aturan tertentu. Ini disebut dengan', 'Security', 'Komputer', 'Attack', 'Software', 'Hardware', 'B'),
(308, 9, 'Segala sesuatu yang menyangkut keamanan dikenal dengan istilah', 'Komputer', 'Security', 'Hardware', 'Brainware', 'Software', 'B'),
(309, 9, 'Jenis layanan yang dapat menjalankan komputer dari jarak jauh merupakan....', 'Elektronik Komputer', 'emote CPU', 'Remote CD', 'Memory', 'Remote Computer', 'E'),
(310, 9, 'Serangan berupa program komputer yang memiliki tujuan untuk dapat merugikan ataupun bersifat mengganggu pengguna sistem yang dapat menginfeksi satu atau lebih system melalui berbagai cara penularan merupakan....', 'Worm', 'DNS Forgery', 'Junk Mail', 'Trojan', 'Virus Komputer', 'E'),
(311, 9, 'Jika  komputer cepat panas, sering hang dan reboot sendiri, tindakan korektif yang perlu kita lakukan adalah pada…', 'Cek kipas angin atau fan', 'Motherboard', 'Power supply', 'Prosesor', 'RAM', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id`, `tahun`) VALUES
(1, 2019),
(2, 2018),
(3, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `j_benar` int(11) NOT NULL,
  `j_salah` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `id_peserta`, `id_panitia`, `id_jadwal`, `j_benar`, `j_salah`, `nilai`, `status`) VALUES
(61, 25, 0, 0, 1, 2, 3, '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matauji`
--
ALTER TABLE `matauji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matauji`
--
ALTER TABLE `matauji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
