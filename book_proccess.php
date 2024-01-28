<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    include 'connection.php';
    require 'f_pass/PHPMailer/src/Exception.php';
    require 'f_pass/PHPMailer/src/PHPMailer.php';
    require 'f_pass/PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';

    $rand  = rand(000000, 999999);

    if(isset($_POST['book']))
    {
        $matchno=$_POST['mno'];
        $format=$_POST['mformat'];
        $date=$_POST['mdate'];
        $time=$_POST['mtime'];
        $team1=$_POST['t1'];
        $team2=$_POST['t2'];
        $email=$_POST['email'];
        $seat=$_POST['seat'];
        $price=$_POST['price'];
        $dnumber=$_POST['cnumber'];
    
        $_SESSION['matchno']=$matchno;
        $_SESSION['mf']=$format;
        $_SESSION['md']=$date;
        $_SESSION['mt']=$time;
        $_SESSION['t1']=$team1;
        $_SESSION['t2']=$team2;
        $_SESSION['user']=$email;
        $_SESSION['seat']=$seat;
        $_SESSION['amount']=$price;
        $_SESSION['number']=$dnumber;
    }  

    $mail=new PHPMailer(true);
    $_SESSION['otp'] = $rand;
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
        $mail->Subject = 'One Time Password';
        $mail->Body    = 'Hi ! Your OTP Code : <b>'.$rand.'</b>  This Code Use For Ticket Booking. Thank You, <b>Cricket Academy & Association Team</b>';
        $mail->AltBody = '';
    
        $mail->send();
        echo "<script>alert('Verification Code Send Success')</script>";
        echo "<script>window.location.href='bank.php';</script>";
    } catch (Exception $e) 
    {
        echo "<script>alert('OTP could not be sent Check Your Internet Connction');</script>";
        echo "<script>window.location.href='fmatch.php';</script>";
    }   
?>