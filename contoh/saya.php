<!DOCTYPE html>
<html>
<head>
    <title>tugas</title>
</head>
<body>
   <h2>Pilihan Destinasi :</h2>
<ol>
        <li>Bukit Bintang</li>
        <li>Pantai sandaran</li>
        <li>Candi Borobudur</li>
        <li>Candi prambanan</li>
        <li>Keraton Yogyakarta</li>
        <li>Malioboro</li>
        <li>Pendopo lawas</li>
        <li>Goa Pindul</li>
    </ol>
        <form action="">
            <table>
                <tr>
                    <td>Pilihan Destinasi</td>
                    <td>:</td>
                    <td><input type="number" name="pilih"></td>
                </tr>
                <tr>
                    <td>Jumlah tiket</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td>Bayar</td>
                    <td>:</td>
                    <td><input type="number" name="Bayar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="sumbit" name="simpan">KIRIM</td>
                </tr>
            </table>
        </form>
    </table>
</body>
</html>

<?php

if (isset($_POST['simpan'])) {
    $pilihan = $_POST['pilih'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];
    if ($jumlah > 5) {
        $disc = 0.5;
    }
    if ($pilihan == 1) {
        $harga = 10000;
        $a = "Bukit Bintang";
        echo "Pilihan Destinasi : +$a ";
        echo "Jumlah Tiket      : +$jumlah ";
    } elseif ($pilihan == 2) {
        $harga = 15000;
        $a = "Pantai sandranan";
        echo "Pilihan Destinasi : +$a ";
        echo "Jumlah Tiket      : +$jumlah ";
    } elseif ($pilihan == 3) {
        $harga = 50000;
        $a = "Candi Borobudur";
        echo "Pilihan Destinasi : +$a ";
        echo "Jumlah Tiket      : +$jumlah ";
    } else if ($pilihan == 4) {
        $harga = 50000;
        $a = "Candi Prambanan";
        echo "Pilihan Destinasi : +$a ";
        echo "Jumlah Tiket      : +$jumlah ";
    } else if ($pilihan == 5) {
        $harga = 5000;
        $a = "Keraton Yogyakarta";
        echo "Pilihan Destinasi : +$a ";
        echo "Jumlah Tiket      : +$jumlah ";
    } else if ($pilihan == 6) {
        $harga = 5000;
        $a = "Malioboro";
        echo "Pilihan Destinasi : +$a ";
        echo "Jumlah Tiket      : +$jumlah ";

    } else if ($pilihan == 7) {

    } else if ($pilihan == 8) {
        $harga = 100000;
        $a = "Goa Pindul";
        echo "Pilihan Destinasi : +$a ";
        echo "Jumlah Tiket      : +$jumlah ";

    }
}