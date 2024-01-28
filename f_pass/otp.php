<?php
error_reporting(0);
include '../connection.php';
session_start();
if(!isset($_SESSION['page']))
{
  echo "<script>alert('Please Enter Your Email First');</script>";
  echo "<script>window.location.href='forget_password.php';</script>";
}


$msg = "";

if (isset($_POST['submit'])) 
{
    $otp = $_SESSION['otp'];
    $email = $_SESSION['user_email'];
    $submit_otp = $_POST['enterotp'];
  if ($submit_otp == $otp) 
  {
    $_SESSION['page2']='otp_page';
    echo "<script>alert('Create Your New Password');</script>";
    echo "<script>window.location.href='new_password.php';</script>";
  } 
  else 
  {
    $msg = "Please Enter Valid Verification Code";
    echo "<script>alert('Please Enter Valid Verification Code');</script>";
  }
}
if (isset($_POST['cancel'])) {

  header("location:../index.php");
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
      <a>Cricket Academy & Association <br> <b> &nbsp; OTP Verification</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

      <p class="login-box-msg">Check Your Email For Verificaton Code</p>
      <form  method="post" class="needs-validation" novalidate>
        <div class="form-group">
          <input name="enterotp" type="text" placeholder="Enter Your Verification Code" class="form-control" id="validationCustom01" required />
          <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
          <div class="invalid-feedback">
                                    Please Enter OTP
          </div>
        </div>

        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-danger">Submit</button>
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