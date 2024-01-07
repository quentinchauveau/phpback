<!DOCTYPE html>
<html>
<head>
<title>Exemple n°16</title>
</head>
<body>
<form action="exemple16.php" method="post" enctype="multipart/form-data">
  Select image to upload: <br />
  <input type="file" name="fileToUpload" id="fileToUpload"> <br />
  <input type="submit" value="Upload Image" name="submit">
</form>
 <br />
<?php
class FileUpload {
	const IMAGE_SIZE_MAX = 500000;
	const IMAGE_FILE_FORMATS = ["png", "jpg", "jpeg", "gif"];
	
	var $target_file;
	var $file;
	var $file_size;
	var $file_format;
	
	function __construct($file_upload) {
		$this->target_file = basename($file_upload["name"]);
		$this->file = $file_upload["tmp_name"];
		$this->file_size = $file_upload["size"];
		$this->file_format = strtolower(pathinfo($this->target_file,PATHINFO_EXTENSION));
	}
	
	function checkFileImage() {
		return getimagesize($this->file);
	}

	function checkFileAlreadyExist() {
		return file_exists($this->target_file);
	}

	function checkFileSize() {
		return $this->file_size > self::IMAGE_SIZE_MAX;
	}

	function checkFileFormat() {
		return in_array($this->file_format, self::IMAGE_FILE_FORMATS);
	}

	function uploadFile() {
		return move_uploaded_file($this->file, $this->target_file);
	}
}

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
