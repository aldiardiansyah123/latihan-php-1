<?php

class aldi{

    public $nama = "Aldy Ardiansyah";
    protected $tgl = "29 Juni 2019";
    private $alamat = "Jl.Sadang";

    public function Alamat(){
        return $this->alamat;
    }
}

class saya extends aldi{
    public function tg(){
        return $this->tgl;
    }
}

$namaa = new aldi();
$tanggal = new saya();
$alamaat = new saya();
echo "Nama : ".$namaa->nama."<br>";
echo "Tanggal Lahir : ".$tanggal->tg()."<br>";
echo "Alamat : ".$alamaat->alamat()."<br>";