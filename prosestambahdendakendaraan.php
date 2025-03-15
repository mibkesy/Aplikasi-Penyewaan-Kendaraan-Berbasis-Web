<?php
include("koneksi.php");
//periksa, apakah tombol tambah itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_denda) || isset($denda) || isset($bayar)) {
$id_denda = $_POST['id_denda'];
$denda = $_POST['denda'];
$bayar = $_POST['bayar'];
}
        //melakukan proses pembuatan query insert denda
        $sql="INSERT INTO `tbldenda`(`id_denda`, `denda`, `bayar`) VALUES ('?','?','?')";
        $tbldenda = mysqli_query($koneksi,"SELECT * FROM tbldenda WHERE id_denda");

        //periksa, apakah query insert itu berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihka menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            die("Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>