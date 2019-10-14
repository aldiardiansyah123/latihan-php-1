<?php
class gajioop{

    public $hk;
    public function __construct($hk){
        $this->hk=$hk;
    }
    public function gajikotor(){
        $kotor=$this->hk * 75000;
        return "Gaji Kotor = $kotor";
    }
    public function gajibersih(){
        $bersih=($this->hk*75000)-($this->hk*75000)*0.025;
        return "Gaji bersih = $bersih";
    }
}
if (isset($_POST['simpan'])) {
    $a=$_POST['hk'];
    $b=$_POST['nama'];
    $c=$_POST['nip'];
    $d=$_POST['alamat'];

    echo "<center>Total Gaji</center>";
    $hasil=new gajioop($a);
    echo "Nama = $b<br>";
    echo "NIP = $c<br>";
    echo "Alamat = $d<br>";
    echo $hasil->gajikotor()."<br>";
    echo $hasil->gajibersih()."<br>";
}    
?>