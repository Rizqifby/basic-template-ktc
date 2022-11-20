<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi,"INSERT INTO tb_belajar VALUES('','$nama','$nipd','$kelas','$jurusan')");

header("location:tampil.php");
