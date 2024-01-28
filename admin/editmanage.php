<?php
    include '../connection.php';
	    if(ISSET($_POST['edit'])){
		$m_id = $_POST['user_id'];
		$image_name = $_FILES['photo']['name'];
		$fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $role=$_POST['role'];
		
        $img_path = "photo/" . $image_name;
        move_uploaded_file($_FILES['photo']['tmp_name'], $img_path);

        $sq="UPDATE `management` SET `first_name`='$fname',`last_name`='$lname',`role`='$role',`photo`='$img_path' WHERE `id`='$m_id'";
        mysqli_query($con, $sq);
		header("location: managementad.php");
				
	}
?>