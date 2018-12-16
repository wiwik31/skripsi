-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2018 pada 16.06
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
(11, 'Admin 3', 'admin3@gmail.com', 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', '', '1'),
(12, 'wiwik', 'wiwikramna@gmail.com', 'wiwik', '0fd1ec5593cd341c7c4af53276f10be6', '', '1');

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
  `jurusan` varchar(30) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode`, `jurusan`, `jumlah_peserta`) VALUES
(2, '030', 'Sistem Komputer', 15),
(3, '020', 'Teknik Informatika', 21),
(4, '040', 'Sistem Informasi ', 50),
(6, '032', 'Komputerisasi Akuntansi', 122),
(30, '001', 'Manajemen Informatika', 10);

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
(8, 'Antonim');

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
(1, 2, 'Wiwik'),
(2, 4, 'Panitia 5'),
(3, 3, 'Panitia 3'),
(4, 1, 'Panitia 4'),
(5, 2, 'Panitia 5');

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
(13, 'KD-AB2EA9', 'Peserta 1', 3, 6, 1, 1, 'L', '0111-01-31', 'Makassar', '082395485655', 'peserta1@gmail.com', 'peserta1', '1ee0cc35596be8e4219c7241ece2195e', 2018, '1'),
(14, 'KD-ABDDB1', 'Peserta 2', 3, 1, 3, 3, 'L', '0000-00-00', 'Bantaeng', '081542365444', 'peserta2@gmail.com', 'Peserta2', 'b77af8c8a2065a5dfb41ec9cdb62b136', 0000, '1'),
(15, 'KD-E6CC9B', 'Peserta 3', 2, 3, 2, 1, 'L', '1983-01-31', 'Makassar', '089456215888', 'peserta3@gmail.com', 'Peserta3', '5ee44cb1e528e875490589d6fb82d1fe', 0000, '1'),
(16, 'KD-897E78', 'peserta4', 2, 3, 3, 3, 'L', '1221-12-12', 'Jakarta', '082354975888', 'peserta4@gmail.com', 'peserta4', '2c3278404abe17dc9e479782563d8cab', 0000, '1'),
(17, 'KD-FA2356', 'Peserta 5', 3, 4, 2, 2, 'P', '1993-01-31', 'Makassar', '0823954755888', 'peserta5@gmail.com', 'peserta5', 'be3339c50f87d29a075f5af5a52adfb9', 0000, '1'),
(18, 'KD-8185E1', 'Peserta6', 2, 2, 4, 2, 'L', '1997-01-31', 'Jeneponto', '082393776124', 'peserta6@gmail.com', 'peserta6', '7707f58edba632fe00fb47e94ba19489', 2010, '1'),
(19, 'KD-1C75A4', 'Wiwik', 1, 4, 2, 2, 'L', '1997-01-31', 'Perintis', '082395445666', 'wiwik@gmail.com', 'wiwik', '0fd1ec5593cd341c7c4af53276f10be6', 2019, '1'),
(20, 'KD-119F50', 'qq', 4, 4, 4, 2, 'L', '0002-02-22', '22', '22', 'q@gmail.com', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 2019, '1');

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
(145, 6, 'SEKUTU : KOMPETISI = kolaborasi :', 'Teman', 'Persaingan', 'Lawan', 'Musuh', 'Pertandingan', 'B');

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
(47, 15, 0, 0, 0, 1, 0, '0'),
(48, 16, 0, 0, 0, 0, 0, '0');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matauji`
--
ALTER TABLE `matauji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
