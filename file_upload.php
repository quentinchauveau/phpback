<?php
class FileUpload {
	const IMAGE_SIZE_MAX = 500000;
	const IMAGE_FILE_FORMATS = ["png", "jpg", "jpeg", "gif"];
	
	var $target_file;
	var $file;
	var $file_size;
	var $file_format;
	
	function __construct($file_uplad) {
		$this->target_file = basename($file_uplad["name"]);
		$this->file = $file_uplad["tmp_name"];
		$this->file_size = $file_uplad["size"];
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


?>