<?php
	session_start();
	$username = $_SESSION['username'];
    $nama_lengkap = $_SESSION['nama_lengkap'];
	if(empty($_SESSION['username'])){
		header("location:login.php?pesan=belum_login");
	}
?>
<DOCTYPE html>
<html>
    <head>
        <title>Beranda</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <div class="judul">
                <div class="fontjudul">
                    <h1>DAFTAR INVENTARIS BARANG</h1>
                    <h1>KANTOR SERBA ADA</h1>
                </div>
                <header class="header">
                    <div class="menu">
                        <ul>
                            <li><a href="beranda.php">Beranda</a></li>
                            <li><a href="data inventaris.php">Data Inventaris</a></li>
                            <li class="dropdown"><a href="#">List per Kategori</a>
                                <ul class="isi-dropdown">
                                    <li><a href="bangunan.php">Bangunan</a></li>
                                    <li><a href="kendaraan.php">Kendaraan</a></li>
                                    <li><a href="alat tulis kantor.php">Alat Tulis Kantor</a></li>
                                    <li><a href="elektronik.php">Elektronik</a></li>
                                </ul>
                            </li>
                            <li class="button">
                                <form method="POST">
                                    <input type="submit" name="submit" value="Logout">
                                </form>
                                <?php 
                                    if(isset($_POST['submit'])){
                                        session_start();
                                        session_destroy();
                                        header("location:login.php?pesan=logout");
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </header>
            </div>
            <br>
            <br><h1>Selamat Datang<h1><br>
            <h1><?php echo $nama_lengkap ?><h1><br><br><br><br>
            <div class="end">
                Inventaris 2021
            </div>
        </center>
    </body>
</html>