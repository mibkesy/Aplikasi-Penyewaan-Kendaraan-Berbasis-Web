<?php
include("koneksi.php");
//periksa, apakah tombol tambah itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_kembali) || isset($denda) || isset($lama) || isset($no_polisi) || isset($tanggal_sewa) || isset($tanggal_kembali)) {
$id_kembali = $_POST['id_kembali'];
$denda = $_POST['denda'];
$lama = $_POST['lama'];
$no_polisi = $_POST['no_polisi'];
$tanggal_sewa = $_POST['tgl_sewa'];
$tanggal_kembali = $_POST['tgl_kembali'];
}

        //melakukukan proses pembuatan query insert tambah kembali
        $sql="INSERT INTO `tblkembali`(`id_kembali`, `no_polisi`, `tgl_sewa`, `tgl_kembali`, `lama`, `denda`) VALUES ('?','?','?','?','?','?')";
        $tblkembali = mysqli_query($koneksi,"SELECT * FROM tblkembali WHERE id_kembali");

        //periksa, apakah query insert tambah itu sudah berhasil atau belum
        if ($query()) {
            //jika  berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>