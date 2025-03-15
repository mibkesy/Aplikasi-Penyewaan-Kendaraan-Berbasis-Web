<?php
include("koneksi.php");
//periksa, apakah tombol tambah itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_jenis_bayar) || isset($harga) || isset($transaksi_kendaraan) || isset($tgl_pinjam) || isset($tgl_kembali) || isset($jenis_bayar) || isset($denda)) {
$id_jenis_bayar = $_POST['id_jenis_bayar'];
$harga = $_POST['harga'];
$transaksi_kendaraan = $_POST['transaksi_kendaraan'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$jenis_bayar = $_POST['jenis_bayar'];
$denda = $_POST['denda'];
}

        //melakukan proses pembuatan query insert 
        $sql="INSERT INTO `tbl_jenis_bayar`(`id_jenis_bayar`, `jenis_bayar`, `transaksi_kendaraan`, `tgl_pinjam`, `tgl_kembali`, `harga`, `denda`) VALUES ('?','?','?','?','?','?','?')";
        $tbl_jenis_bayar = mysqli_query($koneksi,"SELCT * FROM tbl_jenis_bayar WHERE id_jenis_bayar");

        //periksa, apakajh query insert itu sudah berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            die("Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>