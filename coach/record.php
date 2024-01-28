<?php
              include '../connection.php';
              if(isset($_POST['donert']))
              {
                $format=$_POST['format'];  
                $pid=$_POST['p_id'];
                $name=$_POST['p_name'];
                $r_date=$_POST['r_date'];
                $match=$_POST['match'];
                $run =$_POST['p_runs'];
                $cen=$_POST['100'];
                $half=$_POST['half'];
                $sr=$_POST['p_strike'];
                $avg1=$_POST['avg'];
                $bestbat =$_POST['bat_best'];
                $wkt=$_POST['p_wk'];
                $bsr=$_POST['p_bstrike'];
                $eco=$_POST['p_econo'];
                $avg2=$_POST['p_bavg'];
                $best_bal=$_POST['best_ball'];
                $catch=$_POST['p_catch'];
                $runout=$_POST['p_runout'];
                $p_tf=$_POST['p_perform'];                
                  
                if($format=='T20')
                {                      
                       $search="SELECT * FROM `totalt20`";
                       $query=mysqli_query($con,$search);

                       
                         while($rec=mysqli_fetch_array($query))
                         {
                             $id=$rec['id'];
                         }
                         if($pid==$id)
                         {
                         $search2="SELECT * FROM `totalt20` where `id`='$pid'";
                         $query2=mysqli_query($con,$search2);
                              
                         while($rec2=mysqli_fetch_array($query2))
                         {
                                  
                                     $p_match=$rec2['matches'];
                                     $p_run=$rec2['runs'];
                                     $p_100=$rec2['100'];
                                     $p_50=$rec2['50']; 
                                     $p_wkt=$rec2['wkts'];
                                     $p_catch=$rec2['catch'];
                                     $p_runout=$rec2['runout'];
                                    
                         }
                               $t_runs=$run+$p_run;
                               $t_wkts=$wkt+$p_wkt;
                               $t_matches=$p_match + $match;      
                               $t_100=$p_100 + $cen;
                               $t_half=$p_50 + $half;                             
                               $t_catch=$p_catch + $catch;
                               $t_runout=$p_runout + $runout;


                             

                               $update="UPDATE `totalt20` SET `matches` = '$t_matches', `runs` = '$t_runs', `100` = '$t_100', `50` = '$t_half', `wkts` = '$t_wkts', `catch` = '$t_catch', `runout` = '$t_runout' WHERE `totalt20`.`id` = '$pid';";
                               $upqry=mysqli_query($con,$update);

                               if($upqry)
                               {
                                     echo "<script>alert('Player T20 Report Submited');</script>";
                                     echo "<script>window.location.href='preport.php';</script>";
                               }
                        }                                              
                        else
                        {  
                               $sqtotal="INSERT INTO `totalt20` (`id`, `name`, `matches`, `runs`, `100`, `50`, `wkts`, `catch`, `runout`) VALUES('$pid', '$name', '$match', '$run', '$cen', '$half', '$wkt', '$catch', '$runout');";
                               $qrtotal=mysqli_query($con,$sqtotal);

                               if($qrtotal)
                               {
                                     echo "<script>alert('Player T20 Report Submited');</script>";
                                     echo "<script>window.location.href='preport.php';</script>";
                               }
                        }
                        $sq2="INSERT INTO `t20` (`id`, `name`, `matches`, `runs`, `100`,`50`,`bst_sr`, `avg`, `best_bat`, `wkts`, `bow_sr`, `economy`, `avg2`, `best_bowl`, `catch`, `runout`, `total_PF`, `report_date`)VALUES('$pid', '$name', '$match', '$run','$cen','$half', '$sr', '$avg1', '$bestbat', '$wkt', '$bsr', '$eco', '$avg2', '$best_bal', '$catch', '$runout', '$p_tf', '$r_date');";
                        $qry2=mysqli_query($con,$sq2);
                        
                             
                                      
                  }
                  
                                       
                if($format=='ODI')
                {
                   $search3="SELECT * FROM `totalodi`";
                   $query3=mysqli_query($con,$search3);

                  
                     while($rec3=mysqli_fetch_array($query3))
                     {
                         $id=$rec3['id'];
                     }
                     if($pid==$id)
                     {
                     $search4="SELECT * FROM `totalodi` where `id`='$pid'";
                     $query4=mysqli_query($con,$search4);
                         
                               while($rec4=mysqli_fetch_array($query4))
                               {

                                 $p_match=$rec4['matches'];
                                 $p_run=$rec4['runs'];
                                 $p_100=$rec4['100'];
                                 $p_50=$rec4['50']; 
                                 $p_wkt=$rec4['wkts'];
                                 $p_catch=$rec4['catch'];
                                 $p_runout=$rec4['runout'];
                                
                               }     
                           $t_runs=$run+$p_run;
                           $t_wkts=$wkt+$p_wkt;
                           $t_matches=$p_match + $match;      
                           $t_100=$p_100 + $cen;
                           $t_half=$p_50 + $half;                             
                           $t_catch=$p_catch + $catch;
                           $t_runout=$p_runout + $runout;


                         

                           $updateodi="UPDATE `totalodi` SET `matches` = '$t_matches', `runs` = '$t_runs', `100` = '$t_100', `50` = '$t_half', `wkts` = '$t_wkts', `catch` = '$t_catch', `runout` = '$t_runout' WHERE `totalodi`.`id` = '$pid';";
                           $upqryodi=mysqli_query($con,$updateodi);

                           if($upqryodi)
                           {
                                 echo "<script>alert('Player ODI Report Submited');</script>";
                                 echo "<script>window.location.href='preport.php';</script>";
                           }
                        
                   }                        
                   else
                   {  
                           $sqtotalodi="INSERT INTO `totalodi` (`id`, `name`, `matches`, `runs`, `100`, `50`, `wkts`, `catch`, `runout`) VALUES('$pid', '$name', '$match', '$run', '$cen', '$half', '$wkt', '$catch', '$runout');";
                           $qrtotalodi=mysqli_query($con,$sqtotalodi);

                           if($qrtotalodi)
                           {
                                 echo "<script>alert('Player ODI Report Submited');</script>";
                                 echo "<script>window.location.href='preport.php';</script>";
                           }
                    }
                  $sq3odi="INSERT INTO `odi` (`id`, `name`, `matches`, `runs`, `100`,`50`,`bst_sr`, `avg`, `best_bat`, `wkts`, `bow_sr`, `economy`, `avg2`, `best_bowl`, `catch`, `runout`, `total_PF`, `report_date`)VALUES('$pid', '$name', '$match', '$run','$cen','$half', '$sr', '$avg1', '$bestbat', '$wkt', '$bsr', '$eco', '$avg2', '$best_bal', '$catch', '$runout', '$p_tf', '$r_date');";
                  $qry3odi=mysqli_query($con,$sq3odi);
                  
                     
                }
                // else{
                //       echo "<script>alert('Please Select Format');</script>";$error='Please First Select Format';
                //       echo "<script>window.location.href='preport.php';</script>";
                //       //header("location:preport.php");
                // }

                if($format=='TEST')
                {
                   $search5="SELECT * FROM `totaltest`";
                   $query5=mysqli_query($con,$search5);

                   
                     while($rec5=mysqli_fetch_array($query5))
                     {
                         $id=$rec5['id'];
                     }
                     if($pid==$id)
                     {
                     $search6="SELECT * FROM `totaltest` where `id`='$pid'";
                     $query6=mysqli_query($con,$search6);
                         
                     while($rec6=mysqli_fetch_array($query6))
                     {
                              
                                 $p_match=$rec6['matches'];
                                 $p_run=$rec6['runs'];
                                 $p_100=$rec6['100'];
                                 $p_50=$rec6['50']; 
                                 $p_wkt=$rec6['wkts'];
                                 $p_catch=$rec6['catch'];
                                 $p_runout=$rec6['runout'];
                                
                     }
                           $t_runs=$run+$p_run;
                           $t_wkts=$wkt+$p_wkt;
                           $t_matches=$p_match + $match;      
                           $t_100=$p_100 + $cen;
                           $t_half=$p_50 + $half;                             
                           $t_catch=$p_catch + $catch;
                           $t_runout=$p_runout + $runout;


                         

                           $updatetest="UPDATE `totaltest` SET `matches` = '$t_matches', `runs` = '$t_runs', `100` = '$t_100', `50` = '$t_half', `wkts` = '$t_wkts', `catch` = '$t_catch', `runout` = '$t_runout' WHERE `totaltest`.`id` = '$pid';";
                           $upqrytest=mysqli_query($con,$updatetest);

                           if($upqrytest)
                           {
                                 echo "<script>alert('Player TEST Report Submited');</script>";
                                 echo "<script>window.location.href='preport.php';</script>";
                           }
                   }                        
                   else
                   {  
                           $sqtotaltest="INSERT INTO `totaltest` (`id`, `name`, `matches`, `runs`, `100`, `50`, `wkts`, `catch`, `runout`) VALUES('$pid', '$name', '$match', '$run', '$cen', '$half', '$wkt', '$catch', '$runout');";
                           $qrtotaltest=mysqli_query($con,$sqtotaltest);

                           if($qrtotaltest)
                           {
                                 echo "<script>alert('Player TEST Report Submited');</script>";
                                 echo "<script>window.location.href='preport.php';</script>";
                           }
                    }
                  $sq4test="INSERT INTO `test` (`id`, `name`, `matches`, `runs`,`100`,`50`, `bst_sr`, `avg`, `best_bat`, `wkts`, `bow_sr`, `economy`, `avg2`, `best_bowl`, `catch`, `runout`, `total_PF`, `report_date`) VALUES('$pid', '$name', '$match', '$run','$cen','$half', '$sr', '$avg1', '$bestbat', '$wkt', '$bsr', '$eco', '$avg2', '$best_bal', '$catch', '$runout', '$p_tf', '$r_date');";
                  $qry4test=mysqli_query($con,$sq4test);   

            }
      }

      ?>