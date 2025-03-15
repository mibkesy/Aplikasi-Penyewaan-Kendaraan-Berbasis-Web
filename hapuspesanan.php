<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_pesanan'])) {
    //mengambil data id dari query string
    $id_pesanan = $_GET['id_pesanan'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_pesanan=$_GET['id_pesanan'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblpesanan` WHERE id_pesanan='$id_pesanan'";
mysqli_query($koneksi,"DELETE FROM tblpesanan WHERE id_pesanan='$id_pesanan'");

//apakah query hapus berhasil atau belum
if ($query()) {
    //jika berhasil maka akan dialihkan menuju ke halaman datapesanankendaraan.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus!");
}else {
    //jika gagal maka akan dialihkan menuju ke halaman datapesanankendaraan.php dengan status=gagal
    header("Location: index.php?status=Maaf, data ini gagal dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>