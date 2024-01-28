
<?php
        include '../connection.php';
        $data = " SELECT * FROM `finalplist` ";
        $qry = mysqli_query($con, $data);    
        $id=$_GET['id'];
        $sq="DELETE FROM `finalplist` WHERE `finalplist`.`id` = $id;";
        $q=mysqli_query($con,$sq);
        if($q)
        {
            echo "<script>alert('Player Deleted Sucessfully');</script>";
            echo "<script>window.location.href='playerlist1.php';</script>";
        }
?>