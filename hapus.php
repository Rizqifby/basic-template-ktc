<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM tb_belajar WHERE id='$id'");

header("location:tampil.php");
