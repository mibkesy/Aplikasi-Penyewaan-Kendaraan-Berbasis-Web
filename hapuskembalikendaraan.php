<?php include ("koneksi.php"); 
if (isset($_GET['id_kembali'])) {
    //melakukan proses pengambilan data id yang dikirimkan dari query string
    $id_kembali = $_GET['id_kembali'];
}
//melakukan proses penangkapan data id yang akan siap dikirimkan dari URL
$id_kembali = $_GET['id_kembali'];
//melakukan proses penghapusan data yang ada dari database
$sql="DELETE FROM `tblkembali` WHERE id_kembali"
mysqli_query($koneksi, "DELETE FROM tblkembali WHERE id_kembali='$id_kembali'");
//periksa, apakah query hapus itu sudah berhasil atau belum
if ($query()) {
    //jika berhasil, maka akan dialihkan menuju ke halaman index.php dengan status=sukses
    header("Location: index.php?status=Data, ini berhasil dihapus!");
}else {
    //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
    die("Maaf, data ini gagal dihapus!");
}
//melakukan proses pengalihan redirect menuju ke halaman index kembali
header("Location: index.php");
?>