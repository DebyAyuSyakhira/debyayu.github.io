<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO BUAH DHARMASRAYA</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>
<body>
    <div class="regis">
        <!--text-->
        <div class="regis-text ">
            <p>Data Pengguna</p>
        </div>
        <br>
        <div class="tabel">
            <table border="2">
                <tr>
                    <th>NO</th>
                    <th width="200px">ID</th>
                    <th width="200px">NAMA</th>
                    <th width="200px">TANGGAL LAHIR</th>
                    <th width="200px">JENIS KELAMIN</th>
                    <th width="200px">ALAMAT</th>
                    <th width="200px">KODE POS</th>
                    <th width="200px">NO.TELPON</th>
                    <th width="200px">EMAIL</th>
                    <th width="200px">JENIS EKSPEDISI</th>
                    <th width="200px">AKSI</th>
                </tr>
                <?php
                    include "koneksi.php";
                    $no = 1;
                    $NAMA = "";
                    if (isset($_GET['s']))
                    {
                        $NAMA = $_GET['s'];
                        $tampil = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE Nama LIKE '%$NAMA'");
                    }else
                    $tampil = mysqli_query($koneksi, "SELECT * FROM pengguna");
                    while ($data = mysqli_fetch_array($tampil))
                    {

                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['ID']?></td>
                    <td><?php echo $data ['Nama']?></td>
                    <td><?php echo $data ['Tanggal_Lahir']?></td>
                    <td><?php echo $data ['Jenis_Kelamin']?></td>
                    <td><?php echo $data ['Alamat']?></td>
                    <td><?php echo $data ['Kode_Pos']?></td>
                    <td><?php echo $data ['No_Telpon']?></td>
                    <td><?php echo $data ['Email']?></td>
                    <td><?php echo $data ['Jenis_Ekspedisi']?></td>
                    <td>
                    <center>
                        <button type="Edit" class="btn">Edit</button>
                        <button type="Hapus" class="btn" name="Hapus">Hapus</button>  
                    </center>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br>
            <a href="index.html"><button class="btn">Kembali</button></a>
        </div>
    </div>    
</body>
</html>