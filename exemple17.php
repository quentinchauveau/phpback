<?php require_once 'file_upload.php';  ?>
<!DOCTYPE html>
<html>
<head>
<title>Exemple n°17</title>
</head>
<body>
<form action="exemple17.php" method="post" enctype="multipart/form-data">
  Select image to upload: <br />
  <input type="file" name="fileToUpload" id="fileToUpload"> <br />
  <input type="submit" value="Upload Image" name="submit">
</form>
 <br />
<?php
if (isset($_FILES) && count($_FILES) > 0) {
	$uploader = new FileUpload($_FILES["fileToUpload"]);

	// Check if image file is a actual image or fake image
	if (!$uploader->checkFileImage()) {
		echo "File is not an image.<br />";
		return;
	}
	
	// Check if file already exists
	if ($uploader->checkFileAlreadyExist()) {
		echo "Sorry, file already exists.<br />";
		return;
	}
	
	// Check file size
	if ($uploader->checkFileSize()) {
		echo "Sorry, your file is too large.<br />";
		return;
	}
	
	// Allow certain file formats
	if (!$uploader->checkFileFormat()) {
		echo "Sorry, only ".implode(", ",FileUpload::IMAGE_FILE_FORMATS)." files are allowed.<br />";
		return;
	}
	
	// try to upload file
	if ($uploader->uploadFile()) {
		echo "The file ". htmlspecialchars($uploader->target_file). " has been uploaded.<br />";
	} else {
		echo "Sorry, there was an error uploading your file.<br />";
	}
}
?>
</body>
</html>
