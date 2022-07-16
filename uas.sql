-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 05:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `komen` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`nama`, `email`, `komen`) VALUES
('edwin yudhi', 'iqbalanwar429@yahoo.', 'lorem'),
('iqbalcuy', 'iqbalyoiki@gmail.com', 'halokak'),
('iqbalsih', 'agbargantengsselalu@', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sed aut ducimus voluptatum voluptatem soluta necessitatibus quo accusantium velit unde molestiae adipisci, quisquam doloribus perferendis quis, blanditiis error consectetur. Distinctio!'),
('kldakldsa', 'iqbalanwar429@yahoo.', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('muhammad iqbal f.a', 'dsd@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sed aut ducimus voluptatum voluptatem soluta necessitatibus quo accusantium velit unde molestiae adipisci, quisquam doloribus perferendis quis, blanditiis error consectetur. Distinctio!');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `foto`, `nama`, `keterangan`, `harga`, `tgl`) VALUES
(3, '1.jpg', 'Kura Kura', 'Dengan kulit merah yang kenyal dan isian kacang hijau yang telah dikupas di dalamnya', 3000, '2021-01-17 03:49:03'),
(4, '2.jpg', 'Soes', 'Rasanya gurih dengan isian fla vanili', 2000, '2021-01-17 03:57:41'),
(5, '3.jpg', 'Soes Buah', 'Rasanya gurih dengan isian fla vanili dan buah segar diatasnya.', 3500, '2021-01-17 03:58:36'),
(6, '4.jpg', 'Kue Lapis', 'Manis dan kenyal,enak sekali jika dimakan sambil ngobrol dengan kerabat.', 2000, '2021-01-17 04:02:03'),
(7, '5.jpg', 'Putu Ayu', 'Dengan tekstur yang lembut dan manis dengan kelapa parut yang gurih diatasnya.', 2000, '2021-01-17 04:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'iqbalyoiki@gmail.com', '123', 'admin'),
(2, 'user1', 'dsd@gmail.com', '123', 'user'),
(8, 'user2', 'iqbalanwar429@yahoo.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
