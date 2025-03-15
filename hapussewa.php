<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_sewa'])) {
    //melakukan proses pengambilan data id yang dikirimkan dari query string
    $id_sewa = $_GET['id_sewa'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_sewa=$_GET['id_sewa'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblsewa` WHERE id_sewa";
mysqli_query($koneksi,"DELETE FROM tblsewa WHERE id_sewa='$id_sewa'");
//periksa, apakah query delete sewa itu berhasil atau belum
if ($query()) {
    //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil ditambahkan!");
}else {
    //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
    die("Maaf, data ini gagal ditambahkan!");
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>