-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 09:36 AM
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
-- Database: `sulthanah_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'TEH ORGANIC', 'teh-organic', '2023-03-15 09:33:22', '2023-03-23 19:51:39'),
(3, 'TEH HERBAL', 'teh-herbal', '2023-03-16 00:25:24', '2023-03-23 19:51:59'),
(7, 'HEALTH', 'health', '2023-03-24 00:03:06', '2023-03-24 00:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `subject`, `notelp`, `message`, `created_at`, `updated_at`) VALUES
(1, 'dandihermawan87@gmail.com', 'Pesanan', '089699451818', 'adada', '2023-03-27 00:27:48', '2023-03-27 00:27:48');

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
(5, '2023_03_15_083033_create_category_table', 1),
(6, '2023_03_16_091538_create_tags_table', 2),
(8, '2023_03_17_064126_add_new_slug_post_table', 4),
(10, '2023_03_17_065253_create_posts_tags_table', 5),
(11, '2023_03_17_034752_create_posts_table', 6),
(12, '2023_03_17_122034_add_softdelete_post_table', 7),
(14, '2023_03_17_151823_add_users_posts_table', 8),
(15, '2023_03_17_154518_add_users_role_table', 9),
(16, '2023_03_27_063036_create_contacts_table', 10);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `judul`, `slug`, `category_id`, `users_id`, `content`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '7 Manfaat Daun Kelor untuk Kesehatan Tubuh Manusia, Nutrisinya Melimpah', '7-manfaat-daun-kelor-untuk-kesehatan-tubuh-manusia-nutrisinya-melimpah', 3, 1, '<h2><strong>Manfaat Daun Kelor untuk Kesehatan</strong></h2>\r\n\r\n<p><strong>Menurunkan Kadar Gula Darah</strong></p>\r\n\r\n<p>Beberapa penelitian menunjukkan bahwa kelor dapat membantu menurunkan kadar gula darah. Satu studi di 30 wanita menunjukkan bahwa mengonsumsi 1,5 sendok teh (7 gram) bubuk daun kelor setiap hari selama tiga bulan mengurangi kadar gula darah puasa sebesar 13,5%, rata-rata.</p>\r\n\r\n<p>Studi kecil lainnya pada enam orang dengan diabetes menemukan bahwa menambahkan 50 gram daun kelor ke dalam makanan mengurangi kenaikan gula darah sebesar 21%. Para ilmuwan meyakini efek ini disebabkan oleh senyawa tanaman seperti isothiocyanate. Manfaat daun kelor untuk kesehatan ini patut kamu coba di rumah.</p>\r\n\r\n<p><strong>Menurunkan Berat Badan</strong></p>\r\n\r\n<p>Manfaat daun kelor untuk kesehatan berikutnya adalah menurunkan berat badan. Kelor dapat mengurangi pembentukan lemak dan meningkatkan pemecahan lemak. Penelitian telah melihat efek dari suplemen yang mengandung kelor dikombinasikan dengan bahan lainnya.</p>\r\n\r\n<p>Dalam satu studi 8 minggu pada 41 orang gemuk pada diet dan olahraga yang sama, mereka yang mengonsumsi 900 mg suplemen yang mengandung kelor, kunyit, dan kari kehilangan 4,8 kg. Dalam penelitian serupa tetapi lebih besar, para peneliti mengacak 130 orang yang kelebihan berat badan untuk menerima suplemen yang sama dengan penelitian di atas. Mereka yang diberi suplemen kehilangan 5,4 kg selama 16 minggu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mengurangi Peradangan</strong></p>\r\n\r\n<p>Peradangan adalah respons alami tubuh terhadap infeksi atau cedera. Ini merupakan mekanisme perlindungan yang penting tetapi dapat menjadi masalah kesehatan utama jika terus berlanjut dalam jangka waktu yang lama. Manfaat daun kelor untuk kesehatan bisa juga mengurangi peradangan ini.</p>\r\n\r\n<p>Para ilmuwan percaya bahwa isothiocyanate adalah senyawa anti-inflamasi utama pada daun kelor, polong dan biji-bijian. Kelor mengurangi peradangan dengan menekan enzim peradangan dan protein dalam tubuh, dan konsentrat daun kelor dapat secara signifikan menurunkan peradangan dalam sel.</p>\r\n\r\n<p><strong>Menangkal Radikal Bebas</strong></p>\r\n\r\n<p>Antioksidan adalah senyawa yang bertindak melawan radikal bebas dalam tubuh. Kadar radikal bebas yang tinggi dapat menyebabkan stres oksidatif, yang berhubungan dengan penyakit kronis seperti penyakit jantung dan diabetes tipe 2. Beberapa senyawa tanaman antioksidan telah ditemukan dalam daun Moringa oleifera atau kelor.</p>\r\n\r\n<p>Selain vitamin C dan beta-karoten, daun kelor memiliki kandungan Quercetin yang merupakan antioksidan kuat yang dapat membantu menurunkan tekanan darah. Ada juga asam klorogenik yang dapat membantu menurunkan kadar gula darah setelah makan.</p>\r\n\r\n<p>Satu studi pada wanita menemukan bahwa mengonsumsi 1,5 sendok teh (7 gram) bubuk daun kelor setiap hari selama tiga bulan secara signifikan meningkatkan kadar antioksidan darah. Ekstrak daun kelor juga dapat digunakan sebagai pengawet makanan. Ini meningkatkan umur simpan daging dengan mengurangi oksidasi.</p>\r\n\r\n<p><strong>Menurunkan Kadar Kolesterol Darah</strong></p>\r\n\r\n<p>Memiliki kolesterol tinggi telah dikaitkan dengan peningkatan risiko penyakit jantung. Manfaat daun kelor untuk kesehatan dalam bentuk serbuk baik untuk jantung yang sehat, terutama dalam kontrol lipid darah, pencegahan pembentukan plak di arteri, dan penurunan kadar kolesterol.</p>\r\n\r\n<p>Untungnya, banyak makanan nabati dapat secara efektif mengurangi kolesterol. Baik penelitian berbasis hewan dan manusia telah menunjukkan bahwa Moringa oleifera mungkin memiliki efek menurunkan kolesterol.</p>\r\n\r\n<p><strong>Mendukung Kesehatan Otak</strong></p>\r\n\r\n<p>Manfaat daun kelor untuk kesehatan otak dan fungsi kognitif dipengaruhi oleh aktivitas antioksidan dan neuro-enhancer. Ini juga telah diuji sebagai pengobatan untuk penyakit Alzheimer dengan hasil awal yang menguntungkan.</p>\r\n\r\n<p>Kandungan vitamin E dan C yang tinggi melawan oksidasi yang mengarah pada degenerasi neuron, meningkatkan fungsi otak. Ini juga dapat menormalkan neurotransmitter serotonin, dopamin, dan noradrenalin di otak, yang memainkan peran kunci dalam memori, suasana hati, fungsi organ, respons terhadap stimulus seperti stres dan kesenangan, dan kesehatan mental, misalnya dalam depresi dan psikosis.</p>\r\n\r\n<p><strong>Mencegah Kanker</strong></p>\r\n\r\n<p>Manfaat daun kelor untuk kesehatan berikutnya adalah untuk mencegah kanker. Perkembangan kanker yang sering tidak disadari membuat banyak orang yang kena kanker, menyadari dia telah terkena kanker setelah memasuki stadium yang parah. Hal ini disebabkan proses pembentukan sel kanker memang membutuhkan waktu yang cukup lama.</p>\r\n\r\n<p>Oleh karena itu, sebaiknya kamu melakukan pencegahan terhadap kanker semenjak dini. Daun kelor dapat membunuh sel yang telah mati dan mencegah tumbuhnya sel kanker. Manfaat daun kelor untuk kesehatan tersebut diduga berkat kandungan antioksidannya yang dapat mencegah kerusakan sel akibat radikal bebas.</p>', 'public/uploads/posts/1679640248post-1.png', '2023-03-23 00:35:13', '2023-03-24 00:00:45', NULL),
(2, 'TEH SULTHANAH', 'teh-sulthanah', 7, 1, '<p><strong>ADA 3 MANFAAT DAUN KELOR DI JADIKAN TEH :</strong></p>\r\n\r\n<p>1. Pengobatan dan Pencegahan Kanker</p>\r\n\r\n<p>Mengandung banyak senyawa antikanker, antara lain eugenol,niazimicin,isopropil,isothiocyanate yang bersifat bioaktif membunuh dan berpotensi cegah kanker berkembang .</p>\r\n\r\n<p>2. Menutrisi Kulit dan Rambut</p>\r\n\r\n<p>Kandungan dari antioksidannya, seperti vitamin B2, serta protein, ketika digunakan sebagai minyak pada kulit dan rambut dapat melawan polutan yang merusak.</p>\r\n\r\n<p>3. Menurunkan Berat Badan</p>\r\n\r\n<p>Kurangi peradangan, menstabilkan gula darah, meningkatkan pemecahan lemak, ini menjadi cara yang berguna untuk tingkatkan upaya untuk penurunan berat badan .</p>\r\n\r\n<p>&nbsp;</p>', 'public/uploads/posts/1679643469post-2.png', '2023-03-23 02:14:38', '2023-03-24 00:49:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_tags`
--

INSERT INTO `posts_tags` (`id`, `posts_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(7, 1, 4, NULL, NULL),
(8, 1, 5, NULL, NULL),
(9, 1, 6, NULL, NULL),
(10, 1, 7, NULL, NULL),
(11, 2, 5, NULL, NULL),
(12, 2, 6, NULL, NULL),
(13, 2, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'TEH ORGANIC', 'teh-organic', '2023-03-23 23:38:04', '2023-03-23 23:38:04'),
(5, 'TEH HERBAL', 'teh-herbal', '2023-03-23 23:38:16', '2023-03-23 23:38:16'),
(6, 'TEH DAUN KELOR', 'teh-daun-kelor', '2023-03-23 23:38:30', '2023-03-23 23:38:30'),
(7, 'TEH CELUP HERBAL', 'teh-celup-herbal', '2023-03-23 23:38:40', '2023-03-23 23:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
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

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 'dandihermawan87@gmail.com', NULL, '$2y$10$1UeEH3TWXGlTKJP6wEC9SOfxrCPJOY.8HtlLw3p46dyZtc8LO2pqO', NULL, '2023-03-17 05:51:48', '2023-03-17 08:11:05'),
(2, 'Dandi Hermawan', 0, 'dandihermawan@gmail.com', NULL, '$2y$10$86kApno.phCS/UijrUzXP.3upkit5.sybPYZC3hX2GrKHaYZiAwia', NULL, '2023-03-17 08:29:34', '2023-03-17 08:29:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_tags`
--
ALTER TABLE `posts_tags`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
