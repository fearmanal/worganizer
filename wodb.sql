-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 10:27 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(1, 'Chocoliqueâ€™s', 3400000, 'media/gallery/chocolique.jpg', 'Perpaduan kue-kue cream dengan bentuk yang lucu, disusun dengan indah  serta dengan permainan warna kue yang bisa mengcerahkan hari istimewa anda', '2017-07-09 04:41:35'),
(15, 'Chocolate Germany of Nezar', 5600000, 'media/gallery/chocolate-nezar.jpg', 'Dengan level coklat yang menyelimuti setiap elemen dan sisi yang terdapat dalam cake, menjadikan cake ini menjadi favorit dalam bulan ini. Sisi luar yang yang dibaluti warna putih banyak yang menyangka cake ini tidak berasa coklat. Cake yang diminati oleh anak-anak ini dipadukan dengan jeruk dan strawberry membuat cake ini menjadi favorit setiap tamu yang datang', '2017-07-09 04:44:12'),
(16, 'Cinderella Dance', 2100000, 'media/gallery/cinderella-dance.png', 'Cake dengan dominan putih serta motif bunga dibalut dengan krim yang membuat lidah menari, dengan tampilan yang menjadi pusat perhatian. Rasa yang terdapat merupakan perpaduan vanila dan coklat yang sangat menggugah lidah anda.', '2017-07-09 04:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(1, 'Paket Buffet A', 20000, 'media/gallery/paket-buffet-a.jpg', 'Nasi Putih\r\nSoup Sosis Jagung\r\nMie Goreng\r\nAyam Rica-Rica\r\nSteam Dori Fish\r\nKrengseng Daging Cabai Hijau\r\nAcar / Asinan\r\nKerupuk\r\nAneka Buah\r\nAneka Snack\r\nIce Cream\r\nAir Putih ', '2017-07-09 04:23:43'),
(2, 'Paket Buffet B', 30000, 'media/gallery/paket-buffet-b.jpg', 'Nasi Putih\r\nSoup Ayam Jamur\r\nIkan Saus Putih\r\nSayur Capcai\r\nAyam Lada Hitam\r\nKwetiaw Goreng\r\nRollade Daging Sapi\r\nAcar / Asinan\r\nKerupuk\r\nAneka Buah\r\nAneka Snack\r\nAneka Juice\r\nIce Cream\r\nAir Putih', '2017-07-09 04:24:21'),
(3, 'Paket Buffet C', 35000, 'media/gallery/paket-buffet-c.jpg', 'Nasi Putih\r\nNasi Goreng\r\nSoup Ayam Jamur\r\nIkan Rica rica\r\nCha Sayuran + Udang\r\nAyam Teriyaki\r\nKwetiaw Goreng\r\nRollade Daging Sapi\r\nAcar / Asinan / Salad\r\nKerupuk\r\nAneka Buah\r\nAneka Snack\r\nAneka Pudding\r\nAneka Juice\r\nIce Cream\r\nAir Putih', '2017-07-09 04:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `dekorasi`
--

CREATE TABLE `dekorasi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dekorasi`
--

INSERT INTO `dekorasi` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(1, 'Dekorasi Standar Gedung', 12000000, 'media/gallery/standar-gedung.jpeg', '- Pelaminan Gebyok/Minimalis 1 Set (Maks 8m)\r\n- Dekorasi Full Flower Bunga Fresh/Bunga Hidup\r\n- Mini Garden di Depan Pelaminan\r\n- Standing Flower 3 Pasang\r\n- Karpet Jalan 40 m\r\n- Pergola Masuk 1 Buah\r\n- Gazebo Pintu Masuk 1 Set\r\n- Angpao 2 Buah\r\n- Background Penerimatamu 1 Pasang\r\n- Umbul / Janur Kuning 1 Pasang', '2017-07-09 04:54:48'),
(2, 'Gebyok Minimalis', 10000000, 'media/gallery/gebyok-minimalis.jpeg', '- Dekorasi Full Flower Bunga Fresh/Bunga Hidup\r\n- Dekorasi Pohon Palem di Belakang Pelaminan\r\n- Mini Garden di Depan Pelaminan\r\n- Standing Flower 2 Pasang\r\n- Karpet Jalan 40 m\r\n- Gazebo Pintu Masuk 1 Set\r\n- Umbul / Janur Kuning 1 Pasang', '2017-07-09 04:54:56'),
(3, 'Dekorasi Platinum Gedung', 15000000, 'media/gallery/dekorasi-platinum.jpeg', '- Satu set kursi pengantin 2-1-1-1-1\r\n- Dua buah kotak angpao\r\n- Tiga buah standing flower di pelaminan + bunga hidup\r\n- Tiga buah spot light di pelaminan\r\n- Dua buah lengkungan bunga\r\n- Enam buah pilar jalan + bunga hidup\r\n- Dua buah peragola\r\n- Satu set meja bufee\r\n- Empat buah meja stand\r\n- Dua meja tamu\r\n- Karpet Jalan warna merah\r\n- Meja Jamuan Pengantin\r\n- Meja VIP enam buah + kursi', '2017-07-09 04:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(1, 'Beauty B', 3500000, 'media/gallery/beauty-b.jpeg', '- Video 2 kaset. dalam 2 DVD\r\n- 1 album Foto kolase ukuran 20x30 20halaman\r\n- DVD foto (edit dan non edit)\r\n- 3 acara (mappacing/pengajian, Akad nikah, Resepsi)\r\n- Pembesaran 16R 1lbr termasuk bingkai minimalis', '2017-07-09 03:42:41'),
(2, 'Beauty A', 3000000, 'media/gallery/beauty-a.jpeg', '- Video 2 kaset. dalam 2 DVD\r\n- 2 album foto standar\r\n- DVD foto (original foto)\r\n- 3 acara (mappacing/pengajian, Akad nikah, Resepsi)\r\n- Pembesaran 16R 1lbr termasuk bingkai minimalis', '2017-07-09 03:44:50'),
(3, 'Adorable A', 4000000, 'media/gallery/adorable-a.jpeg', '- Video 2 kaset,  dalam 2 DVD.\r\n- 1 album (1 album Foto kolase ukuran 25x30 20halaman).\r\n- 3 acara (mappacing/pengajian, Akad nikah, Resepsi)\r\n- DVD foto (edit dan non edit).\r\n- 2 lbr 16R foto resepsi/akad nikah\r\n- 1 Bingkai foto ukuran 16R', '2017-07-09 03:46:36'),
(4, 'Adorable B', 4500000, 'media/gallery/adorable-b.jpeg', '- Video 2 kaset,  dalam 2 DVD\r\n- 2 album (1 album Foto kolase ukuran 30x40 20 halaman)\r\n- 3 acara (mappacing/pengajian, Akad nikah, Resepsi)\r\n- DVD foto (edit dan non edit)\r\n- 2 lbr 20R foto resepsi/akad nikah\r\n- 1 Bingkai foto ukuran 20R.', '2017-07-09 03:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id`, `name`, `price`, `image`, `address`, `description`, `create_date`) VALUES
(1, 'Gedung Balai Sartika', 14950000, 'media/gallery/balai-sartika.jpeg', 'Jl. Suryalaya Indah No. 1-3, Buahbatu, Cijagra, Lengkong, Kota Bandung, Jawa Barat 40265', '-', '2017-07-09 03:30:36'),
(3, 'Gedung STT Tekstil', 6000000, 'media/gallery/stt-tekstil.jpeg', 'Jl. Jakarta No.34, Kebonwaru, Batununggal, Kota Bandung, Jawa Barat 40272', '-', '2017-07-09 03:32:54'),
(4, 'Bale Asri Pusdai', 18500000, 'media/gallery/bale-asri-pusdai.jpeg', 'Jl. Diponegoro No.63, Cihaur Geulis, Cibeunying Kaler, Kota Bandung, Jawa Barat 40122', '-', '2017-07-09 03:34:07'),
(5, 'Gedung Kologdam', 8500000, 'media/gallery/kologdam.jpeg', 'Jl. Aceh, Merdeka, Sumur Bandung, Kota Bandung, Jawa Barat 40113', '-', '2017-07-09 03:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `hiburan`
--

CREATE TABLE `hiburan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiburan`
--

INSERT INTO `hiburan` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(1, 'Band Classic', 2250000, 'media/gallery/band-classic.jpeg', '-', '2017-07-09 04:28:02'),
(2, 'Organ Tunggal', 1500000, 'media/gallery/organ-tunggal.jpeg', '-', '2017-07-09 04:28:43'),
(3, 'Marawis', 1000000, 'media/gallery/marawis.jpeg', '-', '2017-07-09 04:29:01'),
(4, 'Dangdut', 2350000, 'media/gallery/dangdut.jpg', '-', '2017-07-09 04:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `wedding_date` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_cake` int(11) DEFAULT NULL,
  `id_catering` int(11) DEFAULT NULL,
  `id_dekorasi` int(11) DEFAULT NULL,
  `id_dokumentasi` int(11) DEFAULT NULL,
  `id_gedung` int(11) DEFAULT NULL,
  `id_hiburan` int(11) DEFAULT NULL,
  `id_riasnbaju` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `id_souvenir` int(11) DEFAULT NULL,
  `id_undangan` int(11) DEFAULT NULL,
  `harga_cake` int(11) DEFAULT NULL,
  `harga_catering` int(11) DEFAULT NULL,
  `harga_dekorasi` int(11) DEFAULT NULL,
  `harga_dokumentasi` int(11) DEFAULT NULL,
  `harga_gedung` int(11) DEFAULT NULL,
  `harga_hiburan` int(11) DEFAULT NULL,
  `harga_riasnbaju` int(11) DEFAULT NULL,
  `harga_service` int(11) DEFAULT NULL,
  `harga_souvenir` int(11) DEFAULT NULL,
  `harga_undangan` int(11) DEFAULT NULL,
  `jumlah_catering` int(11) DEFAULT NULL,
  `jumlah_souvenir` int(11) DEFAULT NULL,
  `jumlah_undangan` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `create_date`, `wedding_date`, `id_user`, `id_cake`, `id_catering`, `id_dekorasi`, `id_dokumentasi`, `id_gedung`, `id_hiburan`, `id_riasnbaju`, `id_service`, `id_souvenir`, `id_undangan`, `harga_cake`, `harga_catering`, `harga_dekorasi`, `harga_dokumentasi`, `harga_gedung`, `harga_hiburan`, `harga_riasnbaju`, `harga_service`, `harga_souvenir`, `harga_undangan`, `jumlah_catering`, `jumlah_souvenir`, `jumlah_undangan`, `total`) VALUES
(2, '2017-07-10 04:00:56', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riasnbaju`
--

CREATE TABLE `riasnbaju` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riasnbaju`
--

INSERT INTO `riasnbaju` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(1, 'Javanese Black', 7500000, 'media/gallery/javanese-black.jpg', '- 2 Set Baju Pengantin\r\n- Rias Pengantin ', '2017-07-09 02:31:40'),
(2, 'Javanese Maroon', 7000000, 'media/gallery/javanese.jpg', '- 2 Set Baju Pengantin\r\n- Rias Pengantin', '2017-07-09 02:33:13'),
(3, 'Songket Dress', 6500000, 'media/gallery/songkat-dress.jpg', '- 2 Set Baju Pengantin\r\n- Rias Pengantin', '2017-07-09 02:34:00'),
(4, 'Skyblue Muslim', 7000000, 'media/gallery/kebaya-muslim.png', '- 2 Set Baju Pengantin\r\n- Rias Pengantin', '2017-07-09 02:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(1, 'Silver Service', 8500000, 'media/gallery/silver-service.jpg', 'Handle 500 Guest, No limit Consultation with our team, Venue & Vendor Wedding suggestion, Limited Internal Meeting, Wedding book & rundown by our team, Conduct Technical Meeting, 5 person our crew. On the day standby depends on Rundown, Monitoring whole reception committees, monitoring food&beverages, Conduct VIP guest and photo session.', '2017-07-09 02:03:57'),
(2, 'Gold Service', 10500000, 'media/gallery/gold-service.png', 'Handle 1000 Guest, No limit Consultation with our team, Venue & Vendor Wedding suggestion, Limited Internal Meeting, Wedding book & rundown by our team, Conduct Technical Meeting, 6 person our crew. On the day standby depends on Rundown, Monitoring whole reception committees, monitoring food&beverages, Conduct VIP guest and photo session.', '2017-07-09 02:02:25'),
(3, 'Platinum Service', 13500000, 'media/gallery/platinum-service.jpg', 'Handle 1000-2000 Guest, No limit Consultation with our team, Venue & Vendor Wedding suggestion, Limited Internal Meeting, Wedding book & rundown by our team, Conduct Technical Meeting, 10 person our crew. On the day standby depends on Rundown, Monitoring whole reception committees, monitoring food&beverages, Conduct VIP guest and photo session.', '2017-07-09 02:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `souvenir`
--

CREATE TABLE `souvenir` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `souvenir`
--

INSERT INTO `souvenir` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(2, 'Gelas Mini', 4000, 'media/gallery/gelas.jpg', 'termasuk box dan kartu ucapan terima kasih', '2017-07-09 02:57:11'),
(3, 'Kalender Kayu', 5000, 'media/gallery/log-calendar.jpg', 'Termasuk kartu ucapan terima kasih', '2017-07-09 02:55:45'),
(4, 'Gantungan Kunci', 2500, 'media/gallery/gantungan-kunci.jpg', 'Termasuk kartu ucapan terima kasih', '2017-07-09 02:58:07'),
(6, 'Frame Photo', 4500, 'media/gallery/frame-photo.jpg', 'Termasuk kartu ucapan terima kasih', '2017-07-09 02:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `undangan`
--

CREATE TABLE `undangan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undangan`
--

INSERT INTO `undangan` (`id`, `name`, `price`, `image`, `description`, `create_date`) VALUES
(2, 'Onepage Inv', 850, 'media/gallery/onepage.png', '-', '2017-07-09 03:16:50'),
(3, 'Mail Inv', 1500, 'media/gallery/mail-invitation.jpg', '-', '2017-07-09 03:17:28'),
(4, 'Opensquare Inv', 5500, 'media/gallery/opening-inv.jpg', '-', '2017-07-09 03:18:01'),
(5, 'Landscape Inv', 3500, 'media/gallery/landscape-inv.jpg', '-', '2017-07-09 03:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip` int(6) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` int(14) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`, `status`, `name`, `birthdate`, `address`, `zip`, `city`, `province`, `country`, `phone`, `gender`, `image`, `create_date`) VALUES
(1, 'firman', '74bfebec67d1a87b161e5cbcf6f72a4a', 'fearman.al@gmail.com', 'Admin', 'Enable', 'Firman Alhadiansyah', '1994-08-05', 'Jl. KH. Usman Dhomiri No. 44 RT.03/03 Kel. Padasuka Kec. Cimahi Tengah', 40526, 'Cimahi', 'Jawa Barat', 'Indonesia', 838217164, 'Pria', 'media/gallery/corp.jpg', '2017-07-08 19:08:50'),
(3, 'rudy', 'rudy', 'rudy@gmail.com', 'Admin', 'Enable', 'Rudy Gedung', '1995-05-05', 'Bandung', 40958, 'Bandung', 'Jawa Barat', 'Indonesia', 2147483647, 'Pria', '', '2017-07-08 16:40:52'),
(5, 'tantan', 'tantan', '', 'User', 'Enable', '', '0000-00-00', '', 0, '', '', '', 0, 'Pria', 'media/gallery/capture.png', '2017-07-08 16:43:15'),
(7, 'ujang', 'c959810f01adc10791f46e1b3ecab45a', '', 'User', 'Enable', '', '0000-00-00', '', 0, '', '', '', 0, 'Pria', '', '2017-07-08 17:22:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dekorasi`
--
ALTER TABLE `dekorasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiburan`
--
ALTER TABLE `hiburan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cake` (`id_cake`),
  ADD KEY `id_catering` (`id_catering`),
  ADD KEY `id_dekorasi` (`id_dekorasi`),
  ADD KEY `id_dokumentasi` (`id_dokumentasi`),
  ADD KEY `id_gedung` (`id_gedung`),
  ADD KEY `id_hiburan` (`id_hiburan`),
  ADD KEY `id_riasnbaju` (`id_riasnbaju`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_souvenir` (`id_souvenir`),
  ADD KEY `id_undangan` (`id_undangan`);

--
-- Indexes for table `riasnbaju`
--
ALTER TABLE `riasnbaju`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `souvenir`
--
ALTER TABLE `souvenir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dekorasi`
--
ALTER TABLE `dekorasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hiburan`
--
ALTER TABLE `hiburan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `riasnbaju`
--
ALTER TABLE `riasnbaju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `souvenir`
--
ALTER TABLE `souvenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_10` FOREIGN KEY (`id_souvenir`) REFERENCES `souvenir` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_11` FOREIGN KEY (`id_undangan`) REFERENCES `undangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_cake`) REFERENCES `cake` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_catering`) REFERENCES `catering` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`id_dekorasi`) REFERENCES `dekorasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_5` FOREIGN KEY (`id_dokumentasi`) REFERENCES `dokumentasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_6` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_7` FOREIGN KEY (`id_hiburan`) REFERENCES `hiburan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_8` FOREIGN KEY (`id_riasnbaju`) REFERENCES `riasnbaju` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_9` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
