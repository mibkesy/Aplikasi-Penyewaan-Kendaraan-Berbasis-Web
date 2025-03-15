<?php
include("koneksi.php");
session_start();

//list user yang sudah valid
//selain user tidak bisa login
$list_user =  [
    [
        'username' => 'admin',
        'password' => 'admin'
    ],
    [
        'username' => 'pegawai',
        'password' => 'pegawai'
    ]
];

//mendapatkan data dari form
$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

//mencocokan data user dengan list user yang sudah valid
//seperti contoh misal nya adalah looping saja

$not_found = false;

foreach ($list_user as $key => $registered_user) {
    
    //login berhasil
    if ($registered_user['username'] == $user['username']) {
        if ($registered_user['password'] == $user['password']) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['username'];
            echo "<script>alert('Congratulation, you're have been already sign in!')</script>";
            header("Location: index.php");
            break;
        }else {
            echo "<script>alert('Sorry, your email, password, password confirmation, and email is wrong! Please enter email, password, password confirmation, and email again')</script>";
        }
    }else {
        echo "<script>alert('Sorry, your email, password, password confirmation, and email is wrong! Please enter email, password, password confirmation, and email again')</script>";
    }
}
if ($not_found == true) {
    header("Location: register.php");
}
?>
