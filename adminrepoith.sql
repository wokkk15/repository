-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 05, 2024 at 08:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminrepoith`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel`
--

CREATE TABLE `tabel` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `penulis` varchar(75) NOT NULL,
  `abstrak` text NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel`
--

INSERT INTO `tabel` (`id`, `judul`, `jenis`, `penulis`, `abstrak`, `keyword`, `jurusan`) VALUES
(1, 'Pengembangan Media Proxy untuk Mendukung Komunikasi Real Time Berbasis Web (WebRTC)', 'JURNAL', 'Muhammad Aldi Alfatih | Arif Hidayat', 'Aplikasi komunikasi real time berbasis web (webRTC) cukup populer saat ini karena memberikan kemudahan bagi para pengguna dalam melakukan pertukaran data berupa gambar, suara maupun video antar client secara peer-to-peer tanpa adanya plugin tambahan seperti flash player pada browser. Akan tetapi aplikasi webRTC sendiri memiliki keterbatasan pada jumlah client yang dapat terhubung dalam satu waktu terkhusus pada aplikasi berupa video conference. Hal ini dikarenakan setiap client yang terhubung akan mengkonsumsi bandwidth, RAM, serta processor yang cukup tinggi seiring dengan peningkatan jumlah client (peer). Tujuan dari penelitian ini adalah untuk menghasilkan sebuah infrastruktur yang memanfaatkan media server untuk mengatasi kendala - kendala pada aplikasi webRTC serta dapat diterapkan di lingkungan Universitas Hasanuddin. Dalam penelitian ini dikembangkan sebuah algoritma yang dapat digunakan untuk membagi beban kerja dari aplikasi webRTC kedalam beberapa media server sehingga aplikasi webRTC dapat digunakan untuk skala yang lebih besar. Selain itu algoritma tersebut digunakan untuk mengoptimalkan penggunaan beberapa media server di lingkungan Universitas Hasanuddin. Hasil dari penelitian ini adalah dikembangkannya sebuah aplikasi webRTC berupa video conference yang menerapkan algoritma tersebut serta pembuatan model infrastruktur berbasis media server.', 'Kurento, Video Conference, webRTC', 'Sistem Informasi'),
(2, 'REDUKSI REGION OF INTEREST UNTUK OPTIMALISASI KINERJA SISTEM KLASIFIKASI MODEL KENDARAAN ', 'TESIS', 'Muhammad Rivaldi Jefri | Osama Iyad Al Ghozy', 'Program uji emisi kendaraan diterapkan dalam rangka pengendalian pencemaran udara. Pengukuran tingkat emisi gas buang pada kendaraan selama ini dilakukan secara manual, meskipun hal tersebut juga dapat dilakukan dengan mengacu pada model kendaraan. Teknologi berbasis computer vision dapat dimanfaatkan untuk membuat kegiatan tersebut menjadi lebih efisien dengan bantuan sistem deteksi dan klasifikasi model kendaraan. Pada penelitian ini, sistem yang dibangun menggunakan pendekatan Region of Interest (ROI) dalam membatasi area pada gambar mobil, metode Three Frame Difference (TDF) dalam mendeteksi kendaraan, dan metode Oriented and Rotated BRIEF (ORB) serta Bag of Visual Word (BOVW) dengan rentang jumlah kluster 100 hingga 1000 yang berkelipatan 100 dan akan direkomendasikan dalam mengekstrak fitur kendaraan. Selain itu, untuk melakukan klasifikasi model kendaraan menggunakan metode Support Vector Machine (SVM). Sistem kemudian diuji berdasarkan perhitungan sensitivitas, kesalahan deteksi, dan akurasi. Hasil penelitian menunjukkan bahwa sistem mampu mendeteksi kendaraan dengan nilai rata-rata nilai sensitivitas sebesar 98.36% dan tingkat kesalahan deteksi sebesar 7.33%. Selain itu, dengan membatasi atau mereduksi area pada gambar dapat mengoptimalkan kinerja sistem dengan rata-rata peningkatan akurasi sebesar 8.4%. Pada tahap klasifikasi dengan 5 model kendaraan diperoleh akurasi maksimum sebesar 83.81% pada kluster 800.', 'sistem deteksi, klasifikasi model kendaraan, reduk', 'Ilmu Komputer'),
(3, 'Sistem Deteksi Pelat Nomor Kendaraan Roda Dua Berdasarkan Variabel Kecepatan ', 'SKRIPSI', 'Andi Marimar Muchtamar | Indrabayu | Intan Sari Areni', 'Kepadatan kendaraan di dominasi oleh kendaraan roda dua. Dari data Badan Pusat Statistik tahun 2018 yang bersumber dari Kantor Kepolisian Republik Indonesai menuliskan bahwa jumlah sepeda motor untuk wilayah Indonesia sebanyak 120.101 Juta dari jumlah kendaraan sebanyak 146.858 Juta. Jumlah kendaraan yang banyak mengakibatkan aparat kepolisian sulit untuk menindak lanjuti pengendara jika terjadi pelanggaran. Peristiwa ini menjadi masalah karena kurangnya bukti dalam pelanggaran sehingga jika terjadi pelanggaran tidak dapat ditindak lanjuti. Nomor polisi yang tercantum pada pelat kendaraan bisa digunakan oleh pihak berwajib sebagai barang bukti pengendara yang melakukan pelanggaran lalu lintas. Penelitian-penelitian sebelumnya yang telah dilakukan membuat sistem deteksi pelat dengan satu kendaraan saja. Maka pada penelitian ini mengembangkan sistem yang dapat mendeteksi dan mengenali teks pelat lebih dari satu kendaraan atau multi detection. Metode yang digunakan adalah Local Binary Pattern (LBP) untuk mendeteksi pelat dan Optical Character Recognition (OCR) untuk mengenali teks pada pelat kendaraan roda dua. Penelitian ini menggunakan tiga skenario yang berbeda-beda. Pada skenario pertama dengan 1 kendaraan, skenario kedua dengan 2 kendaraan dan skenario ketiga dengan 3 kendaraan dengan masing-masing kecepatan 40 km/jam, 50 km/jam dan 60 km/jam, diambil menggunakan kamera static Vivotek ip 9165-hp. Hasil penelitian menunjukkan akurasi untuk deteksi pelat menghasilkan akurasi 100%. Tetapi untuk mengenali teks karakter mendapatkan akurasi tertinggi 80% pada single detection dan untuk multi detection mengasilkan akurasi tertinggi 90%. Data uji digunakan sebanyak 16 file data dengan berdurasi 30 detik dengan masing-masing video terdapat 9 sampai 10 kendaraan roda dua.', 'Pelat Nomor Kendaraan, Local Binary Pattern (LBP),', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'mala', 'user', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel`
--
ALTER TABLE `tabel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel`
--
ALTER TABLE `tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
