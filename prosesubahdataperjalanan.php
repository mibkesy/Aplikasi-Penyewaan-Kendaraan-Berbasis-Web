<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['ubah'])) {

//memasukkan data ke array
if (isset($id_perjalanan) || isset($asal) || isset($tujuan) || isset($jarak)) {    
    $id_perjalanan = $_POST['id_perjalanan'];
    $asal = $_POST['id_kendaraan'];
    $tujuan = $_POST['tujuan'];
    $jarak = $_POST['jarak'];
}

        //membuat query update tambah
        $sql="UPDATE `tblperjalanan` SET `id_perjalanan`='?',`asal`='?',`tujuan`='?',`jarak`='?' WHERE id_perjalanan=$id_perjalanan";
        $tblperjalanan=mysqli_query($koneksi,"SELECT * FROM tblperjalanan WHERE id_perjalanan=$id_perjalanan");

        //apakah query update berhasil atau belum
        if ($query()) {
            //jika berhasil maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil diubah!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>