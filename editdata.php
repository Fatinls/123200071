<?php
    include "database.php";
    session_start();
    if(isset($_POST['edite'])){
        $kodebarang = $_POST['kodebarang'];
        $namabarang = $_POST['namabarang'];
        $jumlah = $_POST['jumlah'];
        $satuan = $_POST['satuan'];
        $tanggaldatang = $_POST['tanggaldatang'];
        $kategori = $_POST['kategori'];
        $status = $_POST['status'];
        $harga = $_POST['harga'];

        $query = "UPDATE inventaris SET kode_barang='$kodebarang', nama_barang='$namabarang', jumlah='$jumlah', satuan='$satuan', tgl_datang='$tanggaldatang', kategori='$kategori', status_barang='$status', harga='$harga' WHERE kode_barang='$kodebarang'";
        $execute = mysqli_query($connect,$query);

        if($execute){
            echo "Data Berhasil Diedit<br>";
            echo "<a href='beranda.php'>Tekan untuk kembali ke Beranda</a>";
        } else {
            echo "Data Gagal Diedit<br>";
            echo "<a href='beranda.php'>Tekan untuk kembali ke Beranda</a>";
        }
    }
?>