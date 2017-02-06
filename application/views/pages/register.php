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
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-box-body" style="box-shadow: -0.09px 0px 12px #cecece">
                <div class="register-logo">
                    <a href="<?php echo base_url(); ?>"><img class="img-responsive"src="<?php echo base_url(); ?>assets/images/agivestLogo.png" alt="logo agivest"></a>
                </div>
                <h3 class="login-box-msg">Daftar</h3>
                <?php 
                    if (!empty($this->session->flashdata('duplikasi'))) {?>
                        <div class="alert alert-danger">
                            <strong>Oops! </strong><?php echo $this->session->flashdata('duplikasi');?>
                        </div>
                <?php
                    }
                ?>

                <?php 
                    if (!empty($this->session->flashdata('gagalmasuk'))) { ?>
                        <div class="alert alert-danger">
                            <strong>Oops! </strong><?php echo $this->session->flashdata('gagalmasuk'); ?>
                        </div>
                <?php
                    }
                ?>

                <?php 
                if (!empty($greet)) { ?>
                    <div class="alert alert-success">
                        <strong>Terimakasih </strong><?php echo $greet; ?>
                    </div>
                    <?php
                }
                ?>

                <?php 
                if (!empty(form_error('username'))) { ?>
                    <div class="alert alert-danger">
                        <strong>Oops! </strong><?php echo form_error('username'); ?>
                    </div>
                    <?php
                }
                ?>

                <?php 
                if (!empty(form_error('email'))) { ?>
                    <div class="alert alert-danger">
                        <strong>Oops! </strong><?php echo form_error('email'); ?>
                    </div>
                <?php 
                }
                ?>

                <?php 
                    if (!empty(form_error('password'))) { ?>
                        <div class="alert alert-danger">
                            <strong>Oops! </strong><?php echo form_error('password'); ?>
                        </div>
                <?php
                    }
                ?>

                    <?php 
                    if (!empty(form_error('passconf'))) { ?>
                        <div class="alert alert-danger">
                            <strong>Oops! </strong><?php echo form_error('passconf'); ?>
                        </div>
                        <?php
                    }
                    ?>

                    <form action="<?php echo site_url("Register/selectRegister"); ?>" method="post">
                        <div class="form-group has-feedback">
                            <input required type="username" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="username">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input required type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input required type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input required type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" class="form-control" placeholder="Retype password">
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox icheck">
                                    <label>
                                        <input required type="checkbox"> Saya setuju <a data-toggle="modal" data-target="#myModal">syarat & ketentuan</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Agreement</h4>
                                        </div>
                                        <div class="modal-body" style="text-align: justify;">
                                            <p>Ketentuan-ketentuan yang ada pada halaman ini mengatur hal-hal yang berkaitan dengan data Pengguna Situs terkhusus Investor yang diberikan kepada Agivest dalam rangka memaksimalkan penggunaan fasilitas, fitur, jasa, dan/atau layanan yang ditawarkan oleh Agivest melalui situs www.agivest.com. Ketentuan-ketentuan menyangkut data bersifat mengikat seluruh Pengguna Situs tanpa terkecuali untuk tunduk dan patuh atas ketentuan-ketentuan yang telah ditetapkan oleh Agivest.
                                            <br><br>Berikut ini ketentuan-ketentuan terkait data tersebut :
                                            <br><br><b>1.</b> Atas data-data yang diberikan oleh para Pengguna Situs kepada Agivest sebagai pemenuhan syarat atas pemanfaatan fasilitas, fitur, jasa, dan/atau layanan yang ditawarkan oleh Agivest, maka Agivest berkewajiban untuk:
                                                <br>a.Menjaga kerahasiaan data-data para Pengguna yang tidak dapat ditampilkan dalam Situs dan/atau diberikan kepada pihak-pihak tertentu atas penggunaan jasa atau layanan Situs selama tidak ada pemberitahuan dan perjanjian tertulis terlebih dahulu kepada Pengguna
                                                <br>b.Kerahasiaan data Pengguna yang wajib dijaga oleh Agivest menjadi tidak berlaku apabila Agivest dipaksa oleh ketentuan hukum yang berlaku, perintah pengadilan, dan/atau perintah dari aparat/instansi yang berwenang, untuk membuka data-data milik Pengguna tersebut.
                                            <br><br><b>2.</b> Agivest hanya bertanggung jawab atas data yang diberikan Pengguna Situs kepada Agivest sebagaimana yang telah ditentukan pada ketentuan sebelumnya
                                            <br><br><b>3.</b> Pengelola berhak untuk mengubah ketentuan menyangkut data-data para Pengguna Situs tanpa pemberitahuan terlebih dahulu dengan tanpa mengabaikan hak para Pengguna Situs untuk dijaga kerahasiaan datanya sebagaimana yang telah ditentukan dalam butir (1).
                                            <br><br>Demikian ketentuan ini diharapkan dapat menjadi perhatian dari Pengguna Situs.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- /.col -->
                            </div>
                            <!-- /.col -->
                    </form>
                    <section style="padding-top: 5px;">
                        <a href="<?php echo site_url("Login"); ?>" class="text-center"><b>Sudah punya akun?</b> Masuk</a>
                    </section>
                </div>
                <!-- /.form-box -->
            </div>
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
