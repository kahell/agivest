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
                                            <a href="<?php echo site_url('Login/logoutPenambak'); ?>" class="btn btn-default btn-flat">Sign out</a>
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
                        <li class="active treeview">
                            <a href="<?php echo site_url('Penambak'); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
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
                        <small class="label label-info">Penambak Dashboard</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>Pakan</h3>
                                    <p>Agi-Fish</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-anchor"></i>
                                </div>
                                <!-- data-toggle="modal" data-target="#myModal" -->
                                <a href="#" id="tambak_pakan" data-toggle="modal" data-target="#myModal" class="small-box-footer tambak_pakan">Tambah Pakan <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>Ikan</h3>
                                    <p>Agi-Fish</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-anchor"></i>
                                </div>
                                <a href="#" id="tambak_ikan" data-toggle="modal" data-target="#myModal" class="small-box-footer tambak_ikan">Tambah Ikan <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>Keuangan</h3>
                                    <p>Agi-Fish</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-anchor"></i>
                                </div>
                                <a href="#" id="tambak_uang" data-toggle="modal" data-target="#myModal" class="small-box-footer tambak_uang">Tambah Uang <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>Pakan</h3>
                                    <p>Agi-Pet</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-paw"></i>
                                </div>
                                <a href="#" id="pet_pakan" data-toggle="modal" data-target="#myModal" class="small-box-footer pet_pakan">Tambah Pakan <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>Ternak</h3>
                                    <p>Agi-Pet</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-paw"></i>
                                </div>
                                <a href="#" id="pet_ternak" data-toggle="modal" data-target="#myModal" class="small-box-footer pet_ternak">Tambah Ternak <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>Keuangan</h3>
                                    <p>Agi-Pet</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-paw"></i>
                                </div>
                                <a href="#" id="pet_uang" data-toggle="modal" data-target="#myModal" class="small-box-footer pet_uang">Tambah Uang <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
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
                                    <label id="lpakan">Jumlah Pakan</label>
                                    <input type="text" id="pakan" class="form-control" placeholder="ex: 90.5, 100">

                                    <label id="lconditional">Conditional</label>
                                    <select id="condition_ikan" class="form-control">
                                        <option value="Excelent">Excelent</option>
                                        <option value="Good">Good</option>
                                        <option value="Bad">Bad</option>
                                        <option value="Sick">Sick</option>
                                    </select>
                                    <label id="ldead_ikan">Jumlah Ikan Mati (Ekor)</label>
                                    <input type="text" id="dead_ikan" class="form-control" placeholder="ex: 100">
                                    <label id="ldesc">Deskripsi Ikan mati</label>
                                    <textarea style="height: 200px;" placeholder="Deskripsi Kondisi Ikan" id="desc_ikan" class="form-control"></textarea>

                                    <label id="lbuy_uang">Beli Uang (Rp.)</label>
                                    <input type="text" id="buy_uang" class="form-control" placeholder="ex: 2000">
                                    <label id="ldesc_uang">Deskripsi Uang</label>
                                    <textarea style="height: 200px;" placeholder="Deskripsi Pengeluaran" id="desc_uang" class="form-control"></textarea>

                                  <input type="hidden" id="what" class="form-control" value="">
                                  <input type="hidden" id="id_identitas" class="form-control" value="<?php echo $id_identitas;?>">
                                </div>
                            </div>
                            <div class="modal-footer" >
                                <a href="#" id="delete" data-dismiss="modal" style="display: none" class="btn btn-flat btn-warning">Delete</a>
                                <a href="#" id="saveChange" data-dismiss="modal" style="display: none" class="btn btn-flat btn-primary">Update</a>
                                <a href="#" id="addButton" data-dismiss="modal" style="display: none" class="btn btn-flat btn-primary">Add</a>
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
        <script>
            $(document).ready(function(){
                //Tambak Pakan
                $('.tambak_pakan').each(function(){
                    $(this).click(function(event){
                        var text = "tambak_pakan";
                        $('#title').text('Input Pakan');
                        $('#what').val(text);
                        $('#lpakan').show('400');
                        $('#pakan').show('400');
                        $('#lconditional').hide('400');
                        $('#condition_ikan').hide('400');
                        $('#ldesc').hide('400');
                        $('#desc_ikan').hide('400');
                        $('#ldead_ikan').hide('400');
                        $('#dead_ikan').hide('400');
                        $('#lbuy_uang').hide('400');
                        $('#buy_uang').hide('400');
                        $('#ldesc_uang').hide('400');
                        $('#desc_uang').hide('400');
                        $('#delete').hide('400');
                        $('#saveChange').hide('400');
                        $('#addButton').show('400');
                    });
                });

                //Tambak Ikan
                $('.tambak_ikan').each(function(){
                    $(this).click(function(event){
                        var text = "tambak_ikan";
                        $('#title').text('Input Ikan');
                        $('#what').val(text);
                        $('#lpakan').hide('400');
                        $('#pakan').hide('400');
                        $('#lconditional').show('400');
                        $('#condition_ikan').show('400');
                        $('#ldesc').show('400');
                        $('#desc_ikan').show('400');
                        $('#ldead_ikan').show('400');
                        $('#dead_ikan').show('400');
                        $('#lbuy_uang').hide('400');
                        $('#buy_uang').hide('400');
                        $('#ldesc_uang').hide('400');
                        $('#desc_uang').hide('400');
                        $('#delete').hide('400');
                        $('#saveChange').hide('400');
                        $('#addButton').show('400');
                    });
                });

                //Tambak Uang
                $('.tambak_uang').each(function(){
                    $(this).click(function(event){
                        var text = "tambak_uang";
                        $('#title').text('Input Uang');
                        $('#what').val(text);
                        $('#lpakan').hide('400');
                        $('#pakan').hide('400');
                        $('#lconditional').hide('400');
                        $('#condition_ikan').hide('400');
                        $('#ldesc').hide('400');
                        $('#desc_ikan').hide('400');
                        $('#ldead_ikan').hide('400');
                        $('#dead_ikan').hide('400');
                        $('#lbuy_uang').show('400');
                        $('#buy_uang').show('400');
                        $('#ldesc_uang').show('400');
                        $('#desc_uang').show('400');
                        $('#delete').hide('400');
                        $('#saveChange').hide('400');
                        $('#addButton').show('400');
                    });
                });

                //Add Data
                $('#addButton').click(function(event){
                    $what = $('#what').val();
                    $url = "";
                    var formData = new FormData();
                    if ($what == "tambak_pakan") {
                        formData.append('pakan', $("#pakan").val());
                        formData.append('id_identitas', $("#id_identitas").val());
                        $url = "<?php echo site_url("Penambak/update_pakanTambak")?>";
                    }
                    if($what == "tambak_ikan"){
                        formData.append('desc_ikan', $("#desc_ikan").val());
                        formData.append('dead_ikan', $("#dead_ikan").val());
                        formData.append('condition_ikan', $("#condition_ikan").val());
                        formData.append('id_identitas', $("#id_identitas").val());
                        $url = "<?php echo site_url("Penambak/update_ikanTambak")?>";
                    }
                    if($what == "tambak_uang"){
                        formData.append('buy_uang', $("#buy_uang").val());
                        formData.append('desc_uang', $("#desc_uang").val());
                        formData.append('id_identitas', $("#id_identitas").val());
                        $url = "<?php echo site_url("Penambak/update_uangTambak")?>";
                    }
                    //console.log("URL: " + $url);
                    //console.log("what: " + $what);
                    //console.log("buy_uang: " + $("#buy_uang").val());
                    //console.log("desc_uang: " + $("#desc_uang").val());
                    //console.log("id_identitas: " + $("#id_identitas").val());
                    $.ajax({
                        url: $url,
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data,response) {
                            //console.log(response);
                            $('#pakan').val('');
                            $('#desc_ikan').val('');
                            $('#dead_ikan').val('');
                            $('#condition_ikan').val('');
                            $('#buy_uang').val('');
                            $('#desc_uang').val('');
                        }
                    });
                });
            });
        </script>
    </body>
</html>
