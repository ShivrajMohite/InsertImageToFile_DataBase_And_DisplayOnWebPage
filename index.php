
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> Name and Image</title>

</head>
<body>
	<div class="container">
		<!-- <table class="table table-straped table-bordered table-hover" id="mydata">
		 <form method="post" enctype="multipart/form-data">
       <!-Select image to upload: <br> -->
      <!--   <label >Name</label>
        <input id="name" type="text" class="form-control" name="name" placeholder="Insert Name"><br>
        Select image to upload: <br>
        <input type="file" name="image"/><br>
        <input type="submit" name="submit" value="UPLOAD"/>
    	</form>
		</table>
 --> 

 		<form action="upload.php" method="post" enctype="multipart/form-data">
 			<label>Name :</label>
 			<input type="text" name="name" placeholder="Insert Name">
    		Select image to upload:
    		<input type="file" name="fileToUpload" id="fileToUpload" multiple="multiple">
    		<input type="submit" value="Upload Image" name="submit">
		</form>
		
	</div>

</body>
</html>