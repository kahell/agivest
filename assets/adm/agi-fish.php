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
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/morris/morris.css">
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
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-87254492-1', 'auto');
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
                <a href="index2.html" class="logo">
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
                                    <img src="<?php echo base_url(); ?>assets/adm/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Investor</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url(); ?>assets/adm/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Investor
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
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
                        <small>Invesotr Dashboard</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agi-Fish</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">CPU Traffic</span>
                                    <span class="info-box-number">90<small>%</small></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Likes</span>
                                    <span class="info-box-number">41,410</span>
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
                                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sales</span>
                                    <span class="info-box-number">760</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">New Members</span>
                                    <span class="info-box-number">2,000</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Pakan</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Tanggal</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Pakan yng keluar (Kg)</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Deskripsi</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Bukti</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Firefox 1.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Firefox 1.5</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Firefox 2.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Firefox 3.0</td>
                                                            <td>Win 2k+ / OSX.3+</td>
                                                            <td>1.9</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Camino 1.0</td>
                                                            <td>OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Camino 1.5</td>
                                                            <td>OSX.3+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Netscape 7.2</td>
                                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Netscape Browser 8</td>
                                                            <td>Win 98SE+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Netscape Navigator 9</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>Mozilla 1.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1</td>
                                                            <td>A</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button previous disabled" id="example2_previous">
                                                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                                                        </li><li class="paginate_button active">
                                                            <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li>
                                                        <li class="paginate_button ">
                                                            <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li>
                                                        <li class="paginate_button ">
                                                            <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li>
                                                        <li class="paginate_button next" id="example2_next">
                                                            <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Table With Full Features</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                    <thead>
                                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 115px;" aria-sort="ascending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 128px;">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 107px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 96px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 66px;">CSS grade</th></tr>
                                                    </thead>
                                                    <tbody>

























































                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Camino 1.0</td>
                                                            <td class="">OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Camino 1.5</td>
                                                            <td class="">OSX.3+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Epiphany 2.20</td>
                                                            <td class="">Gnome</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Firefox 1.0</td>
                                                            <td class="">Win 98+ / OSX.2+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Firefox 1.5</td>
                                                            <td class="">Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Firefox 2.0</td>
                                                            <td class="">Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Firefox 3.0</td>
                                                            <td class="">Win 2k+ / OSX.3+</td>
                                                            <td>1.9</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Mozilla 1.0</td>
                                                            <td class="">Win 95+ / OSX.1+</td>
                                                            <td>1</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Mozilla 1.1</td>
                                                            <td class="">Win 95+ / OSX.1+</td>
                                                            <td>1.1</td>
                                                            <td>A</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td class="">Mozilla 1.2</td>
                                                            <td class="">Win 95+ / OSX.1+</td>
                                                            <td>1.2</td>
                                                            <td>A</td>
                                                        </tr></tbody>
                                                    <tfoot>
                                                        <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                                                    </tfoot>
                                                </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
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
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adm/plugins/morris/morris.min.js"></script>
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
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>assets/adm/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/adm/dist/js/demo.js"></script>
    </body>
</html>
