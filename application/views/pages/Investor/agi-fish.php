<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Agivest | Dashboard</title>
        <!-- for Google -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Investasi cerdas berdampak sosial masyarakat."/>
        <meta name="keywords" content="agivest, agivest.com, agi-fish, agi-livestock, investasi, platform investasi, agivest Indonesia" />
        <meta name="author" content="Agivest Team" />
        <meta name="copyright" content="Agivest" />
        <meta name="application-name" content="agivest.com" />

        <!-- for Facebook -->
        <meta property="og:url" content="https://www.agivest.com/" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="agivest.com" />
        <meta property="og:description" content="Agivest a smart social investment, Investasi cerdas berdampak sosial masyarakat." />
        <meta property="og:image" content="https://www.agivest.com/asset/images/agivestLogo.png" />

        <!-- for Twitter -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Agivest" />
        <meta name="twitter:description" content="Agivest a smart social investment, Investasi cerdas berdampak sosial masyarakat." />
        <meta name="twitter:image" content="https://www.agivest.com/asset/images/agivestLogo.png" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-57x57.png"> 
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-60x60.png"> 
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-72x72.png"> 
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-76x76.png"> 
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-114x114.png"> 
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-120x120.png"> 
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-144x144.png"> 
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-152x152.png"> 
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-180x180.png"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon/favicon-32x32.png" sizes="32x32"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon/favicon-194x194.png" sizes="194x194"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon/favicon-96x96.png" sizes="96x96"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon/android-chrome-192x192.png" sizes="192x192"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon/favicon-16x16.png" sizes="16x16"> 

        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/datatables/dataTables.bootstrap.css">
        <!-- Morris charts -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/morris/morris.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/dist/css/skins/_all-skins.min.css">
        <!-- Google Analytics-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-82776023-1', 'auto');
          ga('send', 'pageview');

        </script>

        <!-- Chatra {literal} -->
        <script>
            (function(d, w, c) {
                w.ChatraID = 'yJRrSfAyeYptA8Em7';
                var s = d.createElement('script');
                w[c] = w[c] || function() {
                    (w[c].q = w[c].q || []).push(arguments);
                };
                s.async = true;
                s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:')
                        + '//call.chatra.io/chatra.js';
                if (d.head)
                    d.head.appendChild(s);
            })(document, window, 'Chatra');
        </script>
    </head>
    <body class="hold-transition skin-black-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo base_url();?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Agi</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Agi</b>vest</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(); ?>assets/images/person-flat.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $namaAdmin;?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url(); ?>assets/images/person-flat.png" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $namaAdmin;?>
                                            <small>Agivest</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-6 text-center">
                                                <a href="<?php echo site_url('Investor/agiFish'); ?>">Agi-Fish</a>
                                            </div>
                                            <div class="col-xs-6 text-center">
                                                <a href="<?php echo site_url('Investor/agiPet'); ?>">Agi-Pet</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('Login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="<?php echo site_url('Investor'); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="active treeview">
                            <a href="<?php echo site_url('Investor/agiFish'); ?>">
                                <i class="fa fa-anchor"></i> <span>Agi-Fish</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo site_url('Investor/agiPet'); ?>">
                                <i class="fa fa-paw"></i> <span>Agi-Pet</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small class="label label-danger">Investor Dashboard</small>
                        <button data-toggle="modal" data-target="#myModal" name="submit" id="submit" class="btn btn-info to-animate"><span class="fa fa-rocket"></span> Pilih Tambak</button>
                    </h1>

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agi-Fish</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <input type="hidden" name="pilihInvest" id="pilihInvest" value="<?php echo $pilihInvestasi2;?>">
                    <div class="row">
                        <div class="col-md-6">
                        <?php
                            if ($cek_ketTambak == "Y") {
                                foreach ($ketTambak->result() as $row) {
                            
                        ?>
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user-2">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-blue">
                                    <div class="widget-user-image">
                                        <img class="img-circle" src="<?php 
                                        if (empty($row->pictureProfile)) {
                                        ?>
                                            echo base_url();/assets/images/person-flat.png
                                        <?php
                                        }else{
                                            echo base_url(); echo $row->pictureProfile;
                                        }
                                        ?>" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username"><?php if (empty($row->name)){ echo "-";
                                        }else{echo $row->name;}?></h3>
                                    <h5 class="widget-user-desc">Penambak</h5>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li>
                                        <a href="#">Umur 
                                            <span class="pull-right">
                                            <?php 
                                            if (empty($penambak_umur)){
                                                echo "-";
                                            }else{
                                                echo $penambak_umur;
                                            }?>
                                            </span>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">Kolam 
                                            <span class="pull-right">
                                            <?php 
                                            if (empty($row->nameTambak)){ 
                                                echo "-";
                                            }else{
                                                echo $row->nameTambak;
                                            }
                                            ?>
                                            </span>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">Alamat 
                                        <span class="pull-right">
                                            <?php 
                                            if (empty($row->address)){ 
                                                echo "-";
                                            }else{
                                                echo $row->address;
                                            }
                                            ?>
                                        </span>
                                        </a>
                                        </li>
                                        <li style="height: auto;">
                                        <a href="#">Keterangan<br> 
                                            <span >
                                            <?php 
                                            if (empty($row->biodata)){ 
                                                echo "-";
                                            }else{
                                                echo $row->biodata;
                                            }
                                            ?>
                                                
                                            </span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        <?php
                                }
                            }else{?>
                                                        <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user-2">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-blue">
                                    <div class="widget-user-image">
                                        <img class="img-circle" src="<?php echo base_url();?>assets/images/person-flat.png" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username">-</h3>
                                    <h5 class="widget-user-desc">Penambak</h5>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li>
                                        <a href="#">Umur 
                                            <span class="pull-right">-
                                            </span>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">Kolam 
                                            <span class="pull-right">-
                                            </span>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">Alamat 
                                        <span class="pull-right">-
                                        </span>
                                        </a>
                                        </li>
                                        <li style="height: auto;">
                                        <a href="#">Keterangan 
                                            <span class="pull-right">-
                                            </span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        <?php
                            }
                        ?>

                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Kepemilikan Kolam</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body chart-responsive">
                                    <div class="box-body chart-responsive">
                                      <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                                      <p><b>Note:</b> Satuan dalam % </p>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-calendar-plus-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Periode</span>
                                    <span class="info-box-number"><?php 
                                        if ($cek_ketTambak == "N") {
                                            echo "-";
                                        }else{
                                            foreach ($ketTambak->result() as $row) {
                                                echo $row->progresTambak;
                                            }
                                        }
                                    ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sisa Uang</span>
                                    <span class="info-box-number">Rp. <?php
                                        if ($cek_uang == "N") {
                                            echo "-";
                                         }else{
                                            if (empty($uangSisa)) {
                                                echo "-";
                                            }else{
                                                echo number_format($uangSisa);
                                            }
                                         }
                                    ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-balance-scale"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Pakan (kg)</span>
                                    <span class="info-box-number">
                                    <?php 
                                        if ($cek_totalPakan == "N") {
                                            echo "-";
                                        }else{
                                            if ($totalPakan == "") {
                                                echo "-";
                                            }else{
                                            echo $totalPakan;
                                            }
                                        }
                                    ?>    
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="fa fa-anchor"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Ikan</span>
                                    <span class="info-box-number">
                                        <?php 
                                        if (empty($kondisi_ikan) == true) {
                                            echo "-";
                                        }else{
                                            if (empty($kondisi_ikan->result())) {
                                                echo "-";
                                            }else{
                                                foreach ($kondisi_ikan->result() as $row) {
                                                    echo $row->condition_ikan;
                                                }
                                            }
                                        }
                                        ?>   
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-balance-scale"></i> Laporan Pakan</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Pakan (Kg)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                if ($cek_pakan == "N") {
                                                    echo "<tr>";
                                                        echo "<td>-</td>";
                                                        echo "<td>-</td>";
                                                    echo "</tr>";
                                                }else{
                                                    if (!empty($pakan)) {
                                                        foreach ($pakan->result() as $row) {
                                                            echo "<tr>";
                                                                echo "<td>$row->tanggal_pakan</td>";
                                                                echo "<td>$row->jmlhKg_pakan</td>";
                                                            echo "</tr>";
                                                        }
                                                    }else{
                                                        echo "<tr>";
                                                            echo "<td>-</td>";
                                                            echo "<td>-</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-anchor"></i> Laporan Kondisi Tambak</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Ikan Mati (Ekor)</th>
                                                <th>Deskripsi</th>
                                                <th>Kondisi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                if ($cek_ikan == "N") {
                                                    echo "<tr>";
                                                        echo "<td>-</td>";
                                                        echo "<td>-</td>";
                                                        echo "<td>-</td>";
                                                        echo "<td>-</td>";
                                                    echo "</tr>";
                                                }else{
                                                    if (!empty($ikan)) {
                                                        foreach ($ikan->result() as $row) {?>
                                                        <tr>
                                                        <td><?php echo $row->date_ikan?></td>
                                                        <td><?php echo $row->dead_ikan?></td>
                                                        <td><?php echo $row->desc_ikan?></td>
                                                        <?php
                                                            if ($row->condition_ikan == "Excelent") {
                                                                echo "<td><span class='label label-success'> $row->condition_ikan</span></td>";
                                                            }elseif ($row->condition_ikan == "Good") {
                                                                echo "<td><span class='label label-info'> $row->condition_ikan</span></td>";
                                                            }elseif ($row->condition_ikan == "Bad") {
                                                                echo "<td><span class='label label-danger'> $row->condition_ikan</span></td>";
                                                            }else{
                                                                echo "<td><span class='label label-warning'> $row->condition_ikan</span></td>";
                                                            }
                                                        ?>
                                                        </tr>
                                                    <?php
                                                        }
                                                    }else{
                                                        echo "<tr>";
                                                            echo "<td>-</td>";
                                                            echo "<td>-</td>";
                                                            echo "<td>-</td>";
                                                            echo "<td>-</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-money"></i> Laporan Keuangan</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example3" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Sisa Uang</th>
                                                <th>Pengeluaran</th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if (empty($uang)) {
                                                    echo "<tr>";
                                                        echo "<td>-</td>";
                                                        echo "<td>-</td>";
                                                        echo "<td>-</td>";
                                                        echo "<td>-</td>";
                                                    echo "</tr>";
                                                }else{
                                                    foreach ($uang->result() as $row) {?>
                                                        <tr>
                                                            <td><?php echo $row->date_uang;?></td>
                                                            <td>Rp. <?php echo number_format($row->save_uang);?></td>
                                                            <td>Rp. <?php echo number_format($row->buy_uang);?></td>
                                                            <td><?php echo $row->desc_uang;?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Modal -->
            <?php
                if (!empty($pilihInvestasi) == true){?>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                    <h4 class="modal-title">Pilih Investasi</h4>
                            </div>
                            <div class="modal-body">
                                <table id="example3" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Tambak</th>
                                            <th>Pilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php $i=1;
                                    foreach ($pilihInvestasi->result() as $row) {?>
                                        <tr>
                                            <th><?php echo $i?></th>
                                            <th><?php echo $row->nameTambak?></th>
                                            <th><?php echo "<a href='http://localhost/agivest/Investor/agiFish1/$row->id_tambak' width='100%' class='btn btn-large btn-success'> Pilih </a>"?></th>
                                        </tr>
                                <?php
                                    $i++;
                                    }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer" >
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }else{?>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Opps.. Kamu belum berinvestasi</h4>
                            </div>
                            <div class="modal-body">
                                <p>Klik link dibawah ini untuk mulai berinvestasi</p>
                            </div>
                            <div class="modal-footer" >
                                <a width="100%" href="<?php echo site_url("AgiFishInvest");?>" type="button" class="btn btn-success" >Mulai berinvestasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            <footer class="main-footer">
                <strong>Copyright &copy; 2016 <a href="http://agivest.com">Agivest</a>.</strong> All rights
                reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>assets/adm/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adm/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/adm/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/adm/dist/js/demo.js"></script>
        <!-- Moris -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adm/plugins/morris/morris.min.js"></script>
        <!-- page script -->
        <script>         
            $(document).ready(function(){
                //DONUT CHART
                var donut = new Morris.Donut({
                    element: 'sales-chart',
                    resize: true,
                    data: <?php echo $chart_data;?>,
                    hideHover: 'auto'
                });

            });

            $(window).on('load',function(){
                if ($('#pilihInvest').val() == "Y"){
                    $('#myModal').modal('show');
                }
            });

            $('myData').DataTable();

            $(function() {
                $('#example1').DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#example3').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
