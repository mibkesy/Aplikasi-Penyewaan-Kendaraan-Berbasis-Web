<?php
include("koneksi.php");
if (isset($_GET['id_denda'])) {
    //melakukan proses pengambilan data id yang dikirimkan dari query string
    $id_denda = $_GET['id_denda'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_denda=$_GET['id_denda'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tbldenda` WHERE id_denda";
mysqli_query($koneksi,"DELETE FROM tbldenda WHERE id_denda='$id_denda'");

//periksa, apakah query hapus itu berhasil atau belum
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