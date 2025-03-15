<?php
include("koneksi.php");
//periksa, apakah tombol tambah itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_rental) || isset($jumlah) || isset($tgl_pinjam)) {
    
    $id_rental = $_POST['id_rental'];
    $jumlah = $_POST['jumlah'];
    $tgl_pinjam = $_POST['tgl_pinjam'];

}

        //melakukan proses pembuatan query insert tambah
        $sql="INSERT INTO `tblrental`(`id_rental`, `tgl_pinjam`, `jumlah`) VALUES ('?','?','?')";
        $tblrental = mysqli_query($koneksi,"SELECT * FROM tblrental WHERE id_rental");

        //periksa, apakah query insert itu sudah berhasil atau  belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            if ($query()) {
                //jika gagal, maka akan dialihkan menuj ke halaman index.php dengan status=gagal
                die("Maaf, data ini gagal ditambahkan!");
            }
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>