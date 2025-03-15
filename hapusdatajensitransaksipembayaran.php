<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_jenis_bayar'])) {
    //melakukan proses pengambilan data id yang dikirimkan dari query string
    $id_jenis_bayar = $_GET['id_jenis_bayar'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_jenis_bayar=$_GET['id_jenis_bayar'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tbl_jenis_bayar` WHERE id_jenis_bayar";
mysqli_query($koneksi,"DELETE FROM tbl_jenis_bayar WHERE id_jenis_bayar='$id_jenis_bayar'");
//periksa, apakah query hapus itu sudah berhasil atau belum
if ($query()) {
    //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus!");
}else {
    //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
    die("Maaf, data ini gagal dihapus!")
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>