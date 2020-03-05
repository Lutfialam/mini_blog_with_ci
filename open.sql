-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jun 2019 pada 09.38
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `open`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bve`
--

CREATE TABLE `bve` (
  `id` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `link` varchar(256) NOT NULL,
  `deskripsi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bve`
--

INSERT INTO `bve` (`id`, `Title`, `jenis`, `gambar`, `link`, `deskripsi`) VALUES
(1, 'download addons JR E235 openBVE indonesia', 'JR E235', 'JRE235.jpg', 'http://lutfialam.github.io', 'ini merupakan kelanjutan dari JR E235 sebelumnya'),
(2, 'download addons JR EV E301 openBVE indonesia', 'JR EV E301', 'JREV.jpg', 'http://instagram.com/lutfi_railfans_daop1', 'Ini adalah addons JR EV E301');

-- --------------------------------------------------------

--
-- Struktur dari tabel `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `route`
--

INSERT INTO `route` (`id`, `jurusan`, `gambar`, `deskripsi`) VALUES
(1, 'tanggerang-duri', 'route-tng.jpg', 'ini adalah route dari tanggerang hingga duri yang di ubah oleh bekantan tanggerang(ahmad luthfi)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'lutfi alamsyah', 'lutfirailfana05@gmail.com', 'default.jpg', '$2y$10$XE4NN8ACXbUhegou138fCe.h68M.MTJin5TmDTCcARQS7rdoZuGp6', 1, 1, 1560653473),
(3, 'ahmad', 'ahmadbekantan@gmail.com', 'default.jpg', '$2y$10$v.EVt9TD1pzuhjfElxWcZey9JaHyCNZU3LzeKLUJb9eOeOInjbQpS', 2, 1, 1561643320);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `webdev`
--

CREATE TABLE `webdev` (
  `id` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `webdev`
--

INSERT INTO `webdev` (`id`, `jenis`, `gambar`, `deskripsi`) VALUES
(1, 'php', '', 'ini adalah sebuah percobaan/test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bve`
--
ALTER TABLE `bve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webdev`
--
ALTER TABLE `webdev`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bve`
--
ALTER TABLE `bve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `webdev`
--
ALTER TABLE `webdev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
