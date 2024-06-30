-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2024 pada 14.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuesionermahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `NIM` varchar(15) NOT NULL,
  `programStudi` varchar(50) NOT NULL,
  `noHandphone` varchar(15) NOT NULL,
  `semester` int(11) NOT NULL,
  `tahunAkademik` varchar(9) NOT NULL,
  `domisili` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `namaLengkap`, `NIM`, `programStudi`, `noHandphone`, `semester`, `tahunAkademik`, `domisili`) VALUES
(7, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 5, '2024', 'Singapore'),
(8, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 5, '2023', 'Singapore'),
(9, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 4, '2022', 'Sumedang'),
(10, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 4, '2022', 'Sumedang'),
(11, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 4, '2022', 'Sumedang'),
(12, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 4, '2022', 'Sumedang'),
(14, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 4, '2022', 'Sumedang'),
(15, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 4, '2022', 'Sumedang'),
(16, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 2, '2024', 'Bandung'),
(17, 'User', '2210817310001', 'Teknologi Informasi', '089692601314', 4, '2022', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_akademik`
--

CREATE TABLE `layanan_akademik` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `materi_dosen` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `waktu_perkuliahan` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `referensi_pembelajaran` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `keahlian_dosen` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `kemampuan_staf` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `layanan_staf` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `pedoman_kurikulum` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `pelayanan_dosen` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `keluhan_mahasiswa` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `kecepatan_pelayanan` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `profesionalisme` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `konsultasi_dosen` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `kesopanan_staf` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `transparansi_penilaian` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `suasana_akademik` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `penerapan_sanksi` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `kepedulian_dosen` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `monitoring_kemajuan` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `bantuan_dosen` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `minat_bakat` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `kebersihan_ruang` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `ketersediaan_ruang` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `sarana_pembelajaran` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `buku_referensi` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `fasilitas_ibadah` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `parkir_luas` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_kemahasiswaan`
--

CREATE TABLE `layanan_kemahasiswaan` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `layanan_penalaran` enum('Sangat Puas','Puas','Cukup','Kurang') NOT NULL,
  `layanan_karir` enum('Sangat Puas','Puas','Cukup','Kurang') NOT NULL,
  `layanan_bimbingan` enum('Sangat Puas','Puas','Cukup','Kurang') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `sudah_baca_visi_misi` enum('Ya','Tidak') NOT NULL,
  `sumber_info_visi_misi` set('Website / Media Sosial','Brosur','Pidato / Sosialisasi Pimpinan','Banner / Pamflet','Paparan Informasi') DEFAULT NULL,
  `sosialisasi_visi_misi` enum('Sering','Beberapa Kali','Satu Kali','Tidak Sama Sekali') NOT NULL,
  `pemahaman_visi_misi` enum('Sangat Paham','Paham','Kurang Paham','Tidak Paham') NOT NULL,
  `akomodasi_kegiatan_akademik` enum('Sudah','Sebagian','Hanya Sedikit','Tidak Ada') NOT NULL,
  `tercermin_visi_misi` set('Kurikulum & Kompetensi Lulusan','Proses Pembelajaran','Penelitian / Pengabdian','Kompetensi dosen/ karyawan','Tidak Ada') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `mahasiswa_id`, `sudah_baca_visi_misi`, `sumber_info_visi_misi`, `sosialisasi_visi_misi`, `pemahaman_visi_misi`, `akomodasi_kegiatan_akademik`, `tercermin_visi_misi`, `created_at`) VALUES
(1, 0, 'Ya', 'Website / Media Sosial', 'Sering', 'Sangat Paham', 'Sudah', 'Kurikulum & Kompetensi Lulusan', '2024-06-30 04:34:53'),
(2, 0, 'Ya', 'Website / Media Sosial', 'Sering', 'Sangat Paham', 'Sudah', 'Kurikulum & Kompetensi Lulusan', '2024-06-30 04:40:03'),
(3, 0, 'Ya', 'Website / Media Sosial', 'Sering', 'Sangat Paham', 'Sudah', 'Kurikulum & Kompetensi Lulusan', '2024-06-30 06:15:44'),
(4, 0, 'Ya', 'Website / Media Sosial', 'Sering', 'Paham', 'Sudah', 'Kurikulum & Kompetensi Lulusan', '2024-06-30 11:45:53'),
(5, 0, 'Ya', 'Website / Media Sosial', 'Sering', 'Paham', 'Sudah', 'Kurikulum & Kompetensi Lulusan', '2024-06-30 11:46:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_akademik`
--
ALTER TABLE `layanan_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_kemahasiswaan`
--
ALTER TABLE `layanan_kemahasiswaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `layanan_akademik`
--
ALTER TABLE `layanan_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `layanan_kemahasiswaan`
--
ALTER TABLE `layanan_kemahasiswaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
