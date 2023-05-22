<?php
//class
class Produk
{
  //property (Variabel)
  public
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $halaman,
    $jam;

  // constructor / Magic Function
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $halaman = 0, $jam = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->halaman = $halaman;
    $this->jam = $jam;
  }

  //method (function)
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  // public function getProduk()
  // {
  //   // komik : Naruto | Penulis, Judul (Harga) - halaman / jam
  //   $str = "{$this->judul} {$this->getLabel()}(Rp. {$this->harga})";
  //   return $str;
  // }
}

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} {$this->getLabel()}(Rp. {$this->harga}) - {$this->halaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} {$this->getLabel()}(Rp. {$this->harga}) - {$this->jam} Jam.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


//object

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Genshin Impact", "Hoyolab", "Mihoyo", 25000, 0, 50);

// echo "Komik = " . $produk1->getLabel();
// echo "<br>";
// echo "Game = " . $produk2->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();