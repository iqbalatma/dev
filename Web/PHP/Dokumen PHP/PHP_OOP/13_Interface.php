<?php
    // deklarasi kelas
    abstract class Produk{
        //deklarasi property
        private $judul,
                $penulis, 
                $penerbit;
        protected $harga,
        $diskon;
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
        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }
        //deklarasi method
        public function getLabel (){
            //this untuk menunjuk pada kelas itu sendiri
            return "$this->penulis, $this->penerbit";
        }
        abstract public function getInfoLengkap ();
        
        public function getInfo(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
            return $str;
        }
        public function setJudul($judul){
            $this->judul = $judul;
        }
        public function getJudul(){
            return $this->judul;
        }
        public function setPenulis($penulis){
            $this->penulis = $penulis;
        }
        public function getPenulis(){
            return $this->penulis;
        }
        public function setPenerbit($penerbit){
            $this->penerbit = $penerbit;
        }
        public function getPenerbit(){
            return $this->penerbit;
        }
    }

    
    class Komik extends Produk{
        public $jmlHalaman;
        public function __construct($judul = "Belum Ada Judul", $penulis = "Belum Ada Penulis", $penerbit = "Belum Ada Penerbit", $harga = 0, $jmlHalaman = 0)
        {            
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }
        public function getInfoLengkap(){
        $str = "Komik : " . parent::getInfo() . " - {$this->jmlHalaman} Halaman";
        return $str;
        }
        public function setDiskon($diskon){
            return $this->diskon = $diskon;
        }
    }


    class Game extends Produk{
        public $waktuMain;
        public function __construct($judul = "Belum Ada Judul", $penulis = "Belum Ada Penulis", $penerbit = "Belum Ada Penerbit", $harga = 0, $waktuMain= 0)
        {
            
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }
        public function getInfoLengkap(){
        $str = "Game : ". parent::getInfo() ." ~ {$this->waktuMain} Jam";
        return $str;
        }
    }

    class CetakInfoProduk{
        public $daftarProduk =[];

        public function tambahProduk(Produk $produk){
            $this->daftarProduk[] = $produk;

        }
        public function cetak(){
            $str = "DAFTAR PRODUK : <br>";
            foreach ($this->daftarProduk as $p){
                $str .= "-{$p->getInfo()} <br>";
            }
            return $str;
        }


    }


    $produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 60000, 100);
    $produk2 = new Game("COD", "Sunardi", "Activision", 800000, 50);

    $cetakProduk = new CetakInfoProduk();

    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    // $t = $cetakProduk->cetak();
    // echo $t;
    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();
    echo "<hr>";

    // $produk1->setDiskon(10);
    // echo $produk1->getHarga();


    // echo "<hr>";
    // $produk1->setJudul("Bambang");
    // echo $produk1->getJudul();
?>