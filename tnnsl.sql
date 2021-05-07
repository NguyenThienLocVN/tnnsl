-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2021 lúc 05:29 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tnnsl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` double NOT NULL,
  `district_name` varchar(100) DEFAULT NULL,
  `district_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `district_code`) VALUES
(1, 'Bắc Yên', 'BYE'),
(2, 'Mộc Châu', 'MCH'),
(3, 'Mường La', 'MLA'),
(4, 'Mai Sơn', 'MSO'),
(5, 'Phù Yên', 'PYE'),
(6, 'Quỳnh Nha', 'QNH'),
(7, 'Sốp Cộp', 'SCO'),
(8, 'Sông Mã', 'SMA'),
(9, 'Thuận Châu', 'TCH'),
(10, 'Vân Hồ', 'VHO'),
(11, 'Yên Châu', 'YCH'),
(12, 'TP Sơn La', 'SLA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hydrological_stations`
--

CREATE TABLE `hydrological_stations` (
  `id` int(11) NOT NULL,
  `station_name` varchar(100) DEFAULT NULL,
  `station_code` varchar(100) DEFAULT NULL,
  `station_type` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hydrological_stations`
--

INSERT INTO `hydrological_stations` (`id`, `station_name`, `station_code`, `station_type`, `district`, `region`, `latitude`, `longitude`) VALUES
(1, 'Háng Đồng A', 'HĐA', 'TREN2MW', 'BYE', 'TVSSA', 20.916667, 104.066667),
(2, 'Háng Đồng A1', 'HĐA1', 'TREN2MW', 'BYE', 'TVSSA', 21.133333, 104.166667),
(3, 'Háng Đồng B', 'HĐB', 'TREN2MW', 'BYE', 'TVSSA', 21.266667, 104.65),
(4, 'Làng Sáng A', 'LSA', 'TREN2MW', 'BYE', 'TVSSA', 21.266667, 104.633333),
(5, 'Làng Sáng B', 'LSB', 'TREN2MW', 'BYE', 'TVSSA', 20.936111, 103.921667),
(6, 'Làng Sáng nhỏ', 'LSN', 'TREN2MW', 'BYE', 'TVSSA', 21.25, 103.852222),
(7, 'Nậm Pia', 'NPI', 'TREN2MW', 'MLA', 'TVNMU', 21.433333, 104.04);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `meteorology_stations`
--

CREATE TABLE `meteorology_stations` (
  `id` double NOT NULL,
  `station_name` varchar(100) DEFAULT NULL,
  `station_code` varchar(100) DEFAULT NULL,
  `station_type` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `meteorology_stations`
--

INSERT INTO `meteorology_stations` (`id`, `station_name`, `station_code`, `station_type`, `district`, `region`, `latitude`, `longitude`) VALUES
(1, 'Suối Tân 1', 'STA1', 'TREN2MW', 'MCH', 'TVSVA', 20.883333, 104.75),
(2, 'Suối Tân 2', 'STA2', 'TREN2MW', 'MCH', 'TVSVA', 21.266667, 104.65),
(3, 'Nậm Chim 2', 'NCHIM2', 'TREN2MW', 'BYE', 'TVSSA', 21.2, 104.783333),
(4, 'Nậm Chiến 2', 'NCHIEN2', 'TREN2MW', 'MLA', 'TVNMU', 21.016667, 104.066667),
(5, 'Nậm Khốt', 'NKH', 'TREN2MW', 'MLA', 'TVNMU', 20.966667, 103.8),
(6, 'Chiềng Công 1', 'CCO1', 'TREN2MW', 'MLA', 'TVNMU', 20.916667, 103.35),
(7, 'Chiềng Công 2', 'CCO2', 'TREN2MW', 'MLA', 'TVNMU', 21.433333, 103.65);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_05_095916_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `parent_id` varchar(11) DEFAULT NULL,
  `code` varchar(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `places`
--

INSERT INTO `places` (`id`, `parent_id`, `code`, `name`) VALUES
(1, NULL, 'TPSL', 'Thành phố Sơn La'),
(2, NULL, 'HML', 'Huyện Mường La'),
(3, NULL, 'HMS', 'Huyện Mai Sơn'),
(4, NULL, 'HBY', 'Huyện Bắc Yên'),
(5, NULL, 'HMC', 'Huyện Mộc Châu'),
(6, NULL, 'HPY', 'Huyện Phù Yên'),
(7, NULL, 'HQN', 'Huyện Quỳnh Nha'),
(8, NULL, 'HSC', 'Huyện Sốp Cộp'),
(9, NULL, 'HSM', 'Huyện Sông Mã'),
(10, NULL, 'HTC', 'Huyện Thuận Châu'),
(11, NULL, 'HVH', 'Huyện Vân Hồ'),
(12, NULL, 'HYC', 'Huyện Yên Châu'),
(13, 'HML', 'XNGHML', 'Xã Nậm Giôn'),
(14, 'HMS', 'XCDHMS', 'Xã Chiềng Dong'),
(15, 'HSM', 'XBSHSM', 'Xã Bó Sinh'),
(16, 'HSM', 'XPPHSM', 'Xã Pú Pẩu'),
(17, 'HSM', 'XCCHSM', 'Xã Chiềng Chung'),
(18, 'HSC', 'XSKHSC', 'Xã Sam Kha'),
(19, 'HSC', 'XPBHSC', 'Xã Púng Bánh'),
(20, 'HSC', 'XSCHSC', 'Xã Sốp Cộp'),
(21, 'HMS', 'XCSHMS', 'Xã Chiềng Sung'),
(22, 'HYC', 'XSVHYC', 'Xã Sập Vạt'),
(23, 'HYC', 'XCSHYC', 'Xã Chiềng Sàng'),
(24, 'TPSL', 'XCCTPSL', 'Xã Chiềng Cọ'),
(25, 'TPSL', 'XCDTPSL', 'Xã Chiềng Đen'),
(26, 'TPSL', 'XCNTPSL', 'Xã Chiềng Ngần'),
(27, 'HBY', 'TTBYHBY', 'TT. Bắc Yên'),
(28, 'HBY', 'XCSHBY', 'Xã Chiềng Sại'),
(29, 'HMC', 'XCHHMC', 'Xã Chiềng Hắc'),
(30, 'HMC', 'XCKHMC', 'Xã Chiềng Khừa'),
(31, 'HMC', 'XCSHMC', 'Xã Chiềng Sơn'),
(32, 'HML', 'TTIOHML', 'TT. Ít Ong'),
(33, 'HML', 'XCAHML', 'Xã Chiềng Ân'),
(34, 'HML', 'XCCHML', 'Xã Chiềng Công'),
(35, 'HPY', 'XBPHPY', 'Xã Bắc Phong'),
(36, 'HPY', 'XDDHPY', 'Xã Đá Đỏ'),
(37, 'HPY', 'XGPHPY', 'Xã Gia Phù'),
(38, 'HQN', 'XMGHQN', 'Xã Mường Giàng'),
(39, 'HQN', 'XCNHQN', 'Xã Cà Nàng'),
(40, 'HTC', 'XBLHTC', 'Xã Bản Lầm'),
(41, 'HTC', 'XBMHTC', 'Xã Bó Mười'),
(42, 'HVH', 'XCKHVH', 'Xã Chiềng Khoa'),
(43, 'HVH', 'XCXHVH', 'Xã Chiềng Xuân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rain_stations`
--

CREATE TABLE `rain_stations` (
  `id` int(11) NOT NULL,
  `station_name` varchar(100) DEFAULT NULL,
  `station_code` varchar(100) DEFAULT NULL,
  `station_type` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rain_stations`
--

INSERT INTO `rain_stations` (`id`, `station_name`, `station_code`, `station_type`, `district`, `region`, `latitude`, `longitude`) VALUES
(1, 'Tà Cọ', 'TCO', 'TREN2MW', 'SCO', 'TVNCO', 20.966667, 103.533333),
(2, 'Nậm Công 3', 'NCO3', 'TREN2MW', 'SMA', 'TVNCO', 20.966667, 103.683333),
(3, 'Nậm Chim 1', 'NCHIM1', 'TREN2MW', 'BYE', 'TVSSA', 20.916667, 103.35),
(4, 'Nậm Sập 1', 'NSA1', 'TREN2MW', 'PYE', 'TVSSA', 20.966667, 103.25),
(5, 'Nậm Sập 2', 'NSA2', 'DUOI2MW', 'PYE', 'TVSSA', 21.583333, 103.916667),
(6, 'Nậm Sập 3', 'NSA3', 'DUOI2MW', 'PYE', 'TVSSA', 21.716667, 103.666667),
(7, 'Nậm Sọi', 'NSO', 'DUOI2MW', 'SMA', 'TVNSO', 21.266667, 104.65);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GwiZK1fBUeY5BaiukMgCUjIfiUtrzJuJIFGNAOai', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVjRnNTdSRFZseExMMGh4SGxZY1pRRVZuWGlRTEM1WURrZmlmdlpxNiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMjoiaHR0cDovL2xvY2FsaG9zdC90bm5zbCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY2OiJodHRwOi8vbG9jYWxob3N0L3RubnNsL3F1YW4tbHktY2FwLXBoZXAvdGFvLW1vaS1naWF5LXBoZXAtbnVvYy1tYXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkWnIwUFBxNEEuaVNubmdUQmZXUHdKTzBZaW9wNTMwYmZCb1R6cEFVeS9zQlRsM3VrQUQ0T1MiO30=', 1619974967),
('H0QtyJpZjg71KdAA60eS8D5cm8TsNxzEG6R9bavK', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMkpNQ0R0MjcwZ2R4ZW45dkROeWs1QmtCOTBDelhLMUJUMHdiSTQ4ZCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo2NjoiaHR0cDovL2xvY2FsaG9zdC90bm5zbC9xdWFuLWx5LWNhcC1waGVwL3Rhby1tb2ktZ2lheS1waGVwLW51b2MtbWF0Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHA6Ly9sb2NhbGhvc3QvdG5uc2wvcXVhbi1seS1jYXAtcGhlcC90YW8tbW9pLWdpYXktcGhlcC1udW9jLW1hdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRacjBQUHE0QS5pU25uZ1RCZldQd0pPMFlpb3A1MzBiZkJvVHpwQVV5L3NCVGwzdWtBRDRPUyI7fQ==', 1620013545),
('iacUDD9WitXRiS94IXaWuNpSGzs2HUWUIvSN4jj2', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQVNiRDJOUEc5clFxaTRLbHplRVh3ZEpCYTQwWXFxVzNkQUFFcVRGRiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozOToiaHR0cDovL2xvY2FsaG9zdC90bm5zbC9xdWFuLWx5LWNhcC1waGVwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvdG5uc2wvcXVhbi1seS1jYXAtcGhlcCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRacjBQUHE0QS5pU25uZ1RCZldQd0pPMFlpb3A1MzBiZkJvVHpwQVV5L3NCVGwzdWtBRDRPUyI7fQ==', 1620038971),
('nAZh5xi71HCwOuFBDGw6o1GBxNTmYjNffZzZWnmj', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaE4xdkQycFFvYnNSdXk3YU9wTWVIdzBwajR1aEFqdFlJTjJteHhVOSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMjoiaHR0cDovL2xvY2FsaG9zdC90bm5zbCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjcwOiJodHRwOi8vbG9jYWxob3N0L3RubnNsL3F1YW4tbHktY2FwLXBoZXAveGV0LWR1eWV0LWdpYXktcGhlcC1udW9jLW1hdC80Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFpyMFBQcTRBLmlTbm5nVEJmV1B3Sk8wWWlvcDUzMGJmQm9UenBBVXkvc0JUbDN1a0FENE9TIjt9', 1619924339),
('uilOSHZBeqlI5rW7Eqgha1w3V8J2IlFZqgowkUUN', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUlk1TlR3U2ZiVVdwUTdVZ0VBVDkwdW9lUkRnSjM3RUs0dEM2bmJMZCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozOToiaHR0cDovL2xvY2FsaG9zdC90bm5zbC9xdWFuLWx5LWNhcC1waGVwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvdG5uc2wvcXVhbi1seS1jYXAtcGhlcCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRacjBQUHE0QS5pU25uZ1RCZldQd0pPMFlpb3A1MzBiZkJvVHpwQVV5L3NCVGwzdWtBRDRPUyI7fQ==', 1620053121),
('Vpp5biozZHtiJ4SbymRqUOM1bP5Rc1WqrNg3t8tx', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaWtRTUtnTHZsa3llZDlyZjBES2dlcUhZcUFCUGdBQ3pPODhoTFJWSyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMjoiaHR0cDovL2xvY2FsaG9zdC90bm5zbCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY4OiJodHRwOi8vbG9jYWxob3N0L3RubnNsL3F1YW4tbHktY2FwLXBoZXAveGV0LWR1eWV0LWdpYXktcGhlcC1udW9jLW1hdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRacjBQUHE0QS5pU25uZ1RCZldQd0pPMFlpb3A1MzBiZkJvVHpwQVV5L3NCVGwzdWtBRDRPUyI7fQ==', 1619878555);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `surfacewater_constructions`
--

CREATE TABLE `surfacewater_constructions` (
  `id` varchar(100) NOT NULL,
  `organization_name` varchar(100) DEFAULT NULL,
  `business_reg_num` varchar(100) DEFAULT NULL,
  `business_reg_place` varchar(100) DEFAULT NULL,
  `business_reg_date` varchar(100) DEFAULT NULL,
  `tl_decision` varchar(100) DEFAULT NULL,
  `agency_signed` varchar(100) DEFAULT NULL,
  `id_card_num` varchar(100) DEFAULT NULL,
  `id_card_place` varchar(100) DEFAULT NULL,
  `id_card_date` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `construction_name` varchar(100) DEFAULT NULL,
  `construction_code` varchar(100) DEFAULT NULL,
  `construction_type` varchar(100) DEFAULT NULL,
  `license_num` varchar(100) DEFAULT NULL,
  `license_date` varchar(100) DEFAULT NULL,
  `year_built` varchar(100) DEFAULT NULL,
  `year_operation` varchar(100) DEFAULT NULL,
  `exploit_method` varchar(100) DEFAULT NULL,
  `construction_location` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL,
  `lat_dams` varchar(100) DEFAULT NULL,
  `long_dams` varchar(100) DEFAULT NULL,
  `lat_factory` varchar(100) DEFAULT NULL,
  `long_factory` varchar(100) DEFAULT NULL,
  `construction_status` varchar(100) DEFAULT NULL,
  `operating_time` varchar(100) DEFAULT NULL,
  `water_source` varchar(100) DEFAULT NULL,
  `water_location` varchar(100) DEFAULT NULL,
  `purpose_using_water` varchar(100) DEFAULT NULL,
  `q_ktsd_sxnn` varchar(100) DEFAULT NULL,
  `q_turbin` varchar(100) DEFAULT NULL,
  `wattage` varchar(100) DEFAULT NULL,
  `q_kt_khac` varchar(100) DEFAULT NULL,
  `exploit_mode` varchar(100) DEFAULT NULL,
  `license_duration` varchar(100) DEFAULT NULL,
  `q_kt_max` varchar(100) DEFAULT NULL,
  `q_kt_max_mk` varchar(100) DEFAULT NULL,
  `q_tt` varchar(100) DEFAULT NULL,
  `dt_tuoi_tieu` varchar(100) DEFAULT NULL,
  `q_tuoi_tieu` varchar(100) DEFAULT NULL,
  `q_cap_nuoc_shsx` varchar(100) DEFAULT NULL,
  `q_cap_nuoc_cn` varchar(100) DEFAULT NULL,
  `q_cap_nuoc_kddv` varchar(100) DEFAULT NULL,
  `file_license` varchar(100) DEFAULT NULL,
  `don_xin_cp` varchar(100) DEFAULT NULL,
  `ket_qua_ptcln` varchar(100) DEFAULT NULL,
  `de_an_ktsdn` varchar(100) DEFAULT NULL,
  `bao_cao_ktsdn` varchar(100) DEFAULT NULL,
  `so_do_vtct` varchar(100) DEFAULT NULL,
  `van_ban_ykcd` varchar(100) DEFAULT NULL,
  `ke_khai_ttcqkt` varchar(100) DEFAULT NULL,
  `giay_to_khac` varchar(100) DEFAULT NULL,
  `ct_dau_moi` varchar(100) DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `authorization_money` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `accepted_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object` int(1) NOT NULL,
  `organization_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `object`, `organization_name`, `organization_code`, `address`, `organization_address`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'abc@abc.com', NULL, '$2y$10$Zr0PPq4A.iSnngTBfWPwJO0Yiop530bfBoTzpAUy/sBTl3ukAD4OS', NULL, NULL, NULL, NULL, NULL, 0, 'TDN', 'MDN', 'MDN', 'MDN', 999898989, 1, '2021-02-05 20:43:58', '2021-02-05 20:43:58'),
(3, 'user', 'user@user.com', NULL, '$2y$10$EtemdvbEAYTpPe./Ve4OzOsIncE.BBTmuXh7MpJzxmqzuHv5naWUy', NULL, NULL, NULL, NULL, NULL, 1, 'Coong ty A', 'CTA', 'CTA', 'CTA', 968787878, 0, '2021-02-06 18:06:19', '2021-02-06 18:06:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wastewater_constructions`
--

CREATE TABLE `wastewater_constructions` (
  `id` int(11) NOT NULL,
  `construction_name` varchar(100) NOT NULL,
  `license_num` varchar(100) NOT NULL,
  `license_date` varchar(10) NOT NULL,
  `license_duration` double NOT NULL,
  `license_role` varchar(100) NOT NULL,
  `organization_request` varchar(100) NOT NULL,
  `organization_authorities` varchar(100) NOT NULL,
  `construction_type` varchar(100) NOT NULL,
  `year_operation` double NOT NULL,
  `construction_code` varchar(50) NOT NULL,
  `construction_location` varchar(100) NOT NULL,
  `wattage` double NOT NULL,
  `point_location` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `vi_do` double DEFAULT NULL,
  `kinh_do` double DEFAULT NULL,
  `water_resource` varchar(100) NOT NULL,
  `purpose_using` varchar(100) NOT NULL,
  `receive_water_standard` varchar(100) NOT NULL,
  `ph_receive` double NOT NULL,
  `DO` double NOT NULL,
  `TSS` double NOT NULL,
  `NNO2` double NOT NULL,
  `PPO43` double NOT NULL,
  `iron` double NOT NULL,
  `NNO3` double NOT NULL,
  `NNH4` double NOT NULL,
  `coliforms` double NOT NULL,
  `BOD5` double NOT NULL,
  `wastewater_type` varchar(100) NOT NULL,
  `wastewater_max_flow` double NOT NULL,
  `wastewater_standard` varchar(100) NOT NULL,
  `ph_wastewater` double NOT NULL,
  `TDS` double NOT NULL,
  `temperature` double NOT NULL,
  `amoni` double NOT NULL,
  `file_license` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `hydrological_stations`
--
ALTER TABLE `hydrological_stations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `meteorology_stations`
--
ALTER TABLE `meteorology_stations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rain_stations`
--
ALTER TABLE `rain_stations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `surfacewater_constructions`
--
ALTER TABLE `surfacewater_constructions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wastewater_constructions`
--
ALTER TABLE `wastewater_constructions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hydrological_stations`
--
ALTER TABLE `hydrological_stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `rain_stations`
--
ALTER TABLE `rain_stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `wastewater_constructions`
--
ALTER TABLE `wastewater_constructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
