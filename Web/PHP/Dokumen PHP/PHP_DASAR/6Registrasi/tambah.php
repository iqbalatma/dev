<?php
    require 'function.php';
    if(isset($_POST["submit"])){
        // ambil data dari tiap elemen dalam form 
        var_dump($_FILES["gambar"]);
        var_dump($_POST["nama"]);
        if(tambah_data($_POST)>0){
            // tambah data mereturnkan nilai affected rows
            echo "<script>
            alert('data berhasil ditambahkan')
            </script>";
        }
        else {
            echo "<script>
            alert('data gagal ditambahkan')
            </script>";
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
    <h1>Tambah Data Mahasiswa</h1>
    <a href="index.php">Kembali Ke Admin</a>

    <form action="" method="POST" enctype="multipart/form-data">
    <!-- enctype="multipart/form-data" membuat dua jalur pengiriman
awalnya hanya ditampung dalam post, sekarang dibuat dua jalur menjadi $_POST dan $_FILES, dimana $_FILES menampung data dari file yang dikirim-->
        <ul>
            <li>
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>


    </form>
</body>
</html>