<?php
  include '../connection.php';
  $id = $_GET['id'];

  $data = " SELECT * FROM `regplayer`WHERE id='$id'; ";
  $qry = mysqli_query($con, $data);
  $row = mysqli_fetch_row($qry);

      $id= $row[0];
      $fname1= $row[1];
      $lname = $row[2];
      $mobile = $row[5];
      $gn = $row[6];
      $dob = $row[7];
      $age = $row[8];
      $email = $row[9];
      $country = $row[13];
      $level = $row[16];
      $bat = $row[17];
      $wk = $row[18];
      $bow_arm = $row[19];
      $pace = $row[20];
      $pf = $row[21];
      $cap = $row[22];
      $photo= $row[25];

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
        $mail->Subject = 'Registation Application Success';
        $mail->Body    = 'Hello, Your <b>Registration Application Approval</b> Your Registration ID :<b>'.$id.'</b> Please Give Trial For Selection. Thank You, <b>Cricket Academy & Association Team</b>';
        $mail->AltBody = '';
    
        $mail->send();
        echo "<script>alert('Notification Send Success')</script>";
        
    } catch (Exception $e) 
    {
        echo "<script>alert('Message could not be sent');</script>";
        
    }

      $check="SELECT * FROM `ptrial` WHERE email='$email';";
      $rec=mysqli_query($con,$check);

      if($r=mysqli_num_rows($rec)>0)
      {
        echo "<script>alert('Player Already Approval');</script>";
        echo "<script>window.location.href='registerplayer.php';</script>";
      }
      else
      {
              $sq = "INSERT INTO `ptrial` ( `id` ,`first_name`, `last_name`, `mobile`, `gender`, `dob`, `age`, `email`, `country`, `level`, `batting`, `wk`, `bowling_arm`, `bowling_pace`, `first_pref`, `captain_exp`, `photo`) VALUES ('$id','$fname1', '$lname', '$mobile', '$gn', '$dob', '$age', '$email', '$country', '$level', '$bat', '$wk', '$bow_arm', '$pace', '$pf', '$cap', '$photo');";
              $qr = mysqli_query($con, $sq);
              if ($qr) {
                  echo "<script>alert('Approval Sucessfully');</script>";
                  echo "<script>window.location.href='registerplayer.php';</script>";
              }
      }
