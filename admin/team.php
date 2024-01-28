<?php
        include '../connection.php';
	    if(ISSET($_POST['ptime']))
        {
		$p_id = $_POST['user_id'];      
        $team=$_POST['new_team'];
        $sq="UPDATE `finalplist` SET `team_name`='$team' WHERE id ='$p_id';";
        mysqli_query($con, $sq);
		header("location:pteam.php");
				
	}
?>