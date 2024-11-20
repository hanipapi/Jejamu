-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 05:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jejamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `jamu`
--

CREATE TABLE `jamu` (
  `id` int(11) NOT NULL,
  `namajamu` varchar(30) NOT NULL,
  `bahanjamu` varchar(1000) NOT NULL,
  `khasiat` varchar(1000) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `urlgambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jamu`
--

INSERT INTO `jamu` (`id`, `namajamu`, `bahanjamu`, `khasiat`, `jumlah`, `urlgambar`) VALUES
(1, 'Beras Kencur', 'beras, rimpang kencur, rimpang jahe, biji kedawung, biji kapulaga, buah asam, temu kunci, kayu manis, kunyit, jeruk nipis, pala, dan gula kelapa', 'dapat menghangatkan tubuh, memperlancar peredaran darah, meningkatkan nafsu makan, menyegarkan tubuh, menyembuhkan perut kembung, mengobati batuk, dan menyembuhkan gejala masuk angin.', NULL, 'https://kabarjombang.com/wp-content/uploads/2023/01/jamu-beras-kencur.jpg'),
(2, 'Kunyit Asam', 'kunyit, gula aren, garam, asam jawa, dan air.', 'melancarkan dan meredakan nyeri haid, serta menjaga kecantikan karena berkhasiat meremajakan sel-sel tubuh.', NULL, 'https://asset.kompas.com/crops/hVY5E1jqbDoKAbqS4rxx039TAnA=/24x0:867x562/750x500/data/photo/2021/03/02/603e41b8eaf6b.jpg'),
(3, 'Temulawak', 'Temulawak, asam jawa, gula aren, daun pandan, dan jinten.', 'menyembuhkan keluhan pusing, mual, sakit perut, dan menghilangkan gejala masuk angin.', NULL, 'https://asset.kompas.com/crops/LUoWfqHE5ffmAY1VWh55yuUzi4I=/0x15:399x281/1200x800/data/photo/2023/08/23/64e61d6d4a3bd.png'),
(4, 'Pahitan', 'Daun sambiloto, brotowali, akar alang-alang dan ceplik sari', 'Mengatasi pegal-pegal, menyembuhkan penyakit gatal-gatal, menambah nafsu makan, mencegah risiko diabetes, terapi cuci darah, dan anti alergi.', NULL, 'https://akcdn.detik.net.id/community/media/visual/2023/06/21/ilustrasi-jamu-1_169.jpeg?w=700&q=90'),
(5, 'Sinom', 'Sinom,  temulawak, kunyit, kapulaga, kayu manis, pala, gula merah, serta gula pasir.\r\n\r\n', 'Menambah nafsu makan, mengatasi peradangan lambung atau maag dan mengatasi masalah keputihan pada wanita.', NULL, 'https://asset-2.tstatic.net/palembang/foto/bank/images/Resep-Jamu-Sinom-yang-Enak-dan-Mudah-Dimasak-di-Rumah-Berkhasiat-Mengurangi-Nyeri-saat-Haid.jpg'),
(6, 'Kunci Sirih', 'Rimpang kunci, buah asem, aneka empon-empon', 'Menghilangkan masalah keputihan, menghilangkan bau badan, merapatkan bagian kewanitaan dan bisa memperkuat gigi', NULL, 'https://www.malanggleerrr.com/wp-content/uploads/2020/10/IMG-20200416-WA0011-e1602685976630.jpg'),
(7, 'Kudu laos', 'Mengkudu, Laos, jahe, merica dan bawang putih lanang', 'Melancarkan peredaran darah, menghangatkan badan, membuat perut terasa nyaman, menambah nafsu makan, melancarkan haid, dan menyegarkan badan.', NULL, 'https://cdn0-production-images-kly.akamaized.net/iX2JnGAP2U28AkRuRbxC6r6pcAo=/1x92:1000x655/1360x766/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4617724/original/012689500_1697783730-shutterstock_2049217847.jpg'),
(8, 'Brotowali', 'Batang brotowali dengan air, kencur, dan daun jambu monyet', 'Mengonsumsi jamu brotowali dapat meningkatkan sistem kekebalan tubuh, sehingga Anda terhindar dari berbagai penyakit. Jenis jamu tradisional ini juga bermanfaat sebagai pengobatan diabetes, radang sendi, dan penyakit kuning.', NULL, 'https://magelangekspres.disway.id/upload/6399beb5ad295defacc7daa8199aba66.jpg'),
(9, 'Jamu Uyup-uyup', 'Kencur, kunyit, luntas atau beluntas, kunci, jahe, bengle, laos, kunir, temulawak, lempuyang, simbukan, cowekan atau pegagan, dan temugiring.', 'Kelancaran Pengeluaran Air Susu Ibu (Asi) Pada Ibu Nifas', NULL, 'https://img.herstory.co.id/articles/archive_20221019/resep-jamu-20221019-043958.webp'),
(10, 'Galian singset', 'Kencur, temulawak, kunyit, asam jawa, kayu manis, merica, laos, serai, kunyit, cengkeh, kapulaga, ketumbar, dan beberapa rempah tradisional lainnya', 'Menjaga kesehatan dan mengencangkan organ kewanitaan, serta mengencangkan badan.\r\n', NULL, 'https://cdn.yummy.co.id/content-images/images/20230211/i1HA0KmqGEH1nqFBrrRKzdEABmknQuSw-31363736303732383739d41d8cd98f00b204e9800998ecf8427e.jpg'),
(11, 'Cabe Puyang', 'Cabe jamu dan puyang, temu ireng, temulawak, jahe, adas, pulosari, kunir, merica, kedawung, keningar, buah asam, dan kunci\r\n', 'Menghilangkan cikalen, pegal, dan linu-linu di tubuh, terutama pegal-pegal di pinggang', NULL, 'https://senyawamandiri.com/wp-content/uploads/2021/08/IMG_0887-scaled.jpeg'),
(12, 'Coro', 'Jahe, kayu manis, serai, santan kelapa, gula merah', 'Mengembalikan stamina tubuh, menurunkan kolesterol jahat dalam tubuh, mengobati masuk angin, dan meringankan gejala pusing.\r\n', NULL, 'https://akcdn.detik.net.id/community/media/visual/2023/12/09/wedang-coro-atau-jamu-coro_169.jpeg?w=700&q=90');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jamu` varchar(30) NOT NULL,
  `total` int(11) NOT NULL,
  `tambahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `nama`, `jamu`, `total`, `tambahan`) VALUES
(24, 'Muhammad Faza Khayyuna', '3', 2, 'Harus Enak Ya'),
(26, 'Muhamm', 'Pilih Jamumu', 0, 'TEREDIT');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jeniskelamin` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `golongandarah` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama`, `email`, `password`, `jeniskelamin`, `tanggallahir`, `golongandarah`) VALUES
(1, 'Faza Khayyuna', 'muhammadfaza@gmail.com', '1234', 'laki-laki', '2004-06-06', 'O'),
(2, 'Hanif Afifudin', 'hanifafifudin@gmail.com', '5678', 'laki-laki', '2024-05-03', 'O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jamu`
--
ALTER TABLE `jamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jamu`
--
ALTER TABLE `jamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
