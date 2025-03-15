<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['tambah'])) {
    //memasukkan data ke array
if (isset($id_petugas) || isset($nama_petugas) || isset($alamat) || isset($no_telp) || isset($email) || isset($username)) {
    $id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$username = $_POST['username'];
}

        //membuat query insert petugas
        $sql="INSERT INTO `tblpetugas`(`id_petugas`, `nama_petugas`, `no_telp`, `alamat`, `email`, `username`) VALUES ('?','?','?','?','?','?')";
        $tblpetugas = mysqli_query($koneksi,"SELECT * FROM tblpetugas WHERE id_petugas='$id_petugas'");
        //apakah query berhasil atau belum
        if ($query()) {
            //jika berhasil makan akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal makan akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>