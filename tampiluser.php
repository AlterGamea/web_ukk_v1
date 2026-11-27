<?php
    include "koneksi.php";

    $sql = "SELECT * FROM user";
    $result = mysqli_query($konek,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
    <h2>Daftar User</h2>
<div class="container">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Role</th>
        </tr>
        <?php
            while ($data = mysqli_fetch_assoc($result)) {;
        ?>
        <tr>
            <td><?=$data['id']?></td>
            <td><?=$data['username']?></td>
            <td><?=$data['password']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['role']?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>