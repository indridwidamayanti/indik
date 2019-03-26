-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Mar 2019 pada 15.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `waktu`) VALUES
(1, 'ORACLE', 'Oracle adalah relational database management system (RDBMS) untuk mengelola informasi secara terbuka, komprehensif dan terintegrasi.\r\nOracle adalah sistem manajemen database relasional (RDBMS) dari Oracle Corporation. Awalnya dikembangkan pada tahun 1977 oleh Lawrence Ellisogn dan pengembang lainnya, Oracle DB adalah salah satu yang paling terpercaya dan secara luas digunakan mesin database relasional.\r\nSistem ini dibangun di sekitar kerangka database relasional di mana objek data dapat langsung diakses oleh pengguna (atau front end aplikasi) melalui bahasa query terstruktur (SQL). Oracle adalah arsitektur database relasional sepenuhnya terukur dan sering digunakan oleh perusahaan-perusahaan global, yang mengelola dan mengolah data di jaringan area luas dan lokal. Oracle database memiliki komponen jaringan sendiri untuk memungkinkan komunikasi di seluruh jaringan, Oracle DB juga dikenal sebagai Oracle RDBMS.\r\n', '2019-02-19 04:09:22'),
(2, 'MS SQL SERVERh', 'Microsoft SQL Server adalah sebuah sistem manajemen basis data relasional (RDBMS) produk Microsoft. Bahasa kueri utamanya adalah Transact-SQL yang merupakan implementasi dari SQL standar ANSI/ISO yang digunakan oleh Microsoft dan Sybase. Umumnya SQL Server digunakan di dunia bisnis yang memiliki basis data berskala kecil sampai dengan menengah, tetapi kemudian berkembang dengan digunakannya SQL Server pada basis data besar. \r\nMicrosoft SQL Server dan Sybase/ASE dapat berkomunikasi lewat jaringan dengan menggunakan protokol TDS (Tabular Data Stream). Selain dari itu, Microsoft SQL Server juga mendukung ODBC (Open Database Connectivity), dan mempunyai driver JDBC untuk bahasa pemrograman Java. Fitur yang lain dari SQL Server ini adalah kemampuannya untuk membuat basis data mirroring dan clustering. Pada versi sebelumnya, MS SQL Server 2000 terserang oleh cacing komputer SQL Slammer yang mengakibatkan kelambatan akses Internet pada tanggal 25 Januari 2003\r\n', '2019-02-19 04:09:22'),
(7, 'Dbase', ' 2.	Berdasarkan aspek penilaian Manner.\r\nBaik itu volume suara, pengaturan Nafas, hingga penekanan kata kedua paslon sudah cukup mampu mengakplikasikan ke 3 penilaian tersebut. \r\nakan tetapi ada satu hal yang sedikit mengurangi penilaian saya terhadap paslon 01 yaitu mimik wajah. Pada saat paslon 02 menyampaikan argumeentasi mengenai Index infrastruktur indonesia kalah effisiensinya, paslon 01 memberikan raut wajah yang sangat ekspresif menandakan ketidaksetujuannya. Padahal dalam tata aturan Manner dalam debat \r\nbaik itu tim pertahanan maupun oposisi tidak boleh menunjukkan raut muka yang sangat ekspresif.\r\n', '0000-00-00 00:00:00'),
(8, 'scsd', ' 2.	Berdasarkan aspek penilaian Manner.\r\nBaik itu volume suara, pengaturan Nafas, hingga penekanan kata kedua paslon sudah cukup mampu mejngakplikasikan ke 3 penilaian tersebut. \r\nakan tetapi ada satu hal yang sedikit mengurangi penilaian saya terhadap paslon 01 yaitu mimik wajah. Pada saat paslon 02 menyampaikan argumeentasi mengenai Index infrastruktur indonesia kalah effisiensinya, paslon 01 memberikan raut wajah yang sangat ekspresif menandakan ketidaksetujuannya. Padahal dalam tata aturan Manner dalam debat \r\nbaik itu tim pertahanan maupun oposisi tidak boleh menunjukkan raut muka yang sangat ekspresif.\r\n', '2019-02-19 04:09:22'),
(9, 'scasdfhger', ' 2.	Berdasarkan aspek penilaian Manner.Baik itu volume suara, pengaturan Nafas, hingga penekanan kata kedua paslon sudah cukup mampu mengakplikasikan ke 3 penilaian tersebut. akan tetapi ada satu hal yang sedikit mengurangi penilaian saya terhadap paslon 01 yaitu mimik wajah. Pada saat paslon 02 menyampaikan argumeentasi mengenai Index infrastruktur indonesia kalah effisiensinya, paslon 01 memberikan raut wajah yang sangat ekspresif menandakan ketidaksetujuannya. Padahal dalam tata aturan Manner dalam debat baik itu tim pertahanan maupun oposisi tidak boleh menunjukkan raut muka yang sangat ekspresif.', '2019-02-19 04:09:41'),
(10, 'Pilkada in', 'hiyak hiyak', '2019-02-19 04:10:08'),
(12, 'apa hayuk iya', 'capek nih gaes saya mau tidur duls m', '2019-02-19 04:09:22'),
(13, 'hya', 'esfewnsd dfjwegiwjn dsjfwiegjwn sdfew ', '2019-02-19 04:09:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `NIM` text NOT NULL,
  `TTL` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `Nama`, `NIM`, `TTL`, `waktu`) VALUES
(23, 'Indri Dwi Damayanti', ' 09031281823043', ' Palembang, 10 September 2000', '2019-03-05 16:08:01'),
(24, 'Gladys Dwi Mawarni', ' 09031281823027', ' Palembang, 2 Agustus 2000', '2019-03-05 16:08:39'),
(25, 'Dicha Pratiwi', ' 09031281823045', ' Gunung Megang, 16 Desember 1999', '2019-03-05 16:09:25'),
(26, 'Septiani Aulia Putri', ' 09031281823141', ' Palembang, 28 September 2001', '2019-03-05 16:10:12'),
(30, 'Mahdiyah Afifah Sari', ' 09031181823001', ' Palembang, 29 Desember 2000', '2019-03-06 01:36:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'indricantik', 'indri123'),
(2, 'ndrek', '1945'),
(3, 'ndrekk', '12345'),
(4, 'okeoke', 'ooo'),
(5, 'sep', 'septi'),
(6, 'sepp', 'sepp'),
(7, '', ''),
(8, 'ndrekk', '333'),
(9, 'ooo', 'ooo'),
(10, 'indricantik', 'indri123'),
(11, 'aaaa', 'aaaa'),
(12, 'UHUY', 'UHUY'),
(13, 'UHUY', 'UHUY'),
(14, 'UHUY', 'uhuy'),
(15, '123', '123'),
(16, 'aaaa', 'aaaa'),
(17, 'nab', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
