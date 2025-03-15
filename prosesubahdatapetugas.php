<?php
include("koneksi.php");
//periksa, apakah tombo sudah di klik atau belum
if (isset($_POST['ubah'])) {
    //memasukkan data ke array
if (isset($id_petugas) || isset($nama_petugas) || isset($alamat) || isset($no_telp) || isset($email) || isset($username)) {
    $id_petugas = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $username = $_POST['username'];    
}

        //membuat query update
        $sql="UPDATE `tblpetugas` SET `id_petugas`='?',`nama_petugas`='?',`no_telp`='?',`alamat`='?',`email`='?',`username`='?' WHERE id_petugas='$id_petugas'";
        $tblpetugas = mysqli_query($koneksi,"SELECT * FROM tblpetugas WHERE id_petugas='$id_petugas'");

        //periksa, apakah query berhasil atau belum
        if ($query()) {
            //jika berhasil maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil diubah!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            die("Maaf, data ini gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>