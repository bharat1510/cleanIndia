<?php
	include('login/dbconnect.php');
	if (isset($_POST['submit'])) {
		
	$usr = $_GET['usr'];
	$lat = $_GET['lat'];
	$long = $_GET['long'];

	$error = "";
	$fileName=$_FILES["file"]["name"];
	$fileSize=$_FILES["file"]["size"]/1024;
	$fileType=$_FILES["file"]["type"];
	$fileTmpName=$_FILES["file"]["tmp_name"];  

	if (isset($_FILES["file"])){
		$allowedExts = array("jpg", "jpeg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
	 
		if ($_FILES["file"]["error"] > 0) {
			$error .= "Error opening the file<br />";
		}
		if ( $_FILES["file"]["type"] != "image/gif" &&
				$_FILES["file"]["type"] != "image/jpeg" &&
				$_FILES["file"]["type"] != "image/png" &&
				$_FILES["file"]["type"] != "image/jpg") {	
			$error .= "Mime type not allowed<br />";
		}
		if (!in_array($extension, $allowedExts)) {
			$error .= "Extension not allowed<br />";
		}
		if ($_FILES["file"]["size"] > 5242880) {
			$error .= "File size shoud be less than 10 MB<br />";
		}
	 
		if ($error == "") {
			$random=rand(1111,9999);
			$newFileName=$random.$fileName;
			$uploadPath="upload/".$newFileName;
			if(move_uploaded_file($fileTmpName,$uploadPath)){
				#echo "<br>Successful<br>"; 
				#echo "File Name :".$newFileName;
				#echo "<br>";
				#echo "File Size :".$fileSize." kb <br>"; 
				#echo "File Type :".$fileType;
				#echo "<br>";
				
				$query="INSERT INTO upload (Username,Filename,Latitude,Longitude) VALUES('$usr','$newFileName','$lat','$long')";
				mysqli_query($conn,$query);
				$true = "true";
				header("location:index.php?username=$usr&sent=$true");
			}
			else
				echo $error;
			}
			else {
			  echo $error;
			}
		}
		}
?>