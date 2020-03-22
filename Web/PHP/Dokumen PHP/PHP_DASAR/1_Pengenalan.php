<?php
//Sintaks PHP

//Standar Output
//---------------
//echo, print
//print_r (untuk array)
//var_dump

echo "Iqbal Atma Muliawan";
echo 123;
print " Teknik Informatika  ";
var_dump ("Universitas Komputer Indonesia");
//akan menampilkan ukuran, dan tipe data
?>

<?php
//php dan tipe data
//tipe data tidak perlu didefinisikan

$nama = "haha";
$namaDepan ="Iqbal";
$namaBelakang = "Atma";

$nama1 = "Iqbal";
$nama1 .= " ";
$nama1 .= "Atma";

echo $nama1;
echo $namaDepan." ".$namaBelakang;
//dihubungkan dengan tanda titik.
$x = 1;
$x += 5;
//x += 5 sama saja menjadi x + 5

//operator perbandingan
//< , > , <= , >= , ==, !=

var_dump(1>5);

var_dump(1 == "1");


//operator identitas
//===, !==
var_dump(1 === "1");

//operator logika
//&&, ||, !



?>
<!-- php didalam HTML-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<br>
<h1>Halo Iqbal Atma <?php echo " $nama" ?></h1>
    
</body>
</html>




