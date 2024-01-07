<!DOCTYPE html>
<html>
<head>
<title>Exemple n°14</title>
</head>
<body>
<form action="exemple14.php" method="post" enctype="multipart/form-data">
  Select image to upload: <br />
  <input type="file" name="fileToUpload" id="fileToUpload"> <br />
  <input type="submit" value="Upload Image" name="submit">
</form>
 <br />
<?php
if (isset($_FILES) && count($_FILES) > 0) {
	$target_file = basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	  if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".<br />";
		$uploadOk = 1;
	  } else {
		echo "File is not an image.<br />";
		$uploadOk = 0;
	  }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.<br />";
	  $uploadOk = 0;
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	  echo "Sorry, your file is too large.<br />";
	  $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br />";
	  $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		echo "move_uploaded_file ( ".$_FILES["fileToUpload"]["tmp_name"].",   $target_file  )<br />";
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br />";
	  } else {
		echo "Sorry, there was an error uploading your file.<br />";
	  }
	}
}
?>
</body>
</html>
