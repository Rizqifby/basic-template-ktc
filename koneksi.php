<?php 

$koneksi = mysqli_connect("localhost","root","","belajar_db");
if (mysqli_connect_error()) {
    echo "Koneksi Database Anda Gagal :" . mysqli_connect_error();
}
