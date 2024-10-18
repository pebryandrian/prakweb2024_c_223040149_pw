<?php
class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1 = new Produk();
//$produk1->judul = "Naruto";
//var_dump($produk1);

//$produk2 =  new Produk();
//$produk2->judul = "Sailor Moon";
//var_dump($produk->judul);

$produk3 = new Produk();
$produk3->judul = "One Piece";  
$produk3->penulis = "Eiichiro Oda";
$produk3->penerbit = "biejr";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "God Of War";
$produk4->penulis = "Biejr AGAIN";
$produk4->penerbit = "Fajar Sadboy";
$produk4->harga = 2500000;

echo "KOMIK : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();