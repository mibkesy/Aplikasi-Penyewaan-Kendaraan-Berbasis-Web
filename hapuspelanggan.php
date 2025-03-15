<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_pelanggan'])) {
    //mengambil data id yang dikirimkan dari query string
    $id_pelanggan = $_GET['id_pelanggan'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_pelanggan=$_GET['id_pelanggan'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblpelanggan` WHERE id_pelanggan"
mysqli_query($koneksi,"DELETE FROM tblpelanggan WHERE id_pelanggan='$id_pelanggan'");

//periksa, apakah query delete behasil atau belum
if ($query()) {
    //jika berhasil maka akan dialihkan menuju ke halaman datapelanggan.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus!");
}else {
    //jika gagal makan akan dialihkan menuju ke halaman datapelanggan.php dengan status=gagal
    die("Maaf, data ini gagal dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>