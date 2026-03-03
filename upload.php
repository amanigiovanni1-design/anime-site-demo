<?php
if (isset($_POST['submit']){
	$file = $_FILES['anime_file'];
	$title = $_POST['anime_title'];
	
	//Define where to save the file
	$uploadDir = "uploads/";
	$fileName = basename($file["name"]);
	$targetPath = $uploadDir . $fileName;
	
	//Move filr from your temporary storage to your main server
if (move_uploaded_file($file["tmp_name"], $targetPath)){
	echo "Succesfully posted:" . $title;
	// in a real site, you would save the $targetPath and $title to a database here.
}
 else{
	 echo "upload failed.";
 }
}
?>