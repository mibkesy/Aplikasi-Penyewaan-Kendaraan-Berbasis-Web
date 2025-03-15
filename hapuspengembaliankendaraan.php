<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_pengembalian'])) {
    //mengambil data id yang dikirimkan dari dari query string
    $id_pengembalian = $_GET['id_pengembalian'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_pengembalian=$_GET['id_pengembalian'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblpengembalian` WHERE di_pengembalian";
mysqli_query($koneksi,"DELETE FROM tblpengembalian WHERE id_pengembalian='$id_pengembalian'");

//periksa, apakah query delete itu sudah berhasil atau belum
if ($query()) {
    //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus!");
}else {
    //jika gagal, maka akan dialihkan menuju ke halamaan index.php dengan status=gagal
    die("Maaf, data ini gagal dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>