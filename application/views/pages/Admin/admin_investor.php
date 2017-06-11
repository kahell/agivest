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
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/iCheck/flat/blue.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('Login/logoutAdmin'); ?>" class="btn btn-default btn-flat">Sign out</a>
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
                            <a href="<?php echo site_url('HelfiAdm'); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="active treeview">
                            <a href="<?php echo site_url('HelfiAdm/Investor'); ?>">
                                <i class="ion ion-person-add"></i> <span>Investor</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo site_url('HelfiAdm/Penambak'); ?>">
                                <i class="fa fa-users"></i> <span>Penambak</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo site_url('HelfiAdm/Tambak'); ?>">
                                <i class="fa fa-anchor"></i> <span>Tambak</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo site_url('HelfiAdm/Kandang'); ?>">
                                <i class="fa fa-leaf"></i> <span>Kandang</span>
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
                        <small class="label label-danger">Admin Dashboard</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><i class="ion ion-person-add"></i> <span>Investor</span>
                        </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- User Box -->
                        <div class="col-lg-12 col-xs-12">
                            <div class="box box-danger" >
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-money"></i> Investasi</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body" id="items_invest">
                                    <table id="dataUser" class="table table-bordered table-hover" >
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Status</th>
                                                <th>Username</th>
                                                <th>Order</th>
                                                <th>Expired</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($Investasi->result() as $row) {?>
                                                <tr>
                                                    <td><?php echo $row->id_invest?>
                                                    </td>
                                                    <td>
                                                    <?php
                                                        if ($row->statusInvest == 'A') {?>
                                                            <span class="label label-success">Lunas</span>
                                                    <?php
                                                        }else{?>
                                                            <span class="label label-danger">Belum Dibayar</span>
                                                    <?php
                                                        }
                                                    ?>
                                                    </td>
                                                    <td><?php echo $row->username?></td>
                                                    <td><?php echo $row->ordered?></td>
                                                    <td><?php echo $row->expired?></td>
                                                    <td><?php echo number_format($row->money)?></td>
                                                    <td>
                                                        <a id="btnEdit_Investasi" data-toggle="modal" data-target="#myModal" class="btn btn-info btnEdit_Investasi" href="#" ><i class="fa fa-edit"></i>
                                                        <input type="hidden" name="id_invest" id="id_invest" value="<?php echo $row->id_invest?>">
                                                        <input type="hidden" name="id_identitas" id="id_identitas" value="<?php echo $row->id_identitas?>">
                                                        </a>
                                                        <a class="btn btn-danger" href="<?php echo base_url("HelfiAdm/delete_Investasi/$row->id_invest");?>" ><i class="fa fa-close"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <!-- End of User Box -->
                        <!-- User Box -->
                        <div class="col-lg-12 col-xs-12">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-user"></i> Investor</h3>
                                    <a id="btnTambah_Investor" data-toggle="modal" data-target="#myModal" class="btn btn-info btnTambah_Investor" href="#" ><i class="fa fa-rocket"></i> Tambah Investor</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="dataInvestor" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Status</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($Investor->result() as $row) {?>
                                                <tr>
                                                    <td><?php echo $row->id_identitas?>
                                                    </td>
                                                    <td>
                                                    <?php
                                                        if ($row->activeStatus == 'A') {?>
                                                            <span class="label label-success">Aktif</span>
                                                    <?php
                                                        }else{?>
                                                            <span class="label label-danger">Belum Aktif</span>
                                                    <?php
                                                        }
                                                    ?>
                                                    </td>
                                                    <td><?php echo $row->username?>
                                                    </td>
                                                    <td><?php echo $row->email?></td>
                                                    <td>
                                                        <a id="btnEdit_Investor" data-toggle="modal" data-target="#myModal" class="btn btn-info btnEdit_Investor" href="#" ><i class="fa fa-edit"></i>
                                                            <input type="hidden" name="id_identitas" id="id_identitas" value="<?php echo $row->id_identitas?>">
                                                            <input type="hidden" name="name" id="name" value="<?php echo $row->name?>">
                                                            <input type="hidden" name="birthday" id="birthday" value="<?php echo $row->birthday?>">
                                                            <input type="hidden" name="biodata" id="biodata" value="<?php echo $row->biodata?>">
                                                            <input type="hidden" name="gender" id="gender" value="<?php echo $row->gender?>">
                                                            <input type="hidden" name="province" id="province" value="<?php echo $row->province?>">
                                                            <input type="hidden" name="region" id="region" value="<?php echo $row->region?>">
                                                            <input type="hidden" name="address" id="address" value="<?php echo $row->address?>">
                                                            <input type="hidden" name="telephone" id="telephone" value="<?php echo $row->telephone?>">
                                                            <input type="hidden" name="activeStatus2" id="activeStatus2" value="<?php echo $row->activeStatus?>">
                                                        </a>
                                                        <a class="btn btn-danger" href="<?php echo base_url("HelfiAdm/delete_Investor/$row->id_identitas");?>" ><i class="fa fa-close"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <!-- End of User Box -->
                    </div>
                    <!-- /.row -->
                </section>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" id="title">Tittle</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <!-- Investasi -->
                                    <label id="lstatus_Investasi">Status Investasi</label>
                                    <select id="status_Investasi" class="form-control">
                                        <option value="A">Lunas</option>
                                        <option value="N">Belum di Bayar</option>
                                    </select>

                                    <!-- Investor -->
                                    <label id="lusername_Investor">Username</label>
                                    <input type="username" id="username_Investor" class="form-control" placeholder="Masukan Username" value="">
                                    <label id="lpass_Investor">Password</label>
                                    <input type="password" id="pass_Investor" class="form-control" placeholder="Masukan Password" value="">
                                    <label id="lemail_Investor">Email</label>
                                    <input type="email" id="email_Investor" class="form-control" placeholder="ex: helfi@gmail.com" value="">
                                    <label id="lstatusUser_Investor">Status User</label>
                                    <select id="statusUser_Investor" class="form-control">
                                        <option value="0">Investor</option>
                                        <option value="1">Penambak</option>
                                        <option value="2">Admin</option>
                                    </select>
                                    <label id="lactiveStatus_Investor">Aktif Status</label>
                                    <select id="activeStatus_Investor" class="form-control">
                                        <option value="A">Aktif</option>
                                        <option value="N">Tidak Aktif</option>
                                    </select>
                                    <label id="lname_Investor">Nama</label>
                                    <input type="text" id="name_Investor" class="form-control" placeholder="Masukan Nama" value="">
                                    <label id="lbirthday_Investor">Tanggal Lahir</label>
                                    <input type="date" id="birthday_Investor" class="form-control" placeholder="Masukan username" value="">
                                    <label id="lbiodata_Investor">Biodata</label>
                                    <textarea style="height: 200px;" placeholder="Deskripsi Biodata" id="biodata_Investor" class="form-control"></textarea>
                                    <label id="lgender_Investor">Jenis Kelamin</label>
                                    <select id="gender_Investor" class="form-control">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <label id="lprovince_Investor">Provinsi</label>
                                    <input type="text" id="province_Investor" class="form-control" placeholder="Masukan Provinsi" value="">
                                    <label id="lregion_Investor">Kota</label>
                                    <input type="text" id="region_Investor" class="form-control" placeholder="Masukan Kota" value="">
                                    <label id="laddress_Investor">Alamat</label>
                                    <input type="text" id="address_Investor" class="form-control" placeholder="Masukan Alamat" value="">
                                    <label id="ltelephone_Investor">Nomor Telphone</label>
                                    <input type="text" id="telephone_Investor" class="form-control" placeholder="08387376XXXX" value="">

                                    <!-- Input Hidden-->
                                    <input type="hidden" id="what" class="form-control" value="">
                                    <input type="hidden" id="modalId_identitas" class="form-control" value="">
                                    <input type="hidden" id="modalId_invest" class="form-control" value="">   
                                </div>
                            </div>
                            <div class="modal-footer" >
                                <a href="#" id="delete" data-dismiss="modal" style="display: none" class="btn btn-flat btn-warning">Delete</a>
                                <a href="#" id="saveChange" data-dismiss="modal" style="display: none" class="btn btn-flat btn-primary">Update</a>
                                <a href="#" id="addButton" data-dismiss="modal" style="display: none" class="btn btn-flat btn-primary">Tambah</a>
                                <a href="#" id="cancelButton" data-dismiss="modal" class="btn btn-flat btn-default">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2016 <a href="http://agivest.com">Agivest</a>.</strong> All rights
                reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>assets/adm/bootstrap/js/bootstrap.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adm/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adm/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/adm/dist/js/app.min.js"></script>
         <!-- DataTables -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adm/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                //Investasi
                $('.btnEdit_Investasi').each(function(){
                    $(this).click(function(event){
                        var id = $(this).find('#id_invest').val();
                        var id_identitas = $(this).find('#id_identitas').val();
                        console.log(id);
                        console.log(id_identitas);
                        $('#what').val("investasi");
                        $('#title').text('Edit Investasi');
                        $('#modalId_invest').val(id);
                        $('#modalId_identitas').val(id_identitas);
                        $('#delete').hide('400');
                        $('#saveChange').show('400');
                        $('#addButton').hide('400');
                        //Input Investasi
                        $('#lstatus_Investasi').show('400');
                        $('#status_Investasi').show('400');
                        //input Investor 
                        $('#lname_Investor').hide('400');
                        $('#name_Investor').hide('400');
                        $('#lbirthday_Investor').hide('400');
                        $('#birthday_Investor').hide('400');
                        $('#lbiodata_Investor').hide('400');
                        $('#biodata_Investor').hide('400');
                        $('#lgender_Investor').hide('400');
                        $('#gender_Investor').hide('400');
                        $('#lprovince_Investor').hide('400');
                        $('#province_Investor').hide('400');
                        $('#lregion_Investor').hide('400');
                        $('#region_Investor').hide('400');
                        $('#laddress_Investor').hide('400');
                        $('#address_Investor').hide('400');
                        $('#ltelephone_Investor').hide('400');
                        $('#telephone_Investor').hide('400');
                        $('#lusername_Investor').hide('400');
                        $('#username_Investor').hide('400');
                        $('#lpass_Investor').hide('400');
                        $('#pass_Investor').hide('400');
                        $('#lemail_Investor').hide('400');
                        $('#email_Investor').hide('400');
                        $('#lstatusUser_Investor').hide('400');
                        $('#statusUser_Investor').hide('400');
                        $('#lactiveStatus_Investor').hide('400');
                        $('#activeStatus_Investor').hide('400');
                    });
                });

                //Investor
                $('.btnEdit_Investor').each(function(){
                    $(this).click(function(event){
                        var id_identitas = $(this).find('#id_identitas').val();
                        var name = $(this).find('#name').val();
                        var birthday = $(this).find('#birthday').val();
                        var biodata = $(this).find('#biodata').val();
                        var gender = $(this).find('#gender').val();
                        var province = $(this).find('#province').val();
                        var region = $(this).find('#region').val();
                        var address = $(this).find('#address').val();
                        var telephone = $(this).find('#telephone').val();
                        var activeStatus = $(this).find('#activeStatus2').val();
                        console.log(id_identitas);
                        $('#what').val("investor");
                        $('#title').text('Edit Investor');
                        $('#modalId_identitas').val(id_identitas);
                        $('#delete').hide('400');
                        $('#saveChange').show('400');
                        $('#addButton').hide('400');
                        //Input Investasi
                        $('#lstatus_Investasi').hide('400');
                        $('#status_Investasi').hide('400');
                        //input Investor 
                        $('#lname_Investor').show('400');
                        $('#name_Investor').show('400');
                        $('#name_Investor').val(name);
                        $('#lbirthday_Investor').show('400');
                        $('#birthday_Investor').show('400');
                        $('#birthday_Investor').val(birthday);
                        $('#lbiodata_Investor').show('400');
                        $('#biodata_Investor').show('400');
                        $('#biodata_Investor').val(biodata);
                        $('#lgender_Investor').show('400');
                        $('#gender_Investor').show('400');
                        $('#gender_Investor').val(gender);
                        $('#lprovince_Investor').show('400');
                        $('#province_Investor').show('400');
                        $('#province_Investor').val(province);
                        $('#lregion_Investor').show('400');
                        $('#region_Investor').show('400');
                        $('#region_Investor').val(region);
                        $('#laddress_Investor').show('400');
                        $('#address_Investor').show('400');
                        $('#address_Investor').val(address);
                        $('#ltelephone_Investor').show('400');
                        $('#telephone_Investor').show('400');
                        $('#telephone_Investor').val(telephone);
                        $('#lusername_Investor').hide('400');
                        $('#username_Investor').hide('400');
                        $('#lpass_Investor').hide('400');
                        $('#pass_Investor').hide('400');
                        $('#lemail_Investor').hide('400');
                        $('#email_Investor').hide('400');
                        $('#lstatusUser_Investor').hide('400');
                        $('#statusUser_Investor').hide('400');
                        $('#lactiveStatus_Investor').show('400');
                        $('#activeStatus_Investor').show('400');
                        $('#telephone_Investor').val(telephone);
                    });
                });

                $('.btnTambah_Investor').each(function(){
                    $(this).click(function(event){
                        $('#what').val("investor");
                        $('#title').text('Tambah Investor');
                        $('#delete').hide('400');
                        $('#saveChange').hide('400');
                        $('#addButton').show('400');
                        //Input Investasi
                        $('#lstatus_Investasi').hide('400');
                        $('#status_Investasi').hide('400');
                        //input Investor 
                        $('#lname_Investor').show('400');
                        $('#name_Investor').show('400');
                        $('#lbirthday_Investor').show('400');
                        $('#birthday_Investor').show('400');
                        $('#lbiodata_Investor').show('400');
                        $('#biodata_Investor').show('400');
                        $('#lgender_Investor').show('400');
                        $('#gender_Investor').show('400');
                        $('#lprovince_Investor').show('400');
                        $('#province_Investor').show('400');
                        $('#lregion_Investor').show('400');
                        $('#region_Investor').show('400');
                        $('#laddress_Investor').show('400');
                        $('#address_Investor').show('400');
                        $('#ltelephone_Investor').show('400');
                        $('#telephone_Investor').show('400');
                        $('#lusername_Investor').show('400');
                        $('#username_Investor').show('400');
                        $('#lpass_Investor').show('400');
                        $('#pass_Investor').show('400');
                        $('#lemail_Investor').show('400');
                        $('#email_Investor').show('400');
                        $('#lstatusUser_Investor').show('400');
                        $('#statusUser_Investor').show('400');
                        $('#lactiveStatus_Investor').hide('400');
                        $('#activeStatus_Investor').hide('400');
                    });
                });

                //Add Data
                $('#addButton').click(function(event){
                    if ( $("#name_Investor").val() != '' 
                        && $("#birthday_Investor").val() != ''
                        && $("#biodata_Investor").val() != ''
                        && $("#gender_Investor").val() != ''
                        && $("#province_Investor").val() != ''
                        && $("#region_Investor").val() != ''
                        && $("#address_Investor").val() != ''
                        && $("#telephone_Investor").val() != ''
                        && $("#username_Investor").val() != ''
                        && $("#pass_Investor").val() != ''
                        && $("#email_Investor").val() != ''
                        && $("#statusUser_Investor").val() != ''
                        && $("#activeStatus_Investor").val() != ''
                        ){
                    $what = $('#what').val();
                    $url = "";
                    var formData = new FormData();
                    if ($what == "investor") {
                        formData.append('name', $("#name_Investor").val());
                        formData.append('birthday', $("#birthday_Investor").val());
                        formData.append('biodata', $("#biodata_Investor").val());
                        formData.append('gender', $("#gender_Investor").val());
                        formData.append('province', $("#province_Investor").val());
                        formData.append('region', $("#region_Investor").val());
                        formData.append('address', $("#address_Investor").val());
                        formData.append('telephone', $("#telephone_Investor").val());

                        formData.append('username', $("#username_Investor").val());
                        formData.append('pass', $("#pass_Investor").val());
                        formData.append('email', $("#email_Investor").val());
                        formData.append('statusUser', $("#statusUser_Investor").val());
                        formData.append('activeStatus', $("#activeStatus_Investor").val());

                        $url = "<?php echo site_url("HelfiAdm/add_statusInvestor")?>";
                    }
                    //console.log("URL: " + $url);
                    //console.log("what: " + $what);
                    $.ajax({
                        url: $url,
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data,response) {
                            console.log(response);
                            //Investasi
                            $('#statusInvest').val('');
                            //Investor
                            $("#name_Investor").val('');
                            $("#birthday_Investor").val('');
                            $("#biodata_Investor").val('');
                            $("#gender_Investor").val('');
                            $("#province_Investor").val('');
                            $("#region_Investor").val('');
                            $("#address_Investor").val('');
                            $("#telephone_Investor").val('');

                            $("#username_Investor").val('');
                            $("#pass_Investor").val('');
                            $("#email_Investor").val('');
                            $("#statusUser_Investor").val('');
                            $("#activeStatus_Investor").val('');

                            $('#what').val('');
                            $('#modalId_invest').val('');
                            $('#modalId_identitas').val('');
                            location.href = "http://localhost/agivest/HelfiAdm/Investor";
                        }
                    });
                    }else{
                        //console.log("name_Investor: " + $("#name_Investor").val());
                        //console.log("birthday: " + $("#birthday_Investor").val());
                        //console.log("biodata_Investor: " + $("#biodata_Investor").val());
                        //console.log("gender: " + $("#gender_Investor").val());
                        //console.log("province_Investor: " + $("#province_Investor").val());
                        //console.log("region_Investor: " + $("#region_Investor").val());
                        //console.log("address_Investor: " + $("#address_Investor").val());
                        //console.log("telephone_Investor: " + $("#telephone_Investor").val());

                        //console.log("username_Investor: " + $("#username_Investor").val());
                        //console.log("pass_Investor: " + $("#pass_Investor").val());
                        //console.log("email_Investor: " + $("#email_Investor").val());
                        //console.log("statusUser_Investor: " + $("#statusUser_Investor").val());

                        alert('OOPS! Error.. Semua data harus diisi semua. \n silahkan coba lagi');
                        //Investasi
                        $('#statusInvest').val('');
                        //Investor
                        $("#name_Investor").val('');
                        $("#birthday_Investor").val('');
                        $("#biodata_Investor").val('');
                        $("#gender_Investor").val('');
                        $("#province_Investor").val('');
                        $("#region_Investor").val('');
                        $("#address_Investor").val('');
                        $("#telephone_Investor").val('');

                        $("#username_Investor").val('');
                        $("#pass_Investor").val('');
                        $("#email_Investor").val('');
                        $("#statusUser_Investor").val('');
                        $("#activeStatus_Investor").val('');


                        $('#what').val('');
                        $('#modalId_invest').val('');
                        $('#modalId_identitas').val('');
                        $('#myModal').hide('400');
                    }
                });

                //Add Data
                $('#saveChange').click(function(event){
                    $what = $('#what').val();
                    $url = "";
                    var formData = new FormData();
                    if ($what == "investasi") {
                        formData.append('id_invest', $("#modalId_invest").val());
                        formData.append('id_identitas', $("#modalId_identitas").val());
                        formData.append('statusInvest', $("#status_Investasi").val());
                        $url = "<?php echo site_url("HelfiAdm/update_statusInvest")?>";
                    }
                    if ($what == "investor") {
                        formData.append('id_identitas', $("#modalId_identitas").val());
                        formData.append('name', $("#name_Investor").val());
                        formData.append('birthday', $("#birthday_Investor").val());
                        formData.append('biodata', $("#biodata_Investor").val());
                        formData.append('gender', $("#gender_Investor").val());
                        formData.append('province', $("#province_Investor").val());
                        formData.append('region', $("#region_Investor").val());
                        formData.append('address', $("#address_Investor").val());
                        formData.append('telephone', $("#telephone_Investor").val());
                        formData.append('activeStatus', $("#activeStatus_Investor").val());

                        $url = "<?php echo site_url("HelfiAdm/update_statusInvestor")?>";
                    }
                    //console.log("URL: " + $url);
                    //console.log("what: " + $what);
                    //console.log("id_identitas: " + $("#modalId_identitas").val());
                    //console.log("name_Investor: " + $("#name_Investor").val());
                    //console.log("birthday: " + $("#birthday_Investor").val());
                    //console.log("biodata_Investor: " + $("#biodata_Investor").val());
                    //console.log("gender: " + $("#gender_Investor").val());
                    //console.log("province_Investor: " + $("#province_Investor").val());
                    //console.log("region_Investor: " + $("#region_Investor").val());
                    //console.log("address_Investor: " + $("#address_Investor").val());
                    //console.log("telephone_Investor: " + $("#telephone_Investor").val());

                    $.ajax({
                        url: $url,
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data,response) {
                            console.log(response);
                            $('#statusInvest').val('');
                            //Investor
                            $("#name_Investor").val('');
                            $("#birthday_Investor").val('');
                            $("#biodata_Investor").val('');
                            $("#gender_Investor").val('');
                            $("#province_Investor").val('');
                            $("#region_Investor").val('');
                            $("#address_Investor").val('');
                            $("#telephone_Investor").val('');
                            $("#username_Investor").val('');
                            $("#pass_Investor").val('');
                            $("#email_Investor").val('');
                            $("#statusUser_Investor").val('');
                            $("#activeStatus_Investor").val('');

                            $('#what').val('');
                            $('#modalId_invest').val('');
                            $('#modalId_identitas').val('');
                            location.href = "http://localhost/agivest/HelfiAdm/Investor";
                        }
                    });
                });

            });
            
            // Data Table
            $(function() {
                $('#dataUser').DataTable();
                $('#dataInvestor').DataTable();
            });

        </script>
    </body>
</html>
