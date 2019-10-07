<?php

class RPL{
    
    public $jmlkursi;
    public $jmlmeja;
    public $kipasangin;
    public $papantulis;
    public $lampu;
    
    public function menyala(){
        return "supaya kita semangat belajar";
    }
    
    public function berputar(){
        return "supaya kita tidak malas belajar";
    }
    
}
$rpl1 = new RPL();
$rpl1->jmlkursi=20;
$rpl1->jmlmeja=40;
$rpl1->kipasangin=2;
$rpl1->papantulis=1;
$rpl1->lampu=4;

$rpl1->rpl2 = new RPL();
$rpl1->jmlkursi=30;
$rpl1->jmlmeja=60;
$rpl1->kipasangin=3;
$rpl1->papantulis=1;
$rpl1->lampu=4;

$rpl1->rpl3 = new RPL();
$rpl1->jmlkursi=60;
$rpl1->jmlmeja=30;
$rpl1->kipasangin=4;
$rpl1->papantulis=1;
$rpl1->lampu=5;

echo "Jumlah kursi dalam ruangan terdapat sebanyak $rpl1->jmlkursi buah kursi<br>";
echo "Jumlah Meja dalam ruangan terdapat sebanyak $rpl1->jmlkmeja buah Meja<br>";
echo "$rpl1->kipasangin Kipas Angin ".$rpl1->berputar()."<br>";
echo "Jumlah Papan Tulis dalam ruangan terdapat sebanyak $rpl1->papantulis buah Papan Tulis<br>";
echo "$rpl1->lampu Lampu ".$rpl1->menyala()."<br>";