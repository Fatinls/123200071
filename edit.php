
<DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
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
        <h1>Edit Barang</h1>
        <form method="POST">
            <label>Nama Barang yang akan Diedit: </label>
            <input type="text" name="namabarang" placeholder="Nama Barang"> <br>
            <input type="submit" name="edit" value="Edit">
        </form>
        <?php
            include "database.php";
            session_start();
            if(isset($_POST['edit'])){
                $namabarang = $_POST['namabarang'];
                
                $query = "SELECT * FROM inventaris WHERE nama_barang = '$namabarang'";
                $execute = mysqli_query($connect,$query);

                while($row=$execute->fetch_object()){
                ?>
                <form action="editdata.php" method="POST">

                    <label>Kode Barang : </label>
                    <input type="text" name="kodebarang" value=<?= $row->kode_barang ?>> <br>

                    <label>Nama Barang : </label>
                    <input type="text" name="namabarang" value=<?= $row->nama_barang ?>> <br>

                    <label>Jumlah : </label>
                    <input type="number" name="jumlah" value=<?= $row->jumlah ?>> <br>

                    <label>Satuan : </label>
                    <input type="text" name="satuan" value=<?= $row->satuan ?>> <br>

                    <label>Tanggal Datang : </label>
                    <input type="date" name="tanggaldatang" value=<?= $row->tgl_datang ?>> <br>

                    <label>Kategori : </label>
                    <input type="text" name="kategori" value=<?= $row->kategori ?>> <br>

                    <label>Status : </label>
                    <input type="text" name="status" value=<?= $row->status_barang ?>> <br>

                    <label>Harga : </label>
                    <input type="number" name="harga" value=<?= $row->harga ?>> <br><br>

                    <input type="submit" name="edite" value="Edit">

                <?php 
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