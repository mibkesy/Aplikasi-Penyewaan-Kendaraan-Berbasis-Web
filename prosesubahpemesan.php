<?php
include("koneksi.php");
//periksa, apakah tombol data sudah di klik atau belum
if (isset($_POST['ubah'])) {
//memasukkan data ke array
if (isset($id_pemesan) || isset($nama) || isset($jenis_kelamin) || isset($alamat) || isset($foto)) {

    $id_pemesan = $_POST['id_pemesan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];    
}

        //membuat query ubah update
        $sql="UPDATE `tblpemesan` SET `id_pemesan`='?',`nama`='?',`alamat`='?',`jenis_kelamin`='?',`foto`='?' WHERE id_pemesan=$id_pemesan";
        $tblpemesan=mysqli_query($koneksi,"SELECT * FROM tblpemesan WHERE id_pemesan=$id_pemesan");

        //apakah query ubah telah sudah berhasil
        if ($query()) {
                    //jika berhasil maka akan dialihakn menuju ke halaman index.php dengan status=sukses
                    header("Location: index.php?status=Data, ini telah sudah berhasil diubah!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>