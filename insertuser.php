<?php 
    include 'koneksi.php';
    
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $nama = $_POST['nama'];
    $role = $_POST['role'];

    $sql = "INSERT INTO user VALUES('$id','$username','$password','$nama','$role')";

    mysqli_query($konek,$sql);

    $konek->close();

    header("Location: formuser.php");
?>