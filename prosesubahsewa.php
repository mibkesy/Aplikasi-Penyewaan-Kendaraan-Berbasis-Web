<?php
include("koneksi.php");
//periksa, apakah tombol ubah itu sudah di klik atau belu
if (isset($_POST['ubah'])) {
//memasukkan data ke array
if (isset($id_sewa) || isset($no_ktp) || isset($no_polisi) || isset($tgl_sewa) || isset($tgl_kembali) || isset($total_bayar)) {
    $id_sewa = $_POST['id_sewa'];
    $no_ktp = $_POST['no_ktp'];
    $no_polisi = $_POST['no_polisi'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $total_bayar = $_POST['total_bayar'];
    $total = count($nama);    
}

        //melakukan proses pembuatan query update ubah
        $sql="UPDATE `tblsewa` SET `id_sewa`='?',`no_ktp`='?',`no_polisi`='?',`tgl_sewa`='?',`tgl_kembali`='?',`total_bayar`='?' WHERE id_sewa";
        $tblsewa = mysqli_query($koneksi,"SELECT * FROM tblsewa WHERE id_sewa");

        //periksa, apakah query update ubah itu sudah berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil diubah!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            die("Maaf, data ini gagal diubah");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>