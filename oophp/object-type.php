<?php
class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak($produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("One Piece", "Eiichiro Oda", "Shueisha", 30000);
$produk2 = new Produk("God Of War", "Cory Barlog", "Sony", 50000);

echo "KOMIK : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$cetakInfo = new CetakInfoProduk();
echo $cetakInfo->cetak($produk1);
echo "<br>";
echo $cetakInfo->cetak($produk2);
?>
