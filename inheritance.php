<?php 
class Produk{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul,$penulis,$penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

   public function getLabel(){
        return "$this->penulis, $this->penerbit";
   }
  
}

class CetaknfoProduk{
    public function cetak(Produk $produk){
        return "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}

$produk1 = new Produk("Naruto", "masashi", "shonen", 30000);
$produk2 = new Produk("Doraemon", "masasih", "shonen1", 20000);

echo $produk1->getLabel();
echo "<hr>";
$infoProduk1 = new CetaknfoProduk();
echo $infoProduk1->cetak($produk1);