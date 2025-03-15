<?php
//koneksi ke database
include("koneksi.php");

if (isset($_GET['id_kendaraan'])) {
    //mengambil data id dari query string
    $id_kendaraan = $_GET['id_kendaraan'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
if (isset($id_kendaraan) || isset($merk) || isset($foto) || isset($no_polisi) || isset($warna) || isset($tahun) || isset($keterangan) || isset($status_kendaraan) || isset($tarif_kendaraan) || isset($harga) || isset($denda)) {
$id_kendaraan=$_GET['id_kendaraan'];
}
//membuat query hapus
$sql="DELETE FROM `tblkendaraan` WHERE id_kendaraan";
mysqli_query($koneksi,"DELETE FROM tblkendaraan WHERE id_kendaraan");

//apakah query hapus telah sudah berhasil 
if ($query) {
    //jika berhasil maka akan dialihkan menuju ke halaman daftarkendaraan.php dengan status=sukuses
    header("Location: index.php?status=Data ini telah sudah berhasil dihapus!");
}else {
    //jika gagal maka akan dialihkan menuju ke halaman daftarkendaraan.php dengan status=gagal
    header("Location: index.php?status=Maaf, data ini GAGAL dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>