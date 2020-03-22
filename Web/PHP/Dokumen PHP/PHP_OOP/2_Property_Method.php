<?php
    // deklarasi kelas
    class Produk{
        //deklarasi property
        public $judul = "judul", $penulis, $penerbit, $harga;

        //deklarasi method
        public function sayHelo (){
            //this untuk menunjuk pada kelas itu sendiri
            return "$this->judul";
        }

    }

    $produk1 = new Produk();

    $produk1->judul= "Naruto";

    var_dump($produk1);
    echo $produk1->sayHelo();
?>