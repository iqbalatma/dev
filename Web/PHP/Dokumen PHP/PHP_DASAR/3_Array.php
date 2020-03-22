<?php
    //array variabel yang dapat memiliki banyak nilai
    //bisa memiliki tipe data yang berbeda
    //key and value pair
    $nama ="iqbal";

    //membuat array cara lama
    $hari = array("senin", "selasa");

    //membuat array cara baru
    $bulan = ["Januari", "Februari"];

    //menampilkan array
    //var_dum() / print_r()
    echo $hari[1];

    var_dump($hari); // lebih kompleks
    print_r($bulan); // lebih ringkas
    echo "<br>"; 

    //perulangan untuk array

    $angka = [2,3,5,1,77,54,66,00];

    $mahasiswa = [
        ["Iqbal Atma Muliawan", "10117124", "Teknik Informatika", "aquila@mahasiswa.unikom.ac.id"], ["Joko", "10117125", "Teknik Informatika", "joko@mahasiswa.unikom.ac.id"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            margin: 3px;
            float: left;
        }

        .clear {
            clear : both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i<count($angka); $i++){  //fungsi count untuk menghitung jumlah elemen pada array?>
        <div class="kotak"><?php echo"$angka[$i]" ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a){ ?>
        <div class="kotak"><?php echo $a ?></div>
    <?php } ?>

    <div class="clear"></div>
    
    <?php foreach ($angka as $a): ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
    <br>
    <br>

    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
        <?php //foreach ($mahasiswa as $mhs) :?>
            <li><?php //$mhs; ?></li>
        <?php //endforeach; ?>
    </ul> -->
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <?php for($j = 0; $j<4; $j++): ?>
            <li><?= $mhs[$j]; ?></li>
        <?php endfor; ?>
    </ul>
    <?php endforeach; ?>
</body>
</html>