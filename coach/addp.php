<?php
    session_start();
    include '../connection.php';
    $c_id=$_SESSION['c_id'];
    $id = $_GET['id'];
        
    $search="SELECT * FROM `finalplist` where `id`=$id;";
    $qry=mysqli_query($con,$search);
    while($rec=mysqli_fetch_array($qry))
    {
        $coachid=$rec['coach_id'];
    }
    if($coachid==0)
    {
        $sq="UPDATE `finalplist` SET `coach_id`='$c_id' WHERE `id`='$id'";
        $qy=mysqli_query($con,$sq);
    
        if ($qy) 
        {
        echo "<script>alert('Player Added Sucessfully');</script>";
        echo "<script>window.location.href='addplayer.php';</script>";
        }
    }
    else
    {
        
        echo "<script>alert('Player Already Selected');</script>";
        echo "<script>window.location.href='addplayer.php';</script>";
    }

?>