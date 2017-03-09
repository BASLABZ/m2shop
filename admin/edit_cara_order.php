<?php 
$sql_be=mysql_fetch_array(mysql_query("SELECT * FROM caraorder where idcara='$_GET[idcara]'"));

if (isset($_POST['edit_cara_order'])) 
{
    $sql_cara= mysql_query("UPDATE caraorder set judul='$_POST[judul]',deskripsi='$_POST[deskripsi]' where idcara='$_GET[idcara]'");

    if ($sql_cara) 
    {
        echo "<script> alert(' Data berhasil diubah '); 
        location.href='index.php?pos=cara_order' </script>";exit;
      
    }
}

 ?>
<div id="wrapper">
 <?php include 'menu.php' ?>

 <div id="page-wrapper">   

<div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <h3 class="panel-title">Data Cara Order</h3>
            </div>
        <div class="panel-body">
            <form role="form" method="POST">
            <h4>Form Input Data Cara Order</h4>

                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label>Judul</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Judul Cara Order" type="text" name="judul" value="<?php echo $sql_be[1]; ?>">
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label>Deskripsi</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <textarea class="form-control" rows="6" placeholder="Deskripsi Cara Order" name="deskripsi" >
                                <?php echo $sql_be[2]; ?>
                                </textarea>
                                </div>
                            </div>  
                             <div><br><br></div>                         
                            <div class="form-group">
                            <div class="col-lg-12" align="center">
                            <button type="submit" class="btn btn-primary" name="edit_cara_order">Ubah</button>                     
                            </div>
                            </div>

            </form>
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>