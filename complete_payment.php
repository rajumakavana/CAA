<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="img/favicon.png" rel="icon">
<link href="img/favicon.ico" rel="icon">
<?php
session_start();
    include 'connection.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'f_pass/PHPMailer/src/Exception.php';
    require 'f_pass/PHPMailer/src/PHPMailer.php';
    require 'f_pass/PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';

 if(!isset($_SESSION['user']))
 {
	header('location:ticket.php');
 }

if(isset($_POST['payment']))
{
        $enterotp=$_POST['enterotp'];
}

       $mn=$_SESSION['matchno'];
       $mf=$_SESSION['mf'];
       $md= $_SESSION['md'];
       $mt= $_SESSION['mt'];
       $t1= $_SESSION['t1'];
       $t2= $_SESSION['t2'];
       $email=$_SESSION['user'];
       $seat=$_SESSION['seat'];
       $price=$_SESSION['amount'];
       $otp=$_SESSION['otp'];
//OTP Code
if($enterotp==$otp)
{
    $bookid="BKID".rand(1000,9999);
    mysqli_query($con,"INSERT INTO `ticket` (`bkg_id`, `match_no`, `format`, `match_date`, `match_time`, `team1`, `team2`, `email`, `total_seat`, `price`) VALUES('$bookid', '$mn', '$mf', '$md', '$mt', '$t1', '$t2', '$email', '$seat', '$price');");
    
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
        $mail->Subject = 'Match Ticket Booked';
        $mail->Body    = 'Hi ! Your Ticket Booking Process Success. <b>Bookind Id :'.$bookid.'. Total Seat : '.$seat.'. Total Price :'.$price.' Thank You, <b>Cricket Academy & Association Team</b>';
        $mail->AltBody = '';
    
        $mail->send();

    } 
    catch (Exception $e) 
    {
        echo "<script>alert('Check Your Internet Connction');</script>";
    } 

    $_SESSION['success']="Your Ticket Booking Successfully";
}
else
{
    echo "<script>alert('Payment Failed Please Try Again');</script>";
    echo "<script>window.location.href='fmatch.php';</script>";
}
?>
<body><table align='center'><tr><td><STRONG>Transaction is being processed,</STRONG></td></tr><tr><td><font color='blue'>Please Wait <i class="fa fa-spinner fa-pulse fa-fw"></i>
<span class="sr-only"></font></td></tr><tr><td>(Do not 'RELOAD' this page or 'CLOSE' this page)</td></tr></table><h2>
<script>
    setTimeout(function(){ window.location="bank.php"; }, 3000);
</script>