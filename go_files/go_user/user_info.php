<html>
<head><title>user info</title>
</head>
<body style="background-image:url('../images/finish_back.png');padding:0px;margin:0px;;">
<div style="aborder:solid black 2px;height:60px;width:100%;background-image:url('../images/top_background.jpg');">
<img src='../images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:10px;margin-top:2px;'>
<div style="position:absolute;color:blue;margin-top:5px;margin-left:79px;font-size:40px;">Go Online</div>


<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	if(!isset($_SESSION['profile'])){
	header("location:login.php");
}}else{
	?>
<div style="position:fixed;margin-left:1110px;margin-top:600px;color:#C71585;font-size:20px;">
	<div>User session-<?=$_SESSION['sess_user'];?>
</div></div>
<?php
function getuserdata($id)
{
	$array=array();
	$conn=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($conn,"SELECT * FROM `users` WHERE id='".$id."'");
while($row=mysqli_fetch_assoc($sql))
{
	$array['id']=$row['id'];
	$array['email']=$row['email'];
	$array['name']=$row['name'];
	$array['gender']=$row['gender'];
	$array['birthday_date']=$row['birthday_date'];
	
}
return $array;	
}
function getid($email)
{
	$conn=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($conn,"SELECT `id` FROM `users` WHERE email='".$email."'");
while($row=mysqli_fetch_assoc($sql))
{
	return $row['id'];
}
	}
?>


<?php 
if(isset($_SESSION['sess_user']))
{
	$userdata=getuserdata(getid($_SESSION['sess_user']))
	?>
	<div style="background-color:#aaf9ff;position:absolute;border-left:solid white 2px;border-right:solid white 2px;width:800px;height:590px;margin-left:300px;margin-top:60px;">
	<div style="text-align:center;margin-top:10px;font-size:25px;color:purple;">User Information</div>
	<div style="poasition:absolute;color:magneta;margin-top:40px;margin-left:130px;font-size:33px;">
	<div style="margin-left:190px;margin-top:120px;color:blue;position:absolute;">Name:
	<div style="position:bsolute;color:red;margin-left:100px;margin-top:-40px;">
	<?php echo $userdata['name'] ?>
	</div></div>
	
	<div style="margin-left:190px;margin-top:160px;color:blue;position:absolute;">Gender:
	<div style="position:absolute;color:red;margin-left:120px;margin-top:-40px;">
	<?php echo $userdata['gender'] ?>
	</div></div>
	<div style="margin-left:190px;margin-top:200px;color:blue;position:absolute;">Birthday:
	<div style="position:bsolute;color:red;margin-left:130px;margin-top:-40px;">
	<?php echo $userdata['birthday_date'] ?>
	</div></div>
	<div style="margin-left:190px;margin-top:240px;color:blue;position:absolute;">Email:
	<div style="position:absolute;color:red;margin-left:100px;margin-top:-30px;font-size:20px;">
	<?php echo $userdata['email'] ?>
	</div></div>
	</div></div>
	<?php

}}
?>
<!--for profile pic  start-->
<?php
function getuserinfo($id)
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
function getinfo($email)
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
	$userdata=getuserinfo(getinfo($_SESSION['profile']))
	?>
<?php echo "<div style='border:inset white 5px;position:absolute;width:240px;height:260px;margin-left:340px;margin-top:220px;border-radius:20px;'>
<img src='../uploads/".$userdata['profile_pic']."'style='position:absolute;width:200px;height:220px;margin-left:20px;margin-top:20px;border-radius:5px;' >
</div>"?>
<?php
}?>

<!--end for profile pic  -->
<div style="position:absolute;margin-left:900px;margin-top:19px;color:white;font-size:16px;">
<a href="../home.php"style="text-decoration:none;color:white;padding:2px;margin-right:25px;">
<?php echo "<img src='../uploads/".$userdata['profile_pic']."'style='height:30px;width:30px;border-radius:20px;position:absolute;margin-left:-34px;margin-top:-4px;'>";?>
<?php echo $userdata['name']?></a>
<a href="../public.php"style="text-decoration:none;color:white;padding:2px;">
<img src="../images/share2.png"style="position:absolute;height:30;width:30;margin-left:auto;margin-top:-6px;border-radius:30px;opacity:0.9"></a>
<a href="../message.php"><img src="../images/sms.png"style="position:absolute;height:40;width:40;margin-left:40px;;margin-top:-11px;border-radius:30px;opacity:0.9"></a>
<a href="../friend.php"><img src="../images/addfriend1.png"style="position:absolute;height:30;width:30;margin-left:85px;;margin-top:-6px;border-radius:30px;opacity:0.9"></a>
<div class="button"><a href="#"><img src="../images/aero3.png"style="height:20px;width:20px;"></a>
<div class="drop">
<style>
.button{
	color:red;
	position:reletive;
	margin-top:-20px;
	margin-left:240px;
	
}
.drop{
	display:none;
	position:fixed;
	background-color:grey;
	height:auto;
	margin-left:-20px;
	line-height:30px;
	padding:5px 5px 5px 5px;
}
.button:hover .drop{
	display:block;
}
</style>
<a href="user_profile.php"style="text-decoration:none;color:white;">|User profile|</a>
</br><a href="user_info.php"style="text-decoration:none;color:white;">|User info|</a>
</br><a href="../logout.php"style="text-decoration:none;color:white;">|Logout|</a>
</div>
</div>
</div>