<?php 
include("connection.php");

$id =  $_REQUEST['id'];
$stmt=mysqli_query($con,"SELECT * from imgupload_tb WHERE img_id = $id");
$count=mysqli_num_rows($stmt);


if($count==1){

$row=mysqli_fetch_array($stmt);
$image=$row['img_url'];
$file='upload/'.$image;

if (headers_sent()) {
    echo 'HTTP header already sent';
} 

else {
        ob_end_clean();
        header("Content-Type: application/image");
        header("Content-Disposition: attachment; filename=\"".basename($file)."\"");
        readfile($file);
        exit;  
}

echo "<script>window.close();</script>";
}

// else 
// {
//     echo 'File not found '; 
// }
?>