<?php
        include '../connection.php';
	    if(ISSET($_POST['dteam']))
        {
		$c_id = $_POST['user_id'];      
        $team=$_POST['new_team'];
        $sq="UPDATE `finalclist` SET `team_name`='$team' WHERE id ='$c_id';";
        mysqli_query($con, $sq);
		header("location:coachteam.php");		
	}
?>