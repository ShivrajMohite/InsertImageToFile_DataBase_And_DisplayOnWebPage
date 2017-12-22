<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "data_image";
$name = $_POST['name'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database );

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

$UploadedFileName=$_FILES['fileToUpload']['name'];
if($UploadedFileName!='')
{
  $upload_directory = "images1"; //This is the folder which you created just now
  $TargetPath=time().$UploadedFileName;
  $filename_path = $upload_directory."/".$TargetPath;
   if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $filename_path )){    
     $QueryInsertFile="INSERT INTO img (Name , Images) VALUES ('$name','$filename_path')"; 
     $result =  mysqli_query($conn,$QueryInsertFile); 
     if($result){
     		        echo "<script>alert('File Uploaded Successfully');</script>";
     		        echo "<script>window.location = 'http://localhost/image_data/index.php'</script>";
     		        // header("Location : index.php");
					
     		        
     }                  
   }
}
?>
<!--
	$title       	=	$_POST['title'];
    $file_name		=	$_FILES["image"]["name"];
	$temp_name		=	$_FILES["image"]["tmp_name"];

    $imgtype		=	$_FILES["image"]["type"];
    $ext			= 	GetImageExtension($imgtype);

    $imagename		=	$title.$ext;

    $target_path 	= "images/thumb/".$imagename;
	move_uploaded_file($temp_name, $target_path); 
	
	$sql =  mysqli_query($con,"INSERT INTO images (file_name,title,uploaded_on,status) VALUES ('".$imagename."','".$title."',now(),'1')");
		if ($sql) 
		{
	        echo "<script>alert('आपला फोटो सेव झाला आहे');</script>";
		}
		else
		{
			 die(mysqli_error());
		}
}
?>