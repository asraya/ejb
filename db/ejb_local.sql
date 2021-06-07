-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2021 pada 04.11
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejb_local`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36 Edg/89.0.774.77', '75ca4e7836a04820d77d6a2d7239d390', '2021-04-18 22:10:50'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '421d7939a342f7c70b77aec825a5fa80', '2021-04-21 02:58:18'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '421d7939a342f7c70b77aec825a5fa80', '2021-04-21 02:58:18'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '8c6b2c7297bf24bff8efa28067dcf824', '2021-05-18 23:04:47'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2119d9f5d0bdacd65f519110ccdb6fb8', '2021-05-18 23:05:25'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'f70cc989e8d9d349dbc306b600241179', '2021-06-06 21:10:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'superadmin'),
(2, 'operator', 'operator'),
(3, 'instruktur', 'instruktur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `id` int(11) NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`id`, `group_id`, `user_id`, `type`) VALUES
(1, 1, 1, '1'),
(18, 3, 6, ''),
(19, 3, 7, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'asep.rayana09@gmail.com', NULL, '2021-04-15 02:50:47', 0),
(2, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-18 22:10:59', 1),
(3, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-18 22:55:59', 1),
(4, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-19 22:40:23', 1),
(5, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-20 01:10:51', 1),
(6, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-20 05:25:00', 1),
(7, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-20 21:43:07', 1),
(8, '::1', 'aseprayana95@gmail.com', 2, '2021-04-21 02:57:52', 0),
(9, '::1', 'aseprayana95@gmail.com', 2, '2021-04-21 02:58:29', 1),
(10, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-21 02:59:17', 1),
(11, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-21 21:34:36', 1),
(12, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-22 21:37:09', 1),
(13, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-25 21:24:31', 1),
(14, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-26 23:11:43', 1),
(15, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-27 01:28:41', 1),
(16, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-27 01:37:49', 1),
(17, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-27 22:31:52', 1),
(18, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-27 23:41:00', 1),
(19, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-28 23:56:29', 1),
(20, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-29 22:01:06', 1),
(21, '::1', 'asep.rayana09@gmail.com', 1, '2021-04-29 23:32:50', 1),
(22, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-02 22:06:53', 1),
(23, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-03 01:32:44', 1),
(24, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-04 01:51:58', 1),
(25, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-04 22:09:44', 1),
(26, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-04 22:18:17', 1),
(27, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-04 22:36:00', 1),
(28, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-05 01:56:43', 1),
(29, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-05 22:04:31', 1),
(30, '::1', 'asep.rayana09@gmail.com', NULL, '2021-05-05 23:08:52', 0),
(31, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-05 23:08:56', 1),
(32, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-05 23:48:39', 1),
(33, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-05 23:48:40', 1),
(34, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-09 22:23:21', 1),
(35, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-10 22:30:20', 1),
(36, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-16 21:56:49', 1),
(37, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-16 22:35:20', 1),
(38, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-16 22:42:28', 1),
(39, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-16 22:43:56', 1),
(40, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-17 02:37:09', 1),
(41, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-17 02:37:25', 1),
(42, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-17 03:22:19', 1),
(43, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-17 22:21:06', 1),
(44, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-17 23:37:57', 1),
(45, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-17 23:37:57', 1),
(46, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-18 00:26:45', 1),
(47, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-18 02:35:46', 1),
(48, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-18 21:37:43', 1),
(49, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-18 22:51:26', 1),
(50, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-19 21:57:01', 1),
(51, '::1', 'asep.raya09@gmail.com', NULL, '2021-05-19 21:58:50', 0),
(52, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-19 22:02:52', 1),
(53, '::1', 'asep.rayana09@gmail.com', 1, '2021-05-20 22:17:18', 1),
(54, '::1', 'asep.rayana09@gmail.com', 1, '2021-06-06 21:06:58', 1),
(55, '::1', 'aseprayana95@gmail.com', 7, '2021-06-06 21:10:22', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'Manage-users', 'Manage all users'),
(2, 'Manage-cars', 'Manage all cars'),
(3, 'Manage-roles', 'Manage all roles'),
(4, 'Manage-permissions', 'Manage all permissions');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `type` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_users_permissions`
--

INSERT INTO `auth_users_permissions` (`id`, `user_id`, `permission_id`, `type`) VALUES
(1, 1, 1, '1'),
(2, 1, 2, '2'),
(3, 1, 3, '3'),
(4, 1, 4, '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(5) UNSIGNED NOT NULL,
  `status_id` int(5) UNSIGNED DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'King of Town',
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1618462947, 1),
(2, '2020-01-10-112925', 'App\\Database\\Migrations\\CreateContactTable', 'default', 'App', 1618462947, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `pangkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rank`
--

INSERT INTO `rank` (`id`, `pangkat`) VALUES
(1, 'JENDRAL'),
(2, 'KOMJEN'),
(3, 'IRJEN'),
(4, 'BRIGJEN'),
(5, 'KBP'),
(6, 'AKBP'),
(7, 'KOMPOL'),
(8, 'AKP'),
(9, 'IPTU'),
(10, 'IPDA'),
(11, 'AIPTU'),
(12, 'AIPDA'),
(13, 'BRIPKA'),
(14, 'BRIGADIR'),
(15, 'BRIPTU'),
(16, 'BRIPDA'),
(17, 'ABRIPKA'),
(18, 'ABRIPTU'),
(19, 'ABRIPDA'),
(20, 'BHARAKA'),
(21, 'BHARATU'),
(22, 'BHARADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_provinces`
--

CREATE TABLE `reg_provinces` (
  `id` char(2) NOT NULL,
  `asal_polda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reg_provinces`
--

INSERT INTO `reg_provinces` (`id`, `asal_polda`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'METRO JAYA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DAERAH ISTIMEWA YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA'),
('92', 'PAPUA BARAT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(5) UNSIGNED NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_car`
--

CREATE TABLE `t_car` (
  `id` int(11) NOT NULL,
  `merk_mobil` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_car`
--

INSERT INTO `t_car` (`id`, `merk_mobil`, `type`, `file`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(56, '221', 'Manual', 'pro_26.png', 'asep rayana', '2021-05-18', NULL, '2021-05-19'),
(59, 'eren1', 'Manual', 'prox_13.png', 'asep rayana', '2021-05-18', NULL, '2021-05-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_cms`
--

CREATE TABLE `t_cms` (
  `id` int(11) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_slug` text NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_cms`
--

INSERT INTO `t_cms` (`id`, `app_name`, `app_slug`, `link`, `image`, `description`) VALUES
(1, 'oi ', 'oi', 'a', 'tk.png', 'io');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pangkat_id` int(11) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `polda_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `wawancara_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `tempat_lahir`, `tanggal_lahir`, `pangkat_id`, `no_telepon`, `ktp`, `polda_id`, `category_id`, `wawancara_id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asep rayana', 'Pria', 'jakarta', '1995-09-09', 22, '082123910722', '11223344', 11, 2, 0, 'asep.rayana09@gmail.com', NULL, '$2y$10$j6XHRlbrv0o6zx4GdDPUEOINRcoxjztfa2vCNWpLmIQa4QKDo0vfa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-18 22:05:53', '2021-04-18 22:10:51', NULL),
(6, 'sep', 'Pria', 's', '2333-02-11', 0, '11', '', 0, 1, 0, 'beesting0101@gmail.com', NULL, '$2y$10$4m1K0bwzkF88YJ8JSr/tZupjje22CwI2Vi.3a30iD7RyBonxJzTbC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-18 22:49:29', '2021-05-18 23:05:26', NULL),
(7, 'eren', 'Pria', 'sukabumi', '1999-09-09', 0, '123', '', 0, 2, 0, 'aseprayana95@gmail.com', NULL, '$2y$10$yIwUeY6oiT73KmTOM0L0kuBU0gvIYq7f/UqKTr4S7qhtLWWajEwu6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-06 21:09:29', '2021-06-06 21:10:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reg_provinces`
--
ALTER TABLE `reg_provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_car`
--
ALTER TABLE `t_car`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_cms`
--
ALTER TABLE `t_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `pangkat_id` (`pangkat_id`),
  ADD KEY `nrp` (`ktp`),
  ADD KEY `polda_id` (`polda_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_car`
--
ALTER TABLE `t_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `t_cms`
--
ALTER TABLE `t_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
