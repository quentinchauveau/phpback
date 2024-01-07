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

const IMAGE_SIZE_MAX = 500000;
const IMAGE_FILE_FORMATS = ["png", "jpg", "jpeg", "gif"];
function checkFileImage($file) {
	return getimagesize($file);
}

function checkFileAlreadyExist($file) {
	return file_exists($file);
}

function checkFileSize($file_size) {
	return $file_size > IMAGE_SIZE_MAX;
}

function checkFileFormat($file_type) {
	return in_array($file_type, IMAGE_FILE_FORMATS);
}

function uploadFile($file, $target) {
	return move_uploaded_file($file, $target);
}

if (isset($_FILES) && count($_FILES) > 0) {
	$target_file = basename($_FILES["fileToUpload"]["name"]);
	$file = $_FILES["fileToUpload"]["tmp_name"];
	$file_size = $_FILES["fileToUpload"]["size"];
	$file_format = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if (!checkFileImage($file)) {
		echo "File is not an image.<br />";
		return;
	}
	
	// Check if file already exists
	if (checkFileAlreadyExist($target_file)) {
		echo "Sorry, file already exists.<br />";
		return;
	}
	
	// Check file size
	if (checkFileSize($file_size)) {
		echo "Sorry, your file is too large.<br />";
		return;
	}
	
	// Allow certain file formats
	if (!checkFileFormat($file_format)) {
		echo "Sorry, only ".implode(", ",IMAGE_FILE_FORMATS)." files are allowed.<br />";
		return;
	}
	
	// try to upload file
	if (uploadFile($file, $target_file)) {
		echo "The file ". htmlspecialchars($target_file). " has been uploaded.<br />";
	} else {
		echo "Sorry, there was an error uploading your file.<br />";
	}
}
?>
</body>
</html>
