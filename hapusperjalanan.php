<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_perjalanan'])) {
    //mengambil data id dari query string
    $id_perjalanan = $_GET['id_perjalanan'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_perjalanan=$_GET['id_perjalanan'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblperjalanan` WHERE id_perjalanan='$id_perjalanan'";
mysqli_query($koneksi,"DELETE FROM tblperjalanan WHERE id_perjalanan='$id_perjalanan'");

//apakah query berhasil atau belum
if ($query()) {
    //jika berhasil maka akan dialihkan menuju ke halaman dataperjalanan.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus!");
}else {
    //jika gagal maka akan dialihkan menuju ke halamamn dataperjalanan.php dengan status=gagal
    header("Location: index.php?status=Maaf, data ini gagal dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>