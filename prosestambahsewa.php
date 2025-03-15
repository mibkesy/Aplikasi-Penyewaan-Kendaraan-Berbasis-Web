<?php
include("koneksi.php");
//periksa, apakah  tombol  tambah itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array

if (isset($id_sewa) || isset($no_ktp) || isset($tgl_sewa) || isset($tgl_kembali) || isset($total_bayar)) {
    $id_sewa = $_POST['id_sewa'];
    $no_ktp = $_POST['no_ktp'];
    $no_polisi = $_POST['no_polisi'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $total_bayar = $_POST['total_bayar'];
    $total = count($nama);   
}

        //melakukan proses pembuatan insert query insert sewa
        $sql="INSERT INTO `tblsewa`(`id_sewa`, `no_ktp`, `no_polisi`, `tgl_sewa`, `tgl_kembali`, `total_bayar`) VALUES ('?','?','?','?','?','?')";
        $tblsewa = mysqli_query($koneksi,"SELECT * FROM tblsewa WHERE id_sewa");

        //periksa, apakah query insert tambah sewa itu sudah berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Locatio: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            die("Maaf, data ini gagal ditambahkan1");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>