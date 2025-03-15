<?php
include("koneksi.php");
//periksa, apakah tombol tambah itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_booking) || isset($kode_booking) || isset($nama) || isset($alamat) || isset($no_telp) || isset($lama_sewa) || isset($tanggal) || isset($tgl_input) || isset($total_harga) || isset($konfirmasi_pembayaran)) {
$id_booking = $_POST['id_booking'];
$kode_booking = $_POST['kode_booking'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$lama_sewa = $_POST['lama_sewa'];
$tanggal = $_POST['tanggal'];
$tgl_input = $_POST['tgl_input'];
$total_harga = $_POST['total_harga'];
$konfirmasi_pembayaran = $_POST['konfirmasi_pembayaran'];
}

        //melakukan proses pembuatan query insert booking
        $sql="INSERT INTO `tblbooking`(`id_booking`, `kode_booking`, `ktp`, `nama`, `alamat`, `no_telp`, `tanggal`, `lama_sewa`, `total_harga`, `konfirmasi_pembayaran`, `tgl_input`) VALUES ('?','?','?','?','?','?','?','?','?','?','?')";
        $tblbooking = mysqli_query($koneksi,"SELECT * FROM tblbooking WHERE id_booking");

        //periksa, apakah query insert berhasil atau  belum
        if ($query) {
            //jika berhasil, maka akan dialihkan menuju ke halamain index.php dengan status=sukses
            header("Location: index.php?statsu=Data, ini berhasil ditambahkan!");
        }else {
            //jika gagal, maka akan dialihkan menuju ke halaman index.php dengan status=gagal
            header("Location: index.php?status=Maaf, data ini gagal ditambahkan!");
        }
    }
    //mengembalikan ke halaman semula index yang sebelum nya
    header("Location: index.php");
?>