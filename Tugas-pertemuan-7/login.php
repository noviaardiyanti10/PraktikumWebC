<?php
require 'koneksi.php';

if($_SESSION){
    if($_SESSION["tingkatan_user"] == 'admin'){
        header("Location: index-admin.php");
    }else if ($_SESSION['tingkatan_user'] == 'pegawai'){
        header("Location: index.php");
    }
}

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = mysqli_escape_string ($koneksi, $_POST["password"]);

    $cek = mysqli_query($koneksi,"SELECT id_user,nama, username, password, tingkatan_user FROM user_data WHERE username = '$username'" );

    //cek username 
    if (mysqli_num_rows($cek) == 1){
        $row = mysqli_fetch_assoc($cek);

        if($password == $row["password"]){
            if($row["tingkatan_user"] == 'admin'){
                $_SESSION['login'] = true;
                $_SESSION['nama'] = $row["nama"];
                $_SESSION['username'] = $row["username"];
                $_SESSION['password'] = $row["password"];
                $_SESSION['tingkatan_user'] = $row["tingkatan_user"];
                $_SESSION['id_user'] = $row["id_user"];
                header("Location: index-admin.php");

            }else if ($row['tingkatan_user'] == 'pegawai'){
                $_SESSION['login'] = true;
                $_SESSION['nama'] = $row["nama"];
                $_SESSION['username'] = $row["username"];
                $_SESSION['password'] = $row["password"];
                $_SESSION['tingkatan_user'] = $row["tingkatan_user"];
                $_SESSION['id_user'] = $row["id_user"];
                header("Location: index.php");
            }
        }
    }
    $error = true;
}

?>
<!DOCTYPE html lang = "en">
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css"  href="assets/login.css" />
        <link rel="stylesheet" type="text/css" href="font-awesome/css/all.min.css">
    </head>

    <body class="login">
        <div class="kiri">
            <h4>Welcome User</h4>
        </div>
        <div class="kanan">
        <form action="" method="POST">
            <img src="img/user.png" alt="user1" />
                <div class="form-group">
                   <input type="text" name="username" id="username" placeholder="username Anda" required autofocus />
                   <i class="fas fa-user"></i>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password Anda" required />
                    <i class="fas fa-key"></i>
                </div>
                <?php if (isset($error)) : ?>
                <p style="color:red; font-style:italic";>Username/Password Salah!</p>
                <?php endif; ?>
                <button type="submit" name="submit">Login</button><br/>
                <p><a href=" "><p>Lupa password?</p></a>
            </form>
        </div>
        <footer>
        <?php include  'assets/layout/footer.php'?>
        </footer>
    </body>
</html>