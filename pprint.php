<?php
        include 'connection.php';
       if(isset($_GET['print']))
       {
           $id=$_GET['id'];
          
           $data = "SELECT * FROM `regplayer` WHERE id ='$id';";
           $qry = mysqli_query($con, $data);
           $row = mysqli_fetch_row($qry);

           $id=$row[0];
           $fname=$row[1];
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
           $level=$row[16];
           $bat=$row[17];
           $wk=$row[18];
           $bow_arm=$row[19];
           $bow_p=$row[20];
           $f_pre=$row[21];
           $c_exp=$row[22];
           $photo=$row[25];

           $date= date(' jS \of F Y ');
           
       }

       if(isset($_GET['id']))
       {
           $id=$_GET['id'];
          
           $data = "SELECT * FROM `regplayer` WHERE id ='$id';";
           $qry = mysqli_query($con, $data);
           $row = mysqli_fetch_row($qry);

           $id=$row[0];
           $fname=$row[1];
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
           $level=$row[16];
           $bat=$row[17];
           $wk=$row[18];
           $bow_arm=$row[19];
           $bow_p=$row[20];
           $f_pre=$row[21];
           $c_exp=$row[22];
           $photo=$row[25];

           $date= date(' jS \of F Y ');
           
       }


        
        
     $html="
  <!DOCTYPE html>
  <html lang='en'>
  <head>
      <meta charset='UTF-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Print Application</title>

      <!-- file css for style on report  -->
      <link rel='stylesheet' href='./index.css'>
  </head>
  <body>
      <div class='container'>
          <!-- so this row should be our header of report  -->
          <div class='row'>
              <div class='header'>
                  <div class='logo_description_report_header'>
                      <img src='./img/caa.png' alt='' class='logo'>
                      <div class='brand_company'>
                          Cricket Academy & Association
                      </div>
                      <div class='description'>
                          <small>Player Register Report</small>
                      </div>
                  </div>
              </div>
          </div>
          <!-- body of report  -->
          <div class='row'>
          <hr>
              <div class='body_report'>
                  <div class='name_header'>
                  
                    <h2 align='center'><u><i>Basic Information</i></u></h2>
                      <div class='basic'>
                      <p>Reg. ID              : <span style='font-size:15px'><b>$id</b></span></p>
                      <p>First Name                  : <span style='font-size:15px'><b>$fname</b></span></p>
                      <p>Last Name       : <span style='font-size:15px'><b>$lname</b></span></p>
                      <p>Father Name            : <span style='font-size:15px'><b>$father</b></span></p>
                      <p>Mother Name              : <span style='font-size:15px'><b>$mother</b></span> </p>
                      <p>Mobile                :  <span style='font-size:15px'><b>$mobile</b></span></p>
                      <p>Gender                 : <span style='font-size:15px'><b>$gn</b></span></p>
                      <p>Date of Birth                  : <span style='font-size:15px'><b>$dob</b></span> </p>
                      <p>Age        : <span style='font-size:15px'><b>$age</b></span></p>
                      <p>Email            :  <span style='font-size:15px'><b>$email</b></span></p>
                      <p>Address               : <span style='font-size:15px'><b>$add</b></span></p>
                      <p>District               : <span style='font-size:15px'><b>$dist</b></span></p>
                      <p>State                 : <span style='font-size:15px'><b>$state</b></span></p>
                      <p>Country                : <span style='font-size:15px'><b>$country</b></span></p>
                      <p>Pincode        : <span style='font-size:15px'><b>$pin</b></span></p>
                      </div>
                    <hr>
                    <h2 align='center'>Cricket Information</h2>
                      <div class='crick'>
                      <p>Level               : <span style='font-size:15px'><b>$level</b></span> </p>
                      <p>Batting                : <span style='font-size:15px'><b>$bat</b></span> </p>
                      <p>Wicket Keeper                 : <span style='font-size:15px'><b>$wk</b></span></p>
                      <p>Bowling Arm                 :<span style='font-size:15px'><b>$bow_arm</b></span> </p>
                      <p>Bowling Pace        : <span style='font-size:15px'><b>$bow_p</b></span></p>
                      <p>First Preference            : <span style='font-size:15px'><b>$f_pre</b></span> </p>
                      <p>Captain Experience               : <span style='font-size:15px'><b>$c_exp</b></span></p>
                      <hr>
                      </div>
                  </div>
                  <div class='Header_title' align='left'>
                  <h3> Photo :</h3> 
                          <div align='left'>
                             <br>              
                                <img src='$row[25] ' width='200px' height='200px'>
                          </div>
                  </div>
                  <hr>
                  <div class='container_details'>
                      
                  </div>
              </div>
          </div>
          <!-- footer of report  -->
          <div class='row'>
              <div class='address' align='center'>
              <br><br><br><br><br><br><br><br>
              <span style='font-size:20px; '><b><i> Cricket Academy & Association Team</i></b></span><br><br><br><br><br>
              <span><img src='./img/caa.png' width='200px' style='margin-top:-95px;'></span>
              </div>
              <div class='tel'>
              <span style='font-size:15px'><i>Print Date : $date</i></span><br><br>
              </div>
          </div>
      </div>
  </body>
  </html>
";

  
  
  include "vendor/autoload.php";
  $mpdf=new \Mpdf\Mpdf();
  $mpdf->SetDisplayMode('fullpage');
  $mpdf->Bookmark('Start of the document');
  $mpdf->WriteHtml($html);
  $file=Application.'.pdf';
  $mpdf->output($file,'D');
  
  //$mpdf->output();
  
  exit();
?>