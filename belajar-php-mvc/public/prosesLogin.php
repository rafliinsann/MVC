<?php 

    session_start();
    // require "connect.php";

    $connect = mysqli_connect('localhost', 'root', '', 'axioocare'); 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM akun WHERE username='$username' and password='$password'";

    $data = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $hasil = mysqli_fetch_array($data);
        $_SESSION['nama'] = $hasil['nama'];
        $_SESSION['status'] = "login";
        header('location:/index');
    }else {
        header('location:/login');
    }
