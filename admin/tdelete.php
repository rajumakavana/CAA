
    <?php
        include '../connection.php';
        $id=$_GET['id'];
        $data = " SELECT * FROM `ptrial` where `id`='$id';";
        $qry = mysqli_query($con, $data);    
       
        // while($fetch=mysqli_fetch_row($qry))
        // {
        //     $email=$fetch['email'];
        // }

        // use PHPMailer\PHPMailer\PHPMailer;  
        // use PHPMailer\PHPMailer\Exception;
        // include '../connection.php';
        // require '../f_pass/PHPMailer/src/Exception.php';
        // require '../f_pass/PHPMailer/src/PHPMailer.php';
        // require '../f_pass/PHPMailer/src/SMTP.php';
        // require '../vendor/autoload.php';
            
        //   $mail=new PHPMailer(true);
    
        //   try {
        //     //Server settings
        //     //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        //     $mail->isSMTP();                                            //Send using SMTP
        //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        //     $mail->Username   = 'crickteamofficial@gmail.com';                     //SMTP username
        //     $mail->Password   = 'dplljyefpkqtsmty';                               //SMTP password
        //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        //     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        //     //Recipients
        //     $mail->setFrom('crickteamofficial@gmail.com', 'Cricket Academy & Association');
        //     $mail->addAddress($email);     //Add a recipient
        //     //$mail->addAddress('ellen@example.com');               //Name is optional
        //     //$mail->addReplyTo('crickteamofficial@gmail.com', 'no-reply');
        //     //$mail->addCC('cc@example.com');
        //     //$mail->addBCC('bcc@example.com');
        
        //     //Attachments
        //     //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
        //     //Content
        //     $mail->isHTML(true);                                  //Set email format to HTML
        //     $mail->Subject = 'Registation Failed';
        //     $mail->Body    = 'Hello, We Are Sorry To Say <b>You Failed In Trial </b>. Please Try Next Time . Thank You , <b>Cricket Academy & Association Team</b>';
        //     $mail->AltBody = '';
        
        //     $mail->send();
        //     echo "<script>alert('Notification Send Success')</script>";
            
        // } catch (Exception $e) 
        // {
        //     echo "<script>alert('Message could not be sent');</script>. Mailer Error: {$mail->ErrorInfo}";
        // }

        $sq="DELETE FROM `ptrial` WHERE `ptrial`.`id` = $id;";
        $q=mysqli_query($con,$sq);
        if($q)
        {
            echo "<script>alert('Player Remove Sucessfully');</script>";
            echo "<script>window.location.href='playertrial.php';</script>";
        }
        
            

    ?>
