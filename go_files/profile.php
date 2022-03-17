<html>
<head>
<title>
Go online profile setup
</title>
</head>
<body style="background-image:url('images/profile_background1.jpg');margin:0px;padding:0px;">
<div style="height:70px;width:100%;background-image:url('images/top_background.jpg');">
<img src="images/gonline_logo1.png"style="height:50px;height:50px;position:absolute;margin-left:200px;">
<div style="color:blue;font-size:40px;margin-left:300px;">GO ONLINE</div></div>
<div style="background-color:#E0FFFF;height:120%;width:700px;margin-left:350px;">
<div style="color:darkred;font-weight:bold;text-align:center;font-size:25px;margin-top:10px;padding-top:5px;">Complete your profile</div>
<div style="position:absolute;width:691px;height:150px;background-color:#E0E0E0;border-radius:8px;margin-left:4px; margin-right:4px; margin-top:30px;">
	<div style="position:absolute;margin-left:5px;color:#3333FF;margin-top:2px;font-size:20px;">Upload profile picture</div>
<form method="post" enctype="multipart/form-data">
<input type="file"name="profile_pic"style="width:300px;margin-left:10px;margin-top:30px;height:30px;">
<input type="submit"name="preview"value="preview">
</form>
<?php
if(isset($_POST['preview'])){
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
			//echo $fileNameNew;
			//header("location:profile.php?upload sucess");
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
 <form method="post"action="profile_config.php">
	
    <input type="text"value="<?php echo $fileName;?>"name="profile_pic"style="width:0px;margin-left:0px;margin-top:30px;height:0px;">

	
</div>


<div style="position:absolute;height:80px;background-color:#E0E0E0;margin-top:200px;width:690px;margin-left:5px;border-radius:8px;">

<div style="position:absolute;margin-left:5px;color:#3333FF;margin-top:0px;font-size:20px;">name</div>
<div style="margin-top:30px;margin-left:10px;">
<input type="text"name="name"placeholder="full name"style="width:200px;height:25px;">
</div>
</div>
<div style="position:absolute;height:80px;background-color:#E0E0E0;margin-top:300px;width:690px;margin-left:5px;border-radius:8px;">

<div style="position:absolute;margin-left:5px;color:#3333FF;margin-top:0px;font-size:20px;">email</div>
<div style="margin-top:30px;margin-left:10px;">
<input type="text"name="email"placeholder="email"style="width:200px;height:25px;">
</div>
</div>
<div style="position:absolute;height:80px;background-color:#E0E0E0;margin-top:400px;width:690px;margin-left:5px;border-radius:8px;">

<div style="position:absolute;margin-left:5px;color:#3333FF;margin-top:2px;font-size:20px;">enter your region</div>
<div style="margin-top:30px;margin-left:10px;">
<input type="text"name="city"placeholder="city"style="width:180px;height:25px;">
<input type="text"name="state"placeholder="state"style="width:180px;height:25px;">
<input type="text"name="country"placeholder="country"style="width:180px;height:25px;">
</div>

</div>
<div style="position:absolute;height:80px;background-color:#E0E0E0;margin-top:500px;width:690px;margin-left:5px;border-radius:8px;">

<div style="position:absolute;margin-left:5px;color:#3333FF;margin-top:0px;font-size:20px;">Your Bio</div>
<div style="margin-top:30px;margin-left:10px;">
<input type="text"name="bio"placeholder="bio"style="width:400px;height:25px;">
</div>

</div>
<div style="position:absolute;height:80px;background-color:#E0E0E0;margin-top:600px;width:690px;margin-left:5px;border-radius:8px;">

<div style="position:absolute;margin-left:5px;color:#3333FF;margin-top:0px;font-size:20px;">Mobile No.</div>
<div style="margin-top:30px;margin-left:10px;">
<input type="text"name="mobile_no"placeholder="mobile"style="width:200px;height:25px;">
</div>

</div>
<div style="margin-left:300px;margin-top:690px;position:absolute;">
<input type="submit" value="NEXT"name="upload"style="font-size:20px;width:80px;height:30px;color:white;background-color:green;">
</div>
</form></div>
</body>
</html>
