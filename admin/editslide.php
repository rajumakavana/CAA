<?php
     $include '../connection.php';
	    if(ISSET($_POST['edit'])){
		$s_id = $_POST['user_id'];
		$image_name = $_FILES['photo']['name'];
		$name=$_POST['name'];
        $disc=$_POST['disc'];
        		
        $img_path = "photo/" . $image_name;
        move_uploaded_file($_FILES['photo']['tmp_name'], $img_path);

        $sq="UPDATE `slide` SET `name`='$name',`description`='$disc',`photo`='$img_path' WHERE `id`='$s_id'";
        mysqli_query($con, $sq);
		header("location: slide.php");
				
	}
?>