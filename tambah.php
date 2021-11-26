
<DOCTYPE html>
<html>
    <head>
        <title>Tambah data</title>
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
        <h1>Tambah Data Inventaris</h1>
        <form method="POST">

            <label>Kode Barang : </label>
            <input type="text" name="kodebarang" placeholder="Kode Barang"> <br>

            <label>Nama Barang : </label>
            <input type="text" name="namabarang" placeholder="Nama Barang"> <br>

            <label>Jumlah : </label>
            <input type="number" name="jumlah" placeholder="Jumlah"> <br>

            <label>Satuan : </label>
            <input type="text" name="satuan" placeholder="Satuan"> <br>

            <label>Tanggal Datang : </label>
            <input type="date" name="tanggaldatang" placeholder=""> <br>

            <label>Kategori : </label>
            <input type="text" name="kategori" placeholder="Kategori"> <br>

            <label>Status : </label>
            <input type="text" name="status" placeholder="status"> <br>

            <label>Harga : </label>
            <input type="number" name="harga" placeholder="harga"> <br><br>

            <input type="submit" name="masuk" value=" + Tambah">

        </form>
        <?php
            include "database.php";
            session_start();
            if(isset($_POST['masuk'])){
                $kodebarang = $_POST['kodebarang'];
                $namabarang = $_POST['namabarang'];
                $jumlah = $_POST['jumlah'];
                $satuan = $_POST['satuan'];
                $tanggaldatang = $_POST['tanggaldatang'];
                $kategori = $_POST['kategori'];
                $status = $_POST['status'];
                $harga = $_POST['harga'];

                $query = "INSERT INTO inventaris (`kode_barang`, `nama_barang`, `jumlah`, `satuan`, `tgl_datang`, `kategori`, `status_barang`, `harga`) VALUES ('$kodebarang','$namabarang','$jumlah','$satuan','$tanggaldatang','$kategori','$status','$harga')";
                $execute = mysqli_query($connect,$query);

                if($execute){
                    echo "Data Berhasil Ditambahkan<br>";
                    echo "<a href='beranda.php'><br>Tekan untuk kembali ke Beranda</a>";
                } else {
                    echo "Data Gagal Ditambahkan<br>";
                    echo "<a href='beranda.php'><br>Tekan untuk kembali ke Beranda</a>";
                }
            }
	    ?>
        <br><br><br><br>
        <div class="end">
            Inventaris 2021
        </div>
        </center> 
    </body>
</html>