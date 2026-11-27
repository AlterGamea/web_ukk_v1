<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="form">
        <h2>Input data siswa</h2>
        <form action="insertuser.php" method="POST">
            <label>ID</label>
            <input type="text" name="id" placeholder="Ketik ID">
            <label>Username</label>
            <input type="text" name="username" placeholder="ketik username">
            <label>Password</label>
            <input type="text" name="pass" placeholder="ketik password">
            <label>Nama siswa</label>
            <input type="text" name="nama" placeholder="ketik nama">
            <label>Role</label>
            <select name="role">
                <option value="Admin">Admin</option>
                <option value="Siswa">Siswa</option>
            </select><br><br>
            <button type="submit">Simpan</button>
            <button type="reset">reset</button>
        </form>
    </div>
</body>
</html>