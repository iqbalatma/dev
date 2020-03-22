<?php
    // apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){

        //cek username benar atau tidak
        if($_POST["username"] == "admin" && $_POST["password"] == "rahasia"){
            //jika benar ke halaman admin
            header("Location: 4_Admin_Simple2.php");
            exit;
        }
        else{
            //jika salah tampil pesan salah
            $error = true;
        }    
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)): ?>
    <p>Username / Password salah</p>
    <?php endif; ?>
    
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>