<?php 

require_once 'App/init.php';

$produk1 = new Komik("One Piece", "Eiichiro Oda", "Shueisha", 300000, 100);
$produk2 = new Game("God Of War", "Cory Barlog", "Sony", 500000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

