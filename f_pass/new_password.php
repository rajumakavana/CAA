<?php
session_start();
error_reporting(0);
include '../connection.php';

if(!isset($_SESSION['page']))
{
  echo "<script>alert('Please Enter Your Email First');</script>";
  echo "<script>window.location.href='forget_password.php';</script>";
}


$user = $_SESSION['user_email'];
$role = $_SESSION['player'];
$role2 = $_SESSION['coach'];


$msg = "";
if (isset($_POST['submit'])) {
  $password = md5($_POST['new_pass']);
  $con_password = md5($_POST['con_pass']);

  if ($password == $con_password) {
    if ($role == 'player') {
      $sqp = "UPDATE `finalplist` SET `password`= '$password', `re_pass`= '$con_password' WHERE `email`='$user';";
      $qr = mysqli_query($con, $sqp);
      if ($qr) {
        echo "<script>alert('Password Change Sucessfully');</script>";
        echo "<script>window.location.href='../index.php';</script>";
      } else {
        $msg = "We are Sorry For Some Error  Detected in Player Change Password Please Try Later";
      }
    }
    else
    {
      $sqp2 = "UPDATE `finalclist` SET `pass` = '$password', `re_pass` = '$con_password' WHERE `email` ='$user';";
      $qr2 = mysqli_query($con, $sqp2);
      if ($qr2) {
        echo "<script>alert('Password Change Sucessfully');</script>";
        echo "<script>window.location.href='../index.php';</script>";
      } else {
        $msg = "We are Sorry For Some Error Detected in Coach Change Password Please Try Later";
      }
    }
  } else {
    $msg = "New Password Does Not Match With Comform Password !";
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
      <a>Cricket Academy & Association <br> <b> &nbsp; New Password</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <?php  ?>
      <p class="login-box-msg">Create Your New Password</p>
      <p style="color: red"><?php echo $msg; ?> </p>
      <form action="" method="post">

        <div class="form-group has-feedback">
          <input name="Email" type="email" size="25" placeholder="Username" value="<?php echo $user; ?>" class="form-control" readonly />
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="new_pass" type="password" placeholder="Create New Password" class="form-control" required />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="con_pass" type="password" placeholder="Comform Password" class="form-control" required />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group">
          <button name="submit" type="submit" class="btn btn-danger">Update</button>
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
</body>

</html>