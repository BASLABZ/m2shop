<?php 
$sql_be = mysql_fetch_array((mysql_query("SELECT * from kategori_produk where katpro_id = 
    '$_GET[katpro_id]'"))) ;

if (isset($_POST['edit_kategori_produk'])) 
{
        $sql_katpro= mysql_query("UPDATE kategori_produk set kat_nm='$_POST[kat_nm]' where katpro_id=
            '$_GET[katpro_id]'");

        if ($sql_katpro) 
        {
            echo "<script> alert(' Data berhasil diubah '); location.href='index.php?pos=kategori_produk' </script>";exit;        # code...
            }    # code...
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
            <h3 class="panel-title">Daftar Kategori Produk</h3>
            </div>
        <div class="panel-body">
            <form role="form" method="POST">
            <h4>Form Kategori Produk</h4>

                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Nama Kategori</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Nama Kategori Produk" type="text" id="focusedInput" 
                                        name="kat_nm" value="<?php echo $sql_be[1]; ?>">
                                </div>
                            </div>
                            <br><br>
                            <div class="col-lg-12" align="center">
                            <button type="submit" class="btn btn-primary" name="edit_kategori_produk">Ubah</button>                     
                            </div>

            </form>
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>