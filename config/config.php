<?php

//koneksi ke database mysql,
$conn = mysqli_connect("localhost", "root", "root", "mastering_php");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()) {
    echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}