<?php 
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['tambah'])) {

//memasukkan data ke array
if (isset($id_perjalanan) || isset($asal) || isset($tujuan) || isset($jarak)) {
    $id_perjalanan = $_POST['id_perjalanan'];
    $asal = $_POST['id_kendaraan'];
    $tujuan = $_POST['tujuan'];
    $jarak = $_POST['jarak'];    
}
        //membuat query insert tambah
        $sql="INSERT INTO `tblperjalanan`(`id_perjalanan`, `asal`, `tujuan`, `jarak`) VALUES ('?','?','?','?')";
        $tblperjalanan=mysqli_query($koneksi,"SELECT * FROM tblperjalanan WHERE id_perjalanan='$id_perjalanan'");

        //apakah query simpan berhasil atau belum
        if ($query) {
            //jika berhasil maka akan dialihkan menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>