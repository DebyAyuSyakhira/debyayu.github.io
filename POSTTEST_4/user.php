<?php
    require 'koneksi.php';

    $result = mysqli_query($conn, "SELECT * FROM user");

    $user = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $user[] = $row;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <input type="checkbox" id="check">
        <div class="side-bar">
            <ul>
                <li><a href="utama.html">Home</a></li>
                <li><a href="product.html">Product</a></li>
                <li><a href="aboutme.html">Aboutme</a></li>
                <li><a href="http://localhost/POSTTEST_4/user.php">User</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <nav>
            <a href="#" class="logo">TOKO BUAH DHARMASRAYA</a>
            <ul>
                <li><a href="utama.html">Home</a></li>
                <li><a href="product.html">Product</a></li>
                <li><a href="aboutme.html">Aboutme</a></li>
                <li><a href="http://localhost/POSTTEST_4/user.php">User</a></li>
                <li><a href="logout.php">Logout</a></li>
                <a href="#" class="tampilan">
                    <button class="tombol-terang" onclick="ubahwarna()">Lightmode</button>
                    <button class="tombol-gelap" onclick="ubahwarna()">Darkmode</button>
                </a>
            </ul>
            <!-- menu mobile -->
            <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
            <script src="javascript.js"></script>
        </nav>
        <div class="formuser">
            <h1>Data Pengguna</h1>
            <table border=1px>
                <tr>
                        <th width="px">NO</th>
                        <th width="200px">Email</th>
                        <th width="200px">Username</th>
                        <th width="200px">Password</th>
                        <th width="100px">Aksi</th>
                </tr>
                <?php $i = 1; foreach ($user as $users):?>
                <tr>
                    <td><?php echo $i ;?></td>
                    <td><?php echo $users["email"]; ?></td>
                    <td><?php echo $users["username"] ;?></td>
                    <td><?php echo $users["password"] ;?></td>
                    <td><a href="edit.php?id=<?php echo $users["id"]; ?>">Edit</a> 
                    | <a href="hapus.php?id=<?php echo $users["id"]; ?>" onclick = "return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></td>
                </tr>
                <?php $i++; endforeach;?>
            </table>
        </div>
        <footer>
            <p>Terimakasih Telah Mengunjungi Toko Kami</p>
            <p>Jangan lupa untuk Berbelanja lagi di Toko Dharmasraya
            <br>Contact US</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <img alt="kaki-logo" class="kaki-logo" src="img/logo.png"> 
        </footer>
</body>
</html>