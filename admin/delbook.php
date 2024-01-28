<?php
  include '../connection.php';
  $id = $_GET['id'];

$sq =  "DELETE FROM `ticket` WHERE `ticket`.`bkg_id` = '$id'";
$qr = mysqli_query($con, $sq);
if ($qr) 
{
  echo "<script>alert('Record Delete Sucessfully');</script>";
  echo "<script>window.location.href='booking.php';</script>";
}  
              
?>