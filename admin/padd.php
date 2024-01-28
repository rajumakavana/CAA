
    <?php
        include '../connection.php';
        $id=$_GET['id'];        
                
        $data = " SELECT * FROM `regplayer` WHERE id='$id'; ";
        $qry = mysqli_query($con, $data);
        $row = mysqli_fetch_row($qry);
       
        $id=$row[0];
        $fname1=$row[1];
        $lname=$row[2];
        $father=$row[3];
        $mother=$row[4];
        $mobile=$row[5];
        $gn=$row[6];
        $dob=$row[7];
        $age=$row[8];
        $email=$row[9];
        $add=$row[10];
        $dist=$row[11];
        $state=$row[12];
        $country=$row[13];
        $pin=$row[14];
        $size=$row[15];
        $level=$row[16];
        $bat=$row[17];
        $wk=$row[18];
        $bow_arm=$row[19];
        $pace=$row[20];
        $pf=$row[21];
        $cap=$row[22];
        $pass=$row[23];
        $re_pass=$row[24];
        $photo=$row[25];
        $value=0;
      
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
            $mail->Subject = 'Congratulation You Selected';
            $mail->Body    = 'Hello, <b>Congratulation You Selected</b>. Welcome To Our Cricket Family. Thank You, <b>Cricket Academy & Association Team</b>';
            $mail->AltBody = '';
        
            $mail->send();
            echo "<script>alert('Notification Send Success')</script>";
            
        } catch (Exception $e) 
        {
            echo "<script>alert('Message could not be sent');</script>";
        }

      $check="SELECT * FROM `finalplist` WHERE email='$email';";
      $rec=mysqli_query($con,$check);

      if($r=mysqli_num_rows($rec)>0)
      {
        echo "<script>alert('Player Already Added In List');</script>";
        echo "<script>window.location.href='finalp.php';</script>";
      }
      else  
      {        $sq="INSERT INTO `finalplist`(`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `mobile`, `gender`, `dob`, `age`, `email`, `address`, `district`, `state`, `country`, `pincode`, `tshirt_size`, `level`, `batting`, `wk`, `bowling_arm`, `bowling_pace`, `first_pref`, `captain_exp`, `password`, `re_pass`, `photo`,`coach_id`) VALUES ('$id','$fname1','$lname','$father','$mother','$mobile','$gn','$dob','$age','$email','$add','$dist','$state','$country','$pin','$size','$level','$bat','$wk','$bow_arm','$pace','$pf','$cap','$pass','$re_pass','$photo','$value');";
               $qr = mysqli_query($con, $sq);
              if ($qr) {
                  echo "<script>alert('Player Add Sucessfully');</script>";
                  echo "<script>window.location.href='finalp.php';</script>";
              }
      }


      $s="DELETE FROM `selectedp` WHERE id='$id'";
      $q=mysqli_query($con,$s);

    ?>
  