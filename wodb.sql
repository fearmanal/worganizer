-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 01:32 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
(1, 'Firman  Cake 2', 430000, 'media/gallery/plagiarism-check.png', 'Hello ini firman', '2017-07-08 05:34:37'),
(2, 'Rudy Cake 2', 140000, 'image/hello2.png', 'desc rudi', '2017-07-08 05:35:35'),
(4, 'Tantan Cake', 100000, 'image/hello.png', 'jksjladfhsafd', '2017-07-06 16:29:43'),
(6, 'Sheptian Cake', 850000, 'media/gallery/strawberry.png', 'hello2', '2017-07-08 06:19:26'),
(10, 'namex', 100, 'image', 'description', '2017-07-08 06:55:23'),
(11, 'name', 100, 'image', 'description', '2017-07-08 06:27:21'),
(12, 'name', 100, 'image', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2017-07-08 06:28:06'),
(14, 'Loong''s Teks', 100000, 'media/gallery/image002.jpg', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum \r\nis that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many \r\n\r\ndesktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites \r\n\r\nstill in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nsdf', '2017-07-08 08:01:04');

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
(1, 'Firman Catering', 11000000, 'media/gallery/jeruk.jpg', 'akjalkfjadjkhas;lkfjas;f', '2017-07-07 16:04:28');

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
(1, 'Firman Dekorasi', 240000, 'media/gallery/manggis.jpg', 'kljasdf;lksadhfpokasdjf', '2017-07-07 16:07:01');

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
(1, 'Firman  Dokumentasi', 6000000, 'media/gallery/p_20160402_144509_bf_1.jpg', 'nfghdrfgdgsdfg', '2017-07-07 16:09:23');

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
(1, 'Firman Gedung', 250000, 'media/gallery/apel.jpg', 'Cimahi', 'klasdjf;lksadf', '2017-07-07 16:41:56');

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
(1, 'Firman  Entertain', 120000, 'media/gallery/image003.jpg', 'm,.zxcvnlkasjdf;lks', '2017-07-07 16:11:02');

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
(1, '2017-07-08 11:06:22', '2017-07-28', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 500, 500, 500, 100000);

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
(1, 'Firman  Rias', 250000, 'media/gallery/apel.jpg', '.zcvjl;kasdjf;', '2017-07-07 16:12:56');

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
(1, 'Firman Platinum', 240000, 'media/gallery/capture.png', 'cvbsasagsdfweqr', '2017-07-07 16:14:59');

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
(1, 'Firman Souvenir', 250000, 'media/gallery/image002.jpg', 'asdkzjvas;dfj;', '2017-07-07 16:16:23');

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
(1, 'Firman Undangan', 420000, 'media/gallery/strawberry.png', 'xvnm,z.nfasdlfasdf;lkj', '2017-07-07 16:17:02');

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
(1, 'firman', 'firman', NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-08 11:04:42');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dekorasi`
--
ALTER TABLE `dekorasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hiburan`
--
ALTER TABLE `hiburan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `riasnbaju`
--
ALTER TABLE `riasnbaju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `souvenir`
--
ALTER TABLE `souvenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
