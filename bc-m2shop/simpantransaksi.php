<?php session_start();
include'fungsi_rupiah.php';
include'admin/koneksi.php';
error_reporting(0);
 ?>
 <body onload="window.print()">
<hr/>
      <div role="main" class="container checkout">
        <div class="row">
          <div class="span9 checkout-list">
            <ol class="rr">
              <li class="current">
              <h5 align="center"> 
              <p><img src="admin/gambar/logo.jpg" ></p>
                <p>Mua-mua Shop<hr></p> 
                <p>
               Jl. Magelang km 13 Sleman Yogyakarta 55513
                <br>
                Telp: 0857 - 434 - 00 - 656 (Ana) / 0857 - 434 - 566 - 911 (Budiharti) <br>
                Email: muamuashop@yahoo.com <hr></p>
              </h5>
                <h6>Checkout</h6>
                <div class="row">
                  <div class="span9 content-wrapper clearfix">
                   
                     <?php
            $username = $_SESSION['username'];
            $password = $_POST['password'];
            
            
            //$sql = "SELECT * FROM kustomer WHERE email='$email' AND password='$password'";
          /*  $sql = "SELECT * FROM kustomer WHERE username='$_SESSION[username]'";*/
          $sql = "SELECT k.id_kustomer,k.username,k.password,
                  k.nama_lengkap,k.alamat,k.password,k.email,k.telpon,
                  ko.nama_kota,ko.ongkos_kirim 
                  from kustomer k 
                  inner join kota ko
                  on k.id_kota = ko.kota_id 
                  where k.username='$_SESSION[username]'";
            $hasil = mysql_query($sql);
            $r = mysql_fetch_array($hasil);
            
            if(mysql_num_rows($hasil) == 0){
              echo "<script>alert('Email atau password anda salah, atau anda belum login'); 
              window.location = 'index.php?p=login'</script>";
            }
            else{
            // fungsi untuk mendapatkan isi keranjang belanja
            function isi_keranjang(){
              $isikeranjang = array();
              $sid = session_id();
              $sql = mysql_query("SELECT * FROM orders_temp WHERE id_session='$sid'");
              
              while ($r=mysql_fetch_array($sql)) {
                $isikeranjang[] = $r;
              }
              return $isikeranjang;
            }
            
            $tgl_skrg = date("Ymd");
            $jam_skrg = date("H:i:s");
            
            $id = mysql_fetch_array(mysql_query("SELECT k.id_kustomer,k.username,k.password,
                  k.nama_lengkap,k.alamat,k.password,k.email,k.telpon,
                  ko.nama_kota,ko.ongkos_kirim 
                  from kustomer k 
                  inner join kota ko
                  on k.id_kota = ko.kota_id 
                  where k.username='$username'"));
            
            // mendapatkan nomor kustomer
            $id_kustomer=$id['id_kustomer'];
            
            // simpan data pemesanan 
            mysql_query("INSERT INTO orders(tgl_order,jam_order,id_kustomer) VALUES('$tgl_skrg','$jam_skrg','$id_kustomer')");
            
              
            // mendapatkan nomor orders
            $id_orders=mysql_insert_id();
            
            // panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
            $isikeranjang = isi_keranjang();
            $jml          = count($isikeranjang);
            
            // simpan data detail pemesanan  
            for ($i = 0; $i < $jml; $i++){
              mysql_query("INSERT INTO orders_detail(id_orders, id_produk, jumlah) 
                     VALUES('$id_orders',{$isikeranjang[$i]['id_produk']}, {$isikeranjang[$i]['jumlah']})");
            }
            //update/kurangi stok produk
            for ($i = 0; $i < $jml; $i++) {
             mysql_query("UPDATE produk SET stok = stok - {$isikeranjang[$i]['jumlah']}
                           WHERE id_produk = {$isikeranjang[$i]['id_produk']}");
            }
              
            // setelah data pemesanan tersimpan, hapus data pemesanan di tabel pemesanan sementara (orders_temp)
            for ($i = 0; $i < $jml; $i++) {
              mysql_query("DELETE FROM orders_temp
                     WHERE id_orders_temp = {$isikeranjang[$i]['id_orders_temp']}");
            }
            
              echo " Data pemesan beserta ordernya adalah sebagai berikut: <br />
                <table border=0>
                <tr><td>Nama Lengkap   </td><td> : <b>$r[nama_lengkap]</b> </td></tr>
                <tr><td>Alamat Lengkap </td><td> : $r[alamat] </td></tr>
                <tr><td>Telpon         </td><td> : $r[telpon] </td></tr>
                <tr><td>E-mail         </td><td> : $r[email] </td></tr></table><hr /><br />
             
                
                Nomor Order: <b>$id_orders</b><br /><br />";
            
                $daftarproduk=mysql_query("SELECT * FROM orders_detail,produk 
                             WHERE orders_detail.id_produk=produk.id_produk 
                             AND id_orders='$id_orders'");
            
            echo "<table cellpadding=10 border=1>
                <tr bgcolor=#ccc><th>No</th><th>Nama Produk</th><th>Qty</th><th>Harga Satuan</th><th>Sub Total</th></tr>";
                
            $pesan="Terimakasih telah melakukan pemesanan online di toko online kami <br /><br />  
                Nama: $r[nama_lengkap] <br />
                Alamat: $r[alamat] <br/>
                Telpon: $r[telpon] <br />
                Telpon: $r[nama_kota] <br />
                Telpon: $r[ongkos_kirim] <br />
                
                
                Nomor Order: $id_orders <br />
                Data order Anda adalah sebagai berikut: <br /><br />";
                
            $no=1;
            while ($d=mysql_fetch_array($daftarproduk)){
               //$disc        = ($d[diskon]/100)*$d[harga];
               $harga   = number_format(($d[harga]),0,",","."); 
               $subtotal    = ($d[harga]) * $d[jumlah];
            
              // $subtotalberat = $d[berat] * $d[jumlah]; // total berat per item produk 
              // $totalberat  = $totalberat + $subtotalberat; // grand total berat all produk yang dibeli
            
               $total       = $total + $subtotal;
               $subtotal_rp = format_rupiah($subtotal);    
               $total_rp    = format_rupiah($total);    
               $harga       = format_rupiah($d[harga]);
            
               echo "<tr bgcolor=#fff>
                        <td>$no</td>
                        <td>$d[nama_produk]</td>
                        <td align=center>$d[jumlah]</td>
                        <td align=right>$harga</td>
                        <td align=right>$subtotal_rp</td>
                    </tr>";
            
               $pesan.="$d[jumlah] $d[nama_produk] -> Rp. $harga -> Subtotal: Rp. $subtotal_rp <br />";
               $no++;
            }
            
            $kota=$r[id_kota];
            $ongkos1 = $r[ongkos_kirim];
            $ongkos_rp = format_rupiah($ongkos1);
            $ongkos=mysql_fetch_array(mysql_query("SELECT ongkos_kirim FROM kota WHERE kota_id='$kota'"));
            $ongkoskirim1=$ongkos[ongkos_kirim];
           // $ongkoskirim = $ongkoskirim1 * $totalberat;
            
            $grandtotal    = $total + $ongkos1; 
            
            //$ongkoskirim_rp = format_rupiah($ongkoskirim1);
            $ongkoskirim1_rp = format_rupiah($ongkoskirim1); 
            $grandtotal_rp  = format_rupiah($grandtotal);  
            
            // dapatkan email_pengelola dan nomor rekening dari database
            $sql2 = mysql_query("select email_pengelola,nomor_rekening,nomor_hp from modul where id_modul='43'");
            $j2   = mysql_fetch_array($sql2);
            
            $pesan.="<br /><br />Total : Rp. $total_rp 
                 <br />Ongkos Kirim untuk Tujuan Kota Anda : Rp. $ongkoskirim1
          
                 <br />Total Ongkos Kirim  : Rp. $ongkoskirim_rp     
                 <br />Grand Total : Rp. $grandtotal_rp 
                 <br /><br />Silahkan lakukan pembayaran sebanyak Grand Total yang tercantum, rekeningnya: $j2[nomor_rekening]
                 <br />Apabila sudah transfer, konfirmasi ke nomor: $j2[nomor_hp]";
            
            $subjek="Pemesanan Online";
            
            // Kirim email dalam format HTML
            $dari = "From: $j2[email_pengelola]\r\n";
            $dari .= "Content-type: text/html\r\n";
            
            // Kirim email ke kustomer
            mail($email,$subjek,$pesan,$dari);
            
            // Kirim email ke pengelola toko online
            mail("$j2[email_pengelola]",$subjek,$pesan,$dari);
            echo "$ongkoskirim1";
            echo "<tr><td colspan=5 align=right>Total : Rp. </td><td align=right><b>$total_rp</b></td></tr>
                <tr><td colspan=5 align=right>Ongkos Kirim untuk Tujuan Kota Anda: </td><td align=right><b>$ongkos_rp</b>/Kg</td></tr>      
               
                      
                <tr><td colspan=5 align=right>Grand Total : Rp. </td><td align=right><b>$grandtotal_rp</b></td></tr>
                </table>";
            echo " <p>
                  Nomor rekening transfer Akan Dikirim ke no telepon Anda. <br>
                  Apabila Anda tidak melakukan pembayaran dalam waktu 1x24 jam , maka transaksi dianggap batal.<br>
                  konfirmasi pembayaran dengan format: <b>ketik nama lengkap_no.order_sudah transfer</b> kirim ke <b>0857-434-00-656</b><br>
                  contoh: <b>ahmad bastiar_8_sudah transfer</b> kirim ke <b>0857-434-00-656</b>

                  </p>";  
            }   
            /*<tr><td colspan=5 align=right>Total Ongkos Kirim : Rp. </td><td align=right><b>$ongkoskirim_rp</b></td></tr>
            */            
            ?>
                   
                   
                  </div>                      
                </div>
              </li>
            </ol>
          </div>
        
        </div>
      </div>    
      </body>
     
   