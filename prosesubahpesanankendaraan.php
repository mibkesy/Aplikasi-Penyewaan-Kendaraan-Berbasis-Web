<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['ubah'])) {
    

//memasukkan data ke array
if (isset($id_pesanan) || isset($harga) || isset($tgl_pinjam) || isset($tgl_kembali)) {
    $id_pesanan = $_POST['id_pesanan'];
    $harga = $_POST['harga'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
}

        //membuat query update
        $sql="UPDATE `tblpesanan` SET `id_pesanan`='?',`harga`='?',`tgl_pinjam`='?',`tgl_kembali`='?' WHERE id_pesanan=$id_pesanan";
        $query=mysql_query($koneksi,"SELECT * FROM tblpesanan WHERE id_pesanan=$id_pesanan");
        
        //apakah query ini berhasil atau belum
        if ($query()) {
            //jika telah sudah berhasil maka akan dialihka menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil diubah!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>