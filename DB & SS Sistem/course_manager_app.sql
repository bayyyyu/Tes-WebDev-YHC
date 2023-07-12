-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Jul 2023 pada 15.36
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_manager_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursus`
--

CREATE TABLE `kursus` (
  `id` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `durasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kursus`
--

INSERT INTO `kursus` (`id`, `judul`, `deskripsi`, `durasi`, `created_at`, `updated_at`) VALUES
(5, 'Pengantar Fotografi Digita', 'Kursus ini adalah pengantar yang komprehensif untuk fotografi digital. Anda akan mempelajari dasar-dasar fotografi, teknik komposisi, penggunaan kamera digital, dan pengeditan foto menggunakan perangkat lunak. Kursus ini cocok untuk pemula yang ingin memahami prinsip-prinsip dasar fotografi digital.', '3 jam', '2023-07-12 08:21:02', '2023-07-12 08:21:02'),
(6, 'Pemasaran Digital untuk Usaha Kecil', 'Kursus ini memberikan pemahaman tentang strategi pemasaran digital yang efektif untuk usaha kecil. Anda akan mempelajari langkah-langkah untuk membangun kehadiran online, memperluas jangkauan audiens, dan mengoptimalkan kampanye pemasaran digital. Kursus ini cocok untuk pemilik usaha kecil yang ingin memanfaatkan potensi pemasaran digital untuk pertumbuhan bisnis mereka.', '2 jam', '2023-07-12 08:22:12', '2023-07-12 08:22:12'),
(7, 'Pengembangan Aplikasi Mobile dengan Flutter', 'Kursus ini memberikan pengantar mendalam tentang pengembangan aplikasi mobile dengan menggunakan framework Flutter. Anda akan mempelajari dasar-dasar pemrograman Flutter, membangun antarmuka pengguna yang responsif, mengintegrasikan fitur-fitur seperti database dan API, serta meluncurkan aplikasi ke platform Android dan iOS. Kursus ini cocok untuk pemula yang ingin memulai karir sebagai pengembang aplikasi mobile.', '2 jam', '2023-07-12 08:23:20', '2023-07-12 08:23:20'),
(8, 'Pengenalan Kecerdasan Buatan', 'Kursus ini adalah pengantar komprehensif untuk kecerdasan buatan (Artificial Intelligence/AI). Anda akan mempelajari konsep-konsep dasar AI, algoritma pembelajaran mesin, dan penggunaan praktis dalam berbagai bidang. Kursus ini cocok untuk siapa saja yang tertarik memahami AI dan potensinya dalam dunia teknologi.', '1 jam setengah', '2023-07-12 08:24:08', '2023-07-12 08:24:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int NOT NULL,
  `kursus_id` int DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `embed_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `kursus_id`, `judul`, `deskripsi`, `embed_link`, `created_at`, `updated_at`) VALUES
(6, 1, 'materi 2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'https://github.com/bayyyyu', '2023-07-12 06:31:17', '2023-07-12 07:45:46'),
(10, 1, 'MUMUN', 'qqqq', 'https://github.com/bayyyyu', '2023-07-12 08:11:35', '2023-07-12 08:11:35'),
(11, 5, 'Dasar-dasar Fotografi', 'Pengenalan Fotografi Digital, Jenis-jenis Kamera dan Fungsinya, Menentukan Komposisi yang Menarik', 'https://github.com', '2023-07-12 08:27:58', '2023-07-12 08:27:58'),
(12, 5, 'Penggunaan Kamera Digital', 'Mengenal Fungsi-fungsi Kamera, Memahami Mode Kamera: Manual, Otomatis, dan Semiotomatis dan Menyusun Pengaturan Kamera untuk Hasil yang Optimal', 'https://github.com', '2023-07-12 08:28:44', '2023-07-12 08:28:44'),
(13, 5, 'Teknik Komposisi Fotografi', 'Aturan Ketiga dan Komposisi yang Seimbang, Memanfaatkan Garis dan Pola dalam Komposisi, Menggunakan Warna dan Kontras untuk Efek Visual', 'https://github.com', '2023-07-12 08:29:20', '2023-07-12 08:29:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
