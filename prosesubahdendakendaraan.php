<?php
include("koneksi.php");
//periksa, apakah tombol ubah itu sudah di klik atau belum
if (isset($_POST['ubah'])) {
//memasukkan data ke array
    if (isset($id_denda) || isset($denda) || isset($bayar)) {
    $id_denda = $_POST['id_denda'];
    $denda = $_POST['denda'];
    $bayar = $_POST['bayar'];
}

        //melakukan proses pembuatan query update ubah
        $sql="UPDATE `tbldenda` SET `id_denda`='?',`denda`='?',`bayar`='?' WHERE id_denda";
        $tbldenda = mysqli_query($koneksi,"SELECT * FROM tbldenda WHERE id_denda");

        //periksa, apakah query update ubah itu berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil diubah!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halalaman index.php dengan status=gagal
            die("Maaf, data ini gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
     header("Location: index.php");
?>