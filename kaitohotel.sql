-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2023 at 04:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaitohotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(200) NOT NULL,
  `jumlah_tersisa` int(11) NOT NULL,
  `jumlah_maksimal` int(11) NOT NULL,
  `harga_kamar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `nama_kamar`, `jumlah_tersisa`, `jumlah_maksimal`, `harga_kamar`) VALUES
(1, 'Economy Room', 20, 20, '400000'),
(2, 'Family Room', 20, 20, '450000'),
(3, 'Enjoy Room', 15, 15, '1000000'),
(4, 'Directur Room', 10, 10, '1500000'),
(5, 'King Room', 8, 8, '4000000'),
(6, 'Deluxe Room', 5, 5, '5000000');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `role`, `email`, `password`) VALUES
(1, 'bunta', 'Operator', 'bunta@gmail.com', 'admin'),
(2, 'Sui', 'Administrator', 'sui@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(200) NOT NULL,
  `nomor_telp` varchar(200) NOT NULL,
  `nama_kamar` varchar(200) NOT NULL,
  `lama_inap` varchar(11) NOT NULL,
  `total_harga` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pemesan`, `nomor_telp`, `nama_kamar`, `lama_inap`, `total_harga`, `status`) VALUES
(1, 'nama', '0828912', 'Directur Room', '1', '1500000', 'Sudah Selesai'),
(2, 'Dongkrak', '089887787', 'Deluxe Room', '1', '5000000', 'Sudah Selesai'),
(3, 'Xian yin', '093849938', 'Economy Room', '3', '1200000', 'Sudah Selesai'),
(4, 'Melati', '087876678', 'Family Room', '5', '2250000', 'Sudah Selesai'),
(5, 'Wilson', '0837748383', 'Family Room', '2', '900000', 'Sudah Selesai'),
(6, 'Fara', '08786547839', 'Economy Room', '30', '12000000', 'Sudah Selesai'),
(7, 'adit', '', 'Family Room', '45', '20250000', 'Sudah Selesai'),
(8, 'Bang R', '089832738', 'Family Room', '2', '900000', 'Sudah Selesai'),
(9, 'George', '067687879', 'Deluxe Room', '30', '150000000', 'Sudah Selesai'),
(10, 'ggg', '657', 'Deluxe Room', '700', '3500000000', 'Sudah Selesai'),
(11, 'Chawnima', '082092982', 'Deluxe Room', '3', '15000000', 'Sudah Selesai'),
(12, 'kaito', '0829738832', 'Deluxe Room', '100', '500000000', 'Sudah Selesai'),
(13, 'Bow', '08928893', 'Deluxe Room', '3', '15000000', 'Sudah Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_name`) VALUES
('Administrator'),
('Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
