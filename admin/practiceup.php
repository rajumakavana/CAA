<?php
     include '../connection.php';
	    if(ISSET($_POST['dtime'])){
		$c_id = $_POST['user_id'];      
        $time=$_POST['new_time'];
        $sq="UPDATE `finalclist` SET `practice_time`='$time' WHERE id ='$c_id';";
        mysqli_query($con, $sq);
		header("location:coachpractice.php");
				
	}
?>