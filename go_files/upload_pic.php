<?php
if(isset($_POST["preview"])){
	$file=$_FILES['profile_pic'];
	$fileName=$_FILES['profile_pic']['name'];
	$fileTmpName=$_FILES['profile_pic']['tmp_name'];
	$fileSize=$_FILES['profile_pic']['size'];
	$fileError=$_FILES['profile_pic']['error'];
	$fileType=$_FILES['profile_pic']['type'];
	
	
	
	$fileExt=explode('.',$fileName);
	$fileActualExt=strtolower(end($fileExt));
	
	$allowed=array('jpg','jpeg','png','pdf');
	if(in_array($fileActualExt,$allowed)){
		if($fileError===0){
			if($fileSize<1000000){
				$fileNameNew=$fileName.".".$fileActualExt;  
				$fileDestination='uploads/'.$fileName;
			move_uploaded_file($fileTmpName,$fileDestination);
			header("location:profile.php?upload sucess");
			}else{
				echo "your file is too big";
			}
		}else{
			echo "there was an error uploading your file";
			}
	}else{
		echo "you can not upload files of this type";
	}
}
?>
