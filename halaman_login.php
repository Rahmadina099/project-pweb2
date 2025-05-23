<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksidb, "SELECT*FROM user where username='$username' and password='$password'");

        if(mysqli_num_rows($query)> 0){
            $data = mysqli_fetch_array($query);
            $_SESSION['user'] = $data;
           echo '<script>
            alert("Selamat datang, ' . $data['nama'] . '");
            location.href="index.php";
            </script>';
        
        }else{
            echo '<script>alert("username/password tidak sesuai.")</script>';
        }
    }
    ?>
<hr style="background-color:rgb(185, 255, 249); height: 20px; border: none;"><center><h1>HALAMAN UTAMA</h1></center><hr style="background-color:rgb(185, 255, 249); height: 20px; border: none;">
<center>
    <br>
    <br>
    <br>
    <br>
    <table border=1 width="40%" height="200px" style="background-color:rgb(188, 239, 255);">
        <tr>
            <td>
                <center>
                    <form action="" method="post">
<table style="background-color:rgb(188, 239, 255);">
<tr><td></td></tr><tr><td></td><tr><td></td></tr><tr><td></td></tr>
        <tr>
            <td style="padding : 10px">Kode User</td>
            <td>:</td>
            <td><input type="text" name="code" placeholder="enter kode user"></td>
        </tr>
        <tr>
            <td style="padding : 10px" >Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="enter username"></td>
        </tr>
        <tr>
            <td style="padding : 10px" placeholder="enter pssword">Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr><td colspan=3 ><br><br><center><input type="submit" name="login" value="Login">
                          <input type="reset" value="reset"></center></td></tr>
</table>
</form>
</td>
</tr>
</center>
    </table>
</center>
</body>
</html>
