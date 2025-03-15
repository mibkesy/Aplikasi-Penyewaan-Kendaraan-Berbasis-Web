<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_merk'])) {
    //mengambil data id dari query string
    $id_kendaraan = $_GET['id_merk'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_merk=$_GET['id_merk'];
//membuat query hapus
$sql="DELETE FROM tblmerk WHERE id_merk='$id_merk'";
//melakukan penghapusan data dari database
mysqli_query($koneksi,"DELETE FROM tblmerk WHERE id_merk='$id_merk'");

//apakah query hapsu berhasil atau belum
if ($query()) {
    //jika berhasil maka akan dialihkan menuju ke halaman datamerkkendaraan dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus! ");
}else {
    //jika gagal maka akan dialihkan menuju ke halaman datamerkkendaraan dengan status=gagal
    header("Location: index.php?status=Maaf, data ini gagal dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>
