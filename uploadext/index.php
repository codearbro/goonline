<?php
session_start();
include_once 'dbh.php';
?>
<!doctype html>
<html>
<head><title></title>
</head>
<body>
<!--
/*$sql="SELECT * FROM images ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
   while($row=mysqli_fetch_assoc($result)){
	 $id=$row['id'];
*/
//$image=['file'];
//$sqlimg="SELECT * FROM `images` WHERE image='$image'";
//$resultimg=mysqli_query($conn,$sqlimg);
//while($rowimg=mysqli_fetch_assoc($resultimg)){
	echo "<div>";
//	if($rowimg['text']==0)
{
		echo "<img src='uploads/profile".$id."'>";
//	}else{
		echo "img src='upload/250343.jpg'>";
	}
echo "</div>";
	//} 	 
   //	}

//}
//if(isset($_SESSION['id'])){
	//if(($_SESSION['id']==0)){
		echo "you are logged in as a user #1";
	//}
!!-->	
<?php
echo "<form action='upload.php' method='POST'enctype='multipart/form-data'>
<input type='file'name='file'>
<button type='submit'name='submit'>upload</button>
<button type='submit'name='submit2'>display</button>
</form>";
//else{
	
//}
?>
<p>log in as user</p>
<form action="login.php" method="post">
<button type="submit"name="submitlogin">login</button>
</form>
<p>log in as user</p>
<form action="logout.php" method="post">
<button type="submit"name="submitlogout">loguot</button>
</form>
</body>
</html> 