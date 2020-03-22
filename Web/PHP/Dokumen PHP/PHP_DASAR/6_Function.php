<?php
    //Memanggil fungsi date
    //data("l") untuk mengambil nama hari
    //data("d") untuk mengambil nama tanggal
    //data("M") untuk mengambil nama bulan
    //data("m") untuk mengambil angka Bulan
    //data("Y") untuk mengambil tahun
    //Nama Fungsi + parameter
    echo date("l, d-M-Y");
    echo "<br>";


    //Time memanggil waktu
    //detik yang sudah berlalu sejak 1 januari 1970
    //UNIX timestamp / EPOCH time
    echo time();
    echo "<br>";

    //menampilkan hari ketika detiknya berada pada (parameter kedua)
    echo date("l", time()-60*60*24*100);
    echo "<br>";

    //Menghitung tanggal lahir
    //mktime membuat detik sendiri
    //mktime (0,0,0,0,0,0);
    //jam, menit, detik, bulan, tanggal, tahun
    $tanggal_lahir = mktime(0,0,0,2,16,1999);
    echo date("l, d M Y", $tanggal_lahir);
    echo "<br>";

    //strtotime dengan parameter tanggal bulan tahun untuk mendapat nilai time
    echo date("l", strtotime("16 Februari 1999"));
    





?>