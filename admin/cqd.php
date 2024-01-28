

    <?php
        include '../connection.php';
        $data = " SELECT * FROM `cquery` ";
        $qry = mysqli_query($con, $data);    
        $id=$_GET['id'];
        $sq="DELETE FROM `cquery` WHERE `cquery`.`coach_id` = $id;";
        $q=mysqli_query($con,$sq);
        if($q)
        {
            echo "<script>alert('Query Deleted Sucessfully');</script>";
            echo "<script>window.location.href='coachquery.php';</script>";
        }
    ?>
 