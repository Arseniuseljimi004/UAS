<?php
session_start();

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");

if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row['password'])){

        $_SESSION['login'] = true;
        $_SESSION['user'] = $row;

        if ($username == 'admin') {
            echo "<script>
            alert('Login Berhasil');
            window.location.href='../admin/laporan.php'; 
        </script>";
        } else {

        echo "<script>
            alert('Login Berhasil');
            window.location.href='../masuk.php'; 
        </script>";
    }

    } else {
        echo "<script>
            alert('Login Gagal! Password Salah');
            window.location.href='../index.php'; 
        </script>";
    }
} else {
    echo "<script>
        alert('Login Gagal! Username Tidak Terdaftar');
        window.location.href='../index.php';
    </script>";
}

?>