<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset style="widht:50%">
    <legend>Bilangan</legend>
    <form action="soal_pembelian.php" method="post">
                    <div class="form-group">
                        <label for="">Bilangan 1</label>
                        <input type="number" min="1" name="bil1" required>
                    </div>
                    <div class="form-group">
                        <label for="">Bilangan 2</label>
                            <input type="number" min="1" name="bil2" required>
                    </div>
                    <div class="form-group">
                    <button type="submit" name="simpan" class="btn btn-outline-primary">simpan</button>
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                            </div>
                        </form>
    </fieldset>
</body>
</html>
<?php
class Aritmatika{
    public $bil1;
    public $bil2;
    public function __construct($bil1,$bil2){
        $this->bil1=$bil1;
        $this->bil2=$bil2; 
    }
    public function tambah{
        
        $tambah=$this->bil1 + $this->bil2;
        return "Hasil Tambah = $tambah";
    }
    public function kurang{
        $kurang=$this->bil1 - $this->bil2;
        return "Hasil Kurang = $this->bil1 - $this->bil2 = $kurang";
    }
    public function kali{
        $kali=$this->bil1 * $this->bil2;
        return "Hasil Kali = $this->bil1 * $this->bil2 = $kali";
    }
    public function bagi{
        $bagi=$this->bil1 / $this->bil2;
        return "Hasil Bagi = $this->bil1 / $this->bil2 = $bagi";
    }
}
if (isset($_POST['simpan'])) {
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];

    echo "<center>Hasil Perhitungan</center>";
    $hasil=new Aritmatika($a,$b);
    echo $hasil->tambah();
    echo $hasil->kurang();
    echo $hasil->kali();
    echo $hasil->bagi();
}
?> 