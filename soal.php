<html>
<head>
<title>oop looping</title>
</head>
<body>
<center>
    <p>Form Array</p>
</center>
<fieldset>
    <legend>Form Array</legend>
    <form action="" method="GET">
        <label for="">Jumlah anggota </label>
        <input type="number" name="jumlah" required>
        <br>
        <input type="submit" name="submit" value="Simpan">
        <hr>
</form>
<form action="soal1.php" method="post">
<?php
if(isset($_GET['submit'])){  
    $jml_form=$_GET['jumlah'];
    for($a=1; $a<=$jml_form; $a++){
        ?>
    
    <label for="">Nama</label>
    <input type="text" name="nama[]" required>
    <label for="">NIK</label>
    <input type="number" name="nik[]" required>
    <label for="">Umur</label>
    <input type="number" name="umur[]" required>
    <br>

    <?php } ?>
    <label for="">Alamat</label>
    <br>
    <textarea name="alamat" required></textarea>
    <br>
     <input type="submit" name="sbm" value="Simpan">
    <input type="reset" value="Reset">
    </form>
<?php } ?>
        

</fieldset>

</body>
</html>