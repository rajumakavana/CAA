<?php
include '../connection.php';

$data = " SELECT * FROM `fmatches` ";
$qry = mysqli_query($con, $data);    
$id=$_GET['id'];
$sq="DELETE FROM `fmatches` WHERE `fmatches`.`matchno` = $id;";
$q=mysqli_query($con,$sq);
if($q)
{
    echo "<script>alert('Match Deleted Sucessfully');</script>";
    echo "<script>window.location.href='featurem.php';</script>";
}
?>