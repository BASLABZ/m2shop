
<?php error_reporting(0); ?><script>
function harusangka(jumlah){
  var karakter = (jumlah.which) ? jumlah.which : event.keyCode
  if (karakter > 31 && (karakter < 48 || karakter > 57))
    return false;

  return true;
}
</script>
<?php include 'fungsi_rupiah.php'; ?>
<section id="cart_items">
    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Keranjang Belanja</li>
        </ol>
      </div>

      <div class="table-responsive cart_info">
      <?php
  $sid = session_id();
  $sql = mysql_query("SELECT * FROM orders_temp, produk 
                      WHERE id_session='$sid' AND 
                      orders_temp.id_produk=produk.id_produk");
    $ketemu=mysql_num_rows($sql);
    if($ketemu < 1){
    echo "<script>window.alert('Keranjang Belanjanya masih kosong. 
      Silahkan Anda berbelanja terlebih dahulu');
      window.location=('index.php?p=produk')</script>";
    }
    else{ 
    echo"<form method=post action=aksi.php?module=keranjang&act=update> ";
      ?> 
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="">No</td>
              <td class="image">Foto Produk</td>
                <td class="image">Nama Produk</td>
               <td class="price">Harga</td>
              <td class="quantity">Jumlah</td>
              <td class="total">Sub Total</td>
              <td>Aksi</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $no=1;
            while($r=mysql_fetch_array($sql)){
              $item = $r[jumlah];
              $jumlahitem=$jumlahitem+$item;
            $subtotal    = ($r[harga]) * $r[jumlah];
            $total       = $total + $subtotal;  
        
            $vat_rp      = format_rupiah($vat);
            $ttl_rp      = $total+$vat;
            $subtotal_rp = format_rupiah($subtotal);
            $total_rp    = format_rupiah($ttl_rp);
            $harga       = format_rupiah($r[harga]);
            ?>
            <tr>
            <td><?php echo "$no"; ?></td>
              <td class="cart_product">
                <a href="">
                  <?php echo "<img src='admin/images/$r[gambar]' widht='100' height='100'>"; ?>
                </a>
              </td>
              <td class="ca`rt_description">
                <h4><a href=""><?php echo "$r[nama_produk]"; ?></a></h4>
               
              </td>
              <td class="cart_price">

                <p>Rp.<?php echo $harga; ?></p>
              </td>
              <td class="cart_quantity">
                <div class="cart_quantity_button">
                 <!--  <a class="cart_quantity_up" href=""> + </a> -->
                 <?php
                 echo "<input type=text name='jml[$no]' value=$r[jumlah] size=1 onchange=\"this.form.submit()\" onkeypress=\"return harusangka(event)\"><br>";
                 echo "<input type=hidden name=id[$no] value=$r[id_orders_temp]>";
                ?><!-- 
                  <a class="cart_quantity_down" href=""> - </a>
                 --></div>
              </td>
              <td class="cart_total">
                <p class="cart_total_price">Rp.<? echo "$subtotal_rp"; ?></p>
              </td>
              <td class="cart_delete">
                
                <?php echo"<a href='aksi.php?module=keranjang&act=hapus&id=$r[id_orders_temp]'>
                <i class='fa fa-times'></i> Hapus</a>"; ?>
             
              </td>
            </tr>
            <?php $no++;}?>

          </tbody>
        </table>
        
        <hr>

        <div class="row">
         <div class="col-sm-6">
         <center>
            <a href="simpantransaksi.php" class="btn btn-primary">Check Out</a>
            <a href="?p=produk" class="btn btn-primary">Belanja Lagi</a>
         
          </center>
         </div>
        <div class="col-sm-6">
          <div class="total_area">
            <ul>
           
          <li>Jumlah Item <span><? echo "$jumlahitem Produk "; ?></span></li>
             
              <li>Total <span>Rp.<? echo "$total_rp"; ?></span></li>
            </ul>
             
          </div>
        </div>
        
      </div>
      
          <?php echo "</form>";} ?>
      </div>
    </div>
  </section>

  <!-- section yang kedua -->
  