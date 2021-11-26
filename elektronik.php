
<DOCTYPE html>
<html>
    <head>
        <title>Elektronik</title>
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
        <h1>List Inventaris Elektronik</h1>
        <?php
            include "database.php";
            $query = "SELECT * FROM inventaris WHERE kategori = 'Elektronik'";
            $execute = mysqli_query($connect,$query);
            $no=1;
            $semua=0;
        ?>

        <table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal Datang</th>
                <th>Kategori</th>
                <th>Status Barang</th>
                <th>Harga</th>
                <th>Total Harga</th>
            </tr>
            <?php while($row=$execute->fetch_object()){
                $harga = $row->harga;
                $jml = $row->jumlah; 
                $total = $harga*$jml;
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row->kode_barang ?></td>
                <td><?= $row->nama_barang ?></td>
                <td><?= $row->jumlah ?></td>
                <td><?= $row->satuan ?></td>
                <td><?= $row->tgl_datang ?></td>
                <td><?= $row->kategori ?></td>
                <td><?= $row->status_barang ?></td>
                <td><?= $row->harga ?></td>
                <td><?= $total ?></td>
                <?php
                $no=$no+1;
                $semua=$semua+$total;
            } 
        ?>
            </tr>
            </table>
            <h1> <center>Total Inventaris Elektronik Rp.<?= $semua ?></enter></h1>
            <br><br><br><br><br><br><br><br>
            <div class="end">
                Inventaris 2021
            </div>
        </center>
    </body>
</html>