<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $key = mt_rand(99999, 999999);

    $mail = new PHPMailer(true);

    try {
        // server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'YourEmail';
        $mail->Password   = 'APPassword';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        //Recipients
        $mail->setFrom('moshazly416@gmail.com');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Verification Code is ' . $key;
        $body = '<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8" leftmargin="0" >
    <table  cellspacing="0" border="0"   cellpadding="0"   width="100%"   bgcolor="#f2f3f8"   style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family:\'OpenSans\', sans-serif;" >
     <tr>
        <td>
          <table
            style="background-color: #f2f3f8; max-width: 670px; margin: 0 auto"
            width="100%"
            border="0"
            align="center"
            cellpadding="0"
            cellspacing="0"
          >
            <tr>
              <td style="height: 80px">&nbsp;</td>
            </tr>
            <tr>
              <td style="text-align: center">
                <a href="https://rakeshmandal.com" title="logo" target="_blank">
                  <img
                    width="60"
                    src="https://i.ibb.co/hL4XZp2/android-chrome-192x192.png"
                    title="logo"
                    alt="logo"
                  />
                </a>
              </td>
            </tr>
            <tr>
              <td style="height: 20px">&nbsp;</td>
            </tr>
            <tr>
              <td>
                <table width="95%"  border="0"  align="center" cellpadding="0" cellspacing="0" style="max-width: 670px; background: #fff; border-radius: 3px; text-align: center; -webkit-box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06); -moz-box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06); box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06);" >
            <tr>
                <td style="height: 40px">&nbsp;</td>
            </tr>
                  <tr>
                    <td style="padding: 0 35px">
                      <h1 style=" color: #1e1e2d; font-weight: 500; margin: 0; font-size: 32px; font-family: \'Rubik\', sans-serif;" >
                        Get started
                      </h1>
                      <p
                        style="
                          font-size: 15px;
                          color: #455056;
                          margin: 8px 0 0;
                          line-height: 24px;
                        "
                      >
                        Your account has been created on the e-Health Care Admin
                        HTML Theme Below are your system
                        generated credentials, <br /><strong
                          >Please change the password immediately after
                          login</strong
                        >.
                      </p>
                      <span
                        style="
                          display: inline-block;
                          vertical-align: middle;
                          margin: 29px 0 26px;
                          border-bottom: 1px solid #cecece;
                          width: 100px;
                        "
                      ></span>
                      <p
                        style="
                          color: #455056;
                          font-size: 18px;
                          line-height: 20px;
                          margin: 0;
                          font-weight: 500;
                        "
                      >
                        <strong
                          style="
                            display: block;
                            font-size: 13px;
                            margin: 0 0 4px;
                            color: rgba(0, 0, 0, 0.64);
                            font-weight: normal;
                          "
                          >Username</strong
                        >shezo
                        <strong
                          style="
                            display: block;
                            font-size: 13px;
                            margin: 24px 0 4px 0;
                            font-weight: normal;
                            color: rgba(0, 0, 0, 0.64);
                          "
                          >Password</strong
                        >123456
                      </p>
    
                      <a
                        href="login.html"
                        style="
                          background: #20e277;
                          text-decoration: none !important;
                          display: inline-block;
                          font-weight: 500;
                          margin-top: 24px;
                          color: #fff;
                          text-transform: uppercase;
                          font-size: 14px;
                          padding: 10px 24px;
                          display: inline-block;
                          border-radius: 50px;
                        "
                        >Login to your Account</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td style="height: 40px">&nbsp;</td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td style="height: 20px">&nbsp;</td>
            </tr>
            <tr>
              <td style="text-align: center">
                <p
                  style="
                    font-size: 14px;
                    color: rgba(69, 80, 86, 0.7411764705882353);
                    line-height: 18px;
                    margin: 0 0 0;
                  "
                >
                  &copy; <strong>www.bigboy.com</strong>
                </p>
              </td>
            </tr>
            <tr>
              <td style="height: 80px">&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr> </table> </body>';

        $mail->Body = $body;
        $mail->send();

        echo "<script>alert('Message has been sent');</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
