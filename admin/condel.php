<?php
    include '../connection.php';

        $data = " SELECT * FROM `Contact` ";
        $qry = mysqli_query($con, $data);    
        $id=$_GET['id'];
        $sq="DELETE FROM `contact` WHERE `contact`.`id` = $id;";
        $q=mysqli_query($con,$sq);
        if($q)
        {
            echo "<script>alert('Detail Deleted Sucessfully');</script>";
            echo "<script>window.location.href='contact.php';</script>";
        }
?>
    