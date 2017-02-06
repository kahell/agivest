<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Agivest | A smart social investment</title>
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
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adm/plugins/iCheck/square/blue.css">

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
    <body class="hold-transition login-page">
        <?php
        if (!empty($namaKolam)) {?>
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="login-box-body" style="box-shadow: -0.09px 0px 12px #cecece">
                <div class="login-logo">
                    <a href="<?php echo base_url(); ?>"><img class="img-responsive"src="<?php echo base_url();?>assets/images/agivestLogo.png" alt="logo agivest"></a>
                </div>
                <h3 class="login-box-msg">Masuk</h3>
                <?php
                if (!empty($greet)) { 
                    if ($greet != "a") {?>
                        <div class="alert alert-success">
                            <strong>Oops! </strong><?php echo $greet; ?>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                }else if (!empty($greet2)) {
                    if ($greet2 != "a") {?>
                    <div class="alert alert-success">
                        <strong>Selamat anda </strong><?php echo $greet2; ?>
                    </div>
                    <?php
                    }
                    ?>
                <?php    
                }
                ?>
                <?php 
                    if (!empty($this->session->flashdata('gagalmasuk'))) {?>
                        <div class="alert alert-danger">
                            <strong>Oops! </strong><?php echo $this->session->flashdata('gagalmasuk');?>
                        </div>
                <?php
                    }
                ?>
                <form action="<?php echo site_url('Login/selectLogin');?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="namaKolam" id="namaKolam" value="<?php echo $namaKolam;?>">
                        <input type="hidden" name="investasi" id="investasi" value="<?php echo $modalInvestasi;?>">
                        <input required type="username" value="<?php echo set_value('username');?>"name="username" class="form-control" placeholder="Email atau Username">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input required type="password" value="<?php echo set_value('password');?>" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Ingat Saya
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <a href="<?php echo site_url('Forgot');?>">Lupa password?</a><br>
                <a href="<?php echo site_url('Register');?>" class="text-center"><b>Belum punya akun?</b> Daftar sekarang</a>

            </div>
            <!-- /.login-box-body -->
        </div>
        <?php
        }else{?>
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="login-box-body" style="box-shadow: -0.09px 0px 12px #cecece">
                <div class="login-logo">
                    <a href="<?php echo base_url(); ?>"><img class="img-responsive"src="<?php echo base_url();?>assets/images/agivestLogo.png" alt="logo agivest"></a>
                </div>
                <h3 class="login-box-msg">Masuk</h3>
                <?php 
                if (!empty($greet)) { 
                    if ($greet != "a") {?>
                        <div class="alert alert-success">
                            <strong>Oops! </strong><?php echo $greet; ?>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                }else if (!empty($greet2)) {
                    if ($greet2 != "a") {?>
                    <div class="alert alert-success">
                        <strong>Selamat anda </strong><?php echo $greet; ?>
                    </div>
                    <?php
                    }
                    ?>
                <?php    
                }
                ?>
                <?php 
                    if (!empty($this->session->flashdata('gagalmasuk'))) {?>
                        <div class="alert alert-danger">
                            <strong>Oops! </strong><?php echo $this->session->flashdata('gagalmasuk');?>
                        </div>
                <?php
                    }
                ?>
                <form action="<?php echo site_url('Login/selectLogin');?>" method="post">
                    <div class="form-group has-feedback">
                        <input required type="username" value="<?php echo set_value('username');?>"name="username" class="form-control" placeholder="Email atau Username">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input required type="password" value="<?php echo set_value('password');?>" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Ingat Saya
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <a href="<?php echo site_url('Forgot');?>">Lupa password?</a><br>
                <a href="<?php echo site_url('Register');?>" class="text-center"><b>Belum punya akun?</b> Daftar sekarang</a>

            </div>
            <!-- /.login-box-body -->
        </div>
        <?php
        }
        ?>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>assets/adm/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/adm/plugins/iCheck/icheck.min.js"></script>

        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
