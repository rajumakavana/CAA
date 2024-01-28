<?php
        include '../connection.php';
	    if(ISSET($_POST['ptime']))
        {
		$p_id = $_POST['user_id'];      
        $time=$_POST['new_time'];
        $sq="UPDATE `finalplist` SET `practice_time`='$time' WHERE id ='$p_id';";
        mysqli_query($con, $sq);
		header("location:playerpractice.php");
				
	}
?>