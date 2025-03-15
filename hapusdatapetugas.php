<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_petugas'])) {
    //mengambil data id yang dikirimkan dari query string
    $id_petugas = $_GET['id_petugas'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_petugas=$_GET['id_petugas'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblpetugas` WHERE id_petugas";
mysqli_query($koneksi,"DELETE FROM tblpetugas WHERE id_petugas");

//periksa, apakah query delete berhasil atau belum
if ($query()) {
    //jika berhasil maka akan dialihkan menuju ke halaman datapetugaskendaraan.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus!");
}else {
    //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
    header("Location: index.php?status=Maaf, data gagal dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>