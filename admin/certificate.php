<?php
    include '../connection.php';
    $id=$_GET['id'];
    
    $data = " SELECT * FROM `finalplist` WHERE id='$id';";
    $qry = mysqli_query($con, $data);
    $row = mysqli_fetch_row($qry);

    $fname=$row[1];
    $lname=$row[2];  
    
    $date= date(' jS \of F Y ');
  
  

  $html="<div style='width:800px; height:600px; padding:20px; text-align:center; border: 20px solid #787878;  background: url(../img/caa.png) no-repeat center center / cover; background-size: 580px;  background-position:left top; '>
        <div style='width:750px; height:550px; padding:20px; text-align:center; border: 10px solid #787878 '>
       <span style='font-size:30px; font-weight:bold'>Certificate of Cricket Academy & Association</span>
       <br><br>
       <span style='font-size:15px'><i>THIS IS TO CERTIFY THAT</i></span>
       <br><br>
       <span style='font-size:25px'><b>$fname $lname</b></span><br/><br/>
       <span style='font-size:15px'><i>has successfully completed the Trial.</i></span> <br/><br/>
       <span style='font-size:20px'>Congratulation And Best Wishes For Cricket Career.</span> <br/>
       <span style='font-size:20px'><h3>Welcome To CRICKET ACADEMY & ASSOCIATION Family</h3> </b></span>
       <span style='font-size:15px'><i>Issued On: $date</i></span><br><br><br>
      <span style='font-size:20px'>Issued By : Cricket Academy & Association</span><br>
      <span><img src='../img/certi.png' width='200px' style='margin-top:-95px;'></span>
      
      </div>
      </div>";

  include "../vendor/autoload.php";
  $mpdf=new \Mpdf\Mpdf();
  $mpdf->SetDisplayMode('fullpage');
  $style=file_get_contents('css/stylecer.css');
  $mpdf->WriteHtml($style,1);
  $mpdf->WriteHtml($html);
  $file=Certificate.'.pdf';
  $mpdf->output($file,'D');

  //header("location:trial.php");
  
  $mpdf->output();
  
  exit();
?>