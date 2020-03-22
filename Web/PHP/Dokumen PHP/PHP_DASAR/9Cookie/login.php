<?php
    session_start();
    if(isset($_COOKIE["login"])){
        if($_COOKIE["login"]== 'true'){
            $_SESSION['login']=true;
        }
    }
    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }
    require 'function.php';
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        //cek username
        $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($result)===1){
            //cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                //set session
                $_SESSION["login"] = true;

                // cek remember me
                if(isset($_POST["remember"])){
                    //buat cookie
                    setcookie('login', 'true', time()+60);
                }
                header("Location: index.php");
                exit;
            }
        }
        
        $error = true;
        
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        label{
            display: block;
        }
    </style>
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if(isset($error)): ?>
        <p style="color: red; font-style: italic;">Username / Password Salah</p>
    <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
                
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
        
    </form>
</body>
</html>