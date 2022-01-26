<?php
$hasil = $_POST['jumlah'];


?>
<?php
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
                    <td><?php echo $bayar;?></td>
                </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td>:</td>
                        <td>Rp. <?php echo $kembalian;?></td>
                    </tr>
                </table>
                
                <?php }
            if(isset($_POST['submit'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*15000;
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
                    <td><?php echo $bayar;?></td>
                </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td>:</td>
                        <td>Rp. <?php echo $kembalian;?></td>
                    </tr>
                </table>
                <?php }
            if(isset($_POST['ok'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*50000;
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
                    <td><?php echo $bayar;?></td>
                </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td>:</td>
                        <td>Rp. <?php echo $kembalian;?></td>
                    </tr>
                </table>
                <?php }
            if(isset($_POST['ya'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*5000;
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
                    <td><?php echo $bayar;?></td>
                </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td>:</td>
                        <td>Rp. <?php echo $kembalian;?></td>
                    </tr>
                </table>
                <?php }
            if(isset($_POST['goa'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*100000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >= 5) {
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
                    <td><?php echo $bayar;?></td>
                </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td>:</td>
                        <td>Rp. <?php echo $kembalian;?></td>
                    </tr>
                </table>
                <?php }
            if(isset($_POST['cafe'])){
                $pilih = $_POST['pilih'];
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                
                if($pilih == 1){
                    $total = $jumlah *30000;
                    if($jumlah >= 7){
                        $diskon1 = "15%";
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=4){
                        $diskon1 = "10%";
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=2){
                        $diskon1 = "5%";
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    }else{
                        $diskon1 = "0";
                        $totalakhir = $total;
                    }
                }else if($pilih == 2){
                    $total = $jumlah * 20000;
                    if($jumlah >= 7){
                        $diskon1 = "15%";
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=4){
                        $diskon1 = "10%";
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=2){
                        $diskon1 = "5%";
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    }else{
                        $diskon1 = "0";
                        $totalakhir = $total;
                    }
                }else if($pilih == 3){
                    $total = $jumlah * 20000;
                    if($jumlah >= 7){
                        $diskon1 = "15%";
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=4){
                        $diskon1 = "10%";
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=2){
                        $diskon1 = "5%";
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    }else{
                        $diskon1 = "0";
                        $totalakhir = $total;
                    }
                }else if($pilih == 4){
                    $total = $jumlah * 10000;
                    if($jumlah >= 7){
                        $diskon1 = "15%";
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=4){
                        $diskon1 = "10%";
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=2){
                        $diskon1 = "5%";
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    }else{
                        $diskon1 = "0";
                        $totalakhir = $total;
                    }
                }else if($pilih == 5){
                    $total = $jumlah *20000;
                    if($jumlah >= 7){
                        $diskon1 = "15%";
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=4){
                        $diskon1 = "10%";
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=2){
                        $diskon1 = "5%";
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    }else{
                        $diskon1 = "0";
                        $totalakhir = $total;
                    }
                }else if($pilih == 6){
                    $total = $jumlah * 10000;
                    if($jumlah >= 7){
                        $diskon1 = "15%";
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=4){
                        $diskon1 = "10%";
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    }else if($jumlah >=2){
                        $diskon1 = "5%";
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    }else{
                        $diskon1 = "0";
                        $totalakhir = $total;
                    }
                }
                $kembalian = $bayar - $totalakhir;
                ?>
          <hr>
          <table align="center">
              <tr>
                  <td>Total Bayar</td>
                  <td>:</td>
                  <td><?php echo $totalakhir;?></td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td><?php echo $diskon1;?></td>
                </tr>
                
                <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td><?php echo $bayar;?></td>
                </tr>
                <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td><?php echo $kembalian;?></td>
                </tr>
            </table>
            <?php }
          ?>