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
    <a href="tampil.php">KEMBALI</a>
    <br><br>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM tb_belajar WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nipd</td>
                    <td>
                        <input type="number" name="nipd" value="<?php echo $d['nipd']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>
                        <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>