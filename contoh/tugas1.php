<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pilihan Destinasi :</h2>
    <ol>
    <li>Bukit Bintang</li>
    <li>Pantai Sadranan</li>
    <li>Candi Borobudur</li>
    <li>Candi Prambanan</li>
    <li>Keraton Yogyakarta</li>
    <li>Malioboro</li>
    <li>Pendopo Lawas</li>
    <li>Goa Pindul</li>
    </ol>
    <br>
    <br>
    <br>
    <br>
    <center>

     <form method = "POST" action= "">
     <table>
        <tr>
             <td>Pilih tiket</td>
             <td>:</td>
             <td><input type='number' name='pilih'></td>
        </tr>
        <tr>
             <td>Jumlah tiket</td>
             <td>:</td>
             <td><input type='number' name='jumlah'></td>
        </tr>
        <tr>
             <td></td>
             <td></td>
             <td><input type="submit" name ="simpan" value='KIRIM'></td>
        </tr>
     </table>
     </form>
    </center>
</body>
</html>
<?php
if (isset($_POST['simpan'])) {
    $pilih = $_POST['pilih'];
    $jumlah = $_POST['jumlah'];
    if ($pilih == 1) {
        $harga = 10000;
        echo "Bukit bintang : Rp.$harga <br>";
        echo "Jumlah tiket: $jumlah <br>";
    } elseif ($pilih == 2) {
        $harga = 15000;
        echo "Pantai sadranan : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    } elseif ($pilih == 3) {
        $harga = 50000;
        echo "Candi borobudur : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    } elseif ($pilih == 4) {
        $harga = 50000;
        echo "Candi prambanan  : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    } elseif ($pilih == 5) {
        $harga = 5000;
        echo "Keraton Yogyakarta : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    } elseif ($pilih == 6) {
        $harga = 5000;
        echo "Malioboro : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    } elseif ($pilih == 7) {
        echo "Pendopo lawas";
        echo "<center><a href='cafe.php'>Daftar menu</a></center>";
    } elseif ($pilih == 8) {
        $harga = 100000;
        echo "Goa pindul : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    }

    echo "<h3>Diskon</h3>";
    if ($jumlah > 3) {
        $diskon = 0.05;
        echo "Selamat kamu dapet diskon 5% <br>";
    } elseif ($jumlah < 3) {
        echo "Kamu ga dapat diskon <br>";
    } else {
        echo "NO <br>";
    }
    $hitungdiskon = $harga * $jumlah * $diskon;

    $totalharga = ($harga * $jumlah) - $hitungdiskon;
    echo "total harga  : Rp.$totalharga <br>";

    echo "<hr>";
    echo "<form action='tugas2.php' method='POST'>";
    echo "<label for = 'tugas2'>pembayaran</label>";
    echo "<input type='number' name= 'angka' id='angka'>";
    echo "<input type='hidden' name='total' value='$totalharga'>";
    echo "<button type ='submit' name='bayar'>bayar</button>";
    echo "</form>";

}