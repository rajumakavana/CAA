<?php
    session_start();
    include '../connection.php';
    $id = $_GET['id'];
    $sq="UPDATE `finalplist` SET `coach_id`=0 WHERE `id`='$id'";
    $qy=mysqli_query($con,$sq);

    if ($qy) {
        echo "<script>alert('Player Delete Sucessfully');</script>";
        echo "<script>window.location.href='removep.php';</script>";
    }

  

?>