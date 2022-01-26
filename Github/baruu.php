<?php
$haddad = $_POST['destinasi'];

?>
<form action="lawan2.php" method="POST">

    <?php
            if(isset($_POST['proses'])){
                $destinasi=$_POST['destinasi'];
                if($destinasi == "1"){
                    ?>

<h2 align="center">Bukit Bintang</h2>
<table align="center">
    <tr>
        <td>Tempat</td>
        <td>:</td>
        <td>Bukit Bintang</td>
    </tr>
    <tr>
        <td>Harga Tiket/Orang</td>
        <td>:</td>
        <td>Rp. 10.000</td>
    </tr>
    <tr>
        <td>Jumlah Tiket</td>
        <td>:</td>
        <td><input type="number" name="jumlah"></td>
    </tr>
    <tr>
        <td>Bayar</td>
        <td>:</td>
        <td><input type="number" name="bayar"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="kirim" value="OK"></td>
    </tr>
</table>

<?php }elseif($destinasi == "2"){ ?>
    <h2 align="center">Pantai Sadrana</h2>
    <table align="center">
        <tr>
            <td>Tempat</td>
            <td>:</td>
            <td>Pantai Sadrana</td>
        </tr>
        <tr>
            <td>Harga Tiket/Orang</td>
            <td>:</td>
            <td>Rp. 15.000</td>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                        <td>Bayar</td>
                        <td>:</td>
                        <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="submit" value="OK"></td>
                    </tr>
                </table>
                
                <?php }elseif($destinasi == "3"){ ?>
                    <h2 align="center">Candi Borobudur</h2>
                    <table align="center">
                        <tr>
                            <td>Tempat</td>
                            <td>:</td>
                            <td>Candi Borobudur</td>
                        </tr>
                        <tr>
                            <td>Harga Tiket/Orang</td>
                            <td>:</td>
                            <td>Rp. 50.000</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tiket</td>
                            <td>:</td>
                            <td><input type="number" name="jumlah"></td>
                        </tr>
                        <tr>
                            <td>Bayar</td>
                            <td>:</td>
                            <td><input type="number" name="bayar"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="ok" value="OK"></td>
                        </tr>
                    </table>
                    
                    <?php }elseif($destinasi == "4"){ ?>
                        <h2 align="center">Candi Prambanan</h2>
                        <table align="center">
                            <tr>
                                <td>Tempat</td>
                                <td>:</td>
                                <td>Candi Prambanan</td>
                            </tr>
                            <tr>
                                <td>Harga Tiket/Orang</td>
                                <td>:</td>
                                <td>Rp. 50.000</td>
                            </tr>
                            <tr>
                                <td>Jumlah Tiket</td>
                                <td>:</td>
                                <td><input type="number" name="jumlah"></td>
                            </tr>
                            <tr>
                                <td>Bayar</td>
                                <td>:</td>
                                <td><input type="number" name="bayar"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" name="ok" value="OK"></td>
                            </tr>
                        </table>
                        
                        <?php }elseif($destinasi == "5"){ ?>
                            <h2 align="center">Keraton Yogyakarta</h2>
                            <table align="center">
                                <tr>
                                    <td>Tempat</td>
                                    <td>:</td>
                                    <td>Keraton Yogyakarta</td>
                                </tr>
                                <tr>
                                    <td>Harga Tiket/Orang</td>
                                    <td>:</td>
                                    <td>Rp. 15.000</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Tiket</td>
                                    <td>:</td>
                                    <td><input type="number" name="jumlah"></td>
                                </tr>
                                <tr>
                                    <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="ya" value="OK"></td>
                    </tr>
                </table>
                
                <?php }elseif($destinasi == "6"){ ?>
                    <h2 align="center">Malioboro</h2>
                    <table align="center">
                        <tr>
                            <td>Tempat</td>
                            <td>:</td>
                            <td>Malioboro</td>
                        </tr>
                        <tr>
                            <td>Harga Tiket/Orang</td>
                            <td>:</td>
                            <td>Rp. 5.000</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tiket</td>
                            <td>:</td>
                            <td><input type="number" name="jumlah"></td>
                        </tr>
                        <tr>
                            <td>Bayar</td>
                            <td>:</td>
                            <td><input type="number" name="bayar"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="ya" value="OK"></td>
                        </tr>
                    </table>
                    
                    <?php }elseif($destinasi == "7"){ ?>
                        <h2 align="center">Cafe Pendopo Lawas </h2>
                        <h3 align="center">Pilih Menu</h3>
                        <table align="center" cellpadding="6">
                            <tr>
                                <th colspan="2">MENU</th>
                            </tr>
                            <tr>
                                <th>Makanan</th>
                                <th>Harga</th>
                            </tr>
                            <tr>
                                <td>Singkong Keju</td>
                                <td>Rp. 30.000</td>
                            </tr>
                            <tr>
                                <td>Rujak cireng</td>
                                <td>Rp. 20.000</td>
                            </tr>
                            <tr>
                                <td>Karedok basreng</td>
                                <td>Rp. 20.000</td>
                            </tr>
                            <tr>
                                <th>Minuman</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                        <td>KOPI expreso</td>
                        <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                        <td>Susu kambing</td>
                        <td>Rp. 20.000</td>
                    </tr>
                    <tr>
                        <td>Cendol dawet</td> 
                        <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <center>
                    <div  class="cafe">
                        <select name="pilih">
                            <option selected> Pilih Menu </option>
                            <option value="1">Singkong Keju</option>
                            <option value="2">Rujak cireng</option>
                            <option value="3">Karedok basreng</option>
                            <option value="4">KOPI expreso</option>
                            <option value="5">Susu kambing</option>
                            <option value="6">Cendol dawet</option>
                        </select>
                        
                        <input type="number" name="jumlah" placeholder="Pesan berapa">
                     <input type="number" name="bayar" placeholder="Bayar">
                     <input type="submit" name="cafe" value="OK">
                     
                    </center>
                </div>
                <?php }elseif($destinasi == "8"){ ?>
                    <h2 align="center">Goa Pindul</h2>
                    <table align="center">
                        <tr>
                            <td>Tempat</td>
                            <td>:</td>
                            <td>Goa Pindul</td>
                        </tr>
                        <tr>
                            <td>Harga Tiket/Orang</td>
                            <td>:</td>
                            <td>Rp. 100.000</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tiket</td>
                            <td>:</td>
                            <td><input type="number" name="jumlah"></td>
                        </tr>
                        <tr>
                            <td>Bayar</td>
                            <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="goa" value="OK"></td>
                    </tr>
                </table>
                
                <?php }
            }
            if(isset($_POST['kirim'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*10000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                ?> 
                <br>
                <table align="center">
                    <tr>
                        <td>Total Bayar</td>
                        <td>:</td>
                        <td>Rp. <?php echo $totalakhir;?></td>
                    </tr>
                    <tr>
                        <td>Diskon</td>
                        <td>:</td>
                        <td>Rp. <?php echo $diskon;?></td>
                    </tr>
                    <tr>
                        <td>Uang Pembayaran</td>
                        <td>:</td>
                        <td>Rp. <?php echo $bayar;?></td>
                    </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td>:</td>
                        <td>Rp. <?php echo $kembalian;?></td>
                    </tr>
                </table>
                
                <?php }
            ?>
          </form>