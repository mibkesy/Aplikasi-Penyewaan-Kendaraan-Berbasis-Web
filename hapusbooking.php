<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GE['id_booking'])) {
    //melakukan proses pengambilan data id yang dikirimkan dari query string
    $id_booking = $_GET['id_booking'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_booking=$_GET['id_booking'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblbooking` WHERE id_booking";
mysqli_query($koneksi,"DELETE FROM tblbooking WHERE id_booking='$id_booking'");

//periksa, apakah query delete booking itu berhasil atau belum
if ($query()) {
    //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
    header("Location: index.ph?status=Data, ini berhasil dihapus!";)
}else {
    //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
    header("Location: index.php?status=Maaf, data ini gagal dihapus!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>