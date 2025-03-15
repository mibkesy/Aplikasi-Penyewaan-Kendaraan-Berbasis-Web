<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_pemesan) || isset($nama) || isset($jenis_kelamin) || isset($alamat) || isset($foto)) {
    $id_pemesan = $_POST['id_pemesan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];    
}

        //membuat query tambah insert
        $sql="INSERT INTO `tblpemesan`(`id_pemesan`, `nama`, `alamat`, `jenis_kelamin`, `foto`) VALUES ('?','?','?','?','?')";
        $tblpemesan=mysqli_query($koneksi,"SELECT * FROM tblpemesan WHERE id_pemesan=$id_pemesan");

        //apakah query simpan telah sudah berhasil
        if ($query()) {
            //jika berhasil maka akan dialihakn menuju ke halaman index.php dengan status=sukses
            header("Location: index.php?status=Data, ini telah sudah berhasil ditambahkan!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>