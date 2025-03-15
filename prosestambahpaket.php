<?php
include("koneksi.php");
//periksa, apakah tombol telah sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_paket) || isset($harga) || isset($keterangan)) {
$id_paket = $_POST['id_paket'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
}

        //membuat query
        $tblpaket=mysqli_query($koneksi,"SELECT tblpaket WHERE id_paket=$id_paket");
        
        //apakah query simpan berhasil
        if ($query()) {
            //jika berhasil makan akan dialihkan ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan");
        }else {
            //jika gagal makan akan dialihkan ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Data, ini gagal ditambahkan");
        }
    }
 //mengembalikan ke halaman semula index yang sebelum nya
 header("Location: index.php");
?>