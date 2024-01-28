
    <?php
        include '../connection.php';
        
        $data = " SELECT * FROM `regcoach` ";
        $qry = mysqli_query($con, $data);    
        $id=$_GET['id'];
        $sq="DELETE FROM `regcoach` WHERE `regcoach`.`id` = $id;";
        $q=mysqli_query($con,$sq);
        if($q)
        {
            echo "<script>alert('Coach Record Deleted Sucessfully');</script>";
            echo "<script>window.location.href='coachreg.php';</script>";
        }
    ?>
    