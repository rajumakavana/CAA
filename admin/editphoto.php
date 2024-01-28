<?php
     include '../connection.php';
	    if(ISSET($_POST['edit'])){
		$p_id = $_POST['user_id'];
		$image_name = $_FILES['photo']['name'];
		$p_name = $_POST['namep'];
		
        $img_path = "photo/" . $image_name;
        move_uploaded_file($_FILES['photo']['tmp_name'], $img_path);

        $sq="UPDATE `photos` SET `name`='$p_name',`photo`='$img_path' WHERE `id`='$p_id'";
        mysqli_query($con, $sq);
		header("location: photo.php");
				
	}
?>