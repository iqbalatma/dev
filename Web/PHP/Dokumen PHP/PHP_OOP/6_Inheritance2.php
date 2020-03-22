<?php
    // deklarasi kelas
    class Produk{
        //deklarasi property
        public  $judul,
                $penulis, 
                $penerbit, 
                $harga,
                $jmlHalaman,
                $waktuMain,
                $tipe;

        //magic method, dijalankan ketika kelas dibuat jadi objek

        // pemberian nilai default dapat dilakukan didalam parameter
        public function __construct($judul = "Belum Ada Judul", $penulis = "Belum Ada Penulis", $penerbit = "Belum Ada Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe="Tidak Diketahui")
        {
            // property diatas, diisi dengan variabel didalam parameter
            $this->judul = $judul;
            $this->penulis  = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }


        //deklarasi method
        public function getLabel (){
            //this untuk menunjuk pada kelas itu sendiri
            return "$this->penulis, $this->penerbit";
        }

        public function getLabelLengkap (){
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
            return $str;
        }

    }
    

    class CetakInfoProduk{
        public function cetak( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()}, ({$produk->harga})";
            return $str;
        }


    }
    
    class Komik extends Produk{
        // public $jumlahHalaman;
        public function getLabelLengkap (){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} ) - {$this->jmlHalaman} Halaman";
        return $str;
        }
    }

    class Game extends Produk{
        // public $jumlahHalaman;
        public function getLabelLengkap (){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} ) - {$this->waktuMain} Jam";
        return $str;
        }
    }





    $produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 60000, 100, 0, "Komik");
    $produk2 = new Game("COD", "Sunardi", "Activision", 800000, 0, 50, "Game");

    echo $produk1->getLabelLengkap();
    echo "<br>";
    echo $produk2->getLabelLengkap();
?>