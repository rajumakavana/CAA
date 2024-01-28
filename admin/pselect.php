    <?php
        include '../connection.php';
        $id=$_GET['id'];        
        
        $data = " SELECT * FROM `ptrial`WHERE id='$id'; ";
        $qry = mysqli_query($con, $data);
        $row = mysqli_fetch_row($qry);
       

      $id= $row[0];
      $fname1= $row[1];
      $lname = $row[2];
      $mobile = $row[3];
      $gn = $row[4];
      $dob = $row[5];
      $age = $row[6];
      $email = $row[7];
      $country = $row[8];
      $level = $row[9];
      $bat = $row[10];
      $wk = $row[11];
      $bow_arm = $row[12];
      $pace = $row[13];
      $pf = $row[14];
      $cap = $row[15];
      $photo= $row[16];
      
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
            $mail->Subject = 'Trial Passed';
            $mail->Body    = 'Hello, <b>Congratulation You Passed Trial SuccessFully. </b>Download Your Certificate In Our Web Site Welcome To Our Cricket Family. Thank You, <b>Cricket Academy & Association Team</b>';
            $mail->AltBody = '';
        
            $mail->send();
            echo "<script>alert('Notification Send Success')</script>";
            
        } catch (Exception $e) 
        {
            echo "<script>alert('Message could not be sent');</script>";
        }

      $check="SELECT * FROM `selectedp` WHERE email='$email';";
      $rec=mysqli_query($con,$check);

      if($r=mysqli_num_rows($rec)>0)
      {
        echo "<script>alert('Player Already Selected');</script>";
        echo "<script>window.location.href='playertrial.php';</script>";
      }
      else
      {
              $sq = "INSERT INTO `selectedp` ( `id` ,`first_name`, `last_name`, `mobile`, `gender`, `dob`, `age`, `email`, `country`, `level`, `batting`, `wk`, `bowling_arm`, `bowling_pace`, `first_pref`, `captain_exp`, `photo`) VALUES ('$id','$fname1', '$lname', '$mobile', '$gn', '$dob', '$age', '$email', '$country', '$level', '$bat', '$wk', '$bow_arm', '$pace', '$pf', '$cap', '$photo');";
              $qr = mysqli_query($con, $sq);
              if ($qr) {
                  echo "<script>alert('Player Select Sucessfully');</script>";
                  echo "<script>window.location.href='playertrial.php';</script>";
              }
      }

    ?>
    </body>
</html>