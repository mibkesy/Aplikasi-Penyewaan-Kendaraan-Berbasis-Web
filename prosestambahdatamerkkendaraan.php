<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_merk) || isset($merk)) {
$id_merk = $_POST['id_merk'];
$merk = $_POST['merk'];
}

            //membuat query tambah insert
            $sql="INSERT INTO `tblmerk`(`id_merk`, `merk`) VALUES ('?','?')";
            $tblkendaraan=mysqli_query($koneksi,"SELECT * FROM tblmerk WHERE id_merk=$id_merk");

            //apakah query simpan telah sudah berhasil
            if ($query) {
                //jika berhasil maka akan dialihka ke halaman index.php dengan status sukses berhasil tersimpan
                header("Location: index.php?status=Data, ini telah sudah berhasil tersimpan");
            }else {
                //jika gagal, maka akan dialihkan ke halaman index.php dengan status gagal tersimpan
                header("Location: index.php?status=Maaf, data ini GAGAL tersimpan");
            }
        }
        //mengembalikan ke halaman semula index yang sebelum nya
        header("Location: index.php");
?>