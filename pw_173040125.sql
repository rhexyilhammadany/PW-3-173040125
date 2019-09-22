-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Apr 2018 pada 19.34
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_173040125`
--
CREATE DATABASE IF NOT EXISTS `pw_173040125` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pw_173040125`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan_teknologi`
--

DROP TABLE IF EXISTS `perusahaan_teknologi`;
CREATE TABLE IF NOT EXISTS `perusahaan_teknologi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPerusahaan` varchar(256) NOT NULL,
  `PendiriPerusahaan` varchar(256) NOT NULL,
  `TahunBerdiri` year(4) NOT NULL,
  `KantorPusat` varchar(256) NOT NULL,
  `Produk` text NOT NULL,
  `Gambar` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan_teknologi`
--

INSERT INTO `perusahaan_teknologi` (`id`, `NamaPerusahaan`, `PendiriPerusahaan`, `TahunBerdiri`, `KantorPusat`, `Produk`, `Gambar`) VALUES
(1, 'Amazon', 'Jeff Bezos', 1994, 'Seattle, Washington, Amerika Serikat', 'A2Z Development, A9.com, Alexa Internet, Amazon.com, Amazon Kindle, Amazon Studios,Amazon Web Services, \r\nAudible.com, dpreview.com, Endless.com, IMDb, LoveFilm,Zappos.com, Woot, Junglee.com .', 'amazon.jpg'),
(2, 'Apple Inc', 'Steve Jobs,Steve Wozniak,Ronald Wayne', 1977, 'Silicon Valley, Cupertino, California, Amerika  ', 'Mac, iPod, iPhone, iPad, iPad Mini, Apple TV, OS X, iLife, iWork, iOS, Apple Watch,Watch OS .', 'apple.jpg'),
(3, 'Google', 'Sundar Pichai (CEO)', 1998, 'Mountain View, California, Amerika serikat', 'teknologi pencarian, komputasi web, perangkat lunak, dan periklanan daring.', 'google.jpg'),
(4, 'Facebook', 'Mark Zuckerberg, Eduardo Saverin, Andrew McCollum, Dustin Moskovitz, Chris Hughes', 2004, 'Menlo Park, California, Amerika Serikat', 'Layanan jejaring sosial  ', 'fb.jpg'),
(5, 'Microsoft', 'Bill Gates, Paul Allen .', 1975, 'Redmond, Washington, Amerika Serikat', 'Windows & Windows Live Division, Server and Tools, Online Services Division, Microsoft Business Division, Entertainment and Devices Division.   \r\n', 'microsoft.jpg'),
(6, 'Verizon', 'Lowell McAdam', 1983, 'New York City, Amerika Serikat', 'telekomunikasi', 'verizon.jpg'),
(7, 'Walmart', 'Sam Walton', 1962, 'Bentonville, Arkansas, Amerika serikat', 'Perlengkapan, cash & carry/klub gudang, toko serba ada diskon, toko diskon, \r\nhipermarket/supercenter/supertoko, supermarket. \r\n\r\n', 'walmart.jpg'),
(8, 'ICBC', 'Jiang Jianqing(Ketua dan Direktur Eksekutif', 1984, 'Beijing, Republik Rakyat Tiongkok', 'Keuangan dan Asuransi, Perbankan Konsumen,Perbankan Perusahaan, Bank investasi, Manajemen investasi, Manajemen Kekayaan Global, Ekuitas swasta, Hipotek, Kartu kredit.   \r\n       ', 'icbc.jpg'),
(9, 'At&t', 'Randall L. Stephenson (Chairman, Presiden dan ceo', 1983, 'Dallas, Texas, Amerika Serikat', 'telekomunikasi', 'at&t.jpg'),
(10, 'Samsung', 'Lee Kun-hee (Ketua dan CEO),Lee Soo-bin (Presiden, CEO dari Samsung \r\nLifeInsurance)', 1938, 'Samsung Town, Seoul, Korea Selatan', 'Pakaian, otomotif, bahan kimia,\r\nelektronik konsumen, komponen elektronik, peralatan medis,instrumen presisi, semikonduktor,solid-state \r\ndrive, DRAM, kapal, peralatan telekomunikasi dan peralatan rumah tangga                     \r\n                                \r\n\r\n', 'Samsung.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
