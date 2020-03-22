<?php
    require 'function.php';
    $id = $_GET["id"];
    // query mengambil data dari database
    $query = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    // result berisi hasil query dari database
    // kemudian ambil data menggunakan fetch assoc
    $data_ubah = mysqli_fetch_assoc($result);
    var_dump($data_ubah);
    $nim = $data_ubah["nim"];
    $nama = $data_ubah["nama"];
    $email = $data_ubah["email"];
    $jurusan = $data_ubah["jurusan"];
    if(isset($_POST["submit"])){
        // ambil data dari tiap elemen dalam form 
        if(ubah_data($_POST)>0){
            // tambah data mereturnkan nilai affected rows
            echo "
            <script>
            alert ('data berhasil diubah');
            document.location.href = 'index.php';
            </script>";
        }
        else {
            echo " 
            <script>
            alert ('data berhasil diubah');
            document.location.href = 'index.php';
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
    <title>Ubah</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <a href="index.php">Kembali Ke Admin</a>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <ul>
            <li>
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="<?= $nim; ?>">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $nama; ?>">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?= $email; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $jurusan; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>


    </form>
</body>
</html>