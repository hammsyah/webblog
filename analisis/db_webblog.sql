-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2022 at 11:54 AM
-- Server version: 8.0.31
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
-- Database: `db_webblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `aa_user`
--

CREATE TABLE `aa_user` (
  `id_user` int NOT NULL,
  `fid_level` int NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pasword` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `realname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `enable_user` tinyint(1) NOT NULL,
  `keterangan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aa_user`
--

INSERT INTO `aa_user` (`id_user`, `fid_level`, `user_name`, `pasword`, `realname`, `enable_user`, `keterangan`) VALUES
(1, 1, 'budi@webblog.com', '123', 'Anggara Budi Santoso', 1, 'Super Admin'),
(2, 2, 'datuk@webblog.com', '1234', 'Datuk Maringgi', 1, 'penulis'),
(3, 3, 'tejo@webblog.com', '1234', 'Tejo Sunaryo', 1, ''),
(4, 2, 'jarwo@webblog.com', '6789', 'Jarwo Agung', 1, ''),
(5, 3, 'bejo@webblog.com', '1234', 'Bejo Santoso', 1, 'test alert update'),
(7, 3, 'santosa@webblog.com', '1234', 'SANTOSA AJI', 1, ''),
(13, 3, 'afdsfa@afaf.afasf', '123456', 'xxsa', 0, 'wwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `aa_user_level`
--

CREATE TABLE `aa_user_level` (
  `id` int NOT NULL,
  `nama_level` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aa_user_level`
--

INSERT INTO `aa_user_level` (`id`, `nama_level`, `id_level`) VALUES
(1, 'admin', 1),
(2, 'Operator', 2),
(3, 'Penulis', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dm_category`
--

CREATE TABLE `dm_category` (
  `id_category` int NOT NULL,
  `nama_category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_article`
--

CREATE TABLE `tr_article` (
  `id_article` int NOT NULL,
  `fid_catergory` int NOT NULL,
  `title_article` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content_article` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img_article` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `show` tinyint(1) DEFAULT NULL,
  `enable_comm` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aa_user`
--
ALTER TABLE `aa_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `aa_user_level`
--
ALTER TABLE `aa_user_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_category`
--
ALTER TABLE `dm_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tr_article`
--
ALTER TABLE `tr_article`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aa_user`
--
ALTER TABLE `aa_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `aa_user_level`
--
ALTER TABLE `aa_user_level`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `dm_category`
--
ALTER TABLE `dm_category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_article`
--
ALTER TABLE `tr_article`
  MODIFY `id_article` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
