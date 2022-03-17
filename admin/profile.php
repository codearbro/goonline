<html>
<head><title>profiles</title>
</head>
<body style="background-image:url('../go_files/images/finish_back.png');background-attachment:fixed;padding:0px;margin:0px;;">
<div style="aborder:solid black 2px;height:60px;width:100%;background-image:url('../images/top_background.jpg');">
<img src='../images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:10px;margin-top:2px;'>
<div style="position:absolute;color:blue;margin-top:5px;margin-left:79px;font-size:40px;">Go Online</div>
<div style="position:absolute;margin-left:900px;margin-top:19px;font-size:16px;">
<a href="users.php"style="text-decoration:none;color:white;">|Users|</a>
<a href="logout.php"style="text-decoration:none;color:white;">|Logout|</a>
</div>
<div style="background-color:#aaf9ff;position:absolute;border-left:solid white 2px;border-right:solid white 2px;width:800px;height:auto;margin-left:300px;margin-top:60px;">

<?php
$conn=mysqli_connect("localhost","root","","goline");
$email=$_GET['email'];
$sql=mysqli_query($conn,"SELECT * FROM `profile` WHERE email='$email'");

while($row=mysqli_fetch_assoc($sql))
	{
		$email=$row['email'];
	
	if($email==$email)
	{

		session_start();
		$_SESSION['sess_user']=$email;
		$_SESSION['profile']=$email;	
	?>
<div style="position:absolute;margin-top:50px;margin-left:150px;">
<img src="../go_files/uploads/<?php echo $row['profile_pic'];?>"style="height:160px;width:160px;"></div>
<div style="margin-top:50px;margin-left:350px;font-weight:bold;font-size:30px;border-bottom:solid grey 2px;"><?php echo $row['name'];?></div>
<div style="margin-top:10px;margin-left:350px;">city:-<?php echo $row['city'];?></div>
<div style="margin-top:10px;margin-left:350px;">state:-<?php echo $row['state'];?></div>
<div style="margin-top:10px;margin-left:350px;">country:-<?php echo $row['country'];?></div>
<div style="margin-top:10px;margin-bottom:40px;margin-left:350px;">mobile:-<?php echo $row['mobile_no'];?></div>
<div style="margin-left:350px;margin-bottom:10px;"><a href="delete_profile.php">Delete profile</a></div>

<?php
	}}
?>
<?php
function getuserdata($id)
{
	$array=array();
	$conn=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($conn,"SELECT * FROM `profile` WHERE id='".$id."'");
while($row=mysqli_fetch_assoc($sql))
{
	$array['id']=$row['id'];
	$array['email']=$row['email'];
	$array['name']=$row['name'];
	$array['profile_pic']=$row['profile_pic'];
	$array['city']=$row['city'];
	$array['state']=$row['state'];
	$array['country']=$row['country'];
	$array['bio']=$row['bio'];
	$array['mobile_no']=$row['mobile_no'];
	
}
return $array;	
}
function getid($email)
{
	$conn=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($conn,"SELECT `id` FROM `profile` WHERE email='".$email."'");
while($row=mysqli_fetch_assoc($sql))
{
	return $row['id'];
}
	}
?>
<?php 
if(isset($_SESSION['profile']))
{
	$userdata=getuserdata(getid($_SESSION['profile']))
?>
<?php
}?>
<!---for postss----->
<?php
	$db=mysqli_connect("localhost","root","","goline");
	$sql="SELECT * FROM `user_post`";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result)){
			if($userdata['name']==$row['name']){
			ECHO "<div style='margin-left:120px;color:grey;'>".$row['name']." , shared his story</div>";
			echo "<div style='background-color:snow;padding:2px 2px 2px 2px;width:60%;height:auto;margin-left:140px;margin-top:10px;color:#ff288f;'>
			".$row['story']."";
			if($row['post_image']!=""){
			echo "<img src='../go_files/post_img_upload/".$row['post_image']."'style='background-color:snow;padding:2px 2px 2px 2px;width:60%;height:auto;margin-left:140px;margin-top:10px;color:#ff288f;'>";
			}?> 
		</br><a href="delete_post.php?id=<?php echo $row['id']?>"style='text-decoration:none;color:white;background-color:grey;'>delete this post</a><?php
		echo "</br></div>";
		}}
		
	}
	?>
	
</div>
</body>
</html>
<?php

?>