-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2024 pada 15.40
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsfoodcourt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_per_tenant`
--

CREATE TABLE `penjualan_per_tenant` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` int(11) NOT NULL CHECK (`bulan` between 1 and 12),
  `tenant_id` int(11) NOT NULL,
  `tenant_name` varchar(255) NOT NULL,
  `total_penjualan` decimal(15,2) NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_diskon` decimal(15,2) DEFAULT 0.00,
  `total_pajak` decimal(15,2) DEFAULT 0.00,
  `total_pembayaran` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan_per_tenant`
--

INSERT INTO `penjualan_per_tenant` (`id`, `tahun`, `bulan`, `tenant_id`, `tenant_name`, `total_penjualan`, `total_item`, `total_diskon`, `total_pajak`, `total_pembayaran`) VALUES
(1, 2024, 1, 1, 'Tenant 1', '1500000.00', 500, '50000.00', '150000.00', '1450000.00'),
(2, 2024, 1, 2, 'Tenant 2', '1200000.00', 400, '40000.00', '120000.00', '1160000.00'),
(3, 2024, 1, 3, 'Tenant 3', '1300000.00', 450, '30000.00', '130000.00', '1240000.00'),
(4, 2024, 2, 1, 'Tenant 1', '1300000.00', 470, '48000.00', '140000.00', '1260000.00'),
(5, 2024, 2, 2, 'Tenant 2', '1100000.00', 420, '35000.00', '110000.00', '1050000.00'),
(6, 2024, 2, 3, 'Tenant 3', '1250000.00', 460, '32000.00', '120000.00', '1180000.00'),
(7, 2024, 3, 1, 'Tenant 1', '1400000.00', 490, '52000.00', '145000.00', '1355000.00'),
(8, 2024, 3, 2, 'Tenant 2', '1300000.00', 430, '42000.00', '130000.00', '1235000.00'),
(9, 2024, 3, 3, 'Tenant 3', '1400000.00', 470, '33000.00', '140000.00', '1330000.00'),
(10, 2024, 4, 1, 'Tenant 1', '1600000.00', 510, '55000.00', '160000.00', '1545000.00'),
(11, 2024, 4, 2, 'Tenant 2', '1400000.00', 440, '43000.00', '130000.00', '1337000.00'),
(12, 2024, 4, 3, 'Tenant 3', '1500000.00', 480, '34000.00', '150000.00', '1445000.00'),
(13, 2024, 5, 1, 'Tenant 1', '1700000.00', 530, '57000.00', '170000.00', '1633000.00'),
(14, 2024, 5, 2, 'Tenant 2', '1500000.00', 450, '46000.00', '140000.00', '1444000.00'),
(15, 2024, 5, 3, 'Tenant 3', '1600000.00', 470, '49000.00', '150000.00', '1550000.00'),
(16, 2024, 6, 1, 'Tenant 1', '1800000.00', 550, '60000.00', '180000.00', '1740000.00'),
(17, 2024, 6, 2, 'Tenant 2', '1600000.00', 480, '55000.00', '160000.00', '1545000.00'),
(18, 2024, 6, 3, 'Tenant 3', '1700000.00', 490, '57000.00', '170000.00', '1630000.00'),
(19, 2024, 7, 1, 'Tenant 1', '1900000.00', 560, '62000.00', '190000.00', '1838000.00'),
(20, 2024, 7, 2, 'Tenant 2', '1700000.00', 490, '58000.00', '170000.00', '1632000.00'),
(21, 2024, 7, 3, 'Tenant 3', '1800000.00', 500, '59000.00', '180000.00', '1721000.00'),
(22, 2024, 8, 1, 'Tenant 1', '2000000.00', 600, '70000.00', '200000.00', '1930000.00'),
(23, 2024, 8, 2, 'Tenant 2', '1800000.00', 510, '65000.00', '180000.00', '1735000.00'),
(24, 2024, 8, 3, 'Tenant 3', '1900000.00', 520, '67000.00', '190000.00', '1833000.00'),
(25, 2024, 9, 1, 'Tenant 1', '2100000.00', 620, '75000.00', '210000.00', '1980000.00'),
(26, 2024, 9, 2, 'Tenant 2', '1900000.00', 530, '70000.00', '190000.00', '1812000.00'),
(27, 2024, 9, 3, 'Tenant 3', '2000000.00', 540, '72000.00', '200000.00', '1920000.00'),
(28, 2024, 10, 1, 'Tenant 1', '2200000.00', 630, '78000.00', '220000.00', '2082000.00'),
(29, 2024, 10, 2, 'Tenant 2', '2000000.00', 550, '73000.00', '200000.00', '1923000.00'),
(30, 2024, 10, 3, 'Tenant 3', '2100000.00', 560, '75000.00', '210000.00', '2025000.00'),
(31, 2024, 11, 1, 'Tenant 1', '2300000.00', 640, '80000.00', '230000.00', '2177000.00'),
(32, 2024, 11, 2, 'Tenant 2', '2100000.00', 570, '76000.00', '210000.00', '2022000.00'),
(33, 2024, 11, 3, 'Tenant 3', '2200000.00', 580, '78000.00', '220000.00', '2120000.00'),
(34, 2024, 12, 1, 'Tenant 1', '2400000.00', 650, '85000.00', '240000.00', '2275000.00'),
(35, 2024, 12, 2, 'Tenant 2', '2200000.00', 590, '80000.00', '220000.00', '2120000.00'),
(36, 2024, 12, 3, 'Tenant 3', '2300000.00', 600, '82000.00', '230000.00', '2220000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bulan`
--

CREATE TABLE `tbl_bulan` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `ags` int(11) NOT NULL,
  `sep` int(11) NOT NULL,
  `okt` int(11) NOT NULL,
  `nov` int(11) NOT NULL,
  `des` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bulan`
--

INSERT INTO `tbl_bulan` (`id`, `tahun`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `ags`, `sep`, `okt`, `nov`, `des`) VALUES
(2, 2020, 6000, 8000, 5000, 7000, 4729, 8756, 9543, 8897, 4698, 3467, 4235, 8789),
(3, 2021, 5543, 6475, 9573, 3425, 5434, 6345, 9482, 4423, 5643, 7556, 3267, 5334),
(4, 2022, 9753, 1245, 1945, 2817, 2931, 3283, 3575, 6343, 6342, 4533, 9864, 2212),
(5, 2023, 8873, 3816, 4927, 9373, 2345, 4223, 9754, 7942, 9375, 9171, 2121, 4444),
(6, 2024, 2193, 8172, 1000, 2171, 3917, 9371, 9381, 2123, 5334, 3293, 6666, 9725);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `no_menu` varchar(30) NOT NULL,
  `no_tenant` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jenis_menu` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `no_menu`, `no_tenant`, `foto`, `jenis_menu`, `nama`, `deskripsi`, `harga`, `aktif`) VALUES
(4, '1/12/FCE-2024', '21', 'lobster-roll.jpg', 'makanan', 'Lobster', 'Lobster adalah hidangan mewah yang terbuat dari daging lobster laut yang memiliki tekstur lembut dan rasa manis alami. ', 50000, 1),
(7, '2/12/FCE-2024', '21', 'nasi.jpg', 'makanan', 'Nasi Goreng', 'hidangan khas Indonesia yang terbuat dari nasi yang digoreng dengan bumbu rempah, kecap manis, dan berbagai bahan tambahan seperti telur, ayam, udang, atau sayuran.', 25000, 1),
(8, '3/12/FCE-2024', '21', 'mie.jpg', 'makanan', 'Mie goreng', 'Mie Goreng adalah hidangan populer Indonesia yang terbuat dari mie yang digoreng bersama dengan bumbu khas, seperti kecap manis, bawang, dan cabai, serta berbagai bahan tambahan seperti ayam, telur, sayuran, atau seafood', 20000, 1),
(9, '4/12/FCE-2024', '22', 'esteh.jpg', 'minuman', 'Es Teh', 'Es Teh adalah minuman penyegar yang terbuat dari teh hitam atau teh hijau yang diseduh dan kemudian didinginkan dengan es batu.', 7000, 1),
(10, '5/12/FCE-2024', '22', 'esjeruk.jpg', 'minuman', 'Es jeruk', 'minuman segar yang terbuat dari perasan jeruk segar yang dicampur dengan air es dan sedikit gula, memberikan rasa manis dan asam yang menyegarkan. ', 8000, 1),
(11, '6/12/FCE-2024', '22', 'escincau.jpg', 'minuman', 'Es Cincau', 'minuman tradisional yang terbuat dari ekstrak daun cincau yang dipotong kecil-kecil dan dicampur dengan air es serta gula.', 10000, 1),
(12, '7/12/FCE-2024', '23', 'pisang.jpg', 'makanan', 'Pisang Crispy', 'makanan yang terbuat dari pisang matang yang digoreng dengan balutan tepung renyah, memberikan tekstur garing di luar dan lembut di dalam.', 15000, 1),
(13, '8/12/FCE-2024', '23', 'tahupentol.jpg', 'makanan', 'Tahu isi pentol', 'camilan khas yang terdiri dari tahu yang diisi dengan pentol (bola daging atau ayam) yang dibalut tepung dan digoreng hingga garing. ', 17000, 1),
(14, '9/12/FCE-2024', '23', 'kentang.jpg', 'makanan', 'Kentang Goreng', 'camilan sederhana yang terbuat dari potongan kentang yang digoreng hingga garing dan renyah.', 13000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `status` enum('Pending','Dibayar','Selesai') DEFAULT 'Pending',
  `tanggal_pesanan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_pesanan`, `total_harga`, `status`, `tanggal_pesanan`) VALUES
(1, '52000.00', 'Selesai', '2024-12-04 13:04:26'),
(2, '35000.00', 'Selesai', '2024-12-04 13:13:14'),
(3, '38000.00', 'Dibayar', '2024-12-04 13:22:45'),
(4, '45000.00', 'Dibayar', '2024-12-04 13:25:29'),
(5, '27000.00', 'Dibayar', '2024-12-04 13:25:50'),
(6, '45000.00', 'Dibayar', '2024-12-04 13:28:50'),
(7, '35000.00', 'Selesai', '2024-12-04 13:31:55'),
(8, '52000.00', 'Dibayar', '2024-12-04 14:03:57'),
(9, '45000.00', 'Dibayar', '2024-12-04 14:07:17'),
(10, '218000.00', 'Pending', '2024-12-04 14:14:41'),
(11, '150000.00', 'Selesai', '2024-12-04 14:32:18'),
(12, '297000.00', 'Selesai', '2024-12-04 14:39:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan_detail`
--

CREATE TABLE `tbl_pesanan_detail` (
  `id_detail` int(11) NOT NULL,
  `pesanan_id` int(11) DEFAULT NULL,
  `no_menu` varchar(50) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pesanan_detail`
--

INSERT INTO `tbl_pesanan_detail` (`id_detail`, `pesanan_id`, `no_menu`, `jumlah`, `total_harga`) VALUES
(1, 1, '2/12/FCE-2024', 1, '25000.00'),
(2, 1, '3/12/FCE-2024', 1, '20000.00'),
(3, 1, '4/12/FCE-2024', 1, '7000.00'),
(4, 2, '2/12/FCE-2024', 1, '25000.00'),
(5, 2, '6/12/FCE-2024', 1, '10000.00'),
(6, 3, '3/12/FCE-2024', 1, '20000.00'),
(7, 3, '5/12/FCE-2024', 1, '8000.00'),
(8, 3, '6/12/FCE-2024', 1, '10000.00'),
(9, 4, '2/12/FCE-2024', 1, '25000.00'),
(10, 4, '3/12/FCE-2024', 1, '20000.00'),
(11, 5, '3/12/FCE-2024', 1, '20000.00'),
(12, 5, '4/12/FCE-2024', 1, '7000.00'),
(13, 6, '2/12/FCE-2024', 1, '25000.00'),
(14, 6, '3/12/FCE-2024', 1, '20000.00'),
(15, 7, '3/12/FCE-2024', 1, '20000.00'),
(16, 7, '4/12/FCE-2024', 1, '7000.00'),
(17, 7, '5/12/FCE-2024', 1, '8000.00'),
(18, 8, '2/12/FCE-2024', 1, '25000.00'),
(19, 8, '3/12/FCE-2024', 1, '20000.00'),
(20, 8, '4/12/FCE-2024', 1, '7000.00'),
(21, 9, '2/12/FCE-2024', 1, '25000.00'),
(22, 9, '3/12/FCE-2024', 1, '20000.00'),
(23, 10, '1/12/FCE-2024', 3, '150000.00'),
(24, 10, '2/12/FCE-2024', 1, '25000.00'),
(25, 10, '4/12/FCE-2024', 1, '7000.00'),
(26, 10, '5/12/FCE-2024', 2, '16000.00'),
(27, 10, '6/12/FCE-2024', 2, '20000.00'),
(28, 11, '1/12/FCE-2024', 1, '50000.00'),
(29, 11, '3/12/FCE-2024', 2, '40000.00'),
(30, 11, '4/12/FCE-2024', 1, '7000.00'),
(31, 11, '6/12/FCE-2024', 1, '10000.00'),
(32, 11, '8/12/FCE-2024', 1, '17000.00'),
(33, 11, '9/12/FCE-2024', 2, '26000.00'),
(34, 12, '1/12/FCE-2024', 2, '100000.00'),
(35, 12, '2/12/FCE-2024', 2, '50000.00'),
(36, 12, '3/12/FCE-2024', 1, '20000.00'),
(37, 12, '4/12/FCE-2024', 1, '7000.00'),
(38, 12, '5/12/FCE-2024', 4, '32000.00'),
(39, 12, '6/12/FCE-2024', 3, '30000.00'),
(40, 12, '7/12/FCE-2024', 1, '15000.00'),
(41, 12, '8/12/FCE-2024', 1, '17000.00'),
(42, 12, '9/12/FCE-2024', 2, '26000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pembeli`
--

CREATE TABLE `t_pembeli` (
  `id` int(11) NOT NULL,
  `no_pembeli` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pembeli`
--

INSERT INTO `t_pembeli` (`id`, `no_pembeli`, `nama`, `gender`, `alamat`, `telepon`, `email`, `aktif`) VALUES
(1, 1, 'jacob', 'Laki-laki', 'jalan cipto mangunkusumo', '0895704427842', 'mhdfaizal7780@gmail.com', 1),
(2, 2, 'evie', 'perempuan', 'jalan jendral sudirman', '0876272521232', 'tipolnesunggul@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tenant`
--

CREATE TABLE `t_tenant` (
  `id` int(11) NOT NULL,
  `no_tenant` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `jam_operasional` varchar(15) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_tenant`
--

INSERT INTO `t_tenant` (`id`, `no_tenant`, `nama`, `jenis`, `lokasi`, `jam_operasional`, `aktif`) VALUES
(1, 21, 'Tenant 1', 'Makanan', 'Timbau Blok 9', '08.00-22.00 WIT', 1),
(3, 22, 'Tenant 2', 'Minuman', 'Timbau Blok 10', '09.00-24.00 WIT', 1),
(4, 23, 'Tenant 3', 'Makanan', 'Timbau Blok 12', '09.00-24.00 WIT', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `identity` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `authorized` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL,
  `waktumasuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `waktukeluar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id`, `identity`, `nama`, `username`, `password`, `authorized`, `foto`, `aktif`, `waktumasuk`, `waktukeluar`) VALUES
(1, '0', 'Muhammad Faizal', 'admin', 'admin', 'Admin', 'img_avatar2.png', 1, '2024-11-30 04:42:02', '0000-00-00 00:00:00'),
(3, '21', 'Tenant 1', 'jacob', '123', 'Tenant', 'IMG20200218085923.jpg', 1, '2024-11-30 04:57:11', '0000-00-00 00:00:00'),
(4, '1', 'natan kempot', 'balabalaa', '1234', 'Pembeli', 'IMG20220821165623.jpg', 1, '2024-11-30 04:57:36', '0000-00-00 00:00:00'),
(5, '22', 'Tenant 2', 'mhdfaizal', '123', 'Tenant', 'IMG_20221226_221038_699.jpg', 1, '2024-11-30 04:59:29', '0000-00-00 00:00:00'),
(6, '23', 'Tenant 3', 'faizal', '123', 'Tenant', 'IMG_20221219_141359_148.jpg', 1, '2024-12-04 14:25:34', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penjualan_per_tenant`
--
ALTER TABLE `penjualan_per_tenant`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_menu` (`no_menu`);

--
-- Indeks untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `tbl_pesanan_detail`
--
ALTER TABLE `tbl_pesanan_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `pesanan_id` (`pesanan_id`),
  ADD KEY `no_menu` (`no_menu`);

--
-- Indeks untuk tabel `t_pembeli`
--
ALTER TABLE `t_pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_tenant`
--
ALTER TABLE `t_tenant`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penjualan_per_tenant`
--
ALTER TABLE `penjualan_per_tenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesanan_detail`
--
ALTER TABLE `tbl_pesanan_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `t_pembeli`
--
ALTER TABLE `t_pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_tenant`
--
ALTER TABLE `t_tenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pesanan_detail`
--
ALTER TABLE `tbl_pesanan_detail`
  ADD CONSTRAINT `tbl_pesanan_detail_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `tbl_pesanan` (`id_pesanan`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_pesanan_detail_ibfk_2` FOREIGN KEY (`no_menu`) REFERENCES `tbl_menu` (`no_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
