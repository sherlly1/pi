-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 03:58 PM
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
-- Database: `kecanduan_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `teks_gejala` varchar(255) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `teks_gejala`, `mb`, `md`) VALUES
(1, 'Sulit berkonsentrasi saat belajar.', 0.8, 0.08),
(2, 'Sering mengakses game di waktu luang.', 0.2, 0.02),
(3, 'Malas jika disuruh mengerjakan sesuatu selain bermain game.', 0.8, 0.08),
(4, 'Selalu meluangkan waktunya untuk bermain game.', 0.2, 0.02),
(5, 'Bermain game sampai lupa waktu.', 0.8, 0.08),
(6, 'Gelisah jika tidak bermain game.', 0.4, 0.04),
(7, 'Terus menerus memikirkan tentang game.', 0.2, 0.02),
(8, 'Suka menyendiri di suatu tempat.', 0.4, 0.04),
(9, 'Tidak tertarik untuk bergaul dengan lingkungan sekitar.', 0.8, 0.08),
(10, 'Rela mengeluarkan banyak uang demi game.', 0.8, 0.08),
(11, 'Pola hidup yang tidak teratur.', 0.2, 0.02),
(12, 'Jika diajak berbicara selalu tentang game.', 0.4, 0.04),
(13, 'Sering berhalusinasi.', 0.8, 0.08),
(14, 'Menganggap game sebagai teman terbaik.', 0.4, 0.04),
(15, 'Malas jika disuruh mengerjakan sesuatu selain bermain game.', 0.8, 0.08),
(16, 'Malas jika disuruh mengerjakan sesuatu selain bermain game.', 0.8, 0.08),
(17, 'Malas jika disuruh mengerjakan sesuatu selain bermain game.', 0.8, 0.08);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_analisis`
--

CREATE TABLE `hasil_analisis` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `cf_value` decimal(10,2) NOT NULL,
  `persentase_cf` decimal(5,2) NOT NULL,
  `tingkat_kecanduan` varchar(20) NOT NULL,
  `solusi` text DEFAULT NULL,
  `waktu_analisis` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(100) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil_analisis`
--

INSERT INTO `hasil_analisis` (`id`, `username`, `cf_value`, `persentase_cf`, `tingkat_kecanduan`, `solusi`, `waktu_analisis`, `nama`, `umur`) VALUES
(1, '', 0.06, 5.71, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-11 21:51:15', NULL, NULL),
(2, '', -0.11, 11.43, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-11 21:52:21', NULL, NULL),
(3, '', -0.11, 11.43, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-11 21:54:33', NULL, NULL),
(4, '', 0.06, 5.71, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-11 22:02:48', NULL, NULL),
(5, '', 0.06, 5.71, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-11 22:09:44', '', 0),
(6, '', -0.11, 11.43, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-11 22:10:35', 'jancuk', 1),
(7, '', 0.03, 2.86, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 12:23:07', 'sherly', 23),
(8, '', 0.03, 2.86, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 12:24:19', 'sherly', 23),
(9, '', 0.03, 2.86, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 12:24:38', 'sherly', 23),
(10, '', 0.03, 2.86, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 12:25:35', 'jalu', 15),
(11, '', 0.03, 2.86, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 12:39:07', 'jalu', 15),
(12, '', 0.82, 81.82, 'Tinggi', 'Carilah orang terdekat untuk selalu mengingatkan mengurangi waktu untuk memakai gadget, fokus pada hal yang ini dicapai dan tujuan hidup, alihkan perhatian ke aktivitas positif atau mencari berkumpul dengan orang lain.', '2024-07-12 12:49:20', 'jalu', 15),
(13, '', -0.18, 18.18, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 12:50:28', 'jalu', 15),
(14, '', 0.05, 4.55, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:00:13', 'jalu', 15),
(15, '', 0.45, 45.45, 'Sedang', 'Lakukan komunikasi dengan orang terdekat dan orang lain, danimbangi dengan aktivitas positif serta memperbanyak kegiatan agar sedikit mengurangi bermain game online.', '2024-07-12 13:00:43', 'jalu', 15),
(16, '', 0.82, 81.82, 'Tinggi', 'Carilah orang terdekat untuk selalu mengingatkan mengurangi waktu untuk memakai gadget, fokus pada hal yang ini dicapai dan tujuan hidup, alihkan perhatian ke aktivitas positif atau mencari berkumpul dengan orang lain.', '2024-07-12 13:05:55', 'jalu', 15),
(17, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:45:33', 'agil', 20),
(18, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:46:51', 'agil', 20),
(19, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:46:55', 'agil', 20),
(20, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:47:27', 'agil', 20),
(21, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:47:48', 'agil', 20),
(22, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:47:52', 'agil', 20),
(23, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:52:12', 'agil', 20),
(24, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:52:42', 'agil', 20),
(25, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:53:48', 'agil', 20),
(26, '', 0.27, 27.27, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.', '2024-07-12 13:56:24', 'agil', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_kecanduan`
--

CREATE TABLE `tingkat_kecanduan` (
  `id` int(11) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tingkat_kecanduan`
--

INSERT INTO `tingkat_kecanduan` (`id`, `level`, `keterangan`) VALUES
(1, 'Tinggi', 'Carilah orang terdekat untuk selalu mengingatkan mengurangi waktu untuk memakai gadget, fokus pada hal yang ini dicapai dan tujuan hidup, alihkan perhatian ke aktivitas positif atau mencari berkumpul dengan orang lain.'),
(2, 'Sedang', 'Lakukan komunikasi dengan orang terdekat dan orang lain, danimbangi dengan aktivitas positif serta memperbanyak kegiatan agar sedikit mengurangi bermain game online.'),
(3, 'Rendah', 'Melakukan aktivitas atau kegiatan positif, menjaga komunikasi, serta menjaga kesehatan fisik dan pikiran.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'sherly', '$2y$10$1Tb4r/eW89v7yfp39djbsO23u58RpDGzXpzG7JqGJVhzjT6nFlXXC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_analisis`
--
ALTER TABLE `hasil_analisis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tingkat_kecanduan`
--
ALTER TABLE `tingkat_kecanduan`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hasil_analisis`
--
ALTER TABLE `hasil_analisis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tingkat_kecanduan`
--
ALTER TABLE `tingkat_kecanduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
