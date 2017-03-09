<style type="text/css">
  h3{
    color: white;
  }
</style>
<?php include 'menu.php'; ?>
<div class="row">
        <div class="col-lg-12">
          <h3 align="center">Filter Laporan Transaksi</h3>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
     
        <form role="form"  action="laporan_order.php" method="post" name="form1" target="_blank">
        <div class="col-sm-4">
          <div class="form-group">
                      <label for="exampleInputEmail1">Periode 1 : </label>
                      <input type="date" name="periode1" class="form-control" value="<?php echo date('Y-m-d'); ?>">
          </div>
        </div>
        <div class="col-sm-4">
           <div class="form-group">
                      <label for="exampleInputEmail1">Periode 2 :</label>
                      <input type="date" name="periode2" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                        <button type="submit" name="cetak" class="btn btn-primary">Cetak</button>

        
        </form>
          </div>
          
       

     
 

                    

                    




