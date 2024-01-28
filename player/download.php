<?php

       session_start();
       include '../connection.php';
        $id=$_SESSION['p_id'];
        $name=$_SESSION['firstname'];
        $name2=$_SESSION['lastname'];
        
           $date= date(' jS/ F/ Y ');
              
           $sq="SELECT * FROM `t20` where `id`=$id;";
           $qr=mysqli_query($con,$sq);
           $sq2="SELECT * FROM `odi` where `id`=$id;";
           $qr2=mysqli_query($con,$sq2);
           $sq3="SELECT * FROM `test` where `id`=$id;";
           $qr3=mysqli_query($con,$sq3);
           $sq4="SELECT * FROM `totalt20` where `id`=$id;";
           $qr4=mysqli_query($con,$sq4);
           $sq5="SELECT * FROM `totalodi` where `id`=$id;";
           $qr5=mysqli_query($con,$sq5);
           $sq6="SELECT * FROM `totaltest` where `id`=$id;";
           $qr6=mysqli_query($con,$sq6);
            
            
   $html="<!DOCTYPE html>
   <html lang='en'>
   <head>
       <meta charset='UTF-8'>
       <meta http-equiv='X-UA-Compatible' content='IE=edge'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <title>Print Application</title>
       <link href='../img/favicon.png' rel='icon'>
       <link href='img/favicon.ico' rel='icon'>
 
       <!-- file css for style on report  -->
       <link rel='stylesheet' href='../index.css'>
   </head>
   <body>
       <div class='container'>
           <!-- so this row should be our header of report  -->
           <div class='row'>
               <div class='header'>
                   <div class='logo_description_report_header'>
                       <img src='../img/caa.png' alt='' class='logo'>
                       <div class='brand_company'>
                           Cricket Academy & Association
                       </div>
                       <div class='description'>
                           <small>Player Performance Report</small>
                       </div>
                   </div>
               </div>
           </div>
           <!-- divbody of report  -->
           <div class='row'>
             <hr>
               
                 <h6>Player Id : $id</h6><h6> Player Name : $name $name2</h6>      
         <h3>Monthly Report</h3>
         </div>
                         <hr>
                         <h3 align='center'>T20 Record</h3>
                         <table border='1' style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>
                         <thead>
                         <tr>
                             <th></th>
                             <th colspan='6'>Batting Record</th>
                             <th colspan='5'>Bowling Record</th>
                             <th colspan='3'>Total</th>
                             <th></th>
                         </tr>
                         <tr>
                             <th>Matches</th>
                             <th>Runs</th>
                             <th>100</th>
                             <th>50</th>
                             <th>Strike Rate</th>
                             <th>Average</th>
                             <th>Best</th>
                             <th>Wicket</th>
                             <th>Strike Rate</th>
                             <th>Economy</th>
                             <th>Average</th>
                             <th>Best</th>
                             <th>Catch</th>
                             <th>Runout</th>
                             <th>Total Performance</th>
                             <th>Report Date</th>
                         </tr>
                         </thead>
                         <tbody style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>";  
                         if(mysqli_num_rows($qr)>0)
                         {
                         while ($data = mysqli_fetch_array($qr)) 
                        { 
                            $match=$data[2];
                            $run=$data[3];
                            $cen = $data[4];
                            $half = $data[5];
                            $br = $data[6];
                            $avg=$data[7];
                            $best=$data[8];
                            $wkt=$data[9];
                            $bsr=$data[10];
                            $eco=$data[11];
                            $avg2=$data[12];
                            $best2=$data[13];
                            $catch=$data[14];
                            $runout=$data[15];
                            $tf=$data[16];
                            $rd=$data[17];
                            $html.="<tr><td>$match</td>";
                            $html.="<td>$run</td>";
                            $html.="<td>$cen</td>";
                            $html.="<td>$half</td>";
                            $html.="<td>$br</td>";
                            $html.="<td>$avg</td>";    
                            $html.="<td>$best</td>";
                            $html.="<td>$wkt</td>";
                            $html.="<td>$bsr</td>";
                            $html.="<td>$eco</td>";
                            $html.="<td>$avg2</td>";
                            $html.="<td>$best2</td>";
                            $html.="<td>$catch</td>";
                            $html.="<td>$runout</td>";
                            $html.="<td>$tf</td>";
                            $html.="<td>$rd</td></tr>";
                            
                        } 
                    }
                    else
                    {
                        $html.="<tr><td colspan='16' align='center'>No Record Available</td></tr>";
                    }              
                        $html.="</tbody></table>";
                        $html.="
                        
                         <h3 align='center'>ODI Record</h3>
                         <table border='1' style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>
                         <thead>
                         <tr>
                             <th></th>
                             <th colspan='6'>Batting Record</th>
                             <th colspan='5'>Bowling Record</th>
                             <th colspan='3'>Total</th>
                             <th></th>
                         </tr>
                         <tr>
                             <th>Matches</th>
                             <th>Runs</th>
                             <th>100</th>
                             <th>50</th>
                             <th>Strike Rate</th>
                             <th>Average</th>
                             <th>Best</th>
                             <th>Wicket</th>
                             <th>Strike Rate</th>
                             <th>Economy</th>
                             <th>Average</th>
                             <th>Best</th>
                             <th>Catch</th>
                             <th>Runout</th>
                             <th>Total Performance</th>
                             <th>Report Date</th>
                         </tr>
                         </thead>
                         <tbody style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>";  
                         if(mysqli_num_rows($qr2)>0)
                         {
                         while ($data = mysqli_fetch_array($qr2)) 
                        { 
                            $match=$data[2];
                            $run=$data[3];
                            $cen = $data[4];
                            $half = $data[5];
                            $br = $data[6];
                            $avg=$data[7];
                            $best=$data[8];
                            $wkt=$data[9];
                            $bsr=$data[10];
                            $eco=$data[11];
                            $avg2=$data[12];
                            $best2=$data[13];
                            $catch=$data[14];
                            $runout=$data[15];
                            $tf=$data[16];
                            $rd=$data[17];
                            $html.="<tr><td>$match</td>";
                            $html.="<td>$run</td>";
                            $html.="<td>$cen</td>";
                            $html.="<td>$half</td>";
                            $html.="<td>$br</td>";
                            $html.="<td>$avg</td>";    
                            $html.="<td>$best</td>";
                            $html.="<td>$wkt</td>";
                            $html.="<td>$bsr</td>";
                            $html.="<td>$eco</td>";
                            $html.="<td>$avg2</td>";
                            $html.="<td>$best2</td>";
                            $html.="<td>$catch</td>";
                            $html.="<td>$runout</td>";
                            $html.="<td>$tf</td>";
                            $html.="<td>$rd</td></tr>";
                            
                        } 
                    }
                    else
                    {
                        $html.="<tr><td colspan='16' align='center'>No Record Available</td></tr>";
                    }              
                        $html.="</tbody></table>";
                        $html.="
                         <h3 align='center'>TEST Record</h3>
                         <table border='1' style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>
                         <thead>
                         <tr>
                             <th></th>
                             <th colspan='6'>Batting Record</th>
                             <th colspan='5'>Bowling Record</th>
                             <th colspan='3'>Total</th>
                             <th></th>
                         </tr>
                         <tr>
                             <th>Matches</th>
                             <th>Runs</th>
                             <th>100</th>
                             <th>50</th>
                             <th>Strike Rate</th>
                             <th>Average</th>
                             <th>Best</th>
                             <th>Wicket</th>
                             <th>Strike Rate</th>
                             <th>Economy</th>
                             <th>Average</th>
                             <th>Best</th>
                             <th>Catch</th>
                             <th>Runout</th>
                             <th>Total Performance</th>
                             <th>Report Date</th>
                         </tr>
                         </thead>
                         <tbody style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>";  
                        if(mysqli_num_rows($qr3)>0)
                        {
                         while ($data = mysqli_fetch_array($qr3)) 
                        { 
                            $match=$data[2];
                            $run=$data[3];
                            $cen = $data[4];
                            $half = $data[5];
                            $br = $data[6];
                            $avg=$data[7];
                            $best=$data[8];
                            $wkt=$data[9];
                            $bsr=$data[10];
                            $eco=$data[11];
                            $avg2=$data[12];
                            $best2=$data[13];
                            $catch=$data[14];
                            $runout=$data[15];
                            $tf=$data[16];
                            $rd=$data[17];
                            $html.="<tr><td>$match</td>";
                            $html.="<td>$run</td>";
                            $html.="<td>$cen</td>";
                            $html.="<td>$half</td>";
                            $html.="<td>$br</td>";
                            $html.="<td>$avg</td>";    
                            $html.="<td>$best</td>";
                            $html.="<td>$wkt</td>";
                            $html.="<td>$bsr</td>";
                            $html.="<td>$eco</td>";
                            $html.="<td>$avg2</td>";
                            $html.="<td>$best2</td>";
                            $html.="<td>$catch</td>";
                            $html.="<td>$runout</td>";
                            $html.="<td>$tf</td>";
                            $html.="<td>$rd</td></tr>";
                            
                        }
                    }
                    else
                    {
                        $html.="<tr><td colspan='16' align='center'>No Record Available</td></tr>";
                    }         
                        $html.="</tbody></table><hr><br><br><br><br><br><br><br><br><br><br>";
                        $html.="<h3> Total Record</h3>";
                        $html.="
                        <h4>Total T20 Record</h4>
                         <table border='1' style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>
                         <thead>
                         
                         <tr>
                             <th>Matches</th>
                             <th>Runs</th>
                             <th>100</th>
                             <th>50</th>
                             <th>Wicket</th>
                             <th>Catch</th>
                             <th>Runout</th>
                         </tr>
                         </thead>
                         <tbody style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>";  
                         if(mysqli_num_rows($qr4)>0)
                         {
                         while ($data = mysqli_fetch_array($qr4)) 
                        { 
                            $match=$data[2];
                            $run=$data[3];
                            $cen = $data[4];
                            $half = $data[5];
                            $wkt=$data[6];                            
                            $catch=$data[7];
                            $runout=$data[8];

                            $html.="<tr><td>$match</td>";
                            $html.="<td>$run</td>";
                            $html.="<td>$cen</td>";
                            $html.="<td>$half</td>";
                            $html.="<td>$wkt</td>";
                            $html.="<td>$catch</td>";
                            $html.="<td>$runout</td>";
                           
                            
                        } 
                    }
                    else
                    {
                        $html.="<tr><td colspan='7' align='center'>No Record Available</td></tr>";
                    }    
                        $html.="</tbody></table>";
                        $html.="
                        <h4>Total Odi Record</h4>
                         <table border='1' style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>
                         <thead>
                         
                         <tr>
                             <th>Matches</th>
                             <th>Runs</th>
                             <th>100</th>
                             <th>50</th>
                             <th>Wicket</th>
                             <th>Catch</th>
                             <th>Runout</th>
                         </tr>
                         </thead>
                         <tbody style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>";  
                         if(mysqli_num_rows($qr5)>0)
                         {
                         while ($data = mysqli_fetch_array($qr5)) 
                        { 
                            $match=$data[2];
                            $run=$data[3];
                            $cen = $data[4];
                            $half = $data[5];
                            $wkt=$data[6];                            
                            $catch=$data[7];
                            $runout=$data[8];

                            $html.="<tr><td>$match</td>";
                            $html.="<td>$run</td>";
                            $html.="<td>$cen</td>";
                            $html.="<td>$half</td>";
                            $html.="<td>$wkt</td>";
                            $html.="<td>$catch</td>";
                            $html.="<td>$runout</td>";
                           
                            
                        } 
                    }
                    else
                    {
                        $html.="<tr><td colspan='7' align='center'>No Record Available</td></tr>";
                    }        
                        $html.="</tbody></table>";
                        $html.="
                        <h4>Total Test Record</h4>
                         <table border='1' style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>
                         <thead>
                         
                         <tr>
                             <th>Matches</th>
                             <th>Runs</th>
                             <th>100</th>
                             <th>50</th>
                             <th>Wicket</th>
                             <th>Catch</th>
                             <th>Runout</th>
                         </tr>
                         </thead>
                         <tbody style='background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;'>";  
                         if(mysqli_num_rows($qr6)>0)
                         {
                         while ($data = mysqli_fetch_array($qr6)) 
                        { 
                            $match=$data[2];
                            $run=$data[3];
                            $cen = $data[4];
                            $half = $data[5];
                            $wkt=$data[6];                            
                            $catch=$data[7];
                            $runout=$data[8];

                            $html.="<tr><td>$match</td>";
                            $html.="<td>$run</td>";
                            $html.="<td>$cen</td>";
                            $html.="<td>$half</td>";
                            $html.="<td>$wkt</td>";
                            $html.="<td>$catch</td>";
                            $html.="<td>$runout</td>";
                           
                            
                        } 
                    }
                    else
                    {
                        $html.="<tr><td colspan='7' align='center'>No Record Available</td></tr>";
                    }     
                        $html.="</tbody></table>";
                         $html.="       
                   <div class='container_details'>
                       
                   </div>
               </div>
           </div>
           <!-- footer of report  -->
           
               <div class='address' align='center'>
               <br><br><br><br><br><br><br><br>
               <span style='font-size:15px; '><b><i>Verified By :</i></b></span><br>
               <span style='font-size:15px; '><b><i> Cricket Academy & Association Team</i></b></span><br><br><br><br><br>
               <span><img src='../img/caa.png' width='200px' height='150px' style='margin-top:-180px;'></span>
               </div>
               <div class='tel'>
               <span style='font-size:10px'><i>Print Date : $date</i></span><br><br>
               </div>
           </div>
       </div>
   </body>
   </html>";        
  
  include "../vendor/autoload.php";
  $mpdf=new \Mpdf\Mpdf();
  $mpdf->SetDisplayMode('fullpage');
  $mpdf->Bookmark('Start of the document');
  $mpdf->WriteHtml($html);
  //$file=Report.'.pdf';
  $mpdf->output('Report.pdf','D');
  
  $mpdf->output();
  
  exit();
