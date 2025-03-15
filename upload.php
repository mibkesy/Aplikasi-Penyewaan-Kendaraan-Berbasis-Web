<?php
//calling the database connection
include("koneksi.php");

//taking data which will send of upload 
$nama_file = $_FILES['gambar']['name'];
//taking file size into bytes
$ukuran_file = $_FILES['gambar']['name'];
//taking image/type is only JPG/JPEG/PNG
$tipe_file = $_FILES['gambar']['type'];
//taking URL path folder
$tmp_file = $_FILES['gambar']['tmp_name'];

//Set path folder place for image storage
$path = "images/".$nama_file;

//doing checking, does the file type upload is only JPG/JPEG/PNG
if ($tipe_file == "image/jpg" || $tipe_file == "image/png") {

    //if file type upload JPG/JPEG/PNG, doing action
    //doing checking, does the file size upload more than less from 8MB
    if ($ukuran_file <= 8000000) {
        //if file size less more than 8MB, so doing
        //upload process
        if (move_uploaded_file($tmp_file, $path)) {
            //doing checking, does the image file upload is have been successfull or not
            //if  the image file upload is have been already, so  please do
            //doing save proceed to database
            $query="INSERT INTO `tblkendaraan`(`id_kendaraan`, `no_polisi`, `merk`, `warna`, `tahun`, `tarif_kendaraan`, `keterangan`, `status_kendaraan`, `foto`, `harga`, `denda`) VALUES ('$id_kendaraan','$no_polisi','$merk','$warna','$tahun','$tarif_kendaraan','$keterangan','$status_kendaraan','$foto','$harga','$denda')";
            //execute and running the query from $query
            $sql = mysqli_query($koneksi, $query);

            //doing checking, if save process to database have been already successfull or not
            if ($sql) {
                //if succesfull, so please next do
                header("Location: index.php"); //  this will redirect to index.php page
            }else {
                //if failed, so please do
                echo "Sorry, this have been happen error when you're trying for saving data to database!";
                echo "<br><a href='index.php'></a></br>";
            }
        }else {
            //if image file upload failed, so please do this
            echo "Sorry, this image file have been failed for do upload! ";
            echo "<br><a href='index.php'></a></br>";
        }else {
            //if file size is more than  from 8MB, so please do this
            echo "Sorry, this image file size upload is more than from 8MB!";
            echo "<br><a href='index.php'></a></br>";
        }else {
            //if file type upload is not extension JPG/JPEG/PNG, so please do this
            echo "Sorry, this image file type extension is should be JPG/JPEG/PNG!";
            echo "<br><a href='index.php'></a></br>";
        }
    }
}
?>