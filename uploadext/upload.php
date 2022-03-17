<?php
if(isset($_POST['submit'])){
	$file=$_FILES['file'];
	//$db=mysqli_connect("localhost","root","","goline");
	//$sql="INSERT INTO `images`(image)VALUES('$file')";
	//if(mysqli_query($db,$sql));
	//{
	
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	
	
	
	$fileExt=explode('.',$fileName);
	$fileActualExt=strtolower(end($fileExt));
	
	$allowed=array('jpg','jpeg','png','pdf');
	if(in_array($fileActualExt,$allowed)){
		if($fileError===0){
			if($fileSize<1000000){
				$fileNameNew=$fileName.".".$fileActualExt;  
				$fileDestination='uploads/'.$fileName;
			move_uploaded_file($fileTmpName,$fileDestination);
			header("location:index.php?upload sucess");
			}else{
				echo "your file is too big";
			}
		}else{
			echo "there was an error uploading your file";
			}
	}else{
		echo "you can not upload files of this type";
	}
}//}
?><?php
if(isset($_POST['submit2'])){
$db=mysqli_connect("localhost","root","","goline");
$sql=("SELECT * FROM images");
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
	 $id=$row['id'];
	 echo "<div id='img'>";
	 echo "<img src='uploads/'".$row['image']."width='100'>";
     echo "</div>";
}
}
?>
