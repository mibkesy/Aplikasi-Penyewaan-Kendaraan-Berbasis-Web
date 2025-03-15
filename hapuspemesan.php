<?php
//koneksi ke database
include("koneksi.php");
if (isset($_GET['id_pemesan'])) {
    //mengambil data id dari query string
    $id_pemesan = $_GET['id_pemesan'];
//melakukan penangkapan data id yang akan dikirimkan dari url
$id_pemesan=$_GET['id_pemesan'];
//melakukan penghapusan data dari database
$sql="DELETE FROM `tblpemesan` WHERE id_pemesan='$id_pemesan'";
mysqli_query($koneksi,"DELETE FROM tblpemesan WHERE id_pemesan='$id_pemesan'");

//apakah query hapus telah sudah berhasil 
    if ($query()) {
        //jika berhasil maka akan dialihkan menuju ke halaman datapemesankendaraan.php dengan status=berhasil
        header("Location: index.php?status=Data ini telah sudah berhasil dihapus!");
    }else {
        //jika gagal maka akan dialihkan menuju ke halaman datapemesanankendaraan.php dengan status=gagal
        header("Location: index.php?status=Maaf, data ini GAGAL dihapus!");
    }
}
//melakukan pengalihan redirect ke halaman index kembali
header("Location: index.php");
?>