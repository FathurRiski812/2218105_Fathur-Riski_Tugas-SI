-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 02:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_diagnosa_dbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_rule` int(11) NOT NULL,
  `nama_diagnosa` varchar(255) NOT NULL,
  `tanggal_diagnosa` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `id_pasien`, `id_rule`, `nama_diagnosa`, `tanggal_diagnosa`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'aa', '2024-05-18', '2024-05-24 10:34:25', '2024-05-25 01:13:05'),
(2, 11, 12, 'bb', '2024-05-25', '2024-05-24 10:35:24', '2024-05-25 01:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` bigint(20) UNSIGNED NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `tanggal_pelayanan` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `email`, `no_telepon`, `tanggal_pelayanan`, `created_at`, `updated_at`) VALUES
(2, 'Dr. Fathur Riski', 'riskifatur812@gmail.com', '0881036091144', '2024-05-24 10:10:00', '2024-05-23 19:07:05', '2024-05-23 19:07:05'),
(3, 'Dr. Dhani Franscisscus', 'Fransss@email.com', '098765432185', '2024-05-24 12:22:00', '2024-05-23 19:48:16', '2024-05-23 19:56:44'),
(5, 'Dr. Vincent Michael', 'Vincentmchl@gmail.com', '097597124327', '2024-05-23 09:02:00', '2024-05-23 19:56:24', '2024-05-23 19:56:24'),
(6, 'Dr. Conly Ariella Massangin', 'Ariellacnlm@gmail.com', '096345298714', '2024-05-29 09:00:00', '2024-05-23 19:57:47', '2024-05-23 19:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` bigint(20) UNSIGNED NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(2, 'Lemas', NULL, NULL),
(3, 'Sakit kepala hebat', NULL, NULL),
(5, 'Nyeri di bagian belakang mata', NULL, NULL),
(6, 'Sakit otot dan sendi', NULL, NULL),
(7, 'Hilang nafsu makan', NULL, NULL),
(8, 'Mual dan muntah', NULL, NULL),
(9, 'Ruam kemerahan yang timbul atau tidak timbul', NULL, NULL),
(10, 'trombosit turun', NULL, NULL),
(11, 'Nyeri perut yang berat', NULL, NULL),
(12, 'Gelisah', NULL, NULL),
(13, 'Jantung berdebar', NULL, NULL),
(14, 'Kulit dingin, pucat, dan basah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_konsultasi`
--

CREATE TABLE `hasil_konsultasi` (
  `id_hasil_konsultasi` bigint(20) UNSIGNED NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `hasil_konsultasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_konsultasi`
--

INSERT INTO `hasil_konsultasi` (`id_hasil_konsultasi`, `id_konsultasi`, `hasil_konsultasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'positif DBD', '2024-05-25 02:48:48', '2024-05-25 02:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `tanggal_konsultasi` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_pasien`, `id_dokter`, `id_diagnosa`, `tanggal_konsultasi`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 1, '2024-05-25 18:54:00', '2024-05-25 01:40:35', '2024-05-25 01:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_23_055531_create_diagnosa_table', 1),
(6, '2024_05_23_060925_create_dokters_table', 1),
(7, '2024_05_23_061451_create_gejalas_table', 1),
(8, '2024_05_23_061637_create_hasil_konsultasis_table', 1),
(9, '2024_05_23_061913_create_konsultasis_table', 1),
(10, '2024_05_23_062221_create_pasiens_table', 1),
(11, '2024_05_23_062531_create_penyakits_table', 1),
(12, '2024_05_23_062714_create_rule_gejalas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telepon`, `email`, `created_at`, `updated_at`) VALUES
(3, 'andrian', 'laki-laki', 'araya', '098765432123', 'Andrizeil@gmail.com', NULL, NULL),
(4, 'nana', 'perempuan', 'Dieng', '345353455453', 'ltea76224@gmail.com', NULL, NULL),
(6, 'andri', 'laki-laki', 'bantur', '087543167538', 'Andrizeilaz@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `deskripsi_penyakit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `deskripsi_penyakit`, `created_at`, `updated_at`) VALUES
(1, 'infeksi virus dengue', 'Penyakit virus yang dibawa oleh nyamuk, yang terjadi di daerah tropis dan subtropis. Orang yang terinfeksi virus ini untuk kedua kalinya memiliki risiko yang jauh lebih besar terserang penyakit parah.', NULL, NULL),
(2, 'kekebalan tubuhnya tergolong lemah.', 'Kurangnya aktivitas fisik dapat menyebabkan imun tubuh seseorang menurun. Aktivitas fisik akan memberikan hasil positif bagi tubuh. Aktivitas fisik dengan intensitas sedang akan meningkatkan imunitas seluler dan mencegah terjadinya infeksi', NULL, NULL),
(3, 'Gigitan Nyamuk Aedes aegypti', 'Nyamuk Aedes aegypti akan menjadi pembawa virus dengue setelah menghisap darah orang yang mengidap DBD.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rule_gejala`
--

CREATE TABLE `rule_gejala` (
  `id_rule_gejala` bigint(20) UNSIGNED NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `aturan` varchar(255) NOT NULL,
  `hasil_aturan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rule_gejala`
--

INSERT INTO `rule_gejala` (`id_rule_gejala`, `id_gejala`, `id_penyakit`, `aturan`, `hasil_aturan`, `created_at`, `updated_at`) VALUES
(1, 7, 3, 'istirahat', 'istirahat penuh', '2024-05-25 00:47:37', '2024-05-25 00:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@email.com', NULL, '$2y$10$nNVIU/iuHiUq720J8/B4Yu1pegDrwxegQoZ0ScAxid19r.OCyEAxW', NULL, '2024-05-23 18:57:46', '2024-05-23 18:57:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD UNIQUE KEY `dokter_email_unique` (`email`),
  ADD UNIQUE KEY `dokter_no_telepon_unique` (`no_telepon`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  ADD PRIMARY KEY (`id_hasil_konsultasi`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `pasien_no_telepon_unique` (`no_telepon`),
  ADD UNIQUE KEY `pasien_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rule_gejala`
--
ALTER TABLE `rule_gejala`
  ADD PRIMARY KEY (`id_rule_gejala`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  MODIFY `id_hasil_konsultasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rule_gejala`
--
ALTER TABLE `rule_gejala`
  MODIFY `id_rule_gejala` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
