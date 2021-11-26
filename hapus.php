
<DOCTYPE html>
<html>
    <head>
        <title>Hapus</title>
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
        
        <br><h1>Hapus Barang</h1>
        <form method="POST">
            <label>Nama Barang yang akan Dihapus: </label>
            <input type="text" name="namabarang" placeholder="Nama Barang"> <br><br>
            <input type="submit" name="hapus" value="Hapus">
        </form>
        <?php
            include "database.php";
            session_start();
            if(isset($_POST['hapus'])){
                $namabarang = $_POST['namabarang'];
                
                $query = "DELETE FROM inventaris WHERE nama_barang = '$namabarang'";
                $execute = mysqli_query($connect,$query);

                if($execute){
                    echo "Data Berhasil Dihapus<br>";
                    echo "<a href='beranda.php'>Tekan untuk kembali ke Beranda</a>";
                } else {
                    echo "Data Gagal Dihapus<br>";
                    echo "<a href='beranda.php'>Tekan untuk kembali ke Beranda</a>";
                }
            }
	    ?>
        <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="end">
                Inventaris 2021
            </div>
        </center>
    </body>
</html>