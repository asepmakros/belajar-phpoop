<?php

    class Produk{//komik dan game
        private  $judul, 
                $penulis,
                $penerbit,
                $harga,
                $diskon = 0;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
        }
        //encapsulasi
        public function setJudul($judul){
            if(!is_string($judul)){
                throw new Exception("Judul harus string");
            }
            $this->judul = $judul;
        }
        public function getJudul(){
            return $this->judul;
        }
        
        public function setPenulis($penulis) {
            $this->penulis = $penulis;
        }
        public function getPenulis(){
            return $this->penulis;
        }

        public function setPenerbit($penerbit) {
            $this->penerbit = $penerbit;
        }
        public function getPenerbit(){
            return $this->penerbit;
        }
        
        public function setHarga($harga){
            $this->harga = $harga;
        }
        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }
        public function getDiskon(){
            return $this->diskon;
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (RP. {$this->harga})";
            return $str;
        }
    }

    class Komik extends Produk{
        public $halaman;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0){

            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->halaman = $halaman;
            
        }
        
        public function getInfoProduk(){
            $str = "Komik : ".parent::getInfoProduk()." - {$this->halaman} Halaman";
             return $str;
        }
    }
    class Game extends Produk{
        public $durasi;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
        $harga = 0, $durasi = 0){

            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->durasi = $durasi;
            
        }        
        
        public function getInfoProduk(){
            $str = "Game : ".parent::getInfoProduk()."  ~ {$this->durasi} Jam";
             return $str;
        }
    }
    
    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $string = "{$produk->judul} | {$produk->getLabel()} (RP. $produk->harga)";
            return $string;
        }
    }
    $produk1 = new Komik("Naruto", "masasi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);
    
    