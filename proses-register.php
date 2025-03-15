<?php
include("koenski.php");

$username = $_POST['username'];
$password = $_POST['password'];
$pass_conf = $_POST['password'];
$email = $_POST['email'];

$user = mysql_query("SELECT * FROM tbluser WHERE username='$username' AND password='$password' AND pass_conf='$pass_conf' AND email='$email' AND id_user='$id_user'");
$check - mysql_num_rows($sql);

if ($check > 0) 
{
    session_start();
    $row = mysql_fetch_array($user);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['pass_conf'] = $pass_conf;
    $_SESSION['email'] = $email;

    header("location: index.php");
}else {

    echo "<script>alert('Sorry, your username, password, password confirmation, and email is already wrong! Please enter username, password, password confirmation, and email again')</script>";

    header("location: register.php");
}
?>