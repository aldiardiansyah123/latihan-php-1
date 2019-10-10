<?php

class Luas_lingkaran{
    public $jari;
    public $phi=3.14;

    public function __construct($jari){
        $this->jari=$jari;
    }
    public function luas(){
        $luas=$this->jari * $this->phi;
        return $luas;
    }
    public function kel(){
        $keliling=2*($this->jari * $this->phi);
        return $keliling;
    }
}
$a= new Luas_lingkaran(10);
echo "Luas Lingkaran <br>".$a->luas();
echo "<br>Keliling Lingkaran <br>".$a->kel();