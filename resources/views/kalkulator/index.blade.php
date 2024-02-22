<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tata kalkulator</title>
</head>
<body>
<div class="calculator">
   <center><h1>KALKULATOR SEDERHANA</h1>
   <form action="{{route('proses.store')}}" method="post">
    @csrf 
    <label for="a">Masukkan Angka Pertama</label><br>
    <input type="number" name="a" id="a"><br><br>
    <label for="a">Masukkan Angka Kedua</label><br>
    <input type="number" name="b" id="b"><br><br>
    <input type="submit" value="Tambah" name="op">
    <input type="submit" value="Kurang" name="op">
    <input type="submit" value="Kali" name="op">
    <input type="submit" value="Bagi" name="op">
    <input type="submit" value="Reset" name="op"></center>
   </form>
   </div>
</body>
</html>