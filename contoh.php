<?php
class Sekolah{
    public $status="Sudah Belajar";
    public function __construct(){
        echo "Masuk Sekolah <br>";
    }
    public function __destruct(){
        echo "Pulang Sekolah<br>";
    }
}
class Kelas extends Sekolah{
    public function __construct(){
        parent::__construct();
        echo "Masuk Kelas<br>";
    }
    public function sdhtdr(){
        echo "Sudah Di Kelas:";
    }
    public function __destruct(){
        echo "Keluar Kelas<br>";
        parent::__destruct();
    }
}
$tidur = new Kelas();
$tidur->sdhtdr();
echo $tidur->status . "<br>";