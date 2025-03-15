<?php
include("koneksi.php");
//periksa, apakah tombol itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_pengembalian) || isset($denda) || isset($kode_booking) || isset($tanggal)) {
    $id_pengembalian = $_POST['id_pengembalian'];
    $denda = $_POST['denda'];
    $kode_booking = $_POST['kode_booking'];
    $tanggal = $_POST['tanggal'];    
}

        //membuat query insert tambah pengembalian kendaraan
        $sql="INSERT INTO `tblpengembalian`(`id_pengembalian`, `kode_booking`, `tanggal`, `denda`) VALUES ('?','?','?','?')";
        $tblpengembalian = mysqli_query($koneksi,"SELECT * FROM tblpengembalian WHERE id_pengembalian");

        //periksa, apakah tambah simpan sudah berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>