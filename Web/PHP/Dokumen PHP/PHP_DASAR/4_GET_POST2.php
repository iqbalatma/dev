<?php
// cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["kelas"]) || !isset($_GET["jurusan"])){
    //redirect
    header("Location: 4_GET_POST.php");
    exit;
    //exit agar script dibawahnya tidak di eksekusi
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
    <h1>Detail Mahasiswa</h1>
    
    <ul>
        <li>
            <?= $_GET["nim"]; ?>
        </li>
        <li>
            <?= $_GET["nama"]; ?>
        </li>
        <li>
            <?= $_GET["kelas"]; ?>
        </li>
        <li>
            <?= $_GET["jurusan"]; ?>
        </li>
    </ul>

    <a href="4_GET_POST.php">Kembali Ke Halaman Utama</a>

    <!-- Jika langsung masuk ke url ini tanpa mengirimkan data maka akan terjadi error karena datanya kosong -->
</body>
</html>