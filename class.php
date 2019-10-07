<? php 
//1.Class adalah sebuah blueprint/ template
//untuk membuat instance dari object
//2.Class mendefinisikan object
//3.Menyimpan data(property) dan
//  Perilaku(method)

//Membuat class dengan nama Kucing
class Kucing{

    //Membuat property
    public $warna="coklat";
    public $jml_kaki="4";
    public $mkn_fay="pindang";

    //Membuat method dengan nama bersuara
    public function bersuara(){

        return "Miaww";
    }
}

//membuat objek baru
//ditandai dengan keyword'new'
$kucing1=new Kucing;

    var_dump($warna);
?>