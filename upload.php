<?php

include("connection.php");

	if (isset($_POST['form_submit'])) {
		$title = $_POST['title'];
		$folder = "upload/";
		$image_file = $_FILES['image']['name'];
		$file = $_FILES['image']['tmp_name'];
		$path = $folder . $image_file;
		$target_file = $folder . basename($image_file);
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		//Allow only JPG, JPEG, PNG & GIF etc formats
		if (
			$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif"
		) {
			$error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
		}
		//Set image upload size 
		// if ($_FILES["image"]["size"] > 500000) {
		// 	$error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
		// }
		if (!isset($error)) {
			move_uploaded_file($file, $target_file);
			$result = mysqli_query($con, "INSERT INTO imgupload_tb(img_url,img_nm) VALUES('$image_file','$title')");
			if ($result) {
				$image_success = 1;
			} else {
				echo 'Something went wrong';
			}
		}
        echo "<script>window.close();</script>";
	}


	if (isset($error)) {

		foreach ($error as $error) {
			echo '<div class="message">' . $error . '</div><br>';
		}
	}
	?>