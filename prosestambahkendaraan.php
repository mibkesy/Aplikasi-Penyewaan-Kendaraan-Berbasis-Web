<?php
include("koneksi.php");
//periksa, apakah tombol tambah itu sudah di klik atau belum
if (isset($_POST['tambah'])) {
//memasukkan data ke array
if (isset($id_kendaraan) || isset($merk) || isset($foto) || isset($no_polisi) || isset($warna) || isset($tahun) || isset($keterangan) || isset($status_kendaraan) || isset($tarif_kendaraan) || isset($harga) || isset($denda)) {
$id_kendaraan = $_POST['id_kendaraan'];
$merk = $_POST['merk'];
$foto = $_POST['foto'];
$no_polisi = $_POST['no_polisi'];
$warna = $_POST['warna'];
$tahun = $_POST['tahun'];
$keterangan = $_POST['keterangan'];
$status_kendaraan = $_POST['status_kendaraan'];
$tarif_kendaraan = $_POST['tarif_kendaraan'];
$harga = $_POST['harga'];
$denda = $_POST['denda'];
}

        //membuat query tambah insert
        $sql="INSERT INTO `tblkendaraan`(`id_kendaraan`, `no_polisi`, `merk`, `warna`, `tahun`, `tarif_kendaraan`, `keterangan`, `status_kendaraan`, `foto`, `harga`, `denda`) VALUES ('?','[?','?','?','?','?','?','?','?','?','?')";
        $tblkendaraan=mysqli_query($koneksi,"SELECT * FROM tblkendaraan WHERE id_kendaraan=$id_kendaraan");

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