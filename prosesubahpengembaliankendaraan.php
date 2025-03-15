<?php
include("koneksi.php");
//periksa, apakah tombol ubah itu sudah di klik atau belum
if (isset($_POST['ubah'])) {
//memasukkan data ke array
if (isset($id_pengembalian) || isset($denda) || isset($kode_booking) || isset($tanggal)) {    
    $id_pengembalian = $_POST['id_pengembalian'];
    $denda = $_POST['denda'];
    $kode_booking = $_POST['kode_booking'];
    $tanggal = $_POST['tanggal'];
}

        //membuat query update ubah pengembalian kendaraan
        $sql"UPDATE `tblpengembalian` SET `id_pengembalian`='?',`kode_booking`='?',`tanggal`='?',`denda`='?' WHERE id_pengembalian";
        $query=mysqli_query($koneksi,"SELECT * FROM tblpengembalian WHERE id_pengembalian");

        //periksa, apakah query update berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index,.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil diubah!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya 
    header("Location: index.php");
?>