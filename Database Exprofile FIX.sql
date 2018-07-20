-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 04:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_divisi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`) VALUES
(1, 'Divisi Administrasi Konstruksi'),
(2, 'Divisi Akuntansi'),
(3, 'Divisi Anggaran'),
(4, 'Divisi Energi Baru Dan Terbarukan'),
(5, 'Divisi Enjiniring Dan Perencanaan Pengadaan'),
(6, 'Divisi Human Capital Management System'),
(7, 'Divisi Keselamatan, Kesehatan Kerja, Keamanan Dan Lingkungan'),
(8, 'Divisi Keuangan'),
(9, 'Divisi Konstruksi Regional Jawa Bagian Barat'),
(10, 'Divisi Konstruksi Regional Jawa Bagian Tengah'),
(11, 'Divisi Konstruksi Regional Jawa Bagian Timur, Bali Dan Nusa Tenggara'),
(12, 'Divisi Konstruksi Regional Kalimantan'),
(13, 'Divisi Konstruksi Regional Maluku Dan Papua'),
(14, 'Divisi Konstruksi Regional Sulawesi'),
(15, 'Divisi Konstruksi Regional Sumatera'),
(16, 'Divisi Manajemen Risiko Dan Kepatuhan'),
(17, 'Divisi Niaga'),
(18, 'Divisi Operasi Regional Jawa Bagian Barat'),
(19, 'Divisi Operasi Regional Jawa Bagian Tengah'),
(20, 'Divisi Operasi Regional Jawa Bagian Timur, Bali Dan Nusa Tenggara'),
(21, 'Divisi Operasi Regional Kalimantan'),
(22, 'Divisi Operasi Regional Maluku Dan Papua'),
(23, 'Divisi Operasi Regional Sulawesi'),
(24, 'Divisi Operasi Regional Sumatera'),
(25, 'Divisi Pengadaan Strategis'),
(26, 'Divisi Pengembangan Organisasi'),
(27, 'Divisi Pengembangan Regional Jawa Bagian Barat'),
(28, 'Divisi Pengembangan Regional Jawa Bagian Tengah'),
(29, 'Divisi Pengembangan Regional Jawa Bagian Timur, Bali Dan Nusa Tenggara'),
(30, 'Divisi Pengembangan Regional Kalimantan'),
(31, 'Divisi Pengembangan Regional Maluku Dan Papua'),
(32, 'Divisi Pengembangan Regional Sulawesi'),
(33, 'Divisi Pengembangan Regional Sumatera'),
(34, 'Divisi Pengembangan Talenta'),
(35, 'Divisi Perencanaan Korporat'),
(36, 'Divisi Perencanaan Sistem'),
(37, 'Divisi Perizinan Dan Pertanahan'),
(38, 'Divisi Sistem Dan Teknologi Informasi'),
(39, 'Divisi Supply Chain Management'),
(40, 'Divisi Transaksi Tenaga Listrik Dan Kemitraan Bisnis'),
(41, 'Divisi Treasury'),
(42, 'Divisi Umum'),
(43, 'Inspektorat Audit Regional Jawa Bagian Barat'),
(44, 'Inspektorat Audit Regional Jawa Bagian Tengah'),
(45, 'Inspektorat Audit Regional Jawa Bagian Timur Dan Bali'),
(46, 'Inspektorat Audit Regional Kalimantan'),
(47, 'Inspektorat Audit Regional Kantor Pusat'),
(48, 'Inspektorat Audit Regional Maluku Dan Papua'),
(49, 'Inspektorat Audit Regional Sulawesi Dan Nusa Tenggara'),
(50, 'Inspektorat Audit Regional Sumatera'),
(51, 'Inspektorat Pengembangan Sistem Kualitas Audit'),
(52, 'Satuan Batubara'),
(53, 'Satuan Gas Dan Bbm'),
(54, 'Satuan Hukum Korporat'),
(55, 'Satuan Komunikasi Korporat'),
(56, 'Satuan Pengadaan Ipp'),
(57, 'Satuan Pengawasan Intern'),
(58, 'Satuan Pengendalian Kinerja Korporat');

-- --------------------------------------------------------

--
-- Table structure for table `exprofiles`
--

CREATE TABLE `exprofiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `Foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_Foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Lengkap` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIP` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grade` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Jenjang` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Education_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Education_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kota_Lahir` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Religion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kota_Domisili_Utama` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Alamat_Tinggal_Saat_Ini` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_korporat` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handphone` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Akun_Facebook` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Akun_Twitter` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Akun_Instagram` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Akun_Linkedin` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Jabatan_Saat_ini` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Divisi_Satuan` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Area_of_Expertise_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Area_of_Expertise_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Area_of_Expertise_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Career_Interest_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Career_Interest_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Career_Interest_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Professional_Certification_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Professional_Certification_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Professional_Certification_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Masterpiece_1` longtext COLLATE utf8mb4_unicode_ci,
  `Masterpiece_2` longtext COLLATE utf8mb4_unicode_ci,
  `Masterpiece_3` longtext COLLATE utf8mb4_unicode_ci,
  `About_and_Experience_1` longtext COLLATE utf8mb4_unicode_ci,
  `About_and_Experience_2` longtext COLLATE utf8mb4_unicode_ci,
  `About_and_Experience_3` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_interest` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `nama_interest`) VALUES
(1, 'Distribusi/ Wilayah'),
(2, 'Pembangkit'),
(3, 'Transmisi'),
(4, 'Konstruksi'),
(5, 'Enjiniring'),
(6, 'Energi Primer'),
(7, 'Business Planning'),
(8, 'Marketing and Services'),
(9, 'Human Capital (SDM)'),
(10, 'Pendidikan dan Pelatihan'),
(11, 'Keuangan'),
(12, 'Procurement'),
(13, 'Penelitian dan Pengembangan'),
(14, 'Teknologi Informasi'),
(15, 'Auditor'),
(16, 'Legal dan Kepatuhan'),
(17, 'Communication and Public Relation');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_04_145051_create_exprofiles_table', 1),
(4, '2018_07_06_041634_create_divisi_table', 1),
(5, '2018_07_06_043902_create_interest_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2018-07-07 03:17:00', '2018-07-07 03:17:00'),
(2, 'plnpusat', '2018-07-06 17:00:00', '2018-07-06 17:00:00'),
(3, 'unit', '2018-07-06 17:00:00', '2018-07-06 17:00:00'),
(4, 'pegawai', '2018-07-06 17:00:00', '2018-07-06 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(40, 'superadmin', '$2y$10$c4MIixAeQ0YGDI/QP0Hh7exfMZ7AckUi.746pDlWXZNDx0CCkTKCO', 'a0PMkJJ6065SJm3Sq20nNSplEXiQGB9CbMr8EhXuZpJCi8AiadEX7BtnFOYS', '2018-07-08 19:12:47', '2018-07-08 19:12:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exprofiles`
--
ALTER TABLE `exprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `exprofiles`
--
ALTER TABLE `exprofiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
