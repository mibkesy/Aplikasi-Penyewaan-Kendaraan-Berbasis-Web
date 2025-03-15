<?php
include("koneksi.php");
//periksa, apakah tombol ubah sudah di klik atau belum
if (isset($_POST['ubah'])) {
//memasukkan data ke array
if (isset($id_kendaraan) || isset($merk) || isset($foto) || isset($no_polisi) || isset($warna) || isset($tahun) || isset($keterangan) || isset($status_kendaraan) || isset($tarif_kendaraan) || isset($harga) || isset($denda)) {
    $id_kendaraan = $_POST['id_kendaraan'];
    $merk = $_POST['merk'];
    $foto = $_POST['foto'];
    $no_polisi = $_POST['no_polisi'];
    $warna = $_POST['warna'];
    $tahun = $_POST['tahun'];
    $keterangan = $_POST['keterangan'];
    $status_kendaraan = $_POST['status_kendaraan'];
    $tarif_kendaraan = $_POST['tarif_kendaraan'];
    $harga = $_POST['harga'];
    $denda = $_POST['denda'];   
}

    //membuat query update
    $sql="UPDATE `tblkendaraan` SET `id_kendaraan`='?',`no_polisi`='?',`merk`='?',`warna`='?',`tahun`='?',`tarif_kendaraan`='?',`keterangan`='?',`status_kendaraan`='?',`foto`='?',`harga`='?',`denda`='?' WHERE id_kendaraan=$id_kendaraan";
    $query=mysql_query($koneksi,"SELECT * FROM tblkendaraan WHERE id_kendaraan=$id_kendaraan");

    //apakah query update telah sudah berhasil
    if ($query) {
                //jika telah sudah berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
                header("Location: index.php?status=Data ini telah sudah diubah!");
    }else {
        //jika gagal maka akan ditampilkan 
        die("Maaf, data ini gagal diubah!");
    }
}
//mengembalikan ke halaman semula index yang sebelum nya
header("Location: index.php");
?>