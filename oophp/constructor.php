<?php
class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul = "judul", $penulis = "penulis",  $penerbit =  "penerbit", $harga = 0) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("One Piece", "Elichiro Oda", "biejr", 30000);
$produk2 = new Produk( "God Of War",  "Ezio", "Sony", 50000);
$produk3 = new Produk("Dragon Ball");


echo "KOMIK : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);