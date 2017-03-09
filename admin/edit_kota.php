<?php 
$sql_be = mysql_fetch_array(mysql_query("SELECT * from kota where kota_id = '$_GET[kota_id]'"));

if (isset($_POST['edit_kota'])) 
{
        $sql_kota= mysql_query("UPDATE kota set nama_kota='$_POST[nama_kota]',ongkos_kirim='$_POST[ongkos_kirim]' 
            where kota_id='$_GET[kota_id]'");

        if ($sql_kota) 
        {
            echo "<script> alert(' Data berhasil diubah '); 
            location.href='index.php?pos=kota' </script>";exit;
        }    
}

?>


<div id="wrapper">

<?php include 'menu.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <h3 class="panel-title">Daftar Kota</h3>
            </div>
        <div class="panel-body">
            <form role="form" method="POST">
            <h4>Form Edit Kota</h4>

                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Nama Kota</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Nama Kota" type="text" id="focusedInput" 
                                        name="nama_kota" value="<?php echo $sql_be[1]; ?>">
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Ongkos Kirim</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Ongkos Kirim" type="text" id="focusedInput" 
                                        name="ongkos_kirim" value="<?php echo $sql_be[2]; ?>">
                                </div>
                            </div>
                            <br><br>
                            <div class="col-lg-12" align="center">
                            <button type="submit" class="btn btn-primary" name="edit_kota">Ubah</button>
                            </div>

            </form>
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>