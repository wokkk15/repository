<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM login where username='$username' and password='$password'");

// cek apakah ada kesalahan pada query
if(!$login){
    die("Query gagal dijalankan: ". mysqli_error($koneksi));
}

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['level']=="admin"){

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        // alihkan ke halaman dashboard admin
        header("location:adminRepo/index.php");

    // cek jika user login sebagai pegawai
    }else if($data['level']=="user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";

        // alihkan ke halaman dashboard pegawai
        header("location: penulis.php");
    }else{

        // alihkan ke halaman login kembali
        header("location:login.html");
    }	
}else{
	header("location:login.html");
}
?>