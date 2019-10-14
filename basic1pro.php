<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <form action="basic2.php" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama" required>
    <br>
    <label for="">NIP</label>
    <input type="number" name="nip" required>
    <br>
    <label for="">Alamat</label>
    <textarea name="alamat" required></textarea>
    <br>
    <label for="">Hari Kerja</label>
    <input type="text" name="hk" required>
    <br>
    <button type="submit" name="simpan">simpan</button>
    <button type="reset" class="btn btn-outline-warning">Reset</button>
    </form>
    </fieldset>
</body>
</html>


