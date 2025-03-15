<?php
include("koneksi.php");
//periksa, apakah tombol ubah itu sudah di klik atau belum
if (isset($_POST['ubah'])) {
//memasukkan data ke array
if (isset($id_rental) || isset($jumlah) || isset($tgl_pinjam)) {
    $id_rental = $_POST['id_rental'];
    $jumlah = $_POST['jumlah'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
}

        //melakukan proses pembuatan query update ubah
        $sql="UPDATE `tblrental` SET `id_rental`='?',`tgl_pinjam`='?',`jumlah`='?' WHERE id_rental";
        $tblrental = mysqli_query($koneksi,"SELECT * FROM tblrental WHERE id_rental");

        //periksa, apakah query update ubah itu sudah berhasil atau belum
        if ($query()) {
            //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=berhasil
            header("Location: index.php?status=Data, ini berhasil diubah!");
        }else {
            if ($query()) {
                //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
                die("Maaf, data ini gagal diubah!");
            }
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>