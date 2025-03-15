<?php
//koneksi ke database
include("koneksi.php");

if (isset($_GET['id_user'])) {
    //mengambil data id dari query string
    $id_user = $_GET['id_user'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_user=$_GET['id_user'];
//membuat query hapus
$sql="DELETE FROM `tbluser` WHERE id_user";
mysqli_query($koneksi,"DELETE FROM tbluser WHERE id_user");

//apakah query hapus telah sudah berhasil 
if ($query()) {
    //jika berhasil maka akan dialihkan menuju ke halaman daftarkendaraan.php dengan status=sukuses
    header("Location: index.php.php?status=Data ini telah sudah berhasil dihapus!");
}else {
    //jika gagal maka akan dialihkan menuju ke halaman daftarkendaraan.php dengan status=gagal
    header("Location: index.php?status=Maaf, data ini GAGAL dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>