<?php
//koneksi ke database
include("koneksi.php");
if (iseet($_GET['id_rental'])) {
    //melakukan proses pengambilan data id yang dikirimkan dari query string
    $id_rental = $_GET['id_rental'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_rental=$_GET['id_rental'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblrental` WHERE id_rental";
mysqli_query($koneksi,"DELETE FROM tblrental WHERE id_rental='$id_rental'");
//periksa, apakah query delete rental itu sudah berhasil atau belum
if ($query()) {
    //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus!");
}else {
    //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
    die("Maaf, data ini gagal dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>