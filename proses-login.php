<?php
include("koenski.php");
error_reporting(0);
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$user = mysql_query("SELECT * FROM tbluser WHERE username='$username' AND password='$password'AND email='$email' AND pass_conf='$pass_conf' AND id_user='$id_user'");
$check - mysql_num_rows($sql);

if ($check > 0) 
{
    session_start();
    $row = mysql_fetch_array($user);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location: index.php");
}else {

    echo "<script>alert('Sorry, your username and password is already wrong! Please enter username and password again!')</script>";

    header("location: login.php");
}
?>
