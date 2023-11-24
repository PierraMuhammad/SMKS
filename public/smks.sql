-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2023 pada 10.07
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_driver` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `drivers`
--

INSERT INTO `drivers` (`id`, `name_driver`, `origin`, `tlp`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Pierra Muhammad Shobr', 'Surabaya', '+6281357623265', 'pierrams1@gmail.com', 'available', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_23_183559_create_vehicles_table', 1),
(6, '2023_11_23_183609_create_drivers_table', 1),
(7, '2023_11_23_183620_create_requests_table', 1),
(8, '2023_11_23_184946_add_vehicles_to_requests_table', 1),
(9, '2023_11_23_185002_add_drivers_to_requests_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_awal` varchar(255) NOT NULL,
  `lokasi_akhir` varchar(255) NOT NULL,
  `pihak1` varchar(255) NOT NULL,
  `flag_p1` int(11) NOT NULL,
  `pihak2` varchar(255) NOT NULL,
  `flag_p2` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `requests`
--

INSERT INTO `requests` (`id`, `lokasi_awal`, `lokasi_akhir`, `pihak1`, `flag_p1`, `pihak2`, `flag_p2`, `status`, `created_at`, `updated_at`, `vehicle_id`, `driver_id`) VALUES
(1, 'pusat', 'pusat', 'pusat', 1, 'pusat', 1, 'menunggu verifikasi pihak 1', NULL, NULL, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tlp`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'adminSMKS@gmail.com', '$2y$12$9aIphFyX.SZ97QCCpAgoqO/AOsTbPa0y0t9cKQFBMWbxJbTktp7y6', '(555) 123-4567', 'admin', '2023-11-23 19:39:41', '2023-11-23 19:39:41', NULL),
(2, 'pusat', 'pusat.SMKS@gmail.com', '$2y$12$.RP6BLdvp3j/X64RmKZx3OpQZcbDYtiaDu1JI9o1jrSq9TneKj5oy', '(555) 987-6543', 'user', '2023-11-23 19:40:26', '2023-11-23 19:40:26', NULL),
(3, 'cabang1', 'cabang1.SMKS@gmail.com', '$2y$12$KFCab7B.mLhCebRg1yBfbON7PwQ4idBDTr..q8rPcVRNbZeNR2ET2', '(555) 777-8888', 'user', '2023-11-23 19:40:57', '2023-11-23 19:40:57', NULL),
(4, 'Kolaka', 'kolaka.SMKS@gmail.com', '$2y$12$aZGTG7JuIU9Y.Cs5Az8VkOrWNqoY7kd9Gx2LmzREkaQapuA7Wj0Lq', '(555) 234-5678', 'user', '2023-11-23 19:43:28', '2023-11-23 19:43:28', NULL),
(5, 'vale', 'Vale.SMKS@gmail.com', '$2y$12$5wrDxNAkafQSlw.ya8dxKO9tzQZ.LpcmKODx8vB45sCmKSr1ejImm', '(555) 890-1234', 'user', '2023-11-23 19:44:04', '2023-11-23 19:44:04', NULL),
(6, 'Morowali', 'morowali.SMKS@gmail.com', '$2y$12$hYDpT0WU97Qux6VYa6hZGeBR.hCAR0ETu4NHbFoUKOjHjRPoE88/a', '(555) 345-6789', 'user', '2023-11-23 19:45:29', '2023-11-23 19:45:29', NULL),
(7, 'Maba', 'maba.SMKS@gmail.com', '$2y$12$owkoXUbl/KRGEmWlORUXO.m8S1vkTHY9m.1aoiZECZr7XcbQpRU8y', '(555) 456-7890', 'user', '2023-11-23 19:46:12', '2023-11-23 19:46:12', NULL),
(8, 'Papua', 'papua.SMKS@gmail.com', '$2y$12$OQ/4ThlhBRg07HKrSzjaVu/8zs9EID82a392hL.x2H1xiko12V4je', '(555) 876-5432', 'user', '2023-11-23 19:47:32', '2023-11-23 19:47:32', NULL),
(9, 'Gag', 'gag.SMKS@gmail.com', '$2y$12$rO9VYevU/oF/O3TVwnj5b.Np3pKW1TkFx09kVO/w9JAxI4hHm6QWO', '(555) 321-0987', 'user', '2023-11-23 19:50:15', '2023-11-23 19:50:15', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_vehicle` varchar(255) NOT NULL,
  `type_vehicle` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `BBM` int(11) NOT NULL,
  `repair_date` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vehicles`
--

INSERT INTO `vehicles` (`id`, `name_vehicle`, `type_vehicle`, `owner`, `BBM`, `repair_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Train twobussend', 'angkutan orang', 'perusahaan', 2000, 29, 'available', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `requests_driver_id_foreign` (`driver_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`),
  ADD CONSTRAINT `requests_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
