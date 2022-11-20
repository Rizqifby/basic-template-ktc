<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi, "UPDATE tb_belajar SET nama='$nama', nipd='$nipd', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'");

header("location:tampil.php");
