<?php
    
    $conn = mysqli_connect("localhost", "root", "", "login");

    if(!$conn)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
// $server = "localhost";
// $user = "root";
// $pass = "root";
// $database = "login";

// $conn = mysqli_connect($server, $user, $pass, $database);

// if (!$conn) {
//     die("<script>alert('Connection Failed.')</script>");
// }

?>
