<?php

class Produk{
    var $merk;
    var $ram;
    var $harga;

    function Hidupkan_tv(){
        return "Hidupkan";
    }
    function Matikan_tv(){
        return "Matikan";
    }
}
$tv = new Produk();
$tv->merk = "vivo y91";
$tv->ram = "2 GB";
$tv->harga = "Rp. 1.500.000";

$tv = new Produk();
$tv->merk = "asus";
$tv->ram = "2 GB";
$tv->harga = "Rp. 1.000.000";

echo "Merk HP : $tv->merk<br>";
echo "Ram HP : $tv->ram<br>";
echo "Harga HP : $tv->harga<br>";