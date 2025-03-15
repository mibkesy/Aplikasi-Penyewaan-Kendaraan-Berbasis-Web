<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['tambah'])) {

//memasukkan data ke array
if (isset($id_pesanan) || isset($harga) || isset($tgl_pinjam) || isset($tgl_kembali)) {
    $id_pesanan = $_POST['id_pesanan'];
    $harga = $_POST['harga'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $total = count($nama);    
}

        //membuat query tambah insert
        $sql="INSERT INTO `tblpesanan`(`id_pesanan`, `harga`, `tgl_pinjam`, `tgl_kembali`) VALUES ('?','?','?','?')";
        $tblpesanan=mysqli_query($koneksi,"SELECT * FROM tblpesanan WHERE id_pesanan=$id_pesanan");

        //apakah query simpan telah berhasil atau belum
        if ($query()) {
                    //jika berhasil maka akan dialihkan menuju ke halaman index.php dengan status=sukses
                    header("Location: index.php?status=Data, ini telah sudah berhasil ditambahkan!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini GAGAL ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>
