<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center>
        <h1>Login Petugas</h1>
        <form action="ceklogin.php" method="POST">

        <label>Username : </label>
        <input type="text" name="username"> <br>

        <label>Nama Lengkap : </label>
        <input type="text" name="nama_lengkap"> <br>

        <label>Password : </label>
        <input type="password" name="password"> <br><br>

        <input type="submit" value="Login"><br><br><br>

        </form>
        
        <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Login gagal! username dan/atau password salah!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login dulu";
                }
            }
        ?>
        </center>
    </body>
</html>