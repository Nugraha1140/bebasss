<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
     <h2>Menu</h2>
     <h4>Makanan :</h4>
     <ol>
         <li>Nasi goreng</li>
         <li>Ayam Goreng</li>
         <li>Mie Goreng</li>
     </ol>
     <h4>Minuman :</h4>
     <ol>
         <li>Air Mineral</li>
         <li>Jus</li>
         <li>kopi</li>
     </ol>
     <center>
     <form method = "POST" action= "">
     <table>
        <tr>
             <td>Jenis</td>
             <td>:</td>
             <td><input type='text' name='jenis'></td>
        </tr>
        <tr>
             <td>Menu</td>
             <td>:</td>
             <td><input type='text' name='menu'></td>
        </tr>
        <tr>
             <td>Jumlah</td>
             <td>:</td>
             <td><input type='text' name='jumlah'></td>
        </tr>
        <tr>
             <td>Bayar</td>
             <td>:</td>
             <td><input type='text' name='bayar'></td>
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
    $jenis = $_POST['jenis'];
    $menu = $_POST['menu'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];
    $harga;
    $diskon;
    $belanja;
    $totalbayar;

    if ($jenis == "Makanan") {
        if ($menu == "Nasi Goreng") {
            $harga = 10000;
        } elseif ($menu == "Ayam Goreng") {
            $harga = 15000;
        } elseif ($menu == "Mie Goreng") {
            $harga = 20000;
        } else {
            echo "Tidak ada";
        }
    } elseif ($jenis == "Minuman") {
        if ($menu == "Air ") {
            $harga = 7000;
        } elseif ($menu == "Jus") {
            $harga = 12000;
        } elseif ($menu == "Kopi") {
            $harga = 15000;
        } else {
            echo "Tidak ada";
        }
    } else {
        echo "tidak ada";
    }

    $total = $harga * $jumlah;

    if ($total >= 50000) {
        $diskon = $total * 0.2;
    } else {
        $diskon = 0;
    }
    $totalbayar = $total - $diskon;
    $kembalian = $bayar - $totalbayar;
    echo "Jenis Pesanan : $jenis<br>";
    echo "Nama Pesanan  : $menu<br>";
    echo "<hr>";
    echo "Jumlah Pesanan : $jumlah<br>";
    echo "Total Pesanan  : $total<br>";
    echo "<hr>";
    echo "Potongan Harga : $diskon<br>";
    echo "Total Harga : $totalbayar<br>";
    echo "<hr>";
    echo "Bayar : $bayar<br>";
    echo "Kembalian : $kembalian<br>";
}
?>