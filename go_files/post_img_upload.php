<?php
if(isset($_POST["postimage"])){
	$file=$_FILES['imgstory'];
	$fileName=$_FILES['imgstory']['name'];
	$fileTmpName=$_FILES['imgstory']['tmp_name'];
	$fileSize=$_FILES['imgstory']['size'];
	$fileError=$_FILES['imgstory']['error'];
	$fileType=$_FILES['imgstory']['type'];
	
	
	
	$fileExt=explode('.',$fileName);
	$fileActualExt=strtolower(end($fileExt));
	
	$allowed=array('jpg','jpeg','png','pdf');
	if(in_array($fileActualExt,$allowed)){
		if($fileError===0){
			if($fileSize<1000000){
				$fileNameNew=$fileName.".".$fileActualExt;  
				$fileDestination='post_img_upload/'.$fileName;
			move_uploaded_file($fileTmpName,$fileDestination);
			header("location:home.php?upload sucess");
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