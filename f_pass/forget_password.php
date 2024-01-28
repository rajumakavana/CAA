<?php
session_start();
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include '../connection.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require '../vendor/autoload.php';

$msg = "";
if (isset($_POST['submit'])) {
  $email1 = $_POST['email'];
  $role= $_POST['role'];
  
  $rand  = rand(000000, 999999);
  $email = mysqli_real_escape_string($con, $email1);

  if ($role=='player') {

    $pqry = "SELECT * FROM `finalplist` WHERE `email`='$email'";
    $p = mysqli_query($con, $pqry);

    if (mysqli_num_rows($p) > 0) 
    {
      while ($row = mysqli_fetch_array($p)) 
      {
        $select_email = $row['email'];
        
      }
    }
    if ($email == $select_email) 
    {
        $_SESSION['page']='fp';
        $_SESSION['otp'] = $rand;
        $_SESSION['user_email']=$email;
        $_SESSION['player']=$role;
        
      $mail=new PHPMailer(true);

      try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'crickteamofficial@gmail.com';                     //SMTP username
        $mail->Password   = 'dplljyefpkqtsmty';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('crickteamofficial@gmail.com', 'Cricket Academy & Association');
        $mail->addAddress($email,'PLAYER');     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('crickteamofficial@gmail.com', 'no-reply');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Verification Code';
        $mail->Body    = 'Hi ! Your Verification Code : <b>'.$rand.'</b>  This Code Use Only For Reset Password. Thank You, <b>Cricket Academy & Association Team</b>';
        $mail->AltBody = '';
    
        $mail->send();
        echo "<script>alert('Verification Code Send Success')</script>";
        echo "<script>window.location.href='otp.php';</script>";
    } catch (Exception $e) {
      echo "<script>alert('Verification Code Sending Failed Please Check Your Internet Connection')</script>";
        $msg =  "OTP Sending Fail";
    }
    }
    else 
      {
        $msg="Your Email Address Does Not Found";
      } 
  }
  if($role=='coach') 
  {

      $cqr = "SELECT * FROM `finalclist` WHERE `email`='$email';";
      $coach = mysqli_query($con, $cqr);

      if (mysqli_num_rows($coach) > 0) 
      {
        while ($row1 = mysqli_fetch_array($coach)) 
        {
          $select_email2 = $row1['email'];
        }
      }

      if ($select_email2 == $email) 
      {
          $_SESSION['page']='fp';
          $_SESSION['otp'] = $rand;
          $_SESSION['user_email']=$email;
          $_SESSION['coach']=$role2;
        $mail=new PHPMailer(true);

      try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'crickteamofficial@gmail.com';                     //SMTP username
        $mail->Password   = 'dplljyefpkqtsmty';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('crickteamofficial@gmail.com', 'Cricket Academy & Association');
        $mail->addAddress($email,'COACH');     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('crickteamofficial@gmail.com', 'no-reply');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Verification Code';
        $mail->Body    = 'Hi ! Your Verification Code : <b>'.$rand.'</b>  This Code Use Only For Reset Password. Thank You, <b>Cricket Academy & Association Team</b>';
        $mail->AltBody = '';
    
        $mail->send();
        echo "<script>alert('Verification Code Send Success')</script>";
        echo "<script>window.location.href='otp.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Verification Code Sending Failed Please Check Your Internet Connection')</script>";
        $msg =  "OTP Sending Fail";
    }

       
      } 
      else 
      {
        $msg="Your Email Address Does Not Found";
      }
  }
}
if(isset($_POST['cancel']))
{
  echo "<script>window.location.href='../index.php';</script>";

}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cricket Academy & Association</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- Favicon -->
    <link href="../img/favicon.png" rel="icon">
    <link href="img/favicon.ico" rel="icon">


</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a>Cricket Academy & Association <br> <b> &nbsp; Forget Password ?</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

      <p class="login-box-msg">Please Enter Your Email For OTP</p>
      <p style="color: red"><?php echo $msg; ?> </p>
      <form class="needs-validation" method="post">
        <div class="form-group has-feedback">
          <input name="email" type="email" placeholder="Enter Your Email" class="form-control" required />
        </div>
        <div class="form-group has-feedback">
          <input name="role" type="radio"  value="player"/> &nbsp PLAYER &nbsp
          <input name="role" type="radio"  value="coach" />&nbsp COACH
          <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->

          
        </div>



        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-danger">Send Code</button>
        </div>
      </form>
      <form method="post">
    <div class="form-group">
          <button type="submit" name="cancel" class="btn btn-warning">Cancel</button>
      </div>
    </form>



    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
  <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>