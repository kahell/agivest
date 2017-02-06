<?php
Class Email_model extends CI_Model{

	function sendVerificatinEmail($email,$verificationCode,$user){
	// load library email
        $this->load->library('PHPMailerAutoload');
        
        $mail = new PHPMailer();
        //$mail->SMTPDebug = 2;
        //$mail->Debugoutput = 'html';
        
        // set smtp
        $mail->isSMTP();
        $mail->Host = 'alana.rapidplex.com';
        $mail->Port = '465';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'care@agivest.com';
        $mail->Password = 'r;7@]x54R4k]';
        $mail->WordWrap = 50;  
        // set email content
        $mail->setFrom('care@agivest.com', 'Agivest Team');
        $mail->addAddress($email);
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachment
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        //Konten
        $mail->Subject = 'Email Verification';
        $mail->Body = "<html>
    <head>
        <meta name='viewport' content='width=device-width'>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <title>Agivest</title>
                </head>
                <body bgcolor='#FFFFFF' style='margin: 0 auto;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;/*border: 3px solid #f9f9f9;*/height: 100%;width: 100%!important;'>
                    <!-- HEADER -->
                    <table class='head-wrap' bgcolor='#f9f9f9' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif; width: 100.3%;'>
                        <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                            <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'></td>
                            <td class='header container' style='margin: 0 auto!important;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;'>

                                <div class='content' style='margin: 0 auto;padding: 15px;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;max-width: 600px;display: block;'>
                                    <table bgcolor='#f9f9f9' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;'>
                                        <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                            <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'><img src='http://www.agivest.com/assets/images/agivestLogo.png' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 76px;max-width: 100%;'></td>
                                            <td align='right' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'><p style='font-size: 17px;color: #3f6ca4;margin: 0!important;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;margin-bottom: 6px;font-weight: normal;line-height: 1.6;' class='collapse'>Registrasi Agivest</p></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                            <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'></td>
                        </tr>
                    </table><!-- /HEADER -->

                    <!-- BODY -->
                    <table class='body-wrap' style='margin: 0;padding: 14px 0 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;'>
                        <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                            <td style='margin: 0;padding: 0;'></td>
                            <td class='container' bgcolor='#FFFFFF' style='margin: 0 auto!important;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;'>
                                <div class='content' style='margin: 0 auto;padding: 15px;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;max-width: 600px;display: block;'>
                                    <table style='padding-top: 15px;margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;'>
                                        <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                            <td align='center' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>

                                                <p align='center' style='font-size: 14px;margin: 0;padding: 0;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 500;'>Hai $user!</p>

                                                <p align='center' style='line-height: 1.5; font-size: 14px;'>
                                                    Terima Kasih telah mendaftar sebagai investor di Agivest
                                                    <br><br>
                                                            Silahkan klik link berikut untuk menyempurnakan pendaftaran:
                                                            </p>
                                                            <br>
                                                                <a style='text-decoration: none; background-color: #03a9f4; color: #FFF; padding-left: 150px; padding-right: 150px; padding-top: 10px; padding-bottom: 10px;' type='submit' href='http://www.agivest.com/Login/verify/$verificationCode'>
                                                                    Verifikasi Email
                                                                </a>

                                                                <br>
                                            </td>
                                                                    </tr>
                                                                    </table>

                                                                    </div><!-- /content -->
                                                                    </td>
                                                                    <td style='margin: 0;padding: 0;'></td>
                                                                    </tr>
                                                                    </table>

                                                                    <!-- FOOTER -->
                                                                    <table class='footer-wrap' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;clear: both!important;'>
                                                                        <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                                                            <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'></td>
                                                                            <td class='container' style='margin: 0 auto!important;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;'>
                                                                                <!-- content -->
                                                                                <div class='content' style='margin: 0 auto;padding: 15px;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;max-width: 600px;display: block;'>
                                                                                    <table style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;'>
                                                                                        <tr>
                                                                                            <td align='center'>
                                                                                                <a href='https://www.instagram.com/tambaku.id/' target='_blank' style='color:#000;text-decoration: none'>
                                                                                                    <img style='width: 28px;height: 28px' src='http://www.agivest.com/assets/images/instagram.png' alt='' />
                                                                                                </a>
                                                                                                &nbsp;
                                                                                                <a href='http://line.me/ti/p/@lae3620p' target='_blank' style='color:#000;text-decoration: none'>
                                                                                                    <img style='width: 28px;height: 28px' src='http://www.agivest.com/assets/images/line.png' alt='' />
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                                                                            <td align='center' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                                                                                <p style='margin: 0;padding: 0;font-family: Roboto, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6;color: #757575'>
                                                                                                    <a href='http://www.agivest.com' style='margin: 0;padding: 0;font-family: Roboto, sans-serif;color: #000;'>www.agivest.com</a> &copy; 2016 | All Rights Reserved.
                                                                                                    <br />Gedung Equaloop Griyashanta Blok E-209 Kec. Lowokwaru, Kota Malang, Jawa Timur
                                                                                                    <br style='margin: 0;padding: 0;'>
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div><!-- /content -->
                                                                            </td>
                                                                            <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'></td>
                                                                        </tr>
                                                                    </table><!-- /FOOTER -->
                                                                    </body>
</html>";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	$mail->send();
	}

        function verifyEmailAddress($verificationCode){
                $result = "update fyidentitas set activeStatus= 'A' WHERE verificationCode =?";
                $this->db->query($result, array($verificationCode));
                return $this->db->affected_rows();
        }

        function sendForgotPass($email,$verificationCode,$username){
        // load library email
        $this->load->library('PHPMailerAutoload');
        
        $mail = new PHPMailer();
        //$mail->SMTPDebug = 2;
        //$mail->Debugoutput = 'html';
        
        // set smtp
        $mail->isSMTP();
        $mail->Host = 'alana.rapidplex.com';
        $mail->Port = '465';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'care@agivest.com';
        $mail->Password = 'r;7@]x54R4k]';
        $mail->WordWrap = 50;  
        // set email content
        $mail->setFrom('care@agivest.com', 'Agivest Team');
        $mail->addAddress($email);
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachment
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        //Konten
        $mail->Subject = 'Reset Password';
        $mail->Body = "
        <html>
    <head>
        <meta name='viewport' content='width=device-width'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Agivest</title>
    </head>
    <body bgcolor='#FFFFFF' style='margin: 0 auto;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;/*border: 3px solid #f9f9f9;*/height: 100%;width: 100%!important;'>
        <!-- HEADER -->
        <table class='head-wrap' bgcolor='#f9f9f9' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif; width: 100.3%;'>
            <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'></td>
                <td class='header container' style='margin: 0 auto!important;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;'>

                    <div class='content' style='margin: 0 auto;padding: 15px;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;max-width: 600px;display: block;'>
                        <table bgcolor='#f9f9f9' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;'>
                            <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'><img src='http://www.agivest.com/assets/images/agivestLogo.png' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 76px;max-width: 100%;'></td>
                                <td align='right' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'><p style='font-size: 17px;color: #3f6ca4;margin: 0!important;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;margin-bottom: 6px;font-weight: normal;line-height: 1.6;' class='collapse'>Reset Password</p></td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'></td>
            </tr>
        </table><!-- /HEADER -->

        <!-- BODY -->
        <table class='body-wrap' style='margin: 0;padding: 14px 0 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;'>
            <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                <td style='margin: 0;padding: 0;'></td>
                <td class='container' bgcolor='#FFFFFF' style='margin: 0 auto!important;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;'>
                    <div class='content' style='margin: 0 auto;padding: 15px;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;max-width: 600px;display: block;'>
                        <table style='padding-top: 15px;margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;'>
                            <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                <td align='center' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                    <p align='center' style='font-size: 14px;margin: 0;padding: 0;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 500;'>Hai $username!</p>
                                    <p align='center' style='line-height: 1.5; font-size: 14px;'>
                                        Silahkan klik link berikut untuk mereset password anda
                                    </p>
                                    <br>
                                    <a style='text-decoration: none; background-color: #03a9f4; color: #FFF; padding-left: 150px; padding-right: 150px; padding-top: 10px; padding-bottom: 10px;' type='submit' href='http://www.agivest.com/Forgot/reset/$verificationCode'>
                                        Reset Password
                                    </a>
                                    <br>
                                </td>
                            </tr>
                        </table>

                    </div><!-- /content -->
                </td>
                <td style='margin: 0;padding: 0;'></td>
            </tr>
        </table>

        <!-- FOOTER -->
        <table class='footer-wrap' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;clear: both!important;'>
            <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'></td>
                <td class='container' style='margin: 0 auto!important;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;'>
                    <!-- content -->
                    <div class='content' style='margin: 0 auto;padding: 15px;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;max-width: 600px;display: block;'>
                        <table style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;width: 100%;'>
                            <tr>
                                <td align='center'>
                                    <a href='https://www.instagram.com/tambaku.id/' target='_blank' style='color:#000;text-decoration: none'>
                                        <img style='width: 28px;height: 28px' src='http://www.agivest.com/assets/images/instagram.png' alt='' />
                                    </a>
                                    &nbsp;
                                    <a href='http://line.me/ti/p/@lae3620p' target='_blank' style='color:#000;text-decoration: none'>
                                        <img style='width: 28px;height: 28px' src='http://www.agivest.com/assets/images/line.png' alt='' />
                                    </a>
                                </td>
                            </tr>
                            <tr style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                <td align='center' style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'>
                                    <p style='margin: 0;padding: 0;font-family: Roboto, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6;color: #757575'>
                                        <a href='http://www.agivest.com' style='margin: 0;padding: 0;font-family: Roboto, sans-serif;color: #000;'>www.agivest.com</a> &copy; 2016 | All Rights Reserved.
                                        <br />Gedung Equaloop Griyashanta Blok E-209 Kec. Lowokwaru, Kota Malang, Jawa Timur
                                        <br style='margin: 0;padding: 0;'>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div><!-- /content -->
                </td>
                <td style='margin: 0;padding: 0;font-family:Helvetica Neue, Helvetica Helvetica, Arial, sans-serif;'></td>
            </tr>
        </table><!-- /FOOTER -->
    </body>
</html>";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        }

        function verifyPassword($verificationCode){
                $result = "update fyidentitas set activeStatusForgotPass = 'A' WHERE verificationCodeForgotPass =?";
                $this->db->query($result, array($verificationCode));
                return $this->db->affected_rows();
        }

	}
?>