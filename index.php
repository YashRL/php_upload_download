<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Image|| Upload || Download || MYSQL database </title>
</head>

<body>
	
	<div class="container">
		<?php if (isset($image_success)) {
			echo '<div class="success">Image Uploaded successfully</div>';
		} ?>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<label>Image </label>
			<input type="file" name="image" class="form-control" required>
			<label>Title</label>
			<input type="text" name="title" class="form-control">
			<br><br>
			<button name="form_submit" class="btn-primary"> Upload</button>
		</form>
	</div>
	<div class="container_display">
		<table cellpadding="10" border="solid">
			<tr>
				<th> Image</th>
				<th>Title</th>
				<th>Download</th>
			</tr>
			<?php $res = mysqli_query($con, "SELECT* from imgupload_tb ORDER by img_id DESC");
			while ($row = mysqli_fetch_array($res)) {
				echo '<tr> 
                  <td><img src="upload/' . $row['img_url'] . '" height="200"></td> 
                  <td>' . $row['img_nm'] . '</td> 
                  <td><a href="download.php?id='.$row['img_id'].'"><button class="btn-primary download_btn">Download</button></a>
               
                  </td> 


				</tr>';
			} ?>

		</table>
	</div>

</body>

</html>