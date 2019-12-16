-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2019 pada 20.35
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bodyspas`
--

CREATE TABLE `bodyspas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bodyspas`
--

INSERT INTO `bodyspas` (`id`, `nama_paket`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Lulur coklat', 'coklat madagaskar', 100000, NULL, NULL),
(3, 'Rose Wine', 'foot bath + Aromatherapy Massage + Head Massage + Rose Wine and Aromatherapy Scrub', 1300000, '2019-12-16 10:44:28', '2019-12-16 10:44:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facialareas`
--

CREATE TABLE `facialareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `facialareas`
--

INSERT INTO `facialareas` (`id`, `nama_paket`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Ear', '-', 150000, '2019-12-16 10:36:11', '2019-12-16 10:36:11'),
(2, 'Chin', '-', 150000, '2019-12-16 10:36:44', '2019-12-16 10:36:44'),
(3, 'Half Face', '-', 350000, '2019-12-16 10:37:07', '2019-12-16 10:37:07'),
(4, 'Full Face', '-', 600000, '2019-12-16 10:37:29', '2019-12-16 10:37:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `haircuts`
--

CREATE TABLE `haircuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `haircuts`
--

INSERT INTO `haircuts` (`id`, `nama_paket`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(4, 'Chandelier Layers', 'perfect for long to medium-length hair, works with all hair types, and can be easily adjusted for your face shape', 300000, '2019-12-16 08:06:47', '2019-12-16 08:36:17'),
(6, 'Mermaid Shag', 'allows women to have all of their length while changing up the layers', 250000, '2019-12-16 08:12:35', '2019-12-16 08:12:35'),
(7, 'Feathered Ends', 'Style with loose waves and plenty of salt spray to get that perfect beachy look, even if you\'re landlocked.', 200000, '2019-12-16 08:13:37', '2019-12-16 08:13:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `legsareas`
--

CREATE TABLE `legsareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `legsareas`
--

INSERT INTO `legsareas` (`id`, `nama_paket`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Feet', '-', 200000, '2019-12-16 10:39:50', '2019-12-16 10:39:50'),
(2, 'Brazillian', '-', 450000, '2019-12-16 10:40:12', '2019-12-16 10:40:12'),
(3, 'Buttock', '-', 600000, '2019-12-16 10:40:35', '2019-12-16 10:40:35'),
(4, 'Full Legs', '-', 2300000, '2019-12-16 10:41:07', '2019-12-16 10:41:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_15_102233_bodyspa', 1),
(5, '2019_12_15_104027_create_bodyspas_table', 1),
(7, '2019_12_15_105432_create_haircuts_table', 2),
(8, '2019_12_15_130456_create_paketcantiks_table', 3),
(9, '2019_12_16_162617_create_facialareas_table', 4),
(10, '2019_12_16_163217_create_legsareas_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketcantiks`
--

CREATE TABLE `paketcantiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paketcantiks`
--

INSERT INTO `paketcantiks` (`id`, `nama_paket`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'PAKET SNOW WHITE', 'FACIAL + HAIR SPA', 200000, NULL, NULL),
(2, 'PAKET AYU', 'FACIAL + HAIR SPA + HAIR TONING', 250000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bodyspas`
--
ALTER TABLE `bodyspas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `facialareas`
--
ALTER TABLE `facialareas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `haircuts`
--
ALTER TABLE `haircuts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `legsareas`
--
ALTER TABLE `legsareas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paketcantiks`
--
ALTER TABLE `paketcantiks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bodyspas`
--
ALTER TABLE `bodyspas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `facialareas`
--
ALTER TABLE `facialareas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `haircuts`
--
ALTER TABLE `haircuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `legsareas`
--
ALTER TABLE `legsareas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `paketcantiks`
--
ALTER TABLE `paketcantiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
