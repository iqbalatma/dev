<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    // untuk mengambil source dari function
    require 'function.php';

    // pagination
    // konfigurasi

    $jumlahDataPerhalaman = 2;
    $jumlahData = count(ambil_data("SELECT * FROM mahasiswa"));
    // floor pembulatan kebawah, round pembulatan ke angka terdekat, ceil pembulatan keatas
    $jumlahHalaman = ceil(($jumlahData/$jumlahDataPerhalaman));
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
    
    $mahasiswa = ambil_data("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman ");
    // limit memiliki 2 parameter, yaitu data dimulai dari index keberapa dan berapa banyak data yang akan tampil
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs);

    // $mhs1 = mysqli_fetch_assoc($result);
    // // var_dump($mhs1);
    // $search = $_POST["search"];
    if(isset($_POST["cari"])){
        $mahasiswa = cari($_POST["search"]);
    }

    //baru mengambil satu row
    // $mhs2 = mysqli_fetch_array($result);
    // var_dump($mhs2);

    // //untuk mengambil banyak row gunakan looping
    // //selama data masih ada, maka vardump
    // while($mhs = mysqli_fetch_row($result)){
    //     var_dump($mhs);
    // }
    // $result merupakan lemarinya /query
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
    <h1>Data Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <a href="logout.php">Logout</a>
    <br>
    <form action="" method="POST">
        <input type="text" name="search" id="search">
        <button type="submit" name="cari" id="tombolSearch">Cari</button>
    </form>
    <?php for($i = 1; $i <= $jumlahHalaman; $i++): ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endfor; ?>
    
    <br>
    <div id="container">
    <table border="1" cellsapcing="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i=1;  ?>
        <?php foreach($mahasiswa as $rowaaa) : ?>
        <tr>
            <td><?php echo $i;?></td>
            <td>
                <a href="update.php?id=<?= $rowaaa["id"]; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $rowaaa["id"]; ?>">Hapus</a>
                <!-- kirim data id dengan metode get -->
            </td>
            <td><img src="<?= "img/".$rowaaa["gambar"]; ?>" alt=""></td>
            <td><?= $rowaaa["nim"]; ?></td>
            <td><?= $rowaaa["nama"]; ?></td>
            <td><?= $rowaaa["email"]; ?></td>
            <td><?= $rowaaa["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>

    <!-- PENJELASAN KESELURUHAN KODING -->
    <!--  Pertama buat koneksi
    Kemudian ambil data dari database, dengan query select * from mahasiswa
    data dari database akan diambil, dianalogikan dengan lemari
    kemudian data tersebut diambil satu persatu / per row/ per baris. Dengan menggunakan mysqli_fetch_assoc dengan paramter query tersebut.
    setelah datanya diambil satu persatu, simpan data tersebut kedalam sebuah kotak, bernama $rows, dengan melakukan perulangan, selama data masih ada maka lakukan perulangan. data persatuan akan ditampung dalam $rows kemudian akan menjadi array multidimensi. Setelah ditampung didalam box kemudian direturnkan. 
    Setelah direturnkan, panggil fungsi tersebut dan ditampung didalam variabel, kemudian variabel tersebut akan dilakukan perulangan dengan foreach untuk mengambil datanya, kemudian datanya dipanggil dengan keynya-->
</body>
</html>