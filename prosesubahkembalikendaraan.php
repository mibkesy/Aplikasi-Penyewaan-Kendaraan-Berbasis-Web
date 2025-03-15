<?php
include("koneksi.php");
//periksa, apakah tombol ubah itu sudah di klik atau belum
if (isset($_POST['ubah'])) {
//memasukkan data ke array
if (isset($id_kembali) || isset($denda) || isset($lama) || isset($no_polisi) || isset($tgl_sewa) || isset($tgl_kembali)) {
    $id_kembali = $_POST['id_kembali'];
    $denda = $_POST['denda'];
    $lama = $_POST['lama'];
    $no_polisi = $_POST['no_polisi'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_kembali = $_POST['tgl_kembali'];   
}

        //melakukan proses pembuatan query update kembali
        $sql="UPDATE `tblkembali` SET `id_kembali`='?',`no_polisi`='?',`tgl_sewa`='?',`tgl_kembali`='?',`lama`='?',`denda`='?' WHERE id_kemnbali";
        $tblkembali = mysqli_query($koneksi,"SELECT * FROM tblkembali WHERE id_kembali");

        //periksa, apakah query update kembali itu sudah berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.ph?status=Data, ini berhasil diubah!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            die("Location: index.php?status=Maaf, data ini gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index.ph yang sebelum nya
    header("Location: index.php");
?>