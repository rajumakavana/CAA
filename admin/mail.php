<?php
    session_start();

    $email=$_SESSION['email'];
    $subject=$_SESSION['sub'];
    $msg=$_SESSION['msg'];

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
        $mail->Subject = $subject;
        $mail->Body    = $msg;
        $mail->AltBody = '';
    
        $mail->send();
        echo "<script>alert('Email Send Success')</script>";
        echo "<script>window.location.href='adindex.php'</script>";
        
    } catch (Exception $e) 
    {
        echo "<script>alert('Email could not be sent');</script>";
        echo "<script>window.location.href='adindex.php'</script>";
    }

?>