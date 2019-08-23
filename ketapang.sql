-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2019 pada 13.50
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ketapang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_forums`
--

CREATE TABLE `gallery_forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_wisatas`
--

CREATE TABLE `gallery_wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_11_141557_create_wisata_table', 1),
(9, '2019_08_11_150223_create_gallery_forum_table', 1),
(10, '2019_08_11_150530_create_gallery_wisata_table', 1),
(11, '2019_08_11_150653_create_transaksis_table', 1),
(12, '2019_08_13_061608_update_transaksi_table', 1),
(13, '2019_08_17_033208_create_pakets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `token`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kurniadi wijaya', 'kurniadiahmadwijaya@gmail.com', 'admin', '2019-08-22 04:57:25', '', 'TpNsv9Nr2VyH5V1jWDehrLHYjKinlxHmJU6EWHj3', 'google', '107828218356289425039', 'zbmfkRnbfNH4uIQqxxMvcg1QmNPcGu7hpvBShC9QKltEuigieloaupk0ivtg', '2019-08-22 04:57:25', '2019-08-22 04:57:25'),
(3, 'Ketapang Admin', 'ketapangbdg@gmail.com', 'admin', '2019-08-22 05:01:41', '$2y$10$E92FEj3RBinVfx0rKa8RcOlBS.52PSmH1O6bbys0oMHrBiDnEmzxW', 'cCSubulVbDVEkCQ1Y7QzfYNvMeZLO0RjzpeDYiOy', NULL, NULL, NULL, '2019-08-22 05:01:25', '2019-08-22 05:01:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_dibangun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id`, `nama`, `deskripsi`, `alamat`, `waktu`, `tanggal_dibangun`, `background`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'Farmhouse Lembang', 'Dengan desain atmosfer eropa, banyak spot unik yang pastinya bakal menarik untuk swafoto/selfie, dan di posting di media sosial. memang, Farmhouse Lembang sejauh ini menawarkan ‘wisata foto’ sebagai daya tarik utamanya, lokasinya yang berada di dataran tinggi khas pegunungan lembang yang berpanorama sangat indah dan berhawa sejuk dan segar menyehatkanlokasinya yang berada di dataran tinggi khas pegunungan lembang yang berpanorama sangat indah dan berhawa sejuk dan segar menyehatkan.', 'Jl. Raya Lembang No.108, Gudangkahuripan, Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', 'Setiap Hari, 08.00-19.00', '2015-12-01', '1566475566.jpg', '022-82782400', '2019-08-22 05:06:06', '2019-08-22 06:28:33'),
(2, 'Gunung Tangkuban Perahu', 'Ketika sedang memutuskan untuk mengunjungi tempat wisata di Lembang Bandung tak lengkap rasanya jika tak mendatangi objek wisata Tangkuban Perahu. Pemandangan yang disuguhkan mampu menghipnotis siapa saja yang mengunjunginya. Tak heran, objek wisata Tangkuban Perahu selalu menjadi destinasi utama para wisatawan ketika berkunjung ke Bandung. Ketika sudah datang ke sana, rasanya tak rela jika harus meninggalkannya.', 'Gunung Tangkuban Parahu, Jawa Barat, Indonesia', 'Setiap hari: 07.00 – 17.00 WIB', NULL, '1566481153.jpg', '-', '2019-08-22 06:39:13', '2019-08-22 06:39:13'),
(3, 'Gedung Sate', 'Gedung Sate, dengan ciri khasnya yaitu berupa ornamen tusuk sate pada menara sentralnya, telah lama menjadi penanda atau markah tanah Kota Bandung yang tidak saja dikenal masyarakat di Jawa Barat, tetapi juga seluruh Indonesia bahkan model bangunan itu dijadikan pertanda bagi beberapa bangunan dan tanda-tanda kota di Jawa Barat.', 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115', 'Senin - Jumat , 08.00 - 16.00', '1920-07-27', '1566481584.jpg', '-', '2019-08-22 06:46:24', '2019-08-22 06:46:24'),
(4, 'Jembatan Pasoepati', 'Jembatan ikon Bandung ini tampak cantik dan jadi objek menarik untuk turis.\r\nWisata ke Bandung tampaknya kurang lengkap kalau belum merasakan lewat di Jembatan Pasupati atau sekadar menikmati panorama sekitarnya dari kejauhan. Ikon Kota Bandung itu penampakannya begitu cantik, terlebih jika malam tiba. Lampu sorot warna-warni menyala di sekitarnya. Traveler yang ingin menikmati keindahannya bisa mengendarai mobil atau motor dan langsung melintas di sana.', 'Jl. Layang Pasupati, Tamansari, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116', 'Setiap Hari, 24 Jam', '2005-06-26', '1566482649.jpg', '-', '2019-08-22 06:59:22', '2019-08-22 07:04:09'),
(5, 'Stone Garden Citatah', 'Sebagai destinasi wisata andalan Jawa Barat, Stone Garden menawarkan pemandangan alam yang unik. Sejak tanjakan pertama hingga berada tepat di atas puncak bukit tersebut, mata siapapun akan terbelalak melihat tonjolan batu-batu yang menghampar berserakan di sekujur tubuh bukit. Untuk dapat menikmati keindahan Stone Garden, Anda harus menempuh jalur pendakian menuju puncak sejauh kurang lebih 1,5 kilometer dari kaki gunung.', 'Gunung Masigit, Citatah, Kec. Cipatat, Kabupaten Bandung Barat, Jawa Barat 40554', 'Setiap Hari, 08.00-16.00', NULL, '1566484422.jpg', '-', '2019-08-22 07:33:42', '2019-08-22 07:37:54'),
(6, 'Trans Studio Bandung', 'Trans Studio Bandung adalah kawasan wisata terpadu di Kota Bandung, Indonesia. Trans Studio dibangun pada areal seluas 4,2 hektare dengan investasi mencapai Rp 2 triliun sehingga menjadikan sebagai kawasan hiburan terluas dan terlengkap di Bandung. Wahana yang terdapat menawarkan petualangan dan sensasi baru yang tidak kalah menantang dari tempat wisata lainnya. Trans Studio Bandung adalah taman bermain yang paling komplet di kota Bandung', 'Jl. Gatot Subroto No.289, Cibangkong, Kec. Batununggal, Kota Bandung, Jawa Barat 40273', 'Senin - Jumat, 10.00 - 19.00. Sabtu - Minggu 09.00 - 21.00', '2011-06-18', '1566486640.jpg', '(022) 86012555', '2019-08-22 07:56:04', '2019-08-22 08:10:40'),
(7, 'Museum Geologi Bandung', 'Museum Geologi Bandung adalah sebuah museum yang sudah menjadi bangunan bersejarah di kota Bandung, sehingga menarik minat banyak wisatawan. Museum Geologi Bandung juga sering kali menjadi tempat tujuan study tour sekolah-sekolah yang berlokasi di kota Bandung dan sekitarnya. Hal ini dikarenakan koleksi yang dimiliki Museum Geologi Bandung sangat berguna untuk pendidikan serta mempunyai nilai-nilai sejarah kehidupan dan pelestarian alam yang sangat mendidik.', 'Jl. Diponegoro No.57, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122', 'Senin - Kamis, 08.00 - 16.00. Sabtu - Minggu 08.00 - 14.00', '1928-05-16', '1566487805.jpg', '(022) 7213822', '2019-08-22 08:30:05', '2019-08-22 08:30:05'),
(8, 'Cihampelas Walk', 'Cihampelas Walk (Ciwalk) adalah salah satu pusat perbelanjaan mewah di Kota Bandung. Mall ini merupakan tempat berbelanja yang berbeda, bersih dan nyaman. Berjalan-jalan di Cihampelas pada siang, sore dan malam hari akan berbeda suasananya. Lampu dari tiap gerai dan bangunan utama pada malam hari akan memberikan atmosfer yang berbeda, belum lagi juntaian dan lilitan lampu hias yang digantungkan di pohon-pohon sekitar outdoor Ciwalk.', 'Jl. Cihampelas No.160, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131', 'Setiap Hari, 10.00 - 22.00', NULL, '1566488627.jpg', '(022) 2061122', '2019-08-22 08:43:47', '2019-08-22 08:44:50'),
(9, 'Alun Alun Bandung', 'Setelah selesai direnovasi, Alun-alun Bandung menjadi magnet yang menarik wisatawan dan masyarakat lokal berkumpul. Selain ramai oleh muda-mudi, ruang publik Kota Kembang ini juga menjadi alternatif tempat untuk tonngkrongan dan wisata keluarga. Kalau dulu, alun-alun Bandung penuh dengan pedagang kaki lima, setelah direvitalisasi, ruang publik tersebut dibuat seperti taman-taman di Eropa, luas dan memungkinkan masyarakat untuk berinteraksi.', 'Alun-Alun Bandung, Jl. Asia Afrika, Balonggede, Kec. Regol, Kota Bandung, Jawa Barat 40251', 'Setiap Hari, 24 Jam', '2014-12-31', '1566519008.jpg', '-', '2019-08-22 17:10:08', '2019-08-22 17:24:34'),
(10, 'De\' Ranch', 'De Ranch Lembang menawarkan banyak sekali kelebihan untuk Anda yang ingin berlibur bersama keluarga, terutama ketika mengajak anak-anak. Salah satu kelebihan yang ditawarkan adalah konsep Cowboy dengan segudang wahana permainan yang akan membuat buah hati merasa puas baik itu menunggangi kuda ataupun melakukan sesi foto layaknya Cowboy cilik. Tempat ini berlokasi tidak jauh terlalu jauh dari pusat Kota Bandung, sehingga akan sangat mudah untuk dijangkau.', 'Jl. Maribaya No.17, Kayuambon, Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', 'Selasa - Jumat, 09.00 - 17.00. Sabtu - Minggu 08.00 - 18.00', '2007-12-01', '1566519777.jpg', '085720303040', '2019-08-22 17:22:57', '2019-08-22 17:22:57'),
(11, 'Floating Market', 'Nama floating market ini merujuk pada stand tempat jualan makanan yang berada dalam perahu. Berbeda dengan pasar terapung, hanya tempat jualan aneka makanan saja yang ada di dalam perahu. Untuk menikmati kulinernya, kita tetap di darat di deretan tempat makan yang tersedia. Selain pasar kuliner terapung, terdapat juga beberapa cafe dan tempat makan lain dengan suasana yang indah.', 'Jalan Grand Hotel No.33E, Lembang, Kabupaten Bandung Barat', 'Senin – Jumat, 09.00 – 17.00. Sabtu – Minggu 09.00 – 20.00.', NULL, '1566520303.jpg', '022-2787766', '2019-08-22 17:31:43', '2019-08-22 17:32:31'),
(12, 'Kebun Begonia', 'Kebun Begonia dirancang sebagai tempat budidaya aneka tanaman bunga sekaligus sekaligus sebagai kawasan wisata alam hijau. Beragam fasilitas pun dibangun di sini sehingga bisa mengakomodasi semua aspek kenyamanan berwisata pengunjung atau wisatawan di tempat ini seperti, beberapa area taman bunga yang menghampar indah, kebun-kebun yang ditanami oleh berbagai macam sayuran, dan salah satu fasilitas eksklusif di kawasan ini yaitu café.', 'Jl. Maribaya No.120 A, Langensari, Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', 'Senin - Jumat , 08.00 - 17.00', NULL, '1566520816.jpg', '(022) 2788527', '2019-08-22 17:40:16', '2019-08-22 17:40:16'),
(13, 'Glamping Like Side', 'Situ patenggang yang ada di sekitarnya selama ini dikenal sebagai lokasi favorit wisatawan untuk menikmati keindahan alam pegunungan yang senantiasa berkabut. Glamping Lakeside Rancabali Ciwidey menjadi destinasi favorit wisatawan asal perkotaan besar tempat yang bagus buat refreshing dan rileksasi tubuh dan pikiran anda. Akses rute jalan menuju lokasinya ini sangat mudah untuk dijangkau, baik dengan kendaraan umum apalagi dengan kendaraan pribadi.', 'Jl. Raya Ciwidey - Patengan No.Km. 39, Situ, Patengan, Kec. Rancabali, Bandung, Jawa Barat 40973', 'Setiap Hari, 24 Jam', NULL, '1566559624.jpg', '0821-8002-8888', '2019-08-23 04:27:04', '2019-08-23 04:27:04'),
(14, 'Museum Konferensi Asia Afrika', 'Museum Konferensi Asia Afrika, yang memiliki sejarah yang sangat menentukan perjalanan dunia di tengah kecamuk perang dingin antara Amerika dan Uni Soviet, museum konferensi Asia Afrika seolah menjadi saksi hidup bagaimana Indonesia pada zamannya memegang peranan yang sangat penting di dalam kancah politik Internasional.', 'Jl. Asia Afrika No.65, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'Selasa - Kamis , 08.00 - 16.00. Jumat 14.00 - 16.00. Sabtu - Minggu 09.00 - 16.00', '1980-04-24', '1566560914.jpg', '(022) 4233564', '2019-08-23 04:48:34', '2019-08-23 04:49:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery_forums`
--
ALTER TABLE `gallery_forums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery_wisatas`
--
ALTER TABLE `gallery_wisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indeks untuk tabel `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery_forums`
--
ALTER TABLE `gallery_forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery_wisatas`
--
ALTER TABLE `gallery_wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
