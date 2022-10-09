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
    <div class="form">
        <form action="" method="POST" class="form-item">
            <p class="regis-text" style="font-size: 2rem; font-weight: 800;">Registrasi</p>
            <div class="form-regis">
                <label for="ID"> ID PENGGUNA </label>
                <input type="number" name="ID" class="kolom" placeholder="Masukkan ID">
            </div>

            <div class="form-regis">
                <label for="Nama"> NAMA PENGGUNA </label>
                <input type="text" name="Nama" class="kolom" placeholder="Masukkan NAMA">
            </div>

            <div class="form-regis">
                <label for="Tanggal_Lahir"> TANGGAL LAHIR </label>
                <input type="date" name="Tanggal_Lahir" class="kolom" placeholder="Masukkan TANGGAL LAHIR">
            </div>

            <div class="form-regis">
                <label for="Jenis_Kelamin"> JENIS KELAMIN </label>
                <br>
                <label><input type="radio" name="Jenis_Kelamin" value="L"> LAKI - LAKI</label>
                <label><input type="radio" name="Jenis_Kelamin" value="P"> PEREMPUAN</label>    
            </div>

            <div class="form-regis">
                <label for="Alamat"> ALAMAT </label>
                <input type="text" name="Alamat" class="kolom" placeholder="Masukkan ALAMAT">
            </div>

            <div class="form-regis">
                <label for="Kode_Pos"> KODE POS </label>
                <input type="text" name="Kode_Pos" class="kolom" placeholder="Masukkan KODE POS">
            </div>

            <div class="form-regis">
                <label for="No_Telpon"> NO.TELPON </label>
                <input type="number" name="No_Telpon" class="kolom" placeholder="Masukkan NO.TELPON">
            </div>

            <div class="form-regis">
                <label for="Email"> EMAIL </label>
                <input type="text" name="Email" class="kolom" placeholder="Masukkan EMAIL">
            </div>

            <div class="form-regis">
                <label for="Jenis_Ekspedisi"> JENIS EKSPEDISI </label>
                <br>
                    <label><input type="checkbox" name="Jenis_Ekspedisi" value="JNE"> JNE</label>
                    <label><input type="checkbox" name="Jenis_Ekspedisi" value="J&T"> J&T</label>    
                    <label><input type="checkbox" name="Jenis_Ekspedisi" value="TIKI"> TIKI</label>   
                    <label><input type="checkbox" name="Jenis_Ekspedisi" value="POS"> POS</label>   
                    <label><input type="checkbox" name="Jenis_Ekspedisi" value="SICEPAT"> SICEPAT</label> 
                    <label><input type="checkbox" name="Jenis_Ekspedisi" value="NINJA EXPRESS"> NINJA EXPRESS</label>
            </div>       
            <div class="save">
                <center>
                    <button type="reset" class="btn">BATAL</button>
                    <button type="submit" class="btn" name="simpan">SIMPAN</button>  
                </center>
        </form>
    </div>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $ID            	 	= $_POST['ID'];
        $Nama           	= $_POST['Nama'];
        $Tanggal_Lahir  	= $_POST['Tanggal_Lahir'];
        $Jenis_Kelamin 		= $_POST['Jenis_Kelamin'];
        $Alamat        		= $_POST['Alamat'];
        $Kode_Pos     		= $_POST['Kode_Pos'];
		$No_Telpon      	= $_POST['No_Telpon'];
		$Email      		= $_POST['Email'];
		$Jenis_Ekspedisi    = $_POST['Jenis_Ekspedisi'];
        
        
        
        mysqli_query($koneksi, "INSERT INTO pengguna VALUES('$ID','$Nama','$Tanggal_Lahir',' $Jenis_Kelamin',' $Alamat',' $Kode_Pos', '$No_Telpon', '$Email', '$Jenis_Ekspedisi')") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/POSTTEST4/data_pengguna.php'>";
    }

?>
