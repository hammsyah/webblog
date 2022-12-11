-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 05:53 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `user_name` varchar(50) NOT NULL,
  `pasword` varchar(100) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `enable_user` tinyint(1) DEFAULT NULL,
  `keterangan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aa_user`
--

INSERT INTO `aa_user` (`id_user`, `fid_level`, `user_name`, `pasword`, `realname`, `enable_user`, `keterangan`) VALUES
(1, 1, 'budi@webblog.com', '1234', 'Anggara Budi Santoso', 1, 'Super Admin'),
(2, 2, 'datuk@webblog.com', '1234', 'Datuk Maringgi', 1, 'penulis'),
(3, 2, 'bondan@webblog.com', '1234', 'Bondan Sendiko', 1, 'Operator'),
(6, 3, 'bagong@webblog.com', '1234', 'Bagong Pambudi Rojo', 1, NULL),
(8, 1, 'raden@gmail.com', '1234', 'Raden Joko', 1, NULL),
(9, 2, 'dalijo@webblog.com', '1234', 'Dalijo', 1, ''),
(11, 2, 'asfasfd@gsg.ffaf', 'zvcxcvz', 'adsfas', 0, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `aa_user_level`
--

CREATE TABLE `aa_user_level` (
  `id` int NOT NULL,
  `nama_level` varchar(20) NOT NULL,
  `id_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aa_user_level`
--

INSERT INTO `aa_user_level` (`id`, `nama_level`, `id_level`) VALUES
(1, 'admin', 1),
(5, 'Operator', 2),
(7, 'Penulis', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dm_category`
--

CREATE TABLE `dm_category` (
  `id_category` int NOT NULL,
  `nama_category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_article`
--

CREATE TABLE `tr_article` (
  `id_article` int NOT NULL,
  `fid_catergory` int NOT NULL,
  `title_article` varchar(100) NOT NULL,
  `content_article` text NOT NULL,
  `img_article` varchar(20) DEFAULT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `show` tinyint(1) DEFAULT NULL,
  `enable_comm` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `aa_user_level`
--
ALTER TABLE `aa_user_level`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
