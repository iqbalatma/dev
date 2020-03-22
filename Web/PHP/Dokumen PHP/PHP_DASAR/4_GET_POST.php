<?php
    //$_GET dan $_POST merupakan  array associative
    echo $_SERVER["SERVER_NAME"];
    

    //GET

    $_GET["nim"] = "10117125";
    
    $mahasiswa = [
        [
            "nim" => "10117124",
            "nama" => "Iqbal Atma Muliawan",
            "kelas" => "IF4",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nim" => "10117125",
            "nama" => "Andi",
            "kelas" => "IF5",
            "jurusan" => "Teknik Sipil"
        ]
    ];



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
    <?php foreach($mahasiswa as $mhs) :?>
        <ul>
            <li>
                <?= $mhs["nim"]; ?>
            </li>
            <li>
                <?php echo $mhs["nama"]; ?>
            </li>
            <li>
                <?= $mhs["kelas"]; ?>
            </li>
            <li>
                <?= $mhs["jurusan"]; ?>
            </li>
        </ul>
    <?php endforeach; ?> 
    <br>
    <hr>
    <br>

    <?php foreach($mahasiswa as $siswa) :?>
        <ul>
            <li>
                <a href="4_GET_POST_2.php?nim=<?= $siswa["nim"]; ?>&nama=<?= $siswa["nama"]; ?>&kelas=<?= $siswa["kelas"]; ?>&jurusan=<?= $siswa["jurusan"]; ?>"><?= $siswa["nama"]; ?></a>
                <!-- Mengirimkan data menggunakan link url kemudian data akan di tangkap menggunakan GET, url untuk banyak data dipisahkan dengan tanda & -->
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>