-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 28, 2021 lúc 05:59 AM
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
-- Cấu trúc bảng cho bảng `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `organization_name` varchar(50) NOT NULL,
  `business_reg_num` varchar(10) NOT NULL,
  `business_reg_place` varchar(100) NOT NULL,
  `business_reg_date` varchar(10) NOT NULL,
  `tl_decision` varchar(100) NOT NULL,
  `agency_signed` varchar(50) NOT NULL,
  `id_card_num` int(12) NOT NULL,
  `id_card_place` varchar(100) NOT NULL,
  `id_card_date` varchar(10) NOT NULL,
  `fax` int(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('3ZuboPvwV88AGmt0cAbcnRxXFtX2y399QTAK06hr', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieFZlYWlFQU9CbW4xWkhmYkJXVDJxWms0dnRDYmxtVk9kaXZGckhVayI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMjoiaHR0cDovL2xvY2FsaG9zdC90bm5zbCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vbG9jYWxob3N0L3RubnNsL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1616844671),
('sHaCdBynurBemXMBGKbOIzOXaav9u7M7BVbPCTXp', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidE5jamJhVWlIaDJjNlVRSUt4VHNOeklRTkF6d0Fvd081QzBkeUJKdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMjoiaHR0cDovL2xvY2FsaG9zdC90bm5zbCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY4OiJodHRwOi8vbG9jYWxob3N0L3RubnNsL3F1YW4tbHktY2FwLXBoZXAvZGFuaC1zYWNoLWdpYXktcGhlcC1udW9jLW1hdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRacjBQUHE0QS5pU25uZ1RCZldQd0pPMFlpb3A1MzBiZkJvVHpwQVV5L3NCVGwzdWtBRDRPUyI7fQ==', 1616868109);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `surfacewater_constructions`
--

CREATE TABLE `surfacewater_constructions` (
  `id` int(10) NOT NULL,
  `construction_name` varchar(100) NOT NULL,
  `license_num` varchar(100) DEFAULT NULL,
  `license_date` varchar(100) NOT NULL,
  `license_duration` int(5) NOT NULL,
  `license_role` varchar(100) DEFAULT NULL,
  `organization_request` varchar(100) NOT NULL,
  `organization_authorities` varchar(100) DEFAULT NULL,
  `year_built` double DEFAULT NULL,
  `year_operation` double DEFAULT NULL,
  `construction_code` varchar(100) DEFAULT NULL,
  `purpose_using_water` varchar(100) DEFAULT NULL,
  `water_source` varchar(100) DEFAULT NULL,
  `construction_location` varchar(100) NOT NULL,
  `district` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL,
  `vi_do_dap` int(20) DEFAULT NULL,
  `kinh_do_dap` int(20) DEFAULT NULL,
  `lat_dams` double DEFAULT NULL,
  `long_dams` double DEFAULT NULL,
  `vi_do_nha_may` int(20) DEFAULT NULL,
  `kinh_do_nha_may` int(20) DEFAULT NULL,
  `lat_factory` double DEFAULT NULL,
  `long_factory` double DEFAULT NULL,
  `exploit_mode` varchar(255) DEFAULT NULL,
  `wattage` double DEFAULT NULL,
  `q_kt_max` double DEFAULT NULL,
  `q_kt_max_mk` double DEFAULT NULL,
  `q_tt` double DEFAULT NULL,
  `watering_area` double DEFAULT NULL,
  `q_tuoi_tieu` double DEFAULT NULL,
  `q_cap_nuoc` double DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `authorization_money` varchar(100) DEFAULT NULL,
  `construction_type` int(1) DEFAULT NULL,
  `file_license` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `surfacewater_constructions`
--

INSERT INTO `surfacewater_constructions` (`id`, `construction_name`, `license_num`, `license_date`, `license_duration`, `license_role`, `organization_request`, `organization_authorities`, `year_built`, `year_operation`, `construction_code`, `purpose_using_water`, `water_source`, `construction_location`, `district`, `commune`, `vi_do_dap`, `kinh_do_dap`, `lat_dams`, `long_dams`, `vi_do_nha_may`, `kinh_do_nha_may`, `lat_factory`, `long_factory`, `exploit_mode`, `wattage`, `q_kt_max`, `q_kt_max_mk`, `q_tt`, `watering_area`, `q_tuoi_tieu`, `q_cap_nuoc`, `landmark`, `authorization_money`, `construction_type`, `file_license`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nhà máy thủy điện Sơ Vin', '433/GP-BTNMTEDIT', '07-02-2021', 10, NULL, 'Công ty điện lực Sơn La', 'Bộ TNMT', 2014, 2016, NULL, 'phát điện và điều tiết, tạo nguồn nước cấp cho công trình thủy lợi Mương Rôm', 'suối Sơ Vin - phụ lưu cấp 1 của sông Đà', '', 'TP. Sơn La', 'Phường Quyết Thắng', 495956, 234543, 20.902859, 104.865293, 501234, 237532, 20.900819, 104.875595, 'chế độ điều tiết ngày đêm', 2.8, 1.29, 0, 0.04, 0, 0, 0, '', '', 1, '3134-GP-BTNMT_Nậm Hóa 2.pdf', 0, '2021-03-07 02:55:05', '2021-02-26 21:49:08'),
(2, 'Thủy điện - thủy lợi Nậm Pia 1', '482/GP-BTNMT', '04-03-2019', 10, '', 'Công ty Cổ phần thủy điện Nậm Pia', 'Bộ TNMT', 2006, 2009, '', 'phát điện và tạo nguồn nước cấp phục vụ tưới cho khoảng 41ha diện tích đất nông nghiệp\r\n', 'suối Nậm Pia, phụ lưu cấp 1 của sông Đà\r\n', '', 'TP. Sơn La\r\n', 'Phường Chiềng Lề\r\n', 0, 0, 0, 0, 513120, 2370241, 21.427105, 104.128454, 'vận hành phụ thuộc hoàn toàn vào chế độ vận hành phát điện của công trình thủy điện Nậm Pia ở phía thượng lưu\r\n', 6.8, 13.2, 0, 0, 41, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(3, 'Thủy điện Suối Lừm 3', '728/GP-BTNMT', '09-03-2018', 10, '', 'Công ty Cổ phần An Thịnh', 'Bộ TNMT', 2011, 2015, '', 'phát điện, điều tiết, tạo nguồn cấp nước cho sinh hoạt và cho sản xuất nông nghiệp\r\n', 'suối Lừm - phụ lưu cấp 1 của sông Đà\r\n', '', 'TP. Sơn La\r\n', 'Phường Quyết Thắng\r\n', 0, 0, 0, 0, 518341, 2362059, 21.353154, 104.17873, 'vận hành phụ thuộc hoàn toàn vào chế độ vận hành phát điện của công trình thủy điện Suối Lừm 1 ở phía thượng lưu\r\n', 14, 4.5, 0, 0.18, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(4, 'Thủy điện Sơn La', NULL, '', 0, '', '', '', 2005, 2012, '', '', '', '', '', '', 499805, 2378330, 21.500218, 104.000007, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:07:05', NULL),
(5, 'Thủy điện Huổi Quảng', '1258/GP-BTNMT', '19-04-2018', 8, '', 'CT Thủy điện Huổi Quảng - Bản Chát - Chi nhánh tập đoàn Điện lực Việt Nam', 'BỘ TNMT', 2006, 2016, '', 'Phát điện', 'suối Nậm Mu', '', 'Than Uyên', 'Khoen on', 487952, 2399573, 21.692052, 103.885455, 592766, 2397611, 21.67194, 104.898266, 'điều tiết ngày đêm\r\n\r\n', 520, 383.1, 0, 5, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(6, 'Thủy điện Nậm Chiến', '3434/GP-BTNMT', '29/12/2017', 10, '', 'CT CP thủy điện Nậm Chiến', 'BỘ TNMT', 2005, 2012, '', 'Phát điện', 'suối Chiến', '', 'Mường La', 'Ngọc Chiến và Chiềng Muông', 515037, 2389507, 21.601108, 104.147122, 510659, 2379881, 21.514194, 104.104776, 'điều tiết ngày đêm\r\n\r\n', 200, 35.61, 0, 1.15, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(7, 'Thủy điện Nậm Chiến 2', '2295/GP-BTNMT', '26-09-2017', 10, '', 'CT CP đầu tư và phát triển điện Tây Bắc và Hồ', 'Bộ TNMT', 2007, 2009, '', 'Phát điện', 'suối Chiến', '', 'Mường La', 'Chiềng Muôn và Chiềng San', 509222, 2378308, 21.499994, 104.090896, 508062, 2376081, 21.479885, 104.079689, 'điều tiết ngày đêm\r\n\r\n', 32, 46.4, 0, 0.9, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(8, 'Thủy điện Chiềng Công II', NULL, '', 0, '', '', '', 2009, 2010, '', '', '', '', NULL, NULL, 520751, 2374384, 21.464453, 104.202121, 0, 0, 0, 0, ' ', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:06:40', NULL),
(9, 'Thủy điện Nậm Chiến III', '2623/GP-BTNMT', '21-08-2018', 10, '', 'CT CP đầu tư và phát triển điện Tây Bắc và Hồ', 'Bộ TNMT', 2017, 2018, '', 'Phát điện', 'Suối Chiến', '', 'Mường La', 'Chiềng San', 508462, 2376017, 21.479305, 104.083549, 508404, 2375832, 21.477634, 104.082988, 'Phụ thuộc hoàn toàn vào chế độ điều tiết, phát điện của nhà máy thủy điện Nậm Chiến 2\r\n', 3.1, 47.51, 0, 0.97, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(10, 'Thủy điện Tà Cọ', NULL, '', 0, '', '', '', 2009, 2012, '', '', '', '', NULL, NULL, 457196, 2316305, 20.93947, 103.590313, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:07:11', NULL),
(11, 'Thủy điện Quang Minh', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', NULL, NULL, 598069, 2303455, 20.821286, 104.94407, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:07:37', NULL),
(12, 'Thủy điện Nậm Trai 3', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', NULL, NULL, 502367, 2397112, 21.669862, 104.024763, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:08:33', NULL),
(13, 'Thủy điện Nậm Trai 4', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', NULL, NULL, 498510, 2395216, 21.652738, 103.987495, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:09:17', NULL),
(14, 'Thủy điện Nậm Mằn 1', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', NULL, NULL, 461852, 2330519, 21.067963, 103.634768, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:08:37', NULL),
(15, 'Thủy điện Nậm Chanh', NULL, '', 0, '', '', '', 2008, 2010, '', '', '', '', NULL, NULL, 486026, 2351096, 21.254172, 103.867239, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:08:48', NULL),
(16, 'Thủy điện To Buông', NULL, '', 0, '', '', '', 2010, 2015, '', '', '', '', NULL, NULL, 541655, 2316547, 20.941673, 104.402409, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:08:45', NULL),
(17, 'Thủy điện Đông Khùa', '1064/GP-BTNMT', '04-03-2018', 10, '', 'CT CP thủy điện To Buông', 'Bộ TNMT', 2016, 2018, '', 'Phát điện', 'suối So Lung', '', 'Yên Châu', 'Tú Nang', 543280, 2318557, 20.959791, 104.418084, 0, 0, 0, 0, 'điều tiết ngày đêm\r\n\r\n', 2.1, 4.22, 0, 0.22, 4.1, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(18, 'Thủy điện Sập Việt', '1404/GP-BTNMT', '05-04-2018', 10, '', 'CT CP thủy điện Sập Việt', 'BỘ TNMT', 2010, 2012, '', 'Phát điện', 'suối Sập Việt', '', 'Yên Châu', 'Sập Vạt', 537451, 2333126, 21.091518, 104.362348, 539362, 2331998, 21.081289, 104.380715, 'điều tiết ngày đêm', 21, 35.62, 0, 2.55, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(19, 'Thủy điện Nậm Quoét 1', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 478791, 2340825, 21.161328, 103.797652, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:08:41', NULL),
(20, 'Thủy điện Suối Két', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 483615, 2338062, 21.136419, 103.844131, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:09:10', NULL),
(21, 'Thủy điện Nậm Nghẹp', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 518487, 2388793, 21.594626, 104.180435, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:09:06', NULL),
(22, 'Thủy điện Suối Tấc 1', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 569724, 2359442, 21.32826, 104.67404, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:09:03', NULL),
(23, 'Thủy điện Suối Tấc 2', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 570044, 2357525, 21.310933, 104.677045, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:09:00', NULL),
(24, 'Thủy điện Suối Khoáng', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 585201, 2334835, 21.105349, 104.821999, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:09:13', NULL),
(25, 'Thủy điện Nậm Công', '1817/GP-BTNMT', '27-07-2017', 10, '', 'CT CP Đầu tư và phát triển điện Tây Bắc và Hồ', 'BỘ TNMT', 0, 2010, '', 'Phát điện', 'suối Nậm Công', '', 'Sông Mã', 'Huổi Một', 468191, 2326830, 21.034762, 103.695838, 469484, 2327024, 21.036536, 103.708275, 'điều tiết ngày đêm', 10, 25.99, 0, 1.64, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(26, 'Thủy điện Nậm Con', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 447830, 2340108, 21.154232, 103.499541, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:09:56', NULL),
(27, 'Thủy điện Huổi Sui', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 503387, 2321853, 20.990073, 104.03446, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:00', NULL),
(28, 'Thủy điện Nậm Lệ 2', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 498633, 2322636, 20.997149, 103.988733, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:39', NULL),
(29, 'Thủy điện Nậm Quoét 2', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 465282, 2345195, 21.200595, 103.66748, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:47', NULL),
(30, 'Thủy điện Nậm Ty 3', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 473324, 2351571, 21.258322, 103.744841, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:49', NULL),
(31, 'Thủy điện Chiềng Phung', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 456013, 2354558, 21.284967, 103.577962, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:43', NULL),
(32, 'Thủy điện Nậm Pừn 2', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 428418, 2308083, 20.864316, 103.313956, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:09', NULL),
(33, 'Thủy điện Nậm Pừn 4', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 430196, 2317551, 20.949903, 103.330663, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:34', NULL),
(34, 'Thủy điện Nậm Tỉa 1', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 432679, 2327890, 21.043381, 103.354136, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:06', NULL),
(35, 'Thủy điện Nậm Tỉa 2', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 430027, 2330902, 21.070488, 103.328499, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:31', NULL),
(36, 'Thủy điện Nậm Pừn 1', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 430714, 2305447, 20.840594, 103.336125, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:28', NULL),
(37, 'Thủy điện Nậm Pừn 3', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 427423, 2312348, 20.902801, 103.304217, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:13', NULL),
(38, 'Thủy điện Nậm Ty 2', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 469820, 2357485, 21.311686, 103.710974, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:03', NULL),
(39, 'Thủy điện Nậm Ty 1', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 465203, 2358965, 21.324972, 103.666439, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:25', NULL),
(40, 'Thủy điện Nậm é', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 448844, 2371950, 21.441868, 103.508349, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:55', NULL),
(41, 'Thủy điện Nậm Hét', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 452454, 2376193, 21.480291, 103.543057, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:58', NULL),
(42, 'Thủy điện Ma Tơi', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 540184, 2312372, 20.903993, 104.388168, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:10:21', NULL),
(43, 'Thủy điện Suối Lừm 1', NULL, '', 0, '', '', '', 0, 2013, '', '', '', '', '', '', 519321, 2363135, 21.362863, 104.188192, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:11:01', NULL),
(44, 'Thủy điện Nậm Công 3', '3367/GP-BTNMT', '27/12/2017', 0, '', 'CT CP đầu tư và phát triển Bắc Minh và Hồ', 'Bộ TNMT', 2007, 2010, '', 'Phát điện', 'suối Nậm Công', '', 'Sông Mã', 'Huổi Một', 462877, 2322993, 21.000004, 103.644793, 360802, 2325085, 21.014016, 102.662884, 'điều tiết ngày đêm', 8, 22.86, 0, 1.54, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(45, 'Thủy điện Nậm Chim 1', NULL, '', 0, '', '', '', 2006, 2010, '', '', '', '', '', '', 534470, 2360232, 21.336415, 104.334207, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:11:09', NULL),
(46, 'Thủy điện Chiềng Công 1', NULL, '', 0, '', '', '', 2009, 2011, '', '', '', '', '', '', 522446, 2378938, 21.505566, 104.218537, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:11:12', NULL),
(47, 'Thủy điện Nà Bó', NULL, '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 561761, 2303516, 20.823403, 104.595264, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', '', 1, '', 0, '2021-02-18 01:11:17', NULL),
(48, 'Thủy điện Chiềng Ngàm Thượng', '773/GP-BTNMT 3079/GP-BTNMT(Cấp lại lần 1)', '09/03/2018 10/10/2018', 0, '', 'CT CP Đầu tư và Phát triển Bình Minh CY CP thủy điện Chiềng Ngàm Thượng\"', 'BỘ TNMT', 2011, 2012, '', 'Phát điện', 'Suối Muội', '', 'Thuận Châu', 'Tông Cọ và Chiềng Ngàm', 476744, 2373283, 21.454483, 103.7775, 476999, 2375568, 21.475125, 103.779929, 'điều tiết ngày đêm', 10, 7.9, 0, 0.4, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(49, 'Thủy điện Nậm Bú', '907/GP-BTNMT', '04-12-2019', 10, '', 'CT CP Thủy điện Nậm Bú và Hồ', 'BỘ TNMT', 0, 0, '', 'Phát điện', 'Suối Nậm Pàn', '', 'Mường La', 'Tạ Bú', 504210, 2370949, 21.433544, 104.042503, 504541, 2371281, 21.436541, 104.045697, 'điều tiết ngày đêm', 7.2, 44.79, 0, 1.7, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(50, 'Thủy điện Háng Đồng A', '1162/GP-BTNMT', '04-12-2018', 10, '', 'CT TNHH Xuân Thiện Ninh Bình và Hồ', 'BỘ TNMT', 2012, 2015, '', 'Phát điện', 'suối Háng Đồng', '', 'Bắc Yên', 'Háng Đồng', 549305, 2357884, 21.314861, 104.477158, 549545, 2354779, 21.286809, 104.47938, 'điều tiết ngày đêm', 16, 3.03, 0, 0.18, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(51, 'Thủy điện Mường Hung', '1670/GP-BTNMT', '07-04-2019', 10, '', 'CT CP thủy điện Pá Chiến và Hồ', 'BỘ TNMT', 2017, 2019, '', 'Phát điện', 'sông Mã', '', 'Sông Mã', 'Mường Hung, Chiềng Khoong và Chiềng Cang\r\n', 480806, 2321094, 20.983124, 103.817277, 480808, 2320818, 20.980631, 103.817299, 'điều tiết ngày đêm', 24, 289.4, 0, 21.2, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(52, 'Thủy điện Nậm Sọi', '1818/GP-BTNMT', '27-07-2017', 10, '', 'CT CP Đầu tư và phát triển điện Tây Bắc và Hồ', 'BỘ TNMT', 2008, 2010, '', 'Phát điện', 'suối Nậm Sọi', '', 'Sông Mã', 'Mường Cai', 472377, 2313488, 20.914312, 103.736324, 472696, 2314410, 20.922645, 103.739376, 'điều tiết ngày đêm', 10, 12.44, 0, 1.42, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(53, 'Thủy điện Nậm Công 5', '1867/GP-BTNMT', '06-12-2018', 10, '', 'CT CP thủy điện Nậm Công Sơn La và Hồ', 'BỘ TNMT', 2017, 2018, '', 'Phát điện', 'suối Nậm Công', '', 'Sông Mã', 'Huổi Một', 469593, 2327265, 21.038714, 103.709319, 470655, 2327033, 21.036636, 103.719541, 'Phụ thuộc hoàn toàn vào chế độ điều tiết, phát điện của nhà máy thủy điện Nậm Công 4\r\n', 4, 32.54, 0, 1.86, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(54, 'Thủy điện Nậm La', '1923/GP-BTNMT', '26/7/2019', 2, '', 'CT CP thủy điện Nậm La và Hồ', 'BỘ TNMT', 2007, 2012, '', 'Phát điện', 'suối nậm La', '', 'Mường La', 'Mường Bú', 493797, 2367946, 21.406414, 103.942057, 498070, 2367822, 21.405303, 103.983272, 'điều tiết ngày đêm', 27, 7.87, 0, 0.38, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(55, 'Thủy điện Mường Sang 2', '1923/GP-BTNMT', '15-06-2018', 10, '', 'CT CP Đầu tư và xây lắm Sông Đà và Hồ', 'BỘ TNMT', 2004, 0, '', 'Phát điện', 'suối Sập Việt', '', 'Mộc Châu', 'Mường Sang', 561285, 2302979, 20.818569, 104.590672, 456329, 2303888, 20.827288, 103.582287, 'điều tiết ngày đêm', 4.6, 7.3, 0, 0.72, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(56, 'Thủy điện Nậm Chim 1B', '2095/GP-BTNMT', '29-06-2018', 10, '', 'CT CP năng lượng Sông Lam Sơn La và Hồ', 'BỘ TNMT', 1016, 0, '', 'Phát điện', 'suối Pao Cư Sáng', '', 'Bắc Yên', 'Hang Chú', 531088, 2361156, 21.344822, 104.301619, 531054, 2358503, 21.32086, 104.301242, 'điều tiết ngày đêm', 10, 3.969, 0, 0.23, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(57, 'Thủy điện Ngọc Chiến', '2332/GP-BTNMT', '09-10-2019', 10, '', 'CT TNHH Xây dựng và Thương mại Tiến Anh và Hồ', 'BỘ TNMT', 0, 0, '', 'Phát điện', 'suối Nậm Nghẹp', '', 'Mường La', 'Ngọc Chiến', 523528, 2388334, 21.59042, 104.229114, 519933, 2387991, 21.587366, 104.194391, 'điều tiết ngày đêm', 12, 3.86, 0, 0.224, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(58, 'Thủy điện Nậm Chim 1A', '2804/GP-BTNMT', '09-12-2018', 10, '', 'CT TNHH Đầu tư và Xây dựng Sông Lam', 'BỘ TNMT', 2013, 2015, '', 'Phát điện', 'Suối Chim', '', 'Bắc Yên', 'Xím Vàng', 534437, 2359439, 21.329252, 104.333873, 531299, 2358321, 21.319211, 104.303601, 'điều tiết ngày đêm', 10, 5.7, 0, 0.66, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(59, 'Thủy điện Nậm Hóa 2', '3134/GP-BTNMT', '16/10/2018', 10, '', 'CT CP đầu tư thủy điện Anpha và Hồ', 'BỘ TNMT', 2012, 2013, '', 'Phát điện', 'suối Nậm Hua', '', 'Thuận Châu', 'Mường bám', 438352, 2362438, 21.355628, 103.407475, 438317, 2362460, 21.355825, 103.407137, 'điều tiết ngày đêm', 8, 62.41, 0, 5.93, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(60, 'Thủy điện Nậm Hóa 1', '3150/GP-BTNMT', '16/10/2018', 10, '', 'CT CP đầu tư thủy điện Anpha và Hồ', 'BỘ TNMT', 0, 2010, '', 'Phát điện', 'suối Nậm Hua', '', 'Thuận Châu', 'Mường bám', 438357, 2368827, 21.413334, 103.407291, 438220, 2368710, 21.412272, 103.405974, 'điều tiết ngày đêm', 18, 60, 0, 5.31, 0, 0, 0, '', '', 1, '', 0, '2021-02-17 16:44:49', NULL),
(63, 'Thuy dien A', '102', '12-11-2000', 10, 'khong', 'Cong ty A', 'BTNMT', 2012, 2014, 'TDA', 'bom nuoc', 'Suoi A', '', 'Moc CHau', 'Xa', 12345, 12345, NULL, NULL, 54321, 54321, NULL, NULL, 'Ngay dem', 15, 16, 17, 18, 19, 20, 21, NULL, NULL, 2, '433_GP-BTNMT_Thủy điện Sơ Vin.PDF', 0, '2021-02-20 22:42:12', '2021-02-20 22:42:12'),
(64, 'asdasd', 'asdasd', 'asdasd', 10, 'asdasd', 'asdasd', 'asdasd', 2010, 2012, 'qwe', 'sdasd', 'zczxc', '', 'zczxcz', 'ZxZx', 12345, 45678, NULL, NULL, 12345, 45678, NULL, NULL, 'asdasd', 10, 11, 12, 13, 14, 15, 16, NULL, NULL, 1, 'C:\\xampp\\tmp\\phpD036.tmp', 0, '2021-02-20 22:57:37', '2021-02-20 22:57:37'),
(65, 'Thuy dien B', '123', '12-4-2002', 10, 'khong', 'Cong ty A', 'BTNMT', 2020, 2022, 'TDB', 'Khai thac', 'Suoi', '', 'TP.SL', 'Chieng Le', 65487, 45678, NULL, NULL, 65487, 45678, NULL, NULL, 'ngay dem', 10, 11, 12, 13, 14, 15, 16, NULL, NULL, 1, '2804-GP-BTNMT_Thủy điện Nậm Chim 1A.pdf', 0, '2021-02-20 23:05:45', '2021-02-20 23:05:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `surfacewater_license_files`
--

CREATE TABLE `surfacewater_license_files` (
  `id` int(11) NOT NULL,
  `license_application` varchar(100) DEFAULT NULL,
  `water_quality_analysis` varchar(100) DEFAULT NULL,
  `exploitation_scheme` varchar(100) DEFAULT NULL,
  `exploitation_report` varchar(100) DEFAULT NULL,
  `location_diagram` varchar(100) DEFAULT NULL,
  `opinion_document` varchar(100) DEFAULT NULL,
  `other_document` varchar(100) DEFAULT NULL,
  `construction_id` int(5) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `surfacewater_license_files`
--

INSERT INTO `surfacewater_license_files` (`id`, `license_application`, `water_quality_analysis`, `exploitation_scheme`, `exploitation_report`, `location_diagram`, `opinion_document`, `other_document`, `construction_id`, `created_at`, `updated_at`) VALUES
(1, 'file_1.pdf', 'file_2.pdf', 'file_3.pdf', 'file_4.pdf', 'file_5.pdf', '', '', 1, '2021-03-27 17:34:37', NULL);

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
-- Chỉ mục cho bảng `organizations`
--
ALTER TABLE `organizations`
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
-- Chỉ mục cho bảng `surfacewater_license_files`
--
ALTER TABLE `surfacewater_license_files`
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
-- AUTO_INCREMENT cho bảng `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT cho bảng `surfacewater_constructions`
--
ALTER TABLE `surfacewater_constructions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `surfacewater_license_files`
--
ALTER TABLE `surfacewater_license_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
