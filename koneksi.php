<?php
    //this is will be avoid mysql_connect() deprecation error
    error_reporting(~E_DEPRECATED & ~E_NOTICE);
    //but I will keep strongly for suggest you to use PDO or MySQLi

    $DBHOST="localhost";
    $DBUSER="root";
    $DBPASS="";
    $DBNAME="sewakendaraan";

    $koneksi = mysqli_connect("localhost","root","", "sewakendaraan");
//$koneksi = mysql_select_db($DBNAME);
    if (!$koneksi) {
        die("Sorry, you're connection is failed" . mysqli_error());
    }
?>
