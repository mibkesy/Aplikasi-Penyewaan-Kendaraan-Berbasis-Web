--
-- Database: `sewakendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id_booking` int(11) NOT NULL,
  `kode_booking` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `konfirmasi_pembayaran` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldenda`
--

CREATE TABLE `tbldenda` (
  `id_denda` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkalender`
--

CREATE TABLE `tblkalender` (
  `id_kalender` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `mulai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkembali`
--

CREATE TABLE `tblkembali` (
  `id_kembali` int(20) NOT NULL,
  `no_polisi` char(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` int(5) NOT NULL,
  `denda` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkendaraan`
--

CREATE TABLE `tblkendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `no_polisi` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `tahun` date NOT NULL,
  `tarif_kendaraan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status_kendaraan` varchar(255) NOT NULL,
  `foto` blob NOT NULL,
  `harga` int(255) NOT NULL,
  `denda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmerk`
--

CREATE TABLE `tblmerk` (
  `id_merk` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpaketrental`
--

CREATE TABLE `tblpaketrental` (
  `id_paket` int(50) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpelanggan`
--

CREATE TABLE `tblpelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(57) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jumlah_pinjaman` varchar(95) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpemesan`
--

CREATE TABLE `tblpemesan` (
  `id_pemesan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpengembalian`
--

CREATE TABLE `tblpengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `kode_booking` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblperjalanan`
--

CREATE TABLE `tblperjalanan` (
  `id_perjalanan` int(11) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `jarak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpesanan`
--

CREATE TABLE `tblpesanan` (
  `id_pesanan` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpetugas`
--

CREATE TABLE `tblpetugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblrental`
--

CREATE TABLE `tblrental` (
  `id_rental` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jumlah` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsewa`
--

CREATE TABLE `tblsewa` (
  `id_sewa` int(30) NOT NULL,
  `no_ktp` char(50) NOT NULL,
  `no_polisi` char(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE `tbluser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(95) NOT NULL,
  `pass_conf` varchar(95) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`id_user`, `username`, `password`, `pass_conf`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com'),
(2, 'pegawai', 'pegawai', 'pegawai', 'pegawai@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_bayar`
--

CREATE TABLE `tbl_jenis_bayar` (
  `id_jenis_bayar` int(11) NOT NULL,
  `jenis_bayar` enum('Periksa (Checking)','Giro','Nota Debit','Kredit','Kartu Kredit','Kartu Debit','E-Money','E-Wallet','QRIS','Mobile Banking') NOT NULL,
  `transaksi_kendaraan` decimal(10,0) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `denda` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tbldenda`
--
ALTER TABLE `tbldenda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tblkalender`
--
ALTER TABLE `tblkalender`
  ADD PRIMARY KEY (`id_kalender`);

--
-- Indexes for table `tblkembali`
--
ALTER TABLE `tblkembali`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `tblkendaraan`
--
ALTER TABLE `tblkendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `tblmerk`
--
ALTER TABLE `tblmerk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tblpaketrental`
--
ALTER TABLE `tblpaketrental`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tblpelanggan`
--
ALTER TABLE `tblpelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tblpemesan`
--
ALTER TABLE `tblpemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `tblpengembalian`
--
ALTER TABLE `tblpengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `tblperjalanan`
--
ALTER TABLE `tblperjalanan`
  ADD PRIMARY KEY (`id_perjalanan`);

--
-- Indexes for table `tblpesanan`
--
ALTER TABLE `tblpesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tblpetugas`
--
ALTER TABLE `tblpetugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tblrental`
--
ALTER TABLE `tblrental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `tblsewa`
--
ALTER TABLE `tblsewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_jenis_bayar`
--
ALTER TABLE `tbl_jenis_bayar`
  ADD PRIMARY KEY (`id_jenis_bayar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbldenda`
--
ALTER TABLE `tbldenda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblkalender`
--
ALTER TABLE `tblkalender`
  MODIFY `id_kalender` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblkembali`
--
ALTER TABLE `tblkembali`
  MODIFY `id_kembali` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblkendaraan`
--
ALTER TABLE `tblkendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblmerk`
--
ALTER TABLE `tblmerk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpaketrental`
--
ALTER TABLE `tblpaketrental`
  MODIFY `id_paket` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpelanggan`
--
ALTER TABLE `tblpelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpemesan`
--
ALTER TABLE `tblpemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpengembalian`
--
ALTER TABLE `tblpengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblperjalanan`
--
ALTER TABLE `tblperjalanan`
  MODIFY `id_perjalanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpesanan`
--
ALTER TABLE `tblpesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpetugas`
--
ALTER TABLE `tblpetugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblrental`
--
ALTER TABLE `tblrental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblsewa`
--
ALTER TABLE `tblsewa`
  MODIFY `id_sewa` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jenis_bayar`
--
ALTER TABLE `tbl_jenis_bayar`
  MODIFY `id_jenis_bayar` int(11) NOT NULL AUTO_INCREMENT;