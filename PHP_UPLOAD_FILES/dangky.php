<?php
require "72phep.php";
if(isset($_POST["submit"])){
	$Mangtype = array("png", "PNG", "gif","GIF", "jpg","JPG", "jpeg");
	
	$mangFile = $_FILES["avatar"];
	// print_r ($mangFile);
	
	for($i=0; $i<count($mangFile["name"]); $i++){
		/////////////////					$_FILES["avatar"]["name"]
		$target_file = "upload/" . basename($mangFile["name"][$i]);
		$uploadOk = 0;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		// check fake			$_FILES["avatar"]["tmp_name"]
		$check = getimagesize($mangFile["tmp_name"][$i]);
		if($check != false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
		
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		
		// Check file size  $_FILES["avatar"]["size"]
		if ($mangFile["size"][$i] > 100*1024*1024) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		} 
		
		// Allow certain file formats
		if( !in_array($imageFileType, $Mangtype) ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		} else {
			if (move_uploaded_file($mangFile["tmp_name"][$i], $target_file)) {
				echo "The file ". basename( $mangFile["name"][$i]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}	
		/////////////////
	}
	
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#btnThemFile{width:70px; border:solid 1px green; color:green; padding:10px; text-align:center}
</style>
<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
<script>
$(document).ready(function(){
	$("#btnThemFile").click(function(){
		$("#chonFile").append("<br/><input name='avatar[]' type='file' />");	
	});	
});
</script>
</head>

<body>

<form action="" method="post" enctype="multipart/form-data">

<div id="btnThemFile">Thêm file</div>

<div id="chonFile">
	<input name='avatar[]' type='file' />
</div>

<input name="submit" type="submit" value="Đăng kí" />

</form>

</body>
</html>