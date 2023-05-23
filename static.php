<?php 

class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "halo.";
    }

}

echo ContohStatic::$angka;