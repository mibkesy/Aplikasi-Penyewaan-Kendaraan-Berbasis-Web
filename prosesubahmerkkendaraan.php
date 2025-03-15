<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['ubah'])) {
//memasukkan data ke array
if (isset($id_merk) || isset($merk)) {    
    $id_merk = $_POST=['id_merk'];
    $merk = $_POST=['merk'];
}

        //membuat query ubah update
        $sql="UPDATE `tblmerk` SET `id_merk`='?',`merk`='?' WHERE id_merk=$id_merk";
        $tblmerk=mysqli_query($koneksi,"SELECT * FROM tblmerk WHERE id_merk=$id_merk");
     
        //apakah query ubah telah sudah berhasil
        if ($query()) {
                    //jika berhasil maka akan dialihakn menuju ke halaman index.php dengan status=sukses
                    header("Location: index.php?status=Data, ini telah sudah berhasil diubah!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>