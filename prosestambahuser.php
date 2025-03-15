<?php
include("koneksi.php");
//periksa, apakah tombol tambah itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_user) || isset($username) || isset($email) || isset($password) || isset($password_conf)) {
    
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];
}

        //melakukan proses pembuatan query insert tambah user 
        $sql="INSERT INTO `tbluser`(`id_user`, `username`, `password`, `pass_conf`, `email`) VALUES ('?','?','?','?','?')";
        $tbluser = mysqli_query($koneksi,"SELECT * FROM tbluser WHERE id_user");

        //periksa, apakah query insert tambah user itu sudah berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            die("Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>