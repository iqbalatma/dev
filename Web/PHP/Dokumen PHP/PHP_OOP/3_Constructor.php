<?php
    // deklarasi kelas
    class Produk{
        //deklarasi property
        public $judul = "judul", $penulis, $penerbit, $harga;

        //magic method, dijalankan ketika kelas dibuat jadi objek

        // pemberian nilai default dapat dilakukan didalam parameter
        public function __construct($judul = "Belum Ada Judul", $penulis = "Belum Ada Penulis", $penerbit = "Belum Ada Penerbit", $harga = 0)
        {
            // property diatas, diisi dengan variabel didalam parameter
            $this->judul = $judul;
            $this->penulis  = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }


        //deklarasi method
        public function getLabel (){
            //this untuk menunjuk pada kelas itu sendiri
            return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
        }

    }

    $produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 50000);

    // var_dump($produk1);
    echo "Komik : " . $produk1->getLabel();
?>