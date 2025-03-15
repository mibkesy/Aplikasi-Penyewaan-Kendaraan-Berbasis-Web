<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['tambah'])) {
    //memasukkan data ke array
if (isset($id_pelanggan) || isset($nama) || isset($alamat) || isset($no_telp) || isset($tgl_daftar) || isset($jumlah_pinjaman)) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $alamat = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $tgl_daftar = $_POST['tgl-daftar'];
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];           
}

        //membuat query insert pelanggan
        $sql="INSERT INTO `tblpelanggan`(`id_pelanggan`, `nama`, `alamat`, `no_telp`, `tgl_daftar`, `jumlah_pinjaman`) VALUES ('?','?','?','?','?','?')";
        $tblpelanggan = mysql_query($koneksi,"SELECT * FROM tblpeanggan WHERE id_pelanggan");

        //periksa, apakah query tambah berhasil atau belum
        if ($query()) {
            //jika berhasil maka akan dialihkan menuju ke halaman index.php dengan status=sukuses
            header("Location: index.php?status=Data, ini berhasil ditambah!");
        }else {
            //jika gagal maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal ditambah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>