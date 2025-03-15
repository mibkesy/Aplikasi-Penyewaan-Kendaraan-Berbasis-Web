<?php
include("koneksi.php");
//periksa, apakah tombol sudah di klik atau belum
if (isset($_POST['ubah'])) {
    //memasukkan data ke array
if (isset($id_pelanggan) || isset($nama) || isset($alamat) || isset($no_telp) || isset($tgl_daftar) || isset($jumlah_pinjaman)) {

    $id_pelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $alamat = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $tgl_daftar = $_POST['tgl-daftar'];
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];   
}

        //membuat query update pelanggan
        $sql="UPDATE `tblpelanggan` SET `id_pelanggan`='?',`nama`='?',`alamat`='?',`no_telp`='?',`tgl_daftar`='?',`jumlah_pinjaman`='?' WHERE id_pelanggan";
        $tblpelanggan = mysqli_query($koneksi,"SELECT * FROM tblpelanggan WHERE id_pelanggan");

        //periksa, apakah query update berhasil diubah atau belum
        if ($query()) {
            //jika berhasil maka akan dialihkan menuju ke halaman index.php dengan status=sukuses
            header("Location: index.php?status=Data, ini berhasil diubah!");
        }else {
            //jika gagal maka akan dialihkan menuj ke halaman index.php dengan status=gagal
            die("Maaf, data ini gagal diubah!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>