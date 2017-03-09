<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Mua-mua Shop</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php 
                    if (isset($_SESSION['iduser'])) 
                    {
                        $query = mysql_query("SELECT * FROM user WHERE iduser=$_SESSION[iduser] and type='super' ");
                        $d = mysql_fetch_array($query);
                    
                     ?>
                    <i class="fa fa-user"></i> <?php echo $d['nama']; ?><b class="caret"></b></a>
                    <?php } ?>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php?pos=user_profil&iduser=<?php echo $d[0]; ?>"><i class="fa fa-fw fa-user"></i> Profil</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Pengaturan</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?logout=1"><i class="fa fa-fw fa-power-off"></i> Keluar</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> </a>
                    </li>
                    <li>
                        <a href="index.php?pos=data_admin"><i class="fa fa-fw fa-bar-chart-o"></i> Data Admin</a>
                    </li>
                    <li>
                        <a href="index.php?pos=profil"><i class="fa fa-fw fa-table"></i> Profil</a>
                    </li>
                    <li>
                        <a href="index.php?pos=kategori_produk"><i class="fa fa-fw fa-table"></i> Kategori Produk</a>
                    </li>
                    <li>
                        <a href="index.php?pos=produk"><i class="fa fa-fw fa-desktop"></i> Produk</a>
                    </li>
                    <li>
                        <a href="index.php?pos=cara_order"><i class="fa fa-fw fa-wrench"></i> Cara Order</a>
                    </li>
                    
                    <li>
                        <a href="index.php?pos=daftar_order"><i class="fa fa-fw fa-file"></i> Transaksi</a>
                    </li>
                    <li>
                        <a href="index.php?pos=kota"><i class="fa fa-fw fa-dashboard"></i> Kota</a>
                    </li>
                    <li>
                        <a href="index.php?pos=kustomer"><i class="fa fa-fw fa-dashboard"></i> Kustomer</a>
                    </li>
                    <li>
                        <a href="index.php?pos=kategori_berita"><i class="fa fa-fw fa-dashboard"></i> Kategori Berita</a>
                    </li>
                    <li>
                        <a href="index.php?pos=berita"><i class="fa fa-fw fa-dashboard"></i> Berita</a>
                    </li>
                    <li>
                        <a href="laporan_data_member.php" target="_blank"><i class="fa fa-fw fa-dashboard"></i> Laporan Data Member</a>
                    </li>
                     <li>
                        <a href="laporan_stok_menipis.php" target="_blank"><i class="fa fa-fw fa-dashboard"></i> Laporan Data Stok Produk Menipis</a>
                    </li>
                    <li>
                        <a href="laporan_data_produk.php" target="_blank"><i class="fa fa-fw fa-dashboard"></i> Laporan Data Produk</a>
                    </li>
                     <li>
                        <a href="index.php?pos=filter_laporan_order" target="_blank"><i class="fa fa-fw fa-dashboard"></i> Laporan Data Transaksi</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>