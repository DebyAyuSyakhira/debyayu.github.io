<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_toko");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>