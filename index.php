<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>CRUD PHP - SMKN 4 KENDAL</h2>
    <br>
    <?php

    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Username atau Password anda salah!";
        } elseif ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
        } elseif ($_GET['pesan'] == "belum_login") {
            echo "Masukkan Username dan Password anda";
        }
    }
    ?>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>

</html>