<?php
    $angka = [
        [1,2,3],
    [4,5,6],
    [7,8,9]
];
    
    //mencetak array multidimensi
    // echo $angka[2][2];


//array associative
//keynya adalah string yang kita buat sendiri
$mahasiswa = [[
    "nama" => "Iqbal Atma Muliawan",
    "nim" => "10117124",
    "email" => "Aquila@mahasiswa.unikom.ac.id", 
    "jurusan" => "Teknik Informatika"
],
[
    "nama" => "Atma",
    "nim" => "10117125",
    "email" => "atma@mahasiswa.unikom.ac.id", 
    "jurusan" => "Teknik Industri"
],
[
    "nama" => "Bambank",
    "nim" => "10117126",
    "email" => "bambank@mahasiswa.unikom.ac.id", 
    "jurusan" => "Teknik Arsitektur",
    "tugas" => [90,80,100]
    ]
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Associative</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: hotpink;
            float: left;
            transition: 1s;
            text-align: center;
            line-height: 30px;
        }

        .kotak:hover{
            transform: rotate(180deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    
    <?php foreach($angka as $a): ?>
        <?php foreach($a as $b): ?>    
            <div class="kotak"><?= $b ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>

    <br>

    <?php echo $mahasiswa[2]["tugas"][1] ?>

    
</body>
</html>