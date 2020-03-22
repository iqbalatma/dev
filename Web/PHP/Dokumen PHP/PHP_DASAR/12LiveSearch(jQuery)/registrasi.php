<?php
    require 'function.php';
    if(isset($_POST["submit"])){
        var_dump($_POST['password']);
        var_dump($_POST['password2']);
        if(registrasi($_POST)>0){
            echo "<script>
            alert ('user baru berhasil ditambahkan');
            </script>";
        }
        else{
            echo mysqli_error($conn);
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">pasword</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">konfirmasi pasword</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="submit">Register</button>
            </li>
        </ul>

    </form>
</body>
</html>