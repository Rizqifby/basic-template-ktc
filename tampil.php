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
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }
    ?>
    <br><br>
    <h4>Selamat Datang, <?php echo $_SESSION['username']; ?>! anda telah berhasil login</h4>
    <br><br>
    <a href="logout.php">Logout</a>
    <br>
    <a href="tambah.php">Tambah Data Siswa</a>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nipd</th>
            <th>Kelas</th>
            <th>Program Kehalian</th>
            <th>Opsi</th>
        </tr>
        <?php

        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tb_belajar");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nipd']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>