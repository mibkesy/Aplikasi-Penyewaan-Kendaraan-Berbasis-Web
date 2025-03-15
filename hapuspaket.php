<?php
//koneksi ke database
include("koneksi.php");

if (isset($_GET['id_paket'])) {
    //mengambil data id dari query string
    $id_paket = $_GET['id_paket'];
}
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_paket = $_GET['id_paket'];
//melakukan penghapusan data dari database
$sql="SELECT * FROM tblpaketrental WHERE id_paket='$id_paket'";
mysqli_query($koneksi,"DELETE FROM tblpaketrental WHERE id_paket='$id_paket'");

//apakah query hapus berhasil atau belum
if ($query()) {
    //jika berhasil maka akan dialihkan menuju ke halaman datapaket.php dengan status=berhasil
    header("Location: index.php?status=Data, ini berhasil dihapus! ");
}else {
    //jika gagal maka akan dialihkan menuju ke halaman datapaket.php dengan status=gagal
    header("Location: index.php?status=Maaf, data ini gagal dihapus!");
}
//melakukan pengalihan redirect menuju ke halaman index.php
header("Location: index.php");
?>