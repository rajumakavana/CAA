<?php
  include '../connection.php';
  $id = $_GET['id'];
  
  $data = " SELECT * FROM `regcoach`WHERE id='$id'; ";
  $qry = mysqli_query($con, $data);
  $row = mysqli_fetch_row($qry);

      $id= $row[0];
      $fname1= $row[1];
      $lname = $row[2];
      $father=$row[3];
      $mobile = $row[4];
      $gn = $row[5];
      $dob = $row[6];
      $age = $row[7];
      $email = $row[8];
      $add= $row[9];
      $dist =$row[10];
      $state= $row[11];
      $country = $row[12];
      $pin = $row[13];
      $c_level = $row[14];
      $c_type = $row[15];
      $pass = $row[16];
      $re_pass = $row[17];
      $photo= $row[18];

    use PHPMailer\PHPMailer\PHPMailer;  
    use PHPMailer\PHPMailer\Exception;
    include '../connection.php';
    require '../f_pass/PHPMailer/src/Exception.php';
    require '../f_pass/PHPMailer/src/PHPMailer.php';
    require '../f_pass/PHPMailer/src/SMTP.php';
    require '../vendor/autoload.php';
        
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
        $mail->addAddress($email);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('crickteamofficial@gmail.com', 'no-reply');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Registation Success';
        $mail->Body    = 'Hello, Your Registration Application Approval Your Registration ID :<b>'.$id.'</b> <b>Congratulation You Selected For '.$c_type.' .</b> Thank You, <b>Cricket Academy & Association Team</b>';
        $mail->AltBody = '';
    
        $mail->send();
        echo "<script>alert('Notification Send Success')</script>";
        
    } catch (Exception $e) 
    {
        echo "<script>alert('Message could not be sent');</script>";
    }

      $check="SELECT * FROM `finalclist` WHERE email='$email';";
      $rec=mysqli_query($con,$check);

      if($r=mysqli_num_rows($rec)>0)
      {
        echo "<script>alert('Coach Already Selected');</script>";
        echo "<script>window.location.href='coachreg.php';</script>";
      }
      else
      {
              $sq = "INSERT INTO `finalclist`(`id`, `first_name`, `last_name`, `father_name`, `mobile`, `gender`, `dob`, `age`, `email`, `address`, `district`, `state`, `country`, `pincode`, `coach_level`, `coach_type`, `pass`, `re_pass`, `photo`) VALUES 
              ('$id','$fname1','$lname','$father','$mobile','$gn','$dob','$age','$email','$add','$dist','$state','$country','$pin','$c_level','$c_type','$pass','$re_pass','$photo');";
              $qr = mysqli_query($con, $sq);
              if ($qr) {
                  echo "<script>alert('Coach Select Sucessfully');</script>";
                  echo "<script>window.location.href='coachreg.php';</script>";
              }

              $sql="DELETE FROM `regcoach` WHERE id=$id";
              $qry=mysqli_query($con,$sql);
      }
      
      
?>