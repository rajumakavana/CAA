<?php
include '../connection.php';
$data = " SELECT * FROM `pquery` ";
$qry = mysqli_query($con, $data);    
$id=$_GET['id'];
$sq="DELETE FROM `pquery` WHERE `pquery`.`player_id` = $id;";
$q=mysqli_query($con,$sq);
if($q)
{
    echo "<script>alert('Query Deleted Sucessfully');</script>";
    echo "<script>window.location.href='pquery.php';</script>";
}
?>
