-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2023 at 09:16 PM
-- Server version: 10.1.45-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f4lk9usrbc32_e-shop-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `subtitle`, `image`, `category`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'The Personality Trait That Makes People Happier', 'The Personality Trait That Makes People Happier', 'blog-1.jpg', 'TRAVEL', '', '2023-08-09 16:39:36', NULL),
(2, 3, 'This was one of our first days in Hawaii last week.', 'This was one of our first days in Hawaii last week.', 'blog-2.jpg', 'CodeLeanON', '', '2023-08-09 17:00:00', NULL),
(3, 3, 'Last week I had my first work trip of the year to Sonoma Valley', 'Last week I had my first work trip of the year to Sonoma Valley', 'blog-3.jpg', 'TRAVEL', '', '2000-01-19 16:39:46', NULL),
(4, 3, 'Happppppy New Year! I know I am a little late on this post', 'Happppppy New Year! I know I am a little late on this post', 'blog-4.jpg', 'CodeLeanON', '', '2009-12-31 16:39:56', NULL),
(5, 3, 'Absolue collection.', 'Absolue collection. The Lancome team has been one...', 'blog-5.jpg', 'MODEL', '<p>ok lla vll</p>', '2017-12-20 16:40:05', '2023-08-04 15:48:20'),
(11, 4, 'Thời trang phái nữ', 'Fashion', '6349a464e498404d9d53715f2f541661_64cdb43abfdd3_230805_093018.jpeg', 'Fashion', '<p>Okllllllllllllllllllllla</p>', '2023-08-05 02:03:45', '2023-08-05 02:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Calvin Klein', NULL, NULL),
(2, 'Diesel', NULL, NULL),
(4, 'Tommy Hilfiger', NULL, NULL),
(9, 'AVIANO', '2023-08-05 03:21:22', '2023-08-05 03:21:22'),
(10, 'MIMIX', '2023-08-06 14:09:45', '2023-08-06 14:09:45'),
(11, 'Nin Shoes', '2023-08-06 14:14:38', '2023-08-06 14:14:38'),
(12, 'CAPMAN', '2023-08-06 14:27:13', '2023-08-06 14:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_10_144750_create_orders_table', 1),
(6, '2023_07_10_145040_create_order_details_table', 1),
(7, '2023_07_10_145210_create_products_table', 1),
(8, '2023_07_10_145257_create_brands_table', 1),
(9, '2023_07_10_145441_create_product_categories_table', 1),
(10, '2023_07_10_145553_create_product_images_table', 1),
(11, '2023_07_10_145633_create_product_details_table', 1),
(12, '2023_07_10_145717_create_product_comments_table', 1),
(13, '2023_07_10_145807_create_blog_comments_table', 1),
(14, '2023_07_10_150816_create_blogs_table', 1),
(15, '2023_07_22_083138_create_tags_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `address`, `city`, `email`, `phone`, `payment`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'vu thanh', 'cong', 'Nam Định', 'HN', 'congvtc02@gmail.com', '0971765824', 'pay_later', 1, '2023-08-02 03:24:25', '2023-08-02 03:24:25'),
(3, 5, 'vu thanh', 'cong', 'Nam Định', 'HN', 'congvtc02@gmail.com', '0971765824', 'pay_later', 5, '2023-08-03 16:14:57', '2023-08-04 04:06:34'),
(4, 2, 'cong', 'vu', 'Nam Định', 'HN', 'congvtc02@gmail.com', '0971765824', 'pay_later', 7, '2023-08-03 16:21:10', '2023-08-04 04:07:17'),
(5, 2, 'cong', 'vu', 'Nam Định', 'HN', 'congnso02@gmail.com', '0971765824', 'pay_later', 7, '2023-08-03 16:26:44', '2023-08-05 02:53:31'),
(6, 5, 'Vũ Thành', 'Cong', '190 Nguyễn Trãi', 'Hà Nội', 'congvtc02@gmail.com', '0971765824', 'pay_later', 1, '2023-08-08 09:32:55', '2023-08-08 09:32:55'),
(7, 7, 'Cong', 'Vũ', '190 Nguyễn Trãi', 'Hà Nội', 'congnso02@gmail.con', '0971765824', 'pay_later', 1, '2023-08-08 09:38:48', '2023-08-08 09:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(1, 2, 7, 2, 35, 70, '2023-08-02 03:24:25', '2023-08-02 03:24:25'),
(2, 3, 8, 1, 35, 35, '2023-08-03 16:14:57', '2023-08-03 16:14:57'),
(3, 3, 7, 1, 35, 35, '2023-08-03 16:14:57', '2023-08-03 16:14:57'),
(4, 4, 9, 5, 34, 170, '2023-08-03 16:21:10', '2023-08-03 16:21:10'),
(5, 5, 2, 2, 13, 26, '2023-08-03 16:26:44', '2023-08-03 16:26:44'),
(6, 5, 6, 1, 34, 34, '2023-08-03 16:26:44', '2023-08-03 16:26:44'),
(7, 6, 15, 1, 0, 0, '2023-08-08 09:32:55', '2023-08-08 09:32:55'),
(8, 7, 14, 2, 12, 24, '2023-08-08 09:38:48', '2023-08-08 09:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `weight`, `sku`, `featured`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Pure Pineapple', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', '', 629.99, 20, 495, 1.3, '00012', 1, 1, NULL, NULL),
(2, 2, 2, 'Guangzhou sweater', NULL, NULL, 35, 20, 13, NULL, NULL, 1, 1, NULL, NULL),
(3, 3, 2, 'Guangzhou sweater', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 1, NULL, NULL),
(4, 4, 1, 'Microfiber Wool Scarf', NULL, NULL, 64, 20, 35, NULL, NULL, 1, 3, NULL, NULL),
(5, 1, 3, 'Men\'s Painted Hat', NULL, NULL, 44, 20, 35, NULL, NULL, 0, 3, NULL, NULL),
(6, 1, 2, 'Converse Shoes', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 1, NULL, NULL),
(7, 1, 1, 'Pure Pineapple', NULL, NULL, 64, 20, 35, NULL, NULL, 1, 6, NULL, NULL),
(8, 1, 1, '2 Layer Windbreaker', NULL, NULL, 44, 20, 35, NULL, NULL, 1, 1, NULL, NULL),
(9, 1, 1, 'Converse Shoes', NULL, NULL, 35, 110, 34, NULL, NULL, 1, 2, NULL, '2023-08-02 03:04:29'),
(10, 1, 1, 'Quần Jeans', '<p>Chất lượng rất tuyệt vời</p>', 'perfect và very perfect', 100, 20, 70, 1.5, 'C5232', 1, 1, '2023-08-04 16:18:42', '2023-08-05 01:47:55'),
(11, 9, 1, 'Bộ Quần Áo Nam Mùa Hè AVIANO', '<p>Bộ Quần &Aacute;o Nam M&ugrave;a H&egrave; AVIANO Chất Liệu Poly Coolmax Tho&aacute;ng Kh&iacute;, Thấm H&uacute;t Mồ H&ocirc;i, Đồ Bộ Nam Basic Dễ Phối Đồ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🔰 Th&ocirc;ng tin sản phẩm Bộ Quần &Aacute;o Nam M&ugrave;a H&egrave; AVIANO Chất Liệu Poly Coolmax Tho&aacute;ng Kh&iacute;, Thấm H&uacute;t Mồ H&ocirc;i, Đồ Bộ Nam Basic Dễ Phối Đồ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🎗 Chất liệu: Poly Coolmax</p>\r\n\r\n<p>🎗 M&agrave;u sắc: Đen - Xanh than - X&aacute;m - Be - Xanh dương</p>\r\n\r\n<p>🎗 Thương hiệu: AVIANO</p>\r\n\r\n<p>🎗 Xuất xứ: Việt Nam</p>\r\n\r\n<p>🎗Size: M - L- XL - XXL.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🔰M&ocirc; tả chi tiết sản phẩm Bộ Bộ Quần &Aacute;o Nam M&ugrave;a H&egrave; AVIANO Chất Liệu Poly Coolmax Tho&aacute;ng Kh&iacute;, Thấm H&uacute;t Mồ H&ocirc;i, Đồ Bộ Nam Basic Dễ Phối Đồ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>👉Bộ quần &aacute;o nam m&ugrave;a h&egrave; được l&agrave;m từ chất liệu vải Poly Coolmax sợi Poly kết hợp Spandex gi&uacute;p bạn thoải m&aacute;i trong mọi hoạt động</p>\r\n\r\n<p>👉Kết hợp bộ đồ nam được đa dạng phong c&aacute;ch c&oacute; thể mặc nh&agrave;, dạo phố hay chơi thể thao</p>\r\n\r\n<p>👉M&agrave;u sắc đa dạng, basic ph&ugrave; hợp với nhiều lứa tuổi</p>\r\n\r\n<p>👉 Đường may tinh tế, tỉ mỉ trong từng chi tiết</p>', 'Chất Liệu Poly Coolmax Thoáng Khí, Thấm Hút Mồ Hôi, Đồ Bộ Nam Basic Dễ Phối Đồ', 5, 60, 3, 0.5, NULL, 1, 1, '2023-08-05 03:27:24', '2023-08-05 03:30:06'),
(12, 9, 1, 'Áo Polo AVIANO Trơn Basic Chất Liệu Poly', '<p>&Aacute;o Polo AVIANO Trơn Basic Chất Liệu Poly Thấm H&uacute;t Mồ H&ocirc;i, &Aacute;o Thun Nam C&oacute; Cổ 7 M&agrave;u Thanh Lịch</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🔰 Th&ocirc;ng tin sản phẩm &Aacute;o Polo AVIANO Trơn Basic Chất Liệu Poly Thấm H&uacute;t Mồ H&ocirc;i, &Aacute;o Thun Nam C&oacute; Cổ 7 M&agrave;u Thanh Lịch</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🎗 M&agrave;u sắc: Trắng - Đen - Than - Xanh Dương - Xanh L&aacute; - Đỏ Đ&ocirc; - Be -Xanh Cổ Vịt - Xanh Mint - N&acirc;u B&ograve;</p>\r\n\r\n<p>🎗 Thương hiệu: AVIANO</p>\r\n\r\n<p>🎗 Xuất xứ: Việt Nam</p>\r\n\r\n<p>🎗K&iacute;ch thước: M-L-XL-XXL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🔰M&ocirc; tả chi tiết sản phẩm &Aacute;o Polo AVIANO Trơn Basic Chất Liệu Poly Thấm H&uacute;t Mồ H&ocirc;i, &Aacute;o Thun Nam C&oacute; Cổ 7 M&agrave;u Thanh Lịch</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>👉&Aacute;o Polo được l&agrave;m từ chất liệu Poly Coolmax c&oacute; độ đ&agrave;n hồi cao, thấm h&uacute;t mồ h&ocirc;i, khả năng chịu lực tốt</p>\r\n\r\n<p>👉Kết hợp &aacute;o polo nam được đa dạng phong c&aacute;ch c&oacute; thể mặc nh&agrave;, dạo phố hay chơi thể thao</p>\r\n\r\n<p>👉M&agrave;u sắc đa dạng, basic ph&ugrave; hợp với nhiều lứa tuổi</p>\r\n\r\n<p>👉 Đường may tinh tế, tỉ mỉ trong từng chi tiết</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🔰 Hướng dẫn c&aacute;ch đặt h&agrave;ng &Aacute;o Polo AVIANO</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>⏩ C&aacute;ch chọn size: Shop c&oacute; bảng size mẫu. Bạn N&Ecirc;N INBOX, cung cấp chiều cao, c&acirc;n nặng để SHOP TƯ VẤN SIZE</p>\r\n\r\n<p>⏩ M&atilde; sản phẩm đ&atilde; c&oacute; trong ảnh</p>\r\n\r\n<p>⏩ C&aacute;ch đặt h&agrave;ng: Nếu bạn muốn mua 2 sản phẩm kh&aacute;c nhau hoặc 2 size kh&aacute;c nhau, để được freeship</p>\r\n\r\n<p>- Bạn chọn từng sản phẩm rồi th&ecirc;m v&agrave;o giỏ h&agrave;ng</p>\r\n\r\n<p>- Khi giỏ h&agrave;ng đ&atilde; c&oacute; đầy đủ c&aacute;c sản phẩm cần mua, bạn mới tiến h&agrave;nh ấn n&uacute;t &ldquo; Thanh to&aacute;n&rdquo;</p>\r\n\r\n<p>⏩ Shop lu&ocirc;n sẵn s&agrave;ng trả lời inbox để tư vấn</p>', 'Thấm Hút Mồ Hôi, Áo Thun Nam Có Cổ 7 Màu Thanh Lịch', 7, 75, 5, 1, NULL, 1, 1, '2023-08-06 14:01:23', '2023-08-06 14:05:47'),
(13, 10, 2, 'Set bộ nữ trơn áo cổ tim kèm quần suông dài MIMIX CY8220', '<p>Sản phẩm của MIMIX l&agrave; h&agrave;ng thiết kế độc quyền, mẫu m&atilde; mới lạ nhất thị trường. Với ti&ecirc;u ch&iacute; sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng đặt l&ecirc;n đầu ti&ecirc;n, Shop lu&ocirc;n cố gắng sẽ thỏa m&atilde;n mọi điều mong muốn từ nhỏ nhất của c&aacute;c chị em phụ nữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TH&Ocirc;NG TIN SET BỘ NỮ TRƠN &Aacute;O CỔ TIM K&Egrave;M QUẦN SU&Ocirc;NG D&Agrave;I MIMIX</p>\r\n\r\n<p>- M&atilde; sản phẩm: CY8220 thiết kế trang nh&atilde;, sang trọng</p>\r\n\r\n<p>- Chất liệu bộ &aacute;o đan d&acirc;y + quần ống rộng: Trượt ch&eacute;o</p>\r\n\r\n<p>- Thương hiệu: MIMIX (H&agrave;ng thiết kế - Việt Nam chất lượng cao được gắn tag thương thiệu tr&ecirc;n sản phẩm)</p>\r\n\r\n<p>- Xuất xứ: Việt Nam</p>\r\n\r\n<p>- C&ocirc;ng ty sản xuất: C&ocirc;ng Ty TNHH TMDV sản xuất Hali</p>\r\n\r\n<p>- Địa chỉ: 53/6v Nam L&acirc;n, B&agrave; Điểm, H&oacute;c M&ocirc;n</p>\r\n\r\n<p>- Xuất xứ: Việt Nam</p>\r\n\r\n<p>- C&ocirc;ng ty sản xuất: C&ocirc;ng Ty TNHH TMDV sản xuất Hali</p>\r\n\r\n<p>- Địa chỉ: 53/6v Nam L&acirc;n, B&agrave; Điểm, H&oacute;c M&ocirc;n</p>\r\n\r\n<p>- K&iacute;ch thước set bộ cổ tim: S-M ( &aacute;o 58-60 cm, quần d&agrave;i 92-94 cm, ống rộng: 56 cm )</p>\r\n\r\n<p>S; ngực 102 cm ; eo 64-80 cm; m&ocirc;ng 98 cm</p>\r\n\r\n<p>M; ngực 106 cm; eo 74-94 cm; m&ocirc;ng 104 cm</p>\r\n\r\n<p>* Lưu &yacute;:</p>\r\n\r\n<p>+ Ở vị tr&iacute; đo kh&aacute;c nhau c&oacute; thể k&iacute;ch thước sẽ thay đổi, x&ecirc; dịch 1-3cm.</p>\r\n\r\n<p>+ Kh&aacute;ch c&oacute; c&acirc;n nặng từ 40-58kg, mặc sẽ thoải m&aacute;i nh&eacute;. (Inbox shop để được tư vấn size m&igrave;nh mặc chuẩn đẹp)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>QUYỀN LỢI KHI MUA H&Agrave;NG</p>\r\n\r\n<p>- Kh&aacute;ch h&agrave;ng được mua h&agrave;ng chuẩn thiết kế Mimix.</p>\r\n\r\n<p>- Được mua sản phẩm chất lượng, với gi&aacute; th&agrave;nh tốt nhất thị trường hiện nay.</p>\r\n\r\n<p>- Được bảo h&agrave;nh đổi trong 07 ng&agrave;y từ khi nhận h&agrave;ng.</p>\r\n\r\n<p>- H&agrave;ng c&oacute; sẵn, giao h&agrave;ng khi nhận được đơn h&agrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CH&Iacute;NH S&Aacute;CH ĐỔI TRẢ H&Agrave;NG</p>\r\n\r\n<p>Nhằm đảm bảo quyền lợi người ti&ecirc;u d&ugrave;ng, n&acirc;ng cao chất lượng dịch vụ sau b&aacute;n h&agrave;ng, MIMIX sẽ hỗ trợ Qu&yacute; kh&aacute;ch đổi sản phẩm mới nếu:</p>\r\n\r\n<p>2. Đổi h&agrave;ng do muốn đổi size, đổi m&agrave;u hoặc đổi mẫu(Shop hỗ trợ đổi 1 lần/ đơn h&agrave;ng thời gian trong 7 ng&agrave;y kể từ ng&agrave;y nhận)</p>\r\n\r\n<p>- Sản phẩm chỉ được đổi khi đ&aacute;p ứng đầy đủ c&aacute;c điều kiện sau dưới đ&acirc;y:</p>\r\n\r\n<p>+ Sản phẩm nhận đổi trả l&agrave; sản phẩm c&ograve;n nguy&ecirc;n tem m&aacute;c, chưa chỉnh sửa, chưa qua giặt giũ.</p>\r\n\r\n<p>+ Ph&ugrave; hợp ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng của Shopee.</p>\r\n\r\n<p>+ Kh&aacute;ch nh&agrave; Mimix đừng ngần ngại li&ecirc;n hệ shop, việc inbox sẽ lu&ocirc;n nhận được hỗ trợ nhanh v&agrave; tốt nhất từ shop.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Trong trường hợp shop gửi nhầm size hoặc m&agrave;u cho kh&aacute;ch tr&ecirc;n đơn h&agrave;ng. Shop sẽ chịu to&agrave;n bộ ph&iacute; ship hai chiều để đổi h&agrave;ng theo đ&uacute;ng y&ecirc;u cầu của kh&aacute;ch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>** Do điều kiện &aacute;nh s&aacute;ng/thiết bị chụp/thiết bị hiển thị c&oacute; sự sai lệch, m&agrave;u sắc của sản phẩm c&oacute; thể chưa ch&iacute;nh x&aacute;c 100% trong ảnh nhưng MIMIX đảm bảo quay/chụp nhiều nhất c&oacute; thể c&aacute;c bạn nh&eacute; !</p>', 'SET BỘ NỮ TRƠN ÁO CỔ TIM KÈM QUẦN SUÔNG DÀI MIMIX CY8220', 10, 60, 8, 2, NULL, 1, 1, '2023-08-06 14:11:15', '2023-08-06 14:13:35'),
(14, 11, 2, 'Giày thể thao nữ Nin Shoes đế bằng 2 cm', '<p>Lời nhắn nhũ từ NIN: &quot;H&atilde;y lu&ocirc;n l&agrave; ch&iacute;nh m&igrave;nh, l&agrave;m điều bạn th&iacute;ch, nếu c&oacute; sai lầm, chỉ giữ lại kinh nghiệm v&agrave; sống tiếp...&quot; NIN SHOES - Be You M&ocirc; tả: Th&ocirc;ng tin sản phẩm: Gi&agrave;y thể thao đế bằng 2 cm Ninshoes mũi tr&ograve;n 3 vạch m&agrave;u h&ocirc;ng xỏ d&acirc;y 1. Thể thao : Đặc điểm nhận dạng của d&ograve;ng sản phẩm n&agrave;y ch&iacute;nh l&agrave; dạng thể thao &ecirc;m &aacute;i mềm mại. Sản phẩm được c&aacute;ch điệu v&agrave; mang hơi thở hiện đại n&agrave;y hiện nay đang trở th&agrave;nh xu hướng v&agrave; được rất nhiều qu&yacute; c&ocirc; săn đ&oacute;n, lựa chọn. V&igrave; vậy, nếu l&agrave; một t&iacute;n đồ thời trang ch&iacute;nh hiệu, bạn đừng bỏ qua d&ograve;ng sản phẩm n&agrave;y trong tủ gi&agrave;y của m&igrave;nh nh&eacute;. 2. Chất liệu da mềm : Chất liệu da cao cấp, mềm hoạ tiết nổi bật. Đặc biệt loại da hạn chế nếp nhăn khi bạn di chuyển v&agrave; kh&ocirc;ng bong tr&oacute;c. 3. From d&aacute;ng chuẩn &ecirc;m ch&acirc;n: Gi&agrave;y thể thao được thiết kế tỉ mĩ với form d&aacute;ng chuẩn đối với người Việt, gi&uacute;p bảo vệ n&acirc;ng niu b&agrave;n bạn ch&acirc;n của n&agrave;ng, đảm bảo gi&agrave;y mềm &ecirc;m ch&acirc;n, giữ form tốt. 4. Đế tpr cao cấp đ&agrave;n hồi, hạn chế tiếng ồn: Đế gi&agrave;y được l&agrave;m bằng chất liệu TR cao cấp theo ti&ecirc;u chuẩn xuất khẩu, đảm bảo độ đ&agrave;n hồi, mềm &ecirc;m, hạn chế tiếng ồn ph&aacute;t ra khi di chuyển. Đặc biệt đế gi&agrave;y c&oacute; độ B&Aacute;M D&Iacute;NH tốt, kh&ocirc;ng trơn trượt.. 5. Hướng dẫn chọn size: Bạn chọn như size gi&agrave;y thường mang. Tuỳ d&aacute;ng b&agrave;n ch&acirc;n của bạn v&agrave; kiểu gi&agrave;y, sẽ c&oacute; sự ch&ecirc;nh lệch size đ&ocirc;i ch&uacute;t. Vui l&ograve;ng nhắn cho bộ phận CSKH để tư vấn. 6. Sản phẩm c&oacute; t&iacute;nh bảo h&agrave;nh: Tất cả sản phẩm đều c&oacute; ch&iacute;nh s&aacute;ch b&aacute;o h&agrave;nh cho kh&aacute;ch h&agrave;ng, 3 th&aacute;ng keo v&agrave; đế. Hướng dẫn bảo quản Tr&aacute;nh mang sản phẩm khi trời mưa hoặc thời tiết xấu để ch&uacute;ng kh&ocirc;ng bị ướt dẫn đến bong tr&oacute;c. N&ecirc;n cất giữ sản phẩm ở nơi tho&aacute;ng m&aacute;t để giữ g&igrave;n chất lượng của sản phẩm ở mức tốt nhất. Lau ch&ugrave;i sản phẩm thường xuy&ecirc;n để tr&aacute;nh bụi bẩn. Bạn sử dụng c&aacute;c loại x&agrave; b&ocirc;ng, nước rửa ch&eacute;n, kem cạo r&acirc;u để giặt. Ch&uacute; &yacute; l&agrave; n&ecirc;n d&ugrave;ng b&agrave;n chải mềm hoặc khăn mềm để ch&agrave; giặt sẽ tốt hơn cho đ&ocirc;i gi&agrave;y của bạn. N&ecirc;n phơi đ&ocirc;i gi&agrave;y trong m&aacute;t, kh&ocirc;ng n&ecirc;n phơi trực tiếp dưới &aacute;nh nắng mặt trời. Sau khi giặt xong để r&aacute;o nước sử dụng giấy mềm, thấm nước, cuốn 2-3 v&ograve;ng phủ to&agrave;n đ&ocirc;i gi&agrave;y. Sau đ&oacute; bạn c&oacute; thể đem phơi trực tiếp dưới nắng m&agrave; kh&ocirc;ng ảnh hưởng.</p>', 'Ninshoes mũi tròn 3 vạch màu hông xỏ dây', 15, 41, 12, 0.5, NULL, 0, 2, '2023-08-06 14:18:26', '2023-08-06 14:22:01'),
(15, 12, 2, 'Mũ bucket vành cụp màu trắng nâu CAPMAN', '<p>TH&Ocirc;NG TIN SẢN PHẨM :</p>\r\n\r\n<p>- Chất liệu vải : xốp lưới phối v&agrave;nh vải bố</p>\r\n\r\n<p>- Kh&ocirc;ng g&acirc;y k&iacute;ch ứng da đầu, kh&ocirc;ng ra m&agrave;u.</p>\r\n\r\n<p>- Size: freesize, v&ograve;ng đầu 52-58cm th&iacute;ch hợp cho cả nam nữ.</p>\r\n\r\n<p>- Do m&agrave;n h&igrave;nh v&agrave; điều kiện &aacute;nh s&aacute;ng kh&aacute;c nhau, m&agrave;u sắc thực tế của sản phẩm c&oacute; thể ch&ecirc;nh lệch khoảng 3-5%.</p>\r\n\r\n<p>-------------------------------------------</p>\r\n\r\n<p>CH&Iacute;NH S&Aacute;CH - QUYỀN LỢI CỦA KH&Aacute;CH :</p>\r\n\r\n<p>- Nếu nhận h&agrave;ng sai, bị lỗi sản xuất th&igrave; sao ???</p>\r\n\r\n<p>=&gt; Bạn y&ecirc;n t&acirc;m nh&eacute;, nếu c&oacute; bất cứ vấn đề g&igrave; bạn vui l&ograve;ng nhắn tin trực tiếp đến CAPMAN, CAPMAN sẽ đổi h&agrave;ng mới cho bạn.</p>\r\n\r\n<p>- Nếu kh&aacute;ch h&agrave;ng muốn trả sản phẩm, nhận lại tiền ???</p>\r\n\r\n<p>=&gt; CAPMAN sẵn s&agrave;ng đổi trả, ho&agrave;n tiền cho kh&aacute;ch h&agrave;ng theo đ&uacute;ng quy định Shopee Mall (Trong thời hạn 7 ng&agrave;y kể từ ng&agrave;y qu&yacute; kh&aacute;ch nhận h&agrave;ng, sản phẩm phải chưa sử dụng, chưa giặt, c&ograve;n nh&atilde;n m&aacute;c nguy&ecirc;n vẹn).</p>\r\n\r\n<p>- Trường hợp chấp nhận đổi trả miễn ph&iacute; : thiếu h&agrave;ng, sp kh&ocirc;ng đ&uacute;ng m&ocirc; tả, sp lỗi</p>\r\n\r\n<p>- Trường hợp chấp nhận đổi trả kh&aacute;ch chịu ph&iacute;: kh&ocirc;ng th&iacute;ch, kh&ocirc;ng hợp, kh&ocirc;ng vừa (sp freesize chuẩn n&ecirc;n 98% vừa )</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>⛔️ Lưu &yacute; khi mua h&agrave;ng tr&ecirc;n Shopee: Do quy định Shopee &quot;&quot;KH&Ocirc;NG ĐỒNG KIỂM, KH&Ocirc;NG XEM H&Agrave;NG KHI NHẬN&quot;&quot; v&igrave; vậy qu&yacute; kh&aacute;ch cứ y&ecirc;n t&acirc;m nhận h&agrave;ng trước, sau khi nhận nếu h&agrave;ng c&oacute; vấn đề g&igrave; bạn h&atilde;y nhắn tin v&agrave; shop sẽ giải quyết cho qu&yacute; kh&aacute;ch cứ y&ecirc;n t&acirc;m ạ !</p>\r\n\r\n<p>⛔️ Khi kh&aacute;ch y&ecirc;u gặp bất k&igrave; vấn đề g&igrave; về sản phẩm, đừng vội đ&aacute;nh gi&aacute; shop m&agrave; h&atilde;y NHẮN TIN trước cho shop để shop hỗ trợ bạn nh&eacute; ( trường hợp đ&ocirc;i l&uacute;c shop c&oacute; lỡ gửi nhầm h&agrave;ng hoặc sản phẩm bị lỗi ) mong bạn th&ocirc;ng cảm, h&atilde;y nhắn cho shop liền nha &lt;3 shop rất biết ơn nếu bạn l&agrave;m điều đ&oacute; ạ &lt;3</p>', 'Thêu hoa cúc CM06', 10, 0, 0, 1, NULL, 1, 3, '2023-08-06 14:29:20', '2023-08-06 15:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, NULL),
(2, 'Women', NULL, NULL),
(3, 'Kids', NULL, NULL),
(4, 'OKla', '2023-08-04 08:36:02', '2023-08-04 08:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `user_id`, `email`, `name`, `messages`, `rating`, `created_at`, `updated_at`) VALUES
(1, 14, 7, 'congnso02@gmail.con', 'Vũ Thành Công', 'Sản phẩm rất tuyệt', 5, '2023-08-08 09:39:31', '2023-08-08 09:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `color`, `size`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 'blue', 'S', 5, NULL, NULL),
(2, 1, 'blue', 'M', 5, NULL, NULL),
(3, 1, 'blue', 'L', 5, NULL, NULL),
(4, 1, 'blue', 'XS', 5, NULL, NULL),
(5, 1, 'yellow', 'S', 60, NULL, '2023-08-02 02:50:42'),
(6, 1, 'violet', 'S', 0, NULL, NULL),
(7, 2, 'Yellow', 'M', 20, '2023-08-02 02:46:52', '2023-08-02 02:46:52'),
(8, 9, 'Yellow', 'M', 50, '2023-08-02 03:02:16', '2023-08-02 03:02:16'),
(9, 9, 'Yellow', 'M', 50, '2023-08-02 03:03:24', '2023-08-02 03:03:24'),
(10, 9, 'Yellow', 'M', 10, '2023-08-02 03:04:29', '2023-08-02 03:04:29'),
(11, 10, 'Blue', '29', 20, '2023-08-05 01:44:28', '2023-08-05 01:47:55'),
(12, 11, 'Xám', 'M', 20, '2023-08-05 03:28:50', '2023-08-05 03:28:50'),
(13, 11, 'Đen', 'M', 20, '2023-08-05 03:29:41', '2023-08-05 03:29:41'),
(14, 11, 'Xanh', 'L', 20, '2023-08-05 03:30:06', '2023-08-05 03:30:06'),
(15, 12, 'Đỏ', 'M', 10, '2023-08-06 14:04:08', '2023-08-06 14:04:08'),
(16, 12, 'Đỏ', 'L', 5, '2023-08-06 14:04:19', '2023-08-06 14:04:19'),
(17, 12, 'Đỏ', 'XL', 20, '2023-08-06 14:04:38', '2023-08-06 14:04:38'),
(18, 12, 'Xanh-than', 'M', 10, '2023-08-06 14:05:05', '2023-08-06 14:05:05'),
(19, 12, 'Trắng', 'L', 10, '2023-08-06 14:05:24', '2023-08-06 14:05:24'),
(20, 12, 'Đen', 'L', 20, '2023-08-06 14:05:47', '2023-08-06 14:05:47'),
(21, 13, 'Xanh', 'M', 20, '2023-08-06 14:12:56', '2023-08-06 14:12:56'),
(22, 13, 'XanhLa', 'L', 20, '2023-08-06 14:13:12', '2023-08-06 14:13:12'),
(23, 13, 'Tím', 'M', 20, '2023-08-06 14:13:35', '2023-08-06 14:13:35'),
(24, 14, 'Đen', '39', 10, '2023-08-06 14:21:01', '2023-08-06 14:21:01'),
(25, 14, 'XanhLa', '39', 10, '2023-08-06 14:21:30', '2023-08-06 14:21:30'),
(26, 14, 'Đen', '40', 10, '2023-08-06 14:21:39', '2023-08-06 14:21:39'),
(27, 14, 'Đen', '41', 10, '2023-08-06 14:21:48', '2023-08-06 14:21:48'),
(28, 14, 'Đen', '42', 1, '2023-08-06 14:22:01', '2023-08-06 14:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'product-1.jpg', NULL, NULL),
(2, 1, 'product-1-1.jpg', NULL, NULL),
(3, 1, 'product-1-2.jpg', NULL, NULL),
(4, 2, 'product-2.jpg', NULL, NULL),
(5, 3, 'product-3.jpg', NULL, NULL),
(6, 4, 'product-4.jpg', NULL, NULL),
(7, 5, 'product-5.jpg', NULL, NULL),
(8, 6, 'product-6.jpg', NULL, NULL),
(9, 7, 'product-7.jpg', NULL, NULL),
(10, 8, 'product-8.jpg', NULL, NULL),
(11, 9, 'product-9.jpg', NULL, NULL),
(13, 9, 'nike-den_64c9c25008861_230802_094120.jpeg', '2023-08-02 02:41:20', '2023-08-02 02:41:20'),
(15, 10, 'jean-xanh-nam-thoi-trang_64cda699ab525_230805_083209.jpeg', '2023-08-05 01:32:09', '2023-08-05 01:32:09'),
(16, 10, 'jean-xanh-nam_64cda6a0ef907_230805_083216.jpeg', '2023-08-05 01:32:16', '2023-08-05 01:32:16'),
(17, 11, 'vn-11134207-7qukw-lh9xkr2d9mpec5_64cdc1af696da_230805_102743.jpeg', '2023-08-05 03:27:43', '2023-08-05 03:27:43'),
(18, 11, 'vn-11134207-7qukw-lh9xkr2d884ye8_64cdc1b3442b7_230805_102747.jpeg', '2023-08-05 03:27:47', '2023-08-05 03:27:47'),
(19, 11, 'vn-11134207-7qukw-lh9xkr2dkveb86_64cdc1b9ea94d_230805_102753.jpeg', '2023-08-05 03:27:53', '2023-08-05 03:27:53'),
(20, 11, 'vn-11134207-7qukw-lh9xkr2ddueq93_64cdc1bdc305e_230805_102757.jpeg', '2023-08-05 03:27:57', '2023-08-05 03:27:57'),
(21, 12, 'sg-11134201-23020-sisvpsm7i2mvf1_64cfa82c10e4b_230806_090324.jpeg', '2023-08-06 14:03:24', '2023-08-06 14:03:24'),
(22, 12, '1c7d05478975307e11b18d7192089e98_64cfa8315ada0_230806_090329.jpeg', '2023-08-06 14:03:29', '2023-08-06 14:03:29'),
(23, 12, '694208b622255119ccf177ccb29e730e_64cfa83726406_230806_090335.jpeg', '2023-08-06 14:03:35', '2023-08-06 14:03:35'),
(24, 12, 'b23d134226b8a2237de3e64104be9f04_64cfa83bf4050_230806_090339.jpeg', '2023-08-06 14:03:40', '2023-08-06 14:03:40'),
(25, 12, 'c55ae010fa65d785cfed30c64c21e183_64cfa84129967_230806_090345.jpeg', '2023-08-06 14:03:45', '2023-08-06 14:03:45'),
(26, 13, 'vn-11134207-7qukw-lff41hn2ngc566_64cfaa41422b1_230806_091217.jpeg', '2023-08-06 14:12:17', '2023-08-06 14:12:17'),
(27, 13, 'vn-11134207-7qukw-lffao0sek12t20_64cfaa46a101c_230806_091222.jpeg', '2023-08-06 14:12:22', '2023-08-06 14:12:22'),
(28, 13, 'vn-11134207-7qukw-lfi2di1ojiida8_64cfaa4ba1c87_230806_091227.jpeg', '2023-08-06 14:12:27', '2023-08-06 14:12:27'),
(30, 14, 'vn-11134207-7qukw-lk0pqpiaifuc55_64cfac08dc737_230806_091952.jpeg', '2023-08-06 14:19:52', '2023-08-06 14:19:52'),
(31, 14, 'vn-11134207-7qukw-ljuocb4xl2pu17_64cfac19c6eb7_230806_092009.jpeg', '2023-08-06 14:20:09', '2023-08-06 14:20:09'),
(33, 14, 'vn-11134201-7qukw-lj550g0qgdsi08_64cfac27821d2_230806_092023.jpeg', '2023-08-06 14:20:23', '2023-08-06 14:20:23'),
(34, 15, 'vn-11134207-7qukw-ljqsgtv5cwside_64cfb69077b3a_230806_100448.jpeg', '2023-08-06 15:04:48', '2023-08-06 15:04:48'),
(35, 15, 'vn-11134207-7qukw-ljqnnvefcj3o89_64cfb6a76b8b0_230806_100511.jpeg', '2023-08-06 15:05:11', '2023-08-06 15:05:11'),
(36, 15, 'vn-11134207-7qukw-ljqsgtv5sd1eda_64cfb6ad8eb47_230806_100517.jpeg', '2023-08-06 15:05:17', '2023-08-06 15:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Clothing', NULL, NULL),
(2, 'Shoes', NULL, NULL),
(3, 'Accessories', NULL, NULL),
(4, 'Beauty', NULL, NULL),
(5, 'Handbags', NULL, NULL),
(6, 'Jewelry', NULL, NULL),
(7, 'Dress', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `address`, `city`, `avatar`, `level`, `description`, `created_at`, `updated_at`) VALUES
(1, 'CodeLean', 'CodeLean@gmail.com', NULL, '$2y$10$aRmsmtX.9KsLkV9GcgldG.ZMne6LzFTZoI.5kthMumv/wPCXZ3J3a', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$yKEcEzDB2gltb/bIHZ7g.udwereHdC5Cii.PaZgOpVm8I4sX9KVuG', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(3, 'Shane Lynch', 'ShaneLynch@gmail.com', NULL, '$2y$10$4qK4nWIo/sXAuh/gZDQRyuQ2u5FN8eVDkS4.HTCvf.pc6wpmCSDE.', NULL, NULL, NULL, NULL, NULL, 1, 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo', NULL, NULL),
(4, 'Brandon Kelley', 'BrandonKelley@gmail.com', NULL, '$2y$10$gfMsxOQadJz2M2lgL/F4dOCJc7TYNyv9vMR3Pq3DySk2LSAUsRy.u', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(5, 'Vũ Thành Công', 'congvtc02@gmail.com', NULL, '$2y$10$9Tovhro7PWuGP2MIVkxwD.SUu2TFIVJjoUQ14Q9XJlklkvBSWkFF6', NULL, '0971765824', 'Nam Định', 'HN', '6_64ccca5631625_230804_045222.jpg', 2, NULL, NULL, '2023-08-04 09:52:22'),
(6, 'Vũ Thành Công', 'congvtc02@gmail.comm', NULL, '$2y$10$Cj9Sm11arsOsWPAfYQsqweziDNwlXZQY8wLBRPDbjPqjzSKwNpHj2', NULL, '0971765824', '190 Nguyễn Trãi', 'Hà Nội', '4_64cd183e8a383_230804_102446.jpg', 2, NULL, '2023-08-04 15:24:46', '2023-08-04 15:47:25'),
(7, 'Cong', 'congnso02@gmail.con', NULL, '$2y$10$SrBIJalJ.0OHD3OyaOZq2u5RCljGPbrrJNkD3HiA36cX/c2Nx8AhS', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2023-08-08 09:34:49', '2023-08-08 09:34:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
